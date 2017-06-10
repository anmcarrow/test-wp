FROM debian:latest

MAINTAINER "Andrey Makarov" mailbox@anmcarrow.me

ADD wordpress /var/www/

RUN apt-get update
RUN apt-get install -qy apt-utils
RUN apt-get install -qy apache2 libapache2-mod-php5 php5-sqlite
RUN a2enmod rewrite
RUN sed -i "s#/var/www/html#/var/www#g"  /etc/apache2/sites-enabled/000-default.conf
RUN chown -R www-data:www-data /var/www

ENV APACHE_CONFDIR /etc/apache2
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2/
ENV APACHE_PID_FILE /var/run/apache2/apache2.pid
ENV APACHE_DOCUMENTROOT=/var/www

EXPOSE 80

CMD ["/usr/sbin/apache2ctl", "start"]
