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
    <style>
        body {
            padding: 110px 0px;
        } 
        .img-responsive {
            height: 400px;
            width: 1000px;
        }
        .row h1 {
            align-items: center;  
        }
        .lead a{
            align-items: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <?php
            include_once 'searchbar.php';
        ?>
    </nav>
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header"> 
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </div>

    <!-- Page Content -->
    <div class="container">
        <div class="row">

             
            <?php  
            $conn = mysqli_connect("localhost", "root", "", "project");
            mysqli_query($conn,"SET NAMES 'UTF8'");
            if(isset($_POST['find'])){
            $set = $_POST['search'];
            if($set){
            $show="SELECT * FROM congthuc WHERE TieuDe = '$set'";
            $result=mysqli_query($conn,$show);
            while($rows=mysqli_fetch_array($result)){      
            //<!-- Blog Post Content Column -->
            echo '<div class="col-lg-9">';
                //<!-- Preview Image -->
                echo '<img class="img-responsive" src="image&logo/';
                echo $rows['Hinh']; 
                echo '"alt="img-responsive-cap">';

                //<!-- Date/Time -->
                echo '<p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>';
                echo '<hr>';
                //<!-- Blog Post -->

                //<!-- Title -->
                echo '<h1>'; 
                echo $rows['TieuDe'];
                echo '</h1>';

                //<!-- Author -->
                echo '<p class="lead">';
                    echo '<a href="index.php">Được đăng bởi CookyVN</a>';
                echo '</p>';

                //<!-- Post Content -->
                echo '<p class="lead">'; 
                echo $rows['NoiDung']; 
                echo '</p>';
                echo '<hr>';
                    }
                }
            }
            ?>
                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Gửi</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        
                    </div>
                </div>

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include_once 'home_foot.php';
    ?>
</body>
</html>