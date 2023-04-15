<?php require_once '../template/header.php';?>
<?php require_once '../loginsession/forceloginheader.php';?>

    <link rel="stylesheet" type="text/css" href="../css/itemlayout.css">
    <link rel="stylesheet" type="text/css" href="../css/swimming.css">

    <title>Swimming</title>
    </head>

    <body>



<body>
<header><h1>Swimming</h1></header>


<div class="item-container">
    <?php
    $items = $item->__showItems("Swimming");
    ?>
</div>
<?php require_once '../template/footer.php';?>