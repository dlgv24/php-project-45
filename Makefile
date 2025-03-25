.PHONY: install brain-games brain-even brain-calc validate lynt

install:
	composer install

brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even

brain-calc:
	./bin/brain-calc

validate:
	composer validate

lynt:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
