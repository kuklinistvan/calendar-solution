.PHONY: all res cs-postgres cs-web

all: cs-postgres cs-web

cs-postgres: res
	./cs-postgres/build.sh

cs-web: res
	./cs-web/build.sh

res:
	./resources/get.sh

