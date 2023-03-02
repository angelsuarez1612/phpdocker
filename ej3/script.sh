#!/bin/sh
while ! mysql -u ${USER_BOOKMEDIK} -p${PASS_BOOKMEDIK} -h ${DATABASE_HOST} -e ";" ; do
sleep 1
done

mysql -u $USER_BOOKMEDIK --password=$PASS_BOOKMEDIK -h $DATABASE_HOST $BD_BOOKMEDIK < /var/www/html/schema.sql
/usr/sbin/apache2ctl -D FOREGROUND
