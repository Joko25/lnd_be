<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2025-06-26 09:51:44 --> Config Class Initialized
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2025-06-26 09:51:44 --> Config Class Initialized
INFO - 2025-06-26 09:51:44 --> Hooks Class Initialized
INFO - 2025-06-26 09:51:44 --> Hooks Class Initialized
DEBUG - 2025-06-26 09:51:44 --> UTF-8 Support Enabled
DEBUG - 2025-06-26 09:51:44 --> UTF-8 Support Enabled
INFO - 2025-06-26 09:51:44 --> Utf8 Class Initialized
INFO - 2025-06-26 09:51:44 --> Utf8 Class Initialized
INFO - 2025-06-26 09:51:44 --> URI Class Initialized
INFO - 2025-06-26 09:51:44 --> URI Class Initialized
INFO - 2025-06-26 09:51:44 --> Router Class Initialized
INFO - 2025-06-26 09:51:44 --> Router Class Initialized
INFO - 2025-06-26 09:51:44 --> Output Class Initialized
INFO - 2025-06-26 09:51:44 --> Output Class Initialized
INFO - 2025-06-26 09:51:44 --> Security Class Initialized
INFO - 2025-06-26 09:51:44 --> Security Class Initialized
DEBUG - 2025-06-26 09:51:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 09:51:44 --> Input Class Initialized
DEBUG - 2025-06-26 09:51:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 09:51:44 --> Input Class Initialized
INFO - 2025-06-26 09:51:44 --> Language Class Initialized
INFO - 2025-06-26 09:51:44 --> Language Class Initialized
INFO - 2025-06-26 09:51:44 --> Loader Class Initialized
INFO - 2025-06-26 09:51:44 --> Loader Class Initialized
INFO - 2025-06-26 09:51:44 --> Helper loaded: url_helper
INFO - 2025-06-26 09:51:44 --> Helper loaded: url_helper
INFO - 2025-06-26 09:51:44 --> Helper loaded: file_helper
INFO - 2025-06-26 09:51:44 --> Helper loaded: file_helper
INFO - 2025-06-26 09:51:44 --> Database Driver Class Initialized
INFO - 2025-06-26 09:51:44 --> Database Driver Class Initialized
INFO - 2025-06-26 09:51:44 --> Email Class Initialized
INFO - 2025-06-26 09:51:44 --> Email Class Initialized
DEBUG - 2025-06-26 09:51:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-26 09:51:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 09:51:44 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 09:51:44 --> Controller Class Initialized
INFO - 2025-06-26 09:51:44 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 09:51:44 --> Controller Class Initialized
INFO - 2025-06-26 09:51:44 --> Helper loaded: form_helper
INFO - 2025-06-26 09:51:44 --> Helper loaded: form_helper
INFO - 2025-06-26 09:51:44 --> Form Validation Class Initialized
DEBUG - 2025-06-26 09:51:44 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 09:51:44 --> Database Driver Class Initialized
INFO - 2025-06-26 09:51:44 --> Form Validation Class Initialized
DEBUG - 2025-06-26 09:51:44 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 09:51:44 --> Database Driver Class Initialized
INFO - 2025-06-26 09:51:44 --> Model "Crud" initialized
INFO - 2025-06-26 09:51:44 --> Model "Crud" initialized
ERROR - 2025-06-26 09:51:44 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
ERROR - 2025-06-26 09:51:44 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-26 09:51:44 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-26 09:51:44 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-26 09:51:53 --> Config Class Initialized
INFO - 2025-06-26 09:51:53 --> Hooks Class Initialized
INFO - 2025-06-26 09:51:53 --> Config Class Initialized
INFO - 2025-06-26 09:51:53 --> Hooks Class Initialized
DEBUG - 2025-06-26 09:51:53 --> UTF-8 Support Enabled
DEBUG - 2025-06-26 09:51:53 --> UTF-8 Support Enabled
INFO - 2025-06-26 09:51:53 --> Utf8 Class Initialized
INFO - 2025-06-26 09:51:53 --> Utf8 Class Initialized
INFO - 2025-06-26 09:51:53 --> URI Class Initialized
INFO - 2025-06-26 09:51:53 --> URI Class Initialized
INFO - 2025-06-26 09:51:53 --> Router Class Initialized
INFO - 2025-06-26 09:51:53 --> Output Class Initialized
INFO - 2025-06-26 09:51:53 --> Security Class Initialized
DEBUG - 2025-06-26 09:51:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 09:51:53 --> Input Class Initialized
INFO - 2025-06-26 09:51:53 --> Router Class Initialized
INFO - 2025-06-26 09:51:53 --> Language Class Initialized
INFO - 2025-06-26 09:51:53 --> Output Class Initialized
INFO - 2025-06-26 09:51:53 --> Security Class Initialized
DEBUG - 2025-06-26 09:51:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 09:51:53 --> Input Class Initialized
INFO - 2025-06-26 09:51:53 --> Language Class Initialized
INFO - 2025-06-26 09:51:53 --> Loader Class Initialized
INFO - 2025-06-26 09:51:53 --> Helper loaded: url_helper
INFO - 2025-06-26 09:51:53 --> Helper loaded: file_helper
INFO - 2025-06-26 09:51:53 --> Loader Class Initialized
INFO - 2025-06-26 09:51:53 --> Helper loaded: url_helper
INFO - 2025-06-26 09:51:53 --> Helper loaded: file_helper
INFO - 2025-06-26 09:51:53 --> Database Driver Class Initialized
INFO - 2025-06-26 09:51:53 --> Database Driver Class Initialized
INFO - 2025-06-26 09:51:53 --> Email Class Initialized
DEBUG - 2025-06-26 09:51:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 09:51:53 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 09:51:53 --> Controller Class Initialized
INFO - 2025-06-26 09:51:53 --> Helper loaded: form_helper
INFO - 2025-06-26 09:51:53 --> Form Validation Class Initialized
DEBUG - 2025-06-26 09:51:53 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 09:51:53 --> Database Driver Class Initialized
INFO - 2025-06-26 09:51:53 --> Model "Crud" initialized
INFO - 2025-06-26 09:51:53 --> Email Class Initialized
DEBUG - 2025-06-26 09:51:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2025-06-26 09:51:53 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-26 09:51:53 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-26 09:51:53 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 09:51:53 --> Controller Class Initialized
INFO - 2025-06-26 09:51:53 --> Helper loaded: form_helper
INFO - 2025-06-26 09:51:53 --> Form Validation Class Initialized
DEBUG - 2025-06-26 09:51:53 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 09:51:53 --> Database Driver Class Initialized
INFO - 2025-06-26 09:51:53 --> Model "Crud" initialized
ERROR - 2025-06-26 09:51:53 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-26 09:51:53 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-26 13:58:53 --> Config Class Initialized
INFO - 2025-06-26 13:58:53 --> Config Class Initialized
INFO - 2025-06-26 13:58:53 --> Hooks Class Initialized
INFO - 2025-06-26 13:58:53 --> Hooks Class Initialized
DEBUG - 2025-06-26 13:58:53 --> UTF-8 Support Enabled
DEBUG - 2025-06-26 13:58:53 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:58:53 --> Utf8 Class Initialized
INFO - 2025-06-26 13:58:53 --> Utf8 Class Initialized
INFO - 2025-06-26 13:58:53 --> URI Class Initialized
INFO - 2025-06-26 13:58:53 --> URI Class Initialized
INFO - 2025-06-26 13:58:53 --> Router Class Initialized
INFO - 2025-06-26 13:58:53 --> Router Class Initialized
INFO - 2025-06-26 13:58:53 --> Output Class Initialized
INFO - 2025-06-26 13:58:53 --> Output Class Initialized
INFO - 2025-06-26 13:58:53 --> Security Class Initialized
INFO - 2025-06-26 13:58:53 --> Security Class Initialized
DEBUG - 2025-06-26 13:58:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-26 13:58:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:58:53 --> Input Class Initialized
INFO - 2025-06-26 13:58:53 --> Input Class Initialized
INFO - 2025-06-26 13:58:53 --> Language Class Initialized
INFO - 2025-06-26 13:58:53 --> Language Class Initialized
INFO - 2025-06-26 13:58:53 --> Loader Class Initialized
INFO - 2025-06-26 13:58:53 --> Loader Class Initialized
INFO - 2025-06-26 13:58:53 --> Helper loaded: url_helper
INFO - 2025-06-26 13:58:53 --> Helper loaded: url_helper
INFO - 2025-06-26 13:58:53 --> Helper loaded: file_helper
INFO - 2025-06-26 13:58:53 --> Helper loaded: file_helper
INFO - 2025-06-26 13:58:53 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:53 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:53 --> Email Class Initialized
INFO - 2025-06-26 13:58:53 --> Email Class Initialized
DEBUG - 2025-06-26 13:58:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-26 13:58:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 13:58:53 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:58:53 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:58:53 --> Controller Class Initialized
INFO - 2025-06-26 13:58:53 --> Controller Class Initialized
INFO - 2025-06-26 13:58:53 --> Helper loaded: form_helper
INFO - 2025-06-26 13:58:53 --> Helper loaded: form_helper
INFO - 2025-06-26 13:58:53 --> Form Validation Class Initialized
INFO - 2025-06-26 13:58:53 --> Form Validation Class Initialized
DEBUG - 2025-06-26 13:58:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 13:58:53 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:58:53 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:53 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:53 --> Model "Crud" initialized
INFO - 2025-06-26 13:58:53 --> Model "Crud" initialized
ERROR - 2025-06-26 13:58:53 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
ERROR - 2025-06-26 13:58:53 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-26 13:58:53 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-26 13:58:53 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-26 13:58:54 --> Config Class Initialized
INFO - 2025-06-26 13:58:54 --> Hooks Class Initialized
DEBUG - 2025-06-26 13:58:54 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:58:54 --> Utf8 Class Initialized
INFO - 2025-06-26 13:58:54 --> URI Class Initialized
INFO - 2025-06-26 13:58:54 --> Router Class Initialized
INFO - 2025-06-26 13:58:54 --> Output Class Initialized
INFO - 2025-06-26 13:58:54 --> Security Class Initialized
DEBUG - 2025-06-26 13:58:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:58:54 --> Input Class Initialized
INFO - 2025-06-26 13:58:54 --> Language Class Initialized
INFO - 2025-06-26 13:58:54 --> Loader Class Initialized
INFO - 2025-06-26 13:58:54 --> Helper loaded: url_helper
INFO - 2025-06-26 13:58:54 --> Helper loaded: file_helper
INFO - 2025-06-26 13:58:54 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:54 --> Email Class Initialized
DEBUG - 2025-06-26 13:58:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 13:58:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:58:54 --> Controller Class Initialized
INFO - 2025-06-26 13:58:54 --> Helper loaded: form_helper
INFO - 2025-06-26 13:58:54 --> Form Validation Class Initialized
DEBUG - 2025-06-26 13:58:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:58:54 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:54 --> Model "Crud" initialized
INFO - 2025-06-26 13:58:54 --> Config Class Initialized
INFO - 2025-06-26 13:58:54 --> Hooks Class Initialized
DEBUG - 2025-06-26 13:58:54 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:58:54 --> Utf8 Class Initialized
INFO - 2025-06-26 13:58:54 --> URI Class Initialized
INFO - 2025-06-26 13:58:54 --> Router Class Initialized
INFO - 2025-06-26 13:58:54 --> Output Class Initialized
INFO - 2025-06-26 13:58:54 --> Security Class Initialized
DEBUG - 2025-06-26 13:58:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:58:54 --> Input Class Initialized
INFO - 2025-06-26 13:58:54 --> Language Class Initialized
INFO - 2025-06-26 13:58:54 --> Loader Class Initialized
INFO - 2025-06-26 13:58:54 --> Helper loaded: url_helper
INFO - 2025-06-26 13:58:54 --> Helper loaded: file_helper
INFO - 2025-06-26 13:58:54 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:54 --> Email Class Initialized
DEBUG - 2025-06-26 13:58:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 13:58:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:58:54 --> Controller Class Initialized
INFO - 2025-06-26 13:58:54 --> Helper loaded: form_helper
INFO - 2025-06-26 13:58:54 --> Form Validation Class Initialized
DEBUG - 2025-06-26 13:58:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:58:54 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:54 --> Model "Crud" initialized
DEBUG - 2025-06-26 13:58:54 --> Email class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:58:54 --> Model "Emails" initialized
ERROR - 2025-06-26 13:58:54 --> Unable to delete cache file for login
INFO - 2025-06-26 13:58:54 --> File loaded: /var/www/html/hris_lnd/application/views/login.php
INFO - 2025-06-26 13:58:54 --> Final output sent to browser
DEBUG - 2025-06-26 13:58:54 --> Total execution time: 0.0586
INFO - 2025-06-26 13:58:57 --> Config Class Initialized
INFO - 2025-06-26 13:58:57 --> Hooks Class Initialized
DEBUG - 2025-06-26 13:58:57 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:58:57 --> Utf8 Class Initialized
INFO - 2025-06-26 13:58:57 --> URI Class Initialized
INFO - 2025-06-26 13:58:57 --> Router Class Initialized
INFO - 2025-06-26 13:58:57 --> Output Class Initialized
INFO - 2025-06-26 13:58:57 --> Security Class Initialized
DEBUG - 2025-06-26 13:58:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:58:57 --> Input Class Initialized
INFO - 2025-06-26 13:58:57 --> Language Class Initialized
INFO - 2025-06-26 13:58:57 --> Loader Class Initialized
INFO - 2025-06-26 13:58:57 --> Helper loaded: url_helper
INFO - 2025-06-26 13:58:57 --> Helper loaded: file_helper
INFO - 2025-06-26 13:58:57 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:57 --> Email Class Initialized
DEBUG - 2025-06-26 13:58:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 13:58:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:58:57 --> Controller Class Initialized
INFO - 2025-06-26 13:58:57 --> Helper loaded: form_helper
INFO - 2025-06-26 13:58:57 --> Form Validation Class Initialized
DEBUG - 2025-06-26 13:58:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:58:57 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:57 --> Model "Crud" initialized
DEBUG - 2025-06-26 13:58:57 --> Email class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:58:57 --> Model "Emails" initialized
ERROR - 2025-06-26 13:58:57 --> Unable to delete cache file for login
INFO - 2025-06-26 13:58:57 --> Config Class Initialized
INFO - 2025-06-26 13:58:57 --> Hooks Class Initialized
DEBUG - 2025-06-26 13:58:57 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:58:57 --> Utf8 Class Initialized
INFO - 2025-06-26 13:58:57 --> URI Class Initialized
INFO - 2025-06-26 13:58:57 --> Router Class Initialized
INFO - 2025-06-26 13:58:57 --> Output Class Initialized
INFO - 2025-06-26 13:58:57 --> Security Class Initialized
DEBUG - 2025-06-26 13:58:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:58:57 --> Input Class Initialized
INFO - 2025-06-26 13:58:57 --> Language Class Initialized
INFO - 2025-06-26 13:58:57 --> Loader Class Initialized
INFO - 2025-06-26 13:58:57 --> Helper loaded: url_helper
INFO - 2025-06-26 13:58:57 --> Helper loaded: file_helper
INFO - 2025-06-26 13:58:57 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:57 --> Email Class Initialized
DEBUG - 2025-06-26 13:58:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 13:58:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:58:57 --> Controller Class Initialized
INFO - 2025-06-26 13:58:57 --> Helper loaded: form_helper
INFO - 2025-06-26 13:58:57 --> Form Validation Class Initialized
DEBUG - 2025-06-26 13:58:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:58:57 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:57 --> Model "Crud" initialized
INFO - 2025-06-26 13:58:57 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-26 13:58:57 --> File loaded: /var/www/html/hris_lnd/application/views/home.php
INFO - 2025-06-26 13:58:57 --> Final output sent to browser
DEBUG - 2025-06-26 13:58:57 --> Total execution time: 0.0374
INFO - 2025-06-26 13:58:57 --> Config Class Initialized
INFO - 2025-06-26 13:58:57 --> Hooks Class Initialized
DEBUG - 2025-06-26 13:58:57 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:58:57 --> Utf8 Class Initialized
INFO - 2025-06-26 13:58:57 --> URI Class Initialized
INFO - 2025-06-26 13:58:57 --> Router Class Initialized
INFO - 2025-06-26 13:58:57 --> Output Class Initialized
INFO - 2025-06-26 13:58:57 --> Security Class Initialized
DEBUG - 2025-06-26 13:58:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:58:57 --> Input Class Initialized
INFO - 2025-06-26 13:58:57 --> Language Class Initialized
INFO - 2025-06-26 13:58:57 --> Loader Class Initialized
INFO - 2025-06-26 13:58:57 --> Helper loaded: url_helper
INFO - 2025-06-26 13:58:57 --> Helper loaded: file_helper
INFO - 2025-06-26 13:58:57 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:57 --> Email Class Initialized
DEBUG - 2025-06-26 13:58:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 13:58:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:58:57 --> Controller Class Initialized
INFO - 2025-06-26 13:58:57 --> Helper loaded: form_helper
INFO - 2025-06-26 13:58:57 --> Form Validation Class Initialized
DEBUG - 2025-06-26 13:58:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:58:57 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:57 --> Model "Crud" initialized
INFO - 2025-06-26 13:58:57 --> Config Class Initialized
INFO - 2025-06-26 13:58:57 --> Hooks Class Initialized
DEBUG - 2025-06-26 13:58:57 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:58:57 --> Utf8 Class Initialized
INFO - 2025-06-26 13:58:57 --> URI Class Initialized
INFO - 2025-06-26 13:58:57 --> Router Class Initialized
INFO - 2025-06-26 13:58:57 --> Output Class Initialized
INFO - 2025-06-26 13:58:57 --> Security Class Initialized
DEBUG - 2025-06-26 13:58:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:58:57 --> Input Class Initialized
INFO - 2025-06-26 13:58:57 --> Language Class Initialized
INFO - 2025-06-26 13:58:57 --> Loader Class Initialized
INFO - 2025-06-26 13:58:57 --> Helper loaded: url_helper
INFO - 2025-06-26 13:58:57 --> Helper loaded: file_helper
INFO - 2025-06-26 13:58:57 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:57 --> Config Class Initialized
INFO - 2025-06-26 13:58:57 --> Hooks Class Initialized
INFO - 2025-06-26 13:58:57 --> Config Class Initialized
DEBUG - 2025-06-26 13:58:57 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:58:57 --> Utf8 Class Initialized
INFO - 2025-06-26 13:58:57 --> Hooks Class Initialized
DEBUG - 2025-06-26 13:58:57 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:58:57 --> Utf8 Class Initialized
INFO - 2025-06-26 13:58:57 --> URI Class Initialized
INFO - 2025-06-26 13:58:57 --> Router Class Initialized
INFO - 2025-06-26 13:58:57 --> URI Class Initialized
INFO - 2025-06-26 13:58:57 --> Output Class Initialized
INFO - 2025-06-26 13:58:57 --> Email Class Initialized
INFO - 2025-06-26 13:58:57 --> Security Class Initialized
DEBUG - 2025-06-26 13:58:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-26 13:58:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:58:57 --> Input Class Initialized
INFO - 2025-06-26 13:58:57 --> Router Class Initialized
INFO - 2025-06-26 13:58:57 --> Language Class Initialized
INFO - 2025-06-26 13:58:57 --> Output Class Initialized
INFO - 2025-06-26 13:58:57 --> Security Class Initialized
DEBUG - 2025-06-26 13:58:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:58:57 --> Input Class Initialized
INFO - 2025-06-26 13:58:57 --> Language Class Initialized
INFO - 2025-06-26 13:58:57 --> Loader Class Initialized
INFO - 2025-06-26 13:58:57 --> Helper loaded: url_helper
INFO - 2025-06-26 13:58:57 --> Helper loaded: file_helper
INFO - 2025-06-26 13:58:57 --> Loader Class Initialized
INFO - 2025-06-26 13:58:57 --> Helper loaded: url_helper
INFO - 2025-06-26 13:58:57 --> Helper loaded: file_helper
INFO - 2025-06-26 13:58:57 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:57 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:57 --> Email Class Initialized
INFO - 2025-06-26 13:58:57 --> Email Class Initialized
DEBUG - 2025-06-26 13:58:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-26 13:58:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 13:58:58 --> Config Class Initialized
INFO - 2025-06-26 13:58:58 --> Hooks Class Initialized
DEBUG - 2025-06-26 13:58:58 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:58:58 --> Utf8 Class Initialized
INFO - 2025-06-26 13:58:58 --> URI Class Initialized
INFO - 2025-06-26 13:58:58 --> Router Class Initialized
INFO - 2025-06-26 13:58:58 --> Output Class Initialized
INFO - 2025-06-26 13:58:58 --> Security Class Initialized
DEBUG - 2025-06-26 13:58:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:58:58 --> Input Class Initialized
INFO - 2025-06-26 13:58:58 --> Language Class Initialized
INFO - 2025-06-26 13:58:58 --> Loader Class Initialized
INFO - 2025-06-26 13:58:58 --> Helper loaded: url_helper
INFO - 2025-06-26 13:58:58 --> Helper loaded: file_helper
INFO - 2025-06-26 13:58:58 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:58 --> Email Class Initialized
DEBUG - 2025-06-26 13:58:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 13:58:58 --> Final output sent to browser
DEBUG - 2025-06-26 13:58:58 --> Total execution time: 0.2165
INFO - 2025-06-26 13:58:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:58:58 --> Controller Class Initialized
INFO - 2025-06-26 13:58:58 --> Helper loaded: form_helper
INFO - 2025-06-26 13:58:58 --> Form Validation Class Initialized
DEBUG - 2025-06-26 13:58:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:58:58 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:58 --> Model "Crud" initialized
INFO - 2025-06-26 13:58:58 --> Config Class Initialized
INFO - 2025-06-26 13:58:58 --> Hooks Class Initialized
DEBUG - 2025-06-26 13:58:58 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:58:58 --> Utf8 Class Initialized
INFO - 2025-06-26 13:58:58 --> URI Class Initialized
INFO - 2025-06-26 13:58:58 --> Router Class Initialized
INFO - 2025-06-26 13:58:58 --> Output Class Initialized
INFO - 2025-06-26 13:58:58 --> Security Class Initialized
DEBUG - 2025-06-26 13:58:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:58:58 --> Input Class Initialized
INFO - 2025-06-26 13:58:58 --> Language Class Initialized
INFO - 2025-06-26 13:58:58 --> Loader Class Initialized
INFO - 2025-06-26 13:58:58 --> Helper loaded: url_helper
INFO - 2025-06-26 13:58:58 --> Helper loaded: file_helper
INFO - 2025-06-26 13:58:58 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:58 --> Email Class Initialized
DEBUG - 2025-06-26 13:58:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 13:58:58 --> Final output sent to browser
DEBUG - 2025-06-26 13:58:58 --> Total execution time: 0.2391
INFO - 2025-06-26 13:58:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:58:58 --> Controller Class Initialized
INFO - 2025-06-26 13:58:58 --> Helper loaded: form_helper
INFO - 2025-06-26 13:58:58 --> Form Validation Class Initialized
DEBUG - 2025-06-26 13:58:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:58:58 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:58 --> Model "Crud" initialized
INFO - 2025-06-26 13:58:58 --> Final output sent to browser
DEBUG - 2025-06-26 13:58:58 --> Total execution time: 0.2753
INFO - 2025-06-26 13:58:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:58:58 --> Controller Class Initialized
INFO - 2025-06-26 13:58:58 --> Helper loaded: form_helper
INFO - 2025-06-26 13:58:58 --> Form Validation Class Initialized
DEBUG - 2025-06-26 13:58:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:58:58 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:58 --> Config Class Initialized
INFO - 2025-06-26 13:58:58 --> Hooks Class Initialized
DEBUG - 2025-06-26 13:58:58 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:58:58 --> Utf8 Class Initialized
INFO - 2025-06-26 13:58:58 --> URI Class Initialized
INFO - 2025-06-26 13:58:58 --> Router Class Initialized
INFO - 2025-06-26 13:58:58 --> Output Class Initialized
INFO - 2025-06-26 13:58:58 --> Security Class Initialized
DEBUG - 2025-06-26 13:58:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:58:58 --> Input Class Initialized
INFO - 2025-06-26 13:58:58 --> Language Class Initialized
INFO - 2025-06-26 13:58:58 --> Loader Class Initialized
INFO - 2025-06-26 13:58:58 --> Helper loaded: url_helper
INFO - 2025-06-26 13:58:58 --> Helper loaded: file_helper
INFO - 2025-06-26 13:58:58 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:58 --> Config Class Initialized
INFO - 2025-06-26 13:58:58 --> Hooks Class Initialized
DEBUG - 2025-06-26 13:58:58 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:58:58 --> Utf8 Class Initialized
INFO - 2025-06-26 13:58:58 --> URI Class Initialized
INFO - 2025-06-26 13:58:58 --> Email Class Initialized
INFO - 2025-06-26 13:58:58 --> Router Class Initialized
INFO - 2025-06-26 13:58:58 --> Output Class Initialized
DEBUG - 2025-06-26 13:58:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 13:58:58 --> Security Class Initialized
DEBUG - 2025-06-26 13:58:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:58:58 --> Input Class Initialized
INFO - 2025-06-26 13:58:58 --> Language Class Initialized
INFO - 2025-06-26 13:58:58 --> Loader Class Initialized
INFO - 2025-06-26 13:58:58 --> Helper loaded: url_helper
INFO - 2025-06-26 13:58:58 --> Helper loaded: file_helper
INFO - 2025-06-26 13:58:58 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:58 --> Model "Crud" initialized
INFO - 2025-06-26 13:58:58 --> Email Class Initialized
DEBUG - 2025-06-26 13:58:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 13:58:58 --> Config Class Initialized
INFO - 2025-06-26 13:58:58 --> Hooks Class Initialized
DEBUG - 2025-06-26 13:58:58 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:58:58 --> Utf8 Class Initialized
INFO - 2025-06-26 13:58:58 --> URI Class Initialized
INFO - 2025-06-26 13:58:58 --> Router Class Initialized
INFO - 2025-06-26 13:58:58 --> Output Class Initialized
INFO - 2025-06-26 13:58:58 --> Security Class Initialized
DEBUG - 2025-06-26 13:58:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:58:58 --> Input Class Initialized
INFO - 2025-06-26 13:58:58 --> Language Class Initialized
INFO - 2025-06-26 13:58:58 --> Loader Class Initialized
INFO - 2025-06-26 13:58:58 --> Helper loaded: url_helper
INFO - 2025-06-26 13:58:58 --> Helper loaded: file_helper
INFO - 2025-06-26 13:58:58 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:58 --> Email Class Initialized
DEBUG - 2025-06-26 13:58:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 13:58:58 --> Config Class Initialized
INFO - 2025-06-26 13:58:58 --> Hooks Class Initialized
DEBUG - 2025-06-26 13:58:58 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:58:58 --> Utf8 Class Initialized
INFO - 2025-06-26 13:58:58 --> URI Class Initialized
INFO - 2025-06-26 13:58:58 --> Router Class Initialized
INFO - 2025-06-26 13:58:58 --> Output Class Initialized
INFO - 2025-06-26 13:58:58 --> Security Class Initialized
DEBUG - 2025-06-26 13:58:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:58:58 --> Input Class Initialized
INFO - 2025-06-26 13:58:58 --> Language Class Initialized
INFO - 2025-06-26 13:58:58 --> Loader Class Initialized
INFO - 2025-06-26 13:58:58 --> Helper loaded: url_helper
INFO - 2025-06-26 13:58:58 --> Helper loaded: file_helper
INFO - 2025-06-26 13:58:58 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:58 --> Email Class Initialized
DEBUG - 2025-06-26 13:58:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 13:58:58 --> Config Class Initialized
INFO - 2025-06-26 13:58:58 --> Hooks Class Initialized
DEBUG - 2025-06-26 13:58:58 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:58:58 --> Utf8 Class Initialized
INFO - 2025-06-26 13:58:58 --> URI Class Initialized
INFO - 2025-06-26 13:58:58 --> Router Class Initialized
INFO - 2025-06-26 13:58:58 --> Output Class Initialized
INFO - 2025-06-26 13:58:58 --> Security Class Initialized
DEBUG - 2025-06-26 13:58:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:58:58 --> Input Class Initialized
INFO - 2025-06-26 13:58:58 --> Language Class Initialized
INFO - 2025-06-26 13:58:58 --> Loader Class Initialized
INFO - 2025-06-26 13:58:58 --> Helper loaded: url_helper
INFO - 2025-06-26 13:58:58 --> Helper loaded: file_helper
INFO - 2025-06-26 13:58:58 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:58 --> Email Class Initialized
DEBUG - 2025-06-26 13:58:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 13:58:58 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-26 13:58:58 --> File loaded: /var/www/html/hris_lnd/application/views/dashboard/dashboard.php
INFO - 2025-06-26 13:58:58 --> Final output sent to browser
DEBUG - 2025-06-26 13:58:58 --> Total execution time: 0.4828
INFO - 2025-06-26 13:58:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:58:58 --> Controller Class Initialized
INFO - 2025-06-26 13:58:58 --> Helper loaded: form_helper
INFO - 2025-06-26 13:58:58 --> Form Validation Class Initialized
DEBUG - 2025-06-26 13:58:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:58:58 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:58 --> Model "Crud" initialized
INFO - 2025-06-26 13:58:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:58:58 --> Controller Class Initialized
INFO - 2025-06-26 13:58:58 --> Helper loaded: form_helper
INFO - 2025-06-26 13:58:58 --> Form Validation Class Initialized
DEBUG - 2025-06-26 13:58:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:58:58 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:58 --> Model "Crud" initialized
INFO - 2025-06-26 13:58:58 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-26 13:58:58 --> File loaded: /var/www/html/hris_lnd/application/views/dashboard/dashboard.php
INFO - 2025-06-26 13:58:58 --> Final output sent to browser
DEBUG - 2025-06-26 13:58:58 --> Total execution time: 0.4926
INFO - 2025-06-26 13:58:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:58:58 --> Controller Class Initialized
INFO - 2025-06-26 13:58:58 --> Helper loaded: form_helper
INFO - 2025-06-26 13:58:58 --> Form Validation Class Initialized
DEBUG - 2025-06-26 13:58:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:58:58 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:58 --> Model "Crud" initialized
INFO - 2025-06-26 13:58:58 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-26 13:58:58 --> File loaded: /var/www/html/hris_lnd/application/views/dashboard/dashboard.php
INFO - 2025-06-26 13:58:58 --> Final output sent to browser
DEBUG - 2025-06-26 13:58:58 --> Total execution time: 0.5573
INFO - 2025-06-26 13:58:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:58:58 --> Controller Class Initialized
INFO - 2025-06-26 13:58:58 --> Helper loaded: form_helper
INFO - 2025-06-26 13:58:58 --> Form Validation Class Initialized
DEBUG - 2025-06-26 13:58:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:58:58 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:58 --> Model "Crud" initialized
INFO - 2025-06-26 13:58:58 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-26 13:58:58 --> File loaded: /var/www/html/hris_lnd/application/views/dashboard/dashboard.php
INFO - 2025-06-26 13:58:58 --> Final output sent to browser
DEBUG - 2025-06-26 13:58:58 --> Total execution time: 0.6344
INFO - 2025-06-26 13:58:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:58:58 --> Controller Class Initialized
INFO - 2025-06-26 13:58:58 --> Helper loaded: form_helper
INFO - 2025-06-26 13:58:58 --> Form Validation Class Initialized
DEBUG - 2025-06-26 13:58:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:58:58 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:58 --> Model "Crud" initialized
INFO - 2025-06-26 13:58:58 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-26 13:58:58 --> File loaded: /var/www/html/hris_lnd/application/views/dashboard/dashboard.php
INFO - 2025-06-26 13:58:58 --> Final output sent to browser
DEBUG - 2025-06-26 13:58:58 --> Total execution time: 0.6990
INFO - 2025-06-26 13:58:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:58:58 --> Controller Class Initialized
INFO - 2025-06-26 13:58:58 --> Helper loaded: form_helper
INFO - 2025-06-26 13:58:58 --> Form Validation Class Initialized
DEBUG - 2025-06-26 13:58:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:58:58 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:58 --> Model "Crud" initialized
INFO - 2025-06-26 13:58:59 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-26 13:58:59 --> File loaded: /var/www/html/hris_lnd/application/views/dashboard/dashboard.php
INFO - 2025-06-26 13:58:59 --> Final output sent to browser
DEBUG - 2025-06-26 13:58:59 --> Total execution time: 0.8323
INFO - 2025-06-26 13:58:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:58:59 --> Controller Class Initialized
INFO - 2025-06-26 13:58:59 --> Helper loaded: form_helper
INFO - 2025-06-26 13:58:59 --> Form Validation Class Initialized
DEBUG - 2025-06-26 13:58:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:58:59 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:59 --> Model "Crud" initialized
INFO - 2025-06-26 13:58:59 --> Config Class Initialized
INFO - 2025-06-26 13:58:59 --> Hooks Class Initialized
DEBUG - 2025-06-26 13:58:59 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:58:59 --> Utf8 Class Initialized
INFO - 2025-06-26 13:58:59 --> URI Class Initialized
INFO - 2025-06-26 13:58:59 --> Router Class Initialized
INFO - 2025-06-26 13:58:59 --> Output Class Initialized
INFO - 2025-06-26 13:58:59 --> Security Class Initialized
DEBUG - 2025-06-26 13:58:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:58:59 --> Input Class Initialized
INFO - 2025-06-26 13:58:59 --> Language Class Initialized
INFO - 2025-06-26 13:58:59 --> Loader Class Initialized
INFO - 2025-06-26 13:58:59 --> Helper loaded: url_helper
INFO - 2025-06-26 13:58:59 --> Helper loaded: file_helper
INFO - 2025-06-26 13:58:59 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:59 --> Email Class Initialized
DEBUG - 2025-06-26 13:58:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 13:58:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:58:59 --> Controller Class Initialized
INFO - 2025-06-26 13:58:59 --> Helper loaded: form_helper
INFO - 2025-06-26 13:58:59 --> Form Validation Class Initialized
DEBUG - 2025-06-26 13:58:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:58:59 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:59 --> Config Class Initialized
INFO - 2025-06-26 13:58:59 --> Hooks Class Initialized
DEBUG - 2025-06-26 13:58:59 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:58:59 --> Utf8 Class Initialized
INFO - 2025-06-26 13:58:59 --> Model "Crud" initialized
INFO - 2025-06-26 13:58:59 --> URI Class Initialized
INFO - 2025-06-26 13:58:59 --> Router Class Initialized
INFO - 2025-06-26 13:58:59 --> Output Class Initialized
INFO - 2025-06-26 13:58:59 --> Security Class Initialized
DEBUG - 2025-06-26 13:58:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:58:59 --> Input Class Initialized
INFO - 2025-06-26 13:58:59 --> Language Class Initialized
INFO - 2025-06-26 13:58:59 --> Loader Class Initialized
INFO - 2025-06-26 13:58:59 --> Helper loaded: url_helper
INFO - 2025-06-26 13:58:59 --> Helper loaded: file_helper
INFO - 2025-06-26 13:58:59 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:59 --> Email Class Initialized
DEBUG - 2025-06-26 13:58:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 13:58:59 --> Config Class Initialized
INFO - 2025-06-26 13:58:59 --> Hooks Class Initialized
DEBUG - 2025-06-26 13:58:59 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:58:59 --> Utf8 Class Initialized
INFO - 2025-06-26 13:58:59 --> URI Class Initialized
INFO - 2025-06-26 13:58:59 --> Router Class Initialized
INFO - 2025-06-26 13:58:59 --> Output Class Initialized
INFO - 2025-06-26 13:58:59 --> Security Class Initialized
DEBUG - 2025-06-26 13:58:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:58:59 --> Input Class Initialized
INFO - 2025-06-26 13:58:59 --> Language Class Initialized
INFO - 2025-06-26 13:58:59 --> Loader Class Initialized
INFO - 2025-06-26 13:58:59 --> Helper loaded: url_helper
INFO - 2025-06-26 13:58:59 --> Helper loaded: file_helper
INFO - 2025-06-26 13:58:59 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:59 --> Email Class Initialized
DEBUG - 2025-06-26 13:58:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 13:58:59 --> Config Class Initialized
INFO - 2025-06-26 13:58:59 --> Hooks Class Initialized
DEBUG - 2025-06-26 13:58:59 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:58:59 --> Utf8 Class Initialized
INFO - 2025-06-26 13:58:59 --> URI Class Initialized
INFO - 2025-06-26 13:58:59 --> Router Class Initialized
INFO - 2025-06-26 13:58:59 --> Output Class Initialized
INFO - 2025-06-26 13:58:59 --> Security Class Initialized
DEBUG - 2025-06-26 13:58:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:58:59 --> Input Class Initialized
INFO - 2025-06-26 13:58:59 --> Language Class Initialized
INFO - 2025-06-26 13:58:59 --> Loader Class Initialized
INFO - 2025-06-26 13:58:59 --> Helper loaded: url_helper
INFO - 2025-06-26 13:58:59 --> Helper loaded: file_helper
INFO - 2025-06-26 13:58:59 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:59 --> Final output sent to browser
DEBUG - 2025-06-26 13:58:59 --> Total execution time: 0.0469
INFO - 2025-06-26 13:58:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:58:59 --> Controller Class Initialized
INFO - 2025-06-26 13:58:59 --> Helper loaded: form_helper
INFO - 2025-06-26 13:58:59 --> Form Validation Class Initialized
DEBUG - 2025-06-26 13:58:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:58:59 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:59 --> Email Class Initialized
DEBUG - 2025-06-26 13:58:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 13:58:59 --> Model "Crud" initialized
INFO - 2025-06-26 13:58:59 --> Final output sent to browser
DEBUG - 2025-06-26 13:58:59 --> Total execution time: 0.0488
INFO - 2025-06-26 13:58:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:58:59 --> Controller Class Initialized
INFO - 2025-06-26 13:58:59 --> Helper loaded: form_helper
INFO - 2025-06-26 13:58:59 --> Form Validation Class Initialized
DEBUG - 2025-06-26 13:58:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:58:59 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:59 --> Model "Crud" initialized
INFO - 2025-06-26 13:58:59 --> Final output sent to browser
DEBUG - 2025-06-26 13:58:59 --> Total execution time: 0.0583
INFO - 2025-06-26 13:58:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:58:59 --> Controller Class Initialized
INFO - 2025-06-26 13:58:59 --> Helper loaded: form_helper
INFO - 2025-06-26 13:58:59 --> Form Validation Class Initialized
DEBUG - 2025-06-26 13:58:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:58:59 --> Database Driver Class Initialized
INFO - 2025-06-26 13:58:59 --> Model "Crud" initialized
INFO - 2025-06-26 13:58:59 --> Final output sent to browser
DEBUG - 2025-06-26 13:58:59 --> Total execution time: 0.0452
INFO - 2025-06-26 13:59:05 --> Config Class Initialized
INFO - 2025-06-26 13:59:05 --> Hooks Class Initialized
DEBUG - 2025-06-26 13:59:05 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:59:05 --> Utf8 Class Initialized
INFO - 2025-06-26 13:59:05 --> URI Class Initialized
INFO - 2025-06-26 13:59:05 --> Router Class Initialized
INFO - 2025-06-26 13:59:05 --> Output Class Initialized
INFO - 2025-06-26 13:59:05 --> Security Class Initialized
DEBUG - 2025-06-26 13:59:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:59:05 --> Input Class Initialized
INFO - 2025-06-26 13:59:05 --> Language Class Initialized
INFO - 2025-06-26 13:59:05 --> Loader Class Initialized
INFO - 2025-06-26 13:59:05 --> Helper loaded: url_helper
INFO - 2025-06-26 13:59:05 --> Helper loaded: file_helper
INFO - 2025-06-26 13:59:05 --> Database Driver Class Initialized
INFO - 2025-06-26 13:59:05 --> Email Class Initialized
DEBUG - 2025-06-26 13:59:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 13:59:05 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:59:05 --> Controller Class Initialized
INFO - 2025-06-26 13:59:05 --> Model "CompetenceModel" initialized
INFO - 2025-06-26 13:59:05 --> Helper loaded: form_helper
INFO - 2025-06-26 13:59:05 --> Form Validation Class Initialized
INFO - 2025-06-26 13:59:05 --> Database Driver Class Initialized
INFO - 2025-06-26 13:59:05 --> Model "Crud" initialized
DEBUG - 2025-06-26 13:59:05 --> Response class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 13:59:05 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 13:59:05 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:59:05 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-26 13:59:05 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/competence.php
INFO - 2025-06-26 13:59:05 --> Final output sent to browser
DEBUG - 2025-06-26 13:59:05 --> Total execution time: 0.0464
INFO - 2025-06-26 13:59:05 --> Config Class Initialized
INFO - 2025-06-26 13:59:05 --> Hooks Class Initialized
DEBUG - 2025-06-26 13:59:05 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:59:05 --> Utf8 Class Initialized
INFO - 2025-06-26 13:59:05 --> URI Class Initialized
INFO - 2025-06-26 13:59:05 --> Router Class Initialized
INFO - 2025-06-26 13:59:05 --> Output Class Initialized
INFO - 2025-06-26 13:59:05 --> Security Class Initialized
DEBUG - 2025-06-26 13:59:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:59:05 --> Input Class Initialized
INFO - 2025-06-26 13:59:05 --> Language Class Initialized
INFO - 2025-06-26 13:59:05 --> Loader Class Initialized
INFO - 2025-06-26 13:59:05 --> Helper loaded: url_helper
INFO - 2025-06-26 13:59:05 --> Helper loaded: file_helper
INFO - 2025-06-26 13:59:05 --> Database Driver Class Initialized
INFO - 2025-06-26 13:59:05 --> Email Class Initialized
DEBUG - 2025-06-26 13:59:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 13:59:05 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:59:05 --> Controller Class Initialized
INFO - 2025-06-26 13:59:05 --> Helper loaded: form_helper
INFO - 2025-06-26 13:59:05 --> Form Validation Class Initialized
DEBUG - 2025-06-26 13:59:05 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:59:05 --> Database Driver Class Initialized
INFO - 2025-06-26 13:59:05 --> Model "Crud" initialized
INFO - 2025-06-26 13:59:05 --> Final output sent to browser
DEBUG - 2025-06-26 13:59:05 --> Total execution time: 0.0327
INFO - 2025-06-26 13:59:06 --> Config Class Initialized
INFO - 2025-06-26 13:59:06 --> Hooks Class Initialized
DEBUG - 2025-06-26 13:59:06 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:59:06 --> Utf8 Class Initialized
INFO - 2025-06-26 13:59:06 --> URI Class Initialized
INFO - 2025-06-26 13:59:06 --> Router Class Initialized
INFO - 2025-06-26 13:59:06 --> Output Class Initialized
INFO - 2025-06-26 13:59:06 --> Security Class Initialized
DEBUG - 2025-06-26 13:59:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:59:06 --> Input Class Initialized
INFO - 2025-06-26 13:59:06 --> Language Class Initialized
INFO - 2025-06-26 13:59:06 --> Loader Class Initialized
INFO - 2025-06-26 13:59:06 --> Helper loaded: url_helper
INFO - 2025-06-26 13:59:06 --> Helper loaded: file_helper
INFO - 2025-06-26 13:59:06 --> Database Driver Class Initialized
INFO - 2025-06-26 13:59:06 --> Email Class Initialized
DEBUG - 2025-06-26 13:59:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 13:59:06 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:59:06 --> Controller Class Initialized
INFO - 2025-06-26 13:59:06 --> Model "CompetenceModel" initialized
INFO - 2025-06-26 13:59:06 --> Helper loaded: form_helper
INFO - 2025-06-26 13:59:06 --> Form Validation Class Initialized
INFO - 2025-06-26 13:59:06 --> Database Driver Class Initialized
INFO - 2025-06-26 13:59:06 --> Model "Crud" initialized
DEBUG - 2025-06-26 13:59:06 --> Response class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 13:59:06 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 13:59:06 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:59:06 --> Final output sent to browser
DEBUG - 2025-06-26 13:59:06 --> Total execution time: 0.0202
INFO - 2025-06-26 13:59:08 --> Config Class Initialized
INFO - 2025-06-26 13:59:08 --> Hooks Class Initialized
INFO - 2025-06-26 13:59:08 --> Config Class Initialized
DEBUG - 2025-06-26 13:59:08 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:59:08 --> Utf8 Class Initialized
INFO - 2025-06-26 13:59:08 --> Hooks Class Initialized
DEBUG - 2025-06-26 13:59:08 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:59:08 --> URI Class Initialized
INFO - 2025-06-26 13:59:08 --> Utf8 Class Initialized
INFO - 2025-06-26 13:59:08 --> Router Class Initialized
INFO - 2025-06-26 13:59:08 --> Output Class Initialized
INFO - 2025-06-26 13:59:08 --> Security Class Initialized
DEBUG - 2025-06-26 13:59:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:59:08 --> URI Class Initialized
INFO - 2025-06-26 13:59:08 --> Input Class Initialized
INFO - 2025-06-26 13:59:08 --> Language Class Initialized
INFO - 2025-06-26 13:59:08 --> Router Class Initialized
INFO - 2025-06-26 13:59:08 --> Loader Class Initialized
INFO - 2025-06-26 13:59:08 --> Output Class Initialized
INFO - 2025-06-26 13:59:08 --> Helper loaded: url_helper
INFO - 2025-06-26 13:59:08 --> Security Class Initialized
INFO - 2025-06-26 13:59:08 --> Helper loaded: file_helper
DEBUG - 2025-06-26 13:59:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:59:08 --> Input Class Initialized
INFO - 2025-06-26 13:59:08 --> Database Driver Class Initialized
INFO - 2025-06-26 13:59:08 --> Language Class Initialized
INFO - 2025-06-26 13:59:08 --> Loader Class Initialized
INFO - 2025-06-26 13:59:08 --> Helper loaded: url_helper
INFO - 2025-06-26 13:59:08 --> Helper loaded: file_helper
INFO - 2025-06-26 13:59:08 --> Database Driver Class Initialized
INFO - 2025-06-26 13:59:08 --> Email Class Initialized
INFO - 2025-06-26 13:59:08 --> Email Class Initialized
DEBUG - 2025-06-26 13:59:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 13:59:08 --> Session: Class initialized using 'files' driver.
DEBUG - 2025-06-26 13:59:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 13:59:08 --> Controller Class Initialized
INFO - 2025-06-26 13:59:08 --> Helper loaded: form_helper
INFO - 2025-06-26 13:59:08 --> Form Validation Class Initialized
DEBUG - 2025-06-26 13:59:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:59:08 --> Database Driver Class Initialized
INFO - 2025-06-26 13:59:08 --> Model "Crud" initialized
INFO - 2025-06-26 13:59:08 --> Final output sent to browser
DEBUG - 2025-06-26 13:59:08 --> Total execution time: 0.0219
INFO - 2025-06-26 13:59:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:59:08 --> Controller Class Initialized
INFO - 2025-06-26 13:59:08 --> Helper loaded: form_helper
INFO - 2025-06-26 13:59:08 --> Form Validation Class Initialized
DEBUG - 2025-06-26 13:59:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:59:08 --> Database Driver Class Initialized
INFO - 2025-06-26 13:59:08 --> Model "Crud" initialized
INFO - 2025-06-26 13:59:08 --> Final output sent to browser
DEBUG - 2025-06-26 13:59:08 --> Total execution time: 0.0401
INFO - 2025-06-26 13:59:17 --> Config Class Initialized
INFO - 2025-06-26 13:59:17 --> Hooks Class Initialized
DEBUG - 2025-06-26 13:59:17 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:59:17 --> Utf8 Class Initialized
INFO - 2025-06-26 13:59:17 --> URI Class Initialized
INFO - 2025-06-26 13:59:17 --> Router Class Initialized
INFO - 2025-06-26 13:59:17 --> Output Class Initialized
INFO - 2025-06-26 13:59:17 --> Security Class Initialized
DEBUG - 2025-06-26 13:59:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:59:17 --> Input Class Initialized
INFO - 2025-06-26 13:59:17 --> Language Class Initialized
INFO - 2025-06-26 13:59:17 --> Loader Class Initialized
INFO - 2025-06-26 13:59:17 --> Helper loaded: url_helper
INFO - 2025-06-26 13:59:17 --> Helper loaded: file_helper
INFO - 2025-06-26 13:59:17 --> Database Driver Class Initialized
INFO - 2025-06-26 13:59:17 --> Email Class Initialized
DEBUG - 2025-06-26 13:59:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 13:59:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:59:17 --> Controller Class Initialized
INFO - 2025-06-26 13:59:17 --> Model "CompetenceModel" initialized
INFO - 2025-06-26 13:59:17 --> Helper loaded: form_helper
INFO - 2025-06-26 13:59:17 --> Form Validation Class Initialized
INFO - 2025-06-26 13:59:17 --> Database Driver Class Initialized
INFO - 2025-06-26 13:59:17 --> Model "Crud" initialized
DEBUG - 2025-06-26 13:59:17 --> Response class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 13:59:17 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 13:59:17 --> Session class already loaded. Second attempt ignored.
ERROR - 2025-06-26 13:59:17 --> Severity: error --> Exception: Call to undefined method Competence::uuid() /var/www/html/hris_lnd/application/controllers/lnd/Competence.php 174
INFO - 2025-06-26 13:59:17 --> Config Class Initialized
INFO - 2025-06-26 13:59:17 --> Hooks Class Initialized
DEBUG - 2025-06-26 13:59:17 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:59:17 --> Utf8 Class Initialized
INFO - 2025-06-26 13:59:17 --> URI Class Initialized
INFO - 2025-06-26 13:59:17 --> Router Class Initialized
INFO - 2025-06-26 13:59:17 --> Output Class Initialized
INFO - 2025-06-26 13:59:17 --> Security Class Initialized
DEBUG - 2025-06-26 13:59:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:59:17 --> Input Class Initialized
INFO - 2025-06-26 13:59:17 --> Language Class Initialized
INFO - 2025-06-26 13:59:17 --> Loader Class Initialized
INFO - 2025-06-26 13:59:17 --> Config Class Initialized
INFO - 2025-06-26 13:59:17 --> Helper loaded: url_helper
INFO - 2025-06-26 13:59:17 --> Hooks Class Initialized
INFO - 2025-06-26 13:59:17 --> Helper loaded: file_helper
DEBUG - 2025-06-26 13:59:17 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:59:17 --> Utf8 Class Initialized
INFO - 2025-06-26 13:59:17 --> URI Class Initialized
INFO - 2025-06-26 13:59:17 --> Database Driver Class Initialized
INFO - 2025-06-26 13:59:17 --> Router Class Initialized
INFO - 2025-06-26 13:59:17 --> Output Class Initialized
INFO - 2025-06-26 13:59:17 --> Security Class Initialized
DEBUG - 2025-06-26 13:59:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:59:17 --> Input Class Initialized
INFO - 2025-06-26 13:59:17 --> Language Class Initialized
INFO - 2025-06-26 13:59:17 --> Loader Class Initialized
INFO - 2025-06-26 13:59:17 --> Helper loaded: url_helper
INFO - 2025-06-26 13:59:17 --> Helper loaded: file_helper
INFO - 2025-06-26 13:59:17 --> Database Driver Class Initialized
INFO - 2025-06-26 13:59:17 --> Email Class Initialized
DEBUG - 2025-06-26 13:59:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 13:59:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:59:17 --> Controller Class Initialized
INFO - 2025-06-26 13:59:17 --> Helper loaded: form_helper
INFO - 2025-06-26 13:59:17 --> Form Validation Class Initialized
DEBUG - 2025-06-26 13:59:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:59:17 --> Database Driver Class Initialized
INFO - 2025-06-26 13:59:17 --> Email Class Initialized
DEBUG - 2025-06-26 13:59:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 13:59:17 --> Model "Crud" initialized
INFO - 2025-06-26 13:59:18 --> Final output sent to browser
DEBUG - 2025-06-26 13:59:18 --> Total execution time: 0.0307
INFO - 2025-06-26 13:59:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:59:18 --> Controller Class Initialized
INFO - 2025-06-26 13:59:18 --> Helper loaded: form_helper
INFO - 2025-06-26 13:59:18 --> Form Validation Class Initialized
DEBUG - 2025-06-26 13:59:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:59:18 --> Database Driver Class Initialized
INFO - 2025-06-26 13:59:18 --> Model "Crud" initialized
INFO - 2025-06-26 13:59:18 --> Final output sent to browser
DEBUG - 2025-06-26 13:59:18 --> Total execution time: 0.0467
INFO - 2025-06-26 13:59:27 --> Config Class Initialized
INFO - 2025-06-26 13:59:27 --> Hooks Class Initialized
DEBUG - 2025-06-26 13:59:27 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:59:27 --> Utf8 Class Initialized
INFO - 2025-06-26 13:59:27 --> URI Class Initialized
INFO - 2025-06-26 13:59:27 --> Router Class Initialized
INFO - 2025-06-26 13:59:27 --> Output Class Initialized
INFO - 2025-06-26 13:59:27 --> Security Class Initialized
INFO - 2025-06-26 13:59:27 --> Config Class Initialized
DEBUG - 2025-06-26 13:59:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:59:27 --> Hooks Class Initialized
INFO - 2025-06-26 13:59:27 --> Input Class Initialized
DEBUG - 2025-06-26 13:59:27 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:59:27 --> Language Class Initialized
INFO - 2025-06-26 13:59:27 --> Utf8 Class Initialized
INFO - 2025-06-26 13:59:27 --> URI Class Initialized
INFO - 2025-06-26 13:59:27 --> Router Class Initialized
INFO - 2025-06-26 13:59:27 --> Loader Class Initialized
INFO - 2025-06-26 13:59:27 --> Output Class Initialized
INFO - 2025-06-26 13:59:27 --> Security Class Initialized
INFO - 2025-06-26 13:59:27 --> Helper loaded: url_helper
DEBUG - 2025-06-26 13:59:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:59:27 --> Helper loaded: file_helper
INFO - 2025-06-26 13:59:27 --> Input Class Initialized
INFO - 2025-06-26 13:59:27 --> Language Class Initialized
INFO - 2025-06-26 13:59:27 --> Loader Class Initialized
INFO - 2025-06-26 13:59:27 --> Helper loaded: url_helper
INFO - 2025-06-26 13:59:27 --> Helper loaded: file_helper
INFO - 2025-06-26 13:59:27 --> Database Driver Class Initialized
INFO - 2025-06-26 13:59:27 --> Database Driver Class Initialized
INFO - 2025-06-26 13:59:27 --> Email Class Initialized
DEBUG - 2025-06-26 13:59:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 13:59:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:59:27 --> Email Class Initialized
INFO - 2025-06-26 13:59:27 --> Controller Class Initialized
INFO - 2025-06-26 13:59:27 --> Helper loaded: form_helper
INFO - 2025-06-26 13:59:27 --> Form Validation Class Initialized
DEBUG - 2025-06-26 13:59:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 13:59:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 13:59:27 --> Database Driver Class Initialized
INFO - 2025-06-26 13:59:27 --> Model "Crud" initialized
INFO - 2025-06-26 13:59:27 --> Final output sent to browser
DEBUG - 2025-06-26 13:59:27 --> Total execution time: 0.0362
INFO - 2025-06-26 13:59:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:59:27 --> Controller Class Initialized
INFO - 2025-06-26 13:59:27 --> Helper loaded: form_helper
INFO - 2025-06-26 13:59:27 --> Form Validation Class Initialized
DEBUG - 2025-06-26 13:59:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:59:27 --> Database Driver Class Initialized
INFO - 2025-06-26 13:59:27 --> Model "Crud" initialized
INFO - 2025-06-26 13:59:27 --> Final output sent to browser
DEBUG - 2025-06-26 13:59:27 --> Total execution time: 0.0641
INFO - 2025-06-26 13:59:38 --> Config Class Initialized
INFO - 2025-06-26 13:59:38 --> Hooks Class Initialized
DEBUG - 2025-06-26 13:59:38 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:59:38 --> Utf8 Class Initialized
INFO - 2025-06-26 13:59:38 --> URI Class Initialized
INFO - 2025-06-26 13:59:38 --> Router Class Initialized
INFO - 2025-06-26 13:59:38 --> Output Class Initialized
INFO - 2025-06-26 13:59:38 --> Security Class Initialized
DEBUG - 2025-06-26 13:59:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:59:38 --> Input Class Initialized
INFO - 2025-06-26 13:59:38 --> Language Class Initialized
INFO - 2025-06-26 13:59:38 --> Loader Class Initialized
INFO - 2025-06-26 13:59:38 --> Helper loaded: url_helper
INFO - 2025-06-26 13:59:38 --> Helper loaded: file_helper
INFO - 2025-06-26 13:59:38 --> Database Driver Class Initialized
INFO - 2025-06-26 13:59:38 --> Config Class Initialized
INFO - 2025-06-26 13:59:38 --> Hooks Class Initialized
DEBUG - 2025-06-26 13:59:38 --> UTF-8 Support Enabled
INFO - 2025-06-26 13:59:38 --> Utf8 Class Initialized
INFO - 2025-06-26 13:59:38 --> URI Class Initialized
INFO - 2025-06-26 13:59:38 --> Router Class Initialized
INFO - 2025-06-26 13:59:38 --> Output Class Initialized
INFO - 2025-06-26 13:59:38 --> Security Class Initialized
DEBUG - 2025-06-26 13:59:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 13:59:38 --> Input Class Initialized
INFO - 2025-06-26 13:59:38 --> Language Class Initialized
INFO - 2025-06-26 13:59:38 --> Loader Class Initialized
INFO - 2025-06-26 13:59:38 --> Helper loaded: url_helper
INFO - 2025-06-26 13:59:38 --> Helper loaded: file_helper
INFO - 2025-06-26 13:59:38 --> Database Driver Class Initialized
INFO - 2025-06-26 13:59:38 --> Email Class Initialized
DEBUG - 2025-06-26 13:59:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 13:59:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:59:38 --> Controller Class Initialized
INFO - 2025-06-26 13:59:38 --> Helper loaded: form_helper
INFO - 2025-06-26 13:59:38 --> Form Validation Class Initialized
DEBUG - 2025-06-26 13:59:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:59:38 --> Database Driver Class Initialized
INFO - 2025-06-26 13:59:38 --> Email Class Initialized
DEBUG - 2025-06-26 13:59:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 13:59:38 --> Model "Crud" initialized
INFO - 2025-06-26 13:59:38 --> Final output sent to browser
DEBUG - 2025-06-26 13:59:38 --> Total execution time: 0.0572
INFO - 2025-06-26 13:59:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 13:59:38 --> Controller Class Initialized
INFO - 2025-06-26 13:59:38 --> Helper loaded: form_helper
INFO - 2025-06-26 13:59:38 --> Form Validation Class Initialized
DEBUG - 2025-06-26 13:59:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 13:59:38 --> Database Driver Class Initialized
INFO - 2025-06-26 13:59:38 --> Model "Crud" initialized
INFO - 2025-06-26 13:59:39 --> Final output sent to browser
DEBUG - 2025-06-26 13:59:39 --> Total execution time: 0.1142
INFO - 2025-06-26 14:02:32 --> Config Class Initialized
INFO - 2025-06-26 14:02:32 --> Config Class Initialized
INFO - 2025-06-26 14:02:32 --> Hooks Class Initialized
INFO - 2025-06-26 14:02:32 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:02:32 --> UTF-8 Support Enabled
DEBUG - 2025-06-26 14:02:32 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:02:32 --> Utf8 Class Initialized
INFO - 2025-06-26 14:02:32 --> Utf8 Class Initialized
INFO - 2025-06-26 14:02:32 --> URI Class Initialized
INFO - 2025-06-26 14:02:32 --> URI Class Initialized
INFO - 2025-06-26 14:02:32 --> Router Class Initialized
INFO - 2025-06-26 14:02:32 --> Router Class Initialized
INFO - 2025-06-26 14:02:32 --> Output Class Initialized
INFO - 2025-06-26 14:02:32 --> Output Class Initialized
INFO - 2025-06-26 14:02:32 --> Security Class Initialized
INFO - 2025-06-26 14:02:32 --> Security Class Initialized
DEBUG - 2025-06-26 14:02:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-26 14:02:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:02:32 --> Input Class Initialized
INFO - 2025-06-26 14:02:32 --> Input Class Initialized
INFO - 2025-06-26 14:02:32 --> Language Class Initialized
INFO - 2025-06-26 14:02:32 --> Language Class Initialized
INFO - 2025-06-26 14:02:32 --> Loader Class Initialized
INFO - 2025-06-26 14:02:32 --> Loader Class Initialized
INFO - 2025-06-26 14:02:32 --> Helper loaded: url_helper
INFO - 2025-06-26 14:02:32 --> Helper loaded: url_helper
INFO - 2025-06-26 14:02:32 --> Helper loaded: file_helper
INFO - 2025-06-26 14:02:32 --> Helper loaded: file_helper
INFO - 2025-06-26 14:02:32 --> Database Driver Class Initialized
INFO - 2025-06-26 14:02:32 --> Database Driver Class Initialized
INFO - 2025-06-26 14:02:32 --> Email Class Initialized
INFO - 2025-06-26 14:02:32 --> Email Class Initialized
DEBUG - 2025-06-26 14:02:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-26 14:02:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:02:32 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:02:32 --> Controller Class Initialized
INFO - 2025-06-26 14:02:32 --> Helper loaded: form_helper
INFO - 2025-06-26 14:02:32 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:02:32 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:02:32 --> Database Driver Class Initialized
INFO - 2025-06-26 14:02:32 --> Model "Crud" initialized
INFO - 2025-06-26 14:02:32 --> Final output sent to browser
DEBUG - 2025-06-26 14:02:32 --> Total execution time: 0.0565
INFO - 2025-06-26 14:02:32 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:02:32 --> Controller Class Initialized
INFO - 2025-06-26 14:02:32 --> Helper loaded: form_helper
INFO - 2025-06-26 14:02:32 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:02:32 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:02:32 --> Database Driver Class Initialized
INFO - 2025-06-26 14:02:33 --> Model "Crud" initialized
INFO - 2025-06-26 14:02:33 --> Final output sent to browser
DEBUG - 2025-06-26 14:02:33 --> Total execution time: 0.2835
INFO - 2025-06-26 14:02:37 --> Config Class Initialized
INFO - 2025-06-26 14:02:37 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:02:37 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:02:37 --> Utf8 Class Initialized
INFO - 2025-06-26 14:02:37 --> URI Class Initialized
INFO - 2025-06-26 14:02:37 --> Router Class Initialized
INFO - 2025-06-26 14:02:37 --> Output Class Initialized
INFO - 2025-06-26 14:02:37 --> Security Class Initialized
DEBUG - 2025-06-26 14:02:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:02:37 --> Input Class Initialized
INFO - 2025-06-26 14:02:37 --> Language Class Initialized
INFO - 2025-06-26 14:02:37 --> Loader Class Initialized
INFO - 2025-06-26 14:02:37 --> Helper loaded: url_helper
INFO - 2025-06-26 14:02:37 --> Helper loaded: file_helper
INFO - 2025-06-26 14:02:37 --> Database Driver Class Initialized
INFO - 2025-06-26 14:02:37 --> Email Class Initialized
DEBUG - 2025-06-26 14:02:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:02:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:02:37 --> Controller Class Initialized
INFO - 2025-06-26 14:02:37 --> Model "CompetenceModel" initialized
INFO - 2025-06-26 14:02:37 --> Helper loaded: form_helper
INFO - 2025-06-26 14:02:37 --> Form Validation Class Initialized
INFO - 2025-06-26 14:02:37 --> Database Driver Class Initialized
INFO - 2025-06-26 14:02:37 --> Model "Crud" initialized
DEBUG - 2025-06-26 14:02:37 --> Response class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 14:02:37 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 14:02:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:02:37 --> Final output sent to browser
DEBUG - 2025-06-26 14:02:37 --> Total execution time: 0.0472
INFO - 2025-06-26 14:02:37 --> Config Class Initialized
INFO - 2025-06-26 14:02:37 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:02:37 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:02:37 --> Utf8 Class Initialized
INFO - 2025-06-26 14:02:37 --> URI Class Initialized
INFO - 2025-06-26 14:02:37 --> Router Class Initialized
INFO - 2025-06-26 14:02:37 --> Output Class Initialized
INFO - 2025-06-26 14:02:37 --> Security Class Initialized
DEBUG - 2025-06-26 14:02:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:02:37 --> Input Class Initialized
INFO - 2025-06-26 14:02:37 --> Language Class Initialized
INFO - 2025-06-26 14:02:37 --> Loader Class Initialized
INFO - 2025-06-26 14:02:37 --> Helper loaded: url_helper
INFO - 2025-06-26 14:02:37 --> Helper loaded: file_helper
INFO - 2025-06-26 14:02:37 --> Database Driver Class Initialized
INFO - 2025-06-26 14:02:37 --> Email Class Initialized
DEBUG - 2025-06-26 14:02:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:02:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:02:37 --> Controller Class Initialized
INFO - 2025-06-26 14:02:37 --> Model "CompetenceModel" initialized
INFO - 2025-06-26 14:02:37 --> Helper loaded: form_helper
INFO - 2025-06-26 14:02:37 --> Form Validation Class Initialized
INFO - 2025-06-26 14:02:37 --> Database Driver Class Initialized
INFO - 2025-06-26 14:02:37 --> Model "Crud" initialized
DEBUG - 2025-06-26 14:02:37 --> Response class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 14:02:37 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 14:02:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:02:37 --> Final output sent to browser
DEBUG - 2025-06-26 14:02:37 --> Total execution time: 0.0184
INFO - 2025-06-26 14:02:37 --> Config Class Initialized
INFO - 2025-06-26 14:02:37 --> Hooks Class Initialized
INFO - 2025-06-26 14:02:37 --> Config Class Initialized
DEBUG - 2025-06-26 14:02:37 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:02:37 --> Utf8 Class Initialized
INFO - 2025-06-26 14:02:37 --> Hooks Class Initialized
INFO - 2025-06-26 14:02:37 --> URI Class Initialized
DEBUG - 2025-06-26 14:02:37 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:02:37 --> Router Class Initialized
INFO - 2025-06-26 14:02:37 --> Utf8 Class Initialized
INFO - 2025-06-26 14:02:37 --> Output Class Initialized
INFO - 2025-06-26 14:02:37 --> Security Class Initialized
INFO - 2025-06-26 14:02:37 --> URI Class Initialized
DEBUG - 2025-06-26 14:02:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:02:37 --> Router Class Initialized
INFO - 2025-06-26 14:02:37 --> Input Class Initialized
INFO - 2025-06-26 14:02:37 --> Output Class Initialized
INFO - 2025-06-26 14:02:37 --> Language Class Initialized
INFO - 2025-06-26 14:02:37 --> Security Class Initialized
DEBUG - 2025-06-26 14:02:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:02:37 --> Loader Class Initialized
INFO - 2025-06-26 14:02:37 --> Input Class Initialized
INFO - 2025-06-26 14:02:37 --> Helper loaded: url_helper
INFO - 2025-06-26 14:02:37 --> Language Class Initialized
INFO - 2025-06-26 14:02:37 --> Helper loaded: file_helper
INFO - 2025-06-26 14:02:37 --> Database Driver Class Initialized
INFO - 2025-06-26 14:02:37 --> Loader Class Initialized
INFO - 2025-06-26 14:02:37 --> Helper loaded: url_helper
INFO - 2025-06-26 14:02:37 --> Helper loaded: file_helper
INFO - 2025-06-26 14:02:37 --> Database Driver Class Initialized
INFO - 2025-06-26 14:02:37 --> Email Class Initialized
DEBUG - 2025-06-26 14:02:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:02:37 --> Email Class Initialized
DEBUG - 2025-06-26 14:02:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:02:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:02:37 --> Controller Class Initialized
INFO - 2025-06-26 14:02:37 --> Helper loaded: form_helper
INFO - 2025-06-26 14:02:37 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:02:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:02:37 --> Database Driver Class Initialized
INFO - 2025-06-26 14:02:37 --> Model "Crud" initialized
INFO - 2025-06-26 14:02:37 --> Final output sent to browser
DEBUG - 2025-06-26 14:02:37 --> Total execution time: 0.0214
INFO - 2025-06-26 14:02:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:02:37 --> Controller Class Initialized
INFO - 2025-06-26 14:02:37 --> Helper loaded: form_helper
INFO - 2025-06-26 14:02:37 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:02:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:02:37 --> Database Driver Class Initialized
INFO - 2025-06-26 14:02:37 --> Model "Crud" initialized
INFO - 2025-06-26 14:02:37 --> Final output sent to browser
DEBUG - 2025-06-26 14:02:37 --> Total execution time: 0.0388
INFO - 2025-06-26 14:02:48 --> Config Class Initialized
INFO - 2025-06-26 14:02:48 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:02:48 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:02:48 --> Utf8 Class Initialized
INFO - 2025-06-26 14:02:48 --> URI Class Initialized
INFO - 2025-06-26 14:02:48 --> Router Class Initialized
INFO - 2025-06-26 14:02:48 --> Output Class Initialized
INFO - 2025-06-26 14:02:48 --> Security Class Initialized
DEBUG - 2025-06-26 14:02:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:02:48 --> Input Class Initialized
INFO - 2025-06-26 14:02:48 --> Language Class Initialized
INFO - 2025-06-26 14:02:48 --> Loader Class Initialized
INFO - 2025-06-26 14:02:48 --> Helper loaded: url_helper
INFO - 2025-06-26 14:02:48 --> Helper loaded: file_helper
INFO - 2025-06-26 14:02:48 --> Database Driver Class Initialized
INFO - 2025-06-26 14:02:48 --> Config Class Initialized
INFO - 2025-06-26 14:02:48 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:02:48 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:02:48 --> Utf8 Class Initialized
INFO - 2025-06-26 14:02:48 --> URI Class Initialized
INFO - 2025-06-26 14:02:48 --> Router Class Initialized
INFO - 2025-06-26 14:02:48 --> Output Class Initialized
INFO - 2025-06-26 14:02:48 --> Security Class Initialized
DEBUG - 2025-06-26 14:02:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:02:48 --> Input Class Initialized
INFO - 2025-06-26 14:02:48 --> Language Class Initialized
INFO - 2025-06-26 14:02:48 --> Loader Class Initialized
INFO - 2025-06-26 14:02:48 --> Helper loaded: url_helper
INFO - 2025-06-26 14:02:48 --> Helper loaded: file_helper
INFO - 2025-06-26 14:02:48 --> Database Driver Class Initialized
INFO - 2025-06-26 14:02:48 --> Email Class Initialized
DEBUG - 2025-06-26 14:02:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:02:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:02:48 --> Controller Class Initialized
INFO - 2025-06-26 14:02:48 --> Helper loaded: form_helper
INFO - 2025-06-26 14:02:48 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:02:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:02:48 --> Database Driver Class Initialized
INFO - 2025-06-26 14:02:48 --> Email Class Initialized
DEBUG - 2025-06-26 14:02:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:02:48 --> Model "Crud" initialized
INFO - 2025-06-26 14:02:48 --> Final output sent to browser
DEBUG - 2025-06-26 14:02:48 --> Total execution time: 0.0196
INFO - 2025-06-26 14:02:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:02:48 --> Controller Class Initialized
INFO - 2025-06-26 14:02:48 --> Helper loaded: form_helper
INFO - 2025-06-26 14:02:48 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:02:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:02:48 --> Database Driver Class Initialized
INFO - 2025-06-26 14:02:48 --> Model "Crud" initialized
INFO - 2025-06-26 14:02:48 --> Final output sent to browser
DEBUG - 2025-06-26 14:02:48 --> Total execution time: 0.0279
INFO - 2025-06-26 14:03:18 --> Config Class Initialized
INFO - 2025-06-26 14:03:18 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:03:18 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:03:18 --> Utf8 Class Initialized
INFO - 2025-06-26 14:03:18 --> URI Class Initialized
INFO - 2025-06-26 14:03:18 --> Router Class Initialized
INFO - 2025-06-26 14:03:18 --> Output Class Initialized
INFO - 2025-06-26 14:03:18 --> Security Class Initialized
DEBUG - 2025-06-26 14:03:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:03:18 --> Input Class Initialized
INFO - 2025-06-26 14:03:18 --> Language Class Initialized
INFO - 2025-06-26 14:03:18 --> Loader Class Initialized
INFO - 2025-06-26 14:03:18 --> Helper loaded: url_helper
INFO - 2025-06-26 14:03:18 --> Helper loaded: file_helper
INFO - 2025-06-26 14:03:18 --> Config Class Initialized
INFO - 2025-06-26 14:03:18 --> Hooks Class Initialized
INFO - 2025-06-26 14:03:18 --> Database Driver Class Initialized
DEBUG - 2025-06-26 14:03:18 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:03:18 --> Utf8 Class Initialized
INFO - 2025-06-26 14:03:18 --> URI Class Initialized
INFO - 2025-06-26 14:03:18 --> Router Class Initialized
INFO - 2025-06-26 14:03:18 --> Output Class Initialized
INFO - 2025-06-26 14:03:18 --> Security Class Initialized
DEBUG - 2025-06-26 14:03:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:03:18 --> Input Class Initialized
INFO - 2025-06-26 14:03:18 --> Language Class Initialized
INFO - 2025-06-26 14:03:18 --> Loader Class Initialized
INFO - 2025-06-26 14:03:18 --> Helper loaded: url_helper
INFO - 2025-06-26 14:03:18 --> Helper loaded: file_helper
INFO - 2025-06-26 14:03:18 --> Database Driver Class Initialized
INFO - 2025-06-26 14:03:18 --> Email Class Initialized
DEBUG - 2025-06-26 14:03:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:03:18 --> Session: Class initialized using 'files' driver.
ERROR - 2025-06-26 14:03:18 --> Non-existent class: Response
INFO - 2025-06-26 14:03:18 --> Email Class Initialized
DEBUG - 2025-06-26 14:03:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:03:18 --> Session: Class initialized using 'files' driver.
ERROR - 2025-06-26 14:03:18 --> Non-existent class: Response
INFO - 2025-06-26 14:03:20 --> Config Class Initialized
INFO - 2025-06-26 14:03:20 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:03:20 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:03:20 --> Utf8 Class Initialized
INFO - 2025-06-26 14:03:20 --> URI Class Initialized
INFO - 2025-06-26 14:03:20 --> Router Class Initialized
INFO - 2025-06-26 14:03:20 --> Output Class Initialized
INFO - 2025-06-26 14:03:20 --> Security Class Initialized
DEBUG - 2025-06-26 14:03:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:03:20 --> Input Class Initialized
INFO - 2025-06-26 14:03:20 --> Language Class Initialized
INFO - 2025-06-26 14:03:20 --> Loader Class Initialized
INFO - 2025-06-26 14:03:20 --> Helper loaded: url_helper
INFO - 2025-06-26 14:03:20 --> Helper loaded: file_helper
INFO - 2025-06-26 14:03:20 --> Database Driver Class Initialized
INFO - 2025-06-26 14:03:20 --> Email Class Initialized
DEBUG - 2025-06-26 14:03:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:03:20 --> Session: Class initialized using 'files' driver.
ERROR - 2025-06-26 14:03:20 --> Non-existent class: Response
INFO - 2025-06-26 14:03:28 --> Config Class Initialized
INFO - 2025-06-26 14:03:28 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:03:28 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:03:28 --> Utf8 Class Initialized
INFO - 2025-06-26 14:03:28 --> URI Class Initialized
INFO - 2025-06-26 14:03:28 --> Router Class Initialized
INFO - 2025-06-26 14:03:28 --> Output Class Initialized
INFO - 2025-06-26 14:03:28 --> Security Class Initialized
DEBUG - 2025-06-26 14:03:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:03:28 --> Input Class Initialized
INFO - 2025-06-26 14:03:28 --> Language Class Initialized
INFO - 2025-06-26 14:03:28 --> Config Class Initialized
INFO - 2025-06-26 14:03:28 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:03:28 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:03:28 --> Utf8 Class Initialized
INFO - 2025-06-26 14:03:28 --> URI Class Initialized
INFO - 2025-06-26 14:03:28 --> Router Class Initialized
INFO - 2025-06-26 14:03:28 --> Output Class Initialized
INFO - 2025-06-26 14:03:28 --> Security Class Initialized
DEBUG - 2025-06-26 14:03:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:03:28 --> Input Class Initialized
INFO - 2025-06-26 14:03:28 --> Language Class Initialized
INFO - 2025-06-26 14:03:28 --> Loader Class Initialized
INFO - 2025-06-26 14:03:28 --> Loader Class Initialized
INFO - 2025-06-26 14:03:28 --> Helper loaded: url_helper
INFO - 2025-06-26 14:03:28 --> Helper loaded: url_helper
INFO - 2025-06-26 14:03:28 --> Helper loaded: file_helper
INFO - 2025-06-26 14:03:28 --> Helper loaded: file_helper
INFO - 2025-06-26 14:03:28 --> Database Driver Class Initialized
INFO - 2025-06-26 14:03:28 --> Database Driver Class Initialized
INFO - 2025-06-26 14:03:28 --> Email Class Initialized
DEBUG - 2025-06-26 14:03:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:03:28 --> Session: Class initialized using 'files' driver.
ERROR - 2025-06-26 14:03:28 --> Non-existent class: Response
INFO - 2025-06-26 14:03:28 --> Email Class Initialized
DEBUG - 2025-06-26 14:03:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:03:28 --> Session: Class initialized using 'files' driver.
ERROR - 2025-06-26 14:03:28 --> Non-existent class: Response
INFO - 2025-06-26 14:03:37 --> Config Class Initialized
INFO - 2025-06-26 14:03:37 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:03:37 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:03:37 --> Utf8 Class Initialized
INFO - 2025-06-26 14:03:37 --> URI Class Initialized
INFO - 2025-06-26 14:03:37 --> Router Class Initialized
INFO - 2025-06-26 14:03:37 --> Output Class Initialized
INFO - 2025-06-26 14:03:37 --> Security Class Initialized
DEBUG - 2025-06-26 14:03:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:03:37 --> Input Class Initialized
INFO - 2025-06-26 14:03:37 --> Language Class Initialized
INFO - 2025-06-26 14:03:37 --> Loader Class Initialized
INFO - 2025-06-26 14:03:37 --> Helper loaded: url_helper
INFO - 2025-06-26 14:03:37 --> Helper loaded: file_helper
INFO - 2025-06-26 14:03:37 --> Database Driver Class Initialized
INFO - 2025-06-26 14:03:37 --> Email Class Initialized
DEBUG - 2025-06-26 14:03:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:03:37 --> Session: Class initialized using 'files' driver.
ERROR - 2025-06-26 14:03:37 --> Non-existent class: Response
INFO - 2025-06-26 14:03:38 --> Config Class Initialized
INFO - 2025-06-26 14:03:38 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:03:38 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:03:38 --> Utf8 Class Initialized
INFO - 2025-06-26 14:03:38 --> URI Class Initialized
INFO - 2025-06-26 14:03:38 --> Router Class Initialized
INFO - 2025-06-26 14:03:38 --> Output Class Initialized
INFO - 2025-06-26 14:03:38 --> Config Class Initialized
INFO - 2025-06-26 14:03:38 --> Security Class Initialized
INFO - 2025-06-26 14:03:38 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:03:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:03:38 --> Input Class Initialized
DEBUG - 2025-06-26 14:03:38 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:03:38 --> Language Class Initialized
INFO - 2025-06-26 14:03:38 --> Utf8 Class Initialized
INFO - 2025-06-26 14:03:38 --> URI Class Initialized
INFO - 2025-06-26 14:03:38 --> Loader Class Initialized
INFO - 2025-06-26 14:03:38 --> Router Class Initialized
INFO - 2025-06-26 14:03:38 --> Output Class Initialized
INFO - 2025-06-26 14:03:38 --> Helper loaded: url_helper
INFO - 2025-06-26 14:03:38 --> Security Class Initialized
INFO - 2025-06-26 14:03:38 --> Helper loaded: file_helper
DEBUG - 2025-06-26 14:03:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:03:38 --> Input Class Initialized
INFO - 2025-06-26 14:03:38 --> Database Driver Class Initialized
INFO - 2025-06-26 14:03:38 --> Language Class Initialized
INFO - 2025-06-26 14:03:38 --> Loader Class Initialized
INFO - 2025-06-26 14:03:38 --> Helper loaded: url_helper
INFO - 2025-06-26 14:03:38 --> Helper loaded: file_helper
INFO - 2025-06-26 14:03:38 --> Database Driver Class Initialized
INFO - 2025-06-26 14:03:38 --> Email Class Initialized
DEBUG - 2025-06-26 14:03:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:03:38 --> Session: Class initialized using 'files' driver.
ERROR - 2025-06-26 14:03:38 --> Non-existent class: Response
INFO - 2025-06-26 14:03:38 --> Email Class Initialized
DEBUG - 2025-06-26 14:03:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:03:38 --> Session: Class initialized using 'files' driver.
ERROR - 2025-06-26 14:03:38 --> Non-existent class: Response
INFO - 2025-06-26 14:03:40 --> Config Class Initialized
INFO - 2025-06-26 14:03:40 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:03:40 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:03:40 --> Utf8 Class Initialized
INFO - 2025-06-26 14:03:40 --> URI Class Initialized
INFO - 2025-06-26 14:03:40 --> Router Class Initialized
INFO - 2025-06-26 14:03:40 --> Output Class Initialized
INFO - 2025-06-26 14:03:40 --> Security Class Initialized
DEBUG - 2025-06-26 14:03:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:03:40 --> Input Class Initialized
INFO - 2025-06-26 14:03:40 --> Language Class Initialized
INFO - 2025-06-26 14:03:40 --> Loader Class Initialized
INFO - 2025-06-26 14:03:40 --> Helper loaded: url_helper
INFO - 2025-06-26 14:03:40 --> Helper loaded: file_helper
INFO - 2025-06-26 14:03:40 --> Database Driver Class Initialized
INFO - 2025-06-26 14:03:40 --> Email Class Initialized
DEBUG - 2025-06-26 14:03:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:03:40 --> Session: Class initialized using 'files' driver.
ERROR - 2025-06-26 14:03:40 --> Non-existent class: Response
INFO - 2025-06-26 14:03:48 --> Config Class Initialized
INFO - 2025-06-26 14:03:48 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:03:48 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:03:48 --> Utf8 Class Initialized
INFO - 2025-06-26 14:03:48 --> URI Class Initialized
INFO - 2025-06-26 14:03:48 --> Router Class Initialized
INFO - 2025-06-26 14:03:48 --> Output Class Initialized
INFO - 2025-06-26 14:03:48 --> Security Class Initialized
DEBUG - 2025-06-26 14:03:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:03:48 --> Input Class Initialized
INFO - 2025-06-26 14:03:48 --> Language Class Initialized
INFO - 2025-06-26 14:03:48 --> Loader Class Initialized
INFO - 2025-06-26 14:03:48 --> Helper loaded: url_helper
INFO - 2025-06-26 14:03:48 --> Helper loaded: file_helper
INFO - 2025-06-26 14:03:48 --> Database Driver Class Initialized
INFO - 2025-06-26 14:03:48 --> Config Class Initialized
INFO - 2025-06-26 14:03:48 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:03:48 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:03:48 --> Utf8 Class Initialized
INFO - 2025-06-26 14:03:48 --> URI Class Initialized
INFO - 2025-06-26 14:03:48 --> Router Class Initialized
INFO - 2025-06-26 14:03:48 --> Output Class Initialized
INFO - 2025-06-26 14:03:48 --> Security Class Initialized
DEBUG - 2025-06-26 14:03:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:03:48 --> Input Class Initialized
INFO - 2025-06-26 14:03:48 --> Language Class Initialized
INFO - 2025-06-26 14:03:48 --> Loader Class Initialized
INFO - 2025-06-26 14:03:48 --> Helper loaded: url_helper
INFO - 2025-06-26 14:03:48 --> Helper loaded: file_helper
INFO - 2025-06-26 14:03:48 --> Database Driver Class Initialized
INFO - 2025-06-26 14:03:48 --> Email Class Initialized
DEBUG - 2025-06-26 14:03:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:03:48 --> Session: Class initialized using 'files' driver.
ERROR - 2025-06-26 14:03:48 --> Non-existent class: Response
INFO - 2025-06-26 14:03:48 --> Email Class Initialized
DEBUG - 2025-06-26 14:03:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:03:48 --> Session: Class initialized using 'files' driver.
ERROR - 2025-06-26 14:03:48 --> Non-existent class: Response
INFO - 2025-06-26 14:06:02 --> Config Class Initialized
INFO - 2025-06-26 14:06:02 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:06:02 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:06:02 --> Utf8 Class Initialized
INFO - 2025-06-26 14:06:02 --> URI Class Initialized
INFO - 2025-06-26 14:06:02 --> Router Class Initialized
INFO - 2025-06-26 14:06:02 --> Output Class Initialized
INFO - 2025-06-26 14:06:02 --> Security Class Initialized
DEBUG - 2025-06-26 14:06:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:06:02 --> Input Class Initialized
INFO - 2025-06-26 14:06:02 --> Language Class Initialized
INFO - 2025-06-26 14:06:02 --> Loader Class Initialized
INFO - 2025-06-26 14:06:02 --> Helper loaded: url_helper
INFO - 2025-06-26 14:06:02 --> Helper loaded: file_helper
INFO - 2025-06-26 14:06:02 --> Database Driver Class Initialized
INFO - 2025-06-26 14:06:02 --> Config Class Initialized
INFO - 2025-06-26 14:06:02 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:06:02 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:06:02 --> Utf8 Class Initialized
INFO - 2025-06-26 14:06:02 --> URI Class Initialized
INFO - 2025-06-26 14:06:02 --> Router Class Initialized
INFO - 2025-06-26 14:06:02 --> Output Class Initialized
INFO - 2025-06-26 14:06:02 --> Security Class Initialized
DEBUG - 2025-06-26 14:06:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:06:02 --> Input Class Initialized
INFO - 2025-06-26 14:06:02 --> Language Class Initialized
INFO - 2025-06-26 14:06:02 --> Loader Class Initialized
INFO - 2025-06-26 14:06:02 --> Helper loaded: url_helper
INFO - 2025-06-26 14:06:02 --> Helper loaded: file_helper
INFO - 2025-06-26 14:06:02 --> Database Driver Class Initialized
INFO - 2025-06-26 14:06:02 --> Email Class Initialized
DEBUG - 2025-06-26 14:06:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:06:02 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:06:02 --> Email Class Initialized
DEBUG - 2025-06-26 14:06:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:06:02 --> Controller Class Initialized
INFO - 2025-06-26 14:06:02 --> Helper loaded: form_helper
INFO - 2025-06-26 14:06:02 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:06:02 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:06:02 --> Database Driver Class Initialized
INFO - 2025-06-26 14:06:02 --> Model "Crud" initialized
INFO - 2025-06-26 14:06:02 --> Final output sent to browser
DEBUG - 2025-06-26 14:06:02 --> Total execution time: 0.0658
INFO - 2025-06-26 14:06:02 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:06:02 --> Controller Class Initialized
INFO - 2025-06-26 14:06:02 --> Helper loaded: form_helper
INFO - 2025-06-26 14:06:02 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:06:02 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:06:02 --> Database Driver Class Initialized
INFO - 2025-06-26 14:06:02 --> Model "Crud" initialized
INFO - 2025-06-26 14:06:02 --> Final output sent to browser
DEBUG - 2025-06-26 14:06:02 --> Total execution time: 0.0723
INFO - 2025-06-26 14:06:08 --> Config Class Initialized
INFO - 2025-06-26 14:06:08 --> Config Class Initialized
INFO - 2025-06-26 14:06:08 --> Hooks Class Initialized
INFO - 2025-06-26 14:06:08 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:06:08 --> UTF-8 Support Enabled
DEBUG - 2025-06-26 14:06:08 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:06:08 --> Utf8 Class Initialized
INFO - 2025-06-26 14:06:08 --> Utf8 Class Initialized
INFO - 2025-06-26 14:06:08 --> URI Class Initialized
INFO - 2025-06-26 14:06:08 --> URI Class Initialized
INFO - 2025-06-26 14:06:08 --> Router Class Initialized
INFO - 2025-06-26 14:06:08 --> Router Class Initialized
INFO - 2025-06-26 14:06:08 --> Output Class Initialized
INFO - 2025-06-26 14:06:08 --> Output Class Initialized
INFO - 2025-06-26 14:06:08 --> Security Class Initialized
INFO - 2025-06-26 14:06:08 --> Security Class Initialized
DEBUG - 2025-06-26 14:06:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:06:08 --> Input Class Initialized
DEBUG - 2025-06-26 14:06:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:06:08 --> Language Class Initialized
INFO - 2025-06-26 14:06:08 --> Input Class Initialized
INFO - 2025-06-26 14:06:08 --> Language Class Initialized
INFO - 2025-06-26 14:06:08 --> Loader Class Initialized
INFO - 2025-06-26 14:06:08 --> Loader Class Initialized
INFO - 2025-06-26 14:06:08 --> Helper loaded: url_helper
INFO - 2025-06-26 14:06:08 --> Helper loaded: url_helper
INFO - 2025-06-26 14:06:08 --> Helper loaded: file_helper
INFO - 2025-06-26 14:06:08 --> Helper loaded: file_helper
INFO - 2025-06-26 14:06:08 --> Database Driver Class Initialized
INFO - 2025-06-26 14:06:08 --> Database Driver Class Initialized
INFO - 2025-06-26 14:06:08 --> Email Class Initialized
DEBUG - 2025-06-26 14:06:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:06:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:06:08 --> Controller Class Initialized
INFO - 2025-06-26 14:06:08 --> Helper loaded: form_helper
INFO - 2025-06-26 14:06:08 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:06:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:06:08 --> Database Driver Class Initialized
INFO - 2025-06-26 14:06:08 --> Email Class Initialized
DEBUG - 2025-06-26 14:06:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:06:08 --> Model "Crud" initialized
INFO - 2025-06-26 14:06:08 --> Final output sent to browser
DEBUG - 2025-06-26 14:06:08 --> Total execution time: 0.0206
INFO - 2025-06-26 14:06:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:06:08 --> Controller Class Initialized
INFO - 2025-06-26 14:06:08 --> Helper loaded: form_helper
INFO - 2025-06-26 14:06:08 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:06:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:06:08 --> Database Driver Class Initialized
INFO - 2025-06-26 14:06:08 --> Model "Crud" initialized
INFO - 2025-06-26 14:06:08 --> Final output sent to browser
DEBUG - 2025-06-26 14:06:08 --> Total execution time: 0.0351
INFO - 2025-06-26 14:06:59 --> Config Class Initialized
INFO - 2025-06-26 14:06:59 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:06:59 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:06:59 --> Utf8 Class Initialized
INFO - 2025-06-26 14:06:59 --> URI Class Initialized
INFO - 2025-06-26 14:06:59 --> Router Class Initialized
INFO - 2025-06-26 14:06:59 --> Output Class Initialized
INFO - 2025-06-26 14:06:59 --> Security Class Initialized
DEBUG - 2025-06-26 14:06:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:06:59 --> Input Class Initialized
INFO - 2025-06-26 14:06:59 --> Language Class Initialized
INFO - 2025-06-26 14:06:59 --> Loader Class Initialized
INFO - 2025-06-26 14:06:59 --> Helper loaded: url_helper
INFO - 2025-06-26 14:06:59 --> Helper loaded: file_helper
INFO - 2025-06-26 14:06:59 --> Database Driver Class Initialized
INFO - 2025-06-26 14:06:59 --> Config Class Initialized
INFO - 2025-06-26 14:06:59 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:06:59 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:06:59 --> Utf8 Class Initialized
INFO - 2025-06-26 14:06:59 --> URI Class Initialized
INFO - 2025-06-26 14:06:59 --> Router Class Initialized
INFO - 2025-06-26 14:06:59 --> Output Class Initialized
INFO - 2025-06-26 14:06:59 --> Email Class Initialized
INFO - 2025-06-26 14:06:59 --> Security Class Initialized
DEBUG - 2025-06-26 14:06:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:06:59 --> Input Class Initialized
INFO - 2025-06-26 14:06:59 --> Language Class Initialized
DEBUG - 2025-06-26 14:06:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:06:59 --> Loader Class Initialized
INFO - 2025-06-26 14:06:59 --> Helper loaded: url_helper
INFO - 2025-06-26 14:06:59 --> Helper loaded: file_helper
INFO - 2025-06-26 14:06:59 --> Database Driver Class Initialized
INFO - 2025-06-26 14:06:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:06:59 --> Controller Class Initialized
INFO - 2025-06-26 14:06:59 --> Helper loaded: form_helper
INFO - 2025-06-26 14:06:59 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:06:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:06:59 --> Database Driver Class Initialized
INFO - 2025-06-26 14:06:59 --> Email Class Initialized
DEBUG - 2025-06-26 14:06:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:06:59 --> Model "Crud" initialized
INFO - 2025-06-26 14:06:59 --> Final output sent to browser
DEBUG - 2025-06-26 14:06:59 --> Total execution time: 0.1830
INFO - 2025-06-26 14:06:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:06:59 --> Controller Class Initialized
INFO - 2025-06-26 14:06:59 --> Helper loaded: form_helper
INFO - 2025-06-26 14:06:59 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:06:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:06:59 --> Database Driver Class Initialized
INFO - 2025-06-26 14:06:59 --> Model "Crud" initialized
INFO - 2025-06-26 14:06:59 --> Final output sent to browser
DEBUG - 2025-06-26 14:06:59 --> Total execution time: 0.1823
INFO - 2025-06-26 14:07:01 --> Config Class Initialized
INFO - 2025-06-26 14:07:01 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:07:01 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:07:01 --> Utf8 Class Initialized
INFO - 2025-06-26 14:07:01 --> URI Class Initialized
INFO - 2025-06-26 14:07:01 --> Router Class Initialized
INFO - 2025-06-26 14:07:01 --> Output Class Initialized
INFO - 2025-06-26 14:07:01 --> Security Class Initialized
DEBUG - 2025-06-26 14:07:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:07:01 --> Input Class Initialized
INFO - 2025-06-26 14:07:01 --> Language Class Initialized
INFO - 2025-06-26 14:07:01 --> Loader Class Initialized
INFO - 2025-06-26 14:07:01 --> Helper loaded: url_helper
INFO - 2025-06-26 14:07:01 --> Helper loaded: file_helper
INFO - 2025-06-26 14:07:01 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:01 --> Email Class Initialized
DEBUG - 2025-06-26 14:07:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:07:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:07:01 --> Controller Class Initialized
INFO - 2025-06-26 14:07:01 --> Model "CompetenceModel" initialized
INFO - 2025-06-26 14:07:01 --> Helper loaded: form_helper
INFO - 2025-06-26 14:07:01 --> Form Validation Class Initialized
INFO - 2025-06-26 14:07:01 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:01 --> Model "Crud" initialized
DEBUG - 2025-06-26 14:07:01 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 14:07:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:07:01 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-26 14:07:01 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/competence.php
INFO - 2025-06-26 14:07:01 --> Final output sent to browser
DEBUG - 2025-06-26 14:07:01 --> Total execution time: 0.0227
INFO - 2025-06-26 14:07:01 --> Config Class Initialized
INFO - 2025-06-26 14:07:01 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:07:01 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:07:01 --> Utf8 Class Initialized
INFO - 2025-06-26 14:07:01 --> URI Class Initialized
INFO - 2025-06-26 14:07:01 --> Router Class Initialized
INFO - 2025-06-26 14:07:01 --> Output Class Initialized
INFO - 2025-06-26 14:07:01 --> Security Class Initialized
DEBUG - 2025-06-26 14:07:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:07:01 --> Input Class Initialized
INFO - 2025-06-26 14:07:01 --> Language Class Initialized
INFO - 2025-06-26 14:07:01 --> Loader Class Initialized
INFO - 2025-06-26 14:07:01 --> Helper loaded: url_helper
INFO - 2025-06-26 14:07:01 --> Helper loaded: file_helper
INFO - 2025-06-26 14:07:01 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:01 --> Email Class Initialized
DEBUG - 2025-06-26 14:07:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:07:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:07:01 --> Controller Class Initialized
INFO - 2025-06-26 14:07:01 --> Helper loaded: form_helper
INFO - 2025-06-26 14:07:01 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:07:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:07:01 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:01 --> Model "Crud" initialized
INFO - 2025-06-26 14:07:01 --> Final output sent to browser
DEBUG - 2025-06-26 14:07:01 --> Total execution time: 0.0264
INFO - 2025-06-26 14:07:02 --> Config Class Initialized
INFO - 2025-06-26 14:07:02 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:07:02 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:07:02 --> Utf8 Class Initialized
INFO - 2025-06-26 14:07:02 --> URI Class Initialized
INFO - 2025-06-26 14:07:02 --> Router Class Initialized
INFO - 2025-06-26 14:07:02 --> Output Class Initialized
INFO - 2025-06-26 14:07:02 --> Security Class Initialized
DEBUG - 2025-06-26 14:07:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:07:02 --> Input Class Initialized
INFO - 2025-06-26 14:07:02 --> Language Class Initialized
INFO - 2025-06-26 14:07:02 --> Loader Class Initialized
INFO - 2025-06-26 14:07:02 --> Helper loaded: url_helper
INFO - 2025-06-26 14:07:02 --> Helper loaded: file_helper
INFO - 2025-06-26 14:07:02 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:02 --> Email Class Initialized
DEBUG - 2025-06-26 14:07:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:07:02 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:07:02 --> Controller Class Initialized
INFO - 2025-06-26 14:07:02 --> Model "CompetenceModel" initialized
INFO - 2025-06-26 14:07:02 --> Helper loaded: form_helper
INFO - 2025-06-26 14:07:02 --> Form Validation Class Initialized
INFO - 2025-06-26 14:07:02 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:02 --> Model "Crud" initialized
DEBUG - 2025-06-26 14:07:02 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 14:07:02 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:07:02 --> Final output sent to browser
DEBUG - 2025-06-26 14:07:02 --> Total execution time: 0.0111
INFO - 2025-06-26 14:07:08 --> Config Class Initialized
INFO - 2025-06-26 14:07:08 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:07:08 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:07:08 --> Utf8 Class Initialized
INFO - 2025-06-26 14:07:08 --> URI Class Initialized
INFO - 2025-06-26 14:07:08 --> Router Class Initialized
INFO - 2025-06-26 14:07:08 --> Output Class Initialized
INFO - 2025-06-26 14:07:08 --> Security Class Initialized
DEBUG - 2025-06-26 14:07:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:07:08 --> Input Class Initialized
INFO - 2025-06-26 14:07:08 --> Language Class Initialized
INFO - 2025-06-26 14:07:08 --> Loader Class Initialized
INFO - 2025-06-26 14:07:08 --> Helper loaded: url_helper
INFO - 2025-06-26 14:07:08 --> Helper loaded: file_helper
INFO - 2025-06-26 14:07:08 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:08 --> Config Class Initialized
INFO - 2025-06-26 14:07:08 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:07:08 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:07:08 --> Utf8 Class Initialized
INFO - 2025-06-26 14:07:08 --> Email Class Initialized
INFO - 2025-06-26 14:07:08 --> URI Class Initialized
DEBUG - 2025-06-26 14:07:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:07:08 --> Router Class Initialized
INFO - 2025-06-26 14:07:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:07:08 --> Output Class Initialized
INFO - 2025-06-26 14:07:08 --> Controller Class Initialized
INFO - 2025-06-26 14:07:08 --> Security Class Initialized
INFO - 2025-06-26 14:07:08 --> Helper loaded: form_helper
DEBUG - 2025-06-26 14:07:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:07:08 --> Form Validation Class Initialized
INFO - 2025-06-26 14:07:08 --> Input Class Initialized
INFO - 2025-06-26 14:07:08 --> Language Class Initialized
DEBUG - 2025-06-26 14:07:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:07:08 --> Loader Class Initialized
INFO - 2025-06-26 14:07:08 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:08 --> Helper loaded: url_helper
INFO - 2025-06-26 14:07:08 --> Helper loaded: file_helper
INFO - 2025-06-26 14:07:08 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:08 --> Model "Crud" initialized
INFO - 2025-06-26 14:07:08 --> Email Class Initialized
DEBUG - 2025-06-26 14:07:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:07:08 --> Final output sent to browser
DEBUG - 2025-06-26 14:07:08 --> Total execution time: 0.0152
INFO - 2025-06-26 14:07:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:07:08 --> Controller Class Initialized
INFO - 2025-06-26 14:07:08 --> Helper loaded: form_helper
INFO - 2025-06-26 14:07:08 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:07:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:07:08 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:08 --> Model "Crud" initialized
INFO - 2025-06-26 14:07:08 --> Final output sent to browser
DEBUG - 2025-06-26 14:07:08 --> Total execution time: 0.0239
INFO - 2025-06-26 14:07:22 --> Config Class Initialized
INFO - 2025-06-26 14:07:22 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:07:22 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:07:22 --> Utf8 Class Initialized
INFO - 2025-06-26 14:07:22 --> URI Class Initialized
INFO - 2025-06-26 14:07:22 --> Router Class Initialized
INFO - 2025-06-26 14:07:22 --> Output Class Initialized
INFO - 2025-06-26 14:07:22 --> Security Class Initialized
DEBUG - 2025-06-26 14:07:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:07:22 --> Input Class Initialized
INFO - 2025-06-26 14:07:22 --> Language Class Initialized
INFO - 2025-06-26 14:07:22 --> Loader Class Initialized
INFO - 2025-06-26 14:07:22 --> Helper loaded: url_helper
INFO - 2025-06-26 14:07:22 --> Helper loaded: file_helper
INFO - 2025-06-26 14:07:22 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:22 --> Config Class Initialized
INFO - 2025-06-26 14:07:22 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:07:22 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:07:22 --> Utf8 Class Initialized
INFO - 2025-06-26 14:07:22 --> URI Class Initialized
INFO - 2025-06-26 14:07:22 --> Router Class Initialized
INFO - 2025-06-26 14:07:22 --> Output Class Initialized
INFO - 2025-06-26 14:07:22 --> Security Class Initialized
DEBUG - 2025-06-26 14:07:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:07:22 --> Input Class Initialized
INFO - 2025-06-26 14:07:22 --> Language Class Initialized
INFO - 2025-06-26 14:07:22 --> Loader Class Initialized
INFO - 2025-06-26 14:07:22 --> Helper loaded: url_helper
INFO - 2025-06-26 14:07:22 --> Helper loaded: file_helper
INFO - 2025-06-26 14:07:22 --> Email Class Initialized
INFO - 2025-06-26 14:07:22 --> Database Driver Class Initialized
DEBUG - 2025-06-26 14:07:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:07:22 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:07:22 --> Controller Class Initialized
INFO - 2025-06-26 14:07:22 --> Helper loaded: form_helper
INFO - 2025-06-26 14:07:22 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:07:22 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:07:22 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:22 --> Email Class Initialized
DEBUG - 2025-06-26 14:07:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:07:22 --> Model "Crud" initialized
INFO - 2025-06-26 14:07:22 --> Final output sent to browser
DEBUG - 2025-06-26 14:07:22 --> Total execution time: 0.0359
INFO - 2025-06-26 14:07:22 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:07:22 --> Controller Class Initialized
INFO - 2025-06-26 14:07:22 --> Helper loaded: form_helper
INFO - 2025-06-26 14:07:22 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:07:22 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:07:22 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:22 --> Model "Crud" initialized
INFO - 2025-06-26 14:07:22 --> Final output sent to browser
DEBUG - 2025-06-26 14:07:22 --> Total execution time: 0.0651
INFO - 2025-06-26 14:07:24 --> Config Class Initialized
INFO - 2025-06-26 14:07:24 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:07:24 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:07:24 --> Utf8 Class Initialized
INFO - 2025-06-26 14:07:24 --> URI Class Initialized
INFO - 2025-06-26 14:07:24 --> Router Class Initialized
INFO - 2025-06-26 14:07:24 --> Output Class Initialized
INFO - 2025-06-26 14:07:24 --> Security Class Initialized
DEBUG - 2025-06-26 14:07:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:07:24 --> Input Class Initialized
INFO - 2025-06-26 14:07:24 --> Language Class Initialized
INFO - 2025-06-26 14:07:24 --> Loader Class Initialized
INFO - 2025-06-26 14:07:24 --> Helper loaded: url_helper
INFO - 2025-06-26 14:07:24 --> Helper loaded: file_helper
INFO - 2025-06-26 14:07:24 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:24 --> Email Class Initialized
DEBUG - 2025-06-26 14:07:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:07:24 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:07:24 --> Controller Class Initialized
INFO - 2025-06-26 14:07:24 --> Model "CompetenceModel" initialized
INFO - 2025-06-26 14:07:24 --> Helper loaded: form_helper
INFO - 2025-06-26 14:07:24 --> Form Validation Class Initialized
INFO - 2025-06-26 14:07:24 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:24 --> Model "Crud" initialized
DEBUG - 2025-06-26 14:07:24 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 14:07:24 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:07:24 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-26 14:07:24 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/competence.php
INFO - 2025-06-26 14:07:24 --> Final output sent to browser
DEBUG - 2025-06-26 14:07:24 --> Total execution time: 0.0204
INFO - 2025-06-26 14:07:24 --> Config Class Initialized
INFO - 2025-06-26 14:07:24 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:07:24 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:07:24 --> Utf8 Class Initialized
INFO - 2025-06-26 14:07:24 --> URI Class Initialized
INFO - 2025-06-26 14:07:24 --> Router Class Initialized
INFO - 2025-06-26 14:07:24 --> Output Class Initialized
INFO - 2025-06-26 14:07:24 --> Security Class Initialized
DEBUG - 2025-06-26 14:07:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:07:24 --> Input Class Initialized
INFO - 2025-06-26 14:07:24 --> Language Class Initialized
INFO - 2025-06-26 14:07:24 --> Loader Class Initialized
INFO - 2025-06-26 14:07:24 --> Helper loaded: url_helper
INFO - 2025-06-26 14:07:24 --> Helper loaded: file_helper
INFO - 2025-06-26 14:07:24 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:24 --> Email Class Initialized
DEBUG - 2025-06-26 14:07:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:07:24 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:07:24 --> Controller Class Initialized
INFO - 2025-06-26 14:07:24 --> Helper loaded: form_helper
INFO - 2025-06-26 14:07:24 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:07:24 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:07:24 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:24 --> Model "Crud" initialized
INFO - 2025-06-26 14:07:24 --> Final output sent to browser
DEBUG - 2025-06-26 14:07:24 --> Total execution time: 0.0156
INFO - 2025-06-26 14:07:25 --> Config Class Initialized
INFO - 2025-06-26 14:07:25 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:07:25 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:07:25 --> Utf8 Class Initialized
INFO - 2025-06-26 14:07:25 --> URI Class Initialized
INFO - 2025-06-26 14:07:25 --> Router Class Initialized
INFO - 2025-06-26 14:07:25 --> Output Class Initialized
INFO - 2025-06-26 14:07:25 --> Security Class Initialized
DEBUG - 2025-06-26 14:07:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:07:25 --> Input Class Initialized
INFO - 2025-06-26 14:07:25 --> Language Class Initialized
INFO - 2025-06-26 14:07:25 --> Loader Class Initialized
INFO - 2025-06-26 14:07:25 --> Helper loaded: url_helper
INFO - 2025-06-26 14:07:25 --> Helper loaded: file_helper
INFO - 2025-06-26 14:07:25 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:25 --> Email Class Initialized
DEBUG - 2025-06-26 14:07:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:07:25 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:07:25 --> Controller Class Initialized
INFO - 2025-06-26 14:07:25 --> Model "CompetenceModel" initialized
INFO - 2025-06-26 14:07:25 --> Helper loaded: form_helper
INFO - 2025-06-26 14:07:25 --> Form Validation Class Initialized
INFO - 2025-06-26 14:07:25 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:25 --> Model "Crud" initialized
DEBUG - 2025-06-26 14:07:25 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 14:07:25 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:07:25 --> Final output sent to browser
DEBUG - 2025-06-26 14:07:25 --> Total execution time: 0.0096
INFO - 2025-06-26 14:07:28 --> Config Class Initialized
INFO - 2025-06-26 14:07:28 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:07:28 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:07:28 --> Config Class Initialized
INFO - 2025-06-26 14:07:28 --> Utf8 Class Initialized
INFO - 2025-06-26 14:07:28 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:07:28 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:07:28 --> URI Class Initialized
INFO - 2025-06-26 14:07:28 --> Utf8 Class Initialized
INFO - 2025-06-26 14:07:28 --> Router Class Initialized
INFO - 2025-06-26 14:07:28 --> URI Class Initialized
INFO - 2025-06-26 14:07:28 --> Output Class Initialized
INFO - 2025-06-26 14:07:28 --> Router Class Initialized
INFO - 2025-06-26 14:07:28 --> Security Class Initialized
INFO - 2025-06-26 14:07:28 --> Output Class Initialized
DEBUG - 2025-06-26 14:07:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:07:28 --> Input Class Initialized
INFO - 2025-06-26 14:07:28 --> Security Class Initialized
INFO - 2025-06-26 14:07:28 --> Language Class Initialized
DEBUG - 2025-06-26 14:07:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:07:28 --> Input Class Initialized
INFO - 2025-06-26 14:07:28 --> Language Class Initialized
INFO - 2025-06-26 14:07:28 --> Loader Class Initialized
INFO - 2025-06-26 14:07:28 --> Loader Class Initialized
INFO - 2025-06-26 14:07:28 --> Helper loaded: url_helper
INFO - 2025-06-26 14:07:28 --> Helper loaded: url_helper
INFO - 2025-06-26 14:07:28 --> Helper loaded: file_helper
INFO - 2025-06-26 14:07:28 --> Helper loaded: file_helper
INFO - 2025-06-26 14:07:28 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:28 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:28 --> Email Class Initialized
INFO - 2025-06-26 14:07:28 --> Email Class Initialized
DEBUG - 2025-06-26 14:07:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-26 14:07:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:07:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:07:28 --> Controller Class Initialized
INFO - 2025-06-26 14:07:28 --> Helper loaded: form_helper
INFO - 2025-06-26 14:07:28 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:07:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:07:28 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:28 --> Model "Crud" initialized
INFO - 2025-06-26 14:07:28 --> Final output sent to browser
DEBUG - 2025-06-26 14:07:28 --> Total execution time: 0.0197
INFO - 2025-06-26 14:07:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:07:28 --> Controller Class Initialized
INFO - 2025-06-26 14:07:28 --> Helper loaded: form_helper
INFO - 2025-06-26 14:07:28 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:07:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:07:28 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:28 --> Model "Crud" initialized
INFO - 2025-06-26 14:07:28 --> Final output sent to browser
DEBUG - 2025-06-26 14:07:28 --> Total execution time: 0.0334
INFO - 2025-06-26 14:07:38 --> Config Class Initialized
INFO - 2025-06-26 14:07:38 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:07:38 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:07:38 --> Utf8 Class Initialized
INFO - 2025-06-26 14:07:38 --> URI Class Initialized
INFO - 2025-06-26 14:07:38 --> Router Class Initialized
INFO - 2025-06-26 14:07:38 --> Output Class Initialized
INFO - 2025-06-26 14:07:38 --> Security Class Initialized
DEBUG - 2025-06-26 14:07:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:07:38 --> Input Class Initialized
INFO - 2025-06-26 14:07:38 --> Language Class Initialized
INFO - 2025-06-26 14:07:38 --> Loader Class Initialized
INFO - 2025-06-26 14:07:38 --> Helper loaded: url_helper
INFO - 2025-06-26 14:07:38 --> Helper loaded: file_helper
INFO - 2025-06-26 14:07:38 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:38 --> Config Class Initialized
INFO - 2025-06-26 14:07:38 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:07:38 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:07:38 --> Utf8 Class Initialized
INFO - 2025-06-26 14:07:38 --> URI Class Initialized
INFO - 2025-06-26 14:07:38 --> Router Class Initialized
INFO - 2025-06-26 14:07:38 --> Output Class Initialized
INFO - 2025-06-26 14:07:38 --> Security Class Initialized
DEBUG - 2025-06-26 14:07:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:07:38 --> Input Class Initialized
INFO - 2025-06-26 14:07:38 --> Language Class Initialized
INFO - 2025-06-26 14:07:38 --> Loader Class Initialized
INFO - 2025-06-26 14:07:38 --> Helper loaded: url_helper
INFO - 2025-06-26 14:07:38 --> Helper loaded: file_helper
INFO - 2025-06-26 14:07:38 --> Email Class Initialized
INFO - 2025-06-26 14:07:38 --> Database Driver Class Initialized
DEBUG - 2025-06-26 14:07:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:07:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:07:38 --> Controller Class Initialized
INFO - 2025-06-26 14:07:38 --> Helper loaded: form_helper
INFO - 2025-06-26 14:07:38 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:07:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:07:38 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:38 --> Email Class Initialized
DEBUG - 2025-06-26 14:07:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:07:38 --> Model "Crud" initialized
INFO - 2025-06-26 14:07:38 --> Final output sent to browser
DEBUG - 2025-06-26 14:07:38 --> Total execution time: 0.0196
INFO - 2025-06-26 14:07:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:07:38 --> Controller Class Initialized
INFO - 2025-06-26 14:07:38 --> Helper loaded: form_helper
INFO - 2025-06-26 14:07:38 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:07:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:07:38 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:38 --> Model "Crud" initialized
INFO - 2025-06-26 14:07:38 --> Final output sent to browser
DEBUG - 2025-06-26 14:07:38 --> Total execution time: 0.0299
INFO - 2025-06-26 14:07:47 --> Config Class Initialized
INFO - 2025-06-26 14:07:47 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:07:47 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:07:47 --> Utf8 Class Initialized
INFO - 2025-06-26 14:07:47 --> URI Class Initialized
INFO - 2025-06-26 14:07:47 --> Router Class Initialized
INFO - 2025-06-26 14:07:47 --> Output Class Initialized
INFO - 2025-06-26 14:07:47 --> Security Class Initialized
DEBUG - 2025-06-26 14:07:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:07:47 --> Input Class Initialized
INFO - 2025-06-26 14:07:47 --> Language Class Initialized
INFO - 2025-06-26 14:07:47 --> Loader Class Initialized
INFO - 2025-06-26 14:07:47 --> Helper loaded: url_helper
INFO - 2025-06-26 14:07:47 --> Helper loaded: file_helper
INFO - 2025-06-26 14:07:47 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:47 --> Config Class Initialized
INFO - 2025-06-26 14:07:47 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:07:47 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:07:47 --> Utf8 Class Initialized
INFO - 2025-06-26 14:07:47 --> URI Class Initialized
INFO - 2025-06-26 14:07:47 --> Router Class Initialized
INFO - 2025-06-26 14:07:47 --> Output Class Initialized
INFO - 2025-06-26 14:07:47 --> Security Class Initialized
DEBUG - 2025-06-26 14:07:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:07:47 --> Input Class Initialized
INFO - 2025-06-26 14:07:47 --> Language Class Initialized
INFO - 2025-06-26 14:07:47 --> Loader Class Initialized
INFO - 2025-06-26 14:07:47 --> Helper loaded: url_helper
INFO - 2025-06-26 14:07:47 --> Helper loaded: file_helper
INFO - 2025-06-26 14:07:47 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:47 --> Email Class Initialized
DEBUG - 2025-06-26 14:07:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:07:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:07:47 --> Controller Class Initialized
INFO - 2025-06-26 14:07:47 --> Helper loaded: form_helper
INFO - 2025-06-26 14:07:47 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:07:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:07:47 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:47 --> Email Class Initialized
DEBUG - 2025-06-26 14:07:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:07:47 --> Model "Crud" initialized
INFO - 2025-06-26 14:07:47 --> Final output sent to browser
DEBUG - 2025-06-26 14:07:47 --> Total execution time: 0.0466
INFO - 2025-06-26 14:07:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:07:47 --> Controller Class Initialized
INFO - 2025-06-26 14:07:47 --> Helper loaded: form_helper
INFO - 2025-06-26 14:07:47 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:07:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:07:47 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:47 --> Model "Crud" initialized
INFO - 2025-06-26 14:07:47 --> Final output sent to browser
DEBUG - 2025-06-26 14:07:47 --> Total execution time: 0.0624
INFO - 2025-06-26 14:07:58 --> Config Class Initialized
INFO - 2025-06-26 14:07:58 --> Config Class Initialized
INFO - 2025-06-26 14:07:58 --> Hooks Class Initialized
INFO - 2025-06-26 14:07:58 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:07:58 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:07:58 --> Utf8 Class Initialized
INFO - 2025-06-26 14:07:58 --> URI Class Initialized
INFO - 2025-06-26 14:07:58 --> Router Class Initialized
INFO - 2025-06-26 14:07:58 --> Output Class Initialized
INFO - 2025-06-26 14:07:58 --> Security Class Initialized
DEBUG - 2025-06-26 14:07:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-26 14:07:58 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:07:58 --> Input Class Initialized
INFO - 2025-06-26 14:07:58 --> Utf8 Class Initialized
INFO - 2025-06-26 14:07:58 --> Language Class Initialized
INFO - 2025-06-26 14:07:58 --> URI Class Initialized
INFO - 2025-06-26 14:07:58 --> Loader Class Initialized
INFO - 2025-06-26 14:07:58 --> Router Class Initialized
INFO - 2025-06-26 14:07:58 --> Helper loaded: url_helper
INFO - 2025-06-26 14:07:58 --> Output Class Initialized
INFO - 2025-06-26 14:07:58 --> Helper loaded: file_helper
INFO - 2025-06-26 14:07:58 --> Security Class Initialized
DEBUG - 2025-06-26 14:07:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:07:58 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:58 --> Input Class Initialized
INFO - 2025-06-26 14:07:58 --> Language Class Initialized
INFO - 2025-06-26 14:07:58 --> Loader Class Initialized
INFO - 2025-06-26 14:07:58 --> Helper loaded: url_helper
INFO - 2025-06-26 14:07:58 --> Helper loaded: file_helper
INFO - 2025-06-26 14:07:58 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:58 --> Email Class Initialized
INFO - 2025-06-26 14:07:58 --> Email Class Initialized
DEBUG - 2025-06-26 14:07:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-26 14:07:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:07:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:07:58 --> Controller Class Initialized
INFO - 2025-06-26 14:07:58 --> Helper loaded: form_helper
INFO - 2025-06-26 14:07:58 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:07:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:07:58 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:58 --> Model "Crud" initialized
INFO - 2025-06-26 14:07:58 --> Final output sent to browser
DEBUG - 2025-06-26 14:07:58 --> Total execution time: 0.0321
INFO - 2025-06-26 14:07:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:07:58 --> Controller Class Initialized
INFO - 2025-06-26 14:07:58 --> Helper loaded: form_helper
INFO - 2025-06-26 14:07:58 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:07:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:07:58 --> Database Driver Class Initialized
INFO - 2025-06-26 14:07:58 --> Model "Crud" initialized
INFO - 2025-06-26 14:07:58 --> Final output sent to browser
DEBUG - 2025-06-26 14:07:58 --> Total execution time: 0.0570
INFO - 2025-06-26 14:09:12 --> Config Class Initialized
INFO - 2025-06-26 14:09:12 --> Hooks Class Initialized
INFO - 2025-06-26 14:09:12 --> Config Class Initialized
INFO - 2025-06-26 14:09:12 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:09:12 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:09:12 --> Utf8 Class Initialized
DEBUG - 2025-06-26 14:09:12 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:09:12 --> Utf8 Class Initialized
INFO - 2025-06-26 14:09:12 --> URI Class Initialized
INFO - 2025-06-26 14:09:12 --> URI Class Initialized
INFO - 2025-06-26 14:09:12 --> Router Class Initialized
INFO - 2025-06-26 14:09:12 --> Output Class Initialized
INFO - 2025-06-26 14:09:12 --> Security Class Initialized
DEBUG - 2025-06-26 14:09:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:09:12 --> Input Class Initialized
INFO - 2025-06-26 14:09:12 --> Language Class Initialized
INFO - 2025-06-26 14:09:12 --> Router Class Initialized
INFO - 2025-06-26 14:09:12 --> Loader Class Initialized
INFO - 2025-06-26 14:09:12 --> Output Class Initialized
INFO - 2025-06-26 14:09:12 --> Security Class Initialized
INFO - 2025-06-26 14:09:12 --> Helper loaded: url_helper
DEBUG - 2025-06-26 14:09:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:09:12 --> Helper loaded: file_helper
INFO - 2025-06-26 14:09:12 --> Input Class Initialized
INFO - 2025-06-26 14:09:12 --> Language Class Initialized
INFO - 2025-06-26 14:09:12 --> Database Driver Class Initialized
INFO - 2025-06-26 14:09:12 --> Loader Class Initialized
INFO - 2025-06-26 14:09:12 --> Helper loaded: url_helper
INFO - 2025-06-26 14:09:12 --> Helper loaded: file_helper
INFO - 2025-06-26 14:09:12 --> Database Driver Class Initialized
INFO - 2025-06-26 14:09:12 --> Email Class Initialized
INFO - 2025-06-26 14:09:12 --> Email Class Initialized
DEBUG - 2025-06-26 14:09:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-26 14:09:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:09:12 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:09:12 --> Controller Class Initialized
INFO - 2025-06-26 14:09:12 --> Helper loaded: form_helper
INFO - 2025-06-26 14:09:12 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:09:12 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:09:12 --> Database Driver Class Initialized
INFO - 2025-06-26 14:09:12 --> Model "Crud" initialized
INFO - 2025-06-26 14:09:12 --> Final output sent to browser
DEBUG - 2025-06-26 14:09:12 --> Total execution time: 0.0386
INFO - 2025-06-26 14:09:12 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:09:12 --> Controller Class Initialized
INFO - 2025-06-26 14:09:12 --> Helper loaded: form_helper
INFO - 2025-06-26 14:09:12 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:09:12 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:09:12 --> Database Driver Class Initialized
INFO - 2025-06-26 14:09:12 --> Model "Crud" initialized
INFO - 2025-06-26 14:09:12 --> Final output sent to browser
DEBUG - 2025-06-26 14:09:12 --> Total execution time: 0.0673
INFO - 2025-06-26 14:09:18 --> Config Class Initialized
INFO - 2025-06-26 14:09:18 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:09:18 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:09:18 --> Utf8 Class Initialized
INFO - 2025-06-26 14:09:18 --> URI Class Initialized
INFO - 2025-06-26 14:09:18 --> Router Class Initialized
INFO - 2025-06-26 14:09:18 --> Output Class Initialized
INFO - 2025-06-26 14:09:18 --> Security Class Initialized
INFO - 2025-06-26 14:09:18 --> Config Class Initialized
DEBUG - 2025-06-26 14:09:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:09:18 --> Hooks Class Initialized
INFO - 2025-06-26 14:09:18 --> Input Class Initialized
DEBUG - 2025-06-26 14:09:18 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:09:18 --> Language Class Initialized
INFO - 2025-06-26 14:09:18 --> Utf8 Class Initialized
INFO - 2025-06-26 14:09:18 --> Loader Class Initialized
INFO - 2025-06-26 14:09:18 --> URI Class Initialized
INFO - 2025-06-26 14:09:18 --> Helper loaded: url_helper
INFO - 2025-06-26 14:09:18 --> Helper loaded: file_helper
INFO - 2025-06-26 14:09:18 --> Router Class Initialized
INFO - 2025-06-26 14:09:18 --> Database Driver Class Initialized
INFO - 2025-06-26 14:09:18 --> Output Class Initialized
INFO - 2025-06-26 14:09:18 --> Security Class Initialized
DEBUG - 2025-06-26 14:09:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:09:18 --> Input Class Initialized
INFO - 2025-06-26 14:09:18 --> Language Class Initialized
INFO - 2025-06-26 14:09:18 --> Loader Class Initialized
INFO - 2025-06-26 14:09:18 --> Helper loaded: url_helper
INFO - 2025-06-26 14:09:18 --> Helper loaded: file_helper
INFO - 2025-06-26 14:09:18 --> Database Driver Class Initialized
INFO - 2025-06-26 14:09:18 --> Email Class Initialized
DEBUG - 2025-06-26 14:09:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:09:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:09:18 --> Controller Class Initialized
INFO - 2025-06-26 14:09:18 --> Helper loaded: form_helper
INFO - 2025-06-26 14:09:18 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:09:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:09:18 --> Database Driver Class Initialized
INFO - 2025-06-26 14:09:18 --> Email Class Initialized
DEBUG - 2025-06-26 14:09:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:09:18 --> Model "Crud" initialized
INFO - 2025-06-26 14:09:18 --> Final output sent to browser
DEBUG - 2025-06-26 14:09:18 --> Total execution time: 0.0412
INFO - 2025-06-26 14:09:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:09:18 --> Controller Class Initialized
INFO - 2025-06-26 14:09:18 --> Helper loaded: form_helper
INFO - 2025-06-26 14:09:18 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:09:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:09:18 --> Database Driver Class Initialized
INFO - 2025-06-26 14:09:18 --> Model "Crud" initialized
INFO - 2025-06-26 14:09:18 --> Final output sent to browser
DEBUG - 2025-06-26 14:09:18 --> Total execution time: 0.0720
INFO - 2025-06-26 14:15:16 --> Config Class Initialized
INFO - 2025-06-26 14:15:16 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:15:16 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:15:16 --> Utf8 Class Initialized
INFO - 2025-06-26 14:15:16 --> URI Class Initialized
INFO - 2025-06-26 14:15:16 --> Router Class Initialized
INFO - 2025-06-26 14:15:16 --> Output Class Initialized
INFO - 2025-06-26 14:15:16 --> Security Class Initialized
DEBUG - 2025-06-26 14:15:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:15:16 --> Input Class Initialized
INFO - 2025-06-26 14:15:16 --> Language Class Initialized
INFO - 2025-06-26 14:15:16 --> Loader Class Initialized
INFO - 2025-06-26 14:15:16 --> Helper loaded: url_helper
INFO - 2025-06-26 14:15:16 --> Helper loaded: file_helper
INFO - 2025-06-26 14:15:16 --> Database Driver Class Initialized
INFO - 2025-06-26 14:15:16 --> Config Class Initialized
INFO - 2025-06-26 14:15:16 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:15:16 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:15:16 --> Utf8 Class Initialized
INFO - 2025-06-26 14:15:16 --> URI Class Initialized
INFO - 2025-06-26 14:15:16 --> Router Class Initialized
INFO - 2025-06-26 14:15:16 --> Output Class Initialized
INFO - 2025-06-26 14:15:16 --> Security Class Initialized
DEBUG - 2025-06-26 14:15:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:15:16 --> Input Class Initialized
INFO - 2025-06-26 14:15:16 --> Language Class Initialized
INFO - 2025-06-26 14:15:16 --> Loader Class Initialized
INFO - 2025-06-26 14:15:16 --> Helper loaded: url_helper
INFO - 2025-06-26 14:15:16 --> Helper loaded: file_helper
INFO - 2025-06-26 14:15:16 --> Database Driver Class Initialized
INFO - 2025-06-26 14:15:16 --> Email Class Initialized
INFO - 2025-06-26 14:15:16 --> Email Class Initialized
DEBUG - 2025-06-26 14:15:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-26 14:15:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:15:16 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:15:16 --> Controller Class Initialized
INFO - 2025-06-26 14:15:16 --> Helper loaded: form_helper
INFO - 2025-06-26 14:15:16 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:15:16 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:15:16 --> Database Driver Class Initialized
INFO - 2025-06-26 14:15:16 --> Model "Crud" initialized
INFO - 2025-06-26 14:15:16 --> Final output sent to browser
DEBUG - 2025-06-26 14:15:16 --> Total execution time: 0.0279
INFO - 2025-06-26 14:15:16 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:15:16 --> Controller Class Initialized
INFO - 2025-06-26 14:15:16 --> Helper loaded: form_helper
INFO - 2025-06-26 14:15:16 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:15:16 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:15:16 --> Database Driver Class Initialized
INFO - 2025-06-26 14:15:16 --> Model "Crud" initialized
INFO - 2025-06-26 14:15:17 --> Final output sent to browser
DEBUG - 2025-06-26 14:15:17 --> Total execution time: 0.0482
INFO - 2025-06-26 14:15:17 --> Config Class Initialized
INFO - 2025-06-26 14:15:17 --> Hooks Class Initialized
INFO - 2025-06-26 14:15:17 --> Config Class Initialized
DEBUG - 2025-06-26 14:15:17 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:15:17 --> Hooks Class Initialized
INFO - 2025-06-26 14:15:17 --> Utf8 Class Initialized
DEBUG - 2025-06-26 14:15:17 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:15:17 --> Utf8 Class Initialized
INFO - 2025-06-26 14:15:17 --> URI Class Initialized
INFO - 2025-06-26 14:15:17 --> URI Class Initialized
INFO - 2025-06-26 14:15:17 --> Router Class Initialized
INFO - 2025-06-26 14:15:17 --> Output Class Initialized
INFO - 2025-06-26 14:15:17 --> Router Class Initialized
INFO - 2025-06-26 14:15:17 --> Output Class Initialized
INFO - 2025-06-26 14:15:17 --> Security Class Initialized
INFO - 2025-06-26 14:15:17 --> Security Class Initialized
DEBUG - 2025-06-26 14:15:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:15:17 --> Input Class Initialized
DEBUG - 2025-06-26 14:15:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:15:17 --> Language Class Initialized
INFO - 2025-06-26 14:15:17 --> Input Class Initialized
INFO - 2025-06-26 14:15:17 --> Language Class Initialized
INFO - 2025-06-26 14:15:17 --> Loader Class Initialized
INFO - 2025-06-26 14:15:17 --> Loader Class Initialized
INFO - 2025-06-26 14:15:17 --> Helper loaded: url_helper
INFO - 2025-06-26 14:15:17 --> Helper loaded: url_helper
INFO - 2025-06-26 14:15:17 --> Helper loaded: file_helper
INFO - 2025-06-26 14:15:17 --> Helper loaded: file_helper
INFO - 2025-06-26 14:15:17 --> Database Driver Class Initialized
INFO - 2025-06-26 14:15:17 --> Database Driver Class Initialized
INFO - 2025-06-26 14:15:17 --> Email Class Initialized
DEBUG - 2025-06-26 14:15:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:15:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:15:17 --> Controller Class Initialized
INFO - 2025-06-26 14:15:17 --> Helper loaded: form_helper
INFO - 2025-06-26 14:15:17 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:15:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:15:17 --> Email Class Initialized
INFO - 2025-06-26 14:15:17 --> Database Driver Class Initialized
DEBUG - 2025-06-26 14:15:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:15:17 --> Model "Crud" initialized
INFO - 2025-06-26 14:15:17 --> Final output sent to browser
DEBUG - 2025-06-26 14:15:17 --> Total execution time: 0.0201
INFO - 2025-06-26 14:15:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:15:17 --> Controller Class Initialized
INFO - 2025-06-26 14:15:17 --> Helper loaded: form_helper
INFO - 2025-06-26 14:15:17 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:15:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:15:17 --> Database Driver Class Initialized
INFO - 2025-06-26 14:15:17 --> Model "Crud" initialized
INFO - 2025-06-26 14:15:17 --> Final output sent to browser
DEBUG - 2025-06-26 14:15:17 --> Total execution time: 0.0357
INFO - 2025-06-26 14:15:28 --> Config Class Initialized
INFO - 2025-06-26 14:15:28 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:15:28 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:15:28 --> Utf8 Class Initialized
INFO - 2025-06-26 14:15:28 --> URI Class Initialized
INFO - 2025-06-26 14:15:28 --> Router Class Initialized
INFO - 2025-06-26 14:15:28 --> Output Class Initialized
INFO - 2025-06-26 14:15:28 --> Security Class Initialized
DEBUG - 2025-06-26 14:15:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:15:28 --> Input Class Initialized
INFO - 2025-06-26 14:15:28 --> Language Class Initialized
INFO - 2025-06-26 14:15:28 --> Loader Class Initialized
INFO - 2025-06-26 14:15:28 --> Helper loaded: url_helper
INFO - 2025-06-26 14:15:28 --> Config Class Initialized
INFO - 2025-06-26 14:15:28 --> Helper loaded: file_helper
INFO - 2025-06-26 14:15:28 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:15:28 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:15:28 --> Database Driver Class Initialized
INFO - 2025-06-26 14:15:28 --> Utf8 Class Initialized
INFO - 2025-06-26 14:15:28 --> URI Class Initialized
INFO - 2025-06-26 14:15:28 --> Router Class Initialized
INFO - 2025-06-26 14:15:28 --> Output Class Initialized
INFO - 2025-06-26 14:15:28 --> Security Class Initialized
DEBUG - 2025-06-26 14:15:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:15:28 --> Input Class Initialized
INFO - 2025-06-26 14:15:28 --> Language Class Initialized
INFO - 2025-06-26 14:15:28 --> Loader Class Initialized
INFO - 2025-06-26 14:15:28 --> Helper loaded: url_helper
INFO - 2025-06-26 14:15:28 --> Helper loaded: file_helper
INFO - 2025-06-26 14:15:28 --> Database Driver Class Initialized
INFO - 2025-06-26 14:15:28 --> Email Class Initialized
DEBUG - 2025-06-26 14:15:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:15:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:15:28 --> Controller Class Initialized
INFO - 2025-06-26 14:15:28 --> Helper loaded: form_helper
INFO - 2025-06-26 14:15:28 --> Form Validation Class Initialized
INFO - 2025-06-26 14:15:28 --> Email Class Initialized
DEBUG - 2025-06-26 14:15:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:15:28 --> Database Driver Class Initialized
DEBUG - 2025-06-26 14:15:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:15:28 --> Model "Crud" initialized
INFO - 2025-06-26 14:15:28 --> Final output sent to browser
DEBUG - 2025-06-26 14:15:28 --> Total execution time: 0.0178
INFO - 2025-06-26 14:15:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:15:28 --> Controller Class Initialized
INFO - 2025-06-26 14:15:28 --> Helper loaded: form_helper
INFO - 2025-06-26 14:15:28 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:15:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:15:28 --> Database Driver Class Initialized
INFO - 2025-06-26 14:15:28 --> Model "Crud" initialized
INFO - 2025-06-26 14:15:28 --> Final output sent to browser
DEBUG - 2025-06-26 14:15:28 --> Total execution time: 0.0300
INFO - 2025-06-26 14:20:19 --> Config Class Initialized
INFO - 2025-06-26 14:20:19 --> Config Class Initialized
INFO - 2025-06-26 14:20:19 --> Hooks Class Initialized
INFO - 2025-06-26 14:20:19 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:20:19 --> UTF-8 Support Enabled
DEBUG - 2025-06-26 14:20:19 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:20:19 --> Utf8 Class Initialized
INFO - 2025-06-26 14:20:19 --> Utf8 Class Initialized
INFO - 2025-06-26 14:20:19 --> URI Class Initialized
INFO - 2025-06-26 14:20:19 --> URI Class Initialized
INFO - 2025-06-26 14:20:19 --> Router Class Initialized
INFO - 2025-06-26 14:20:19 --> Router Class Initialized
INFO - 2025-06-26 14:20:19 --> Output Class Initialized
INFO - 2025-06-26 14:20:19 --> Output Class Initialized
INFO - 2025-06-26 14:20:19 --> Security Class Initialized
INFO - 2025-06-26 14:20:19 --> Security Class Initialized
DEBUG - 2025-06-26 14:20:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:20:19 --> Input Class Initialized
DEBUG - 2025-06-26 14:20:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:20:19 --> Language Class Initialized
INFO - 2025-06-26 14:20:19 --> Input Class Initialized
INFO - 2025-06-26 14:20:19 --> Language Class Initialized
INFO - 2025-06-26 14:20:19 --> Loader Class Initialized
INFO - 2025-06-26 14:20:19 --> Loader Class Initialized
INFO - 2025-06-26 14:20:19 --> Helper loaded: url_helper
INFO - 2025-06-26 14:20:19 --> Helper loaded: url_helper
INFO - 2025-06-26 14:20:19 --> Helper loaded: file_helper
INFO - 2025-06-26 14:20:19 --> Helper loaded: file_helper
INFO - 2025-06-26 14:20:19 --> Database Driver Class Initialized
INFO - 2025-06-26 14:20:19 --> Database Driver Class Initialized
INFO - 2025-06-26 14:20:19 --> Email Class Initialized
DEBUG - 2025-06-26 14:20:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:20:19 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:20:19 --> Controller Class Initialized
INFO - 2025-06-26 14:20:19 --> Helper loaded: form_helper
INFO - 2025-06-26 14:20:19 --> Email Class Initialized
INFO - 2025-06-26 14:20:19 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:20:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 14:20:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:20:19 --> Database Driver Class Initialized
INFO - 2025-06-26 14:20:19 --> Model "Crud" initialized
INFO - 2025-06-26 14:20:19 --> Final output sent to browser
DEBUG - 2025-06-26 14:20:19 --> Total execution time: 0.0366
INFO - 2025-06-26 14:20:19 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:20:19 --> Controller Class Initialized
INFO - 2025-06-26 14:20:19 --> Helper loaded: form_helper
INFO - 2025-06-26 14:20:19 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:20:19 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:20:19 --> Database Driver Class Initialized
INFO - 2025-06-26 14:20:19 --> Model "Crud" initialized
INFO - 2025-06-26 14:20:19 --> Final output sent to browser
DEBUG - 2025-06-26 14:20:19 --> Total execution time: 0.0545
INFO - 2025-06-26 14:20:21 --> Config Class Initialized
INFO - 2025-06-26 14:20:21 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:20:21 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:20:21 --> Utf8 Class Initialized
INFO - 2025-06-26 14:20:21 --> URI Class Initialized
INFO - 2025-06-26 14:20:21 --> Router Class Initialized
INFO - 2025-06-26 14:20:21 --> Output Class Initialized
INFO - 2025-06-26 14:20:21 --> Security Class Initialized
DEBUG - 2025-06-26 14:20:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:20:21 --> Input Class Initialized
INFO - 2025-06-26 14:20:21 --> Language Class Initialized
INFO - 2025-06-26 14:20:21 --> Loader Class Initialized
INFO - 2025-06-26 14:20:21 --> Helper loaded: url_helper
INFO - 2025-06-26 14:20:21 --> Helper loaded: file_helper
INFO - 2025-06-26 14:20:21 --> Database Driver Class Initialized
INFO - 2025-06-26 14:20:21 --> Email Class Initialized
DEBUG - 2025-06-26 14:20:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:20:21 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:20:21 --> Controller Class Initialized
INFO - 2025-06-26 14:20:21 --> Model "CompetenceModel" initialized
INFO - 2025-06-26 14:20:21 --> Helper loaded: form_helper
INFO - 2025-06-26 14:20:21 --> Form Validation Class Initialized
INFO - 2025-06-26 14:20:21 --> Database Driver Class Initialized
INFO - 2025-06-26 14:20:21 --> Model "Crud" initialized
DEBUG - 2025-06-26 14:20:21 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 14:20:21 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:20:21 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-26 14:20:21 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/competence.php
INFO - 2025-06-26 14:20:21 --> Final output sent to browser
DEBUG - 2025-06-26 14:20:21 --> Total execution time: 0.0322
INFO - 2025-06-26 14:20:24 --> Config Class Initialized
INFO - 2025-06-26 14:20:24 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:20:24 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:20:24 --> Utf8 Class Initialized
INFO - 2025-06-26 14:20:24 --> URI Class Initialized
INFO - 2025-06-26 14:20:24 --> Router Class Initialized
INFO - 2025-06-26 14:20:24 --> Output Class Initialized
INFO - 2025-06-26 14:20:24 --> Security Class Initialized
DEBUG - 2025-06-26 14:20:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:20:24 --> Input Class Initialized
INFO - 2025-06-26 14:20:24 --> Language Class Initialized
INFO - 2025-06-26 14:20:24 --> Loader Class Initialized
INFO - 2025-06-26 14:20:24 --> Helper loaded: url_helper
INFO - 2025-06-26 14:20:24 --> Helper loaded: file_helper
INFO - 2025-06-26 14:20:24 --> Database Driver Class Initialized
INFO - 2025-06-26 14:20:24 --> Email Class Initialized
DEBUG - 2025-06-26 14:20:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:20:24 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:20:24 --> Controller Class Initialized
INFO - 2025-06-26 14:20:24 --> Helper loaded: form_helper
INFO - 2025-06-26 14:20:24 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:20:24 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:20:24 --> Database Driver Class Initialized
INFO - 2025-06-26 14:20:24 --> Model "Crud" initialized
INFO - 2025-06-26 14:20:24 --> Final output sent to browser
DEBUG - 2025-06-26 14:20:24 --> Total execution time: 0.0252
INFO - 2025-06-26 14:20:24 --> Config Class Initialized
INFO - 2025-06-26 14:20:24 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:20:24 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:20:24 --> Utf8 Class Initialized
INFO - 2025-06-26 14:20:24 --> URI Class Initialized
INFO - 2025-06-26 14:20:24 --> Router Class Initialized
INFO - 2025-06-26 14:20:24 --> Output Class Initialized
INFO - 2025-06-26 14:20:24 --> Security Class Initialized
DEBUG - 2025-06-26 14:20:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:20:24 --> Input Class Initialized
INFO - 2025-06-26 14:20:24 --> Language Class Initialized
INFO - 2025-06-26 14:20:24 --> Loader Class Initialized
INFO - 2025-06-26 14:20:24 --> Helper loaded: url_helper
INFO - 2025-06-26 14:20:24 --> Helper loaded: file_helper
INFO - 2025-06-26 14:20:24 --> Database Driver Class Initialized
INFO - 2025-06-26 14:20:24 --> Email Class Initialized
DEBUG - 2025-06-26 14:20:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:20:24 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:20:24 --> Controller Class Initialized
INFO - 2025-06-26 14:20:24 --> Model "CompetenceModel" initialized
INFO - 2025-06-26 14:20:24 --> Helper loaded: form_helper
INFO - 2025-06-26 14:20:24 --> Form Validation Class Initialized
INFO - 2025-06-26 14:20:24 --> Database Driver Class Initialized
INFO - 2025-06-26 14:20:24 --> Model "Crud" initialized
DEBUG - 2025-06-26 14:20:24 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 14:20:24 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:20:24 --> Final output sent to browser
DEBUG - 2025-06-26 14:20:24 --> Total execution time: 0.0146
INFO - 2025-06-26 14:20:28 --> Config Class Initialized
INFO - 2025-06-26 14:20:28 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:20:28 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:20:28 --> Utf8 Class Initialized
INFO - 2025-06-26 14:20:28 --> URI Class Initialized
INFO - 2025-06-26 14:20:28 --> Router Class Initialized
INFO - 2025-06-26 14:20:28 --> Output Class Initialized
INFO - 2025-06-26 14:20:28 --> Security Class Initialized
DEBUG - 2025-06-26 14:20:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:20:28 --> Input Class Initialized
INFO - 2025-06-26 14:20:28 --> Language Class Initialized
INFO - 2025-06-26 14:20:28 --> Loader Class Initialized
INFO - 2025-06-26 14:20:28 --> Helper loaded: url_helper
INFO - 2025-06-26 14:20:28 --> Helper loaded: file_helper
INFO - 2025-06-26 14:20:28 --> Database Driver Class Initialized
INFO - 2025-06-26 14:20:28 --> Config Class Initialized
INFO - 2025-06-26 14:20:28 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:20:28 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:20:28 --> Utf8 Class Initialized
INFO - 2025-06-26 14:20:28 --> URI Class Initialized
INFO - 2025-06-26 14:20:28 --> Router Class Initialized
INFO - 2025-06-26 14:20:28 --> Output Class Initialized
INFO - 2025-06-26 14:20:28 --> Security Class Initialized
DEBUG - 2025-06-26 14:20:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:20:28 --> Input Class Initialized
INFO - 2025-06-26 14:20:28 --> Language Class Initialized
INFO - 2025-06-26 14:20:28 --> Loader Class Initialized
INFO - 2025-06-26 14:20:28 --> Helper loaded: url_helper
INFO - 2025-06-26 14:20:28 --> Helper loaded: file_helper
INFO - 2025-06-26 14:20:28 --> Database Driver Class Initialized
INFO - 2025-06-26 14:20:28 --> Email Class Initialized
DEBUG - 2025-06-26 14:20:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:20:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:20:28 --> Controller Class Initialized
INFO - 2025-06-26 14:20:28 --> Helper loaded: form_helper
INFO - 2025-06-26 14:20:28 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:20:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:20:28 --> Database Driver Class Initialized
INFO - 2025-06-26 14:20:28 --> Model "Crud" initialized
INFO - 2025-06-26 14:20:28 --> Email Class Initialized
DEBUG - 2025-06-26 14:20:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:20:28 --> Final output sent to browser
DEBUG - 2025-06-26 14:20:28 --> Total execution time: 0.0265
INFO - 2025-06-26 14:20:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:20:28 --> Controller Class Initialized
INFO - 2025-06-26 14:20:28 --> Helper loaded: form_helper
INFO - 2025-06-26 14:20:28 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:20:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:20:28 --> Database Driver Class Initialized
INFO - 2025-06-26 14:20:28 --> Model "Crud" initialized
INFO - 2025-06-26 14:20:28 --> Final output sent to browser
DEBUG - 2025-06-26 14:20:28 --> Total execution time: 0.0428
INFO - 2025-06-26 14:20:35 --> Config Class Initialized
INFO - 2025-06-26 14:20:35 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:20:35 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:20:35 --> Utf8 Class Initialized
INFO - 2025-06-26 14:20:35 --> URI Class Initialized
INFO - 2025-06-26 14:20:35 --> Router Class Initialized
INFO - 2025-06-26 14:20:35 --> Output Class Initialized
INFO - 2025-06-26 14:20:35 --> Security Class Initialized
DEBUG - 2025-06-26 14:20:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:20:35 --> Input Class Initialized
INFO - 2025-06-26 14:20:35 --> Language Class Initialized
INFO - 2025-06-26 14:20:35 --> Loader Class Initialized
INFO - 2025-06-26 14:20:35 --> Helper loaded: url_helper
INFO - 2025-06-26 14:20:35 --> Helper loaded: file_helper
INFO - 2025-06-26 14:20:35 --> Database Driver Class Initialized
INFO - 2025-06-26 14:20:35 --> Email Class Initialized
DEBUG - 2025-06-26 14:20:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:20:35 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:20:35 --> Controller Class Initialized
INFO - 2025-06-26 14:20:35 --> Model "CompetenceModel" initialized
INFO - 2025-06-26 14:20:35 --> Helper loaded: form_helper
INFO - 2025-06-26 14:20:35 --> Form Validation Class Initialized
INFO - 2025-06-26 14:20:35 --> Database Driver Class Initialized
INFO - 2025-06-26 14:20:35 --> Model "Crud" initialized
DEBUG - 2025-06-26 14:20:35 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 14:20:35 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:20:35 --> Final output sent to browser
DEBUG - 2025-06-26 14:20:35 --> Total execution time: 0.0363
INFO - 2025-06-26 14:20:35 --> Config Class Initialized
INFO - 2025-06-26 14:20:35 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:20:35 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:20:35 --> Utf8 Class Initialized
INFO - 2025-06-26 14:20:35 --> URI Class Initialized
INFO - 2025-06-26 14:20:35 --> Router Class Initialized
INFO - 2025-06-26 14:20:35 --> Output Class Initialized
INFO - 2025-06-26 14:20:35 --> Security Class Initialized
DEBUG - 2025-06-26 14:20:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:20:35 --> Input Class Initialized
INFO - 2025-06-26 14:20:35 --> Language Class Initialized
INFO - 2025-06-26 14:20:35 --> Loader Class Initialized
INFO - 2025-06-26 14:20:35 --> Helper loaded: url_helper
INFO - 2025-06-26 14:20:35 --> Helper loaded: file_helper
INFO - 2025-06-26 14:20:35 --> Database Driver Class Initialized
INFO - 2025-06-26 14:20:35 --> Email Class Initialized
DEBUG - 2025-06-26 14:20:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:20:35 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:20:35 --> Controller Class Initialized
INFO - 2025-06-26 14:20:35 --> Model "CompetenceModel" initialized
INFO - 2025-06-26 14:20:35 --> Helper loaded: form_helper
INFO - 2025-06-26 14:20:35 --> Form Validation Class Initialized
INFO - 2025-06-26 14:20:35 --> Database Driver Class Initialized
INFO - 2025-06-26 14:20:35 --> Model "Crud" initialized
DEBUG - 2025-06-26 14:20:35 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 14:20:35 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:20:35 --> Final output sent to browser
DEBUG - 2025-06-26 14:20:35 --> Total execution time: 0.0112
INFO - 2025-06-26 14:20:38 --> Config Class Initialized
INFO - 2025-06-26 14:20:38 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:20:38 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:20:38 --> Utf8 Class Initialized
INFO - 2025-06-26 14:20:38 --> URI Class Initialized
INFO - 2025-06-26 14:20:38 --> Router Class Initialized
INFO - 2025-06-26 14:20:38 --> Output Class Initialized
INFO - 2025-06-26 14:20:38 --> Security Class Initialized
DEBUG - 2025-06-26 14:20:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:20:38 --> Input Class Initialized
INFO - 2025-06-26 14:20:38 --> Language Class Initialized
INFO - 2025-06-26 14:20:38 --> Loader Class Initialized
INFO - 2025-06-26 14:20:38 --> Helper loaded: url_helper
INFO - 2025-06-26 14:20:38 --> Helper loaded: file_helper
INFO - 2025-06-26 14:20:38 --> Database Driver Class Initialized
INFO - 2025-06-26 14:20:38 --> Config Class Initialized
INFO - 2025-06-26 14:20:38 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:20:38 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:20:38 --> Utf8 Class Initialized
INFO - 2025-06-26 14:20:38 --> URI Class Initialized
INFO - 2025-06-26 14:20:38 --> Router Class Initialized
INFO - 2025-06-26 14:20:38 --> Output Class Initialized
INFO - 2025-06-26 14:20:38 --> Security Class Initialized
DEBUG - 2025-06-26 14:20:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:20:38 --> Input Class Initialized
INFO - 2025-06-26 14:20:38 --> Language Class Initialized
INFO - 2025-06-26 14:20:38 --> Loader Class Initialized
INFO - 2025-06-26 14:20:38 --> Helper loaded: url_helper
INFO - 2025-06-26 14:20:38 --> Helper loaded: file_helper
INFO - 2025-06-26 14:20:38 --> Database Driver Class Initialized
INFO - 2025-06-26 14:20:38 --> Email Class Initialized
DEBUG - 2025-06-26 14:20:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:20:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:20:38 --> Controller Class Initialized
INFO - 2025-06-26 14:20:38 --> Helper loaded: form_helper
INFO - 2025-06-26 14:20:38 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:20:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:20:38 --> Database Driver Class Initialized
INFO - 2025-06-26 14:20:38 --> Email Class Initialized
DEBUG - 2025-06-26 14:20:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:20:38 --> Model "Crud" initialized
INFO - 2025-06-26 14:20:38 --> Final output sent to browser
DEBUG - 2025-06-26 14:20:38 --> Total execution time: 0.0179
INFO - 2025-06-26 14:20:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:20:38 --> Controller Class Initialized
INFO - 2025-06-26 14:20:38 --> Helper loaded: form_helper
INFO - 2025-06-26 14:20:38 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:20:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:20:38 --> Database Driver Class Initialized
INFO - 2025-06-26 14:20:38 --> Model "Crud" initialized
INFO - 2025-06-26 14:20:38 --> Final output sent to browser
DEBUG - 2025-06-26 14:20:38 --> Total execution time: 0.0305
INFO - 2025-06-26 14:20:48 --> Config Class Initialized
INFO - 2025-06-26 14:20:48 --> Hooks Class Initialized
INFO - 2025-06-26 14:20:48 --> Config Class Initialized
DEBUG - 2025-06-26 14:20:48 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:20:48 --> Hooks Class Initialized
INFO - 2025-06-26 14:20:48 --> Utf8 Class Initialized
DEBUG - 2025-06-26 14:20:48 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:20:48 --> Utf8 Class Initialized
INFO - 2025-06-26 14:20:48 --> URI Class Initialized
INFO - 2025-06-26 14:20:48 --> URI Class Initialized
INFO - 2025-06-26 14:20:48 --> Router Class Initialized
INFO - 2025-06-26 14:20:48 --> Output Class Initialized
INFO - 2025-06-26 14:20:48 --> Security Class Initialized
INFO - 2025-06-26 14:20:48 --> Router Class Initialized
DEBUG - 2025-06-26 14:20:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:20:48 --> Output Class Initialized
INFO - 2025-06-26 14:20:48 --> Input Class Initialized
INFO - 2025-06-26 14:20:48 --> Security Class Initialized
INFO - 2025-06-26 14:20:48 --> Language Class Initialized
DEBUG - 2025-06-26 14:20:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:20:48 --> Input Class Initialized
INFO - 2025-06-26 14:20:48 --> Loader Class Initialized
INFO - 2025-06-26 14:20:48 --> Language Class Initialized
INFO - 2025-06-26 14:20:48 --> Helper loaded: url_helper
INFO - 2025-06-26 14:20:48 --> Helper loaded: file_helper
INFO - 2025-06-26 14:20:48 --> Loader Class Initialized
INFO - 2025-06-26 14:20:48 --> Helper loaded: url_helper
INFO - 2025-06-26 14:20:48 --> Helper loaded: file_helper
INFO - 2025-06-26 14:20:48 --> Database Driver Class Initialized
INFO - 2025-06-26 14:20:48 --> Database Driver Class Initialized
INFO - 2025-06-26 14:20:48 --> Email Class Initialized
DEBUG - 2025-06-26 14:20:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:20:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:20:48 --> Controller Class Initialized
INFO - 2025-06-26 14:20:48 --> Helper loaded: form_helper
INFO - 2025-06-26 14:20:48 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:20:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:20:48 --> Database Driver Class Initialized
INFO - 2025-06-26 14:20:48 --> Email Class Initialized
DEBUG - 2025-06-26 14:20:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:20:48 --> Model "Crud" initialized
INFO - 2025-06-26 14:20:48 --> Final output sent to browser
DEBUG - 2025-06-26 14:20:48 --> Total execution time: 0.0261
INFO - 2025-06-26 14:20:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:20:48 --> Controller Class Initialized
INFO - 2025-06-26 14:20:48 --> Helper loaded: form_helper
INFO - 2025-06-26 14:20:48 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:20:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:20:48 --> Database Driver Class Initialized
INFO - 2025-06-26 14:20:48 --> Model "Crud" initialized
INFO - 2025-06-26 14:20:48 --> Final output sent to browser
DEBUG - 2025-06-26 14:20:48 --> Total execution time: 0.0491
INFO - 2025-06-26 14:26:49 --> Config Class Initialized
INFO - 2025-06-26 14:26:49 --> Config Class Initialized
INFO - 2025-06-26 14:26:49 --> Hooks Class Initialized
INFO - 2025-06-26 14:26:49 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:26:49 --> UTF-8 Support Enabled
DEBUG - 2025-06-26 14:26:49 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:26:49 --> Utf8 Class Initialized
INFO - 2025-06-26 14:26:49 --> Utf8 Class Initialized
INFO - 2025-06-26 14:26:49 --> URI Class Initialized
INFO - 2025-06-26 14:26:49 --> URI Class Initialized
INFO - 2025-06-26 14:26:49 --> Router Class Initialized
INFO - 2025-06-26 14:26:49 --> Router Class Initialized
INFO - 2025-06-26 14:26:49 --> Output Class Initialized
INFO - 2025-06-26 14:26:49 --> Output Class Initialized
INFO - 2025-06-26 14:26:49 --> Security Class Initialized
INFO - 2025-06-26 14:26:49 --> Security Class Initialized
DEBUG - 2025-06-26 14:26:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:26:49 --> Input Class Initialized
DEBUG - 2025-06-26 14:26:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:26:49 --> Language Class Initialized
INFO - 2025-06-26 14:26:49 --> Input Class Initialized
INFO - 2025-06-26 14:26:49 --> Language Class Initialized
INFO - 2025-06-26 14:26:49 --> Loader Class Initialized
INFO - 2025-06-26 14:26:49 --> Loader Class Initialized
INFO - 2025-06-26 14:26:49 --> Helper loaded: url_helper
INFO - 2025-06-26 14:26:49 --> Helper loaded: url_helper
INFO - 2025-06-26 14:26:49 --> Helper loaded: file_helper
INFO - 2025-06-26 14:26:49 --> Helper loaded: file_helper
INFO - 2025-06-26 14:26:49 --> Database Driver Class Initialized
INFO - 2025-06-26 14:26:49 --> Database Driver Class Initialized
INFO - 2025-06-26 14:26:49 --> Email Class Initialized
INFO - 2025-06-26 14:26:49 --> Email Class Initialized
DEBUG - 2025-06-26 14:26:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-26 14:26:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:26:49 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:26:49 --> Controller Class Initialized
INFO - 2025-06-26 14:26:49 --> Helper loaded: form_helper
INFO - 2025-06-26 14:26:49 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:26:49 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:26:49 --> Database Driver Class Initialized
INFO - 2025-06-26 14:26:49 --> Model "Crud" initialized
INFO - 2025-06-26 14:26:49 --> Final output sent to browser
DEBUG - 2025-06-26 14:26:49 --> Total execution time: 0.0534
INFO - 2025-06-26 14:26:49 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:26:49 --> Controller Class Initialized
INFO - 2025-06-26 14:26:49 --> Helper loaded: form_helper
INFO - 2025-06-26 14:26:49 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:26:49 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:26:49 --> Database Driver Class Initialized
INFO - 2025-06-26 14:26:49 --> Model "Crud" initialized
INFO - 2025-06-26 14:26:49 --> Final output sent to browser
DEBUG - 2025-06-26 14:26:49 --> Total execution time: 0.0894
INFO - 2025-06-26 14:26:58 --> Config Class Initialized
INFO - 2025-06-26 14:26:58 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:26:58 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:26:58 --> Utf8 Class Initialized
INFO - 2025-06-26 14:26:58 --> URI Class Initialized
INFO - 2025-06-26 14:26:58 --> Router Class Initialized
INFO - 2025-06-26 14:26:58 --> Output Class Initialized
INFO - 2025-06-26 14:26:58 --> Security Class Initialized
DEBUG - 2025-06-26 14:26:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:26:58 --> Input Class Initialized
INFO - 2025-06-26 14:26:58 --> Language Class Initialized
INFO - 2025-06-26 14:26:58 --> Loader Class Initialized
INFO - 2025-06-26 14:26:58 --> Helper loaded: url_helper
INFO - 2025-06-26 14:26:58 --> Helper loaded: file_helper
INFO - 2025-06-26 14:26:58 --> Database Driver Class Initialized
INFO - 2025-06-26 14:26:58 --> Config Class Initialized
INFO - 2025-06-26 14:26:58 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:26:58 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:26:58 --> Utf8 Class Initialized
INFO - 2025-06-26 14:26:58 --> URI Class Initialized
INFO - 2025-06-26 14:26:58 --> Router Class Initialized
INFO - 2025-06-26 14:26:58 --> Output Class Initialized
INFO - 2025-06-26 14:26:58 --> Security Class Initialized
DEBUG - 2025-06-26 14:26:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:26:58 --> Input Class Initialized
INFO - 2025-06-26 14:26:58 --> Language Class Initialized
INFO - 2025-06-26 14:26:58 --> Loader Class Initialized
INFO - 2025-06-26 14:26:58 --> Helper loaded: url_helper
INFO - 2025-06-26 14:26:58 --> Helper loaded: file_helper
INFO - 2025-06-26 14:26:58 --> Database Driver Class Initialized
INFO - 2025-06-26 14:26:58 --> Email Class Initialized
DEBUG - 2025-06-26 14:26:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:26:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:26:58 --> Controller Class Initialized
INFO - 2025-06-26 14:26:58 --> Helper loaded: form_helper
INFO - 2025-06-26 14:26:58 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:26:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:26:58 --> Database Driver Class Initialized
INFO - 2025-06-26 14:26:58 --> Email Class Initialized
DEBUG - 2025-06-26 14:26:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:26:58 --> Model "Crud" initialized
INFO - 2025-06-26 14:26:58 --> Final output sent to browser
DEBUG - 2025-06-26 14:26:58 --> Total execution time: 0.0258
INFO - 2025-06-26 14:26:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:26:58 --> Controller Class Initialized
INFO - 2025-06-26 14:26:58 --> Helper loaded: form_helper
INFO - 2025-06-26 14:26:58 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:26:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:26:58 --> Database Driver Class Initialized
INFO - 2025-06-26 14:26:58 --> Model "Crud" initialized
INFO - 2025-06-26 14:26:58 --> Final output sent to browser
DEBUG - 2025-06-26 14:26:58 --> Total execution time: 0.0632
INFO - 2025-06-26 14:36:42 --> Config Class Initialized
INFO - 2025-06-26 14:36:42 --> Config Class Initialized
INFO - 2025-06-26 14:36:42 --> Hooks Class Initialized
INFO - 2025-06-26 14:36:42 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:36:42 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:36:42 --> Utf8 Class Initialized
DEBUG - 2025-06-26 14:36:42 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:36:42 --> URI Class Initialized
INFO - 2025-06-26 14:36:42 --> Utf8 Class Initialized
INFO - 2025-06-26 14:36:42 --> Router Class Initialized
INFO - 2025-06-26 14:36:42 --> Output Class Initialized
INFO - 2025-06-26 14:36:42 --> URI Class Initialized
INFO - 2025-06-26 14:36:42 --> Security Class Initialized
DEBUG - 2025-06-26 14:36:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:36:42 --> Router Class Initialized
INFO - 2025-06-26 14:36:42 --> Output Class Initialized
INFO - 2025-06-26 14:36:42 --> Input Class Initialized
INFO - 2025-06-26 14:36:42 --> Security Class Initialized
INFO - 2025-06-26 14:36:42 --> Language Class Initialized
DEBUG - 2025-06-26 14:36:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:36:42 --> Input Class Initialized
INFO - 2025-06-26 14:36:42 --> Language Class Initialized
INFO - 2025-06-26 14:36:42 --> Loader Class Initialized
INFO - 2025-06-26 14:36:42 --> Loader Class Initialized
INFO - 2025-06-26 14:36:42 --> Helper loaded: url_helper
INFO - 2025-06-26 14:36:42 --> Helper loaded: file_helper
INFO - 2025-06-26 14:36:42 --> Database Driver Class Initialized
INFO - 2025-06-26 14:36:42 --> Helper loaded: url_helper
INFO - 2025-06-26 14:36:42 --> Helper loaded: file_helper
INFO - 2025-06-26 14:36:42 --> Database Driver Class Initialized
INFO - 2025-06-26 14:36:42 --> Email Class Initialized
DEBUG - 2025-06-26 14:36:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:36:42 --> Email Class Initialized
DEBUG - 2025-06-26 14:36:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:36:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:36:42 --> Controller Class Initialized
INFO - 2025-06-26 14:36:42 --> Helper loaded: form_helper
INFO - 2025-06-26 14:36:42 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:36:42 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:36:42 --> Database Driver Class Initialized
INFO - 2025-06-26 14:36:42 --> Model "Crud" initialized
INFO - 2025-06-26 14:36:42 --> Final output sent to browser
DEBUG - 2025-06-26 14:36:42 --> Total execution time: 0.0356
INFO - 2025-06-26 14:36:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:36:42 --> Controller Class Initialized
INFO - 2025-06-26 14:36:42 --> Helper loaded: form_helper
INFO - 2025-06-26 14:36:42 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:36:42 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:36:42 --> Database Driver Class Initialized
INFO - 2025-06-26 14:36:42 --> Model "Crud" initialized
INFO - 2025-06-26 14:36:42 --> Final output sent to browser
DEBUG - 2025-06-26 14:36:42 --> Total execution time: 0.0668
INFO - 2025-06-26 14:36:48 --> Config Class Initialized
INFO - 2025-06-26 14:36:48 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:36:48 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:36:48 --> Utf8 Class Initialized
INFO - 2025-06-26 14:36:48 --> URI Class Initialized
INFO - 2025-06-26 14:36:48 --> Router Class Initialized
INFO - 2025-06-26 14:36:48 --> Output Class Initialized
INFO - 2025-06-26 14:36:48 --> Security Class Initialized
DEBUG - 2025-06-26 14:36:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:36:48 --> Input Class Initialized
INFO - 2025-06-26 14:36:48 --> Language Class Initialized
INFO - 2025-06-26 14:36:48 --> Loader Class Initialized
INFO - 2025-06-26 14:36:48 --> Helper loaded: url_helper
INFO - 2025-06-26 14:36:48 --> Helper loaded: file_helper
INFO - 2025-06-26 14:36:48 --> Database Driver Class Initialized
INFO - 2025-06-26 14:36:48 --> Config Class Initialized
INFO - 2025-06-26 14:36:48 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:36:48 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:36:48 --> Utf8 Class Initialized
INFO - 2025-06-26 14:36:48 --> URI Class Initialized
INFO - 2025-06-26 14:36:48 --> Router Class Initialized
INFO - 2025-06-26 14:36:48 --> Output Class Initialized
INFO - 2025-06-26 14:36:48 --> Security Class Initialized
DEBUG - 2025-06-26 14:36:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:36:48 --> Input Class Initialized
INFO - 2025-06-26 14:36:48 --> Language Class Initialized
INFO - 2025-06-26 14:36:48 --> Loader Class Initialized
INFO - 2025-06-26 14:36:48 --> Helper loaded: url_helper
INFO - 2025-06-26 14:36:48 --> Helper loaded: file_helper
INFO - 2025-06-26 14:36:48 --> Database Driver Class Initialized
INFO - 2025-06-26 14:36:48 --> Email Class Initialized
DEBUG - 2025-06-26 14:36:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:36:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:36:48 --> Controller Class Initialized
INFO - 2025-06-26 14:36:48 --> Helper loaded: form_helper
INFO - 2025-06-26 14:36:48 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:36:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:36:48 --> Database Driver Class Initialized
INFO - 2025-06-26 14:36:48 --> Email Class Initialized
DEBUG - 2025-06-26 14:36:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:36:48 --> Model "Crud" initialized
INFO - 2025-06-26 14:36:48 --> Final output sent to browser
DEBUG - 2025-06-26 14:36:48 --> Total execution time: 0.0274
INFO - 2025-06-26 14:36:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:36:48 --> Controller Class Initialized
INFO - 2025-06-26 14:36:48 --> Helper loaded: form_helper
INFO - 2025-06-26 14:36:48 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:36:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:36:48 --> Database Driver Class Initialized
INFO - 2025-06-26 14:36:48 --> Model "Crud" initialized
INFO - 2025-06-26 14:36:48 --> Final output sent to browser
DEBUG - 2025-06-26 14:36:48 --> Total execution time: 0.0415
INFO - 2025-06-26 14:51:31 --> Config Class Initialized
INFO - 2025-06-26 14:51:31 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:51:31 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:51:31 --> Utf8 Class Initialized
INFO - 2025-06-26 14:51:31 --> URI Class Initialized
INFO - 2025-06-26 14:51:31 --> Router Class Initialized
INFO - 2025-06-26 14:51:31 --> Output Class Initialized
INFO - 2025-06-26 14:51:31 --> Security Class Initialized
DEBUG - 2025-06-26 14:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:51:31 --> Input Class Initialized
INFO - 2025-06-26 14:51:31 --> Language Class Initialized
INFO - 2025-06-26 14:51:31 --> Loader Class Initialized
INFO - 2025-06-26 14:51:31 --> Config Class Initialized
INFO - 2025-06-26 14:51:31 --> Helper loaded: url_helper
INFO - 2025-06-26 14:51:31 --> Hooks Class Initialized
INFO - 2025-06-26 14:51:31 --> Helper loaded: file_helper
DEBUG - 2025-06-26 14:51:31 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:51:31 --> Utf8 Class Initialized
INFO - 2025-06-26 14:51:31 --> URI Class Initialized
INFO - 2025-06-26 14:51:31 --> Database Driver Class Initialized
INFO - 2025-06-26 14:51:31 --> Router Class Initialized
INFO - 2025-06-26 14:51:31 --> Output Class Initialized
INFO - 2025-06-26 14:51:31 --> Security Class Initialized
DEBUG - 2025-06-26 14:51:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:51:31 --> Input Class Initialized
INFO - 2025-06-26 14:51:31 --> Language Class Initialized
INFO - 2025-06-26 14:51:31 --> Loader Class Initialized
INFO - 2025-06-26 14:51:31 --> Helper loaded: url_helper
INFO - 2025-06-26 14:51:31 --> Helper loaded: file_helper
INFO - 2025-06-26 14:51:31 --> Database Driver Class Initialized
INFO - 2025-06-26 14:51:31 --> Email Class Initialized
INFO - 2025-06-26 14:51:31 --> Email Class Initialized
DEBUG - 2025-06-26 14:51:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-26 14:51:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:51:31 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:51:31 --> Controller Class Initialized
INFO - 2025-06-26 14:51:31 --> Helper loaded: form_helper
INFO - 2025-06-26 14:51:31 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:51:31 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:51:31 --> Database Driver Class Initialized
INFO - 2025-06-26 14:51:31 --> Model "Crud" initialized
INFO - 2025-06-26 14:51:31 --> Final output sent to browser
DEBUG - 2025-06-26 14:51:31 --> Total execution time: 0.0751
INFO - 2025-06-26 14:51:31 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:51:31 --> Controller Class Initialized
INFO - 2025-06-26 14:51:31 --> Helper loaded: form_helper
INFO - 2025-06-26 14:51:31 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:51:31 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:51:31 --> Database Driver Class Initialized
INFO - 2025-06-26 14:51:31 --> Model "Crud" initialized
INFO - 2025-06-26 14:51:31 --> Final output sent to browser
DEBUG - 2025-06-26 14:51:31 --> Total execution time: 0.1057
INFO - 2025-06-26 14:51:36 --> Config Class Initialized
INFO - 2025-06-26 14:51:36 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:51:36 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:51:36 --> Utf8 Class Initialized
INFO - 2025-06-26 14:51:36 --> URI Class Initialized
INFO - 2025-06-26 14:51:36 --> Router Class Initialized
INFO - 2025-06-26 14:51:36 --> Output Class Initialized
INFO - 2025-06-26 14:51:36 --> Security Class Initialized
DEBUG - 2025-06-26 14:51:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:51:36 --> Input Class Initialized
INFO - 2025-06-26 14:51:36 --> Language Class Initialized
INFO - 2025-06-26 14:51:36 --> Loader Class Initialized
INFO - 2025-06-26 14:51:36 --> Helper loaded: url_helper
INFO - 2025-06-26 14:51:36 --> Helper loaded: file_helper
INFO - 2025-06-26 14:51:36 --> Database Driver Class Initialized
INFO - 2025-06-26 14:51:36 --> Email Class Initialized
DEBUG - 2025-06-26 14:51:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:51:36 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:51:36 --> Controller Class Initialized
INFO - 2025-06-26 14:51:36 --> Model "MasterFeedbackModel" initialized
INFO - 2025-06-26 14:51:36 --> Helper loaded: form_helper
INFO - 2025-06-26 14:51:36 --> Form Validation Class Initialized
INFO - 2025-06-26 14:51:36 --> Database Driver Class Initialized
INFO - 2025-06-26 14:51:36 --> Model "Crud" initialized
DEBUG - 2025-06-26 14:51:36 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 14:51:36 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:51:36 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-26 14:51:36 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/master-feedback.php
INFO - 2025-06-26 14:51:36 --> Final output sent to browser
DEBUG - 2025-06-26 14:51:36 --> Total execution time: 0.0603
INFO - 2025-06-26 14:51:36 --> Config Class Initialized
INFO - 2025-06-26 14:51:36 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:51:36 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:51:36 --> Utf8 Class Initialized
INFO - 2025-06-26 14:51:36 --> URI Class Initialized
INFO - 2025-06-26 14:51:36 --> Router Class Initialized
INFO - 2025-06-26 14:51:36 --> Output Class Initialized
INFO - 2025-06-26 14:51:36 --> Security Class Initialized
DEBUG - 2025-06-26 14:51:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:51:36 --> Input Class Initialized
INFO - 2025-06-26 14:51:36 --> Language Class Initialized
INFO - 2025-06-26 14:51:36 --> Loader Class Initialized
INFO - 2025-06-26 14:51:36 --> Helper loaded: url_helper
INFO - 2025-06-26 14:51:36 --> Helper loaded: file_helper
INFO - 2025-06-26 14:51:36 --> Database Driver Class Initialized
INFO - 2025-06-26 14:51:36 --> Email Class Initialized
DEBUG - 2025-06-26 14:51:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:51:36 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:51:36 --> Controller Class Initialized
INFO - 2025-06-26 14:51:36 --> Model "MasterFeedbackModel" initialized
INFO - 2025-06-26 14:51:36 --> Helper loaded: form_helper
INFO - 2025-06-26 14:51:36 --> Form Validation Class Initialized
INFO - 2025-06-26 14:51:36 --> Database Driver Class Initialized
INFO - 2025-06-26 14:51:36 --> Model "Crud" initialized
DEBUG - 2025-06-26 14:51:36 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 14:51:36 --> Session class already loaded. Second attempt ignored.
ERROR - 2025-06-26 14:51:36 --> Query error: Illegal mix of collations (utf8mb4_0900_ai_ci,IMPLICIT) and (utf8mb3_general_ci,COERCIBLE) for operation '=' - Invalid query: SELECT a.* FROM setting_users a JOIN users b ON a.users_id = b.username WHERE a.menus_id='‚ZjXì' and b.username='admin'
INFO - 2025-06-26 14:51:36 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-26 14:51:37 --> Config Class Initialized
INFO - 2025-06-26 14:51:37 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:51:37 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:51:37 --> Utf8 Class Initialized
INFO - 2025-06-26 14:51:37 --> URI Class Initialized
INFO - 2025-06-26 14:51:37 --> Router Class Initialized
INFO - 2025-06-26 14:51:37 --> Output Class Initialized
INFO - 2025-06-26 14:51:37 --> Security Class Initialized
DEBUG - 2025-06-26 14:51:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:51:37 --> Input Class Initialized
INFO - 2025-06-26 14:51:37 --> Language Class Initialized
INFO - 2025-06-26 14:51:37 --> Loader Class Initialized
INFO - 2025-06-26 14:51:37 --> Helper loaded: url_helper
INFO - 2025-06-26 14:51:37 --> Helper loaded: file_helper
INFO - 2025-06-26 14:51:37 --> Database Driver Class Initialized
INFO - 2025-06-26 14:51:37 --> Config Class Initialized
INFO - 2025-06-26 14:51:37 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:51:37 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:51:37 --> Utf8 Class Initialized
INFO - 2025-06-26 14:51:37 --> URI Class Initialized
INFO - 2025-06-26 14:51:37 --> Router Class Initialized
INFO - 2025-06-26 14:51:37 --> Output Class Initialized
INFO - 2025-06-26 14:51:37 --> Security Class Initialized
DEBUG - 2025-06-26 14:51:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:51:37 --> Input Class Initialized
INFO - 2025-06-26 14:51:37 --> Language Class Initialized
INFO - 2025-06-26 14:51:37 --> Loader Class Initialized
INFO - 2025-06-26 14:51:37 --> Helper loaded: url_helper
INFO - 2025-06-26 14:51:37 --> Helper loaded: file_helper
INFO - 2025-06-26 14:51:37 --> Database Driver Class Initialized
INFO - 2025-06-26 14:51:37 --> Email Class Initialized
DEBUG - 2025-06-26 14:51:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:51:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:51:37 --> Email Class Initialized
INFO - 2025-06-26 14:51:37 --> Controller Class Initialized
INFO - 2025-06-26 14:51:37 --> Helper loaded: form_helper
DEBUG - 2025-06-26 14:51:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:51:37 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:51:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:51:37 --> Database Driver Class Initialized
INFO - 2025-06-26 14:51:37 --> Model "Crud" initialized
INFO - 2025-06-26 14:51:37 --> Final output sent to browser
DEBUG - 2025-06-26 14:51:37 --> Total execution time: 0.0237
INFO - 2025-06-26 14:51:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:51:37 --> Controller Class Initialized
INFO - 2025-06-26 14:51:37 --> Helper loaded: form_helper
INFO - 2025-06-26 14:51:37 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:51:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:51:37 --> Database Driver Class Initialized
INFO - 2025-06-26 14:51:37 --> Model "Crud" initialized
INFO - 2025-06-26 14:51:37 --> Final output sent to browser
DEBUG - 2025-06-26 14:51:37 --> Total execution time: 0.0366
INFO - 2025-06-26 14:51:38 --> Config Class Initialized
INFO - 2025-06-26 14:51:38 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:51:38 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:51:38 --> Utf8 Class Initialized
INFO - 2025-06-26 14:51:38 --> URI Class Initialized
INFO - 2025-06-26 14:51:38 --> Router Class Initialized
INFO - 2025-06-26 14:51:38 --> Output Class Initialized
INFO - 2025-06-26 14:51:38 --> Security Class Initialized
DEBUG - 2025-06-26 14:51:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:51:38 --> Input Class Initialized
INFO - 2025-06-26 14:51:38 --> Language Class Initialized
INFO - 2025-06-26 14:51:38 --> Loader Class Initialized
INFO - 2025-06-26 14:51:38 --> Helper loaded: url_helper
INFO - 2025-06-26 14:51:38 --> Helper loaded: file_helper
INFO - 2025-06-26 14:51:38 --> Database Driver Class Initialized
INFO - 2025-06-26 14:51:38 --> Email Class Initialized
DEBUG - 2025-06-26 14:51:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:51:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:51:38 --> Controller Class Initialized
INFO - 2025-06-26 14:51:38 --> Helper loaded: form_helper
INFO - 2025-06-26 14:51:38 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:51:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:51:38 --> Database Driver Class Initialized
INFO - 2025-06-26 14:51:38 --> Model "Crud" initialized
INFO - 2025-06-26 14:51:38 --> Final output sent to browser
DEBUG - 2025-06-26 14:51:38 --> Total execution time: 0.0192
INFO - 2025-06-26 14:51:38 --> Config Class Initialized
INFO - 2025-06-26 14:51:38 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:51:38 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:51:38 --> Utf8 Class Initialized
INFO - 2025-06-26 14:51:38 --> URI Class Initialized
INFO - 2025-06-26 14:51:38 --> Router Class Initialized
INFO - 2025-06-26 14:51:38 --> Output Class Initialized
INFO - 2025-06-26 14:51:38 --> Security Class Initialized
DEBUG - 2025-06-26 14:51:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:51:38 --> Input Class Initialized
INFO - 2025-06-26 14:51:38 --> Language Class Initialized
INFO - 2025-06-26 14:51:38 --> Loader Class Initialized
INFO - 2025-06-26 14:51:38 --> Helper loaded: url_helper
INFO - 2025-06-26 14:51:38 --> Helper loaded: file_helper
INFO - 2025-06-26 14:51:38 --> Database Driver Class Initialized
INFO - 2025-06-26 14:51:38 --> Email Class Initialized
DEBUG - 2025-06-26 14:51:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:51:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:51:38 --> Controller Class Initialized
INFO - 2025-06-26 14:51:38 --> Model "MasterFeedbackModel" initialized
INFO - 2025-06-26 14:51:38 --> Helper loaded: form_helper
INFO - 2025-06-26 14:51:38 --> Form Validation Class Initialized
INFO - 2025-06-26 14:51:38 --> Database Driver Class Initialized
INFO - 2025-06-26 14:51:38 --> Model "Crud" initialized
DEBUG - 2025-06-26 14:51:38 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 14:51:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:51:38 --> Final output sent to browser
DEBUG - 2025-06-26 14:51:38 --> Total execution time: 0.0356
INFO - 2025-06-26 14:51:48 --> Config Class Initialized
INFO - 2025-06-26 14:51:48 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:51:48 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:51:48 --> Utf8 Class Initialized
INFO - 2025-06-26 14:51:48 --> URI Class Initialized
INFO - 2025-06-26 14:51:48 --> Router Class Initialized
INFO - 2025-06-26 14:51:48 --> Output Class Initialized
INFO - 2025-06-26 14:51:48 --> Security Class Initialized
DEBUG - 2025-06-26 14:51:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:51:48 --> Input Class Initialized
INFO - 2025-06-26 14:51:48 --> Language Class Initialized
INFO - 2025-06-26 14:51:48 --> Loader Class Initialized
INFO - 2025-06-26 14:51:48 --> Helper loaded: url_helper
INFO - 2025-06-26 14:51:48 --> Helper loaded: file_helper
INFO - 2025-06-26 14:51:48 --> Config Class Initialized
INFO - 2025-06-26 14:51:48 --> Hooks Class Initialized
INFO - 2025-06-26 14:51:48 --> Database Driver Class Initialized
DEBUG - 2025-06-26 14:51:48 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:51:48 --> Utf8 Class Initialized
INFO - 2025-06-26 14:51:48 --> URI Class Initialized
INFO - 2025-06-26 14:51:48 --> Router Class Initialized
INFO - 2025-06-26 14:51:48 --> Output Class Initialized
INFO - 2025-06-26 14:51:48 --> Security Class Initialized
DEBUG - 2025-06-26 14:51:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:51:48 --> Input Class Initialized
INFO - 2025-06-26 14:51:48 --> Language Class Initialized
INFO - 2025-06-26 14:51:48 --> Loader Class Initialized
INFO - 2025-06-26 14:51:48 --> Helper loaded: url_helper
INFO - 2025-06-26 14:51:48 --> Helper loaded: file_helper
INFO - 2025-06-26 14:51:48 --> Database Driver Class Initialized
INFO - 2025-06-26 14:51:48 --> Email Class Initialized
DEBUG - 2025-06-26 14:51:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:51:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:51:48 --> Controller Class Initialized
INFO - 2025-06-26 14:51:48 --> Helper loaded: form_helper
INFO - 2025-06-26 14:51:48 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:51:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:51:48 --> Database Driver Class Initialized
INFO - 2025-06-26 14:51:48 --> Email Class Initialized
DEBUG - 2025-06-26 14:51:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:51:48 --> Model "Crud" initialized
INFO - 2025-06-26 14:51:48 --> Final output sent to browser
DEBUG - 2025-06-26 14:51:48 --> Total execution time: 0.0239
INFO - 2025-06-26 14:51:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:51:48 --> Controller Class Initialized
INFO - 2025-06-26 14:51:48 --> Helper loaded: form_helper
INFO - 2025-06-26 14:51:48 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:51:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:51:48 --> Database Driver Class Initialized
INFO - 2025-06-26 14:51:48 --> Model "Crud" initialized
INFO - 2025-06-26 14:51:48 --> Final output sent to browser
DEBUG - 2025-06-26 14:51:48 --> Total execution time: 0.0356
INFO - 2025-06-26 14:51:58 --> Config Class Initialized
INFO - 2025-06-26 14:51:58 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:51:58 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:51:58 --> Utf8 Class Initialized
INFO - 2025-06-26 14:51:58 --> URI Class Initialized
INFO - 2025-06-26 14:51:58 --> Router Class Initialized
INFO - 2025-06-26 14:51:58 --> Output Class Initialized
INFO - 2025-06-26 14:51:58 --> Security Class Initialized
DEBUG - 2025-06-26 14:51:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:51:58 --> Input Class Initialized
INFO - 2025-06-26 14:51:58 --> Language Class Initialized
INFO - 2025-06-26 14:51:58 --> Loader Class Initialized
INFO - 2025-06-26 14:51:58 --> Helper loaded: url_helper
INFO - 2025-06-26 14:51:58 --> Helper loaded: file_helper
INFO - 2025-06-26 14:51:58 --> Database Driver Class Initialized
INFO - 2025-06-26 14:51:58 --> Config Class Initialized
INFO - 2025-06-26 14:51:58 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:51:58 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:51:58 --> Utf8 Class Initialized
INFO - 2025-06-26 14:51:58 --> URI Class Initialized
INFO - 2025-06-26 14:51:58 --> Router Class Initialized
INFO - 2025-06-26 14:51:58 --> Output Class Initialized
INFO - 2025-06-26 14:51:58 --> Security Class Initialized
DEBUG - 2025-06-26 14:51:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:51:58 --> Input Class Initialized
INFO - 2025-06-26 14:51:58 --> Language Class Initialized
INFO - 2025-06-26 14:51:58 --> Email Class Initialized
INFO - 2025-06-26 14:51:58 --> Loader Class Initialized
DEBUG - 2025-06-26 14:51:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:51:58 --> Helper loaded: url_helper
INFO - 2025-06-26 14:51:58 --> Helper loaded: file_helper
INFO - 2025-06-26 14:51:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:51:58 --> Controller Class Initialized
INFO - 2025-06-26 14:51:58 --> Helper loaded: form_helper
INFO - 2025-06-26 14:51:58 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:51:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:51:58 --> Database Driver Class Initialized
INFO - 2025-06-26 14:51:58 --> Database Driver Class Initialized
INFO - 2025-06-26 14:51:58 --> Model "Crud" initialized
INFO - 2025-06-26 14:51:58 --> Email Class Initialized
DEBUG - 2025-06-26 14:51:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:51:58 --> Final output sent to browser
DEBUG - 2025-06-26 14:51:58 --> Total execution time: 0.0209
INFO - 2025-06-26 14:51:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:51:58 --> Controller Class Initialized
INFO - 2025-06-26 14:51:58 --> Helper loaded: form_helper
INFO - 2025-06-26 14:51:58 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:51:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:51:58 --> Database Driver Class Initialized
INFO - 2025-06-26 14:51:58 --> Model "Crud" initialized
INFO - 2025-06-26 14:51:58 --> Final output sent to browser
DEBUG - 2025-06-26 14:51:58 --> Total execution time: 0.0323
INFO - 2025-06-26 14:52:08 --> Config Class Initialized
INFO - 2025-06-26 14:52:08 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:52:08 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:52:08 --> Utf8 Class Initialized
INFO - 2025-06-26 14:52:08 --> URI Class Initialized
INFO - 2025-06-26 14:52:08 --> Router Class Initialized
INFO - 2025-06-26 14:52:08 --> Output Class Initialized
INFO - 2025-06-26 14:52:08 --> Security Class Initialized
DEBUG - 2025-06-26 14:52:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:52:08 --> Input Class Initialized
INFO - 2025-06-26 14:52:08 --> Language Class Initialized
INFO - 2025-06-26 14:52:08 --> Loader Class Initialized
INFO - 2025-06-26 14:52:08 --> Helper loaded: url_helper
INFO - 2025-06-26 14:52:08 --> Helper loaded: file_helper
INFO - 2025-06-26 14:52:08 --> Database Driver Class Initialized
INFO - 2025-06-26 14:52:08 --> Email Class Initialized
DEBUG - 2025-06-26 14:52:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:52:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:52:08 --> Controller Class Initialized
INFO - 2025-06-26 14:52:08 --> Helper loaded: form_helper
INFO - 2025-06-26 14:52:08 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:52:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:52:08 --> Database Driver Class Initialized
INFO - 2025-06-26 14:52:08 --> Model "Crud" initialized
INFO - 2025-06-26 14:52:08 --> Config Class Initialized
INFO - 2025-06-26 14:52:08 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:52:08 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:52:08 --> Utf8 Class Initialized
INFO - 2025-06-26 14:52:08 --> URI Class Initialized
INFO - 2025-06-26 14:52:08 --> Router Class Initialized
INFO - 2025-06-26 14:52:08 --> Output Class Initialized
INFO - 2025-06-26 14:52:08 --> Security Class Initialized
DEBUG - 2025-06-26 14:52:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:52:08 --> Input Class Initialized
INFO - 2025-06-26 14:52:08 --> Language Class Initialized
INFO - 2025-06-26 14:52:08 --> Loader Class Initialized
INFO - 2025-06-26 14:52:08 --> Helper loaded: url_helper
INFO - 2025-06-26 14:52:08 --> Helper loaded: file_helper
INFO - 2025-06-26 14:52:08 --> Database Driver Class Initialized
INFO - 2025-06-26 14:52:08 --> Final output sent to browser
DEBUG - 2025-06-26 14:52:08 --> Total execution time: 0.0871
INFO - 2025-06-26 14:52:08 --> Email Class Initialized
DEBUG - 2025-06-26 14:52:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:52:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:52:08 --> Controller Class Initialized
INFO - 2025-06-26 14:52:08 --> Helper loaded: form_helper
INFO - 2025-06-26 14:52:08 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:52:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:52:08 --> Database Driver Class Initialized
INFO - 2025-06-26 14:52:08 --> Model "Crud" initialized
INFO - 2025-06-26 14:52:08 --> Final output sent to browser
DEBUG - 2025-06-26 14:52:08 --> Total execution time: 0.1074
INFO - 2025-06-26 14:52:18 --> Config Class Initialized
INFO - 2025-06-26 14:52:18 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:52:18 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:52:18 --> Utf8 Class Initialized
INFO - 2025-06-26 14:52:18 --> URI Class Initialized
INFO - 2025-06-26 14:52:18 --> Router Class Initialized
INFO - 2025-06-26 14:52:18 --> Output Class Initialized
INFO - 2025-06-26 14:52:18 --> Security Class Initialized
DEBUG - 2025-06-26 14:52:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:52:18 --> Input Class Initialized
INFO - 2025-06-26 14:52:18 --> Language Class Initialized
INFO - 2025-06-26 14:52:18 --> Loader Class Initialized
INFO - 2025-06-26 14:52:18 --> Helper loaded: url_helper
INFO - 2025-06-26 14:52:18 --> Helper loaded: file_helper
INFO - 2025-06-26 14:52:18 --> Database Driver Class Initialized
INFO - 2025-06-26 14:52:18 --> Config Class Initialized
INFO - 2025-06-26 14:52:18 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:52:18 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:52:18 --> Utf8 Class Initialized
INFO - 2025-06-26 14:52:18 --> URI Class Initialized
INFO - 2025-06-26 14:52:18 --> Router Class Initialized
INFO - 2025-06-26 14:52:18 --> Output Class Initialized
INFO - 2025-06-26 14:52:18 --> Security Class Initialized
DEBUG - 2025-06-26 14:52:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:52:18 --> Input Class Initialized
INFO - 2025-06-26 14:52:18 --> Language Class Initialized
INFO - 2025-06-26 14:52:18 --> Loader Class Initialized
INFO - 2025-06-26 14:52:18 --> Helper loaded: url_helper
INFO - 2025-06-26 14:52:18 --> Helper loaded: file_helper
INFO - 2025-06-26 14:52:18 --> Database Driver Class Initialized
INFO - 2025-06-26 14:52:18 --> Email Class Initialized
DEBUG - 2025-06-26 14:52:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:52:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:52:18 --> Controller Class Initialized
INFO - 2025-06-26 14:52:18 --> Helper loaded: form_helper
INFO - 2025-06-26 14:52:18 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:52:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:52:18 --> Database Driver Class Initialized
INFO - 2025-06-26 14:52:18 --> Email Class Initialized
DEBUG - 2025-06-26 14:52:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:52:18 --> Model "Crud" initialized
INFO - 2025-06-26 14:52:18 --> Final output sent to browser
DEBUG - 2025-06-26 14:52:18 --> Total execution time: 0.0355
INFO - 2025-06-26 14:52:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:52:18 --> Controller Class Initialized
INFO - 2025-06-26 14:52:18 --> Helper loaded: form_helper
INFO - 2025-06-26 14:52:18 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:52:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:52:18 --> Database Driver Class Initialized
INFO - 2025-06-26 14:52:18 --> Model "Crud" initialized
INFO - 2025-06-26 14:52:18 --> Final output sent to browser
DEBUG - 2025-06-26 14:52:18 --> Total execution time: 0.0472
INFO - 2025-06-26 14:52:28 --> Config Class Initialized
INFO - 2025-06-26 14:52:28 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:52:28 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:52:28 --> Utf8 Class Initialized
INFO - 2025-06-26 14:52:28 --> URI Class Initialized
INFO - 2025-06-26 14:52:28 --> Router Class Initialized
INFO - 2025-06-26 14:52:28 --> Output Class Initialized
INFO - 2025-06-26 14:52:28 --> Security Class Initialized
DEBUG - 2025-06-26 14:52:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:52:28 --> Input Class Initialized
INFO - 2025-06-26 14:52:28 --> Language Class Initialized
INFO - 2025-06-26 14:52:28 --> Loader Class Initialized
INFO - 2025-06-26 14:52:28 --> Helper loaded: url_helper
INFO - 2025-06-26 14:52:28 --> Helper loaded: file_helper
INFO - 2025-06-26 14:52:28 --> Database Driver Class Initialized
INFO - 2025-06-26 14:52:28 --> Config Class Initialized
INFO - 2025-06-26 14:52:28 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:52:28 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:52:28 --> Utf8 Class Initialized
INFO - 2025-06-26 14:52:28 --> URI Class Initialized
INFO - 2025-06-26 14:52:28 --> Router Class Initialized
INFO - 2025-06-26 14:52:28 --> Output Class Initialized
INFO - 2025-06-26 14:52:28 --> Security Class Initialized
DEBUG - 2025-06-26 14:52:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:52:28 --> Input Class Initialized
INFO - 2025-06-26 14:52:28 --> Language Class Initialized
INFO - 2025-06-26 14:52:28 --> Loader Class Initialized
INFO - 2025-06-26 14:52:28 --> Helper loaded: url_helper
INFO - 2025-06-26 14:52:28 --> Helper loaded: file_helper
INFO - 2025-06-26 14:52:28 --> Database Driver Class Initialized
INFO - 2025-06-26 14:52:28 --> Email Class Initialized
DEBUG - 2025-06-26 14:52:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:52:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:52:28 --> Controller Class Initialized
INFO - 2025-06-26 14:52:28 --> Helper loaded: form_helper
INFO - 2025-06-26 14:52:28 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:52:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:52:28 --> Database Driver Class Initialized
INFO - 2025-06-26 14:52:28 --> Email Class Initialized
DEBUG - 2025-06-26 14:52:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:52:28 --> Model "Crud" initialized
INFO - 2025-06-26 14:52:28 --> Final output sent to browser
DEBUG - 2025-06-26 14:52:28 --> Total execution time: 0.0234
INFO - 2025-06-26 14:52:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:52:28 --> Controller Class Initialized
INFO - 2025-06-26 14:52:28 --> Helper loaded: form_helper
INFO - 2025-06-26 14:52:28 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:52:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:52:28 --> Database Driver Class Initialized
INFO - 2025-06-26 14:52:28 --> Model "Crud" initialized
INFO - 2025-06-26 14:52:28 --> Final output sent to browser
DEBUG - 2025-06-26 14:52:28 --> Total execution time: 0.0402
INFO - 2025-06-26 14:52:28 --> Config Class Initialized
INFO - 2025-06-26 14:52:28 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:52:28 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:52:28 --> Utf8 Class Initialized
INFO - 2025-06-26 14:52:28 --> URI Class Initialized
INFO - 2025-06-26 14:52:28 --> Router Class Initialized
INFO - 2025-06-26 14:52:28 --> Output Class Initialized
INFO - 2025-06-26 14:52:28 --> Security Class Initialized
DEBUG - 2025-06-26 14:52:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:52:28 --> Input Class Initialized
INFO - 2025-06-26 14:52:28 --> Language Class Initialized
INFO - 2025-06-26 14:52:28 --> Loader Class Initialized
INFO - 2025-06-26 14:52:28 --> Helper loaded: url_helper
INFO - 2025-06-26 14:52:28 --> Helper loaded: file_helper
INFO - 2025-06-26 14:52:28 --> Database Driver Class Initialized
INFO - 2025-06-26 14:52:28 --> Email Class Initialized
DEBUG - 2025-06-26 14:52:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:52:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:52:28 --> Controller Class Initialized
INFO - 2025-06-26 14:52:28 --> Model "MasterFeedbackModel" initialized
INFO - 2025-06-26 14:52:28 --> Helper loaded: form_helper
INFO - 2025-06-26 14:52:28 --> Form Validation Class Initialized
INFO - 2025-06-26 14:52:28 --> Database Driver Class Initialized
INFO - 2025-06-26 14:52:28 --> Model "Crud" initialized
DEBUG - 2025-06-26 14:52:28 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 14:52:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:52:28 --> Final output sent to browser
DEBUG - 2025-06-26 14:52:28 --> Total execution time: 0.0258
INFO - 2025-06-26 14:52:36 --> Config Class Initialized
INFO - 2025-06-26 14:52:36 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:52:36 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:52:36 --> Utf8 Class Initialized
INFO - 2025-06-26 14:52:36 --> URI Class Initialized
INFO - 2025-06-26 14:52:36 --> Router Class Initialized
INFO - 2025-06-26 14:52:36 --> Output Class Initialized
INFO - 2025-06-26 14:52:36 --> Security Class Initialized
DEBUG - 2025-06-26 14:52:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:52:36 --> Input Class Initialized
INFO - 2025-06-26 14:52:36 --> Language Class Initialized
INFO - 2025-06-26 14:52:36 --> Loader Class Initialized
INFO - 2025-06-26 14:52:36 --> Helper loaded: url_helper
INFO - 2025-06-26 14:52:36 --> Helper loaded: file_helper
INFO - 2025-06-26 14:52:36 --> Database Driver Class Initialized
INFO - 2025-06-26 14:52:36 --> Email Class Initialized
DEBUG - 2025-06-26 14:52:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:52:36 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:52:36 --> Controller Class Initialized
INFO - 2025-06-26 14:52:36 --> Model "MasterFeedbackModel" initialized
INFO - 2025-06-26 14:52:36 --> Helper loaded: form_helper
INFO - 2025-06-26 14:52:36 --> Form Validation Class Initialized
INFO - 2025-06-26 14:52:36 --> Database Driver Class Initialized
INFO - 2025-06-26 14:52:36 --> Model "Crud" initialized
DEBUG - 2025-06-26 14:52:36 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 14:52:36 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:52:36 --> Final output sent to browser
DEBUG - 2025-06-26 14:52:36 --> Total execution time: 0.0321
INFO - 2025-06-26 14:52:37 --> Config Class Initialized
INFO - 2025-06-26 14:52:37 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:52:37 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:52:37 --> Utf8 Class Initialized
INFO - 2025-06-26 14:52:37 --> URI Class Initialized
INFO - 2025-06-26 14:52:37 --> Router Class Initialized
INFO - 2025-06-26 14:52:37 --> Output Class Initialized
INFO - 2025-06-26 14:52:37 --> Security Class Initialized
DEBUG - 2025-06-26 14:52:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:52:37 --> Input Class Initialized
INFO - 2025-06-26 14:52:37 --> Language Class Initialized
INFO - 2025-06-26 14:52:37 --> Loader Class Initialized
INFO - 2025-06-26 14:52:37 --> Helper loaded: url_helper
INFO - 2025-06-26 14:52:37 --> Helper loaded: file_helper
INFO - 2025-06-26 14:52:37 --> Database Driver Class Initialized
INFO - 2025-06-26 14:52:37 --> Config Class Initialized
INFO - 2025-06-26 14:52:37 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:52:37 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:52:37 --> Utf8 Class Initialized
INFO - 2025-06-26 14:52:37 --> URI Class Initialized
INFO - 2025-06-26 14:52:37 --> Router Class Initialized
INFO - 2025-06-26 14:52:37 --> Output Class Initialized
INFO - 2025-06-26 14:52:37 --> Security Class Initialized
DEBUG - 2025-06-26 14:52:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:52:37 --> Input Class Initialized
INFO - 2025-06-26 14:52:37 --> Language Class Initialized
INFO - 2025-06-26 14:52:37 --> Email Class Initialized
INFO - 2025-06-26 14:52:37 --> Loader Class Initialized
DEBUG - 2025-06-26 14:52:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:52:37 --> Helper loaded: url_helper
INFO - 2025-06-26 14:52:37 --> Helper loaded: file_helper
INFO - 2025-06-26 14:52:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:52:37 --> Controller Class Initialized
INFO - 2025-06-26 14:52:37 --> Database Driver Class Initialized
INFO - 2025-06-26 14:52:37 --> Helper loaded: form_helper
INFO - 2025-06-26 14:52:37 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:52:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:52:37 --> Database Driver Class Initialized
INFO - 2025-06-26 14:52:37 --> Email Class Initialized
DEBUG - 2025-06-26 14:52:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:52:37 --> Model "Crud" initialized
INFO - 2025-06-26 14:52:37 --> Final output sent to browser
DEBUG - 2025-06-26 14:52:37 --> Total execution time: 0.0182
INFO - 2025-06-26 14:52:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:52:37 --> Controller Class Initialized
INFO - 2025-06-26 14:52:37 --> Helper loaded: form_helper
INFO - 2025-06-26 14:52:37 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:52:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:52:37 --> Database Driver Class Initialized
INFO - 2025-06-26 14:52:37 --> Model "Crud" initialized
INFO - 2025-06-26 14:52:37 --> Final output sent to browser
DEBUG - 2025-06-26 14:52:37 --> Total execution time: 0.0321
INFO - 2025-06-26 14:52:48 --> Config Class Initialized
INFO - 2025-06-26 14:52:48 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:52:48 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:52:48 --> Utf8 Class Initialized
INFO - 2025-06-26 14:52:48 --> URI Class Initialized
INFO - 2025-06-26 14:52:48 --> Router Class Initialized
INFO - 2025-06-26 14:52:48 --> Output Class Initialized
INFO - 2025-06-26 14:52:48 --> Security Class Initialized
DEBUG - 2025-06-26 14:52:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:52:48 --> Input Class Initialized
INFO - 2025-06-26 14:52:48 --> Language Class Initialized
INFO - 2025-06-26 14:52:48 --> Config Class Initialized
INFO - 2025-06-26 14:52:48 --> Hooks Class Initialized
INFO - 2025-06-26 14:52:48 --> Loader Class Initialized
DEBUG - 2025-06-26 14:52:48 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:52:48 --> Helper loaded: url_helper
INFO - 2025-06-26 14:52:48 --> Helper loaded: file_helper
INFO - 2025-06-26 14:52:48 --> Utf8 Class Initialized
INFO - 2025-06-26 14:52:48 --> URI Class Initialized
INFO - 2025-06-26 14:52:48 --> Database Driver Class Initialized
INFO - 2025-06-26 14:52:48 --> Router Class Initialized
INFO - 2025-06-26 14:52:48 --> Output Class Initialized
INFO - 2025-06-26 14:52:48 --> Security Class Initialized
DEBUG - 2025-06-26 14:52:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:52:48 --> Input Class Initialized
INFO - 2025-06-26 14:52:48 --> Language Class Initialized
INFO - 2025-06-26 14:52:48 --> Loader Class Initialized
INFO - 2025-06-26 14:52:48 --> Helper loaded: url_helper
INFO - 2025-06-26 14:52:48 --> Helper loaded: file_helper
INFO - 2025-06-26 14:52:48 --> Database Driver Class Initialized
INFO - 2025-06-26 14:52:48 --> Email Class Initialized
DEBUG - 2025-06-26 14:52:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:52:48 --> Email Class Initialized
INFO - 2025-06-26 14:52:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:52:48 --> Controller Class Initialized
DEBUG - 2025-06-26 14:52:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:52:48 --> Helper loaded: form_helper
INFO - 2025-06-26 14:52:48 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:52:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:52:48 --> Database Driver Class Initialized
INFO - 2025-06-26 14:52:48 --> Model "Crud" initialized
INFO - 2025-06-26 14:52:48 --> Final output sent to browser
DEBUG - 2025-06-26 14:52:48 --> Total execution time: 0.0186
INFO - 2025-06-26 14:52:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:52:48 --> Controller Class Initialized
INFO - 2025-06-26 14:52:48 --> Helper loaded: form_helper
INFO - 2025-06-26 14:52:48 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:52:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:52:48 --> Database Driver Class Initialized
INFO - 2025-06-26 14:52:48 --> Model "Crud" initialized
INFO - 2025-06-26 14:52:48 --> Final output sent to browser
DEBUG - 2025-06-26 14:52:48 --> Total execution time: 0.0353
INFO - 2025-06-26 14:52:58 --> Config Class Initialized
INFO - 2025-06-26 14:52:58 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:52:58 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:52:58 --> Config Class Initialized
INFO - 2025-06-26 14:52:58 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:52:58 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:52:58 --> Utf8 Class Initialized
INFO - 2025-06-26 14:52:58 --> Utf8 Class Initialized
INFO - 2025-06-26 14:52:58 --> URI Class Initialized
INFO - 2025-06-26 14:52:58 --> URI Class Initialized
INFO - 2025-06-26 14:52:58 --> Router Class Initialized
INFO - 2025-06-26 14:52:58 --> Router Class Initialized
INFO - 2025-06-26 14:52:58 --> Output Class Initialized
INFO - 2025-06-26 14:52:58 --> Output Class Initialized
INFO - 2025-06-26 14:52:58 --> Security Class Initialized
INFO - 2025-06-26 14:52:58 --> Security Class Initialized
DEBUG - 2025-06-26 14:52:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-26 14:52:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:52:58 --> Input Class Initialized
INFO - 2025-06-26 14:52:58 --> Input Class Initialized
INFO - 2025-06-26 14:52:58 --> Language Class Initialized
INFO - 2025-06-26 14:52:58 --> Language Class Initialized
INFO - 2025-06-26 14:52:58 --> Loader Class Initialized
INFO - 2025-06-26 14:52:58 --> Loader Class Initialized
INFO - 2025-06-26 14:52:58 --> Helper loaded: url_helper
INFO - 2025-06-26 14:52:58 --> Helper loaded: url_helper
INFO - 2025-06-26 14:52:58 --> Helper loaded: file_helper
INFO - 2025-06-26 14:52:58 --> Helper loaded: file_helper
INFO - 2025-06-26 14:52:58 --> Database Driver Class Initialized
INFO - 2025-06-26 14:52:58 --> Database Driver Class Initialized
INFO - 2025-06-26 14:52:58 --> Email Class Initialized
INFO - 2025-06-26 14:52:58 --> Email Class Initialized
DEBUG - 2025-06-26 14:52:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-26 14:52:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:52:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:52:58 --> Controller Class Initialized
INFO - 2025-06-26 14:52:58 --> Helper loaded: form_helper
INFO - 2025-06-26 14:52:58 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:52:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:52:58 --> Database Driver Class Initialized
INFO - 2025-06-26 14:52:58 --> Model "Crud" initialized
INFO - 2025-06-26 14:52:58 --> Final output sent to browser
DEBUG - 2025-06-26 14:52:58 --> Total execution time: 0.0211
INFO - 2025-06-26 14:52:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:52:58 --> Controller Class Initialized
INFO - 2025-06-26 14:52:58 --> Helper loaded: form_helper
INFO - 2025-06-26 14:52:58 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:52:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:52:58 --> Database Driver Class Initialized
INFO - 2025-06-26 14:52:58 --> Model "Crud" initialized
INFO - 2025-06-26 14:52:58 --> Final output sent to browser
DEBUG - 2025-06-26 14:52:58 --> Total execution time: 0.0407
INFO - 2025-06-26 14:53:13 --> Config Class Initialized
INFO - 2025-06-26 14:53:13 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:53:13 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:53:13 --> Utf8 Class Initialized
INFO - 2025-06-26 14:53:13 --> URI Class Initialized
INFO - 2025-06-26 14:53:13 --> Router Class Initialized
INFO - 2025-06-26 14:53:13 --> Output Class Initialized
INFO - 2025-06-26 14:53:13 --> Security Class Initialized
DEBUG - 2025-06-26 14:53:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:53:13 --> Input Class Initialized
INFO - 2025-06-26 14:53:13 --> Language Class Initialized
INFO - 2025-06-26 14:53:13 --> Loader Class Initialized
INFO - 2025-06-26 14:53:13 --> Helper loaded: url_helper
INFO - 2025-06-26 14:53:13 --> Config Class Initialized
INFO - 2025-06-26 14:53:13 --> Helper loaded: file_helper
INFO - 2025-06-26 14:53:13 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:53:13 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:53:13 --> Database Driver Class Initialized
INFO - 2025-06-26 14:53:13 --> Utf8 Class Initialized
INFO - 2025-06-26 14:53:13 --> URI Class Initialized
INFO - 2025-06-26 14:53:13 --> Router Class Initialized
INFO - 2025-06-26 14:53:13 --> Output Class Initialized
INFO - 2025-06-26 14:53:13 --> Security Class Initialized
DEBUG - 2025-06-26 14:53:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:53:13 --> Input Class Initialized
INFO - 2025-06-26 14:53:13 --> Language Class Initialized
INFO - 2025-06-26 14:53:13 --> Loader Class Initialized
INFO - 2025-06-26 14:53:13 --> Helper loaded: url_helper
INFO - 2025-06-26 14:53:13 --> Helper loaded: file_helper
INFO - 2025-06-26 14:53:13 --> Database Driver Class Initialized
INFO - 2025-06-26 14:53:13 --> Email Class Initialized
DEBUG - 2025-06-26 14:53:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:53:13 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:53:13 --> Controller Class Initialized
INFO - 2025-06-26 14:53:13 --> Helper loaded: form_helper
INFO - 2025-06-26 14:53:13 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:53:13 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:53:13 --> Database Driver Class Initialized
INFO - 2025-06-26 14:53:13 --> Email Class Initialized
DEBUG - 2025-06-26 14:53:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:53:13 --> Model "Crud" initialized
INFO - 2025-06-26 14:53:13 --> Final output sent to browser
DEBUG - 2025-06-26 14:53:13 --> Total execution time: 0.0276
INFO - 2025-06-26 14:53:13 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:53:13 --> Controller Class Initialized
INFO - 2025-06-26 14:53:13 --> Helper loaded: form_helper
INFO - 2025-06-26 14:53:13 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:53:13 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:53:13 --> Database Driver Class Initialized
INFO - 2025-06-26 14:53:13 --> Model "Crud" initialized
INFO - 2025-06-26 14:53:13 --> Final output sent to browser
DEBUG - 2025-06-26 14:53:13 --> Total execution time: 0.0409
INFO - 2025-06-26 14:53:17 --> Config Class Initialized
INFO - 2025-06-26 14:53:17 --> Hooks Class Initialized
INFO - 2025-06-26 14:53:17 --> Config Class Initialized
DEBUG - 2025-06-26 14:53:17 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:53:17 --> Utf8 Class Initialized
INFO - 2025-06-26 14:53:17 --> Hooks Class Initialized
INFO - 2025-06-26 14:53:17 --> URI Class Initialized
DEBUG - 2025-06-26 14:53:17 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:53:17 --> Utf8 Class Initialized
INFO - 2025-06-26 14:53:17 --> Router Class Initialized
INFO - 2025-06-26 14:53:17 --> URI Class Initialized
INFO - 2025-06-26 14:53:17 --> Output Class Initialized
INFO - 2025-06-26 14:53:17 --> Security Class Initialized
INFO - 2025-06-26 14:53:17 --> Router Class Initialized
DEBUG - 2025-06-26 14:53:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:53:17 --> Output Class Initialized
INFO - 2025-06-26 14:53:17 --> Input Class Initialized
INFO - 2025-06-26 14:53:17 --> Security Class Initialized
DEBUG - 2025-06-26 14:53:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:53:17 --> Input Class Initialized
INFO - 2025-06-26 14:53:17 --> Language Class Initialized
INFO - 2025-06-26 14:53:17 --> Language Class Initialized
INFO - 2025-06-26 14:53:17 --> Loader Class Initialized
INFO - 2025-06-26 14:53:17 --> Helper loaded: url_helper
INFO - 2025-06-26 14:53:17 --> Helper loaded: file_helper
INFO - 2025-06-26 14:53:17 --> Loader Class Initialized
INFO - 2025-06-26 14:53:17 --> Helper loaded: url_helper
INFO - 2025-06-26 14:53:17 --> Database Driver Class Initialized
INFO - 2025-06-26 14:53:17 --> Helper loaded: file_helper
INFO - 2025-06-26 14:53:17 --> Database Driver Class Initialized
INFO - 2025-06-26 14:53:17 --> Email Class Initialized
INFO - 2025-06-26 14:53:17 --> Email Class Initialized
DEBUG - 2025-06-26 14:53:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-26 14:53:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:53:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:53:17 --> Controller Class Initialized
INFO - 2025-06-26 14:53:17 --> Helper loaded: form_helper
INFO - 2025-06-26 14:53:17 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:53:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:53:17 --> Database Driver Class Initialized
INFO - 2025-06-26 14:53:17 --> Model "Crud" initialized
INFO - 2025-06-26 14:53:17 --> Final output sent to browser
DEBUG - 2025-06-26 14:53:17 --> Total execution time: 0.0162
INFO - 2025-06-26 14:53:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:53:17 --> Controller Class Initialized
INFO - 2025-06-26 14:53:17 --> Helper loaded: form_helper
INFO - 2025-06-26 14:53:17 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:53:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:53:17 --> Database Driver Class Initialized
INFO - 2025-06-26 14:53:17 --> Model "Crud" initialized
INFO - 2025-06-26 14:53:17 --> Final output sent to browser
DEBUG - 2025-06-26 14:53:17 --> Total execution time: 0.0295
INFO - 2025-06-26 14:53:28 --> Config Class Initialized
INFO - 2025-06-26 14:53:28 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:53:28 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:53:28 --> Utf8 Class Initialized
INFO - 2025-06-26 14:53:28 --> URI Class Initialized
INFO - 2025-06-26 14:53:28 --> Router Class Initialized
INFO - 2025-06-26 14:53:28 --> Output Class Initialized
INFO - 2025-06-26 14:53:28 --> Security Class Initialized
INFO - 2025-06-26 14:53:28 --> Config Class Initialized
DEBUG - 2025-06-26 14:53:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:53:28 --> Hooks Class Initialized
INFO - 2025-06-26 14:53:28 --> Input Class Initialized
INFO - 2025-06-26 14:53:28 --> Language Class Initialized
DEBUG - 2025-06-26 14:53:28 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:53:28 --> Utf8 Class Initialized
INFO - 2025-06-26 14:53:28 --> Loader Class Initialized
INFO - 2025-06-26 14:53:28 --> URI Class Initialized
INFO - 2025-06-26 14:53:28 --> Helper loaded: url_helper
INFO - 2025-06-26 14:53:28 --> Helper loaded: file_helper
INFO - 2025-06-26 14:53:28 --> Router Class Initialized
INFO - 2025-06-26 14:53:28 --> Output Class Initialized
INFO - 2025-06-26 14:53:28 --> Database Driver Class Initialized
INFO - 2025-06-26 14:53:28 --> Security Class Initialized
DEBUG - 2025-06-26 14:53:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:53:28 --> Input Class Initialized
INFO - 2025-06-26 14:53:28 --> Language Class Initialized
INFO - 2025-06-26 14:53:28 --> Loader Class Initialized
INFO - 2025-06-26 14:53:28 --> Helper loaded: url_helper
INFO - 2025-06-26 14:53:28 --> Helper loaded: file_helper
INFO - 2025-06-26 14:53:28 --> Database Driver Class Initialized
INFO - 2025-06-26 14:53:28 --> Email Class Initialized
DEBUG - 2025-06-26 14:53:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:53:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:53:28 --> Controller Class Initialized
INFO - 2025-06-26 14:53:28 --> Helper loaded: form_helper
INFO - 2025-06-26 14:53:28 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:53:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:53:28 --> Database Driver Class Initialized
INFO - 2025-06-26 14:53:28 --> Email Class Initialized
DEBUG - 2025-06-26 14:53:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:53:28 --> Model "Crud" initialized
INFO - 2025-06-26 14:53:28 --> Final output sent to browser
DEBUG - 2025-06-26 14:53:28 --> Total execution time: 0.0201
INFO - 2025-06-26 14:53:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:53:28 --> Controller Class Initialized
INFO - 2025-06-26 14:53:28 --> Helper loaded: form_helper
INFO - 2025-06-26 14:53:28 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:53:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:53:28 --> Database Driver Class Initialized
INFO - 2025-06-26 14:53:28 --> Model "Crud" initialized
INFO - 2025-06-26 14:53:28 --> Final output sent to browser
DEBUG - 2025-06-26 14:53:28 --> Total execution time: 0.0358
INFO - 2025-06-26 14:53:31 --> Config Class Initialized
INFO - 2025-06-26 14:53:31 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:53:31 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:53:31 --> Utf8 Class Initialized
INFO - 2025-06-26 14:53:31 --> URI Class Initialized
INFO - 2025-06-26 14:53:31 --> Router Class Initialized
INFO - 2025-06-26 14:53:31 --> Output Class Initialized
INFO - 2025-06-26 14:53:31 --> Security Class Initialized
DEBUG - 2025-06-26 14:53:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:53:31 --> Input Class Initialized
INFO - 2025-06-26 14:53:31 --> Language Class Initialized
INFO - 2025-06-26 14:53:31 --> Loader Class Initialized
INFO - 2025-06-26 14:53:31 --> Helper loaded: url_helper
INFO - 2025-06-26 14:53:31 --> Helper loaded: file_helper
INFO - 2025-06-26 14:53:31 --> Database Driver Class Initialized
INFO - 2025-06-26 14:53:31 --> Email Class Initialized
DEBUG - 2025-06-26 14:53:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:53:31 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:53:31 --> Controller Class Initialized
INFO - 2025-06-26 14:53:31 --> Model "MasterFeedbackModel" initialized
INFO - 2025-06-26 14:53:31 --> Helper loaded: form_helper
INFO - 2025-06-26 14:53:31 --> Form Validation Class Initialized
INFO - 2025-06-26 14:53:31 --> Database Driver Class Initialized
INFO - 2025-06-26 14:53:31 --> Model "Crud" initialized
DEBUG - 2025-06-26 14:53:31 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 14:53:31 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:53:31 --> Final output sent to browser
DEBUG - 2025-06-26 14:53:31 --> Total execution time: 0.0201
INFO - 2025-06-26 14:53:38 --> Config Class Initialized
INFO - 2025-06-26 14:53:38 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:53:38 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:53:38 --> Utf8 Class Initialized
INFO - 2025-06-26 14:53:38 --> URI Class Initialized
INFO - 2025-06-26 14:53:38 --> Router Class Initialized
INFO - 2025-06-26 14:53:38 --> Output Class Initialized
INFO - 2025-06-26 14:53:38 --> Security Class Initialized
DEBUG - 2025-06-26 14:53:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:53:38 --> Input Class Initialized
INFO - 2025-06-26 14:53:38 --> Language Class Initialized
INFO - 2025-06-26 14:53:38 --> Config Class Initialized
INFO - 2025-06-26 14:53:38 --> Hooks Class Initialized
INFO - 2025-06-26 14:53:38 --> Loader Class Initialized
DEBUG - 2025-06-26 14:53:38 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:53:38 --> Utf8 Class Initialized
INFO - 2025-06-26 14:53:38 --> Helper loaded: url_helper
INFO - 2025-06-26 14:53:38 --> Helper loaded: file_helper
INFO - 2025-06-26 14:53:38 --> URI Class Initialized
INFO - 2025-06-26 14:53:38 --> Database Driver Class Initialized
INFO - 2025-06-26 14:53:38 --> Router Class Initialized
INFO - 2025-06-26 14:53:38 --> Output Class Initialized
INFO - 2025-06-26 14:53:38 --> Security Class Initialized
DEBUG - 2025-06-26 14:53:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:53:38 --> Input Class Initialized
INFO - 2025-06-26 14:53:38 --> Language Class Initialized
INFO - 2025-06-26 14:53:38 --> Loader Class Initialized
INFO - 2025-06-26 14:53:38 --> Helper loaded: url_helper
INFO - 2025-06-26 14:53:38 --> Helper loaded: file_helper
INFO - 2025-06-26 14:53:38 --> Database Driver Class Initialized
INFO - 2025-06-26 14:53:38 --> Email Class Initialized
DEBUG - 2025-06-26 14:53:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:53:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:53:38 --> Controller Class Initialized
INFO - 2025-06-26 14:53:38 --> Helper loaded: form_helper
INFO - 2025-06-26 14:53:38 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:53:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:53:38 --> Database Driver Class Initialized
INFO - 2025-06-26 14:53:38 --> Email Class Initialized
DEBUG - 2025-06-26 14:53:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:53:38 --> Model "Crud" initialized
INFO - 2025-06-26 14:53:38 --> Final output sent to browser
DEBUG - 2025-06-26 14:53:38 --> Total execution time: 0.0152
INFO - 2025-06-26 14:53:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:53:38 --> Controller Class Initialized
INFO - 2025-06-26 14:53:38 --> Helper loaded: form_helper
INFO - 2025-06-26 14:53:38 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:53:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:53:38 --> Database Driver Class Initialized
INFO - 2025-06-26 14:53:38 --> Model "Crud" initialized
INFO - 2025-06-26 14:53:38 --> Final output sent to browser
DEBUG - 2025-06-26 14:53:38 --> Total execution time: 0.0287
INFO - 2025-06-26 14:53:47 --> Config Class Initialized
INFO - 2025-06-26 14:53:47 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:53:47 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:53:47 --> Utf8 Class Initialized
INFO - 2025-06-26 14:53:47 --> URI Class Initialized
INFO - 2025-06-26 14:53:47 --> Router Class Initialized
INFO - 2025-06-26 14:53:47 --> Output Class Initialized
INFO - 2025-06-26 14:53:47 --> Security Class Initialized
DEBUG - 2025-06-26 14:53:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:53:47 --> Input Class Initialized
INFO - 2025-06-26 14:53:47 --> Language Class Initialized
INFO - 2025-06-26 14:53:47 --> Loader Class Initialized
INFO - 2025-06-26 14:53:47 --> Helper loaded: url_helper
INFO - 2025-06-26 14:53:47 --> Helper loaded: file_helper
INFO - 2025-06-26 14:53:47 --> Database Driver Class Initialized
INFO - 2025-06-26 14:53:47 --> Config Class Initialized
INFO - 2025-06-26 14:53:47 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:53:47 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:53:47 --> Utf8 Class Initialized
INFO - 2025-06-26 14:53:47 --> URI Class Initialized
INFO - 2025-06-26 14:53:47 --> Router Class Initialized
INFO - 2025-06-26 14:53:47 --> Output Class Initialized
INFO - 2025-06-26 14:53:47 --> Security Class Initialized
DEBUG - 2025-06-26 14:53:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:53:47 --> Input Class Initialized
INFO - 2025-06-26 14:53:47 --> Language Class Initialized
INFO - 2025-06-26 14:53:47 --> Loader Class Initialized
INFO - 2025-06-26 14:53:47 --> Helper loaded: url_helper
INFO - 2025-06-26 14:53:47 --> Helper loaded: file_helper
INFO - 2025-06-26 14:53:47 --> Database Driver Class Initialized
INFO - 2025-06-26 14:53:47 --> Email Class Initialized
DEBUG - 2025-06-26 14:53:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:53:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:53:47 --> Controller Class Initialized
INFO - 2025-06-26 14:53:47 --> Helper loaded: form_helper
INFO - 2025-06-26 14:53:47 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:53:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:53:47 --> Database Driver Class Initialized
INFO - 2025-06-26 14:53:47 --> Email Class Initialized
DEBUG - 2025-06-26 14:53:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:53:47 --> Model "Crud" initialized
INFO - 2025-06-26 14:53:47 --> Final output sent to browser
DEBUG - 2025-06-26 14:53:47 --> Total execution time: 0.0145
INFO - 2025-06-26 14:53:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:53:47 --> Controller Class Initialized
INFO - 2025-06-26 14:53:47 --> Helper loaded: form_helper
INFO - 2025-06-26 14:53:47 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:53:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:53:47 --> Database Driver Class Initialized
INFO - 2025-06-26 14:53:47 --> Model "Crud" initialized
INFO - 2025-06-26 14:53:47 --> Final output sent to browser
DEBUG - 2025-06-26 14:53:47 --> Total execution time: 0.0300
INFO - 2025-06-26 14:54:28 --> Config Class Initialized
INFO - 2025-06-26 14:54:28 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:54:28 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:54:28 --> Utf8 Class Initialized
INFO - 2025-06-26 14:54:28 --> URI Class Initialized
INFO - 2025-06-26 14:54:28 --> Router Class Initialized
INFO - 2025-06-26 14:54:28 --> Output Class Initialized
INFO - 2025-06-26 14:54:28 --> Security Class Initialized
DEBUG - 2025-06-26 14:54:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:54:28 --> Input Class Initialized
INFO - 2025-06-26 14:54:28 --> Language Class Initialized
INFO - 2025-06-26 14:54:28 --> Loader Class Initialized
INFO - 2025-06-26 14:54:28 --> Helper loaded: url_helper
INFO - 2025-06-26 14:54:28 --> Helper loaded: file_helper
INFO - 2025-06-26 14:54:28 --> Database Driver Class Initialized
INFO - 2025-06-26 14:54:28 --> Config Class Initialized
INFO - 2025-06-26 14:54:28 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:54:28 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:54:28 --> Utf8 Class Initialized
INFO - 2025-06-26 14:54:28 --> URI Class Initialized
INFO - 2025-06-26 14:54:28 --> Router Class Initialized
INFO - 2025-06-26 14:54:28 --> Output Class Initialized
INFO - 2025-06-26 14:54:28 --> Security Class Initialized
DEBUG - 2025-06-26 14:54:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:54:28 --> Input Class Initialized
INFO - 2025-06-26 14:54:28 --> Language Class Initialized
INFO - 2025-06-26 14:54:28 --> Loader Class Initialized
INFO - 2025-06-26 14:54:28 --> Helper loaded: url_helper
INFO - 2025-06-26 14:54:28 --> Helper loaded: file_helper
INFO - 2025-06-26 14:54:28 --> Database Driver Class Initialized
INFO - 2025-06-26 14:54:28 --> Email Class Initialized
DEBUG - 2025-06-26 14:54:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:54:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:54:28 --> Controller Class Initialized
INFO - 2025-06-26 14:54:28 --> Helper loaded: form_helper
INFO - 2025-06-26 14:54:28 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:54:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:54:28 --> Database Driver Class Initialized
INFO - 2025-06-26 14:54:28 --> Email Class Initialized
DEBUG - 2025-06-26 14:54:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:54:28 --> Model "Crud" initialized
INFO - 2025-06-26 14:54:28 --> Final output sent to browser
DEBUG - 2025-06-26 14:54:28 --> Total execution time: 0.0300
INFO - 2025-06-26 14:54:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:54:28 --> Controller Class Initialized
INFO - 2025-06-26 14:54:28 --> Helper loaded: form_helper
INFO - 2025-06-26 14:54:28 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:54:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:54:28 --> Database Driver Class Initialized
INFO - 2025-06-26 14:54:28 --> Model "Crud" initialized
INFO - 2025-06-26 14:54:28 --> Final output sent to browser
DEBUG - 2025-06-26 14:54:28 --> Total execution time: 0.0566
INFO - 2025-06-26 14:54:38 --> Config Class Initialized
INFO - 2025-06-26 14:54:38 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:54:38 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:54:38 --> Utf8 Class Initialized
INFO - 2025-06-26 14:54:38 --> URI Class Initialized
INFO - 2025-06-26 14:54:38 --> Router Class Initialized
INFO - 2025-06-26 14:54:38 --> Output Class Initialized
INFO - 2025-06-26 14:54:38 --> Security Class Initialized
DEBUG - 2025-06-26 14:54:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:54:38 --> Input Class Initialized
INFO - 2025-06-26 14:54:38 --> Language Class Initialized
INFO - 2025-06-26 14:54:38 --> Config Class Initialized
INFO - 2025-06-26 14:54:38 --> Hooks Class Initialized
INFO - 2025-06-26 14:54:38 --> Loader Class Initialized
DEBUG - 2025-06-26 14:54:38 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:54:38 --> Helper loaded: url_helper
INFO - 2025-06-26 14:54:38 --> Utf8 Class Initialized
INFO - 2025-06-26 14:54:38 --> Helper loaded: file_helper
INFO - 2025-06-26 14:54:38 --> URI Class Initialized
INFO - 2025-06-26 14:54:38 --> Database Driver Class Initialized
INFO - 2025-06-26 14:54:38 --> Router Class Initialized
INFO - 2025-06-26 14:54:38 --> Output Class Initialized
INFO - 2025-06-26 14:54:38 --> Security Class Initialized
DEBUG - 2025-06-26 14:54:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:54:38 --> Input Class Initialized
INFO - 2025-06-26 14:54:38 --> Language Class Initialized
INFO - 2025-06-26 14:54:38 --> Loader Class Initialized
INFO - 2025-06-26 14:54:38 --> Helper loaded: url_helper
INFO - 2025-06-26 14:54:38 --> Helper loaded: file_helper
INFO - 2025-06-26 14:54:38 --> Database Driver Class Initialized
INFO - 2025-06-26 14:54:38 --> Email Class Initialized
DEBUG - 2025-06-26 14:54:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:54:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:54:38 --> Controller Class Initialized
INFO - 2025-06-26 14:54:38 --> Email Class Initialized
INFO - 2025-06-26 14:54:38 --> Helper loaded: form_helper
INFO - 2025-06-26 14:54:38 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:54:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 14:54:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:54:38 --> Database Driver Class Initialized
INFO - 2025-06-26 14:54:38 --> Model "Crud" initialized
INFO - 2025-06-26 14:54:38 --> Final output sent to browser
DEBUG - 2025-06-26 14:54:38 --> Total execution time: 0.0160
INFO - 2025-06-26 14:54:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:54:38 --> Controller Class Initialized
INFO - 2025-06-26 14:54:38 --> Helper loaded: form_helper
INFO - 2025-06-26 14:54:38 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:54:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:54:38 --> Database Driver Class Initialized
INFO - 2025-06-26 14:54:38 --> Model "Crud" initialized
INFO - 2025-06-26 14:54:38 --> Final output sent to browser
DEBUG - 2025-06-26 14:54:38 --> Total execution time: 0.0299
INFO - 2025-06-26 14:54:54 --> Config Class Initialized
INFO - 2025-06-26 14:54:54 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:54:54 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:54:54 --> Utf8 Class Initialized
INFO - 2025-06-26 14:54:54 --> Config Class Initialized
INFO - 2025-06-26 14:54:54 --> URI Class Initialized
INFO - 2025-06-26 14:54:54 --> Hooks Class Initialized
INFO - 2025-06-26 14:54:54 --> Router Class Initialized
INFO - 2025-06-26 14:54:54 --> Output Class Initialized
INFO - 2025-06-26 14:54:54 --> Security Class Initialized
DEBUG - 2025-06-26 14:54:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:54:54 --> Input Class Initialized
INFO - 2025-06-26 14:54:54 --> Language Class Initialized
INFO - 2025-06-26 14:54:54 --> Loader Class Initialized
INFO - 2025-06-26 14:54:54 --> Helper loaded: url_helper
INFO - 2025-06-26 14:54:54 --> Helper loaded: file_helper
INFO - 2025-06-26 14:54:54 --> Database Driver Class Initialized
DEBUG - 2025-06-26 14:54:54 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:54:54 --> Utf8 Class Initialized
INFO - 2025-06-26 14:54:54 --> URI Class Initialized
INFO - 2025-06-26 14:54:54 --> Router Class Initialized
INFO - 2025-06-26 14:54:54 --> Email Class Initialized
INFO - 2025-06-26 14:54:54 --> Output Class Initialized
INFO - 2025-06-26 14:54:54 --> Security Class Initialized
DEBUG - 2025-06-26 14:54:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-26 14:54:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:54:54 --> Input Class Initialized
INFO - 2025-06-26 14:54:54 --> Language Class Initialized
INFO - 2025-06-26 14:54:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:54:54 --> Controller Class Initialized
INFO - 2025-06-26 14:54:54 --> Loader Class Initialized
INFO - 2025-06-26 14:54:54 --> Helper loaded: form_helper
INFO - 2025-06-26 14:54:54 --> Helper loaded: url_helper
INFO - 2025-06-26 14:54:54 --> Form Validation Class Initialized
INFO - 2025-06-26 14:54:54 --> Helper loaded: file_helper
DEBUG - 2025-06-26 14:54:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:54:54 --> Database Driver Class Initialized
INFO - 2025-06-26 14:54:54 --> Database Driver Class Initialized
INFO - 2025-06-26 14:54:54 --> Email Class Initialized
INFO - 2025-06-26 14:54:54 --> Model "Crud" initialized
DEBUG - 2025-06-26 14:54:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:54:54 --> Final output sent to browser
DEBUG - 2025-06-26 14:54:54 --> Total execution time: 0.0258
INFO - 2025-06-26 14:54:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:54:54 --> Controller Class Initialized
INFO - 2025-06-26 14:54:54 --> Helper loaded: form_helper
INFO - 2025-06-26 14:54:54 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:54:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:54:54 --> Database Driver Class Initialized
INFO - 2025-06-26 14:54:54 --> Model "Crud" initialized
INFO - 2025-06-26 14:54:54 --> Final output sent to browser
DEBUG - 2025-06-26 14:54:54 --> Total execution time: 0.0428
INFO - 2025-06-26 14:54:55 --> Config Class Initialized
INFO - 2025-06-26 14:54:55 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:54:55 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:54:55 --> Utf8 Class Initialized
INFO - 2025-06-26 14:54:55 --> URI Class Initialized
INFO - 2025-06-26 14:54:55 --> Router Class Initialized
INFO - 2025-06-26 14:54:55 --> Output Class Initialized
INFO - 2025-06-26 14:54:55 --> Security Class Initialized
DEBUG - 2025-06-26 14:54:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:54:55 --> Input Class Initialized
INFO - 2025-06-26 14:54:55 --> Language Class Initialized
INFO - 2025-06-26 14:54:55 --> Loader Class Initialized
INFO - 2025-06-26 14:54:55 --> Helper loaded: url_helper
INFO - 2025-06-26 14:54:55 --> Helper loaded: file_helper
INFO - 2025-06-26 14:54:55 --> Database Driver Class Initialized
INFO - 2025-06-26 14:54:55 --> Email Class Initialized
DEBUG - 2025-06-26 14:54:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:54:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:54:55 --> Controller Class Initialized
INFO - 2025-06-26 14:54:55 --> Model "MasterFeedbackModel" initialized
INFO - 2025-06-26 14:54:55 --> Helper loaded: form_helper
INFO - 2025-06-26 14:54:55 --> Form Validation Class Initialized
INFO - 2025-06-26 14:54:55 --> Database Driver Class Initialized
INFO - 2025-06-26 14:54:55 --> Model "Crud" initialized
DEBUG - 2025-06-26 14:54:55 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 14:54:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:54:55 --> Final output sent to browser
DEBUG - 2025-06-26 14:54:55 --> Total execution time: 0.0199
INFO - 2025-06-26 14:54:55 --> Config Class Initialized
INFO - 2025-06-26 14:54:55 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:54:55 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:54:55 --> Utf8 Class Initialized
INFO - 2025-06-26 14:54:55 --> URI Class Initialized
INFO - 2025-06-26 14:54:55 --> Router Class Initialized
INFO - 2025-06-26 14:54:55 --> Output Class Initialized
INFO - 2025-06-26 14:54:55 --> Security Class Initialized
DEBUG - 2025-06-26 14:54:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:54:55 --> Input Class Initialized
INFO - 2025-06-26 14:54:55 --> Language Class Initialized
INFO - 2025-06-26 14:54:55 --> Loader Class Initialized
INFO - 2025-06-26 14:54:55 --> Helper loaded: url_helper
INFO - 2025-06-26 14:54:55 --> Helper loaded: file_helper
INFO - 2025-06-26 14:54:55 --> Database Driver Class Initialized
INFO - 2025-06-26 14:54:55 --> Email Class Initialized
DEBUG - 2025-06-26 14:54:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:54:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:54:55 --> Controller Class Initialized
INFO - 2025-06-26 14:54:55 --> Model "MasterFeedbackModel" initialized
INFO - 2025-06-26 14:54:55 --> Helper loaded: form_helper
INFO - 2025-06-26 14:54:55 --> Form Validation Class Initialized
INFO - 2025-06-26 14:54:55 --> Database Driver Class Initialized
INFO - 2025-06-26 14:54:55 --> Model "Crud" initialized
DEBUG - 2025-06-26 14:54:55 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 14:54:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:54:55 --> Final output sent to browser
DEBUG - 2025-06-26 14:54:55 --> Total execution time: 0.0118
INFO - 2025-06-26 14:54:57 --> Config Class Initialized
INFO - 2025-06-26 14:54:57 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:54:57 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:54:57 --> Utf8 Class Initialized
INFO - 2025-06-26 14:54:57 --> URI Class Initialized
INFO - 2025-06-26 14:54:57 --> Config Class Initialized
INFO - 2025-06-26 14:54:57 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:54:57 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:54:57 --> Utf8 Class Initialized
INFO - 2025-06-26 14:54:57 --> Router Class Initialized
INFO - 2025-06-26 14:54:57 --> URI Class Initialized
INFO - 2025-06-26 14:54:57 --> Output Class Initialized
INFO - 2025-06-26 14:54:57 --> Router Class Initialized
INFO - 2025-06-26 14:54:57 --> Security Class Initialized
INFO - 2025-06-26 14:54:57 --> Output Class Initialized
DEBUG - 2025-06-26 14:54:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:54:57 --> Security Class Initialized
DEBUG - 2025-06-26 14:54:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:54:57 --> Input Class Initialized
INFO - 2025-06-26 14:54:57 --> Language Class Initialized
INFO - 2025-06-26 14:54:57 --> Input Class Initialized
INFO - 2025-06-26 14:54:57 --> Loader Class Initialized
INFO - 2025-06-26 14:54:57 --> Language Class Initialized
INFO - 2025-06-26 14:54:57 --> Helper loaded: url_helper
INFO - 2025-06-26 14:54:57 --> Helper loaded: file_helper
INFO - 2025-06-26 14:54:57 --> Loader Class Initialized
INFO - 2025-06-26 14:54:57 --> Helper loaded: url_helper
INFO - 2025-06-26 14:54:57 --> Database Driver Class Initialized
INFO - 2025-06-26 14:54:57 --> Helper loaded: file_helper
INFO - 2025-06-26 14:54:57 --> Database Driver Class Initialized
INFO - 2025-06-26 14:54:57 --> Email Class Initialized
DEBUG - 2025-06-26 14:54:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:54:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:54:57 --> Controller Class Initialized
INFO - 2025-06-26 14:54:57 --> Helper loaded: form_helper
INFO - 2025-06-26 14:54:57 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:54:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:54:57 --> Database Driver Class Initialized
INFO - 2025-06-26 14:54:57 --> Email Class Initialized
DEBUG - 2025-06-26 14:54:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:54:57 --> Model "Crud" initialized
INFO - 2025-06-26 14:54:57 --> Final output sent to browser
DEBUG - 2025-06-26 14:54:57 --> Total execution time: 0.0153
INFO - 2025-06-26 14:54:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:54:57 --> Controller Class Initialized
INFO - 2025-06-26 14:54:57 --> Helper loaded: form_helper
INFO - 2025-06-26 14:54:57 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:54:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:54:57 --> Database Driver Class Initialized
INFO - 2025-06-26 14:54:57 --> Model "Crud" initialized
INFO - 2025-06-26 14:54:57 --> Final output sent to browser
DEBUG - 2025-06-26 14:54:57 --> Total execution time: 0.0270
INFO - 2025-06-26 14:55:08 --> Config Class Initialized
INFO - 2025-06-26 14:55:08 --> Hooks Class Initialized
DEBUG - 2025-06-26 14:55:08 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:55:08 --> Utf8 Class Initialized
INFO - 2025-06-26 14:55:08 --> URI Class Initialized
INFO - 2025-06-26 14:55:08 --> Router Class Initialized
INFO - 2025-06-26 14:55:08 --> Output Class Initialized
INFO - 2025-06-26 14:55:08 --> Security Class Initialized
INFO - 2025-06-26 14:55:08 --> Config Class Initialized
DEBUG - 2025-06-26 14:55:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:55:08 --> Hooks Class Initialized
INFO - 2025-06-26 14:55:08 --> Input Class Initialized
DEBUG - 2025-06-26 14:55:08 --> UTF-8 Support Enabled
INFO - 2025-06-26 14:55:08 --> Language Class Initialized
INFO - 2025-06-26 14:55:08 --> Utf8 Class Initialized
INFO - 2025-06-26 14:55:08 --> Loader Class Initialized
INFO - 2025-06-26 14:55:08 --> URI Class Initialized
INFO - 2025-06-26 14:55:08 --> Helper loaded: url_helper
INFO - 2025-06-26 14:55:08 --> Helper loaded: file_helper
INFO - 2025-06-26 14:55:08 --> Router Class Initialized
INFO - 2025-06-26 14:55:08 --> Output Class Initialized
INFO - 2025-06-26 14:55:08 --> Database Driver Class Initialized
INFO - 2025-06-26 14:55:08 --> Security Class Initialized
DEBUG - 2025-06-26 14:55:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 14:55:08 --> Input Class Initialized
INFO - 2025-06-26 14:55:08 --> Language Class Initialized
INFO - 2025-06-26 14:55:08 --> Loader Class Initialized
INFO - 2025-06-26 14:55:08 --> Helper loaded: url_helper
INFO - 2025-06-26 14:55:08 --> Helper loaded: file_helper
INFO - 2025-06-26 14:55:08 --> Database Driver Class Initialized
INFO - 2025-06-26 14:55:08 --> Email Class Initialized
DEBUG - 2025-06-26 14:55:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:55:08 --> Email Class Initialized
INFO - 2025-06-26 14:55:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:55:08 --> Controller Class Initialized
DEBUG - 2025-06-26 14:55:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 14:55:08 --> Helper loaded: form_helper
INFO - 2025-06-26 14:55:08 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:55:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:55:08 --> Database Driver Class Initialized
INFO - 2025-06-26 14:55:08 --> Model "Crud" initialized
INFO - 2025-06-26 14:55:08 --> Final output sent to browser
DEBUG - 2025-06-26 14:55:08 --> Total execution time: 0.0179
INFO - 2025-06-26 14:55:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 14:55:08 --> Controller Class Initialized
INFO - 2025-06-26 14:55:08 --> Helper loaded: form_helper
INFO - 2025-06-26 14:55:08 --> Form Validation Class Initialized
DEBUG - 2025-06-26 14:55:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 14:55:08 --> Database Driver Class Initialized
INFO - 2025-06-26 14:55:08 --> Model "Crud" initialized
INFO - 2025-06-26 14:55:08 --> Final output sent to browser
DEBUG - 2025-06-26 14:55:08 --> Total execution time: 0.0328
INFO - 2025-06-26 15:02:02 --> Config Class Initialized
INFO - 2025-06-26 15:02:02 --> Config Class Initialized
INFO - 2025-06-26 15:02:02 --> Hooks Class Initialized
INFO - 2025-06-26 15:02:02 --> Hooks Class Initialized
DEBUG - 2025-06-26 15:02:02 --> UTF-8 Support Enabled
DEBUG - 2025-06-26 15:02:02 --> UTF-8 Support Enabled
INFO - 2025-06-26 15:02:02 --> Utf8 Class Initialized
INFO - 2025-06-26 15:02:02 --> Utf8 Class Initialized
INFO - 2025-06-26 15:02:02 --> URI Class Initialized
INFO - 2025-06-26 15:02:02 --> URI Class Initialized
INFO - 2025-06-26 15:02:02 --> Router Class Initialized
INFO - 2025-06-26 15:02:02 --> Router Class Initialized
INFO - 2025-06-26 15:02:02 --> Output Class Initialized
INFO - 2025-06-26 15:02:02 --> Output Class Initialized
INFO - 2025-06-26 15:02:02 --> Security Class Initialized
INFO - 2025-06-26 15:02:02 --> Security Class Initialized
DEBUG - 2025-06-26 15:02:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 15:02:02 --> Input Class Initialized
DEBUG - 2025-06-26 15:02:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 15:02:02 --> Input Class Initialized
INFO - 2025-06-26 15:02:02 --> Language Class Initialized
INFO - 2025-06-26 15:02:02 --> Language Class Initialized
INFO - 2025-06-26 15:02:02 --> Loader Class Initialized
INFO - 2025-06-26 15:02:02 --> Loader Class Initialized
INFO - 2025-06-26 15:02:02 --> Helper loaded: url_helper
INFO - 2025-06-26 15:02:02 --> Helper loaded: url_helper
INFO - 2025-06-26 15:02:02 --> Helper loaded: file_helper
INFO - 2025-06-26 15:02:02 --> Helper loaded: file_helper
INFO - 2025-06-26 15:02:02 --> Database Driver Class Initialized
INFO - 2025-06-26 15:02:02 --> Database Driver Class Initialized
INFO - 2025-06-26 15:02:02 --> Email Class Initialized
INFO - 2025-06-26 15:02:02 --> Email Class Initialized
DEBUG - 2025-06-26 15:02:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-26 15:02:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 15:02:02 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 15:02:02 --> Controller Class Initialized
INFO - 2025-06-26 15:02:02 --> Helper loaded: form_helper
INFO - 2025-06-26 15:02:02 --> Form Validation Class Initialized
DEBUG - 2025-06-26 15:02:02 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 15:02:02 --> Database Driver Class Initialized
INFO - 2025-06-26 15:02:02 --> Model "Crud" initialized
INFO - 2025-06-26 15:02:02 --> Final output sent to browser
DEBUG - 2025-06-26 15:02:02 --> Total execution time: 0.3044
INFO - 2025-06-26 15:02:02 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 15:02:02 --> Controller Class Initialized
INFO - 2025-06-26 15:02:02 --> Helper loaded: form_helper
INFO - 2025-06-26 15:02:02 --> Form Validation Class Initialized
DEBUG - 2025-06-26 15:02:02 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 15:02:02 --> Database Driver Class Initialized
INFO - 2025-06-26 15:02:02 --> Model "Crud" initialized
INFO - 2025-06-26 15:02:02 --> Final output sent to browser
DEBUG - 2025-06-26 15:02:02 --> Total execution time: 0.3415
INFO - 2025-06-26 15:02:08 --> Config Class Initialized
INFO - 2025-06-26 15:02:08 --> Hooks Class Initialized
DEBUG - 2025-06-26 15:02:08 --> UTF-8 Support Enabled
INFO - 2025-06-26 15:02:08 --> Utf8 Class Initialized
INFO - 2025-06-26 15:02:08 --> URI Class Initialized
INFO - 2025-06-26 15:02:08 --> Config Class Initialized
INFO - 2025-06-26 15:02:08 --> Hooks Class Initialized
DEBUG - 2025-06-26 15:02:08 --> UTF-8 Support Enabled
INFO - 2025-06-26 15:02:08 --> Utf8 Class Initialized
INFO - 2025-06-26 15:02:08 --> Router Class Initialized
INFO - 2025-06-26 15:02:08 --> Output Class Initialized
INFO - 2025-06-26 15:02:08 --> Security Class Initialized
INFO - 2025-06-26 15:02:08 --> URI Class Initialized
DEBUG - 2025-06-26 15:02:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 15:02:08 --> Input Class Initialized
INFO - 2025-06-26 15:02:08 --> Language Class Initialized
INFO - 2025-06-26 15:02:08 --> Router Class Initialized
INFO - 2025-06-26 15:02:08 --> Output Class Initialized
INFO - 2025-06-26 15:02:08 --> Security Class Initialized
DEBUG - 2025-06-26 15:02:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 15:02:08 --> Input Class Initialized
INFO - 2025-06-26 15:02:08 --> Language Class Initialized
INFO - 2025-06-26 15:02:08 --> Loader Class Initialized
INFO - 2025-06-26 15:02:08 --> Helper loaded: url_helper
INFO - 2025-06-26 15:02:08 --> Helper loaded: file_helper
INFO - 2025-06-26 15:02:08 --> Loader Class Initialized
INFO - 2025-06-26 15:02:08 --> Helper loaded: url_helper
INFO - 2025-06-26 15:02:08 --> Helper loaded: file_helper
INFO - 2025-06-26 15:02:08 --> Database Driver Class Initialized
INFO - 2025-06-26 15:02:08 --> Database Driver Class Initialized
INFO - 2025-06-26 15:02:08 --> Email Class Initialized
INFO - 2025-06-26 15:02:08 --> Email Class Initialized
DEBUG - 2025-06-26 15:02:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-26 15:02:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 15:02:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 15:02:08 --> Controller Class Initialized
INFO - 2025-06-26 15:02:08 --> Helper loaded: form_helper
INFO - 2025-06-26 15:02:08 --> Form Validation Class Initialized
DEBUG - 2025-06-26 15:02:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 15:02:08 --> Database Driver Class Initialized
INFO - 2025-06-26 15:02:08 --> Model "Crud" initialized
INFO - 2025-06-26 15:02:08 --> Final output sent to browser
DEBUG - 2025-06-26 15:02:08 --> Total execution time: 0.1535
INFO - 2025-06-26 15:02:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 15:02:08 --> Controller Class Initialized
INFO - 2025-06-26 15:02:08 --> Helper loaded: form_helper
INFO - 2025-06-26 15:02:08 --> Form Validation Class Initialized
DEBUG - 2025-06-26 15:02:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 15:02:08 --> Database Driver Class Initialized
INFO - 2025-06-26 15:02:08 --> Model "Crud" initialized
INFO - 2025-06-26 15:02:08 --> Final output sent to browser
DEBUG - 2025-06-26 15:02:08 --> Total execution time: 0.2619
INFO - 2025-06-26 15:17:53 --> Config Class Initialized
INFO - 2025-06-26 15:17:53 --> Config Class Initialized
INFO - 2025-06-26 15:17:53 --> Hooks Class Initialized
INFO - 2025-06-26 15:17:53 --> Hooks Class Initialized
DEBUG - 2025-06-26 15:17:53 --> UTF-8 Support Enabled
INFO - 2025-06-26 15:17:53 --> Utf8 Class Initialized
DEBUG - 2025-06-26 15:17:53 --> UTF-8 Support Enabled
INFO - 2025-06-26 15:17:53 --> Utf8 Class Initialized
INFO - 2025-06-26 15:17:53 --> URI Class Initialized
INFO - 2025-06-26 15:17:53 --> URI Class Initialized
INFO - 2025-06-26 15:17:53 --> Router Class Initialized
INFO - 2025-06-26 15:17:53 --> Router Class Initialized
INFO - 2025-06-26 15:17:53 --> Output Class Initialized
INFO - 2025-06-26 15:17:53 --> Output Class Initialized
INFO - 2025-06-26 15:17:53 --> Security Class Initialized
INFO - 2025-06-26 15:17:53 --> Security Class Initialized
DEBUG - 2025-06-26 15:17:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-26 15:17:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 15:17:53 --> Input Class Initialized
INFO - 2025-06-26 15:17:53 --> Input Class Initialized
INFO - 2025-06-26 15:17:53 --> Language Class Initialized
INFO - 2025-06-26 15:17:53 --> Language Class Initialized
INFO - 2025-06-26 15:17:53 --> Loader Class Initialized
INFO - 2025-06-26 15:17:53 --> Loader Class Initialized
INFO - 2025-06-26 15:17:53 --> Helper loaded: url_helper
INFO - 2025-06-26 15:17:53 --> Helper loaded: file_helper
INFO - 2025-06-26 15:17:53 --> Helper loaded: url_helper
INFO - 2025-06-26 15:17:53 --> Helper loaded: file_helper
INFO - 2025-06-26 15:17:53 --> Database Driver Class Initialized
INFO - 2025-06-26 15:17:53 --> Database Driver Class Initialized
INFO - 2025-06-26 15:17:53 --> Email Class Initialized
DEBUG - 2025-06-26 15:17:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 15:17:53 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 15:17:53 --> Controller Class Initialized
INFO - 2025-06-26 15:17:53 --> Helper loaded: form_helper
INFO - 2025-06-26 15:17:53 --> Form Validation Class Initialized
DEBUG - 2025-06-26 15:17:53 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 15:17:53 --> Database Driver Class Initialized
INFO - 2025-06-26 15:17:53 --> Email Class Initialized
DEBUG - 2025-06-26 15:17:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 15:17:53 --> Model "Crud" initialized
INFO - 2025-06-26 15:17:53 --> Final output sent to browser
DEBUG - 2025-06-26 15:17:53 --> Total execution time: 0.0526
INFO - 2025-06-26 15:17:53 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 15:17:53 --> Controller Class Initialized
INFO - 2025-06-26 15:17:53 --> Helper loaded: form_helper
INFO - 2025-06-26 15:17:53 --> Form Validation Class Initialized
DEBUG - 2025-06-26 15:17:53 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 15:17:53 --> Database Driver Class Initialized
INFO - 2025-06-26 15:17:53 --> Model "Crud" initialized
INFO - 2025-06-26 15:17:53 --> Final output sent to browser
DEBUG - 2025-06-26 15:17:53 --> Total execution time: 0.0749
INFO - 2025-06-26 15:17:56 --> Config Class Initialized
INFO - 2025-06-26 15:17:56 --> Hooks Class Initialized
DEBUG - 2025-06-26 15:17:56 --> UTF-8 Support Enabled
INFO - 2025-06-26 15:17:56 --> Utf8 Class Initialized
INFO - 2025-06-26 15:17:56 --> URI Class Initialized
INFO - 2025-06-26 15:17:56 --> Router Class Initialized
INFO - 2025-06-26 15:17:56 --> Output Class Initialized
INFO - 2025-06-26 15:17:56 --> Security Class Initialized
DEBUG - 2025-06-26 15:17:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 15:17:56 --> Input Class Initialized
INFO - 2025-06-26 15:17:56 --> Language Class Initialized
INFO - 2025-06-26 15:17:56 --> Loader Class Initialized
INFO - 2025-06-26 15:17:56 --> Helper loaded: url_helper
INFO - 2025-06-26 15:17:56 --> Helper loaded: file_helper
INFO - 2025-06-26 15:17:56 --> Database Driver Class Initialized
INFO - 2025-06-26 15:17:56 --> Email Class Initialized
DEBUG - 2025-06-26 15:17:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 15:17:56 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 15:17:56 --> Controller Class Initialized
INFO - 2025-06-26 15:17:56 --> Model "CompetenceModel" initialized
INFO - 2025-06-26 15:17:56 --> Helper loaded: form_helper
INFO - 2025-06-26 15:17:56 --> Form Validation Class Initialized
INFO - 2025-06-26 15:17:56 --> Database Driver Class Initialized
INFO - 2025-06-26 15:17:56 --> Model "Crud" initialized
DEBUG - 2025-06-26 15:17:56 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 15:17:56 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 15:17:56 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-26 15:17:56 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/competence.php
INFO - 2025-06-26 15:17:56 --> Final output sent to browser
DEBUG - 2025-06-26 15:17:56 --> Total execution time: 0.0398
INFO - 2025-06-26 15:17:57 --> Config Class Initialized
INFO - 2025-06-26 15:17:57 --> Config Class Initialized
INFO - 2025-06-26 15:17:57 --> Hooks Class Initialized
INFO - 2025-06-26 15:17:57 --> Hooks Class Initialized
DEBUG - 2025-06-26 15:17:57 --> UTF-8 Support Enabled
DEBUG - 2025-06-26 15:17:57 --> UTF-8 Support Enabled
INFO - 2025-06-26 15:17:57 --> Utf8 Class Initialized
INFO - 2025-06-26 15:17:57 --> Utf8 Class Initialized
INFO - 2025-06-26 15:17:57 --> URI Class Initialized
INFO - 2025-06-26 15:17:57 --> URI Class Initialized
INFO - 2025-06-26 15:17:57 --> Router Class Initialized
INFO - 2025-06-26 15:17:57 --> Output Class Initialized
INFO - 2025-06-26 15:17:57 --> Router Class Initialized
INFO - 2025-06-26 15:17:57 --> Security Class Initialized
INFO - 2025-06-26 15:17:57 --> Output Class Initialized
DEBUG - 2025-06-26 15:17:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 15:17:57 --> Security Class Initialized
INFO - 2025-06-26 15:17:57 --> Input Class Initialized
DEBUG - 2025-06-26 15:17:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 15:17:57 --> Input Class Initialized
INFO - 2025-06-26 15:17:57 --> Language Class Initialized
INFO - 2025-06-26 15:17:57 --> Language Class Initialized
INFO - 2025-06-26 15:17:57 --> Loader Class Initialized
INFO - 2025-06-26 15:17:57 --> Loader Class Initialized
INFO - 2025-06-26 15:17:57 --> Helper loaded: url_helper
INFO - 2025-06-26 15:17:57 --> Helper loaded: file_helper
INFO - 2025-06-26 15:17:57 --> Helper loaded: url_helper
INFO - 2025-06-26 15:17:57 --> Helper loaded: file_helper
INFO - 2025-06-26 15:17:57 --> Database Driver Class Initialized
INFO - 2025-06-26 15:17:57 --> Database Driver Class Initialized
INFO - 2025-06-26 15:17:57 --> Email Class Initialized
DEBUG - 2025-06-26 15:17:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 15:17:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 15:17:57 --> Controller Class Initialized
INFO - 2025-06-26 15:17:57 --> Helper loaded: form_helper
INFO - 2025-06-26 15:17:57 --> Form Validation Class Initialized
DEBUG - 2025-06-26 15:17:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 15:17:57 --> Database Driver Class Initialized
INFO - 2025-06-26 15:17:57 --> Email Class Initialized
DEBUG - 2025-06-26 15:17:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 15:17:57 --> Model "Crud" initialized
INFO - 2025-06-26 15:17:57 --> Final output sent to browser
DEBUG - 2025-06-26 15:17:57 --> Total execution time: 0.0313
INFO - 2025-06-26 15:17:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 15:17:57 --> Controller Class Initialized
INFO - 2025-06-26 15:17:57 --> Helper loaded: form_helper
INFO - 2025-06-26 15:17:57 --> Form Validation Class Initialized
DEBUG - 2025-06-26 15:17:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 15:17:57 --> Database Driver Class Initialized
INFO - 2025-06-26 15:17:57 --> Model "Crud" initialized
INFO - 2025-06-26 15:17:58 --> Final output sent to browser
DEBUG - 2025-06-26 15:17:58 --> Total execution time: 0.0546
INFO - 2025-06-26 15:17:58 --> Config Class Initialized
INFO - 2025-06-26 15:17:58 --> Hooks Class Initialized
DEBUG - 2025-06-26 15:17:58 --> UTF-8 Support Enabled
INFO - 2025-06-26 15:17:58 --> Utf8 Class Initialized
INFO - 2025-06-26 15:17:58 --> URI Class Initialized
INFO - 2025-06-26 15:17:58 --> Router Class Initialized
INFO - 2025-06-26 15:17:58 --> Output Class Initialized
INFO - 2025-06-26 15:17:58 --> Security Class Initialized
DEBUG - 2025-06-26 15:17:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 15:17:58 --> Input Class Initialized
INFO - 2025-06-26 15:17:58 --> Language Class Initialized
INFO - 2025-06-26 15:17:58 --> Loader Class Initialized
INFO - 2025-06-26 15:17:58 --> Helper loaded: url_helper
INFO - 2025-06-26 15:17:58 --> Helper loaded: file_helper
INFO - 2025-06-26 15:17:58 --> Database Driver Class Initialized
INFO - 2025-06-26 15:17:58 --> Email Class Initialized
DEBUG - 2025-06-26 15:17:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 15:17:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 15:17:58 --> Controller Class Initialized
INFO - 2025-06-26 15:17:58 --> Helper loaded: form_helper
INFO - 2025-06-26 15:17:58 --> Form Validation Class Initialized
DEBUG - 2025-06-26 15:17:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 15:17:58 --> Database Driver Class Initialized
INFO - 2025-06-26 15:17:58 --> Model "Crud" initialized
INFO - 2025-06-26 15:17:58 --> Final output sent to browser
DEBUG - 2025-06-26 15:17:58 --> Total execution time: 0.0381
INFO - 2025-06-26 15:17:58 --> Config Class Initialized
INFO - 2025-06-26 15:17:58 --> Hooks Class Initialized
DEBUG - 2025-06-26 15:17:58 --> UTF-8 Support Enabled
INFO - 2025-06-26 15:17:58 --> Utf8 Class Initialized
INFO - 2025-06-26 15:17:58 --> URI Class Initialized
INFO - 2025-06-26 15:17:58 --> Router Class Initialized
INFO - 2025-06-26 15:17:58 --> Output Class Initialized
INFO - 2025-06-26 15:17:58 --> Security Class Initialized
DEBUG - 2025-06-26 15:17:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 15:17:58 --> Input Class Initialized
INFO - 2025-06-26 15:17:58 --> Language Class Initialized
INFO - 2025-06-26 15:17:58 --> Loader Class Initialized
INFO - 2025-06-26 15:17:58 --> Helper loaded: url_helper
INFO - 2025-06-26 15:17:58 --> Helper loaded: file_helper
INFO - 2025-06-26 15:17:58 --> Database Driver Class Initialized
INFO - 2025-06-26 15:17:58 --> Email Class Initialized
DEBUG - 2025-06-26 15:17:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 15:17:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 15:17:58 --> Controller Class Initialized
INFO - 2025-06-26 15:17:58 --> Model "CompetenceModel" initialized
INFO - 2025-06-26 15:17:58 --> Helper loaded: form_helper
INFO - 2025-06-26 15:17:58 --> Form Validation Class Initialized
INFO - 2025-06-26 15:17:58 --> Database Driver Class Initialized
INFO - 2025-06-26 15:17:58 --> Model "Crud" initialized
DEBUG - 2025-06-26 15:17:58 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 15:17:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 15:17:58 --> Final output sent to browser
DEBUG - 2025-06-26 15:17:58 --> Total execution time: 0.0258
INFO - 2025-06-26 15:18:06 --> Config Class Initialized
INFO - 2025-06-26 15:18:06 --> Hooks Class Initialized
DEBUG - 2025-06-26 15:18:06 --> UTF-8 Support Enabled
INFO - 2025-06-26 15:18:06 --> Utf8 Class Initialized
INFO - 2025-06-26 15:18:06 --> URI Class Initialized
INFO - 2025-06-26 15:18:06 --> Router Class Initialized
INFO - 2025-06-26 15:18:06 --> Output Class Initialized
INFO - 2025-06-26 15:18:06 --> Security Class Initialized
DEBUG - 2025-06-26 15:18:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 15:18:06 --> Input Class Initialized
INFO - 2025-06-26 15:18:06 --> Language Class Initialized
INFO - 2025-06-26 15:18:06 --> Loader Class Initialized
INFO - 2025-06-26 15:18:06 --> Helper loaded: url_helper
INFO - 2025-06-26 15:18:06 --> Helper loaded: file_helper
INFO - 2025-06-26 15:18:06 --> Database Driver Class Initialized
INFO - 2025-06-26 15:18:06 --> Email Class Initialized
DEBUG - 2025-06-26 15:18:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 15:18:06 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 15:18:06 --> Controller Class Initialized
INFO - 2025-06-26 15:18:06 --> Model "CompetenceModel" initialized
INFO - 2025-06-26 15:18:06 --> Helper loaded: form_helper
INFO - 2025-06-26 15:18:06 --> Form Validation Class Initialized
INFO - 2025-06-26 15:18:06 --> Database Driver Class Initialized
INFO - 2025-06-26 15:18:06 --> Model "Crud" initialized
DEBUG - 2025-06-26 15:18:06 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 15:18:06 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 15:18:06 --> Final output sent to browser
DEBUG - 2025-06-26 15:18:06 --> Total execution time: 0.0390
INFO - 2025-06-26 15:18:06 --> Config Class Initialized
INFO - 2025-06-26 15:18:06 --> Hooks Class Initialized
DEBUG - 2025-06-26 15:18:06 --> UTF-8 Support Enabled
INFO - 2025-06-26 15:18:06 --> Utf8 Class Initialized
INFO - 2025-06-26 15:18:06 --> URI Class Initialized
INFO - 2025-06-26 15:18:06 --> Router Class Initialized
INFO - 2025-06-26 15:18:06 --> Output Class Initialized
INFO - 2025-06-26 15:18:06 --> Security Class Initialized
DEBUG - 2025-06-26 15:18:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 15:18:06 --> Input Class Initialized
INFO - 2025-06-26 15:18:06 --> Language Class Initialized
INFO - 2025-06-26 15:18:06 --> Loader Class Initialized
INFO - 2025-06-26 15:18:06 --> Helper loaded: url_helper
INFO - 2025-06-26 15:18:06 --> Helper loaded: file_helper
INFO - 2025-06-26 15:18:06 --> Database Driver Class Initialized
INFO - 2025-06-26 15:18:06 --> Email Class Initialized
DEBUG - 2025-06-26 15:18:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 15:18:06 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 15:18:06 --> Controller Class Initialized
INFO - 2025-06-26 15:18:06 --> Model "CompetenceModel" initialized
INFO - 2025-06-26 15:18:06 --> Helper loaded: form_helper
INFO - 2025-06-26 15:18:06 --> Form Validation Class Initialized
INFO - 2025-06-26 15:18:06 --> Database Driver Class Initialized
INFO - 2025-06-26 15:18:06 --> Model "Crud" initialized
DEBUG - 2025-06-26 15:18:06 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 15:18:06 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 15:18:06 --> Final output sent to browser
DEBUG - 2025-06-26 15:18:06 --> Total execution time: 0.0205
INFO - 2025-06-26 15:18:07 --> Config Class Initialized
INFO - 2025-06-26 15:18:07 --> Hooks Class Initialized
DEBUG - 2025-06-26 15:18:07 --> UTF-8 Support Enabled
INFO - 2025-06-26 15:18:07 --> Utf8 Class Initialized
INFO - 2025-06-26 15:18:07 --> URI Class Initialized
INFO - 2025-06-26 15:18:07 --> Router Class Initialized
INFO - 2025-06-26 15:18:07 --> Output Class Initialized
INFO - 2025-06-26 15:18:07 --> Security Class Initialized
DEBUG - 2025-06-26 15:18:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 15:18:07 --> Input Class Initialized
INFO - 2025-06-26 15:18:07 --> Language Class Initialized
INFO - 2025-06-26 15:18:07 --> Loader Class Initialized
INFO - 2025-06-26 15:18:07 --> Helper loaded: url_helper
INFO - 2025-06-26 15:18:07 --> Helper loaded: file_helper
INFO - 2025-06-26 15:18:07 --> Database Driver Class Initialized
INFO - 2025-06-26 15:18:07 --> Email Class Initialized
DEBUG - 2025-06-26 15:18:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 15:18:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 15:18:07 --> Controller Class Initialized
INFO - 2025-06-26 15:18:07 --> Helper loaded: form_helper
INFO - 2025-06-26 15:18:07 --> Form Validation Class Initialized
DEBUG - 2025-06-26 15:18:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 15:18:07 --> Database Driver Class Initialized
INFO - 2025-06-26 15:18:07 --> Model "Crud" initialized
INFO - 2025-06-26 15:18:07 --> Config Class Initialized
INFO - 2025-06-26 15:18:07 --> Hooks Class Initialized
DEBUG - 2025-06-26 15:18:07 --> UTF-8 Support Enabled
INFO - 2025-06-26 15:18:07 --> Utf8 Class Initialized
INFO - 2025-06-26 15:18:07 --> URI Class Initialized
INFO - 2025-06-26 15:18:07 --> Router Class Initialized
INFO - 2025-06-26 15:18:07 --> Output Class Initialized
INFO - 2025-06-26 15:18:07 --> Security Class Initialized
DEBUG - 2025-06-26 15:18:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 15:18:07 --> Input Class Initialized
INFO - 2025-06-26 15:18:07 --> Language Class Initialized
INFO - 2025-06-26 15:18:07 --> Loader Class Initialized
INFO - 2025-06-26 15:18:07 --> Helper loaded: url_helper
INFO - 2025-06-26 15:18:07 --> Helper loaded: file_helper
INFO - 2025-06-26 15:18:07 --> Database Driver Class Initialized
INFO - 2025-06-26 15:18:07 --> Email Class Initialized
DEBUG - 2025-06-26 15:18:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 15:18:07 --> Final output sent to browser
DEBUG - 2025-06-26 15:18:07 --> Total execution time: 0.0214
INFO - 2025-06-26 15:18:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 15:18:07 --> Controller Class Initialized
INFO - 2025-06-26 15:18:07 --> Helper loaded: form_helper
INFO - 2025-06-26 15:18:07 --> Form Validation Class Initialized
DEBUG - 2025-06-26 15:18:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 15:18:07 --> Database Driver Class Initialized
INFO - 2025-06-26 15:18:07 --> Model "Crud" initialized
INFO - 2025-06-26 15:18:07 --> Final output sent to browser
DEBUG - 2025-06-26 15:18:07 --> Total execution time: 0.0386
INFO - 2025-06-26 15:18:11 --> Config Class Initialized
INFO - 2025-06-26 15:18:11 --> Hooks Class Initialized
DEBUG - 2025-06-26 15:18:11 --> UTF-8 Support Enabled
INFO - 2025-06-26 15:18:11 --> Utf8 Class Initialized
INFO - 2025-06-26 15:18:11 --> URI Class Initialized
INFO - 2025-06-26 15:18:11 --> Router Class Initialized
INFO - 2025-06-26 15:18:11 --> Output Class Initialized
INFO - 2025-06-26 15:18:11 --> Security Class Initialized
DEBUG - 2025-06-26 15:18:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 15:18:11 --> Input Class Initialized
INFO - 2025-06-26 15:18:11 --> Language Class Initialized
INFO - 2025-06-26 15:18:11 --> Loader Class Initialized
INFO - 2025-06-26 15:18:11 --> Helper loaded: url_helper
INFO - 2025-06-26 15:18:11 --> Helper loaded: file_helper
INFO - 2025-06-26 15:18:11 --> Database Driver Class Initialized
INFO - 2025-06-26 15:18:11 --> Email Class Initialized
DEBUG - 2025-06-26 15:18:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 15:18:11 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 15:18:11 --> Controller Class Initialized
INFO - 2025-06-26 15:18:11 --> Model "CompetenceModel" initialized
INFO - 2025-06-26 15:18:11 --> Helper loaded: form_helper
INFO - 2025-06-26 15:18:11 --> Form Validation Class Initialized
INFO - 2025-06-26 15:18:11 --> Database Driver Class Initialized
INFO - 2025-06-26 15:18:11 --> Model "Crud" initialized
DEBUG - 2025-06-26 15:18:11 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 15:18:11 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 15:18:11 --> Final output sent to browser
DEBUG - 2025-06-26 15:18:11 --> Total execution time: 0.0221
INFO - 2025-06-26 15:18:11 --> Config Class Initialized
INFO - 2025-06-26 15:18:11 --> Hooks Class Initialized
DEBUG - 2025-06-26 15:18:11 --> UTF-8 Support Enabled
INFO - 2025-06-26 15:18:11 --> Utf8 Class Initialized
INFO - 2025-06-26 15:18:11 --> URI Class Initialized
INFO - 2025-06-26 15:18:11 --> Router Class Initialized
INFO - 2025-06-26 15:18:11 --> Output Class Initialized
INFO - 2025-06-26 15:18:11 --> Security Class Initialized
DEBUG - 2025-06-26 15:18:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 15:18:11 --> Input Class Initialized
INFO - 2025-06-26 15:18:11 --> Language Class Initialized
INFO - 2025-06-26 15:18:11 --> Loader Class Initialized
INFO - 2025-06-26 15:18:11 --> Helper loaded: url_helper
INFO - 2025-06-26 15:18:11 --> Helper loaded: file_helper
INFO - 2025-06-26 15:18:11 --> Database Driver Class Initialized
INFO - 2025-06-26 15:18:11 --> Email Class Initialized
DEBUG - 2025-06-26 15:18:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 15:18:11 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 15:18:11 --> Controller Class Initialized
INFO - 2025-06-26 15:18:11 --> Model "CompetenceModel" initialized
INFO - 2025-06-26 15:18:11 --> Helper loaded: form_helper
INFO - 2025-06-26 15:18:11 --> Form Validation Class Initialized
INFO - 2025-06-26 15:18:11 --> Database Driver Class Initialized
INFO - 2025-06-26 15:18:11 --> Model "Crud" initialized
DEBUG - 2025-06-26 15:18:11 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 15:18:11 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 15:18:11 --> Final output sent to browser
DEBUG - 2025-06-26 15:18:11 --> Total execution time: 0.0090
INFO - 2025-06-26 15:18:17 --> Config Class Initialized
INFO - 2025-06-26 15:18:17 --> Hooks Class Initialized
DEBUG - 2025-06-26 15:18:17 --> UTF-8 Support Enabled
INFO - 2025-06-26 15:18:17 --> Utf8 Class Initialized
INFO - 2025-06-26 15:18:17 --> URI Class Initialized
INFO - 2025-06-26 15:18:17 --> Router Class Initialized
INFO - 2025-06-26 15:18:17 --> Output Class Initialized
INFO - 2025-06-26 15:18:17 --> Security Class Initialized
DEBUG - 2025-06-26 15:18:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 15:18:17 --> Input Class Initialized
INFO - 2025-06-26 15:18:17 --> Language Class Initialized
INFO - 2025-06-26 15:18:17 --> Loader Class Initialized
INFO - 2025-06-26 15:18:17 --> Helper loaded: url_helper
INFO - 2025-06-26 15:18:17 --> Helper loaded: file_helper
INFO - 2025-06-26 15:18:17 --> Database Driver Class Initialized
INFO - 2025-06-26 15:18:17 --> Email Class Initialized
DEBUG - 2025-06-26 15:18:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 15:18:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 15:18:17 --> Controller Class Initialized
INFO - 2025-06-26 15:18:17 --> Model "CompetenceModel" initialized
INFO - 2025-06-26 15:18:17 --> Helper loaded: form_helper
INFO - 2025-06-26 15:18:17 --> Form Validation Class Initialized
INFO - 2025-06-26 15:18:17 --> Database Driver Class Initialized
INFO - 2025-06-26 15:18:17 --> Model "Crud" initialized
DEBUG - 2025-06-26 15:18:17 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 15:18:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 15:18:17 --> Final output sent to browser
DEBUG - 2025-06-26 15:18:17 --> Total execution time: 0.0259
INFO - 2025-06-26 15:18:17 --> Config Class Initialized
INFO - 2025-06-26 15:18:17 --> Hooks Class Initialized
DEBUG - 2025-06-26 15:18:17 --> UTF-8 Support Enabled
INFO - 2025-06-26 15:18:17 --> Utf8 Class Initialized
INFO - 2025-06-26 15:18:17 --> URI Class Initialized
INFO - 2025-06-26 15:18:17 --> Router Class Initialized
INFO - 2025-06-26 15:18:17 --> Output Class Initialized
INFO - 2025-06-26 15:18:17 --> Security Class Initialized
DEBUG - 2025-06-26 15:18:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 15:18:17 --> Input Class Initialized
INFO - 2025-06-26 15:18:17 --> Language Class Initialized
INFO - 2025-06-26 15:18:17 --> Loader Class Initialized
INFO - 2025-06-26 15:18:17 --> Helper loaded: url_helper
INFO - 2025-06-26 15:18:17 --> Helper loaded: file_helper
INFO - 2025-06-26 15:18:17 --> Database Driver Class Initialized
INFO - 2025-06-26 15:18:17 --> Email Class Initialized
DEBUG - 2025-06-26 15:18:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 15:18:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 15:18:17 --> Controller Class Initialized
INFO - 2025-06-26 15:18:17 --> Model "CompetenceModel" initialized
INFO - 2025-06-26 15:18:17 --> Helper loaded: form_helper
INFO - 2025-06-26 15:18:17 --> Form Validation Class Initialized
INFO - 2025-06-26 15:18:17 --> Database Driver Class Initialized
INFO - 2025-06-26 15:18:17 --> Model "Crud" initialized
DEBUG - 2025-06-26 15:18:17 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-26 15:18:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 15:18:17 --> Final output sent to browser
DEBUG - 2025-06-26 15:18:17 --> Total execution time: 0.0108
INFO - 2025-06-26 15:18:18 --> Config Class Initialized
INFO - 2025-06-26 15:18:18 --> Hooks Class Initialized
DEBUG - 2025-06-26 15:18:18 --> UTF-8 Support Enabled
INFO - 2025-06-26 15:18:18 --> Utf8 Class Initialized
INFO - 2025-06-26 15:18:18 --> URI Class Initialized
INFO - 2025-06-26 15:18:18 --> Router Class Initialized
INFO - 2025-06-26 15:18:18 --> Output Class Initialized
INFO - 2025-06-26 15:18:18 --> Security Class Initialized
DEBUG - 2025-06-26 15:18:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 15:18:18 --> Input Class Initialized
INFO - 2025-06-26 15:18:18 --> Language Class Initialized
INFO - 2025-06-26 15:18:18 --> Loader Class Initialized
INFO - 2025-06-26 15:18:18 --> Helper loaded: url_helper
INFO - 2025-06-26 15:18:18 --> Helper loaded: file_helper
INFO - 2025-06-26 15:18:18 --> Database Driver Class Initialized
INFO - 2025-06-26 15:18:18 --> Email Class Initialized
DEBUG - 2025-06-26 15:18:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 15:18:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 15:18:18 --> Controller Class Initialized
INFO - 2025-06-26 15:18:18 --> Helper loaded: form_helper
INFO - 2025-06-26 15:18:18 --> Form Validation Class Initialized
DEBUG - 2025-06-26 15:18:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 15:18:18 --> Database Driver Class Initialized
INFO - 2025-06-26 15:18:18 --> Model "Crud" initialized
INFO - 2025-06-26 15:18:18 --> Config Class Initialized
INFO - 2025-06-26 15:18:18 --> Hooks Class Initialized
DEBUG - 2025-06-26 15:18:18 --> UTF-8 Support Enabled
INFO - 2025-06-26 15:18:18 --> Utf8 Class Initialized
INFO - 2025-06-26 15:18:18 --> URI Class Initialized
INFO - 2025-06-26 15:18:18 --> Router Class Initialized
INFO - 2025-06-26 15:18:18 --> Output Class Initialized
INFO - 2025-06-26 15:18:18 --> Security Class Initialized
DEBUG - 2025-06-26 15:18:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 15:18:18 --> Input Class Initialized
INFO - 2025-06-26 15:18:18 --> Language Class Initialized
INFO - 2025-06-26 15:18:18 --> Loader Class Initialized
INFO - 2025-06-26 15:18:18 --> Helper loaded: url_helper
INFO - 2025-06-26 15:18:18 --> Helper loaded: file_helper
INFO - 2025-06-26 15:18:18 --> Database Driver Class Initialized
INFO - 2025-06-26 15:18:18 --> Email Class Initialized
DEBUG - 2025-06-26 15:18:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 15:18:18 --> Final output sent to browser
DEBUG - 2025-06-26 15:18:18 --> Total execution time: 0.0187
INFO - 2025-06-26 15:18:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 15:18:18 --> Controller Class Initialized
INFO - 2025-06-26 15:18:18 --> Helper loaded: form_helper
INFO - 2025-06-26 15:18:18 --> Form Validation Class Initialized
DEBUG - 2025-06-26 15:18:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 15:18:18 --> Database Driver Class Initialized
INFO - 2025-06-26 15:18:18 --> Model "Crud" initialized
INFO - 2025-06-26 15:18:18 --> Final output sent to browser
DEBUG - 2025-06-26 15:18:18 --> Total execution time: 0.0220
INFO - 2025-06-26 15:18:28 --> Config Class Initialized
INFO - 2025-06-26 15:18:28 --> Config Class Initialized
INFO - 2025-06-26 15:18:28 --> Hooks Class Initialized
INFO - 2025-06-26 15:18:28 --> Hooks Class Initialized
DEBUG - 2025-06-26 15:18:28 --> UTF-8 Support Enabled
INFO - 2025-06-26 15:18:28 --> Utf8 Class Initialized
DEBUG - 2025-06-26 15:18:28 --> UTF-8 Support Enabled
INFO - 2025-06-26 15:18:28 --> Utf8 Class Initialized
INFO - 2025-06-26 15:18:28 --> URI Class Initialized
INFO - 2025-06-26 15:18:28 --> URI Class Initialized
INFO - 2025-06-26 15:18:28 --> Router Class Initialized
INFO - 2025-06-26 15:18:28 --> Router Class Initialized
INFO - 2025-06-26 15:18:28 --> Output Class Initialized
INFO - 2025-06-26 15:18:28 --> Output Class Initialized
INFO - 2025-06-26 15:18:28 --> Security Class Initialized
INFO - 2025-06-26 15:18:28 --> Security Class Initialized
DEBUG - 2025-06-26 15:18:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-26 15:18:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 15:18:28 --> Input Class Initialized
INFO - 2025-06-26 15:18:28 --> Input Class Initialized
INFO - 2025-06-26 15:18:28 --> Language Class Initialized
INFO - 2025-06-26 15:18:28 --> Language Class Initialized
INFO - 2025-06-26 15:18:28 --> Loader Class Initialized
INFO - 2025-06-26 15:18:28 --> Loader Class Initialized
INFO - 2025-06-26 15:18:28 --> Helper loaded: url_helper
INFO - 2025-06-26 15:18:28 --> Helper loaded: file_helper
INFO - 2025-06-26 15:18:28 --> Helper loaded: url_helper
INFO - 2025-06-26 15:18:28 --> Helper loaded: file_helper
INFO - 2025-06-26 15:18:28 --> Database Driver Class Initialized
INFO - 2025-06-26 15:18:28 --> Database Driver Class Initialized
INFO - 2025-06-26 15:18:28 --> Email Class Initialized
INFO - 2025-06-26 15:18:28 --> Email Class Initialized
DEBUG - 2025-06-26 15:18:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-26 15:18:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 15:18:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 15:18:28 --> Controller Class Initialized
INFO - 2025-06-26 15:18:28 --> Helper loaded: form_helper
INFO - 2025-06-26 15:18:28 --> Form Validation Class Initialized
DEBUG - 2025-06-26 15:18:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 15:18:28 --> Database Driver Class Initialized
INFO - 2025-06-26 15:18:28 --> Model "Crud" initialized
INFO - 2025-06-26 15:18:28 --> Final output sent to browser
DEBUG - 2025-06-26 15:18:28 --> Total execution time: 0.0250
INFO - 2025-06-26 15:18:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 15:18:28 --> Controller Class Initialized
INFO - 2025-06-26 15:18:28 --> Helper loaded: form_helper
INFO - 2025-06-26 15:18:28 --> Form Validation Class Initialized
DEBUG - 2025-06-26 15:18:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 15:18:28 --> Database Driver Class Initialized
INFO - 2025-06-26 15:18:28 --> Model "Crud" initialized
INFO - 2025-06-26 15:18:28 --> Final output sent to browser
DEBUG - 2025-06-26 15:18:28 --> Total execution time: 0.0406
INFO - 2025-06-26 15:18:38 --> Config Class Initialized
INFO - 2025-06-26 15:18:38 --> Hooks Class Initialized
DEBUG - 2025-06-26 15:18:38 --> UTF-8 Support Enabled
INFO - 2025-06-26 15:18:38 --> Config Class Initialized
INFO - 2025-06-26 15:18:38 --> Utf8 Class Initialized
INFO - 2025-06-26 15:18:38 --> Hooks Class Initialized
INFO - 2025-06-26 15:18:38 --> URI Class Initialized
DEBUG - 2025-06-26 15:18:38 --> UTF-8 Support Enabled
INFO - 2025-06-26 15:18:38 --> Utf8 Class Initialized
INFO - 2025-06-26 15:18:38 --> Router Class Initialized
INFO - 2025-06-26 15:18:38 --> URI Class Initialized
INFO - 2025-06-26 15:18:38 --> Output Class Initialized
INFO - 2025-06-26 15:18:38 --> Security Class Initialized
INFO - 2025-06-26 15:18:38 --> Router Class Initialized
INFO - 2025-06-26 15:18:38 --> Output Class Initialized
DEBUG - 2025-06-26 15:18:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 15:18:38 --> Security Class Initialized
INFO - 2025-06-26 15:18:38 --> Input Class Initialized
DEBUG - 2025-06-26 15:18:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-26 15:18:38 --> Input Class Initialized
INFO - 2025-06-26 15:18:38 --> Language Class Initialized
INFO - 2025-06-26 15:18:38 --> Language Class Initialized
INFO - 2025-06-26 15:18:38 --> Loader Class Initialized
INFO - 2025-06-26 15:18:38 --> Loader Class Initialized
INFO - 2025-06-26 15:18:38 --> Helper loaded: url_helper
INFO - 2025-06-26 15:18:38 --> Helper loaded: url_helper
INFO - 2025-06-26 15:18:38 --> Helper loaded: file_helper
INFO - 2025-06-26 15:18:38 --> Helper loaded: file_helper
INFO - 2025-06-26 15:18:38 --> Database Driver Class Initialized
INFO - 2025-06-26 15:18:38 --> Database Driver Class Initialized
INFO - 2025-06-26 15:18:38 --> Email Class Initialized
INFO - 2025-06-26 15:18:38 --> Email Class Initialized
DEBUG - 2025-06-26 15:18:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-26 15:18:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-26 15:18:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 15:18:38 --> Controller Class Initialized
INFO - 2025-06-26 15:18:38 --> Helper loaded: form_helper
INFO - 2025-06-26 15:18:38 --> Form Validation Class Initialized
DEBUG - 2025-06-26 15:18:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 15:18:38 --> Database Driver Class Initialized
INFO - 2025-06-26 15:18:38 --> Model "Crud" initialized
INFO - 2025-06-26 15:18:38 --> Final output sent to browser
DEBUG - 2025-06-26 15:18:38 --> Total execution time: 0.0254
INFO - 2025-06-26 15:18:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-26 15:18:38 --> Controller Class Initialized
INFO - 2025-06-26 15:18:38 --> Helper loaded: form_helper
INFO - 2025-06-26 15:18:38 --> Form Validation Class Initialized
DEBUG - 2025-06-26 15:18:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-26 15:18:38 --> Database Driver Class Initialized
INFO - 2025-06-26 15:18:38 --> Model "Crud" initialized
INFO - 2025-06-26 15:18:38 --> Final output sent to browser
DEBUG - 2025-06-26 15:18:38 --> Total execution time: 0.0410
