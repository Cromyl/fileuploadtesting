<?php
     $conn=mysqli_connect('sql12.freesqldatabase.com','sql12608210','fBXhWL98H4','sql12608210') or die("Connection failed" .mysqli_connect_error());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Material</title>
</head>
<body>
<?php
    if($_SERVER['REQUEST_METHOD']=='post' && isset($_POST['submit'])){
        if(isset($_POST['uploadfile'])){
        $files=$_FILES['uploadfile'];
        echo'sdsdsd';
    }
}
?>      
    <form action="gfg.php" method="post" enctype="multipart/form-data">
    <h3>Enter Material Details</h3>
    <label for="link">Link:</label><br>
    <input type="file" name="uploadfile" id="uploadfile" class="form-control">
        <br><br><br>
        <input type="submit" value="Submit" name="submit" id="submit" ><br><br><br>
    </form>
</body>
</html>