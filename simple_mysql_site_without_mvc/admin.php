<?php

// TODO: вынести код по получению списка страниц и данных одной страницы в отдельные функции в файл lib.php, убрать дублирование кода

session_start();
if( !isset($_SESSION['login']) ){
    header("Location: login.php");
} else {
    if( $_SESSION['role'] != 'admin' ){
        die("Вы не имеете права на доступ к этой странице");
    }
}

require_once "init.php";

if ($_POST){
    $id = (int)$_POST['id'];
    $content = mysqli_escape_string($link, $_POST['content']);
    $title = mysqli_escape_string($link, $_POST['title']);

    $sql = "
      update pages set title = '{$title}', content = '{$content}'
        where id = {$id} limit 1";

    mysqli_query($link, $sql);
}

$sql = "select * from pages order by priority";
$result = mysqli_query($link, $sql);

$pages = array();
while($row = mysqli_fetch_assoc($result)){
    $pages[] = $row;
}
?>

Добро пожаловать, <?=$_SESSION['login']?>. <a href="logout.php">Выйти</a>
<br><br>

<?php if(!empty($pages)) {
    foreach ($pages as $page) {
        ?>
        <a href="/admin.php?page=<?=$page['alias']?>">Редактировать "<?=$page['title']?>"</a><br>
        <?php
    }
}
?>

<?php if(isset($_GET['page'])){
    $alias = strtolower($_GET['page']);
    $alias = mysqli_escape_string($link, $alias);
    $sql = "select p.*, DATE_FORMAT(p.date_add, '%d.%m.%Y %H:%i') as formatted_date from pages p where alias = '{$alias}'";
    $result = mysqli_query($link, $sql);
    $page_data = mysqli_fetch_assoc($result);

//    echo "<pre>";
//print_r($page_data);
?>
<br>
<form method="post" action="">
    <input type="hidden" name="id" value="<?=$page_data['id']?>" /><br>
    <input type="text" name="title" value="<?=$page_data['title']?>" /><br>
    <textarea style="width: 500px; height: 250px;" name="content"><?=htmlspecialchars($page_data['content'])?></textarea><br>
    <input type="submit" value="Сохранить страницу" />
</form>
<?php } ?>