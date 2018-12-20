<?php

if(isset($_POST['submit'])){
//    
    echo "<pre>";
    print_r($_FILES['file_upload']);
    echo "<pre>";


$upload_errors = array(

    UPLOAD_ERR_OK         =>  "There is no error",
    UPLOAD_ERR_INI_SIZE   =>  "The uploaded file exceeds the upload_max_filesize directive in php.ini",
    UPLOAD_ERR_FORM_SIZE  =>  "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML",
    UPLOAD_ERR_PARTIAL    =>  "The uploaded file was only partially uploaded",
    UPLOAD_ERR_NO_FILE    =>  "No file was uploaded",
    UPLOAD_ERR_NO_TMP_DIR =>  "Missing a temorary folder",
    UPLOAD_ERR_CANT_WRITE =>  "Failed to write file to disk",
    UPLOAD_ERR_EXTENSION  =>  "A PHP extension stopped the file upload"
);
    $temp_name = $_FILES['file_upload']['tmp_name'];
    $the_file_name = $_FILES['file_upload']['name'];
    $directory = "uploads";
    
    if(move_uploaded_file($temp_name, $directory . "/" . $the_file_name)){
        $the_message = "File uploaded successfully!";
    } else {
               
        $the_errors = $_FILES['file_upload']['error'];
        $the_message = $upload_errors[$the_errors];
        
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
    <script src=""></script>
    <div class="container">
    <form action="upload.php" enctype="multipart/form-data" method="post">
       <h2 class="text-center">
       <?php
        
        if(!empty($upload_errors)){
            echo $the_message;
        }
        
        ?>
        </h2>
        <legend>Chose file for upload</legend>
        <input type="file" name="file_upload"><br>
        <input type="submit" name="submit" value="ODESLAT">
    </form>
    </div>
</body>
</html>
