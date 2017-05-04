<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 04.05.2017
 * Time: 1:53 PM
 */
if ($_SERVER['REQUEST_METHOD'] == 'GET') { ?>
    <form action="<?php echo htmlentities($_SERVER['SCRIPT_NAME']) ?>" method="post">
        What is your first name?
        <input type="text" name="first_name" />
        <input type="submit" value="Say Hello" />
    </form>
<?php } else {
    echo 'Hello, ' . $_POST['first_name'] . '!';
}