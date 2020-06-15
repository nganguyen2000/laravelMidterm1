<!DOCTYPE html>
<html lang="en">
<head>
  <title>Du lich viet</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style type="text/css">
        .flex{
            display: flex;
        }
        .menu{
            width: 900px;
            margin-top: 90px;
        }
        .tour{
            display: grid;
            grid-template-columns: auto auto auto;
            margin-top: 40px;
        }
        .tour1{
            margin-top: 30px;
        }
        .price{
            color: palevioletred;
            font-size: 22px;
            margin-left: 50px;
        }
        .title{
            font-size: 22px;

        }

  </style>
</head>
<body>
    <div class="container">
        <div class="flex">
            <div><img src="../img/logo.jpg" alt="" height="150px" width="200px"></div>
            <div class="menu">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">WebSiteName</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Du Lich</a></li>
                        <li><a href="#">Book Ve may bay</a></li>
                        <li><a href="#">Book khach san</a></li>
                        <li><a href="#">Dich vu visa</a></li>
                    </ul>
                    </div>
                </nav>
            </div>
     </div>
     <div class="tour">
         @foreach ($tours as $tour)
             <div class="tour1">

                <img src="{{'/storage/'.$tour->image}}" alt="" height="250px" width="300px">
                <p class="title">{{$tour->name}}</p>
                <p>Lich trinh: {{$tour->Schedule}}</p>
                <p>Khoi hanh:{{$tour->depart}}</p>
                <div class="flex">
                    <p>Danh cho: {{$tour->number}} nguoi</p>
                    <p class="price">{{$tour->price}}đ</p>
                </div>
             </div>
         @endforeach

     </div>

    </div>
</body>
</html>