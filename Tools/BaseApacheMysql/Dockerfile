FROM base-apache
MAINTAINER ShoxX


RUN echo mysql-server mysql-server/root_password password | debconf-set-selections
RUN echo mysql-server mysql-server/root_password_again password | debconf-set-selections

RUN apt-get install mysql-server libmysqlclient-dev mysql-server php5-mysql libmysqlclient-dev -y

###Challenge configuration###


### Ne pas oublier de changer le mot de passe root de mysql ! ###



#Run.sh start the daemon
ADD run.sh /root/run.sh
RUN chmod 755 /root/run.sh

#Port to expose
EXPOSE 80
#The docker starting cmd
CMD ["/bin/bash","/root/run.sh"]
