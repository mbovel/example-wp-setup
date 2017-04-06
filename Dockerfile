FROM wordpress:cli-php7.0

USER root
RUN echo "memory_limit = -1" > /usr/local/etc/php/conf.d/composer-fix.ini
RUN apk add --no-cache git

USER www-data
RUN cd $HOME \
    && git clone https://github.com/mbovel/wp-backup-restore-command \
    && wp package install wp-backup-restore-command
