# Demo Opencart website for Fluxstore, MStore app
[![N|Solid](http://news.inspireui.com/wp-content/uploads/2017/06/powerbuy-1.png)](http://inspireUI.com)

### Installation
-   Create a database in mysql and import database file (database/opencart.sql)
-   Change the config.php and admin/config.php to your database connection and your website.
    ```
    define('WEBSITE_URL', 'http://localhost:8888/fluxstore_opencart/');
    define('WEBSITE_DIRECTORY', '/Users/admin/Documents/Research/fluxstore_opencart/');
    define('CACHE_STORAGE_DIRECTORY', '/Users/admin/Documents/storage/');


    define('DB_HOSTNAME', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_DATABASE', 'fluxstore_opencart');
    ```
-   Account login: admin / admin

-   ##### MStore app:
    -   Update file *src/common/AppConfig.json* to change new Opencart URL
    
-   ##### FluxStore app:
    -   Copy file *example/opencart/config.dart* and *example/opencart/config_en.json* and override the files in *lib/common* folder and change url website as well.

### Support
Please post the issue ticket with your Envato username and purchase code to ask for installing help or troubleshooting from InspireUI support team - https://github.com/inspireui/support/issues
        
Thank you very much!