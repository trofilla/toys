		






		<div class="footer">   
			<div class="clearfix">
				<div class="footer_register">
					<a href="registration.php">Ввойти | Регистрация</a>
				</div>
				<div class="conteiner clearfix">
				<div class="footerlinks">
					<a href="/explore-social.php" class="stayintouch">
			        <img src="assets/img/Social.png" alt="Stay in touch" >
			    	</a>
				<div class="footerlinks_links">
				<ul>
			        <li><a href="#Delivery">Оплата и доставка</a></li>
			        <li><a href="About">Про нас</a></li>
			        <li><a href="galiga.com.ua">Полная версия</a></li>
			    </ul>
			    <ul class="Info">
			        <li>График работы</li>
			        <li>Понедельник-Пятница</li>
			        <li>9.00-19.00</li>
			    </ul>
				</div>
				</div>
				</div>
				<div class="footer_finish">
					All rights reserved
				</div>
			

		</div>
		</div>
		






































		<!-- Vendor scripts -->
		<script src="assets/vendor/jquery/jquery-2.2.3.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.5/owl.carousel.min.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/vendor/menu.js"></script>
		<style type="text/css">.qmfv{visibility:visible !important;}.qmfh{visibility:hidden !important;}</style><script type="text/javascript">qmad=new Object();qmad.bvis="";qmad.bhide="";</script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.5/owl.carousel.min.js"></script>

<script>
	function irMenuHover(e,a){var i=e.parent().children("ul");e.parent().children(".hov").size()>0?(e.parent().addClass("irMenuOpen"),i.stop().fadeTo(a/4,1),i.css({display:"block"})):(e.parent().removeClass("irMenuOpen"),i.stop().fadeTo(a,0,"linear",function(){i.css({display:"none"})}))}$(document).ready(function(){var e=$(".topNav"),a=parseInt(e.attr("data-fade"));null==a&&(a=0);var i=parseInt(e.attr("data-height"));null==i&&(i=12);var n=parseInt(e.attr("data-img"));null==n&&(n=0);var r=e.attr("data-imgBg");null==r&&(r="#fff"),$("li ul",e).each(function(){var a=$(this);if(a.children("li").size()>i){var s=0;if(a.append("<div class='irMenuCol"+s+" irMenuCol'></div>"),a.children(".irMenuLvl2").size()<=0){var l=0;a.children("li").each(function(){var e=$(this);a.children(".irMenuCol"+s).append(e),l++,l>=i&&(s++,a.children(".irMenuCol"+s).size()<1&&a.append("<div class='irMenuCol"+s+" irMenuCol'></div>"),l=0)}),a.addClass("irMenuStyle2")}else{var l=0,t=-1,d=[];a.children("li").each(function(){var e=$(this);e.hasClass("irMenuLvl1")?(-1!=t&&(d[l]=t,l++),t=0):t++}),d[l]=t,l=0;var c,h=-1,p=!1;a.children("li").each(function(){var e=$(this);e.hasClass("irMenuLvl1")&&(h++,c=$(this),p=0==l?!0:!1);var n=!1;if(e.hasClass("irMenuLvl1")&&l+(d[h]+1)>i&&d[h]+1<=i&&(l=1e3),e.hasClass("irMenuLvl1")&&l+1>=i&&d[h]>0&&(l=1e3,p=!0),l>=i){s++,a.children(".irMenuCol"+s).size()<1&&a.append("<div class='irMenuCol"+s+" irMenuCol'></div>"),l=0;var r=!1;e.hasClass("irMenuLvl1")||p||(n=!0,p=!0),e.hasClass("irMenuLvl1")||n||(r=!0,p=!0)}n?(a.children(".irMenuCol"+s).append(c.clone().children("a").append(" (Cont.)").parent()),l++):r&&(a.children(".irMenuCol"+s).append("<li><a class='irMenuSpacing'>&nbsp;</a></li>"),l++),a.children(".irMenuCol"+s).append(e),l++}),a.addClass("irMenuStyle3")}}else a.addClass("irMenuStyle1");n>0&&$("li",a).each(function(){var e=$(this),a=e.attr("data-img"),i=e.attr("data-imgSize"),s=parseInt(e.attr("class").replace("irMenuLvl",""));n>=s&&(e.children("a").append("<div class='irMenuImg' style='background:url("+a+") center center no-repeat "+r+";width:"+i+"px;height:"+i+"px;' ></div>"),e.addClass("irMenuImg"))});var o=e.width()+parseInt(e.css("paddingLeft"))+parseInt(e.css("paddingRight"))+parseInt(e.css("border-left-width"))+parseInt(e.css("border-right-width")),u=a.width()+parseInt(a.css("paddingLeft"))+parseInt(a.css("paddingRight"))+parseInt(a.css("border-left-width"))+parseInt(a.css("border-right-width")),v=a.parent().offset().left-e.offset().left;if(u>o){var f=0-v-(u-o)/2;a.css({left:f})}else if(u+v>o){var f=0-v+(o-u);a.css({left:f})}}),$(".topNav > li > *").hover(function(){$(this).addClass("hov"),irMenuHover($(this),a)},function(){$(this).removeClass("hov"),irMenuHover($(this),a)})});

</script>
		<script>
        $(document).ready(function(){
            $('.testimonials .owl-carousel').owlCarousel({
                navText: ['<','>'],
                responsive:{
                    0: {
                        items: 1
                    },
                    768:{
                        items: 1,
                        nav: true,
                        slideBy: 1
                    }                  
                }
            });
        });
    </script>
		<script type="text/javascript">
			$(document).ready(function () {
		$(".sub > a").click(function() {
			var ul = $(this).next(),
					clone = ul.clone().css({"height":"auto"}).appendTo(".mini-menu"),
					height = ul.css("height") === "0px" ? ul[0].scrollHeight + "px" : "0px";
			clone.remove();
			ul.animate({"height":height});
			return false;
		});
	       $('.mini-menu > ul > li > a').click(function(){
		   $('.sub a').removeClass('active');
		   $(this).addClass('active');
		}),
	       $('.sub ul li a').click(function(){
		   $('.sub ul li a').removeClass('active');
		   $(this).addClass('active');
		});
});
 </script>
		 <script type="text/javascript">
		$(document).ready(function() {
		 $(".slider").each(function () { // обрабатываем каждый слайдер
		  var obj = $(this);
		  $(obj).append("<div class='nav'></div>");
		  $(obj).find("li").each(function () {
		   $(obj).find(".nav").append("<span rel='"+$(this).index()+"'></span>"); // добавляем блок навигации
		   $(this).addClass("slider"+$(this).index());
		  });
		  $(obj).find("span").first().addClass("on"); // делаем активным первый элемент меню
		 });
		});
		function sliderJS (obj, sl) { // slider function
		 var ul = $(sl).find("ul"); // находим блок
		 var bl = $(sl).find("li.slider"+obj); // находим любой из элементов блока
		 var step = $(bl).width(); // ширина объекта
		 $(ul).animate({marginLeft: "-"+step*obj}, 500); // 500 это скорость перемотки
		}
		$(document).on("click", ".slider .nav span", function() { // slider click navigate
		 var sl = $(this).closest(".slider"); // находим, в каком блоке был клик
		 $(sl).find("span").removeClass("on"); // убираем активный элемент
		 $(this).addClass("on"); // делаем активным текущий
		 var obj = $(this).attr("rel"); // узнаем его номер
		 sliderJS(obj, sl); // слайдим
		 return false;
		});
			</script>
		<!-- Aplication scripts -->
		<!-- <script src="assets/js/script.js"></script> -->
	</body>
</html>