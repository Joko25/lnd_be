<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2025-06-10 07:22:23 --> Config Class Initialized
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2025-06-10 07:22:23 --> Config Class Initialized
INFO - 2025-06-10 07:22:23 --> Hooks Class Initialized
INFO - 2025-06-10 07:22:23 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:23 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:23 --> Utf8 Class Initialized
DEBUG - 2025-06-10 07:22:23 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:23 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:23 --> URI Class Initialized
INFO - 2025-06-10 07:22:23 --> URI Class Initialized
INFO - 2025-06-10 07:22:23 --> Router Class Initialized
INFO - 2025-06-10 07:22:23 --> Router Class Initialized
INFO - 2025-06-10 07:22:23 --> Output Class Initialized
INFO - 2025-06-10 07:22:23 --> Output Class Initialized
INFO - 2025-06-10 07:22:23 --> Security Class Initialized
INFO - 2025-06-10 07:22:23 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:23 --> Input Class Initialized
DEBUG - 2025-06-10 07:22:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:23 --> Input Class Initialized
INFO - 2025-06-10 07:22:23 --> Language Class Initialized
INFO - 2025-06-10 07:22:23 --> Language Class Initialized
INFO - 2025-06-10 07:22:24 --> Loader Class Initialized
INFO - 2025-06-10 07:22:24 --> Loader Class Initialized
INFO - 2025-06-10 07:22:24 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:24 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:24 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:24 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:24 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:24 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:24 --> Email Class Initialized
INFO - 2025-06-10 07:22:24 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-10 07:22:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:24 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:24 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:24 --> Controller Class Initialized
INFO - 2025-06-10 07:22:24 --> Controller Class Initialized
INFO - 2025-06-10 07:22:24 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:24 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:24 --> Form Validation Class Initialized
INFO - 2025-06-10 07:22:24 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:22:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-06-10 07:22:24 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:24 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:24 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:24 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:24 --> Model "Crud" initialized
ERROR - 2025-06-10 07:22:24 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
ERROR - 2025-06-10 07:22:24 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-10 07:22:24 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-10 07:22:24 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-10 07:22:25 --> Config Class Initialized
INFO - 2025-06-10 07:22:25 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:25 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:25 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:25 --> URI Class Initialized
INFO - 2025-06-10 07:22:25 --> Router Class Initialized
INFO - 2025-06-10 07:22:25 --> Output Class Initialized
INFO - 2025-06-10 07:22:25 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:25 --> Input Class Initialized
INFO - 2025-06-10 07:22:25 --> Language Class Initialized
INFO - 2025-06-10 07:22:25 --> Loader Class Initialized
INFO - 2025-06-10 07:22:25 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:25 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:25 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:25 --> Config Class Initialized
INFO - 2025-06-10 07:22:25 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:25 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:25 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:25 --> URI Class Initialized
INFO - 2025-06-10 07:22:25 --> Config Class Initialized
INFO - 2025-06-10 07:22:25 --> Router Class Initialized
INFO - 2025-06-10 07:22:25 --> Hooks Class Initialized
INFO - 2025-06-10 07:22:25 --> Output Class Initialized
INFO - 2025-06-10 07:22:25 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:25 --> Input Class Initialized
DEBUG - 2025-06-10 07:22:25 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:25 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:25 --> Language Class Initialized
INFO - 2025-06-10 07:22:25 --> URI Class Initialized
INFO - 2025-06-10 07:22:25 --> Router Class Initialized
INFO - 2025-06-10 07:22:25 --> Loader Class Initialized
INFO - 2025-06-10 07:22:25 --> Output Class Initialized
INFO - 2025-06-10 07:22:25 --> Security Class Initialized
INFO - 2025-06-10 07:22:25 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:25 --> Helper loaded: file_helper
DEBUG - 2025-06-10 07:22:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:25 --> Input Class Initialized
INFO - 2025-06-10 07:22:25 --> Language Class Initialized
INFO - 2025-06-10 07:22:25 --> Loader Class Initialized
INFO - 2025-06-10 07:22:25 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:25 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:25 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:25 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:25 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:25 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:25 --> Controller Class Initialized
INFO - 2025-06-10 07:22:25 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:25 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:22:25 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:25 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:25 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:25 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:25 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:25 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:25 --> Controller Class Initialized
INFO - 2025-06-10 07:22:25 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:25 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:22:25 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:25 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:25 --> Config Class Initialized
INFO - 2025-06-10 07:22:25 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:25 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:25 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:25 --> URI Class Initialized
INFO - 2025-06-10 07:22:25 --> Router Class Initialized
INFO - 2025-06-10 07:22:25 --> Output Class Initialized
INFO - 2025-06-10 07:22:25 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:25 --> Input Class Initialized
INFO - 2025-06-10 07:22:25 --> Language Class Initialized
INFO - 2025-06-10 07:22:25 --> Loader Class Initialized
INFO - 2025-06-10 07:22:25 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:25 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:25 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:25 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:25 --> Model "Crud" initialized
ERROR - 2025-06-10 07:22:25 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-10 07:22:25 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-10 07:22:25 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:25 --> Controller Class Initialized
INFO - 2025-06-10 07:22:25 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:25 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:22:25 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:25 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:25 --> Model "Crud" initialized
ERROR - 2025-06-10 07:22:26 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-10 07:22:26 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-10 07:22:26 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:26 --> Controller Class Initialized
INFO - 2025-06-10 07:22:26 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:26 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:22:26 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:26 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:26 --> Model "Crud" initialized
DEBUG - 2025-06-10 07:22:26 --> Email class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:26 --> Model "Emails" initialized
ERROR - 2025-06-10 07:22:26 --> Unable to delete cache file for login
INFO - 2025-06-10 07:22:26 --> File loaded: /var/www/html/hris_lnd/application/views/login.php
INFO - 2025-06-10 07:22:26 --> Final output sent to browser
DEBUG - 2025-06-10 07:22:26 --> Total execution time: 0.0704
INFO - 2025-06-10 07:22:28 --> Config Class Initialized
INFO - 2025-06-10 07:22:28 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:28 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:28 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:28 --> URI Class Initialized
INFO - 2025-06-10 07:22:28 --> Router Class Initialized
INFO - 2025-06-10 07:22:28 --> Output Class Initialized
INFO - 2025-06-10 07:22:28 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:28 --> Input Class Initialized
INFO - 2025-06-10 07:22:28 --> Language Class Initialized
INFO - 2025-06-10 07:22:28 --> Loader Class Initialized
INFO - 2025-06-10 07:22:28 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:28 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:28 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:28 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:28 --> Controller Class Initialized
INFO - 2025-06-10 07:22:28 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:28 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:22:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:28 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:28 --> Model "Crud" initialized
DEBUG - 2025-06-10 07:22:28 --> Email class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:28 --> Model "Emails" initialized
ERROR - 2025-06-10 07:22:28 --> Unable to delete cache file for login
INFO - 2025-06-10 07:22:28 --> Config Class Initialized
INFO - 2025-06-10 07:22:28 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:28 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:28 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:28 --> URI Class Initialized
INFO - 2025-06-10 07:22:28 --> Router Class Initialized
INFO - 2025-06-10 07:22:28 --> Output Class Initialized
INFO - 2025-06-10 07:22:28 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:28 --> Input Class Initialized
INFO - 2025-06-10 07:22:28 --> Language Class Initialized
INFO - 2025-06-10 07:22:28 --> Loader Class Initialized
INFO - 2025-06-10 07:22:28 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:28 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:28 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:28 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:28 --> Controller Class Initialized
INFO - 2025-06-10 07:22:28 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:28 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:22:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:28 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:28 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:28 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-10 07:22:28 --> File loaded: /var/www/html/hris_lnd/application/views/home.php
INFO - 2025-06-10 07:22:28 --> Final output sent to browser
DEBUG - 2025-06-10 07:22:28 --> Total execution time: 0.0661
INFO - 2025-06-10 07:22:29 --> Config Class Initialized
INFO - 2025-06-10 07:22:29 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:29 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:29 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:29 --> URI Class Initialized
INFO - 2025-06-10 07:22:29 --> Router Class Initialized
INFO - 2025-06-10 07:22:29 --> Output Class Initialized
INFO - 2025-06-10 07:22:29 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:29 --> Input Class Initialized
INFO - 2025-06-10 07:22:29 --> Language Class Initialized
INFO - 2025-06-10 07:22:29 --> Loader Class Initialized
INFO - 2025-06-10 07:22:29 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:29 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:29 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:29 --> Config Class Initialized
INFO - 2025-06-10 07:22:29 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:29 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:29 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:29 --> URI Class Initialized
INFO - 2025-06-10 07:22:29 --> Router Class Initialized
INFO - 2025-06-10 07:22:29 --> Output Class Initialized
INFO - 2025-06-10 07:22:29 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:29 --> Input Class Initialized
INFO - 2025-06-10 07:22:29 --> Language Class Initialized
INFO - 2025-06-10 07:22:29 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:29 --> Loader Class Initialized
INFO - 2025-06-10 07:22:29 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:29 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:29 --> Controller Class Initialized
INFO - 2025-06-10 07:22:29 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:29 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:29 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:22:29 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:29 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:29 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:29 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:29 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:29 --> Config Class Initialized
INFO - 2025-06-10 07:22:29 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:29 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:29 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:29 --> Config Class Initialized
INFO - 2025-06-10 07:22:29 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:29 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:29 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:29 --> URI Class Initialized
INFO - 2025-06-10 07:22:29 --> URI Class Initialized
INFO - 2025-06-10 07:22:29 --> Router Class Initialized
INFO - 2025-06-10 07:22:29 --> Output Class Initialized
INFO - 2025-06-10 07:22:29 --> Router Class Initialized
INFO - 2025-06-10 07:22:29 --> Security Class Initialized
INFO - 2025-06-10 07:22:29 --> Output Class Initialized
INFO - 2025-06-10 07:22:29 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:29 --> Input Class Initialized
INFO - 2025-06-10 07:22:29 --> Language Class Initialized
DEBUG - 2025-06-10 07:22:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:29 --> Input Class Initialized
INFO - 2025-06-10 07:22:29 --> Language Class Initialized
INFO - 2025-06-10 07:22:29 --> Loader Class Initialized
INFO - 2025-06-10 07:22:29 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:29 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:29 --> Loader Class Initialized
INFO - 2025-06-10 07:22:29 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:29 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:29 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:29 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:29 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:29 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:29 --> Config Class Initialized
INFO - 2025-06-10 07:22:29 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:29 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:29 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:29 --> URI Class Initialized
INFO - 2025-06-10 07:22:29 --> Router Class Initialized
INFO - 2025-06-10 07:22:29 --> Output Class Initialized
INFO - 2025-06-10 07:22:29 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:29 --> Input Class Initialized
INFO - 2025-06-10 07:22:29 --> Language Class Initialized
INFO - 2025-06-10 07:22:29 --> Loader Class Initialized
INFO - 2025-06-10 07:22:29 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:29 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:29 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:29 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:29 --> Config Class Initialized
INFO - 2025-06-10 07:22:29 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:29 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:29 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:29 --> URI Class Initialized
INFO - 2025-06-10 07:22:29 --> Router Class Initialized
INFO - 2025-06-10 07:22:29 --> Output Class Initialized
INFO - 2025-06-10 07:22:29 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:29 --> Input Class Initialized
INFO - 2025-06-10 07:22:29 --> Language Class Initialized
INFO - 2025-06-10 07:22:29 --> Loader Class Initialized
INFO - 2025-06-10 07:22:29 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:29 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:29 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:29 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:29 --> Final output sent to browser
DEBUG - 2025-06-10 07:22:29 --> Total execution time: 0.2649
INFO - 2025-06-10 07:22:29 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:29 --> Controller Class Initialized
INFO - 2025-06-10 07:22:29 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:29 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:22:29 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:29 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:29 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:29 --> Config Class Initialized
INFO - 2025-06-10 07:22:29 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:29 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:29 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:29 --> URI Class Initialized
INFO - 2025-06-10 07:22:29 --> Router Class Initialized
INFO - 2025-06-10 07:22:29 --> Output Class Initialized
INFO - 2025-06-10 07:22:29 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:29 --> Input Class Initialized
INFO - 2025-06-10 07:22:29 --> Language Class Initialized
INFO - 2025-06-10 07:22:29 --> Loader Class Initialized
INFO - 2025-06-10 07:22:29 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:29 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:29 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:29 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:29 --> Config Class Initialized
INFO - 2025-06-10 07:22:29 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:29 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:29 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:29 --> URI Class Initialized
INFO - 2025-06-10 07:22:29 --> Router Class Initialized
INFO - 2025-06-10 07:22:29 --> Output Class Initialized
INFO - 2025-06-10 07:22:29 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:29 --> Input Class Initialized
INFO - 2025-06-10 07:22:29 --> Language Class Initialized
INFO - 2025-06-10 07:22:29 --> Loader Class Initialized
INFO - 2025-06-10 07:22:29 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:29 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:29 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:29 --> Config Class Initialized
INFO - 2025-06-10 07:22:29 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:29 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:29 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:29 --> URI Class Initialized
INFO - 2025-06-10 07:22:29 --> Router Class Initialized
INFO - 2025-06-10 07:22:29 --> Output Class Initialized
INFO - 2025-06-10 07:22:29 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:29 --> Input Class Initialized
INFO - 2025-06-10 07:22:29 --> Language Class Initialized
INFO - 2025-06-10 07:22:29 --> Loader Class Initialized
INFO - 2025-06-10 07:22:29 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:29 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:29 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:29 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:29 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:29 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-10 07:22:29 --> File loaded: /var/www/html/hris_lnd/application/views/dashboard/dashboard.php
INFO - 2025-06-10 07:22:29 --> Final output sent to browser
DEBUG - 2025-06-10 07:22:29 --> Total execution time: 0.4078
INFO - 2025-06-10 07:22:29 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:29 --> Controller Class Initialized
INFO - 2025-06-10 07:22:29 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:29 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:22:29 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:29 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:29 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:29 --> Final output sent to browser
DEBUG - 2025-06-10 07:22:29 --> Total execution time: 0.4062
INFO - 2025-06-10 07:22:29 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:29 --> Controller Class Initialized
INFO - 2025-06-10 07:22:29 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:29 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:22:29 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:29 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:30 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:30 --> Config Class Initialized
INFO - 2025-06-10 07:22:30 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:30 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:30 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:30 --> URI Class Initialized
INFO - 2025-06-10 07:22:30 --> Router Class Initialized
INFO - 2025-06-10 07:22:30 --> Output Class Initialized
INFO - 2025-06-10 07:22:30 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:30 --> Input Class Initialized
INFO - 2025-06-10 07:22:30 --> Language Class Initialized
INFO - 2025-06-10 07:22:30 --> Loader Class Initialized
INFO - 2025-06-10 07:22:30 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:30 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:30 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:30 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:30 --> Final output sent to browser
DEBUG - 2025-06-10 07:22:30 --> Total execution time: 0.4413
INFO - 2025-06-10 07:22:30 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:30 --> Controller Class Initialized
INFO - 2025-06-10 07:22:30 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:30 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:22:30 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:30 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:30 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:30 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:30 --> Controller Class Initialized
INFO - 2025-06-10 07:22:30 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:30 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:22:30 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:30 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:30 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:30 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-10 07:22:30 --> File loaded: /var/www/html/hris_lnd/application/views/dashboard/dashboard.php
INFO - 2025-06-10 07:22:30 --> Final output sent to browser
DEBUG - 2025-06-10 07:22:30 --> Total execution time: 0.3791
INFO - 2025-06-10 07:22:30 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:30 --> Controller Class Initialized
INFO - 2025-06-10 07:22:30 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:30 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:22:30 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:30 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:30 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:30 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-10 07:22:30 --> File loaded: /var/www/html/hris_lnd/application/views/dashboard/dashboard.php
INFO - 2025-06-10 07:22:30 --> Final output sent to browser
DEBUG - 2025-06-10 07:22:30 --> Total execution time: 0.4062
INFO - 2025-06-10 07:22:30 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:30 --> Controller Class Initialized
INFO - 2025-06-10 07:22:30 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:30 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:22:30 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:30 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:30 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:30 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-10 07:22:30 --> File loaded: /var/www/html/hris_lnd/application/views/dashboard/dashboard.php
INFO - 2025-06-10 07:22:30 --> Final output sent to browser
DEBUG - 2025-06-10 07:22:30 --> Total execution time: 0.4673
INFO - 2025-06-10 07:22:30 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:30 --> Controller Class Initialized
INFO - 2025-06-10 07:22:30 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:30 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:22:30 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:30 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:30 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:30 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-10 07:22:30 --> File loaded: /var/www/html/hris_lnd/application/views/dashboard/dashboard.php
INFO - 2025-06-10 07:22:30 --> Final output sent to browser
DEBUG - 2025-06-10 07:22:30 --> Total execution time: 0.5800
INFO - 2025-06-10 07:22:30 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:30 --> Controller Class Initialized
INFO - 2025-06-10 07:22:30 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:30 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:22:30 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:30 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:30 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:31 --> Config Class Initialized
INFO - 2025-06-10 07:22:31 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:31 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:31 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:31 --> URI Class Initialized
INFO - 2025-06-10 07:22:31 --> Router Class Initialized
INFO - 2025-06-10 07:22:31 --> Output Class Initialized
INFO - 2025-06-10 07:22:31 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:31 --> Input Class Initialized
INFO - 2025-06-10 07:22:31 --> Language Class Initialized
INFO - 2025-06-10 07:22:31 --> Loader Class Initialized
INFO - 2025-06-10 07:22:31 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:31 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:31 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:31 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:31 --> Config Class Initialized
INFO - 2025-06-10 07:22:31 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:31 --> Hooks Class Initialized
INFO - 2025-06-10 07:22:31 --> Controller Class Initialized
DEBUG - 2025-06-10 07:22:31 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:31 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:31 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:31 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:22:31 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:31 --> URI Class Initialized
INFO - 2025-06-10 07:22:31 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:31 --> Router Class Initialized
INFO - 2025-06-10 07:22:31 --> Output Class Initialized
INFO - 2025-06-10 07:22:31 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:31 --> Input Class Initialized
INFO - 2025-06-10 07:22:31 --> Language Class Initialized
INFO - 2025-06-10 07:22:31 --> Loader Class Initialized
INFO - 2025-06-10 07:22:31 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:31 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:31 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:31 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:31 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:31 --> Config Class Initialized
INFO - 2025-06-10 07:22:31 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:31 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:31 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:31 --> URI Class Initialized
INFO - 2025-06-10 07:22:31 --> Router Class Initialized
INFO - 2025-06-10 07:22:31 --> Output Class Initialized
INFO - 2025-06-10 07:22:31 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:31 --> Input Class Initialized
INFO - 2025-06-10 07:22:31 --> Language Class Initialized
INFO - 2025-06-10 07:22:31 --> Loader Class Initialized
INFO - 2025-06-10 07:22:31 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:31 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:31 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:31 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:31 --> Config Class Initialized
INFO - 2025-06-10 07:22:31 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:31 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:31 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:31 --> URI Class Initialized
INFO - 2025-06-10 07:22:31 --> Router Class Initialized
INFO - 2025-06-10 07:22:31 --> Output Class Initialized
INFO - 2025-06-10 07:22:31 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:31 --> Input Class Initialized
INFO - 2025-06-10 07:22:31 --> Language Class Initialized
INFO - 2025-06-10 07:22:31 --> Loader Class Initialized
INFO - 2025-06-10 07:22:31 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:31 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:31 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:31 --> Final output sent to browser
DEBUG - 2025-06-10 07:22:31 --> Total execution time: 0.0475
INFO - 2025-06-10 07:22:31 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:31 --> Controller Class Initialized
INFO - 2025-06-10 07:22:31 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:31 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:22:31 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:31 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:31 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:31 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:31 --> Final output sent to browser
DEBUG - 2025-06-10 07:22:31 --> Total execution time: 0.0464
INFO - 2025-06-10 07:22:31 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:31 --> Controller Class Initialized
INFO - 2025-06-10 07:22:31 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:31 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:22:31 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:31 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:31 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:31 --> Final output sent to browser
DEBUG - 2025-06-10 07:22:31 --> Total execution time: 0.0482
INFO - 2025-06-10 07:22:31 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:31 --> Controller Class Initialized
INFO - 2025-06-10 07:22:31 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:31 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:22:31 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:31 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:31 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:31 --> Final output sent to browser
DEBUG - 2025-06-10 07:22:31 --> Total execution time: 0.0293
INFO - 2025-06-10 07:22:36 --> Config Class Initialized
INFO - 2025-06-10 07:22:36 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:36 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:36 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:36 --> URI Class Initialized
INFO - 2025-06-10 07:22:36 --> Router Class Initialized
INFO - 2025-06-10 07:22:36 --> Output Class Initialized
INFO - 2025-06-10 07:22:36 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:36 --> Input Class Initialized
INFO - 2025-06-10 07:22:36 --> Language Class Initialized
INFO - 2025-06-10 07:22:36 --> Loader Class Initialized
INFO - 2025-06-10 07:22:36 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:36 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:36 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:36 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:36 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:36 --> Controller Class Initialized
INFO - 2025-06-10 07:22:36 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-10 07:22:36 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:36 --> Form Validation Class Initialized
INFO - 2025-06-10 07:22:36 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:36 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:36 --> Database Driver Class Initialized
DEBUG - 2025-06-10 07:22:36 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:36 --> Model "LndModel" initialized
DEBUG - 2025-06-10 07:22:36 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-10 07:22:36 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:36 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-10 07:22:36 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/request-training.php
INFO - 2025-06-10 07:22:36 --> Final output sent to browser
DEBUG - 2025-06-10 07:22:36 --> Total execution time: 0.0449
INFO - 2025-06-10 07:22:36 --> Config Class Initialized
INFO - 2025-06-10 07:22:36 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:36 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:36 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:36 --> URI Class Initialized
INFO - 2025-06-10 07:22:36 --> Router Class Initialized
INFO - 2025-06-10 07:22:36 --> Output Class Initialized
INFO - 2025-06-10 07:22:36 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:36 --> Input Class Initialized
INFO - 2025-06-10 07:22:36 --> Language Class Initialized
INFO - 2025-06-10 07:22:37 --> Loader Class Initialized
INFO - 2025-06-10 07:22:37 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:37 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:37 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:37 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:37 --> Controller Class Initialized
INFO - 2025-06-10 07:22:37 --> Model "TrainingActivityModel" initialized
INFO - 2025-06-10 07:22:37 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:37 --> Form Validation Class Initialized
INFO - 2025-06-10 07:22:37 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:37 --> Model "Crud" initialized
DEBUG - 2025-06-10 07:22:37 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-10 07:22:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:37 --> Final output sent to browser
DEBUG - 2025-06-10 07:22:37 --> Total execution time: 0.0684
INFO - 2025-06-10 07:22:37 --> Config Class Initialized
INFO - 2025-06-10 07:22:37 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:37 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:37 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:37 --> URI Class Initialized
INFO - 2025-06-10 07:22:37 --> Router Class Initialized
INFO - 2025-06-10 07:22:37 --> Output Class Initialized
INFO - 2025-06-10 07:22:37 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:37 --> Input Class Initialized
INFO - 2025-06-10 07:22:37 --> Language Class Initialized
INFO - 2025-06-10 07:22:37 --> Loader Class Initialized
INFO - 2025-06-10 07:22:37 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:37 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:37 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:37 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:37 --> Controller Class Initialized
INFO - 2025-06-10 07:22:37 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-10 07:22:37 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:37 --> Form Validation Class Initialized
INFO - 2025-06-10 07:22:37 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:37 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:37 --> Database Driver Class Initialized
DEBUG - 2025-06-10 07:22:37 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:37 --> Model "LndModel" initialized
DEBUG - 2025-06-10 07:22:37 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-10 07:22:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:37 --> Final output sent to browser
DEBUG - 2025-06-10 07:22:37 --> Total execution time: 0.0285
INFO - 2025-06-10 07:22:37 --> Config Class Initialized
INFO - 2025-06-10 07:22:37 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:37 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:37 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:37 --> URI Class Initialized
INFO - 2025-06-10 07:22:37 --> Router Class Initialized
INFO - 2025-06-10 07:22:37 --> Output Class Initialized
INFO - 2025-06-10 07:22:37 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:37 --> Input Class Initialized
INFO - 2025-06-10 07:22:37 --> Language Class Initialized
INFO - 2025-06-10 07:22:37 --> Loader Class Initialized
INFO - 2025-06-10 07:22:37 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:37 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:37 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:37 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:37 --> Controller Class Initialized
INFO - 2025-06-10 07:22:37 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-10 07:22:37 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:37 --> Form Validation Class Initialized
INFO - 2025-06-10 07:22:37 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:37 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:37 --> Database Driver Class Initialized
DEBUG - 2025-06-10 07:22:37 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:37 --> Model "LndModel" initialized
DEBUG - 2025-06-10 07:22:37 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-10 07:22:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:37 --> Config Class Initialized
INFO - 2025-06-10 07:22:37 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:37 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:37 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:37 --> URI Class Initialized
INFO - 2025-06-10 07:22:37 --> Router Class Initialized
INFO - 2025-06-10 07:22:37 --> Output Class Initialized
INFO - 2025-06-10 07:22:37 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:37 --> Input Class Initialized
INFO - 2025-06-10 07:22:37 --> Language Class Initialized
INFO - 2025-06-10 07:22:37 --> Loader Class Initialized
INFO - 2025-06-10 07:22:37 --> Final output sent to browser
INFO - 2025-06-10 07:22:37 --> Helper loaded: url_helper
DEBUG - 2025-06-10 07:22:37 --> Total execution time: 0.0137
INFO - 2025-06-10 07:22:37 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:37 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:37 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:37 --> Controller Class Initialized
INFO - 2025-06-10 07:22:37 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-10 07:22:37 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:37 --> Form Validation Class Initialized
INFO - 2025-06-10 07:22:37 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:37 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:37 --> Database Driver Class Initialized
DEBUG - 2025-06-10 07:22:37 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:37 --> Model "LndModel" initialized
DEBUG - 2025-06-10 07:22:37 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-10 07:22:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:37 --> Config Class Initialized
INFO - 2025-06-10 07:22:37 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:37 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:37 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:37 --> URI Class Initialized
INFO - 2025-06-10 07:22:37 --> Router Class Initialized
INFO - 2025-06-10 07:22:37 --> Output Class Initialized
INFO - 2025-06-10 07:22:37 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:37 --> Input Class Initialized
INFO - 2025-06-10 07:22:37 --> Language Class Initialized
INFO - 2025-06-10 07:22:37 --> Loader Class Initialized
INFO - 2025-06-10 07:22:37 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:37 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:37 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:37 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:37 --> Final output sent to browser
DEBUG - 2025-06-10 07:22:37 --> Total execution time: 0.0225
INFO - 2025-06-10 07:22:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:37 --> Controller Class Initialized
INFO - 2025-06-10 07:22:37 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-10 07:22:37 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:37 --> Form Validation Class Initialized
INFO - 2025-06-10 07:22:37 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:37 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:37 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:37 --> Config Class Initialized
INFO - 2025-06-10 07:22:37 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:37 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:37 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:37 --> URI Class Initialized
INFO - 2025-06-10 07:22:37 --> Router Class Initialized
INFO - 2025-06-10 07:22:37 --> Output Class Initialized
INFO - 2025-06-10 07:22:37 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:37 --> Input Class Initialized
INFO - 2025-06-10 07:22:37 --> Language Class Initialized
INFO - 2025-06-10 07:22:37 --> Loader Class Initialized
INFO - 2025-06-10 07:22:37 --> Helper loaded: url_helper
DEBUG - 2025-06-10 07:22:37 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:37 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:37 --> Model "LndModel" initialized
INFO - 2025-06-10 07:22:37 --> Database Driver Class Initialized
DEBUG - 2025-06-10 07:22:37 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-10 07:22:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:37 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:37 --> Final output sent to browser
DEBUG - 2025-06-10 07:22:37 --> Total execution time: 0.0196
INFO - 2025-06-10 07:22:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:37 --> Controller Class Initialized
INFO - 2025-06-10 07:22:37 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-10 07:22:37 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:37 --> Form Validation Class Initialized
INFO - 2025-06-10 07:22:37 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:37 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:37 --> Database Driver Class Initialized
DEBUG - 2025-06-10 07:22:37 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:37 --> Model "LndModel" initialized
DEBUG - 2025-06-10 07:22:37 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-10 07:22:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:37 --> Final output sent to browser
DEBUG - 2025-06-10 07:22:37 --> Total execution time: 0.0210
INFO - 2025-06-10 07:22:37 --> Config Class Initialized
INFO - 2025-06-10 07:22:37 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:37 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:37 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:37 --> URI Class Initialized
INFO - 2025-06-10 07:22:37 --> Router Class Initialized
INFO - 2025-06-10 07:22:37 --> Output Class Initialized
INFO - 2025-06-10 07:22:37 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:37 --> Input Class Initialized
INFO - 2025-06-10 07:22:37 --> Language Class Initialized
INFO - 2025-06-10 07:22:37 --> Loader Class Initialized
INFO - 2025-06-10 07:22:37 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:37 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:37 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:37 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:37 --> Controller Class Initialized
INFO - 2025-06-10 07:22:37 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-10 07:22:37 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:37 --> Form Validation Class Initialized
INFO - 2025-06-10 07:22:37 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:37 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:37 --> Database Driver Class Initialized
DEBUG - 2025-06-10 07:22:37 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:37 --> Model "LndModel" initialized
DEBUG - 2025-06-10 07:22:37 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-10 07:22:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:37 --> Final output sent to browser
DEBUG - 2025-06-10 07:22:37 --> Total execution time: 0.0213
INFO - 2025-06-10 07:22:39 --> Config Class Initialized
INFO - 2025-06-10 07:22:39 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:39 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:39 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:39 --> URI Class Initialized
INFO - 2025-06-10 07:22:39 --> Router Class Initialized
INFO - 2025-06-10 07:22:39 --> Output Class Initialized
INFO - 2025-06-10 07:22:39 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:39 --> Input Class Initialized
INFO - 2025-06-10 07:22:39 --> Language Class Initialized
INFO - 2025-06-10 07:22:39 --> Loader Class Initialized
INFO - 2025-06-10 07:22:39 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:39 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:39 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:39 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:39 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:39 --> Controller Class Initialized
INFO - 2025-06-10 07:22:39 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-10 07:22:39 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:39 --> Form Validation Class Initialized
INFO - 2025-06-10 07:22:39 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:39 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:39 --> Database Driver Class Initialized
DEBUG - 2025-06-10 07:22:39 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:39 --> Model "LndModel" initialized
DEBUG - 2025-06-10 07:22:39 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-10 07:22:39 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:39 --> Final output sent to browser
DEBUG - 2025-06-10 07:22:39 --> Total execution time: 0.1154
INFO - 2025-06-10 07:22:39 --> Config Class Initialized
INFO - 2025-06-10 07:22:39 --> Config Class Initialized
INFO - 2025-06-10 07:22:39 --> Hooks Class Initialized
INFO - 2025-06-10 07:22:39 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:39 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:39 --> Utf8 Class Initialized
DEBUG - 2025-06-10 07:22:39 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:39 --> URI Class Initialized
INFO - 2025-06-10 07:22:39 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:39 --> Router Class Initialized
INFO - 2025-06-10 07:22:39 --> Output Class Initialized
INFO - 2025-06-10 07:22:39 --> URI Class Initialized
INFO - 2025-06-10 07:22:39 --> Security Class Initialized
INFO - 2025-06-10 07:22:39 --> Router Class Initialized
DEBUG - 2025-06-10 07:22:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:39 --> Input Class Initialized
INFO - 2025-06-10 07:22:39 --> Output Class Initialized
INFO - 2025-06-10 07:22:39 --> Language Class Initialized
INFO - 2025-06-10 07:22:39 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:39 --> Loader Class Initialized
INFO - 2025-06-10 07:22:39 --> Input Class Initialized
INFO - 2025-06-10 07:22:39 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:39 --> Language Class Initialized
INFO - 2025-06-10 07:22:39 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:39 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:39 --> Loader Class Initialized
INFO - 2025-06-10 07:22:39 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:39 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:39 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:39 --> Email Class Initialized
INFO - 2025-06-10 07:22:39 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-10 07:22:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:39 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:39 --> Controller Class Initialized
INFO - 2025-06-10 07:22:39 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:39 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:22:39 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:39 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:39 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:39 --> Final output sent to browser
DEBUG - 2025-06-10 07:22:39 --> Total execution time: 0.0295
INFO - 2025-06-10 07:22:39 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:39 --> Controller Class Initialized
INFO - 2025-06-10 07:22:39 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:39 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:22:39 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:39 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:39 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:39 --> Final output sent to browser
DEBUG - 2025-06-10 07:22:39 --> Total execution time: 0.0566
INFO - 2025-06-10 07:22:49 --> Config Class Initialized
INFO - 2025-06-10 07:22:49 --> Hooks Class Initialized
INFO - 2025-06-10 07:22:49 --> Config Class Initialized
DEBUG - 2025-06-10 07:22:49 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:49 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:49 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:49 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:49 --> URI Class Initialized
INFO - 2025-06-10 07:22:49 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:49 --> URI Class Initialized
INFO - 2025-06-10 07:22:49 --> Router Class Initialized
INFO - 2025-06-10 07:22:49 --> Output Class Initialized
INFO - 2025-06-10 07:22:49 --> Router Class Initialized
INFO - 2025-06-10 07:22:49 --> Security Class Initialized
INFO - 2025-06-10 07:22:49 --> Output Class Initialized
DEBUG - 2025-06-10 07:22:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:49 --> Input Class Initialized
INFO - 2025-06-10 07:22:49 --> Security Class Initialized
INFO - 2025-06-10 07:22:49 --> Language Class Initialized
DEBUG - 2025-06-10 07:22:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:49 --> Input Class Initialized
INFO - 2025-06-10 07:22:49 --> Loader Class Initialized
INFO - 2025-06-10 07:22:49 --> Language Class Initialized
INFO - 2025-06-10 07:22:49 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:49 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:49 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:49 --> Loader Class Initialized
INFO - 2025-06-10 07:22:49 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:49 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:49 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:49 --> Email Class Initialized
INFO - 2025-06-10 07:22:49 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-10 07:22:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:49 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:49 --> Controller Class Initialized
INFO - 2025-06-10 07:22:49 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:49 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:22:49 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:49 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:49 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:49 --> Final output sent to browser
DEBUG - 2025-06-10 07:22:49 --> Total execution time: 0.0344
INFO - 2025-06-10 07:22:49 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:49 --> Controller Class Initialized
INFO - 2025-06-10 07:22:49 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:49 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:22:49 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:49 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:49 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:49 --> Final output sent to browser
DEBUG - 2025-06-10 07:22:49 --> Total execution time: 0.0588
INFO - 2025-06-10 07:22:51 --> Config Class Initialized
INFO - 2025-06-10 07:22:51 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:51 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:51 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:51 --> URI Class Initialized
INFO - 2025-06-10 07:22:51 --> Router Class Initialized
INFO - 2025-06-10 07:22:51 --> Output Class Initialized
INFO - 2025-06-10 07:22:51 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:51 --> Input Class Initialized
INFO - 2025-06-10 07:22:51 --> Language Class Initialized
INFO - 2025-06-10 07:22:51 --> Loader Class Initialized
INFO - 2025-06-10 07:22:51 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:51 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:51 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:51 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:51 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:51 --> Controller Class Initialized
INFO - 2025-06-10 07:22:51 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-10 07:22:51 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:51 --> Form Validation Class Initialized
INFO - 2025-06-10 07:22:51 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:51 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:51 --> Database Driver Class Initialized
DEBUG - 2025-06-10 07:22:51 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:51 --> Model "LndModel" initialized
DEBUG - 2025-06-10 07:22:51 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-10 07:22:51 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:52 --> Final output sent to browser
DEBUG - 2025-06-10 07:22:52 --> Total execution time: 0.0412
INFO - 2025-06-10 07:22:58 --> Config Class Initialized
INFO - 2025-06-10 07:22:58 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:58 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:58 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:58 --> URI Class Initialized
INFO - 2025-06-10 07:22:58 --> Router Class Initialized
INFO - 2025-06-10 07:22:58 --> Output Class Initialized
INFO - 2025-06-10 07:22:58 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:58 --> Input Class Initialized
INFO - 2025-06-10 07:22:58 --> Language Class Initialized
INFO - 2025-06-10 07:22:58 --> Loader Class Initialized
INFO - 2025-06-10 07:22:58 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:58 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:58 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:58 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:58 --> Controller Class Initialized
INFO - 2025-06-10 07:22:58 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-10 07:22:58 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:58 --> Form Validation Class Initialized
INFO - 2025-06-10 07:22:58 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:58 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:58 --> Database Driver Class Initialized
DEBUG - 2025-06-10 07:22:59 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:59 --> Model "LndModel" initialized
DEBUG - 2025-06-10 07:22:59 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-10 07:22:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:59 --> Final output sent to browser
DEBUG - 2025-06-10 07:22:59 --> Total execution time: 0.0650
INFO - 2025-06-10 07:22:59 --> Config Class Initialized
INFO - 2025-06-10 07:22:59 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:59 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:59 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:59 --> URI Class Initialized
INFO - 2025-06-10 07:22:59 --> Router Class Initialized
INFO - 2025-06-10 07:22:59 --> Output Class Initialized
INFO - 2025-06-10 07:22:59 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:59 --> Input Class Initialized
INFO - 2025-06-10 07:22:59 --> Language Class Initialized
INFO - 2025-06-10 07:22:59 --> Loader Class Initialized
INFO - 2025-06-10 07:22:59 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:59 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:59 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:59 --> Config Class Initialized
INFO - 2025-06-10 07:22:59 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:22:59 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:22:59 --> Utf8 Class Initialized
INFO - 2025-06-10 07:22:59 --> URI Class Initialized
INFO - 2025-06-10 07:22:59 --> Router Class Initialized
INFO - 2025-06-10 07:22:59 --> Output Class Initialized
INFO - 2025-06-10 07:22:59 --> Security Class Initialized
DEBUG - 2025-06-10 07:22:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:22:59 --> Input Class Initialized
INFO - 2025-06-10 07:22:59 --> Language Class Initialized
INFO - 2025-06-10 07:22:59 --> Loader Class Initialized
INFO - 2025-06-10 07:22:59 --> Helper loaded: url_helper
INFO - 2025-06-10 07:22:59 --> Helper loaded: file_helper
INFO - 2025-06-10 07:22:59 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:59 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:59 --> Controller Class Initialized
INFO - 2025-06-10 07:22:59 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:59 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:22:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:59 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:59 --> Email Class Initialized
DEBUG - 2025-06-10 07:22:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:22:59 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:59 --> Final output sent to browser
DEBUG - 2025-06-10 07:22:59 --> Total execution time: 0.0222
INFO - 2025-06-10 07:22:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:22:59 --> Controller Class Initialized
INFO - 2025-06-10 07:22:59 --> Helper loaded: form_helper
INFO - 2025-06-10 07:22:59 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:22:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:22:59 --> Database Driver Class Initialized
INFO - 2025-06-10 07:22:59 --> Model "Crud" initialized
INFO - 2025-06-10 07:22:59 --> Final output sent to browser
DEBUG - 2025-06-10 07:22:59 --> Total execution time: 0.0404
INFO - 2025-06-10 07:23:02 --> Config Class Initialized
INFO - 2025-06-10 07:23:02 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:23:02 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:23:02 --> Utf8 Class Initialized
INFO - 2025-06-10 07:23:02 --> URI Class Initialized
INFO - 2025-06-10 07:23:02 --> Router Class Initialized
INFO - 2025-06-10 07:23:02 --> Output Class Initialized
INFO - 2025-06-10 07:23:02 --> Security Class Initialized
DEBUG - 2025-06-10 07:23:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:23:02 --> Input Class Initialized
INFO - 2025-06-10 07:23:02 --> Language Class Initialized
INFO - 2025-06-10 07:23:02 --> Loader Class Initialized
INFO - 2025-06-10 07:23:02 --> Helper loaded: url_helper
INFO - 2025-06-10 07:23:02 --> Helper loaded: file_helper
INFO - 2025-06-10 07:23:02 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:02 --> Email Class Initialized
DEBUG - 2025-06-10 07:23:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:23:02 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:23:02 --> Controller Class Initialized
INFO - 2025-06-10 07:23:02 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-10 07:23:02 --> Helper loaded: form_helper
INFO - 2025-06-10 07:23:02 --> Form Validation Class Initialized
INFO - 2025-06-10 07:23:02 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:02 --> Model "Crud" initialized
INFO - 2025-06-10 07:23:02 --> Database Driver Class Initialized
DEBUG - 2025-06-10 07:23:02 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:23:02 --> Model "LndModel" initialized
DEBUG - 2025-06-10 07:23:02 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-10 07:23:02 --> Session class already loaded. Second attempt ignored.
ERROR - 2025-06-10 07:23:02 --> Gagal memindahkan file. Error: assets/document/request-training/
ERROR - 2025-06-10 07:23:02 --> Gagal membuat approval: null
INFO - 2025-06-10 07:23:02 --> Final output sent to browser
DEBUG - 2025-06-10 07:23:02 --> Total execution time: 0.0605
INFO - 2025-06-10 07:23:02 --> Config Class Initialized
INFO - 2025-06-10 07:23:02 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:23:02 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:23:02 --> Utf8 Class Initialized
INFO - 2025-06-10 07:23:02 --> URI Class Initialized
INFO - 2025-06-10 07:23:02 --> Router Class Initialized
INFO - 2025-06-10 07:23:02 --> Output Class Initialized
INFO - 2025-06-10 07:23:02 --> Security Class Initialized
DEBUG - 2025-06-10 07:23:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:23:02 --> Input Class Initialized
INFO - 2025-06-10 07:23:02 --> Language Class Initialized
INFO - 2025-06-10 07:23:02 --> Loader Class Initialized
INFO - 2025-06-10 07:23:02 --> Helper loaded: url_helper
INFO - 2025-06-10 07:23:02 --> Helper loaded: file_helper
INFO - 2025-06-10 07:23:02 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:02 --> Email Class Initialized
DEBUG - 2025-06-10 07:23:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:23:02 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:23:02 --> Controller Class Initialized
INFO - 2025-06-10 07:23:02 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-10 07:23:02 --> Helper loaded: form_helper
INFO - 2025-06-10 07:23:02 --> Form Validation Class Initialized
INFO - 2025-06-10 07:23:02 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:02 --> Model "Crud" initialized
INFO - 2025-06-10 07:23:02 --> Database Driver Class Initialized
DEBUG - 2025-06-10 07:23:02 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:23:02 --> Model "LndModel" initialized
DEBUG - 2025-06-10 07:23:02 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-10 07:23:02 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:23:02 --> Final output sent to browser
DEBUG - 2025-06-10 07:23:02 --> Total execution time: 0.0226
INFO - 2025-06-10 07:23:02 --> Config Class Initialized
INFO - 2025-06-10 07:23:02 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:23:02 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:23:02 --> Utf8 Class Initialized
INFO - 2025-06-10 07:23:02 --> URI Class Initialized
INFO - 2025-06-10 07:23:02 --> Router Class Initialized
INFO - 2025-06-10 07:23:02 --> Output Class Initialized
INFO - 2025-06-10 07:23:02 --> Security Class Initialized
DEBUG - 2025-06-10 07:23:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:23:02 --> Input Class Initialized
INFO - 2025-06-10 07:23:02 --> Language Class Initialized
INFO - 2025-06-10 07:23:02 --> Loader Class Initialized
INFO - 2025-06-10 07:23:02 --> Helper loaded: url_helper
INFO - 2025-06-10 07:23:02 --> Helper loaded: file_helper
INFO - 2025-06-10 07:23:02 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:02 --> Email Class Initialized
DEBUG - 2025-06-10 07:23:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:23:02 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:23:02 --> Controller Class Initialized
INFO - 2025-06-10 07:23:02 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-10 07:23:02 --> Helper loaded: form_helper
INFO - 2025-06-10 07:23:02 --> Form Validation Class Initialized
INFO - 2025-06-10 07:23:02 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:02 --> Model "Crud" initialized
INFO - 2025-06-10 07:23:02 --> Database Driver Class Initialized
DEBUG - 2025-06-10 07:23:02 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:23:02 --> Model "LndModel" initialized
DEBUG - 2025-06-10 07:23:02 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-10 07:23:02 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:23:02 --> Final output sent to browser
DEBUG - 2025-06-10 07:23:02 --> Total execution time: 0.0233
INFO - 2025-06-10 07:23:09 --> Config Class Initialized
INFO - 2025-06-10 07:23:09 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:23:09 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:23:09 --> Utf8 Class Initialized
INFO - 2025-06-10 07:23:09 --> URI Class Initialized
INFO - 2025-06-10 07:23:09 --> Router Class Initialized
INFO - 2025-06-10 07:23:09 --> Output Class Initialized
INFO - 2025-06-10 07:23:09 --> Security Class Initialized
DEBUG - 2025-06-10 07:23:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:23:09 --> Config Class Initialized
INFO - 2025-06-10 07:23:09 --> Input Class Initialized
INFO - 2025-06-10 07:23:09 --> Hooks Class Initialized
INFO - 2025-06-10 07:23:09 --> Language Class Initialized
DEBUG - 2025-06-10 07:23:09 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:23:09 --> Utf8 Class Initialized
INFO - 2025-06-10 07:23:09 --> URI Class Initialized
INFO - 2025-06-10 07:23:09 --> Loader Class Initialized
INFO - 2025-06-10 07:23:09 --> Router Class Initialized
INFO - 2025-06-10 07:23:09 --> Output Class Initialized
INFO - 2025-06-10 07:23:09 --> Helper loaded: url_helper
INFO - 2025-06-10 07:23:09 --> Security Class Initialized
INFO - 2025-06-10 07:23:09 --> Helper loaded: file_helper
DEBUG - 2025-06-10 07:23:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:23:09 --> Input Class Initialized
INFO - 2025-06-10 07:23:09 --> Language Class Initialized
INFO - 2025-06-10 07:23:09 --> Loader Class Initialized
INFO - 2025-06-10 07:23:09 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:09 --> Helper loaded: url_helper
INFO - 2025-06-10 07:23:09 --> Helper loaded: file_helper
INFO - 2025-06-10 07:23:09 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:09 --> Email Class Initialized
INFO - 2025-06-10 07:23:09 --> Email Class Initialized
DEBUG - 2025-06-10 07:23:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-10 07:23:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:23:09 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:23:09 --> Controller Class Initialized
INFO - 2025-06-10 07:23:09 --> Helper loaded: form_helper
INFO - 2025-06-10 07:23:09 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:23:09 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:23:09 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:09 --> Model "Crud" initialized
INFO - 2025-06-10 07:23:09 --> Final output sent to browser
DEBUG - 2025-06-10 07:23:09 --> Total execution time: 0.0256
INFO - 2025-06-10 07:23:09 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:23:09 --> Controller Class Initialized
INFO - 2025-06-10 07:23:09 --> Helper loaded: form_helper
INFO - 2025-06-10 07:23:09 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:23:09 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:23:09 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:09 --> Model "Crud" initialized
INFO - 2025-06-10 07:23:09 --> Final output sent to browser
DEBUG - 2025-06-10 07:23:09 --> Total execution time: 0.0435
INFO - 2025-06-10 07:23:19 --> Config Class Initialized
INFO - 2025-06-10 07:23:19 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:23:19 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:23:19 --> Utf8 Class Initialized
INFO - 2025-06-10 07:23:19 --> URI Class Initialized
INFO - 2025-06-10 07:23:19 --> Router Class Initialized
INFO - 2025-06-10 07:23:19 --> Output Class Initialized
INFO - 2025-06-10 07:23:19 --> Security Class Initialized
DEBUG - 2025-06-10 07:23:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:23:19 --> Config Class Initialized
INFO - 2025-06-10 07:23:19 --> Input Class Initialized
INFO - 2025-06-10 07:23:19 --> Hooks Class Initialized
INFO - 2025-06-10 07:23:19 --> Language Class Initialized
DEBUG - 2025-06-10 07:23:19 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:23:19 --> Utf8 Class Initialized
INFO - 2025-06-10 07:23:19 --> URI Class Initialized
INFO - 2025-06-10 07:23:19 --> Router Class Initialized
INFO - 2025-06-10 07:23:19 --> Output Class Initialized
INFO - 2025-06-10 07:23:19 --> Security Class Initialized
DEBUG - 2025-06-10 07:23:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:23:19 --> Input Class Initialized
INFO - 2025-06-10 07:23:19 --> Loader Class Initialized
INFO - 2025-06-10 07:23:19 --> Language Class Initialized
INFO - 2025-06-10 07:23:19 --> Helper loaded: url_helper
INFO - 2025-06-10 07:23:19 --> Helper loaded: file_helper
INFO - 2025-06-10 07:23:19 --> Loader Class Initialized
INFO - 2025-06-10 07:23:19 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:19 --> Helper loaded: url_helper
INFO - 2025-06-10 07:23:19 --> Helper loaded: file_helper
INFO - 2025-06-10 07:23:19 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:19 --> Email Class Initialized
DEBUG - 2025-06-10 07:23:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:23:19 --> Email Class Initialized
DEBUG - 2025-06-10 07:23:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:23:19 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:23:19 --> Controller Class Initialized
INFO - 2025-06-10 07:23:19 --> Helper loaded: form_helper
INFO - 2025-06-10 07:23:19 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:23:19 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:23:19 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:19 --> Model "Crud" initialized
INFO - 2025-06-10 07:23:19 --> Final output sent to browser
DEBUG - 2025-06-10 07:23:19 --> Total execution time: 0.0231
INFO - 2025-06-10 07:23:19 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:23:19 --> Controller Class Initialized
INFO - 2025-06-10 07:23:19 --> Helper loaded: form_helper
INFO - 2025-06-10 07:23:19 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:23:19 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:23:19 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:19 --> Model "Crud" initialized
INFO - 2025-06-10 07:23:19 --> Final output sent to browser
DEBUG - 2025-06-10 07:23:19 --> Total execution time: 0.0419
INFO - 2025-06-10 07:23:29 --> Config Class Initialized
INFO - 2025-06-10 07:23:29 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:23:29 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:23:29 --> Utf8 Class Initialized
INFO - 2025-06-10 07:23:29 --> URI Class Initialized
INFO - 2025-06-10 07:23:29 --> Router Class Initialized
INFO - 2025-06-10 07:23:29 --> Output Class Initialized
INFO - 2025-06-10 07:23:29 --> Security Class Initialized
DEBUG - 2025-06-10 07:23:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:23:29 --> Input Class Initialized
INFO - 2025-06-10 07:23:29 --> Language Class Initialized
INFO - 2025-06-10 07:23:29 --> Config Class Initialized
INFO - 2025-06-10 07:23:29 --> Loader Class Initialized
INFO - 2025-06-10 07:23:29 --> Hooks Class Initialized
INFO - 2025-06-10 07:23:29 --> Helper loaded: url_helper
DEBUG - 2025-06-10 07:23:29 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:23:29 --> Helper loaded: file_helper
INFO - 2025-06-10 07:23:29 --> Utf8 Class Initialized
INFO - 2025-06-10 07:23:29 --> URI Class Initialized
INFO - 2025-06-10 07:23:29 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:29 --> Router Class Initialized
INFO - 2025-06-10 07:23:29 --> Output Class Initialized
INFO - 2025-06-10 07:23:29 --> Security Class Initialized
DEBUG - 2025-06-10 07:23:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:23:29 --> Input Class Initialized
INFO - 2025-06-10 07:23:29 --> Language Class Initialized
INFO - 2025-06-10 07:23:29 --> Loader Class Initialized
INFO - 2025-06-10 07:23:29 --> Helper loaded: url_helper
INFO - 2025-06-10 07:23:29 --> Helper loaded: file_helper
INFO - 2025-06-10 07:23:29 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:29 --> Email Class Initialized
INFO - 2025-06-10 07:23:29 --> Email Class Initialized
DEBUG - 2025-06-10 07:23:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-10 07:23:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:23:29 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:23:29 --> Controller Class Initialized
INFO - 2025-06-10 07:23:29 --> Helper loaded: form_helper
INFO - 2025-06-10 07:23:29 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:23:29 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:23:29 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:29 --> Model "Crud" initialized
INFO - 2025-06-10 07:23:29 --> Final output sent to browser
DEBUG - 2025-06-10 07:23:29 --> Total execution time: 0.0215
INFO - 2025-06-10 07:23:29 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:23:29 --> Controller Class Initialized
INFO - 2025-06-10 07:23:29 --> Helper loaded: form_helper
INFO - 2025-06-10 07:23:29 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:23:29 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:23:29 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:29 --> Model "Crud" initialized
INFO - 2025-06-10 07:23:29 --> Final output sent to browser
DEBUG - 2025-06-10 07:23:29 --> Total execution time: 0.0461
INFO - 2025-06-10 07:23:39 --> Config Class Initialized
INFO - 2025-06-10 07:23:39 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:23:39 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:23:39 --> Utf8 Class Initialized
INFO - 2025-06-10 07:23:39 --> URI Class Initialized
INFO - 2025-06-10 07:23:39 --> Router Class Initialized
INFO - 2025-06-10 07:23:39 --> Output Class Initialized
INFO - 2025-06-10 07:23:39 --> Security Class Initialized
DEBUG - 2025-06-10 07:23:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:23:39 --> Input Class Initialized
INFO - 2025-06-10 07:23:39 --> Language Class Initialized
INFO - 2025-06-10 07:23:39 --> Loader Class Initialized
INFO - 2025-06-10 07:23:39 --> Config Class Initialized
INFO - 2025-06-10 07:23:39 --> Hooks Class Initialized
INFO - 2025-06-10 07:23:39 --> Helper loaded: url_helper
DEBUG - 2025-06-10 07:23:39 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:23:39 --> Helper loaded: file_helper
INFO - 2025-06-10 07:23:39 --> Utf8 Class Initialized
INFO - 2025-06-10 07:23:39 --> URI Class Initialized
INFO - 2025-06-10 07:23:39 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:39 --> Router Class Initialized
INFO - 2025-06-10 07:23:39 --> Output Class Initialized
INFO - 2025-06-10 07:23:39 --> Security Class Initialized
DEBUG - 2025-06-10 07:23:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:23:39 --> Input Class Initialized
INFO - 2025-06-10 07:23:39 --> Language Class Initialized
INFO - 2025-06-10 07:23:39 --> Loader Class Initialized
INFO - 2025-06-10 07:23:39 --> Helper loaded: url_helper
INFO - 2025-06-10 07:23:39 --> Helper loaded: file_helper
INFO - 2025-06-10 07:23:39 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:39 --> Email Class Initialized
DEBUG - 2025-06-10 07:23:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:23:39 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:23:39 --> Controller Class Initialized
INFO - 2025-06-10 07:23:39 --> Email Class Initialized
INFO - 2025-06-10 07:23:39 --> Helper loaded: form_helper
INFO - 2025-06-10 07:23:39 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:23:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-06-10 07:23:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:23:39 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:39 --> Model "Crud" initialized
INFO - 2025-06-10 07:23:39 --> Final output sent to browser
DEBUG - 2025-06-10 07:23:39 --> Total execution time: 0.0278
INFO - 2025-06-10 07:23:39 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:23:39 --> Controller Class Initialized
INFO - 2025-06-10 07:23:39 --> Helper loaded: form_helper
INFO - 2025-06-10 07:23:39 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:23:39 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:23:39 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:39 --> Model "Crud" initialized
INFO - 2025-06-10 07:23:39 --> Final output sent to browser
DEBUG - 2025-06-10 07:23:39 --> Total execution time: 0.0503
INFO - 2025-06-10 07:23:46 --> Config Class Initialized
INFO - 2025-06-10 07:23:46 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:23:46 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:23:46 --> Utf8 Class Initialized
INFO - 2025-06-10 07:23:46 --> URI Class Initialized
INFO - 2025-06-10 07:23:46 --> Router Class Initialized
INFO - 2025-06-10 07:23:46 --> Output Class Initialized
INFO - 2025-06-10 07:23:46 --> Security Class Initialized
DEBUG - 2025-06-10 07:23:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:23:46 --> Input Class Initialized
INFO - 2025-06-10 07:23:46 --> Language Class Initialized
INFO - 2025-06-10 07:23:46 --> Loader Class Initialized
INFO - 2025-06-10 07:23:46 --> Helper loaded: url_helper
INFO - 2025-06-10 07:23:46 --> Helper loaded: file_helper
INFO - 2025-06-10 07:23:46 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:46 --> Email Class Initialized
DEBUG - 2025-06-10 07:23:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:23:46 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:23:46 --> Controller Class Initialized
INFO - 2025-06-10 07:23:46 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-10 07:23:46 --> Helper loaded: form_helper
INFO - 2025-06-10 07:23:46 --> Form Validation Class Initialized
INFO - 2025-06-10 07:23:46 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:46 --> Model "Crud" initialized
INFO - 2025-06-10 07:23:46 --> Database Driver Class Initialized
DEBUG - 2025-06-10 07:23:46 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:23:46 --> Model "LndModel" initialized
DEBUG - 2025-06-10 07:23:46 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-10 07:23:46 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:23:46 --> Final output sent to browser
DEBUG - 2025-06-10 07:23:46 --> Total execution time: 0.0250
INFO - 2025-06-10 07:23:49 --> Config Class Initialized
INFO - 2025-06-10 07:23:49 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:23:49 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:23:49 --> Utf8 Class Initialized
INFO - 2025-06-10 07:23:49 --> URI Class Initialized
INFO - 2025-06-10 07:23:49 --> Router Class Initialized
INFO - 2025-06-10 07:23:49 --> Output Class Initialized
INFO - 2025-06-10 07:23:49 --> Security Class Initialized
DEBUG - 2025-06-10 07:23:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:23:49 --> Input Class Initialized
INFO - 2025-06-10 07:23:49 --> Language Class Initialized
INFO - 2025-06-10 07:23:49 --> Loader Class Initialized
INFO - 2025-06-10 07:23:49 --> Helper loaded: url_helper
INFO - 2025-06-10 07:23:49 --> Helper loaded: file_helper
INFO - 2025-06-10 07:23:49 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:49 --> Email Class Initialized
INFO - 2025-06-10 07:23:49 --> Config Class Initialized
INFO - 2025-06-10 07:23:49 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:23:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-10 07:23:49 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:23:49 --> Utf8 Class Initialized
INFO - 2025-06-10 07:23:49 --> URI Class Initialized
INFO - 2025-06-10 07:23:49 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:23:49 --> Router Class Initialized
INFO - 2025-06-10 07:23:49 --> Controller Class Initialized
INFO - 2025-06-10 07:23:49 --> Output Class Initialized
INFO - 2025-06-10 07:23:49 --> Security Class Initialized
INFO - 2025-06-10 07:23:49 --> Helper loaded: form_helper
DEBUG - 2025-06-10 07:23:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:23:49 --> Input Class Initialized
INFO - 2025-06-10 07:23:49 --> Form Validation Class Initialized
INFO - 2025-06-10 07:23:49 --> Language Class Initialized
DEBUG - 2025-06-10 07:23:49 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:23:49 --> Loader Class Initialized
INFO - 2025-06-10 07:23:49 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:49 --> Helper loaded: url_helper
INFO - 2025-06-10 07:23:49 --> Helper loaded: file_helper
INFO - 2025-06-10 07:23:49 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:49 --> Model "Crud" initialized
INFO - 2025-06-10 07:23:49 --> Email Class Initialized
DEBUG - 2025-06-10 07:23:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:23:49 --> Final output sent to browser
DEBUG - 2025-06-10 07:23:49 --> Total execution time: 0.0179
INFO - 2025-06-10 07:23:49 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:23:49 --> Controller Class Initialized
INFO - 2025-06-10 07:23:49 --> Helper loaded: form_helper
INFO - 2025-06-10 07:23:49 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:23:49 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:23:49 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:49 --> Model "Crud" initialized
INFO - 2025-06-10 07:23:49 --> Final output sent to browser
DEBUG - 2025-06-10 07:23:49 --> Total execution time: 0.0301
INFO - 2025-06-10 07:23:59 --> Config Class Initialized
INFO - 2025-06-10 07:23:59 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:23:59 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:23:59 --> Utf8 Class Initialized
INFO - 2025-06-10 07:23:59 --> URI Class Initialized
INFO - 2025-06-10 07:23:59 --> Router Class Initialized
INFO - 2025-06-10 07:23:59 --> Output Class Initialized
INFO - 2025-06-10 07:23:59 --> Config Class Initialized
INFO - 2025-06-10 07:23:59 --> Hooks Class Initialized
INFO - 2025-06-10 07:23:59 --> Security Class Initialized
DEBUG - 2025-06-10 07:23:59 --> UTF-8 Support Enabled
DEBUG - 2025-06-10 07:23:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:23:59 --> Utf8 Class Initialized
INFO - 2025-06-10 07:23:59 --> Input Class Initialized
INFO - 2025-06-10 07:23:59 --> Language Class Initialized
INFO - 2025-06-10 07:23:59 --> URI Class Initialized
INFO - 2025-06-10 07:23:59 --> Loader Class Initialized
INFO - 2025-06-10 07:23:59 --> Router Class Initialized
INFO - 2025-06-10 07:23:59 --> Helper loaded: url_helper
INFO - 2025-06-10 07:23:59 --> Output Class Initialized
INFO - 2025-06-10 07:23:59 --> Helper loaded: file_helper
INFO - 2025-06-10 07:23:59 --> Security Class Initialized
DEBUG - 2025-06-10 07:23:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:23:59 --> Input Class Initialized
INFO - 2025-06-10 07:23:59 --> Language Class Initialized
INFO - 2025-06-10 07:23:59 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:59 --> Loader Class Initialized
INFO - 2025-06-10 07:23:59 --> Helper loaded: url_helper
INFO - 2025-06-10 07:23:59 --> Helper loaded: file_helper
INFO - 2025-06-10 07:23:59 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:59 --> Email Class Initialized
DEBUG - 2025-06-10 07:23:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:23:59 --> Email Class Initialized
DEBUG - 2025-06-10 07:23:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:23:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:23:59 --> Controller Class Initialized
INFO - 2025-06-10 07:23:59 --> Helper loaded: form_helper
INFO - 2025-06-10 07:23:59 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:23:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:23:59 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:59 --> Model "Crud" initialized
INFO - 2025-06-10 07:23:59 --> Final output sent to browser
DEBUG - 2025-06-10 07:23:59 --> Total execution time: 0.0307
INFO - 2025-06-10 07:23:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:23:59 --> Controller Class Initialized
INFO - 2025-06-10 07:23:59 --> Helper loaded: form_helper
INFO - 2025-06-10 07:23:59 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:23:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:23:59 --> Database Driver Class Initialized
INFO - 2025-06-10 07:23:59 --> Model "Crud" initialized
INFO - 2025-06-10 07:23:59 --> Final output sent to browser
DEBUG - 2025-06-10 07:23:59 --> Total execution time: 0.0455
INFO - 2025-06-10 07:35:31 --> Config Class Initialized
INFO - 2025-06-10 07:35:31 --> Config Class Initialized
INFO - 2025-06-10 07:35:31 --> Hooks Class Initialized
INFO - 2025-06-10 07:35:31 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:35:31 --> UTF-8 Support Enabled
DEBUG - 2025-06-10 07:35:31 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:35:31 --> Utf8 Class Initialized
INFO - 2025-06-10 07:35:31 --> Utf8 Class Initialized
INFO - 2025-06-10 07:35:31 --> URI Class Initialized
INFO - 2025-06-10 07:35:31 --> URI Class Initialized
INFO - 2025-06-10 07:35:31 --> Router Class Initialized
INFO - 2025-06-10 07:35:31 --> Router Class Initialized
INFO - 2025-06-10 07:35:31 --> Output Class Initialized
INFO - 2025-06-10 07:35:31 --> Output Class Initialized
INFO - 2025-06-10 07:35:31 --> Security Class Initialized
INFO - 2025-06-10 07:35:31 --> Security Class Initialized
DEBUG - 2025-06-10 07:35:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-10 07:35:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:35:31 --> Input Class Initialized
INFO - 2025-06-10 07:35:31 --> Input Class Initialized
INFO - 2025-06-10 07:35:31 --> Language Class Initialized
INFO - 2025-06-10 07:35:31 --> Language Class Initialized
INFO - 2025-06-10 07:35:31 --> Loader Class Initialized
INFO - 2025-06-10 07:35:31 --> Loader Class Initialized
INFO - 2025-06-10 07:35:31 --> Helper loaded: url_helper
INFO - 2025-06-10 07:35:31 --> Helper loaded: url_helper
INFO - 2025-06-10 07:35:31 --> Helper loaded: file_helper
INFO - 2025-06-10 07:35:31 --> Helper loaded: file_helper
INFO - 2025-06-10 07:35:31 --> Database Driver Class Initialized
INFO - 2025-06-10 07:35:31 --> Database Driver Class Initialized
INFO - 2025-06-10 07:35:31 --> Email Class Initialized
INFO - 2025-06-10 07:35:31 --> Email Class Initialized
DEBUG - 2025-06-10 07:35:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-10 07:35:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:35:31 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:35:31 --> Controller Class Initialized
INFO - 2025-06-10 07:35:31 --> Helper loaded: form_helper
INFO - 2025-06-10 07:35:31 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:35:31 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:35:31 --> Database Driver Class Initialized
INFO - 2025-06-10 07:35:31 --> Model "Crud" initialized
INFO - 2025-06-10 07:35:31 --> Final output sent to browser
DEBUG - 2025-06-10 07:35:31 --> Total execution time: 0.0297
INFO - 2025-06-10 07:35:31 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:35:31 --> Controller Class Initialized
INFO - 2025-06-10 07:35:31 --> Helper loaded: form_helper
INFO - 2025-06-10 07:35:31 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:35:31 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:35:31 --> Database Driver Class Initialized
INFO - 2025-06-10 07:35:31 --> Model "Crud" initialized
INFO - 2025-06-10 07:35:31 --> Final output sent to browser
DEBUG - 2025-06-10 07:35:31 --> Total execution time: 0.0529
INFO - 2025-06-10 07:35:36 --> Config Class Initialized
INFO - 2025-06-10 07:35:36 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:35:36 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:35:36 --> Utf8 Class Initialized
INFO - 2025-06-10 07:35:36 --> URI Class Initialized
INFO - 2025-06-10 07:35:36 --> Router Class Initialized
INFO - 2025-06-10 07:35:36 --> Output Class Initialized
INFO - 2025-06-10 07:35:36 --> Security Class Initialized
DEBUG - 2025-06-10 07:35:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:35:36 --> Input Class Initialized
INFO - 2025-06-10 07:35:36 --> Language Class Initialized
INFO - 2025-06-10 07:35:36 --> Loader Class Initialized
INFO - 2025-06-10 07:35:36 --> Helper loaded: url_helper
INFO - 2025-06-10 07:35:36 --> Helper loaded: file_helper
INFO - 2025-06-10 07:35:36 --> Database Driver Class Initialized
INFO - 2025-06-10 07:35:36 --> Email Class Initialized
DEBUG - 2025-06-10 07:35:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:35:36 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:35:36 --> Controller Class Initialized
INFO - 2025-06-10 07:35:36 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-10 07:35:36 --> Helper loaded: form_helper
INFO - 2025-06-10 07:35:36 --> Form Validation Class Initialized
INFO - 2025-06-10 07:35:36 --> Database Driver Class Initialized
INFO - 2025-06-10 07:35:36 --> Model "Crud" initialized
INFO - 2025-06-10 07:35:36 --> Database Driver Class Initialized
DEBUG - 2025-06-10 07:35:36 --> Uuid class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:35:36 --> Model "LndModel" initialized
DEBUG - 2025-06-10 07:35:36 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-10 07:35:36 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:35:36 --> Final output sent to browser
DEBUG - 2025-06-10 07:35:36 --> Total execution time: 0.0163
INFO - 2025-06-10 07:35:39 --> Config Class Initialized
INFO - 2025-06-10 07:35:39 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:35:39 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:35:39 --> Utf8 Class Initialized
INFO - 2025-06-10 07:35:39 --> URI Class Initialized
INFO - 2025-06-10 07:35:39 --> Router Class Initialized
INFO - 2025-06-10 07:35:39 --> Output Class Initialized
INFO - 2025-06-10 07:35:39 --> Security Class Initialized
DEBUG - 2025-06-10 07:35:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:35:39 --> Input Class Initialized
INFO - 2025-06-10 07:35:39 --> Language Class Initialized
INFO - 2025-06-10 07:35:39 --> Loader Class Initialized
INFO - 2025-06-10 07:35:39 --> Helper loaded: url_helper
INFO - 2025-06-10 07:35:39 --> Helper loaded: file_helper
INFO - 2025-06-10 07:35:39 --> Database Driver Class Initialized
INFO - 2025-06-10 07:35:39 --> Email Class Initialized
INFO - 2025-06-10 07:35:39 --> Config Class Initialized
DEBUG - 2025-06-10 07:35:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:35:39 --> Hooks Class Initialized
INFO - 2025-06-10 07:35:39 --> Session: Class initialized using 'files' driver.
DEBUG - 2025-06-10 07:35:39 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:35:39 --> Utf8 Class Initialized
INFO - 2025-06-10 07:35:39 --> Controller Class Initialized
INFO - 2025-06-10 07:35:39 --> URI Class Initialized
INFO - 2025-06-10 07:35:39 --> Helper loaded: form_helper
INFO - 2025-06-10 07:35:39 --> Form Validation Class Initialized
INFO - 2025-06-10 07:35:39 --> Router Class Initialized
DEBUG - 2025-06-10 07:35:39 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:35:39 --> Output Class Initialized
INFO - 2025-06-10 07:35:39 --> Security Class Initialized
INFO - 2025-06-10 07:35:39 --> Database Driver Class Initialized
DEBUG - 2025-06-10 07:35:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:35:39 --> Input Class Initialized
INFO - 2025-06-10 07:35:39 --> Language Class Initialized
INFO - 2025-06-10 07:35:39 --> Loader Class Initialized
INFO - 2025-06-10 07:35:39 --> Helper loaded: url_helper
INFO - 2025-06-10 07:35:39 --> Helper loaded: file_helper
INFO - 2025-06-10 07:35:39 --> Database Driver Class Initialized
INFO - 2025-06-10 07:35:39 --> Email Class Initialized
INFO - 2025-06-10 07:35:39 --> Model "Crud" initialized
DEBUG - 2025-06-10 07:35:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:35:39 --> Final output sent to browser
DEBUG - 2025-06-10 07:35:39 --> Total execution time: 0.0378
INFO - 2025-06-10 07:35:39 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:35:39 --> Controller Class Initialized
INFO - 2025-06-10 07:35:39 --> Helper loaded: form_helper
INFO - 2025-06-10 07:35:39 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:35:39 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:35:39 --> Database Driver Class Initialized
INFO - 2025-06-10 07:35:39 --> Model "Crud" initialized
INFO - 2025-06-10 07:35:39 --> Final output sent to browser
DEBUG - 2025-06-10 07:35:39 --> Total execution time: 0.0469
INFO - 2025-06-10 07:35:49 --> Config Class Initialized
INFO - 2025-06-10 07:35:49 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:35:49 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:35:49 --> Utf8 Class Initialized
INFO - 2025-06-10 07:35:49 --> URI Class Initialized
INFO - 2025-06-10 07:35:49 --> Router Class Initialized
INFO - 2025-06-10 07:35:49 --> Output Class Initialized
INFO - 2025-06-10 07:35:49 --> Security Class Initialized
INFO - 2025-06-10 07:35:49 --> Config Class Initialized
DEBUG - 2025-06-10 07:35:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:35:49 --> Hooks Class Initialized
INFO - 2025-06-10 07:35:49 --> Input Class Initialized
INFO - 2025-06-10 07:35:49 --> Language Class Initialized
DEBUG - 2025-06-10 07:35:49 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:35:49 --> Utf8 Class Initialized
INFO - 2025-06-10 07:35:49 --> Loader Class Initialized
INFO - 2025-06-10 07:35:49 --> URI Class Initialized
INFO - 2025-06-10 07:35:49 --> Helper loaded: url_helper
INFO - 2025-06-10 07:35:49 --> Helper loaded: file_helper
INFO - 2025-06-10 07:35:49 --> Router Class Initialized
INFO - 2025-06-10 07:35:49 --> Output Class Initialized
INFO - 2025-06-10 07:35:49 --> Database Driver Class Initialized
INFO - 2025-06-10 07:35:49 --> Security Class Initialized
DEBUG - 2025-06-10 07:35:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:35:49 --> Input Class Initialized
INFO - 2025-06-10 07:35:49 --> Language Class Initialized
INFO - 2025-06-10 07:35:49 --> Loader Class Initialized
INFO - 2025-06-10 07:35:49 --> Helper loaded: url_helper
INFO - 2025-06-10 07:35:49 --> Helper loaded: file_helper
INFO - 2025-06-10 07:35:49 --> Database Driver Class Initialized
INFO - 2025-06-10 07:35:49 --> Email Class Initialized
INFO - 2025-06-10 07:35:49 --> Email Class Initialized
DEBUG - 2025-06-10 07:35:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-10 07:35:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:35:49 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:35:49 --> Controller Class Initialized
INFO - 2025-06-10 07:35:49 --> Helper loaded: form_helper
INFO - 2025-06-10 07:35:49 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:35:49 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:35:49 --> Database Driver Class Initialized
INFO - 2025-06-10 07:35:49 --> Model "Crud" initialized
INFO - 2025-06-10 07:35:49 --> Final output sent to browser
DEBUG - 2025-06-10 07:35:49 --> Total execution time: 0.0200
INFO - 2025-06-10 07:35:49 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:35:49 --> Controller Class Initialized
INFO - 2025-06-10 07:35:49 --> Helper loaded: form_helper
INFO - 2025-06-10 07:35:49 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:35:49 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:35:49 --> Database Driver Class Initialized
INFO - 2025-06-10 07:35:49 --> Model "Crud" initialized
INFO - 2025-06-10 07:35:49 --> Final output sent to browser
DEBUG - 2025-06-10 07:35:49 --> Total execution time: 0.0339
INFO - 2025-06-10 07:37:02 --> Config Class Initialized
INFO - 2025-06-10 07:37:02 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:37:02 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:37:02 --> Utf8 Class Initialized
INFO - 2025-06-10 07:37:02 --> URI Class Initialized
INFO - 2025-06-10 07:37:02 --> Router Class Initialized
INFO - 2025-06-10 07:37:02 --> Output Class Initialized
INFO - 2025-06-10 07:37:02 --> Security Class Initialized
DEBUG - 2025-06-10 07:37:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:37:02 --> Input Class Initialized
INFO - 2025-06-10 07:37:02 --> Language Class Initialized
INFO - 2025-06-10 07:37:02 --> Loader Class Initialized
INFO - 2025-06-10 07:37:02 --> Helper loaded: url_helper
INFO - 2025-06-10 07:37:02 --> Helper loaded: file_helper
INFO - 2025-06-10 07:37:02 --> Database Driver Class Initialized
INFO - 2025-06-10 07:37:02 --> Config Class Initialized
INFO - 2025-06-10 07:37:02 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:37:02 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:37:02 --> Utf8 Class Initialized
INFO - 2025-06-10 07:37:02 --> URI Class Initialized
INFO - 2025-06-10 07:37:02 --> Router Class Initialized
INFO - 2025-06-10 07:37:02 --> Output Class Initialized
INFO - 2025-06-10 07:37:02 --> Security Class Initialized
DEBUG - 2025-06-10 07:37:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:37:02 --> Input Class Initialized
INFO - 2025-06-10 07:37:02 --> Language Class Initialized
INFO - 2025-06-10 07:37:02 --> Loader Class Initialized
INFO - 2025-06-10 07:37:02 --> Helper loaded: url_helper
INFO - 2025-06-10 07:37:02 --> Helper loaded: file_helper
INFO - 2025-06-10 07:37:02 --> Database Driver Class Initialized
INFO - 2025-06-10 07:37:02 --> Email Class Initialized
INFO - 2025-06-10 07:37:02 --> Email Class Initialized
DEBUG - 2025-06-10 07:37:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-10 07:37:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:37:02 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:37:02 --> Controller Class Initialized
INFO - 2025-06-10 07:37:02 --> Helper loaded: form_helper
INFO - 2025-06-10 07:37:02 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:37:02 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:37:02 --> Database Driver Class Initialized
INFO - 2025-06-10 07:37:02 --> Model "Crud" initialized
INFO - 2025-06-10 07:37:02 --> Final output sent to browser
DEBUG - 2025-06-10 07:37:02 --> Total execution time: 0.0396
INFO - 2025-06-10 07:37:02 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:37:02 --> Controller Class Initialized
INFO - 2025-06-10 07:37:02 --> Helper loaded: form_helper
INFO - 2025-06-10 07:37:02 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:37:02 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:37:02 --> Database Driver Class Initialized
INFO - 2025-06-10 07:37:02 --> Model "Crud" initialized
INFO - 2025-06-10 07:37:02 --> Final output sent to browser
DEBUG - 2025-06-10 07:37:02 --> Total execution time: 0.0579
INFO - 2025-06-10 07:37:09 --> Config Class Initialized
INFO - 2025-06-10 07:37:09 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:37:09 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:37:09 --> Utf8 Class Initialized
INFO - 2025-06-10 07:37:09 --> URI Class Initialized
INFO - 2025-06-10 07:37:09 --> Router Class Initialized
INFO - 2025-06-10 07:37:09 --> Output Class Initialized
INFO - 2025-06-10 07:37:09 --> Security Class Initialized
DEBUG - 2025-06-10 07:37:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:37:09 --> Input Class Initialized
INFO - 2025-06-10 07:37:09 --> Language Class Initialized
INFO - 2025-06-10 07:37:09 --> Loader Class Initialized
INFO - 2025-06-10 07:37:09 --> Helper loaded: url_helper
INFO - 2025-06-10 07:37:09 --> Helper loaded: file_helper
INFO - 2025-06-10 07:37:09 --> Database Driver Class Initialized
INFO - 2025-06-10 07:37:09 --> Config Class Initialized
INFO - 2025-06-10 07:37:09 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:37:09 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:37:09 --> Utf8 Class Initialized
INFO - 2025-06-10 07:37:09 --> URI Class Initialized
INFO - 2025-06-10 07:37:09 --> Router Class Initialized
INFO - 2025-06-10 07:37:09 --> Output Class Initialized
INFO - 2025-06-10 07:37:09 --> Security Class Initialized
DEBUG - 2025-06-10 07:37:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:37:09 --> Input Class Initialized
INFO - 2025-06-10 07:37:09 --> Language Class Initialized
INFO - 2025-06-10 07:37:09 --> Loader Class Initialized
INFO - 2025-06-10 07:37:09 --> Helper loaded: url_helper
INFO - 2025-06-10 07:37:09 --> Helper loaded: file_helper
INFO - 2025-06-10 07:37:09 --> Database Driver Class Initialized
INFO - 2025-06-10 07:37:09 --> Email Class Initialized
DEBUG - 2025-06-10 07:37:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:37:09 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:37:09 --> Controller Class Initialized
INFO - 2025-06-10 07:37:09 --> Helper loaded: form_helper
INFO - 2025-06-10 07:37:09 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:37:09 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:37:09 --> Database Driver Class Initialized
INFO - 2025-06-10 07:37:09 --> Email Class Initialized
DEBUG - 2025-06-10 07:37:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:37:09 --> Model "Crud" initialized
INFO - 2025-06-10 07:37:09 --> Final output sent to browser
DEBUG - 2025-06-10 07:37:09 --> Total execution time: 0.0221
INFO - 2025-06-10 07:37:09 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:37:09 --> Controller Class Initialized
INFO - 2025-06-10 07:37:09 --> Helper loaded: form_helper
INFO - 2025-06-10 07:37:09 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:37:09 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:37:09 --> Database Driver Class Initialized
INFO - 2025-06-10 07:37:09 --> Model "Crud" initialized
INFO - 2025-06-10 07:37:09 --> Final output sent to browser
DEBUG - 2025-06-10 07:37:09 --> Total execution time: 0.0356
INFO - 2025-06-10 07:39:43 --> Config Class Initialized
INFO - 2025-06-10 07:39:43 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:39:43 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:39:43 --> Utf8 Class Initialized
INFO - 2025-06-10 07:39:43 --> URI Class Initialized
INFO - 2025-06-10 07:39:43 --> Router Class Initialized
INFO - 2025-06-10 07:39:43 --> Output Class Initialized
INFO - 2025-06-10 07:39:43 --> Security Class Initialized
DEBUG - 2025-06-10 07:39:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:39:43 --> Input Class Initialized
INFO - 2025-06-10 07:39:43 --> Language Class Initialized
INFO - 2025-06-10 07:39:43 --> Loader Class Initialized
INFO - 2025-06-10 07:39:43 --> Helper loaded: url_helper
INFO - 2025-06-10 07:39:43 --> Helper loaded: file_helper
INFO - 2025-06-10 07:39:43 --> Database Driver Class Initialized
INFO - 2025-06-10 07:39:43 --> Config Class Initialized
INFO - 2025-06-10 07:39:43 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:39:43 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:39:43 --> Utf8 Class Initialized
INFO - 2025-06-10 07:39:43 --> URI Class Initialized
INFO - 2025-06-10 07:39:43 --> Router Class Initialized
INFO - 2025-06-10 07:39:43 --> Output Class Initialized
INFO - 2025-06-10 07:39:43 --> Security Class Initialized
DEBUG - 2025-06-10 07:39:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:39:43 --> Input Class Initialized
INFO - 2025-06-10 07:39:43 --> Language Class Initialized
INFO - 2025-06-10 07:39:43 --> Loader Class Initialized
INFO - 2025-06-10 07:39:43 --> Helper loaded: url_helper
INFO - 2025-06-10 07:39:43 --> Helper loaded: file_helper
INFO - 2025-06-10 07:39:43 --> Database Driver Class Initialized
INFO - 2025-06-10 07:39:43 --> Email Class Initialized
DEBUG - 2025-06-10 07:39:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:39:43 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:39:43 --> Controller Class Initialized
INFO - 2025-06-10 07:39:43 --> Helper loaded: form_helper
INFO - 2025-06-10 07:39:43 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:39:43 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:39:43 --> Database Driver Class Initialized
INFO - 2025-06-10 07:39:43 --> Email Class Initialized
DEBUG - 2025-06-10 07:39:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:39:43 --> Model "Crud" initialized
INFO - 2025-06-10 07:39:43 --> Final output sent to browser
DEBUG - 2025-06-10 07:39:43 --> Total execution time: 0.0293
INFO - 2025-06-10 07:39:43 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:39:43 --> Controller Class Initialized
INFO - 2025-06-10 07:39:43 --> Helper loaded: form_helper
INFO - 2025-06-10 07:39:43 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:39:43 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:39:43 --> Database Driver Class Initialized
INFO - 2025-06-10 07:39:43 --> Model "Crud" initialized
INFO - 2025-06-10 07:39:43 --> Final output sent to browser
DEBUG - 2025-06-10 07:39:43 --> Total execution time: 0.0483
INFO - 2025-06-10 07:39:49 --> Config Class Initialized
INFO - 2025-06-10 07:39:49 --> Config Class Initialized
INFO - 2025-06-10 07:39:49 --> Hooks Class Initialized
INFO - 2025-06-10 07:39:49 --> Hooks Class Initialized
DEBUG - 2025-06-10 07:39:49 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:39:49 --> Utf8 Class Initialized
DEBUG - 2025-06-10 07:39:49 --> UTF-8 Support Enabled
INFO - 2025-06-10 07:39:49 --> Utf8 Class Initialized
INFO - 2025-06-10 07:39:49 --> URI Class Initialized
INFO - 2025-06-10 07:39:49 --> URI Class Initialized
INFO - 2025-06-10 07:39:49 --> Router Class Initialized
INFO - 2025-06-10 07:39:49 --> Router Class Initialized
INFO - 2025-06-10 07:39:49 --> Output Class Initialized
INFO - 2025-06-10 07:39:49 --> Output Class Initialized
INFO - 2025-06-10 07:39:49 --> Security Class Initialized
INFO - 2025-06-10 07:39:49 --> Security Class Initialized
DEBUG - 2025-06-10 07:39:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:39:49 --> Input Class Initialized
DEBUG - 2025-06-10 07:39:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-10 07:39:49 --> Language Class Initialized
INFO - 2025-06-10 07:39:49 --> Input Class Initialized
INFO - 2025-06-10 07:39:49 --> Language Class Initialized
INFO - 2025-06-10 07:39:49 --> Loader Class Initialized
INFO - 2025-06-10 07:39:49 --> Loader Class Initialized
INFO - 2025-06-10 07:39:49 --> Helper loaded: url_helper
INFO - 2025-06-10 07:39:49 --> Helper loaded: url_helper
INFO - 2025-06-10 07:39:49 --> Helper loaded: file_helper
INFO - 2025-06-10 07:39:49 --> Helper loaded: file_helper
INFO - 2025-06-10 07:39:49 --> Database Driver Class Initialized
INFO - 2025-06-10 07:39:49 --> Database Driver Class Initialized
INFO - 2025-06-10 07:39:49 --> Email Class Initialized
INFO - 2025-06-10 07:39:49 --> Email Class Initialized
DEBUG - 2025-06-10 07:39:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:39:49 --> Session: Class initialized using 'files' driver.
DEBUG - 2025-06-10 07:39:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-10 07:39:49 --> Controller Class Initialized
INFO - 2025-06-10 07:39:49 --> Helper loaded: form_helper
INFO - 2025-06-10 07:39:49 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:39:49 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:39:49 --> Database Driver Class Initialized
INFO - 2025-06-10 07:39:49 --> Model "Crud" initialized
INFO - 2025-06-10 07:39:49 --> Final output sent to browser
DEBUG - 2025-06-10 07:39:49 --> Total execution time: 0.0182
INFO - 2025-06-10 07:39:49 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-10 07:39:49 --> Controller Class Initialized
INFO - 2025-06-10 07:39:49 --> Helper loaded: form_helper
INFO - 2025-06-10 07:39:49 --> Form Validation Class Initialized
DEBUG - 2025-06-10 07:39:49 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-10 07:39:49 --> Database Driver Class Initialized
INFO - 2025-06-10 07:39:49 --> Model "Crud" initialized
INFO - 2025-06-10 07:39:49 --> Final output sent to browser
DEBUG - 2025-06-10 07:39:49 --> Total execution time: 0.0337
