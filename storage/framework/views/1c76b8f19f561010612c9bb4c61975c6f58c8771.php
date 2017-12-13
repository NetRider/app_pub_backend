<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Inserisci un nuovo menù </title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
<div class="container">
    <h2>Inserisci un nuovo menù</h2><br/>
    <form method="post" action='/insertMenu'>
        <?php echo e(csrf_field()); ?>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="nome">Nome menù:</label>
                <input type="text" class="form-control" name="nome">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5"></div>
            <div class="form-group col-md-4">
                <button type="submit" class="btn btn-success" style="margin-left:38px">Aggiungi Menù</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
