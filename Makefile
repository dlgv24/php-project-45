.PHONY: install brain-games brain-even validate lynt

install:
	composer install

brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even

validate:
	composer validate

lynt:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
