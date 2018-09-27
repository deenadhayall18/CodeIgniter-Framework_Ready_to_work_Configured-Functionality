# CodeIgniter-Framework_Ready_to_work_Configured-Functionality
CodeIgniter Framework with ready to work configured functionality that includes proper .htaccess file, appropriate config files, autoload files, database config file for both MYSQL and SQL.....


CodeIgniter is a powerful PHP framework with a very small footprint,
built for developers who need a simple and elegant toolkit to create full-featured web applications.
CodeIgniter was created by EllisLab, and is now a project of the British Columbia Institute of Technology.


#  Added Fuctionalities

## .htaccess 
In general, .htaccess is the default name for a file that is used to indicate
who can or cannot access the contents of a specific file directory from the Internet or an intranet. 
The .htaccess file is a configuration file that resides in a directory and indicates
which users or groups of users can be allowed access to the files contained in that directory.
### Configured Codes
CodeIgniter Framework comes up with added .htaccess file inside the application folder.In this project, .htaccess has been placed outside
the application folder for better fast and secure access to the Landing page..

```sh
RewriteEngine on
RewriteCond $1 !^(index\.php|resources|robots\.txt)
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1 [L,QSA]
```

## autoload.php

CodeIgniter comes with an “Auto-load” feature that permits libraries, helpers, and models to be initialized automatically every time the system runs. If you need certain resources globally throughout your application you should consider auto-loading them for convenience.

The following items can be loaded automatically:

- Classes found in the libraries/ directory
- Helper files found in the helpers/ directory
- Custom config files found in the config/ directory
- Language files found in the system/language/ directory
- Models found in the models/ folder

### Configured Codes
```sh
$autoload['libraries'] = array('database','session','form_validation','user_agent','pagination');

 $autoload['helper'] = array('url', 'file','form','cookie','security');

 Sample_model.php
 Codeiginter commonly used select, gte,update,delete query sample structures 
 ```
