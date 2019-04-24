### Crontab Manager Bundle

## Installation

Composer install the package:
```
composer require acrnogor/crontab-manager-bundle 
```

Create a symfony config yaml file:
 - ```%PROJECT_DIR% /config/packages/acrnogor_crontab_manager.yml```, in example:
```yaml
acrnogor_crontab_manager:
  user: www-data
  cron_jobs:
    - '*/8 * * * * /usr/bin/php /var/www/test/test.php > /dev/null 2>&1'
    - '*/8 * * * * /usr/bin/php /var/www/sf4/bin/console debug:router > /dev/null 2>&1'
```

Add the bundle to the project - modify your ```config/bundles.php``` and add the bundle like this:
```php
<?php
return [
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Acrnogor\CrontabManagerBundle\AcrnogorCrontabManagerBundle::class => ['all' => true]
];
```
