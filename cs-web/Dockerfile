FROM ahgora/alpine-php5-build
ADD awl /usr/share/awl
ADD davical /usr/share/davical
ADD infcloud /usr/share/infcloud
RUN ln -s /usr/share/davical/htdocs /var/www/localhost/htdocs/davical
RUN apk update
RUN apk add php5-pdo
RUN apk add php5-pdo_pgsql

ADD agendav /usr/share/agendav
RUN chown apache -R /usr/share/agendav
RUN ln -s /usr/share/agendav/web/public /var/www/localhost/htdocs/agendav
RUN ln -s /usr/share/infcloud /var/www/localhost/htdocs/infcloud

RUN ln -sf /dev/stdout /var/log/apache2/access.log && \
    ln -sf /dev/stderr /var/log/apache2/error.log

ADD phpinfo.php /var/www/localhost/htdocs

RUN apk add php5-ctype
RUN apk add php5-xmlreader

RUN mkdir /usr/share/infcloud/external-config && rm /usr/share/infcloud/config.js &&  ln -s /usr/share/infcloud/external-config/config.js /usr/share/infcloud/config.js

CMD ["/usr/sbin/apachectl", "-D", "FOREGROUND"]
