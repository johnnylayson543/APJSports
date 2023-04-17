<?php require_once '../template/header.php';?>
<?php require_once '../loginsession/forceloginheader.php';?>
    <link rel="stylesheet" type="text/css" href="../css/itemlayout.css">
    <link rel="stylesheet" type="text/css" href="../css/hurling.css">
    <title>Hurling</title>
    </head>

    <body>



<body>
<header><h1>Hurling</h1></header>
<a href="../html/index.php"><input type="button" value="Return to home" ></a>

<div class="item-container">
    <?php
    $items = $item->__showItems("Hurling");
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
<a href="../html/index.php"><input type="button" value="Return to home" ></a>
<?php require_once '../template/footer.php';?>