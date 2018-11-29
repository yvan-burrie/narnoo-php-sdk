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
>These examples will be updated as we go!

### Connect
1. [Find operators to follow](https://github.com/Narnoocom/narnoo-php-sdk/wiki/Business-Connect---Find)
2. [Search for operators to follow](https://github.com/Narnoocom/narnoo-php-sdk/wiki/Business-Connect---Search)
3. [Follow an operator](https://github.com/Narnoocom/narnoo-php-sdk/wiki/Business-Connect-Follow)
4. [List operators being followed](https://github.com/Narnoocom/narnoo-php-sdk/wiki/Business-Connect---Following)
5. [Unfollow an operator](https://github.com/Narnoocom/narnoo-php-sdk/wiki/Business-Connect---Unfollow)

### Listing
1. [Get an operator listing](https://github.com/Narnoocom/narnoo-php-sdk/wiki/Operator-Listing-Data)

### Products
1. [Get list of products](https://github.com/Narnoocom/narnoo-php-sdk/wiki/Get-list-of-products)
2. [Get product details](https://github.com/Narnoocom/narnoo-php-sdk/wiki/Get-Product-Details)

### Booking
1. [Get bookable products](https://github.com/Narnoocom/narnoo-php-sdk/wiki/Booking-Bookable-Products)
2. [Get bookable product details](https://github.com/Narnoocom/narnoo-php-sdk/wiki/Booking-Product-Details)
3. [Get the booking products reservation details](https://github.com/Narnoocom/narnoo-php-sdk/wiki/Booking-Product-Reservation-Details)
4. Get product availability 
5. [Create a booking reservation](https://github.com/Narnoocom/narnoo-php-sdk/wiki/Booking-Create-Reservation)

### Token Owners Media
1. [Image Details](https://github.com/Narnoocom/narnoo-php-sdk/wiki/Content-Images)
2. [Print Details](https://github.com/Narnoocom/narnoo-php-sdk/wiki/Content-Print-Material-PDF)
3. [Video Details](https://github.com/Narnoocom/narnoo-php-sdk/wiki/Content-Videos)
4. [Logo Details](https://github.com/Narnoocom/narnoo-php-sdk/wiki/Content-Logos)
5. [Album Details](https://github.com/Narnoocom/narnoo-php-sdk/wiki/Content-Album-Data)
