FROM ahgora/alpine-php5-build
ADD awl /usr/share/awl
ADD davical /usr/share/davical
RUN ln -s /usr/share/davical/htdocs /var/www/localhost/htdocs/davical
RUN apk update
RUN apk add php5-pdo
RUN apk add php5-pdo_pgsql

ADD agendav /usr/share/agendav
RUN chown apache -R /usr/share/agendav
RUN ln -s /usr/share/agendav/web/public /var/www/localhost/htdocs/agendav

RUN ln -sf /dev/stdout /var/log/apache2/access.log && \
    ln -sf /dev/stderr /var/log/apache2/error.log

ADD phpinfo.php /var/www/localhost/htdocs

RUN apk add php5-ctype
RUN apk add php5-xmlreader

CMD ["/usr/sbin/apachectl", "-D", "FOREGROUND"]
