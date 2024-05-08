<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-primi-passi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container my-5 ">

        <h1 class="text-center mb-5 ">{{$title}}</h1>


          <div class="container">
            <nav>
                <ul class="d-flex justify-content-between ">

                    <li class="list-group">
                        <a href="{{route('header')}}">
                            {{$header}}
                        </a>
                    </li>

                    <li class="list-group">
                        <a href="{{route('main')}}">
                            {{$main}}
                        </a>
                    </li>

                    <li class="list-group">
                        <a href="{{route('footer')}}">
                            {{$footer}}
                        </a>
                    </li>

                </ul>
            </nav>
          </div>

    </div>

</body>
</html>
