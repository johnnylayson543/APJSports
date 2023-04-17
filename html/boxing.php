<?php require_once '../template/header.php';?>
<?php require_once '../loginsession/forceloginheader.php';?>

    <link rel="stylesheet" type="text/css" href="../css/itemlayout.css">
    <link rel="stylesheet" type="text/css" href="../css/boxing.css">
    <title>Boxing</title>
    </head>

    <body>



<body>
<header><h1>Boxing</h1></header>
<a href="../html/index.php"><input type="button" value="Return to home" ></a>

<div class="item-container">
    <?php
    $items = $item->__showItems("Boxing");
    ?>
</div>
<a href="../html/index.php"><input type="button" value="Return to home" ></a>
<?php require_once '../template/footer.php';?>