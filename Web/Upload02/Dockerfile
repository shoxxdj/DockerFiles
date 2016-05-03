FROM base-apache
MAINTAINER ShoxX

ADD files/site/ /var/www/html/
RUN mkdir /var/www/html/uploads
RUN chmod 777 /var/www/html/uploads
RUN chown www-data:www-data /var/www/html/uploads/ -R

ADD files/flag /

EXPOSE 80
CMD ["/bin/bash","/root/run.sh"]
