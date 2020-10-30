<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{asset('globalsty.scss')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        
    </head>
    <body class=h-100>
        <div class="card h-100 bg-info p-0 col-12">
            <x-navbar/>
            
            @if(Auth::check())
            <br>
            <div class="card-body bg-white m-3 p-3 opacity">
                @foreach($task as $product)
                    <x-productlistitem productId="{{$product->id}}"/>
                @endforeach
                <div class="align-items-end row m-2">
            <span class="col-10" ></span>
                <a href="CreateProduct" class="col-2 btn btn-success">add product</a>
            </div>
            </div>
            
            @else
            <div class="card-body bg-white m-3 p-3 opacity">
                <p>
                    voordat u begint met het controleren van de stel ik eerst voor dat uw een localhost database opzet persoonlijk heb ik gebruik gemaakt van phpmyadmin via de xampp applicatie.
                    nu u een database hebt kan u de .env variabelen aanpassen. Hierbij moet u de variabelen DB_DATABASE en DB_PORT aanpassen nar uw eigen waardes.
                    Hierna kan u in de command propmt (of power shell) de volgende command uitvoeren "php artisan migrate".
                    <br><br>
                    Nu de database opgezet heb ik voor uw test data voor de product tabel.
                    die kan u met de volgende SQL querry toevoegen aan uw website.
                    <br>
                    <span class="font-weight-bold">
                        INSERT INTO `product` (`productname`, `price`, `amount`, `discription`, `sold`, `created_at`, `updated_at`) 
                        VALUES ('testproduct', 20.00, 1000, 'abc123', 0, '2020-10-27 23:00:00', '2020-10-29 07:32:42'),
                        ('test2', 10.50, 1000, 'test2 for de server', 0, '2020-10-27 23:00:00', '2020-10-27 23:00:00'),
                        ('testproductcreate', 10.50, 1000, 'abc123', 0, '2020-10-29 07:42:04', '2020-10-29 07:42:04'),
                        ('HP Pavilion 15-cw1948nd', 300.00, 3500, '15,6 inch Acer laptop', 0, '2020-10-29 11:55:34', '2020-10-29 11:55:34');
                    </span>
                    <br><br>
                    totslot kan u op de knop Register drukken om een nieuwe gebruiker toe te voegen.
                    <br><br>
                    documenten waaraan ik gewerkt heb<br>
                    <ul>
                        <li>Web.php</li>
                        <li>resources/views</li>
                        <li>public/globalstyl.scss</li>
                        <li>AuthController.php</li>
                        <li>ProductController.php</li>
                        <li>Product.php</li>
                    </ul>
                </p>
            </div>
            @endif
        </div>
    </body>
</html>
