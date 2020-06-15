<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Add new tour</title>
    <style type="text/css">
        h1{
            text-align: center;
            color: pink;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h1>Add new tour</h1>
        <form action="/admin/store" method="Post" enctype="multipart/form-data">
            @csrf 
            <div class="form-group">
                <label for="">name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Type tour</label>
                <input type="text" name="typetour" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Schedule</label>
                <input type="text" name="Schedule" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Depart</label>
                <input type="text" name="depart" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Number People</label>
                <input type="text" name="number" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="number" name="price">
            </div>
            <div class="form-group">
                <label for="">image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <button class="bt btn-info" type="submit">
                Add
            </button>

        </form>
    </div>
</body>
</html>