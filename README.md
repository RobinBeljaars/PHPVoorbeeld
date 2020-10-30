# project setup
wanneer de project op je pc gecloned is voor dan de volgende commands uit in je project directory
'composer install',
'npm install' of 'yarn',
'copy .env.example .env'(windows) of cp .env.example .env,
'php artisan key:generate',
(tussenstap) verander de  variabelen DB_DATABAE en DB_PORT naar de waardes voor uw localhost database,
"php artisan migrate",
in de SQL database voer de volgende querry uit "INSERT INTO `product` (`productname`, `price`, `amount`, `discription`, `sold`, `created_at`, `updated_at`) 
                        VALUES ('testproduct', 20.00, 1000, 'abc123', 0, '2020-10-27 23:00:00', '2020-10-29 07:32:42'),
                        ('test2', 10.50, 1000, 'test2 for de server', 0, '2020-10-27 23:00:00', '2020-10-27 23:00:00'),
                        ('testproductcreate', 10.50, 1000, 'abc123', 0, '2020-10-29 07:42:04', '2020-10-29 07:42:04'),
                        ('HP Pavilion 15-cw1948nd', 300.00, 3500, '15,6 inch Acer laptop', 0, '2020-10-29 11:55:34', '2020-10-29 11:55:34');"
