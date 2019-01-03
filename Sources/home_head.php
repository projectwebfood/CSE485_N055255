<?php
    include_once "controller/c_congthuc.php";
    $c_congthuc = new C_congthuc();
    $noi_dung = $c_congthuc->index();

    $menu = $noi_dung['menu'];
    $cthuc = $noi_dung['cthuc'];
    //print_r($menu);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="libs/css/style.css">
    <link href="<?php echo $home_url . "libs/css/customer.css" ?>" rel="stylesheet" />
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="css/bootstrap.min.css"></script>
    <title>Cooking</title>
    <style>
        #grid1 .item-hidden{
            display: none;
        }
    </style>
</head>
<body>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/my.js"></script>
    <?php
        include_once 'searchbar.php'; 
    ?>
    <script>
        /*$(document).ready(function()){
            $("#btnSearch").click(function(){
                var keyword = $('#txtSearch').val();
                $.post("timkiem.php",{tukhoa:keyword},function(data){
                    $('dataSearch').html(data);
                })
            })
        }
    </script>
    <div id="background"></div>
        <div class="slideshow-container">
            <div class="mySlides">
                <div class="numbertext">1 / 3</div>
                <img src="image&logo/pizza.jpg">
                <div class="text">pizza</div>
            </div>
            <div class="mySlides">
                <div class="numbertext">2 / 3</div>
                <img src="image&logo/spaghetti.jpeg">
                <div class="text">spaghetti</div>
            </div> 
            <div class="mySlides">
                <div class="numbertext">3 / 3</div>
                <img src="image&logo/sushi.jpg">
                <div class="text">sushi</div>
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
        </div>
        <script>
            var slideIndex = 1;
                showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {slideIndex = 1;}    
                if (n < 1) {slideIndex = slides.length;}
                for (var i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                for (var i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1;
                }
                setTimeout(showSlides, 5000);
            }
        </script>

        <div class="wrapper">
            <?php
                foreach($menu as $mn){
            ?>
                    <a href="loaimon.php?id_loaimon=<?=$mn->id?>"><div><?=$mn->Ten?></div></a>  
            <?php    
                }
            ?>
        </div>
        
        <div class="container">
            <div class="headline">
                <h1>Công thức bởi Cooky</h1>
            </div>
            
            <div id="grid1">
                <?php
                    foreach($cthuc as $cth){
                ?>
                        <div class="item item-hidden">
                            <a href="chitiet.php?id=<?=$cth->id?>">
                                <div class="item-photo">
                                    <img src="image&logo/<?=$cth->Hinh?>">
                                </div>
                                <div class="item-info">
                                    <span><?=$cth->TieuDe?></span>
                                </div>
                            </a>
                        </div>
                        
                <?php    
                    }
                ?>
            </div>
            <button id="xemthem">Xem thêm</button>
        </div>
        <script>
            $( document ).ready(function () {
                $(".item-hidden").slice(0, 8).show();

                $("#xemthem").on('click', function (e) {

                    e.preventDefault();

                    $(".item-hidden:hidden").slice(0, 4).slideDown();
                    if ($(".item-hidden:hidden").length == 0) {
                        $("#load").fadeOut('slow');
                    }
                    $('item-hidden,grid1').animate({
                        scrollTop: $(this).offset().top
                    }, 2000);
                });
            });
        </script>

        <div class="container">
            <div class="headline">
                <h1>Video bởi Cooky</h1>
            </div>
            <div id="grid1">
                <?php
                    foreach($menu as $mn){
                ?>
                        <div class="item">
                            <a href="chitiet.php?id=<?=$mn->id?>">
                                <div class="item-photo">
                                    <img src="image&logo/<?=$mn->Hinh?>">
                                </div>
                                <div class="item-info">
                                    <span><?=$mn->TieuDe?></span>
                                </div>
                            </a>
                        </div>
                        
                <?php    
                    }
                ?>
            </div>
            <button id="xemthem">Xem thêm</button>
        </div>

        <div class="container">
            <div class="headline">
                <h1>Công thức từ cộng đồng</h1>
            </div>
            <div id="grid1">
                <?php
                    foreach($menu as $mn){
                ?>
                        <div class="item">
                            <a href="chitiet.php?id=<?=$mn->id?>">
                                <div class="item-photo">
                                    <img src="image&logo/<?=$mn->Hinh?>">
                                </div>
                                <div class="item-info">
                                    <span><?=$mn->TieuDe?></span>
                                </div>
                            </a>
                        </div>
                        
                <?php    
                    }
                ?>
            </div>
            <button id="xemthem">Xem thêm</button>
        </div>