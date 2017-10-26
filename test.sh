vendor/bin/phpcs --config-set installed_paths ~/.composer/vendor/drupal/coder/coder_sniffer
vendor/bin/phpcs -n --standard=Drupal modules/*

cd core
../vendor/bin/phpunit --testsuite=unit
