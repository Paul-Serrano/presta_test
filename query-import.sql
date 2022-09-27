UPDATE ps_shop_url SET domain = 'localhost', domain_ssl = 'localhost', physical_uri = '/prest_test/';
UPDATE ps_configuration SET value = 3 WHERE name = 'PS_MAIL_TYPE';
UPDATE ps_configuration SET value = 3 WHERE name = 'PS_MAIL_METHOD';
UPDATE ps_configuration SET value = 0 WHERE name IN (
    'PS_SSL_ENABLED',
    'PS_SSL_ENABLED_EVERYWHERE'
);
UPDATE ps_configuration SET value = 'jeremie@webforme.fr' WHERE name IN (
    'WFM_STOCK_MANAGER_SETTINGS_EMAIL_COPIE',
    'WFM_STOCK_MANAGER_SETTINGS_EMAIL_EXPEDITION',
    'WFM_STOCK_MANAGER_SETTINGS_EMAIL_SENDER'
);
UPDATE ps_configuration SET value = 'test' WHERE name IN (
    'WFM_STOCK_MANAGER_SETTINGS_HTACCESS_LOGIN_PASSWORD',
    'WFM_STOCK_MANAGER_SETTINGS_URL_PLATFORM',
    'WFM_STOCK_MANAGER_SETTINGS_HTACCESS_LOGIN'
);
TRUNCATE TABLE `ps_guest`;
TRUNCATE TABLE `ps_connections`;
TRUNCATE TABLE `ps_connections_source`;
TRUNCATE TABLE `ps_connections_page`;

mysql -u root -p presta_test < 

mysqldump -u root -p 1001lits > save.sql
