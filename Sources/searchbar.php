<div class="topnav">
        <div id="top"></div>
        <div class="search-container">           
            <form action="searchchitiet.php" method="post">
                <img src="image&logo/logo.png" id="logo">
                <input type="text" placeholder="tìm kiếm công thức" id="txtSearch" name="search">
                <button type="submit" id="btnSearch" name="find"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/my.js"></script>
        <script>
            //$(document).ready(function()){
            //    $("#btnSearch").click(function(){
            //        var keyword = $('#txtSearch').val();
            //        $.post("timkiem.php",{tukhoa:keyword},function(data){
            //            $('#dataSearch').html(data);
            //        })
            //    })
            //}
        </script>
        <?php 
            // core configuration
            include_once "config/core.php";
            $require_login=false;
            include_once "login_checker.php";
            // default to false
            $access_denied=false;

            // check if users / customer was logged in
            // if user was logged in, show "Edit Profile", "Orders" and "Logout" options
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true && $_SESSION['access_level']=='Customer'){
        ?>
        <a href="login1.php">
            <?php echo $_SESSION['firstname']; ?>
        </a>
        <?php
            }        
            // if user was not logged in, show the "login" and "register" options
            else{
        ?>
        <a href="login1.php">Đăng nhập</a>
        <?php
            }
        ?>
        
        <a href="#blog">Blog</a>
        <a href="#form">Đăng công thức</a>        
    </div>

    <div>
        <div id="menu">
            <ul>
                <li>
                    <a href="index.php"><img src="image&logo/home.png"></a>
                </li>
                <li>
                    <a href="#">Công thức</a>
                </li>
                <li>
                    <a href="#">Cộng đồng</a>
                </li>
                <li>
                    <a href="#">Bộ sưu tập</a>
                </li>
                <li>
                    <a href="#">Videos</a>
                </li>
                <li>
                    <a href="#">Top thành viên</a>
                </li>
                <li>
                    <a href="#">Lớp học nấu ăn</a>
                </li>
                <li>
                    <a href="#">Cuộc thi ẩm thực</a>
                </li>
                <li>
                    <a href="#">Liên hệ</a>
                </li>
            </ul>
        </div>
    </div>