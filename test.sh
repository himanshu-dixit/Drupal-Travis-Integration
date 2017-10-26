cd core
../vendor/bin/phpunit --testsuite=unit

cd ../
vendor/bin/phpcs -n --standard=Drupal modules/*
