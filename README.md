# Magento 2 Logger
Example of logger with enable/disable option and custom file name

# How to install
- Put files into /app/code folder (eg /app/code/Orlov/Logger/registrtion.php)
- Run php bin/magento module:enable Orlov_Logger
- Run php bin/magento setup:di:compile
- Optionaly run php bin/magento cache:clean config
- Visit any frontend page
- Find log file under /var/log/bug-logger.log

# Other notes
- You can change destination file name into: app/code/Orlov/Logger/etc/di.xml
- You can enable/disable logger into Admin: Stores > Settings > Configuration > Orlov > Logger > General Configuration

