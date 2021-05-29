FROM ubuntu:focal

RUN apt-get update \
    && apt-get install -y software-properties-common \
    && apt-get install -y iputils-ping redis-tools \
    && add-apt-repository -y ppa:ondrej/php \
    && apt-get update \
    && apt-get install -y apache2 libapache2-mod-php7.4 php7.4 \
    php7.4-bcmath php7.4-cli php7.4-curl php7.4-dev php7.4-gd \
    php7.4-imap php7.4-intl php7.4-mbstring php7.4-mysql \
    php7.4-pgsql php7.4-pspell php7.4-xml php7.4-xmlrpc \
    php7.4-zip php-apcu php-memcached php-pear php-redis

RUN a2enmod rewrite

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get update && apt-get install -y vim nano gpg-agent \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

RUN curl -sL https://deb.nodesource.com/setup_12.x | bash - && apt-get install nodejs -y

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
