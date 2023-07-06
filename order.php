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
    </style>
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <?php
    $mk = array(
        array("id" => "0001", "name" => "Fried Chicken", "price" => "70000", "img" => "https://picsum.photos/500"),
        array("id" => "0002", "name" => "Chicken Sandwich", "price" => "69000", "img" => "https://picsum.photos/500"),
        array("id" => "0003", "name" => "Chicken Wrap", "price" => "68000", "img" => "https://picsum.photos/500"),
        array("id" => "0004", "name" => "Chicken Donut", "price" => "67000", "img" => "https://picsum.photos/500")
    );

    foreach ($mk as $key => $value) {
        echo "<div class = 'card' id ='c-$key'>";
        echo "<img src='" . $value["img"] . "'>";
        echo "<div id='k-$key'>" . $value["id"] . "</div>";
        echo "<p>" . $value["name"] . "</p>";
        echo "<p>" . $value["price"] . "</p>";
        echo "<button class = 'btnAdd' card ='#c-$key' kode='#k-$key'>Add</button>";
        echo "</div>";
    }
    ?>


    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/index.js"></script>
</body>

</html>