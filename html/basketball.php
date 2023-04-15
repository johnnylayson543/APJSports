<?php require_once '../template/header.php';?>
<?php require_once '../loginsession/forceloginheader.php';?>

<link rel="stylesheet" type="text/css" href="../css/itemlayout.css">
<link rel="stylesheet" type="text/css" href="../css/basketball.css">
<title>Basketball</title>
</head>

<body>



<body>
<header><h1>Basketball</h1></header>


<div class="item-container">
    <?php
    $items = $item->__showItems("Basketball");
    ?>
</div>
<?php require_once '../template/footer.php';?>