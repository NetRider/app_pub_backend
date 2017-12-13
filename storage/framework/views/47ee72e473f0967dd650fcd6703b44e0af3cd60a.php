<!DOCTYPE html>
<html>
	<head>
    	<meta charset="utf-8">
    	<title>Inserisci un nuovo piatto </title>
    	<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
	</head>
	<body>
		<div class="container">
      		<h2>Inserisci un nuovo piatto</h2><br/>
      		<form method="post" action='/insertPiatto'>
<?php echo e(csrf_field()); ?>

<div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
        <label for="nome">Nome piatto:</label>
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
        <label for="menu_id">Categoria:</label>
        <select name="categoria_id">
            <?php $__currentLoopData = $categorie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($c->id); ?>"><?php echo e($c->nome); ?></option>
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
        <button type="submit" class="btn btn-success" style="margin-left:38px">Aggiungi Piatto</button>
    </div>
</div>
</form>
</div>
</div>
</body>
</html>
