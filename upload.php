<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload a file</title>
</head>
<body>
    <form action="" method="POST" enctype="mutipart/form-data">
        <input type="file" name="choosefile"><br>
        <input type="submit" name="upload" vale="upload file">
    </form>
    <?php 
    if(isset($_POST['upload'])){
        $file=$_FILES['choosefile']['name'];
        $file_tmp=$_FILES['choosefile']['tmp_name'];
        if(move_uploaded_file("file_tmp","uploads/".$file )){
            echo "file uploaded successfully";
        }
        else{
            echo "file is not uploaded";
        }
    }
    ?>
</body>
</html>
