<?php require_once '../template/header.php';?>
<?php require_once '../loginsession/forceloginheader.php';?>
<link rel="stylesheet" type="text/css" href="../css/itemlayout.css">
<link rel="stylesheet" type="text/css" href="../css/soccer.css">
<title>Soccer</title>
</head>


<body>
<header><h1>Soccer</h1></header>
<a href="../html/index.php"><input type="button" value="Return to home" ></a>

<div class="item-container">

    <?php $item->__showItems("Soccer"); ?>

</div>

<a href="../html/index.php"><input type="button" value="Return to home" ></a>

<?php require_once '../template/footer.php';?>

