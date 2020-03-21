.PHONY: all res cs-postgres cs-web

cs-postgres: res
	./cs-postgres/build.sh

cs-web: res
	./cs-web/build.sh

all: cs-postgres cs-web


res:
	./resources/get.sh

