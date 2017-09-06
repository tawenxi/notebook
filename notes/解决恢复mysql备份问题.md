show variables like 'sql_mode';
set sql_mode='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
SET GLOBAL sql_mode = '';
SET sql_mode = '';

php artisan make:migration add_account_number_to_zb_details_table --table=zb_details
