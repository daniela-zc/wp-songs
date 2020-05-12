## Instructions

- clone repository
- create New Database as utf8_general_ci
- Import wpsongsdb.sql.gz in your new Database
- Configure your WordPress site with the following data:
  - DB_NAME : your DB name
  - DB_USER : root
  - DB_PASSWORD: root
  - DB_HOST : localhost
- To log in as admin use the following credentials:
  - wpadmin
  - WS2020\*\*

- .htaccess format

<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /[project-name]/
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /[project-name]/index.php [L]
</IfModule>


### Created by Daniela Zeledón
