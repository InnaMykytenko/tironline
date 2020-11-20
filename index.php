
<!DOCTYPE HTML>
<html lang="ua">
<head>
<title>Tironline | Главная </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="atlas24.com.ua" />
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!--Get your own code at fontawesome.com-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->

<script src="js/jquery-1.12.0.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>-->
<script src="js/script.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                items:8
            });
        });
        if($(window).width() < 420 ){
            $(".owl-carousel").owlCarousel({
                items:3
            });
        }
	});
</script>

<!-- start-smoth-scrolling -->
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700&display=swap" rel="stylesheet" type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@400;700&display=swap" rel="stylesheet" type='text/css'>
</head>
<body>
<!-- banner -->
	<div class="banner">
		<div class="container" id="contain">

			<div class="header">
                <div class="myBanner" id="myBanner">
                    <a href="tel:+380983937616" style="padding-left:5px;">
                    <!--<a href="viber://add?number=0983937616">-->
                         <i class="fab fa-viber" aria-hidden="true" id="myBanner" style="color: #8e24aa;"></i>
                        <i class="fab fa-whatsapp" aria-hidden="true" id="myBanner" style="color: #25d366;"></i>
                        +38(098)-393-76-16
                    </a>
                </div>

                <div class="myBanner" id="myBanner">
                    <a href="tel:+380983935340">
                    <!--<a href="phone://add?number=0983935340" type="text">-->
                        <i class="fab fa-viber" aria-hidden="true" id="myBanner2" style="color: #8e24aa;"></i>
                        <i class="fab fa-whatsapp" aria-hidden="true" id="myBanner" style="color: #25d366;"></i>
                        +38(098)-393-53-40
                    </a>

                </div>
                <div class="banner-left-delivery">
                    <a href="#"><img src="images/46016.png">доставка<span></span></a>
                </div>
                <div class="clearfix"> </div>
				<div class="banner-left">
                    <a href="index.php"><i class="glyphicon glyphicon-wrench" aria-hidden="true"></i>Tironline<span>Ukraine</span>
                    </a>
                </div>
				<div class="main">
					<section>
						<button id="showLeftOne" class="navig"></button>
					</section>
				</div>
				<div class="clearfix"> </div>
					<!--- Navigation from Right To Left --->
					<link rel="stylesheet" type="text/css" href="css/component.css" />
						<script type="text/javascript">
				
						  var _gaq = _gaq || [];
						  _gaq.push(['_setAccount', 'UA-7243260-2']);
						  _gaq.push(['_trackPageview']);
				
						  (function() {
							var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
							ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
							var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
						  })();
				
						</script>
						<div class="menu-push">
							<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="menu-s1">
								<h3>Интернет магазин</h3>
								<a href="#contain" class="scroll">Главная</a>
								<a href="#home" class="scroll">О компании</a>
								<a href="#zakaz" class="scroll">Как заказать</a>
							</nav>
					</div>
						<script src="js/classie.js"></script>
						<script>
							var menuLeft = document.getElementById( 'menu-s1' ),
								showLeftOne = document.getElementById( 'showLeftOne' ),
								body = document.body;

							showLeftOne.onclick = function() {
								classie.toggle( this, 'active' );
								classie.toggle( menuLeft, 'cbp-spmenu-open' );
								disableOther( 'showLeftOne' );
							};
							function disableOther( button ) {
								if( button !== 'showLeftOne' ) {
									classie.toggle( showLeftOne, 'disabled' );
								}
							}
						</script>
					<!--- Navigation from Right To Left --->
				<div class="clearfix"> </div>
			</div>
			<div class="banner-info">
				<div class="banner-info-left">
                    <div class="form-container">
                        <div class="note"></div>
                        <div class="fields">
					<h1>Получи бесплатную консультацию. Быстрый расчет</h1>
                    <form class="ajax-contact-form" name="contactform" id="contactform" action="">
						<input type="text" value="Имя" name="name"  id="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Имя';}" required="">
						<input type="text" value="Телефон" name="tel" id="tel"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Телефон';}" required="">
						<textarea type="text" name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Ваш коментарий...</textarea>
						<input type="submit" id="submit" name = "submit" value="Узнать стоимость" >
					</form>
                        </div>
                    </div>
				</div>
				<div class="banner-info-right">
					<h2>Запасные части для грузовых автомобилей </h2>
					<p>
                        <span>&nbsp;отечественного и зарубежного производства.</span>
                    </p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- banner-bottom -->

<section class="brand-slider">
    <h4></h4>
    <div class="owl-carousel">

        <div id="owlone"><img src="images/daf.png" alt=""></div>
        <div id="owlone"><img src="images/contain.png" alt=""></div>
        <div id="owlone"><img src="images/man.png" alt=""></div>
        <div id="owlone"><img src="images/scan.png" alt=""></div>
        <div id="owlone"><img src="images/mers.png" alt=""></div>
        <div id="owlone"><img src="images/motors.png" alt=""></div>

        <div id="owlone"><img src="images/daf.png" alt=""></div>
        <div id="owlone"><img src="images/contain.png" alt=""></div>
        <div id="owlone"><img src="images/man.png" alt=""></div>
        <div id="owlone"><img src="images/scan.png" alt=""></div>
        <div id="owlone"><img src="images/mers.png" alt=""></div>
        <div id="owlone"><img src="images/motors.png" alt=""></div>

        <div id="owlone"><img src="images/daf.png" alt=""></div>
        <div id="owlone"><img src="images/contain.png" alt=""></div>
        <div id="owlone"><img src="images/man.png" alt=""></div>
        <div id="owlone"><img src="images/scan.png" alt=""></div>
        <div id="owlone"><img src="images/mers.png" alt=""></div>
        <div id="owlone"><img src="images/motors.png" alt=""></div>
    </div>
