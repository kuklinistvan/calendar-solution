FROM postgres:latest
ADD dba /davical_dba
ADD awl /usr/share/awl
RUN apt-get update && apt-get -y install libdbi-perl
RUN apt-get -y install libyaml-perl
RUN apt-get -y install libdbd-pg-perl
