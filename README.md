# quipt-api-php

This package is for QUIPT API (https://www.getquipt.com/api/) integration.
## Getting Started

Follow the instruction to install and use this package.

### Prerequisites

This is package use guzzle for requests.

### Installing

You can use following command to get the package


```bash
$ composer require hkonnet/quipt-api-php
```

Or add it to `composer.json` manually:

```json
"require": {
    "hkonnet/quipt-api-php": "^1.0"
}
```

Register the service provider by adding it to the providers key in config/app.php. Also register the facade by adding it to the aliases key in config/app.php. Run update composer command after that.

 ```bash
 $ composer update
 ```
