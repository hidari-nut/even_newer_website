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
</head>

<body>
    <form method="POST" enctype="multipart/form-data" action="index.php">
        <label for="code_food">Kode Makanan:</label><br>
        <input type="text" id="code_food" name="code_food" placeholder="Kode" required>
        <br><br>

        <label for="name_food">Nama Makanan:</label><br>
        <input type="text" id="name_food" name="name_food" placeholder="Name" required>
        <br><br>

        <label for="price_food">Harga Makanan:</label><br>
        <input type="text" id="price_food" name="price_food" placeholder="Price" required>
        <br><br>

        <label for="picture_food">Kode Makanan:</label><br>
        <input type="file" id="picture_food" name="picture_food" required>
        <br><br>

        <input type="submit" name="save" value="Save" style="font-size:20px">
    </form>

    <?php
    if (isset($_POST['save'])) {
        $code_food = $_POST['code_food'];
        $name_food = $_POST['name_food'];
        $price_food = $_POST['price_food'];

        # Save & Display Image
        $photo = $_FILES['picture_food'];

        // echo $photo['tmp_name'] . "<br>";
        // echo $photo['name'] . "<br>";
        // echo $photo['size'] . "<br>";
        // echo $photo['type'] . "<br>";
        // echo $photo['error'] . "<br>";

        // $file_name = $photo['name'];
        $file_name = $code_food;
        $ext = pathinfo($photo['name'], PATHINFO_EXTENSION);

        # Image Requirements
        if (empty($photo['name'])) {
            return;
        }
        if ($photo['error']) {
            echo "The upload triggered an error!<br>";
            return;
        }
        $info = getimagesize($photo['tmp_name']);
        if (empty($info)) {
            echo "The uploaded file is not an image!";
            return;
        }
        # Cannot Exceed 10 MB
        if ($photo['size'] > 10000000) {
            echo "Please upload file below 10MB";
            return;
        }
        #print_r($info);
    
        $destination = "uploads/$file_name.$ext";
        move_uploaded_file($photo['tmp_name'], $destination);
    
        $source = imagecreatefromstring(file_get_contents($destination));
        $target = imagecreatetruecolor(500, 500);
    
        imagecopyresampled($target, $source, 0, 0, 0, 0, 500, 500, imagesx($source), imagesy($source));
    
        imagepng($target, $destination);
        echo "<br>";
        echo "<img src='$destination'>";

        $photo_path_food = $destination;

        $_SESSION['menu'][$code_food] = array("code_food" => $code_food, "name_food" => $name_food, "price_food" => $price_food, 
        "photo_path_food" => $photo_path_food);
    }
    ?>

    <script src="" async defer></script>
</body>

</html>