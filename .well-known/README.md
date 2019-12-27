# Renew SSL

## Derived from and modified slightly
https://lightsail.aws.amazon.com/ls/docs/en_us/articles/amazon-lightsail-using-lets-encrypt-certificates-with-wordpress

### Start verification

```
sudo certbot -d www.crossfitcambridge.ca -d crossfitcambridge.ca --webroot  --preferred-challenges http certonly
sudo ln -s /etc/letsencrypt/live/crossfitcambridge.ca-0001/privkey.pem /opt/bitnami/apache2/conf/server.key
sudo ln -s /etc/letsencrypt/live/crossfitcambridge.ca-0001/fullchain.pem /opt/bitnami/apache2/conf/server.crt
sudo /opt/bitnami/ctlscript.sh restart
```