# Renew SSL

## Derived from and modified slightly
https://lightsail.aws.amazon.com/ls/docs/en_us/articles/amazon-lightsail-using-lets-encrypt-certificates-with-wordpress

### Before you begin

```
sudo mkdir  cd ~/apps/wordpress/htdocs/.well-known
sudo mkdir  cd ~/apps/wordpress/htdocs/.well-known/acme-challenge
```

### Create a shell file with which to populate the verification code

```
touch ~/apps/wordpress/htdocs/.well-known/run-renew.sh
vim ~/apps/wordpress/htdocs/.well-known/run-renew.sh
```

### Paste into the shell file file with the code below

```
DOMAIN=crossfitcambridge.ca
sudo certbot -d www.${DOMAIN} -d ${DOMAIN} --webroot -w /home/bitnami/apps/wordpress/htdocs/ --preferred-challenges http certonly
sudo mv /opt/bitnami/apache2/conf/server.key /opt/bitnami/apache2/conf/server.key.old
sudo mv /opt/bitnami/apache2/conf/server.crt /opt/bitnami/apache2/conf/server.crt.old
sudo ln -s /etc/letsencrypt/live/${DOMAIN}/privkey.pem /opt/bitnami/apache2/conf/server.key
sudo ln -s /etc/letsencrypt/live/${DOMAIN}/fullchain.pem /opt/bitnami/apache2/conf/server.crt
sudo /opt/bitnami/ctlscript.sh restart
```

### Cron job (test)

```
* * * * * cd ~/apps/wordpress/htdocs/.well-known && touch test.txt
```