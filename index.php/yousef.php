<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yousef</title>
</head>
<body>
    <?php
    if(isset($_POST['con'])){
        $host = 'localhost';
        $user ='root';
        $pass = ' ';
        $db = 'yousef1';
        $conn=mysqli_connect($host,$user,$pass,$db);
        if($conn) {
            echo 'yes its connnect';
        }else {
            'sorry there false';
        }
    }
    ?>
</body>
</html>
