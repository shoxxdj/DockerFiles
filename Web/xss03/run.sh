#!/bin/bash
/usr/sbin/apache2 -D FOREGROUND&
while true; do casperjs --ignore-ssl-errors=true --local-to-remote-url-access=true --web-security=false --ssl-protocol=any /root/script.js; sleep 3;done
rm /root/run.sh
