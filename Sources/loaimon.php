<?php
    include_once "controller/c_congthuc.php";
    $c_congthuc = new C_congthuc();
    $cong_thuc = $c_congthuc->loaimon();

    $danhmuc = $cong_thuc['danhmuc'];
    $title = $cong_thuc['title'];
    $menu = $cong_thuc['menu'];
    //print_r($danhmuc);

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
</head>
<body>
    <?php
        include_once 'searchbar.php'; 
    ?>
    <div class="wrapper">
            <?php
                foreach($menu as $mn){
            ?>
                    <a href="loaimon.php?id_loaimon=<?=$mn->id?>"><div><?=$mn->Ten?></div></a>  
            <?php    
                }
            ?>
    </div>
    <div class="container" >
            <div class="headline">
                <h1><?=$title->Ten?></h1>
            </div>
            <div id="grid1" id="dataSearch">
            <?php 
                foreach($danhmuc as $dm){
            ?>
                <a href="chitiet.php?id=<?=$dm->id?>">
                    <div class="item">
                        <div class="item-photo">
                            <img src="image&logo/<?=$dm->Hinh?>">
                        </div>
                        <div class="item-info">
                            <span><?=$dm->TieuDe?></span>
                        </div>
                    </div>
                </a>
            <?php
                }
            ?>  
            </div>              
    </div>
    <?php
        include_once 'home_foot.php';
    ?>
</body>
</html>