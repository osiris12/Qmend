<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <h1 style="text-align: center">Qmend</h1><br><br>
            <h2 style="text-align: center">{{$business->name}} Restaurant</h2>
            <div class="row">
                @foreach($business->reviews as $review)
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{$review->source->name}}</h5>
                                <p class="card-text">Reviews: {{$review->number_of_reviews}}</p>
                                <p class="card-text">Score: {{$review->score}}</p>
                                <a href="{{$review->link}}" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div><br>
        <pre>
            {{$json}}
        </pre>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
</html>
