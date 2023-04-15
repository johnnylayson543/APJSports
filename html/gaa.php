<?php require_once '../template/header.php';?>
<?php require_once '../loginsession/forceloginheader.php';?>
    <link rel="stylesheet" type="text/css" href="../css/itemlayout.css">
    <link rel="stylesheet" type="text/css" href="../css/gaa.css">
<title>GAA</title>
</head>


<body>
<header><h1>GAA</h1></header>


<div class="item-container">
    <?php
    $items = $item->__showItems("GAA");
    ?>
</div>
<?php require_once '../template/footer.php';?>