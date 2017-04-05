<?php
  /*
  Template Name: dos módulos
  */
?>
<?php get_header(); ?>


<!--∆ eyecatcher In ∆-->
<section class="headerIn" style="background: url('assets/images/headerIn.jpg') center;">
	<article class="text containerIn">
		<h1 class="white" data-scrollreveal="enter up">Solidworks<sup>®</sup></h1>
	</article>
</section>


<!--∆ breadcrumbs ∆-->
<section class="containerIn">
	<div class="row tree">
		<a href="index.php">Solidworks<sup>®</sup></a><i class="">/</i>
		<a href="portafolio.php">Renueva tu suscripción</a>
	</div>
</section>

<!--∆ second menu ∆-->
<section class="menuIn margin-top">
	<ul>
		<li><a href="">Standard</a></li>
		<li><a href="">Professional</a></li>
		<li><a href="">Premium</a></li>
	</ul>
</section>


<!--∆ descript ∆-->
<section class="containerIn content">
	<?php if( have_rows('descript') ): ?>
	<?php while( have_rows('descript') ): the_row(); 
	// vars head
	 $title = get_sub_field('title');
	 $descript = get_sub_field('descript');
	  ?>
		<h1 class="lineTitle animated fadeIn"><?php echo $title; ?></h1>
		<h2 class="internSubtitle animated fadeIn"><?php echo $descript; ?>
		</h2> 
	<?php endwhile; ?>
    <?php endif; ?> 
</section>
<!--∆ descript  end ∆-->

<!--∆ main ∆-->
<section class="suscripcion">

    <!-- module One -->
    <?php if( have_rows('modone') ): ?>
	<?php while( have_rows('modone') ): the_row(); 
	 ?>

      <!-- col A -->
	  <?php if( have_rows('cola') ): ?>
	   <?php while( have_rows('cola') ): the_row(); 
	    // vars head
		 $image = get_sub_field('image');
	   ?>
			<article>
				<?php 
		        if( !empty($image) ): ?>
	            <image src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	        	<?php endif; ?>
			</article>
		<?php endwhile; ?>
    	<?php endif; ?> 


		<!-- col B -->
		<?php if( have_rows('colb') ): ?>
	    <?php while( have_rows('colb') ): the_row(); 
	    // vars head
		 $style = get_sub_field('style');
		 $title = get_sub_field('title');
		 $text = get_sub_field('text');
	    ?>
			<article class="bgRed">
				<h1 class="lineTitle animated suscripTitle fadeIn"><?php echo $title; ?></h1>
				<p><?php echo $tetx; ?>.</p>
				<a href="#" class="btn btn-primary boton-general" data-toggle="modal" data-target="#myModal">
		    	Renueva
		    	</a>
			</article>
		<?php endwhile; ?>
    	<?php endif; ?> 
	<?php endwhile; ?>
    <?php endif; ?> 

    <!-- module Two -->
    <?php if( have_rows('modtwo') ): ?>
	<?php while( have_rows('modtwo') ): the_row(); 
	 ?>

      <!-- col A -->
	  <?php if( have_rows('cola') ): ?>
	    <?php while( have_rows('cola') ): the_row(); 
	    // vars head
		 $style = get_sub_field('style');
		 $title = get_sub_field('title');
		 $text = get_sub_field('text');
	    ?>
			<article class="bgRed">
				<h1 class="lineTitle animated suscripTitle fadeIn"><?php echo $title; ?></h1>
				<p><?php echo $tetx; ?></p>
				<a href="#" class="btn btn-primary boton-general" data-toggle="modal" data-target="#myModal">
		    	Renueva
		    	</a>
			</article>
		<?php endwhile; ?>
    	<?php endif; ?> 


		<!-- col B -->
		<?php if( have_rows('colb') ): ?>
	   <?php while( have_rows('colb') ): the_row(); 
	    // vars head
		 $image = get_sub_field('image');
	   ?>
			<article>
				<?php 
		        if( !empty($image) ): ?>
	            <image src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	        	<?php endif; ?>
			</article>
		<?php endwhile; ?>
    	<?php endif; ?> 

		
	<?php endwhile; ?>
    <?php endif; ?> 	
</section>
<!--∆ main  end ∆-->



<?php get_footer(); ?>