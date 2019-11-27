<?php
    include('helpers/StoreHelper.php');
?>

<html>
<body>
    <?php
        $storeHelper = new StoreHelper();
    $total = 0;

        if(isset($_POST['number'])){
            $storeHelper->storeNewLine($_POST['number']);
        }

        $lines = $storeHelper->linesAsArray();
        foreach ($lines as $line){
            echo $line."<br>";
            $total = $total + $line;
        }

        echo "<strong>Total:".$total." </strong>";
    ?>

    <form method="POST">
        <input type="text" name="number">
        <input type="submit">
    </form>

    <br>
    <br>
    <br>

    <form method="POST" action="InvertFile.php">
        <input type="submit" value="Reverse File">
    </form>
</body>
</html>