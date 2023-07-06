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
            float: right;
            width: 250px;
        }

        .menu {
            float: left;
            width: calc(100% - 250px);
        }
    </style>
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <?php
    $mk = array(
        array("id" => "0001", "name" => "Fried Chicken", "price" => "70000", "img" => "https://picsum.photos/500?1"),
        array("id" => "0002", "name" => "Chicken Sandwich", "price" => "69000", "img" => "https://picsum.photos/500?2"),
        array("id" => "0003", "name" => "Chicken Wrap", "price" => "68000", "img" => "https://picsum.photos/500?3"),
        array("id" => "0004", "name" => "Chicken Donut", "price" => "67000", "img" => "https://picsum.photos/500?4"),
        array("id" => "0005", "name" => "Chicken Shawarma", "price" => "66000", "img" => "https://picsum.photos/500?5"),
        array("id" => "0006", "name" => "Chicken Rice", "price" => "65000", "img" => "https://picsum.photos/500?6"),
        array("id" => "0007", "name" => "Chicken Noodle", "price" => "64000", "img" => "https://picsum.photos/500?7"),
        array("id" => "0008", "name" => "Chicken Soup", "price" => "63000", "img" => "https://picsum.photos/500?8"),
        array("id" => "0009", "name" => "Chicken Porridge", "price" => "62000", "img" => "https://picsum.photos/500?9")
    );

    echo "<div class = 'menu'>";
    foreach ($mk as $key => $value) {

        echo "<div class = 'card' id ='c-$key'>";
        echo "<img id ='img-$key' src='" . $value["img"] . "'>";
        echo "<div id='k-$key'>" . $value["id"] . "</div>";
        echo "<p id ='nam-$key'>" . $value["name"] . "</p>";
        echo "<p id ='prc-$key'>Rp." . $value["price"] . "</p>";
        echo "<button class = 'btnAdd' card ='#c-$key' name='" . $value["name"] . "' price='" . $value["price"] . "' >Add</button>";
        echo "</div>";
    }

    echo "</div>";
    ?>

    <div class='Cart'>
        <h2 id='cartlist'>Pilihanku:</h1>
            <h3 id='cartcontain'></h3>
            <br></br>
            <h3 id='carttotal'></h3>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/index.js"></script>
</body>

</html>