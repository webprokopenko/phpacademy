<?php

require_once "init.php";

// TODO: создать функцию getMainMenu и вынести туда код ниже

$sql = "select * from pages order by priority";
$result = mysqli_query($link, $sql);

$pages = array();
while($row = mysqli_fetch_assoc($result)){
    $pages[] = $row;
}

//echo "<pre>";
//print_r($pages);

//mysqli_close($link);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Site</title>
</head>
<body>

<?php if(!empty($pages)) {
    foreach ($pages as $page) {
?>
    <a href="/?page=<?=$page['alias']?>"><?=$page['title']?></a>
<?php
    }
}
?>

<br><br>

<?php

// TODO: создать функцию getPageByAlias и вынести туда код ниже

if(isset($_GET['page'])){
    $alias = strtolower($_GET['page']);
} else {
    $alias = 'home';
}

$alias = mysqli_escape_string($link, $alias);
$sql = "select p.*, DATE_FORMAT(p.date_add, '%d.%m.%Y %H:%i') as formatted_date from pages p where alias = '{$alias}'";
$result = mysqli_query($link, $sql);
$page_data = mysqli_fetch_assoc($result);

//echo "<pre>";
//print_r($page_data);

?>

<h1><?=$page_data['title']?></h1>

<?=$page_data['content']?>

<br><br>Дата: <?=$page_data['formatted_date']?>

<br>
<br>

&copy; 2016 My Site

</body>
</html>
