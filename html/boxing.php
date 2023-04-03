<?php require_once '../template/header.php';?>
<?php require_once '../loginsession/forceloginheader.php';?>

    <link rel="stylesheet" type="text/css" href="../css/itemlayout.css">
    <title>Boxing</title>
    </head>

    <body>



<body>
<header><h1>Boxing</h1></header>


<div class="item-container">
    <?php
    $items = $item->__showItems("Boxing");
    if ($items) { // check if $items is not null
        foreach($items as $item) {
            ?>
            <div class="item">
                <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>">
                <h4><?php echo $item['name']; ?></h4>
                <p><?php echo $item['price']; ?></p>
            </div>
            <?php
        }
    } else {

    }
    ?>
</div>
<?php require_once '../template/footer.php';?>