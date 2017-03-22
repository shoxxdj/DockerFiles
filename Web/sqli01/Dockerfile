FROM base-apachemysql
MAINTAINER ShoxX

ADD files/sql.sql /tmp/
ADD files/site/ /var/www/html/


RUN /etc/init.d/mysql start && \
	sleep 5 &&\ 
	mysql -u root -e "SOURCE /tmp/sql.sql" &&\ 
	echo 'UPDATE mysql.user SET password=PASSWORD("iuysx,tghè-çuyt_212sdsà@_è") where User="root";' | mysql --user=root 

RUN echo "extension=mysql.so" >> /etc/php5/apache2/php.ini

RUN rm /tmp/sql.sql


EXPOSE 80
CMD ["/bin/bash","/root/run.sh"]
