#!/bin/bash
set -e
set -x
DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null 2>&1 && pwd )"
cd "$DIR"

DAVICAL_TXZ="davical_1.1.9.2.orig.tar.xz"
AWL_TXZ="awl_0.60.orig.tar.xz"

AGENDAV_VER="2.2.0"
AGENDAV_TGZ="agendav-$AGENDAV_VER.tar.gz"


if [ ! -f $DAVICAL_TXZ ]; then
	wget https://www.davical.org/downloads/$DAVICAL_TXZ
fi

if [ ! -f $AWL_TXZ ]; then
	wget https://www.davical.org/downloads/$AWL_TXZ
fi

if [ ! -f $AGENDAV_TGZ ]; then
    wget https://github.com/agendav/agendav/releases/download/$AGENDAV_VER/$AGENDAV_TGZ
fi

if [ ! -d davical ]; then
	mkdir davical 
	cd davical
	tar xf ../$DAVICAL_TXZ
	cd ..
fi

if [ ! -d awl ]; then
	mkdir awl
	cd awl
	tar xf ../$AWL_TXZ
	cd ..
fi

if [ ! -d agendav ]; then
    tar xf $AGENDAV_TGZ
    mv agendav-$AGENDAV_VER agendav
fi
