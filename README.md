# Magento 2 Logger
Example of logger with enable/disable option and custom file name

### How to install
- Put files into /app/code folder (eg /app/code/Orlov/Logger/registrtion.php)
- Run ```php bin/magento module:enable Orlov_Logger``` to enable module
- Run ```php bin/magento setup:di:compile``` to recompile dependency injections
- Optionaly run ```php bin/magento cache:clean config``` to clean cache of configs
- Visit any frontend page
- Find log file under ```/var/log/bug-logger.log```

### Other notes
- You can change destination file name into: ```app/code/Orlov/Logger/etc/di.xml```
- You can enable/disable logger into Admin: Stores > Settings > Configuration > Orlov > Logger > General Configuration

### Resources
- https://www.mageplaza.com/magento-2-module-development/create-system-xml-configuration-magento-2.html
- https://www.mageplaza.com/magento-2-module-development/magento-2-acl-access-control-lists.html
- https://magento.stackexchange.com/a/154592
- https://magento.stackexchange.com/a/239606
