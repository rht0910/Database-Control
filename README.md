== Installing DatabaseControl ==

Linux: Run following command:
 - cd <webserver_root>/db
 - chmod 777 configure.php setup ./
 - chown www-data configure.php
 - run ./setup

Minimal Requirements:
 - Apache2
 - Can use .htaccess, .htpasswd
 - Can use DirectoryIndex
 - Apache2 Module:
   - auth_digest
   - do not enable: auth_basic
   - mod_so.c, core.c (Mostly installed by default)
 - Can use php5 or php7 or php7.0
 - Least PHP 5.6
 - Development env: PHP 7.1.0
 - Supported Permission(`chmod`), User Permissions(`chown`)
 - Found MySQL or Microsoft SQL Server, PostgreSQL, and others, can use least one.
 - Found and can use `/bin/sh`, `rm`, `chmod`
 
 Recommended:
 - Apache 2.4
 - php7 (PHP 7.0 or later)
 - and others are same of `Minimal Requirements`.
