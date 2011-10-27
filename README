# PHPNimble

PHPNimble. Like PHPSpry but more nimble.

## Configuration

php.ini:

```
display_errors = On
```

.htaccess:

```
<IfModule mod_rewrite.c>
RewriteEngine On

# Send all non valid-file requests through the routing script
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php?q=$1 [QSA,L]

# Not Found
ErrorDocument 404 /404.php

</IfModule>
```