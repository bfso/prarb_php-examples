<?php
include('helpers/StoreHelper.php');

$storeHelper = new StoreHelper();
$storeHelper->inverseLines();

header("location: index.php");