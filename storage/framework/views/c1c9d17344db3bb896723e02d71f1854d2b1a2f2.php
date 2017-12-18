<?php $__env->startSection('title', 'Monthy\'s webservice'); ?>

<?php $__env->startSection('content'); ?>
<body class="main">
<main role="main">

	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron">
		<div class="container blackback">
			<h1 class="display-3 white">Monthy's webservice</h1>
			<p class="white">Servizio web per gestire gli elementi da visualizzare nella tua app</p>
		</div>
	</div>

	<div class="container">
		<!-- Three columns of text below the carousel -->
		<div class="row">
			<div class="col-md-6 mycol" id="c" onclick="location.href='/listCategorie';">
				<div class="col-md-12 text-center">
				<h2 class="vcenter">Categorie</h2>
				<p>Crea, modifica ed elimina le categorie</p>
					<button class="btn btn-success">Gestisci <span class="glyphicon glyphicon-chevron-right"></span></button>
			</div>
			</div><!-- /.col-lg-4 -->
			<div class="col-md-6 mycol" id="p" onclick="location.href='/listPiatti';">
				<div class="col-md-12 text-center">
				<h2 class="vcenter">Piatti</h2>
				<p>Crea, modifica ed elimina i piatti</p>
					<button class="btn btn-success">Gestisci <span class="glyphicon glyphicon-chevron-right"></span></button>
			</div>
			</div><!-- /.col-lg-4 -->
			<div class="col-md-12 mycol" id="e" onclick="location.href='/listEventi';">
				<div class="col-md-12 text-center">
				<h2 class="vcenter">Eventi</h2>
				<p>Crea, modifica ed elimina un evento</p>
					<button class="btn btn-success">Gestisci <span class="glyphicon glyphicon-chevron-right"></span></button>
			</div>
			</div><!-- /.col-lg-4 -->
		</div>
	</div><!-- /.row -->
</main>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>