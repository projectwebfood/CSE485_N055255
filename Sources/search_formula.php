<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="libs/css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="css/bootstrap.min.css"></script>
    <title>Cooking</title>
</head>
<body>
<?php 
    include_once 'searchbar.php';
?>    
<?php
    //include_once 'config/database.php';
    $conn = mysqli_connect("localhost", "root", "", "login_system");
    mysqli_query($conn,"SET NAMES 'UTF8'");
    //mysqli_select_db(, $conn);
    //if (isset($_POST["find"])) {
        $set=$_POST['search'];
        if($set){
            $show="SELECT * FROM forms WHERE name = '$set'";
            $result=mysqli_query($conn,$show);
            while($rows=mysqli_fetch_array($result)){
                echo "<b>";
                echo $rows['name'];
                echo "</b>";
                echo "<br>";
                echo $rows['formula'];
            }
        }
    //}
    
    
?>
<?php 
    include_once 'home_foot.php';
?> 


</body>
</html>