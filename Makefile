
start:
	php ./src/generate_language_files.php

test:
	./vendor/bin/phpunit --coverage-html coverage.html