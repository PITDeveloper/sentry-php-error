
Fill out info in src/index.php with non redacted values then run:

docker-compose up -d

docker exec -it phpsentrytest bash

/usr/local/bin/php -f /var/www/index.php

result:
Segmentation fault (core dumped)



