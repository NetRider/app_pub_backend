<!DOCTYPE html>
<html>
	<head>
    	<meta charset="utf-8">
    	<title>Laravel 5.5 CRUD Tutorial With Example From Scratch </title>
    	<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
	</head>
	<body>
		<div class="container">
      		<h2>Lista delle categorie</h2><br/>
			<?php $__currentLoopData = $categorie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    			<div class="row">
					<div class="col-md-4">
						<span><?php echo e($categoria->nome); ?><span>
					</div>
					<div class="col-md-4">
						<span><?php echo e($categoria->descrizione); ?><span>
					</div>
					<div class="col-md-4">
						<img src="<?php echo e(Storage::url($categoria->immagine)); ?>" alt="Image not found">
					</div>
				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
    </div>
  </body>
</html>
