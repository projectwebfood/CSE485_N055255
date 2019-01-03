<div class="icon-bar">
	<a href="https://www.facebook.com/profile.php?id=100009817902566" class="facebook"><i class="fa fa-facebook"></i></a> 
	<a href="#" class="twitter"><i class="fa fa-twitter"></i></a> 
	<a href="https://www.instagram.com/sonson3664/?hl=vi" class="instagram"><i class="fa fa-instagram"></i></a>
	<a href="https://www.youtube.com/channel/UCj51IynIFwcsbREZo4oxgyw?sub_confirmation=1" class="youtube"><i class="fa fa-youtube"></i></a> 
</div>	
<footer>
<ul>
		<li>
			<div class="text">
				<h4>About</h4>
				<div>Cooky.vn được tạo nên với mong muốn có thể giúp cho người nội trợ sẽ dễ dàng hơn trong việc nấu ăn hàng ngày của mình. Từ công việc chuẩn bị các nguyên liệu, phải chọn món ăn hàng ngày hoặc lựa chọn những thiết bị dùng bếp sẽ trở nên dễ dàng hơn. </div>
			</div>
		</li>
		<li>
			<div class="text">
				<h4>Về Cooky</h4>
				<a href="index.php">Trang chủ</a>
				<br>
				<a href="index.php">Đăng ký thành viên</a>
				<br>
				<a href="index.php">Videos</a>
				<br>
				<a href="index.php">Quên mật khẩu</a>
			</div>
		</li>
		<li>
			<div class="icon" data-icon="Cooky" >
			</div>
		</li>
	</ul>
	<div class="bar">
		<div class="bar-wrap">
			<ul class="links">
				<li><a href="index.php">Home</a></li>
				<li><a href="#">License</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">Advertise</a></li>
				<li><a href="#">About</a></li>
			</ul>

			<div class="social">
				<a href="https://www.facebook.com/profile.php?id=100009817902566" class="fb">
					<span data-icon="f" class="icon"></span>
					<span class="info">
						<span class="follow">Become a fan Facebook</span>
						<span class="num">9,999</span>
					</span>
				</a>
				<a href="#" class="tw">
					<span data-icon="T" class="icon"></span>
					<span class="info">
						<span class="follow">Follow us Twitter</span>
						<span class="num">9,999</span>
					</span>
				</a>

				<a href="https://www.instagram.com/sonson3664/?hl=vi" class="ins">
					<span data-icon="I" class="icon"></span>
					<span class="info">
						<span class="follow">Subscribe instagram</span>
						<span class="num">9,999</span>
					</span>
				</a>
			</div>
			<div class="clear"></div>
			<div class="copyright">&copy;  2018 All Rights Reserved</div>
		</div>
	</div>
	<?php
    function sw_get_current_weekday() {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $weekday = date("l");
        $weekday = strtolower($weekday);
        switch($weekday) {
            case 'monday':
                $weekday = 'Thứ hai';
                break;
            case 'tuesday':
                $weekday = 'Thứ ba';
                break;
            case 'wednesday':
                $weekday = 'Thứ tư';
                break;
            case 'thursday':
                $weekday = 'Thứ năm';
                break;
            case 'friday':
                $weekday = 'Thứ sáu';
                break;
            case 'saturday':
                $weekday = 'Thứ bảy';
                break;
            default:
                $weekday = 'Chủ nhật';
                break;
        }
        // echo $weekday.', '.date('d/m/Y H:i:s');
        echo $weekday.', Ngày '.date('d/m/Y');
    }
?>
<div class="top_header-date">
    <span class="icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
    <?php sw_get_current_weekday(); ?> || <span id="clock"></span>
</div>
</footer>
</body>
</html>