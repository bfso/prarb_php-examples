<?php
    include('helpers/StoreHelper.php');
?>

<html>
<body>
    <?php
        if(isset($_POST['number'])){
            file_put_contents ( "numbers.txt" ,  $_POST['number'],FILE_APPEND);
            echo file_get_contents("numbers.txt");
        }
    ?>

    <form method="POST">
        <input type="text" name="number">
        <input type="submit">
    </form>
</body>
</html>