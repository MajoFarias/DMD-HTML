<?php include('header.php'); ?>

<section class="headerIn" style="background: url('assets/images/headerIn.jpg') center;">
	<article class="text containerIn">
		<h1 class="white" data-scrollreveal="enter up">Solidworks<sup>®</sup></h1>
	</article>
</section>

<section class="containerIn breadcrumb">
	<div class="row tree">
		<a href="index.php">Solidworks<sup>®</sup></a><i class="">/</i>
		<a href="portafolio.php">Blog</a>
	</div>
</section>

<section class="containerIn blog" style="position:relative;">
	<h1 class="lineTitle animated fadeIn">Blog</h1>
	<article class="blogSections">
		<div>
			<div class="img-blog">
			<img src="assets/images/1.jpg" alt="">
			</div>
			<div class="blogSectionsText">
			<h3>API’s y Las ventajas de Integrarla a Procesos</h3>
			<p>¿Qué es una API?<br>
Aunque el significado de API es “Interfaz de Programación de Aplicaciones” y que es un concepto que se utiliza para...</p>
			</div>
			<div class="date">
				<a class="leermas blogbutton" href="producto-detail.php">Leer más<i class="material-icons">keyboard_arrow_right</i></a>
				<h4 class="col-xs-8 col-sm-8">31 de agosto 2016</h4>
				<p class="col-xs-4 col-sm-4"><i class="flaticon-black-1-1"></i>2</p>
			</div>
		</div>
		
		
	</article>
	<aside class="aside aside-blog col-sm-12 col-md-4">
		<div class="categories">
			<h2 class="text-bckred">Categorías</h2>
			<ul>
				<li><a href="">Avances tecnológicos</a></li>
				<li><a href="">Avances tecnológicos</a></li>
				<li><a href="">Avances tecnológicos</a></li>
				<li><a href="">Avances tecnológicos</a></li>
				<li><a href="">Avances tecnológicos</a></li>
			</ul>
		</div>
	</aside>
	
	<article class="navigator nav-blog">
		<nav aria-label="Page navigation">
			  <ul class="pagination">
			    <li>
			      <a href="#" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			      </a>
			    </li>
			    <li><a href="#">1</a></li>
			    <li><a href="#">2</a></li>
			    <li><a href="#">3</a></li>
			    <li><a href="#">4</a></li>
			    <li><a href="#">5</a></li>
			    <li>
			      <a href="#" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			      </a>
			    </li>
			  </ul>
		</nav>
	</article>

</section>

<script>

	$(document).ready(function() {
		affixAside();
	});

	function affixAside(){
		var scroll = $(window).scrollTop();
		var height_header = $("header").height();
		var height_headerIn = $(".headerIn").height();
		var height_headerBreadcrumb = $(".breadcrumb").height();
		var total_top = height_header+height_headerIn+height_headerBreadcrumb;

		var height_contactanos = $(".contactanos").height();
		var height_footer = $("footer").height();
		var total_bottom = height_contactanos+height_footer;

		$('.aside-blog').affix({
			offset: {
				top: total_top+80,
				bottom: total_bottom+270
			}
		}).on('affix-top.bs.affix', function () {
			console.log("top");
		});
	}
</script>


<?php include('contactanos.php'); ?>
<?php include('footer.php'); ?>
