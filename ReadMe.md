
 - Fill out info in src/index.php with non redacted values
 - `docker-compose up -d`
 - `docker exec -it phpsentrytest bash`
 - Run `composer install`
 - `/usr/local/bin/php -f /var/www/html/index.php`
 
result:

    Segmentation fault (core dumped)
