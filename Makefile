install:
	composer install

brain-games:
	./bin/brain-games

validate:
	composer validate

lynt:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
