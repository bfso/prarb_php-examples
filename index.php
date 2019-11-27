<?php
    include('helpers/StoreHelper.php');
?>

<html>
<body>
    <?php
        $storeHelper = new StoreHelper();

        if(isset($_POST['number'])){
            $storeHelper->store($_POST['number']);
            echo $storeHelper->read();
        }
    ?>

    <form method="POST">
        <input type="text" name="number">
        <input type="submit">
    </form>
</body>
</html>