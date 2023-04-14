<?php require_once '../template/header.php';?>
<?php require_once '../loginsession/forceloginheader.php';?>
<link rel="stylesheet" type="text/css" href="../css/signup.css">
<title>Create Items for APJSports (Employees Only)</title>
</head>


<body>

<div class="container">
    <form action="" method="post" name="Create_Form" class="form-create">
        <h2 class="form-create-heading">Add New Items</h2>

        <label for="inputItemID" >Item ID</label>
        <input name="ItemID" type="itemID" id="inputItemID" class="form-control" placeholder="ItemID" required autofocus><br>

        <label for="inputPrice" >Price</label>
        <input name="Price" type="price" id="inputPrice" class="form-control" placeholder="Price" required autofocus><br>

        <label for="inputImage" >Image</label>
        <input name="Image" type="imageName" id="inputImage" class="form-control" placeholder="Image" required autofocus><br>

        <label for="inputStock" >Stock</label>
        <input name="Stock" type="stock" id="inputStock" class="form-control" placeholder="Stock" required autofocus><br>

        <label for="inputSport" >Sport</label>
        <input name="Sport" type="sport" id="inputSport" class="form-control" placeholder="Sport" required autofocus><br>

        <button name="Create" value="create" class="button" type="submit">Add New Item</button>
        <?php require_once '../connectiondatabase/createItemFunc.php'?>
    </form>
</div>

<?php require_once '../template/footer.php';?>
