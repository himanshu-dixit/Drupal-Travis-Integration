echo "Running PHPCS"
vendor/bin/phpcs --config-set installed_paths ~/.composer/vendor/drupal/coder/coder_sniffer
vendor/bin/phpcs -n --standard=Drupal modules/*

echo "Running Drupal Unit Tests"
cd core
../vendor/bin/phpunit --testsuite=unit
