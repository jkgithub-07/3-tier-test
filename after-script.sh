#!/bin/bash
set -euxo pipefail

chown apache:apache /var/www/html/index.php
chmod 644 /var/www/html/index.php

systemctl restart php-fpm
systemctl restart httpd
