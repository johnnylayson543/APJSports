<?php require_once '../template/header.php';?>
<?php require_once '../loginsession/forceloginheader.php';?>
    <link rel="stylesheet" type="text/css" href="../css/itemlayout.css">
    <title>View All Items and Stock (Employees Only)</title>
    </head>

    </body>



<body>
<header><h1>View All Items and Stock</h1></header>


<div class="item-container">
    <?php $items = $item->__showAllItems(); ?>
</div>

</body>

</html>