<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">

    <style type="text/css">
        .card {
            border: 1px solid black;
            width: 250px;
            margin: 5px;
            float: left;
        }

        .card img {
            width: 100%;
            height: auto;
        }

        #result {
            clear: both;
            border: 1px solid black;
            height: 500px;
        }

        .Cart {
            float: left;
            width: 400px;
            height: 100%;

            border: 1px solid black;
        }

        .menu {
            float: left;
            width: calc(100% - 400px - 50px);
            height: 100%;
            border: 1px solid black;

            margin-right: 10px;
        }
    </style>
</head>

<body>
    <?php
    session_start();

    echo "<div class = 'menu'>";

    if(isset($_SESSION["menu"])){
        $menu = $_SESSION["menu"];

    }
    else{
        $menu = array();
        echo "<p>Menu is Empty</p>";

        echo '<form method="POST" enctype="multipart/form-data" action="index.php">';
        echo '<input type="submit" name="add-menu" value="Add Menu" style="font-size:20px">    </form>';
    }
    

    foreach ($menu as $key => $value) {

        echo "<div class = 'card' id ='c-$key'>";
        echo "<img id ='img-$key' src='" . $value["photo_path_food"] . "'>";
        echo "<p id ='nam-$key'>" . $value["name_food"] . "</p>";
        echo "<p id ='prc-$key'>Rp." . $value["price_food"] . "</p>";
        echo "<button class = 'btnAdd' card ='#c-$key' name='" . $value["name_food"] . "' price='" . $value["price_food"] . "' >Add</button>";
        echo "</div>";
    }

    echo "</div>";
    ?>

    <div class='Cart'>
        <h2 id='cartlist'>Pilihanku:</h1>
            <table id='cartcontain'></table>
            <br></br>
            <h3 id='carttotal'></h3>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/index.js"></script>
</body>

</html>