
# PHP Site
This class can get URLs related with the current request site.

## Requirement
1. PHP 7 (7.3 Recommanded).
2. Composer.

## Insallation
Installing this package is very simple, first ensure you have the right PHP version and composer installed then in your terminal/(command prompt) run:
``` composer require lablnet/site```

## Feature
- Base Site URL
- Current page URL
- Redirect to other page
- Goto previous page
- Generate salts.

## Example
```php
<?php

use Lablnet\Site;

require_once '../vendor/autoload.php';

echo 'site url: ';
//for site url
echo Site::SiteUrl();

echo '<br> Random salts: ';

//for slug,random string
echo Site::Salts(10);

//for redirect
//Site::Redirect();
```

## Methods

- `siteUrl()` Get the site url with current page
- `siteBaseUrl()` Get the site base url
- `crrentPage()` Get the current
- `getBase()` Get the domain name
- `getUri()`  Get the URI
- `redirect($path)` Redirect to page, `$path` optional, if 	`$path` is not specify then it will redirect to base url of site, this function also support `prev` as `path` so it will redirect page to previous.
- `segmentUrl()` Get URL part by `/`
- `getFirstSegment($segments)` Get first segment of URL, `$segments` Required, segments return by `segmentUrl()`
- `getLastSegment($segments)` Get last segment of URL  `$segments` Required, segments return by `segmentUrl()`
- `salts(int $length, $special = false)` Generate the salt, `$length` length of salt, `$special` Either include special chars or not.


## Contributions  
There is still a lot of work to do, so feel free to contribute to open `PR`  
  
## License  
MIT  
  
## Support  
Donate coffee?  
here is the bitcoin address  
[![Balance](https://img.balancebadge.io/btc/37x6PA4qtPu2fQnYdW5U7jztYhbchASpBV.svg)](https://img.balancebadge.io/btc/37x6PA4qtPu2fQnYdW5U7jztYhbchASpBV.svg)

   ```37x6PA4qtPu2fQnYdW5U7jztYhbchASpBV```  
  
Thanks you so much.

## Disclaimer
**I don't Accept any responsibility for any illegal usage**