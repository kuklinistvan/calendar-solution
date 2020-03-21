#!/bin/bash
DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null 2>&1 && pwd )"
cd "$DIR"

cp -r ../resources/awl awl
cp -r ../resources/davical davical
cp -r ../resources/agendav agendav
cp -r ../resources/infcloud infcloud

docker build -t kuklinistvan/calendar_solution-web .
