<?php require_once '../template/header.php';?>
<?php require_once '../loginsession/forceloginheader.php';?>
<link rel="stylesheet" type="text/css" href="../css/itemlayout.css">
<title>Soccer</title>
</head>


<body>
<header><h1>Soccer</h1></header>


<div class="item-container">

    <?php $item->__showItems("Soccer"); ?>
</div>
<?php require_once '../template/footer.php';?>

