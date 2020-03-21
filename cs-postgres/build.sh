#!/bin/bash

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null 2>&1 && pwd )"
cd "$DIR"

cp -r ../resources/davical/dba dba
cp -r ../resources/awl awl

docker build -t kuklinistvan/container_solution-postgres .