</section>
<div class="home" id="home">
	<div class="banner-bottom">
		<div class="container">
			<h3>Здравствуйте !</h3>
			<p class="fugiat">На протяжении нескольких лет наш сервис «tironline.com.ua» осуществляет продажи запчастей к грузовым авто.
            </p>
			<h4>Мы предоставляет возможность заказать различные комплектующие для грузовых автомобилей</h4>
			<div class="banner-bottom-grid">
				<div class="col-md-6 banner-bottom-grid-left">
					<img src="images/1.png" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-6 banner-bottom-grid-right">
					<h5>отечественного и зарубежного производства.</h5>
                    <h6>Вне зависимости от марки грузовой машины можете купить оптимальный вариант любой запчасти, ведь мы предлагаем доступные и приемлемые цены.</h6>
					<p>Данные транспортные средства постоянно перевозят тяжелый груз и подвергаются поломкам, поэтому все комплектующие, необходимые для них,
                        должны быть достаточно мощными, надежными и износостойкими. Мы предлагаем нашим клиентам именно такую продукцию, ведь сотрудничаем исключительно с проверенными производителями деталей. Мы работаем для вас, чтобы ваш автомобиль мог функционировать при любых условиях – точно и без затруднений.
                    </p>
					<div class="banner-b-left">
						<div class="banner-b-left1">
							<img src="images/1-1.png" alt=" " class="img-responsive" />
						</div>
						<div class="banner-b-left1">
							<img src="images/3.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="banner-b-left1">
							<img src="images/3-3.png" alt=" " class="img-responsive" />
						</div>
						<div class="banner-b-left1">
							<img src="images/4-4.png" alt=" " class="img-responsive" />
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="banner-b-left">
						<div class="banner-b-left1">
							<img src="images/4.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="banner-b-left1">
							<img src="images/5-5.png" alt=" " class="img-responsive" />
						</div>
						<div class="banner-b-left1">
							<img src="images/6-6.png" alt=" " class="img-responsive" />
						</div>
						<div class="banner-b-left1">
							<img src="images/7-7.png" alt=" " class="img-responsive" />
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>

<!-- //banner-bottom -->
<!-- what-we-do -->

	<div class="what-we-do" id="zakaz">
		<div class="container">
            <div class="banner-left-delivery">
                <a href="#"><img src="images/46016.png">доставка<span></span></a>
            </div>
                <div class="banner-left-delivery-post">
                    <a href="#"><img src="images/logopost.png"><span></span></a>
                </div>
            <div class="clearfix"> </div>
			<h3>Как заказать ?</h3>
			<p class="fugiat">С нами покупка запчастей – это совершенно нетрудная задача, ведь наши специалисты обладают значительным опытом,
                чтобы дать вам правильную рекомендацию по поводу подбора необходимой комплектующей.
                Для размещения запроса цен на двигатели, запчастей воспользуйтесь бесплатной онлайн консультацией
                на <span style="color: #fff;">главной странице</span> или <span style="color: #fff;">оставьте нам ваш телефон,</span> мы свяжемся с Вами.

            </p>

            <div class="what-we-do-grids">

				<div class="col-md-3 what-we-do-grid">
					<img src="images/5.png" alt=" " class="img-responsive" />
					<h4>за номером телефона</h4>
					<ul>
                        <li>
                            <a href="tel:+380983935340" style="color: #000;">
                                <!--<i class="fab fa-viber" aria-hidden="true" id="myBanner2" style="color: #000;"></i>
                                +38(098)-393-53-40 -->
                                <a href="tel:+380983935340" class="btn text-uppercase btn-border btn-orange btn-flat">+380983935340</a>

                            </a>
                        </li>
                        <li>

                        </li>
					</ul>
				</div>
				<div class="col-md-3 what-we-do-grid">
					<img src="images/6.png" alt=" " class="img-responsive" />
					<h4>выслать вопрос мейлом</h4>
					<ul>
					</ul>
                    <a href="mailto:info.atlas24@gmail.com" class="btn text-uppercase btn-border btn-orange btn-flat">info.atlas24@gmail.com</a>
				</div>
				<div class="col-md-3 what-we-do-grid">
					<img src="images/7.png" alt=" " class="img-responsive" />
                    <h4><a href="#contactform" style="color: #fff">воспользоваться формой для консультации</a></h4>
                    <ul>
					</ul>
				</div>
				<div class="col-md-3 what-we-do-grid">
					<img src="images/8.png" alt=" " class="img-responsive" />
					<h4>закажите звонок мы Вам перезвоним</h4>
                    <ul>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //what-we-do -->

<!-- window-phone-back -->


<div class="window_wrap">

    <div class="window">

        <div class="window_close">X</div>
        <p>Оставьте ваш телефон<br/>и наш консультант свяжется с вами</p>

        <form id="backPhone" name="backPhone">
            <input name="telephone" type="Tel" id="telForm" maxlength="20" placeholder="Введите ваш телефон"/>
            <button id="telButton" type="submit" form="backPhone">Заказать звонок</button>
        </form>

    </div>

</div>


<div class="telButton anim">

    <div class="telButton_border"></div>
    <div class="telButton_background" id="telButton_background"><span></span></div>
    <div class="telButton_hover">Заказать звонок</div>

</div>

<!-- //window-phone-back -->


<!-- footer -->
	<div class="footer">
	<div class="container">
		<div class="footer-left">
			<p>© 2020 Tironline.com.ua Все права защищены.</p>
		</div>
		<div class="footer-right">
			<ul>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
	</div>
<!-- //footer -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<script src="js/contactform.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>

<!-- //here ends scrolling icon -->
</body>
</html>