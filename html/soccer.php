<?php require_once '../template/header.php';?>
<?php require_once '../loginsession/forceloginheader.php';?>
<link rel="stylesheet" type="text/css" href="../css/itemlayout.css">
<title>Soccer</title>
</head>


<body>
<header><h1>Soccer</h1></header>

<div class="item-container">
    <?php
    $items = $item->__showItems("Soccer");
    var_dump($items);
    if ($items) { // check if $items is not null
        foreach($item as $item) {
            ?>
            <div class="item">
                <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>">
                <h4><?php echo $item['name']; ?></h4>
                <form method="POST" action="cart.php">
                    <input type="hidden" name="item_id" value="<?php echo $item['id']; ?>">
                    <button type="submit">Add to cart</button>
                </form>
            </div>
            <?php
        }
    } else {
        echo "No items found.";


    }
    ?>
</div>


<?php require_once '../template/footer.php';?>

