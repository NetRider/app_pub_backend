insert_categoria.blade.php<!DOCTYPE html>
<html>
	<head>
    	<meta charset="utf-8">
    	<title>Laravel 5.5 CRUD Tutorial With Example From Scratch </title>
    	<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
	</head>
	<body>
		<div class="container">
      		<h2>Crea una nuova categoria</h2><br/>
      		<form method="post" action='/insertCategoria' enctype="multipart/form-data">
				 <?php echo e(csrf_field()); ?>

		        <div class="row">
			        <div class="col-md-4"></div>
			          	<div class="form-group col-md-4">
			            	<label for="nome">Nome Categoria:</label>
			            	<input type="text" class="form-control" name="nome">
			          	</div>
			        </div>
				<div class="row">
		        	<div class="col-md-4"></div>
		            <div class="form-group col-md-4">
		            	<label for="descrizione">Descrizione:</label>
		            	<input type="text" class="form-control" name="descrizione">
		            </div>
		        </div>
				<div class="row">
		        	<div class="col-md-4"></div>
		            <div class="form-group col-md-4">
		            	<label for="menu_id">Menu:</label>
						<select name="menu_id">
							<?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($m->id); ?>"><?php echo e($m->nome); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
		            </div>
		        </div>
				<div class="row">
				   <div class="col-md-4"></div>
				   <div class="form-group col-md-4">
					   <label for="immagine">Immagine:</label>
					   <input type="file" name="immagine">
				   </div>
			   </div>
				<div class="row">
		        	<div class="col-md-5"></div>
		        	<div class="form-group col-md-4">
		            	<button type="submit" class="btn btn-success" style="margin-left:38px">Aggiungi Categoria</button>
		          	</div>
		        </div>
  			</form>
		</div>
    </div>
  </body>
</html>
