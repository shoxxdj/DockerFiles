FROM eh-base-apache
MAINTAINER ShoxX

ADD files/ /var/www/html/
#RUN echo 'include_path=".:/var/www/html/"' >> /etc/php5/apache2/php.ini

EXPOSE 80
CMD ["/bin/bash","/root/run.sh"]