# PHPVoorbeeld
voordat u begint met het controleren van de stel ik eerst voor dat uw een localhost database opzet persoonlijk heb ik gebruik gemaakt van phpmyadmin via de xampp applicatie.
nu u een database hebt kan u de .env variabelen aanpassen. Hierbij moet u de variabelen DB_DATABASE en DB_PORT aanpassen nar uw eigen waardes.

Hierna kan u in de command propmt (of power shell) de volgende command uitvoeren "php artisan migrate".

Nu de database opgezet heb ik voor uw test data voor de product tabel. die kan u met de volgende SQL querry toevoegen aan uw website.
  "INSERT INTO `product` (`productname`, `price`, `amount`, `discription`, `sold`, `created_at`, `updated_at`) 
                        VALUES ('testproduct', 20.00, 1000, 'abc123', 0, '2020-10-27 23:00:00', '2020-10-29 07:32:42'),
                        ('test2', 10.50, 1000, 'test2 for de server', 0, '2020-10-27 23:00:00', '2020-10-27 23:00:00'),
                        ('testproductcreate', 10.50, 1000, 'abc123', 0, '2020-10-29 07:42:04', '2020-10-29 07:42:04'),
                        ('HP Pavilion 15-cw1948nd', 300.00, 3500, '15,6 inch Acer laptop', 0, '2020-10-29 11:55:34', '2020-10-29 11:55:34');"
