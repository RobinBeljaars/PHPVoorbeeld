<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('globalsty.scss')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body class="bg-info">
        <x-navbar/>
        <div class="card m-3 mx-auto h-75 col-6 opacity">
            <div class="card-body p-5">
                <h2>Register</h2>
                <form method="Post" action="api/register">
                    {{csrf_field()}}
                
                    <div class="form-group row">
                        <label for="name" class="col-2">Username:</label>
                        <input type="text" class="col-10 form-control @error('name') is-invalid @enderror" id="name" name="name">
                        @error('name')
                            <div class="col-12 alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>

                    <div class="form-group row">
                        <label for="email" class="col-2">Email:</label>
                        <input type="email" class="col-10 form-control @error('email') is-invalid @enderror" id="email" name="email">
                        @error('email')
                            <div class="alert alert-danger col-12">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                    
                    <div class="form-group row">
                        <label for="password" class="col-2">Password:</label>
                        <input type="password" class="col-10 form-control  @error('password') is-invalid @enderror" id="password" name="password">
                        @error('password')
                            <div class="alert alert-danger col-12">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                    
                    <div class="form-group row">
                        <button style="cursor.pointer" type="submit" class="offset-5 col-3 btn btn-primary">Submit</button>
                        <a style="cursor.pointer" href="{{url('home')}}" class="offset-1 col-3 btn btn-primary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>