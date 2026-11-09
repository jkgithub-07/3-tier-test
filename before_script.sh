#!/bin/bash
set -euxo pipefail
dnf install -y httpd php php-fpm php-mysqli
systemctl enable httpd php-fpm