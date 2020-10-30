<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>
<body class="bg-info">
<x-navbar/>
<div class="card h-75 m-3 p-3">
    <div class="card-body row"> 
        @if(isset($task))
            <div class="col-9 h-75 mb-2 row">
                <h2 class="border border-dark h-25 m-0 p-3 col-12">{{$task->productname}}</h2>
                <div class="border border-dark h-75 m-0 p-3 col-12">
                    {{$task->discription}}
                </div>
            </div>
            <div class="col-3 mb-2  h-75 border border-dark ">
                Op voorraad: {{$task->amount}}<br>
                Prijs: {{number_format((float)$task->price, 2, '.', '')}}
            </div>
            <div class="row col-12">
                <a href="{{url('EditProduct',$task->id)}}" class="border offset-10 col-1 btn btn-warning" style="height:40px">edit</a>
                <a class="border col-1 btn btn-danger" onclick="return confirm('Are you sure?')" style="height:40px" href="{{url('deleteProduct',$task->id)}}">delete</a>
            </div>
        @endif
    </div>
</div>
</body>