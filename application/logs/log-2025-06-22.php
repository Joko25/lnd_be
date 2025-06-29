<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2025-06-22 08:44:57 --> Config Class Initialized
INFO - 2025-06-22 08:44:57 --> Hooks Class Initialized
DEBUG - 2025-06-22 08:44:57 --> UTF-8 Support Enabled
INFO - 2025-06-22 08:44:57 --> Utf8 Class Initialized
INFO - 2025-06-22 08:44:57 --> URI Class Initialized
INFO - 2025-06-22 08:44:57 --> Router Class Initialized
INFO - 2025-06-22 08:44:57 --> Output Class Initialized
INFO - 2025-06-22 08:44:57 --> Security Class Initialized
DEBUG - 2025-06-22 08:44:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 08:44:57 --> Input Class Initialized
INFO - 2025-06-22 08:44:57 --> Language Class Initialized
INFO - 2025-06-22 08:44:57 --> Loader Class Initialized
INFO - 2025-06-22 08:44:57 --> Helper loaded: url_helper
INFO - 2025-06-22 08:44:57 --> Helper loaded: file_helper
INFO - 2025-06-22 08:44:57 --> Database Driver Class Initialized
INFO - 2025-06-22 08:44:57 --> Email Class Initialized
DEBUG - 2025-06-22 08:44:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 08:44:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 08:44:57 --> Controller Class Initialized
INFO - 2025-06-22 08:44:57 --> Helper loaded: form_helper
INFO - 2025-06-22 08:44:57 --> Form Validation Class Initialized
DEBUG - 2025-06-22 08:44:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 08:44:57 --> Database Driver Class Initialized
INFO - 2025-06-22 08:44:57 --> Model "Crud" initialized
ERROR - 2025-06-22 08:44:57 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-22 08:44:57 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-22 08:58:55 --> Config Class Initialized
INFO - 2025-06-22 08:58:55 --> Config Class Initialized
INFO - 2025-06-22 08:58:55 --> Hooks Class Initialized
INFO - 2025-06-22 08:58:55 --> Hooks Class Initialized
DEBUG - 2025-06-22 08:58:55 --> UTF-8 Support Enabled
DEBUG - 2025-06-22 08:58:55 --> UTF-8 Support Enabled
INFO - 2025-06-22 08:58:55 --> Utf8 Class Initialized
INFO - 2025-06-22 08:58:55 --> Utf8 Class Initialized
INFO - 2025-06-22 08:58:55 --> URI Class Initialized
INFO - 2025-06-22 08:58:55 --> URI Class Initialized
INFO - 2025-06-22 08:58:55 --> Router Class Initialized
INFO - 2025-06-22 08:58:55 --> Router Class Initialized
INFO - 2025-06-22 08:58:55 --> Output Class Initialized
INFO - 2025-06-22 08:58:55 --> Output Class Initialized
INFO - 2025-06-22 08:58:55 --> Security Class Initialized
INFO - 2025-06-22 08:58:55 --> Security Class Initialized
DEBUG - 2025-06-22 08:58:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-22 08:58:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 08:58:55 --> Input Class Initialized
INFO - 2025-06-22 08:58:55 --> Input Class Initialized
INFO - 2025-06-22 08:58:55 --> Language Class Initialized
INFO - 2025-06-22 08:58:55 --> Language Class Initialized
INFO - 2025-06-22 08:58:55 --> Loader Class Initialized
INFO - 2025-06-22 08:58:55 --> Loader Class Initialized
INFO - 2025-06-22 08:58:55 --> Helper loaded: url_helper
INFO - 2025-06-22 08:58:55 --> Helper loaded: url_helper
INFO - 2025-06-22 08:58:55 --> Helper loaded: file_helper
INFO - 2025-06-22 08:58:55 --> Helper loaded: file_helper
INFO - 2025-06-22 08:58:55 --> Database Driver Class Initialized
INFO - 2025-06-22 08:58:55 --> Database Driver Class Initialized
INFO - 2025-06-22 08:58:55 --> Email Class Initialized
INFO - 2025-06-22 08:58:55 --> Email Class Initialized
DEBUG - 2025-06-22 08:58:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 08:58:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 08:58:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 08:58:55 --> Controller Class Initialized
INFO - 2025-06-22 08:58:55 --> Helper loaded: form_helper
INFO - 2025-06-22 08:58:55 --> Form Validation Class Initialized
DEBUG - 2025-06-22 08:58:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 08:58:55 --> Database Driver Class Initialized
INFO - 2025-06-22 08:58:55 --> Model "Crud" initialized
ERROR - 2025-06-22 08:58:55 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-22 08:58:55 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-22 08:58:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 08:58:55 --> Controller Class Initialized
INFO - 2025-06-22 08:58:55 --> Helper loaded: form_helper
INFO - 2025-06-22 08:58:55 --> Form Validation Class Initialized
DEBUG - 2025-06-22 08:58:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 08:58:55 --> Database Driver Class Initialized
INFO - 2025-06-22 08:58:55 --> Model "Crud" initialized
ERROR - 2025-06-22 08:58:55 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-22 08:58:55 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-22 08:58:57 --> Config Class Initialized
INFO - 2025-06-22 08:58:57 --> Hooks Class Initialized
DEBUG - 2025-06-22 08:58:57 --> UTF-8 Support Enabled
INFO - 2025-06-22 08:58:57 --> Utf8 Class Initialized
INFO - 2025-06-22 08:58:57 --> URI Class Initialized
INFO - 2025-06-22 08:58:57 --> Router Class Initialized
INFO - 2025-06-22 08:58:57 --> Output Class Initialized
INFO - 2025-06-22 08:58:57 --> Security Class Initialized
DEBUG - 2025-06-22 08:58:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 08:58:57 --> Input Class Initialized
INFO - 2025-06-22 08:58:57 --> Language Class Initialized
INFO - 2025-06-22 08:58:57 --> Loader Class Initialized
INFO - 2025-06-22 08:58:57 --> Helper loaded: url_helper
INFO - 2025-06-22 08:58:57 --> Helper loaded: file_helper
INFO - 2025-06-22 08:58:57 --> Database Driver Class Initialized
INFO - 2025-06-22 08:58:57 --> Email Class Initialized
DEBUG - 2025-06-22 08:58:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 08:58:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 08:58:57 --> Controller Class Initialized
INFO - 2025-06-22 08:58:57 --> Helper loaded: form_helper
INFO - 2025-06-22 08:58:57 --> Form Validation Class Initialized
DEBUG - 2025-06-22 08:58:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 08:58:57 --> Database Driver Class Initialized
INFO - 2025-06-22 08:58:57 --> Model "Crud" initialized
INFO - 2025-06-22 08:58:57 --> Config Class Initialized
INFO - 2025-06-22 08:58:57 --> Hooks Class Initialized
DEBUG - 2025-06-22 08:58:57 --> UTF-8 Support Enabled
INFO - 2025-06-22 08:58:57 --> Utf8 Class Initialized
INFO - 2025-06-22 08:58:57 --> URI Class Initialized
INFO - 2025-06-22 08:58:57 --> Router Class Initialized
INFO - 2025-06-22 08:58:57 --> Output Class Initialized
INFO - 2025-06-22 08:58:57 --> Security Class Initialized
DEBUG - 2025-06-22 08:58:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 08:58:57 --> Input Class Initialized
INFO - 2025-06-22 08:58:57 --> Language Class Initialized
INFO - 2025-06-22 08:58:57 --> Loader Class Initialized
INFO - 2025-06-22 08:58:57 --> Helper loaded: url_helper
INFO - 2025-06-22 08:58:57 --> Helper loaded: file_helper
INFO - 2025-06-22 08:58:57 --> Database Driver Class Initialized
INFO - 2025-06-22 08:58:57 --> Email Class Initialized
DEBUG - 2025-06-22 08:58:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 08:58:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 08:58:57 --> Controller Class Initialized
INFO - 2025-06-22 08:58:57 --> Helper loaded: form_helper
INFO - 2025-06-22 08:58:57 --> Form Validation Class Initialized
DEBUG - 2025-06-22 08:58:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 08:58:57 --> Database Driver Class Initialized
INFO - 2025-06-22 08:58:57 --> Model "Crud" initialized
DEBUG - 2025-06-22 08:58:57 --> Email class already loaded. Second attempt ignored.
INFO - 2025-06-22 08:58:57 --> Model "Emails" initialized
ERROR - 2025-06-22 08:58:57 --> Unable to delete cache file for login
INFO - 2025-06-22 08:58:57 --> File loaded: /var/www/html/hris_lnd/application/views/login.php
INFO - 2025-06-22 08:58:57 --> Final output sent to browser
DEBUG - 2025-06-22 08:58:57 --> Total execution time: 0.0962
INFO - 2025-06-22 08:58:59 --> Config Class Initialized
INFO - 2025-06-22 08:58:59 --> Hooks Class Initialized
DEBUG - 2025-06-22 08:58:59 --> UTF-8 Support Enabled
INFO - 2025-06-22 08:58:59 --> Utf8 Class Initialized
INFO - 2025-06-22 08:58:59 --> URI Class Initialized
INFO - 2025-06-22 08:58:59 --> Router Class Initialized
INFO - 2025-06-22 08:58:59 --> Output Class Initialized
INFO - 2025-06-22 08:58:59 --> Security Class Initialized
DEBUG - 2025-06-22 08:58:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 08:58:59 --> Input Class Initialized
INFO - 2025-06-22 08:58:59 --> Language Class Initialized
INFO - 2025-06-22 08:58:59 --> Loader Class Initialized
INFO - 2025-06-22 08:58:59 --> Helper loaded: url_helper
INFO - 2025-06-22 08:58:59 --> Helper loaded: file_helper
INFO - 2025-06-22 08:58:59 --> Database Driver Class Initialized
INFO - 2025-06-22 08:58:59 --> Email Class Initialized
DEBUG - 2025-06-22 08:58:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 08:58:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 08:58:59 --> Controller Class Initialized
INFO - 2025-06-22 08:58:59 --> Model "FormTestModel" initialized
INFO - 2025-06-22 08:58:59 --> Helper loaded: form_helper
INFO - 2025-06-22 08:58:59 --> Form Validation Class Initialized
INFO - 2025-06-22 08:58:59 --> Database Driver Class Initialized
INFO - 2025-06-22 08:58:59 --> Model "Crud" initialized
DEBUG - 2025-06-22 08:58:59 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 08:58:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 08:58:59 --> File loaded: /var/www/html/hris_lnd/application/views/template/header_mobile_lnd.php
INFO - 2025-06-22 08:58:59 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/form-test.php
INFO - 2025-06-22 08:58:59 --> Final output sent to browser
DEBUG - 2025-06-22 08:58:59 --> Total execution time: 0.1838
INFO - 2025-06-22 08:59:00 --> Config Class Initialized
INFO - 2025-06-22 08:59:00 --> Hooks Class Initialized
DEBUG - 2025-06-22 08:59:00 --> UTF-8 Support Enabled
INFO - 2025-06-22 08:59:00 --> Utf8 Class Initialized
INFO - 2025-06-22 08:59:00 --> URI Class Initialized
INFO - 2025-06-22 08:59:00 --> Router Class Initialized
INFO - 2025-06-22 08:59:00 --> Output Class Initialized
INFO - 2025-06-22 08:59:00 --> Security Class Initialized
DEBUG - 2025-06-22 08:59:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 08:59:00 --> Input Class Initialized
INFO - 2025-06-22 08:59:00 --> Language Class Initialized
INFO - 2025-06-22 08:59:00 --> Loader Class Initialized
INFO - 2025-06-22 08:59:00 --> Helper loaded: url_helper
INFO - 2025-06-22 08:59:00 --> Helper loaded: file_helper
INFO - 2025-06-22 08:59:00 --> Database Driver Class Initialized
INFO - 2025-06-22 08:59:00 --> Email Class Initialized
DEBUG - 2025-06-22 08:59:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 08:59:00 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 08:59:00 --> Controller Class Initialized
INFO - 2025-06-22 08:59:00 --> Helper loaded: form_helper
INFO - 2025-06-22 08:59:00 --> Form Validation Class Initialized
DEBUG - 2025-06-22 08:59:00 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 08:59:00 --> Database Driver Class Initialized
INFO - 2025-06-22 08:59:00 --> Model "Crud" initialized
INFO - 2025-06-22 08:59:00 --> Final output sent to browser
DEBUG - 2025-06-22 08:59:00 --> Total execution time: 0.1579
INFO - 2025-06-22 09:08:10 --> Config Class Initialized
INFO - 2025-06-22 09:08:10 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:08:10 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:08:10 --> Utf8 Class Initialized
INFO - 2025-06-22 09:08:10 --> URI Class Initialized
INFO - 2025-06-22 09:08:10 --> Router Class Initialized
INFO - 2025-06-22 09:08:10 --> Output Class Initialized
INFO - 2025-06-22 09:08:10 --> Security Class Initialized
DEBUG - 2025-06-22 09:08:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:08:10 --> Input Class Initialized
INFO - 2025-06-22 09:08:10 --> Language Class Initialized
INFO - 2025-06-22 09:08:10 --> Loader Class Initialized
INFO - 2025-06-22 09:08:10 --> Helper loaded: url_helper
INFO - 2025-06-22 09:08:10 --> Helper loaded: file_helper
INFO - 2025-06-22 09:08:10 --> Database Driver Class Initialized
INFO - 2025-06-22 09:08:10 --> Email Class Initialized
DEBUG - 2025-06-22 09:08:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:08:10 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:08:10 --> Controller Class Initialized
INFO - 2025-06-22 09:08:10 --> Model "FormTestModel" initialized
INFO - 2025-06-22 09:08:10 --> Helper loaded: form_helper
INFO - 2025-06-22 09:08:10 --> Form Validation Class Initialized
INFO - 2025-06-22 09:08:10 --> Database Driver Class Initialized
INFO - 2025-06-22 09:08:10 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:08:10 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:08:10 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:08:10 --> File loaded: /var/www/html/hris_lnd/application/views/template/header_mobile_lnd.php
INFO - 2025-06-22 09:08:10 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/form-test.php
INFO - 2025-06-22 09:08:10 --> Final output sent to browser
DEBUG - 2025-06-22 09:08:10 --> Total execution time: 0.0554
INFO - 2025-06-22 09:08:11 --> Config Class Initialized
INFO - 2025-06-22 09:08:11 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:08:11 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:08:11 --> Utf8 Class Initialized
INFO - 2025-06-22 09:08:11 --> URI Class Initialized
INFO - 2025-06-22 09:08:11 --> Router Class Initialized
INFO - 2025-06-22 09:08:11 --> Output Class Initialized
INFO - 2025-06-22 09:08:11 --> Security Class Initialized
DEBUG - 2025-06-22 09:08:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:08:11 --> Input Class Initialized
INFO - 2025-06-22 09:08:11 --> Language Class Initialized
INFO - 2025-06-22 09:08:11 --> Loader Class Initialized
INFO - 2025-06-22 09:08:11 --> Helper loaded: url_helper
INFO - 2025-06-22 09:08:11 --> Helper loaded: file_helper
INFO - 2025-06-22 09:08:11 --> Database Driver Class Initialized
INFO - 2025-06-22 09:08:11 --> Email Class Initialized
DEBUG - 2025-06-22 09:08:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:08:11 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:08:11 --> Controller Class Initialized
INFO - 2025-06-22 09:08:11 --> Helper loaded: form_helper
INFO - 2025-06-22 09:08:11 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:08:11 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:08:11 --> Database Driver Class Initialized
INFO - 2025-06-22 09:08:11 --> Model "Crud" initialized
INFO - 2025-06-22 09:08:11 --> Final output sent to browser
DEBUG - 2025-06-22 09:08:11 --> Total execution time: 0.0790
INFO - 2025-06-22 09:08:49 --> Config Class Initialized
INFO - 2025-06-22 09:08:49 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:08:49 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:08:49 --> Utf8 Class Initialized
INFO - 2025-06-22 09:08:49 --> URI Class Initialized
INFO - 2025-06-22 09:08:49 --> Router Class Initialized
INFO - 2025-06-22 09:08:49 --> Output Class Initialized
INFO - 2025-06-22 09:08:49 --> Security Class Initialized
DEBUG - 2025-06-22 09:08:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:08:49 --> Input Class Initialized
INFO - 2025-06-22 09:08:49 --> Language Class Initialized
INFO - 2025-06-22 09:08:49 --> Loader Class Initialized
INFO - 2025-06-22 09:08:49 --> Helper loaded: url_helper
INFO - 2025-06-22 09:08:49 --> Helper loaded: file_helper
INFO - 2025-06-22 09:08:49 --> Database Driver Class Initialized
INFO - 2025-06-22 09:08:49 --> Email Class Initialized
DEBUG - 2025-06-22 09:08:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:08:49 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:08:49 --> Controller Class Initialized
INFO - 2025-06-22 09:08:49 --> Model "FormTestModel" initialized
INFO - 2025-06-22 09:08:49 --> Helper loaded: form_helper
INFO - 2025-06-22 09:08:49 --> Form Validation Class Initialized
INFO - 2025-06-22 09:08:49 --> Database Driver Class Initialized
INFO - 2025-06-22 09:08:49 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:08:49 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:08:49 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:08:49 --> File loaded: /var/www/html/hris_lnd/application/views/template/header_mobile_lnd.php
INFO - 2025-06-22 09:08:49 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/form-test.php
INFO - 2025-06-22 09:08:49 --> Final output sent to browser
DEBUG - 2025-06-22 09:08:49 --> Total execution time: 0.0387
INFO - 2025-06-22 09:08:49 --> Config Class Initialized
INFO - 2025-06-22 09:08:49 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:08:49 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:08:49 --> Utf8 Class Initialized
INFO - 2025-06-22 09:08:49 --> URI Class Initialized
INFO - 2025-06-22 09:08:49 --> Router Class Initialized
INFO - 2025-06-22 09:08:49 --> Output Class Initialized
INFO - 2025-06-22 09:08:49 --> Security Class Initialized
DEBUG - 2025-06-22 09:08:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:08:49 --> Input Class Initialized
INFO - 2025-06-22 09:08:49 --> Language Class Initialized
INFO - 2025-06-22 09:08:49 --> Loader Class Initialized
INFO - 2025-06-22 09:08:49 --> Helper loaded: url_helper
INFO - 2025-06-22 09:08:49 --> Helper loaded: file_helper
INFO - 2025-06-22 09:08:49 --> Database Driver Class Initialized
INFO - 2025-06-22 09:08:49 --> Email Class Initialized
DEBUG - 2025-06-22 09:08:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:08:49 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:08:49 --> Controller Class Initialized
INFO - 2025-06-22 09:08:49 --> Helper loaded: form_helper
INFO - 2025-06-22 09:08:49 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:08:49 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:08:49 --> Database Driver Class Initialized
INFO - 2025-06-22 09:08:50 --> Model "Crud" initialized
INFO - 2025-06-22 09:08:50 --> Final output sent to browser
DEBUG - 2025-06-22 09:08:50 --> Total execution time: 0.0936
INFO - 2025-06-22 09:09:20 --> Config Class Initialized
INFO - 2025-06-22 09:09:20 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:09:20 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:09:20 --> Utf8 Class Initialized
INFO - 2025-06-22 09:09:20 --> URI Class Initialized
INFO - 2025-06-22 09:09:20 --> Router Class Initialized
INFO - 2025-06-22 09:09:20 --> Output Class Initialized
INFO - 2025-06-22 09:09:20 --> Security Class Initialized
DEBUG - 2025-06-22 09:09:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:09:20 --> Input Class Initialized
INFO - 2025-06-22 09:09:20 --> Language Class Initialized
INFO - 2025-06-22 09:09:20 --> Loader Class Initialized
INFO - 2025-06-22 09:09:20 --> Helper loaded: url_helper
INFO - 2025-06-22 09:09:20 --> Helper loaded: file_helper
INFO - 2025-06-22 09:09:20 --> Database Driver Class Initialized
INFO - 2025-06-22 09:09:20 --> Email Class Initialized
DEBUG - 2025-06-22 09:09:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:09:20 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:09:20 --> Controller Class Initialized
INFO - 2025-06-22 09:09:20 --> Model "FormTestModel" initialized
INFO - 2025-06-22 09:09:20 --> Helper loaded: form_helper
INFO - 2025-06-22 09:09:20 --> Form Validation Class Initialized
INFO - 2025-06-22 09:09:20 --> Database Driver Class Initialized
INFO - 2025-06-22 09:09:20 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:09:20 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:09:20 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:09:20 --> File loaded: /var/www/html/hris_lnd/application/views/template/header_mobile_lnd.php
INFO - 2025-06-22 09:09:20 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/form-test.php
INFO - 2025-06-22 09:09:20 --> Final output sent to browser
DEBUG - 2025-06-22 09:09:20 --> Total execution time: 0.0457
INFO - 2025-06-22 09:09:20 --> Config Class Initialized
INFO - 2025-06-22 09:09:20 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:09:20 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:09:20 --> Utf8 Class Initialized
INFO - 2025-06-22 09:09:20 --> URI Class Initialized
INFO - 2025-06-22 09:09:20 --> Router Class Initialized
INFO - 2025-06-22 09:09:20 --> Output Class Initialized
INFO - 2025-06-22 09:09:20 --> Security Class Initialized
DEBUG - 2025-06-22 09:09:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:09:20 --> Input Class Initialized
INFO - 2025-06-22 09:09:20 --> Language Class Initialized
INFO - 2025-06-22 09:09:20 --> Loader Class Initialized
INFO - 2025-06-22 09:09:20 --> Helper loaded: url_helper
INFO - 2025-06-22 09:09:20 --> Helper loaded: file_helper
INFO - 2025-06-22 09:09:20 --> Database Driver Class Initialized
INFO - 2025-06-22 09:09:20 --> Email Class Initialized
DEBUG - 2025-06-22 09:09:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:09:20 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:09:20 --> Controller Class Initialized
INFO - 2025-06-22 09:09:20 --> Helper loaded: form_helper
INFO - 2025-06-22 09:09:20 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:09:20 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:09:20 --> Database Driver Class Initialized
INFO - 2025-06-22 09:09:20 --> Model "Crud" initialized
INFO - 2025-06-22 09:09:20 --> Final output sent to browser
DEBUG - 2025-06-22 09:09:20 --> Total execution time: 0.0646
INFO - 2025-06-22 09:10:22 --> Config Class Initialized
INFO - 2025-06-22 09:10:22 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:10:22 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:10:22 --> Utf8 Class Initialized
INFO - 2025-06-22 09:10:22 --> URI Class Initialized
INFO - 2025-06-22 09:10:22 --> Router Class Initialized
INFO - 2025-06-22 09:10:22 --> Output Class Initialized
INFO - 2025-06-22 09:10:22 --> Security Class Initialized
DEBUG - 2025-06-22 09:10:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:10:22 --> Input Class Initialized
INFO - 2025-06-22 09:10:22 --> Language Class Initialized
INFO - 2025-06-22 09:10:22 --> Loader Class Initialized
INFO - 2025-06-22 09:10:22 --> Helper loaded: url_helper
INFO - 2025-06-22 09:10:22 --> Helper loaded: file_helper
INFO - 2025-06-22 09:10:22 --> Database Driver Class Initialized
INFO - 2025-06-22 09:10:22 --> Email Class Initialized
DEBUG - 2025-06-22 09:10:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:10:22 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:10:22 --> Controller Class Initialized
INFO - 2025-06-22 09:10:22 --> Model "FormTestModel" initialized
INFO - 2025-06-22 09:10:22 --> Helper loaded: form_helper
INFO - 2025-06-22 09:10:22 --> Form Validation Class Initialized
INFO - 2025-06-22 09:10:22 --> Database Driver Class Initialized
INFO - 2025-06-22 09:10:22 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:10:22 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:10:22 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:10:22 --> File loaded: /var/www/html/hris_lnd/application/views/template/header_mobile_lnd.php
INFO - 2025-06-22 09:10:22 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/form-test.php
INFO - 2025-06-22 09:10:22 --> Final output sent to browser
DEBUG - 2025-06-22 09:10:22 --> Total execution time: 0.0811
INFO - 2025-06-22 09:10:23 --> Config Class Initialized
INFO - 2025-06-22 09:10:23 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:10:23 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:10:23 --> Utf8 Class Initialized
INFO - 2025-06-22 09:10:23 --> URI Class Initialized
INFO - 2025-06-22 09:10:23 --> Router Class Initialized
INFO - 2025-06-22 09:10:23 --> Output Class Initialized
INFO - 2025-06-22 09:10:23 --> Security Class Initialized
DEBUG - 2025-06-22 09:10:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:10:23 --> Input Class Initialized
INFO - 2025-06-22 09:10:23 --> Language Class Initialized
INFO - 2025-06-22 09:10:23 --> Loader Class Initialized
INFO - 2025-06-22 09:10:23 --> Helper loaded: url_helper
INFO - 2025-06-22 09:10:23 --> Helper loaded: file_helper
INFO - 2025-06-22 09:10:23 --> Database Driver Class Initialized
INFO - 2025-06-22 09:10:23 --> Email Class Initialized
DEBUG - 2025-06-22 09:10:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:10:23 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:10:23 --> Controller Class Initialized
INFO - 2025-06-22 09:10:23 --> Helper loaded: form_helper
INFO - 2025-06-22 09:10:23 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:10:23 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:10:23 --> Database Driver Class Initialized
INFO - 2025-06-22 09:10:23 --> Model "Crud" initialized
INFO - 2025-06-22 09:10:23 --> Final output sent to browser
DEBUG - 2025-06-22 09:10:23 --> Total execution time: 0.0420
INFO - 2025-06-22 09:10:28 --> Config Class Initialized
INFO - 2025-06-22 09:10:28 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:10:28 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:10:28 --> Utf8 Class Initialized
INFO - 2025-06-22 09:10:28 --> URI Class Initialized
INFO - 2025-06-22 09:10:28 --> Router Class Initialized
INFO - 2025-06-22 09:10:28 --> Output Class Initialized
INFO - 2025-06-22 09:10:28 --> Security Class Initialized
DEBUG - 2025-06-22 09:10:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:10:28 --> Input Class Initialized
INFO - 2025-06-22 09:10:28 --> Language Class Initialized
INFO - 2025-06-22 09:10:28 --> Loader Class Initialized
INFO - 2025-06-22 09:10:28 --> Helper loaded: url_helper
INFO - 2025-06-22 09:10:28 --> Helper loaded: file_helper
INFO - 2025-06-22 09:10:28 --> Database Driver Class Initialized
INFO - 2025-06-22 09:10:28 --> Email Class Initialized
DEBUG - 2025-06-22 09:10:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:10:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:10:28 --> Controller Class Initialized
INFO - 2025-06-22 09:10:28 --> Model "FormTestModel" initialized
INFO - 2025-06-22 09:10:28 --> Helper loaded: form_helper
INFO - 2025-06-22 09:10:28 --> Form Validation Class Initialized
INFO - 2025-06-22 09:10:28 --> Database Driver Class Initialized
INFO - 2025-06-22 09:10:28 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:10:28 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:10:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:10:28 --> File loaded: /var/www/html/hris_lnd/application/views/template/header_mobile_lnd.php
INFO - 2025-06-22 09:10:28 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/form-test.php
INFO - 2025-06-22 09:10:28 --> Final output sent to browser
DEBUG - 2025-06-22 09:10:28 --> Total execution time: 0.0170
INFO - 2025-06-22 09:10:28 --> Config Class Initialized
INFO - 2025-06-22 09:10:28 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:10:28 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:10:28 --> Utf8 Class Initialized
INFO - 2025-06-22 09:10:28 --> URI Class Initialized
INFO - 2025-06-22 09:10:28 --> Router Class Initialized
INFO - 2025-06-22 09:10:28 --> Output Class Initialized
INFO - 2025-06-22 09:10:28 --> Security Class Initialized
DEBUG - 2025-06-22 09:10:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:10:28 --> Input Class Initialized
INFO - 2025-06-22 09:10:28 --> Language Class Initialized
INFO - 2025-06-22 09:10:28 --> Loader Class Initialized
INFO - 2025-06-22 09:10:28 --> Helper loaded: url_helper
INFO - 2025-06-22 09:10:28 --> Helper loaded: file_helper
INFO - 2025-06-22 09:10:28 --> Database Driver Class Initialized
INFO - 2025-06-22 09:10:28 --> Email Class Initialized
DEBUG - 2025-06-22 09:10:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:10:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:10:28 --> Controller Class Initialized
INFO - 2025-06-22 09:10:28 --> Helper loaded: form_helper
INFO - 2025-06-22 09:10:28 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:10:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:10:28 --> Database Driver Class Initialized
INFO - 2025-06-22 09:10:28 --> Model "Crud" initialized
INFO - 2025-06-22 09:10:28 --> Final output sent to browser
DEBUG - 2025-06-22 09:10:28 --> Total execution time: 0.0344
INFO - 2025-06-22 09:12:11 --> Config Class Initialized
INFO - 2025-06-22 09:12:11 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:12:11 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:12:11 --> Utf8 Class Initialized
INFO - 2025-06-22 09:12:11 --> URI Class Initialized
INFO - 2025-06-22 09:12:11 --> Router Class Initialized
INFO - 2025-06-22 09:12:11 --> Output Class Initialized
INFO - 2025-06-22 09:12:11 --> Security Class Initialized
DEBUG - 2025-06-22 09:12:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:12:11 --> Input Class Initialized
INFO - 2025-06-22 09:12:11 --> Language Class Initialized
INFO - 2025-06-22 09:12:11 --> Loader Class Initialized
INFO - 2025-06-22 09:12:11 --> Helper loaded: url_helper
INFO - 2025-06-22 09:12:11 --> Helper loaded: file_helper
INFO - 2025-06-22 09:12:11 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:11 --> Email Class Initialized
DEBUG - 2025-06-22 09:12:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:12:11 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:12:11 --> Controller Class Initialized
INFO - 2025-06-22 09:12:11 --> Model "FormTestModel" initialized
INFO - 2025-06-22 09:12:11 --> Helper loaded: form_helper
INFO - 2025-06-22 09:12:11 --> Form Validation Class Initialized
INFO - 2025-06-22 09:12:11 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:11 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:12:11 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:12:11 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:11 --> Final output sent to browser
DEBUG - 2025-06-22 09:12:11 --> Total execution time: 0.0353
INFO - 2025-06-22 09:12:25 --> Config Class Initialized
INFO - 2025-06-22 09:12:25 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:12:25 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:12:25 --> Utf8 Class Initialized
INFO - 2025-06-22 09:12:25 --> URI Class Initialized
INFO - 2025-06-22 09:12:25 --> Router Class Initialized
INFO - 2025-06-22 09:12:25 --> Output Class Initialized
INFO - 2025-06-22 09:12:25 --> Security Class Initialized
DEBUG - 2025-06-22 09:12:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:12:25 --> Input Class Initialized
INFO - 2025-06-22 09:12:25 --> Language Class Initialized
INFO - 2025-06-22 09:12:25 --> Loader Class Initialized
INFO - 2025-06-22 09:12:25 --> Helper loaded: url_helper
INFO - 2025-06-22 09:12:25 --> Helper loaded: file_helper
INFO - 2025-06-22 09:12:25 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:25 --> Email Class Initialized
DEBUG - 2025-06-22 09:12:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:12:25 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:12:25 --> Controller Class Initialized
INFO - 2025-06-22 09:12:25 --> Helper loaded: form_helper
INFO - 2025-06-22 09:12:25 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:12:25 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:25 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:25 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:12:25 --> Email class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:25 --> Model "Emails" initialized
ERROR - 2025-06-22 09:12:25 --> Unable to delete cache file for login
INFO - 2025-06-22 09:12:25 --> Config Class Initialized
INFO - 2025-06-22 09:12:25 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:12:25 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:12:25 --> Utf8 Class Initialized
INFO - 2025-06-22 09:12:25 --> URI Class Initialized
INFO - 2025-06-22 09:12:25 --> Router Class Initialized
INFO - 2025-06-22 09:12:25 --> Output Class Initialized
INFO - 2025-06-22 09:12:25 --> Security Class Initialized
DEBUG - 2025-06-22 09:12:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:12:25 --> Input Class Initialized
INFO - 2025-06-22 09:12:25 --> Language Class Initialized
INFO - 2025-06-22 09:12:25 --> Loader Class Initialized
INFO - 2025-06-22 09:12:25 --> Helper loaded: url_helper
INFO - 2025-06-22 09:12:25 --> Helper loaded: file_helper
INFO - 2025-06-22 09:12:25 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:25 --> Email Class Initialized
DEBUG - 2025-06-22 09:12:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:12:25 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:12:25 --> Controller Class Initialized
INFO - 2025-06-22 09:12:25 --> Helper loaded: form_helper
INFO - 2025-06-22 09:12:25 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:12:25 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:25 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:25 --> Model "Crud" initialized
INFO - 2025-06-22 09:12:25 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-22 09:12:25 --> File loaded: /var/www/html/hris_lnd/application/views/home.php
INFO - 2025-06-22 09:12:25 --> Final output sent to browser
DEBUG - 2025-06-22 09:12:25 --> Total execution time: 0.0268
INFO - 2025-06-22 09:12:27 --> Config Class Initialized
INFO - 2025-06-22 09:12:27 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:12:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:12:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:12:27 --> URI Class Initialized
INFO - 2025-06-22 09:12:27 --> Router Class Initialized
INFO - 2025-06-22 09:12:27 --> Output Class Initialized
INFO - 2025-06-22 09:12:27 --> Security Class Initialized
DEBUG - 2025-06-22 09:12:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:12:27 --> Input Class Initialized
INFO - 2025-06-22 09:12:27 --> Language Class Initialized
INFO - 2025-06-22 09:12:27 --> Loader Class Initialized
INFO - 2025-06-22 09:12:27 --> Config Class Initialized
INFO - 2025-06-22 09:12:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:12:27 --> Hooks Class Initialized
INFO - 2025-06-22 09:12:27 --> Helper loaded: file_helper
DEBUG - 2025-06-22 09:12:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:12:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:12:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:27 --> URI Class Initialized
INFO - 2025-06-22 09:12:27 --> Router Class Initialized
INFO - 2025-06-22 09:12:27 --> Output Class Initialized
INFO - 2025-06-22 09:12:27 --> Security Class Initialized
DEBUG - 2025-06-22 09:12:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:12:27 --> Input Class Initialized
INFO - 2025-06-22 09:12:27 --> Language Class Initialized
INFO - 2025-06-22 09:12:27 --> Config Class Initialized
INFO - 2025-06-22 09:12:27 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:12:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:12:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:12:27 --> URI Class Initialized
INFO - 2025-06-22 09:12:27 --> Router Class Initialized
INFO - 2025-06-22 09:12:27 --> Output Class Initialized
INFO - 2025-06-22 09:12:27 --> Security Class Initialized
DEBUG - 2025-06-22 09:12:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:12:27 --> Input Class Initialized
INFO - 2025-06-22 09:12:27 --> Language Class Initialized
INFO - 2025-06-22 09:12:27 --> Loader Class Initialized
INFO - 2025-06-22 09:12:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:12:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:12:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:27 --> Loader Class Initialized
INFO - 2025-06-22 09:12:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:12:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:12:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:27 --> Email Class Initialized
DEBUG - 2025-06-22 09:12:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:12:27 --> Email Class Initialized
INFO - 2025-06-22 09:12:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:12:27 --> Controller Class Initialized
DEBUG - 2025-06-22 09:12:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:12:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:12:27 --> Form Validation Class Initialized
INFO - 2025-06-22 09:12:27 --> Email Class Initialized
DEBUG - 2025-06-22 09:12:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:27 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:12:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:12:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:12:27 --> Config Class Initialized
INFO - 2025-06-22 09:12:27 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:12:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:12:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:12:27 --> URI Class Initialized
INFO - 2025-06-22 09:12:27 --> Router Class Initialized
INFO - 2025-06-22 09:12:27 --> Output Class Initialized
INFO - 2025-06-22 09:12:27 --> Security Class Initialized
DEBUG - 2025-06-22 09:12:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:12:27 --> Input Class Initialized
INFO - 2025-06-22 09:12:27 --> Language Class Initialized
INFO - 2025-06-22 09:12:27 --> Loader Class Initialized
INFO - 2025-06-22 09:12:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:12:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:12:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:27 --> Email Class Initialized
DEBUG - 2025-06-22 09:12:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:12:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:12:27 --> Total execution time: 0.2100
INFO - 2025-06-22 09:12:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:12:27 --> Controller Class Initialized
INFO - 2025-06-22 09:12:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:12:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:12:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:12:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:12:27 --> Total execution time: 0.2411
INFO - 2025-06-22 09:12:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:12:27 --> Controller Class Initialized
INFO - 2025-06-22 09:12:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:12:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:12:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:12:27 --> Config Class Initialized
INFO - 2025-06-22 09:12:27 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:12:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:12:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:12:27 --> URI Class Initialized
INFO - 2025-06-22 09:12:27 --> Router Class Initialized
INFO - 2025-06-22 09:12:27 --> Output Class Initialized
INFO - 2025-06-22 09:12:27 --> Security Class Initialized
DEBUG - 2025-06-22 09:12:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:12:27 --> Input Class Initialized
INFO - 2025-06-22 09:12:27 --> Language Class Initialized
INFO - 2025-06-22 09:12:27 --> Loader Class Initialized
INFO - 2025-06-22 09:12:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:12:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:12:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:27 --> Email Class Initialized
DEBUG - 2025-06-22 09:12:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:12:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:12:27 --> Total execution time: 0.2800
INFO - 2025-06-22 09:12:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:12:27 --> Controller Class Initialized
INFO - 2025-06-22 09:12:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:12:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:12:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:12:27 --> Config Class Initialized
INFO - 2025-06-22 09:12:27 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:12:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:12:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:12:27 --> URI Class Initialized
INFO - 2025-06-22 09:12:27 --> Router Class Initialized
INFO - 2025-06-22 09:12:27 --> Output Class Initialized
INFO - 2025-06-22 09:12:27 --> Security Class Initialized
DEBUG - 2025-06-22 09:12:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:12:27 --> Input Class Initialized
INFO - 2025-06-22 09:12:27 --> Language Class Initialized
INFO - 2025-06-22 09:12:27 --> Loader Class Initialized
INFO - 2025-06-22 09:12:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:12:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:12:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:27 --> Email Class Initialized
DEBUG - 2025-06-22 09:12:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:12:27 --> Config Class Initialized
INFO - 2025-06-22 09:12:27 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:12:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:12:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:12:27 --> URI Class Initialized
INFO - 2025-06-22 09:12:27 --> Router Class Initialized
INFO - 2025-06-22 09:12:27 --> Output Class Initialized
INFO - 2025-06-22 09:12:27 --> Security Class Initialized
DEBUG - 2025-06-22 09:12:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:12:27 --> Input Class Initialized
INFO - 2025-06-22 09:12:27 --> Language Class Initialized
INFO - 2025-06-22 09:12:27 --> Loader Class Initialized
INFO - 2025-06-22 09:12:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:12:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:12:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:27 --> Email Class Initialized
DEBUG - 2025-06-22 09:12:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:12:27 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-22 09:12:27 --> File loaded: /var/www/html/hris_lnd/application/views/dashboard/dashboard.php
INFO - 2025-06-22 09:12:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:12:27 --> Total execution time: 0.6954
INFO - 2025-06-22 09:12:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:12:27 --> Controller Class Initialized
INFO - 2025-06-22 09:12:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:12:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:12:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:12:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:12:27 --> Controller Class Initialized
INFO - 2025-06-22 09:12:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:12:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:12:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:12:27 --> Config Class Initialized
INFO - 2025-06-22 09:12:27 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:12:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:12:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:12:27 --> URI Class Initialized
INFO - 2025-06-22 09:12:27 --> Router Class Initialized
INFO - 2025-06-22 09:12:27 --> Output Class Initialized
INFO - 2025-06-22 09:12:27 --> Security Class Initialized
DEBUG - 2025-06-22 09:12:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:12:27 --> Input Class Initialized
INFO - 2025-06-22 09:12:27 --> Language Class Initialized
INFO - 2025-06-22 09:12:27 --> Loader Class Initialized
INFO - 2025-06-22 09:12:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:12:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:12:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:27 --> Email Class Initialized
DEBUG - 2025-06-22 09:12:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:12:27 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-22 09:12:27 --> File loaded: /var/www/html/hris_lnd/application/views/dashboard/dashboard.php
INFO - 2025-06-22 09:12:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:12:27 --> Total execution time: 0.4215
INFO - 2025-06-22 09:12:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:12:27 --> Controller Class Initialized
INFO - 2025-06-22 09:12:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:12:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:12:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:12:28 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-22 09:12:28 --> File loaded: /var/www/html/hris_lnd/application/views/dashboard/dashboard.php
INFO - 2025-06-22 09:12:28 --> Final output sent to browser
DEBUG - 2025-06-22 09:12:28 --> Total execution time: 0.4425
INFO - 2025-06-22 09:12:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:12:28 --> Controller Class Initialized
INFO - 2025-06-22 09:12:28 --> Helper loaded: form_helper
INFO - 2025-06-22 09:12:28 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:12:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:28 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:28 --> Model "Crud" initialized
INFO - 2025-06-22 09:12:28 --> Config Class Initialized
INFO - 2025-06-22 09:12:28 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:12:28 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:12:28 --> Utf8 Class Initialized
INFO - 2025-06-22 09:12:28 --> URI Class Initialized
INFO - 2025-06-22 09:12:28 --> Router Class Initialized
INFO - 2025-06-22 09:12:28 --> Output Class Initialized
INFO - 2025-06-22 09:12:28 --> Security Class Initialized
DEBUG - 2025-06-22 09:12:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:12:28 --> Input Class Initialized
INFO - 2025-06-22 09:12:28 --> Language Class Initialized
INFO - 2025-06-22 09:12:28 --> Loader Class Initialized
INFO - 2025-06-22 09:12:28 --> Helper loaded: url_helper
INFO - 2025-06-22 09:12:28 --> Helper loaded: file_helper
INFO - 2025-06-22 09:12:28 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:28 --> Email Class Initialized
DEBUG - 2025-06-22 09:12:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:12:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:12:28 --> Controller Class Initialized
INFO - 2025-06-22 09:12:28 --> Helper loaded: form_helper
INFO - 2025-06-22 09:12:28 --> Config Class Initialized
INFO - 2025-06-22 09:12:28 --> Form Validation Class Initialized
INFO - 2025-06-22 09:12:28 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:12:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:12:28 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:12:28 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:28 --> Utf8 Class Initialized
INFO - 2025-06-22 09:12:28 --> URI Class Initialized
INFO - 2025-06-22 09:12:28 --> Router Class Initialized
INFO - 2025-06-22 09:12:28 --> Output Class Initialized
INFO - 2025-06-22 09:12:28 --> Security Class Initialized
DEBUG - 2025-06-22 09:12:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:12:28 --> Input Class Initialized
INFO - 2025-06-22 09:12:28 --> Language Class Initialized
INFO - 2025-06-22 09:12:28 --> Loader Class Initialized
INFO - 2025-06-22 09:12:28 --> Helper loaded: url_helper
INFO - 2025-06-22 09:12:28 --> Helper loaded: file_helper
INFO - 2025-06-22 09:12:28 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:28 --> Model "Crud" initialized
INFO - 2025-06-22 09:12:28 --> Email Class Initialized
DEBUG - 2025-06-22 09:12:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:12:28 --> Config Class Initialized
INFO - 2025-06-22 09:12:28 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:12:28 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:12:28 --> Utf8 Class Initialized
INFO - 2025-06-22 09:12:28 --> URI Class Initialized
INFO - 2025-06-22 09:12:28 --> Router Class Initialized
INFO - 2025-06-22 09:12:28 --> Output Class Initialized
INFO - 2025-06-22 09:12:28 --> Security Class Initialized
DEBUG - 2025-06-22 09:12:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:12:28 --> Input Class Initialized
INFO - 2025-06-22 09:12:28 --> Language Class Initialized
INFO - 2025-06-22 09:12:28 --> Loader Class Initialized
INFO - 2025-06-22 09:12:28 --> Helper loaded: url_helper
INFO - 2025-06-22 09:12:28 --> Helper loaded: file_helper
INFO - 2025-06-22 09:12:28 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:28 --> Email Class Initialized
DEBUG - 2025-06-22 09:12:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:12:28 --> Final output sent to browser
DEBUG - 2025-06-22 09:12:28 --> Total execution time: 0.0500
INFO - 2025-06-22 09:12:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:12:28 --> Controller Class Initialized
INFO - 2025-06-22 09:12:28 --> Helper loaded: form_helper
INFO - 2025-06-22 09:12:28 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:12:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:28 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:28 --> Model "Crud" initialized
INFO - 2025-06-22 09:12:28 --> Config Class Initialized
INFO - 2025-06-22 09:12:28 --> Hooks Class Initialized
INFO - 2025-06-22 09:12:28 --> Final output sent to browser
DEBUG - 2025-06-22 09:12:28 --> Total execution time: 0.0526
DEBUG - 2025-06-22 09:12:28 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:12:28 --> Utf8 Class Initialized
INFO - 2025-06-22 09:12:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:12:28 --> Controller Class Initialized
INFO - 2025-06-22 09:12:28 --> Helper loaded: form_helper
INFO - 2025-06-22 09:12:28 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:12:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:28 --> URI Class Initialized
INFO - 2025-06-22 09:12:28 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:28 --> Router Class Initialized
INFO - 2025-06-22 09:12:28 --> Output Class Initialized
INFO - 2025-06-22 09:12:28 --> Security Class Initialized
DEBUG - 2025-06-22 09:12:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:12:28 --> Input Class Initialized
INFO - 2025-06-22 09:12:28 --> Language Class Initialized
INFO - 2025-06-22 09:12:28 --> Loader Class Initialized
INFO - 2025-06-22 09:12:28 --> Helper loaded: url_helper
INFO - 2025-06-22 09:12:28 --> Helper loaded: file_helper
INFO - 2025-06-22 09:12:28 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:28 --> Model "Crud" initialized
INFO - 2025-06-22 09:12:28 --> Email Class Initialized
DEBUG - 2025-06-22 09:12:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:12:28 --> Final output sent to browser
DEBUG - 2025-06-22 09:12:28 --> Total execution time: 0.0573
INFO - 2025-06-22 09:12:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:12:28 --> Controller Class Initialized
INFO - 2025-06-22 09:12:28 --> Helper loaded: form_helper
INFO - 2025-06-22 09:12:28 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:12:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:28 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:28 --> Model "Crud" initialized
INFO - 2025-06-22 09:12:28 --> Final output sent to browser
DEBUG - 2025-06-22 09:12:28 --> Total execution time: 0.0360
INFO - 2025-06-22 09:12:37 --> Config Class Initialized
INFO - 2025-06-22 09:12:37 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:12:37 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:12:37 --> Utf8 Class Initialized
INFO - 2025-06-22 09:12:37 --> URI Class Initialized
INFO - 2025-06-22 09:12:37 --> Router Class Initialized
INFO - 2025-06-22 09:12:37 --> Output Class Initialized
INFO - 2025-06-22 09:12:37 --> Security Class Initialized
DEBUG - 2025-06-22 09:12:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:12:37 --> Input Class Initialized
INFO - 2025-06-22 09:12:37 --> Language Class Initialized
INFO - 2025-06-22 09:12:37 --> Loader Class Initialized
INFO - 2025-06-22 09:12:37 --> Config Class Initialized
INFO - 2025-06-22 09:12:37 --> Helper loaded: url_helper
INFO - 2025-06-22 09:12:37 --> Hooks Class Initialized
INFO - 2025-06-22 09:12:37 --> Helper loaded: file_helper
DEBUG - 2025-06-22 09:12:37 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:12:37 --> Utf8 Class Initialized
INFO - 2025-06-22 09:12:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:37 --> URI Class Initialized
INFO - 2025-06-22 09:12:37 --> Router Class Initialized
INFO - 2025-06-22 09:12:37 --> Output Class Initialized
INFO - 2025-06-22 09:12:37 --> Security Class Initialized
DEBUG - 2025-06-22 09:12:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:12:37 --> Input Class Initialized
INFO - 2025-06-22 09:12:37 --> Language Class Initialized
INFO - 2025-06-22 09:12:37 --> Loader Class Initialized
INFO - 2025-06-22 09:12:37 --> Helper loaded: url_helper
INFO - 2025-06-22 09:12:37 --> Helper loaded: file_helper
INFO - 2025-06-22 09:12:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:37 --> Email Class Initialized
DEBUG - 2025-06-22 09:12:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:12:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:12:37 --> Controller Class Initialized
INFO - 2025-06-22 09:12:37 --> Helper loaded: form_helper
INFO - 2025-06-22 09:12:37 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:12:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:37 --> Email Class Initialized
DEBUG - 2025-06-22 09:12:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:12:37 --> Model "Crud" initialized
INFO - 2025-06-22 09:12:37 --> Final output sent to browser
DEBUG - 2025-06-22 09:12:37 --> Total execution time: 0.0272
INFO - 2025-06-22 09:12:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:12:37 --> Controller Class Initialized
INFO - 2025-06-22 09:12:37 --> Helper loaded: form_helper
INFO - 2025-06-22 09:12:37 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:12:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:37 --> Model "Crud" initialized
INFO - 2025-06-22 09:12:37 --> Final output sent to browser
DEBUG - 2025-06-22 09:12:37 --> Total execution time: 0.0481
INFO - 2025-06-22 09:12:44 --> Config Class Initialized
INFO - 2025-06-22 09:12:44 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:12:44 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:12:44 --> Utf8 Class Initialized
INFO - 2025-06-22 09:12:44 --> URI Class Initialized
INFO - 2025-06-22 09:12:44 --> Router Class Initialized
INFO - 2025-06-22 09:12:44 --> Output Class Initialized
INFO - 2025-06-22 09:12:44 --> Security Class Initialized
DEBUG - 2025-06-22 09:12:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:12:44 --> Input Class Initialized
INFO - 2025-06-22 09:12:44 --> Language Class Initialized
INFO - 2025-06-22 09:12:44 --> Loader Class Initialized
INFO - 2025-06-22 09:12:44 --> Helper loaded: url_helper
INFO - 2025-06-22 09:12:44 --> Helper loaded: file_helper
INFO - 2025-06-22 09:12:44 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:44 --> Email Class Initialized
DEBUG - 2025-06-22 09:12:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:12:44 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:12:44 --> Controller Class Initialized
INFO - 2025-06-22 09:12:44 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:12:44 --> Helper loaded: form_helper
INFO - 2025-06-22 09:12:44 --> Form Validation Class Initialized
INFO - 2025-06-22 09:12:44 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:44 --> Model "Crud" initialized
INFO - 2025-06-22 09:12:44 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:12:44 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:44 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:12:44 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:12:44 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:44 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-22 09:12:44 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/master-form-test.php
INFO - 2025-06-22 09:12:44 --> Final output sent to browser
DEBUG - 2025-06-22 09:12:44 --> Total execution time: 0.0547
INFO - 2025-06-22 09:12:44 --> Config Class Initialized
INFO - 2025-06-22 09:12:44 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:12:44 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:12:44 --> Utf8 Class Initialized
INFO - 2025-06-22 09:12:44 --> URI Class Initialized
INFO - 2025-06-22 09:12:44 --> Router Class Initialized
INFO - 2025-06-22 09:12:44 --> Output Class Initialized
INFO - 2025-06-22 09:12:44 --> Security Class Initialized
DEBUG - 2025-06-22 09:12:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:12:44 --> Input Class Initialized
INFO - 2025-06-22 09:12:44 --> Language Class Initialized
INFO - 2025-06-22 09:12:44 --> Loader Class Initialized
INFO - 2025-06-22 09:12:44 --> Helper loaded: url_helper
INFO - 2025-06-22 09:12:44 --> Helper loaded: file_helper
INFO - 2025-06-22 09:12:44 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:44 --> Email Class Initialized
DEBUG - 2025-06-22 09:12:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:12:44 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:12:44 --> Controller Class Initialized
INFO - 2025-06-22 09:12:44 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:12:44 --> Helper loaded: form_helper
INFO - 2025-06-22 09:12:44 --> Form Validation Class Initialized
INFO - 2025-06-22 09:12:44 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:44 --> Model "Crud" initialized
INFO - 2025-06-22 09:12:44 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:12:44 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:44 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:12:44 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:12:44 --> Session class already loaded. Second attempt ignored.
ERROR - 2025-06-22 09:12:44 --> Query error: Illegal mix of collations (utf8mb4_0900_ai_ci,IMPLICIT) and (utf8mb3_general_ci,COERCIBLE) for operation '=' - Invalid query: SELECT a.* FROM setting_users a JOIN users b ON a.users_id = b.username WHERE a.menus_id='‚ZjXì' and b.username='admin'
INFO - 2025-06-22 09:12:44 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-22 09:12:45 --> Config Class Initialized
INFO - 2025-06-22 09:12:45 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:12:45 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:12:45 --> Utf8 Class Initialized
INFO - 2025-06-22 09:12:45 --> URI Class Initialized
INFO - 2025-06-22 09:12:45 --> Router Class Initialized
INFO - 2025-06-22 09:12:45 --> Output Class Initialized
INFO - 2025-06-22 09:12:45 --> Security Class Initialized
DEBUG - 2025-06-22 09:12:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:12:45 --> Input Class Initialized
INFO - 2025-06-22 09:12:45 --> Language Class Initialized
INFO - 2025-06-22 09:12:45 --> Loader Class Initialized
INFO - 2025-06-22 09:12:45 --> Helper loaded: url_helper
INFO - 2025-06-22 09:12:45 --> Helper loaded: file_helper
INFO - 2025-06-22 09:12:45 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:45 --> Email Class Initialized
DEBUG - 2025-06-22 09:12:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:12:45 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:12:45 --> Controller Class Initialized
INFO - 2025-06-22 09:12:45 --> Helper loaded: form_helper
INFO - 2025-06-22 09:12:45 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:12:45 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:45 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:45 --> Model "Crud" initialized
INFO - 2025-06-22 09:12:45 --> Final output sent to browser
DEBUG - 2025-06-22 09:12:45 --> Total execution time: 0.0280
INFO - 2025-06-22 09:12:45 --> Config Class Initialized
INFO - 2025-06-22 09:12:45 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:12:45 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:12:45 --> Utf8 Class Initialized
INFO - 2025-06-22 09:12:45 --> URI Class Initialized
INFO - 2025-06-22 09:12:45 --> Router Class Initialized
INFO - 2025-06-22 09:12:45 --> Output Class Initialized
INFO - 2025-06-22 09:12:45 --> Security Class Initialized
DEBUG - 2025-06-22 09:12:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:12:45 --> Input Class Initialized
INFO - 2025-06-22 09:12:45 --> Language Class Initialized
INFO - 2025-06-22 09:12:45 --> Loader Class Initialized
INFO - 2025-06-22 09:12:45 --> Helper loaded: url_helper
INFO - 2025-06-22 09:12:45 --> Helper loaded: file_helper
INFO - 2025-06-22 09:12:45 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:45 --> Email Class Initialized
DEBUG - 2025-06-22 09:12:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:12:45 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:12:45 --> Controller Class Initialized
INFO - 2025-06-22 09:12:45 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:12:45 --> Helper loaded: form_helper
INFO - 2025-06-22 09:12:45 --> Form Validation Class Initialized
INFO - 2025-06-22 09:12:45 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:45 --> Config Class Initialized
INFO - 2025-06-22 09:12:45 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:12:45 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:12:45 --> Utf8 Class Initialized
INFO - 2025-06-22 09:12:45 --> URI Class Initialized
INFO - 2025-06-22 09:12:45 --> Router Class Initialized
INFO - 2025-06-22 09:12:45 --> Output Class Initialized
INFO - 2025-06-22 09:12:45 --> Security Class Initialized
DEBUG - 2025-06-22 09:12:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:12:45 --> Input Class Initialized
INFO - 2025-06-22 09:12:45 --> Language Class Initialized
INFO - 2025-06-22 09:12:45 --> Loader Class Initialized
INFO - 2025-06-22 09:12:45 --> Helper loaded: url_helper
INFO - 2025-06-22 09:12:45 --> Helper loaded: file_helper
INFO - 2025-06-22 09:12:45 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:45 --> Model "Crud" initialized
INFO - 2025-06-22 09:12:45 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:45 --> Email Class Initialized
DEBUG - 2025-06-22 09:12:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:12:45 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:45 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:12:45 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:12:45 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:45 --> Final output sent to browser
DEBUG - 2025-06-22 09:12:45 --> Total execution time: 0.1142
INFO - 2025-06-22 09:12:45 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:12:45 --> Controller Class Initialized
INFO - 2025-06-22 09:12:45 --> Helper loaded: form_helper
INFO - 2025-06-22 09:12:45 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:12:45 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:45 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:45 --> Model "Crud" initialized
INFO - 2025-06-22 09:12:45 --> Final output sent to browser
DEBUG - 2025-06-22 09:12:45 --> Total execution time: 0.0780
INFO - 2025-06-22 09:12:45 --> Config Class Initialized
INFO - 2025-06-22 09:12:45 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:12:45 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:12:45 --> Utf8 Class Initialized
INFO - 2025-06-22 09:12:45 --> URI Class Initialized
INFO - 2025-06-22 09:12:45 --> Router Class Initialized
INFO - 2025-06-22 09:12:45 --> Output Class Initialized
INFO - 2025-06-22 09:12:45 --> Security Class Initialized
DEBUG - 2025-06-22 09:12:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:12:45 --> Input Class Initialized
INFO - 2025-06-22 09:12:45 --> Language Class Initialized
INFO - 2025-06-22 09:12:45 --> Loader Class Initialized
INFO - 2025-06-22 09:12:45 --> Helper loaded: url_helper
INFO - 2025-06-22 09:12:45 --> Helper loaded: file_helper
INFO - 2025-06-22 09:12:45 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:45 --> Email Class Initialized
DEBUG - 2025-06-22 09:12:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:12:45 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:12:45 --> Controller Class Initialized
INFO - 2025-06-22 09:12:45 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:12:45 --> Helper loaded: form_helper
INFO - 2025-06-22 09:12:45 --> Form Validation Class Initialized
INFO - 2025-06-22 09:12:45 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:45 --> Model "Crud" initialized
INFO - 2025-06-22 09:12:45 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:12:45 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:45 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:12:45 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:12:45 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:45 --> Final output sent to browser
DEBUG - 2025-06-22 09:12:45 --> Total execution time: 0.0245
INFO - 2025-06-22 09:12:47 --> Config Class Initialized
INFO - 2025-06-22 09:12:47 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:12:47 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:12:47 --> Utf8 Class Initialized
INFO - 2025-06-22 09:12:47 --> URI Class Initialized
INFO - 2025-06-22 09:12:47 --> Router Class Initialized
INFO - 2025-06-22 09:12:47 --> Output Class Initialized
INFO - 2025-06-22 09:12:47 --> Security Class Initialized
DEBUG - 2025-06-22 09:12:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:12:47 --> Input Class Initialized
INFO - 2025-06-22 09:12:47 --> Config Class Initialized
INFO - 2025-06-22 09:12:47 --> Language Class Initialized
INFO - 2025-06-22 09:12:47 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:12:47 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:12:47 --> Utf8 Class Initialized
INFO - 2025-06-22 09:12:47 --> Loader Class Initialized
INFO - 2025-06-22 09:12:47 --> URI Class Initialized
INFO - 2025-06-22 09:12:47 --> Helper loaded: url_helper
INFO - 2025-06-22 09:12:47 --> Router Class Initialized
INFO - 2025-06-22 09:12:47 --> Helper loaded: file_helper
INFO - 2025-06-22 09:12:47 --> Output Class Initialized
INFO - 2025-06-22 09:12:47 --> Security Class Initialized
INFO - 2025-06-22 09:12:47 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:12:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:12:47 --> Input Class Initialized
INFO - 2025-06-22 09:12:47 --> Language Class Initialized
INFO - 2025-06-22 09:12:47 --> Loader Class Initialized
INFO - 2025-06-22 09:12:47 --> Helper loaded: url_helper
INFO - 2025-06-22 09:12:47 --> Helper loaded: file_helper
INFO - 2025-06-22 09:12:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:47 --> Email Class Initialized
DEBUG - 2025-06-22 09:12:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:12:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:12:47 --> Controller Class Initialized
INFO - 2025-06-22 09:12:47 --> Helper loaded: form_helper
INFO - 2025-06-22 09:12:47 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:12:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:47 --> Email Class Initialized
DEBUG - 2025-06-22 09:12:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:12:47 --> Model "Crud" initialized
INFO - 2025-06-22 09:12:47 --> Final output sent to browser
DEBUG - 2025-06-22 09:12:47 --> Total execution time: 0.0263
INFO - 2025-06-22 09:12:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:12:47 --> Controller Class Initialized
INFO - 2025-06-22 09:12:47 --> Helper loaded: form_helper
INFO - 2025-06-22 09:12:47 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:12:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:47 --> Model "Crud" initialized
INFO - 2025-06-22 09:12:47 --> Final output sent to browser
DEBUG - 2025-06-22 09:12:47 --> Total execution time: 0.0508
INFO - 2025-06-22 09:12:54 --> Config Class Initialized
INFO - 2025-06-22 09:12:54 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:12:54 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:12:54 --> Utf8 Class Initialized
INFO - 2025-06-22 09:12:54 --> URI Class Initialized
INFO - 2025-06-22 09:12:54 --> Router Class Initialized
INFO - 2025-06-22 09:12:54 --> Output Class Initialized
INFO - 2025-06-22 09:12:54 --> Security Class Initialized
DEBUG - 2025-06-22 09:12:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:12:54 --> Input Class Initialized
INFO - 2025-06-22 09:12:54 --> Language Class Initialized
INFO - 2025-06-22 09:12:54 --> Loader Class Initialized
INFO - 2025-06-22 09:12:54 --> Helper loaded: url_helper
INFO - 2025-06-22 09:12:54 --> Helper loaded: file_helper
INFO - 2025-06-22 09:12:54 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:54 --> Email Class Initialized
DEBUG - 2025-06-22 09:12:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:12:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:12:54 --> Controller Class Initialized
INFO - 2025-06-22 09:12:54 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:12:54 --> Helper loaded: form_helper
INFO - 2025-06-22 09:12:54 --> Form Validation Class Initialized
INFO - 2025-06-22 09:12:54 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:54 --> Model "Crud" initialized
INFO - 2025-06-22 09:12:54 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:12:54 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:54 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:12:54 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:12:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:54 --> Final output sent to browser
DEBUG - 2025-06-22 09:12:54 --> Total execution time: 0.0427
INFO - 2025-06-22 09:12:57 --> Config Class Initialized
INFO - 2025-06-22 09:12:57 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:12:57 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:12:57 --> Utf8 Class Initialized
INFO - 2025-06-22 09:12:57 --> URI Class Initialized
INFO - 2025-06-22 09:12:57 --> Router Class Initialized
INFO - 2025-06-22 09:12:57 --> Output Class Initialized
INFO - 2025-06-22 09:12:57 --> Security Class Initialized
DEBUG - 2025-06-22 09:12:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:12:57 --> Input Class Initialized
INFO - 2025-06-22 09:12:57 --> Language Class Initialized
INFO - 2025-06-22 09:12:57 --> Loader Class Initialized
INFO - 2025-06-22 09:12:57 --> Helper loaded: url_helper
INFO - 2025-06-22 09:12:57 --> Helper loaded: file_helper
INFO - 2025-06-22 09:12:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:57 --> Config Class Initialized
INFO - 2025-06-22 09:12:57 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:12:57 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:12:57 --> Utf8 Class Initialized
INFO - 2025-06-22 09:12:57 --> Email Class Initialized
INFO - 2025-06-22 09:12:57 --> URI Class Initialized
DEBUG - 2025-06-22 09:12:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:12:57 --> Router Class Initialized
INFO - 2025-06-22 09:12:57 --> Output Class Initialized
INFO - 2025-06-22 09:12:57 --> Security Class Initialized
INFO - 2025-06-22 09:12:57 --> Session: Class initialized using 'files' driver.
DEBUG - 2025-06-22 09:12:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:12:57 --> Input Class Initialized
INFO - 2025-06-22 09:12:57 --> Controller Class Initialized
INFO - 2025-06-22 09:12:57 --> Language Class Initialized
INFO - 2025-06-22 09:12:57 --> Helper loaded: form_helper
INFO - 2025-06-22 09:12:57 --> Loader Class Initialized
INFO - 2025-06-22 09:12:57 --> Form Validation Class Initialized
INFO - 2025-06-22 09:12:57 --> Helper loaded: url_helper
DEBUG - 2025-06-22 09:12:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:57 --> Helper loaded: file_helper
INFO - 2025-06-22 09:12:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:57 --> Model "Crud" initialized
INFO - 2025-06-22 09:12:57 --> Email Class Initialized
DEBUG - 2025-06-22 09:12:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:12:57 --> Final output sent to browser
DEBUG - 2025-06-22 09:12:57 --> Total execution time: 0.0232
INFO - 2025-06-22 09:12:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:12:57 --> Controller Class Initialized
INFO - 2025-06-22 09:12:57 --> Helper loaded: form_helper
INFO - 2025-06-22 09:12:57 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:12:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:12:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:12:57 --> Model "Crud" initialized
INFO - 2025-06-22 09:12:57 --> Final output sent to browser
DEBUG - 2025-06-22 09:12:57 --> Total execution time: 0.0425
INFO - 2025-06-22 09:13:07 --> Config Class Initialized
INFO - 2025-06-22 09:13:07 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:13:07 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:13:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:13:07 --> URI Class Initialized
INFO - 2025-06-22 09:13:07 --> Router Class Initialized
INFO - 2025-06-22 09:13:07 --> Output Class Initialized
INFO - 2025-06-22 09:13:07 --> Security Class Initialized
DEBUG - 2025-06-22 09:13:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:13:07 --> Input Class Initialized
INFO - 2025-06-22 09:13:07 --> Language Class Initialized
INFO - 2025-06-22 09:13:07 --> Loader Class Initialized
INFO - 2025-06-22 09:13:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:13:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:13:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:13:07 --> Config Class Initialized
INFO - 2025-06-22 09:13:07 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:13:07 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:13:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:13:07 --> URI Class Initialized
INFO - 2025-06-22 09:13:07 --> Router Class Initialized
INFO - 2025-06-22 09:13:07 --> Output Class Initialized
INFO - 2025-06-22 09:13:07 --> Security Class Initialized
DEBUG - 2025-06-22 09:13:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:13:07 --> Input Class Initialized
INFO - 2025-06-22 09:13:07 --> Language Class Initialized
INFO - 2025-06-22 09:13:07 --> Loader Class Initialized
INFO - 2025-06-22 09:13:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:13:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:13:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:13:07 --> Email Class Initialized
DEBUG - 2025-06-22 09:13:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:13:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:13:07 --> Controller Class Initialized
INFO - 2025-06-22 09:13:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:13:07 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:13:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:13:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:13:07 --> Email Class Initialized
DEBUG - 2025-06-22 09:13:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:13:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:13:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:13:07 --> Total execution time: 0.0221
INFO - 2025-06-22 09:13:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:13:07 --> Controller Class Initialized
INFO - 2025-06-22 09:13:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:13:07 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:13:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:13:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:13:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:13:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:13:07 --> Total execution time: 0.0320
INFO - 2025-06-22 09:13:09 --> Config Class Initialized
INFO - 2025-06-22 09:13:09 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:13:09 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:13:09 --> Utf8 Class Initialized
INFO - 2025-06-22 09:13:09 --> URI Class Initialized
INFO - 2025-06-22 09:13:09 --> Router Class Initialized
INFO - 2025-06-22 09:13:09 --> Output Class Initialized
INFO - 2025-06-22 09:13:09 --> Security Class Initialized
DEBUG - 2025-06-22 09:13:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:13:09 --> Input Class Initialized
INFO - 2025-06-22 09:13:09 --> Language Class Initialized
INFO - 2025-06-22 09:13:09 --> Loader Class Initialized
INFO - 2025-06-22 09:13:09 --> Helper loaded: url_helper
INFO - 2025-06-22 09:13:09 --> Helper loaded: file_helper
INFO - 2025-06-22 09:13:09 --> Database Driver Class Initialized
INFO - 2025-06-22 09:13:09 --> Email Class Initialized
DEBUG - 2025-06-22 09:13:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:13:09 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:13:09 --> Controller Class Initialized
INFO - 2025-06-22 09:13:09 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:13:09 --> Helper loaded: form_helper
INFO - 2025-06-22 09:13:09 --> Form Validation Class Initialized
INFO - 2025-06-22 09:13:09 --> Database Driver Class Initialized
INFO - 2025-06-22 09:13:09 --> Model "Crud" initialized
INFO - 2025-06-22 09:13:09 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:13:09 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:13:09 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:13:09 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:13:09 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:13:09 --> Final output sent to browser
DEBUG - 2025-06-22 09:13:09 --> Total execution time: 0.0207
INFO - 2025-06-22 09:13:17 --> Config Class Initialized
INFO - 2025-06-22 09:13:17 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:13:17 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:13:17 --> Utf8 Class Initialized
INFO - 2025-06-22 09:13:17 --> URI Class Initialized
INFO - 2025-06-22 09:13:17 --> Router Class Initialized
INFO - 2025-06-22 09:13:17 --> Output Class Initialized
INFO - 2025-06-22 09:13:17 --> Security Class Initialized
DEBUG - 2025-06-22 09:13:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:13:17 --> Input Class Initialized
INFO - 2025-06-22 09:13:17 --> Language Class Initialized
INFO - 2025-06-22 09:13:17 --> Loader Class Initialized
INFO - 2025-06-22 09:13:17 --> Helper loaded: url_helper
INFO - 2025-06-22 09:13:17 --> Helper loaded: file_helper
INFO - 2025-06-22 09:13:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:13:17 --> Config Class Initialized
INFO - 2025-06-22 09:13:17 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:13:17 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:13:17 --> Utf8 Class Initialized
INFO - 2025-06-22 09:13:17 --> URI Class Initialized
INFO - 2025-06-22 09:13:17 --> Router Class Initialized
INFO - 2025-06-22 09:13:17 --> Output Class Initialized
INFO - 2025-06-22 09:13:17 --> Security Class Initialized
DEBUG - 2025-06-22 09:13:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:13:17 --> Input Class Initialized
INFO - 2025-06-22 09:13:17 --> Language Class Initialized
INFO - 2025-06-22 09:13:17 --> Loader Class Initialized
INFO - 2025-06-22 09:13:17 --> Helper loaded: url_helper
INFO - 2025-06-22 09:13:17 --> Helper loaded: file_helper
INFO - 2025-06-22 09:13:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:13:17 --> Email Class Initialized
DEBUG - 2025-06-22 09:13:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:13:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:13:17 --> Controller Class Initialized
INFO - 2025-06-22 09:13:17 --> Helper loaded: form_helper
INFO - 2025-06-22 09:13:17 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:13:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:13:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:13:17 --> Email Class Initialized
DEBUG - 2025-06-22 09:13:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:13:17 --> Model "Crud" initialized
INFO - 2025-06-22 09:13:17 --> Final output sent to browser
DEBUG - 2025-06-22 09:13:17 --> Total execution time: 0.0251
INFO - 2025-06-22 09:13:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:13:17 --> Controller Class Initialized
INFO - 2025-06-22 09:13:17 --> Helper loaded: form_helper
INFO - 2025-06-22 09:13:17 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:13:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:13:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:13:17 --> Model "Crud" initialized
INFO - 2025-06-22 09:13:17 --> Final output sent to browser
DEBUG - 2025-06-22 09:13:17 --> Total execution time: 0.0402
INFO - 2025-06-22 09:13:18 --> Config Class Initialized
INFO - 2025-06-22 09:13:18 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:13:18 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:13:18 --> Utf8 Class Initialized
INFO - 2025-06-22 09:13:18 --> URI Class Initialized
INFO - 2025-06-22 09:13:18 --> Router Class Initialized
INFO - 2025-06-22 09:13:18 --> Output Class Initialized
INFO - 2025-06-22 09:13:18 --> Security Class Initialized
DEBUG - 2025-06-22 09:13:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:13:18 --> Input Class Initialized
INFO - 2025-06-22 09:13:18 --> Language Class Initialized
INFO - 2025-06-22 09:13:18 --> Loader Class Initialized
INFO - 2025-06-22 09:13:18 --> Helper loaded: url_helper
INFO - 2025-06-22 09:13:18 --> Helper loaded: file_helper
INFO - 2025-06-22 09:13:18 --> Database Driver Class Initialized
INFO - 2025-06-22 09:13:18 --> Email Class Initialized
DEBUG - 2025-06-22 09:13:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:13:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:13:18 --> Controller Class Initialized
INFO - 2025-06-22 09:13:18 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:13:18 --> Helper loaded: form_helper
INFO - 2025-06-22 09:13:18 --> Form Validation Class Initialized
INFO - 2025-06-22 09:13:18 --> Database Driver Class Initialized
INFO - 2025-06-22 09:13:18 --> Model "Crud" initialized
INFO - 2025-06-22 09:13:18 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:13:18 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:13:18 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:13:18 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:13:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:13:18 --> Final output sent to browser
DEBUG - 2025-06-22 09:13:18 --> Total execution time: 0.0187
INFO - 2025-06-22 09:13:27 --> Config Class Initialized
INFO - 2025-06-22 09:13:27 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:13:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:13:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:13:27 --> URI Class Initialized
INFO - 2025-06-22 09:13:27 --> Router Class Initialized
INFO - 2025-06-22 09:13:27 --> Output Class Initialized
INFO - 2025-06-22 09:13:27 --> Security Class Initialized
DEBUG - 2025-06-22 09:13:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:13:27 --> Input Class Initialized
INFO - 2025-06-22 09:13:27 --> Config Class Initialized
INFO - 2025-06-22 09:13:27 --> Language Class Initialized
INFO - 2025-06-22 09:13:27 --> Hooks Class Initialized
INFO - 2025-06-22 09:13:27 --> Loader Class Initialized
DEBUG - 2025-06-22 09:13:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:13:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:13:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:13:27 --> URI Class Initialized
INFO - 2025-06-22 09:13:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:13:27 --> Router Class Initialized
INFO - 2025-06-22 09:13:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:13:27 --> Output Class Initialized
INFO - 2025-06-22 09:13:27 --> Security Class Initialized
DEBUG - 2025-06-22 09:13:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:13:27 --> Input Class Initialized
INFO - 2025-06-22 09:13:27 --> Language Class Initialized
INFO - 2025-06-22 09:13:27 --> Loader Class Initialized
INFO - 2025-06-22 09:13:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:13:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:13:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:13:27 --> Email Class Initialized
DEBUG - 2025-06-22 09:13:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:13:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:13:27 --> Controller Class Initialized
INFO - 2025-06-22 09:13:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:13:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:13:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:13:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:13:27 --> Email Class Initialized
DEBUG - 2025-06-22 09:13:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:13:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:13:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:13:27 --> Total execution time: 0.0203
INFO - 2025-06-22 09:13:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:13:27 --> Controller Class Initialized
INFO - 2025-06-22 09:13:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:13:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:13:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:13:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:13:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:13:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:13:27 --> Total execution time: 0.0410
INFO - 2025-06-22 09:13:37 --> Config Class Initialized
INFO - 2025-06-22 09:13:37 --> Hooks Class Initialized
INFO - 2025-06-22 09:13:37 --> Config Class Initialized
INFO - 2025-06-22 09:13:37 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:13:37 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:13:37 --> Utf8 Class Initialized
DEBUG - 2025-06-22 09:13:37 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:13:37 --> Utf8 Class Initialized
INFO - 2025-06-22 09:13:37 --> URI Class Initialized
INFO - 2025-06-22 09:13:37 --> URI Class Initialized
INFO - 2025-06-22 09:13:37 --> Router Class Initialized
INFO - 2025-06-22 09:13:37 --> Router Class Initialized
INFO - 2025-06-22 09:13:37 --> Output Class Initialized
INFO - 2025-06-22 09:13:37 --> Output Class Initialized
INFO - 2025-06-22 09:13:37 --> Security Class Initialized
INFO - 2025-06-22 09:13:37 --> Security Class Initialized
DEBUG - 2025-06-22 09:13:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-22 09:13:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:13:37 --> Input Class Initialized
INFO - 2025-06-22 09:13:37 --> Input Class Initialized
INFO - 2025-06-22 09:13:37 --> Language Class Initialized
INFO - 2025-06-22 09:13:37 --> Language Class Initialized
INFO - 2025-06-22 09:13:37 --> Loader Class Initialized
INFO - 2025-06-22 09:13:37 --> Loader Class Initialized
INFO - 2025-06-22 09:13:37 --> Helper loaded: url_helper
INFO - 2025-06-22 09:13:37 --> Helper loaded: url_helper
INFO - 2025-06-22 09:13:37 --> Helper loaded: file_helper
INFO - 2025-06-22 09:13:37 --> Helper loaded: file_helper
INFO - 2025-06-22 09:13:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:13:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:13:37 --> Email Class Initialized
INFO - 2025-06-22 09:13:37 --> Email Class Initialized
DEBUG - 2025-06-22 09:13:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:13:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:13:37 --> Controller Class Initialized
DEBUG - 2025-06-22 09:13:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:13:37 --> Helper loaded: form_helper
INFO - 2025-06-22 09:13:37 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:13:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:13:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:13:37 --> Model "Crud" initialized
INFO - 2025-06-22 09:13:37 --> Final output sent to browser
DEBUG - 2025-06-22 09:13:37 --> Total execution time: 0.0241
INFO - 2025-06-22 09:13:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:13:37 --> Controller Class Initialized
INFO - 2025-06-22 09:13:37 --> Helper loaded: form_helper
INFO - 2025-06-22 09:13:37 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:13:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:13:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:13:37 --> Model "Crud" initialized
INFO - 2025-06-22 09:13:37 --> Final output sent to browser
DEBUG - 2025-06-22 09:13:37 --> Total execution time: 0.0440
INFO - 2025-06-22 09:14:08 --> Config Class Initialized
INFO - 2025-06-22 09:14:08 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:14:08 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:14:08 --> Utf8 Class Initialized
INFO - 2025-06-22 09:14:08 --> URI Class Initialized
INFO - 2025-06-22 09:14:08 --> Router Class Initialized
INFO - 2025-06-22 09:14:08 --> Output Class Initialized
INFO - 2025-06-22 09:14:08 --> Security Class Initialized
DEBUG - 2025-06-22 09:14:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:14:08 --> Input Class Initialized
INFO - 2025-06-22 09:14:08 --> Language Class Initialized
INFO - 2025-06-22 09:14:08 --> Loader Class Initialized
INFO - 2025-06-22 09:14:08 --> Helper loaded: url_helper
INFO - 2025-06-22 09:14:08 --> Helper loaded: file_helper
INFO - 2025-06-22 09:14:08 --> Database Driver Class Initialized
INFO - 2025-06-22 09:14:08 --> Config Class Initialized
INFO - 2025-06-22 09:14:08 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:14:08 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:14:08 --> Utf8 Class Initialized
INFO - 2025-06-22 09:14:08 --> URI Class Initialized
INFO - 2025-06-22 09:14:08 --> Router Class Initialized
INFO - 2025-06-22 09:14:08 --> Output Class Initialized
INFO - 2025-06-22 09:14:08 --> Security Class Initialized
DEBUG - 2025-06-22 09:14:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:14:08 --> Input Class Initialized
INFO - 2025-06-22 09:14:08 --> Language Class Initialized
INFO - 2025-06-22 09:14:08 --> Loader Class Initialized
INFO - 2025-06-22 09:14:08 --> Helper loaded: url_helper
INFO - 2025-06-22 09:14:08 --> Helper loaded: file_helper
INFO - 2025-06-22 09:14:08 --> Database Driver Class Initialized
INFO - 2025-06-22 09:14:08 --> Email Class Initialized
DEBUG - 2025-06-22 09:14:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:14:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:14:08 --> Controller Class Initialized
INFO - 2025-06-22 09:14:08 --> Helper loaded: form_helper
INFO - 2025-06-22 09:14:08 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:14:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:14:08 --> Database Driver Class Initialized
INFO - 2025-06-22 09:14:08 --> Model "Crud" initialized
INFO - 2025-06-22 09:14:08 --> Email Class Initialized
DEBUG - 2025-06-22 09:14:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:14:08 --> Final output sent to browser
DEBUG - 2025-06-22 09:14:08 --> Total execution time: 0.0385
INFO - 2025-06-22 09:14:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:14:08 --> Controller Class Initialized
INFO - 2025-06-22 09:14:08 --> Helper loaded: form_helper
INFO - 2025-06-22 09:14:08 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:14:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:14:08 --> Database Driver Class Initialized
INFO - 2025-06-22 09:14:08 --> Model "Crud" initialized
INFO - 2025-06-22 09:14:08 --> Final output sent to browser
DEBUG - 2025-06-22 09:14:08 --> Total execution time: 0.0802
INFO - 2025-06-22 09:14:12 --> Config Class Initialized
INFO - 2025-06-22 09:14:12 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:14:12 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:14:12 --> Utf8 Class Initialized
INFO - 2025-06-22 09:14:12 --> URI Class Initialized
INFO - 2025-06-22 09:14:12 --> Router Class Initialized
INFO - 2025-06-22 09:14:12 --> Output Class Initialized
INFO - 2025-06-22 09:14:12 --> Security Class Initialized
DEBUG - 2025-06-22 09:14:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:14:12 --> Input Class Initialized
INFO - 2025-06-22 09:14:12 --> Language Class Initialized
INFO - 2025-06-22 09:14:12 --> Loader Class Initialized
INFO - 2025-06-22 09:14:12 --> Helper loaded: url_helper
INFO - 2025-06-22 09:14:12 --> Helper loaded: file_helper
INFO - 2025-06-22 09:14:12 --> Database Driver Class Initialized
INFO - 2025-06-22 09:14:12 --> Email Class Initialized
DEBUG - 2025-06-22 09:14:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:14:12 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:14:12 --> Controller Class Initialized
INFO - 2025-06-22 09:14:12 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:14:12 --> Helper loaded: form_helper
INFO - 2025-06-22 09:14:12 --> Form Validation Class Initialized
INFO - 2025-06-22 09:14:12 --> Database Driver Class Initialized
INFO - 2025-06-22 09:14:12 --> Model "Crud" initialized
INFO - 2025-06-22 09:14:12 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:14:12 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:14:12 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:14:12 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:14:12 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:14:12 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-22 09:14:12 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/master-form-test.php
INFO - 2025-06-22 09:14:12 --> Final output sent to browser
DEBUG - 2025-06-22 09:14:12 --> Total execution time: 0.0232
INFO - 2025-06-22 09:14:13 --> Config Class Initialized
INFO - 2025-06-22 09:14:13 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:14:13 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:14:13 --> Utf8 Class Initialized
INFO - 2025-06-22 09:14:13 --> URI Class Initialized
INFO - 2025-06-22 09:14:13 --> Router Class Initialized
INFO - 2025-06-22 09:14:13 --> Output Class Initialized
INFO - 2025-06-22 09:14:13 --> Security Class Initialized
DEBUG - 2025-06-22 09:14:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:14:13 --> Input Class Initialized
INFO - 2025-06-22 09:14:13 --> Language Class Initialized
INFO - 2025-06-22 09:14:13 --> Loader Class Initialized
INFO - 2025-06-22 09:14:13 --> Helper loaded: url_helper
INFO - 2025-06-22 09:14:13 --> Helper loaded: file_helper
INFO - 2025-06-22 09:14:13 --> Database Driver Class Initialized
INFO - 2025-06-22 09:14:13 --> Email Class Initialized
DEBUG - 2025-06-22 09:14:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:14:13 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:14:13 --> Controller Class Initialized
INFO - 2025-06-22 09:14:13 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:14:13 --> Helper loaded: form_helper
INFO - 2025-06-22 09:14:13 --> Form Validation Class Initialized
INFO - 2025-06-22 09:14:13 --> Database Driver Class Initialized
INFO - 2025-06-22 09:14:13 --> Model "Crud" initialized
INFO - 2025-06-22 09:14:13 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:14:13 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:14:13 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:14:13 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:14:13 --> Session class already loaded. Second attempt ignored.
ERROR - 2025-06-22 09:14:13 --> Query error: Illegal mix of collations (utf8mb4_0900_ai_ci,IMPLICIT) and (utf8mb3_general_ci,COERCIBLE) for operation '=' - Invalid query: SELECT a.* FROM setting_users a JOIN users b ON a.users_id = b.username WHERE a.menus_id='‚ZjXì' and b.username='admin'
INFO - 2025-06-22 09:14:13 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-22 09:14:14 --> Config Class Initialized
INFO - 2025-06-22 09:14:14 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:14:14 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:14:14 --> Utf8 Class Initialized
INFO - 2025-06-22 09:14:14 --> URI Class Initialized
INFO - 2025-06-22 09:14:14 --> Router Class Initialized
INFO - 2025-06-22 09:14:14 --> Output Class Initialized
INFO - 2025-06-22 09:14:14 --> Security Class Initialized
DEBUG - 2025-06-22 09:14:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:14:14 --> Input Class Initialized
INFO - 2025-06-22 09:14:14 --> Language Class Initialized
INFO - 2025-06-22 09:14:14 --> Loader Class Initialized
INFO - 2025-06-22 09:14:14 --> Helper loaded: url_helper
INFO - 2025-06-22 09:14:14 --> Helper loaded: file_helper
INFO - 2025-06-22 09:14:14 --> Database Driver Class Initialized
INFO - 2025-06-22 09:14:14 --> Email Class Initialized
DEBUG - 2025-06-22 09:14:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:14:14 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:14:14 --> Controller Class Initialized
INFO - 2025-06-22 09:14:14 --> Helper loaded: form_helper
INFO - 2025-06-22 09:14:14 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:14:14 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:14:14 --> Database Driver Class Initialized
INFO - 2025-06-22 09:14:14 --> Model "Crud" initialized
INFO - 2025-06-22 09:14:14 --> Final output sent to browser
DEBUG - 2025-06-22 09:14:14 --> Total execution time: 0.0194
INFO - 2025-06-22 09:14:14 --> Config Class Initialized
INFO - 2025-06-22 09:14:14 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:14:14 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:14:14 --> Utf8 Class Initialized
INFO - 2025-06-22 09:14:14 --> URI Class Initialized
INFO - 2025-06-22 09:14:14 --> Router Class Initialized
INFO - 2025-06-22 09:14:14 --> Output Class Initialized
INFO - 2025-06-22 09:14:14 --> Security Class Initialized
DEBUG - 2025-06-22 09:14:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:14:14 --> Input Class Initialized
INFO - 2025-06-22 09:14:14 --> Language Class Initialized
INFO - 2025-06-22 09:14:14 --> Loader Class Initialized
INFO - 2025-06-22 09:14:14 --> Helper loaded: url_helper
INFO - 2025-06-22 09:14:14 --> Helper loaded: file_helper
INFO - 2025-06-22 09:14:14 --> Database Driver Class Initialized
INFO - 2025-06-22 09:14:14 --> Email Class Initialized
DEBUG - 2025-06-22 09:14:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:14:14 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:14:14 --> Controller Class Initialized
INFO - 2025-06-22 09:14:14 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:14:14 --> Helper loaded: form_helper
INFO - 2025-06-22 09:14:14 --> Form Validation Class Initialized
INFO - 2025-06-22 09:14:14 --> Database Driver Class Initialized
INFO - 2025-06-22 09:14:14 --> Model "Crud" initialized
INFO - 2025-06-22 09:14:14 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:14:14 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:14:14 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:14:14 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:14:14 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:14:14 --> Final output sent to browser
DEBUG - 2025-06-22 09:14:14 --> Total execution time: 0.0231
INFO - 2025-06-22 09:14:14 --> Config Class Initialized
INFO - 2025-06-22 09:14:14 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:14:14 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:14:14 --> Utf8 Class Initialized
INFO - 2025-06-22 09:14:14 --> URI Class Initialized
INFO - 2025-06-22 09:14:14 --> Router Class Initialized
INFO - 2025-06-22 09:14:14 --> Output Class Initialized
INFO - 2025-06-22 09:14:14 --> Security Class Initialized
DEBUG - 2025-06-22 09:14:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:14:14 --> Input Class Initialized
INFO - 2025-06-22 09:14:14 --> Language Class Initialized
INFO - 2025-06-22 09:14:14 --> Loader Class Initialized
INFO - 2025-06-22 09:14:14 --> Helper loaded: url_helper
INFO - 2025-06-22 09:14:14 --> Helper loaded: file_helper
INFO - 2025-06-22 09:14:14 --> Database Driver Class Initialized
INFO - 2025-06-22 09:14:14 --> Email Class Initialized
DEBUG - 2025-06-22 09:14:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:14:14 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:14:14 --> Controller Class Initialized
INFO - 2025-06-22 09:14:14 --> Helper loaded: form_helper
INFO - 2025-06-22 09:14:14 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:14:14 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:14:14 --> Database Driver Class Initialized
INFO - 2025-06-22 09:14:14 --> Model "Crud" initialized
INFO - 2025-06-22 09:14:14 --> Final output sent to browser
DEBUG - 2025-06-22 09:14:14 --> Total execution time: 0.0112
INFO - 2025-06-22 09:14:14 --> Config Class Initialized
INFO - 2025-06-22 09:14:14 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:14:14 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:14:14 --> Utf8 Class Initialized
INFO - 2025-06-22 09:14:14 --> URI Class Initialized
INFO - 2025-06-22 09:14:14 --> Router Class Initialized
INFO - 2025-06-22 09:14:14 --> Output Class Initialized
INFO - 2025-06-22 09:14:14 --> Security Class Initialized
DEBUG - 2025-06-22 09:14:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:14:14 --> Input Class Initialized
INFO - 2025-06-22 09:14:14 --> Language Class Initialized
INFO - 2025-06-22 09:14:14 --> Loader Class Initialized
INFO - 2025-06-22 09:14:14 --> Helper loaded: url_helper
INFO - 2025-06-22 09:14:14 --> Helper loaded: file_helper
INFO - 2025-06-22 09:14:14 --> Database Driver Class Initialized
INFO - 2025-06-22 09:14:14 --> Email Class Initialized
DEBUG - 2025-06-22 09:14:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:14:14 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:14:14 --> Controller Class Initialized
INFO - 2025-06-22 09:14:14 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:14:14 --> Helper loaded: form_helper
INFO - 2025-06-22 09:14:14 --> Form Validation Class Initialized
INFO - 2025-06-22 09:14:14 --> Database Driver Class Initialized
INFO - 2025-06-22 09:14:14 --> Model "Crud" initialized
INFO - 2025-06-22 09:14:14 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:14:14 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:14:14 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:14:14 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:14:14 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:14:14 --> Final output sent to browser
DEBUG - 2025-06-22 09:14:14 --> Total execution time: 0.0151
INFO - 2025-06-22 09:14:17 --> Config Class Initialized
INFO - 2025-06-22 09:14:17 --> Config Class Initialized
INFO - 2025-06-22 09:14:17 --> Hooks Class Initialized
INFO - 2025-06-22 09:14:17 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:14:17 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:14:17 --> Utf8 Class Initialized
DEBUG - 2025-06-22 09:14:17 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:14:17 --> Utf8 Class Initialized
INFO - 2025-06-22 09:14:17 --> URI Class Initialized
INFO - 2025-06-22 09:14:17 --> URI Class Initialized
INFO - 2025-06-22 09:14:17 --> Router Class Initialized
INFO - 2025-06-22 09:14:17 --> Router Class Initialized
INFO - 2025-06-22 09:14:17 --> Output Class Initialized
INFO - 2025-06-22 09:14:17 --> Output Class Initialized
INFO - 2025-06-22 09:14:17 --> Security Class Initialized
INFO - 2025-06-22 09:14:17 --> Security Class Initialized
DEBUG - 2025-06-22 09:14:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-22 09:14:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:14:17 --> Input Class Initialized
INFO - 2025-06-22 09:14:17 --> Input Class Initialized
INFO - 2025-06-22 09:14:17 --> Language Class Initialized
INFO - 2025-06-22 09:14:17 --> Language Class Initialized
INFO - 2025-06-22 09:14:17 --> Loader Class Initialized
INFO - 2025-06-22 09:14:17 --> Loader Class Initialized
INFO - 2025-06-22 09:14:17 --> Helper loaded: url_helper
INFO - 2025-06-22 09:14:17 --> Helper loaded: url_helper
INFO - 2025-06-22 09:14:17 --> Helper loaded: file_helper
INFO - 2025-06-22 09:14:17 --> Helper loaded: file_helper
INFO - 2025-06-22 09:14:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:14:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:14:17 --> Email Class Initialized
DEBUG - 2025-06-22 09:14:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:14:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:14:17 --> Controller Class Initialized
INFO - 2025-06-22 09:14:17 --> Helper loaded: form_helper
INFO - 2025-06-22 09:14:17 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:14:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:14:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:14:17 --> Email Class Initialized
DEBUG - 2025-06-22 09:14:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:14:17 --> Model "Crud" initialized
INFO - 2025-06-22 09:14:17 --> Final output sent to browser
DEBUG - 2025-06-22 09:14:17 --> Total execution time: 0.0251
INFO - 2025-06-22 09:14:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:14:17 --> Controller Class Initialized
INFO - 2025-06-22 09:14:17 --> Helper loaded: form_helper
INFO - 2025-06-22 09:14:17 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:14:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:14:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:14:17 --> Model "Crud" initialized
INFO - 2025-06-22 09:14:17 --> Final output sent to browser
DEBUG - 2025-06-22 09:14:17 --> Total execution time: 0.0386
INFO - 2025-06-22 09:14:18 --> Config Class Initialized
INFO - 2025-06-22 09:14:18 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:14:18 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:14:18 --> Utf8 Class Initialized
INFO - 2025-06-22 09:14:18 --> URI Class Initialized
INFO - 2025-06-22 09:14:18 --> Router Class Initialized
INFO - 2025-06-22 09:14:18 --> Output Class Initialized
INFO - 2025-06-22 09:14:18 --> Security Class Initialized
DEBUG - 2025-06-22 09:14:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:14:18 --> Input Class Initialized
INFO - 2025-06-22 09:14:18 --> Language Class Initialized
INFO - 2025-06-22 09:14:18 --> Loader Class Initialized
INFO - 2025-06-22 09:14:18 --> Helper loaded: url_helper
INFO - 2025-06-22 09:14:18 --> Helper loaded: file_helper
INFO - 2025-06-22 09:14:18 --> Database Driver Class Initialized
INFO - 2025-06-22 09:14:18 --> Email Class Initialized
DEBUG - 2025-06-22 09:14:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:14:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:14:18 --> Controller Class Initialized
INFO - 2025-06-22 09:14:18 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:14:18 --> Helper loaded: form_helper
INFO - 2025-06-22 09:14:18 --> Form Validation Class Initialized
INFO - 2025-06-22 09:14:18 --> Database Driver Class Initialized
INFO - 2025-06-22 09:14:18 --> Model "Crud" initialized
INFO - 2025-06-22 09:14:18 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:14:18 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:14:18 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:14:18 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:14:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:14:18 --> Final output sent to browser
DEBUG - 2025-06-22 09:14:18 --> Total execution time: 0.0192
INFO - 2025-06-22 09:14:27 --> Config Class Initialized
INFO - 2025-06-22 09:14:27 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:14:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:14:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:14:27 --> URI Class Initialized
INFO - 2025-06-22 09:14:27 --> Router Class Initialized
INFO - 2025-06-22 09:14:27 --> Output Class Initialized
INFO - 2025-06-22 09:14:27 --> Security Class Initialized
DEBUG - 2025-06-22 09:14:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:14:27 --> Input Class Initialized
INFO - 2025-06-22 09:14:27 --> Language Class Initialized
INFO - 2025-06-22 09:14:27 --> Loader Class Initialized
INFO - 2025-06-22 09:14:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:14:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:14:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:14:27 --> Config Class Initialized
INFO - 2025-06-22 09:14:27 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:14:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:14:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:14:27 --> URI Class Initialized
INFO - 2025-06-22 09:14:27 --> Router Class Initialized
INFO - 2025-06-22 09:14:27 --> Output Class Initialized
INFO - 2025-06-22 09:14:27 --> Security Class Initialized
DEBUG - 2025-06-22 09:14:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:14:27 --> Input Class Initialized
INFO - 2025-06-22 09:14:27 --> Language Class Initialized
INFO - 2025-06-22 09:14:27 --> Loader Class Initialized
INFO - 2025-06-22 09:14:27 --> Email Class Initialized
INFO - 2025-06-22 09:14:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:14:27 --> Helper loaded: file_helper
DEBUG - 2025-06-22 09:14:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:14:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:14:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:14:27 --> Controller Class Initialized
INFO - 2025-06-22 09:14:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:14:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:14:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:14:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:14:27 --> Email Class Initialized
INFO - 2025-06-22 09:14:27 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:14:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:14:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:14:27 --> Total execution time: 0.0165
INFO - 2025-06-22 09:14:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:14:27 --> Controller Class Initialized
INFO - 2025-06-22 09:14:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:14:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:14:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:14:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:14:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:14:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:14:27 --> Total execution time: 0.0269
INFO - 2025-06-22 09:15:55 --> Config Class Initialized
INFO - 2025-06-22 09:15:55 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:15:55 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:15:55 --> Utf8 Class Initialized
INFO - 2025-06-22 09:15:55 --> Config Class Initialized
INFO - 2025-06-22 09:15:55 --> URI Class Initialized
INFO - 2025-06-22 09:15:55 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:15:55 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:15:55 --> Router Class Initialized
INFO - 2025-06-22 09:15:55 --> Utf8 Class Initialized
INFO - 2025-06-22 09:15:55 --> Output Class Initialized
INFO - 2025-06-22 09:15:55 --> URI Class Initialized
INFO - 2025-06-22 09:15:55 --> Security Class Initialized
INFO - 2025-06-22 09:15:55 --> Router Class Initialized
DEBUG - 2025-06-22 09:15:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:15:55 --> Output Class Initialized
INFO - 2025-06-22 09:15:55 --> Input Class Initialized
INFO - 2025-06-22 09:15:55 --> Security Class Initialized
INFO - 2025-06-22 09:15:55 --> Language Class Initialized
DEBUG - 2025-06-22 09:15:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:15:55 --> Input Class Initialized
INFO - 2025-06-22 09:15:55 --> Loader Class Initialized
INFO - 2025-06-22 09:15:55 --> Language Class Initialized
INFO - 2025-06-22 09:15:55 --> Helper loaded: url_helper
INFO - 2025-06-22 09:15:55 --> Helper loaded: file_helper
INFO - 2025-06-22 09:15:55 --> Loader Class Initialized
INFO - 2025-06-22 09:15:55 --> Helper loaded: url_helper
INFO - 2025-06-22 09:15:55 --> Helper loaded: file_helper
INFO - 2025-06-22 09:15:55 --> Database Driver Class Initialized
INFO - 2025-06-22 09:15:55 --> Database Driver Class Initialized
INFO - 2025-06-22 09:15:55 --> Email Class Initialized
INFO - 2025-06-22 09:15:55 --> Email Class Initialized
DEBUG - 2025-06-22 09:15:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:15:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:15:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:15:55 --> Controller Class Initialized
INFO - 2025-06-22 09:15:55 --> Helper loaded: form_helper
INFO - 2025-06-22 09:15:55 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:15:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:15:55 --> Database Driver Class Initialized
INFO - 2025-06-22 09:15:55 --> Model "Crud" initialized
INFO - 2025-06-22 09:15:55 --> Final output sent to browser
DEBUG - 2025-06-22 09:15:55 --> Total execution time: 0.0311
INFO - 2025-06-22 09:15:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:15:55 --> Controller Class Initialized
INFO - 2025-06-22 09:15:55 --> Helper loaded: form_helper
INFO - 2025-06-22 09:15:55 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:15:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:15:55 --> Database Driver Class Initialized
INFO - 2025-06-22 09:15:55 --> Model "Crud" initialized
INFO - 2025-06-22 09:15:55 --> Final output sent to browser
DEBUG - 2025-06-22 09:15:55 --> Total execution time: 0.0469
INFO - 2025-06-22 09:15:57 --> Config Class Initialized
INFO - 2025-06-22 09:15:57 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:15:57 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:15:57 --> Utf8 Class Initialized
INFO - 2025-06-22 09:15:57 --> Config Class Initialized
INFO - 2025-06-22 09:15:57 --> Hooks Class Initialized
INFO - 2025-06-22 09:15:57 --> URI Class Initialized
DEBUG - 2025-06-22 09:15:57 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:15:57 --> Utf8 Class Initialized
INFO - 2025-06-22 09:15:57 --> Router Class Initialized
INFO - 2025-06-22 09:15:57 --> Output Class Initialized
INFO - 2025-06-22 09:15:57 --> Security Class Initialized
INFO - 2025-06-22 09:15:57 --> URI Class Initialized
DEBUG - 2025-06-22 09:15:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:15:57 --> Router Class Initialized
INFO - 2025-06-22 09:15:57 --> Input Class Initialized
INFO - 2025-06-22 09:15:57 --> Output Class Initialized
INFO - 2025-06-22 09:15:57 --> Language Class Initialized
INFO - 2025-06-22 09:15:57 --> Security Class Initialized
DEBUG - 2025-06-22 09:15:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:15:57 --> Input Class Initialized
INFO - 2025-06-22 09:15:57 --> Loader Class Initialized
INFO - 2025-06-22 09:15:57 --> Language Class Initialized
INFO - 2025-06-22 09:15:57 --> Helper loaded: url_helper
INFO - 2025-06-22 09:15:57 --> Helper loaded: file_helper
INFO - 2025-06-22 09:15:57 --> Loader Class Initialized
INFO - 2025-06-22 09:15:57 --> Helper loaded: url_helper
INFO - 2025-06-22 09:15:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:15:57 --> Helper loaded: file_helper
INFO - 2025-06-22 09:15:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:15:57 --> Email Class Initialized
DEBUG - 2025-06-22 09:15:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:15:57 --> Email Class Initialized
INFO - 2025-06-22 09:15:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:15:57 --> Controller Class Initialized
DEBUG - 2025-06-22 09:15:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:15:57 --> Helper loaded: form_helper
INFO - 2025-06-22 09:15:57 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:15:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:15:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:15:57 --> Model "Crud" initialized
INFO - 2025-06-22 09:15:57 --> Final output sent to browser
DEBUG - 2025-06-22 09:15:57 --> Total execution time: 0.0165
INFO - 2025-06-22 09:15:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:15:57 --> Controller Class Initialized
INFO - 2025-06-22 09:15:57 --> Helper loaded: form_helper
INFO - 2025-06-22 09:15:57 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:15:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:15:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:15:57 --> Model "Crud" initialized
INFO - 2025-06-22 09:15:57 --> Final output sent to browser
DEBUG - 2025-06-22 09:15:57 --> Total execution time: 0.0305
INFO - 2025-06-22 09:16:07 --> Config Class Initialized
INFO - 2025-06-22 09:16:07 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:16:07 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:16:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:16:07 --> URI Class Initialized
INFO - 2025-06-22 09:16:07 --> Router Class Initialized
INFO - 2025-06-22 09:16:07 --> Output Class Initialized
INFO - 2025-06-22 09:16:07 --> Security Class Initialized
DEBUG - 2025-06-22 09:16:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:16:07 --> Input Class Initialized
INFO - 2025-06-22 09:16:07 --> Language Class Initialized
INFO - 2025-06-22 09:16:07 --> Loader Class Initialized
INFO - 2025-06-22 09:16:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:16:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:16:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:16:07 --> Config Class Initialized
INFO - 2025-06-22 09:16:07 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:16:07 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:16:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:16:07 --> URI Class Initialized
INFO - 2025-06-22 09:16:07 --> Router Class Initialized
INFO - 2025-06-22 09:16:07 --> Output Class Initialized
INFO - 2025-06-22 09:16:07 --> Security Class Initialized
DEBUG - 2025-06-22 09:16:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:16:07 --> Input Class Initialized
INFO - 2025-06-22 09:16:07 --> Language Class Initialized
INFO - 2025-06-22 09:16:07 --> Loader Class Initialized
INFO - 2025-06-22 09:16:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:16:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:16:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:16:07 --> Email Class Initialized
DEBUG - 2025-06-22 09:16:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:16:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:16:07 --> Controller Class Initialized
INFO - 2025-06-22 09:16:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:16:07 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:16:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:16:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:16:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:16:07 --> Email Class Initialized
DEBUG - 2025-06-22 09:16:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:16:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:16:07 --> Total execution time: 0.0223
INFO - 2025-06-22 09:16:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:16:07 --> Controller Class Initialized
INFO - 2025-06-22 09:16:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:16:07 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:16:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:16:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:16:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:16:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:16:07 --> Total execution time: 0.0325
INFO - 2025-06-22 09:17:00 --> Config Class Initialized
INFO - 2025-06-22 09:17:00 --> Config Class Initialized
INFO - 2025-06-22 09:17:00 --> Hooks Class Initialized
INFO - 2025-06-22 09:17:00 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:17:00 --> UTF-8 Support Enabled
DEBUG - 2025-06-22 09:17:00 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:17:00 --> Utf8 Class Initialized
INFO - 2025-06-22 09:17:00 --> Utf8 Class Initialized
INFO - 2025-06-22 09:17:00 --> URI Class Initialized
INFO - 2025-06-22 09:17:00 --> URI Class Initialized
INFO - 2025-06-22 09:17:00 --> Router Class Initialized
INFO - 2025-06-22 09:17:00 --> Router Class Initialized
INFO - 2025-06-22 09:17:00 --> Output Class Initialized
INFO - 2025-06-22 09:17:00 --> Output Class Initialized
INFO - 2025-06-22 09:17:00 --> Security Class Initialized
INFO - 2025-06-22 09:17:00 --> Security Class Initialized
DEBUG - 2025-06-22 09:17:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-22 09:17:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:17:00 --> Input Class Initialized
INFO - 2025-06-22 09:17:00 --> Input Class Initialized
INFO - 2025-06-22 09:17:00 --> Language Class Initialized
INFO - 2025-06-22 09:17:00 --> Language Class Initialized
INFO - 2025-06-22 09:17:00 --> Loader Class Initialized
INFO - 2025-06-22 09:17:00 --> Loader Class Initialized
INFO - 2025-06-22 09:17:00 --> Helper loaded: url_helper
INFO - 2025-06-22 09:17:00 --> Helper loaded: url_helper
INFO - 2025-06-22 09:17:00 --> Helper loaded: file_helper
INFO - 2025-06-22 09:17:00 --> Helper loaded: file_helper
INFO - 2025-06-22 09:17:00 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:00 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:00 --> Email Class Initialized
DEBUG - 2025-06-22 09:17:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:17:00 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:17:00 --> Controller Class Initialized
INFO - 2025-06-22 09:17:00 --> Helper loaded: form_helper
INFO - 2025-06-22 09:17:00 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:17:00 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:17:00 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:00 --> Email Class Initialized
DEBUG - 2025-06-22 09:17:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:17:00 --> Model "Crud" initialized
INFO - 2025-06-22 09:17:00 --> Final output sent to browser
DEBUG - 2025-06-22 09:17:00 --> Total execution time: 0.0348
INFO - 2025-06-22 09:17:00 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:17:00 --> Controller Class Initialized
INFO - 2025-06-22 09:17:00 --> Helper loaded: form_helper
INFO - 2025-06-22 09:17:00 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:17:00 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:17:00 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:00 --> Model "Crud" initialized
INFO - 2025-06-22 09:17:00 --> Final output sent to browser
DEBUG - 2025-06-22 09:17:00 --> Total execution time: 0.0523
INFO - 2025-06-22 09:17:03 --> Config Class Initialized
INFO - 2025-06-22 09:17:03 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:17:03 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:17:03 --> Utf8 Class Initialized
INFO - 2025-06-22 09:17:03 --> URI Class Initialized
INFO - 2025-06-22 09:17:03 --> Router Class Initialized
INFO - 2025-06-22 09:17:03 --> Output Class Initialized
INFO - 2025-06-22 09:17:03 --> Security Class Initialized
DEBUG - 2025-06-22 09:17:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:17:03 --> Input Class Initialized
INFO - 2025-06-22 09:17:03 --> Language Class Initialized
INFO - 2025-06-22 09:17:03 --> Loader Class Initialized
INFO - 2025-06-22 09:17:03 --> Helper loaded: url_helper
INFO - 2025-06-22 09:17:03 --> Helper loaded: file_helper
INFO - 2025-06-22 09:17:03 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:03 --> Email Class Initialized
DEBUG - 2025-06-22 09:17:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:17:03 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:17:03 --> Controller Class Initialized
INFO - 2025-06-22 09:17:03 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:17:03 --> Helper loaded: form_helper
INFO - 2025-06-22 09:17:03 --> Form Validation Class Initialized
INFO - 2025-06-22 09:17:03 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:03 --> Model "Crud" initialized
INFO - 2025-06-22 09:17:03 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:17:03 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:17:03 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:17:03 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:17:03 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:17:03 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-22 09:17:03 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/master-form-test.php
INFO - 2025-06-22 09:17:03 --> Final output sent to browser
DEBUG - 2025-06-22 09:17:03 --> Total execution time: 0.0124
INFO - 2025-06-22 09:17:03 --> Config Class Initialized
INFO - 2025-06-22 09:17:03 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:17:03 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:17:03 --> Utf8 Class Initialized
INFO - 2025-06-22 09:17:03 --> URI Class Initialized
INFO - 2025-06-22 09:17:03 --> Router Class Initialized
INFO - 2025-06-22 09:17:03 --> Output Class Initialized
INFO - 2025-06-22 09:17:03 --> Security Class Initialized
DEBUG - 2025-06-22 09:17:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:17:03 --> Input Class Initialized
INFO - 2025-06-22 09:17:03 --> Language Class Initialized
INFO - 2025-06-22 09:17:03 --> Loader Class Initialized
INFO - 2025-06-22 09:17:03 --> Helper loaded: url_helper
INFO - 2025-06-22 09:17:03 --> Helper loaded: file_helper
INFO - 2025-06-22 09:17:03 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:03 --> Email Class Initialized
DEBUG - 2025-06-22 09:17:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:17:03 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:17:03 --> Controller Class Initialized
INFO - 2025-06-22 09:17:03 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:17:03 --> Helper loaded: form_helper
INFO - 2025-06-22 09:17:03 --> Form Validation Class Initialized
INFO - 2025-06-22 09:17:03 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:03 --> Model "Crud" initialized
INFO - 2025-06-22 09:17:03 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:17:03 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:17:03 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:17:03 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:17:03 --> Session class already loaded. Second attempt ignored.
ERROR - 2025-06-22 09:17:03 --> Query error: Illegal mix of collations (utf8mb4_0900_ai_ci,IMPLICIT) and (utf8mb3_general_ci,COERCIBLE) for operation '=' - Invalid query: SELECT a.* FROM setting_users a JOIN users b ON a.users_id = b.username WHERE a.menus_id='‚ZjXì' and b.username='admin'
INFO - 2025-06-22 09:17:03 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-22 09:17:05 --> Config Class Initialized
INFO - 2025-06-22 09:17:05 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:17:05 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:17:05 --> Utf8 Class Initialized
INFO - 2025-06-22 09:17:05 --> URI Class Initialized
INFO - 2025-06-22 09:17:05 --> Router Class Initialized
INFO - 2025-06-22 09:17:05 --> Output Class Initialized
INFO - 2025-06-22 09:17:05 --> Security Class Initialized
DEBUG - 2025-06-22 09:17:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:17:05 --> Input Class Initialized
INFO - 2025-06-22 09:17:05 --> Language Class Initialized
INFO - 2025-06-22 09:17:05 --> Loader Class Initialized
INFO - 2025-06-22 09:17:05 --> Helper loaded: url_helper
INFO - 2025-06-22 09:17:05 --> Helper loaded: file_helper
INFO - 2025-06-22 09:17:05 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:05 --> Email Class Initialized
DEBUG - 2025-06-22 09:17:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:17:05 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:17:05 --> Controller Class Initialized
INFO - 2025-06-22 09:17:05 --> Helper loaded: form_helper
INFO - 2025-06-22 09:17:05 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:17:05 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:17:05 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:05 --> Model "Crud" initialized
INFO - 2025-06-22 09:17:05 --> Final output sent to browser
DEBUG - 2025-06-22 09:17:05 --> Total execution time: 0.0132
INFO - 2025-06-22 09:17:05 --> Config Class Initialized
INFO - 2025-06-22 09:17:05 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:17:05 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:17:05 --> Utf8 Class Initialized
INFO - 2025-06-22 09:17:05 --> URI Class Initialized
INFO - 2025-06-22 09:17:05 --> Router Class Initialized
INFO - 2025-06-22 09:17:05 --> Output Class Initialized
INFO - 2025-06-22 09:17:05 --> Security Class Initialized
DEBUG - 2025-06-22 09:17:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:17:05 --> Input Class Initialized
INFO - 2025-06-22 09:17:05 --> Language Class Initialized
INFO - 2025-06-22 09:17:05 --> Loader Class Initialized
INFO - 2025-06-22 09:17:05 --> Helper loaded: url_helper
INFO - 2025-06-22 09:17:05 --> Helper loaded: file_helper
INFO - 2025-06-22 09:17:05 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:05 --> Email Class Initialized
DEBUG - 2025-06-22 09:17:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:17:05 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:17:05 --> Controller Class Initialized
INFO - 2025-06-22 09:17:05 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:17:05 --> Helper loaded: form_helper
INFO - 2025-06-22 09:17:05 --> Form Validation Class Initialized
INFO - 2025-06-22 09:17:05 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:05 --> Model "Crud" initialized
INFO - 2025-06-22 09:17:05 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:17:05 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:17:05 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:17:05 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:17:05 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:17:05 --> Final output sent to browser
DEBUG - 2025-06-22 09:17:05 --> Total execution time: 0.0091
INFO - 2025-06-22 09:17:05 --> Config Class Initialized
INFO - 2025-06-22 09:17:05 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:17:05 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:17:05 --> Utf8 Class Initialized
INFO - 2025-06-22 09:17:05 --> URI Class Initialized
INFO - 2025-06-22 09:17:05 --> Router Class Initialized
INFO - 2025-06-22 09:17:05 --> Output Class Initialized
INFO - 2025-06-22 09:17:05 --> Security Class Initialized
DEBUG - 2025-06-22 09:17:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:17:05 --> Input Class Initialized
INFO - 2025-06-22 09:17:05 --> Language Class Initialized
INFO - 2025-06-22 09:17:05 --> Loader Class Initialized
INFO - 2025-06-22 09:17:05 --> Helper loaded: url_helper
INFO - 2025-06-22 09:17:05 --> Helper loaded: file_helper
INFO - 2025-06-22 09:17:05 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:05 --> Email Class Initialized
DEBUG - 2025-06-22 09:17:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:17:05 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:17:05 --> Controller Class Initialized
INFO - 2025-06-22 09:17:05 --> Helper loaded: form_helper
INFO - 2025-06-22 09:17:05 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:17:05 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:17:05 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:05 --> Model "Crud" initialized
INFO - 2025-06-22 09:17:05 --> Final output sent to browser
DEBUG - 2025-06-22 09:17:05 --> Total execution time: 0.0108
INFO - 2025-06-22 09:17:05 --> Config Class Initialized
INFO - 2025-06-22 09:17:05 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:17:05 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:17:05 --> Utf8 Class Initialized
INFO - 2025-06-22 09:17:05 --> URI Class Initialized
INFO - 2025-06-22 09:17:05 --> Router Class Initialized
INFO - 2025-06-22 09:17:05 --> Output Class Initialized
INFO - 2025-06-22 09:17:05 --> Security Class Initialized
DEBUG - 2025-06-22 09:17:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:17:05 --> Input Class Initialized
INFO - 2025-06-22 09:17:05 --> Language Class Initialized
INFO - 2025-06-22 09:17:05 --> Loader Class Initialized
INFO - 2025-06-22 09:17:05 --> Helper loaded: url_helper
INFO - 2025-06-22 09:17:05 --> Helper loaded: file_helper
INFO - 2025-06-22 09:17:05 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:05 --> Email Class Initialized
DEBUG - 2025-06-22 09:17:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:17:05 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:17:05 --> Controller Class Initialized
INFO - 2025-06-22 09:17:05 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:17:05 --> Helper loaded: form_helper
INFO - 2025-06-22 09:17:05 --> Form Validation Class Initialized
INFO - 2025-06-22 09:17:05 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:05 --> Model "Crud" initialized
INFO - 2025-06-22 09:17:05 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:17:05 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:17:05 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:17:05 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:17:05 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:17:05 --> Final output sent to browser
DEBUG - 2025-06-22 09:17:05 --> Total execution time: 0.0261
INFO - 2025-06-22 09:17:07 --> Config Class Initialized
INFO - 2025-06-22 09:17:07 --> Config Class Initialized
INFO - 2025-06-22 09:17:07 --> Hooks Class Initialized
INFO - 2025-06-22 09:17:07 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:17:07 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:17:07 --> Utf8 Class Initialized
DEBUG - 2025-06-22 09:17:07 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:17:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:17:07 --> URI Class Initialized
INFO - 2025-06-22 09:17:07 --> URI Class Initialized
INFO - 2025-06-22 09:17:07 --> Router Class Initialized
INFO - 2025-06-22 09:17:07 --> Output Class Initialized
INFO - 2025-06-22 09:17:07 --> Router Class Initialized
INFO - 2025-06-22 09:17:07 --> Security Class Initialized
INFO - 2025-06-22 09:17:07 --> Output Class Initialized
DEBUG - 2025-06-22 09:17:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:17:07 --> Security Class Initialized
DEBUG - 2025-06-22 09:17:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:17:07 --> Input Class Initialized
INFO - 2025-06-22 09:17:07 --> Input Class Initialized
INFO - 2025-06-22 09:17:07 --> Language Class Initialized
INFO - 2025-06-22 09:17:07 --> Language Class Initialized
INFO - 2025-06-22 09:17:07 --> Loader Class Initialized
INFO - 2025-06-22 09:17:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:17:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:17:07 --> Loader Class Initialized
INFO - 2025-06-22 09:17:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:17:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:17:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:07 --> Email Class Initialized
DEBUG - 2025-06-22 09:17:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:17:07 --> Email Class Initialized
INFO - 2025-06-22 09:17:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:17:07 --> Controller Class Initialized
DEBUG - 2025-06-22 09:17:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:17:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:17:07 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:17:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:17:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:17:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:17:07 --> Total execution time: 0.0169
INFO - 2025-06-22 09:17:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:17:07 --> Controller Class Initialized
INFO - 2025-06-22 09:17:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:17:07 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:17:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:17:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:17:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:17:07 --> Total execution time: 0.0311
INFO - 2025-06-22 09:17:07 --> Config Class Initialized
INFO - 2025-06-22 09:17:07 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:17:07 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:17:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:17:07 --> URI Class Initialized
INFO - 2025-06-22 09:17:07 --> Router Class Initialized
INFO - 2025-06-22 09:17:07 --> Output Class Initialized
INFO - 2025-06-22 09:17:07 --> Security Class Initialized
DEBUG - 2025-06-22 09:17:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:17:07 --> Input Class Initialized
INFO - 2025-06-22 09:17:07 --> Language Class Initialized
INFO - 2025-06-22 09:17:07 --> Loader Class Initialized
INFO - 2025-06-22 09:17:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:17:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:17:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:07 --> Email Class Initialized
DEBUG - 2025-06-22 09:17:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:17:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:17:07 --> Controller Class Initialized
INFO - 2025-06-22 09:17:07 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:17:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:17:07 --> Form Validation Class Initialized
INFO - 2025-06-22 09:17:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:17:07 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:17:07 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:17:07 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:17:07 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:17:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:17:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:17:07 --> Total execution time: 0.0132
INFO - 2025-06-22 09:17:17 --> Config Class Initialized
INFO - 2025-06-22 09:17:17 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:17:17 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:17:17 --> Utf8 Class Initialized
INFO - 2025-06-22 09:17:17 --> URI Class Initialized
INFO - 2025-06-22 09:17:17 --> Router Class Initialized
INFO - 2025-06-22 09:17:17 --> Output Class Initialized
INFO - 2025-06-22 09:17:17 --> Security Class Initialized
DEBUG - 2025-06-22 09:17:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:17:17 --> Input Class Initialized
INFO - 2025-06-22 09:17:17 --> Language Class Initialized
INFO - 2025-06-22 09:17:17 --> Loader Class Initialized
INFO - 2025-06-22 09:17:17 --> Helper loaded: url_helper
INFO - 2025-06-22 09:17:17 --> Helper loaded: file_helper
INFO - 2025-06-22 09:17:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:17 --> Config Class Initialized
INFO - 2025-06-22 09:17:17 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:17:17 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:17:17 --> Utf8 Class Initialized
INFO - 2025-06-22 09:17:17 --> URI Class Initialized
INFO - 2025-06-22 09:17:17 --> Router Class Initialized
INFO - 2025-06-22 09:17:17 --> Output Class Initialized
INFO - 2025-06-22 09:17:17 --> Security Class Initialized
DEBUG - 2025-06-22 09:17:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:17:17 --> Input Class Initialized
INFO - 2025-06-22 09:17:17 --> Language Class Initialized
INFO - 2025-06-22 09:17:17 --> Loader Class Initialized
INFO - 2025-06-22 09:17:17 --> Helper loaded: url_helper
INFO - 2025-06-22 09:17:17 --> Helper loaded: file_helper
INFO - 2025-06-22 09:17:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:17 --> Email Class Initialized
DEBUG - 2025-06-22 09:17:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:17:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:17:17 --> Controller Class Initialized
INFO - 2025-06-22 09:17:17 --> Helper loaded: form_helper
INFO - 2025-06-22 09:17:17 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:17:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:17:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:17 --> Email Class Initialized
DEBUG - 2025-06-22 09:17:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:17:17 --> Model "Crud" initialized
INFO - 2025-06-22 09:17:17 --> Final output sent to browser
DEBUG - 2025-06-22 09:17:17 --> Total execution time: 0.0175
INFO - 2025-06-22 09:17:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:17:17 --> Controller Class Initialized
INFO - 2025-06-22 09:17:17 --> Helper loaded: form_helper
INFO - 2025-06-22 09:17:17 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:17:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:17:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:17 --> Model "Crud" initialized
INFO - 2025-06-22 09:17:17 --> Final output sent to browser
DEBUG - 2025-06-22 09:17:17 --> Total execution time: 0.0288
INFO - 2025-06-22 09:17:27 --> Config Class Initialized
INFO - 2025-06-22 09:17:27 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:17:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:17:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:17:27 --> URI Class Initialized
INFO - 2025-06-22 09:17:27 --> Router Class Initialized
INFO - 2025-06-22 09:17:27 --> Output Class Initialized
INFO - 2025-06-22 09:17:27 --> Config Class Initialized
INFO - 2025-06-22 09:17:27 --> Security Class Initialized
INFO - 2025-06-22 09:17:27 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:17:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:17:27 --> Input Class Initialized
DEBUG - 2025-06-22 09:17:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:17:27 --> Language Class Initialized
INFO - 2025-06-22 09:17:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:17:27 --> URI Class Initialized
INFO - 2025-06-22 09:17:27 --> Loader Class Initialized
INFO - 2025-06-22 09:17:27 --> Router Class Initialized
INFO - 2025-06-22 09:17:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:17:27 --> Output Class Initialized
INFO - 2025-06-22 09:17:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:17:27 --> Security Class Initialized
DEBUG - 2025-06-22 09:17:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:17:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:27 --> Input Class Initialized
INFO - 2025-06-22 09:17:27 --> Language Class Initialized
INFO - 2025-06-22 09:17:27 --> Loader Class Initialized
INFO - 2025-06-22 09:17:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:17:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:17:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:27 --> Email Class Initialized
INFO - 2025-06-22 09:17:27 --> Email Class Initialized
DEBUG - 2025-06-22 09:17:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:17:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:17:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:17:27 --> Controller Class Initialized
INFO - 2025-06-22 09:17:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:17:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:17:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:17:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:17:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:17:27 --> Total execution time: 0.0200
INFO - 2025-06-22 09:17:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:17:27 --> Controller Class Initialized
INFO - 2025-06-22 09:17:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:17:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:17:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:17:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:17:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:17:27 --> Total execution time: 0.0328
INFO - 2025-06-22 09:17:54 --> Config Class Initialized
INFO - 2025-06-22 09:17:54 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:17:54 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:17:54 --> Utf8 Class Initialized
INFO - 2025-06-22 09:17:54 --> URI Class Initialized
INFO - 2025-06-22 09:17:54 --> Router Class Initialized
INFO - 2025-06-22 09:17:54 --> Output Class Initialized
INFO - 2025-06-22 09:17:54 --> Security Class Initialized
DEBUG - 2025-06-22 09:17:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:17:54 --> Input Class Initialized
INFO - 2025-06-22 09:17:54 --> Language Class Initialized
INFO - 2025-06-22 09:17:54 --> Loader Class Initialized
INFO - 2025-06-22 09:17:54 --> Helper loaded: url_helper
INFO - 2025-06-22 09:17:54 --> Helper loaded: file_helper
INFO - 2025-06-22 09:17:54 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:54 --> Config Class Initialized
INFO - 2025-06-22 09:17:54 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:17:54 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:17:54 --> Utf8 Class Initialized
INFO - 2025-06-22 09:17:54 --> URI Class Initialized
INFO - 2025-06-22 09:17:54 --> Router Class Initialized
INFO - 2025-06-22 09:17:54 --> Output Class Initialized
INFO - 2025-06-22 09:17:54 --> Security Class Initialized
DEBUG - 2025-06-22 09:17:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:17:54 --> Input Class Initialized
INFO - 2025-06-22 09:17:54 --> Language Class Initialized
INFO - 2025-06-22 09:17:54 --> Loader Class Initialized
INFO - 2025-06-22 09:17:54 --> Helper loaded: url_helper
INFO - 2025-06-22 09:17:54 --> Helper loaded: file_helper
INFO - 2025-06-22 09:17:54 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:54 --> Email Class Initialized
INFO - 2025-06-22 09:17:54 --> Email Class Initialized
DEBUG - 2025-06-22 09:17:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:17:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:17:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:17:54 --> Controller Class Initialized
INFO - 2025-06-22 09:17:54 --> Helper loaded: form_helper
INFO - 2025-06-22 09:17:54 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:17:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:17:54 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:54 --> Model "Crud" initialized
INFO - 2025-06-22 09:17:54 --> Final output sent to browser
DEBUG - 2025-06-22 09:17:54 --> Total execution time: 0.0352
INFO - 2025-06-22 09:17:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:17:54 --> Controller Class Initialized
INFO - 2025-06-22 09:17:54 --> Helper loaded: form_helper
INFO - 2025-06-22 09:17:54 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:17:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:17:54 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:54 --> Model "Crud" initialized
INFO - 2025-06-22 09:17:54 --> Final output sent to browser
DEBUG - 2025-06-22 09:17:54 --> Total execution time: 0.0465
INFO - 2025-06-22 09:17:57 --> Config Class Initialized
INFO - 2025-06-22 09:17:57 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:17:57 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:17:57 --> Utf8 Class Initialized
INFO - 2025-06-22 09:17:57 --> URI Class Initialized
INFO - 2025-06-22 09:17:57 --> Router Class Initialized
INFO - 2025-06-22 09:17:57 --> Output Class Initialized
INFO - 2025-06-22 09:17:57 --> Security Class Initialized
DEBUG - 2025-06-22 09:17:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:17:57 --> Input Class Initialized
INFO - 2025-06-22 09:17:57 --> Language Class Initialized
INFO - 2025-06-22 09:17:57 --> Config Class Initialized
INFO - 2025-06-22 09:17:57 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:17:57 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:17:57 --> Loader Class Initialized
INFO - 2025-06-22 09:17:57 --> Utf8 Class Initialized
INFO - 2025-06-22 09:17:57 --> Helper loaded: url_helper
INFO - 2025-06-22 09:17:57 --> URI Class Initialized
INFO - 2025-06-22 09:17:57 --> Helper loaded: file_helper
INFO - 2025-06-22 09:17:57 --> Router Class Initialized
INFO - 2025-06-22 09:17:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:57 --> Output Class Initialized
INFO - 2025-06-22 09:17:57 --> Security Class Initialized
DEBUG - 2025-06-22 09:17:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:17:57 --> Input Class Initialized
INFO - 2025-06-22 09:17:57 --> Language Class Initialized
INFO - 2025-06-22 09:17:57 --> Loader Class Initialized
INFO - 2025-06-22 09:17:57 --> Helper loaded: url_helper
INFO - 2025-06-22 09:17:57 --> Helper loaded: file_helper
INFO - 2025-06-22 09:17:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:57 --> Email Class Initialized
INFO - 2025-06-22 09:17:57 --> Email Class Initialized
DEBUG - 2025-06-22 09:17:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:17:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:17:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:17:57 --> Controller Class Initialized
INFO - 2025-06-22 09:17:57 --> Helper loaded: form_helper
INFO - 2025-06-22 09:17:57 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:17:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:17:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:57 --> Model "Crud" initialized
INFO - 2025-06-22 09:17:57 --> Final output sent to browser
DEBUG - 2025-06-22 09:17:57 --> Total execution time: 0.0186
INFO - 2025-06-22 09:17:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:17:57 --> Controller Class Initialized
INFO - 2025-06-22 09:17:57 --> Helper loaded: form_helper
INFO - 2025-06-22 09:17:57 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:17:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:17:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:57 --> Model "Crud" initialized
INFO - 2025-06-22 09:17:57 --> Final output sent to browser
DEBUG - 2025-06-22 09:17:57 --> Total execution time: 0.0350
INFO - 2025-06-22 09:17:59 --> Config Class Initialized
INFO - 2025-06-22 09:17:59 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:17:59 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:17:59 --> Utf8 Class Initialized
INFO - 2025-06-22 09:17:59 --> URI Class Initialized
INFO - 2025-06-22 09:17:59 --> Router Class Initialized
INFO - 2025-06-22 09:17:59 --> Output Class Initialized
INFO - 2025-06-22 09:17:59 --> Security Class Initialized
DEBUG - 2025-06-22 09:17:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:17:59 --> Input Class Initialized
INFO - 2025-06-22 09:17:59 --> Language Class Initialized
INFO - 2025-06-22 09:17:59 --> Loader Class Initialized
INFO - 2025-06-22 09:17:59 --> Helper loaded: url_helper
INFO - 2025-06-22 09:17:59 --> Helper loaded: file_helper
INFO - 2025-06-22 09:17:59 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:59 --> Email Class Initialized
DEBUG - 2025-06-22 09:17:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:17:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:17:59 --> Controller Class Initialized
INFO - 2025-06-22 09:17:59 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:17:59 --> Helper loaded: form_helper
INFO - 2025-06-22 09:17:59 --> Form Validation Class Initialized
INFO - 2025-06-22 09:17:59 --> Database Driver Class Initialized
INFO - 2025-06-22 09:17:59 --> Model "Crud" initialized
INFO - 2025-06-22 09:17:59 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:17:59 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:17:59 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:17:59 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:17:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:17:59 --> Final output sent to browser
DEBUG - 2025-06-22 09:17:59 --> Total execution time: 0.0140
INFO - 2025-06-22 09:18:07 --> Config Class Initialized
INFO - 2025-06-22 09:18:07 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:18:07 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:18:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:18:07 --> URI Class Initialized
INFO - 2025-06-22 09:18:07 --> Router Class Initialized
INFO - 2025-06-22 09:18:07 --> Output Class Initialized
INFO - 2025-06-22 09:18:07 --> Security Class Initialized
DEBUG - 2025-06-22 09:18:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:18:07 --> Input Class Initialized
INFO - 2025-06-22 09:18:07 --> Language Class Initialized
INFO - 2025-06-22 09:18:07 --> Loader Class Initialized
INFO - 2025-06-22 09:18:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:18:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:18:07 --> Config Class Initialized
INFO - 2025-06-22 09:18:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:07 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:18:07 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:18:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:18:07 --> URI Class Initialized
INFO - 2025-06-22 09:18:07 --> Router Class Initialized
INFO - 2025-06-22 09:18:07 --> Output Class Initialized
INFO - 2025-06-22 09:18:07 --> Security Class Initialized
DEBUG - 2025-06-22 09:18:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:18:07 --> Input Class Initialized
INFO - 2025-06-22 09:18:07 --> Language Class Initialized
INFO - 2025-06-22 09:18:07 --> Loader Class Initialized
INFO - 2025-06-22 09:18:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:18:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:18:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:07 --> Email Class Initialized
DEBUG - 2025-06-22 09:18:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:18:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:18:07 --> Controller Class Initialized
INFO - 2025-06-22 09:18:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:18:07 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:18:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:18:07 --> Email Class Initialized
INFO - 2025-06-22 09:18:07 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:18:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:18:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:18:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:18:07 --> Total execution time: 0.0179
INFO - 2025-06-22 09:18:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:18:07 --> Controller Class Initialized
INFO - 2025-06-22 09:18:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:18:07 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:18:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:18:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:18:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:18:07 --> Total execution time: 0.0302
INFO - 2025-06-22 09:18:09 --> Config Class Initialized
INFO - 2025-06-22 09:18:09 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:18:09 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:18:09 --> Utf8 Class Initialized
INFO - 2025-06-22 09:18:09 --> URI Class Initialized
INFO - 2025-06-22 09:18:09 --> Router Class Initialized
INFO - 2025-06-22 09:18:09 --> Output Class Initialized
INFO - 2025-06-22 09:18:09 --> Security Class Initialized
DEBUG - 2025-06-22 09:18:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:18:09 --> Input Class Initialized
INFO - 2025-06-22 09:18:09 --> Language Class Initialized
INFO - 2025-06-22 09:18:09 --> Loader Class Initialized
INFO - 2025-06-22 09:18:09 --> Helper loaded: url_helper
INFO - 2025-06-22 09:18:09 --> Helper loaded: file_helper
INFO - 2025-06-22 09:18:09 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:09 --> Email Class Initialized
DEBUG - 2025-06-22 09:18:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:18:09 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:18:09 --> Controller Class Initialized
INFO - 2025-06-22 09:18:09 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:18:09 --> Helper loaded: form_helper
INFO - 2025-06-22 09:18:09 --> Form Validation Class Initialized
INFO - 2025-06-22 09:18:09 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:09 --> Model "Crud" initialized
INFO - 2025-06-22 09:18:09 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:18:09 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:18:09 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:18:09 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:18:09 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:18:09 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-22 09:18:09 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/master-form-test.php
INFO - 2025-06-22 09:18:09 --> Final output sent to browser
DEBUG - 2025-06-22 09:18:09 --> Total execution time: 0.0162
INFO - 2025-06-22 09:18:09 --> Config Class Initialized
INFO - 2025-06-22 09:18:09 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:18:09 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:18:09 --> Utf8 Class Initialized
INFO - 2025-06-22 09:18:09 --> URI Class Initialized
INFO - 2025-06-22 09:18:09 --> Router Class Initialized
INFO - 2025-06-22 09:18:09 --> Output Class Initialized
INFO - 2025-06-22 09:18:09 --> Security Class Initialized
DEBUG - 2025-06-22 09:18:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:18:09 --> Input Class Initialized
INFO - 2025-06-22 09:18:09 --> Language Class Initialized
INFO - 2025-06-22 09:18:09 --> Loader Class Initialized
INFO - 2025-06-22 09:18:09 --> Helper loaded: url_helper
INFO - 2025-06-22 09:18:09 --> Helper loaded: file_helper
INFO - 2025-06-22 09:18:09 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:09 --> Email Class Initialized
DEBUG - 2025-06-22 09:18:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:18:09 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:18:09 --> Controller Class Initialized
INFO - 2025-06-22 09:18:09 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:18:09 --> Helper loaded: form_helper
INFO - 2025-06-22 09:18:09 --> Form Validation Class Initialized
INFO - 2025-06-22 09:18:09 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:09 --> Model "Crud" initialized
INFO - 2025-06-22 09:18:09 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:18:09 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:18:09 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:18:09 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:18:09 --> Session class already loaded. Second attempt ignored.
ERROR - 2025-06-22 09:18:09 --> Query error: Illegal mix of collations (utf8mb4_0900_ai_ci,IMPLICIT) and (utf8mb3_general_ci,COERCIBLE) for operation '=' - Invalid query: SELECT a.* FROM setting_users a JOIN users b ON a.users_id = b.username WHERE a.menus_id='‚ZjXì' and b.username='admin'
INFO - 2025-06-22 09:18:09 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-22 09:18:09 --> Config Class Initialized
INFO - 2025-06-22 09:18:09 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:18:09 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:18:09 --> Utf8 Class Initialized
INFO - 2025-06-22 09:18:09 --> URI Class Initialized
INFO - 2025-06-22 09:18:09 --> Router Class Initialized
INFO - 2025-06-22 09:18:09 --> Output Class Initialized
INFO - 2025-06-22 09:18:09 --> Security Class Initialized
DEBUG - 2025-06-22 09:18:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:18:09 --> Input Class Initialized
INFO - 2025-06-22 09:18:09 --> Language Class Initialized
INFO - 2025-06-22 09:18:09 --> Loader Class Initialized
INFO - 2025-06-22 09:18:09 --> Helper loaded: url_helper
INFO - 2025-06-22 09:18:09 --> Helper loaded: file_helper
INFO - 2025-06-22 09:18:09 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:09 --> Email Class Initialized
DEBUG - 2025-06-22 09:18:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:18:09 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:18:09 --> Controller Class Initialized
INFO - 2025-06-22 09:18:09 --> Helper loaded: form_helper
INFO - 2025-06-22 09:18:09 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:18:09 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:18:09 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:09 --> Model "Crud" initialized
INFO - 2025-06-22 09:18:09 --> Final output sent to browser
DEBUG - 2025-06-22 09:18:09 --> Total execution time: 0.0150
INFO - 2025-06-22 09:18:09 --> Config Class Initialized
INFO - 2025-06-22 09:18:09 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:18:09 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:18:09 --> Utf8 Class Initialized
INFO - 2025-06-22 09:18:09 --> URI Class Initialized
INFO - 2025-06-22 09:18:09 --> Router Class Initialized
INFO - 2025-06-22 09:18:09 --> Output Class Initialized
INFO - 2025-06-22 09:18:09 --> Security Class Initialized
DEBUG - 2025-06-22 09:18:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:18:09 --> Input Class Initialized
INFO - 2025-06-22 09:18:09 --> Language Class Initialized
INFO - 2025-06-22 09:18:09 --> Loader Class Initialized
INFO - 2025-06-22 09:18:09 --> Helper loaded: url_helper
INFO - 2025-06-22 09:18:09 --> Helper loaded: file_helper
INFO - 2025-06-22 09:18:09 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:09 --> Email Class Initialized
DEBUG - 2025-06-22 09:18:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:18:09 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:18:09 --> Controller Class Initialized
INFO - 2025-06-22 09:18:09 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:18:09 --> Helper loaded: form_helper
INFO - 2025-06-22 09:18:09 --> Form Validation Class Initialized
INFO - 2025-06-22 09:18:09 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:09 --> Model "Crud" initialized
INFO - 2025-06-22 09:18:09 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:18:09 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:18:09 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:18:09 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:18:09 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:18:09 --> Final output sent to browser
DEBUG - 2025-06-22 09:18:09 --> Total execution time: 0.0148
INFO - 2025-06-22 09:18:09 --> Config Class Initialized
INFO - 2025-06-22 09:18:09 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:18:09 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:18:09 --> Utf8 Class Initialized
INFO - 2025-06-22 09:18:09 --> URI Class Initialized
INFO - 2025-06-22 09:18:09 --> Router Class Initialized
INFO - 2025-06-22 09:18:09 --> Output Class Initialized
INFO - 2025-06-22 09:18:09 --> Security Class Initialized
DEBUG - 2025-06-22 09:18:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:18:09 --> Input Class Initialized
INFO - 2025-06-22 09:18:09 --> Language Class Initialized
INFO - 2025-06-22 09:18:09 --> Loader Class Initialized
INFO - 2025-06-22 09:18:09 --> Helper loaded: url_helper
INFO - 2025-06-22 09:18:09 --> Helper loaded: file_helper
INFO - 2025-06-22 09:18:09 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:09 --> Email Class Initialized
DEBUG - 2025-06-22 09:18:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:18:09 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:18:09 --> Controller Class Initialized
INFO - 2025-06-22 09:18:09 --> Helper loaded: form_helper
INFO - 2025-06-22 09:18:09 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:18:09 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:18:09 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:09 --> Model "Crud" initialized
INFO - 2025-06-22 09:18:09 --> Final output sent to browser
DEBUG - 2025-06-22 09:18:09 --> Total execution time: 0.0495
INFO - 2025-06-22 09:18:10 --> Config Class Initialized
INFO - 2025-06-22 09:18:10 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:18:10 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:18:10 --> Utf8 Class Initialized
INFO - 2025-06-22 09:18:10 --> URI Class Initialized
INFO - 2025-06-22 09:18:10 --> Router Class Initialized
INFO - 2025-06-22 09:18:10 --> Output Class Initialized
INFO - 2025-06-22 09:18:10 --> Security Class Initialized
DEBUG - 2025-06-22 09:18:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:18:10 --> Input Class Initialized
INFO - 2025-06-22 09:18:10 --> Language Class Initialized
INFO - 2025-06-22 09:18:10 --> Loader Class Initialized
INFO - 2025-06-22 09:18:10 --> Helper loaded: url_helper
INFO - 2025-06-22 09:18:10 --> Helper loaded: file_helper
INFO - 2025-06-22 09:18:10 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:10 --> Email Class Initialized
DEBUG - 2025-06-22 09:18:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:18:10 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:18:10 --> Controller Class Initialized
INFO - 2025-06-22 09:18:10 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:18:10 --> Helper loaded: form_helper
INFO - 2025-06-22 09:18:10 --> Form Validation Class Initialized
INFO - 2025-06-22 09:18:10 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:10 --> Model "Crud" initialized
INFO - 2025-06-22 09:18:10 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:18:10 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:18:10 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:18:10 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:18:10 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:18:10 --> Final output sent to browser
DEBUG - 2025-06-22 09:18:10 --> Total execution time: 0.0360
INFO - 2025-06-22 09:18:12 --> Config Class Initialized
INFO - 2025-06-22 09:18:12 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:18:12 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:18:12 --> Utf8 Class Initialized
INFO - 2025-06-22 09:18:12 --> URI Class Initialized
INFO - 2025-06-22 09:18:12 --> Router Class Initialized
INFO - 2025-06-22 09:18:12 --> Output Class Initialized
INFO - 2025-06-22 09:18:12 --> Security Class Initialized
DEBUG - 2025-06-22 09:18:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:18:12 --> Input Class Initialized
INFO - 2025-06-22 09:18:12 --> Language Class Initialized
INFO - 2025-06-22 09:18:12 --> Loader Class Initialized
INFO - 2025-06-22 09:18:12 --> Helper loaded: url_helper
INFO - 2025-06-22 09:18:12 --> Helper loaded: file_helper
INFO - 2025-06-22 09:18:12 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:12 --> Email Class Initialized
DEBUG - 2025-06-22 09:18:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:18:12 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:18:12 --> Controller Class Initialized
INFO - 2025-06-22 09:18:12 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:18:12 --> Helper loaded: form_helper
INFO - 2025-06-22 09:18:12 --> Form Validation Class Initialized
INFO - 2025-06-22 09:18:12 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:12 --> Model "Crud" initialized
INFO - 2025-06-22 09:18:12 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:18:12 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:18:12 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:18:12 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:18:12 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:18:12 --> Final output sent to browser
DEBUG - 2025-06-22 09:18:12 --> Total execution time: 0.0131
INFO - 2025-06-22 09:18:17 --> Config Class Initialized
INFO - 2025-06-22 09:18:17 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:18:17 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:18:17 --> Utf8 Class Initialized
INFO - 2025-06-22 09:18:17 --> URI Class Initialized
INFO - 2025-06-22 09:18:17 --> Router Class Initialized
INFO - 2025-06-22 09:18:17 --> Output Class Initialized
INFO - 2025-06-22 09:18:17 --> Security Class Initialized
DEBUG - 2025-06-22 09:18:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:18:17 --> Input Class Initialized
INFO - 2025-06-22 09:18:17 --> Language Class Initialized
INFO - 2025-06-22 09:18:17 --> Loader Class Initialized
INFO - 2025-06-22 09:18:17 --> Helper loaded: url_helper
INFO - 2025-06-22 09:18:17 --> Helper loaded: file_helper
INFO - 2025-06-22 09:18:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:17 --> Config Class Initialized
INFO - 2025-06-22 09:18:17 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:18:17 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:18:17 --> Utf8 Class Initialized
INFO - 2025-06-22 09:18:17 --> Email Class Initialized
INFO - 2025-06-22 09:18:17 --> URI Class Initialized
INFO - 2025-06-22 09:18:17 --> Router Class Initialized
DEBUG - 2025-06-22 09:18:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:18:17 --> Output Class Initialized
INFO - 2025-06-22 09:18:17 --> Security Class Initialized
INFO - 2025-06-22 09:18:17 --> Session: Class initialized using 'files' driver.
DEBUG - 2025-06-22 09:18:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:18:17 --> Controller Class Initialized
INFO - 2025-06-22 09:18:17 --> Input Class Initialized
INFO - 2025-06-22 09:18:17 --> Helper loaded: form_helper
INFO - 2025-06-22 09:18:17 --> Language Class Initialized
INFO - 2025-06-22 09:18:17 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:18:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:18:17 --> Loader Class Initialized
INFO - 2025-06-22 09:18:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:17 --> Helper loaded: url_helper
INFO - 2025-06-22 09:18:17 --> Helper loaded: file_helper
INFO - 2025-06-22 09:18:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:17 --> Model "Crud" initialized
INFO - 2025-06-22 09:18:17 --> Email Class Initialized
DEBUG - 2025-06-22 09:18:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:18:17 --> Final output sent to browser
DEBUG - 2025-06-22 09:18:17 --> Total execution time: 0.0173
INFO - 2025-06-22 09:18:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:18:17 --> Controller Class Initialized
INFO - 2025-06-22 09:18:17 --> Helper loaded: form_helper
INFO - 2025-06-22 09:18:17 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:18:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:18:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:17 --> Model "Crud" initialized
INFO - 2025-06-22 09:18:17 --> Final output sent to browser
DEBUG - 2025-06-22 09:18:17 --> Total execution time: 0.0261
INFO - 2025-06-22 09:18:20 --> Config Class Initialized
INFO - 2025-06-22 09:18:20 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:18:20 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:18:20 --> Utf8 Class Initialized
INFO - 2025-06-22 09:18:20 --> URI Class Initialized
INFO - 2025-06-22 09:18:20 --> Router Class Initialized
INFO - 2025-06-22 09:18:20 --> Output Class Initialized
INFO - 2025-06-22 09:18:20 --> Security Class Initialized
DEBUG - 2025-06-22 09:18:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:18:20 --> Input Class Initialized
INFO - 2025-06-22 09:18:20 --> Language Class Initialized
INFO - 2025-06-22 09:18:20 --> Loader Class Initialized
INFO - 2025-06-22 09:18:20 --> Helper loaded: url_helper
INFO - 2025-06-22 09:18:20 --> Helper loaded: file_helper
INFO - 2025-06-22 09:18:20 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:20 --> Email Class Initialized
DEBUG - 2025-06-22 09:18:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:18:20 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:18:20 --> Controller Class Initialized
INFO - 2025-06-22 09:18:20 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:18:20 --> Helper loaded: form_helper
INFO - 2025-06-22 09:18:20 --> Form Validation Class Initialized
INFO - 2025-06-22 09:18:20 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:20 --> Model "Crud" initialized
INFO - 2025-06-22 09:18:20 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:18:20 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:18:20 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:18:20 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:18:20 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:18:20 --> Final output sent to browser
DEBUG - 2025-06-22 09:18:20 --> Total execution time: 0.0419
INFO - 2025-06-22 09:18:27 --> Config Class Initialized
INFO - 2025-06-22 09:18:27 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:18:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:18:27 --> Config Class Initialized
INFO - 2025-06-22 09:18:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:18:27 --> Hooks Class Initialized
INFO - 2025-06-22 09:18:27 --> URI Class Initialized
DEBUG - 2025-06-22 09:18:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:18:27 --> Router Class Initialized
INFO - 2025-06-22 09:18:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:18:27 --> Output Class Initialized
INFO - 2025-06-22 09:18:27 --> URI Class Initialized
INFO - 2025-06-22 09:18:27 --> Security Class Initialized
INFO - 2025-06-22 09:18:27 --> Router Class Initialized
DEBUG - 2025-06-22 09:18:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:18:27 --> Output Class Initialized
INFO - 2025-06-22 09:18:27 --> Input Class Initialized
INFO - 2025-06-22 09:18:27 --> Security Class Initialized
INFO - 2025-06-22 09:18:27 --> Language Class Initialized
DEBUG - 2025-06-22 09:18:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:18:27 --> Input Class Initialized
INFO - 2025-06-22 09:18:27 --> Loader Class Initialized
INFO - 2025-06-22 09:18:27 --> Language Class Initialized
INFO - 2025-06-22 09:18:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:18:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:18:27 --> Loader Class Initialized
INFO - 2025-06-22 09:18:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:18:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:18:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:27 --> Email Class Initialized
INFO - 2025-06-22 09:18:27 --> Email Class Initialized
DEBUG - 2025-06-22 09:18:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:18:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:18:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:18:27 --> Controller Class Initialized
INFO - 2025-06-22 09:18:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:18:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:18:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:18:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:18:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:18:27 --> Total execution time: 0.0162
INFO - 2025-06-22 09:18:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:18:27 --> Controller Class Initialized
INFO - 2025-06-22 09:18:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:18:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:18:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:18:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:18:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:18:27 --> Total execution time: 0.0291
INFO - 2025-06-22 09:18:28 --> Config Class Initialized
INFO - 2025-06-22 09:18:28 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:18:28 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:18:28 --> Utf8 Class Initialized
INFO - 2025-06-22 09:18:28 --> URI Class Initialized
INFO - 2025-06-22 09:18:28 --> Router Class Initialized
INFO - 2025-06-22 09:18:28 --> Output Class Initialized
INFO - 2025-06-22 09:18:28 --> Security Class Initialized
DEBUG - 2025-06-22 09:18:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:18:28 --> Input Class Initialized
INFO - 2025-06-22 09:18:28 --> Language Class Initialized
INFO - 2025-06-22 09:18:28 --> Loader Class Initialized
INFO - 2025-06-22 09:18:28 --> Helper loaded: url_helper
INFO - 2025-06-22 09:18:28 --> Helper loaded: file_helper
INFO - 2025-06-22 09:18:28 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:28 --> Email Class Initialized
DEBUG - 2025-06-22 09:18:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:18:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:18:28 --> Controller Class Initialized
INFO - 2025-06-22 09:18:28 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:18:28 --> Helper loaded: form_helper
INFO - 2025-06-22 09:18:28 --> Form Validation Class Initialized
INFO - 2025-06-22 09:18:28 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:28 --> Model "Crud" initialized
INFO - 2025-06-22 09:18:28 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:18:28 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:18:28 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:18:28 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:18:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:18:28 --> Final output sent to browser
DEBUG - 2025-06-22 09:18:28 --> Total execution time: 0.0143
INFO - 2025-06-22 09:18:37 --> Config Class Initialized
INFO - 2025-06-22 09:18:37 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:18:37 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:18:37 --> Utf8 Class Initialized
INFO - 2025-06-22 09:18:37 --> URI Class Initialized
INFO - 2025-06-22 09:18:37 --> Router Class Initialized
INFO - 2025-06-22 09:18:37 --> Output Class Initialized
INFO - 2025-06-22 09:18:37 --> Security Class Initialized
DEBUG - 2025-06-22 09:18:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:18:37 --> Input Class Initialized
INFO - 2025-06-22 09:18:37 --> Language Class Initialized
INFO - 2025-06-22 09:18:37 --> Loader Class Initialized
INFO - 2025-06-22 09:18:37 --> Helper loaded: url_helper
INFO - 2025-06-22 09:18:37 --> Helper loaded: file_helper
INFO - 2025-06-22 09:18:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:37 --> Config Class Initialized
INFO - 2025-06-22 09:18:37 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:18:37 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:18:37 --> Utf8 Class Initialized
INFO - 2025-06-22 09:18:37 --> URI Class Initialized
INFO - 2025-06-22 09:18:37 --> Router Class Initialized
INFO - 2025-06-22 09:18:37 --> Output Class Initialized
INFO - 2025-06-22 09:18:37 --> Security Class Initialized
DEBUG - 2025-06-22 09:18:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:18:37 --> Input Class Initialized
INFO - 2025-06-22 09:18:37 --> Language Class Initialized
INFO - 2025-06-22 09:18:37 --> Loader Class Initialized
INFO - 2025-06-22 09:18:37 --> Helper loaded: url_helper
INFO - 2025-06-22 09:18:37 --> Helper loaded: file_helper
INFO - 2025-06-22 09:18:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:37 --> Email Class Initialized
DEBUG - 2025-06-22 09:18:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:18:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:18:37 --> Controller Class Initialized
INFO - 2025-06-22 09:18:37 --> Helper loaded: form_helper
INFO - 2025-06-22 09:18:37 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:18:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:18:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:37 --> Email Class Initialized
DEBUG - 2025-06-22 09:18:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:18:37 --> Model "Crud" initialized
INFO - 2025-06-22 09:18:37 --> Final output sent to browser
DEBUG - 2025-06-22 09:18:37 --> Total execution time: 0.0261
INFO - 2025-06-22 09:18:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:18:37 --> Controller Class Initialized
INFO - 2025-06-22 09:18:37 --> Helper loaded: form_helper
INFO - 2025-06-22 09:18:37 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:18:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:18:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:37 --> Model "Crud" initialized
INFO - 2025-06-22 09:18:37 --> Final output sent to browser
DEBUG - 2025-06-22 09:18:37 --> Total execution time: 0.0408
INFO - 2025-06-22 09:18:47 --> Config Class Initialized
INFO - 2025-06-22 09:18:47 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:18:47 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:18:47 --> Utf8 Class Initialized
INFO - 2025-06-22 09:18:47 --> URI Class Initialized
INFO - 2025-06-22 09:18:47 --> Router Class Initialized
INFO - 2025-06-22 09:18:47 --> Output Class Initialized
INFO - 2025-06-22 09:18:47 --> Security Class Initialized
DEBUG - 2025-06-22 09:18:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:18:47 --> Input Class Initialized
INFO - 2025-06-22 09:18:47 --> Language Class Initialized
INFO - 2025-06-22 09:18:47 --> Loader Class Initialized
INFO - 2025-06-22 09:18:47 --> Helper loaded: url_helper
INFO - 2025-06-22 09:18:47 --> Helper loaded: file_helper
INFO - 2025-06-22 09:18:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:47 --> Config Class Initialized
INFO - 2025-06-22 09:18:47 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:18:47 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:18:47 --> Utf8 Class Initialized
INFO - 2025-06-22 09:18:47 --> URI Class Initialized
INFO - 2025-06-22 09:18:47 --> Router Class Initialized
INFO - 2025-06-22 09:18:47 --> Output Class Initialized
INFO - 2025-06-22 09:18:47 --> Email Class Initialized
INFO - 2025-06-22 09:18:47 --> Security Class Initialized
DEBUG - 2025-06-22 09:18:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:18:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:18:47 --> Input Class Initialized
INFO - 2025-06-22 09:18:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:18:47 --> Language Class Initialized
INFO - 2025-06-22 09:18:47 --> Controller Class Initialized
INFO - 2025-06-22 09:18:47 --> Loader Class Initialized
INFO - 2025-06-22 09:18:47 --> Helper loaded: form_helper
INFO - 2025-06-22 09:18:47 --> Helper loaded: url_helper
INFO - 2025-06-22 09:18:47 --> Form Validation Class Initialized
INFO - 2025-06-22 09:18:47 --> Helper loaded: file_helper
DEBUG - 2025-06-22 09:18:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:18:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:47 --> Model "Crud" initialized
INFO - 2025-06-22 09:18:47 --> Email Class Initialized
DEBUG - 2025-06-22 09:18:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:18:47 --> Final output sent to browser
DEBUG - 2025-06-22 09:18:47 --> Total execution time: 0.0206
INFO - 2025-06-22 09:18:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:18:47 --> Controller Class Initialized
INFO - 2025-06-22 09:18:47 --> Helper loaded: form_helper
INFO - 2025-06-22 09:18:47 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:18:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:18:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:18:47 --> Model "Crud" initialized
INFO - 2025-06-22 09:18:47 --> Final output sent to browser
DEBUG - 2025-06-22 09:18:47 --> Total execution time: 0.0318
INFO - 2025-06-22 09:19:51 --> Config Class Initialized
INFO - 2025-06-22 09:19:51 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:19:51 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:19:51 --> Utf8 Class Initialized
INFO - 2025-06-22 09:19:51 --> URI Class Initialized
INFO - 2025-06-22 09:19:51 --> Router Class Initialized
INFO - 2025-06-22 09:19:51 --> Output Class Initialized
INFO - 2025-06-22 09:19:51 --> Security Class Initialized
DEBUG - 2025-06-22 09:19:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:19:51 --> Input Class Initialized
INFO - 2025-06-22 09:19:51 --> Language Class Initialized
INFO - 2025-06-22 09:19:51 --> Loader Class Initialized
INFO - 2025-06-22 09:19:51 --> Helper loaded: url_helper
INFO - 2025-06-22 09:19:51 --> Helper loaded: file_helper
INFO - 2025-06-22 09:19:51 --> Database Driver Class Initialized
INFO - 2025-06-22 09:19:51 --> Config Class Initialized
INFO - 2025-06-22 09:19:51 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:19:51 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:19:51 --> Utf8 Class Initialized
INFO - 2025-06-22 09:19:51 --> URI Class Initialized
INFO - 2025-06-22 09:19:51 --> Router Class Initialized
INFO - 2025-06-22 09:19:51 --> Output Class Initialized
INFO - 2025-06-22 09:19:51 --> Security Class Initialized
INFO - 2025-06-22 09:19:51 --> Email Class Initialized
DEBUG - 2025-06-22 09:19:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:19:51 --> Input Class Initialized
DEBUG - 2025-06-22 09:19:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:19:51 --> Language Class Initialized
INFO - 2025-06-22 09:19:51 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:19:51 --> Loader Class Initialized
INFO - 2025-06-22 09:19:51 --> Controller Class Initialized
INFO - 2025-06-22 09:19:51 --> Helper loaded: url_helper
INFO - 2025-06-22 09:19:51 --> Helper loaded: form_helper
INFO - 2025-06-22 09:19:51 --> Helper loaded: file_helper
INFO - 2025-06-22 09:19:51 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:19:51 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:19:51 --> Database Driver Class Initialized
INFO - 2025-06-22 09:19:51 --> Database Driver Class Initialized
INFO - 2025-06-22 09:19:51 --> Model "Crud" initialized
INFO - 2025-06-22 09:19:51 --> Email Class Initialized
DEBUG - 2025-06-22 09:19:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:19:51 --> Final output sent to browser
DEBUG - 2025-06-22 09:19:51 --> Total execution time: 0.0250
INFO - 2025-06-22 09:19:51 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:19:51 --> Controller Class Initialized
INFO - 2025-06-22 09:19:51 --> Helper loaded: form_helper
INFO - 2025-06-22 09:19:51 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:19:51 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:19:51 --> Database Driver Class Initialized
INFO - 2025-06-22 09:19:51 --> Model "Crud" initialized
INFO - 2025-06-22 09:19:51 --> Final output sent to browser
DEBUG - 2025-06-22 09:19:51 --> Total execution time: 0.0357
INFO - 2025-06-22 09:19:52 --> Config Class Initialized
INFO - 2025-06-22 09:19:52 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:19:52 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:19:52 --> Utf8 Class Initialized
INFO - 2025-06-22 09:19:52 --> URI Class Initialized
INFO - 2025-06-22 09:19:52 --> Router Class Initialized
INFO - 2025-06-22 09:19:52 --> Output Class Initialized
INFO - 2025-06-22 09:19:52 --> Security Class Initialized
DEBUG - 2025-06-22 09:19:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:19:52 --> Input Class Initialized
INFO - 2025-06-22 09:19:52 --> Language Class Initialized
INFO - 2025-06-22 09:19:52 --> Loader Class Initialized
INFO - 2025-06-22 09:19:52 --> Helper loaded: url_helper
INFO - 2025-06-22 09:19:52 --> Helper loaded: file_helper
INFO - 2025-06-22 09:19:52 --> Database Driver Class Initialized
INFO - 2025-06-22 09:19:52 --> Email Class Initialized
DEBUG - 2025-06-22 09:19:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:19:52 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:19:52 --> Controller Class Initialized
INFO - 2025-06-22 09:19:52 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:19:52 --> Helper loaded: form_helper
INFO - 2025-06-22 09:19:52 --> Form Validation Class Initialized
INFO - 2025-06-22 09:19:52 --> Database Driver Class Initialized
INFO - 2025-06-22 09:19:52 --> Model "Crud" initialized
INFO - 2025-06-22 09:19:52 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:19:52 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:19:52 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:19:52 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:19:52 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:19:52 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-22 09:19:52 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/master-form-test.php
INFO - 2025-06-22 09:19:52 --> Final output sent to browser
DEBUG - 2025-06-22 09:19:52 --> Total execution time: 0.0121
INFO - 2025-06-22 09:19:52 --> Config Class Initialized
INFO - 2025-06-22 09:19:52 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:19:52 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:19:52 --> Utf8 Class Initialized
INFO - 2025-06-22 09:19:52 --> URI Class Initialized
INFO - 2025-06-22 09:19:52 --> Router Class Initialized
INFO - 2025-06-22 09:19:52 --> Output Class Initialized
INFO - 2025-06-22 09:19:52 --> Security Class Initialized
DEBUG - 2025-06-22 09:19:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:19:52 --> Input Class Initialized
INFO - 2025-06-22 09:19:52 --> Language Class Initialized
INFO - 2025-06-22 09:19:52 --> Loader Class Initialized
INFO - 2025-06-22 09:19:52 --> Helper loaded: url_helper
INFO - 2025-06-22 09:19:52 --> Helper loaded: file_helper
INFO - 2025-06-22 09:19:52 --> Database Driver Class Initialized
INFO - 2025-06-22 09:19:52 --> Email Class Initialized
DEBUG - 2025-06-22 09:19:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:19:52 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:19:52 --> Controller Class Initialized
INFO - 2025-06-22 09:19:52 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:19:52 --> Helper loaded: form_helper
INFO - 2025-06-22 09:19:52 --> Form Validation Class Initialized
INFO - 2025-06-22 09:19:52 --> Database Driver Class Initialized
INFO - 2025-06-22 09:19:52 --> Model "Crud" initialized
INFO - 2025-06-22 09:19:52 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:19:52 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:19:52 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:19:52 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:19:52 --> Session class already loaded. Second attempt ignored.
ERROR - 2025-06-22 09:19:52 --> Query error: Illegal mix of collations (utf8mb4_0900_ai_ci,IMPLICIT) and (utf8mb3_general_ci,COERCIBLE) for operation '=' - Invalid query: SELECT a.* FROM setting_users a JOIN users b ON a.users_id = b.username WHERE a.menus_id='‚ZjXì' and b.username='admin'
INFO - 2025-06-22 09:19:52 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-22 09:19:53 --> Config Class Initialized
INFO - 2025-06-22 09:19:53 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:19:53 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:19:53 --> Utf8 Class Initialized
INFO - 2025-06-22 09:19:53 --> URI Class Initialized
INFO - 2025-06-22 09:19:53 --> Router Class Initialized
INFO - 2025-06-22 09:19:53 --> Output Class Initialized
INFO - 2025-06-22 09:19:53 --> Security Class Initialized
DEBUG - 2025-06-22 09:19:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:19:53 --> Input Class Initialized
INFO - 2025-06-22 09:19:53 --> Language Class Initialized
INFO - 2025-06-22 09:19:53 --> Loader Class Initialized
INFO - 2025-06-22 09:19:53 --> Helper loaded: url_helper
INFO - 2025-06-22 09:19:53 --> Helper loaded: file_helper
INFO - 2025-06-22 09:19:53 --> Database Driver Class Initialized
INFO - 2025-06-22 09:19:53 --> Email Class Initialized
DEBUG - 2025-06-22 09:19:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:19:53 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:19:53 --> Controller Class Initialized
INFO - 2025-06-22 09:19:53 --> Helper loaded: form_helper
INFO - 2025-06-22 09:19:53 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:19:53 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:19:53 --> Database Driver Class Initialized
INFO - 2025-06-22 09:19:53 --> Model "Crud" initialized
INFO - 2025-06-22 09:19:53 --> Final output sent to browser
DEBUG - 2025-06-22 09:19:53 --> Total execution time: 0.0178
INFO - 2025-06-22 09:19:53 --> Config Class Initialized
INFO - 2025-06-22 09:19:53 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:19:53 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:19:53 --> Utf8 Class Initialized
INFO - 2025-06-22 09:19:53 --> URI Class Initialized
INFO - 2025-06-22 09:19:53 --> Router Class Initialized
INFO - 2025-06-22 09:19:53 --> Output Class Initialized
INFO - 2025-06-22 09:19:53 --> Security Class Initialized
DEBUG - 2025-06-22 09:19:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:19:53 --> Input Class Initialized
INFO - 2025-06-22 09:19:53 --> Language Class Initialized
INFO - 2025-06-22 09:19:53 --> Loader Class Initialized
INFO - 2025-06-22 09:19:53 --> Helper loaded: url_helper
INFO - 2025-06-22 09:19:53 --> Helper loaded: file_helper
INFO - 2025-06-22 09:19:53 --> Database Driver Class Initialized
INFO - 2025-06-22 09:19:53 --> Email Class Initialized
DEBUG - 2025-06-22 09:19:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:19:53 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:19:53 --> Controller Class Initialized
INFO - 2025-06-22 09:19:53 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:19:53 --> Helper loaded: form_helper
INFO - 2025-06-22 09:19:53 --> Form Validation Class Initialized
INFO - 2025-06-22 09:19:53 --> Database Driver Class Initialized
INFO - 2025-06-22 09:19:53 --> Model "Crud" initialized
INFO - 2025-06-22 09:19:53 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:19:53 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:19:53 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:19:53 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:19:53 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:19:53 --> Config Class Initialized
INFO - 2025-06-22 09:19:53 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:19:53 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:19:53 --> Utf8 Class Initialized
INFO - 2025-06-22 09:19:53 --> URI Class Initialized
INFO - 2025-06-22 09:19:53 --> Router Class Initialized
INFO - 2025-06-22 09:19:53 --> Output Class Initialized
INFO - 2025-06-22 09:19:53 --> Security Class Initialized
DEBUG - 2025-06-22 09:19:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:19:53 --> Input Class Initialized
INFO - 2025-06-22 09:19:53 --> Language Class Initialized
INFO - 2025-06-22 09:19:53 --> Loader Class Initialized
INFO - 2025-06-22 09:19:53 --> Helper loaded: url_helper
INFO - 2025-06-22 09:19:53 --> Helper loaded: file_helper
INFO - 2025-06-22 09:19:53 --> Database Driver Class Initialized
INFO - 2025-06-22 09:19:53 --> Final output sent to browser
DEBUG - 2025-06-22 09:19:53 --> Total execution time: 0.0225
INFO - 2025-06-22 09:19:53 --> Email Class Initialized
DEBUG - 2025-06-22 09:19:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:19:53 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:19:53 --> Controller Class Initialized
INFO - 2025-06-22 09:19:53 --> Helper loaded: form_helper
INFO - 2025-06-22 09:19:53 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:19:53 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:19:53 --> Database Driver Class Initialized
INFO - 2025-06-22 09:19:53 --> Model "Crud" initialized
INFO - 2025-06-22 09:19:53 --> Final output sent to browser
DEBUG - 2025-06-22 09:19:53 --> Total execution time: 0.0073
INFO - 2025-06-22 09:19:53 --> Config Class Initialized
INFO - 2025-06-22 09:19:53 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:19:53 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:19:53 --> Utf8 Class Initialized
INFO - 2025-06-22 09:19:53 --> URI Class Initialized
INFO - 2025-06-22 09:19:53 --> Router Class Initialized
INFO - 2025-06-22 09:19:53 --> Output Class Initialized
INFO - 2025-06-22 09:19:53 --> Security Class Initialized
DEBUG - 2025-06-22 09:19:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:19:53 --> Input Class Initialized
INFO - 2025-06-22 09:19:53 --> Language Class Initialized
INFO - 2025-06-22 09:19:53 --> Loader Class Initialized
INFO - 2025-06-22 09:19:53 --> Helper loaded: url_helper
INFO - 2025-06-22 09:19:53 --> Helper loaded: file_helper
INFO - 2025-06-22 09:19:53 --> Database Driver Class Initialized
INFO - 2025-06-22 09:19:53 --> Email Class Initialized
DEBUG - 2025-06-22 09:19:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:19:53 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:19:53 --> Controller Class Initialized
INFO - 2025-06-22 09:19:53 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:19:53 --> Helper loaded: form_helper
INFO - 2025-06-22 09:19:53 --> Form Validation Class Initialized
INFO - 2025-06-22 09:19:53 --> Database Driver Class Initialized
INFO - 2025-06-22 09:19:53 --> Model "Crud" initialized
INFO - 2025-06-22 09:19:53 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:19:53 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:19:53 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:19:53 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:19:53 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:19:53 --> Final output sent to browser
DEBUG - 2025-06-22 09:19:53 --> Total execution time: 0.0129
INFO - 2025-06-22 09:19:56 --> Config Class Initialized
INFO - 2025-06-22 09:19:56 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:19:56 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:19:56 --> Utf8 Class Initialized
INFO - 2025-06-22 09:19:56 --> URI Class Initialized
INFO - 2025-06-22 09:19:56 --> Router Class Initialized
INFO - 2025-06-22 09:19:56 --> Output Class Initialized
INFO - 2025-06-22 09:19:56 --> Security Class Initialized
DEBUG - 2025-06-22 09:19:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:19:56 --> Input Class Initialized
INFO - 2025-06-22 09:19:56 --> Language Class Initialized
INFO - 2025-06-22 09:19:56 --> Loader Class Initialized
INFO - 2025-06-22 09:19:56 --> Helper loaded: url_helper
INFO - 2025-06-22 09:19:56 --> Helper loaded: file_helper
INFO - 2025-06-22 09:19:56 --> Database Driver Class Initialized
INFO - 2025-06-22 09:19:56 --> Email Class Initialized
DEBUG - 2025-06-22 09:19:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:19:56 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:19:56 --> Controller Class Initialized
INFO - 2025-06-22 09:19:56 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:19:56 --> Helper loaded: form_helper
INFO - 2025-06-22 09:19:56 --> Form Validation Class Initialized
INFO - 2025-06-22 09:19:56 --> Database Driver Class Initialized
INFO - 2025-06-22 09:19:56 --> Model "Crud" initialized
INFO - 2025-06-22 09:19:56 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:19:56 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:19:56 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:19:56 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:19:56 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:19:56 --> Final output sent to browser
DEBUG - 2025-06-22 09:19:56 --> Total execution time: 0.0100
INFO - 2025-06-22 09:19:57 --> Config Class Initialized
INFO - 2025-06-22 09:19:57 --> Config Class Initialized
INFO - 2025-06-22 09:19:57 --> Hooks Class Initialized
INFO - 2025-06-22 09:19:57 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:19:57 --> UTF-8 Support Enabled
DEBUG - 2025-06-22 09:19:57 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:19:57 --> Utf8 Class Initialized
INFO - 2025-06-22 09:19:57 --> Utf8 Class Initialized
INFO - 2025-06-22 09:19:57 --> URI Class Initialized
INFO - 2025-06-22 09:19:57 --> URI Class Initialized
INFO - 2025-06-22 09:19:57 --> Router Class Initialized
INFO - 2025-06-22 09:19:57 --> Router Class Initialized
INFO - 2025-06-22 09:19:57 --> Output Class Initialized
INFO - 2025-06-22 09:19:57 --> Output Class Initialized
INFO - 2025-06-22 09:19:57 --> Security Class Initialized
INFO - 2025-06-22 09:19:57 --> Security Class Initialized
DEBUG - 2025-06-22 09:19:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-22 09:19:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:19:57 --> Input Class Initialized
INFO - 2025-06-22 09:19:57 --> Input Class Initialized
INFO - 2025-06-22 09:19:57 --> Language Class Initialized
INFO - 2025-06-22 09:19:57 --> Language Class Initialized
INFO - 2025-06-22 09:19:57 --> Loader Class Initialized
INFO - 2025-06-22 09:19:57 --> Loader Class Initialized
INFO - 2025-06-22 09:19:57 --> Helper loaded: url_helper
INFO - 2025-06-22 09:19:57 --> Helper loaded: file_helper
INFO - 2025-06-22 09:19:57 --> Helper loaded: url_helper
INFO - 2025-06-22 09:19:57 --> Helper loaded: file_helper
INFO - 2025-06-22 09:19:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:19:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:19:57 --> Email Class Initialized
INFO - 2025-06-22 09:19:57 --> Email Class Initialized
DEBUG - 2025-06-22 09:19:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:19:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:19:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:19:57 --> Controller Class Initialized
INFO - 2025-06-22 09:19:57 --> Helper loaded: form_helper
INFO - 2025-06-22 09:19:57 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:19:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:19:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:19:57 --> Model "Crud" initialized
INFO - 2025-06-22 09:19:57 --> Final output sent to browser
DEBUG - 2025-06-22 09:19:57 --> Total execution time: 0.0144
INFO - 2025-06-22 09:19:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:19:57 --> Controller Class Initialized
INFO - 2025-06-22 09:19:57 --> Helper loaded: form_helper
INFO - 2025-06-22 09:19:57 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:19:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:19:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:19:57 --> Model "Crud" initialized
INFO - 2025-06-22 09:19:57 --> Final output sent to browser
DEBUG - 2025-06-22 09:19:57 --> Total execution time: 0.0283
INFO - 2025-06-22 09:20:07 --> Config Class Initialized
INFO - 2025-06-22 09:20:07 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:20:07 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:20:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:20:07 --> URI Class Initialized
INFO - 2025-06-22 09:20:07 --> Config Class Initialized
INFO - 2025-06-22 09:20:07 --> Router Class Initialized
INFO - 2025-06-22 09:20:07 --> Hooks Class Initialized
INFO - 2025-06-22 09:20:07 --> Output Class Initialized
INFO - 2025-06-22 09:20:07 --> Security Class Initialized
DEBUG - 2025-06-22 09:20:07 --> UTF-8 Support Enabled
DEBUG - 2025-06-22 09:20:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:20:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:20:07 --> Input Class Initialized
INFO - 2025-06-22 09:20:07 --> URI Class Initialized
INFO - 2025-06-22 09:20:07 --> Language Class Initialized
INFO - 2025-06-22 09:20:07 --> Router Class Initialized
INFO - 2025-06-22 09:20:07 --> Loader Class Initialized
INFO - 2025-06-22 09:20:07 --> Output Class Initialized
INFO - 2025-06-22 09:20:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:20:07 --> Security Class Initialized
INFO - 2025-06-22 09:20:07 --> Helper loaded: file_helper
DEBUG - 2025-06-22 09:20:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:20:07 --> Input Class Initialized
INFO - 2025-06-22 09:20:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:20:07 --> Language Class Initialized
INFO - 2025-06-22 09:20:07 --> Loader Class Initialized
INFO - 2025-06-22 09:20:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:20:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:20:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:20:07 --> Email Class Initialized
DEBUG - 2025-06-22 09:20:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:20:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:20:07 --> Controller Class Initialized
INFO - 2025-06-22 09:20:07 --> Email Class Initialized
INFO - 2025-06-22 09:20:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:20:07 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:20:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:20:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:20:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:20:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:20:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:20:07 --> Total execution time: 0.0172
INFO - 2025-06-22 09:20:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:20:07 --> Controller Class Initialized
INFO - 2025-06-22 09:20:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:20:07 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:20:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:20:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:20:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:20:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:20:07 --> Total execution time: 0.0366
INFO - 2025-06-22 09:21:20 --> Config Class Initialized
INFO - 2025-06-22 09:21:20 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:21:20 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:21:20 --> Utf8 Class Initialized
INFO - 2025-06-22 09:21:20 --> URI Class Initialized
INFO - 2025-06-22 09:21:20 --> Router Class Initialized
INFO - 2025-06-22 09:21:20 --> Output Class Initialized
INFO - 2025-06-22 09:21:20 --> Security Class Initialized
DEBUG - 2025-06-22 09:21:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:21:20 --> Input Class Initialized
INFO - 2025-06-22 09:21:20 --> Language Class Initialized
INFO - 2025-06-22 09:21:20 --> Loader Class Initialized
INFO - 2025-06-22 09:21:20 --> Helper loaded: url_helper
INFO - 2025-06-22 09:21:20 --> Helper loaded: file_helper
INFO - 2025-06-22 09:21:20 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:20 --> Email Class Initialized
INFO - 2025-06-22 09:21:20 --> Config Class Initialized
INFO - 2025-06-22 09:21:20 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:21:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:21:20 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:21:20 --> Utf8 Class Initialized
INFO - 2025-06-22 09:21:20 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:21:20 --> URI Class Initialized
INFO - 2025-06-22 09:21:20 --> Controller Class Initialized
INFO - 2025-06-22 09:21:20 --> Router Class Initialized
INFO - 2025-06-22 09:21:20 --> Helper loaded: form_helper
INFO - 2025-06-22 09:21:20 --> Output Class Initialized
INFO - 2025-06-22 09:21:20 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:21:20 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:20 --> Security Class Initialized
INFO - 2025-06-22 09:21:20 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:21:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:21:20 --> Input Class Initialized
INFO - 2025-06-22 09:21:20 --> Language Class Initialized
INFO - 2025-06-22 09:21:20 --> Loader Class Initialized
INFO - 2025-06-22 09:21:20 --> Helper loaded: url_helper
INFO - 2025-06-22 09:21:20 --> Helper loaded: file_helper
INFO - 2025-06-22 09:21:20 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:20 --> Model "Crud" initialized
INFO - 2025-06-22 09:21:20 --> Email Class Initialized
DEBUG - 2025-06-22 09:21:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:21:20 --> Final output sent to browser
DEBUG - 2025-06-22 09:21:20 --> Total execution time: 0.0300
INFO - 2025-06-22 09:21:20 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:21:20 --> Controller Class Initialized
INFO - 2025-06-22 09:21:20 --> Helper loaded: form_helper
INFO - 2025-06-22 09:21:20 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:21:20 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:20 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:20 --> Model "Crud" initialized
INFO - 2025-06-22 09:21:20 --> Final output sent to browser
DEBUG - 2025-06-22 09:21:20 --> Total execution time: 0.0538
INFO - 2025-06-22 09:21:23 --> Config Class Initialized
INFO - 2025-06-22 09:21:23 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:21:23 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:21:23 --> Utf8 Class Initialized
INFO - 2025-06-22 09:21:23 --> URI Class Initialized
INFO - 2025-06-22 09:21:23 --> Router Class Initialized
INFO - 2025-06-22 09:21:23 --> Output Class Initialized
INFO - 2025-06-22 09:21:23 --> Security Class Initialized
DEBUG - 2025-06-22 09:21:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:21:23 --> Input Class Initialized
INFO - 2025-06-22 09:21:23 --> Language Class Initialized
INFO - 2025-06-22 09:21:23 --> Loader Class Initialized
INFO - 2025-06-22 09:21:23 --> Helper loaded: url_helper
INFO - 2025-06-22 09:21:23 --> Helper loaded: file_helper
INFO - 2025-06-22 09:21:23 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:23 --> Email Class Initialized
DEBUG - 2025-06-22 09:21:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:21:23 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:21:23 --> Controller Class Initialized
INFO - 2025-06-22 09:21:23 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:21:23 --> Helper loaded: form_helper
INFO - 2025-06-22 09:21:23 --> Form Validation Class Initialized
INFO - 2025-06-22 09:21:23 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:23 --> Model "Crud" initialized
INFO - 2025-06-22 09:21:23 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:21:23 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:23 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:21:23 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:21:23 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:23 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-22 09:21:23 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/master-form-test.php
INFO - 2025-06-22 09:21:23 --> Final output sent to browser
DEBUG - 2025-06-22 09:21:23 --> Total execution time: 0.0134
INFO - 2025-06-22 09:21:23 --> Config Class Initialized
INFO - 2025-06-22 09:21:23 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:21:23 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:21:23 --> Utf8 Class Initialized
INFO - 2025-06-22 09:21:23 --> URI Class Initialized
INFO - 2025-06-22 09:21:23 --> Router Class Initialized
INFO - 2025-06-22 09:21:23 --> Output Class Initialized
INFO - 2025-06-22 09:21:23 --> Security Class Initialized
DEBUG - 2025-06-22 09:21:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:21:23 --> Input Class Initialized
INFO - 2025-06-22 09:21:23 --> Language Class Initialized
INFO - 2025-06-22 09:21:23 --> Loader Class Initialized
INFO - 2025-06-22 09:21:23 --> Helper loaded: url_helper
INFO - 2025-06-22 09:21:23 --> Helper loaded: file_helper
INFO - 2025-06-22 09:21:23 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:23 --> Email Class Initialized
DEBUG - 2025-06-22 09:21:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:21:23 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:21:23 --> Controller Class Initialized
INFO - 2025-06-22 09:21:23 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:21:23 --> Helper loaded: form_helper
INFO - 2025-06-22 09:21:23 --> Form Validation Class Initialized
INFO - 2025-06-22 09:21:23 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:23 --> Model "Crud" initialized
INFO - 2025-06-22 09:21:23 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:21:23 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:23 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:21:23 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:21:23 --> Session class already loaded. Second attempt ignored.
ERROR - 2025-06-22 09:21:23 --> Query error: Illegal mix of collations (utf8mb4_0900_ai_ci,IMPLICIT) and (utf8mb3_general_ci,COERCIBLE) for operation '=' - Invalid query: SELECT a.* FROM setting_users a JOIN users b ON a.users_id = b.username WHERE a.menus_id='‚ZjXì' and b.username='admin'
INFO - 2025-06-22 09:21:23 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-22 09:21:24 --> Config Class Initialized
INFO - 2025-06-22 09:21:24 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:21:24 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:21:24 --> Utf8 Class Initialized
INFO - 2025-06-22 09:21:24 --> URI Class Initialized
INFO - 2025-06-22 09:21:24 --> Router Class Initialized
INFO - 2025-06-22 09:21:24 --> Output Class Initialized
INFO - 2025-06-22 09:21:24 --> Security Class Initialized
DEBUG - 2025-06-22 09:21:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:21:24 --> Input Class Initialized
INFO - 2025-06-22 09:21:24 --> Language Class Initialized
INFO - 2025-06-22 09:21:24 --> Loader Class Initialized
INFO - 2025-06-22 09:21:24 --> Helper loaded: url_helper
INFO - 2025-06-22 09:21:24 --> Helper loaded: file_helper
INFO - 2025-06-22 09:21:24 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:24 --> Email Class Initialized
DEBUG - 2025-06-22 09:21:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:21:24 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:21:24 --> Controller Class Initialized
INFO - 2025-06-22 09:21:24 --> Helper loaded: form_helper
INFO - 2025-06-22 09:21:24 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:21:24 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:24 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:24 --> Model "Crud" initialized
INFO - 2025-06-22 09:21:24 --> Final output sent to browser
DEBUG - 2025-06-22 09:21:24 --> Total execution time: 0.0089
INFO - 2025-06-22 09:21:24 --> Config Class Initialized
INFO - 2025-06-22 09:21:24 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:21:24 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:21:24 --> Utf8 Class Initialized
INFO - 2025-06-22 09:21:24 --> URI Class Initialized
INFO - 2025-06-22 09:21:24 --> Router Class Initialized
INFO - 2025-06-22 09:21:24 --> Output Class Initialized
INFO - 2025-06-22 09:21:24 --> Security Class Initialized
DEBUG - 2025-06-22 09:21:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:21:24 --> Input Class Initialized
INFO - 2025-06-22 09:21:24 --> Language Class Initialized
INFO - 2025-06-22 09:21:24 --> Loader Class Initialized
INFO - 2025-06-22 09:21:24 --> Helper loaded: url_helper
INFO - 2025-06-22 09:21:24 --> Helper loaded: file_helper
INFO - 2025-06-22 09:21:24 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:24 --> Email Class Initialized
DEBUG - 2025-06-22 09:21:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:21:24 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:21:24 --> Controller Class Initialized
INFO - 2025-06-22 09:21:24 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:21:24 --> Helper loaded: form_helper
INFO - 2025-06-22 09:21:24 --> Form Validation Class Initialized
INFO - 2025-06-22 09:21:24 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:24 --> Model "Crud" initialized
INFO - 2025-06-22 09:21:24 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:21:24 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:24 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:21:24 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:21:24 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:24 --> Final output sent to browser
DEBUG - 2025-06-22 09:21:24 --> Total execution time: 0.0072
INFO - 2025-06-22 09:21:24 --> Config Class Initialized
INFO - 2025-06-22 09:21:24 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:21:24 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:21:24 --> Utf8 Class Initialized
INFO - 2025-06-22 09:21:24 --> URI Class Initialized
INFO - 2025-06-22 09:21:24 --> Router Class Initialized
INFO - 2025-06-22 09:21:24 --> Output Class Initialized
INFO - 2025-06-22 09:21:24 --> Security Class Initialized
DEBUG - 2025-06-22 09:21:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:21:24 --> Input Class Initialized
INFO - 2025-06-22 09:21:24 --> Language Class Initialized
INFO - 2025-06-22 09:21:24 --> Loader Class Initialized
INFO - 2025-06-22 09:21:24 --> Helper loaded: url_helper
INFO - 2025-06-22 09:21:24 --> Helper loaded: file_helper
INFO - 2025-06-22 09:21:24 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:24 --> Email Class Initialized
DEBUG - 2025-06-22 09:21:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:21:24 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:21:24 --> Controller Class Initialized
INFO - 2025-06-22 09:21:24 --> Helper loaded: form_helper
INFO - 2025-06-22 09:21:24 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:21:24 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:24 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:24 --> Model "Crud" initialized
INFO - 2025-06-22 09:21:24 --> Final output sent to browser
DEBUG - 2025-06-22 09:21:24 --> Total execution time: 0.0421
INFO - 2025-06-22 09:21:24 --> Config Class Initialized
INFO - 2025-06-22 09:21:24 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:21:24 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:21:24 --> Utf8 Class Initialized
INFO - 2025-06-22 09:21:24 --> URI Class Initialized
INFO - 2025-06-22 09:21:24 --> Router Class Initialized
INFO - 2025-06-22 09:21:24 --> Output Class Initialized
INFO - 2025-06-22 09:21:24 --> Security Class Initialized
DEBUG - 2025-06-22 09:21:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:21:24 --> Input Class Initialized
INFO - 2025-06-22 09:21:24 --> Language Class Initialized
INFO - 2025-06-22 09:21:24 --> Loader Class Initialized
INFO - 2025-06-22 09:21:24 --> Helper loaded: url_helper
INFO - 2025-06-22 09:21:24 --> Helper loaded: file_helper
INFO - 2025-06-22 09:21:24 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:24 --> Email Class Initialized
DEBUG - 2025-06-22 09:21:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:21:24 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:21:24 --> Controller Class Initialized
INFO - 2025-06-22 09:21:24 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:21:24 --> Helper loaded: form_helper
INFO - 2025-06-22 09:21:24 --> Form Validation Class Initialized
INFO - 2025-06-22 09:21:24 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:24 --> Model "Crud" initialized
INFO - 2025-06-22 09:21:24 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:21:24 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:24 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:21:24 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:21:24 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:24 --> Final output sent to browser
DEBUG - 2025-06-22 09:21:24 --> Total execution time: 0.0232
INFO - 2025-06-22 09:21:27 --> Config Class Initialized
INFO - 2025-06-22 09:21:27 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:21:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:21:27 --> Config Class Initialized
INFO - 2025-06-22 09:21:27 --> Hooks Class Initialized
INFO - 2025-06-22 09:21:27 --> Utf8 Class Initialized
DEBUG - 2025-06-22 09:21:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:21:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:21:27 --> URI Class Initialized
INFO - 2025-06-22 09:21:27 --> URI Class Initialized
INFO - 2025-06-22 09:21:27 --> Router Class Initialized
INFO - 2025-06-22 09:21:27 --> Router Class Initialized
INFO - 2025-06-22 09:21:27 --> Output Class Initialized
INFO - 2025-06-22 09:21:27 --> Output Class Initialized
INFO - 2025-06-22 09:21:27 --> Security Class Initialized
INFO - 2025-06-22 09:21:27 --> Security Class Initialized
DEBUG - 2025-06-22 09:21:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-22 09:21:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:21:27 --> Input Class Initialized
INFO - 2025-06-22 09:21:27 --> Input Class Initialized
INFO - 2025-06-22 09:21:27 --> Language Class Initialized
INFO - 2025-06-22 09:21:27 --> Language Class Initialized
INFO - 2025-06-22 09:21:27 --> Loader Class Initialized
INFO - 2025-06-22 09:21:27 --> Loader Class Initialized
INFO - 2025-06-22 09:21:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:21:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:21:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:21:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:21:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:27 --> Email Class Initialized
INFO - 2025-06-22 09:21:27 --> Email Class Initialized
DEBUG - 2025-06-22 09:21:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:21:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:21:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:21:27 --> Controller Class Initialized
INFO - 2025-06-22 09:21:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:21:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:21:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:21:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:21:27 --> Total execution time: 0.0163
INFO - 2025-06-22 09:21:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:21:27 --> Controller Class Initialized
INFO - 2025-06-22 09:21:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:21:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:21:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:21:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:21:27 --> Total execution time: 0.0303
INFO - 2025-06-22 09:21:27 --> Config Class Initialized
INFO - 2025-06-22 09:21:27 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:21:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:21:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:21:27 --> URI Class Initialized
INFO - 2025-06-22 09:21:27 --> Router Class Initialized
INFO - 2025-06-22 09:21:27 --> Output Class Initialized
INFO - 2025-06-22 09:21:27 --> Security Class Initialized
DEBUG - 2025-06-22 09:21:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:21:27 --> Input Class Initialized
INFO - 2025-06-22 09:21:27 --> Language Class Initialized
INFO - 2025-06-22 09:21:27 --> Loader Class Initialized
INFO - 2025-06-22 09:21:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:21:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:21:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:27 --> Email Class Initialized
DEBUG - 2025-06-22 09:21:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:21:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:21:27 --> Controller Class Initialized
INFO - 2025-06-22 09:21:27 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:21:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:21:27 --> Form Validation Class Initialized
INFO - 2025-06-22 09:21:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:21:27 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:21:27 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:27 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:21:27 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:21:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:21:27 --> Total execution time: 0.0097
INFO - 2025-06-22 09:21:37 --> Config Class Initialized
INFO - 2025-06-22 09:21:37 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:21:37 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:21:37 --> Utf8 Class Initialized
INFO - 2025-06-22 09:21:37 --> URI Class Initialized
INFO - 2025-06-22 09:21:37 --> Router Class Initialized
INFO - 2025-06-22 09:21:37 --> Output Class Initialized
INFO - 2025-06-22 09:21:37 --> Security Class Initialized
DEBUG - 2025-06-22 09:21:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:21:37 --> Input Class Initialized
INFO - 2025-06-22 09:21:37 --> Language Class Initialized
INFO - 2025-06-22 09:21:37 --> Loader Class Initialized
INFO - 2025-06-22 09:21:37 --> Helper loaded: url_helper
INFO - 2025-06-22 09:21:37 --> Helper loaded: file_helper
INFO - 2025-06-22 09:21:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:37 --> Config Class Initialized
INFO - 2025-06-22 09:21:37 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:21:37 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:21:37 --> Utf8 Class Initialized
INFO - 2025-06-22 09:21:37 --> URI Class Initialized
INFO - 2025-06-22 09:21:37 --> Router Class Initialized
INFO - 2025-06-22 09:21:37 --> Output Class Initialized
INFO - 2025-06-22 09:21:37 --> Security Class Initialized
DEBUG - 2025-06-22 09:21:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:21:37 --> Input Class Initialized
INFO - 2025-06-22 09:21:37 --> Language Class Initialized
INFO - 2025-06-22 09:21:37 --> Email Class Initialized
INFO - 2025-06-22 09:21:37 --> Loader Class Initialized
DEBUG - 2025-06-22 09:21:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:21:37 --> Helper loaded: url_helper
INFO - 2025-06-22 09:21:37 --> Helper loaded: file_helper
INFO - 2025-06-22 09:21:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:21:37 --> Controller Class Initialized
INFO - 2025-06-22 09:21:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:37 --> Helper loaded: form_helper
INFO - 2025-06-22 09:21:37 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:21:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:37 --> Email Class Initialized
INFO - 2025-06-22 09:21:37 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:21:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:21:37 --> Final output sent to browser
DEBUG - 2025-06-22 09:21:37 --> Total execution time: 0.0162
INFO - 2025-06-22 09:21:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:21:37 --> Controller Class Initialized
INFO - 2025-06-22 09:21:37 --> Helper loaded: form_helper
INFO - 2025-06-22 09:21:37 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:21:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:37 --> Model "Crud" initialized
INFO - 2025-06-22 09:21:37 --> Final output sent to browser
DEBUG - 2025-06-22 09:21:37 --> Total execution time: 0.0273
INFO - 2025-06-22 09:21:47 --> Config Class Initialized
INFO - 2025-06-22 09:21:47 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:21:47 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:21:47 --> Utf8 Class Initialized
INFO - 2025-06-22 09:21:47 --> URI Class Initialized
INFO - 2025-06-22 09:21:47 --> Router Class Initialized
INFO - 2025-06-22 09:21:47 --> Output Class Initialized
INFO - 2025-06-22 09:21:47 --> Security Class Initialized
DEBUG - 2025-06-22 09:21:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:21:47 --> Input Class Initialized
INFO - 2025-06-22 09:21:47 --> Language Class Initialized
INFO - 2025-06-22 09:21:47 --> Loader Class Initialized
INFO - 2025-06-22 09:21:47 --> Helper loaded: url_helper
INFO - 2025-06-22 09:21:47 --> Helper loaded: file_helper
INFO - 2025-06-22 09:21:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:47 --> Email Class Initialized
DEBUG - 2025-06-22 09:21:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:21:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:21:47 --> Controller Class Initialized
INFO - 2025-06-22 09:21:47 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:21:47 --> Helper loaded: form_helper
INFO - 2025-06-22 09:21:47 --> Form Validation Class Initialized
INFO - 2025-06-22 09:21:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:47 --> Model "Crud" initialized
INFO - 2025-06-22 09:21:47 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:21:47 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:47 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:21:47 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:21:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:47 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-22 09:21:47 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/master-form-test.php
INFO - 2025-06-22 09:21:47 --> Final output sent to browser
DEBUG - 2025-06-22 09:21:47 --> Total execution time: 0.0092
INFO - 2025-06-22 09:21:47 --> Config Class Initialized
INFO - 2025-06-22 09:21:47 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:21:47 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:21:47 --> Utf8 Class Initialized
INFO - 2025-06-22 09:21:47 --> URI Class Initialized
INFO - 2025-06-22 09:21:47 --> Router Class Initialized
INFO - 2025-06-22 09:21:47 --> Output Class Initialized
INFO - 2025-06-22 09:21:47 --> Security Class Initialized
DEBUG - 2025-06-22 09:21:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:21:47 --> Input Class Initialized
INFO - 2025-06-22 09:21:47 --> Language Class Initialized
INFO - 2025-06-22 09:21:47 --> Loader Class Initialized
INFO - 2025-06-22 09:21:47 --> Helper loaded: url_helper
INFO - 2025-06-22 09:21:47 --> Helper loaded: file_helper
INFO - 2025-06-22 09:21:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:47 --> Email Class Initialized
DEBUG - 2025-06-22 09:21:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:21:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:21:47 --> Controller Class Initialized
INFO - 2025-06-22 09:21:47 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:21:47 --> Helper loaded: form_helper
INFO - 2025-06-22 09:21:47 --> Form Validation Class Initialized
INFO - 2025-06-22 09:21:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:47 --> Model "Crud" initialized
INFO - 2025-06-22 09:21:47 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:21:47 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:47 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:21:47 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:21:47 --> Session class already loaded. Second attempt ignored.
ERROR - 2025-06-22 09:21:47 --> Query error: Illegal mix of collations (utf8mb4_0900_ai_ci,IMPLICIT) and (utf8mb3_general_ci,COERCIBLE) for operation '=' - Invalid query: SELECT a.* FROM setting_users a JOIN users b ON a.users_id = b.username WHERE a.menus_id='‚ZjXì' and b.username='admin'
INFO - 2025-06-22 09:21:47 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-22 09:21:47 --> Config Class Initialized
INFO - 2025-06-22 09:21:47 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:21:47 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:21:47 --> Utf8 Class Initialized
INFO - 2025-06-22 09:21:47 --> Config Class Initialized
INFO - 2025-06-22 09:21:47 --> URI Class Initialized
INFO - 2025-06-22 09:21:47 --> Hooks Class Initialized
INFO - 2025-06-22 09:21:47 --> Router Class Initialized
DEBUG - 2025-06-22 09:21:47 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:21:47 --> Output Class Initialized
INFO - 2025-06-22 09:21:47 --> Utf8 Class Initialized
INFO - 2025-06-22 09:21:47 --> Security Class Initialized
INFO - 2025-06-22 09:21:47 --> URI Class Initialized
DEBUG - 2025-06-22 09:21:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:21:47 --> Input Class Initialized
INFO - 2025-06-22 09:21:47 --> Router Class Initialized
INFO - 2025-06-22 09:21:47 --> Language Class Initialized
INFO - 2025-06-22 09:21:47 --> Output Class Initialized
INFO - 2025-06-22 09:21:47 --> Security Class Initialized
INFO - 2025-06-22 09:21:47 --> Loader Class Initialized
DEBUG - 2025-06-22 09:21:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:21:47 --> Helper loaded: url_helper
INFO - 2025-06-22 09:21:47 --> Input Class Initialized
INFO - 2025-06-22 09:21:47 --> Helper loaded: file_helper
INFO - 2025-06-22 09:21:47 --> Language Class Initialized
INFO - 2025-06-22 09:21:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:47 --> Loader Class Initialized
INFO - 2025-06-22 09:21:47 --> Helper loaded: url_helper
INFO - 2025-06-22 09:21:47 --> Helper loaded: file_helper
INFO - 2025-06-22 09:21:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:47 --> Email Class Initialized
INFO - 2025-06-22 09:21:47 --> Email Class Initialized
DEBUG - 2025-06-22 09:21:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:21:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:21:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:21:47 --> Controller Class Initialized
INFO - 2025-06-22 09:21:47 --> Helper loaded: form_helper
INFO - 2025-06-22 09:21:47 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:21:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:47 --> Model "Crud" initialized
INFO - 2025-06-22 09:21:47 --> Final output sent to browser
DEBUG - 2025-06-22 09:21:47 --> Total execution time: 0.0207
INFO - 2025-06-22 09:21:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:21:47 --> Controller Class Initialized
INFO - 2025-06-22 09:21:47 --> Helper loaded: form_helper
INFO - 2025-06-22 09:21:47 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:21:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:47 --> Model "Crud" initialized
INFO - 2025-06-22 09:21:47 --> Final output sent to browser
DEBUG - 2025-06-22 09:21:47 --> Total execution time: 0.0372
INFO - 2025-06-22 09:21:47 --> Config Class Initialized
INFO - 2025-06-22 09:21:47 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:21:47 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:21:47 --> Utf8 Class Initialized
INFO - 2025-06-22 09:21:47 --> URI Class Initialized
INFO - 2025-06-22 09:21:47 --> Router Class Initialized
INFO - 2025-06-22 09:21:47 --> Output Class Initialized
INFO - 2025-06-22 09:21:47 --> Security Class Initialized
DEBUG - 2025-06-22 09:21:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:21:47 --> Input Class Initialized
INFO - 2025-06-22 09:21:47 --> Language Class Initialized
INFO - 2025-06-22 09:21:47 --> Loader Class Initialized
INFO - 2025-06-22 09:21:47 --> Helper loaded: url_helper
INFO - 2025-06-22 09:21:47 --> Helper loaded: file_helper
INFO - 2025-06-22 09:21:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:47 --> Email Class Initialized
DEBUG - 2025-06-22 09:21:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:21:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:21:47 --> Controller Class Initialized
INFO - 2025-06-22 09:21:47 --> Helper loaded: form_helper
INFO - 2025-06-22 09:21:47 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:21:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:47 --> Model "Crud" initialized
INFO - 2025-06-22 09:21:47 --> Final output sent to browser
DEBUG - 2025-06-22 09:21:47 --> Total execution time: 0.0389
INFO - 2025-06-22 09:21:47 --> Config Class Initialized
INFO - 2025-06-22 09:21:47 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:21:47 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:21:47 --> Utf8 Class Initialized
INFO - 2025-06-22 09:21:47 --> URI Class Initialized
INFO - 2025-06-22 09:21:47 --> Router Class Initialized
INFO - 2025-06-22 09:21:47 --> Output Class Initialized
INFO - 2025-06-22 09:21:47 --> Security Class Initialized
DEBUG - 2025-06-22 09:21:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:21:47 --> Input Class Initialized
INFO - 2025-06-22 09:21:47 --> Language Class Initialized
INFO - 2025-06-22 09:21:47 --> Loader Class Initialized
INFO - 2025-06-22 09:21:47 --> Helper loaded: url_helper
INFO - 2025-06-22 09:21:47 --> Helper loaded: file_helper
INFO - 2025-06-22 09:21:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:47 --> Email Class Initialized
DEBUG - 2025-06-22 09:21:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:21:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:21:47 --> Controller Class Initialized
INFO - 2025-06-22 09:21:47 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:21:47 --> Helper loaded: form_helper
INFO - 2025-06-22 09:21:47 --> Form Validation Class Initialized
INFO - 2025-06-22 09:21:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:47 --> Model "Crud" initialized
INFO - 2025-06-22 09:21:47 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:21:47 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:47 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:21:47 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:21:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:47 --> Final output sent to browser
DEBUG - 2025-06-22 09:21:47 --> Total execution time: 0.0135
INFO - 2025-06-22 09:21:47 --> Config Class Initialized
INFO - 2025-06-22 09:21:47 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:21:47 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:21:47 --> Utf8 Class Initialized
INFO - 2025-06-22 09:21:47 --> URI Class Initialized
INFO - 2025-06-22 09:21:47 --> Router Class Initialized
INFO - 2025-06-22 09:21:47 --> Output Class Initialized
INFO - 2025-06-22 09:21:47 --> Security Class Initialized
DEBUG - 2025-06-22 09:21:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:21:47 --> Input Class Initialized
INFO - 2025-06-22 09:21:47 --> Language Class Initialized
INFO - 2025-06-22 09:21:47 --> Loader Class Initialized
INFO - 2025-06-22 09:21:47 --> Helper loaded: url_helper
INFO - 2025-06-22 09:21:47 --> Helper loaded: file_helper
INFO - 2025-06-22 09:21:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:47 --> Email Class Initialized
DEBUG - 2025-06-22 09:21:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:21:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:21:47 --> Controller Class Initialized
INFO - 2025-06-22 09:21:47 --> Helper loaded: form_helper
INFO - 2025-06-22 09:21:47 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:21:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:47 --> Model "Crud" initialized
INFO - 2025-06-22 09:21:47 --> Final output sent to browser
DEBUG - 2025-06-22 09:21:47 --> Total execution time: 0.0082
INFO - 2025-06-22 09:21:47 --> Config Class Initialized
INFO - 2025-06-22 09:21:47 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:21:47 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:21:47 --> Utf8 Class Initialized
INFO - 2025-06-22 09:21:47 --> URI Class Initialized
INFO - 2025-06-22 09:21:47 --> Router Class Initialized
INFO - 2025-06-22 09:21:47 --> Output Class Initialized
INFO - 2025-06-22 09:21:47 --> Security Class Initialized
DEBUG - 2025-06-22 09:21:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:21:47 --> Input Class Initialized
INFO - 2025-06-22 09:21:47 --> Language Class Initialized
INFO - 2025-06-22 09:21:47 --> Loader Class Initialized
INFO - 2025-06-22 09:21:47 --> Helper loaded: url_helper
INFO - 2025-06-22 09:21:47 --> Helper loaded: file_helper
INFO - 2025-06-22 09:21:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:47 --> Email Class Initialized
DEBUG - 2025-06-22 09:21:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:21:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:21:47 --> Controller Class Initialized
INFO - 2025-06-22 09:21:47 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:21:47 --> Helper loaded: form_helper
INFO - 2025-06-22 09:21:47 --> Form Validation Class Initialized
INFO - 2025-06-22 09:21:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:47 --> Model "Crud" initialized
INFO - 2025-06-22 09:21:47 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:21:47 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:47 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:21:47 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:21:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:47 --> Final output sent to browser
DEBUG - 2025-06-22 09:21:47 --> Total execution time: 0.0167
INFO - 2025-06-22 09:21:50 --> Config Class Initialized
INFO - 2025-06-22 09:21:50 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:21:50 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:21:50 --> Utf8 Class Initialized
INFO - 2025-06-22 09:21:50 --> URI Class Initialized
INFO - 2025-06-22 09:21:50 --> Router Class Initialized
INFO - 2025-06-22 09:21:50 --> Output Class Initialized
INFO - 2025-06-22 09:21:50 --> Security Class Initialized
DEBUG - 2025-06-22 09:21:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:21:50 --> Input Class Initialized
INFO - 2025-06-22 09:21:50 --> Language Class Initialized
INFO - 2025-06-22 09:21:50 --> Loader Class Initialized
INFO - 2025-06-22 09:21:50 --> Helper loaded: url_helper
INFO - 2025-06-22 09:21:50 --> Helper loaded: file_helper
INFO - 2025-06-22 09:21:50 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:50 --> Email Class Initialized
DEBUG - 2025-06-22 09:21:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:21:50 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:21:50 --> Controller Class Initialized
INFO - 2025-06-22 09:21:50 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:21:50 --> Helper loaded: form_helper
INFO - 2025-06-22 09:21:50 --> Form Validation Class Initialized
INFO - 2025-06-22 09:21:50 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:50 --> Model "Crud" initialized
INFO - 2025-06-22 09:21:50 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:21:50 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:50 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:21:50 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:21:50 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:50 --> Final output sent to browser
DEBUG - 2025-06-22 09:21:50 --> Total execution time: 0.0082
INFO - 2025-06-22 09:21:57 --> Config Class Initialized
INFO - 2025-06-22 09:21:57 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:21:57 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:21:57 --> Utf8 Class Initialized
INFO - 2025-06-22 09:21:57 --> URI Class Initialized
INFO - 2025-06-22 09:21:57 --> Router Class Initialized
INFO - 2025-06-22 09:21:57 --> Output Class Initialized
INFO - 2025-06-22 09:21:57 --> Security Class Initialized
DEBUG - 2025-06-22 09:21:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:21:57 --> Input Class Initialized
INFO - 2025-06-22 09:21:57 --> Language Class Initialized
INFO - 2025-06-22 09:21:57 --> Config Class Initialized
INFO - 2025-06-22 09:21:57 --> Hooks Class Initialized
INFO - 2025-06-22 09:21:57 --> Loader Class Initialized
DEBUG - 2025-06-22 09:21:57 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:21:57 --> Helper loaded: url_helper
INFO - 2025-06-22 09:21:57 --> Utf8 Class Initialized
INFO - 2025-06-22 09:21:57 --> Helper loaded: file_helper
INFO - 2025-06-22 09:21:57 --> URI Class Initialized
INFO - 2025-06-22 09:21:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:57 --> Router Class Initialized
INFO - 2025-06-22 09:21:57 --> Output Class Initialized
INFO - 2025-06-22 09:21:57 --> Security Class Initialized
DEBUG - 2025-06-22 09:21:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:21:57 --> Input Class Initialized
INFO - 2025-06-22 09:21:57 --> Language Class Initialized
INFO - 2025-06-22 09:21:57 --> Loader Class Initialized
INFO - 2025-06-22 09:21:57 --> Helper loaded: url_helper
INFO - 2025-06-22 09:21:57 --> Helper loaded: file_helper
INFO - 2025-06-22 09:21:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:57 --> Email Class Initialized
DEBUG - 2025-06-22 09:21:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:21:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:21:57 --> Email Class Initialized
INFO - 2025-06-22 09:21:57 --> Controller Class Initialized
INFO - 2025-06-22 09:21:57 --> Helper loaded: form_helper
DEBUG - 2025-06-22 09:21:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:21:57 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:21:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:57 --> Model "Crud" initialized
INFO - 2025-06-22 09:21:57 --> Final output sent to browser
DEBUG - 2025-06-22 09:21:57 --> Total execution time: 0.0203
INFO - 2025-06-22 09:21:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:21:57 --> Controller Class Initialized
INFO - 2025-06-22 09:21:57 --> Helper loaded: form_helper
INFO - 2025-06-22 09:21:57 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:21:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:21:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:21:57 --> Model "Crud" initialized
INFO - 2025-06-22 09:21:57 --> Final output sent to browser
DEBUG - 2025-06-22 09:21:57 --> Total execution time: 0.0392
INFO - 2025-06-22 09:23:08 --> Config Class Initialized
INFO - 2025-06-22 09:23:08 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:23:08 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:23:08 --> Utf8 Class Initialized
INFO - 2025-06-22 09:23:08 --> URI Class Initialized
INFO - 2025-06-22 09:23:08 --> Router Class Initialized
INFO - 2025-06-22 09:23:08 --> Output Class Initialized
INFO - 2025-06-22 09:23:08 --> Security Class Initialized
DEBUG - 2025-06-22 09:23:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:23:08 --> Input Class Initialized
INFO - 2025-06-22 09:23:08 --> Language Class Initialized
INFO - 2025-06-22 09:23:08 --> Loader Class Initialized
INFO - 2025-06-22 09:23:08 --> Helper loaded: url_helper
INFO - 2025-06-22 09:23:08 --> Helper loaded: file_helper
INFO - 2025-06-22 09:23:08 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:08 --> Email Class Initialized
DEBUG - 2025-06-22 09:23:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:23:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:23:08 --> Controller Class Initialized
INFO - 2025-06-22 09:23:08 --> Helper loaded: form_helper
INFO - 2025-06-22 09:23:08 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:23:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:08 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:08 --> Model "Crud" initialized
INFO - 2025-06-22 09:23:08 --> Config Class Initialized
INFO - 2025-06-22 09:23:08 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:23:08 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:23:08 --> Utf8 Class Initialized
INFO - 2025-06-22 09:23:08 --> URI Class Initialized
INFO - 2025-06-22 09:23:08 --> Router Class Initialized
INFO - 2025-06-22 09:23:08 --> Output Class Initialized
INFO - 2025-06-22 09:23:08 --> Security Class Initialized
DEBUG - 2025-06-22 09:23:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:23:08 --> Input Class Initialized
INFO - 2025-06-22 09:23:08 --> Language Class Initialized
INFO - 2025-06-22 09:23:08 --> Loader Class Initialized
INFO - 2025-06-22 09:23:08 --> Helper loaded: url_helper
INFO - 2025-06-22 09:23:08 --> Helper loaded: file_helper
INFO - 2025-06-22 09:23:08 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:08 --> Email Class Initialized
DEBUG - 2025-06-22 09:23:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:23:08 --> Final output sent to browser
DEBUG - 2025-06-22 09:23:08 --> Total execution time: 0.0328
INFO - 2025-06-22 09:23:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:23:08 --> Controller Class Initialized
INFO - 2025-06-22 09:23:08 --> Helper loaded: form_helper
INFO - 2025-06-22 09:23:08 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:23:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:08 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:08 --> Model "Crud" initialized
INFO - 2025-06-22 09:23:08 --> Final output sent to browser
DEBUG - 2025-06-22 09:23:08 --> Total execution time: 0.0488
INFO - 2025-06-22 09:23:10 --> Config Class Initialized
INFO - 2025-06-22 09:23:10 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:23:10 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:23:10 --> Utf8 Class Initialized
INFO - 2025-06-22 09:23:10 --> URI Class Initialized
INFO - 2025-06-22 09:23:10 --> Router Class Initialized
INFO - 2025-06-22 09:23:10 --> Output Class Initialized
INFO - 2025-06-22 09:23:10 --> Security Class Initialized
DEBUG - 2025-06-22 09:23:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:23:10 --> Input Class Initialized
INFO - 2025-06-22 09:23:10 --> Language Class Initialized
INFO - 2025-06-22 09:23:10 --> Loader Class Initialized
INFO - 2025-06-22 09:23:10 --> Helper loaded: url_helper
INFO - 2025-06-22 09:23:10 --> Helper loaded: file_helper
INFO - 2025-06-22 09:23:10 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:10 --> Email Class Initialized
DEBUG - 2025-06-22 09:23:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:23:10 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:23:10 --> Controller Class Initialized
INFO - 2025-06-22 09:23:10 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:23:10 --> Helper loaded: form_helper
INFO - 2025-06-22 09:23:10 --> Form Validation Class Initialized
INFO - 2025-06-22 09:23:10 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:10 --> Model "Crud" initialized
INFO - 2025-06-22 09:23:10 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:23:10 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:10 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:23:10 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:23:10 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:10 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-22 09:23:10 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/master-form-test.php
INFO - 2025-06-22 09:23:10 --> Final output sent to browser
DEBUG - 2025-06-22 09:23:10 --> Total execution time: 0.0144
INFO - 2025-06-22 09:23:10 --> Config Class Initialized
INFO - 2025-06-22 09:23:10 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:23:10 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:23:10 --> Utf8 Class Initialized
INFO - 2025-06-22 09:23:10 --> URI Class Initialized
INFO - 2025-06-22 09:23:10 --> Router Class Initialized
INFO - 2025-06-22 09:23:10 --> Output Class Initialized
INFO - 2025-06-22 09:23:10 --> Security Class Initialized
DEBUG - 2025-06-22 09:23:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:23:10 --> Input Class Initialized
INFO - 2025-06-22 09:23:10 --> Language Class Initialized
INFO - 2025-06-22 09:23:10 --> Loader Class Initialized
INFO - 2025-06-22 09:23:10 --> Helper loaded: url_helper
INFO - 2025-06-22 09:23:10 --> Helper loaded: file_helper
INFO - 2025-06-22 09:23:10 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:10 --> Email Class Initialized
DEBUG - 2025-06-22 09:23:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:23:10 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:23:10 --> Controller Class Initialized
INFO - 2025-06-22 09:23:10 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:23:10 --> Helper loaded: form_helper
INFO - 2025-06-22 09:23:10 --> Form Validation Class Initialized
INFO - 2025-06-22 09:23:10 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:10 --> Model "Crud" initialized
INFO - 2025-06-22 09:23:10 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:23:10 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:10 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:23:10 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:23:10 --> Session class already loaded. Second attempt ignored.
ERROR - 2025-06-22 09:23:10 --> Query error: Illegal mix of collations (utf8mb4_0900_ai_ci,IMPLICIT) and (utf8mb3_general_ci,COERCIBLE) for operation '=' - Invalid query: SELECT a.* FROM setting_users a JOIN users b ON a.users_id = b.username WHERE a.menus_id='‚ZjXì' and b.username='admin'
INFO - 2025-06-22 09:23:10 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-22 09:23:11 --> Config Class Initialized
INFO - 2025-06-22 09:23:11 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:23:11 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:23:11 --> Utf8 Class Initialized
INFO - 2025-06-22 09:23:11 --> URI Class Initialized
INFO - 2025-06-22 09:23:11 --> Router Class Initialized
INFO - 2025-06-22 09:23:11 --> Output Class Initialized
INFO - 2025-06-22 09:23:11 --> Security Class Initialized
DEBUG - 2025-06-22 09:23:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:23:11 --> Input Class Initialized
INFO - 2025-06-22 09:23:11 --> Language Class Initialized
INFO - 2025-06-22 09:23:11 --> Loader Class Initialized
INFO - 2025-06-22 09:23:11 --> Helper loaded: url_helper
INFO - 2025-06-22 09:23:11 --> Helper loaded: file_helper
INFO - 2025-06-22 09:23:11 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:11 --> Email Class Initialized
DEBUG - 2025-06-22 09:23:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:23:11 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:23:11 --> Controller Class Initialized
INFO - 2025-06-22 09:23:11 --> Helper loaded: form_helper
INFO - 2025-06-22 09:23:11 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:23:11 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:11 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:11 --> Model "Crud" initialized
INFO - 2025-06-22 09:23:11 --> Final output sent to browser
DEBUG - 2025-06-22 09:23:11 --> Total execution time: 0.0105
INFO - 2025-06-22 09:23:11 --> Config Class Initialized
INFO - 2025-06-22 09:23:11 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:23:11 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:23:11 --> Utf8 Class Initialized
INFO - 2025-06-22 09:23:11 --> URI Class Initialized
INFO - 2025-06-22 09:23:11 --> Router Class Initialized
INFO - 2025-06-22 09:23:11 --> Output Class Initialized
INFO - 2025-06-22 09:23:11 --> Security Class Initialized
DEBUG - 2025-06-22 09:23:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:23:11 --> Input Class Initialized
INFO - 2025-06-22 09:23:11 --> Language Class Initialized
INFO - 2025-06-22 09:23:11 --> Loader Class Initialized
INFO - 2025-06-22 09:23:11 --> Helper loaded: url_helper
INFO - 2025-06-22 09:23:11 --> Helper loaded: file_helper
INFO - 2025-06-22 09:23:11 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:11 --> Email Class Initialized
DEBUG - 2025-06-22 09:23:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:23:11 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:23:11 --> Controller Class Initialized
INFO - 2025-06-22 09:23:11 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:23:11 --> Helper loaded: form_helper
INFO - 2025-06-22 09:23:11 --> Form Validation Class Initialized
INFO - 2025-06-22 09:23:11 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:11 --> Model "Crud" initialized
INFO - 2025-06-22 09:23:11 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:23:11 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:11 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:23:11 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:23:11 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:11 --> Final output sent to browser
DEBUG - 2025-06-22 09:23:11 --> Total execution time: 0.0100
INFO - 2025-06-22 09:23:11 --> Config Class Initialized
INFO - 2025-06-22 09:23:11 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:23:11 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:23:11 --> Utf8 Class Initialized
INFO - 2025-06-22 09:23:11 --> URI Class Initialized
INFO - 2025-06-22 09:23:11 --> Router Class Initialized
INFO - 2025-06-22 09:23:11 --> Output Class Initialized
INFO - 2025-06-22 09:23:11 --> Security Class Initialized
DEBUG - 2025-06-22 09:23:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:23:11 --> Input Class Initialized
INFO - 2025-06-22 09:23:11 --> Language Class Initialized
INFO - 2025-06-22 09:23:11 --> Loader Class Initialized
INFO - 2025-06-22 09:23:11 --> Helper loaded: url_helper
INFO - 2025-06-22 09:23:11 --> Helper loaded: file_helper
INFO - 2025-06-22 09:23:11 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:11 --> Email Class Initialized
DEBUG - 2025-06-22 09:23:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:23:11 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:23:11 --> Controller Class Initialized
INFO - 2025-06-22 09:23:11 --> Helper loaded: form_helper
INFO - 2025-06-22 09:23:11 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:23:11 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:11 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:11 --> Model "Crud" initialized
INFO - 2025-06-22 09:23:11 --> Final output sent to browser
DEBUG - 2025-06-22 09:23:11 --> Total execution time: 0.0076
INFO - 2025-06-22 09:23:12 --> Config Class Initialized
INFO - 2025-06-22 09:23:12 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:23:12 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:23:12 --> Utf8 Class Initialized
INFO - 2025-06-22 09:23:12 --> URI Class Initialized
INFO - 2025-06-22 09:23:12 --> Router Class Initialized
INFO - 2025-06-22 09:23:12 --> Output Class Initialized
INFO - 2025-06-22 09:23:12 --> Security Class Initialized
DEBUG - 2025-06-22 09:23:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:23:12 --> Input Class Initialized
INFO - 2025-06-22 09:23:12 --> Language Class Initialized
INFO - 2025-06-22 09:23:12 --> Loader Class Initialized
INFO - 2025-06-22 09:23:12 --> Helper loaded: url_helper
INFO - 2025-06-22 09:23:12 --> Helper loaded: file_helper
INFO - 2025-06-22 09:23:12 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:12 --> Email Class Initialized
DEBUG - 2025-06-22 09:23:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:23:12 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:23:12 --> Controller Class Initialized
INFO - 2025-06-22 09:23:12 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:23:12 --> Helper loaded: form_helper
INFO - 2025-06-22 09:23:12 --> Form Validation Class Initialized
INFO - 2025-06-22 09:23:12 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:12 --> Model "Crud" initialized
INFO - 2025-06-22 09:23:12 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:23:12 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:12 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:23:12 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:23:12 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:12 --> Final output sent to browser
DEBUG - 2025-06-22 09:23:12 --> Total execution time: 0.0466
INFO - 2025-06-22 09:23:14 --> Config Class Initialized
INFO - 2025-06-22 09:23:14 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:23:14 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:23:14 --> Utf8 Class Initialized
INFO - 2025-06-22 09:23:14 --> URI Class Initialized
INFO - 2025-06-22 09:23:14 --> Router Class Initialized
INFO - 2025-06-22 09:23:14 --> Output Class Initialized
INFO - 2025-06-22 09:23:14 --> Security Class Initialized
DEBUG - 2025-06-22 09:23:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:23:14 --> Input Class Initialized
INFO - 2025-06-22 09:23:14 --> Language Class Initialized
INFO - 2025-06-22 09:23:14 --> Loader Class Initialized
INFO - 2025-06-22 09:23:14 --> Helper loaded: url_helper
INFO - 2025-06-22 09:23:14 --> Helper loaded: file_helper
INFO - 2025-06-22 09:23:14 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:14 --> Email Class Initialized
DEBUG - 2025-06-22 09:23:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:23:14 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:23:14 --> Controller Class Initialized
INFO - 2025-06-22 09:23:14 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:23:14 --> Helper loaded: form_helper
INFO - 2025-06-22 09:23:14 --> Form Validation Class Initialized
INFO - 2025-06-22 09:23:14 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:14 --> Model "Crud" initialized
INFO - 2025-06-22 09:23:14 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:23:14 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:14 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:23:14 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:23:14 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:14 --> Final output sent to browser
DEBUG - 2025-06-22 09:23:14 --> Total execution time: 0.0083
INFO - 2025-06-22 09:23:17 --> Config Class Initialized
INFO - 2025-06-22 09:23:17 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:23:17 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:23:17 --> Utf8 Class Initialized
INFO - 2025-06-22 09:23:17 --> URI Class Initialized
INFO - 2025-06-22 09:23:17 --> Router Class Initialized
INFO - 2025-06-22 09:23:17 --> Output Class Initialized
INFO - 2025-06-22 09:23:17 --> Security Class Initialized
DEBUG - 2025-06-22 09:23:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:23:17 --> Input Class Initialized
INFO - 2025-06-22 09:23:17 --> Language Class Initialized
INFO - 2025-06-22 09:23:17 --> Loader Class Initialized
INFO - 2025-06-22 09:23:17 --> Helper loaded: url_helper
INFO - 2025-06-22 09:23:17 --> Helper loaded: file_helper
INFO - 2025-06-22 09:23:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:17 --> Email Class Initialized
DEBUG - 2025-06-22 09:23:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:23:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:23:17 --> Controller Class Initialized
INFO - 2025-06-22 09:23:17 --> Helper loaded: form_helper
INFO - 2025-06-22 09:23:17 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:23:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:17 --> Config Class Initialized
INFO - 2025-06-22 09:23:17 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:23:17 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:23:17 --> Utf8 Class Initialized
INFO - 2025-06-22 09:23:17 --> URI Class Initialized
INFO - 2025-06-22 09:23:17 --> Router Class Initialized
INFO - 2025-06-22 09:23:17 --> Output Class Initialized
INFO - 2025-06-22 09:23:17 --> Security Class Initialized
DEBUG - 2025-06-22 09:23:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:23:17 --> Input Class Initialized
INFO - 2025-06-22 09:23:17 --> Language Class Initialized
INFO - 2025-06-22 09:23:17 --> Loader Class Initialized
INFO - 2025-06-22 09:23:17 --> Helper loaded: url_helper
INFO - 2025-06-22 09:23:17 --> Helper loaded: file_helper
INFO - 2025-06-22 09:23:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:17 --> Model "Crud" initialized
INFO - 2025-06-22 09:23:17 --> Email Class Initialized
DEBUG - 2025-06-22 09:23:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:23:17 --> Final output sent to browser
DEBUG - 2025-06-22 09:23:17 --> Total execution time: 0.0152
INFO - 2025-06-22 09:23:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:23:17 --> Controller Class Initialized
INFO - 2025-06-22 09:23:17 --> Helper loaded: form_helper
INFO - 2025-06-22 09:23:17 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:23:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:17 --> Model "Crud" initialized
INFO - 2025-06-22 09:23:17 --> Final output sent to browser
DEBUG - 2025-06-22 09:23:17 --> Total execution time: 0.0252
INFO - 2025-06-22 09:23:27 --> Config Class Initialized
INFO - 2025-06-22 09:23:27 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:23:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:23:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:23:27 --> URI Class Initialized
INFO - 2025-06-22 09:23:27 --> Router Class Initialized
INFO - 2025-06-22 09:23:27 --> Output Class Initialized
INFO - 2025-06-22 09:23:27 --> Security Class Initialized
DEBUG - 2025-06-22 09:23:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:23:27 --> Input Class Initialized
INFO - 2025-06-22 09:23:27 --> Language Class Initialized
INFO - 2025-06-22 09:23:27 --> Loader Class Initialized
INFO - 2025-06-22 09:23:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:23:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:23:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:27 --> Email Class Initialized
DEBUG - 2025-06-22 09:23:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:23:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:23:27 --> Controller Class Initialized
INFO - 2025-06-22 09:23:27 --> Config Class Initialized
INFO - 2025-06-22 09:23:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:23:27 --> Hooks Class Initialized
INFO - 2025-06-22 09:23:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:23:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:23:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:23:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:23:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:27 --> URI Class Initialized
INFO - 2025-06-22 09:23:27 --> Router Class Initialized
INFO - 2025-06-22 09:23:27 --> Output Class Initialized
INFO - 2025-06-22 09:23:27 --> Security Class Initialized
DEBUG - 2025-06-22 09:23:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:23:27 --> Input Class Initialized
INFO - 2025-06-22 09:23:27 --> Language Class Initialized
INFO - 2025-06-22 09:23:27 --> Loader Class Initialized
INFO - 2025-06-22 09:23:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:23:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:23:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:23:27 --> Email Class Initialized
DEBUG - 2025-06-22 09:23:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:23:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:23:27 --> Total execution time: 0.0199
INFO - 2025-06-22 09:23:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:23:27 --> Controller Class Initialized
INFO - 2025-06-22 09:23:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:23:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:23:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:23:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:23:27 --> Total execution time: 0.0347
INFO - 2025-06-22 09:23:37 --> Config Class Initialized
INFO - 2025-06-22 09:23:37 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:23:37 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:23:37 --> Utf8 Class Initialized
INFO - 2025-06-22 09:23:37 --> URI Class Initialized
INFO - 2025-06-22 09:23:37 --> Router Class Initialized
INFO - 2025-06-22 09:23:37 --> Output Class Initialized
INFO - 2025-06-22 09:23:37 --> Security Class Initialized
DEBUG - 2025-06-22 09:23:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:23:37 --> Input Class Initialized
INFO - 2025-06-22 09:23:37 --> Language Class Initialized
INFO - 2025-06-22 09:23:37 --> Loader Class Initialized
INFO - 2025-06-22 09:23:37 --> Config Class Initialized
INFO - 2025-06-22 09:23:37 --> Helper loaded: url_helper
INFO - 2025-06-22 09:23:37 --> Hooks Class Initialized
INFO - 2025-06-22 09:23:37 --> Helper loaded: file_helper
DEBUG - 2025-06-22 09:23:37 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:23:37 --> Utf8 Class Initialized
INFO - 2025-06-22 09:23:37 --> URI Class Initialized
INFO - 2025-06-22 09:23:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:37 --> Router Class Initialized
INFO - 2025-06-22 09:23:37 --> Output Class Initialized
INFO - 2025-06-22 09:23:37 --> Security Class Initialized
DEBUG - 2025-06-22 09:23:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:23:37 --> Input Class Initialized
INFO - 2025-06-22 09:23:37 --> Language Class Initialized
INFO - 2025-06-22 09:23:37 --> Loader Class Initialized
INFO - 2025-06-22 09:23:37 --> Helper loaded: url_helper
INFO - 2025-06-22 09:23:37 --> Helper loaded: file_helper
INFO - 2025-06-22 09:23:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:37 --> Email Class Initialized
DEBUG - 2025-06-22 09:23:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:23:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:23:37 --> Controller Class Initialized
INFO - 2025-06-22 09:23:37 --> Helper loaded: form_helper
INFO - 2025-06-22 09:23:37 --> Email Class Initialized
INFO - 2025-06-22 09:23:37 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:23:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:23:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:23:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:37 --> Model "Crud" initialized
INFO - 2025-06-22 09:23:37 --> Final output sent to browser
DEBUG - 2025-06-22 09:23:37 --> Total execution time: 0.0162
INFO - 2025-06-22 09:23:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:23:37 --> Controller Class Initialized
INFO - 2025-06-22 09:23:37 --> Helper loaded: form_helper
INFO - 2025-06-22 09:23:37 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:23:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:37 --> Model "Crud" initialized
INFO - 2025-06-22 09:23:37 --> Final output sent to browser
DEBUG - 2025-06-22 09:23:37 --> Total execution time: 0.0298
INFO - 2025-06-22 09:23:38 --> Config Class Initialized
INFO - 2025-06-22 09:23:38 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:23:38 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:23:38 --> Utf8 Class Initialized
INFO - 2025-06-22 09:23:38 --> URI Class Initialized
INFO - 2025-06-22 09:23:38 --> Router Class Initialized
INFO - 2025-06-22 09:23:38 --> Output Class Initialized
INFO - 2025-06-22 09:23:38 --> Security Class Initialized
DEBUG - 2025-06-22 09:23:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:23:38 --> Input Class Initialized
INFO - 2025-06-22 09:23:38 --> Language Class Initialized
INFO - 2025-06-22 09:23:38 --> Loader Class Initialized
INFO - 2025-06-22 09:23:38 --> Helper loaded: url_helper
INFO - 2025-06-22 09:23:38 --> Helper loaded: file_helper
INFO - 2025-06-22 09:23:38 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:38 --> Email Class Initialized
DEBUG - 2025-06-22 09:23:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:23:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:23:38 --> Controller Class Initialized
INFO - 2025-06-22 09:23:38 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:23:38 --> Helper loaded: form_helper
INFO - 2025-06-22 09:23:38 --> Form Validation Class Initialized
INFO - 2025-06-22 09:23:38 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:38 --> Model "Crud" initialized
INFO - 2025-06-22 09:23:38 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:23:38 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:38 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:23:38 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:23:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:38 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-22 09:23:38 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/master-form-test.php
INFO - 2025-06-22 09:23:38 --> Final output sent to browser
DEBUG - 2025-06-22 09:23:38 --> Total execution time: 0.0133
INFO - 2025-06-22 09:23:38 --> Config Class Initialized
INFO - 2025-06-22 09:23:38 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:23:38 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:23:38 --> Utf8 Class Initialized
INFO - 2025-06-22 09:23:38 --> URI Class Initialized
INFO - 2025-06-22 09:23:38 --> Router Class Initialized
INFO - 2025-06-22 09:23:38 --> Output Class Initialized
INFO - 2025-06-22 09:23:38 --> Security Class Initialized
DEBUG - 2025-06-22 09:23:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:23:38 --> Input Class Initialized
INFO - 2025-06-22 09:23:38 --> Language Class Initialized
INFO - 2025-06-22 09:23:38 --> Loader Class Initialized
INFO - 2025-06-22 09:23:38 --> Helper loaded: url_helper
INFO - 2025-06-22 09:23:38 --> Helper loaded: file_helper
INFO - 2025-06-22 09:23:38 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:38 --> Email Class Initialized
DEBUG - 2025-06-22 09:23:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:23:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:23:38 --> Controller Class Initialized
INFO - 2025-06-22 09:23:38 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:23:38 --> Helper loaded: form_helper
INFO - 2025-06-22 09:23:38 --> Form Validation Class Initialized
INFO - 2025-06-22 09:23:38 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:38 --> Model "Crud" initialized
INFO - 2025-06-22 09:23:38 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:23:38 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:38 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:23:38 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:23:38 --> Session class already loaded. Second attempt ignored.
ERROR - 2025-06-22 09:23:38 --> Query error: Illegal mix of collations (utf8mb4_0900_ai_ci,IMPLICIT) and (utf8mb3_general_ci,COERCIBLE) for operation '=' - Invalid query: SELECT a.* FROM setting_users a JOIN users b ON a.users_id = b.username WHERE a.menus_id='‚ZjXì' and b.username='admin'
INFO - 2025-06-22 09:23:38 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-22 09:23:39 --> Config Class Initialized
INFO - 2025-06-22 09:23:39 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:23:39 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:23:39 --> Utf8 Class Initialized
INFO - 2025-06-22 09:23:39 --> URI Class Initialized
INFO - 2025-06-22 09:23:39 --> Router Class Initialized
INFO - 2025-06-22 09:23:39 --> Output Class Initialized
INFO - 2025-06-22 09:23:39 --> Security Class Initialized
DEBUG - 2025-06-22 09:23:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:23:39 --> Input Class Initialized
INFO - 2025-06-22 09:23:39 --> Language Class Initialized
INFO - 2025-06-22 09:23:39 --> Loader Class Initialized
INFO - 2025-06-22 09:23:39 --> Helper loaded: url_helper
INFO - 2025-06-22 09:23:39 --> Helper loaded: file_helper
INFO - 2025-06-22 09:23:39 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:39 --> Email Class Initialized
DEBUG - 2025-06-22 09:23:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:23:39 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:23:39 --> Controller Class Initialized
INFO - 2025-06-22 09:23:39 --> Helper loaded: form_helper
INFO - 2025-06-22 09:23:39 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:23:39 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:39 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:39 --> Model "Crud" initialized
INFO - 2025-06-22 09:23:39 --> Final output sent to browser
DEBUG - 2025-06-22 09:23:39 --> Total execution time: 0.0117
INFO - 2025-06-22 09:23:39 --> Config Class Initialized
INFO - 2025-06-22 09:23:39 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:23:39 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:23:39 --> Utf8 Class Initialized
INFO - 2025-06-22 09:23:39 --> URI Class Initialized
INFO - 2025-06-22 09:23:39 --> Router Class Initialized
INFO - 2025-06-22 09:23:39 --> Output Class Initialized
INFO - 2025-06-22 09:23:39 --> Security Class Initialized
DEBUG - 2025-06-22 09:23:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:23:39 --> Input Class Initialized
INFO - 2025-06-22 09:23:39 --> Language Class Initialized
INFO - 2025-06-22 09:23:39 --> Loader Class Initialized
INFO - 2025-06-22 09:23:39 --> Helper loaded: url_helper
INFO - 2025-06-22 09:23:39 --> Helper loaded: file_helper
INFO - 2025-06-22 09:23:39 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:39 --> Email Class Initialized
DEBUG - 2025-06-22 09:23:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:23:39 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:23:39 --> Controller Class Initialized
INFO - 2025-06-22 09:23:39 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:23:39 --> Helper loaded: form_helper
INFO - 2025-06-22 09:23:39 --> Form Validation Class Initialized
INFO - 2025-06-22 09:23:39 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:39 --> Config Class Initialized
INFO - 2025-06-22 09:23:39 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:23:39 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:23:39 --> Utf8 Class Initialized
INFO - 2025-06-22 09:23:39 --> URI Class Initialized
INFO - 2025-06-22 09:23:39 --> Router Class Initialized
INFO - 2025-06-22 09:23:39 --> Output Class Initialized
INFO - 2025-06-22 09:23:39 --> Security Class Initialized
DEBUG - 2025-06-22 09:23:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:23:39 --> Input Class Initialized
INFO - 2025-06-22 09:23:39 --> Language Class Initialized
INFO - 2025-06-22 09:23:39 --> Loader Class Initialized
INFO - 2025-06-22 09:23:39 --> Helper loaded: url_helper
INFO - 2025-06-22 09:23:39 --> Helper loaded: file_helper
INFO - 2025-06-22 09:23:39 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:39 --> Model "Crud" initialized
INFO - 2025-06-22 09:23:39 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:39 --> Email Class Initialized
DEBUG - 2025-06-22 09:23:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:23:39 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:39 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:23:39 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:23:39 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:39 --> Final output sent to browser
DEBUG - 2025-06-22 09:23:39 --> Total execution time: 0.0374
INFO - 2025-06-22 09:23:39 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:23:39 --> Controller Class Initialized
INFO - 2025-06-22 09:23:39 --> Helper loaded: form_helper
INFO - 2025-06-22 09:23:39 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:23:39 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:39 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:39 --> Model "Crud" initialized
INFO - 2025-06-22 09:23:39 --> Final output sent to browser
DEBUG - 2025-06-22 09:23:39 --> Total execution time: 0.0122
INFO - 2025-06-22 09:23:39 --> Config Class Initialized
INFO - 2025-06-22 09:23:39 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:23:39 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:23:39 --> Utf8 Class Initialized
INFO - 2025-06-22 09:23:39 --> URI Class Initialized
INFO - 2025-06-22 09:23:39 --> Router Class Initialized
INFO - 2025-06-22 09:23:39 --> Output Class Initialized
INFO - 2025-06-22 09:23:39 --> Security Class Initialized
DEBUG - 2025-06-22 09:23:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:23:39 --> Input Class Initialized
INFO - 2025-06-22 09:23:39 --> Language Class Initialized
INFO - 2025-06-22 09:23:39 --> Loader Class Initialized
INFO - 2025-06-22 09:23:39 --> Helper loaded: url_helper
INFO - 2025-06-22 09:23:39 --> Helper loaded: file_helper
INFO - 2025-06-22 09:23:39 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:39 --> Email Class Initialized
DEBUG - 2025-06-22 09:23:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:23:39 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:23:39 --> Controller Class Initialized
INFO - 2025-06-22 09:23:39 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:23:39 --> Helper loaded: form_helper
INFO - 2025-06-22 09:23:39 --> Form Validation Class Initialized
INFO - 2025-06-22 09:23:39 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:39 --> Model "Crud" initialized
INFO - 2025-06-22 09:23:39 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:23:39 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:39 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:23:39 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:23:39 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:39 --> Final output sent to browser
DEBUG - 2025-06-22 09:23:39 --> Total execution time: 0.0175
INFO - 2025-06-22 09:23:41 --> Config Class Initialized
INFO - 2025-06-22 09:23:41 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:23:41 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:23:41 --> Utf8 Class Initialized
INFO - 2025-06-22 09:23:41 --> URI Class Initialized
INFO - 2025-06-22 09:23:41 --> Router Class Initialized
INFO - 2025-06-22 09:23:41 --> Output Class Initialized
INFO - 2025-06-22 09:23:41 --> Security Class Initialized
DEBUG - 2025-06-22 09:23:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:23:41 --> Input Class Initialized
INFO - 2025-06-22 09:23:41 --> Language Class Initialized
INFO - 2025-06-22 09:23:41 --> Loader Class Initialized
INFO - 2025-06-22 09:23:41 --> Helper loaded: url_helper
INFO - 2025-06-22 09:23:41 --> Helper loaded: file_helper
INFO - 2025-06-22 09:23:41 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:41 --> Email Class Initialized
DEBUG - 2025-06-22 09:23:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:23:41 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:23:41 --> Controller Class Initialized
INFO - 2025-06-22 09:23:41 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:23:41 --> Helper loaded: form_helper
INFO - 2025-06-22 09:23:41 --> Form Validation Class Initialized
INFO - 2025-06-22 09:23:41 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:41 --> Model "Crud" initialized
INFO - 2025-06-22 09:23:41 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:23:41 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:41 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:23:41 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:23:41 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:41 --> Final output sent to browser
DEBUG - 2025-06-22 09:23:41 --> Total execution time: 0.0115
INFO - 2025-06-22 09:23:46 --> Config Class Initialized
INFO - 2025-06-22 09:23:46 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:23:46 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:23:46 --> Utf8 Class Initialized
INFO - 2025-06-22 09:23:46 --> URI Class Initialized
INFO - 2025-06-22 09:23:46 --> Router Class Initialized
INFO - 2025-06-22 09:23:46 --> Output Class Initialized
INFO - 2025-06-22 09:23:46 --> Security Class Initialized
DEBUG - 2025-06-22 09:23:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:23:46 --> Input Class Initialized
INFO - 2025-06-22 09:23:46 --> Language Class Initialized
INFO - 2025-06-22 09:23:46 --> Loader Class Initialized
INFO - 2025-06-22 09:23:46 --> Helper loaded: url_helper
INFO - 2025-06-22 09:23:46 --> Helper loaded: file_helper
INFO - 2025-06-22 09:23:46 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:46 --> Email Class Initialized
DEBUG - 2025-06-22 09:23:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:23:46 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:23:46 --> Controller Class Initialized
INFO - 2025-06-22 09:23:46 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:23:46 --> Helper loaded: form_helper
INFO - 2025-06-22 09:23:46 --> Form Validation Class Initialized
INFO - 2025-06-22 09:23:46 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:46 --> Model "Crud" initialized
INFO - 2025-06-22 09:23:46 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:23:46 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:46 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:23:46 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:23:46 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:46 --> Final output sent to browser
DEBUG - 2025-06-22 09:23:46 --> Total execution time: 0.0096
INFO - 2025-06-22 09:23:47 --> Config Class Initialized
INFO - 2025-06-22 09:23:47 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:23:47 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:23:47 --> Utf8 Class Initialized
INFO - 2025-06-22 09:23:47 --> URI Class Initialized
INFO - 2025-06-22 09:23:47 --> Router Class Initialized
INFO - 2025-06-22 09:23:47 --> Output Class Initialized
INFO - 2025-06-22 09:23:47 --> Security Class Initialized
DEBUG - 2025-06-22 09:23:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:23:47 --> Input Class Initialized
INFO - 2025-06-22 09:23:47 --> Language Class Initialized
INFO - 2025-06-22 09:23:47 --> Loader Class Initialized
INFO - 2025-06-22 09:23:47 --> Helper loaded: url_helper
INFO - 2025-06-22 09:23:47 --> Helper loaded: file_helper
INFO - 2025-06-22 09:23:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:47 --> Email Class Initialized
DEBUG - 2025-06-22 09:23:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:23:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:23:47 --> Controller Class Initialized
INFO - 2025-06-22 09:23:47 --> Helper loaded: form_helper
INFO - 2025-06-22 09:23:47 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:23:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:47 --> Config Class Initialized
INFO - 2025-06-22 09:23:47 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:23:47 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:23:47 --> Utf8 Class Initialized
INFO - 2025-06-22 09:23:47 --> URI Class Initialized
INFO - 2025-06-22 09:23:47 --> Router Class Initialized
INFO - 2025-06-22 09:23:47 --> Output Class Initialized
INFO - 2025-06-22 09:23:47 --> Security Class Initialized
DEBUG - 2025-06-22 09:23:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:23:47 --> Input Class Initialized
INFO - 2025-06-22 09:23:47 --> Language Class Initialized
INFO - 2025-06-22 09:23:47 --> Loader Class Initialized
INFO - 2025-06-22 09:23:47 --> Model "Crud" initialized
INFO - 2025-06-22 09:23:47 --> Helper loaded: url_helper
INFO - 2025-06-22 09:23:47 --> Helper loaded: file_helper
INFO - 2025-06-22 09:23:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:47 --> Email Class Initialized
DEBUG - 2025-06-22 09:23:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:23:47 --> Final output sent to browser
DEBUG - 2025-06-22 09:23:47 --> Total execution time: 0.0160
INFO - 2025-06-22 09:23:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:23:47 --> Controller Class Initialized
INFO - 2025-06-22 09:23:47 --> Helper loaded: form_helper
INFO - 2025-06-22 09:23:47 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:23:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:47 --> Model "Crud" initialized
INFO - 2025-06-22 09:23:47 --> Final output sent to browser
DEBUG - 2025-06-22 09:23:47 --> Total execution time: 0.0251
INFO - 2025-06-22 09:23:57 --> Config Class Initialized
INFO - 2025-06-22 09:23:57 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:23:57 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:23:57 --> Utf8 Class Initialized
INFO - 2025-06-22 09:23:57 --> URI Class Initialized
INFO - 2025-06-22 09:23:57 --> Router Class Initialized
INFO - 2025-06-22 09:23:57 --> Output Class Initialized
INFO - 2025-06-22 09:23:57 --> Security Class Initialized
DEBUG - 2025-06-22 09:23:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:23:57 --> Config Class Initialized
INFO - 2025-06-22 09:23:57 --> Input Class Initialized
INFO - 2025-06-22 09:23:57 --> Hooks Class Initialized
INFO - 2025-06-22 09:23:57 --> Language Class Initialized
DEBUG - 2025-06-22 09:23:57 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:23:57 --> Loader Class Initialized
INFO - 2025-06-22 09:23:57 --> Utf8 Class Initialized
INFO - 2025-06-22 09:23:57 --> Helper loaded: url_helper
INFO - 2025-06-22 09:23:57 --> Helper loaded: file_helper
INFO - 2025-06-22 09:23:57 --> URI Class Initialized
INFO - 2025-06-22 09:23:57 --> Router Class Initialized
INFO - 2025-06-22 09:23:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:57 --> Output Class Initialized
INFO - 2025-06-22 09:23:57 --> Security Class Initialized
DEBUG - 2025-06-22 09:23:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:23:57 --> Input Class Initialized
INFO - 2025-06-22 09:23:57 --> Language Class Initialized
INFO - 2025-06-22 09:23:57 --> Loader Class Initialized
INFO - 2025-06-22 09:23:57 --> Helper loaded: url_helper
INFO - 2025-06-22 09:23:57 --> Helper loaded: file_helper
INFO - 2025-06-22 09:23:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:57 --> Email Class Initialized
DEBUG - 2025-06-22 09:23:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:23:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:23:57 --> Controller Class Initialized
INFO - 2025-06-22 09:23:57 --> Helper loaded: form_helper
INFO - 2025-06-22 09:23:57 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:23:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:57 --> Email Class Initialized
INFO - 2025-06-22 09:23:57 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:23:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:23:57 --> Model "Crud" initialized
INFO - 2025-06-22 09:23:57 --> Final output sent to browser
DEBUG - 2025-06-22 09:23:57 --> Total execution time: 0.0163
INFO - 2025-06-22 09:23:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:23:57 --> Controller Class Initialized
INFO - 2025-06-22 09:23:57 --> Helper loaded: form_helper
INFO - 2025-06-22 09:23:57 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:23:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:23:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:23:57 --> Model "Crud" initialized
INFO - 2025-06-22 09:23:57 --> Final output sent to browser
DEBUG - 2025-06-22 09:23:57 --> Total execution time: 0.0278
INFO - 2025-06-22 09:24:07 --> Config Class Initialized
INFO - 2025-06-22 09:24:07 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:24:07 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:24:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:24:07 --> URI Class Initialized
INFO - 2025-06-22 09:24:07 --> Router Class Initialized
INFO - 2025-06-22 09:24:07 --> Output Class Initialized
INFO - 2025-06-22 09:24:07 --> Security Class Initialized
DEBUG - 2025-06-22 09:24:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:24:07 --> Input Class Initialized
INFO - 2025-06-22 09:24:07 --> Language Class Initialized
INFO - 2025-06-22 09:24:07 --> Loader Class Initialized
INFO - 2025-06-22 09:24:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:24:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:24:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:24:07 --> Config Class Initialized
INFO - 2025-06-22 09:24:07 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:24:07 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:24:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:24:07 --> URI Class Initialized
INFO - 2025-06-22 09:24:07 --> Email Class Initialized
INFO - 2025-06-22 09:24:07 --> Router Class Initialized
INFO - 2025-06-22 09:24:07 --> Output Class Initialized
DEBUG - 2025-06-22 09:24:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:24:07 --> Security Class Initialized
DEBUG - 2025-06-22 09:24:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:24:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:24:07 --> Input Class Initialized
INFO - 2025-06-22 09:24:07 --> Controller Class Initialized
INFO - 2025-06-22 09:24:07 --> Language Class Initialized
INFO - 2025-06-22 09:24:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:24:07 --> Form Validation Class Initialized
INFO - 2025-06-22 09:24:07 --> Loader Class Initialized
DEBUG - 2025-06-22 09:24:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:24:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:24:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:24:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:24:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:24:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:24:07 --> Email Class Initialized
DEBUG - 2025-06-22 09:24:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:24:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:24:07 --> Total execution time: 0.0292
INFO - 2025-06-22 09:24:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:24:07 --> Controller Class Initialized
INFO - 2025-06-22 09:24:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:24:07 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:24:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:24:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:24:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:24:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:24:07 --> Total execution time: 0.0532
INFO - 2025-06-22 09:27:14 --> Config Class Initialized
INFO - 2025-06-22 09:27:14 --> Config Class Initialized
INFO - 2025-06-22 09:27:14 --> Hooks Class Initialized
INFO - 2025-06-22 09:27:14 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:27:14 --> UTF-8 Support Enabled
DEBUG - 2025-06-22 09:27:14 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:27:14 --> Utf8 Class Initialized
INFO - 2025-06-22 09:27:14 --> Utf8 Class Initialized
INFO - 2025-06-22 09:27:14 --> URI Class Initialized
INFO - 2025-06-22 09:27:14 --> URI Class Initialized
INFO - 2025-06-22 09:27:14 --> Router Class Initialized
INFO - 2025-06-22 09:27:14 --> Router Class Initialized
INFO - 2025-06-22 09:27:14 --> Output Class Initialized
INFO - 2025-06-22 09:27:14 --> Output Class Initialized
INFO - 2025-06-22 09:27:14 --> Security Class Initialized
INFO - 2025-06-22 09:27:14 --> Security Class Initialized
DEBUG - 2025-06-22 09:27:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-22 09:27:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:27:14 --> Input Class Initialized
INFO - 2025-06-22 09:27:14 --> Input Class Initialized
INFO - 2025-06-22 09:27:14 --> Language Class Initialized
INFO - 2025-06-22 09:27:14 --> Language Class Initialized
INFO - 2025-06-22 09:27:14 --> Loader Class Initialized
INFO - 2025-06-22 09:27:14 --> Helper loaded: url_helper
INFO - 2025-06-22 09:27:14 --> Loader Class Initialized
INFO - 2025-06-22 09:27:14 --> Helper loaded: file_helper
INFO - 2025-06-22 09:27:14 --> Helper loaded: url_helper
INFO - 2025-06-22 09:27:14 --> Helper loaded: file_helper
INFO - 2025-06-22 09:27:14 --> Database Driver Class Initialized
INFO - 2025-06-22 09:27:14 --> Database Driver Class Initialized
INFO - 2025-06-22 09:27:14 --> Email Class Initialized
INFO - 2025-06-22 09:27:14 --> Email Class Initialized
DEBUG - 2025-06-22 09:27:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:27:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:27:14 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:27:14 --> Controller Class Initialized
INFO - 2025-06-22 09:27:14 --> Helper loaded: form_helper
INFO - 2025-06-22 09:27:14 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:27:14 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:27:14 --> Database Driver Class Initialized
INFO - 2025-06-22 09:27:14 --> Model "Crud" initialized
INFO - 2025-06-22 09:27:14 --> Final output sent to browser
DEBUG - 2025-06-22 09:27:14 --> Total execution time: 0.0301
INFO - 2025-06-22 09:27:14 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:27:14 --> Controller Class Initialized
INFO - 2025-06-22 09:27:14 --> Helper loaded: form_helper
INFO - 2025-06-22 09:27:14 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:27:14 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:27:14 --> Database Driver Class Initialized
INFO - 2025-06-22 09:27:14 --> Model "Crud" initialized
INFO - 2025-06-22 09:27:14 --> Final output sent to browser
DEBUG - 2025-06-22 09:27:14 --> Total execution time: 0.0486
INFO - 2025-06-22 09:27:17 --> Config Class Initialized
INFO - 2025-06-22 09:27:17 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:27:17 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:27:17 --> Utf8 Class Initialized
INFO - 2025-06-22 09:27:17 --> URI Class Initialized
INFO - 2025-06-22 09:27:17 --> Router Class Initialized
INFO - 2025-06-22 09:27:17 --> Output Class Initialized
INFO - 2025-06-22 09:27:17 --> Security Class Initialized
DEBUG - 2025-06-22 09:27:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:27:17 --> Input Class Initialized
INFO - 2025-06-22 09:27:17 --> Config Class Initialized
INFO - 2025-06-22 09:27:17 --> Language Class Initialized
INFO - 2025-06-22 09:27:17 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:27:17 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:27:17 --> Loader Class Initialized
INFO - 2025-06-22 09:27:17 --> Utf8 Class Initialized
INFO - 2025-06-22 09:27:17 --> Helper loaded: url_helper
INFO - 2025-06-22 09:27:17 --> URI Class Initialized
INFO - 2025-06-22 09:27:17 --> Helper loaded: file_helper
INFO - 2025-06-22 09:27:17 --> Router Class Initialized
INFO - 2025-06-22 09:27:17 --> Output Class Initialized
INFO - 2025-06-22 09:27:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:27:17 --> Security Class Initialized
DEBUG - 2025-06-22 09:27:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:27:17 --> Input Class Initialized
INFO - 2025-06-22 09:27:17 --> Language Class Initialized
INFO - 2025-06-22 09:27:17 --> Loader Class Initialized
INFO - 2025-06-22 09:27:17 --> Helper loaded: url_helper
INFO - 2025-06-22 09:27:17 --> Helper loaded: file_helper
INFO - 2025-06-22 09:27:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:27:17 --> Email Class Initialized
INFO - 2025-06-22 09:27:17 --> Email Class Initialized
DEBUG - 2025-06-22 09:27:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:27:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:27:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:27:17 --> Controller Class Initialized
INFO - 2025-06-22 09:27:17 --> Helper loaded: form_helper
INFO - 2025-06-22 09:27:17 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:27:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:27:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:27:17 --> Model "Crud" initialized
INFO - 2025-06-22 09:27:17 --> Final output sent to browser
DEBUG - 2025-06-22 09:27:17 --> Total execution time: 0.0131
INFO - 2025-06-22 09:27:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:27:17 --> Controller Class Initialized
INFO - 2025-06-22 09:27:17 --> Helper loaded: form_helper
INFO - 2025-06-22 09:27:17 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:27:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:27:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:27:17 --> Model "Crud" initialized
INFO - 2025-06-22 09:27:17 --> Final output sent to browser
DEBUG - 2025-06-22 09:27:17 --> Total execution time: 0.0236
INFO - 2025-06-22 09:27:27 --> Config Class Initialized
INFO - 2025-06-22 09:27:27 --> Hooks Class Initialized
INFO - 2025-06-22 09:27:27 --> Config Class Initialized
DEBUG - 2025-06-22 09:27:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:27:27 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:27:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:27:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:27:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:27:27 --> URI Class Initialized
INFO - 2025-06-22 09:27:27 --> URI Class Initialized
INFO - 2025-06-22 09:27:27 --> Router Class Initialized
INFO - 2025-06-22 09:27:27 --> Router Class Initialized
INFO - 2025-06-22 09:27:27 --> Output Class Initialized
INFO - 2025-06-22 09:27:27 --> Security Class Initialized
INFO - 2025-06-22 09:27:27 --> Output Class Initialized
DEBUG - 2025-06-22 09:27:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:27:27 --> Security Class Initialized
INFO - 2025-06-22 09:27:27 --> Input Class Initialized
DEBUG - 2025-06-22 09:27:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:27:27 --> Input Class Initialized
INFO - 2025-06-22 09:27:27 --> Language Class Initialized
INFO - 2025-06-22 09:27:27 --> Language Class Initialized
INFO - 2025-06-22 09:27:27 --> Loader Class Initialized
INFO - 2025-06-22 09:27:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:27:27 --> Loader Class Initialized
INFO - 2025-06-22 09:27:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:27:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:27:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:27:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:27:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:27:27 --> Email Class Initialized
INFO - 2025-06-22 09:27:27 --> Email Class Initialized
DEBUG - 2025-06-22 09:27:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:27:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:27:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:27:27 --> Controller Class Initialized
INFO - 2025-06-22 09:27:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:27:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:27:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:27:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:27:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:27:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:27:27 --> Total execution time: 0.0157
INFO - 2025-06-22 09:27:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:27:27 --> Controller Class Initialized
INFO - 2025-06-22 09:27:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:27:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:27:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:27:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:27:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:27:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:27:27 --> Total execution time: 0.0282
INFO - 2025-06-22 09:27:37 --> Config Class Initialized
INFO - 2025-06-22 09:27:37 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:27:37 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:27:37 --> Utf8 Class Initialized
INFO - 2025-06-22 09:27:37 --> URI Class Initialized
INFO - 2025-06-22 09:27:37 --> Config Class Initialized
INFO - 2025-06-22 09:27:37 --> Router Class Initialized
INFO - 2025-06-22 09:27:37 --> Hooks Class Initialized
INFO - 2025-06-22 09:27:37 --> Output Class Initialized
INFO - 2025-06-22 09:27:37 --> Security Class Initialized
DEBUG - 2025-06-22 09:27:37 --> UTF-8 Support Enabled
DEBUG - 2025-06-22 09:27:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:27:37 --> Input Class Initialized
INFO - 2025-06-22 09:27:37 --> Utf8 Class Initialized
INFO - 2025-06-22 09:27:37 --> Language Class Initialized
INFO - 2025-06-22 09:27:37 --> URI Class Initialized
INFO - 2025-06-22 09:27:37 --> Router Class Initialized
INFO - 2025-06-22 09:27:37 --> Loader Class Initialized
INFO - 2025-06-22 09:27:37 --> Output Class Initialized
INFO - 2025-06-22 09:27:37 --> Helper loaded: url_helper
INFO - 2025-06-22 09:27:37 --> Security Class Initialized
INFO - 2025-06-22 09:27:37 --> Helper loaded: file_helper
DEBUG - 2025-06-22 09:27:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:27:37 --> Input Class Initialized
INFO - 2025-06-22 09:27:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:27:37 --> Language Class Initialized
INFO - 2025-06-22 09:27:37 --> Loader Class Initialized
INFO - 2025-06-22 09:27:37 --> Helper loaded: url_helper
INFO - 2025-06-22 09:27:37 --> Helper loaded: file_helper
INFO - 2025-06-22 09:27:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:27:37 --> Email Class Initialized
INFO - 2025-06-22 09:27:37 --> Email Class Initialized
DEBUG - 2025-06-22 09:27:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:27:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:27:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:27:37 --> Controller Class Initialized
INFO - 2025-06-22 09:27:37 --> Helper loaded: form_helper
INFO - 2025-06-22 09:27:37 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:27:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:27:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:27:37 --> Model "Crud" initialized
INFO - 2025-06-22 09:27:37 --> Final output sent to browser
DEBUG - 2025-06-22 09:27:37 --> Total execution time: 0.0152
INFO - 2025-06-22 09:27:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:27:37 --> Controller Class Initialized
INFO - 2025-06-22 09:27:37 --> Helper loaded: form_helper
INFO - 2025-06-22 09:27:37 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:27:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:27:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:27:37 --> Model "Crud" initialized
INFO - 2025-06-22 09:27:37 --> Final output sent to browser
DEBUG - 2025-06-22 09:27:37 --> Total execution time: 0.0270
INFO - 2025-06-22 09:27:47 --> Config Class Initialized
INFO - 2025-06-22 09:27:47 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:27:47 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:27:47 --> Utf8 Class Initialized
INFO - 2025-06-22 09:27:47 --> URI Class Initialized
INFO - 2025-06-22 09:27:47 --> Config Class Initialized
INFO - 2025-06-22 09:27:47 --> Hooks Class Initialized
INFO - 2025-06-22 09:27:47 --> Router Class Initialized
INFO - 2025-06-22 09:27:47 --> Output Class Initialized
DEBUG - 2025-06-22 09:27:47 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:27:47 --> Security Class Initialized
INFO - 2025-06-22 09:27:47 --> Utf8 Class Initialized
DEBUG - 2025-06-22 09:27:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:27:47 --> Input Class Initialized
INFO - 2025-06-22 09:27:47 --> URI Class Initialized
INFO - 2025-06-22 09:27:47 --> Language Class Initialized
INFO - 2025-06-22 09:27:47 --> Router Class Initialized
INFO - 2025-06-22 09:27:47 --> Output Class Initialized
INFO - 2025-06-22 09:27:47 --> Loader Class Initialized
INFO - 2025-06-22 09:27:47 --> Security Class Initialized
INFO - 2025-06-22 09:27:47 --> Helper loaded: url_helper
DEBUG - 2025-06-22 09:27:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:27:47 --> Helper loaded: file_helper
INFO - 2025-06-22 09:27:47 --> Input Class Initialized
INFO - 2025-06-22 09:27:47 --> Language Class Initialized
INFO - 2025-06-22 09:27:47 --> Loader Class Initialized
INFO - 2025-06-22 09:27:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:27:47 --> Helper loaded: url_helper
INFO - 2025-06-22 09:27:47 --> Helper loaded: file_helper
INFO - 2025-06-22 09:27:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:27:47 --> Email Class Initialized
INFO - 2025-06-22 09:27:47 --> Email Class Initialized
DEBUG - 2025-06-22 09:27:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:27:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:27:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:27:47 --> Controller Class Initialized
INFO - 2025-06-22 09:27:47 --> Helper loaded: form_helper
INFO - 2025-06-22 09:27:47 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:27:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:27:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:27:47 --> Model "Crud" initialized
INFO - 2025-06-22 09:27:47 --> Final output sent to browser
DEBUG - 2025-06-22 09:27:47 --> Total execution time: 0.0146
INFO - 2025-06-22 09:27:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:27:47 --> Controller Class Initialized
INFO - 2025-06-22 09:27:47 --> Helper loaded: form_helper
INFO - 2025-06-22 09:27:47 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:27:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:27:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:27:47 --> Model "Crud" initialized
INFO - 2025-06-22 09:27:47 --> Final output sent to browser
DEBUG - 2025-06-22 09:27:47 --> Total execution time: 0.0254
INFO - 2025-06-22 09:27:57 --> Config Class Initialized
INFO - 2025-06-22 09:27:57 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:27:57 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:27:57 --> Utf8 Class Initialized
INFO - 2025-06-22 09:27:57 --> URI Class Initialized
INFO - 2025-06-22 09:27:57 --> Router Class Initialized
INFO - 2025-06-22 09:27:57 --> Output Class Initialized
INFO - 2025-06-22 09:27:57 --> Security Class Initialized
DEBUG - 2025-06-22 09:27:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:27:57 --> Input Class Initialized
INFO - 2025-06-22 09:27:57 --> Language Class Initialized
INFO - 2025-06-22 09:27:57 --> Loader Class Initialized
INFO - 2025-06-22 09:27:57 --> Helper loaded: url_helper
INFO - 2025-06-22 09:27:57 --> Helper loaded: file_helper
INFO - 2025-06-22 09:27:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:27:57 --> Config Class Initialized
INFO - 2025-06-22 09:27:57 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:27:57 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:27:57 --> Utf8 Class Initialized
INFO - 2025-06-22 09:27:57 --> URI Class Initialized
INFO - 2025-06-22 09:27:57 --> Router Class Initialized
INFO - 2025-06-22 09:27:57 --> Output Class Initialized
INFO - 2025-06-22 09:27:57 --> Security Class Initialized
DEBUG - 2025-06-22 09:27:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:27:57 --> Input Class Initialized
INFO - 2025-06-22 09:27:57 --> Email Class Initialized
INFO - 2025-06-22 09:27:57 --> Language Class Initialized
DEBUG - 2025-06-22 09:27:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:27:57 --> Loader Class Initialized
INFO - 2025-06-22 09:27:57 --> Helper loaded: url_helper
INFO - 2025-06-22 09:27:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:27:57 --> Helper loaded: file_helper
INFO - 2025-06-22 09:27:57 --> Controller Class Initialized
INFO - 2025-06-22 09:27:57 --> Helper loaded: form_helper
INFO - 2025-06-22 09:27:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:27:57 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:27:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:27:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:27:57 --> Model "Crud" initialized
INFO - 2025-06-22 09:27:57 --> Email Class Initialized
DEBUG - 2025-06-22 09:27:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:27:57 --> Final output sent to browser
DEBUG - 2025-06-22 09:27:57 --> Total execution time: 0.0150
INFO - 2025-06-22 09:27:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:27:57 --> Controller Class Initialized
INFO - 2025-06-22 09:27:57 --> Helper loaded: form_helper
INFO - 2025-06-22 09:27:57 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:27:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:27:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:27:57 --> Model "Crud" initialized
INFO - 2025-06-22 09:27:57 --> Final output sent to browser
DEBUG - 2025-06-22 09:27:57 --> Total execution time: 0.0253
INFO - 2025-06-22 09:28:07 --> Config Class Initialized
INFO - 2025-06-22 09:28:07 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:28:07 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:28:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:28:07 --> Config Class Initialized
INFO - 2025-06-22 09:28:07 --> URI Class Initialized
INFO - 2025-06-22 09:28:07 --> Hooks Class Initialized
INFO - 2025-06-22 09:28:07 --> Router Class Initialized
DEBUG - 2025-06-22 09:28:07 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:28:07 --> Output Class Initialized
INFO - 2025-06-22 09:28:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:28:07 --> Security Class Initialized
INFO - 2025-06-22 09:28:07 --> URI Class Initialized
DEBUG - 2025-06-22 09:28:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:28:07 --> Input Class Initialized
INFO - 2025-06-22 09:28:07 --> Router Class Initialized
INFO - 2025-06-22 09:28:07 --> Language Class Initialized
INFO - 2025-06-22 09:28:07 --> Output Class Initialized
INFO - 2025-06-22 09:28:07 --> Security Class Initialized
INFO - 2025-06-22 09:28:07 --> Loader Class Initialized
DEBUG - 2025-06-22 09:28:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:28:07 --> Input Class Initialized
INFO - 2025-06-22 09:28:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:28:07 --> Language Class Initialized
INFO - 2025-06-22 09:28:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:28:07 --> Loader Class Initialized
INFO - 2025-06-22 09:28:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:28:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:28:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:07 --> Email Class Initialized
DEBUG - 2025-06-22 09:28:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:28:07 --> Email Class Initialized
INFO - 2025-06-22 09:28:07 --> Session: Class initialized using 'files' driver.
DEBUG - 2025-06-22 09:28:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:28:07 --> Controller Class Initialized
INFO - 2025-06-22 09:28:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:28:07 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:28:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:28:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:28:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:28:07 --> Total execution time: 0.0151
INFO - 2025-06-22 09:28:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:28:07 --> Controller Class Initialized
INFO - 2025-06-22 09:28:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:28:07 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:28:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:28:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:28:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:28:07 --> Total execution time: 0.0267
INFO - 2025-06-22 09:28:17 --> Config Class Initialized
INFO - 2025-06-22 09:28:17 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:28:17 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:28:17 --> Utf8 Class Initialized
INFO - 2025-06-22 09:28:17 --> Config Class Initialized
INFO - 2025-06-22 09:28:17 --> Hooks Class Initialized
INFO - 2025-06-22 09:28:17 --> URI Class Initialized
DEBUG - 2025-06-22 09:28:17 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:28:17 --> Utf8 Class Initialized
INFO - 2025-06-22 09:28:17 --> Router Class Initialized
INFO - 2025-06-22 09:28:17 --> URI Class Initialized
INFO - 2025-06-22 09:28:17 --> Output Class Initialized
INFO - 2025-06-22 09:28:17 --> Router Class Initialized
INFO - 2025-06-22 09:28:17 --> Security Class Initialized
INFO - 2025-06-22 09:28:17 --> Output Class Initialized
DEBUG - 2025-06-22 09:28:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:28:17 --> Security Class Initialized
INFO - 2025-06-22 09:28:17 --> Input Class Initialized
DEBUG - 2025-06-22 09:28:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:28:17 --> Language Class Initialized
INFO - 2025-06-22 09:28:17 --> Input Class Initialized
INFO - 2025-06-22 09:28:17 --> Language Class Initialized
INFO - 2025-06-22 09:28:17 --> Loader Class Initialized
INFO - 2025-06-22 09:28:17 --> Loader Class Initialized
INFO - 2025-06-22 09:28:17 --> Helper loaded: url_helper
INFO - 2025-06-22 09:28:17 --> Helper loaded: url_helper
INFO - 2025-06-22 09:28:17 --> Helper loaded: file_helper
INFO - 2025-06-22 09:28:17 --> Helper loaded: file_helper
INFO - 2025-06-22 09:28:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:17 --> Email Class Initialized
INFO - 2025-06-22 09:28:17 --> Email Class Initialized
DEBUG - 2025-06-22 09:28:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:28:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:28:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:28:17 --> Controller Class Initialized
INFO - 2025-06-22 09:28:17 --> Helper loaded: form_helper
INFO - 2025-06-22 09:28:17 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:28:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:28:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:17 --> Model "Crud" initialized
INFO - 2025-06-22 09:28:17 --> Final output sent to browser
DEBUG - 2025-06-22 09:28:17 --> Total execution time: 0.0142
INFO - 2025-06-22 09:28:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:28:17 --> Controller Class Initialized
INFO - 2025-06-22 09:28:17 --> Helper loaded: form_helper
INFO - 2025-06-22 09:28:17 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:28:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:28:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:17 --> Model "Crud" initialized
INFO - 2025-06-22 09:28:17 --> Final output sent to browser
DEBUG - 2025-06-22 09:28:17 --> Total execution time: 0.0252
INFO - 2025-06-22 09:28:27 --> Config Class Initialized
INFO - 2025-06-22 09:28:27 --> Config Class Initialized
INFO - 2025-06-22 09:28:27 --> Hooks Class Initialized
INFO - 2025-06-22 09:28:27 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:28:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:28:27 --> Utf8 Class Initialized
DEBUG - 2025-06-22 09:28:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:28:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:28:27 --> URI Class Initialized
INFO - 2025-06-22 09:28:27 --> URI Class Initialized
INFO - 2025-06-22 09:28:27 --> Router Class Initialized
INFO - 2025-06-22 09:28:27 --> Router Class Initialized
INFO - 2025-06-22 09:28:27 --> Output Class Initialized
INFO - 2025-06-22 09:28:27 --> Output Class Initialized
INFO - 2025-06-22 09:28:27 --> Security Class Initialized
INFO - 2025-06-22 09:28:27 --> Security Class Initialized
DEBUG - 2025-06-22 09:28:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-22 09:28:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:28:27 --> Input Class Initialized
INFO - 2025-06-22 09:28:27 --> Input Class Initialized
INFO - 2025-06-22 09:28:27 --> Language Class Initialized
INFO - 2025-06-22 09:28:27 --> Language Class Initialized
INFO - 2025-06-22 09:28:27 --> Loader Class Initialized
INFO - 2025-06-22 09:28:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:28:27 --> Loader Class Initialized
INFO - 2025-06-22 09:28:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:28:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:28:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:28:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:27 --> Email Class Initialized
INFO - 2025-06-22 09:28:27 --> Email Class Initialized
DEBUG - 2025-06-22 09:28:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:28:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:28:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:28:27 --> Controller Class Initialized
INFO - 2025-06-22 09:28:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:28:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:28:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:28:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:28:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:28:27 --> Total execution time: 0.0159
INFO - 2025-06-22 09:28:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:28:27 --> Controller Class Initialized
INFO - 2025-06-22 09:28:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:28:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:28:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:28:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:28:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:28:27 --> Total execution time: 0.0290
INFO - 2025-06-22 09:28:37 --> Config Class Initialized
INFO - 2025-06-22 09:28:37 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:28:37 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:28:37 --> Utf8 Class Initialized
INFO - 2025-06-22 09:28:37 --> URI Class Initialized
INFO - 2025-06-22 09:28:37 --> Router Class Initialized
INFO - 2025-06-22 09:28:37 --> Output Class Initialized
INFO - 2025-06-22 09:28:37 --> Security Class Initialized
DEBUG - 2025-06-22 09:28:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:28:37 --> Input Class Initialized
INFO - 2025-06-22 09:28:37 --> Language Class Initialized
INFO - 2025-06-22 09:28:37 --> Loader Class Initialized
INFO - 2025-06-22 09:28:37 --> Helper loaded: url_helper
INFO - 2025-06-22 09:28:37 --> Helper loaded: file_helper
INFO - 2025-06-22 09:28:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:37 --> Email Class Initialized
DEBUG - 2025-06-22 09:28:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:28:37 --> Config Class Initialized
INFO - 2025-06-22 09:28:37 --> Hooks Class Initialized
INFO - 2025-06-22 09:28:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:28:37 --> Controller Class Initialized
DEBUG - 2025-06-22 09:28:37 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:28:37 --> Helper loaded: form_helper
INFO - 2025-06-22 09:28:37 --> Utf8 Class Initialized
INFO - 2025-06-22 09:28:37 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:28:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:28:37 --> URI Class Initialized
INFO - 2025-06-22 09:28:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:37 --> Router Class Initialized
INFO - 2025-06-22 09:28:37 --> Output Class Initialized
INFO - 2025-06-22 09:28:37 --> Security Class Initialized
DEBUG - 2025-06-22 09:28:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:28:37 --> Input Class Initialized
INFO - 2025-06-22 09:28:37 --> Language Class Initialized
INFO - 2025-06-22 09:28:37 --> Loader Class Initialized
INFO - 2025-06-22 09:28:37 --> Helper loaded: url_helper
INFO - 2025-06-22 09:28:37 --> Helper loaded: file_helper
INFO - 2025-06-22 09:28:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:37 --> Model "Crud" initialized
INFO - 2025-06-22 09:28:37 --> Email Class Initialized
DEBUG - 2025-06-22 09:28:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:28:37 --> Final output sent to browser
DEBUG - 2025-06-22 09:28:37 --> Total execution time: 0.0172
INFO - 2025-06-22 09:28:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:28:37 --> Controller Class Initialized
INFO - 2025-06-22 09:28:37 --> Helper loaded: form_helper
INFO - 2025-06-22 09:28:37 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:28:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:28:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:37 --> Model "Crud" initialized
INFO - 2025-06-22 09:28:37 --> Final output sent to browser
DEBUG - 2025-06-22 09:28:37 --> Total execution time: 0.0273
INFO - 2025-06-22 09:28:52 --> Config Class Initialized
INFO - 2025-06-22 09:28:52 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:28:52 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:28:52 --> Utf8 Class Initialized
INFO - 2025-06-22 09:28:52 --> URI Class Initialized
INFO - 2025-06-22 09:28:52 --> Router Class Initialized
INFO - 2025-06-22 09:28:52 --> Output Class Initialized
INFO - 2025-06-22 09:28:52 --> Security Class Initialized
DEBUG - 2025-06-22 09:28:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:28:52 --> Config Class Initialized
INFO - 2025-06-22 09:28:52 --> Input Class Initialized
INFO - 2025-06-22 09:28:52 --> Hooks Class Initialized
INFO - 2025-06-22 09:28:52 --> Language Class Initialized
DEBUG - 2025-06-22 09:28:52 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:28:52 --> Loader Class Initialized
INFO - 2025-06-22 09:28:52 --> Utf8 Class Initialized
INFO - 2025-06-22 09:28:52 --> Helper loaded: url_helper
INFO - 2025-06-22 09:28:52 --> Helper loaded: file_helper
INFO - 2025-06-22 09:28:52 --> URI Class Initialized
INFO - 2025-06-22 09:28:52 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:52 --> Router Class Initialized
INFO - 2025-06-22 09:28:52 --> Output Class Initialized
INFO - 2025-06-22 09:28:52 --> Security Class Initialized
DEBUG - 2025-06-22 09:28:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:28:52 --> Input Class Initialized
INFO - 2025-06-22 09:28:52 --> Language Class Initialized
INFO - 2025-06-22 09:28:52 --> Loader Class Initialized
INFO - 2025-06-22 09:28:52 --> Helper loaded: url_helper
INFO - 2025-06-22 09:28:52 --> Helper loaded: file_helper
INFO - 2025-06-22 09:28:52 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:52 --> Email Class Initialized
DEBUG - 2025-06-22 09:28:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:28:52 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:28:52 --> Controller Class Initialized
INFO - 2025-06-22 09:28:52 --> Helper loaded: form_helper
INFO - 2025-06-22 09:28:52 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:28:52 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:28:52 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:52 --> Model "Crud" initialized
INFO - 2025-06-22 09:28:52 --> Email Class Initialized
DEBUG - 2025-06-22 09:28:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:28:52 --> Final output sent to browser
DEBUG - 2025-06-22 09:28:52 --> Total execution time: 0.0277
INFO - 2025-06-22 09:28:52 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:28:52 --> Controller Class Initialized
INFO - 2025-06-22 09:28:52 --> Helper loaded: form_helper
INFO - 2025-06-22 09:28:52 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:28:52 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:28:52 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:52 --> Model "Crud" initialized
INFO - 2025-06-22 09:28:52 --> Final output sent to browser
DEBUG - 2025-06-22 09:28:52 --> Total execution time: 0.0480
INFO - 2025-06-22 09:28:54 --> Config Class Initialized
INFO - 2025-06-22 09:28:54 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:28:54 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:28:54 --> Utf8 Class Initialized
INFO - 2025-06-22 09:28:54 --> URI Class Initialized
INFO - 2025-06-22 09:28:54 --> Router Class Initialized
INFO - 2025-06-22 09:28:54 --> Output Class Initialized
INFO - 2025-06-22 09:28:54 --> Security Class Initialized
DEBUG - 2025-06-22 09:28:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:28:54 --> Input Class Initialized
INFO - 2025-06-22 09:28:54 --> Language Class Initialized
INFO - 2025-06-22 09:28:54 --> Loader Class Initialized
INFO - 2025-06-22 09:28:54 --> Helper loaded: url_helper
INFO - 2025-06-22 09:28:54 --> Helper loaded: file_helper
INFO - 2025-06-22 09:28:54 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:54 --> Email Class Initialized
DEBUG - 2025-06-22 09:28:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:28:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:28:54 --> Controller Class Initialized
INFO - 2025-06-22 09:28:54 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:28:54 --> Helper loaded: form_helper
INFO - 2025-06-22 09:28:54 --> Form Validation Class Initialized
INFO - 2025-06-22 09:28:54 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:54 --> Model "Crud" initialized
INFO - 2025-06-22 09:28:54 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:28:54 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:28:54 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:28:54 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:28:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:28:54 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-22 09:28:54 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/master-form-test.php
INFO - 2025-06-22 09:28:54 --> Final output sent to browser
DEBUG - 2025-06-22 09:28:54 --> Total execution time: 0.0104
INFO - 2025-06-22 09:28:54 --> Config Class Initialized
INFO - 2025-06-22 09:28:54 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:28:54 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:28:54 --> Utf8 Class Initialized
INFO - 2025-06-22 09:28:54 --> URI Class Initialized
INFO - 2025-06-22 09:28:54 --> Router Class Initialized
INFO - 2025-06-22 09:28:54 --> Output Class Initialized
INFO - 2025-06-22 09:28:54 --> Security Class Initialized
DEBUG - 2025-06-22 09:28:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:28:54 --> Input Class Initialized
INFO - 2025-06-22 09:28:54 --> Language Class Initialized
INFO - 2025-06-22 09:28:54 --> Loader Class Initialized
INFO - 2025-06-22 09:28:54 --> Helper loaded: url_helper
INFO - 2025-06-22 09:28:54 --> Helper loaded: file_helper
INFO - 2025-06-22 09:28:54 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:54 --> Email Class Initialized
DEBUG - 2025-06-22 09:28:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:28:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:28:54 --> Controller Class Initialized
INFO - 2025-06-22 09:28:54 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:28:54 --> Helper loaded: form_helper
INFO - 2025-06-22 09:28:54 --> Form Validation Class Initialized
INFO - 2025-06-22 09:28:54 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:54 --> Model "Crud" initialized
INFO - 2025-06-22 09:28:54 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:28:54 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:28:54 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:28:54 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:28:54 --> Session class already loaded. Second attempt ignored.
ERROR - 2025-06-22 09:28:54 --> Query error: Illegal mix of collations (utf8mb4_0900_ai_ci,IMPLICIT) and (utf8mb3_general_ci,COERCIBLE) for operation '=' - Invalid query: SELECT a.* FROM setting_users a JOIN users b ON a.users_id = b.username WHERE a.menus_id='‚ZjXì' and b.username='admin'
INFO - 2025-06-22 09:28:54 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-22 09:28:55 --> Config Class Initialized
INFO - 2025-06-22 09:28:55 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:28:55 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:28:55 --> Utf8 Class Initialized
INFO - 2025-06-22 09:28:55 --> URI Class Initialized
INFO - 2025-06-22 09:28:55 --> Router Class Initialized
INFO - 2025-06-22 09:28:55 --> Output Class Initialized
INFO - 2025-06-22 09:28:55 --> Security Class Initialized
DEBUG - 2025-06-22 09:28:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:28:55 --> Input Class Initialized
INFO - 2025-06-22 09:28:55 --> Language Class Initialized
INFO - 2025-06-22 09:28:55 --> Loader Class Initialized
INFO - 2025-06-22 09:28:55 --> Helper loaded: url_helper
INFO - 2025-06-22 09:28:55 --> Helper loaded: file_helper
INFO - 2025-06-22 09:28:55 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:55 --> Email Class Initialized
DEBUG - 2025-06-22 09:28:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:28:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:28:55 --> Controller Class Initialized
INFO - 2025-06-22 09:28:55 --> Helper loaded: form_helper
INFO - 2025-06-22 09:28:55 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:28:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:28:55 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:55 --> Model "Crud" initialized
INFO - 2025-06-22 09:28:55 --> Final output sent to browser
DEBUG - 2025-06-22 09:28:55 --> Total execution time: 0.0129
INFO - 2025-06-22 09:28:55 --> Config Class Initialized
INFO - 2025-06-22 09:28:55 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:28:55 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:28:55 --> Utf8 Class Initialized
INFO - 2025-06-22 09:28:55 --> URI Class Initialized
INFO - 2025-06-22 09:28:55 --> Router Class Initialized
INFO - 2025-06-22 09:28:55 --> Output Class Initialized
INFO - 2025-06-22 09:28:55 --> Security Class Initialized
DEBUG - 2025-06-22 09:28:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:28:55 --> Input Class Initialized
INFO - 2025-06-22 09:28:55 --> Language Class Initialized
INFO - 2025-06-22 09:28:55 --> Loader Class Initialized
INFO - 2025-06-22 09:28:55 --> Helper loaded: url_helper
INFO - 2025-06-22 09:28:55 --> Helper loaded: file_helper
INFO - 2025-06-22 09:28:55 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:55 --> Email Class Initialized
DEBUG - 2025-06-22 09:28:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:28:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:28:55 --> Controller Class Initialized
INFO - 2025-06-22 09:28:55 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:28:55 --> Helper loaded: form_helper
INFO - 2025-06-22 09:28:55 --> Form Validation Class Initialized
INFO - 2025-06-22 09:28:55 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:55 --> Model "Crud" initialized
INFO - 2025-06-22 09:28:55 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:28:55 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:28:55 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:28:55 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:28:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:28:55 --> Final output sent to browser
DEBUG - 2025-06-22 09:28:55 --> Total execution time: 0.0132
INFO - 2025-06-22 09:28:55 --> Config Class Initialized
INFO - 2025-06-22 09:28:55 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:28:55 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:28:55 --> Utf8 Class Initialized
INFO - 2025-06-22 09:28:55 --> URI Class Initialized
INFO - 2025-06-22 09:28:55 --> Router Class Initialized
INFO - 2025-06-22 09:28:55 --> Output Class Initialized
INFO - 2025-06-22 09:28:55 --> Security Class Initialized
DEBUG - 2025-06-22 09:28:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:28:55 --> Input Class Initialized
INFO - 2025-06-22 09:28:55 --> Language Class Initialized
INFO - 2025-06-22 09:28:55 --> Loader Class Initialized
INFO - 2025-06-22 09:28:55 --> Helper loaded: url_helper
INFO - 2025-06-22 09:28:55 --> Helper loaded: file_helper
INFO - 2025-06-22 09:28:55 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:55 --> Email Class Initialized
DEBUG - 2025-06-22 09:28:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:28:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:28:55 --> Controller Class Initialized
INFO - 2025-06-22 09:28:55 --> Helper loaded: form_helper
INFO - 2025-06-22 09:28:55 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:28:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:28:55 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:55 --> Model "Crud" initialized
INFO - 2025-06-22 09:28:55 --> Final output sent to browser
DEBUG - 2025-06-22 09:28:55 --> Total execution time: 0.0925
INFO - 2025-06-22 09:28:55 --> Config Class Initialized
INFO - 2025-06-22 09:28:55 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:28:55 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:28:55 --> Utf8 Class Initialized
INFO - 2025-06-22 09:28:55 --> URI Class Initialized
INFO - 2025-06-22 09:28:55 --> Router Class Initialized
INFO - 2025-06-22 09:28:55 --> Output Class Initialized
INFO - 2025-06-22 09:28:55 --> Security Class Initialized
DEBUG - 2025-06-22 09:28:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:28:55 --> Input Class Initialized
INFO - 2025-06-22 09:28:55 --> Language Class Initialized
INFO - 2025-06-22 09:28:55 --> Loader Class Initialized
INFO - 2025-06-22 09:28:55 --> Helper loaded: url_helper
INFO - 2025-06-22 09:28:55 --> Helper loaded: file_helper
INFO - 2025-06-22 09:28:55 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:55 --> Email Class Initialized
DEBUG - 2025-06-22 09:28:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:28:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:28:55 --> Controller Class Initialized
INFO - 2025-06-22 09:28:55 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:28:55 --> Helper loaded: form_helper
INFO - 2025-06-22 09:28:55 --> Form Validation Class Initialized
INFO - 2025-06-22 09:28:55 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:55 --> Model "Crud" initialized
INFO - 2025-06-22 09:28:55 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:28:55 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:28:55 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:28:55 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:28:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:28:55 --> Final output sent to browser
DEBUG - 2025-06-22 09:28:55 --> Total execution time: 0.0296
INFO - 2025-06-22 09:28:57 --> Config Class Initialized
INFO - 2025-06-22 09:28:57 --> Hooks Class Initialized
INFO - 2025-06-22 09:28:57 --> Config Class Initialized
INFO - 2025-06-22 09:28:57 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:28:57 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:28:57 --> Utf8 Class Initialized
DEBUG - 2025-06-22 09:28:57 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:28:57 --> Utf8 Class Initialized
INFO - 2025-06-22 09:28:57 --> URI Class Initialized
INFO - 2025-06-22 09:28:57 --> URI Class Initialized
INFO - 2025-06-22 09:28:57 --> Router Class Initialized
INFO - 2025-06-22 09:28:57 --> Router Class Initialized
INFO - 2025-06-22 09:28:57 --> Output Class Initialized
INFO - 2025-06-22 09:28:57 --> Output Class Initialized
INFO - 2025-06-22 09:28:57 --> Security Class Initialized
INFO - 2025-06-22 09:28:57 --> Security Class Initialized
DEBUG - 2025-06-22 09:28:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-22 09:28:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:28:57 --> Input Class Initialized
INFO - 2025-06-22 09:28:57 --> Input Class Initialized
INFO - 2025-06-22 09:28:57 --> Language Class Initialized
INFO - 2025-06-22 09:28:57 --> Language Class Initialized
INFO - 2025-06-22 09:28:57 --> Loader Class Initialized
INFO - 2025-06-22 09:28:57 --> Loader Class Initialized
INFO - 2025-06-22 09:28:57 --> Helper loaded: url_helper
INFO - 2025-06-22 09:28:57 --> Helper loaded: url_helper
INFO - 2025-06-22 09:28:57 --> Helper loaded: file_helper
INFO - 2025-06-22 09:28:57 --> Helper loaded: file_helper
INFO - 2025-06-22 09:28:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:57 --> Email Class Initialized
INFO - 2025-06-22 09:28:57 --> Email Class Initialized
DEBUG - 2025-06-22 09:28:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:28:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:28:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:28:57 --> Controller Class Initialized
INFO - 2025-06-22 09:28:57 --> Helper loaded: form_helper
INFO - 2025-06-22 09:28:57 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:28:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:28:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:57 --> Model "Crud" initialized
INFO - 2025-06-22 09:28:57 --> Final output sent to browser
DEBUG - 2025-06-22 09:28:57 --> Total execution time: 0.0160
INFO - 2025-06-22 09:28:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:28:57 --> Controller Class Initialized
INFO - 2025-06-22 09:28:57 --> Helper loaded: form_helper
INFO - 2025-06-22 09:28:57 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:28:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:28:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:28:57 --> Model "Crud" initialized
INFO - 2025-06-22 09:28:57 --> Final output sent to browser
DEBUG - 2025-06-22 09:28:57 --> Total execution time: 0.0279
INFO - 2025-06-22 09:29:05 --> Config Class Initialized
INFO - 2025-06-22 09:29:05 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:29:05 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:29:05 --> Utf8 Class Initialized
INFO - 2025-06-22 09:29:05 --> URI Class Initialized
INFO - 2025-06-22 09:29:05 --> Router Class Initialized
INFO - 2025-06-22 09:29:05 --> Output Class Initialized
INFO - 2025-06-22 09:29:05 --> Security Class Initialized
DEBUG - 2025-06-22 09:29:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:29:05 --> Input Class Initialized
INFO - 2025-06-22 09:29:05 --> Language Class Initialized
INFO - 2025-06-22 09:29:05 --> Loader Class Initialized
INFO - 2025-06-22 09:29:05 --> Helper loaded: url_helper
INFO - 2025-06-22 09:29:05 --> Helper loaded: file_helper
INFO - 2025-06-22 09:29:05 --> Database Driver Class Initialized
INFO - 2025-06-22 09:29:05 --> Email Class Initialized
DEBUG - 2025-06-22 09:29:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:29:05 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:29:05 --> Controller Class Initialized
INFO - 2025-06-22 09:29:05 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:29:05 --> Helper loaded: form_helper
INFO - 2025-06-22 09:29:05 --> Form Validation Class Initialized
INFO - 2025-06-22 09:29:05 --> Database Driver Class Initialized
INFO - 2025-06-22 09:29:05 --> Model "Crud" initialized
INFO - 2025-06-22 09:29:05 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:29:05 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:29:05 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:29:05 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:29:05 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:29:05 --> Final output sent to browser
DEBUG - 2025-06-22 09:29:05 --> Total execution time: 0.0102
INFO - 2025-06-22 09:29:07 --> Config Class Initialized
INFO - 2025-06-22 09:29:07 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:29:07 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:29:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:29:07 --> URI Class Initialized
INFO - 2025-06-22 09:29:07 --> Router Class Initialized
INFO - 2025-06-22 09:29:07 --> Output Class Initialized
INFO - 2025-06-22 09:29:07 --> Security Class Initialized
DEBUG - 2025-06-22 09:29:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:29:07 --> Input Class Initialized
INFO - 2025-06-22 09:29:07 --> Language Class Initialized
INFO - 2025-06-22 09:29:07 --> Loader Class Initialized
INFO - 2025-06-22 09:29:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:29:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:29:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:29:07 --> Config Class Initialized
INFO - 2025-06-22 09:29:07 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:29:07 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:29:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:29:07 --> URI Class Initialized
INFO - 2025-06-22 09:29:07 --> Router Class Initialized
INFO - 2025-06-22 09:29:07 --> Output Class Initialized
INFO - 2025-06-22 09:29:07 --> Security Class Initialized
DEBUG - 2025-06-22 09:29:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:29:07 --> Input Class Initialized
INFO - 2025-06-22 09:29:07 --> Language Class Initialized
INFO - 2025-06-22 09:29:07 --> Loader Class Initialized
INFO - 2025-06-22 09:29:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:29:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:29:07 --> Email Class Initialized
INFO - 2025-06-22 09:29:07 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:29:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:29:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:29:07 --> Controller Class Initialized
INFO - 2025-06-22 09:29:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:29:07 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:29:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:29:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:29:07 --> Email Class Initialized
DEBUG - 2025-06-22 09:29:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:29:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:29:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:29:07 --> Total execution time: 0.0141
INFO - 2025-06-22 09:29:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:29:07 --> Controller Class Initialized
INFO - 2025-06-22 09:29:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:29:07 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:29:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:29:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:29:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:29:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:29:07 --> Total execution time: 0.0238
INFO - 2025-06-22 09:29:17 --> Config Class Initialized
INFO - 2025-06-22 09:29:17 --> Config Class Initialized
INFO - 2025-06-22 09:29:17 --> Hooks Class Initialized
INFO - 2025-06-22 09:29:17 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:29:17 --> UTF-8 Support Enabled
DEBUG - 2025-06-22 09:29:17 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:29:17 --> Utf8 Class Initialized
INFO - 2025-06-22 09:29:17 --> Utf8 Class Initialized
INFO - 2025-06-22 09:29:17 --> URI Class Initialized
INFO - 2025-06-22 09:29:17 --> URI Class Initialized
INFO - 2025-06-22 09:29:17 --> Router Class Initialized
INFO - 2025-06-22 09:29:17 --> Router Class Initialized
INFO - 2025-06-22 09:29:17 --> Output Class Initialized
INFO - 2025-06-22 09:29:17 --> Output Class Initialized
INFO - 2025-06-22 09:29:17 --> Security Class Initialized
INFO - 2025-06-22 09:29:17 --> Security Class Initialized
DEBUG - 2025-06-22 09:29:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-22 09:29:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:29:17 --> Input Class Initialized
INFO - 2025-06-22 09:29:17 --> Input Class Initialized
INFO - 2025-06-22 09:29:17 --> Language Class Initialized
INFO - 2025-06-22 09:29:17 --> Language Class Initialized
INFO - 2025-06-22 09:29:17 --> Loader Class Initialized
INFO - 2025-06-22 09:29:17 --> Loader Class Initialized
INFO - 2025-06-22 09:29:17 --> Helper loaded: url_helper
INFO - 2025-06-22 09:29:17 --> Helper loaded: file_helper
INFO - 2025-06-22 09:29:17 --> Helper loaded: url_helper
INFO - 2025-06-22 09:29:17 --> Helper loaded: file_helper
INFO - 2025-06-22 09:29:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:29:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:29:17 --> Email Class Initialized
INFO - 2025-06-22 09:29:17 --> Email Class Initialized
DEBUG - 2025-06-22 09:29:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:29:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:29:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:29:17 --> Controller Class Initialized
INFO - 2025-06-22 09:29:17 --> Helper loaded: form_helper
INFO - 2025-06-22 09:29:17 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:29:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:29:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:29:17 --> Model "Crud" initialized
INFO - 2025-06-22 09:29:17 --> Final output sent to browser
DEBUG - 2025-06-22 09:29:17 --> Total execution time: 0.0167
INFO - 2025-06-22 09:29:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:29:17 --> Controller Class Initialized
INFO - 2025-06-22 09:29:17 --> Helper loaded: form_helper
INFO - 2025-06-22 09:29:17 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:29:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:29:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:29:17 --> Model "Crud" initialized
INFO - 2025-06-22 09:29:17 --> Final output sent to browser
DEBUG - 2025-06-22 09:29:17 --> Total execution time: 0.0301
INFO - 2025-06-22 09:30:59 --> Config Class Initialized
INFO - 2025-06-22 09:30:59 --> Config Class Initialized
INFO - 2025-06-22 09:30:59 --> Hooks Class Initialized
INFO - 2025-06-22 09:30:59 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:30:59 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:30:59 --> Utf8 Class Initialized
DEBUG - 2025-06-22 09:30:59 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:30:59 --> URI Class Initialized
INFO - 2025-06-22 09:30:59 --> Utf8 Class Initialized
INFO - 2025-06-22 09:30:59 --> URI Class Initialized
INFO - 2025-06-22 09:30:59 --> Router Class Initialized
INFO - 2025-06-22 09:30:59 --> Router Class Initialized
INFO - 2025-06-22 09:30:59 --> Output Class Initialized
INFO - 2025-06-22 09:30:59 --> Security Class Initialized
DEBUG - 2025-06-22 09:30:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:30:59 --> Input Class Initialized
INFO - 2025-06-22 09:30:59 --> Output Class Initialized
INFO - 2025-06-22 09:30:59 --> Language Class Initialized
INFO - 2025-06-22 09:30:59 --> Security Class Initialized
DEBUG - 2025-06-22 09:30:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:30:59 --> Loader Class Initialized
INFO - 2025-06-22 09:30:59 --> Input Class Initialized
INFO - 2025-06-22 09:30:59 --> Language Class Initialized
INFO - 2025-06-22 09:30:59 --> Helper loaded: url_helper
INFO - 2025-06-22 09:30:59 --> Helper loaded: file_helper
INFO - 2025-06-22 09:30:59 --> Loader Class Initialized
INFO - 2025-06-22 09:30:59 --> Helper loaded: url_helper
INFO - 2025-06-22 09:30:59 --> Helper loaded: file_helper
INFO - 2025-06-22 09:30:59 --> Database Driver Class Initialized
INFO - 2025-06-22 09:30:59 --> Database Driver Class Initialized
INFO - 2025-06-22 09:30:59 --> Email Class Initialized
INFO - 2025-06-22 09:30:59 --> Email Class Initialized
DEBUG - 2025-06-22 09:30:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:30:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:30:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:30:59 --> Controller Class Initialized
INFO - 2025-06-22 09:30:59 --> Helper loaded: form_helper
INFO - 2025-06-22 09:30:59 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:30:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:30:59 --> Database Driver Class Initialized
INFO - 2025-06-22 09:30:59 --> Model "Crud" initialized
INFO - 2025-06-22 09:30:59 --> Final output sent to browser
DEBUG - 2025-06-22 09:30:59 --> Total execution time: 0.0253
INFO - 2025-06-22 09:30:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:30:59 --> Controller Class Initialized
INFO - 2025-06-22 09:30:59 --> Helper loaded: form_helper
INFO - 2025-06-22 09:30:59 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:30:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:30:59 --> Database Driver Class Initialized
INFO - 2025-06-22 09:30:59 --> Model "Crud" initialized
INFO - 2025-06-22 09:30:59 --> Final output sent to browser
DEBUG - 2025-06-22 09:30:59 --> Total execution time: 0.0414
INFO - 2025-06-22 09:31:02 --> Config Class Initialized
INFO - 2025-06-22 09:31:02 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:31:02 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:31:02 --> Utf8 Class Initialized
INFO - 2025-06-22 09:31:02 --> URI Class Initialized
INFO - 2025-06-22 09:31:02 --> Router Class Initialized
INFO - 2025-06-22 09:31:02 --> Output Class Initialized
INFO - 2025-06-22 09:31:02 --> Security Class Initialized
DEBUG - 2025-06-22 09:31:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:31:02 --> Input Class Initialized
INFO - 2025-06-22 09:31:02 --> Language Class Initialized
INFO - 2025-06-22 09:31:02 --> Loader Class Initialized
INFO - 2025-06-22 09:31:02 --> Helper loaded: url_helper
INFO - 2025-06-22 09:31:02 --> Helper loaded: file_helper
INFO - 2025-06-22 09:31:02 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:02 --> Email Class Initialized
DEBUG - 2025-06-22 09:31:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:31:02 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:31:02 --> Controller Class Initialized
INFO - 2025-06-22 09:31:02 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:31:02 --> Helper loaded: form_helper
INFO - 2025-06-22 09:31:02 --> Form Validation Class Initialized
INFO - 2025-06-22 09:31:02 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:02 --> Model "Crud" initialized
INFO - 2025-06-22 09:31:02 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:31:02 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:31:02 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:31:02 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:31:02 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:31:02 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-22 09:31:02 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/master-form-test.php
INFO - 2025-06-22 09:31:02 --> Final output sent to browser
DEBUG - 2025-06-22 09:31:02 --> Total execution time: 0.0127
INFO - 2025-06-22 09:31:02 --> Config Class Initialized
INFO - 2025-06-22 09:31:02 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:31:02 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:31:02 --> Utf8 Class Initialized
INFO - 2025-06-22 09:31:02 --> URI Class Initialized
INFO - 2025-06-22 09:31:02 --> Router Class Initialized
INFO - 2025-06-22 09:31:02 --> Output Class Initialized
INFO - 2025-06-22 09:31:02 --> Security Class Initialized
DEBUG - 2025-06-22 09:31:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:31:02 --> Input Class Initialized
INFO - 2025-06-22 09:31:02 --> Language Class Initialized
INFO - 2025-06-22 09:31:02 --> Loader Class Initialized
INFO - 2025-06-22 09:31:02 --> Helper loaded: url_helper
INFO - 2025-06-22 09:31:02 --> Helper loaded: file_helper
INFO - 2025-06-22 09:31:02 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:02 --> Email Class Initialized
DEBUG - 2025-06-22 09:31:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:31:02 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:31:02 --> Controller Class Initialized
INFO - 2025-06-22 09:31:02 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:31:02 --> Helper loaded: form_helper
INFO - 2025-06-22 09:31:02 --> Form Validation Class Initialized
INFO - 2025-06-22 09:31:02 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:02 --> Model "Crud" initialized
INFO - 2025-06-22 09:31:02 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:31:02 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:31:02 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:31:02 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:31:02 --> Session class already loaded. Second attempt ignored.
ERROR - 2025-06-22 09:31:02 --> Query error: Illegal mix of collations (utf8mb4_0900_ai_ci,IMPLICIT) and (utf8mb3_general_ci,COERCIBLE) for operation '=' - Invalid query: SELECT a.* FROM setting_users a JOIN users b ON a.users_id = b.username WHERE a.menus_id='‚ZjXì' and b.username='admin'
INFO - 2025-06-22 09:31:02 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-22 09:31:03 --> Config Class Initialized
INFO - 2025-06-22 09:31:03 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:31:03 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:31:03 --> Utf8 Class Initialized
INFO - 2025-06-22 09:31:03 --> URI Class Initialized
INFO - 2025-06-22 09:31:03 --> Router Class Initialized
INFO - 2025-06-22 09:31:03 --> Output Class Initialized
INFO - 2025-06-22 09:31:03 --> Security Class Initialized
DEBUG - 2025-06-22 09:31:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:31:03 --> Input Class Initialized
INFO - 2025-06-22 09:31:03 --> Language Class Initialized
INFO - 2025-06-22 09:31:03 --> Loader Class Initialized
INFO - 2025-06-22 09:31:03 --> Helper loaded: url_helper
INFO - 2025-06-22 09:31:03 --> Helper loaded: file_helper
INFO - 2025-06-22 09:31:03 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:03 --> Email Class Initialized
DEBUG - 2025-06-22 09:31:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:31:03 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:31:03 --> Controller Class Initialized
INFO - 2025-06-22 09:31:03 --> Helper loaded: form_helper
INFO - 2025-06-22 09:31:03 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:31:03 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:31:03 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:03 --> Model "Crud" initialized
INFO - 2025-06-22 09:31:03 --> Final output sent to browser
DEBUG - 2025-06-22 09:31:03 --> Total execution time: 0.0127
INFO - 2025-06-22 09:31:03 --> Config Class Initialized
INFO - 2025-06-22 09:31:03 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:31:03 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:31:03 --> Utf8 Class Initialized
INFO - 2025-06-22 09:31:03 --> URI Class Initialized
INFO - 2025-06-22 09:31:03 --> Router Class Initialized
INFO - 2025-06-22 09:31:03 --> Output Class Initialized
INFO - 2025-06-22 09:31:03 --> Security Class Initialized
DEBUG - 2025-06-22 09:31:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:31:03 --> Input Class Initialized
INFO - 2025-06-22 09:31:03 --> Language Class Initialized
INFO - 2025-06-22 09:31:03 --> Loader Class Initialized
INFO - 2025-06-22 09:31:03 --> Helper loaded: url_helper
INFO - 2025-06-22 09:31:03 --> Helper loaded: file_helper
INFO - 2025-06-22 09:31:03 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:03 --> Email Class Initialized
DEBUG - 2025-06-22 09:31:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:31:03 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:31:03 --> Controller Class Initialized
INFO - 2025-06-22 09:31:03 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:31:03 --> Helper loaded: form_helper
INFO - 2025-06-22 09:31:03 --> Form Validation Class Initialized
INFO - 2025-06-22 09:31:03 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:03 --> Model "Crud" initialized
INFO - 2025-06-22 09:31:03 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:31:03 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:31:03 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:31:03 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:31:03 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:31:03 --> Final output sent to browser
DEBUG - 2025-06-22 09:31:03 --> Total execution time: 0.0086
INFO - 2025-06-22 09:31:03 --> Config Class Initialized
INFO - 2025-06-22 09:31:03 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:31:03 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:31:03 --> Utf8 Class Initialized
INFO - 2025-06-22 09:31:03 --> URI Class Initialized
INFO - 2025-06-22 09:31:03 --> Router Class Initialized
INFO - 2025-06-22 09:31:03 --> Output Class Initialized
INFO - 2025-06-22 09:31:03 --> Security Class Initialized
DEBUG - 2025-06-22 09:31:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:31:03 --> Input Class Initialized
INFO - 2025-06-22 09:31:03 --> Language Class Initialized
INFO - 2025-06-22 09:31:03 --> Loader Class Initialized
INFO - 2025-06-22 09:31:03 --> Helper loaded: url_helper
INFO - 2025-06-22 09:31:03 --> Helper loaded: file_helper
INFO - 2025-06-22 09:31:03 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:03 --> Email Class Initialized
DEBUG - 2025-06-22 09:31:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:31:03 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:31:03 --> Controller Class Initialized
INFO - 2025-06-22 09:31:03 --> Helper loaded: form_helper
INFO - 2025-06-22 09:31:03 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:31:03 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:31:03 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:03 --> Model "Crud" initialized
INFO - 2025-06-22 09:31:03 --> Final output sent to browser
DEBUG - 2025-06-22 09:31:03 --> Total execution time: 0.0082
INFO - 2025-06-22 09:31:03 --> Config Class Initialized
INFO - 2025-06-22 09:31:03 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:31:03 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:31:03 --> Utf8 Class Initialized
INFO - 2025-06-22 09:31:03 --> URI Class Initialized
INFO - 2025-06-22 09:31:03 --> Router Class Initialized
INFO - 2025-06-22 09:31:03 --> Output Class Initialized
INFO - 2025-06-22 09:31:03 --> Security Class Initialized
DEBUG - 2025-06-22 09:31:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:31:03 --> Input Class Initialized
INFO - 2025-06-22 09:31:03 --> Language Class Initialized
INFO - 2025-06-22 09:31:03 --> Loader Class Initialized
INFO - 2025-06-22 09:31:03 --> Helper loaded: url_helper
INFO - 2025-06-22 09:31:03 --> Helper loaded: file_helper
INFO - 2025-06-22 09:31:03 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:03 --> Email Class Initialized
DEBUG - 2025-06-22 09:31:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:31:03 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:31:03 --> Controller Class Initialized
INFO - 2025-06-22 09:31:03 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:31:03 --> Helper loaded: form_helper
INFO - 2025-06-22 09:31:03 --> Form Validation Class Initialized
INFO - 2025-06-22 09:31:03 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:03 --> Model "Crud" initialized
INFO - 2025-06-22 09:31:03 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:31:03 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:31:03 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:31:03 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:31:03 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:31:03 --> Final output sent to browser
DEBUG - 2025-06-22 09:31:03 --> Total execution time: 0.0130
INFO - 2025-06-22 09:31:07 --> Config Class Initialized
INFO - 2025-06-22 09:31:07 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:31:07 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:31:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:31:07 --> URI Class Initialized
INFO - 2025-06-22 09:31:07 --> Router Class Initialized
INFO - 2025-06-22 09:31:07 --> Output Class Initialized
INFO - 2025-06-22 09:31:07 --> Security Class Initialized
DEBUG - 2025-06-22 09:31:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:31:07 --> Input Class Initialized
INFO - 2025-06-22 09:31:07 --> Language Class Initialized
INFO - 2025-06-22 09:31:07 --> Loader Class Initialized
INFO - 2025-06-22 09:31:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:31:07 --> Config Class Initialized
INFO - 2025-06-22 09:31:07 --> Hooks Class Initialized
INFO - 2025-06-22 09:31:07 --> Helper loaded: file_helper
DEBUG - 2025-06-22 09:31:07 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:31:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:31:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:07 --> URI Class Initialized
INFO - 2025-06-22 09:31:07 --> Router Class Initialized
INFO - 2025-06-22 09:31:07 --> Output Class Initialized
INFO - 2025-06-22 09:31:07 --> Security Class Initialized
DEBUG - 2025-06-22 09:31:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:31:07 --> Input Class Initialized
INFO - 2025-06-22 09:31:07 --> Language Class Initialized
INFO - 2025-06-22 09:31:07 --> Loader Class Initialized
INFO - 2025-06-22 09:31:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:31:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:31:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:07 --> Email Class Initialized
DEBUG - 2025-06-22 09:31:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:31:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:31:07 --> Controller Class Initialized
INFO - 2025-06-22 09:31:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:31:07 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:31:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:31:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:07 --> Email Class Initialized
DEBUG - 2025-06-22 09:31:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:31:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:31:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:31:07 --> Total execution time: 0.0176
INFO - 2025-06-22 09:31:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:31:07 --> Controller Class Initialized
INFO - 2025-06-22 09:31:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:31:07 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:31:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:31:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:31:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:31:07 --> Total execution time: 0.0301
INFO - 2025-06-22 09:31:08 --> Config Class Initialized
INFO - 2025-06-22 09:31:08 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:31:08 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:31:08 --> Utf8 Class Initialized
INFO - 2025-06-22 09:31:08 --> URI Class Initialized
INFO - 2025-06-22 09:31:08 --> Router Class Initialized
INFO - 2025-06-22 09:31:08 --> Output Class Initialized
INFO - 2025-06-22 09:31:08 --> Security Class Initialized
DEBUG - 2025-06-22 09:31:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:31:08 --> Input Class Initialized
INFO - 2025-06-22 09:31:08 --> Language Class Initialized
INFO - 2025-06-22 09:31:08 --> Loader Class Initialized
INFO - 2025-06-22 09:31:08 --> Helper loaded: url_helper
INFO - 2025-06-22 09:31:08 --> Helper loaded: file_helper
INFO - 2025-06-22 09:31:08 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:08 --> Email Class Initialized
DEBUG - 2025-06-22 09:31:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:31:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:31:08 --> Controller Class Initialized
INFO - 2025-06-22 09:31:08 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:31:08 --> Helper loaded: form_helper
INFO - 2025-06-22 09:31:08 --> Form Validation Class Initialized
INFO - 2025-06-22 09:31:08 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:08 --> Model "Crud" initialized
INFO - 2025-06-22 09:31:08 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:31:08 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:31:08 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:31:08 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:31:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:31:08 --> Final output sent to browser
DEBUG - 2025-06-22 09:31:08 --> Total execution time: 0.0091
INFO - 2025-06-22 09:31:17 --> Config Class Initialized
INFO - 2025-06-22 09:31:17 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:31:17 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:31:17 --> Utf8 Class Initialized
INFO - 2025-06-22 09:31:17 --> URI Class Initialized
INFO - 2025-06-22 09:31:17 --> Router Class Initialized
INFO - 2025-06-22 09:31:17 --> Output Class Initialized
INFO - 2025-06-22 09:31:17 --> Security Class Initialized
DEBUG - 2025-06-22 09:31:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:31:17 --> Input Class Initialized
INFO - 2025-06-22 09:31:17 --> Config Class Initialized
INFO - 2025-06-22 09:31:17 --> Language Class Initialized
INFO - 2025-06-22 09:31:17 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:31:17 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:31:17 --> Loader Class Initialized
INFO - 2025-06-22 09:31:17 --> Utf8 Class Initialized
INFO - 2025-06-22 09:31:17 --> Helper loaded: url_helper
INFO - 2025-06-22 09:31:17 --> URI Class Initialized
INFO - 2025-06-22 09:31:17 --> Helper loaded: file_helper
INFO - 2025-06-22 09:31:17 --> Router Class Initialized
INFO - 2025-06-22 09:31:17 --> Output Class Initialized
INFO - 2025-06-22 09:31:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:17 --> Security Class Initialized
DEBUG - 2025-06-22 09:31:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:31:17 --> Input Class Initialized
INFO - 2025-06-22 09:31:17 --> Language Class Initialized
INFO - 2025-06-22 09:31:17 --> Loader Class Initialized
INFO - 2025-06-22 09:31:17 --> Helper loaded: url_helper
INFO - 2025-06-22 09:31:17 --> Helper loaded: file_helper
INFO - 2025-06-22 09:31:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:17 --> Email Class Initialized
DEBUG - 2025-06-22 09:31:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:31:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:31:17 --> Controller Class Initialized
INFO - 2025-06-22 09:31:17 --> Helper loaded: form_helper
INFO - 2025-06-22 09:31:17 --> Form Validation Class Initialized
INFO - 2025-06-22 09:31:17 --> Email Class Initialized
DEBUG - 2025-06-22 09:31:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:31:17 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:31:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:31:17 --> Model "Crud" initialized
INFO - 2025-06-22 09:31:17 --> Final output sent to browser
DEBUG - 2025-06-22 09:31:17 --> Total execution time: 0.0158
INFO - 2025-06-22 09:31:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:31:17 --> Controller Class Initialized
INFO - 2025-06-22 09:31:17 --> Helper loaded: form_helper
INFO - 2025-06-22 09:31:17 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:31:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:31:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:17 --> Model "Crud" initialized
INFO - 2025-06-22 09:31:17 --> Final output sent to browser
DEBUG - 2025-06-22 09:31:17 --> Total execution time: 0.0286
INFO - 2025-06-22 09:31:34 --> Config Class Initialized
INFO - 2025-06-22 09:31:34 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:31:34 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:31:34 --> Utf8 Class Initialized
INFO - 2025-06-22 09:31:34 --> URI Class Initialized
INFO - 2025-06-22 09:31:34 --> Router Class Initialized
INFO - 2025-06-22 09:31:34 --> Output Class Initialized
INFO - 2025-06-22 09:31:34 --> Security Class Initialized
DEBUG - 2025-06-22 09:31:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:31:34 --> Input Class Initialized
INFO - 2025-06-22 09:31:34 --> Language Class Initialized
INFO - 2025-06-22 09:31:34 --> Loader Class Initialized
INFO - 2025-06-22 09:31:34 --> Helper loaded: url_helper
INFO - 2025-06-22 09:31:34 --> Helper loaded: file_helper
INFO - 2025-06-22 09:31:34 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:34 --> Email Class Initialized
DEBUG - 2025-06-22 09:31:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:31:34 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:31:34 --> Controller Class Initialized
INFO - 2025-06-22 09:31:34 --> Helper loaded: form_helper
INFO - 2025-06-22 09:31:34 --> Config Class Initialized
INFO - 2025-06-22 09:31:34 --> Form Validation Class Initialized
INFO - 2025-06-22 09:31:34 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:31:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:31:34 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:31:34 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:34 --> Utf8 Class Initialized
INFO - 2025-06-22 09:31:34 --> URI Class Initialized
INFO - 2025-06-22 09:31:34 --> Router Class Initialized
INFO - 2025-06-22 09:31:34 --> Output Class Initialized
INFO - 2025-06-22 09:31:34 --> Security Class Initialized
DEBUG - 2025-06-22 09:31:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:31:34 --> Input Class Initialized
INFO - 2025-06-22 09:31:34 --> Language Class Initialized
INFO - 2025-06-22 09:31:34 --> Loader Class Initialized
INFO - 2025-06-22 09:31:34 --> Helper loaded: url_helper
INFO - 2025-06-22 09:31:34 --> Helper loaded: file_helper
INFO - 2025-06-22 09:31:34 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:34 --> Model "Crud" initialized
INFO - 2025-06-22 09:31:34 --> Email Class Initialized
DEBUG - 2025-06-22 09:31:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:31:34 --> Final output sent to browser
DEBUG - 2025-06-22 09:31:34 --> Total execution time: 0.0229
INFO - 2025-06-22 09:31:34 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:31:34 --> Controller Class Initialized
INFO - 2025-06-22 09:31:34 --> Helper loaded: form_helper
INFO - 2025-06-22 09:31:34 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:31:34 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:31:34 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:34 --> Model "Crud" initialized
INFO - 2025-06-22 09:31:34 --> Final output sent to browser
DEBUG - 2025-06-22 09:31:34 --> Total execution time: 0.0323
INFO - 2025-06-22 09:31:37 --> Config Class Initialized
INFO - 2025-06-22 09:31:37 --> Hooks Class Initialized
INFO - 2025-06-22 09:31:37 --> Config Class Initialized
INFO - 2025-06-22 09:31:37 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:31:37 --> UTF-8 Support Enabled
DEBUG - 2025-06-22 09:31:37 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:31:37 --> Utf8 Class Initialized
INFO - 2025-06-22 09:31:37 --> Utf8 Class Initialized
INFO - 2025-06-22 09:31:37 --> URI Class Initialized
INFO - 2025-06-22 09:31:37 --> URI Class Initialized
INFO - 2025-06-22 09:31:37 --> Router Class Initialized
INFO - 2025-06-22 09:31:37 --> Output Class Initialized
INFO - 2025-06-22 09:31:37 --> Router Class Initialized
INFO - 2025-06-22 09:31:37 --> Security Class Initialized
INFO - 2025-06-22 09:31:37 --> Output Class Initialized
DEBUG - 2025-06-22 09:31:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:31:37 --> Input Class Initialized
INFO - 2025-06-22 09:31:37 --> Security Class Initialized
DEBUG - 2025-06-22 09:31:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:31:37 --> Input Class Initialized
INFO - 2025-06-22 09:31:37 --> Language Class Initialized
INFO - 2025-06-22 09:31:37 --> Language Class Initialized
INFO - 2025-06-22 09:31:37 --> Loader Class Initialized
INFO - 2025-06-22 09:31:37 --> Loader Class Initialized
INFO - 2025-06-22 09:31:37 --> Helper loaded: url_helper
INFO - 2025-06-22 09:31:37 --> Helper loaded: url_helper
INFO - 2025-06-22 09:31:37 --> Helper loaded: file_helper
INFO - 2025-06-22 09:31:37 --> Helper loaded: file_helper
INFO - 2025-06-22 09:31:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:37 --> Email Class Initialized
INFO - 2025-06-22 09:31:37 --> Email Class Initialized
DEBUG - 2025-06-22 09:31:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:31:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:31:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:31:37 --> Controller Class Initialized
INFO - 2025-06-22 09:31:37 --> Helper loaded: form_helper
INFO - 2025-06-22 09:31:37 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:31:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:31:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:37 --> Model "Crud" initialized
INFO - 2025-06-22 09:31:37 --> Final output sent to browser
DEBUG - 2025-06-22 09:31:37 --> Total execution time: 0.0140
INFO - 2025-06-22 09:31:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:31:37 --> Controller Class Initialized
INFO - 2025-06-22 09:31:37 --> Helper loaded: form_helper
INFO - 2025-06-22 09:31:37 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:31:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:31:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:37 --> Model "Crud" initialized
INFO - 2025-06-22 09:31:37 --> Final output sent to browser
DEBUG - 2025-06-22 09:31:37 --> Total execution time: 0.0273
INFO - 2025-06-22 09:31:47 --> Config Class Initialized
INFO - 2025-06-22 09:31:47 --> Config Class Initialized
INFO - 2025-06-22 09:31:47 --> Hooks Class Initialized
INFO - 2025-06-22 09:31:47 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:31:47 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:31:47 --> Utf8 Class Initialized
DEBUG - 2025-06-22 09:31:47 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:31:47 --> Utf8 Class Initialized
INFO - 2025-06-22 09:31:47 --> URI Class Initialized
INFO - 2025-06-22 09:31:47 --> Router Class Initialized
INFO - 2025-06-22 09:31:47 --> URI Class Initialized
INFO - 2025-06-22 09:31:47 --> Output Class Initialized
INFO - 2025-06-22 09:31:47 --> Security Class Initialized
INFO - 2025-06-22 09:31:47 --> Router Class Initialized
DEBUG - 2025-06-22 09:31:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:31:47 --> Input Class Initialized
INFO - 2025-06-22 09:31:47 --> Output Class Initialized
INFO - 2025-06-22 09:31:47 --> Language Class Initialized
INFO - 2025-06-22 09:31:47 --> Security Class Initialized
DEBUG - 2025-06-22 09:31:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:31:47 --> Loader Class Initialized
INFO - 2025-06-22 09:31:47 --> Input Class Initialized
INFO - 2025-06-22 09:31:47 --> Language Class Initialized
INFO - 2025-06-22 09:31:47 --> Helper loaded: url_helper
INFO - 2025-06-22 09:31:47 --> Helper loaded: file_helper
INFO - 2025-06-22 09:31:47 --> Loader Class Initialized
INFO - 2025-06-22 09:31:47 --> Helper loaded: url_helper
INFO - 2025-06-22 09:31:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:47 --> Helper loaded: file_helper
INFO - 2025-06-22 09:31:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:47 --> Email Class Initialized
INFO - 2025-06-22 09:31:47 --> Email Class Initialized
DEBUG - 2025-06-22 09:31:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:31:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:31:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:31:47 --> Controller Class Initialized
INFO - 2025-06-22 09:31:47 --> Helper loaded: form_helper
INFO - 2025-06-22 09:31:47 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:31:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:31:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:47 --> Model "Crud" initialized
INFO - 2025-06-22 09:31:47 --> Final output sent to browser
DEBUG - 2025-06-22 09:31:47 --> Total execution time: 0.0142
INFO - 2025-06-22 09:31:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:31:47 --> Controller Class Initialized
INFO - 2025-06-22 09:31:47 --> Helper loaded: form_helper
INFO - 2025-06-22 09:31:47 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:31:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:31:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:47 --> Model "Crud" initialized
INFO - 2025-06-22 09:31:47 --> Final output sent to browser
DEBUG - 2025-06-22 09:31:47 --> Total execution time: 0.0263
INFO - 2025-06-22 09:31:57 --> Config Class Initialized
INFO - 2025-06-22 09:31:57 --> Config Class Initialized
INFO - 2025-06-22 09:31:57 --> Hooks Class Initialized
INFO - 2025-06-22 09:31:57 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:31:57 --> UTF-8 Support Enabled
DEBUG - 2025-06-22 09:31:57 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:31:57 --> Utf8 Class Initialized
INFO - 2025-06-22 09:31:57 --> Utf8 Class Initialized
INFO - 2025-06-22 09:31:57 --> URI Class Initialized
INFO - 2025-06-22 09:31:57 --> URI Class Initialized
INFO - 2025-06-22 09:31:57 --> Router Class Initialized
INFO - 2025-06-22 09:31:57 --> Router Class Initialized
INFO - 2025-06-22 09:31:57 --> Output Class Initialized
INFO - 2025-06-22 09:31:57 --> Output Class Initialized
INFO - 2025-06-22 09:31:57 --> Security Class Initialized
INFO - 2025-06-22 09:31:57 --> Security Class Initialized
DEBUG - 2025-06-22 09:31:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-22 09:31:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:31:57 --> Input Class Initialized
INFO - 2025-06-22 09:31:57 --> Input Class Initialized
INFO - 2025-06-22 09:31:57 --> Language Class Initialized
INFO - 2025-06-22 09:31:57 --> Language Class Initialized
INFO - 2025-06-22 09:31:57 --> Loader Class Initialized
INFO - 2025-06-22 09:31:57 --> Loader Class Initialized
INFO - 2025-06-22 09:31:57 --> Helper loaded: url_helper
INFO - 2025-06-22 09:31:57 --> Helper loaded: url_helper
INFO - 2025-06-22 09:31:57 --> Helper loaded: file_helper
INFO - 2025-06-22 09:31:57 --> Helper loaded: file_helper
INFO - 2025-06-22 09:31:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:57 --> Email Class Initialized
INFO - 2025-06-22 09:31:57 --> Email Class Initialized
DEBUG - 2025-06-22 09:31:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:31:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:31:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:31:57 --> Controller Class Initialized
INFO - 2025-06-22 09:31:57 --> Helper loaded: form_helper
INFO - 2025-06-22 09:31:57 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:31:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:31:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:57 --> Model "Crud" initialized
INFO - 2025-06-22 09:31:57 --> Final output sent to browser
DEBUG - 2025-06-22 09:31:57 --> Total execution time: 0.0146
INFO - 2025-06-22 09:31:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:31:57 --> Controller Class Initialized
INFO - 2025-06-22 09:31:57 --> Helper loaded: form_helper
INFO - 2025-06-22 09:31:57 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:31:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:31:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:31:57 --> Model "Crud" initialized
INFO - 2025-06-22 09:31:57 --> Final output sent to browser
DEBUG - 2025-06-22 09:31:57 --> Total execution time: 0.0260
INFO - 2025-06-22 09:32:07 --> Config Class Initialized
INFO - 2025-06-22 09:32:07 --> Config Class Initialized
INFO - 2025-06-22 09:32:07 --> Hooks Class Initialized
INFO - 2025-06-22 09:32:07 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:32:07 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:32:07 --> Utf8 Class Initialized
DEBUG - 2025-06-22 09:32:07 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:32:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:32:07 --> URI Class Initialized
INFO - 2025-06-22 09:32:07 --> URI Class Initialized
INFO - 2025-06-22 09:32:07 --> Router Class Initialized
INFO - 2025-06-22 09:32:07 --> Router Class Initialized
INFO - 2025-06-22 09:32:07 --> Output Class Initialized
INFO - 2025-06-22 09:32:07 --> Output Class Initialized
INFO - 2025-06-22 09:32:07 --> Security Class Initialized
INFO - 2025-06-22 09:32:07 --> Security Class Initialized
DEBUG - 2025-06-22 09:32:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:32:07 --> Input Class Initialized
DEBUG - 2025-06-22 09:32:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:32:07 --> Language Class Initialized
INFO - 2025-06-22 09:32:07 --> Input Class Initialized
INFO - 2025-06-22 09:32:07 --> Language Class Initialized
INFO - 2025-06-22 09:32:07 --> Loader Class Initialized
INFO - 2025-06-22 09:32:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:32:07 --> Loader Class Initialized
INFO - 2025-06-22 09:32:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:32:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:32:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:32:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:32:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:32:07 --> Email Class Initialized
DEBUG - 2025-06-22 09:32:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:32:07 --> Email Class Initialized
INFO - 2025-06-22 09:32:07 --> Session: Class initialized using 'files' driver.
DEBUG - 2025-06-22 09:32:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:32:07 --> Controller Class Initialized
INFO - 2025-06-22 09:32:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:32:07 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:32:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:32:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:32:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:32:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:32:07 --> Total execution time: 0.0149
INFO - 2025-06-22 09:32:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:32:07 --> Controller Class Initialized
INFO - 2025-06-22 09:32:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:32:07 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:32:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:32:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:32:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:32:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:32:07 --> Total execution time: 0.0273
INFO - 2025-06-22 09:32:17 --> Config Class Initialized
INFO - 2025-06-22 09:32:17 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:32:17 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:32:17 --> Utf8 Class Initialized
INFO - 2025-06-22 09:32:17 --> URI Class Initialized
INFO - 2025-06-22 09:32:17 --> Router Class Initialized
INFO - 2025-06-22 09:32:17 --> Config Class Initialized
INFO - 2025-06-22 09:32:17 --> Output Class Initialized
INFO - 2025-06-22 09:32:17 --> Hooks Class Initialized
INFO - 2025-06-22 09:32:17 --> Security Class Initialized
DEBUG - 2025-06-22 09:32:17 --> UTF-8 Support Enabled
DEBUG - 2025-06-22 09:32:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:32:17 --> Utf8 Class Initialized
INFO - 2025-06-22 09:32:17 --> Input Class Initialized
INFO - 2025-06-22 09:32:17 --> Language Class Initialized
INFO - 2025-06-22 09:32:17 --> URI Class Initialized
INFO - 2025-06-22 09:32:17 --> Router Class Initialized
INFO - 2025-06-22 09:32:17 --> Loader Class Initialized
INFO - 2025-06-22 09:32:17 --> Output Class Initialized
INFO - 2025-06-22 09:32:17 --> Helper loaded: url_helper
INFO - 2025-06-22 09:32:17 --> Security Class Initialized
INFO - 2025-06-22 09:32:17 --> Helper loaded: file_helper
DEBUG - 2025-06-22 09:32:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:32:17 --> Input Class Initialized
INFO - 2025-06-22 09:32:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:32:17 --> Language Class Initialized
INFO - 2025-06-22 09:32:17 --> Loader Class Initialized
INFO - 2025-06-22 09:32:17 --> Helper loaded: url_helper
INFO - 2025-06-22 09:32:17 --> Helper loaded: file_helper
INFO - 2025-06-22 09:32:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:32:17 --> Email Class Initialized
INFO - 2025-06-22 09:32:17 --> Email Class Initialized
DEBUG - 2025-06-22 09:32:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:32:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:32:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:32:17 --> Controller Class Initialized
INFO - 2025-06-22 09:32:17 --> Helper loaded: form_helper
INFO - 2025-06-22 09:32:17 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:32:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:32:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:32:17 --> Model "Crud" initialized
INFO - 2025-06-22 09:32:17 --> Final output sent to browser
DEBUG - 2025-06-22 09:32:17 --> Total execution time: 0.0156
INFO - 2025-06-22 09:32:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:32:17 --> Controller Class Initialized
INFO - 2025-06-22 09:32:17 --> Helper loaded: form_helper
INFO - 2025-06-22 09:32:17 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:32:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:32:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:32:17 --> Model "Crud" initialized
INFO - 2025-06-22 09:32:17 --> Final output sent to browser
DEBUG - 2025-06-22 09:32:17 --> Total execution time: 0.0298
INFO - 2025-06-22 09:32:27 --> Config Class Initialized
INFO - 2025-06-22 09:32:27 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:32:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:32:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:32:27 --> URI Class Initialized
INFO - 2025-06-22 09:32:27 --> Router Class Initialized
INFO - 2025-06-22 09:32:27 --> Output Class Initialized
INFO - 2025-06-22 09:32:27 --> Security Class Initialized
INFO - 2025-06-22 09:32:27 --> Config Class Initialized
DEBUG - 2025-06-22 09:32:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:32:27 --> Hooks Class Initialized
INFO - 2025-06-22 09:32:27 --> Input Class Initialized
INFO - 2025-06-22 09:32:27 --> Language Class Initialized
DEBUG - 2025-06-22 09:32:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:32:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:32:27 --> Loader Class Initialized
INFO - 2025-06-22 09:32:27 --> URI Class Initialized
INFO - 2025-06-22 09:32:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:32:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:32:27 --> Router Class Initialized
INFO - 2025-06-22 09:32:27 --> Output Class Initialized
INFO - 2025-06-22 09:32:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:32:27 --> Security Class Initialized
DEBUG - 2025-06-22 09:32:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:32:27 --> Input Class Initialized
INFO - 2025-06-22 09:32:27 --> Language Class Initialized
INFO - 2025-06-22 09:32:27 --> Loader Class Initialized
INFO - 2025-06-22 09:32:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:32:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:32:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:32:27 --> Email Class Initialized
DEBUG - 2025-06-22 09:32:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:32:27 --> Email Class Initialized
INFO - 2025-06-22 09:32:27 --> Session: Class initialized using 'files' driver.
DEBUG - 2025-06-22 09:32:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:32:27 --> Controller Class Initialized
INFO - 2025-06-22 09:32:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:32:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:32:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:32:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:32:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:32:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:32:27 --> Total execution time: 0.0139
INFO - 2025-06-22 09:32:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:32:27 --> Controller Class Initialized
INFO - 2025-06-22 09:32:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:32:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:32:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:32:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:32:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:32:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:32:27 --> Total execution time: 0.0261
INFO - 2025-06-22 09:32:37 --> Config Class Initialized
INFO - 2025-06-22 09:32:37 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:32:37 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:32:37 --> Utf8 Class Initialized
INFO - 2025-06-22 09:32:37 --> URI Class Initialized
INFO - 2025-06-22 09:32:37 --> Router Class Initialized
INFO - 2025-06-22 09:32:37 --> Output Class Initialized
INFO - 2025-06-22 09:32:37 --> Security Class Initialized
DEBUG - 2025-06-22 09:32:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:32:37 --> Input Class Initialized
INFO - 2025-06-22 09:32:37 --> Language Class Initialized
INFO - 2025-06-22 09:32:37 --> Loader Class Initialized
INFO - 2025-06-22 09:32:37 --> Helper loaded: url_helper
INFO - 2025-06-22 09:32:37 --> Helper loaded: file_helper
INFO - 2025-06-22 09:32:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:32:37 --> Config Class Initialized
INFO - 2025-06-22 09:32:37 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:32:37 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:32:37 --> Utf8 Class Initialized
INFO - 2025-06-22 09:32:37 --> URI Class Initialized
INFO - 2025-06-22 09:32:37 --> Router Class Initialized
INFO - 2025-06-22 09:32:37 --> Output Class Initialized
INFO - 2025-06-22 09:32:37 --> Security Class Initialized
DEBUG - 2025-06-22 09:32:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:32:37 --> Input Class Initialized
INFO - 2025-06-22 09:32:37 --> Language Class Initialized
INFO - 2025-06-22 09:32:37 --> Loader Class Initialized
INFO - 2025-06-22 09:32:37 --> Helper loaded: url_helper
INFO - 2025-06-22 09:32:37 --> Helper loaded: file_helper
INFO - 2025-06-22 09:32:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:32:37 --> Email Class Initialized
DEBUG - 2025-06-22 09:32:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:32:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:32:37 --> Controller Class Initialized
INFO - 2025-06-22 09:32:37 --> Helper loaded: form_helper
INFO - 2025-06-22 09:32:37 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:32:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:32:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:32:37 --> Email Class Initialized
DEBUG - 2025-06-22 09:32:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:32:37 --> Model "Crud" initialized
INFO - 2025-06-22 09:32:37 --> Final output sent to browser
DEBUG - 2025-06-22 09:32:37 --> Total execution time: 0.0138
INFO - 2025-06-22 09:32:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:32:37 --> Controller Class Initialized
INFO - 2025-06-22 09:32:37 --> Helper loaded: form_helper
INFO - 2025-06-22 09:32:37 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:32:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:32:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:32:37 --> Model "Crud" initialized
INFO - 2025-06-22 09:32:37 --> Final output sent to browser
DEBUG - 2025-06-22 09:32:37 --> Total execution time: 0.0228
INFO - 2025-06-22 09:32:47 --> Config Class Initialized
INFO - 2025-06-22 09:32:47 --> Config Class Initialized
INFO - 2025-06-22 09:32:47 --> Hooks Class Initialized
INFO - 2025-06-22 09:32:47 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:32:47 --> UTF-8 Support Enabled
DEBUG - 2025-06-22 09:32:47 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:32:47 --> Utf8 Class Initialized
INFO - 2025-06-22 09:32:47 --> Utf8 Class Initialized
INFO - 2025-06-22 09:32:47 --> URI Class Initialized
INFO - 2025-06-22 09:32:47 --> URI Class Initialized
INFO - 2025-06-22 09:32:47 --> Router Class Initialized
INFO - 2025-06-22 09:32:47 --> Output Class Initialized
INFO - 2025-06-22 09:32:47 --> Security Class Initialized
INFO - 2025-06-22 09:32:47 --> Router Class Initialized
DEBUG - 2025-06-22 09:32:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:32:47 --> Output Class Initialized
INFO - 2025-06-22 09:32:47 --> Input Class Initialized
INFO - 2025-06-22 09:32:47 --> Security Class Initialized
INFO - 2025-06-22 09:32:47 --> Language Class Initialized
DEBUG - 2025-06-22 09:32:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:32:47 --> Input Class Initialized
INFO - 2025-06-22 09:32:47 --> Language Class Initialized
INFO - 2025-06-22 09:32:47 --> Loader Class Initialized
INFO - 2025-06-22 09:32:47 --> Helper loaded: url_helper
INFO - 2025-06-22 09:32:47 --> Loader Class Initialized
INFO - 2025-06-22 09:32:47 --> Helper loaded: file_helper
INFO - 2025-06-22 09:32:47 --> Helper loaded: url_helper
INFO - 2025-06-22 09:32:47 --> Helper loaded: file_helper
INFO - 2025-06-22 09:32:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:32:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:32:47 --> Email Class Initialized
DEBUG - 2025-06-22 09:32:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:32:47 --> Email Class Initialized
INFO - 2025-06-22 09:32:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:32:47 --> Controller Class Initialized
DEBUG - 2025-06-22 09:32:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:32:47 --> Helper loaded: form_helper
INFO - 2025-06-22 09:32:47 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:32:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:32:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:32:47 --> Model "Crud" initialized
INFO - 2025-06-22 09:32:47 --> Final output sent to browser
DEBUG - 2025-06-22 09:32:47 --> Total execution time: 0.0151
INFO - 2025-06-22 09:32:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:32:47 --> Controller Class Initialized
INFO - 2025-06-22 09:32:47 --> Helper loaded: form_helper
INFO - 2025-06-22 09:32:47 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:32:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:32:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:32:47 --> Model "Crud" initialized
INFO - 2025-06-22 09:32:47 --> Final output sent to browser
DEBUG - 2025-06-22 09:32:47 --> Total execution time: 0.0264
INFO - 2025-06-22 09:32:57 --> Config Class Initialized
INFO - 2025-06-22 09:32:57 --> Config Class Initialized
INFO - 2025-06-22 09:32:57 --> Hooks Class Initialized
INFO - 2025-06-22 09:32:57 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:32:57 --> UTF-8 Support Enabled
DEBUG - 2025-06-22 09:32:57 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:32:57 --> Utf8 Class Initialized
INFO - 2025-06-22 09:32:57 --> Utf8 Class Initialized
INFO - 2025-06-22 09:32:57 --> URI Class Initialized
INFO - 2025-06-22 09:32:57 --> URI Class Initialized
INFO - 2025-06-22 09:32:57 --> Router Class Initialized
INFO - 2025-06-22 09:32:57 --> Router Class Initialized
INFO - 2025-06-22 09:32:57 --> Output Class Initialized
INFO - 2025-06-22 09:32:57 --> Output Class Initialized
INFO - 2025-06-22 09:32:57 --> Security Class Initialized
INFO - 2025-06-22 09:32:57 --> Security Class Initialized
DEBUG - 2025-06-22 09:32:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-22 09:32:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:32:57 --> Input Class Initialized
INFO - 2025-06-22 09:32:57 --> Input Class Initialized
INFO - 2025-06-22 09:32:57 --> Language Class Initialized
INFO - 2025-06-22 09:32:57 --> Language Class Initialized
INFO - 2025-06-22 09:32:57 --> Loader Class Initialized
INFO - 2025-06-22 09:32:57 --> Loader Class Initialized
INFO - 2025-06-22 09:32:57 --> Helper loaded: url_helper
INFO - 2025-06-22 09:32:57 --> Helper loaded: url_helper
INFO - 2025-06-22 09:32:57 --> Helper loaded: file_helper
INFO - 2025-06-22 09:32:57 --> Helper loaded: file_helper
INFO - 2025-06-22 09:32:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:32:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:32:57 --> Email Class Initialized
INFO - 2025-06-22 09:32:57 --> Email Class Initialized
DEBUG - 2025-06-22 09:32:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:32:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:32:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:32:57 --> Controller Class Initialized
INFO - 2025-06-22 09:32:57 --> Helper loaded: form_helper
INFO - 2025-06-22 09:32:57 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:32:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:32:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:32:57 --> Model "Crud" initialized
INFO - 2025-06-22 09:32:57 --> Final output sent to browser
DEBUG - 2025-06-22 09:32:57 --> Total execution time: 0.0140
INFO - 2025-06-22 09:32:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:32:57 --> Controller Class Initialized
INFO - 2025-06-22 09:32:57 --> Helper loaded: form_helper
INFO - 2025-06-22 09:32:57 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:32:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:32:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:32:57 --> Model "Crud" initialized
INFO - 2025-06-22 09:32:57 --> Final output sent to browser
DEBUG - 2025-06-22 09:32:57 --> Total execution time: 0.0263
INFO - 2025-06-22 09:33:07 --> Config Class Initialized
INFO - 2025-06-22 09:33:07 --> Config Class Initialized
INFO - 2025-06-22 09:33:07 --> Hooks Class Initialized
INFO - 2025-06-22 09:33:07 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:33:07 --> UTF-8 Support Enabled
DEBUG - 2025-06-22 09:33:07 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:33:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:33:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:33:07 --> URI Class Initialized
INFO - 2025-06-22 09:33:07 --> URI Class Initialized
INFO - 2025-06-22 09:33:07 --> Router Class Initialized
INFO - 2025-06-22 09:33:07 --> Router Class Initialized
INFO - 2025-06-22 09:33:07 --> Output Class Initialized
INFO - 2025-06-22 09:33:07 --> Output Class Initialized
INFO - 2025-06-22 09:33:07 --> Security Class Initialized
INFO - 2025-06-22 09:33:07 --> Security Class Initialized
DEBUG - 2025-06-22 09:33:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-22 09:33:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:33:07 --> Input Class Initialized
INFO - 2025-06-22 09:33:07 --> Language Class Initialized
INFO - 2025-06-22 09:33:07 --> Input Class Initialized
INFO - 2025-06-22 09:33:07 --> Language Class Initialized
INFO - 2025-06-22 09:33:07 --> Loader Class Initialized
INFO - 2025-06-22 09:33:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:33:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:33:07 --> Loader Class Initialized
INFO - 2025-06-22 09:33:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:33:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:33:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:33:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:33:07 --> Email Class Initialized
INFO - 2025-06-22 09:33:07 --> Email Class Initialized
DEBUG - 2025-06-22 09:33:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:33:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:33:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:33:07 --> Controller Class Initialized
INFO - 2025-06-22 09:33:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:33:07 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:33:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:33:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:33:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:33:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:33:07 --> Total execution time: 0.0145
INFO - 2025-06-22 09:33:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:33:07 --> Controller Class Initialized
INFO - 2025-06-22 09:33:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:33:07 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:33:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:33:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:33:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:33:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:33:07 --> Total execution time: 0.0268
INFO - 2025-06-22 09:33:17 --> Config Class Initialized
INFO - 2025-06-22 09:33:17 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:33:17 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:33:17 --> Utf8 Class Initialized
INFO - 2025-06-22 09:33:17 --> URI Class Initialized
INFO - 2025-06-22 09:33:17 --> Router Class Initialized
INFO - 2025-06-22 09:33:17 --> Output Class Initialized
INFO - 2025-06-22 09:33:17 --> Security Class Initialized
DEBUG - 2025-06-22 09:33:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:33:17 --> Input Class Initialized
INFO - 2025-06-22 09:33:17 --> Language Class Initialized
INFO - 2025-06-22 09:33:17 --> Loader Class Initialized
INFO - 2025-06-22 09:33:17 --> Helper loaded: url_helper
INFO - 2025-06-22 09:33:17 --> Helper loaded: file_helper
INFO - 2025-06-22 09:33:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:33:17 --> Config Class Initialized
INFO - 2025-06-22 09:33:17 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:33:17 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:33:17 --> Utf8 Class Initialized
INFO - 2025-06-22 09:33:17 --> URI Class Initialized
INFO - 2025-06-22 09:33:17 --> Router Class Initialized
INFO - 2025-06-22 09:33:17 --> Output Class Initialized
INFO - 2025-06-22 09:33:17 --> Security Class Initialized
DEBUG - 2025-06-22 09:33:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:33:17 --> Input Class Initialized
INFO - 2025-06-22 09:33:17 --> Language Class Initialized
INFO - 2025-06-22 09:33:17 --> Loader Class Initialized
INFO - 2025-06-22 09:33:17 --> Email Class Initialized
INFO - 2025-06-22 09:33:17 --> Helper loaded: url_helper
INFO - 2025-06-22 09:33:17 --> Helper loaded: file_helper
DEBUG - 2025-06-22 09:33:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:33:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:33:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:33:17 --> Controller Class Initialized
INFO - 2025-06-22 09:33:17 --> Helper loaded: form_helper
INFO - 2025-06-22 09:33:17 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:33:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:33:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:33:17 --> Email Class Initialized
DEBUG - 2025-06-22 09:33:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:33:17 --> Model "Crud" initialized
INFO - 2025-06-22 09:33:17 --> Final output sent to browser
DEBUG - 2025-06-22 09:33:17 --> Total execution time: 0.0136
INFO - 2025-06-22 09:33:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:33:17 --> Controller Class Initialized
INFO - 2025-06-22 09:33:17 --> Helper loaded: form_helper
INFO - 2025-06-22 09:33:17 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:33:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:33:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:33:17 --> Model "Crud" initialized
INFO - 2025-06-22 09:33:17 --> Final output sent to browser
DEBUG - 2025-06-22 09:33:17 --> Total execution time: 0.0245
INFO - 2025-06-22 09:33:27 --> Config Class Initialized
INFO - 2025-06-22 09:33:27 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:33:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:33:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:33:27 --> URI Class Initialized
INFO - 2025-06-22 09:33:27 --> Router Class Initialized
INFO - 2025-06-22 09:33:27 --> Output Class Initialized
INFO - 2025-06-22 09:33:27 --> Security Class Initialized
DEBUG - 2025-06-22 09:33:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:33:27 --> Input Class Initialized
INFO - 2025-06-22 09:33:27 --> Language Class Initialized
INFO - 2025-06-22 09:33:27 --> Loader Class Initialized
INFO - 2025-06-22 09:33:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:33:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:33:27 --> Config Class Initialized
INFO - 2025-06-22 09:33:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:33:27 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:33:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:33:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:33:27 --> URI Class Initialized
INFO - 2025-06-22 09:33:27 --> Router Class Initialized
INFO - 2025-06-22 09:33:27 --> Output Class Initialized
INFO - 2025-06-22 09:33:27 --> Security Class Initialized
DEBUG - 2025-06-22 09:33:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:33:27 --> Input Class Initialized
INFO - 2025-06-22 09:33:27 --> Language Class Initialized
INFO - 2025-06-22 09:33:27 --> Loader Class Initialized
INFO - 2025-06-22 09:33:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:33:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:33:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:33:27 --> Email Class Initialized
DEBUG - 2025-06-22 09:33:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:33:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:33:27 --> Controller Class Initialized
INFO - 2025-06-22 09:33:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:33:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:33:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:33:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:33:27 --> Email Class Initialized
DEBUG - 2025-06-22 09:33:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:33:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:33:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:33:27 --> Total execution time: 0.0139
INFO - 2025-06-22 09:33:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:33:27 --> Controller Class Initialized
INFO - 2025-06-22 09:33:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:33:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:33:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:33:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:33:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:33:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:33:27 --> Total execution time: 0.0251
INFO - 2025-06-22 09:33:37 --> Config Class Initialized
INFO - 2025-06-22 09:33:37 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:33:37 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:33:37 --> Utf8 Class Initialized
INFO - 2025-06-22 09:33:37 --> URI Class Initialized
INFO - 2025-06-22 09:33:37 --> Config Class Initialized
INFO - 2025-06-22 09:33:37 --> Hooks Class Initialized
INFO - 2025-06-22 09:33:37 --> Router Class Initialized
DEBUG - 2025-06-22 09:33:37 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:33:37 --> Output Class Initialized
INFO - 2025-06-22 09:33:37 --> Utf8 Class Initialized
INFO - 2025-06-22 09:33:37 --> Security Class Initialized
INFO - 2025-06-22 09:33:37 --> URI Class Initialized
DEBUG - 2025-06-22 09:33:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:33:37 --> Input Class Initialized
INFO - 2025-06-22 09:33:37 --> Router Class Initialized
INFO - 2025-06-22 09:33:37 --> Language Class Initialized
INFO - 2025-06-22 09:33:37 --> Output Class Initialized
INFO - 2025-06-22 09:33:37 --> Security Class Initialized
INFO - 2025-06-22 09:33:37 --> Loader Class Initialized
DEBUG - 2025-06-22 09:33:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:33:37 --> Helper loaded: url_helper
INFO - 2025-06-22 09:33:37 --> Input Class Initialized
INFO - 2025-06-22 09:33:37 --> Helper loaded: file_helper
INFO - 2025-06-22 09:33:37 --> Language Class Initialized
INFO - 2025-06-22 09:33:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:33:37 --> Loader Class Initialized
INFO - 2025-06-22 09:33:37 --> Helper loaded: url_helper
INFO - 2025-06-22 09:33:37 --> Helper loaded: file_helper
INFO - 2025-06-22 09:33:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:33:37 --> Email Class Initialized
INFO - 2025-06-22 09:33:37 --> Email Class Initialized
DEBUG - 2025-06-22 09:33:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:33:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:33:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:33:37 --> Controller Class Initialized
INFO - 2025-06-22 09:33:37 --> Helper loaded: form_helper
INFO - 2025-06-22 09:33:37 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:33:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:33:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:33:37 --> Model "Crud" initialized
INFO - 2025-06-22 09:33:37 --> Final output sent to browser
DEBUG - 2025-06-22 09:33:37 --> Total execution time: 0.0132
INFO - 2025-06-22 09:33:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:33:37 --> Controller Class Initialized
INFO - 2025-06-22 09:33:37 --> Helper loaded: form_helper
INFO - 2025-06-22 09:33:37 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:33:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:33:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:33:37 --> Model "Crud" initialized
INFO - 2025-06-22 09:33:37 --> Final output sent to browser
DEBUG - 2025-06-22 09:33:37 --> Total execution time: 0.0254
INFO - 2025-06-22 09:33:47 --> Config Class Initialized
INFO - 2025-06-22 09:33:47 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:33:47 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:33:47 --> Utf8 Class Initialized
INFO - 2025-06-22 09:33:47 --> URI Class Initialized
INFO - 2025-06-22 09:33:47 --> Router Class Initialized
INFO - 2025-06-22 09:33:47 --> Config Class Initialized
INFO - 2025-06-22 09:33:47 --> Output Class Initialized
INFO - 2025-06-22 09:33:47 --> Hooks Class Initialized
INFO - 2025-06-22 09:33:47 --> Security Class Initialized
DEBUG - 2025-06-22 09:33:47 --> UTF-8 Support Enabled
DEBUG - 2025-06-22 09:33:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:33:47 --> Input Class Initialized
INFO - 2025-06-22 09:33:47 --> Language Class Initialized
INFO - 2025-06-22 09:33:47 --> Utf8 Class Initialized
INFO - 2025-06-22 09:33:47 --> Loader Class Initialized
INFO - 2025-06-22 09:33:47 --> URI Class Initialized
INFO - 2025-06-22 09:33:47 --> Helper loaded: url_helper
INFO - 2025-06-22 09:33:47 --> Helper loaded: file_helper
INFO - 2025-06-22 09:33:47 --> Router Class Initialized
INFO - 2025-06-22 09:33:47 --> Output Class Initialized
INFO - 2025-06-22 09:33:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:33:47 --> Security Class Initialized
DEBUG - 2025-06-22 09:33:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:33:47 --> Input Class Initialized
INFO - 2025-06-22 09:33:47 --> Language Class Initialized
INFO - 2025-06-22 09:33:47 --> Loader Class Initialized
INFO - 2025-06-22 09:33:47 --> Helper loaded: url_helper
INFO - 2025-06-22 09:33:47 --> Helper loaded: file_helper
INFO - 2025-06-22 09:33:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:33:47 --> Email Class Initialized
DEBUG - 2025-06-22 09:33:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:33:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:33:47 --> Controller Class Initialized
INFO - 2025-06-22 09:33:47 --> Helper loaded: form_helper
INFO - 2025-06-22 09:33:47 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:33:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:33:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:33:47 --> Email Class Initialized
DEBUG - 2025-06-22 09:33:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:33:47 --> Model "Crud" initialized
INFO - 2025-06-22 09:33:47 --> Final output sent to browser
DEBUG - 2025-06-22 09:33:47 --> Total execution time: 0.0146
INFO - 2025-06-22 09:33:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:33:47 --> Controller Class Initialized
INFO - 2025-06-22 09:33:47 --> Helper loaded: form_helper
INFO - 2025-06-22 09:33:47 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:33:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:33:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:33:47 --> Model "Crud" initialized
INFO - 2025-06-22 09:33:47 --> Final output sent to browser
DEBUG - 2025-06-22 09:33:47 --> Total execution time: 0.0260
INFO - 2025-06-22 09:33:57 --> Config Class Initialized
INFO - 2025-06-22 09:33:57 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:33:57 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:33:57 --> Utf8 Class Initialized
INFO - 2025-06-22 09:33:57 --> URI Class Initialized
INFO - 2025-06-22 09:33:57 --> Config Class Initialized
INFO - 2025-06-22 09:33:57 --> Hooks Class Initialized
INFO - 2025-06-22 09:33:57 --> Router Class Initialized
DEBUG - 2025-06-22 09:33:57 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:33:57 --> Output Class Initialized
INFO - 2025-06-22 09:33:57 --> Utf8 Class Initialized
INFO - 2025-06-22 09:33:57 --> Security Class Initialized
INFO - 2025-06-22 09:33:57 --> URI Class Initialized
DEBUG - 2025-06-22 09:33:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:33:57 --> Router Class Initialized
INFO - 2025-06-22 09:33:57 --> Input Class Initialized
INFO - 2025-06-22 09:33:57 --> Output Class Initialized
INFO - 2025-06-22 09:33:57 --> Language Class Initialized
INFO - 2025-06-22 09:33:57 --> Security Class Initialized
DEBUG - 2025-06-22 09:33:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:33:57 --> Input Class Initialized
INFO - 2025-06-22 09:33:57 --> Loader Class Initialized
INFO - 2025-06-22 09:33:57 --> Language Class Initialized
INFO - 2025-06-22 09:33:57 --> Helper loaded: url_helper
INFO - 2025-06-22 09:33:57 --> Helper loaded: file_helper
INFO - 2025-06-22 09:33:57 --> Loader Class Initialized
INFO - 2025-06-22 09:33:57 --> Helper loaded: url_helper
INFO - 2025-06-22 09:33:57 --> Helper loaded: file_helper
INFO - 2025-06-22 09:33:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:33:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:33:57 --> Email Class Initialized
INFO - 2025-06-22 09:33:57 --> Email Class Initialized
DEBUG - 2025-06-22 09:33:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:33:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:33:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:33:57 --> Controller Class Initialized
INFO - 2025-06-22 09:33:57 --> Helper loaded: form_helper
INFO - 2025-06-22 09:33:57 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:33:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:33:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:33:57 --> Model "Crud" initialized
INFO - 2025-06-22 09:33:57 --> Final output sent to browser
DEBUG - 2025-06-22 09:33:57 --> Total execution time: 0.0136
INFO - 2025-06-22 09:33:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:33:57 --> Controller Class Initialized
INFO - 2025-06-22 09:33:57 --> Helper loaded: form_helper
INFO - 2025-06-22 09:33:57 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:33:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:33:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:33:57 --> Model "Crud" initialized
INFO - 2025-06-22 09:33:57 --> Final output sent to browser
DEBUG - 2025-06-22 09:33:57 --> Total execution time: 0.0253
INFO - 2025-06-22 09:34:07 --> Config Class Initialized
INFO - 2025-06-22 09:34:07 --> Config Class Initialized
INFO - 2025-06-22 09:34:07 --> Hooks Class Initialized
INFO - 2025-06-22 09:34:07 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:34:07 --> UTF-8 Support Enabled
DEBUG - 2025-06-22 09:34:07 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:34:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:34:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:34:07 --> URI Class Initialized
INFO - 2025-06-22 09:34:07 --> URI Class Initialized
INFO - 2025-06-22 09:34:07 --> Router Class Initialized
INFO - 2025-06-22 09:34:07 --> Router Class Initialized
INFO - 2025-06-22 09:34:07 --> Output Class Initialized
INFO - 2025-06-22 09:34:07 --> Security Class Initialized
INFO - 2025-06-22 09:34:07 --> Output Class Initialized
DEBUG - 2025-06-22 09:34:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:34:07 --> Security Class Initialized
DEBUG - 2025-06-22 09:34:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:34:07 --> Input Class Initialized
INFO - 2025-06-22 09:34:07 --> Input Class Initialized
INFO - 2025-06-22 09:34:07 --> Language Class Initialized
INFO - 2025-06-22 09:34:07 --> Language Class Initialized
INFO - 2025-06-22 09:34:07 --> Loader Class Initialized
INFO - 2025-06-22 09:34:07 --> Loader Class Initialized
INFO - 2025-06-22 09:34:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:34:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:34:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:34:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:34:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:34:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:34:07 --> Email Class Initialized
INFO - 2025-06-22 09:34:07 --> Email Class Initialized
DEBUG - 2025-06-22 09:34:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:34:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:34:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:34:07 --> Controller Class Initialized
INFO - 2025-06-22 09:34:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:34:07 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:34:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:34:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:34:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:34:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:34:07 --> Total execution time: 0.0149
INFO - 2025-06-22 09:34:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:34:07 --> Controller Class Initialized
INFO - 2025-06-22 09:34:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:34:07 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:34:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:34:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:34:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:34:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:34:07 --> Total execution time: 0.0270
INFO - 2025-06-22 09:34:17 --> Config Class Initialized
INFO - 2025-06-22 09:34:17 --> Config Class Initialized
INFO - 2025-06-22 09:34:17 --> Hooks Class Initialized
INFO - 2025-06-22 09:34:17 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:34:17 --> UTF-8 Support Enabled
DEBUG - 2025-06-22 09:34:17 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:34:17 --> Utf8 Class Initialized
INFO - 2025-06-22 09:34:17 --> Utf8 Class Initialized
INFO - 2025-06-22 09:34:17 --> URI Class Initialized
INFO - 2025-06-22 09:34:17 --> URI Class Initialized
INFO - 2025-06-22 09:34:17 --> Router Class Initialized
INFO - 2025-06-22 09:34:17 --> Router Class Initialized
INFO - 2025-06-22 09:34:17 --> Output Class Initialized
INFO - 2025-06-22 09:34:17 --> Output Class Initialized
INFO - 2025-06-22 09:34:17 --> Security Class Initialized
INFO - 2025-06-22 09:34:17 --> Security Class Initialized
DEBUG - 2025-06-22 09:34:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-22 09:34:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:34:17 --> Input Class Initialized
INFO - 2025-06-22 09:34:17 --> Input Class Initialized
INFO - 2025-06-22 09:34:17 --> Language Class Initialized
INFO - 2025-06-22 09:34:17 --> Language Class Initialized
INFO - 2025-06-22 09:34:17 --> Loader Class Initialized
INFO - 2025-06-22 09:34:17 --> Loader Class Initialized
INFO - 2025-06-22 09:34:17 --> Helper loaded: url_helper
INFO - 2025-06-22 09:34:17 --> Helper loaded: url_helper
INFO - 2025-06-22 09:34:17 --> Helper loaded: file_helper
INFO - 2025-06-22 09:34:17 --> Helper loaded: file_helper
INFO - 2025-06-22 09:34:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:34:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:34:17 --> Email Class Initialized
INFO - 2025-06-22 09:34:17 --> Email Class Initialized
DEBUG - 2025-06-22 09:34:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:34:17 --> Session: Class initialized using 'files' driver.
DEBUG - 2025-06-22 09:34:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:34:17 --> Controller Class Initialized
INFO - 2025-06-22 09:34:17 --> Helper loaded: form_helper
INFO - 2025-06-22 09:34:17 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:34:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:34:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:34:17 --> Model "Crud" initialized
INFO - 2025-06-22 09:34:17 --> Final output sent to browser
DEBUG - 2025-06-22 09:34:17 --> Total execution time: 0.0141
INFO - 2025-06-22 09:34:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:34:17 --> Controller Class Initialized
INFO - 2025-06-22 09:34:17 --> Helper loaded: form_helper
INFO - 2025-06-22 09:34:17 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:34:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:34:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:34:17 --> Model "Crud" initialized
INFO - 2025-06-22 09:34:17 --> Final output sent to browser
DEBUG - 2025-06-22 09:34:17 --> Total execution time: 0.0249
INFO - 2025-06-22 09:34:27 --> Config Class Initialized
INFO - 2025-06-22 09:34:27 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:34:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:34:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:34:27 --> URI Class Initialized
INFO - 2025-06-22 09:34:27 --> Config Class Initialized
INFO - 2025-06-22 09:34:27 --> Router Class Initialized
INFO - 2025-06-22 09:34:27 --> Hooks Class Initialized
INFO - 2025-06-22 09:34:27 --> Output Class Initialized
DEBUG - 2025-06-22 09:34:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:34:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:34:27 --> Security Class Initialized
INFO - 2025-06-22 09:34:27 --> URI Class Initialized
DEBUG - 2025-06-22 09:34:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:34:27 --> Router Class Initialized
INFO - 2025-06-22 09:34:27 --> Input Class Initialized
INFO - 2025-06-22 09:34:27 --> Output Class Initialized
INFO - 2025-06-22 09:34:27 --> Language Class Initialized
INFO - 2025-06-22 09:34:27 --> Security Class Initialized
DEBUG - 2025-06-22 09:34:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:34:27 --> Input Class Initialized
INFO - 2025-06-22 09:34:27 --> Language Class Initialized
INFO - 2025-06-22 09:34:27 --> Loader Class Initialized
INFO - 2025-06-22 09:34:27 --> Loader Class Initialized
INFO - 2025-06-22 09:34:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:34:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:34:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:34:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:34:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:34:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:34:27 --> Email Class Initialized
DEBUG - 2025-06-22 09:34:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:34:27 --> Email Class Initialized
INFO - 2025-06-22 09:34:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:34:27 --> Controller Class Initialized
DEBUG - 2025-06-22 09:34:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:34:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:34:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:34:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:34:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:34:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:34:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:34:27 --> Total execution time: 0.0137
INFO - 2025-06-22 09:34:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:34:27 --> Controller Class Initialized
INFO - 2025-06-22 09:34:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:34:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:34:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:34:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:34:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:34:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:34:27 --> Total execution time: 0.0267
INFO - 2025-06-22 09:34:37 --> Config Class Initialized
INFO - 2025-06-22 09:34:37 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:34:37 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:34:37 --> Utf8 Class Initialized
INFO - 2025-06-22 09:34:37 --> URI Class Initialized
INFO - 2025-06-22 09:34:37 --> Router Class Initialized
INFO - 2025-06-22 09:34:37 --> Config Class Initialized
INFO - 2025-06-22 09:34:37 --> Output Class Initialized
INFO - 2025-06-22 09:34:37 --> Hooks Class Initialized
INFO - 2025-06-22 09:34:37 --> Security Class Initialized
DEBUG - 2025-06-22 09:34:37 --> UTF-8 Support Enabled
DEBUG - 2025-06-22 09:34:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:34:37 --> Utf8 Class Initialized
INFO - 2025-06-22 09:34:37 --> Input Class Initialized
INFO - 2025-06-22 09:34:37 --> URI Class Initialized
INFO - 2025-06-22 09:34:37 --> Router Class Initialized
INFO - 2025-06-22 09:34:37 --> Output Class Initialized
INFO - 2025-06-22 09:34:37 --> Security Class Initialized
INFO - 2025-06-22 09:34:37 --> Language Class Initialized
DEBUG - 2025-06-22 09:34:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:34:37 --> Input Class Initialized
INFO - 2025-06-22 09:34:37 --> Language Class Initialized
INFO - 2025-06-22 09:34:37 --> Loader Class Initialized
INFO - 2025-06-22 09:34:37 --> Loader Class Initialized
INFO - 2025-06-22 09:34:37 --> Helper loaded: url_helper
INFO - 2025-06-22 09:34:37 --> Helper loaded: url_helper
INFO - 2025-06-22 09:34:37 --> Helper loaded: file_helper
INFO - 2025-06-22 09:34:37 --> Helper loaded: file_helper
INFO - 2025-06-22 09:34:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:34:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:34:37 --> Email Class Initialized
INFO - 2025-06-22 09:34:37 --> Email Class Initialized
DEBUG - 2025-06-22 09:34:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:34:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:34:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:34:37 --> Controller Class Initialized
INFO - 2025-06-22 09:34:37 --> Helper loaded: form_helper
INFO - 2025-06-22 09:34:37 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:34:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:34:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:34:37 --> Model "Crud" initialized
INFO - 2025-06-22 09:34:37 --> Final output sent to browser
DEBUG - 2025-06-22 09:34:37 --> Total execution time: 0.0160
INFO - 2025-06-22 09:34:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:34:37 --> Controller Class Initialized
INFO - 2025-06-22 09:34:37 --> Helper loaded: form_helper
INFO - 2025-06-22 09:34:37 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:34:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:34:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:34:37 --> Model "Crud" initialized
INFO - 2025-06-22 09:34:37 --> Final output sent to browser
DEBUG - 2025-06-22 09:34:37 --> Total execution time: 0.0296
INFO - 2025-06-22 09:34:54 --> Config Class Initialized
INFO - 2025-06-22 09:34:54 --> Config Class Initialized
INFO - 2025-06-22 09:34:54 --> Hooks Class Initialized
INFO - 2025-06-22 09:34:54 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:34:54 --> UTF-8 Support Enabled
DEBUG - 2025-06-22 09:34:54 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:34:54 --> Utf8 Class Initialized
INFO - 2025-06-22 09:34:54 --> Utf8 Class Initialized
INFO - 2025-06-22 09:34:54 --> URI Class Initialized
INFO - 2025-06-22 09:34:54 --> URI Class Initialized
INFO - 2025-06-22 09:34:54 --> Router Class Initialized
INFO - 2025-06-22 09:34:54 --> Router Class Initialized
INFO - 2025-06-22 09:34:54 --> Output Class Initialized
INFO - 2025-06-22 09:34:54 --> Output Class Initialized
INFO - 2025-06-22 09:34:54 --> Security Class Initialized
INFO - 2025-06-22 09:34:54 --> Security Class Initialized
DEBUG - 2025-06-22 09:34:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-22 09:34:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:34:54 --> Input Class Initialized
INFO - 2025-06-22 09:34:54 --> Input Class Initialized
INFO - 2025-06-22 09:34:54 --> Language Class Initialized
INFO - 2025-06-22 09:34:54 --> Language Class Initialized
INFO - 2025-06-22 09:34:54 --> Loader Class Initialized
INFO - 2025-06-22 09:34:54 --> Loader Class Initialized
INFO - 2025-06-22 09:34:54 --> Helper loaded: url_helper
INFO - 2025-06-22 09:34:54 --> Helper loaded: file_helper
INFO - 2025-06-22 09:34:54 --> Helper loaded: url_helper
INFO - 2025-06-22 09:34:54 --> Database Driver Class Initialized
INFO - 2025-06-22 09:34:54 --> Helper loaded: file_helper
INFO - 2025-06-22 09:34:54 --> Database Driver Class Initialized
INFO - 2025-06-22 09:34:54 --> Email Class Initialized
INFO - 2025-06-22 09:34:54 --> Email Class Initialized
DEBUG - 2025-06-22 09:34:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:34:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:34:54 --> Controller Class Initialized
INFO - 2025-06-22 09:34:54 --> Helper loaded: form_helper
INFO - 2025-06-22 09:34:54 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:34:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:34:54 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:34:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:34:54 --> Model "Crud" initialized
INFO - 2025-06-22 09:34:54 --> Final output sent to browser
DEBUG - 2025-06-22 09:34:54 --> Total execution time: 0.0280
INFO - 2025-06-22 09:34:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:34:54 --> Controller Class Initialized
INFO - 2025-06-22 09:34:54 --> Helper loaded: form_helper
INFO - 2025-06-22 09:34:54 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:34:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:34:54 --> Database Driver Class Initialized
INFO - 2025-06-22 09:34:54 --> Model "Crud" initialized
INFO - 2025-06-22 09:34:54 --> Final output sent to browser
DEBUG - 2025-06-22 09:34:54 --> Total execution time: 0.0510
INFO - 2025-06-22 09:34:57 --> Config Class Initialized
INFO - 2025-06-22 09:34:57 --> Config Class Initialized
INFO - 2025-06-22 09:34:57 --> Hooks Class Initialized
INFO - 2025-06-22 09:34:57 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:34:57 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:34:57 --> Utf8 Class Initialized
DEBUG - 2025-06-22 09:34:57 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:34:57 --> Utf8 Class Initialized
INFO - 2025-06-22 09:34:57 --> URI Class Initialized
INFO - 2025-06-22 09:34:57 --> URI Class Initialized
INFO - 2025-06-22 09:34:57 --> Router Class Initialized
INFO - 2025-06-22 09:34:57 --> Output Class Initialized
INFO - 2025-06-22 09:34:57 --> Router Class Initialized
INFO - 2025-06-22 09:34:57 --> Security Class Initialized
INFO - 2025-06-22 09:34:57 --> Output Class Initialized
DEBUG - 2025-06-22 09:34:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:34:57 --> Security Class Initialized
INFO - 2025-06-22 09:34:57 --> Input Class Initialized
DEBUG - 2025-06-22 09:34:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:34:57 --> Language Class Initialized
INFO - 2025-06-22 09:34:57 --> Input Class Initialized
INFO - 2025-06-22 09:34:57 --> Loader Class Initialized
INFO - 2025-06-22 09:34:57 --> Language Class Initialized
INFO - 2025-06-22 09:34:57 --> Helper loaded: url_helper
INFO - 2025-06-22 09:34:57 --> Helper loaded: file_helper
INFO - 2025-06-22 09:34:57 --> Loader Class Initialized
INFO - 2025-06-22 09:34:57 --> Helper loaded: url_helper
INFO - 2025-06-22 09:34:57 --> Helper loaded: file_helper
INFO - 2025-06-22 09:34:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:34:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:34:57 --> Email Class Initialized
INFO - 2025-06-22 09:34:57 --> Email Class Initialized
DEBUG - 2025-06-22 09:34:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:34:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:34:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:34:57 --> Controller Class Initialized
INFO - 2025-06-22 09:34:57 --> Helper loaded: form_helper
INFO - 2025-06-22 09:34:57 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:34:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:34:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:34:57 --> Model "Crud" initialized
INFO - 2025-06-22 09:34:57 --> Final output sent to browser
DEBUG - 2025-06-22 09:34:57 --> Total execution time: 0.0152
INFO - 2025-06-22 09:34:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:34:57 --> Controller Class Initialized
INFO - 2025-06-22 09:34:57 --> Helper loaded: form_helper
INFO - 2025-06-22 09:34:57 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:34:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:34:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:34:57 --> Model "Crud" initialized
INFO - 2025-06-22 09:34:57 --> Final output sent to browser
DEBUG - 2025-06-22 09:34:57 --> Total execution time: 0.0282
INFO - 2025-06-22 09:35:07 --> Config Class Initialized
INFO - 2025-06-22 09:35:07 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:35:07 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:35:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:35:07 --> URI Class Initialized
INFO - 2025-06-22 09:35:07 --> Router Class Initialized
INFO - 2025-06-22 09:35:07 --> Output Class Initialized
INFO - 2025-06-22 09:35:07 --> Security Class Initialized
DEBUG - 2025-06-22 09:35:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:35:07 --> Input Class Initialized
INFO - 2025-06-22 09:35:07 --> Language Class Initialized
INFO - 2025-06-22 09:35:07 --> Loader Class Initialized
INFO - 2025-06-22 09:35:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:35:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:35:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:35:07 --> Config Class Initialized
INFO - 2025-06-22 09:35:07 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:35:07 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:35:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:35:07 --> URI Class Initialized
INFO - 2025-06-22 09:35:07 --> Router Class Initialized
INFO - 2025-06-22 09:35:07 --> Output Class Initialized
INFO - 2025-06-22 09:35:07 --> Security Class Initialized
DEBUG - 2025-06-22 09:35:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:35:07 --> Input Class Initialized
INFO - 2025-06-22 09:35:07 --> Language Class Initialized
INFO - 2025-06-22 09:35:07 --> Loader Class Initialized
INFO - 2025-06-22 09:35:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:35:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:35:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:35:07 --> Email Class Initialized
DEBUG - 2025-06-22 09:35:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:35:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:35:07 --> Controller Class Initialized
INFO - 2025-06-22 09:35:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:35:07 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:35:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:35:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:35:07 --> Email Class Initialized
DEBUG - 2025-06-22 09:35:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:35:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:35:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:35:07 --> Total execution time: 0.0173
INFO - 2025-06-22 09:35:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:35:07 --> Controller Class Initialized
INFO - 2025-06-22 09:35:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:35:07 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:35:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:35:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:35:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:35:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:35:07 --> Total execution time: 0.0298
INFO - 2025-06-22 09:36:52 --> Config Class Initialized
INFO - 2025-06-22 09:36:52 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:36:52 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:36:52 --> Utf8 Class Initialized
INFO - 2025-06-22 09:36:52 --> URI Class Initialized
INFO - 2025-06-22 09:36:52 --> Router Class Initialized
INFO - 2025-06-22 09:36:52 --> Output Class Initialized
INFO - 2025-06-22 09:36:52 --> Security Class Initialized
DEBUG - 2025-06-22 09:36:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:36:52 --> Input Class Initialized
INFO - 2025-06-22 09:36:52 --> Language Class Initialized
INFO - 2025-06-22 09:36:52 --> Loader Class Initialized
INFO - 2025-06-22 09:36:52 --> Helper loaded: url_helper
INFO - 2025-06-22 09:36:52 --> Helper loaded: file_helper
INFO - 2025-06-22 09:36:52 --> Database Driver Class Initialized
INFO - 2025-06-22 09:36:52 --> Email Class Initialized
DEBUG - 2025-06-22 09:36:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:36:52 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:36:52 --> Controller Class Initialized
INFO - 2025-06-22 09:36:52 --> Model "FormTestModel" initialized
INFO - 2025-06-22 09:36:52 --> Helper loaded: form_helper
INFO - 2025-06-22 09:36:52 --> Form Validation Class Initialized
INFO - 2025-06-22 09:36:52 --> Database Driver Class Initialized
INFO - 2025-06-22 09:36:52 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:36:52 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:36:52 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:36:52 --> File loaded: /var/www/html/hris_lnd/application/views/template/header_mobile_lnd.php
INFO - 2025-06-22 09:36:52 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/form-test.php
INFO - 2025-06-22 09:36:52 --> Final output sent to browser
DEBUG - 2025-06-22 09:36:52 --> Total execution time: 0.0362
INFO - 2025-06-22 09:36:52 --> Config Class Initialized
INFO - 2025-06-22 09:36:52 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:36:52 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:36:52 --> Utf8 Class Initialized
INFO - 2025-06-22 09:36:52 --> URI Class Initialized
INFO - 2025-06-22 09:36:52 --> Router Class Initialized
INFO - 2025-06-22 09:36:52 --> Output Class Initialized
INFO - 2025-06-22 09:36:52 --> Security Class Initialized
DEBUG - 2025-06-22 09:36:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:36:52 --> Input Class Initialized
INFO - 2025-06-22 09:36:52 --> Language Class Initialized
INFO - 2025-06-22 09:36:52 --> Loader Class Initialized
INFO - 2025-06-22 09:36:52 --> Helper loaded: url_helper
INFO - 2025-06-22 09:36:52 --> Helper loaded: file_helper
INFO - 2025-06-22 09:36:52 --> Database Driver Class Initialized
INFO - 2025-06-22 09:36:52 --> Email Class Initialized
DEBUG - 2025-06-22 09:36:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:36:52 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:36:52 --> Controller Class Initialized
INFO - 2025-06-22 09:36:52 --> Helper loaded: form_helper
INFO - 2025-06-22 09:36:52 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:36:52 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:36:52 --> Database Driver Class Initialized
INFO - 2025-06-22 09:36:52 --> Model "Crud" initialized
INFO - 2025-06-22 09:36:52 --> Final output sent to browser
DEBUG - 2025-06-22 09:36:52 --> Total execution time: 0.0694
INFO - 2025-06-22 09:37:54 --> Config Class Initialized
INFO - 2025-06-22 09:37:54 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:37:54 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:37:54 --> Utf8 Class Initialized
INFO - 2025-06-22 09:37:54 --> URI Class Initialized
INFO - 2025-06-22 09:37:54 --> Router Class Initialized
INFO - 2025-06-22 09:37:54 --> Output Class Initialized
INFO - 2025-06-22 09:37:54 --> Security Class Initialized
DEBUG - 2025-06-22 09:37:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:37:54 --> Input Class Initialized
INFO - 2025-06-22 09:37:54 --> Language Class Initialized
INFO - 2025-06-22 09:37:54 --> Loader Class Initialized
INFO - 2025-06-22 09:37:54 --> Helper loaded: url_helper
INFO - 2025-06-22 09:37:54 --> Helper loaded: file_helper
INFO - 2025-06-22 09:37:54 --> Database Driver Class Initialized
INFO - 2025-06-22 09:37:54 --> Config Class Initialized
INFO - 2025-06-22 09:37:54 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:37:54 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:37:54 --> Utf8 Class Initialized
INFO - 2025-06-22 09:37:54 --> URI Class Initialized
INFO - 2025-06-22 09:37:54 --> Router Class Initialized
INFO - 2025-06-22 09:37:54 --> Output Class Initialized
INFO - 2025-06-22 09:37:54 --> Security Class Initialized
DEBUG - 2025-06-22 09:37:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:37:54 --> Input Class Initialized
INFO - 2025-06-22 09:37:54 --> Language Class Initialized
INFO - 2025-06-22 09:37:54 --> Loader Class Initialized
INFO - 2025-06-22 09:37:54 --> Helper loaded: url_helper
INFO - 2025-06-22 09:37:54 --> Helper loaded: file_helper
INFO - 2025-06-22 09:37:54 --> Database Driver Class Initialized
INFO - 2025-06-22 09:37:54 --> Email Class Initialized
DEBUG - 2025-06-22 09:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:37:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:37:54 --> Controller Class Initialized
INFO - 2025-06-22 09:37:54 --> Helper loaded: form_helper
INFO - 2025-06-22 09:37:54 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:37:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:37:54 --> Database Driver Class Initialized
INFO - 2025-06-22 09:37:54 --> Model "Crud" initialized
INFO - 2025-06-22 09:37:54 --> Email Class Initialized
DEBUG - 2025-06-22 09:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:37:54 --> Final output sent to browser
DEBUG - 2025-06-22 09:37:54 --> Total execution time: 0.0398
INFO - 2025-06-22 09:37:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:37:54 --> Controller Class Initialized
INFO - 2025-06-22 09:37:54 --> Helper loaded: form_helper
INFO - 2025-06-22 09:37:54 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:37:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:37:54 --> Database Driver Class Initialized
INFO - 2025-06-22 09:37:54 --> Model "Crud" initialized
INFO - 2025-06-22 09:37:54 --> Final output sent to browser
DEBUG - 2025-06-22 09:37:54 --> Total execution time: 0.1148
INFO - 2025-06-22 09:37:56 --> Config Class Initialized
INFO - 2025-06-22 09:37:56 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:37:56 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:37:56 --> Utf8 Class Initialized
INFO - 2025-06-22 09:37:56 --> URI Class Initialized
INFO - 2025-06-22 09:37:56 --> Router Class Initialized
INFO - 2025-06-22 09:37:56 --> Output Class Initialized
INFO - 2025-06-22 09:37:56 --> Security Class Initialized
DEBUG - 2025-06-22 09:37:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:37:56 --> Input Class Initialized
INFO - 2025-06-22 09:37:56 --> Language Class Initialized
INFO - 2025-06-22 09:37:56 --> Loader Class Initialized
INFO - 2025-06-22 09:37:56 --> Helper loaded: url_helper
INFO - 2025-06-22 09:37:56 --> Helper loaded: file_helper
INFO - 2025-06-22 09:37:56 --> Database Driver Class Initialized
INFO - 2025-06-22 09:37:56 --> Email Class Initialized
DEBUG - 2025-06-22 09:37:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:37:56 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:37:56 --> Controller Class Initialized
INFO - 2025-06-22 09:37:56 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:37:56 --> Helper loaded: form_helper
INFO - 2025-06-22 09:37:56 --> Form Validation Class Initialized
INFO - 2025-06-22 09:37:56 --> Database Driver Class Initialized
INFO - 2025-06-22 09:37:56 --> Model "Crud" initialized
INFO - 2025-06-22 09:37:56 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:37:56 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:37:56 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:37:56 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:37:56 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:37:56 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-22 09:37:56 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/master-form-test.php
INFO - 2025-06-22 09:37:56 --> Final output sent to browser
DEBUG - 2025-06-22 09:37:56 --> Total execution time: 0.0101
INFO - 2025-06-22 09:37:56 --> Config Class Initialized
INFO - 2025-06-22 09:37:56 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:37:56 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:37:56 --> Utf8 Class Initialized
INFO - 2025-06-22 09:37:56 --> URI Class Initialized
INFO - 2025-06-22 09:37:56 --> Router Class Initialized
INFO - 2025-06-22 09:37:56 --> Output Class Initialized
INFO - 2025-06-22 09:37:56 --> Security Class Initialized
DEBUG - 2025-06-22 09:37:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:37:56 --> Input Class Initialized
INFO - 2025-06-22 09:37:56 --> Language Class Initialized
INFO - 2025-06-22 09:37:56 --> Loader Class Initialized
INFO - 2025-06-22 09:37:56 --> Helper loaded: url_helper
INFO - 2025-06-22 09:37:56 --> Helper loaded: file_helper
INFO - 2025-06-22 09:37:56 --> Database Driver Class Initialized
INFO - 2025-06-22 09:37:56 --> Email Class Initialized
DEBUG - 2025-06-22 09:37:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:37:56 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:37:56 --> Controller Class Initialized
INFO - 2025-06-22 09:37:56 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:37:56 --> Helper loaded: form_helper
INFO - 2025-06-22 09:37:56 --> Form Validation Class Initialized
INFO - 2025-06-22 09:37:56 --> Database Driver Class Initialized
INFO - 2025-06-22 09:37:56 --> Model "Crud" initialized
INFO - 2025-06-22 09:37:56 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:37:56 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:37:56 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:37:56 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:37:56 --> Session class already loaded. Second attempt ignored.
ERROR - 2025-06-22 09:37:56 --> Query error: Illegal mix of collations (utf8mb4_0900_ai_ci,IMPLICIT) and (utf8mb3_general_ci,COERCIBLE) for operation '=' - Invalid query: SELECT a.* FROM setting_users a JOIN users b ON a.users_id = b.username WHERE a.menus_id='‚ZjXì' and b.username='admin'
INFO - 2025-06-22 09:37:56 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-22 09:37:56 --> Config Class Initialized
INFO - 2025-06-22 09:37:56 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:37:56 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:37:56 --> Utf8 Class Initialized
INFO - 2025-06-22 09:37:56 --> URI Class Initialized
INFO - 2025-06-22 09:37:56 --> Router Class Initialized
INFO - 2025-06-22 09:37:56 --> Output Class Initialized
INFO - 2025-06-22 09:37:56 --> Security Class Initialized
DEBUG - 2025-06-22 09:37:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:37:56 --> Input Class Initialized
INFO - 2025-06-22 09:37:56 --> Language Class Initialized
INFO - 2025-06-22 09:37:56 --> Loader Class Initialized
INFO - 2025-06-22 09:37:56 --> Helper loaded: url_helper
INFO - 2025-06-22 09:37:56 --> Helper loaded: file_helper
INFO - 2025-06-22 09:37:56 --> Database Driver Class Initialized
INFO - 2025-06-22 09:37:56 --> Email Class Initialized
DEBUG - 2025-06-22 09:37:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:37:56 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:37:56 --> Controller Class Initialized
INFO - 2025-06-22 09:37:56 --> Helper loaded: form_helper
INFO - 2025-06-22 09:37:56 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:37:56 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:37:56 --> Database Driver Class Initialized
INFO - 2025-06-22 09:37:56 --> Model "Crud" initialized
INFO - 2025-06-22 09:37:56 --> Final output sent to browser
DEBUG - 2025-06-22 09:37:56 --> Total execution time: 0.0071
INFO - 2025-06-22 09:37:56 --> Config Class Initialized
INFO - 2025-06-22 09:37:56 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:37:56 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:37:56 --> Utf8 Class Initialized
INFO - 2025-06-22 09:37:56 --> URI Class Initialized
INFO - 2025-06-22 09:37:56 --> Router Class Initialized
INFO - 2025-06-22 09:37:56 --> Output Class Initialized
INFO - 2025-06-22 09:37:56 --> Security Class Initialized
DEBUG - 2025-06-22 09:37:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:37:56 --> Input Class Initialized
INFO - 2025-06-22 09:37:56 --> Language Class Initialized
INFO - 2025-06-22 09:37:56 --> Loader Class Initialized
INFO - 2025-06-22 09:37:56 --> Helper loaded: url_helper
INFO - 2025-06-22 09:37:56 --> Helper loaded: file_helper
INFO - 2025-06-22 09:37:56 --> Database Driver Class Initialized
INFO - 2025-06-22 09:37:56 --> Email Class Initialized
DEBUG - 2025-06-22 09:37:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:37:56 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:37:56 --> Controller Class Initialized
INFO - 2025-06-22 09:37:56 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:37:56 --> Helper loaded: form_helper
INFO - 2025-06-22 09:37:56 --> Form Validation Class Initialized
INFO - 2025-06-22 09:37:56 --> Database Driver Class Initialized
INFO - 2025-06-22 09:37:56 --> Model "Crud" initialized
INFO - 2025-06-22 09:37:56 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:37:56 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:37:56 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:37:56 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:37:56 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:37:56 --> Final output sent to browser
DEBUG - 2025-06-22 09:37:56 --> Total execution time: 0.0073
INFO - 2025-06-22 09:37:56 --> Config Class Initialized
INFO - 2025-06-22 09:37:56 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:37:56 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:37:56 --> Utf8 Class Initialized
INFO - 2025-06-22 09:37:56 --> URI Class Initialized
INFO - 2025-06-22 09:37:56 --> Router Class Initialized
INFO - 2025-06-22 09:37:56 --> Output Class Initialized
INFO - 2025-06-22 09:37:56 --> Security Class Initialized
DEBUG - 2025-06-22 09:37:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:37:56 --> Input Class Initialized
INFO - 2025-06-22 09:37:56 --> Language Class Initialized
INFO - 2025-06-22 09:37:56 --> Loader Class Initialized
INFO - 2025-06-22 09:37:56 --> Helper loaded: url_helper
INFO - 2025-06-22 09:37:56 --> Helper loaded: file_helper
INFO - 2025-06-22 09:37:56 --> Database Driver Class Initialized
INFO - 2025-06-22 09:37:56 --> Email Class Initialized
DEBUG - 2025-06-22 09:37:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:37:56 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:37:56 --> Controller Class Initialized
INFO - 2025-06-22 09:37:56 --> Helper loaded: form_helper
INFO - 2025-06-22 09:37:56 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:37:56 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:37:56 --> Database Driver Class Initialized
INFO - 2025-06-22 09:37:56 --> Model "Crud" initialized
INFO - 2025-06-22 09:37:56 --> Final output sent to browser
DEBUG - 2025-06-22 09:37:56 --> Total execution time: 0.0092
INFO - 2025-06-22 09:37:56 --> Config Class Initialized
INFO - 2025-06-22 09:37:56 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:37:56 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:37:56 --> Utf8 Class Initialized
INFO - 2025-06-22 09:37:56 --> URI Class Initialized
INFO - 2025-06-22 09:37:56 --> Router Class Initialized
INFO - 2025-06-22 09:37:56 --> Output Class Initialized
INFO - 2025-06-22 09:37:56 --> Security Class Initialized
DEBUG - 2025-06-22 09:37:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:37:56 --> Input Class Initialized
INFO - 2025-06-22 09:37:56 --> Language Class Initialized
INFO - 2025-06-22 09:37:56 --> Loader Class Initialized
INFO - 2025-06-22 09:37:56 --> Helper loaded: url_helper
INFO - 2025-06-22 09:37:56 --> Helper loaded: file_helper
INFO - 2025-06-22 09:37:56 --> Database Driver Class Initialized
INFO - 2025-06-22 09:37:56 --> Email Class Initialized
DEBUG - 2025-06-22 09:37:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:37:56 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:37:56 --> Controller Class Initialized
INFO - 2025-06-22 09:37:56 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:37:56 --> Helper loaded: form_helper
INFO - 2025-06-22 09:37:56 --> Form Validation Class Initialized
INFO - 2025-06-22 09:37:56 --> Database Driver Class Initialized
INFO - 2025-06-22 09:37:56 --> Model "Crud" initialized
INFO - 2025-06-22 09:37:56 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:37:56 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:37:56 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:37:56 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:37:56 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:37:56 --> Final output sent to browser
DEBUG - 2025-06-22 09:37:56 --> Total execution time: 0.0497
INFO - 2025-06-22 09:37:57 --> Config Class Initialized
INFO - 2025-06-22 09:37:57 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:37:57 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:37:57 --> Utf8 Class Initialized
INFO - 2025-06-22 09:37:57 --> URI Class Initialized
INFO - 2025-06-22 09:37:57 --> Router Class Initialized
INFO - 2025-06-22 09:37:57 --> Config Class Initialized
INFO - 2025-06-22 09:37:57 --> Output Class Initialized
INFO - 2025-06-22 09:37:57 --> Hooks Class Initialized
INFO - 2025-06-22 09:37:57 --> Security Class Initialized
DEBUG - 2025-06-22 09:37:57 --> UTF-8 Support Enabled
DEBUG - 2025-06-22 09:37:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:37:57 --> Utf8 Class Initialized
INFO - 2025-06-22 09:37:57 --> Input Class Initialized
INFO - 2025-06-22 09:37:57 --> URI Class Initialized
INFO - 2025-06-22 09:37:57 --> Language Class Initialized
INFO - 2025-06-22 09:37:57 --> Router Class Initialized
INFO - 2025-06-22 09:37:57 --> Loader Class Initialized
INFO - 2025-06-22 09:37:57 --> Output Class Initialized
INFO - 2025-06-22 09:37:57 --> Helper loaded: url_helper
INFO - 2025-06-22 09:37:57 --> Helper loaded: file_helper
INFO - 2025-06-22 09:37:57 --> Security Class Initialized
INFO - 2025-06-22 09:37:57 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:37:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:37:57 --> Input Class Initialized
INFO - 2025-06-22 09:37:57 --> Language Class Initialized
INFO - 2025-06-22 09:37:57 --> Loader Class Initialized
INFO - 2025-06-22 09:37:57 --> Helper loaded: url_helper
INFO - 2025-06-22 09:37:57 --> Helper loaded: file_helper
INFO - 2025-06-22 09:37:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:37:57 --> Email Class Initialized
INFO - 2025-06-22 09:37:57 --> Email Class Initialized
DEBUG - 2025-06-22 09:37:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:37:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:37:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:37:57 --> Controller Class Initialized
INFO - 2025-06-22 09:37:57 --> Helper loaded: form_helper
INFO - 2025-06-22 09:37:57 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:37:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:37:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:37:57 --> Model "Crud" initialized
INFO - 2025-06-22 09:37:57 --> Final output sent to browser
DEBUG - 2025-06-22 09:37:57 --> Total execution time: 0.0173
INFO - 2025-06-22 09:37:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:37:57 --> Controller Class Initialized
INFO - 2025-06-22 09:37:57 --> Helper loaded: form_helper
INFO - 2025-06-22 09:37:57 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:37:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:37:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:37:57 --> Model "Crud" initialized
INFO - 2025-06-22 09:37:57 --> Final output sent to browser
DEBUG - 2025-06-22 09:37:57 --> Total execution time: 0.0338
INFO - 2025-06-22 09:38:07 --> Config Class Initialized
INFO - 2025-06-22 09:38:07 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:38:07 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:38:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:38:07 --> URI Class Initialized
INFO - 2025-06-22 09:38:07 --> Router Class Initialized
INFO - 2025-06-22 09:38:07 --> Output Class Initialized
INFO - 2025-06-22 09:38:07 --> Security Class Initialized
DEBUG - 2025-06-22 09:38:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:38:07 --> Input Class Initialized
INFO - 2025-06-22 09:38:07 --> Language Class Initialized
INFO - 2025-06-22 09:38:07 --> Loader Class Initialized
INFO - 2025-06-22 09:38:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:38:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:38:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:38:07 --> Config Class Initialized
INFO - 2025-06-22 09:38:07 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:38:07 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:38:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:38:07 --> URI Class Initialized
INFO - 2025-06-22 09:38:07 --> Email Class Initialized
INFO - 2025-06-22 09:38:07 --> Router Class Initialized
INFO - 2025-06-22 09:38:07 --> Output Class Initialized
DEBUG - 2025-06-22 09:38:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:38:07 --> Security Class Initialized
DEBUG - 2025-06-22 09:38:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:38:07 --> Input Class Initialized
INFO - 2025-06-22 09:38:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:38:07 --> Language Class Initialized
INFO - 2025-06-22 09:38:07 --> Controller Class Initialized
INFO - 2025-06-22 09:38:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:38:07 --> Loader Class Initialized
INFO - 2025-06-22 09:38:07 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:38:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:38:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:38:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:38:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:38:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:38:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:38:07 --> Email Class Initialized
DEBUG - 2025-06-22 09:38:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:38:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:38:07 --> Total execution time: 0.0197
INFO - 2025-06-22 09:38:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:38:07 --> Controller Class Initialized
INFO - 2025-06-22 09:38:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:38:07 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:38:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:38:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:38:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:38:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:38:07 --> Total execution time: 0.0295
INFO - 2025-06-22 09:38:17 --> Config Class Initialized
INFO - 2025-06-22 09:38:17 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:38:17 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:38:17 --> Utf8 Class Initialized
INFO - 2025-06-22 09:38:17 --> URI Class Initialized
INFO - 2025-06-22 09:38:17 --> Router Class Initialized
INFO - 2025-06-22 09:38:17 --> Output Class Initialized
INFO - 2025-06-22 09:38:17 --> Security Class Initialized
DEBUG - 2025-06-22 09:38:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:38:17 --> Input Class Initialized
INFO - 2025-06-22 09:38:17 --> Language Class Initialized
INFO - 2025-06-22 09:38:17 --> Loader Class Initialized
INFO - 2025-06-22 09:38:17 --> Config Class Initialized
INFO - 2025-06-22 09:38:17 --> Helper loaded: url_helper
INFO - 2025-06-22 09:38:17 --> Hooks Class Initialized
INFO - 2025-06-22 09:38:17 --> Helper loaded: file_helper
DEBUG - 2025-06-22 09:38:17 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:38:17 --> Utf8 Class Initialized
INFO - 2025-06-22 09:38:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:38:17 --> URI Class Initialized
INFO - 2025-06-22 09:38:17 --> Router Class Initialized
INFO - 2025-06-22 09:38:17 --> Output Class Initialized
INFO - 2025-06-22 09:38:17 --> Security Class Initialized
DEBUG - 2025-06-22 09:38:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:38:17 --> Input Class Initialized
INFO - 2025-06-22 09:38:17 --> Language Class Initialized
INFO - 2025-06-22 09:38:17 --> Loader Class Initialized
INFO - 2025-06-22 09:38:17 --> Helper loaded: url_helper
INFO - 2025-06-22 09:38:17 --> Helper loaded: file_helper
INFO - 2025-06-22 09:38:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:38:17 --> Email Class Initialized
DEBUG - 2025-06-22 09:38:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:38:17 --> Email Class Initialized
INFO - 2025-06-22 09:38:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:38:17 --> Controller Class Initialized
DEBUG - 2025-06-22 09:38:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:38:17 --> Helper loaded: form_helper
INFO - 2025-06-22 09:38:17 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:38:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:38:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:38:17 --> Model "Crud" initialized
INFO - 2025-06-22 09:38:17 --> Final output sent to browser
DEBUG - 2025-06-22 09:38:17 --> Total execution time: 0.0145
INFO - 2025-06-22 09:38:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:38:17 --> Controller Class Initialized
INFO - 2025-06-22 09:38:17 --> Helper loaded: form_helper
INFO - 2025-06-22 09:38:17 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:38:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:38:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:38:17 --> Model "Crud" initialized
INFO - 2025-06-22 09:38:17 --> Final output sent to browser
DEBUG - 2025-06-22 09:38:17 --> Total execution time: 0.0272
INFO - 2025-06-22 09:38:27 --> Config Class Initialized
INFO - 2025-06-22 09:38:27 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:38:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:38:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:38:27 --> URI Class Initialized
INFO - 2025-06-22 09:38:27 --> Config Class Initialized
INFO - 2025-06-22 09:38:27 --> Hooks Class Initialized
INFO - 2025-06-22 09:38:27 --> Router Class Initialized
DEBUG - 2025-06-22 09:38:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:38:27 --> Output Class Initialized
INFO - 2025-06-22 09:38:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:38:27 --> Security Class Initialized
INFO - 2025-06-22 09:38:27 --> URI Class Initialized
DEBUG - 2025-06-22 09:38:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:38:27 --> Input Class Initialized
INFO - 2025-06-22 09:38:27 --> Router Class Initialized
INFO - 2025-06-22 09:38:27 --> Language Class Initialized
INFO - 2025-06-22 09:38:27 --> Output Class Initialized
INFO - 2025-06-22 09:38:27 --> Security Class Initialized
INFO - 2025-06-22 09:38:27 --> Loader Class Initialized
DEBUG - 2025-06-22 09:38:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:38:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:38:27 --> Input Class Initialized
INFO - 2025-06-22 09:38:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:38:27 --> Language Class Initialized
INFO - 2025-06-22 09:38:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:38:27 --> Loader Class Initialized
INFO - 2025-06-22 09:38:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:38:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:38:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:38:27 --> Email Class Initialized
INFO - 2025-06-22 09:38:27 --> Email Class Initialized
DEBUG - 2025-06-22 09:38:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:38:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:38:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:38:27 --> Controller Class Initialized
INFO - 2025-06-22 09:38:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:38:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:38:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:38:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:38:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:38:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:38:27 --> Total execution time: 0.0149
INFO - 2025-06-22 09:38:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:38:27 --> Controller Class Initialized
INFO - 2025-06-22 09:38:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:38:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:38:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:38:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:38:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:38:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:38:27 --> Total execution time: 0.0270
INFO - 2025-06-22 09:38:37 --> Config Class Initialized
INFO - 2025-06-22 09:38:37 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:38:37 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:38:37 --> Utf8 Class Initialized
INFO - 2025-06-22 09:38:37 --> URI Class Initialized
INFO - 2025-06-22 09:38:37 --> Router Class Initialized
INFO - 2025-06-22 09:38:37 --> Output Class Initialized
INFO - 2025-06-22 09:38:37 --> Security Class Initialized
DEBUG - 2025-06-22 09:38:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:38:37 --> Input Class Initialized
INFO - 2025-06-22 09:38:37 --> Language Class Initialized
INFO - 2025-06-22 09:38:37 --> Loader Class Initialized
INFO - 2025-06-22 09:38:37 --> Helper loaded: url_helper
INFO - 2025-06-22 09:38:37 --> Helper loaded: file_helper
INFO - 2025-06-22 09:38:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:38:37 --> Config Class Initialized
INFO - 2025-06-22 09:38:37 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:38:37 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:38:37 --> Utf8 Class Initialized
INFO - 2025-06-22 09:38:37 --> URI Class Initialized
INFO - 2025-06-22 09:38:37 --> Router Class Initialized
INFO - 2025-06-22 09:38:37 --> Output Class Initialized
INFO - 2025-06-22 09:38:37 --> Security Class Initialized
DEBUG - 2025-06-22 09:38:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:38:37 --> Input Class Initialized
INFO - 2025-06-22 09:38:37 --> Language Class Initialized
INFO - 2025-06-22 09:38:37 --> Loader Class Initialized
INFO - 2025-06-22 09:38:37 --> Helper loaded: url_helper
INFO - 2025-06-22 09:38:37 --> Email Class Initialized
INFO - 2025-06-22 09:38:37 --> Helper loaded: file_helper
INFO - 2025-06-22 09:38:37 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:38:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:38:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:38:37 --> Controller Class Initialized
INFO - 2025-06-22 09:38:37 --> Helper loaded: form_helper
INFO - 2025-06-22 09:38:37 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:38:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:38:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:38:37 --> Email Class Initialized
DEBUG - 2025-06-22 09:38:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:38:37 --> Model "Crud" initialized
INFO - 2025-06-22 09:38:37 --> Final output sent to browser
DEBUG - 2025-06-22 09:38:37 --> Total execution time: 0.0163
INFO - 2025-06-22 09:38:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:38:37 --> Controller Class Initialized
INFO - 2025-06-22 09:38:37 --> Helper loaded: form_helper
INFO - 2025-06-22 09:38:37 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:38:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:38:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:38:37 --> Model "Crud" initialized
INFO - 2025-06-22 09:38:37 --> Final output sent to browser
DEBUG - 2025-06-22 09:38:37 --> Total execution time: 0.0280
INFO - 2025-06-22 09:38:47 --> Config Class Initialized
INFO - 2025-06-22 09:38:47 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:38:47 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:38:47 --> Utf8 Class Initialized
INFO - 2025-06-22 09:38:47 --> URI Class Initialized
INFO - 2025-06-22 09:38:47 --> Router Class Initialized
INFO - 2025-06-22 09:38:47 --> Config Class Initialized
INFO - 2025-06-22 09:38:47 --> Output Class Initialized
INFO - 2025-06-22 09:38:47 --> Hooks Class Initialized
INFO - 2025-06-22 09:38:47 --> Security Class Initialized
DEBUG - 2025-06-22 09:38:47 --> UTF-8 Support Enabled
DEBUG - 2025-06-22 09:38:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:38:47 --> Utf8 Class Initialized
INFO - 2025-06-22 09:38:47 --> Input Class Initialized
INFO - 2025-06-22 09:38:47 --> Language Class Initialized
INFO - 2025-06-22 09:38:47 --> URI Class Initialized
INFO - 2025-06-22 09:38:47 --> Router Class Initialized
INFO - 2025-06-22 09:38:47 --> Loader Class Initialized
INFO - 2025-06-22 09:38:47 --> Output Class Initialized
INFO - 2025-06-22 09:38:47 --> Helper loaded: url_helper
INFO - 2025-06-22 09:38:47 --> Security Class Initialized
INFO - 2025-06-22 09:38:47 --> Helper loaded: file_helper
DEBUG - 2025-06-22 09:38:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:38:47 --> Input Class Initialized
INFO - 2025-06-22 09:38:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:38:47 --> Language Class Initialized
INFO - 2025-06-22 09:38:47 --> Loader Class Initialized
INFO - 2025-06-22 09:38:47 --> Helper loaded: url_helper
INFO - 2025-06-22 09:38:47 --> Helper loaded: file_helper
INFO - 2025-06-22 09:38:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:38:47 --> Email Class Initialized
INFO - 2025-06-22 09:38:47 --> Email Class Initialized
DEBUG - 2025-06-22 09:38:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-22 09:38:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:38:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:38:47 --> Controller Class Initialized
INFO - 2025-06-22 09:38:47 --> Helper loaded: form_helper
INFO - 2025-06-22 09:38:47 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:38:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:38:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:38:47 --> Model "Crud" initialized
INFO - 2025-06-22 09:38:47 --> Final output sent to browser
DEBUG - 2025-06-22 09:38:47 --> Total execution time: 0.0174
INFO - 2025-06-22 09:38:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:38:47 --> Controller Class Initialized
INFO - 2025-06-22 09:38:47 --> Helper loaded: form_helper
INFO - 2025-06-22 09:38:47 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:38:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:38:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:38:47 --> Model "Crud" initialized
INFO - 2025-06-22 09:38:47 --> Final output sent to browser
DEBUG - 2025-06-22 09:38:47 --> Total execution time: 0.0327
INFO - 2025-06-22 09:38:57 --> Config Class Initialized
INFO - 2025-06-22 09:38:57 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:38:57 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:38:57 --> Utf8 Class Initialized
INFO - 2025-06-22 09:38:57 --> URI Class Initialized
INFO - 2025-06-22 09:38:57 --> Router Class Initialized
INFO - 2025-06-22 09:38:57 --> Output Class Initialized
INFO - 2025-06-22 09:38:57 --> Security Class Initialized
DEBUG - 2025-06-22 09:38:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:38:57 --> Input Class Initialized
INFO - 2025-06-22 09:38:57 --> Language Class Initialized
INFO - 2025-06-22 09:38:57 --> Loader Class Initialized
INFO - 2025-06-22 09:38:57 --> Helper loaded: url_helper
INFO - 2025-06-22 09:38:57 --> Helper loaded: file_helper
INFO - 2025-06-22 09:38:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:38:57 --> Email Class Initialized
DEBUG - 2025-06-22 09:38:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:38:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:38:57 --> Controller Class Initialized
INFO - 2025-06-22 09:38:57 --> Helper loaded: form_helper
INFO - 2025-06-22 09:38:57 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:38:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:38:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:38:57 --> Config Class Initialized
INFO - 2025-06-22 09:38:57 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:38:57 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:38:57 --> Utf8 Class Initialized
INFO - 2025-06-22 09:38:57 --> URI Class Initialized
INFO - 2025-06-22 09:38:57 --> Router Class Initialized
INFO - 2025-06-22 09:38:57 --> Output Class Initialized
INFO - 2025-06-22 09:38:57 --> Security Class Initialized
DEBUG - 2025-06-22 09:38:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:38:57 --> Input Class Initialized
INFO - 2025-06-22 09:38:57 --> Language Class Initialized
INFO - 2025-06-22 09:38:57 --> Loader Class Initialized
INFO - 2025-06-22 09:38:57 --> Helper loaded: url_helper
INFO - 2025-06-22 09:38:57 --> Helper loaded: file_helper
INFO - 2025-06-22 09:38:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:38:57 --> Model "Crud" initialized
INFO - 2025-06-22 09:38:57 --> Email Class Initialized
DEBUG - 2025-06-22 09:38:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:38:57 --> Final output sent to browser
DEBUG - 2025-06-22 09:38:57 --> Total execution time: 0.0179
INFO - 2025-06-22 09:38:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:38:57 --> Controller Class Initialized
INFO - 2025-06-22 09:38:57 --> Helper loaded: form_helper
INFO - 2025-06-22 09:38:57 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:38:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:38:57 --> Database Driver Class Initialized
INFO - 2025-06-22 09:38:57 --> Model "Crud" initialized
INFO - 2025-06-22 09:38:57 --> Final output sent to browser
DEBUG - 2025-06-22 09:38:57 --> Total execution time: 0.0264
INFO - 2025-06-22 09:38:59 --> Config Class Initialized
INFO - 2025-06-22 09:38:59 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:38:59 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:38:59 --> Utf8 Class Initialized
INFO - 2025-06-22 09:38:59 --> URI Class Initialized
INFO - 2025-06-22 09:38:59 --> Router Class Initialized
INFO - 2025-06-22 09:38:59 --> Output Class Initialized
INFO - 2025-06-22 09:38:59 --> Security Class Initialized
DEBUG - 2025-06-22 09:38:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:38:59 --> Input Class Initialized
INFO - 2025-06-22 09:38:59 --> Language Class Initialized
INFO - 2025-06-22 09:38:59 --> Loader Class Initialized
INFO - 2025-06-22 09:38:59 --> Helper loaded: url_helper
INFO - 2025-06-22 09:38:59 --> Helper loaded: file_helper
INFO - 2025-06-22 09:38:59 --> Database Driver Class Initialized
INFO - 2025-06-22 09:38:59 --> Email Class Initialized
DEBUG - 2025-06-22 09:38:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:38:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:38:59 --> Controller Class Initialized
INFO - 2025-06-22 09:38:59 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:38:59 --> Helper loaded: form_helper
INFO - 2025-06-22 09:38:59 --> Form Validation Class Initialized
INFO - 2025-06-22 09:38:59 --> Database Driver Class Initialized
INFO - 2025-06-22 09:38:59 --> Model "Crud" initialized
INFO - 2025-06-22 09:38:59 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:38:59 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:38:59 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:38:59 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:38:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:38:59 --> ISI $_FILES: Array
(
    [question] => Array
        (
            [name] => Array
                (
                    [0] => Array
                        (
                            [imageQuestion] => download.png
                            [opsion] => Array
                                (
                                    [0] => Array
                                        (
                                            [image] => 12d0e5a9-b3cb-4d1e-9d52-d3985070771b-image.png
                                        )

                                    [1] => Array
                                        (
                                            [image] => download.png
                                        )

                                )

                        )

                )

            [type] => Array
                (
                    [0] => Array
                        (
                            [imageQuestion] => image/png
                            [opsion] => Array
                                (
                                    [0] => Array
                                        (
                                            [image] => image/png
                                        )

                                    [1] => Array
                                        (
                                            [image] => image/png
                                        )

                                )

                        )

                )

            [tmp_name] => Array
                (
                    [0] => Array
                        (
                            [imageQuestion] => /tmp/phpMEI8H6
                            [opsion] => Array
                                (
                                    [0] => Array
                                        (
                                            [image] => /tmp/php8jmnMN
                                        )

                                    [1] => Array
                                        (
                                            [image] => /tmp/php5omBt1
                                        )

                                )

                        )

                )

            [error] => Array
                (
                    [0] => Array
                        (
                            [imageQuestion] => 0
                            [opsion] => Array
                                (
                                    [0] => Array
                                        (
                                            [image] => 0
                                        )

                                    [1] => Array
                                        (
                                            [image] => 0
                                        )

                                )

                        )

                )

            [size] => Array
                (
                    [0] => Array
                        (
                            [imageQuestion] => 7231
                            [opsion] => Array
                                (
                                    [0] => Array
                                        (
                                            [image] => 14021
                                        )

                                    [1] => Array
                                        (
                                            [image] => 7231
                                        )

                                )

                        )

                )

        )

)

DEBUG - 2025-06-22 09:38:59 --> ISI $_POST: Array
(
    [data] => {"training_name":"0b752748-99ec-4b9c-a8eb-e77165d45d7a","department":["QA","ENGINEERING"],"questionType":"SAME","question":[{"question":"question 1","imageQuestion":"download.png","imagePosition":"BELOW","opsion":[{"title":"opsion 1","image":"12d0e5a9-b3cb-4d1e-9d52-d3985070771b-image.png","point":"30"},{"title":"opsion 2","image":"download.png","point":"70"}]}]}
)

DEBUG - 2025-06-22 09:38:59 --> Row PATH: Array
(
    [0] => question
    [1] => 0
    [2] => imageQuestion
)

DEBUG - 2025-06-22 09:38:59 --> Row PATH: Array
(
    [0] => question
    [1] => 0
    [2] => opsion
    [3] => 0
    [4] => image
)

DEBUG - 2025-06-22 09:38:59 --> Row PATH: Array
(
    [0] => question
    [1] => 0
    [2] => opsion
    [3] => 1
    [4] => image
)

DEBUG - 2025-06-22 09:38:59 --> DATA AKHIR SETELAH PROSES UPLOAD: Array
(
    [training_name] => 0b752748-99ec-4b9c-a8eb-e77165d45d7a
    [department] => Array
        (
            [0] => QA
            [1] => ENGINEERING
        )

    [questionType] => SAME
    [question] => Array
        (
            [0] => Array
                (
                    [question] => question 1
                    [imageQuestion] => 68576cc3432f7-download.png
                    [imagePosition] => BELOW
                    [opsion] => Array
                        (
                            [0] => Array
                                (
                                    [title] => opsion 1
                                    [image] => 68576cc34390d-12d0e5a9-b3cb-4d1e-9d52-d3985070771b-image.png
                                    [point] => 30
                                )

                            [1] => Array
                                (
                                    [title] => opsion 2
                                    [image] => 68576cc343b84-download.png
                                    [point] => 70
                                )

                        )

                )

        )

)

INFO - 2025-06-22 09:38:59 --> Final output sent to browser
DEBUG - 2025-06-22 09:38:59 --> Total execution time: 0.0410
INFO - 2025-06-22 09:38:59 --> Config Class Initialized
INFO - 2025-06-22 09:38:59 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:38:59 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:38:59 --> Utf8 Class Initialized
INFO - 2025-06-22 09:38:59 --> URI Class Initialized
INFO - 2025-06-22 09:38:59 --> Router Class Initialized
INFO - 2025-06-22 09:38:59 --> Output Class Initialized
INFO - 2025-06-22 09:38:59 --> Security Class Initialized
DEBUG - 2025-06-22 09:38:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:38:59 --> Input Class Initialized
INFO - 2025-06-22 09:38:59 --> Language Class Initialized
INFO - 2025-06-22 09:38:59 --> Loader Class Initialized
INFO - 2025-06-22 09:38:59 --> Helper loaded: url_helper
INFO - 2025-06-22 09:38:59 --> Helper loaded: file_helper
INFO - 2025-06-22 09:38:59 --> Database Driver Class Initialized
INFO - 2025-06-22 09:38:59 --> Email Class Initialized
DEBUG - 2025-06-22 09:38:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:38:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:38:59 --> Controller Class Initialized
INFO - 2025-06-22 09:38:59 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:38:59 --> Helper loaded: form_helper
INFO - 2025-06-22 09:38:59 --> Form Validation Class Initialized
INFO - 2025-06-22 09:38:59 --> Database Driver Class Initialized
INFO - 2025-06-22 09:38:59 --> Model "Crud" initialized
INFO - 2025-06-22 09:38:59 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:38:59 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:38:59 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:38:59 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:38:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:38:59 --> Final output sent to browser
DEBUG - 2025-06-22 09:38:59 --> Total execution time: 0.0144
INFO - 2025-06-22 09:39:07 --> Config Class Initialized
INFO - 2025-06-22 09:39:07 --> Config Class Initialized
INFO - 2025-06-22 09:39:07 --> Hooks Class Initialized
INFO - 2025-06-22 09:39:07 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:39:07 --> UTF-8 Support Enabled
DEBUG - 2025-06-22 09:39:07 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:39:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:39:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:39:07 --> URI Class Initialized
INFO - 2025-06-22 09:39:07 --> URI Class Initialized
INFO - 2025-06-22 09:39:07 --> Router Class Initialized
INFO - 2025-06-22 09:39:07 --> Router Class Initialized
INFO - 2025-06-22 09:39:07 --> Output Class Initialized
INFO - 2025-06-22 09:39:07 --> Output Class Initialized
INFO - 2025-06-22 09:39:07 --> Security Class Initialized
INFO - 2025-06-22 09:39:07 --> Security Class Initialized
DEBUG - 2025-06-22 09:39:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-22 09:39:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:39:07 --> Input Class Initialized
INFO - 2025-06-22 09:39:07 --> Input Class Initialized
INFO - 2025-06-22 09:39:07 --> Language Class Initialized
INFO - 2025-06-22 09:39:07 --> Language Class Initialized
INFO - 2025-06-22 09:39:07 --> Loader Class Initialized
INFO - 2025-06-22 09:39:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:39:07 --> Loader Class Initialized
INFO - 2025-06-22 09:39:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:39:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:39:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:39:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:39:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:39:07 --> Email Class Initialized
DEBUG - 2025-06-22 09:39:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:39:07 --> Email Class Initialized
INFO - 2025-06-22 09:39:07 --> Session: Class initialized using 'files' driver.
DEBUG - 2025-06-22 09:39:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:39:07 --> Controller Class Initialized
INFO - 2025-06-22 09:39:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:39:07 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:39:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:39:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:39:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:39:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:39:07 --> Total execution time: 0.0164
INFO - 2025-06-22 09:39:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:39:07 --> Controller Class Initialized
INFO - 2025-06-22 09:39:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:39:07 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:39:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:39:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:39:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:39:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:39:07 --> Total execution time: 0.0313
INFO - 2025-06-22 09:39:07 --> Config Class Initialized
INFO - 2025-06-22 09:39:07 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:39:07 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:39:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:39:07 --> URI Class Initialized
INFO - 2025-06-22 09:39:07 --> Router Class Initialized
INFO - 2025-06-22 09:39:07 --> Output Class Initialized
INFO - 2025-06-22 09:39:07 --> Security Class Initialized
DEBUG - 2025-06-22 09:39:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:39:07 --> Input Class Initialized
INFO - 2025-06-22 09:39:07 --> Language Class Initialized
INFO - 2025-06-22 09:39:07 --> Loader Class Initialized
INFO - 2025-06-22 09:39:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:39:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:39:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:39:07 --> Email Class Initialized
DEBUG - 2025-06-22 09:39:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:39:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:39:07 --> Controller Class Initialized
INFO - 2025-06-22 09:39:07 --> Model "FormTestModel" initialized
INFO - 2025-06-22 09:39:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:39:07 --> Form Validation Class Initialized
INFO - 2025-06-22 09:39:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:39:07 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:39:07 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:39:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:39:07 --> File loaded: /var/www/html/hris_lnd/application/views/template/header_mobile_lnd.php
INFO - 2025-06-22 09:39:07 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/form-test.php
INFO - 2025-06-22 09:39:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:39:07 --> Total execution time: 0.0234
INFO - 2025-06-22 09:39:09 --> Config Class Initialized
INFO - 2025-06-22 09:39:09 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:39:09 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:39:09 --> Utf8 Class Initialized
INFO - 2025-06-22 09:39:09 --> URI Class Initialized
INFO - 2025-06-22 09:39:09 --> Router Class Initialized
INFO - 2025-06-22 09:39:09 --> Output Class Initialized
INFO - 2025-06-22 09:39:09 --> Security Class Initialized
DEBUG - 2025-06-22 09:39:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:39:09 --> Input Class Initialized
INFO - 2025-06-22 09:39:09 --> Language Class Initialized
INFO - 2025-06-22 09:39:09 --> Loader Class Initialized
INFO - 2025-06-22 09:39:09 --> Helper loaded: url_helper
INFO - 2025-06-22 09:39:09 --> Helper loaded: file_helper
INFO - 2025-06-22 09:39:09 --> Database Driver Class Initialized
INFO - 2025-06-22 09:39:09 --> Email Class Initialized
DEBUG - 2025-06-22 09:39:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:39:09 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:39:09 --> Controller Class Initialized
INFO - 2025-06-22 09:39:09 --> Helper loaded: form_helper
INFO - 2025-06-22 09:39:09 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:39:09 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:39:09 --> Database Driver Class Initialized
INFO - 2025-06-22 09:39:09 --> Model "Crud" initialized
INFO - 2025-06-22 09:39:09 --> Final output sent to browser
DEBUG - 2025-06-22 09:39:09 --> Total execution time: 0.0343
INFO - 2025-06-22 09:39:17 --> Config Class Initialized
INFO - 2025-06-22 09:39:17 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:39:17 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:39:17 --> Utf8 Class Initialized
INFO - 2025-06-22 09:39:17 --> URI Class Initialized
INFO - 2025-06-22 09:39:17 --> Router Class Initialized
INFO - 2025-06-22 09:39:17 --> Output Class Initialized
INFO - 2025-06-22 09:39:17 --> Security Class Initialized
DEBUG - 2025-06-22 09:39:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:39:17 --> Input Class Initialized
INFO - 2025-06-22 09:39:17 --> Language Class Initialized
INFO - 2025-06-22 09:39:17 --> Config Class Initialized
INFO - 2025-06-22 09:39:17 --> Loader Class Initialized
INFO - 2025-06-22 09:39:17 --> Hooks Class Initialized
INFO - 2025-06-22 09:39:17 --> Helper loaded: url_helper
INFO - 2025-06-22 09:39:17 --> Helper loaded: file_helper
DEBUG - 2025-06-22 09:39:17 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:39:17 --> Utf8 Class Initialized
INFO - 2025-06-22 09:39:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:39:17 --> URI Class Initialized
INFO - 2025-06-22 09:39:17 --> Router Class Initialized
INFO - 2025-06-22 09:39:17 --> Output Class Initialized
INFO - 2025-06-22 09:39:17 --> Security Class Initialized
DEBUG - 2025-06-22 09:39:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:39:17 --> Input Class Initialized
INFO - 2025-06-22 09:39:17 --> Language Class Initialized
INFO - 2025-06-22 09:39:17 --> Loader Class Initialized
INFO - 2025-06-22 09:39:17 --> Helper loaded: url_helper
INFO - 2025-06-22 09:39:17 --> Helper loaded: file_helper
INFO - 2025-06-22 09:39:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:39:17 --> Email Class Initialized
DEBUG - 2025-06-22 09:39:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:39:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:39:17 --> Controller Class Initialized
INFO - 2025-06-22 09:39:17 --> Helper loaded: form_helper
INFO - 2025-06-22 09:39:17 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:39:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:39:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:39:17 --> Email Class Initialized
DEBUG - 2025-06-22 09:39:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:39:17 --> Model "Crud" initialized
INFO - 2025-06-22 09:39:17 --> Final output sent to browser
DEBUG - 2025-06-22 09:39:17 --> Total execution time: 0.0198
INFO - 2025-06-22 09:39:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:39:17 --> Controller Class Initialized
INFO - 2025-06-22 09:39:17 --> Helper loaded: form_helper
INFO - 2025-06-22 09:39:17 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:39:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:39:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:39:17 --> Model "Crud" initialized
INFO - 2025-06-22 09:39:17 --> Final output sent to browser
DEBUG - 2025-06-22 09:39:17 --> Total execution time: 0.0327
INFO - 2025-06-22 09:39:25 --> Config Class Initialized
INFO - 2025-06-22 09:39:25 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:39:25 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:39:25 --> Utf8 Class Initialized
INFO - 2025-06-22 09:39:25 --> URI Class Initialized
INFO - 2025-06-22 09:39:25 --> Router Class Initialized
INFO - 2025-06-22 09:39:25 --> Output Class Initialized
INFO - 2025-06-22 09:39:25 --> Security Class Initialized
DEBUG - 2025-06-22 09:39:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:39:25 --> Input Class Initialized
INFO - 2025-06-22 09:39:25 --> Language Class Initialized
INFO - 2025-06-22 09:39:25 --> Loader Class Initialized
INFO - 2025-06-22 09:39:25 --> Helper loaded: url_helper
INFO - 2025-06-22 09:39:25 --> Helper loaded: file_helper
INFO - 2025-06-22 09:39:25 --> Database Driver Class Initialized
INFO - 2025-06-22 09:39:25 --> Email Class Initialized
DEBUG - 2025-06-22 09:39:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:39:25 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:39:25 --> Controller Class Initialized
INFO - 2025-06-22 09:39:25 --> Model "FormTestModel" initialized
INFO - 2025-06-22 09:39:25 --> Helper loaded: form_helper
INFO - 2025-06-22 09:39:25 --> Form Validation Class Initialized
INFO - 2025-06-22 09:39:25 --> Database Driver Class Initialized
INFO - 2025-06-22 09:39:25 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:39:25 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:39:25 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:39:25 --> File loaded: /var/www/html/hris_lnd/application/views/template/header_mobile_lnd.php
INFO - 2025-06-22 09:39:25 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/form-test.php
INFO - 2025-06-22 09:39:25 --> Final output sent to browser
DEBUG - 2025-06-22 09:39:25 --> Total execution time: 0.0250
INFO - 2025-06-22 09:39:25 --> Config Class Initialized
INFO - 2025-06-22 09:39:25 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:39:25 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:39:25 --> Utf8 Class Initialized
INFO - 2025-06-22 09:39:25 --> URI Class Initialized
INFO - 2025-06-22 09:39:25 --> Router Class Initialized
INFO - 2025-06-22 09:39:25 --> Output Class Initialized
INFO - 2025-06-22 09:39:25 --> Security Class Initialized
DEBUG - 2025-06-22 09:39:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:39:25 --> Input Class Initialized
INFO - 2025-06-22 09:39:25 --> Language Class Initialized
INFO - 2025-06-22 09:39:25 --> Loader Class Initialized
INFO - 2025-06-22 09:39:25 --> Helper loaded: url_helper
INFO - 2025-06-22 09:39:25 --> Helper loaded: file_helper
INFO - 2025-06-22 09:39:25 --> Database Driver Class Initialized
INFO - 2025-06-22 09:39:25 --> Email Class Initialized
DEBUG - 2025-06-22 09:39:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:39:25 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:39:25 --> Controller Class Initialized
INFO - 2025-06-22 09:39:25 --> Helper loaded: form_helper
INFO - 2025-06-22 09:39:25 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:39:25 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:39:25 --> Database Driver Class Initialized
INFO - 2025-06-22 09:39:25 --> Model "Crud" initialized
INFO - 2025-06-22 09:39:25 --> Final output sent to browser
DEBUG - 2025-06-22 09:39:25 --> Total execution time: 0.0743
INFO - 2025-06-22 09:39:27 --> Config Class Initialized
INFO - 2025-06-22 09:39:27 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:39:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:39:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:39:27 --> URI Class Initialized
INFO - 2025-06-22 09:39:27 --> Router Class Initialized
INFO - 2025-06-22 09:39:27 --> Output Class Initialized
INFO - 2025-06-22 09:39:27 --> Security Class Initialized
DEBUG - 2025-06-22 09:39:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:39:27 --> Input Class Initialized
INFO - 2025-06-22 09:39:27 --> Language Class Initialized
INFO - 2025-06-22 09:39:27 --> Config Class Initialized
INFO - 2025-06-22 09:39:27 --> Loader Class Initialized
INFO - 2025-06-22 09:39:27 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:39:27 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:39:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:39:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:39:27 --> Utf8 Class Initialized
INFO - 2025-06-22 09:39:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:39:27 --> URI Class Initialized
INFO - 2025-06-22 09:39:27 --> Router Class Initialized
INFO - 2025-06-22 09:39:27 --> Output Class Initialized
INFO - 2025-06-22 09:39:27 --> Security Class Initialized
DEBUG - 2025-06-22 09:39:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:39:27 --> Input Class Initialized
INFO - 2025-06-22 09:39:27 --> Language Class Initialized
INFO - 2025-06-22 09:39:27 --> Loader Class Initialized
INFO - 2025-06-22 09:39:27 --> Helper loaded: url_helper
INFO - 2025-06-22 09:39:27 --> Helper loaded: file_helper
INFO - 2025-06-22 09:39:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:39:27 --> Email Class Initialized
DEBUG - 2025-06-22 09:39:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:39:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:39:27 --> Controller Class Initialized
INFO - 2025-06-22 09:39:27 --> Email Class Initialized
INFO - 2025-06-22 09:39:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:39:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:39:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:39:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:39:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:39:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:39:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:39:27 --> Total execution time: 0.0146
INFO - 2025-06-22 09:39:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:39:27 --> Controller Class Initialized
INFO - 2025-06-22 09:39:27 --> Helper loaded: form_helper
INFO - 2025-06-22 09:39:27 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:39:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:39:27 --> Database Driver Class Initialized
INFO - 2025-06-22 09:39:27 --> Model "Crud" initialized
INFO - 2025-06-22 09:39:27 --> Final output sent to browser
DEBUG - 2025-06-22 09:39:27 --> Total execution time: 0.0263
INFO - 2025-06-22 09:39:34 --> Config Class Initialized
INFO - 2025-06-22 09:39:34 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:39:34 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:39:34 --> Utf8 Class Initialized
INFO - 2025-06-22 09:39:34 --> URI Class Initialized
INFO - 2025-06-22 09:39:34 --> Router Class Initialized
INFO - 2025-06-22 09:39:34 --> Output Class Initialized
INFO - 2025-06-22 09:39:34 --> Security Class Initialized
DEBUG - 2025-06-22 09:39:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:39:34 --> Input Class Initialized
INFO - 2025-06-22 09:39:34 --> Language Class Initialized
INFO - 2025-06-22 09:39:34 --> Loader Class Initialized
INFO - 2025-06-22 09:39:34 --> Helper loaded: url_helper
INFO - 2025-06-22 09:39:34 --> Helper loaded: file_helper
INFO - 2025-06-22 09:39:34 --> Database Driver Class Initialized
INFO - 2025-06-22 09:39:34 --> Email Class Initialized
DEBUG - 2025-06-22 09:39:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:39:34 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:39:34 --> Controller Class Initialized
INFO - 2025-06-22 09:39:34 --> Model "MasterFormTestModel" initialized
INFO - 2025-06-22 09:39:34 --> Helper loaded: form_helper
INFO - 2025-06-22 09:39:34 --> Form Validation Class Initialized
INFO - 2025-06-22 09:39:34 --> Database Driver Class Initialized
INFO - 2025-06-22 09:39:34 --> Model "Crud" initialized
INFO - 2025-06-22 09:39:34 --> Database Driver Class Initialized
DEBUG - 2025-06-22 09:39:34 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:39:34 --> Model "LndModel" initialized
DEBUG - 2025-06-22 09:39:34 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:39:34 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:39:34 --> Final output sent to browser
DEBUG - 2025-06-22 09:39:34 --> Total execution time: 0.0092
INFO - 2025-06-22 09:39:37 --> Config Class Initialized
INFO - 2025-06-22 09:39:37 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:39:37 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:39:37 --> Utf8 Class Initialized
INFO - 2025-06-22 09:39:37 --> URI Class Initialized
INFO - 2025-06-22 09:39:37 --> Router Class Initialized
INFO - 2025-06-22 09:39:37 --> Output Class Initialized
INFO - 2025-06-22 09:39:37 --> Security Class Initialized
DEBUG - 2025-06-22 09:39:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:39:37 --> Input Class Initialized
INFO - 2025-06-22 09:39:37 --> Language Class Initialized
INFO - 2025-06-22 09:39:37 --> Loader Class Initialized
INFO - 2025-06-22 09:39:37 --> Helper loaded: url_helper
INFO - 2025-06-22 09:39:37 --> Helper loaded: file_helper
INFO - 2025-06-22 09:39:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:39:37 --> Config Class Initialized
INFO - 2025-06-22 09:39:37 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:39:37 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:39:37 --> Utf8 Class Initialized
INFO - 2025-06-22 09:39:37 --> URI Class Initialized
INFO - 2025-06-22 09:39:37 --> Router Class Initialized
INFO - 2025-06-22 09:39:37 --> Output Class Initialized
INFO - 2025-06-22 09:39:37 --> Security Class Initialized
DEBUG - 2025-06-22 09:39:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:39:37 --> Input Class Initialized
INFO - 2025-06-22 09:39:37 --> Language Class Initialized
INFO - 2025-06-22 09:39:37 --> Loader Class Initialized
INFO - 2025-06-22 09:39:37 --> Helper loaded: url_helper
INFO - 2025-06-22 09:39:37 --> Helper loaded: file_helper
INFO - 2025-06-22 09:39:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:39:37 --> Email Class Initialized
DEBUG - 2025-06-22 09:39:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:39:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:39:37 --> Controller Class Initialized
INFO - 2025-06-22 09:39:37 --> Helper loaded: form_helper
INFO - 2025-06-22 09:39:37 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:39:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:39:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:39:37 --> Email Class Initialized
DEBUG - 2025-06-22 09:39:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:39:37 --> Model "Crud" initialized
INFO - 2025-06-22 09:39:37 --> Final output sent to browser
DEBUG - 2025-06-22 09:39:37 --> Total execution time: 0.0142
INFO - 2025-06-22 09:39:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:39:37 --> Controller Class Initialized
INFO - 2025-06-22 09:39:37 --> Helper loaded: form_helper
INFO - 2025-06-22 09:39:37 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:39:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:39:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:39:37 --> Model "Crud" initialized
INFO - 2025-06-22 09:39:37 --> Final output sent to browser
DEBUG - 2025-06-22 09:39:37 --> Total execution time: 0.0269
INFO - 2025-06-22 09:39:47 --> Config Class Initialized
INFO - 2025-06-22 09:39:47 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:39:47 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:39:47 --> Utf8 Class Initialized
INFO - 2025-06-22 09:39:47 --> URI Class Initialized
INFO - 2025-06-22 09:39:47 --> Router Class Initialized
INFO - 2025-06-22 09:39:47 --> Output Class Initialized
INFO - 2025-06-22 09:39:47 --> Security Class Initialized
DEBUG - 2025-06-22 09:39:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:39:47 --> Input Class Initialized
INFO - 2025-06-22 09:39:47 --> Language Class Initialized
INFO - 2025-06-22 09:39:47 --> Loader Class Initialized
INFO - 2025-06-22 09:39:47 --> Helper loaded: url_helper
INFO - 2025-06-22 09:39:47 --> Helper loaded: file_helper
INFO - 2025-06-22 09:39:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:39:47 --> Config Class Initialized
INFO - 2025-06-22 09:39:47 --> Hooks Class Initialized
INFO - 2025-06-22 09:39:47 --> Email Class Initialized
DEBUG - 2025-06-22 09:39:47 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:39:47 --> Utf8 Class Initialized
DEBUG - 2025-06-22 09:39:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:39:47 --> URI Class Initialized
INFO - 2025-06-22 09:39:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:39:47 --> Router Class Initialized
INFO - 2025-06-22 09:39:47 --> Controller Class Initialized
INFO - 2025-06-22 09:39:47 --> Output Class Initialized
INFO - 2025-06-22 09:39:47 --> Helper loaded: form_helper
INFO - 2025-06-22 09:39:47 --> Security Class Initialized
INFO - 2025-06-22 09:39:47 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:39:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:39:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:39:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:39:47 --> Input Class Initialized
INFO - 2025-06-22 09:39:47 --> Language Class Initialized
INFO - 2025-06-22 09:39:47 --> Loader Class Initialized
INFO - 2025-06-22 09:39:47 --> Helper loaded: url_helper
INFO - 2025-06-22 09:39:47 --> Helper loaded: file_helper
INFO - 2025-06-22 09:39:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:39:47 --> Model "Crud" initialized
INFO - 2025-06-22 09:39:47 --> Email Class Initialized
DEBUG - 2025-06-22 09:39:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:39:47 --> Final output sent to browser
DEBUG - 2025-06-22 09:39:47 --> Total execution time: 0.0149
INFO - 2025-06-22 09:39:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:39:47 --> Controller Class Initialized
INFO - 2025-06-22 09:39:47 --> Helper loaded: form_helper
INFO - 2025-06-22 09:39:47 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:39:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:39:47 --> Database Driver Class Initialized
INFO - 2025-06-22 09:39:47 --> Model "Crud" initialized
INFO - 2025-06-22 09:39:47 --> Final output sent to browser
DEBUG - 2025-06-22 09:39:47 --> Total execution time: 0.0262
INFO - 2025-06-22 09:40:58 --> Config Class Initialized
INFO - 2025-06-22 09:40:58 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:40:58 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:40:58 --> Utf8 Class Initialized
INFO - 2025-06-22 09:40:58 --> URI Class Initialized
INFO - 2025-06-22 09:40:58 --> Router Class Initialized
INFO - 2025-06-22 09:40:58 --> Output Class Initialized
INFO - 2025-06-22 09:40:58 --> Security Class Initialized
DEBUG - 2025-06-22 09:40:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:40:58 --> Input Class Initialized
INFO - 2025-06-22 09:40:58 --> Language Class Initialized
INFO - 2025-06-22 09:40:58 --> Loader Class Initialized
INFO - 2025-06-22 09:40:58 --> Helper loaded: url_helper
INFO - 2025-06-22 09:40:58 --> Helper loaded: file_helper
INFO - 2025-06-22 09:40:58 --> Database Driver Class Initialized
INFO - 2025-06-22 09:40:58 --> Email Class Initialized
DEBUG - 2025-06-22 09:40:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:40:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:40:58 --> Controller Class Initialized
INFO - 2025-06-22 09:40:58 --> Model "FormTestModel" initialized
INFO - 2025-06-22 09:40:58 --> Helper loaded: form_helper
INFO - 2025-06-22 09:40:58 --> Form Validation Class Initialized
INFO - 2025-06-22 09:40:58 --> Database Driver Class Initialized
INFO - 2025-06-22 09:40:58 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:40:58 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:40:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:40:58 --> File loaded: /var/www/html/hris_lnd/application/views/template/header_mobile_lnd.php
INFO - 2025-06-22 09:40:58 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/form-test.php
INFO - 2025-06-22 09:40:58 --> Final output sent to browser
DEBUG - 2025-06-22 09:40:58 --> Total execution time: 0.0247
INFO - 2025-06-22 09:40:59 --> Config Class Initialized
INFO - 2025-06-22 09:40:59 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:40:59 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:40:59 --> Utf8 Class Initialized
INFO - 2025-06-22 09:40:59 --> URI Class Initialized
INFO - 2025-06-22 09:40:59 --> Router Class Initialized
INFO - 2025-06-22 09:40:59 --> Output Class Initialized
INFO - 2025-06-22 09:40:59 --> Security Class Initialized
DEBUG - 2025-06-22 09:40:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:40:59 --> Input Class Initialized
INFO - 2025-06-22 09:40:59 --> Language Class Initialized
INFO - 2025-06-22 09:40:59 --> Loader Class Initialized
INFO - 2025-06-22 09:40:59 --> Helper loaded: url_helper
INFO - 2025-06-22 09:40:59 --> Helper loaded: file_helper
INFO - 2025-06-22 09:40:59 --> Database Driver Class Initialized
INFO - 2025-06-22 09:40:59 --> Email Class Initialized
DEBUG - 2025-06-22 09:40:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:40:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:40:59 --> Controller Class Initialized
INFO - 2025-06-22 09:40:59 --> Helper loaded: form_helper
INFO - 2025-06-22 09:40:59 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:40:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:40:59 --> Database Driver Class Initialized
INFO - 2025-06-22 09:40:59 --> Model "Crud" initialized
INFO - 2025-06-22 09:40:59 --> Final output sent to browser
DEBUG - 2025-06-22 09:40:59 --> Total execution time: 0.0623
INFO - 2025-06-22 09:41:54 --> Config Class Initialized
INFO - 2025-06-22 09:41:54 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:41:54 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:41:54 --> Utf8 Class Initialized
INFO - 2025-06-22 09:41:54 --> URI Class Initialized
INFO - 2025-06-22 09:41:54 --> Router Class Initialized
INFO - 2025-06-22 09:41:54 --> Output Class Initialized
INFO - 2025-06-22 09:41:54 --> Security Class Initialized
DEBUG - 2025-06-22 09:41:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:41:54 --> Input Class Initialized
INFO - 2025-06-22 09:41:54 --> Language Class Initialized
INFO - 2025-06-22 09:41:54 --> Loader Class Initialized
INFO - 2025-06-22 09:41:54 --> Helper loaded: url_helper
INFO - 2025-06-22 09:41:54 --> Helper loaded: file_helper
INFO - 2025-06-22 09:41:54 --> Database Driver Class Initialized
INFO - 2025-06-22 09:41:54 --> Email Class Initialized
DEBUG - 2025-06-22 09:41:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:41:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:41:54 --> Controller Class Initialized
INFO - 2025-06-22 09:41:54 --> Model "FormTestModel" initialized
INFO - 2025-06-22 09:41:54 --> Helper loaded: form_helper
INFO - 2025-06-22 09:41:54 --> Form Validation Class Initialized
INFO - 2025-06-22 09:41:54 --> Database Driver Class Initialized
INFO - 2025-06-22 09:41:54 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:41:54 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:41:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:41:54 --> File loaded: /var/www/html/hris_lnd/application/views/template/header_mobile_lnd.php
INFO - 2025-06-22 09:41:54 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/form-test.php
INFO - 2025-06-22 09:41:54 --> Final output sent to browser
DEBUG - 2025-06-22 09:41:54 --> Total execution time: 0.0187
INFO - 2025-06-22 09:41:54 --> Config Class Initialized
INFO - 2025-06-22 09:41:54 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:41:54 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:41:54 --> Utf8 Class Initialized
INFO - 2025-06-22 09:41:54 --> URI Class Initialized
INFO - 2025-06-22 09:41:54 --> Router Class Initialized
INFO - 2025-06-22 09:41:54 --> Output Class Initialized
INFO - 2025-06-22 09:41:54 --> Security Class Initialized
DEBUG - 2025-06-22 09:41:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:41:54 --> Input Class Initialized
INFO - 2025-06-22 09:41:54 --> Language Class Initialized
INFO - 2025-06-22 09:41:54 --> Loader Class Initialized
INFO - 2025-06-22 09:41:54 --> Helper loaded: url_helper
INFO - 2025-06-22 09:41:54 --> Helper loaded: file_helper
INFO - 2025-06-22 09:41:54 --> Database Driver Class Initialized
INFO - 2025-06-22 09:41:54 --> Email Class Initialized
DEBUG - 2025-06-22 09:41:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:41:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:41:54 --> Controller Class Initialized
INFO - 2025-06-22 09:41:54 --> Helper loaded: form_helper
INFO - 2025-06-22 09:41:54 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:41:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:41:54 --> Database Driver Class Initialized
INFO - 2025-06-22 09:41:54 --> Model "Crud" initialized
INFO - 2025-06-22 09:41:54 --> Final output sent to browser
DEBUG - 2025-06-22 09:41:54 --> Total execution time: 0.0309
INFO - 2025-06-22 09:42:04 --> Config Class Initialized
INFO - 2025-06-22 09:42:04 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:42:04 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:42:04 --> Utf8 Class Initialized
INFO - 2025-06-22 09:42:04 --> URI Class Initialized
INFO - 2025-06-22 09:42:04 --> Router Class Initialized
INFO - 2025-06-22 09:42:04 --> Output Class Initialized
INFO - 2025-06-22 09:42:04 --> Security Class Initialized
DEBUG - 2025-06-22 09:42:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:42:04 --> Input Class Initialized
INFO - 2025-06-22 09:42:04 --> Language Class Initialized
INFO - 2025-06-22 09:42:04 --> Loader Class Initialized
INFO - 2025-06-22 09:42:04 --> Helper loaded: url_helper
INFO - 2025-06-22 09:42:04 --> Helper loaded: file_helper
INFO - 2025-06-22 09:42:04 --> Database Driver Class Initialized
INFO - 2025-06-22 09:42:04 --> Email Class Initialized
DEBUG - 2025-06-22 09:42:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:42:04 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:42:04 --> Controller Class Initialized
INFO - 2025-06-22 09:42:04 --> Model "FormTestModel" initialized
INFO - 2025-06-22 09:42:04 --> Helper loaded: form_helper
INFO - 2025-06-22 09:42:04 --> Form Validation Class Initialized
INFO - 2025-06-22 09:42:04 --> Database Driver Class Initialized
INFO - 2025-06-22 09:42:04 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:42:04 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:42:04 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:42:04 --> File loaded: /var/www/html/hris_lnd/application/views/template/header_mobile_lnd.php
INFO - 2025-06-22 09:42:04 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/form-test.php
INFO - 2025-06-22 09:42:04 --> Final output sent to browser
DEBUG - 2025-06-22 09:42:04 --> Total execution time: 0.0163
INFO - 2025-06-22 09:42:04 --> Config Class Initialized
INFO - 2025-06-22 09:42:04 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:42:04 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:42:04 --> Utf8 Class Initialized
INFO - 2025-06-22 09:42:04 --> URI Class Initialized
INFO - 2025-06-22 09:42:04 --> Router Class Initialized
INFO - 2025-06-22 09:42:04 --> Output Class Initialized
INFO - 2025-06-22 09:42:04 --> Security Class Initialized
DEBUG - 2025-06-22 09:42:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:42:04 --> Input Class Initialized
INFO - 2025-06-22 09:42:04 --> Language Class Initialized
INFO - 2025-06-22 09:42:04 --> Loader Class Initialized
INFO - 2025-06-22 09:42:04 --> Helper loaded: url_helper
INFO - 2025-06-22 09:42:04 --> Helper loaded: file_helper
INFO - 2025-06-22 09:42:04 --> Database Driver Class Initialized
INFO - 2025-06-22 09:42:04 --> Email Class Initialized
DEBUG - 2025-06-22 09:42:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:42:04 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:42:04 --> Controller Class Initialized
INFO - 2025-06-22 09:42:04 --> Helper loaded: form_helper
INFO - 2025-06-22 09:42:04 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:42:04 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:42:04 --> Database Driver Class Initialized
INFO - 2025-06-22 09:42:04 --> Model "Crud" initialized
INFO - 2025-06-22 09:42:04 --> Final output sent to browser
DEBUG - 2025-06-22 09:42:04 --> Total execution time: 0.0736
INFO - 2025-06-22 09:42:18 --> Config Class Initialized
INFO - 2025-06-22 09:42:18 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:42:18 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:42:18 --> Utf8 Class Initialized
INFO - 2025-06-22 09:42:18 --> URI Class Initialized
INFO - 2025-06-22 09:42:18 --> Router Class Initialized
INFO - 2025-06-22 09:42:18 --> Output Class Initialized
INFO - 2025-06-22 09:42:18 --> Security Class Initialized
DEBUG - 2025-06-22 09:42:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:42:18 --> Input Class Initialized
INFO - 2025-06-22 09:42:18 --> Language Class Initialized
INFO - 2025-06-22 09:42:18 --> Loader Class Initialized
INFO - 2025-06-22 09:42:18 --> Helper loaded: url_helper
INFO - 2025-06-22 09:42:18 --> Helper loaded: file_helper
INFO - 2025-06-22 09:42:18 --> Database Driver Class Initialized
INFO - 2025-06-22 09:42:18 --> Email Class Initialized
DEBUG - 2025-06-22 09:42:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:42:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:42:18 --> Controller Class Initialized
INFO - 2025-06-22 09:42:18 --> Model "FormTestModel" initialized
INFO - 2025-06-22 09:42:18 --> Helper loaded: form_helper
INFO - 2025-06-22 09:42:18 --> Form Validation Class Initialized
INFO - 2025-06-22 09:42:18 --> Database Driver Class Initialized
INFO - 2025-06-22 09:42:18 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:42:18 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:42:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:42:18 --> File loaded: /var/www/html/hris_lnd/application/views/template/header_mobile_lnd.php
INFO - 2025-06-22 09:42:18 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/form-test.php
INFO - 2025-06-22 09:42:18 --> Final output sent to browser
DEBUG - 2025-06-22 09:42:18 --> Total execution time: 0.0124
INFO - 2025-06-22 09:42:18 --> Config Class Initialized
INFO - 2025-06-22 09:42:18 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:42:18 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:42:18 --> Utf8 Class Initialized
INFO - 2025-06-22 09:42:18 --> URI Class Initialized
INFO - 2025-06-22 09:42:18 --> Router Class Initialized
INFO - 2025-06-22 09:42:18 --> Output Class Initialized
INFO - 2025-06-22 09:42:18 --> Security Class Initialized
DEBUG - 2025-06-22 09:42:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:42:18 --> Input Class Initialized
INFO - 2025-06-22 09:42:18 --> Language Class Initialized
INFO - 2025-06-22 09:42:18 --> Loader Class Initialized
INFO - 2025-06-22 09:42:18 --> Helper loaded: url_helper
INFO - 2025-06-22 09:42:18 --> Helper loaded: file_helper
INFO - 2025-06-22 09:42:18 --> Database Driver Class Initialized
INFO - 2025-06-22 09:42:18 --> Email Class Initialized
DEBUG - 2025-06-22 09:42:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:42:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:42:18 --> Controller Class Initialized
INFO - 2025-06-22 09:42:18 --> Helper loaded: form_helper
INFO - 2025-06-22 09:42:18 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:42:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:42:18 --> Database Driver Class Initialized
INFO - 2025-06-22 09:42:19 --> Model "Crud" initialized
INFO - 2025-06-22 09:42:19 --> Final output sent to browser
DEBUG - 2025-06-22 09:42:19 --> Total execution time: 0.0472
INFO - 2025-06-22 09:42:30 --> Config Class Initialized
INFO - 2025-06-22 09:42:30 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:42:30 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:42:30 --> Utf8 Class Initialized
INFO - 2025-06-22 09:42:30 --> URI Class Initialized
INFO - 2025-06-22 09:42:30 --> Router Class Initialized
INFO - 2025-06-22 09:42:30 --> Output Class Initialized
INFO - 2025-06-22 09:42:30 --> Security Class Initialized
DEBUG - 2025-06-22 09:42:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:42:30 --> Input Class Initialized
INFO - 2025-06-22 09:42:30 --> Language Class Initialized
INFO - 2025-06-22 09:42:30 --> Loader Class Initialized
INFO - 2025-06-22 09:42:30 --> Helper loaded: url_helper
INFO - 2025-06-22 09:42:30 --> Helper loaded: file_helper
INFO - 2025-06-22 09:42:30 --> Database Driver Class Initialized
INFO - 2025-06-22 09:42:30 --> Email Class Initialized
DEBUG - 2025-06-22 09:42:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:42:30 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:42:30 --> Controller Class Initialized
INFO - 2025-06-22 09:42:30 --> Model "FormTestModel" initialized
INFO - 2025-06-22 09:42:30 --> Helper loaded: form_helper
INFO - 2025-06-22 09:42:30 --> Form Validation Class Initialized
INFO - 2025-06-22 09:42:30 --> Database Driver Class Initialized
INFO - 2025-06-22 09:42:30 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:42:30 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:42:30 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:42:30 --> File loaded: /var/www/html/hris_lnd/application/views/template/header_mobile_lnd.php
INFO - 2025-06-22 09:42:30 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/form-test.php
INFO - 2025-06-22 09:42:30 --> Final output sent to browser
DEBUG - 2025-06-22 09:42:30 --> Total execution time: 0.0077
INFO - 2025-06-22 09:42:30 --> Config Class Initialized
INFO - 2025-06-22 09:42:30 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:42:30 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:42:30 --> Utf8 Class Initialized
INFO - 2025-06-22 09:42:30 --> URI Class Initialized
INFO - 2025-06-22 09:42:30 --> Router Class Initialized
INFO - 2025-06-22 09:42:30 --> Output Class Initialized
INFO - 2025-06-22 09:42:30 --> Security Class Initialized
DEBUG - 2025-06-22 09:42:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:42:30 --> Input Class Initialized
INFO - 2025-06-22 09:42:30 --> Language Class Initialized
INFO - 2025-06-22 09:42:30 --> Loader Class Initialized
INFO - 2025-06-22 09:42:30 --> Helper loaded: url_helper
INFO - 2025-06-22 09:42:30 --> Helper loaded: file_helper
INFO - 2025-06-22 09:42:30 --> Database Driver Class Initialized
INFO - 2025-06-22 09:42:30 --> Email Class Initialized
DEBUG - 2025-06-22 09:42:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:42:30 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:42:30 --> Controller Class Initialized
INFO - 2025-06-22 09:42:30 --> Helper loaded: form_helper
INFO - 2025-06-22 09:42:30 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:42:30 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:42:30 --> Database Driver Class Initialized
INFO - 2025-06-22 09:42:30 --> Model "Crud" initialized
INFO - 2025-06-22 09:42:30 --> Final output sent to browser
DEBUG - 2025-06-22 09:42:30 --> Total execution time: 0.0224
INFO - 2025-06-22 09:42:42 --> Config Class Initialized
INFO - 2025-06-22 09:42:42 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:42:42 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:42:42 --> Utf8 Class Initialized
INFO - 2025-06-22 09:42:42 --> URI Class Initialized
INFO - 2025-06-22 09:42:42 --> Router Class Initialized
INFO - 2025-06-22 09:42:42 --> Output Class Initialized
INFO - 2025-06-22 09:42:42 --> Security Class Initialized
DEBUG - 2025-06-22 09:42:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:42:42 --> Input Class Initialized
INFO - 2025-06-22 09:42:42 --> Language Class Initialized
INFO - 2025-06-22 09:42:42 --> Loader Class Initialized
INFO - 2025-06-22 09:42:42 --> Helper loaded: url_helper
INFO - 2025-06-22 09:42:42 --> Helper loaded: file_helper
INFO - 2025-06-22 09:42:42 --> Database Driver Class Initialized
INFO - 2025-06-22 09:42:42 --> Email Class Initialized
DEBUG - 2025-06-22 09:42:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:42:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:42:42 --> Controller Class Initialized
INFO - 2025-06-22 09:42:42 --> Model "FormTestModel" initialized
INFO - 2025-06-22 09:42:42 --> Helper loaded: form_helper
INFO - 2025-06-22 09:42:42 --> Form Validation Class Initialized
INFO - 2025-06-22 09:42:42 --> Database Driver Class Initialized
INFO - 2025-06-22 09:42:42 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:42:42 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:42:42 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:42:42 --> File loaded: /var/www/html/hris_lnd/application/views/template/header_mobile_lnd.php
INFO - 2025-06-22 09:42:42 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/form-test.php
INFO - 2025-06-22 09:42:42 --> Final output sent to browser
DEBUG - 2025-06-22 09:42:42 --> Total execution time: 0.0084
INFO - 2025-06-22 09:42:42 --> Config Class Initialized
INFO - 2025-06-22 09:42:42 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:42:42 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:42:42 --> Utf8 Class Initialized
INFO - 2025-06-22 09:42:42 --> URI Class Initialized
INFO - 2025-06-22 09:42:42 --> Router Class Initialized
INFO - 2025-06-22 09:42:42 --> Output Class Initialized
INFO - 2025-06-22 09:42:42 --> Security Class Initialized
DEBUG - 2025-06-22 09:42:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:42:42 --> Input Class Initialized
INFO - 2025-06-22 09:42:42 --> Language Class Initialized
INFO - 2025-06-22 09:42:42 --> Loader Class Initialized
INFO - 2025-06-22 09:42:42 --> Helper loaded: url_helper
INFO - 2025-06-22 09:42:42 --> Helper loaded: file_helper
INFO - 2025-06-22 09:42:42 --> Database Driver Class Initialized
INFO - 2025-06-22 09:42:42 --> Email Class Initialized
DEBUG - 2025-06-22 09:42:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:42:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:42:42 --> Controller Class Initialized
INFO - 2025-06-22 09:42:42 --> Helper loaded: form_helper
INFO - 2025-06-22 09:42:42 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:42:42 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:42:42 --> Database Driver Class Initialized
INFO - 2025-06-22 09:42:42 --> Model "Crud" initialized
INFO - 2025-06-22 09:42:42 --> Final output sent to browser
DEBUG - 2025-06-22 09:42:42 --> Total execution time: 0.0687
INFO - 2025-06-22 09:43:07 --> Config Class Initialized
INFO - 2025-06-22 09:43:07 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:43:07 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:43:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:43:07 --> URI Class Initialized
INFO - 2025-06-22 09:43:07 --> Router Class Initialized
INFO - 2025-06-22 09:43:07 --> Output Class Initialized
INFO - 2025-06-22 09:43:07 --> Security Class Initialized
DEBUG - 2025-06-22 09:43:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:43:07 --> Input Class Initialized
INFO - 2025-06-22 09:43:07 --> Language Class Initialized
INFO - 2025-06-22 09:43:07 --> Loader Class Initialized
INFO - 2025-06-22 09:43:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:43:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:43:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:43:07 --> Email Class Initialized
DEBUG - 2025-06-22 09:43:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:43:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:43:07 --> Controller Class Initialized
INFO - 2025-06-22 09:43:07 --> Model "FormTestModel" initialized
INFO - 2025-06-22 09:43:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:43:07 --> Form Validation Class Initialized
INFO - 2025-06-22 09:43:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:43:07 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:43:07 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:43:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:43:07 --> File loaded: /var/www/html/hris_lnd/application/views/template/header_mobile_lnd.php
INFO - 2025-06-22 09:43:07 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/form-test.php
INFO - 2025-06-22 09:43:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:43:07 --> Total execution time: 0.0136
INFO - 2025-06-22 09:43:07 --> Config Class Initialized
INFO - 2025-06-22 09:43:07 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:43:07 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:43:07 --> Utf8 Class Initialized
INFO - 2025-06-22 09:43:07 --> URI Class Initialized
INFO - 2025-06-22 09:43:07 --> Router Class Initialized
INFO - 2025-06-22 09:43:07 --> Output Class Initialized
INFO - 2025-06-22 09:43:07 --> Security Class Initialized
DEBUG - 2025-06-22 09:43:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:43:07 --> Input Class Initialized
INFO - 2025-06-22 09:43:07 --> Language Class Initialized
INFO - 2025-06-22 09:43:07 --> Loader Class Initialized
INFO - 2025-06-22 09:43:07 --> Helper loaded: url_helper
INFO - 2025-06-22 09:43:07 --> Helper loaded: file_helper
INFO - 2025-06-22 09:43:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:43:07 --> Email Class Initialized
DEBUG - 2025-06-22 09:43:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:43:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:43:07 --> Controller Class Initialized
INFO - 2025-06-22 09:43:07 --> Helper loaded: form_helper
INFO - 2025-06-22 09:43:07 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:43:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:43:07 --> Database Driver Class Initialized
INFO - 2025-06-22 09:43:07 --> Model "Crud" initialized
INFO - 2025-06-22 09:43:07 --> Final output sent to browser
DEBUG - 2025-06-22 09:43:07 --> Total execution time: 0.0265
INFO - 2025-06-22 09:43:32 --> Config Class Initialized
INFO - 2025-06-22 09:43:32 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:43:32 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:43:32 --> Utf8 Class Initialized
INFO - 2025-06-22 09:43:32 --> URI Class Initialized
INFO - 2025-06-22 09:43:32 --> Router Class Initialized
INFO - 2025-06-22 09:43:32 --> Output Class Initialized
INFO - 2025-06-22 09:43:32 --> Security Class Initialized
DEBUG - 2025-06-22 09:43:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:43:32 --> Input Class Initialized
INFO - 2025-06-22 09:43:32 --> Language Class Initialized
INFO - 2025-06-22 09:43:32 --> Loader Class Initialized
INFO - 2025-06-22 09:43:32 --> Helper loaded: url_helper
INFO - 2025-06-22 09:43:32 --> Helper loaded: file_helper
INFO - 2025-06-22 09:43:32 --> Database Driver Class Initialized
INFO - 2025-06-22 09:43:32 --> Email Class Initialized
DEBUG - 2025-06-22 09:43:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:43:32 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:43:32 --> Controller Class Initialized
INFO - 2025-06-22 09:43:32 --> Model "FormTestModel" initialized
INFO - 2025-06-22 09:43:32 --> Helper loaded: form_helper
INFO - 2025-06-22 09:43:32 --> Form Validation Class Initialized
INFO - 2025-06-22 09:43:32 --> Database Driver Class Initialized
INFO - 2025-06-22 09:43:32 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:43:32 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:43:32 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:43:32 --> File loaded: /var/www/html/hris_lnd/application/views/template/header_mobile_lnd.php
INFO - 2025-06-22 09:43:32 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/form-test.php
INFO - 2025-06-22 09:43:32 --> Final output sent to browser
DEBUG - 2025-06-22 09:43:32 --> Total execution time: 0.0098
INFO - 2025-06-22 09:43:33 --> Config Class Initialized
INFO - 2025-06-22 09:43:33 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:43:33 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:43:33 --> Utf8 Class Initialized
INFO - 2025-06-22 09:43:33 --> URI Class Initialized
INFO - 2025-06-22 09:43:33 --> Router Class Initialized
INFO - 2025-06-22 09:43:33 --> Output Class Initialized
INFO - 2025-06-22 09:43:33 --> Security Class Initialized
DEBUG - 2025-06-22 09:43:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:43:33 --> Input Class Initialized
INFO - 2025-06-22 09:43:33 --> Language Class Initialized
INFO - 2025-06-22 09:43:33 --> Loader Class Initialized
INFO - 2025-06-22 09:43:33 --> Helper loaded: url_helper
INFO - 2025-06-22 09:43:33 --> Helper loaded: file_helper
INFO - 2025-06-22 09:43:33 --> Database Driver Class Initialized
INFO - 2025-06-22 09:43:33 --> Email Class Initialized
DEBUG - 2025-06-22 09:43:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:43:33 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:43:33 --> Controller Class Initialized
INFO - 2025-06-22 09:43:33 --> Helper loaded: form_helper
INFO - 2025-06-22 09:43:33 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:43:33 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:43:33 --> Database Driver Class Initialized
INFO - 2025-06-22 09:43:33 --> Model "Crud" initialized
INFO - 2025-06-22 09:43:33 --> Final output sent to browser
DEBUG - 2025-06-22 09:43:33 --> Total execution time: 0.0207
INFO - 2025-06-22 09:44:49 --> Config Class Initialized
INFO - 2025-06-22 09:44:49 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:44:49 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:44:49 --> Utf8 Class Initialized
INFO - 2025-06-22 09:44:49 --> URI Class Initialized
INFO - 2025-06-22 09:44:49 --> Router Class Initialized
INFO - 2025-06-22 09:44:49 --> Output Class Initialized
INFO - 2025-06-22 09:44:49 --> Security Class Initialized
DEBUG - 2025-06-22 09:44:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:44:49 --> Input Class Initialized
INFO - 2025-06-22 09:44:49 --> Language Class Initialized
INFO - 2025-06-22 09:44:49 --> Loader Class Initialized
INFO - 2025-06-22 09:44:49 --> Helper loaded: url_helper
INFO - 2025-06-22 09:44:49 --> Helper loaded: file_helper
INFO - 2025-06-22 09:44:49 --> Database Driver Class Initialized
INFO - 2025-06-22 09:44:49 --> Email Class Initialized
DEBUG - 2025-06-22 09:44:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:44:49 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:44:49 --> Controller Class Initialized
INFO - 2025-06-22 09:44:49 --> Model "FormTestModel" initialized
INFO - 2025-06-22 09:44:49 --> Helper loaded: form_helper
INFO - 2025-06-22 09:44:49 --> Form Validation Class Initialized
INFO - 2025-06-22 09:44:49 --> Database Driver Class Initialized
INFO - 2025-06-22 09:44:49 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:44:49 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:44:49 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:44:49 --> File loaded: /var/www/html/hris_lnd/application/views/template/header_mobile_lnd.php
INFO - 2025-06-22 09:44:49 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/form-test.php
INFO - 2025-06-22 09:44:49 --> Final output sent to browser
DEBUG - 2025-06-22 09:44:49 --> Total execution time: 0.0137
INFO - 2025-06-22 09:44:51 --> Config Class Initialized
INFO - 2025-06-22 09:44:51 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:44:51 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:44:51 --> Utf8 Class Initialized
INFO - 2025-06-22 09:44:51 --> URI Class Initialized
INFO - 2025-06-22 09:44:51 --> Router Class Initialized
INFO - 2025-06-22 09:44:51 --> Output Class Initialized
INFO - 2025-06-22 09:44:51 --> Security Class Initialized
DEBUG - 2025-06-22 09:44:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:44:51 --> Input Class Initialized
INFO - 2025-06-22 09:44:51 --> Language Class Initialized
INFO - 2025-06-22 09:44:51 --> Loader Class Initialized
INFO - 2025-06-22 09:44:51 --> Helper loaded: url_helper
INFO - 2025-06-22 09:44:51 --> Helper loaded: file_helper
INFO - 2025-06-22 09:44:51 --> Database Driver Class Initialized
INFO - 2025-06-22 09:44:51 --> Email Class Initialized
DEBUG - 2025-06-22 09:44:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:44:51 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:44:51 --> Controller Class Initialized
INFO - 2025-06-22 09:44:51 --> Helper loaded: form_helper
INFO - 2025-06-22 09:44:51 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:44:51 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:44:51 --> Database Driver Class Initialized
INFO - 2025-06-22 09:44:51 --> Model "Crud" initialized
INFO - 2025-06-22 09:44:51 --> Final output sent to browser
DEBUG - 2025-06-22 09:44:51 --> Total execution time: 0.0526
INFO - 2025-06-22 09:44:55 --> Config Class Initialized
INFO - 2025-06-22 09:44:55 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:44:55 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:44:55 --> Utf8 Class Initialized
INFO - 2025-06-22 09:44:55 --> URI Class Initialized
INFO - 2025-06-22 09:44:55 --> Router Class Initialized
INFO - 2025-06-22 09:44:55 --> Output Class Initialized
INFO - 2025-06-22 09:44:55 --> Security Class Initialized
DEBUG - 2025-06-22 09:44:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:44:55 --> Input Class Initialized
INFO - 2025-06-22 09:44:55 --> Language Class Initialized
INFO - 2025-06-22 09:44:55 --> Loader Class Initialized
INFO - 2025-06-22 09:44:55 --> Helper loaded: url_helper
INFO - 2025-06-22 09:44:55 --> Helper loaded: file_helper
INFO - 2025-06-22 09:44:55 --> Database Driver Class Initialized
INFO - 2025-06-22 09:44:55 --> Email Class Initialized
DEBUG - 2025-06-22 09:44:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:44:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:44:55 --> Controller Class Initialized
INFO - 2025-06-22 09:44:55 --> Model "FormTestModel" initialized
INFO - 2025-06-22 09:44:55 --> Helper loaded: form_helper
INFO - 2025-06-22 09:44:55 --> Form Validation Class Initialized
INFO - 2025-06-22 09:44:55 --> Database Driver Class Initialized
INFO - 2025-06-22 09:44:55 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:44:55 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:44:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:44:55 --> File loaded: /var/www/html/hris_lnd/application/views/template/header_mobile_lnd.php
INFO - 2025-06-22 09:44:55 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/form-test.php
INFO - 2025-06-22 09:44:55 --> Final output sent to browser
DEBUG - 2025-06-22 09:44:55 --> Total execution time: 0.0093
INFO - 2025-06-22 09:44:55 --> Config Class Initialized
INFO - 2025-06-22 09:44:55 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:44:55 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:44:55 --> Utf8 Class Initialized
INFO - 2025-06-22 09:44:55 --> URI Class Initialized
INFO - 2025-06-22 09:44:55 --> Router Class Initialized
INFO - 2025-06-22 09:44:55 --> Output Class Initialized
INFO - 2025-06-22 09:44:55 --> Security Class Initialized
DEBUG - 2025-06-22 09:44:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:44:55 --> Input Class Initialized
INFO - 2025-06-22 09:44:55 --> Language Class Initialized
INFO - 2025-06-22 09:44:55 --> Loader Class Initialized
INFO - 2025-06-22 09:44:55 --> Helper loaded: url_helper
INFO - 2025-06-22 09:44:55 --> Helper loaded: file_helper
INFO - 2025-06-22 09:44:55 --> Database Driver Class Initialized
INFO - 2025-06-22 09:44:55 --> Email Class Initialized
DEBUG - 2025-06-22 09:44:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:44:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:44:55 --> Controller Class Initialized
INFO - 2025-06-22 09:44:55 --> Helper loaded: form_helper
INFO - 2025-06-22 09:44:55 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:44:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:44:55 --> Database Driver Class Initialized
INFO - 2025-06-22 09:44:55 --> Model "Crud" initialized
INFO - 2025-06-22 09:44:55 --> Final output sent to browser
DEBUG - 2025-06-22 09:44:55 --> Total execution time: 0.0309
INFO - 2025-06-22 09:45:15 --> Config Class Initialized
INFO - 2025-06-22 09:45:15 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:45:15 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:45:15 --> Utf8 Class Initialized
INFO - 2025-06-22 09:45:15 --> URI Class Initialized
INFO - 2025-06-22 09:45:15 --> Router Class Initialized
INFO - 2025-06-22 09:45:15 --> Output Class Initialized
INFO - 2025-06-22 09:45:15 --> Security Class Initialized
DEBUG - 2025-06-22 09:45:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:45:15 --> Input Class Initialized
INFO - 2025-06-22 09:45:15 --> Language Class Initialized
INFO - 2025-06-22 09:45:15 --> Loader Class Initialized
INFO - 2025-06-22 09:45:15 --> Helper loaded: url_helper
INFO - 2025-06-22 09:45:15 --> Helper loaded: file_helper
INFO - 2025-06-22 09:45:15 --> Database Driver Class Initialized
INFO - 2025-06-22 09:45:15 --> Email Class Initialized
DEBUG - 2025-06-22 09:45:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:45:15 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:45:15 --> Controller Class Initialized
INFO - 2025-06-22 09:45:15 --> Model "FormTestModel" initialized
INFO - 2025-06-22 09:45:15 --> Helper loaded: form_helper
INFO - 2025-06-22 09:45:15 --> Form Validation Class Initialized
INFO - 2025-06-22 09:45:15 --> Database Driver Class Initialized
INFO - 2025-06-22 09:45:15 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:45:15 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:45:15 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:45:15 --> File loaded: /var/www/html/hris_lnd/application/views/template/header_mobile_lnd.php
INFO - 2025-06-22 09:45:15 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/form-test.php
INFO - 2025-06-22 09:45:15 --> Final output sent to browser
DEBUG - 2025-06-22 09:45:15 --> Total execution time: 0.0105
INFO - 2025-06-22 09:45:15 --> Config Class Initialized
INFO - 2025-06-22 09:45:15 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:45:15 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:45:15 --> Utf8 Class Initialized
INFO - 2025-06-22 09:45:15 --> URI Class Initialized
INFO - 2025-06-22 09:45:15 --> Router Class Initialized
INFO - 2025-06-22 09:45:15 --> Output Class Initialized
INFO - 2025-06-22 09:45:15 --> Security Class Initialized
DEBUG - 2025-06-22 09:45:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:45:15 --> Input Class Initialized
INFO - 2025-06-22 09:45:15 --> Language Class Initialized
INFO - 2025-06-22 09:45:15 --> Loader Class Initialized
INFO - 2025-06-22 09:45:15 --> Helper loaded: url_helper
INFO - 2025-06-22 09:45:15 --> Helper loaded: file_helper
INFO - 2025-06-22 09:45:15 --> Database Driver Class Initialized
INFO - 2025-06-22 09:45:15 --> Email Class Initialized
DEBUG - 2025-06-22 09:45:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:45:15 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:45:15 --> Controller Class Initialized
INFO - 2025-06-22 09:45:15 --> Helper loaded: form_helper
INFO - 2025-06-22 09:45:15 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:45:15 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:45:15 --> Database Driver Class Initialized
INFO - 2025-06-22 09:45:15 --> Model "Crud" initialized
INFO - 2025-06-22 09:45:15 --> Final output sent to browser
DEBUG - 2025-06-22 09:45:15 --> Total execution time: 0.0318
INFO - 2025-06-22 09:46:18 --> Config Class Initialized
INFO - 2025-06-22 09:46:18 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:46:18 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:46:18 --> Utf8 Class Initialized
INFO - 2025-06-22 09:46:18 --> URI Class Initialized
INFO - 2025-06-22 09:46:18 --> Router Class Initialized
INFO - 2025-06-22 09:46:18 --> Output Class Initialized
INFO - 2025-06-22 09:46:18 --> Security Class Initialized
DEBUG - 2025-06-22 09:46:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:46:18 --> Input Class Initialized
INFO - 2025-06-22 09:46:18 --> Language Class Initialized
INFO - 2025-06-22 09:46:18 --> Loader Class Initialized
INFO - 2025-06-22 09:46:18 --> Helper loaded: url_helper
INFO - 2025-06-22 09:46:18 --> Helper loaded: file_helper
INFO - 2025-06-22 09:46:18 --> Database Driver Class Initialized
INFO - 2025-06-22 09:46:18 --> Email Class Initialized
DEBUG - 2025-06-22 09:46:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:46:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:46:18 --> Controller Class Initialized
INFO - 2025-06-22 09:46:18 --> Model "FormTestModel" initialized
INFO - 2025-06-22 09:46:18 --> Helper loaded: form_helper
INFO - 2025-06-22 09:46:18 --> Form Validation Class Initialized
INFO - 2025-06-22 09:46:18 --> Database Driver Class Initialized
INFO - 2025-06-22 09:46:18 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:46:18 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:46:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:46:18 --> File loaded: /var/www/html/hris_lnd/application/views/template/header_mobile_lnd.php
INFO - 2025-06-22 09:46:18 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/form-test.php
INFO - 2025-06-22 09:46:18 --> Final output sent to browser
DEBUG - 2025-06-22 09:46:18 --> Total execution time: 0.0116
INFO - 2025-06-22 09:46:19 --> Config Class Initialized
INFO - 2025-06-22 09:46:19 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:46:19 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:46:19 --> Utf8 Class Initialized
INFO - 2025-06-22 09:46:19 --> URI Class Initialized
INFO - 2025-06-22 09:46:19 --> Router Class Initialized
INFO - 2025-06-22 09:46:19 --> Output Class Initialized
INFO - 2025-06-22 09:46:19 --> Security Class Initialized
DEBUG - 2025-06-22 09:46:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:46:19 --> Input Class Initialized
INFO - 2025-06-22 09:46:19 --> Language Class Initialized
INFO - 2025-06-22 09:46:19 --> Loader Class Initialized
INFO - 2025-06-22 09:46:19 --> Helper loaded: url_helper
INFO - 2025-06-22 09:46:19 --> Helper loaded: file_helper
INFO - 2025-06-22 09:46:19 --> Database Driver Class Initialized
INFO - 2025-06-22 09:46:19 --> Email Class Initialized
DEBUG - 2025-06-22 09:46:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:46:19 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:46:19 --> Controller Class Initialized
INFO - 2025-06-22 09:46:19 --> Helper loaded: form_helper
INFO - 2025-06-22 09:46:19 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:46:19 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:46:19 --> Database Driver Class Initialized
INFO - 2025-06-22 09:46:19 --> Model "Crud" initialized
INFO - 2025-06-22 09:46:19 --> Final output sent to browser
DEBUG - 2025-06-22 09:46:19 --> Total execution time: 0.0440
INFO - 2025-06-22 09:47:16 --> Config Class Initialized
INFO - 2025-06-22 09:47:16 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:47:16 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:47:16 --> Utf8 Class Initialized
INFO - 2025-06-22 09:47:16 --> URI Class Initialized
INFO - 2025-06-22 09:47:16 --> Router Class Initialized
INFO - 2025-06-22 09:47:16 --> Output Class Initialized
INFO - 2025-06-22 09:47:16 --> Security Class Initialized
DEBUG - 2025-06-22 09:47:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:47:16 --> Input Class Initialized
INFO - 2025-06-22 09:47:16 --> Language Class Initialized
INFO - 2025-06-22 09:47:16 --> Loader Class Initialized
INFO - 2025-06-22 09:47:16 --> Helper loaded: url_helper
INFO - 2025-06-22 09:47:16 --> Helper loaded: file_helper
INFO - 2025-06-22 09:47:16 --> Database Driver Class Initialized
INFO - 2025-06-22 09:47:16 --> Email Class Initialized
DEBUG - 2025-06-22 09:47:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:47:16 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:47:16 --> Controller Class Initialized
INFO - 2025-06-22 09:47:16 --> Model "FormTestModel" initialized
INFO - 2025-06-22 09:47:16 --> Helper loaded: form_helper
INFO - 2025-06-22 09:47:16 --> Form Validation Class Initialized
INFO - 2025-06-22 09:47:16 --> Database Driver Class Initialized
INFO - 2025-06-22 09:47:16 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:47:16 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:47:16 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:47:16 --> File loaded: /var/www/html/hris_lnd/application/views/template/header_mobile_lnd.php
INFO - 2025-06-22 09:47:16 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/form-test.php
INFO - 2025-06-22 09:47:16 --> Final output sent to browser
DEBUG - 2025-06-22 09:47:16 --> Total execution time: 0.0086
INFO - 2025-06-22 09:47:16 --> Config Class Initialized
INFO - 2025-06-22 09:47:16 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:47:16 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:47:16 --> Utf8 Class Initialized
INFO - 2025-06-22 09:47:16 --> URI Class Initialized
INFO - 2025-06-22 09:47:16 --> Router Class Initialized
INFO - 2025-06-22 09:47:16 --> Output Class Initialized
INFO - 2025-06-22 09:47:16 --> Security Class Initialized
DEBUG - 2025-06-22 09:47:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:47:16 --> Input Class Initialized
INFO - 2025-06-22 09:47:16 --> Language Class Initialized
INFO - 2025-06-22 09:47:16 --> Loader Class Initialized
INFO - 2025-06-22 09:47:16 --> Helper loaded: url_helper
INFO - 2025-06-22 09:47:16 --> Helper loaded: file_helper
INFO - 2025-06-22 09:47:16 --> Database Driver Class Initialized
INFO - 2025-06-22 09:47:16 --> Email Class Initialized
DEBUG - 2025-06-22 09:47:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:47:16 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:47:16 --> Controller Class Initialized
INFO - 2025-06-22 09:47:16 --> Helper loaded: form_helper
INFO - 2025-06-22 09:47:16 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:47:16 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:47:16 --> Database Driver Class Initialized
INFO - 2025-06-22 09:47:16 --> Model "Crud" initialized
INFO - 2025-06-22 09:47:16 --> Final output sent to browser
DEBUG - 2025-06-22 09:47:16 --> Total execution time: 0.0271
INFO - 2025-06-22 09:47:29 --> Config Class Initialized
INFO - 2025-06-22 09:47:29 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:47:29 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:47:29 --> Utf8 Class Initialized
INFO - 2025-06-22 09:47:29 --> URI Class Initialized
INFO - 2025-06-22 09:47:29 --> Router Class Initialized
INFO - 2025-06-22 09:47:29 --> Output Class Initialized
INFO - 2025-06-22 09:47:29 --> Security Class Initialized
DEBUG - 2025-06-22 09:47:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:47:29 --> Input Class Initialized
INFO - 2025-06-22 09:47:29 --> Language Class Initialized
INFO - 2025-06-22 09:47:29 --> Loader Class Initialized
INFO - 2025-06-22 09:47:29 --> Helper loaded: url_helper
INFO - 2025-06-22 09:47:29 --> Helper loaded: file_helper
INFO - 2025-06-22 09:47:29 --> Database Driver Class Initialized
INFO - 2025-06-22 09:47:29 --> Email Class Initialized
DEBUG - 2025-06-22 09:47:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:47:29 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:47:29 --> Controller Class Initialized
INFO - 2025-06-22 09:47:29 --> Model "FormTestModel" initialized
INFO - 2025-06-22 09:47:29 --> Helper loaded: form_helper
INFO - 2025-06-22 09:47:29 --> Form Validation Class Initialized
INFO - 2025-06-22 09:47:29 --> Database Driver Class Initialized
INFO - 2025-06-22 09:47:29 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:47:29 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:47:29 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:47:29 --> File loaded: /var/www/html/hris_lnd/application/views/template/header_mobile_lnd.php
INFO - 2025-06-22 09:47:29 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/form-test.php
INFO - 2025-06-22 09:47:29 --> Final output sent to browser
DEBUG - 2025-06-22 09:47:29 --> Total execution time: 0.0161
INFO - 2025-06-22 09:47:29 --> Config Class Initialized
INFO - 2025-06-22 09:47:29 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:47:29 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:47:29 --> Utf8 Class Initialized
INFO - 2025-06-22 09:47:29 --> URI Class Initialized
INFO - 2025-06-22 09:47:29 --> Router Class Initialized
INFO - 2025-06-22 09:47:29 --> Output Class Initialized
INFO - 2025-06-22 09:47:29 --> Security Class Initialized
DEBUG - 2025-06-22 09:47:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:47:29 --> Input Class Initialized
INFO - 2025-06-22 09:47:29 --> Language Class Initialized
INFO - 2025-06-22 09:47:29 --> Loader Class Initialized
INFO - 2025-06-22 09:47:29 --> Helper loaded: url_helper
INFO - 2025-06-22 09:47:29 --> Helper loaded: file_helper
INFO - 2025-06-22 09:47:29 --> Database Driver Class Initialized
INFO - 2025-06-22 09:47:29 --> Email Class Initialized
DEBUG - 2025-06-22 09:47:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:47:29 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:47:29 --> Controller Class Initialized
INFO - 2025-06-22 09:47:29 --> Helper loaded: form_helper
INFO - 2025-06-22 09:47:29 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:47:29 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:47:29 --> Database Driver Class Initialized
INFO - 2025-06-22 09:47:29 --> Model "Crud" initialized
INFO - 2025-06-22 09:47:29 --> Final output sent to browser
DEBUG - 2025-06-22 09:47:29 --> Total execution time: 0.0678
INFO - 2025-06-22 09:47:37 --> Config Class Initialized
INFO - 2025-06-22 09:47:37 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:47:37 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:47:37 --> Utf8 Class Initialized
INFO - 2025-06-22 09:47:37 --> URI Class Initialized
INFO - 2025-06-22 09:47:37 --> Router Class Initialized
INFO - 2025-06-22 09:47:37 --> Output Class Initialized
INFO - 2025-06-22 09:47:37 --> Security Class Initialized
DEBUG - 2025-06-22 09:47:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:47:37 --> Input Class Initialized
INFO - 2025-06-22 09:47:37 --> Language Class Initialized
INFO - 2025-06-22 09:47:37 --> Loader Class Initialized
INFO - 2025-06-22 09:47:37 --> Helper loaded: url_helper
INFO - 2025-06-22 09:47:37 --> Helper loaded: file_helper
INFO - 2025-06-22 09:47:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:47:37 --> Email Class Initialized
DEBUG - 2025-06-22 09:47:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:47:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:47:37 --> Controller Class Initialized
INFO - 2025-06-22 09:47:37 --> Model "FormTestModel" initialized
INFO - 2025-06-22 09:47:37 --> Helper loaded: form_helper
INFO - 2025-06-22 09:47:37 --> Form Validation Class Initialized
INFO - 2025-06-22 09:47:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:47:37 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:47:37 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:47:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:47:37 --> File loaded: /var/www/html/hris_lnd/application/views/template/header_mobile_lnd.php
INFO - 2025-06-22 09:47:37 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/form-test.php
INFO - 2025-06-22 09:47:37 --> Final output sent to browser
DEBUG - 2025-06-22 09:47:37 --> Total execution time: 0.0110
INFO - 2025-06-22 09:47:37 --> Config Class Initialized
INFO - 2025-06-22 09:47:37 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:47:37 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:47:37 --> Utf8 Class Initialized
INFO - 2025-06-22 09:47:37 --> URI Class Initialized
INFO - 2025-06-22 09:47:37 --> Router Class Initialized
INFO - 2025-06-22 09:47:37 --> Output Class Initialized
INFO - 2025-06-22 09:47:37 --> Security Class Initialized
DEBUG - 2025-06-22 09:47:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:47:37 --> Input Class Initialized
INFO - 2025-06-22 09:47:37 --> Language Class Initialized
INFO - 2025-06-22 09:47:37 --> Loader Class Initialized
INFO - 2025-06-22 09:47:37 --> Helper loaded: url_helper
INFO - 2025-06-22 09:47:37 --> Helper loaded: file_helper
INFO - 2025-06-22 09:47:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:47:37 --> Email Class Initialized
DEBUG - 2025-06-22 09:47:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:47:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:47:37 --> Controller Class Initialized
INFO - 2025-06-22 09:47:37 --> Helper loaded: form_helper
INFO - 2025-06-22 09:47:37 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:47:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:47:37 --> Database Driver Class Initialized
INFO - 2025-06-22 09:47:37 --> Model "Crud" initialized
INFO - 2025-06-22 09:47:37 --> Final output sent to browser
DEBUG - 2025-06-22 09:47:37 --> Total execution time: 0.0264
INFO - 2025-06-22 09:47:50 --> Config Class Initialized
INFO - 2025-06-22 09:47:50 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:47:50 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:47:50 --> Utf8 Class Initialized
INFO - 2025-06-22 09:47:50 --> URI Class Initialized
INFO - 2025-06-22 09:47:50 --> Router Class Initialized
INFO - 2025-06-22 09:47:50 --> Output Class Initialized
INFO - 2025-06-22 09:47:50 --> Security Class Initialized
DEBUG - 2025-06-22 09:47:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:47:50 --> Input Class Initialized
INFO - 2025-06-22 09:47:50 --> Language Class Initialized
INFO - 2025-06-22 09:47:50 --> Loader Class Initialized
INFO - 2025-06-22 09:47:50 --> Helper loaded: url_helper
INFO - 2025-06-22 09:47:50 --> Helper loaded: file_helper
INFO - 2025-06-22 09:47:50 --> Database Driver Class Initialized
INFO - 2025-06-22 09:47:50 --> Email Class Initialized
DEBUG - 2025-06-22 09:47:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:47:50 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:47:50 --> Controller Class Initialized
INFO - 2025-06-22 09:47:50 --> Model "FormTestModel" initialized
INFO - 2025-06-22 09:47:50 --> Helper loaded: form_helper
INFO - 2025-06-22 09:47:50 --> Form Validation Class Initialized
INFO - 2025-06-22 09:47:50 --> Database Driver Class Initialized
INFO - 2025-06-22 09:47:50 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:47:50 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:47:50 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:47:50 --> File loaded: /var/www/html/hris_lnd/application/views/template/header_mobile_lnd.php
INFO - 2025-06-22 09:47:50 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/form-test.php
INFO - 2025-06-22 09:47:50 --> Final output sent to browser
DEBUG - 2025-06-22 09:47:50 --> Total execution time: 0.0375
INFO - 2025-06-22 09:47:50 --> Config Class Initialized
INFO - 2025-06-22 09:47:50 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:47:50 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:47:50 --> Utf8 Class Initialized
INFO - 2025-06-22 09:47:50 --> URI Class Initialized
INFO - 2025-06-22 09:47:50 --> Router Class Initialized
INFO - 2025-06-22 09:47:50 --> Output Class Initialized
INFO - 2025-06-22 09:47:50 --> Security Class Initialized
DEBUG - 2025-06-22 09:47:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:47:50 --> Input Class Initialized
INFO - 2025-06-22 09:47:50 --> Language Class Initialized
INFO - 2025-06-22 09:47:50 --> Loader Class Initialized
INFO - 2025-06-22 09:47:50 --> Helper loaded: url_helper
INFO - 2025-06-22 09:47:50 --> Helper loaded: file_helper
INFO - 2025-06-22 09:47:50 --> Database Driver Class Initialized
INFO - 2025-06-22 09:47:50 --> Email Class Initialized
DEBUG - 2025-06-22 09:47:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:47:50 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:47:50 --> Controller Class Initialized
INFO - 2025-06-22 09:47:50 --> Helper loaded: form_helper
INFO - 2025-06-22 09:47:50 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:47:50 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:47:50 --> Database Driver Class Initialized
INFO - 2025-06-22 09:47:50 --> Model "Crud" initialized
INFO - 2025-06-22 09:47:50 --> Final output sent to browser
DEBUG - 2025-06-22 09:47:50 --> Total execution time: 0.0342
INFO - 2025-06-22 09:49:16 --> Config Class Initialized
INFO - 2025-06-22 09:49:16 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:49:16 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:49:16 --> Utf8 Class Initialized
INFO - 2025-06-22 09:49:16 --> URI Class Initialized
INFO - 2025-06-22 09:49:16 --> Router Class Initialized
INFO - 2025-06-22 09:49:16 --> Output Class Initialized
INFO - 2025-06-22 09:49:16 --> Security Class Initialized
DEBUG - 2025-06-22 09:49:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:49:16 --> Input Class Initialized
INFO - 2025-06-22 09:49:16 --> Language Class Initialized
INFO - 2025-06-22 09:49:16 --> Loader Class Initialized
INFO - 2025-06-22 09:49:16 --> Helper loaded: url_helper
INFO - 2025-06-22 09:49:16 --> Helper loaded: file_helper
INFO - 2025-06-22 09:49:16 --> Database Driver Class Initialized
INFO - 2025-06-22 09:49:16 --> Email Class Initialized
DEBUG - 2025-06-22 09:49:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:49:16 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:49:16 --> Controller Class Initialized
INFO - 2025-06-22 09:49:16 --> Model "FormTestModel" initialized
INFO - 2025-06-22 09:49:16 --> Helper loaded: form_helper
INFO - 2025-06-22 09:49:16 --> Form Validation Class Initialized
INFO - 2025-06-22 09:49:16 --> Database Driver Class Initialized
INFO - 2025-06-22 09:49:16 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:49:16 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:49:16 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:49:16 --> File loaded: /var/www/html/hris_lnd/application/views/template/header_mobile_lnd.php
INFO - 2025-06-22 09:49:16 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/form-test.php
INFO - 2025-06-22 09:49:16 --> Final output sent to browser
DEBUG - 2025-06-22 09:49:16 --> Total execution time: 0.0118
INFO - 2025-06-22 09:49:17 --> Config Class Initialized
INFO - 2025-06-22 09:49:17 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:49:17 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:49:17 --> Utf8 Class Initialized
INFO - 2025-06-22 09:49:17 --> URI Class Initialized
INFO - 2025-06-22 09:49:17 --> Router Class Initialized
INFO - 2025-06-22 09:49:17 --> Output Class Initialized
INFO - 2025-06-22 09:49:17 --> Security Class Initialized
DEBUG - 2025-06-22 09:49:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:49:17 --> Input Class Initialized
INFO - 2025-06-22 09:49:17 --> Language Class Initialized
INFO - 2025-06-22 09:49:17 --> Loader Class Initialized
INFO - 2025-06-22 09:49:17 --> Helper loaded: url_helper
INFO - 2025-06-22 09:49:17 --> Helper loaded: file_helper
INFO - 2025-06-22 09:49:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:49:17 --> Email Class Initialized
DEBUG - 2025-06-22 09:49:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:49:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:49:17 --> Controller Class Initialized
INFO - 2025-06-22 09:49:17 --> Helper loaded: form_helper
INFO - 2025-06-22 09:49:17 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:49:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:49:17 --> Database Driver Class Initialized
INFO - 2025-06-22 09:49:17 --> Model "Crud" initialized
INFO - 2025-06-22 09:49:17 --> Final output sent to browser
DEBUG - 2025-06-22 09:49:17 --> Total execution time: 0.0429
INFO - 2025-06-22 09:49:48 --> Config Class Initialized
INFO - 2025-06-22 09:49:48 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:49:48 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:49:48 --> Utf8 Class Initialized
INFO - 2025-06-22 09:49:48 --> URI Class Initialized
INFO - 2025-06-22 09:49:48 --> Router Class Initialized
INFO - 2025-06-22 09:49:48 --> Output Class Initialized
INFO - 2025-06-22 09:49:48 --> Security Class Initialized
DEBUG - 2025-06-22 09:49:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:49:48 --> Input Class Initialized
INFO - 2025-06-22 09:49:48 --> Language Class Initialized
INFO - 2025-06-22 09:49:48 --> Loader Class Initialized
INFO - 2025-06-22 09:49:48 --> Helper loaded: url_helper
INFO - 2025-06-22 09:49:48 --> Helper loaded: file_helper
INFO - 2025-06-22 09:49:48 --> Database Driver Class Initialized
INFO - 2025-06-22 09:49:48 --> Email Class Initialized
DEBUG - 2025-06-22 09:49:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:49:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:49:48 --> Controller Class Initialized
INFO - 2025-06-22 09:49:48 --> Model "FormTestModel" initialized
INFO - 2025-06-22 09:49:48 --> Helper loaded: form_helper
INFO - 2025-06-22 09:49:48 --> Form Validation Class Initialized
INFO - 2025-06-22 09:49:48 --> Database Driver Class Initialized
INFO - 2025-06-22 09:49:48 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:49:48 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:49:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:49:48 --> File loaded: /var/www/html/hris_lnd/application/views/template/header_mobile_lnd.php
INFO - 2025-06-22 09:49:48 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/form-test.php
INFO - 2025-06-22 09:49:48 --> Final output sent to browser
DEBUG - 2025-06-22 09:49:48 --> Total execution time: 0.0102
INFO - 2025-06-22 09:49:48 --> Config Class Initialized
INFO - 2025-06-22 09:49:48 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:49:48 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:49:48 --> Utf8 Class Initialized
INFO - 2025-06-22 09:49:48 --> URI Class Initialized
INFO - 2025-06-22 09:49:48 --> Router Class Initialized
INFO - 2025-06-22 09:49:48 --> Output Class Initialized
INFO - 2025-06-22 09:49:48 --> Security Class Initialized
DEBUG - 2025-06-22 09:49:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:49:48 --> Input Class Initialized
INFO - 2025-06-22 09:49:48 --> Language Class Initialized
INFO - 2025-06-22 09:49:48 --> Loader Class Initialized
INFO - 2025-06-22 09:49:48 --> Helper loaded: url_helper
INFO - 2025-06-22 09:49:48 --> Helper loaded: file_helper
INFO - 2025-06-22 09:49:48 --> Database Driver Class Initialized
INFO - 2025-06-22 09:49:48 --> Email Class Initialized
DEBUG - 2025-06-22 09:49:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:49:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:49:48 --> Controller Class Initialized
INFO - 2025-06-22 09:49:48 --> Helper loaded: form_helper
INFO - 2025-06-22 09:49:48 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:49:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:49:48 --> Database Driver Class Initialized
INFO - 2025-06-22 09:49:48 --> Model "Crud" initialized
INFO - 2025-06-22 09:49:48 --> Final output sent to browser
DEBUG - 2025-06-22 09:49:48 --> Total execution time: 0.0402
INFO - 2025-06-22 09:50:00 --> Config Class Initialized
INFO - 2025-06-22 09:50:00 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:50:00 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:50:00 --> Utf8 Class Initialized
INFO - 2025-06-22 09:50:00 --> URI Class Initialized
INFO - 2025-06-22 09:50:00 --> Router Class Initialized
INFO - 2025-06-22 09:50:00 --> Output Class Initialized
INFO - 2025-06-22 09:50:00 --> Security Class Initialized
DEBUG - 2025-06-22 09:50:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:50:00 --> Input Class Initialized
INFO - 2025-06-22 09:50:00 --> Language Class Initialized
INFO - 2025-06-22 09:50:00 --> Loader Class Initialized
INFO - 2025-06-22 09:50:00 --> Helper loaded: url_helper
INFO - 2025-06-22 09:50:00 --> Helper loaded: file_helper
INFO - 2025-06-22 09:50:00 --> Database Driver Class Initialized
INFO - 2025-06-22 09:50:00 --> Email Class Initialized
DEBUG - 2025-06-22 09:50:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:50:00 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:50:00 --> Controller Class Initialized
INFO - 2025-06-22 09:50:00 --> Model "FormTestModel" initialized
INFO - 2025-06-22 09:50:00 --> Helper loaded: form_helper
INFO - 2025-06-22 09:50:00 --> Form Validation Class Initialized
INFO - 2025-06-22 09:50:00 --> Database Driver Class Initialized
INFO - 2025-06-22 09:50:00 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:50:00 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:50:00 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:50:00 --> File loaded: /var/www/html/hris_lnd/application/views/template/header_mobile_lnd.php
INFO - 2025-06-22 09:50:00 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/form-test.php
INFO - 2025-06-22 09:50:00 --> Final output sent to browser
DEBUG - 2025-06-22 09:50:00 --> Total execution time: 0.0106
INFO - 2025-06-22 09:50:01 --> Config Class Initialized
INFO - 2025-06-22 09:50:01 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:50:01 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:50:01 --> Utf8 Class Initialized
INFO - 2025-06-22 09:50:01 --> URI Class Initialized
INFO - 2025-06-22 09:50:01 --> Router Class Initialized
INFO - 2025-06-22 09:50:01 --> Output Class Initialized
INFO - 2025-06-22 09:50:01 --> Security Class Initialized
DEBUG - 2025-06-22 09:50:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:50:01 --> Input Class Initialized
INFO - 2025-06-22 09:50:01 --> Language Class Initialized
INFO - 2025-06-22 09:50:01 --> Loader Class Initialized
INFO - 2025-06-22 09:50:01 --> Helper loaded: url_helper
INFO - 2025-06-22 09:50:01 --> Helper loaded: file_helper
INFO - 2025-06-22 09:50:01 --> Database Driver Class Initialized
INFO - 2025-06-22 09:50:01 --> Email Class Initialized
DEBUG - 2025-06-22 09:50:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:50:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:50:01 --> Controller Class Initialized
INFO - 2025-06-22 09:50:01 --> Helper loaded: form_helper
INFO - 2025-06-22 09:50:01 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:50:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:50:01 --> Database Driver Class Initialized
INFO - 2025-06-22 09:50:01 --> Model "Crud" initialized
INFO - 2025-06-22 09:50:01 --> Final output sent to browser
DEBUG - 2025-06-22 09:50:01 --> Total execution time: 0.0272
INFO - 2025-06-22 09:50:06 --> Config Class Initialized
INFO - 2025-06-22 09:50:06 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:50:06 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:50:06 --> Utf8 Class Initialized
INFO - 2025-06-22 09:50:06 --> URI Class Initialized
INFO - 2025-06-22 09:50:06 --> Router Class Initialized
INFO - 2025-06-22 09:50:06 --> Output Class Initialized
INFO - 2025-06-22 09:50:06 --> Security Class Initialized
DEBUG - 2025-06-22 09:50:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:50:06 --> Input Class Initialized
INFO - 2025-06-22 09:50:06 --> Language Class Initialized
INFO - 2025-06-22 09:50:06 --> Loader Class Initialized
INFO - 2025-06-22 09:50:06 --> Helper loaded: url_helper
INFO - 2025-06-22 09:50:06 --> Helper loaded: file_helper
INFO - 2025-06-22 09:50:06 --> Database Driver Class Initialized
INFO - 2025-06-22 09:50:06 --> Email Class Initialized
DEBUG - 2025-06-22 09:50:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:50:06 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:50:06 --> Controller Class Initialized
INFO - 2025-06-22 09:50:06 --> Model "FormTestModel" initialized
INFO - 2025-06-22 09:50:06 --> Helper loaded: form_helper
INFO - 2025-06-22 09:50:06 --> Form Validation Class Initialized
INFO - 2025-06-22 09:50:06 --> Database Driver Class Initialized
INFO - 2025-06-22 09:50:06 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:50:06 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:50:06 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:50:06 --> File loaded: /var/www/html/hris_lnd/application/views/template/header_mobile_lnd.php
INFO - 2025-06-22 09:50:06 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/form-test.php
INFO - 2025-06-22 09:50:06 --> Final output sent to browser
DEBUG - 2025-06-22 09:50:06 --> Total execution time: 0.0132
INFO - 2025-06-22 09:50:06 --> Config Class Initialized
INFO - 2025-06-22 09:50:06 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:50:06 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:50:06 --> Utf8 Class Initialized
INFO - 2025-06-22 09:50:06 --> URI Class Initialized
INFO - 2025-06-22 09:50:06 --> Router Class Initialized
INFO - 2025-06-22 09:50:06 --> Output Class Initialized
INFO - 2025-06-22 09:50:06 --> Security Class Initialized
DEBUG - 2025-06-22 09:50:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:50:06 --> Input Class Initialized
INFO - 2025-06-22 09:50:06 --> Language Class Initialized
INFO - 2025-06-22 09:50:06 --> Loader Class Initialized
INFO - 2025-06-22 09:50:06 --> Helper loaded: url_helper
INFO - 2025-06-22 09:50:06 --> Helper loaded: file_helper
INFO - 2025-06-22 09:50:06 --> Database Driver Class Initialized
INFO - 2025-06-22 09:50:06 --> Email Class Initialized
DEBUG - 2025-06-22 09:50:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:50:06 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:50:06 --> Controller Class Initialized
INFO - 2025-06-22 09:50:06 --> Helper loaded: form_helper
INFO - 2025-06-22 09:50:06 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:50:06 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:50:06 --> Database Driver Class Initialized
INFO - 2025-06-22 09:50:06 --> Model "Crud" initialized
INFO - 2025-06-22 09:50:06 --> Final output sent to browser
DEBUG - 2025-06-22 09:50:06 --> Total execution time: 0.0322
INFO - 2025-06-22 09:50:20 --> Config Class Initialized
INFO - 2025-06-22 09:50:20 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:50:20 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:50:20 --> Utf8 Class Initialized
INFO - 2025-06-22 09:50:20 --> URI Class Initialized
INFO - 2025-06-22 09:50:20 --> Router Class Initialized
INFO - 2025-06-22 09:50:20 --> Output Class Initialized
INFO - 2025-06-22 09:50:20 --> Security Class Initialized
DEBUG - 2025-06-22 09:50:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:50:20 --> Input Class Initialized
INFO - 2025-06-22 09:50:20 --> Language Class Initialized
INFO - 2025-06-22 09:50:20 --> Loader Class Initialized
INFO - 2025-06-22 09:50:20 --> Helper loaded: url_helper
INFO - 2025-06-22 09:50:20 --> Helper loaded: file_helper
INFO - 2025-06-22 09:50:20 --> Database Driver Class Initialized
INFO - 2025-06-22 09:50:20 --> Email Class Initialized
DEBUG - 2025-06-22 09:50:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:50:20 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:50:20 --> Controller Class Initialized
INFO - 2025-06-22 09:50:20 --> Model "FormTestModel" initialized
INFO - 2025-06-22 09:50:20 --> Helper loaded: form_helper
INFO - 2025-06-22 09:50:20 --> Form Validation Class Initialized
INFO - 2025-06-22 09:50:20 --> Database Driver Class Initialized
INFO - 2025-06-22 09:50:20 --> Model "Crud" initialized
DEBUG - 2025-06-22 09:50:20 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-22 09:50:20 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:50:20 --> File loaded: /var/www/html/hris_lnd/application/views/template/header_mobile_lnd.php
INFO - 2025-06-22 09:50:20 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/form-test.php
INFO - 2025-06-22 09:50:20 --> Final output sent to browser
DEBUG - 2025-06-22 09:50:20 --> Total execution time: 0.0107
INFO - 2025-06-22 09:50:20 --> Config Class Initialized
INFO - 2025-06-22 09:50:20 --> Hooks Class Initialized
DEBUG - 2025-06-22 09:50:20 --> UTF-8 Support Enabled
INFO - 2025-06-22 09:50:20 --> Utf8 Class Initialized
INFO - 2025-06-22 09:50:20 --> URI Class Initialized
INFO - 2025-06-22 09:50:20 --> Router Class Initialized
INFO - 2025-06-22 09:50:20 --> Output Class Initialized
INFO - 2025-06-22 09:50:20 --> Security Class Initialized
DEBUG - 2025-06-22 09:50:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-22 09:50:20 --> Input Class Initialized
INFO - 2025-06-22 09:50:20 --> Language Class Initialized
INFO - 2025-06-22 09:50:20 --> Loader Class Initialized
INFO - 2025-06-22 09:50:20 --> Helper loaded: url_helper
INFO - 2025-06-22 09:50:20 --> Helper loaded: file_helper
INFO - 2025-06-22 09:50:20 --> Database Driver Class Initialized
INFO - 2025-06-22 09:50:20 --> Email Class Initialized
DEBUG - 2025-06-22 09:50:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-22 09:50:20 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-22 09:50:20 --> Controller Class Initialized
INFO - 2025-06-22 09:50:20 --> Helper loaded: form_helper
INFO - 2025-06-22 09:50:20 --> Form Validation Class Initialized
DEBUG - 2025-06-22 09:50:20 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-22 09:50:20 --> Database Driver Class Initialized
INFO - 2025-06-22 09:50:20 --> Model "Crud" initialized
INFO - 2025-06-22 09:50:20 --> Final output sent to browser
DEBUG - 2025-06-22 09:50:20 --> Total execution time: 0.0480
