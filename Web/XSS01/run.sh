#!/bin/bash
cron -f&
/usr/sbin/apache2 -D FOREGROUND
rm /root/run.sh
