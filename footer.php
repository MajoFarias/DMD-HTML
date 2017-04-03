<footer>
	<section>
		<article>
			<div><img src="assets/images/dmd-white.png" alt="">
				<ul>
					<li>
						<p>Correo</p>
						<a href="">contactar@dmd.com.mx</a>
					</li>
					<li>
						<p>Soporte</p>
						<a href="">01 800 363 4357</a>
					</li>
					<li>
						<p>Ventas</p>
						<a href="">01 800 890 9038</a>
					</li>
				</ul>
			</div>
			<div>
				<ul>
					<li><a href=""><i class="flaticon-arrow-1"></i>Descargas Gratuitas</a></li>
					<li><a href=""><i class="flaticon-symbols"></i>Visita nuestro blog</a></li>
					<li><a href=""><i class="flaticon-interface"></i>Subscríbete al Newsletter</a></li>
					<li><a href=""><i class="icon-svgsdmd-01"></i>Ver último Newsletter</a></li>

				</ul>
			</div>
		</article>
		<article>
			<div>
				<h4>Soporte</h4>
				<ul>
					<li><a href="">Chat en vivo</a></li>
					<li><a href="">Llamada IP</a></li>
					<li><a href="">Guías y Tutoriales</a></li>
					<li><a href="">FAQ’s</a></li>
				</ul>
				<h4>Síguenos</h4>
				<div class="socialmedia">
					<a href=""><i class="glyph-icon flaticon-social"></i></a>
					<a href=""><i class="glyph-icon flaticon-social-1"></i></a>
					<a href=""><i class="glyph-icon flaticon-link"></i></a>
					<a href=""><i class="glyph-icon flaticon-video"></i></a>
				</div>
			</div>
			<div>
				<h4>Solidworks</h4>
				<ul>
					<li><a>Diseño</a></li>
					<li><a>Validación de diseño</a></li>
					<li><a>Colaboración y automatización</a></li>
					<li><a>Comunicación</a></li>
					<li><a>Manufactura</a></li>
					<li><a>Inspección</a></li>
					<li><a>Solidworks 2017</a></li>
				</ul>

			</div>
			<div>
				<h4>Simulia</h4>
				<ul>
					<li>
						<a>Abaqus</a>
						<p>Realistic simulation with FEA multiphysics</p>
					</li>
					<li>
						<a>Isight</a>
						<p>Process Automation & Design Optimization</p>
					</li>
					<li>
						<a>Tosca</a>
						<p>Non-Parametric Design Optimization</p>
					</li>
					<li>
						<a>fe-safe</a>
						<p>Predict & Analyze Product Life</p>
					</li>
				</ul>
			</div>
		</article>
	</section>
	<section><p>Todos los derechos reservados DMD 2016 | <a href="">Aviso de Privacidad</a></p></section>
</footer>




<script src="assets/js/main.js"></script>	
<script src="assets/js/owl.carousel.js"></script>
<script src="assets/js/jquery.mobile.custom.js"></script>
<script src="assets/js/scrollReveal.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/modernizr.js"></script>
<script>

$(document).ready(function(){

$('.carousel').carousel({
  interval: 8000
})

/*	$(document).on('click', '.goDown', function(event) {
		$(".iconGoDown").each(function(index, el) {
			$(this).removeClass('deg');
		});
		var parent = $(this).parent();
		var icon = $(parent).find('.iconGoDown').addClass('deg');
	});*/

	

	//nav//

	$('.nav').find('li').addClass('dropdown');

	//swipe
	$(".tab-content").swiperight(function() {
		var $tab = $('#tablist .active').prev();
		if ($tab.length > 0)
			$tab.find('a').tab('show');
	});
	$(".tab-content").swipeleft(function() {
		var $tab = $('#tablist .active').next();
		if ($tab.length > 0)
			$tab.find('a').tab('show');
	});

	//mobile swipe
	$(".swipe").swiperight(function() {
		$(this).carousel('prev');
	});
	$(".swipe").swipeleft(function() {
		$(this).carousel('next');
	});

    //search
    $(".search").click(function(event) {
    	if ( $("#formsearch").is(":visible") ) {
    		$( "#formsearch" ).fadeOut();
    	} 
    	else {
    		$( "#formsearch" ).fadeIn();
    		$("#searchinput").focus();
    	}
    });
    window.onscroll = function() {
    	$("#formsearch").css('display', 'none');
    };

    $("#searchinput").focusout(function(){
    	$("#formsearch").css('display', 'none');

    });

	//Carousel soluciones
	var owl = $("#owl-demo");
	owl.owlCarousel({
		items : 3,
		itemsDesktop : [1000,3],
		itemsDesktopSmall : [900,2],
		itemsTablet: [600,1],
		itemsMobile : false
	});

	// Custom Navigation Events
	$(".next").click(function(){
		owl.trigger('owl.next');
	})
	$(".prev").click(function(){
		owl.trigger('owl.prev');
	})
	$(".play").click(function(){
		owl.trigger('owl.play',1000);
	})
	$(".stop").click(function(){
		owl.trigger('owl.stop');
	});


	//Contacto slide opener//
	$(document).on('click', '.contact-opener', function(event) {
		event.preventDefault();
		var parent = $(this).parent();
		if($(parent).hasClass('active')){
			$(parent).removeClass('active').addClass('inactive');º
		}
		else if($(parent).hasClass('inactive')){
			$(parent).removeClass('inactive').addClass('active');
		}
	});


  	//Wow//
	wow = new WOW({
		animateClass: 'animated',
		offset: 100,
		callback: function(box) {
			console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
		}
	});
	wow.init();

	$(document).on('click', '#moar', function(event) {
		var section = document.createElement('section');
		section.className = 'section--purple wow fadeInDown';
		this.parentNode.insertBefore(section, this);
	});


	//flex con columnas//
	if ($(window).width() <= 768){	
		$(".equal").addClass("row");
		$(".equal").removeClass("flexi");
	}
	else{
		$(".equal").addClass("flexi");
		$(".equal").removeClass("row");
	}

});

//header fixed effect//
$(window).scroll(function() {
	var scroll = $(window).scrollTop();

	if (scroll >= 50) {
		$(".clearMargin").addClass("addMargin");
	} else {
		$(".clearMargin").removeClass("addMargin");
	}
});

/*

//aside fixed effect//
$(window).scroll(function() {
	var scroll = $(window).scrollTop();

	if (scroll >= 500) {
		$(".aside-blog").addClass("aside-fixed");
	} else {
		$(".aside-blog").removeClass("aside-fixed");
	}

	if (scroll >= 1850) {
		$(".aside-blog").addClass("aside-no-fixed");
	} else {
		$(".aside-blog").removeClass("aside-no-fixed");
	}
});
*/

$(".carousel-inner > div:first-child").addClass("active");
$(".tabi:first-child").addClass("active");

</script>

</body>
</html>