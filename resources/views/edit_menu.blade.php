<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Modifica menù </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <h2>Modifica menù</h2><br/>
    <form method="post" action='/insertMenu'>
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="nome">Nome menù:</label>
                <input type="text" class="form-control" name="nome" value="{{$menu->nome}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5"></div>
            <div class="form-group col-md-4">
                <button type="submit" class="btn btn-success" style="margin-left:38px">Modifica Menù</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
