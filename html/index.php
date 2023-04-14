<?php require_once '../template/header.php';?>
<?php require_once '../loginsession/forceloginheader.php';?>
<title>APJSports - Home Page</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<header>
    <h1>APJSports</h1>
</header>

<?php include "../template/signoutheading.php" ?>

<div class="mainarea">
    <?php include "../connectiondatabase/staffView.php" ?>
    <h1>Popular Items</h1>
    <p class="lead"> </p>
    <div class="popular-items">
        <div class="item">
            <img src="../images/soccer/mitre_ball.jpg" alt="Popular Item 1">
            <div class="item-description">
                <h3>Item </h3>
                <p>Description of Item </p>
                <a href="../html/soccer.php">Shop Now</a>
            </div>
        </div>
        <div class="item">
            <img src="../images/soccer/mitre_indoor_ball.jpg" alt="Popular Item 2">
            <div class="item-description">
                <h3>Item </h3>
                <p>Description of Item</p>
                <a href="../html/soccer.php">Shop Now</a>
            </div>
        </div>
        <div class="item">
            <img src="../images/soccer/nike_jr_boots_1.jpg" alt="Popular Item 3">
            <div class="item-description">
                <h3>Item </h3>
                <p>Description of Item </p>
                <a href="../html/soccer.php">Shop Now</a>
            </div>
        </div>
        <div class="item">
            <img src="../images/soccer/nike_zoom.jpg" alt="Popular Item 4">
            <div class="item-description">
                <h3>Item </h3>
                <p>Description of Item </p>
                <a href="../html/soccer.php">Shop Now</a>
            </div>
        </div>
        <div class="item">
            <img src="../images/soccer/puma_rapido_iii.jpg" alt="Popular Item 5">
            <div class="item-description">
                <h3>Item 5</h3>
                <p>Description of Item </p>
                <a href="../html/soccer.php">Shop Now</a>
            </div>
        </div>
    </div>
</div>

<div class="row marketing">
    <div>
        <h4>Home page</h4>
        <p>  </p>
    </div>
</div>

<?php require_once '../template/footer.php';?>
