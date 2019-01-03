<?php
    include_once 'controller/c_congthuc.php';

    $c_congthuc = new C_congthuc();
    if(isset($_POST['tukhoa'])){
        $key = $_POST['tukhoa'];
        $congthuc = $c_congthuc->timkiem($key);

        //foreach($congthuc as $ct){
?>
    <div id="grid1">
            <?php
                foreach($congthuc as $ct){
            ?>
                <a href="#">
                    <div class="item">
                        <div class="item-photo">
                            <img src="image&logo/<?=$ct->Hinh?>">
                        </div>
                        <div class="item-info">
                            <span><?=$ct->TieuDe?></span>
                        </div>
                    </div>
                </a>
            <?php
                }
            ?>  
    </div>
<?php            
        //}
    }
?>