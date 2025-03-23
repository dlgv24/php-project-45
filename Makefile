install:
	composer install

brain-games:
	./bin/brain-games

validate:
	composer validate

check:
	phpcbf --standard=PSR12 src/ bin/
	phpcs --standard=PSR12 src/ bin/