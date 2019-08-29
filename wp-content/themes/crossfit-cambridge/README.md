# Configure Bitnami to allow 'localhost' SQL access:
https://docs.bitnami.com/virtual-machine/apps/wordpress/administration/connect-remotely/

#Bitnami test IP (may not be active after launch):
3.90.254.169

#Requirements:
Enable emails
```

```
You will need to install NPM on your system
```
sudo apt-get npm
```
#Setup:
```
cd wp-content/themes/crossfit-cambridge/
npm install
sudo npm install gulp -g
```
#Develop
This will let you update SCSS and JS files and compile to the /dist directory
```
npm start
```
#Deploy
This will compile a one time export into the /dist directory
```
npm run deploy
```
#Local dev (OSX)
```
# phpmyadmin #
ssh -N -L 8888:127.0.0.1:80 -i {your_pem_key} bitnami@3.90.254.169

# database #
ssh -N -L 8889:127.0.0.1:3306 -i {your_pem_key} bitnami@3.90.254.169

```
#Local dev (Windows)
https://docs.bitnami.com/aws/faq/get-started/access-phpmyadmin/