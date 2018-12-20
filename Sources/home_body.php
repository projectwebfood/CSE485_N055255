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
            if (n > slides.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = slides.length}
            for (var i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            for (var i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
        }
    </script>
    
    <!--<div id="login">
        <div id="backgr">
            <div id="dndk">
                <button onclick="dangnhap()">Đăng nhập</button>
                <button onclick="dangky()">Đăng ký</button>
            </div>
           	<form id="dky" action="register.php" method="post">        
		<div class="text-box">
			<input type="text" name="username" placeholder="Tên đăng nhập">
		</div>
		<div class="text-box">
			<input type="text" name="name" placeholder="Tên tài khoản">
		</div>
		<div class="text-box">
			<input type="text" name="email" placeholder="Email">
		</div>
		<div class="text-box">
			<input type="password" name="password" placeholder="Mật khẩu">
		</div>
		<div class="text-box">
			<input type="password" name="confmpass" placeholder="Xác nhận mật khẩu">
		</div>
		<input class="btn" type="submit" name="btn_register" value="Đăng ký">	  
	</form>

            <form action="login.php" method="post"></form>
                <div id="dnh" class="login-box">
                    <div class="text-box">
                        <input type="text" name="username" placeholder="Tên đăng nhập">
                    </div>
                    <div class="text-box">
                        <input type="password" names="password_1" placeholder="Mật khẩu">
                    </div>
                    <input class="btn" type="button" name="btn_login" value="Đăng nhập">
                </div>
            </form>
        </div>
    </div>
    <script>
        function lgn(){
            document.getElementById("login").style.display="block";
        }
        // Get the modal
        var modal = document.getElementById('login');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }    
        function dangky(){
            document.getElementById('dky').style.display="block";
            document.getElementById('dnh').style.display="none";
        }
        function dangnhap(){
            document.getElementById('dky').style.display="none";
            document.getElementById('dnh').style.display="block";
        }
    </script>-->

    <div class="wrapper">
        <a href="#"><div>Ăn sáng</div></a>
        <a href="#"><div>Ăn vặt</div></a>
        <a href="#"><div>Khai vị</div></a>
        <a href="#"><div>Món chay</div></a>
        <a href="#"><div>Món chính</div></a>
        <a href="#"><div>Nhanh - dễ</div></a>
        <a href="#"><div>Làm bánh</div></a>
        <a href="#"><div>Healthy</div></a>
        <a href="#"><div>Thức uống</div></a>
        <a href="#"><div>Salad</div></a>
        <a href="#"><div>Nước chấm</div></a>
        <a href="#"><div>Pasta - Spaghetti</div></a>
        <a href="#"><div>Gà</div></a>
        <a href="#"><div>Snacks</div></a>
        <a href="#"><div>Bún - Mì - Phở</div></a>
        <a href="#"><div>Lẩu</div></a>
    </div>
    
    <div class="container">
        <div class="headline">
            <h1>Công thức bởi Cooky</h1>
        </div>
        <div id="grid1">
            <div class="item">
                <a href="#">
                    <div class="item-photo">
                        <img src="image&logo/pizza.jpg">
                    </div>
                    <div class="image&logo/item-info">
                        <span>pizza</span>
                    </div>
                </a>
            </div>
            <div class="item">
                <div class="item-photo">
                    <img src="image&logo/pizza.jpg"> 
                </div>
                <div class="item-info">
    
                </div>
            </div>
            <div class="item">
                <div class="item-photo">
                    <img src="image&logo/pizza.jpg">  
                </div>
                <div class="item-info">
        
                </div>
            </div>
            <div class="item">
                <div class="item-photo">
                    <img src="image&logo/pizza.jpg">       
                </div>
                <div class="item-info">
            
                </div>
            </div>
            <div class="item">
                <div class="item-photo">
                    <img src="image&logo/pizza.jpg">        
                </div>
                <div class="item-info">
            
                </div>
            </div>
            <div class="item">
                <div class="item-photo">
                    <img src="image&logo/pizza.jpg">        
                </div>
                <div class="item-info">
            
                </div>
            </div>
            <div class="item">
                <div class="item-photo">
                    <img src="image&logo/pizza.jpg">      
                </div>
                <div class="item-info">
            
                </div>
            </div>
            <div class="item">
                <div class="item-photo">
                    <img src="image&logo/pizza.jpg">           
                </div>
                <div class="item-info">
                
                </div>
            </div>
        </div>
        <button id="xemthem">Xem thêm</button>
    </div>
    <div class="container">
        <div class="headline">
            <h1>Video bởi Cooky</h1>
        </div>
        <div id="grid1">
            <div class="item">
                <div class="item-photo">
                    <img src="image&logo/pizza.jpg">
                </div>
                <div class="item-info">
                    <span>pizza</span>
                </div>
            </div>
            <div class="item">
                <div class="item-photo">
                    <img src="image&logo/pizza.jpg">  
                </div>
                <div class="item-info">
    
                </div>
            </div>
            <div class="item">
                <div class="item-photo">
                    <img src="image&logo/pizza.jpg">    
                </div>
                <div class="item-info">
        
                </div>
            </div>
            <div class="item">
                <div class="item-photo">
                    <img src="image&logo/pizza.jpg">        
                </div>
                <div class="item-info">
            
                </div>
            </div>
            <div class="item">
                <div class="item-photo">
                    <img src="image&logo/pizza.jpg">          
                </div>
                <div class="item-info">
            
                </div>
            </div>
            <div class="item">
                <div class="item-photo">
                    <img src="image&logo/pizza.jpg">         
                </div>
                <div class="item-info">
            
                </div>
            </div>
            <div class="item">
                <div class="item-photo">
                    <img src="image&logo/pizza.jpg">         
                </div>
                <div class="item-info">
            
                </div>
            </div>
            <div class="item">
                <div class="item-photo">
                    <img src="image&logo/pizza.jpg">            
                </div>
                <div class="item-info">
                
                </div>
            </div>
        </div>
        <button id="xemthem">Xem thêm</button>
    </div>

    <div class="container">
        <div class="headline">
            <h1>Công thức từ cộng đồng</h1>
        </div>
        <div id="grid1">
            <div class="item">
                <div class="item-photo">
                    <img src="image&logo/pizza.jpg">
                </div>
                <div class="item-info">
                    <span>pizza</span>
                </div>
            </div>
            <div class="item">
                <div class="item-photo">
                    <img src="image&logo/pizza.jpg">  
                </div>
                <div class="item-info">
    
                </div>
            </div>
            <div class="item">
                <div class="item-photo">
                    <img src="image&logo/pizza.jpg">    
                </div>
                <div class="item-info">
        
                </div>
            </div>
            <div class="item">
                <div class="item-photo">
                    <img src="image&logo/pizza.jpg">        
                </div>
                <div class="item-info">
            
                </div>
            </div>
            <div class="item">
                <div class="item-photo">
                    <img src="image&logo/pizza.jpg">          
                </div>
                <div class="item-info">
            
                </div>
            </div>
            <div class="item">
                <div class="item-photo">
                    <img src="image&logo/pizza.jpg">         
                </div>
                <div class="item-info">
            
                </div>
            </div>
            <div class="item">
                <div class="item-photo">
                    <img src="image&logo/pizza.jpg">         
                </div>
                <div class="item-info">
            
                </div>
            </div>
            <div class="item">
                <div class="item-photo">
                    <img src="image&logo/pizza.jpg">            
                </div>
                <div class="item-info">
                
                </div>
            </div>
        </div>
        <button id="xemthem">Xem thêm</button>
    </div>