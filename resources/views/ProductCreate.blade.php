<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{asset('globalsty.scss')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body class="bg-info">
        <x-navbar/>
        <div class="card m-3 mx-auto h-75 col-6 opacity">
            <div class="card-body p-5">

            @if(isset($task))
            <h2>Edit</h2>
            <form method="Post" action="{{url('EditProduct', $task->id)}}">
                {{csrf_field()}}
                <div class="form-group row">
                    <label for="productname" class="col-12">Name product: {{$task->productname}}</label>
                    <input type="hidden" id="productname" name="productname" value="{{$task->productname}}">
                </div>
                <div class="form-group row"> 
                    <label for="price" class="col-3">Product price: </label>
                    <input type="number" class="col-9 form-control  @error('price') is-invalid @enderror" step="0.01" id="price" name="price" value="{{number_format((float)$task->price, 2, '.', '')}}">
                </div>
                <div class="form-group row"> 
                    <label for="amount" class="col-3">Amount in stock: </label>
                    <input type="number" class="col-9 form-control  @error('amount') is-invalid @enderror" id="amount" name="amount" value="{{$task->amount}}">
                </div>
                <div class="form-group row"> 
                    <label for="discription" class="col-12">Discription product: </label>
                    <textarea id="discription" class="col-12 form-control  @error('discription') is-invalid @enderror" name="discription">{{$task->discription}}</textarea>
                </div>
            @else
            <h2> create</h2>
            <form method="Post" action="/CreateProduct">
                {{csrf_field()}}
                <div class="form-group row">
                    <label for="productname" class="col-3">Name Product:</label>
                    <input type="text" class="col-9 form-control  @error('productname') is-invalid @enderror" id="productname" name="productname">
                </div>
                <div class="form-group row"> 
                    <label for="price" class="col-3">Product price: </label>
                    <input type="number" class="col-9 form-control  @error('price') is-invalid @enderror" step="0.01" id="price" name="price" value="10.50">
                </div>
                <div class="form-group row"> 
                    <label for="amount" class="col-3">Amount in stock: </label>
                    <input type="number" class="col-9 form-control  @error('amount') is-invalid @enderror" id="amount" name="amount" value="1000">
                </div>
                <div class="form-group row"> 
                    <label for="discription" class="col-12">Discription product: </label><br>
                    <textarea class="col-12 form-control  @error('discription') is-invalid @enderror" id="discription" name="discription"></textarea>
                </div>
            @endif
            @error('productname')
                <div class="col-12 alert alert-danger">{{ $message }}</div>
            @enderror
            @error('price')
                <div class="col-12 alert alert-danger">{{ $message }}</div>
            @enderror
            @error('amount')
                <div class="col-12 alert alert-danger">{{ $message }}</div>
            @enderror
            @error('discription')
                <div class="col-12 alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group row">
                <input class="offset-5 col-3  btn btn-primary" type="submit" value="submit">
                <a style="cursor.pointer" href="{{url()->previous()}}" class="offset-1 col-3 btn btn-primary">Cancel</a>
            </div>
            </form>
            
            </div>
        </div>
    </body>
</html>
