# Weather App
A basic weather app showcasing API usage and frontend web development.

The application utilizes XAMPP so configuration is based on XAMPP folder structure
## Install Instructions
Move ```weather-app-private``` into your PHP includes folder.

Rename ```weather-app-private``` to ```weather-app-public```.

Move ```weather-app-public``` into your htdocs folder (or equivalent).

##Initial Run
Run the following commands:
```
composer update
```

## Configuration

In settings.php:
```php
return [
    'web_services'=>[
        'api-keys'=>[
            'weather'=>'#add here', //add credentials here
        ],
        'api-links'=>[
            'weather'=>'#add here', //add credentials here
        ]
    ]
];

```

In php.ini:
```
SMTP= #credentials here
smtp_port= #credentials here
sendmail_from=#credentials here
sendmail_path= #credentials here
```

In sendmail.ini:
```
smtp_server= #credentials
smtp_port = #credentials
smtp_ssl = tls
auth_username= #credentials
auth_password= #credentials
force_sender #credentials

```