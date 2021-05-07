# Beem PHP Client

## Usage

### Quick Examples

```php

require 'vendor/autoload.php';

use Beem\SDK\Services\SMS;

// Instantiate with credentials
$smsHandler = new SMS([
    'api_key' => 'YOUR_API_KEY',
    'secret_key' => 'SECRET_KEY',    
]);
// Setup the transaction
$data = array(
    'source_addr' => 'INFO',
    'encoding' => 0,
    'schedule_time' => '',
    'message' => 'Hello World',
    'recipients' => [array('recipient_id' => '1','dest_addr'=>'255700000001'),
);

// Execute
$result = $smsHandler->send($data);

// Print results
var_dump($result);

```

### Testing

```bash
composer test
```

## Opening Issues

If you have a feature request, or you encounter a bug, please file an issue on [our issue tracker on GitHub](https://github.com/beem-africa/php-client/issues).

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please review our [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email [alphaolomi@gmail.com](mailto:alphaolomi@gmail.com) instead of using the issue tracker.

## Credits

-   [Alpha Olomi](https://github.com/alphaolomi)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
