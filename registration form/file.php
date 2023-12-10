 <?php
if(isset($_POST["submit"])) {

    print_r($_FILES["image"]["tmp_name"]);
    print_r($_FILES);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action=# enctype="multipart/form-data">
    <input type="file" name="'image'">
    <button type="submit" name="submit">submit</button></form>
</body>
</html>