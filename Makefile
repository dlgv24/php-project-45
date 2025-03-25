.PHONY: install brain-games brain-even brain-calc brain-gcd validate lynt

install:
	composer install

brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even

brain-calc:
	./bin/brain-calc

brain-gcd:
	./bin/brain-gcd

validate:
	composer validate

lynt:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
