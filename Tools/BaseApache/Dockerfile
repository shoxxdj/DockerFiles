FROM ubuntu:14.04
MAINTAINER ShoxX

RUN apt-get update && apt-get upgrade -y
RUN apt-get install apache2 apache2-utils php5 php5-dev php5-gd debconf-utils -y
RUN rm /var/www/html/index.html

#Add the challenge files : 
ADD files/ /var/www/html/

#Perform the challenge configuration


##########################
#Configuration files
#Apache env
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid

#Run.sh start the daemon
ADD run.sh /root/run.sh
RUN chmod 755 /root/run.sh

#Port to expose
EXPOSE 80
#The docker starting cmd
CMD ["/bin/bash","/root/run.sh"]
