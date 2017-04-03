 <?php include('header.php'); ?>
 
<section class="headerIn" style="background: url('assets/images/headerIn.jpg') center;">
	<article class="text containerIn">
		<h1 class="white">DMD</h1>
	</article>
</section>

<section class="containerIn">
<div class="row tree">
	<a href="index.php">DMD</a><i class=""> /</i>
	<a href="portafolio.php">Bolsa de trabajo</a>
</div>
</section>


<section class="containerIn content">
	<h1 class="lineTitle animated fadeIn">Bolsa de Trabajo</h1>
	<h2 class="internSubtitle animated fadeIn">El éxito consiste en obtener lo que se desea. La felicidad en disfrutar lo que se obtiene. </h2>
</section>
<section class="containerIn containerBolsa">
		<article class="bolsaSearch">

			<h4 class="lineTitle searchtitle">Buscar Trabajo</h4>
			<form class="workSearch">
		        <div class="form-group">
		          <input id="searchinput" type="text" class="form-control" placeholder="Buscar por palabra clave">
		        </div>
		        <button type="submit" class="btn-red btn-red-var"><span>Buscar</span></button>
			</form>
			<h4 class="lineTitle searchtitle">Alerta de trabajo</h4>
			<form class="">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Palabra clave:">
		        </div>
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Correo:">
		        </div>
		        <button type="submit" class="btn-red btn-red-var"><span>Agregar Alerta</span></button>
			</form>

		</article>
		<article class="bolsaTable">
			<h3>Vacantes</h3>
			<table class="table-hover">
			 <thead>
				<tr>
				 <th><i class="flaticon-interface"></i>Fechas</th>				
				 <th><i class="flaticon-interface"></i>Cargo</th>				
				 <th><i class="flaticon-interface"></i>Lugar</th>        
				 <th><i class="flaticon-interface"></i>Tipo</th>
				</tr>
			 </thead>
		 <tbody>
			<tr>
			 <td data-head='Fecha'><a href="">11 de noviembre 2016</a></td>	
			 	<td data-head='Cargo'><a href=""><strong>Ejecutivo de Ventas</strong><br>
				<span>Diseño y Manufactura Digital, SA de CV</span></a></td>
		   	 	<td data-head='Lugar'><a href="">México, CDMX</a></td>
		     	<td data-head='Tipo'><a href="">Tiempo Completo</a></td>
			</tr>
			<tr>
				<td data-head='Fecha'><a href="">11 de noviembre 2016</a></td>	
			 	<td data-head='Cargo'><a href=""><strong>Ejecutivo de Ventas</strong><br>
				<span>Diseño y Manufactura Digital, SA de CV</span></a></td>
		   	 	<td data-head='Lugar'><a href="">México, CDMX</a></td>
		     	<td data-head='Tipo'><a href="">Tiempo Completo</a></td>
			</tr>
			<tr>
				<td data-head='Fecha'><a href="">11 de noviembre 2016</a></td>	
			 	<td data-head='Cargo'><a href=""><strong>Ejecutivo de Ventas</strong><br>
				<span>Diseño y Manufactura Digital, SA de CV</span></a></td>
		   	 	<td data-head='Lugar'><a href="">México, CDMX</a></td>
		     	<td data-head='Tipo'><a href="">Tiempo Completo</a></td>
			</tr>
			<tr>
				<td data-head='Fecha'><a href="">11 de noviembre 2016</a></td>	
			 	<td data-head='Cargo'><a href=""><strong>Ejecutivo de Ventas</strong><br>
				<span>Diseño y Manufactura Digital, SA de CV</span></a></td>
		   	 	<td data-head='Lugar'><a href="">México, CDMX</a></td>
		     	<td data-head='Tipo'><a href="">Tiempo Completo</a></td>
			</tr>
		 </tbody>
		</table>
		</article>
		
</section>

<?php include('contactanos.php'); ?>
<?php include('footer.php'); ?>
