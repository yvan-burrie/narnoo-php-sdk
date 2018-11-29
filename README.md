# narnoo-php-sdk

The narnoo-php-sdk is a library to interact with Narnoo's RESTFUL API. It performs all the heavy coding work so PHP developers can quickly make calls to our API.

> Detailed information about using this API will be added to this page and the repo Wiki.

## Work in progress using the latest API
[Narnoo.com](https://www.narnoo.com)

[Register a user account](https://app.narnoo.com/register)


# Get started with the PHP SDK

## Installation

Install our library with composer
```
composer require narnoo/php-sdk
```

## Authentication

You can find your business API keys from within your business's Narnoo.com account. Only businesses with an approved plan have access to their API keys.

![alt text](https://s3.amazonaws.com/staticdn.narnoo.com/assets/api-dev-screen.jpg "Narnoo API Screenshot")

Once you have your API keys then you can authenticate your API calls and return your bearer token.

```php

<?php
include "vendor/autoload.php";
use Narnoo\Authenticate\Authenticate;

$authen 	= new Authenticate();
$key 		= 'xxxxxxxxxxxx';
$secret 	= 'xxxxxxxxxxxx';
$token 		= $authen->getToken($key,$secret);

//For testing purposes we print out the response. However, you would save this taken to your database for future calls.
echo "<pre>";
print_r($token);
echo "</pre>";
?>

```

## Example Calls
### Products
These examples will be updated as we go!
1. [Get list of products](https://github.com/Narnoocom/narnoo-php-sdk/wiki/Get-list-of-products)
2. [Get product details](https://github.com/Narnoocom/narnoo-php-sdk/wiki/Get-Product-Details)