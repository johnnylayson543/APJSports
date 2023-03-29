<?php require_once '../template/header.php';?>
<?php require_once '../loginsession/forceloginheader.php';?>
<title>Soccer</title>
</head>


<body>

<h3>Soccer</h3>

<?php
$item->__showItems("Soccer");
$item->__incStock("7", "3");
?>

<?php require_once '../template/footer.php';?>