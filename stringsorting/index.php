<?php 
require_once "function/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css" > 
    <title>Stringsorting</title>
</head>
<body>
<div class="container">
    <div class="content"style="margin-top:30px;">
    <h2>String Sıralama</h2>
    <hr>
    <form method="post">
        <div class="form-group" style="width: 50%; margin-top:40px;">
            
            <label for="exampleInputEmail1"><h4>Cümle Giriniz</h4></label>
            <input type="text" class="form-control" name="wordarray" required >
            <input type="submit" class="btn btn-lg btn-success mt-3" value="Sırala" name="convert">
            </div>
        </div>
        
    </form>
    <div class="card mt-3">
        <div class="card-body" style="width: 50%; font-size:x-large;">
        <b>İlk </b>
        <hr>
            <?php 
            if(isset($_POST['convert'])){echo $_POST['wordarray'];}
            ?>
        </div>
        <div class="card-body" style="width: 50%; font-size:x-large;">
        <b>Son </b>
        <hr>
            <?php 
            result();
            ?>
        </div>
    </div>
</div>
    




    
</body>
</html>