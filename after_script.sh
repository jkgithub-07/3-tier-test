#!/bin/bash
set -euxo pipefail
systemctl restart php-fpm
systemctl restart httpd