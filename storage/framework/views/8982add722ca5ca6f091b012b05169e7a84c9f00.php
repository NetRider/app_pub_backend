<?php $__env->startSection('title', 'Lista Categorie'); ?>

<?php $__env->startSection('content'); ?>
	<h2>Lista delle categorie</h2><br/>
	<div class="row">
		<div class="col-md-2">
			<button class="btn btn-primary" onclick="location.href='/';"><span class="glyphicon glyphicon-home"></span> Torna alla home</button>
		</div>
		<div class="col-md-offset-8 col-md-2">
			<button class="btn btn-success" onclick="location.href='/formCategoria';"><span class="glyphicon glyphicon-plus"></span> Aggiungi Categoria</button>
		</div>
	</div>
	<hr>
	<table  class="table table-hover">
		<thead>
		<tr>
			<th scope="col">Nome</th>
			<th scope="col">Descrizione</th>
			<th scope="col">Immagine</th>
			<th scope="col"></th>
		</tr>
		</thead>
		<tbody>
	<?php $__currentLoopData = $categorie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($categoria->nome); ?></td>
			<td><?php echo e($categoria->descrizione); ?></td>
			<td><img src="<?php echo e(Storage::url($categoria->immagine)); ?>" alt="Image not found" height="50" width="auto"></td>
			<td><button class="btn btn-default" onclick="location.href='/editCategoria/<?php echo e($categoria->id); ?>';"><span class="glyphicon glyphicon-edit"></span> Modifica</button>
				<button class="btn btn-danger" onclick="location.href='/destroyCategoria/<?php echo e($categoria->id); ?>';"><span class="glyphicon glyphicon-trash"></span> Elimina</button>
			</td>
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>