

## Db configuration example:

**DB_CONNECTION=pgsql**<br>
**DB_HOST=project_db**<br>
**DB_PORT=5432**<br>
**DB_DATABASE=test**<br>
**DB_USERNAME=postgres**<br>
**DB_PASSWORD=postgres**<br>


## Example of mail settings:

**MAIL_MAILER=smtp**<br>
**MAIL_HOST=smtp.yandex.ru**<br>
**MAIL_PORT=587**<br>
**MAIL_USERNAME="cenarev@yandex.ru"**<br>
**MAIL_PASSWORD="password123"**<br>
**MAIL_ENCRYPTION=tls**<br>
**MAIL_FROM_ADDRESS="cenarev@yandex.ru"**<br>
**MAIL_FROM_NAME="${APP_NAME}"**<br>

## Example of sms notification settings:<br>
**$smsAeroMessage = new SmsAeroMessage('zhenua27@gmail.com', 'A2XntsaddEFXZu71rxd541c7nxfkPzC');**<br>


## Project Launch

**docker-compose** **up**<br>
**php** **artisan** **migrate**<br>

