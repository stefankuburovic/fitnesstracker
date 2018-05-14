<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


</head>
<body>

<form class="form-horizontal" method="POST" action="/client/create">
    {{ csrf_field() }}
    <div class="form-group">
        <label class="control-label col-sm-2" for="title">name:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="clients_name" placeholder="Enter title" name="clients_name" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="subTitle">age</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="clients_age" placeholder="Enter sub-title" name="clients_age" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="body" name="height">height</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="height" placeholder="Enter sub-title" name="height" required>
        </div>
    </div>


    <div class="form-group">
        <label class="control-label col-sm-2" for="file" name="weight">weight:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="weight" name="weight">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="file" name="trainer_id">trainer_id</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="trainer_id" name="trainer_id" value="1">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Publish</button>
        </div>
    </div>

    <div class="form-group">
        <a href="http://localhost:8000/blog" class="btn btn-warning btn-lg">back</a>
    </div>
</form>

</body>
</html>
