FROM base-apache
MAINTAINER shoxx

RUN apt-get install php5-sqlite

#PhantomJS
#RUN apt-get install -y build-essential g++ flex bison gperf ruby perl libsqlite3-dev libfontconfig1-dev libicu-dev libfreetype6 libssl-dev 
#libpng-dev libjpeg-dev python libx11-dev libxext-dev wget
RUN apt-get install wget
RUN cd /usr/local/share;wget https://bitbucket.org/ariya/phantomjs/downloads/phantomjs-1.9.7-linux-x86_64.tar.bz2;tar xjf phantomjs-1.9.7-linux-x86_64.tar.bz2;ln -s /usr/local/share/phantomjs-1.9.7-linux-x86_64/bin/phantomjs /usr/local/share/phantomjs;ln -s /usr/local/share/phantomjs-1.9.7-linux-x86_64/bin/phantomjs /usr/local/bin/phantomjs;ln -s /usr/local/share/phantomjs-1.9.7-linux-x86_64/bin/phantomjs /usr/bin/phantomjs


COPY files/site /var/www/html
COPY files/conf /etc/apache2
RUN chown www-data:www-data -R /var/www/html/challengeUtils
RUN chown www-data:www-data -R /var/www/html/challengeUtils/database.sqlite



COPY files/cron /tmp/
RUN crontab /tmp/crontab

ADD files/phantom/ /root/
ADD run.sh /root/run.sh
EXPOSE 80
CMD ["/bin/bash","/root/run.sh"]
