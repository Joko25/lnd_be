<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2025-06-25 08:14:05 --> Config Class Initialized
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2025-06-25 08:14:05 --> Config Class Initialized
INFO - 2025-06-25 08:14:05 --> Hooks Class Initialized
INFO - 2025-06-25 08:14:05 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:14:05 --> UTF-8 Support Enabled
DEBUG - 2025-06-25 08:14:05 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:14:05 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:05 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:05 --> URI Class Initialized
INFO - 2025-06-25 08:14:05 --> URI Class Initialized
INFO - 2025-06-25 08:14:05 --> Router Class Initialized
INFO - 2025-06-25 08:14:05 --> Router Class Initialized
INFO - 2025-06-25 08:14:05 --> Output Class Initialized
INFO - 2025-06-25 08:14:05 --> Output Class Initialized
INFO - 2025-06-25 08:14:05 --> Security Class Initialized
INFO - 2025-06-25 08:14:05 --> Security Class Initialized
DEBUG - 2025-06-25 08:14:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-25 08:14:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:05 --> Input Class Initialized
INFO - 2025-06-25 08:14:05 --> Input Class Initialized
INFO - 2025-06-25 08:14:05 --> Language Class Initialized
INFO - 2025-06-25 08:14:05 --> Language Class Initialized
INFO - 2025-06-25 08:14:05 --> Loader Class Initialized
INFO - 2025-06-25 08:14:05 --> Loader Class Initialized
INFO - 2025-06-25 08:14:05 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:05 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:05 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:05 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:05 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:05 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:06 --> Email Class Initialized
INFO - 2025-06-25 08:14:06 --> Email Class Initialized
DEBUG - 2025-06-25 08:14:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-25 08:14:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:14:06 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:06 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:06 --> Controller Class Initialized
INFO - 2025-06-25 08:14:06 --> Controller Class Initialized
INFO - 2025-06-25 08:14:06 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:06 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:06 --> Form Validation Class Initialized
INFO - 2025-06-25 08:14:06 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:14:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 08:14:06 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:06 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:06 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:06 --> Model "Crud" initialized
INFO - 2025-06-25 08:14:06 --> Model "Crud" initialized
ERROR - 2025-06-25 08:14:06 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
ERROR - 2025-06-25 08:14:06 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-25 08:14:06 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-25 08:14:06 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-25 08:14:07 --> Config Class Initialized
INFO - 2025-06-25 08:14:07 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:14:07 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:14:07 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:07 --> URI Class Initialized
INFO - 2025-06-25 08:14:07 --> Config Class Initialized
INFO - 2025-06-25 08:14:07 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:14:07 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:14:07 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:07 --> Router Class Initialized
INFO - 2025-06-25 08:14:07 --> Output Class Initialized
INFO - 2025-06-25 08:14:07 --> URI Class Initialized
INFO - 2025-06-25 08:14:07 --> Security Class Initialized
DEBUG - 2025-06-25 08:14:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:07 --> Input Class Initialized
INFO - 2025-06-25 08:14:07 --> Router Class Initialized
INFO - 2025-06-25 08:14:07 --> Language Class Initialized
INFO - 2025-06-25 08:14:07 --> Output Class Initialized
INFO - 2025-06-25 08:14:07 --> Security Class Initialized
DEBUG - 2025-06-25 08:14:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:07 --> Input Class Initialized
INFO - 2025-06-25 08:14:07 --> Language Class Initialized
INFO - 2025-06-25 08:14:07 --> Loader Class Initialized
INFO - 2025-06-25 08:14:07 --> Loader Class Initialized
INFO - 2025-06-25 08:14:07 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:07 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:07 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:07 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:07 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:07 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:07 --> Email Class Initialized
DEBUG - 2025-06-25 08:14:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:14:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:07 --> Controller Class Initialized
INFO - 2025-06-25 08:14:07 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:07 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:14:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:07 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:07 --> Email Class Initialized
DEBUG - 2025-06-25 08:14:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:14:07 --> Model "Crud" initialized
ERROR - 2025-06-25 08:14:07 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-25 08:14:07 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-25 08:14:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:07 --> Controller Class Initialized
INFO - 2025-06-25 08:14:07 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:07 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:14:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:07 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:07 --> Model "Crud" initialized
ERROR - 2025-06-25 08:14:07 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-25 08:14:07 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-25 08:14:08 --> Config Class Initialized
INFO - 2025-06-25 08:14:08 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:14:08 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:14:08 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:08 --> URI Class Initialized
INFO - 2025-06-25 08:14:08 --> Router Class Initialized
INFO - 2025-06-25 08:14:08 --> Output Class Initialized
INFO - 2025-06-25 08:14:08 --> Security Class Initialized
DEBUG - 2025-06-25 08:14:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:08 --> Input Class Initialized
INFO - 2025-06-25 08:14:08 --> Language Class Initialized
INFO - 2025-06-25 08:14:08 --> Loader Class Initialized
INFO - 2025-06-25 08:14:08 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:08 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:08 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:08 --> Email Class Initialized
DEBUG - 2025-06-25 08:14:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:14:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:08 --> Controller Class Initialized
INFO - 2025-06-25 08:14:08 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:08 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:14:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:08 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:08 --> Model "Crud" initialized
INFO - 2025-06-25 08:14:08 --> Config Class Initialized
INFO - 2025-06-25 08:14:08 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:14:08 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:14:08 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:08 --> URI Class Initialized
INFO - 2025-06-25 08:14:08 --> Router Class Initialized
INFO - 2025-06-25 08:14:08 --> Output Class Initialized
INFO - 2025-06-25 08:14:08 --> Security Class Initialized
DEBUG - 2025-06-25 08:14:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:08 --> Input Class Initialized
INFO - 2025-06-25 08:14:08 --> Language Class Initialized
INFO - 2025-06-25 08:14:08 --> Loader Class Initialized
INFO - 2025-06-25 08:14:08 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:08 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:08 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:08 --> Email Class Initialized
DEBUG - 2025-06-25 08:14:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:14:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:08 --> Controller Class Initialized
INFO - 2025-06-25 08:14:08 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:08 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:14:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:08 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:08 --> Model "Crud" initialized
DEBUG - 2025-06-25 08:14:08 --> Email class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:08 --> Model "Emails" initialized
ERROR - 2025-06-25 08:14:08 --> Unable to delete cache file for login
INFO - 2025-06-25 08:14:08 --> File loaded: /var/www/html/hris_lnd/application/views/login.php
INFO - 2025-06-25 08:14:08 --> Final output sent to browser
DEBUG - 2025-06-25 08:14:08 --> Total execution time: 0.0665
INFO - 2025-06-25 08:14:10 --> Config Class Initialized
INFO - 2025-06-25 08:14:10 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:14:10 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:14:10 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:10 --> URI Class Initialized
INFO - 2025-06-25 08:14:10 --> Router Class Initialized
INFO - 2025-06-25 08:14:10 --> Output Class Initialized
INFO - 2025-06-25 08:14:10 --> Security Class Initialized
DEBUG - 2025-06-25 08:14:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:10 --> Input Class Initialized
INFO - 2025-06-25 08:14:10 --> Language Class Initialized
INFO - 2025-06-25 08:14:10 --> Loader Class Initialized
INFO - 2025-06-25 08:14:10 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:10 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:10 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:10 --> Email Class Initialized
DEBUG - 2025-06-25 08:14:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:14:10 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:10 --> Controller Class Initialized
INFO - 2025-06-25 08:14:10 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:10 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:14:10 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:10 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:10 --> Model "Crud" initialized
DEBUG - 2025-06-25 08:14:10 --> Email class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:10 --> Model "Emails" initialized
ERROR - 2025-06-25 08:14:10 --> Unable to delete cache file for login
INFO - 2025-06-25 08:14:10 --> Config Class Initialized
INFO - 2025-06-25 08:14:10 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:14:10 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:14:10 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:10 --> URI Class Initialized
INFO - 2025-06-25 08:14:10 --> Router Class Initialized
INFO - 2025-06-25 08:14:10 --> Output Class Initialized
INFO - 2025-06-25 08:14:10 --> Security Class Initialized
DEBUG - 2025-06-25 08:14:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:10 --> Input Class Initialized
INFO - 2025-06-25 08:14:10 --> Language Class Initialized
INFO - 2025-06-25 08:14:10 --> Loader Class Initialized
INFO - 2025-06-25 08:14:10 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:10 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:10 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:10 --> Email Class Initialized
DEBUG - 2025-06-25 08:14:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:14:10 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:10 --> Controller Class Initialized
INFO - 2025-06-25 08:14:10 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:10 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:14:10 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:10 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:10 --> Model "Crud" initialized
INFO - 2025-06-25 08:14:10 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-25 08:14:10 --> File loaded: /var/www/html/hris_lnd/application/views/home.php
INFO - 2025-06-25 08:14:10 --> Final output sent to browser
DEBUG - 2025-06-25 08:14:10 --> Total execution time: 0.0488
INFO - 2025-06-25 08:14:12 --> Config Class Initialized
INFO - 2025-06-25 08:14:12 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:14:12 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:14:12 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:12 --> URI Class Initialized
INFO - 2025-06-25 08:14:12 --> Router Class Initialized
INFO - 2025-06-25 08:14:12 --> Output Class Initialized
INFO - 2025-06-25 08:14:12 --> Security Class Initialized
DEBUG - 2025-06-25 08:14:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:12 --> Input Class Initialized
INFO - 2025-06-25 08:14:12 --> Language Class Initialized
INFO - 2025-06-25 08:14:12 --> Loader Class Initialized
INFO - 2025-06-25 08:14:12 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:12 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:12 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:12 --> Config Class Initialized
INFO - 2025-06-25 08:14:12 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:14:12 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:14:12 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:12 --> URI Class Initialized
INFO - 2025-06-25 08:14:12 --> Router Class Initialized
INFO - 2025-06-25 08:14:12 --> Output Class Initialized
INFO - 2025-06-25 08:14:12 --> Security Class Initialized
DEBUG - 2025-06-25 08:14:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:12 --> Input Class Initialized
INFO - 2025-06-25 08:14:12 --> Language Class Initialized
INFO - 2025-06-25 08:14:12 --> Loader Class Initialized
INFO - 2025-06-25 08:14:12 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:12 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:12 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:12 --> Email Class Initialized
DEBUG - 2025-06-25 08:14:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:14:12 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:12 --> Controller Class Initialized
INFO - 2025-06-25 08:14:12 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:12 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:14:12 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:12 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:12 --> Email Class Initialized
DEBUG - 2025-06-25 08:14:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:14:12 --> Config Class Initialized
INFO - 2025-06-25 08:14:12 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:14:12 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:14:12 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:12 --> URI Class Initialized
INFO - 2025-06-25 08:14:12 --> Router Class Initialized
INFO - 2025-06-25 08:14:12 --> Output Class Initialized
INFO - 2025-06-25 08:14:12 --> Security Class Initialized
DEBUG - 2025-06-25 08:14:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:12 --> Input Class Initialized
INFO - 2025-06-25 08:14:12 --> Language Class Initialized
INFO - 2025-06-25 08:14:12 --> Loader Class Initialized
INFO - 2025-06-25 08:14:12 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:12 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:12 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:12 --> Model "Crud" initialized
INFO - 2025-06-25 08:14:12 --> Email Class Initialized
DEBUG - 2025-06-25 08:14:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:14:12 --> Config Class Initialized
INFO - 2025-06-25 08:14:12 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:14:12 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:14:12 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:12 --> URI Class Initialized
INFO - 2025-06-25 08:14:12 --> Router Class Initialized
INFO - 2025-06-25 08:14:12 --> Output Class Initialized
INFO - 2025-06-25 08:14:12 --> Security Class Initialized
DEBUG - 2025-06-25 08:14:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:12 --> Input Class Initialized
INFO - 2025-06-25 08:14:12 --> Language Class Initialized
INFO - 2025-06-25 08:14:12 --> Loader Class Initialized
INFO - 2025-06-25 08:14:12 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:12 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:12 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:12 --> Email Class Initialized
DEBUG - 2025-06-25 08:14:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:14:12 --> Config Class Initialized
INFO - 2025-06-25 08:14:12 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:14:12 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:14:12 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:12 --> URI Class Initialized
INFO - 2025-06-25 08:14:12 --> Router Class Initialized
INFO - 2025-06-25 08:14:12 --> Output Class Initialized
INFO - 2025-06-25 08:14:12 --> Security Class Initialized
DEBUG - 2025-06-25 08:14:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:12 --> Input Class Initialized
INFO - 2025-06-25 08:14:12 --> Language Class Initialized
INFO - 2025-06-25 08:14:12 --> Loader Class Initialized
INFO - 2025-06-25 08:14:12 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:12 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:12 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:12 --> Email Class Initialized
DEBUG - 2025-06-25 08:14:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:14:12 --> Final output sent to browser
DEBUG - 2025-06-25 08:14:12 --> Total execution time: 0.4100
INFO - 2025-06-25 08:14:12 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:12 --> Controller Class Initialized
INFO - 2025-06-25 08:14:12 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:12 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:14:12 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:12 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:12 --> Model "Crud" initialized
INFO - 2025-06-25 08:14:12 --> Config Class Initialized
INFO - 2025-06-25 08:14:12 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:14:12 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:14:12 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:12 --> URI Class Initialized
INFO - 2025-06-25 08:14:12 --> Router Class Initialized
INFO - 2025-06-25 08:14:12 --> Output Class Initialized
INFO - 2025-06-25 08:14:12 --> Security Class Initialized
DEBUG - 2025-06-25 08:14:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:12 --> Input Class Initialized
INFO - 2025-06-25 08:14:12 --> Language Class Initialized
INFO - 2025-06-25 08:14:12 --> Loader Class Initialized
INFO - 2025-06-25 08:14:12 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:12 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:12 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:12 --> Email Class Initialized
INFO - 2025-06-25 08:14:12 --> Config Class Initialized
INFO - 2025-06-25 08:14:12 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:14:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-25 08:14:12 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:14:12 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:12 --> URI Class Initialized
INFO - 2025-06-25 08:14:12 --> Router Class Initialized
INFO - 2025-06-25 08:14:12 --> Output Class Initialized
INFO - 2025-06-25 08:14:12 --> Security Class Initialized
DEBUG - 2025-06-25 08:14:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:12 --> Input Class Initialized
INFO - 2025-06-25 08:14:12 --> Language Class Initialized
INFO - 2025-06-25 08:14:12 --> Loader Class Initialized
INFO - 2025-06-25 08:14:12 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:12 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:12 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:12 --> Email Class Initialized
DEBUG - 2025-06-25 08:14:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:14:12 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-25 08:14:12 --> File loaded: /var/www/html/hris_lnd/application/views/dashboard/dashboard.php
INFO - 2025-06-25 08:14:12 --> Final output sent to browser
DEBUG - 2025-06-25 08:14:12 --> Total execution time: 0.7046
INFO - 2025-06-25 08:14:12 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:12 --> Controller Class Initialized
INFO - 2025-06-25 08:14:12 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:12 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:14:12 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:12 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:12 --> Model "Crud" initialized
INFO - 2025-06-25 08:14:12 --> Config Class Initialized
INFO - 2025-06-25 08:14:12 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:14:12 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:14:12 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:12 --> URI Class Initialized
INFO - 2025-06-25 08:14:12 --> Router Class Initialized
INFO - 2025-06-25 08:14:12 --> Output Class Initialized
INFO - 2025-06-25 08:14:12 --> Security Class Initialized
DEBUG - 2025-06-25 08:14:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:12 --> Input Class Initialized
INFO - 2025-06-25 08:14:12 --> Language Class Initialized
INFO - 2025-06-25 08:14:12 --> Loader Class Initialized
INFO - 2025-06-25 08:14:12 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:12 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:12 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:12 --> Email Class Initialized
DEBUG - 2025-06-25 08:14:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:14:12 --> Final output sent to browser
DEBUG - 2025-06-25 08:14:12 --> Total execution time: 0.7514
INFO - 2025-06-25 08:14:12 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:12 --> Controller Class Initialized
INFO - 2025-06-25 08:14:12 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:12 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:14:12 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:12 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:12 --> Model "Crud" initialized
INFO - 2025-06-25 08:14:13 --> Final output sent to browser
DEBUG - 2025-06-25 08:14:13 --> Total execution time: 0.7788
INFO - 2025-06-25 08:14:13 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:13 --> Controller Class Initialized
INFO - 2025-06-25 08:14:13 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:13 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:14:13 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:13 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:13 --> Model "Crud" initialized
INFO - 2025-06-25 08:14:13 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:13 --> Controller Class Initialized
INFO - 2025-06-25 08:14:13 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:13 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:14:13 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:13 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:13 --> Model "Crud" initialized
INFO - 2025-06-25 08:14:13 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-25 08:14:13 --> File loaded: /var/www/html/hris_lnd/application/views/dashboard/dashboard.php
INFO - 2025-06-25 08:14:13 --> Final output sent to browser
DEBUG - 2025-06-25 08:14:13 --> Total execution time: 0.5540
INFO - 2025-06-25 08:14:13 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:13 --> Controller Class Initialized
INFO - 2025-06-25 08:14:13 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:13 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:14:13 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:13 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:13 --> Model "Crud" initialized
INFO - 2025-06-25 08:14:13 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-25 08:14:13 --> File loaded: /var/www/html/hris_lnd/application/views/dashboard/dashboard.php
INFO - 2025-06-25 08:14:13 --> Final output sent to browser
DEBUG - 2025-06-25 08:14:13 --> Total execution time: 0.7050
INFO - 2025-06-25 08:14:13 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:13 --> Controller Class Initialized
INFO - 2025-06-25 08:14:13 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:13 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:14:13 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:13 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:13 --> Model "Crud" initialized
INFO - 2025-06-25 08:14:14 --> Config Class Initialized
INFO - 2025-06-25 08:14:14 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:14:14 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:14:14 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:14 --> URI Class Initialized
INFO - 2025-06-25 08:14:14 --> Router Class Initialized
INFO - 2025-06-25 08:14:14 --> Output Class Initialized
INFO - 2025-06-25 08:14:14 --> Security Class Initialized
DEBUG - 2025-06-25 08:14:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:14 --> Input Class Initialized
INFO - 2025-06-25 08:14:14 --> Language Class Initialized
INFO - 2025-06-25 08:14:14 --> Loader Class Initialized
INFO - 2025-06-25 08:14:14 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:14 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:14 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:14 --> Config Class Initialized
INFO - 2025-06-25 08:14:14 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:14:14 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:14:14 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:14 --> URI Class Initialized
INFO - 2025-06-25 08:14:14 --> Router Class Initialized
INFO - 2025-06-25 08:14:14 --> Output Class Initialized
INFO - 2025-06-25 08:14:14 --> Security Class Initialized
DEBUG - 2025-06-25 08:14:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:14 --> Input Class Initialized
INFO - 2025-06-25 08:14:14 --> Language Class Initialized
INFO - 2025-06-25 08:14:14 --> Loader Class Initialized
INFO - 2025-06-25 08:14:14 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:14 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:14 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:14 --> Email Class Initialized
DEBUG - 2025-06-25 08:14:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:14:14 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:14 --> Controller Class Initialized
INFO - 2025-06-25 08:14:14 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:14 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:14:14 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:14 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:14 --> Email Class Initialized
DEBUG - 2025-06-25 08:14:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:14:14 --> Model "Crud" initialized
INFO - 2025-06-25 08:14:15 --> Final output sent to browser
DEBUG - 2025-06-25 08:14:15 --> Total execution time: 0.4388
INFO - 2025-06-25 08:14:15 --> Config Class Initialized
INFO - 2025-06-25 08:14:15 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:14:15 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:14:15 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:15 --> URI Class Initialized
INFO - 2025-06-25 08:14:15 --> Router Class Initialized
INFO - 2025-06-25 08:14:15 --> Output Class Initialized
INFO - 2025-06-25 08:14:15 --> Security Class Initialized
DEBUG - 2025-06-25 08:14:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:15 --> Input Class Initialized
INFO - 2025-06-25 08:14:15 --> Language Class Initialized
INFO - 2025-06-25 08:14:15 --> Loader Class Initialized
INFO - 2025-06-25 08:14:15 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:15 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:15 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:15 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:15 --> Controller Class Initialized
INFO - 2025-06-25 08:14:15 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:15 --> Email Class Initialized
DEBUG - 2025-06-25 08:14:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:14:15 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:14:15 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:15 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:15 --> Model "Crud" initialized
INFO - 2025-06-25 08:14:15 --> Config Class Initialized
INFO - 2025-06-25 08:14:15 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:14:15 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:14:15 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:15 --> URI Class Initialized
INFO - 2025-06-25 08:14:15 --> Router Class Initialized
INFO - 2025-06-25 08:14:15 --> Output Class Initialized
INFO - 2025-06-25 08:14:15 --> Security Class Initialized
DEBUG - 2025-06-25 08:14:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:15 --> Input Class Initialized
INFO - 2025-06-25 08:14:15 --> Language Class Initialized
INFO - 2025-06-25 08:14:15 --> Loader Class Initialized
INFO - 2025-06-25 08:14:15 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:15 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:15 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:15 --> Email Class Initialized
DEBUG - 2025-06-25 08:14:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:14:15 --> Final output sent to browser
DEBUG - 2025-06-25 08:14:15 --> Total execution time: 0.7626
INFO - 2025-06-25 08:14:15 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:15 --> Controller Class Initialized
INFO - 2025-06-25 08:14:15 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:15 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:14:15 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:15 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:15 --> Model "Crud" initialized
INFO - 2025-06-25 08:14:15 --> Final output sent to browser
DEBUG - 2025-06-25 08:14:15 --> Total execution time: 0.2982
INFO - 2025-06-25 08:14:15 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:15 --> Controller Class Initialized
INFO - 2025-06-25 08:14:15 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:15 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:14:15 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:15 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:15 --> Model "Crud" initialized
INFO - 2025-06-25 08:14:15 --> Final output sent to browser
DEBUG - 2025-06-25 08:14:15 --> Total execution time: 0.2294
INFO - 2025-06-25 08:14:22 --> Config Class Initialized
INFO - 2025-06-25 08:14:22 --> Config Class Initialized
INFO - 2025-06-25 08:14:22 --> Hooks Class Initialized
INFO - 2025-06-25 08:14:22 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:14:22 --> UTF-8 Support Enabled
DEBUG - 2025-06-25 08:14:22 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:14:22 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:22 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:22 --> URI Class Initialized
INFO - 2025-06-25 08:14:22 --> Router Class Initialized
INFO - 2025-06-25 08:14:22 --> URI Class Initialized
INFO - 2025-06-25 08:14:22 --> Output Class Initialized
INFO - 2025-06-25 08:14:22 --> Router Class Initialized
INFO - 2025-06-25 08:14:22 --> Security Class Initialized
INFO - 2025-06-25 08:14:22 --> Output Class Initialized
DEBUG - 2025-06-25 08:14:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:22 --> Security Class Initialized
INFO - 2025-06-25 08:14:22 --> Input Class Initialized
DEBUG - 2025-06-25 08:14:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:22 --> Input Class Initialized
INFO - 2025-06-25 08:14:22 --> Language Class Initialized
INFO - 2025-06-25 08:14:22 --> Language Class Initialized
INFO - 2025-06-25 08:14:22 --> Loader Class Initialized
INFO - 2025-06-25 08:14:22 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:22 --> Loader Class Initialized
INFO - 2025-06-25 08:14:22 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:22 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:22 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:22 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:22 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:22 --> Email Class Initialized
DEBUG - 2025-06-25 08:14:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:14:22 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:22 --> Controller Class Initialized
INFO - 2025-06-25 08:14:22 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:22 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:14:22 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:22 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:22 --> Email Class Initialized
DEBUG - 2025-06-25 08:14:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:14:22 --> Model "Crud" initialized
INFO - 2025-06-25 08:14:22 --> Final output sent to browser
DEBUG - 2025-06-25 08:14:22 --> Total execution time: 0.0332
INFO - 2025-06-25 08:14:22 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:22 --> Controller Class Initialized
INFO - 2025-06-25 08:14:22 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:22 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:14:22 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:22 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:22 --> Model "Crud" initialized
INFO - 2025-06-25 08:14:22 --> Final output sent to browser
DEBUG - 2025-06-25 08:14:22 --> Total execution time: 0.0524
INFO - 2025-06-25 08:14:31 --> Config Class Initialized
INFO - 2025-06-25 08:14:31 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:14:31 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:14:31 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:31 --> URI Class Initialized
INFO - 2025-06-25 08:14:31 --> Router Class Initialized
INFO - 2025-06-25 08:14:31 --> Output Class Initialized
INFO - 2025-06-25 08:14:31 --> Security Class Initialized
DEBUG - 2025-06-25 08:14:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:31 --> Input Class Initialized
INFO - 2025-06-25 08:14:31 --> Language Class Initialized
INFO - 2025-06-25 08:14:31 --> Loader Class Initialized
INFO - 2025-06-25 08:14:31 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:31 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:31 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:31 --> Config Class Initialized
INFO - 2025-06-25 08:14:31 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:14:31 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:14:31 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:31 --> URI Class Initialized
INFO - 2025-06-25 08:14:31 --> Router Class Initialized
INFO - 2025-06-25 08:14:31 --> Output Class Initialized
INFO - 2025-06-25 08:14:31 --> Security Class Initialized
DEBUG - 2025-06-25 08:14:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:31 --> Input Class Initialized
INFO - 2025-06-25 08:14:31 --> Language Class Initialized
INFO - 2025-06-25 08:14:31 --> Loader Class Initialized
INFO - 2025-06-25 08:14:31 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:31 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:31 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:31 --> Email Class Initialized
DEBUG - 2025-06-25 08:14:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:14:31 --> Email Class Initialized
DEBUG - 2025-06-25 08:14:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:14:31 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:31 --> Controller Class Initialized
INFO - 2025-06-25 08:14:31 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:31 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:14:31 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:31 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:31 --> Model "Crud" initialized
INFO - 2025-06-25 08:14:31 --> Final output sent to browser
DEBUG - 2025-06-25 08:14:31 --> Total execution time: 0.0261
INFO - 2025-06-25 08:14:31 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:31 --> Controller Class Initialized
INFO - 2025-06-25 08:14:31 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:31 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:14:31 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:31 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:31 --> Model "Crud" initialized
INFO - 2025-06-25 08:14:31 --> Final output sent to browser
DEBUG - 2025-06-25 08:14:31 --> Total execution time: 0.0512
INFO - 2025-06-25 08:14:41 --> Config Class Initialized
INFO - 2025-06-25 08:14:41 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:14:41 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:14:41 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:41 --> URI Class Initialized
INFO - 2025-06-25 08:14:41 --> Router Class Initialized
INFO - 2025-06-25 08:14:41 --> Output Class Initialized
INFO - 2025-06-25 08:14:41 --> Security Class Initialized
DEBUG - 2025-06-25 08:14:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:41 --> Input Class Initialized
INFO - 2025-06-25 08:14:41 --> Language Class Initialized
INFO - 2025-06-25 08:14:41 --> Loader Class Initialized
INFO - 2025-06-25 08:14:41 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:41 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:41 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:41 --> Config Class Initialized
INFO - 2025-06-25 08:14:41 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:14:41 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:14:41 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:41 --> URI Class Initialized
INFO - 2025-06-25 08:14:41 --> Router Class Initialized
INFO - 2025-06-25 08:14:41 --> Output Class Initialized
INFO - 2025-06-25 08:14:41 --> Security Class Initialized
DEBUG - 2025-06-25 08:14:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:41 --> Input Class Initialized
INFO - 2025-06-25 08:14:41 --> Language Class Initialized
INFO - 2025-06-25 08:14:41 --> Loader Class Initialized
INFO - 2025-06-25 08:14:41 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:41 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:41 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:41 --> Email Class Initialized
DEBUG - 2025-06-25 08:14:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:14:41 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:41 --> Controller Class Initialized
INFO - 2025-06-25 08:14:41 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:41 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:14:41 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:41 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:41 --> Email Class Initialized
DEBUG - 2025-06-25 08:14:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:14:41 --> Model "Crud" initialized
INFO - 2025-06-25 08:14:41 --> Final output sent to browser
DEBUG - 2025-06-25 08:14:41 --> Total execution time: 0.0201
INFO - 2025-06-25 08:14:41 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:41 --> Controller Class Initialized
INFO - 2025-06-25 08:14:41 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:41 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:14:41 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:41 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:41 --> Model "Crud" initialized
INFO - 2025-06-25 08:14:41 --> Final output sent to browser
DEBUG - 2025-06-25 08:14:41 --> Total execution time: 0.0378
INFO - 2025-06-25 08:14:46 --> Config Class Initialized
INFO - 2025-06-25 08:14:46 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:14:46 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:14:46 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:46 --> URI Class Initialized
INFO - 2025-06-25 08:14:46 --> Router Class Initialized
INFO - 2025-06-25 08:14:46 --> Output Class Initialized
INFO - 2025-06-25 08:14:46 --> Security Class Initialized
DEBUG - 2025-06-25 08:14:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:46 --> Input Class Initialized
INFO - 2025-06-25 08:14:46 --> Language Class Initialized
INFO - 2025-06-25 08:14:46 --> Loader Class Initialized
INFO - 2025-06-25 08:14:46 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:46 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:46 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:46 --> Email Class Initialized
DEBUG - 2025-06-25 08:14:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:14:46 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:46 --> Controller Class Initialized
INFO - 2025-06-25 08:14:46 --> Model "TrainerTrainingHistoryModel" initialized
INFO - 2025-06-25 08:14:46 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:46 --> Form Validation Class Initialized
INFO - 2025-06-25 08:14:46 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:46 --> Model "Crud" initialized
DEBUG - 2025-06-25 08:14:46 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 08:14:46 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:46 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-25 08:14:46 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/trainer-training-history.php
INFO - 2025-06-25 08:14:46 --> Final output sent to browser
DEBUG - 2025-06-25 08:14:46 --> Total execution time: 0.0480
INFO - 2025-06-25 08:14:47 --> Config Class Initialized
INFO - 2025-06-25 08:14:47 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:14:47 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:14:47 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:47 --> URI Class Initialized
INFO - 2025-06-25 08:14:47 --> Router Class Initialized
INFO - 2025-06-25 08:14:47 --> Output Class Initialized
INFO - 2025-06-25 08:14:47 --> Security Class Initialized
DEBUG - 2025-06-25 08:14:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:47 --> Input Class Initialized
INFO - 2025-06-25 08:14:47 --> Language Class Initialized
INFO - 2025-06-25 08:14:47 --> Loader Class Initialized
INFO - 2025-06-25 08:14:47 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:47 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:47 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:47 --> Email Class Initialized
DEBUG - 2025-06-25 08:14:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:14:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:47 --> Controller Class Initialized
INFO - 2025-06-25 08:14:47 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:47 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:14:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:47 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:47 --> Model "Crud" initialized
INFO - 2025-06-25 08:14:47 --> Config Class Initialized
INFO - 2025-06-25 08:14:47 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:14:47 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:14:47 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:47 --> URI Class Initialized
INFO - 2025-06-25 08:14:47 --> Router Class Initialized
INFO - 2025-06-25 08:14:47 --> Output Class Initialized
INFO - 2025-06-25 08:14:47 --> Security Class Initialized
DEBUG - 2025-06-25 08:14:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:47 --> Input Class Initialized
INFO - 2025-06-25 08:14:47 --> Language Class Initialized
INFO - 2025-06-25 08:14:47 --> Loader Class Initialized
INFO - 2025-06-25 08:14:47 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:47 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:47 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:47 --> Email Class Initialized
DEBUG - 2025-06-25 08:14:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:14:47 --> Final output sent to browser
DEBUG - 2025-06-25 08:14:47 --> Total execution time: 0.0213
INFO - 2025-06-25 08:14:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:47 --> Controller Class Initialized
INFO - 2025-06-25 08:14:47 --> Model "TraineeTrainingHistoryModel" initialized
INFO - 2025-06-25 08:14:47 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:47 --> Form Validation Class Initialized
INFO - 2025-06-25 08:14:47 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:47 --> Model "Crud" initialized
DEBUG - 2025-06-25 08:14:47 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 08:14:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:47 --> Config Class Initialized
INFO - 2025-06-25 08:14:47 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:14:47 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:14:47 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:47 --> URI Class Initialized
INFO - 2025-06-25 08:14:47 --> Router Class Initialized
INFO - 2025-06-25 08:14:47 --> Output Class Initialized
INFO - 2025-06-25 08:14:47 --> Security Class Initialized
DEBUG - 2025-06-25 08:14:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:47 --> Input Class Initialized
INFO - 2025-06-25 08:14:47 --> Language Class Initialized
INFO - 2025-06-25 08:14:47 --> Loader Class Initialized
INFO - 2025-06-25 08:14:47 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:47 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:47 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:47 --> Email Class Initialized
DEBUG - 2025-06-25 08:14:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:14:47 --> Final output sent to browser
DEBUG - 2025-06-25 08:14:47 --> Total execution time: 0.0447
INFO - 2025-06-25 08:14:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:47 --> Controller Class Initialized
INFO - 2025-06-25 08:14:47 --> Model "TraineeTrainingHistoryModel" initialized
INFO - 2025-06-25 08:14:47 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:47 --> Form Validation Class Initialized
INFO - 2025-06-25 08:14:47 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:47 --> Model "Crud" initialized
DEBUG - 2025-06-25 08:14:47 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 08:14:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:47 --> Final output sent to browser
DEBUG - 2025-06-25 08:14:47 --> Total execution time: 0.0444
INFO - 2025-06-25 08:14:52 --> Config Class Initialized
INFO - 2025-06-25 08:14:52 --> Config Class Initialized
INFO - 2025-06-25 08:14:52 --> Hooks Class Initialized
INFO - 2025-06-25 08:14:52 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:14:52 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:14:52 --> Utf8 Class Initialized
DEBUG - 2025-06-25 08:14:52 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:14:52 --> URI Class Initialized
INFO - 2025-06-25 08:14:52 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:52 --> Router Class Initialized
INFO - 2025-06-25 08:14:52 --> Output Class Initialized
INFO - 2025-06-25 08:14:52 --> URI Class Initialized
INFO - 2025-06-25 08:14:52 --> Security Class Initialized
DEBUG - 2025-06-25 08:14:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:52 --> Router Class Initialized
INFO - 2025-06-25 08:14:52 --> Input Class Initialized
INFO - 2025-06-25 08:14:52 --> Output Class Initialized
INFO - 2025-06-25 08:14:52 --> Language Class Initialized
INFO - 2025-06-25 08:14:52 --> Security Class Initialized
DEBUG - 2025-06-25 08:14:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:52 --> Loader Class Initialized
INFO - 2025-06-25 08:14:52 --> Input Class Initialized
INFO - 2025-06-25 08:14:52 --> Language Class Initialized
INFO - 2025-06-25 08:14:52 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:52 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:52 --> Loader Class Initialized
INFO - 2025-06-25 08:14:52 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:52 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:52 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:52 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:52 --> Email Class Initialized
INFO - 2025-06-25 08:14:52 --> Email Class Initialized
DEBUG - 2025-06-25 08:14:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-25 08:14:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:14:52 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:52 --> Controller Class Initialized
INFO - 2025-06-25 08:14:52 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:52 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:14:52 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:52 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:52 --> Model "Crud" initialized
INFO - 2025-06-25 08:14:52 --> Final output sent to browser
DEBUG - 2025-06-25 08:14:52 --> Total execution time: 0.0186
INFO - 2025-06-25 08:14:52 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:52 --> Controller Class Initialized
INFO - 2025-06-25 08:14:52 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:52 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:14:52 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:14:52 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:52 --> Model "Crud" initialized
INFO - 2025-06-25 08:14:52 --> Final output sent to browser
DEBUG - 2025-06-25 08:14:52 --> Total execution time: 0.0340
INFO - 2025-06-25 08:14:54 --> Config Class Initialized
INFO - 2025-06-25 08:14:54 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:14:54 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:14:54 --> Utf8 Class Initialized
INFO - 2025-06-25 08:14:54 --> URI Class Initialized
INFO - 2025-06-25 08:14:54 --> Router Class Initialized
INFO - 2025-06-25 08:14:54 --> Output Class Initialized
INFO - 2025-06-25 08:14:54 --> Security Class Initialized
DEBUG - 2025-06-25 08:14:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:14:54 --> Input Class Initialized
INFO - 2025-06-25 08:14:54 --> Language Class Initialized
INFO - 2025-06-25 08:14:54 --> Loader Class Initialized
INFO - 2025-06-25 08:14:54 --> Helper loaded: url_helper
INFO - 2025-06-25 08:14:54 --> Helper loaded: file_helper
INFO - 2025-06-25 08:14:54 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:54 --> Email Class Initialized
DEBUG - 2025-06-25 08:14:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:14:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:14:54 --> Controller Class Initialized
INFO - 2025-06-25 08:14:54 --> Model "TrainerTrainingHistoryModel" initialized
INFO - 2025-06-25 08:14:54 --> Helper loaded: form_helper
INFO - 2025-06-25 08:14:54 --> Form Validation Class Initialized
INFO - 2025-06-25 08:14:54 --> Database Driver Class Initialized
INFO - 2025-06-25 08:14:54 --> Model "Crud" initialized
DEBUG - 2025-06-25 08:14:54 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 08:14:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 08:14:54 --> Records data history: [{"id":"20240823000001","created_by":"natasya","created_date":"2024-08-23 08:26:41","updated_by":"fitri","updated_date":"2024-10-14 13:23:25","approved":"0","approved_to":null,"approved_by":null,"approved_date":null,"deleted":"0","candidate_id":"","division_id":"20221119000002","departement_id":"20221213000001","departement_sub_id":"20221213000001","contract_id":"20221119000001","position_id":"20221213000001","group_id":"20221213000005","source_id":"","marital_id":"20221119000008","religion_id":"20221119000001","machine_code":"13822","number":"08070008240001","name":"SANGU PANDI RAJENDRA","nickname":"","date_sign":"2024-08-13","date_expired":"2025-08-12","address":"4\/9, Sangiankottai St., Sholavanaan, Vadipatti, Taluk, Madurai 625214","place_birth":"Sholavandan","birthday":"1998-04-28","gender":"MALE","blood":"-","national_id":"R9926010","tax_id":"12.442.211.4-409.000","jamsostek":"24120737846","jamsostek_date":"1899-11-30","jkn":"0003622602161","jkn_date":"1899-11-30","jkn_family":"1","telphone":"","mobile_phone":"917402125383","emergency_no":"","email":"sangupandi3399@gmail.com","driving_no":"","driving_date":"1899-11-30","stnk_no":"","stnk_date":"1899-11-30","maps":"","image_id":null,"image_profile":null,"bank_name":"-","bank_no":"-","bank_branch":"-","status":"0","status_date":null,"employee_id":"20240823000001","status_check":null,"status_notification":null,"division_name":"PLANT RUBBER","departement_name":"R & D","departement_sub_name":"LABORATORIUM","type":"INDIRECT","position_name":"ASSISTANT MANAGER","contract_name":"CONTRACT 1","group_name":"MANAGEMENT","source_name":null,"marital_name":"Lajang Tidak Ada Tanggungan","religion_name":"BUDHA"}]
INFO - 2025-06-25 08:14:54 --> Final output sent to browser
DEBUG - 2025-06-25 08:14:54 --> Total execution time: 0.0942
INFO - 2025-06-25 08:15:01 --> Config Class Initialized
INFO - 2025-06-25 08:15:01 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:15:01 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:15:01 --> Utf8 Class Initialized
INFO - 2025-06-25 08:15:01 --> URI Class Initialized
INFO - 2025-06-25 08:15:01 --> Router Class Initialized
INFO - 2025-06-25 08:15:01 --> Output Class Initialized
INFO - 2025-06-25 08:15:01 --> Security Class Initialized
DEBUG - 2025-06-25 08:15:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:15:01 --> Input Class Initialized
INFO - 2025-06-25 08:15:01 --> Language Class Initialized
INFO - 2025-06-25 08:15:01 --> Loader Class Initialized
INFO - 2025-06-25 08:15:01 --> Helper loaded: url_helper
INFO - 2025-06-25 08:15:01 --> Helper loaded: file_helper
INFO - 2025-06-25 08:15:01 --> Database Driver Class Initialized
INFO - 2025-06-25 08:15:01 --> Config Class Initialized
INFO - 2025-06-25 08:15:01 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:15:01 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:15:01 --> Utf8 Class Initialized
INFO - 2025-06-25 08:15:01 --> URI Class Initialized
INFO - 2025-06-25 08:15:01 --> Router Class Initialized
INFO - 2025-06-25 08:15:01 --> Output Class Initialized
INFO - 2025-06-25 08:15:01 --> Security Class Initialized
DEBUG - 2025-06-25 08:15:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:15:01 --> Input Class Initialized
INFO - 2025-06-25 08:15:01 --> Language Class Initialized
INFO - 2025-06-25 08:15:01 --> Loader Class Initialized
INFO - 2025-06-25 08:15:01 --> Helper loaded: url_helper
INFO - 2025-06-25 08:15:01 --> Helper loaded: file_helper
INFO - 2025-06-25 08:15:01 --> Database Driver Class Initialized
INFO - 2025-06-25 08:15:01 --> Email Class Initialized
DEBUG - 2025-06-25 08:15:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:15:01 --> Email Class Initialized
INFO - 2025-06-25 08:15:01 --> Session: Class initialized using 'files' driver.
DEBUG - 2025-06-25 08:15:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:15:01 --> Controller Class Initialized
INFO - 2025-06-25 08:15:01 --> Helper loaded: form_helper
INFO - 2025-06-25 08:15:01 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:15:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:15:01 --> Database Driver Class Initialized
INFO - 2025-06-25 08:15:01 --> Model "Crud" initialized
INFO - 2025-06-25 08:15:01 --> Final output sent to browser
DEBUG - 2025-06-25 08:15:01 --> Total execution time: 0.0278
INFO - 2025-06-25 08:15:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:15:01 --> Controller Class Initialized
INFO - 2025-06-25 08:15:01 --> Helper loaded: form_helper
INFO - 2025-06-25 08:15:01 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:15:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:15:01 --> Database Driver Class Initialized
INFO - 2025-06-25 08:15:01 --> Model "Crud" initialized
INFO - 2025-06-25 08:15:02 --> Final output sent to browser
DEBUG - 2025-06-25 08:15:02 --> Total execution time: 0.0394
INFO - 2025-06-25 08:15:03 --> Config Class Initialized
INFO - 2025-06-25 08:15:03 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:15:03 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:15:03 --> Utf8 Class Initialized
INFO - 2025-06-25 08:15:03 --> URI Class Initialized
INFO - 2025-06-25 08:15:03 --> Router Class Initialized
INFO - 2025-06-25 08:15:03 --> Output Class Initialized
INFO - 2025-06-25 08:15:03 --> Security Class Initialized
DEBUG - 2025-06-25 08:15:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:15:03 --> Input Class Initialized
INFO - 2025-06-25 08:15:03 --> Language Class Initialized
INFO - 2025-06-25 08:15:03 --> Loader Class Initialized
INFO - 2025-06-25 08:15:03 --> Helper loaded: url_helper
INFO - 2025-06-25 08:15:03 --> Helper loaded: file_helper
INFO - 2025-06-25 08:15:03 --> Database Driver Class Initialized
INFO - 2025-06-25 08:15:03 --> Email Class Initialized
DEBUG - 2025-06-25 08:15:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:15:03 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:15:03 --> Controller Class Initialized
INFO - 2025-06-25 08:15:03 --> Model "TrainerTrainingHistoryModel" initialized
INFO - 2025-06-25 08:15:03 --> Helper loaded: form_helper
INFO - 2025-06-25 08:15:03 --> Form Validation Class Initialized
INFO - 2025-06-25 08:15:03 --> Database Driver Class Initialized
INFO - 2025-06-25 08:15:03 --> Model "Crud" initialized
DEBUG - 2025-06-25 08:15:03 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 08:15:03 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:15:11 --> Config Class Initialized
INFO - 2025-06-25 08:15:11 --> Hooks Class Initialized
INFO - 2025-06-25 08:15:11 --> Config Class Initialized
DEBUG - 2025-06-25 08:15:11 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:15:11 --> Hooks Class Initialized
INFO - 2025-06-25 08:15:11 --> Utf8 Class Initialized
INFO - 2025-06-25 08:15:11 --> URI Class Initialized
DEBUG - 2025-06-25 08:15:11 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:15:11 --> Utf8 Class Initialized
INFO - 2025-06-25 08:15:11 --> Router Class Initialized
INFO - 2025-06-25 08:15:11 --> URI Class Initialized
INFO - 2025-06-25 08:15:11 --> Output Class Initialized
INFO - 2025-06-25 08:15:11 --> Router Class Initialized
INFO - 2025-06-25 08:15:11 --> Security Class Initialized
INFO - 2025-06-25 08:15:11 --> Output Class Initialized
DEBUG - 2025-06-25 08:15:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:15:11 --> Input Class Initialized
INFO - 2025-06-25 08:15:11 --> Security Class Initialized
INFO - 2025-06-25 08:15:11 --> Language Class Initialized
DEBUG - 2025-06-25 08:15:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:15:11 --> Input Class Initialized
INFO - 2025-06-25 08:15:11 --> Loader Class Initialized
INFO - 2025-06-25 08:15:11 --> Language Class Initialized
INFO - 2025-06-25 08:15:11 --> Helper loaded: url_helper
INFO - 2025-06-25 08:15:11 --> Helper loaded: file_helper
INFO - 2025-06-25 08:15:11 --> Loader Class Initialized
INFO - 2025-06-25 08:15:11 --> Helper loaded: url_helper
INFO - 2025-06-25 08:15:11 --> Helper loaded: file_helper
INFO - 2025-06-25 08:15:11 --> Database Driver Class Initialized
INFO - 2025-06-25 08:15:11 --> Database Driver Class Initialized
INFO - 2025-06-25 08:15:11 --> Email Class Initialized
DEBUG - 2025-06-25 08:15:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:15:11 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:15:11 --> Controller Class Initialized
INFO - 2025-06-25 08:15:11 --> Helper loaded: form_helper
INFO - 2025-06-25 08:15:11 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:15:11 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:15:11 --> Database Driver Class Initialized
INFO - 2025-06-25 08:15:11 --> Email Class Initialized
DEBUG - 2025-06-25 08:15:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:15:11 --> Model "Crud" initialized
INFO - 2025-06-25 08:15:11 --> Final output sent to browser
DEBUG - 2025-06-25 08:15:11 --> Total execution time: 0.0229
INFO - 2025-06-25 08:15:11 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:15:11 --> Controller Class Initialized
INFO - 2025-06-25 08:15:11 --> Helper loaded: form_helper
INFO - 2025-06-25 08:15:11 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:15:11 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:15:11 --> Database Driver Class Initialized
INFO - 2025-06-25 08:15:11 --> Model "Crud" initialized
INFO - 2025-06-25 08:15:12 --> Final output sent to browser
DEBUG - 2025-06-25 08:15:12 --> Total execution time: 0.0391
INFO - 2025-06-25 08:15:44 --> Config Class Initialized
INFO - 2025-06-25 08:15:44 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:15:44 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:15:44 --> Config Class Initialized
INFO - 2025-06-25 08:15:44 --> Utf8 Class Initialized
INFO - 2025-06-25 08:15:44 --> Hooks Class Initialized
INFO - 2025-06-25 08:15:44 --> URI Class Initialized
DEBUG - 2025-06-25 08:15:44 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:15:44 --> Utf8 Class Initialized
INFO - 2025-06-25 08:15:44 --> Router Class Initialized
INFO - 2025-06-25 08:15:44 --> Output Class Initialized
INFO - 2025-06-25 08:15:44 --> URI Class Initialized
INFO - 2025-06-25 08:15:44 --> Security Class Initialized
INFO - 2025-06-25 08:15:44 --> Router Class Initialized
DEBUG - 2025-06-25 08:15:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:15:44 --> Output Class Initialized
INFO - 2025-06-25 08:15:44 --> Input Class Initialized
INFO - 2025-06-25 08:15:44 --> Security Class Initialized
INFO - 2025-06-25 08:15:44 --> Language Class Initialized
DEBUG - 2025-06-25 08:15:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:15:44 --> Input Class Initialized
INFO - 2025-06-25 08:15:44 --> Language Class Initialized
INFO - 2025-06-25 08:15:44 --> Loader Class Initialized
INFO - 2025-06-25 08:15:44 --> Loader Class Initialized
INFO - 2025-06-25 08:15:44 --> Helper loaded: url_helper
INFO - 2025-06-25 08:15:44 --> Helper loaded: file_helper
INFO - 2025-06-25 08:15:44 --> Helper loaded: url_helper
INFO - 2025-06-25 08:15:44 --> Helper loaded: file_helper
INFO - 2025-06-25 08:15:44 --> Database Driver Class Initialized
INFO - 2025-06-25 08:15:44 --> Database Driver Class Initialized
INFO - 2025-06-25 08:15:44 --> Email Class Initialized
INFO - 2025-06-25 08:15:44 --> Email Class Initialized
DEBUG - 2025-06-25 08:15:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-25 08:15:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:15:44 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:15:44 --> Controller Class Initialized
INFO - 2025-06-25 08:15:44 --> Helper loaded: form_helper
INFO - 2025-06-25 08:15:44 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:15:44 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:15:44 --> Database Driver Class Initialized
INFO - 2025-06-25 08:15:44 --> Model "Crud" initialized
INFO - 2025-06-25 08:15:44 --> Final output sent to browser
DEBUG - 2025-06-25 08:15:44 --> Total execution time: 0.0275
INFO - 2025-06-25 08:15:44 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:15:44 --> Controller Class Initialized
INFO - 2025-06-25 08:15:44 --> Helper loaded: form_helper
INFO - 2025-06-25 08:15:44 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:15:44 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:15:44 --> Database Driver Class Initialized
INFO - 2025-06-25 08:15:44 --> Model "Crud" initialized
INFO - 2025-06-25 08:15:44 --> Final output sent to browser
DEBUG - 2025-06-25 08:15:44 --> Total execution time: 0.0453
INFO - 2025-06-25 08:15:47 --> Config Class Initialized
INFO - 2025-06-25 08:15:47 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:15:47 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:15:47 --> Utf8 Class Initialized
INFO - 2025-06-25 08:15:47 --> URI Class Initialized
INFO - 2025-06-25 08:15:47 --> Router Class Initialized
INFO - 2025-06-25 08:15:47 --> Output Class Initialized
INFO - 2025-06-25 08:15:47 --> Security Class Initialized
DEBUG - 2025-06-25 08:15:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:15:47 --> Input Class Initialized
INFO - 2025-06-25 08:15:47 --> Language Class Initialized
INFO - 2025-06-25 08:15:47 --> Loader Class Initialized
INFO - 2025-06-25 08:15:47 --> Helper loaded: url_helper
INFO - 2025-06-25 08:15:47 --> Helper loaded: file_helper
INFO - 2025-06-25 08:15:47 --> Database Driver Class Initialized
INFO - 2025-06-25 08:15:47 --> Email Class Initialized
DEBUG - 2025-06-25 08:15:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:15:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:15:47 --> Controller Class Initialized
INFO - 2025-06-25 08:15:47 --> Model "TrainerTrainingHistoryModel" initialized
INFO - 2025-06-25 08:15:47 --> Helper loaded: form_helper
INFO - 2025-06-25 08:15:47 --> Form Validation Class Initialized
INFO - 2025-06-25 08:15:47 --> Database Driver Class Initialized
INFO - 2025-06-25 08:15:47 --> Model "Crud" initialized
DEBUG - 2025-06-25 08:15:47 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 08:15:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:15:52 --> Config Class Initialized
INFO - 2025-06-25 08:15:52 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:15:52 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:15:52 --> Utf8 Class Initialized
INFO - 2025-06-25 08:15:52 --> URI Class Initialized
INFO - 2025-06-25 08:15:52 --> Router Class Initialized
INFO - 2025-06-25 08:15:52 --> Output Class Initialized
INFO - 2025-06-25 08:15:52 --> Security Class Initialized
DEBUG - 2025-06-25 08:15:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:15:52 --> Input Class Initialized
INFO - 2025-06-25 08:15:52 --> Language Class Initialized
INFO - 2025-06-25 08:15:52 --> Loader Class Initialized
INFO - 2025-06-25 08:15:52 --> Helper loaded: url_helper
INFO - 2025-06-25 08:15:52 --> Helper loaded: file_helper
INFO - 2025-06-25 08:15:52 --> Database Driver Class Initialized
INFO - 2025-06-25 08:15:52 --> Config Class Initialized
INFO - 2025-06-25 08:15:52 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:15:52 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:15:52 --> Utf8 Class Initialized
INFO - 2025-06-25 08:15:52 --> URI Class Initialized
INFO - 2025-06-25 08:15:52 --> Router Class Initialized
INFO - 2025-06-25 08:15:52 --> Output Class Initialized
INFO - 2025-06-25 08:15:52 --> Security Class Initialized
DEBUG - 2025-06-25 08:15:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:15:52 --> Input Class Initialized
INFO - 2025-06-25 08:15:52 --> Language Class Initialized
INFO - 2025-06-25 08:15:52 --> Loader Class Initialized
INFO - 2025-06-25 08:15:52 --> Helper loaded: url_helper
INFO - 2025-06-25 08:15:52 --> Helper loaded: file_helper
INFO - 2025-06-25 08:15:52 --> Database Driver Class Initialized
INFO - 2025-06-25 08:15:52 --> Email Class Initialized
DEBUG - 2025-06-25 08:15:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:15:52 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:15:52 --> Controller Class Initialized
INFO - 2025-06-25 08:15:52 --> Helper loaded: form_helper
INFO - 2025-06-25 08:15:52 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:15:52 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:15:52 --> Database Driver Class Initialized
INFO - 2025-06-25 08:15:52 --> Email Class Initialized
DEBUG - 2025-06-25 08:15:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:15:52 --> Model "Crud" initialized
INFO - 2025-06-25 08:15:52 --> Final output sent to browser
DEBUG - 2025-06-25 08:15:52 --> Total execution time: 0.0224
INFO - 2025-06-25 08:15:52 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:15:52 --> Controller Class Initialized
INFO - 2025-06-25 08:15:52 --> Helper loaded: form_helper
INFO - 2025-06-25 08:15:52 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:15:52 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:15:52 --> Database Driver Class Initialized
INFO - 2025-06-25 08:15:52 --> Model "Crud" initialized
INFO - 2025-06-25 08:15:52 --> Final output sent to browser
DEBUG - 2025-06-25 08:15:52 --> Total execution time: 0.0355
INFO - 2025-06-25 08:16:02 --> Config Class Initialized
INFO - 2025-06-25 08:16:02 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:16:02 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:16:02 --> Utf8 Class Initialized
INFO - 2025-06-25 08:16:02 --> URI Class Initialized
INFO - 2025-06-25 08:16:02 --> Router Class Initialized
INFO - 2025-06-25 08:16:02 --> Output Class Initialized
INFO - 2025-06-25 08:16:02 --> Security Class Initialized
DEBUG - 2025-06-25 08:16:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:16:02 --> Input Class Initialized
INFO - 2025-06-25 08:16:02 --> Language Class Initialized
INFO - 2025-06-25 08:16:02 --> Loader Class Initialized
INFO - 2025-06-25 08:16:02 --> Helper loaded: url_helper
INFO - 2025-06-25 08:16:02 --> Helper loaded: file_helper
INFO - 2025-06-25 08:16:02 --> Database Driver Class Initialized
INFO - 2025-06-25 08:16:02 --> Config Class Initialized
INFO - 2025-06-25 08:16:02 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:16:02 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:16:02 --> Utf8 Class Initialized
INFO - 2025-06-25 08:16:02 --> URI Class Initialized
INFO - 2025-06-25 08:16:02 --> Router Class Initialized
INFO - 2025-06-25 08:16:02 --> Output Class Initialized
INFO - 2025-06-25 08:16:02 --> Security Class Initialized
DEBUG - 2025-06-25 08:16:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:16:02 --> Input Class Initialized
INFO - 2025-06-25 08:16:02 --> Language Class Initialized
INFO - 2025-06-25 08:16:02 --> Loader Class Initialized
INFO - 2025-06-25 08:16:02 --> Email Class Initialized
INFO - 2025-06-25 08:16:02 --> Helper loaded: url_helper
DEBUG - 2025-06-25 08:16:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:16:02 --> Helper loaded: file_helper
INFO - 2025-06-25 08:16:02 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:16:02 --> Controller Class Initialized
INFO - 2025-06-25 08:16:02 --> Database Driver Class Initialized
INFO - 2025-06-25 08:16:02 --> Helper loaded: form_helper
INFO - 2025-06-25 08:16:02 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:16:02 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:16:02 --> Database Driver Class Initialized
INFO - 2025-06-25 08:16:02 --> Email Class Initialized
INFO - 2025-06-25 08:16:02 --> Model "Crud" initialized
DEBUG - 2025-06-25 08:16:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:16:02 --> Final output sent to browser
DEBUG - 2025-06-25 08:16:02 --> Total execution time: 0.0252
INFO - 2025-06-25 08:16:02 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:16:02 --> Controller Class Initialized
INFO - 2025-06-25 08:16:02 --> Helper loaded: form_helper
INFO - 2025-06-25 08:16:02 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:16:02 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:16:02 --> Database Driver Class Initialized
INFO - 2025-06-25 08:16:02 --> Model "Crud" initialized
INFO - 2025-06-25 08:16:02 --> Final output sent to browser
DEBUG - 2025-06-25 08:16:02 --> Total execution time: 0.0405
INFO - 2025-06-25 08:16:04 --> Config Class Initialized
INFO - 2025-06-25 08:16:04 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:16:04 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:16:04 --> Utf8 Class Initialized
INFO - 2025-06-25 08:16:04 --> URI Class Initialized
INFO - 2025-06-25 08:16:04 --> Router Class Initialized
INFO - 2025-06-25 08:16:04 --> Output Class Initialized
INFO - 2025-06-25 08:16:04 --> Security Class Initialized
DEBUG - 2025-06-25 08:16:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:16:04 --> Input Class Initialized
INFO - 2025-06-25 08:16:04 --> Language Class Initialized
INFO - 2025-06-25 08:16:04 --> Loader Class Initialized
INFO - 2025-06-25 08:16:04 --> Helper loaded: url_helper
INFO - 2025-06-25 08:16:04 --> Helper loaded: file_helper
INFO - 2025-06-25 08:16:04 --> Database Driver Class Initialized
INFO - 2025-06-25 08:16:04 --> Email Class Initialized
DEBUG - 2025-06-25 08:16:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:16:04 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:16:04 --> Controller Class Initialized
INFO - 2025-06-25 08:16:04 --> Model "TrainerTrainingHistoryModel" initialized
INFO - 2025-06-25 08:16:04 --> Helper loaded: form_helper
INFO - 2025-06-25 08:16:04 --> Form Validation Class Initialized
INFO - 2025-06-25 08:16:04 --> Database Driver Class Initialized
INFO - 2025-06-25 08:16:04 --> Model "Crud" initialized
DEBUG - 2025-06-25 08:16:04 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 08:16:04 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:16:10 --> Config Class Initialized
INFO - 2025-06-25 08:16:10 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:16:10 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:16:10 --> Utf8 Class Initialized
INFO - 2025-06-25 08:16:10 --> URI Class Initialized
INFO - 2025-06-25 08:16:10 --> Router Class Initialized
INFO - 2025-06-25 08:16:10 --> Output Class Initialized
INFO - 2025-06-25 08:16:10 --> Security Class Initialized
DEBUG - 2025-06-25 08:16:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:16:10 --> Input Class Initialized
INFO - 2025-06-25 08:16:10 --> Language Class Initialized
INFO - 2025-06-25 08:16:10 --> Loader Class Initialized
INFO - 2025-06-25 08:16:10 --> Helper loaded: url_helper
INFO - 2025-06-25 08:16:10 --> Helper loaded: file_helper
INFO - 2025-06-25 08:16:10 --> Database Driver Class Initialized
INFO - 2025-06-25 08:16:10 --> Email Class Initialized
DEBUG - 2025-06-25 08:16:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:16:10 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:16:10 --> Controller Class Initialized
INFO - 2025-06-25 08:16:10 --> Model "TrainerTrainingHistoryModel" initialized
INFO - 2025-06-25 08:16:10 --> Helper loaded: form_helper
INFO - 2025-06-25 08:16:10 --> Form Validation Class Initialized
INFO - 2025-06-25 08:16:10 --> Database Driver Class Initialized
INFO - 2025-06-25 08:16:10 --> Model "Crud" initialized
DEBUG - 2025-06-25 08:16:10 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 08:16:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 08:16:10 --> Records data history: [{"id":"20230627000001","created_by":"sarah","created_date":"2023-06-27 11:12:43","updated_by":"jihanmaharani","updated_date":"2024-07-05 09:19:00","approved":"0","approved_to":null,"approved_by":null,"approved_date":null,"deleted":"0","candidate_id":"","division_id":"20221119000002","departement_id":"20221213000005","departement_sub_id":"20221213000021","contract_id":"20221119000001","position_id":"20221213000006","group_id":"20230124000002","source_id":"","marital_id":"20221119000008","religion_id":"20221119000003","machine_code":"13135","number":"08070007230001","name":"Fradil","nickname":"","date_sign":"2023-07-03","date_expired":"2024-07-02","address":"Jl Taman Wijaya Kusuma III RT 004\/ RW 002, CIlandak Barat, Cilandak, Jakarta Selatan","place_birth":"Jakarta","birthday":"1981-06-05","gender":"MALE","blood":"-","national_id":"3216080506810012","tax_id":"37.301.6727-413.000","jamsostek":"23105478129","jamsostek_date":"2023-08-01","jkn":"0001148544009","jkn_date":"2023-11-01","jkn_family":"1","telphone":"","mobile_phone":"","emergency_no":"","email":"","driving_no":"","driving_date":"1899-11-30","stnk_no":"","stnk_date":"1899-11-30","maps":"","image_id":null,"image_profile":null,"bank_name":"Bank Mandiri","bank_no":"1730014579271","bank_branch":"Purwakarta","status":"1","status_date":"2024-07-05","employee_id":"20230627000001","status_check":null,"status_notification":null,"division_name":"PLANT RUBBER","departement_name":"MARKETING","departement_sub_name":"MARKETING","type":"INDIRECT","position_name":"PLANT MANAGER","contract_name":"CONTRACT 1","group_name":"CONTRACT STAFF & LEADER","source_name":null,"marital_name":"Lajang Tidak Ada Tanggungan","religion_name":"ISLAM"},{"id":"20230119000119","created_by":"admin","created_date":"2023-01-19 11:29:09","updated_by":"fitri","updated_date":"2023-09-25 18:05:30","approved":"0","approved_to":null,"approved_by":null,"approved_date":null,"deleted":"0","candidate_id":null,"division_id":"20221119000002","departement_id":"20221213000005","departement_sub_id":"20221213000021","contract_id":"20221119000002","position_id":"20221213000001","group_id":"20230118000002","source_id":"","marital_id":"20221119000002","religion_id":"20221119000003","machine_code":null,"number":"08070006200138","name":"Wasroh","nickname":"","date_sign":"2020-06-15","date_expired":"2023-06-14","address":"Jl Bungur Raya No 51 Rt 013\/06 Kebayoran Lama Utara Jakarta Selatan","place_birth":"Tegal","birthday":"1972-02-03","gender":"MALE","blood":"A","national_id":"3174050302720011","tax_id":"","jamsostek":"","jamsostek_date":"1899-11-30","jkn":"","jkn_date":"1899-11-30","jkn_family":"1","telphone":"","mobile_phone":"818800537","emergency_no":"","email":"wasrohmr697@gmail.com","driving_no":"","driving_date":"0000-00-00","stnk_no":"","stnk_date":"0000-00-00","maps":"","image_id":null,"image_profile":null,"bank_name":"-","bank_no":"-","bank_branch":"-","status":"1","status_date":"2023-09-15","employee_id":"20230119000119","status_check":null,"status_notification":null,"division_name":"PLANT RUBBER","departement_name":"MARKETING","departement_sub_name":"MARKETING","type":"INDIRECT","position_name":"ASSISTANT MANAGER","contract_name":"CONTRACT 2","group_name":"CONTRACT","source_name":null,"marital_name":"Kawin 2 Tanggungan","religion_name":"ISLAM"}]
INFO - 2025-06-25 08:16:10 --> Final output sent to browser
DEBUG - 2025-06-25 08:16:10 --> Total execution time: 0.0531
INFO - 2025-06-25 08:16:11 --> Config Class Initialized
INFO - 2025-06-25 08:16:11 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:16:11 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:16:11 --> Utf8 Class Initialized
INFO - 2025-06-25 08:16:11 --> URI Class Initialized
INFO - 2025-06-25 08:16:11 --> Router Class Initialized
INFO - 2025-06-25 08:16:11 --> Output Class Initialized
INFO - 2025-06-25 08:16:11 --> Security Class Initialized
DEBUG - 2025-06-25 08:16:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:16:11 --> Input Class Initialized
INFO - 2025-06-25 08:16:11 --> Language Class Initialized
INFO - 2025-06-25 08:16:11 --> Loader Class Initialized
INFO - 2025-06-25 08:16:11 --> Helper loaded: url_helper
INFO - 2025-06-25 08:16:11 --> Helper loaded: file_helper
INFO - 2025-06-25 08:16:11 --> Database Driver Class Initialized
INFO - 2025-06-25 08:16:11 --> Config Class Initialized
INFO - 2025-06-25 08:16:11 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:16:11 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:16:11 --> Utf8 Class Initialized
INFO - 2025-06-25 08:16:11 --> URI Class Initialized
INFO - 2025-06-25 08:16:11 --> Router Class Initialized
INFO - 2025-06-25 08:16:11 --> Output Class Initialized
INFO - 2025-06-25 08:16:11 --> Security Class Initialized
DEBUG - 2025-06-25 08:16:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:16:11 --> Input Class Initialized
INFO - 2025-06-25 08:16:11 --> Language Class Initialized
INFO - 2025-06-25 08:16:11 --> Loader Class Initialized
INFO - 2025-06-25 08:16:11 --> Helper loaded: url_helper
INFO - 2025-06-25 08:16:11 --> Helper loaded: file_helper
INFO - 2025-06-25 08:16:11 --> Database Driver Class Initialized
INFO - 2025-06-25 08:16:11 --> Email Class Initialized
DEBUG - 2025-06-25 08:16:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:16:11 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:16:11 --> Controller Class Initialized
INFO - 2025-06-25 08:16:11 --> Helper loaded: form_helper
INFO - 2025-06-25 08:16:11 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:16:11 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:16:11 --> Database Driver Class Initialized
INFO - 2025-06-25 08:16:11 --> Email Class Initialized
DEBUG - 2025-06-25 08:16:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:16:11 --> Model "Crud" initialized
INFO - 2025-06-25 08:16:11 --> Final output sent to browser
DEBUG - 2025-06-25 08:16:11 --> Total execution time: 0.0250
INFO - 2025-06-25 08:16:11 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:16:11 --> Controller Class Initialized
INFO - 2025-06-25 08:16:11 --> Helper loaded: form_helper
INFO - 2025-06-25 08:16:11 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:16:11 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:16:11 --> Database Driver Class Initialized
INFO - 2025-06-25 08:16:11 --> Model "Crud" initialized
INFO - 2025-06-25 08:16:11 --> Final output sent to browser
DEBUG - 2025-06-25 08:16:11 --> Total execution time: 0.0438
INFO - 2025-06-25 08:18:25 --> Config Class Initialized
INFO - 2025-06-25 08:18:25 --> Config Class Initialized
INFO - 2025-06-25 08:18:25 --> Hooks Class Initialized
INFO - 2025-06-25 08:18:25 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:18:25 --> UTF-8 Support Enabled
DEBUG - 2025-06-25 08:18:25 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:18:25 --> Utf8 Class Initialized
INFO - 2025-06-25 08:18:25 --> Utf8 Class Initialized
INFO - 2025-06-25 08:18:25 --> URI Class Initialized
INFO - 2025-06-25 08:18:25 --> URI Class Initialized
INFO - 2025-06-25 08:18:25 --> Router Class Initialized
INFO - 2025-06-25 08:18:25 --> Router Class Initialized
INFO - 2025-06-25 08:18:25 --> Output Class Initialized
INFO - 2025-06-25 08:18:25 --> Output Class Initialized
INFO - 2025-06-25 08:18:25 --> Security Class Initialized
INFO - 2025-06-25 08:18:25 --> Security Class Initialized
DEBUG - 2025-06-25 08:18:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-25 08:18:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:18:25 --> Input Class Initialized
INFO - 2025-06-25 08:18:25 --> Input Class Initialized
INFO - 2025-06-25 08:18:25 --> Language Class Initialized
INFO - 2025-06-25 08:18:25 --> Language Class Initialized
INFO - 2025-06-25 08:18:25 --> Loader Class Initialized
INFO - 2025-06-25 08:18:25 --> Helper loaded: url_helper
INFO - 2025-06-25 08:18:25 --> Helper loaded: file_helper
INFO - 2025-06-25 08:18:25 --> Loader Class Initialized
INFO - 2025-06-25 08:18:25 --> Helper loaded: url_helper
INFO - 2025-06-25 08:18:25 --> Helper loaded: file_helper
INFO - 2025-06-25 08:18:25 --> Database Driver Class Initialized
INFO - 2025-06-25 08:18:25 --> Database Driver Class Initialized
INFO - 2025-06-25 08:18:25 --> Email Class Initialized
DEBUG - 2025-06-25 08:18:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:18:25 --> Email Class Initialized
INFO - 2025-06-25 08:18:25 --> Session: Class initialized using 'files' driver.
DEBUG - 2025-06-25 08:18:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:18:25 --> Controller Class Initialized
INFO - 2025-06-25 08:18:25 --> Helper loaded: form_helper
INFO - 2025-06-25 08:18:25 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:18:25 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:18:25 --> Database Driver Class Initialized
INFO - 2025-06-25 08:18:25 --> Model "Crud" initialized
INFO - 2025-06-25 08:18:25 --> Final output sent to browser
DEBUG - 2025-06-25 08:18:25 --> Total execution time: 0.0452
INFO - 2025-06-25 08:18:25 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:18:25 --> Controller Class Initialized
INFO - 2025-06-25 08:18:25 --> Helper loaded: form_helper
INFO - 2025-06-25 08:18:25 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:18:25 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:18:25 --> Database Driver Class Initialized
INFO - 2025-06-25 08:18:25 --> Model "Crud" initialized
INFO - 2025-06-25 08:18:25 --> Final output sent to browser
DEBUG - 2025-06-25 08:18:25 --> Total execution time: 0.0652
INFO - 2025-06-25 08:18:30 --> Config Class Initialized
INFO - 2025-06-25 08:18:30 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:18:30 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:18:30 --> Utf8 Class Initialized
INFO - 2025-06-25 08:18:30 --> URI Class Initialized
INFO - 2025-06-25 08:18:30 --> Router Class Initialized
INFO - 2025-06-25 08:18:30 --> Output Class Initialized
INFO - 2025-06-25 08:18:30 --> Security Class Initialized
DEBUG - 2025-06-25 08:18:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:18:30 --> Input Class Initialized
INFO - 2025-06-25 08:18:30 --> Language Class Initialized
INFO - 2025-06-25 08:18:30 --> Loader Class Initialized
INFO - 2025-06-25 08:18:30 --> Helper loaded: url_helper
INFO - 2025-06-25 08:18:30 --> Helper loaded: file_helper
INFO - 2025-06-25 08:18:30 --> Database Driver Class Initialized
INFO - 2025-06-25 08:18:30 --> Email Class Initialized
DEBUG - 2025-06-25 08:18:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:18:30 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:18:30 --> Controller Class Initialized
INFO - 2025-06-25 08:18:30 --> Model "TrainerTrainingHistoryModel" initialized
INFO - 2025-06-25 08:18:30 --> Helper loaded: form_helper
INFO - 2025-06-25 08:18:30 --> Form Validation Class Initialized
INFO - 2025-06-25 08:18:30 --> Database Driver Class Initialized
INFO - 2025-06-25 08:18:30 --> Model "Crud" initialized
DEBUG - 2025-06-25 08:18:30 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 08:18:30 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:18:31 --> Config Class Initialized
INFO - 2025-06-25 08:18:31 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:18:31 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:18:31 --> Utf8 Class Initialized
INFO - 2025-06-25 08:18:31 --> URI Class Initialized
INFO - 2025-06-25 08:18:31 --> Router Class Initialized
INFO - 2025-06-25 08:18:31 --> Output Class Initialized
INFO - 2025-06-25 08:18:31 --> Security Class Initialized
DEBUG - 2025-06-25 08:18:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:18:31 --> Input Class Initialized
INFO - 2025-06-25 08:18:31 --> Language Class Initialized
INFO - 2025-06-25 08:18:31 --> Loader Class Initialized
INFO - 2025-06-25 08:18:31 --> Helper loaded: url_helper
INFO - 2025-06-25 08:18:31 --> Helper loaded: file_helper
INFO - 2025-06-25 08:18:31 --> Database Driver Class Initialized
INFO - 2025-06-25 08:18:31 --> Email Class Initialized
DEBUG - 2025-06-25 08:18:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:18:31 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:18:31 --> Controller Class Initialized
INFO - 2025-06-25 08:18:31 --> Helper loaded: form_helper
INFO - 2025-06-25 08:18:31 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:18:31 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:18:31 --> Database Driver Class Initialized
INFO - 2025-06-25 08:18:31 --> Model "Crud" initialized
INFO - 2025-06-25 08:18:31 --> Config Class Initialized
INFO - 2025-06-25 08:18:31 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:18:31 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:18:31 --> Utf8 Class Initialized
INFO - 2025-06-25 08:18:31 --> URI Class Initialized
INFO - 2025-06-25 08:18:31 --> Router Class Initialized
INFO - 2025-06-25 08:18:31 --> Output Class Initialized
INFO - 2025-06-25 08:18:31 --> Security Class Initialized
DEBUG - 2025-06-25 08:18:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:18:31 --> Input Class Initialized
INFO - 2025-06-25 08:18:31 --> Language Class Initialized
INFO - 2025-06-25 08:18:31 --> Loader Class Initialized
INFO - 2025-06-25 08:18:31 --> Helper loaded: url_helper
INFO - 2025-06-25 08:18:31 --> Helper loaded: file_helper
INFO - 2025-06-25 08:18:31 --> Database Driver Class Initialized
INFO - 2025-06-25 08:18:31 --> Email Class Initialized
DEBUG - 2025-06-25 08:18:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:18:31 --> Final output sent to browser
DEBUG - 2025-06-25 08:18:31 --> Total execution time: 0.0192
INFO - 2025-06-25 08:18:31 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:18:31 --> Controller Class Initialized
INFO - 2025-06-25 08:18:31 --> Helper loaded: form_helper
INFO - 2025-06-25 08:18:31 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:18:31 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:18:31 --> Database Driver Class Initialized
INFO - 2025-06-25 08:18:31 --> Model "Crud" initialized
INFO - 2025-06-25 08:18:31 --> Final output sent to browser
DEBUG - 2025-06-25 08:18:31 --> Total execution time: 0.0307
INFO - 2025-06-25 08:18:39 --> Config Class Initialized
INFO - 2025-06-25 08:18:39 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:18:39 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:18:39 --> Utf8 Class Initialized
INFO - 2025-06-25 08:18:39 --> URI Class Initialized
INFO - 2025-06-25 08:18:39 --> Router Class Initialized
INFO - 2025-06-25 08:18:39 --> Output Class Initialized
INFO - 2025-06-25 08:18:39 --> Security Class Initialized
DEBUG - 2025-06-25 08:18:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:18:39 --> Input Class Initialized
INFO - 2025-06-25 08:18:39 --> Language Class Initialized
INFO - 2025-06-25 08:18:39 --> Loader Class Initialized
INFO - 2025-06-25 08:18:39 --> Helper loaded: url_helper
INFO - 2025-06-25 08:18:39 --> Helper loaded: file_helper
INFO - 2025-06-25 08:18:39 --> Database Driver Class Initialized
INFO - 2025-06-25 08:18:39 --> Email Class Initialized
DEBUG - 2025-06-25 08:18:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:18:39 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:18:39 --> Controller Class Initialized
INFO - 2025-06-25 08:18:39 --> Model "TrainerTrainingHistoryModel" initialized
INFO - 2025-06-25 08:18:39 --> Helper loaded: form_helper
INFO - 2025-06-25 08:18:39 --> Form Validation Class Initialized
INFO - 2025-06-25 08:18:39 --> Database Driver Class Initialized
INFO - 2025-06-25 08:18:39 --> Model "Crud" initialized
DEBUG - 2025-06-25 08:18:39 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 08:18:39 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:18:42 --> Config Class Initialized
INFO - 2025-06-25 08:18:42 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:18:42 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:18:42 --> Utf8 Class Initialized
INFO - 2025-06-25 08:18:42 --> URI Class Initialized
INFO - 2025-06-25 08:18:42 --> Router Class Initialized
INFO - 2025-06-25 08:18:42 --> Output Class Initialized
INFO - 2025-06-25 08:18:42 --> Security Class Initialized
DEBUG - 2025-06-25 08:18:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:18:42 --> Input Class Initialized
INFO - 2025-06-25 08:18:42 --> Language Class Initialized
INFO - 2025-06-25 08:18:42 --> Loader Class Initialized
INFO - 2025-06-25 08:18:42 --> Helper loaded: url_helper
INFO - 2025-06-25 08:18:42 --> Helper loaded: file_helper
INFO - 2025-06-25 08:18:42 --> Database Driver Class Initialized
INFO - 2025-06-25 08:18:42 --> Config Class Initialized
INFO - 2025-06-25 08:18:42 --> Hooks Class Initialized
INFO - 2025-06-25 08:18:42 --> Email Class Initialized
DEBUG - 2025-06-25 08:18:42 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:18:42 --> Utf8 Class Initialized
DEBUG - 2025-06-25 08:18:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:18:42 --> URI Class Initialized
INFO - 2025-06-25 08:18:42 --> Router Class Initialized
INFO - 2025-06-25 08:18:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:18:42 --> Output Class Initialized
INFO - 2025-06-25 08:18:42 --> Controller Class Initialized
INFO - 2025-06-25 08:18:42 --> Security Class Initialized
INFO - 2025-06-25 08:18:42 --> Helper loaded: form_helper
DEBUG - 2025-06-25 08:18:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:18:42 --> Form Validation Class Initialized
INFO - 2025-06-25 08:18:42 --> Input Class Initialized
DEBUG - 2025-06-25 08:18:42 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:18:42 --> Language Class Initialized
INFO - 2025-06-25 08:18:42 --> Loader Class Initialized
INFO - 2025-06-25 08:18:42 --> Database Driver Class Initialized
INFO - 2025-06-25 08:18:42 --> Helper loaded: url_helper
INFO - 2025-06-25 08:18:42 --> Helper loaded: file_helper
INFO - 2025-06-25 08:18:42 --> Database Driver Class Initialized
INFO - 2025-06-25 08:18:42 --> Model "Crud" initialized
INFO - 2025-06-25 08:18:42 --> Email Class Initialized
DEBUG - 2025-06-25 08:18:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:18:42 --> Final output sent to browser
DEBUG - 2025-06-25 08:18:42 --> Total execution time: 0.0170
INFO - 2025-06-25 08:18:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:18:42 --> Controller Class Initialized
INFO - 2025-06-25 08:18:42 --> Helper loaded: form_helper
INFO - 2025-06-25 08:18:42 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:18:42 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:18:42 --> Database Driver Class Initialized
INFO - 2025-06-25 08:18:42 --> Model "Crud" initialized
INFO - 2025-06-25 08:18:42 --> Final output sent to browser
DEBUG - 2025-06-25 08:18:42 --> Total execution time: 0.0270
INFO - 2025-06-25 08:18:51 --> Config Class Initialized
INFO - 2025-06-25 08:18:51 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:18:51 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:18:51 --> Utf8 Class Initialized
INFO - 2025-06-25 08:18:51 --> URI Class Initialized
INFO - 2025-06-25 08:18:51 --> Router Class Initialized
INFO - 2025-06-25 08:18:51 --> Output Class Initialized
INFO - 2025-06-25 08:18:51 --> Security Class Initialized
DEBUG - 2025-06-25 08:18:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:18:51 --> Input Class Initialized
INFO - 2025-06-25 08:18:51 --> Language Class Initialized
INFO - 2025-06-25 08:18:51 --> Loader Class Initialized
INFO - 2025-06-25 08:18:51 --> Helper loaded: url_helper
INFO - 2025-06-25 08:18:51 --> Helper loaded: file_helper
INFO - 2025-06-25 08:18:51 --> Database Driver Class Initialized
INFO - 2025-06-25 08:18:51 --> Config Class Initialized
INFO - 2025-06-25 08:18:51 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:18:51 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:18:51 --> Utf8 Class Initialized
INFO - 2025-06-25 08:18:51 --> URI Class Initialized
INFO - 2025-06-25 08:18:51 --> Router Class Initialized
INFO - 2025-06-25 08:18:51 --> Output Class Initialized
INFO - 2025-06-25 08:18:51 --> Security Class Initialized
DEBUG - 2025-06-25 08:18:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:18:51 --> Input Class Initialized
INFO - 2025-06-25 08:18:51 --> Language Class Initialized
INFO - 2025-06-25 08:18:51 --> Loader Class Initialized
INFO - 2025-06-25 08:18:51 --> Helper loaded: url_helper
INFO - 2025-06-25 08:18:51 --> Helper loaded: file_helper
INFO - 2025-06-25 08:18:51 --> Database Driver Class Initialized
INFO - 2025-06-25 08:18:51 --> Email Class Initialized
DEBUG - 2025-06-25 08:18:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:18:51 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:18:51 --> Controller Class Initialized
INFO - 2025-06-25 08:18:51 --> Helper loaded: form_helper
INFO - 2025-06-25 08:18:51 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:18:51 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:18:51 --> Database Driver Class Initialized
INFO - 2025-06-25 08:18:51 --> Email Class Initialized
DEBUG - 2025-06-25 08:18:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:18:51 --> Model "Crud" initialized
INFO - 2025-06-25 08:18:51 --> Final output sent to browser
DEBUG - 2025-06-25 08:18:51 --> Total execution time: 0.0191
INFO - 2025-06-25 08:18:51 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:18:51 --> Controller Class Initialized
INFO - 2025-06-25 08:18:51 --> Helper loaded: form_helper
INFO - 2025-06-25 08:18:51 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:18:51 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:18:51 --> Database Driver Class Initialized
INFO - 2025-06-25 08:18:51 --> Model "Crud" initialized
INFO - 2025-06-25 08:18:51 --> Final output sent to browser
DEBUG - 2025-06-25 08:18:51 --> Total execution time: 0.0305
INFO - 2025-06-25 08:18:55 --> Config Class Initialized
INFO - 2025-06-25 08:18:55 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:18:55 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:18:55 --> Utf8 Class Initialized
INFO - 2025-06-25 08:18:55 --> URI Class Initialized
INFO - 2025-06-25 08:18:55 --> Router Class Initialized
INFO - 2025-06-25 08:18:55 --> Output Class Initialized
INFO - 2025-06-25 08:18:55 --> Security Class Initialized
DEBUG - 2025-06-25 08:18:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:18:55 --> Input Class Initialized
INFO - 2025-06-25 08:18:55 --> Language Class Initialized
INFO - 2025-06-25 08:18:55 --> Loader Class Initialized
INFO - 2025-06-25 08:18:55 --> Helper loaded: url_helper
INFO - 2025-06-25 08:18:55 --> Helper loaded: file_helper
INFO - 2025-06-25 08:18:55 --> Database Driver Class Initialized
INFO - 2025-06-25 08:18:55 --> Email Class Initialized
DEBUG - 2025-06-25 08:18:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:18:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:18:55 --> Controller Class Initialized
INFO - 2025-06-25 08:18:55 --> Model "TrainerTrainingHistoryModel" initialized
INFO - 2025-06-25 08:18:55 --> Helper loaded: form_helper
INFO - 2025-06-25 08:18:55 --> Form Validation Class Initialized
INFO - 2025-06-25 08:18:55 --> Database Driver Class Initialized
INFO - 2025-06-25 08:18:55 --> Model "Crud" initialized
DEBUG - 2025-06-25 08:18:55 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 08:18:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:19:01 --> Config Class Initialized
INFO - 2025-06-25 08:19:01 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:19:01 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:19:01 --> Utf8 Class Initialized
INFO - 2025-06-25 08:19:01 --> URI Class Initialized
INFO - 2025-06-25 08:19:01 --> Router Class Initialized
INFO - 2025-06-25 08:19:01 --> Output Class Initialized
INFO - 2025-06-25 08:19:01 --> Security Class Initialized
DEBUG - 2025-06-25 08:19:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:19:01 --> Input Class Initialized
INFO - 2025-06-25 08:19:01 --> Language Class Initialized
INFO - 2025-06-25 08:19:01 --> Loader Class Initialized
INFO - 2025-06-25 08:19:01 --> Helper loaded: url_helper
INFO - 2025-06-25 08:19:01 --> Helper loaded: file_helper
INFO - 2025-06-25 08:19:01 --> Database Driver Class Initialized
INFO - 2025-06-25 08:19:01 --> Email Class Initialized
DEBUG - 2025-06-25 08:19:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:19:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:19:01 --> Controller Class Initialized
INFO - 2025-06-25 08:19:01 --> Model "TrainerTrainingHistoryModel" initialized
INFO - 2025-06-25 08:19:01 --> Helper loaded: form_helper
INFO - 2025-06-25 08:19:01 --> Form Validation Class Initialized
INFO - 2025-06-25 08:19:01 --> Database Driver Class Initialized
INFO - 2025-06-25 08:19:01 --> Model "Crud" initialized
DEBUG - 2025-06-25 08:19:01 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 08:19:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:19:01 --> Config Class Initialized
INFO - 2025-06-25 08:19:01 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:19:01 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:19:01 --> Utf8 Class Initialized
INFO - 2025-06-25 08:19:01 --> URI Class Initialized
INFO - 2025-06-25 08:19:01 --> Router Class Initialized
INFO - 2025-06-25 08:19:01 --> Output Class Initialized
INFO - 2025-06-25 08:19:01 --> Security Class Initialized
DEBUG - 2025-06-25 08:19:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:19:01 --> Input Class Initialized
INFO - 2025-06-25 08:19:01 --> Language Class Initialized
INFO - 2025-06-25 08:19:01 --> Loader Class Initialized
INFO - 2025-06-25 08:19:01 --> Helper loaded: url_helper
INFO - 2025-06-25 08:19:01 --> Helper loaded: file_helper
INFO - 2025-06-25 08:19:01 --> Database Driver Class Initialized
INFO - 2025-06-25 08:19:01 --> Email Class Initialized
DEBUG - 2025-06-25 08:19:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:19:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:19:01 --> Controller Class Initialized
INFO - 2025-06-25 08:19:01 --> Helper loaded: form_helper
INFO - 2025-06-25 08:19:01 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:19:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:19:01 --> Database Driver Class Initialized
INFO - 2025-06-25 08:19:01 --> Config Class Initialized
INFO - 2025-06-25 08:19:01 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:19:01 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:19:01 --> Utf8 Class Initialized
INFO - 2025-06-25 08:19:01 --> URI Class Initialized
INFO - 2025-06-25 08:19:01 --> Router Class Initialized
INFO - 2025-06-25 08:19:01 --> Output Class Initialized
INFO - 2025-06-25 08:19:01 --> Security Class Initialized
DEBUG - 2025-06-25 08:19:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:19:01 --> Input Class Initialized
INFO - 2025-06-25 08:19:01 --> Language Class Initialized
INFO - 2025-06-25 08:19:01 --> Loader Class Initialized
INFO - 2025-06-25 08:19:01 --> Model "Crud" initialized
INFO - 2025-06-25 08:19:01 --> Helper loaded: url_helper
INFO - 2025-06-25 08:19:01 --> Helper loaded: file_helper
INFO - 2025-06-25 08:19:01 --> Database Driver Class Initialized
INFO - 2025-06-25 08:19:01 --> Email Class Initialized
DEBUG - 2025-06-25 08:19:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:19:01 --> Final output sent to browser
DEBUG - 2025-06-25 08:19:01 --> Total execution time: 0.0303
INFO - 2025-06-25 08:19:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:19:01 --> Controller Class Initialized
INFO - 2025-06-25 08:19:01 --> Helper loaded: form_helper
INFO - 2025-06-25 08:19:01 --> Form Validation Class Initialized
DEBUG - 2025-06-25 08:19:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 08:19:01 --> Database Driver Class Initialized
INFO - 2025-06-25 08:19:01 --> Model "Crud" initialized
INFO - 2025-06-25 08:19:01 --> Final output sent to browser
DEBUG - 2025-06-25 08:19:01 --> Total execution time: 0.0322
INFO - 2025-06-25 08:19:06 --> Config Class Initialized
INFO - 2025-06-25 08:19:06 --> Hooks Class Initialized
DEBUG - 2025-06-25 08:19:06 --> UTF-8 Support Enabled
INFO - 2025-06-25 08:19:06 --> Utf8 Class Initialized
INFO - 2025-06-25 08:19:06 --> URI Class Initialized
INFO - 2025-06-25 08:19:06 --> Router Class Initialized
INFO - 2025-06-25 08:19:06 --> Output Class Initialized
INFO - 2025-06-25 08:19:06 --> Security Class Initialized
DEBUG - 2025-06-25 08:19:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 08:19:06 --> Input Class Initialized
INFO - 2025-06-25 08:19:06 --> Language Class Initialized
INFO - 2025-06-25 08:19:06 --> Loader Class Initialized
INFO - 2025-06-25 08:19:06 --> Helper loaded: url_helper
INFO - 2025-06-25 08:19:06 --> Helper loaded: file_helper
INFO - 2025-06-25 08:19:06 --> Database Driver Class Initialized
INFO - 2025-06-25 08:19:06 --> Email Class Initialized
DEBUG - 2025-06-25 08:19:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 08:19:06 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 08:19:06 --> Controller Class Initialized
INFO - 2025-06-25 08:19:06 --> Model "TrainerTrainingHistoryModel" initialized
INFO - 2025-06-25 08:19:06 --> Helper loaded: form_helper
INFO - 2025-06-25 08:19:06 --> Form Validation Class Initialized
INFO - 2025-06-25 08:19:06 --> Database Driver Class Initialized
INFO - 2025-06-25 08:19:06 --> Model "Crud" initialized
DEBUG - 2025-06-25 08:19:06 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 08:19:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 08:19:06 --> Records data history: [{"id":"20230612000003","created_by":"sarah","created_date":"2023-06-12 10:31:26","updated_by":"fitri","updated_date":"2024-06-04 14:19:57","approved":"0","approved_to":null,"approved_by":null,"approved_date":null,"deleted":"0","candidate_id":"","division_id":"20221119000002","departement_id":"20221213000006","departement_sub_id":"20221213000045","contract_id":"20221119000001","position_id":"20221213000001","group_id":"20230124000002","source_id":"","marital_id":"20221119000002","religion_id":"20221119000003","machine_code":"11101","number":"08070005230004","name":"Achmad Goesly","nickname":"","date_sign":"2023-05-17","date_expired":"2024-05-16","address":"Perum BIP T.45 Blok E19 Cibening Bungursari ","place_birth":"Surabaya","birthday":"1969-03-26","gender":"MALE","blood":"-","national_id":"3214132603690001","tax_id":"","jamsostek":"23083455479","jamsostek_date":"2023-07-01","jkn":"0001661787123","jkn_date":"2023-11-01","jkn_family":"1","telphone":"","mobile_phone":"","emergency_no":"","email":"","driving_no":"","driving_date":"1899-11-30","stnk_no":"","stnk_date":"1899-11-30","maps":"","image_id":null,"image_profile":null,"bank_name":"Bank Mandiri","bank_no":"1730010515410","bank_branch":"Purwakarta","status":"1","status_date":"2024-05-15","employee_id":"20230612000003","status_check":null,"status_notification":null,"division_name":"PLANT RUBBER","departement_name":"PRODUCTION","departement_sub_name":"PRODUCTION","type":"DIRECT","position_name":"ASSISTANT MANAGER","contract_name":"CONTRACT 1","group_name":"CONTRACT STAFF & LEADER","source_name":null,"marital_name":"Kawin 2 Tanggungan","religion_name":"ISLAM"}]
INFO - 2025-06-25 08:19:06 --> Final output sent to browser
DEBUG - 2025-06-25 08:19:06 --> Total execution time: 0.0666
INFO - 2025-06-25 09:51:04 --> Config Class Initialized
INFO - 2025-06-25 09:51:04 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:51:04 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:51:04 --> Utf8 Class Initialized
INFO - 2025-06-25 09:51:04 --> URI Class Initialized
INFO - 2025-06-25 09:51:04 --> Router Class Initialized
INFO - 2025-06-25 09:51:04 --> Output Class Initialized
INFO - 2025-06-25 09:51:04 --> Security Class Initialized
DEBUG - 2025-06-25 09:51:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:51:04 --> Input Class Initialized
INFO - 2025-06-25 09:51:04 --> Language Class Initialized
INFO - 2025-06-25 09:51:04 --> Loader Class Initialized
INFO - 2025-06-25 09:51:04 --> Helper loaded: url_helper
INFO - 2025-06-25 09:51:04 --> Helper loaded: file_helper
INFO - 2025-06-25 09:51:04 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:04 --> Email Class Initialized
DEBUG - 2025-06-25 09:51:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:51:04 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:51:04 --> Controller Class Initialized
INFO - 2025-06-25 09:51:04 --> Helper loaded: form_helper
INFO - 2025-06-25 09:51:04 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:51:04 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:51:04 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:04 --> Model "Crud" initialized
INFO - 2025-06-25 09:51:04 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-25 09:51:04 --> File loaded: /var/www/html/hris_lnd/application/views/home.php
INFO - 2025-06-25 09:51:04 --> Final output sent to browser
DEBUG - 2025-06-25 09:51:04 --> Total execution time: 0.2710
INFO - 2025-06-25 09:51:07 --> Config Class Initialized
INFO - 2025-06-25 09:51:07 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:51:07 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:51:07 --> Utf8 Class Initialized
INFO - 2025-06-25 09:51:07 --> URI Class Initialized
INFO - 2025-06-25 09:51:07 --> Router Class Initialized
INFO - 2025-06-25 09:51:07 --> Output Class Initialized
INFO - 2025-06-25 09:51:07 --> Security Class Initialized
DEBUG - 2025-06-25 09:51:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:51:07 --> Input Class Initialized
INFO - 2025-06-25 09:51:07 --> Language Class Initialized
INFO - 2025-06-25 09:51:07 --> Loader Class Initialized
INFO - 2025-06-25 09:51:07 --> Helper loaded: url_helper
INFO - 2025-06-25 09:51:07 --> Helper loaded: file_helper
INFO - 2025-06-25 09:51:07 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:07 --> Config Class Initialized
INFO - 2025-06-25 09:51:07 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:51:07 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:51:07 --> Utf8 Class Initialized
INFO - 2025-06-25 09:51:07 --> URI Class Initialized
INFO - 2025-06-25 09:51:07 --> Router Class Initialized
INFO - 2025-06-25 09:51:07 --> Output Class Initialized
INFO - 2025-06-25 09:51:07 --> Security Class Initialized
DEBUG - 2025-06-25 09:51:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:51:07 --> Input Class Initialized
INFO - 2025-06-25 09:51:07 --> Language Class Initialized
INFO - 2025-06-25 09:51:07 --> Loader Class Initialized
INFO - 2025-06-25 09:51:07 --> Helper loaded: url_helper
INFO - 2025-06-25 09:51:07 --> Helper loaded: file_helper
INFO - 2025-06-25 09:51:07 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:07 --> Email Class Initialized
DEBUG - 2025-06-25 09:51:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:51:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:51:07 --> Controller Class Initialized
INFO - 2025-06-25 09:51:07 --> Helper loaded: form_helper
INFO - 2025-06-25 09:51:07 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:51:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:51:07 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:07 --> Config Class Initialized
INFO - 2025-06-25 09:51:07 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:51:07 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:51:07 --> Utf8 Class Initialized
INFO - 2025-06-25 09:51:07 --> URI Class Initialized
INFO - 2025-06-25 09:51:07 --> Router Class Initialized
INFO - 2025-06-25 09:51:07 --> Output Class Initialized
INFO - 2025-06-25 09:51:07 --> Security Class Initialized
DEBUG - 2025-06-25 09:51:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:51:07 --> Input Class Initialized
INFO - 2025-06-25 09:51:07 --> Language Class Initialized
INFO - 2025-06-25 09:51:07 --> Loader Class Initialized
INFO - 2025-06-25 09:51:07 --> Helper loaded: url_helper
INFO - 2025-06-25 09:51:07 --> Helper loaded: file_helper
INFO - 2025-06-25 09:51:07 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:07 --> Config Class Initialized
INFO - 2025-06-25 09:51:07 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:51:07 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:51:07 --> Utf8 Class Initialized
INFO - 2025-06-25 09:51:07 --> URI Class Initialized
INFO - 2025-06-25 09:51:07 --> Router Class Initialized
INFO - 2025-06-25 09:51:07 --> Output Class Initialized
INFO - 2025-06-25 09:51:07 --> Security Class Initialized
DEBUG - 2025-06-25 09:51:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:51:07 --> Input Class Initialized
INFO - 2025-06-25 09:51:07 --> Language Class Initialized
INFO - 2025-06-25 09:51:07 --> Loader Class Initialized
INFO - 2025-06-25 09:51:07 --> Helper loaded: url_helper
INFO - 2025-06-25 09:51:07 --> Helper loaded: file_helper
INFO - 2025-06-25 09:51:07 --> Email Class Initialized
INFO - 2025-06-25 09:51:07 --> Database Driver Class Initialized
DEBUG - 2025-06-25 09:51:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:51:07 --> Model "Crud" initialized
INFO - 2025-06-25 09:51:07 --> Email Class Initialized
DEBUG - 2025-06-25 09:51:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:51:07 --> Email Class Initialized
DEBUG - 2025-06-25 09:51:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:51:07 --> Final output sent to browser
DEBUG - 2025-06-25 09:51:07 --> Total execution time: 0.2405
INFO - 2025-06-25 09:51:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:51:07 --> Controller Class Initialized
INFO - 2025-06-25 09:51:07 --> Helper loaded: form_helper
INFO - 2025-06-25 09:51:07 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:51:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:51:07 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:07 --> Model "Crud" initialized
INFO - 2025-06-25 09:51:07 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-25 09:51:07 --> File loaded: /var/www/html/hris_lnd/application/views/dashboard/dashboard.php
INFO - 2025-06-25 09:51:07 --> Final output sent to browser
DEBUG - 2025-06-25 09:51:07 --> Total execution time: 0.4613
INFO - 2025-06-25 09:51:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:51:07 --> Controller Class Initialized
INFO - 2025-06-25 09:51:07 --> Helper loaded: form_helper
INFO - 2025-06-25 09:51:07 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:51:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:51:07 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:07 --> Model "Crud" initialized
INFO - 2025-06-25 09:51:07 --> Config Class Initialized
INFO - 2025-06-25 09:51:07 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:51:07 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:51:07 --> Utf8 Class Initialized
INFO - 2025-06-25 09:51:07 --> URI Class Initialized
INFO - 2025-06-25 09:51:07 --> Router Class Initialized
INFO - 2025-06-25 09:51:07 --> Output Class Initialized
INFO - 2025-06-25 09:51:07 --> Security Class Initialized
DEBUG - 2025-06-25 09:51:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:51:07 --> Input Class Initialized
INFO - 2025-06-25 09:51:07 --> Language Class Initialized
INFO - 2025-06-25 09:51:07 --> Loader Class Initialized
INFO - 2025-06-25 09:51:07 --> Helper loaded: url_helper
INFO - 2025-06-25 09:51:07 --> Helper loaded: file_helper
INFO - 2025-06-25 09:51:07 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:07 --> Email Class Initialized
DEBUG - 2025-06-25 09:51:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:51:07 --> Final output sent to browser
DEBUG - 2025-06-25 09:51:07 --> Total execution time: 0.4844
INFO - 2025-06-25 09:51:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:51:07 --> Controller Class Initialized
INFO - 2025-06-25 09:51:07 --> Helper loaded: form_helper
INFO - 2025-06-25 09:51:07 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:51:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:51:07 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:07 --> Model "Crud" initialized
INFO - 2025-06-25 09:51:07 --> Final output sent to browser
DEBUG - 2025-06-25 09:51:07 --> Total execution time: 0.5198
INFO - 2025-06-25 09:51:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:51:07 --> Controller Class Initialized
INFO - 2025-06-25 09:51:07 --> Helper loaded: form_helper
INFO - 2025-06-25 09:51:07 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:51:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:51:07 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:07 --> Model "Crud" initialized
INFO - 2025-06-25 09:51:08 --> Config Class Initialized
INFO - 2025-06-25 09:51:08 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:51:08 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:51:08 --> Utf8 Class Initialized
INFO - 2025-06-25 09:51:08 --> URI Class Initialized
INFO - 2025-06-25 09:51:08 --> Router Class Initialized
INFO - 2025-06-25 09:51:08 --> Output Class Initialized
INFO - 2025-06-25 09:51:08 --> Security Class Initialized
DEBUG - 2025-06-25 09:51:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:51:08 --> Input Class Initialized
INFO - 2025-06-25 09:51:08 --> Language Class Initialized
INFO - 2025-06-25 09:51:08 --> Loader Class Initialized
INFO - 2025-06-25 09:51:08 --> Helper loaded: url_helper
INFO - 2025-06-25 09:51:08 --> Helper loaded: file_helper
INFO - 2025-06-25 09:51:08 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:08 --> Email Class Initialized
DEBUG - 2025-06-25 09:51:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:51:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:51:08 --> Controller Class Initialized
INFO - 2025-06-25 09:51:08 --> Helper loaded: form_helper
INFO - 2025-06-25 09:51:08 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:51:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:51:08 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:08 --> Model "Crud" initialized
INFO - 2025-06-25 09:51:08 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-25 09:51:08 --> File loaded: /var/www/html/hris_lnd/application/views/dashboard/dashboard.php
INFO - 2025-06-25 09:51:08 --> Final output sent to browser
DEBUG - 2025-06-25 09:51:08 --> Total execution time: 0.1478
INFO - 2025-06-25 09:51:08 --> Config Class Initialized
INFO - 2025-06-25 09:51:08 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:51:08 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:51:08 --> Utf8 Class Initialized
INFO - 2025-06-25 09:51:08 --> URI Class Initialized
INFO - 2025-06-25 09:51:08 --> Router Class Initialized
INFO - 2025-06-25 09:51:08 --> Output Class Initialized
INFO - 2025-06-25 09:51:08 --> Security Class Initialized
DEBUG - 2025-06-25 09:51:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:51:08 --> Input Class Initialized
INFO - 2025-06-25 09:51:08 --> Language Class Initialized
INFO - 2025-06-25 09:51:08 --> Loader Class Initialized
INFO - 2025-06-25 09:51:08 --> Helper loaded: url_helper
INFO - 2025-06-25 09:51:08 --> Helper loaded: file_helper
INFO - 2025-06-25 09:51:08 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:08 --> Email Class Initialized
DEBUG - 2025-06-25 09:51:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:51:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:51:08 --> Controller Class Initialized
INFO - 2025-06-25 09:51:08 --> Helper loaded: form_helper
INFO - 2025-06-25 09:51:08 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:51:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:51:08 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:08 --> Config Class Initialized
INFO - 2025-06-25 09:51:08 --> Model "Crud" initialized
INFO - 2025-06-25 09:51:08 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:51:08 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:51:08 --> Utf8 Class Initialized
INFO - 2025-06-25 09:51:08 --> URI Class Initialized
INFO - 2025-06-25 09:51:08 --> Router Class Initialized
INFO - 2025-06-25 09:51:08 --> Output Class Initialized
INFO - 2025-06-25 09:51:08 --> Security Class Initialized
DEBUG - 2025-06-25 09:51:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:51:08 --> Input Class Initialized
INFO - 2025-06-25 09:51:08 --> Language Class Initialized
INFO - 2025-06-25 09:51:08 --> Loader Class Initialized
INFO - 2025-06-25 09:51:08 --> Helper loaded: url_helper
INFO - 2025-06-25 09:51:08 --> Helper loaded: file_helper
INFO - 2025-06-25 09:51:08 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:08 --> Config Class Initialized
INFO - 2025-06-25 09:51:08 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:51:08 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:51:08 --> Utf8 Class Initialized
INFO - 2025-06-25 09:51:08 --> URI Class Initialized
INFO - 2025-06-25 09:51:08 --> Router Class Initialized
INFO - 2025-06-25 09:51:08 --> Output Class Initialized
INFO - 2025-06-25 09:51:08 --> Security Class Initialized
DEBUG - 2025-06-25 09:51:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:51:08 --> Input Class Initialized
INFO - 2025-06-25 09:51:08 --> Language Class Initialized
INFO - 2025-06-25 09:51:08 --> Email Class Initialized
INFO - 2025-06-25 09:51:08 --> Loader Class Initialized
INFO - 2025-06-25 09:51:08 --> Helper loaded: url_helper
DEBUG - 2025-06-25 09:51:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:51:08 --> Helper loaded: file_helper
INFO - 2025-06-25 09:51:08 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:08 --> Email Class Initialized
DEBUG - 2025-06-25 09:51:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:51:08 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-25 09:51:08 --> File loaded: /var/www/html/hris_lnd/application/views/dashboard/dashboard.php
INFO - 2025-06-25 09:51:08 --> Final output sent to browser
DEBUG - 2025-06-25 09:51:08 --> Total execution time: 0.1123
INFO - 2025-06-25 09:51:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:51:08 --> Controller Class Initialized
INFO - 2025-06-25 09:51:08 --> Helper loaded: form_helper
INFO - 2025-06-25 09:51:08 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:51:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:51:08 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:08 --> Model "Crud" initialized
INFO - 2025-06-25 09:51:08 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-25 09:51:08 --> File loaded: /var/www/html/hris_lnd/application/views/dashboard/dashboard.php
INFO - 2025-06-25 09:51:08 --> Final output sent to browser
DEBUG - 2025-06-25 09:51:08 --> Total execution time: 0.1741
INFO - 2025-06-25 09:51:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:51:08 --> Controller Class Initialized
INFO - 2025-06-25 09:51:08 --> Helper loaded: form_helper
INFO - 2025-06-25 09:51:08 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:51:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:51:08 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:08 --> Model "Crud" initialized
INFO - 2025-06-25 09:51:08 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-25 09:51:08 --> File loaded: /var/www/html/hris_lnd/application/views/dashboard/dashboard.php
INFO - 2025-06-25 09:51:08 --> Final output sent to browser
DEBUG - 2025-06-25 09:51:08 --> Total execution time: 0.2578
INFO - 2025-06-25 09:51:08 --> Config Class Initialized
INFO - 2025-06-25 09:51:08 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:51:08 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:51:08 --> Utf8 Class Initialized
INFO - 2025-06-25 09:51:08 --> URI Class Initialized
INFO - 2025-06-25 09:51:08 --> Router Class Initialized
INFO - 2025-06-25 09:51:08 --> Output Class Initialized
INFO - 2025-06-25 09:51:08 --> Security Class Initialized
DEBUG - 2025-06-25 09:51:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:51:08 --> Input Class Initialized
INFO - 2025-06-25 09:51:08 --> Language Class Initialized
INFO - 2025-06-25 09:51:08 --> Loader Class Initialized
INFO - 2025-06-25 09:51:08 --> Helper loaded: url_helper
INFO - 2025-06-25 09:51:08 --> Helper loaded: file_helper
INFO - 2025-06-25 09:51:08 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:08 --> Email Class Initialized
DEBUG - 2025-06-25 09:51:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:51:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:51:08 --> Controller Class Initialized
INFO - 2025-06-25 09:51:08 --> Helper loaded: form_helper
INFO - 2025-06-25 09:51:08 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:51:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:51:08 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:08 --> Model "Crud" initialized
INFO - 2025-06-25 09:51:10 --> Config Class Initialized
INFO - 2025-06-25 09:51:10 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:51:10 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:51:10 --> Utf8 Class Initialized
INFO - 2025-06-25 09:51:10 --> URI Class Initialized
INFO - 2025-06-25 09:51:10 --> Router Class Initialized
INFO - 2025-06-25 09:51:10 --> Output Class Initialized
INFO - 2025-06-25 09:51:10 --> Security Class Initialized
DEBUG - 2025-06-25 09:51:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:51:10 --> Input Class Initialized
INFO - 2025-06-25 09:51:10 --> Language Class Initialized
INFO - 2025-06-25 09:51:10 --> Loader Class Initialized
INFO - 2025-06-25 09:51:10 --> Helper loaded: url_helper
INFO - 2025-06-25 09:51:10 --> Helper loaded: file_helper
INFO - 2025-06-25 09:51:10 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:10 --> Email Class Initialized
DEBUG - 2025-06-25 09:51:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:51:10 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:51:10 --> Controller Class Initialized
INFO - 2025-06-25 09:51:10 --> Helper loaded: form_helper
INFO - 2025-06-25 09:51:10 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:51:10 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:51:10 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:10 --> Config Class Initialized
INFO - 2025-06-25 09:51:10 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:51:10 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:51:10 --> Utf8 Class Initialized
INFO - 2025-06-25 09:51:10 --> Model "Crud" initialized
INFO - 2025-06-25 09:51:10 --> URI Class Initialized
INFO - 2025-06-25 09:51:10 --> Router Class Initialized
INFO - 2025-06-25 09:51:10 --> Output Class Initialized
INFO - 2025-06-25 09:51:10 --> Security Class Initialized
DEBUG - 2025-06-25 09:51:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:51:10 --> Input Class Initialized
INFO - 2025-06-25 09:51:10 --> Language Class Initialized
INFO - 2025-06-25 09:51:10 --> Loader Class Initialized
INFO - 2025-06-25 09:51:10 --> Helper loaded: url_helper
INFO - 2025-06-25 09:51:10 --> Helper loaded: file_helper
INFO - 2025-06-25 09:51:10 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:10 --> Email Class Initialized
DEBUG - 2025-06-25 09:51:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:51:10 --> Config Class Initialized
INFO - 2025-06-25 09:51:10 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:51:10 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:51:10 --> Utf8 Class Initialized
INFO - 2025-06-25 09:51:10 --> URI Class Initialized
INFO - 2025-06-25 09:51:10 --> Router Class Initialized
INFO - 2025-06-25 09:51:10 --> Output Class Initialized
INFO - 2025-06-25 09:51:10 --> Security Class Initialized
DEBUG - 2025-06-25 09:51:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:51:10 --> Input Class Initialized
INFO - 2025-06-25 09:51:10 --> Language Class Initialized
INFO - 2025-06-25 09:51:10 --> Loader Class Initialized
INFO - 2025-06-25 09:51:10 --> Helper loaded: url_helper
INFO - 2025-06-25 09:51:10 --> Helper loaded: file_helper
INFO - 2025-06-25 09:51:10 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:10 --> Email Class Initialized
DEBUG - 2025-06-25 09:51:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:51:10 --> Final output sent to browser
DEBUG - 2025-06-25 09:51:10 --> Total execution time: 0.0688
INFO - 2025-06-25 09:51:10 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:51:10 --> Controller Class Initialized
INFO - 2025-06-25 09:51:10 --> Helper loaded: form_helper
INFO - 2025-06-25 09:51:10 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:51:10 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:51:10 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:10 --> Model "Crud" initialized
INFO - 2025-06-25 09:51:10 --> Final output sent to browser
DEBUG - 2025-06-25 09:51:10 --> Total execution time: 0.0605
INFO - 2025-06-25 09:51:11 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:51:11 --> Controller Class Initialized
INFO - 2025-06-25 09:51:11 --> Helper loaded: form_helper
INFO - 2025-06-25 09:51:11 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:51:11 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:51:11 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:11 --> Model "Crud" initialized
INFO - 2025-06-25 09:51:11 --> Config Class Initialized
INFO - 2025-06-25 09:51:11 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:51:11 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:51:11 --> Utf8 Class Initialized
INFO - 2025-06-25 09:51:11 --> URI Class Initialized
INFO - 2025-06-25 09:51:11 --> Router Class Initialized
INFO - 2025-06-25 09:51:11 --> Output Class Initialized
INFO - 2025-06-25 09:51:11 --> Security Class Initialized
DEBUG - 2025-06-25 09:51:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:51:11 --> Input Class Initialized
INFO - 2025-06-25 09:51:11 --> Language Class Initialized
INFO - 2025-06-25 09:51:11 --> Loader Class Initialized
INFO - 2025-06-25 09:51:11 --> Helper loaded: url_helper
INFO - 2025-06-25 09:51:11 --> Helper loaded: file_helper
INFO - 2025-06-25 09:51:11 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:11 --> Email Class Initialized
DEBUG - 2025-06-25 09:51:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:51:11 --> Final output sent to browser
DEBUG - 2025-06-25 09:51:11 --> Total execution time: 0.0554
INFO - 2025-06-25 09:51:11 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:51:11 --> Controller Class Initialized
INFO - 2025-06-25 09:51:11 --> Helper loaded: form_helper
INFO - 2025-06-25 09:51:11 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:51:11 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:51:11 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:11 --> Model "Crud" initialized
INFO - 2025-06-25 09:51:11 --> Final output sent to browser
DEBUG - 2025-06-25 09:51:11 --> Total execution time: 0.0146
INFO - 2025-06-25 09:51:38 --> Config Class Initialized
INFO - 2025-06-25 09:51:38 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:51:38 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:51:38 --> Utf8 Class Initialized
INFO - 2025-06-25 09:51:38 --> Config Class Initialized
INFO - 2025-06-25 09:51:38 --> Hooks Class Initialized
INFO - 2025-06-25 09:51:38 --> URI Class Initialized
DEBUG - 2025-06-25 09:51:38 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:51:38 --> Utf8 Class Initialized
INFO - 2025-06-25 09:51:38 --> Router Class Initialized
INFO - 2025-06-25 09:51:38 --> Output Class Initialized
INFO - 2025-06-25 09:51:38 --> URI Class Initialized
INFO - 2025-06-25 09:51:38 --> Security Class Initialized
INFO - 2025-06-25 09:51:38 --> Router Class Initialized
DEBUG - 2025-06-25 09:51:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:51:38 --> Output Class Initialized
INFO - 2025-06-25 09:51:38 --> Input Class Initialized
INFO - 2025-06-25 09:51:38 --> Security Class Initialized
INFO - 2025-06-25 09:51:38 --> Language Class Initialized
DEBUG - 2025-06-25 09:51:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:51:38 --> Input Class Initialized
INFO - 2025-06-25 09:51:38 --> Language Class Initialized
INFO - 2025-06-25 09:51:38 --> Loader Class Initialized
INFO - 2025-06-25 09:51:38 --> Loader Class Initialized
INFO - 2025-06-25 09:51:38 --> Helper loaded: url_helper
INFO - 2025-06-25 09:51:38 --> Helper loaded: file_helper
INFO - 2025-06-25 09:51:38 --> Helper loaded: url_helper
INFO - 2025-06-25 09:51:38 --> Helper loaded: file_helper
INFO - 2025-06-25 09:51:38 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:38 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:38 --> Email Class Initialized
INFO - 2025-06-25 09:51:38 --> Email Class Initialized
DEBUG - 2025-06-25 09:51:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-25 09:51:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:51:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:51:38 --> Controller Class Initialized
INFO - 2025-06-25 09:51:38 --> Helper loaded: form_helper
INFO - 2025-06-25 09:51:38 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:51:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:51:38 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:38 --> Model "Crud" initialized
INFO - 2025-06-25 09:51:38 --> Final output sent to browser
DEBUG - 2025-06-25 09:51:38 --> Total execution time: 0.0558
INFO - 2025-06-25 09:51:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:51:38 --> Controller Class Initialized
INFO - 2025-06-25 09:51:38 --> Helper loaded: form_helper
INFO - 2025-06-25 09:51:38 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:51:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:51:38 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:38 --> Model "Crud" initialized
INFO - 2025-06-25 09:51:38 --> Final output sent to browser
DEBUG - 2025-06-25 09:51:38 --> Total execution time: 0.0961
INFO - 2025-06-25 09:51:45 --> Config Class Initialized
INFO - 2025-06-25 09:51:45 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:51:45 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:51:45 --> Utf8 Class Initialized
INFO - 2025-06-25 09:51:45 --> URI Class Initialized
INFO - 2025-06-25 09:51:45 --> Router Class Initialized
INFO - 2025-06-25 09:51:45 --> Output Class Initialized
INFO - 2025-06-25 09:51:45 --> Security Class Initialized
DEBUG - 2025-06-25 09:51:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:51:45 --> Input Class Initialized
INFO - 2025-06-25 09:51:45 --> Language Class Initialized
INFO - 2025-06-25 09:51:45 --> Loader Class Initialized
INFO - 2025-06-25 09:51:45 --> Helper loaded: url_helper
INFO - 2025-06-25 09:51:45 --> Helper loaded: file_helper
INFO - 2025-06-25 09:51:45 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:45 --> Email Class Initialized
DEBUG - 2025-06-25 09:51:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:51:45 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:51:45 --> Controller Class Initialized
INFO - 2025-06-25 09:51:45 --> Model "CompetenceModel" initialized
INFO - 2025-06-25 09:51:45 --> Helper loaded: form_helper
INFO - 2025-06-25 09:51:45 --> Form Validation Class Initialized
INFO - 2025-06-25 09:51:45 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:45 --> Model "Crud" initialized
DEBUG - 2025-06-25 09:51:45 --> Response class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 09:51:45 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 09:51:45 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:51:45 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-25 09:51:45 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/competence.php
INFO - 2025-06-25 09:51:45 --> Final output sent to browser
DEBUG - 2025-06-25 09:51:45 --> Total execution time: 0.0496
INFO - 2025-06-25 09:51:46 --> Config Class Initialized
INFO - 2025-06-25 09:51:46 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:51:46 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:51:46 --> Utf8 Class Initialized
INFO - 2025-06-25 09:51:46 --> URI Class Initialized
INFO - 2025-06-25 09:51:46 --> Router Class Initialized
INFO - 2025-06-25 09:51:46 --> Output Class Initialized
INFO - 2025-06-25 09:51:46 --> Security Class Initialized
DEBUG - 2025-06-25 09:51:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:51:46 --> Input Class Initialized
INFO - 2025-06-25 09:51:46 --> Language Class Initialized
INFO - 2025-06-25 09:51:46 --> Loader Class Initialized
INFO - 2025-06-25 09:51:46 --> Helper loaded: url_helper
INFO - 2025-06-25 09:51:46 --> Helper loaded: file_helper
INFO - 2025-06-25 09:51:46 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:46 --> Email Class Initialized
DEBUG - 2025-06-25 09:51:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:51:46 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:51:46 --> Controller Class Initialized
INFO - 2025-06-25 09:51:46 --> Helper loaded: form_helper
INFO - 2025-06-25 09:51:46 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:51:46 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:51:46 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:46 --> Model "Crud" initialized
INFO - 2025-06-25 09:51:46 --> Final output sent to browser
DEBUG - 2025-06-25 09:51:46 --> Total execution time: 0.0237
INFO - 2025-06-25 09:51:46 --> Config Class Initialized
INFO - 2025-06-25 09:51:46 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:51:46 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:51:46 --> Utf8 Class Initialized
INFO - 2025-06-25 09:51:46 --> URI Class Initialized
INFO - 2025-06-25 09:51:46 --> Router Class Initialized
INFO - 2025-06-25 09:51:46 --> Output Class Initialized
INFO - 2025-06-25 09:51:46 --> Security Class Initialized
DEBUG - 2025-06-25 09:51:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:51:46 --> Input Class Initialized
INFO - 2025-06-25 09:51:46 --> Language Class Initialized
INFO - 2025-06-25 09:51:46 --> Loader Class Initialized
INFO - 2025-06-25 09:51:46 --> Helper loaded: url_helper
INFO - 2025-06-25 09:51:46 --> Helper loaded: file_helper
INFO - 2025-06-25 09:51:46 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:46 --> Email Class Initialized
DEBUG - 2025-06-25 09:51:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:51:46 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:51:46 --> Controller Class Initialized
INFO - 2025-06-25 09:51:46 --> Model "CompetenceModel" initialized
INFO - 2025-06-25 09:51:46 --> Helper loaded: form_helper
INFO - 2025-06-25 09:51:46 --> Form Validation Class Initialized
INFO - 2025-06-25 09:51:46 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:46 --> Model "Crud" initialized
DEBUG - 2025-06-25 09:51:46 --> Response class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 09:51:46 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 09:51:46 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:51:46 --> Final output sent to browser
DEBUG - 2025-06-25 09:51:46 --> Total execution time: 0.0200
INFO - 2025-06-25 09:51:47 --> Config Class Initialized
INFO - 2025-06-25 09:51:47 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:51:47 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:51:47 --> Utf8 Class Initialized
INFO - 2025-06-25 09:51:47 --> URI Class Initialized
INFO - 2025-06-25 09:51:47 --> Router Class Initialized
INFO - 2025-06-25 09:51:47 --> Output Class Initialized
INFO - 2025-06-25 09:51:47 --> Security Class Initialized
DEBUG - 2025-06-25 09:51:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:51:47 --> Input Class Initialized
INFO - 2025-06-25 09:51:47 --> Language Class Initialized
INFO - 2025-06-25 09:51:47 --> Loader Class Initialized
INFO - 2025-06-25 09:51:47 --> Helper loaded: url_helper
INFO - 2025-06-25 09:51:47 --> Helper loaded: file_helper
INFO - 2025-06-25 09:51:47 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:47 --> Config Class Initialized
INFO - 2025-06-25 09:51:47 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:51:47 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:51:47 --> Utf8 Class Initialized
INFO - 2025-06-25 09:51:47 --> URI Class Initialized
INFO - 2025-06-25 09:51:47 --> Router Class Initialized
INFO - 2025-06-25 09:51:47 --> Output Class Initialized
INFO - 2025-06-25 09:51:47 --> Security Class Initialized
DEBUG - 2025-06-25 09:51:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:51:47 --> Input Class Initialized
INFO - 2025-06-25 09:51:47 --> Language Class Initialized
INFO - 2025-06-25 09:51:47 --> Loader Class Initialized
INFO - 2025-06-25 09:51:47 --> Helper loaded: url_helper
INFO - 2025-06-25 09:51:47 --> Helper loaded: file_helper
INFO - 2025-06-25 09:51:47 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:47 --> Email Class Initialized
DEBUG - 2025-06-25 09:51:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:51:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:51:47 --> Controller Class Initialized
INFO - 2025-06-25 09:51:47 --> Helper loaded: form_helper
INFO - 2025-06-25 09:51:47 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:51:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:51:47 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:47 --> Email Class Initialized
DEBUG - 2025-06-25 09:51:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:51:47 --> Model "Crud" initialized
INFO - 2025-06-25 09:51:47 --> Final output sent to browser
DEBUG - 2025-06-25 09:51:47 --> Total execution time: 0.0241
INFO - 2025-06-25 09:51:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:51:47 --> Controller Class Initialized
INFO - 2025-06-25 09:51:47 --> Helper loaded: form_helper
INFO - 2025-06-25 09:51:47 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:51:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:51:47 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:47 --> Model "Crud" initialized
INFO - 2025-06-25 09:51:47 --> Final output sent to browser
DEBUG - 2025-06-25 09:51:47 --> Total execution time: 0.0419
INFO - 2025-06-25 09:51:53 --> Config Class Initialized
INFO - 2025-06-25 09:51:53 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:51:53 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:51:53 --> Utf8 Class Initialized
INFO - 2025-06-25 09:51:53 --> URI Class Initialized
INFO - 2025-06-25 09:51:53 --> Router Class Initialized
INFO - 2025-06-25 09:51:53 --> Output Class Initialized
INFO - 2025-06-25 09:51:53 --> Security Class Initialized
DEBUG - 2025-06-25 09:51:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:51:53 --> Input Class Initialized
INFO - 2025-06-25 09:51:53 --> Language Class Initialized
INFO - 2025-06-25 09:51:53 --> Loader Class Initialized
INFO - 2025-06-25 09:51:53 --> Helper loaded: url_helper
INFO - 2025-06-25 09:51:53 --> Helper loaded: file_helper
INFO - 2025-06-25 09:51:53 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:53 --> Email Class Initialized
DEBUG - 2025-06-25 09:51:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:51:53 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:51:53 --> Controller Class Initialized
INFO - 2025-06-25 09:51:53 --> Model "CompetenceModel" initialized
INFO - 2025-06-25 09:51:53 --> Helper loaded: form_helper
INFO - 2025-06-25 09:51:53 --> Form Validation Class Initialized
INFO - 2025-06-25 09:51:53 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:53 --> Model "Crud" initialized
DEBUG - 2025-06-25 09:51:53 --> Response class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 09:51:53 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 09:51:53 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:51:53 --> Final output sent to browser
DEBUG - 2025-06-25 09:51:53 --> Total execution time: 0.1137
INFO - 2025-06-25 09:51:53 --> Config Class Initialized
INFO - 2025-06-25 09:51:53 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:51:53 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:51:53 --> Utf8 Class Initialized
INFO - 2025-06-25 09:51:53 --> URI Class Initialized
INFO - 2025-06-25 09:51:53 --> Router Class Initialized
INFO - 2025-06-25 09:51:53 --> Output Class Initialized
INFO - 2025-06-25 09:51:53 --> Security Class Initialized
DEBUG - 2025-06-25 09:51:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:51:53 --> Input Class Initialized
INFO - 2025-06-25 09:51:53 --> Language Class Initialized
INFO - 2025-06-25 09:51:53 --> Loader Class Initialized
INFO - 2025-06-25 09:51:53 --> Helper loaded: url_helper
INFO - 2025-06-25 09:51:53 --> Helper loaded: file_helper
INFO - 2025-06-25 09:51:53 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:53 --> Email Class Initialized
DEBUG - 2025-06-25 09:51:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:51:53 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:51:53 --> Controller Class Initialized
INFO - 2025-06-25 09:51:53 --> Model "CompetenceModel" initialized
INFO - 2025-06-25 09:51:53 --> Helper loaded: form_helper
INFO - 2025-06-25 09:51:53 --> Form Validation Class Initialized
INFO - 2025-06-25 09:51:53 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:53 --> Model "Crud" initialized
DEBUG - 2025-06-25 09:51:53 --> Response class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 09:51:53 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 09:51:53 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:51:53 --> Final output sent to browser
DEBUG - 2025-06-25 09:51:53 --> Total execution time: 0.0160
INFO - 2025-06-25 09:51:56 --> Config Class Initialized
INFO - 2025-06-25 09:51:56 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:51:56 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:51:56 --> Utf8 Class Initialized
INFO - 2025-06-25 09:51:56 --> URI Class Initialized
INFO - 2025-06-25 09:51:56 --> Router Class Initialized
INFO - 2025-06-25 09:51:56 --> Output Class Initialized
INFO - 2025-06-25 09:51:56 --> Security Class Initialized
DEBUG - 2025-06-25 09:51:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:51:56 --> Input Class Initialized
INFO - 2025-06-25 09:51:56 --> Language Class Initialized
INFO - 2025-06-25 09:51:56 --> Loader Class Initialized
INFO - 2025-06-25 09:51:56 --> Helper loaded: url_helper
INFO - 2025-06-25 09:51:56 --> Helper loaded: file_helper
INFO - 2025-06-25 09:51:56 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:56 --> Config Class Initialized
INFO - 2025-06-25 09:51:56 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:51:56 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:51:56 --> Utf8 Class Initialized
INFO - 2025-06-25 09:51:56 --> URI Class Initialized
INFO - 2025-06-25 09:51:56 --> Router Class Initialized
INFO - 2025-06-25 09:51:56 --> Output Class Initialized
INFO - 2025-06-25 09:51:56 --> Security Class Initialized
DEBUG - 2025-06-25 09:51:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:51:56 --> Input Class Initialized
INFO - 2025-06-25 09:51:56 --> Language Class Initialized
INFO - 2025-06-25 09:51:56 --> Loader Class Initialized
INFO - 2025-06-25 09:51:56 --> Helper loaded: url_helper
INFO - 2025-06-25 09:51:56 --> Helper loaded: file_helper
INFO - 2025-06-25 09:51:56 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:56 --> Email Class Initialized
DEBUG - 2025-06-25 09:51:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:51:56 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:51:56 --> Controller Class Initialized
INFO - 2025-06-25 09:51:56 --> Helper loaded: form_helper
INFO - 2025-06-25 09:51:56 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:51:56 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:51:56 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:56 --> Email Class Initialized
DEBUG - 2025-06-25 09:51:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:51:56 --> Model "Crud" initialized
INFO - 2025-06-25 09:51:57 --> Final output sent to browser
DEBUG - 2025-06-25 09:51:57 --> Total execution time: 0.0206
INFO - 2025-06-25 09:51:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:51:57 --> Controller Class Initialized
INFO - 2025-06-25 09:51:57 --> Helper loaded: form_helper
INFO - 2025-06-25 09:51:57 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:51:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:51:57 --> Database Driver Class Initialized
INFO - 2025-06-25 09:51:57 --> Model "Crud" initialized
INFO - 2025-06-25 09:51:57 --> Final output sent to browser
DEBUG - 2025-06-25 09:51:57 --> Total execution time: 0.0322
INFO - 2025-06-25 09:52:06 --> Config Class Initialized
INFO - 2025-06-25 09:52:06 --> Hooks Class Initialized
INFO - 2025-06-25 09:52:06 --> Config Class Initialized
INFO - 2025-06-25 09:52:06 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:52:06 --> UTF-8 Support Enabled
DEBUG - 2025-06-25 09:52:06 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:52:06 --> Utf8 Class Initialized
INFO - 2025-06-25 09:52:06 --> Utf8 Class Initialized
INFO - 2025-06-25 09:52:06 --> URI Class Initialized
INFO - 2025-06-25 09:52:06 --> Router Class Initialized
INFO - 2025-06-25 09:52:06 --> Output Class Initialized
INFO - 2025-06-25 09:52:06 --> Security Class Initialized
DEBUG - 2025-06-25 09:52:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:52:06 --> Input Class Initialized
INFO - 2025-06-25 09:52:06 --> Language Class Initialized
INFO - 2025-06-25 09:52:06 --> URI Class Initialized
INFO - 2025-06-25 09:52:06 --> Router Class Initialized
INFO - 2025-06-25 09:52:06 --> Output Class Initialized
INFO - 2025-06-25 09:52:06 --> Security Class Initialized
DEBUG - 2025-06-25 09:52:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:52:06 --> Input Class Initialized
INFO - 2025-06-25 09:52:06 --> Language Class Initialized
INFO - 2025-06-25 09:52:06 --> Loader Class Initialized
INFO - 2025-06-25 09:52:06 --> Helper loaded: url_helper
INFO - 2025-06-25 09:52:06 --> Helper loaded: file_helper
INFO - 2025-06-25 09:52:06 --> Loader Class Initialized
INFO - 2025-06-25 09:52:06 --> Database Driver Class Initialized
INFO - 2025-06-25 09:52:06 --> Helper loaded: url_helper
INFO - 2025-06-25 09:52:06 --> Helper loaded: file_helper
INFO - 2025-06-25 09:52:06 --> Database Driver Class Initialized
INFO - 2025-06-25 09:52:06 --> Email Class Initialized
DEBUG - 2025-06-25 09:52:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:52:06 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:52:06 --> Controller Class Initialized
INFO - 2025-06-25 09:52:06 --> Email Class Initialized
INFO - 2025-06-25 09:52:06 --> Helper loaded: form_helper
INFO - 2025-06-25 09:52:06 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:52:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 09:52:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:52:06 --> Database Driver Class Initialized
INFO - 2025-06-25 09:52:06 --> Model "Crud" initialized
INFO - 2025-06-25 09:52:06 --> Final output sent to browser
DEBUG - 2025-06-25 09:52:06 --> Total execution time: 0.0736
INFO - 2025-06-25 09:52:06 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:52:06 --> Controller Class Initialized
INFO - 2025-06-25 09:52:06 --> Helper loaded: form_helper
INFO - 2025-06-25 09:52:06 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:52:06 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:52:06 --> Database Driver Class Initialized
INFO - 2025-06-25 09:52:06 --> Model "Crud" initialized
INFO - 2025-06-25 09:52:06 --> Final output sent to browser
DEBUG - 2025-06-25 09:52:06 --> Total execution time: 0.1637
INFO - 2025-06-25 09:52:17 --> Config Class Initialized
INFO - 2025-06-25 09:52:17 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:52:17 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:52:17 --> Utf8 Class Initialized
INFO - 2025-06-25 09:52:17 --> URI Class Initialized
INFO - 2025-06-25 09:52:17 --> Router Class Initialized
INFO - 2025-06-25 09:52:17 --> Output Class Initialized
INFO - 2025-06-25 09:52:17 --> Security Class Initialized
DEBUG - 2025-06-25 09:52:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:52:17 --> Input Class Initialized
INFO - 2025-06-25 09:52:17 --> Language Class Initialized
INFO - 2025-06-25 09:52:17 --> Loader Class Initialized
INFO - 2025-06-25 09:52:17 --> Helper loaded: url_helper
INFO - 2025-06-25 09:52:17 --> Helper loaded: file_helper
INFO - 2025-06-25 09:52:17 --> Database Driver Class Initialized
INFO - 2025-06-25 09:52:17 --> Config Class Initialized
INFO - 2025-06-25 09:52:17 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:52:17 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:52:17 --> Utf8 Class Initialized
INFO - 2025-06-25 09:52:17 --> URI Class Initialized
INFO - 2025-06-25 09:52:17 --> Router Class Initialized
INFO - 2025-06-25 09:52:17 --> Output Class Initialized
INFO - 2025-06-25 09:52:17 --> Security Class Initialized
DEBUG - 2025-06-25 09:52:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:52:17 --> Input Class Initialized
INFO - 2025-06-25 09:52:17 --> Language Class Initialized
INFO - 2025-06-25 09:52:17 --> Loader Class Initialized
INFO - 2025-06-25 09:52:17 --> Helper loaded: url_helper
INFO - 2025-06-25 09:52:17 --> Helper loaded: file_helper
INFO - 2025-06-25 09:52:17 --> Database Driver Class Initialized
INFO - 2025-06-25 09:52:17 --> Email Class Initialized
INFO - 2025-06-25 09:52:17 --> Email Class Initialized
DEBUG - 2025-06-25 09:52:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-25 09:52:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:52:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:52:17 --> Controller Class Initialized
INFO - 2025-06-25 09:52:17 --> Helper loaded: form_helper
INFO - 2025-06-25 09:52:17 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:52:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:52:17 --> Database Driver Class Initialized
INFO - 2025-06-25 09:52:17 --> Model "Crud" initialized
INFO - 2025-06-25 09:52:17 --> Final output sent to browser
DEBUG - 2025-06-25 09:52:17 --> Total execution time: 0.0240
INFO - 2025-06-25 09:52:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:52:17 --> Controller Class Initialized
INFO - 2025-06-25 09:52:17 --> Helper loaded: form_helper
INFO - 2025-06-25 09:52:17 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:52:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:52:17 --> Database Driver Class Initialized
INFO - 2025-06-25 09:52:17 --> Model "Crud" initialized
INFO - 2025-06-25 09:52:17 --> Final output sent to browser
DEBUG - 2025-06-25 09:52:17 --> Total execution time: 0.0430
INFO - 2025-06-25 09:52:27 --> Config Class Initialized
INFO - 2025-06-25 09:52:27 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:52:27 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:52:27 --> Utf8 Class Initialized
INFO - 2025-06-25 09:52:27 --> URI Class Initialized
INFO - 2025-06-25 09:52:27 --> Router Class Initialized
INFO - 2025-06-25 09:52:27 --> Output Class Initialized
INFO - 2025-06-25 09:52:27 --> Security Class Initialized
DEBUG - 2025-06-25 09:52:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:52:27 --> Input Class Initialized
INFO - 2025-06-25 09:52:27 --> Language Class Initialized
INFO - 2025-06-25 09:52:27 --> Loader Class Initialized
INFO - 2025-06-25 09:52:27 --> Helper loaded: url_helper
INFO - 2025-06-25 09:52:27 --> Helper loaded: file_helper
INFO - 2025-06-25 09:52:27 --> Database Driver Class Initialized
INFO - 2025-06-25 09:52:27 --> Config Class Initialized
INFO - 2025-06-25 09:52:27 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:52:27 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:52:27 --> Utf8 Class Initialized
INFO - 2025-06-25 09:52:27 --> URI Class Initialized
INFO - 2025-06-25 09:52:27 --> Router Class Initialized
INFO - 2025-06-25 09:52:27 --> Output Class Initialized
INFO - 2025-06-25 09:52:27 --> Security Class Initialized
DEBUG - 2025-06-25 09:52:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:52:27 --> Input Class Initialized
INFO - 2025-06-25 09:52:27 --> Language Class Initialized
INFO - 2025-06-25 09:52:27 --> Loader Class Initialized
INFO - 2025-06-25 09:52:27 --> Helper loaded: url_helper
INFO - 2025-06-25 09:52:27 --> Helper loaded: file_helper
INFO - 2025-06-25 09:52:27 --> Database Driver Class Initialized
INFO - 2025-06-25 09:52:27 --> Email Class Initialized
DEBUG - 2025-06-25 09:52:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:52:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:52:27 --> Controller Class Initialized
INFO - 2025-06-25 09:52:27 --> Helper loaded: form_helper
INFO - 2025-06-25 09:52:27 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:52:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:52:27 --> Database Driver Class Initialized
INFO - 2025-06-25 09:52:27 --> Email Class Initialized
DEBUG - 2025-06-25 09:52:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:52:27 --> Model "Crud" initialized
INFO - 2025-06-25 09:52:27 --> Final output sent to browser
DEBUG - 2025-06-25 09:52:27 --> Total execution time: 0.0230
INFO - 2025-06-25 09:52:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:52:27 --> Controller Class Initialized
INFO - 2025-06-25 09:52:27 --> Helper loaded: form_helper
INFO - 2025-06-25 09:52:27 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:52:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:52:27 --> Database Driver Class Initialized
INFO - 2025-06-25 09:52:27 --> Model "Crud" initialized
INFO - 2025-06-25 09:52:27 --> Final output sent to browser
DEBUG - 2025-06-25 09:52:27 --> Total execution time: 0.0432
INFO - 2025-06-25 09:52:52 --> Config Class Initialized
INFO - 2025-06-25 09:52:52 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:52:52 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:52:52 --> Utf8 Class Initialized
INFO - 2025-06-25 09:52:52 --> URI Class Initialized
INFO - 2025-06-25 09:52:52 --> Router Class Initialized
INFO - 2025-06-25 09:52:52 --> Output Class Initialized
INFO - 2025-06-25 09:52:52 --> Security Class Initialized
DEBUG - 2025-06-25 09:52:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:52:52 --> Input Class Initialized
INFO - 2025-06-25 09:52:52 --> Language Class Initialized
INFO - 2025-06-25 09:52:52 --> Loader Class Initialized
INFO - 2025-06-25 09:52:52 --> Helper loaded: url_helper
INFO - 2025-06-25 09:52:52 --> Helper loaded: file_helper
INFO - 2025-06-25 09:52:52 --> Database Driver Class Initialized
INFO - 2025-06-25 09:52:52 --> Config Class Initialized
INFO - 2025-06-25 09:52:52 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:52:52 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:52:52 --> Utf8 Class Initialized
INFO - 2025-06-25 09:52:52 --> URI Class Initialized
INFO - 2025-06-25 09:52:52 --> Router Class Initialized
INFO - 2025-06-25 09:52:52 --> Output Class Initialized
INFO - 2025-06-25 09:52:52 --> Security Class Initialized
DEBUG - 2025-06-25 09:52:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:52:52 --> Input Class Initialized
INFO - 2025-06-25 09:52:52 --> Language Class Initialized
INFO - 2025-06-25 09:52:52 --> Loader Class Initialized
INFO - 2025-06-25 09:52:52 --> Helper loaded: url_helper
INFO - 2025-06-25 09:52:52 --> Helper loaded: file_helper
INFO - 2025-06-25 09:52:52 --> Database Driver Class Initialized
INFO - 2025-06-25 09:52:52 --> Email Class Initialized
DEBUG - 2025-06-25 09:52:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:52:52 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:52:52 --> Controller Class Initialized
INFO - 2025-06-25 09:52:52 --> Helper loaded: form_helper
INFO - 2025-06-25 09:52:52 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:52:52 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:52:52 --> Database Driver Class Initialized
INFO - 2025-06-25 09:52:52 --> Email Class Initialized
DEBUG - 2025-06-25 09:52:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:52:52 --> Model "Crud" initialized
INFO - 2025-06-25 09:52:52 --> Final output sent to browser
DEBUG - 2025-06-25 09:52:52 --> Total execution time: 0.0317
INFO - 2025-06-25 09:52:52 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:52:52 --> Controller Class Initialized
INFO - 2025-06-25 09:52:52 --> Helper loaded: form_helper
INFO - 2025-06-25 09:52:52 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:52:52 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:52:52 --> Database Driver Class Initialized
INFO - 2025-06-25 09:52:52 --> Model "Crud" initialized
INFO - 2025-06-25 09:52:52 --> Final output sent to browser
DEBUG - 2025-06-25 09:52:52 --> Total execution time: 0.0417
INFO - 2025-06-25 09:52:57 --> Config Class Initialized
INFO - 2025-06-25 09:52:57 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:52:57 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:52:57 --> Utf8 Class Initialized
INFO - 2025-06-25 09:52:57 --> URI Class Initialized
INFO - 2025-06-25 09:52:57 --> Router Class Initialized
INFO - 2025-06-25 09:52:57 --> Config Class Initialized
INFO - 2025-06-25 09:52:57 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:52:57 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:52:57 --> Output Class Initialized
INFO - 2025-06-25 09:52:57 --> Utf8 Class Initialized
INFO - 2025-06-25 09:52:57 --> Security Class Initialized
INFO - 2025-06-25 09:52:57 --> URI Class Initialized
DEBUG - 2025-06-25 09:52:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:52:57 --> Input Class Initialized
INFO - 2025-06-25 09:52:57 --> Router Class Initialized
INFO - 2025-06-25 09:52:57 --> Language Class Initialized
INFO - 2025-06-25 09:52:57 --> Output Class Initialized
INFO - 2025-06-25 09:52:57 --> Security Class Initialized
INFO - 2025-06-25 09:52:57 --> Loader Class Initialized
DEBUG - 2025-06-25 09:52:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:52:57 --> Helper loaded: url_helper
INFO - 2025-06-25 09:52:57 --> Input Class Initialized
INFO - 2025-06-25 09:52:57 --> Helper loaded: file_helper
INFO - 2025-06-25 09:52:57 --> Language Class Initialized
INFO - 2025-06-25 09:52:57 --> Database Driver Class Initialized
INFO - 2025-06-25 09:52:57 --> Loader Class Initialized
INFO - 2025-06-25 09:52:57 --> Helper loaded: url_helper
INFO - 2025-06-25 09:52:57 --> Helper loaded: file_helper
INFO - 2025-06-25 09:52:57 --> Database Driver Class Initialized
INFO - 2025-06-25 09:52:57 --> Email Class Initialized
DEBUG - 2025-06-25 09:52:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:52:57 --> Email Class Initialized
INFO - 2025-06-25 09:52:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:52:57 --> Controller Class Initialized
DEBUG - 2025-06-25 09:52:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:52:57 --> Helper loaded: form_helper
INFO - 2025-06-25 09:52:57 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:52:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:52:57 --> Database Driver Class Initialized
INFO - 2025-06-25 09:52:57 --> Model "Crud" initialized
INFO - 2025-06-25 09:52:57 --> Final output sent to browser
DEBUG - 2025-06-25 09:52:57 --> Total execution time: 0.0186
INFO - 2025-06-25 09:52:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:52:57 --> Controller Class Initialized
INFO - 2025-06-25 09:52:57 --> Helper loaded: form_helper
INFO - 2025-06-25 09:52:57 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:52:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:52:57 --> Database Driver Class Initialized
INFO - 2025-06-25 09:52:57 --> Model "Crud" initialized
INFO - 2025-06-25 09:52:57 --> Final output sent to browser
DEBUG - 2025-06-25 09:52:57 --> Total execution time: 0.0304
INFO - 2025-06-25 09:53:06 --> Config Class Initialized
INFO - 2025-06-25 09:53:06 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:53:06 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:53:06 --> Utf8 Class Initialized
INFO - 2025-06-25 09:53:06 --> URI Class Initialized
INFO - 2025-06-25 09:53:06 --> Router Class Initialized
INFO - 2025-06-25 09:53:06 --> Output Class Initialized
INFO - 2025-06-25 09:53:06 --> Security Class Initialized
DEBUG - 2025-06-25 09:53:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:53:06 --> Input Class Initialized
INFO - 2025-06-25 09:53:06 --> Language Class Initialized
INFO - 2025-06-25 09:53:06 --> Loader Class Initialized
INFO - 2025-06-25 09:53:06 --> Helper loaded: url_helper
INFO - 2025-06-25 09:53:06 --> Helper loaded: file_helper
INFO - 2025-06-25 09:53:06 --> Database Driver Class Initialized
INFO - 2025-06-25 09:53:06 --> Config Class Initialized
INFO - 2025-06-25 09:53:06 --> Hooks Class Initialized
DEBUG - 2025-06-25 09:53:06 --> UTF-8 Support Enabled
INFO - 2025-06-25 09:53:06 --> Utf8 Class Initialized
INFO - 2025-06-25 09:53:06 --> URI Class Initialized
INFO - 2025-06-25 09:53:06 --> Router Class Initialized
INFO - 2025-06-25 09:53:06 --> Output Class Initialized
INFO - 2025-06-25 09:53:06 --> Security Class Initialized
DEBUG - 2025-06-25 09:53:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 09:53:06 --> Input Class Initialized
INFO - 2025-06-25 09:53:06 --> Language Class Initialized
INFO - 2025-06-25 09:53:06 --> Loader Class Initialized
INFO - 2025-06-25 09:53:06 --> Helper loaded: url_helper
INFO - 2025-06-25 09:53:06 --> Helper loaded: file_helper
INFO - 2025-06-25 09:53:06 --> Database Driver Class Initialized
INFO - 2025-06-25 09:53:06 --> Email Class Initialized
DEBUG - 2025-06-25 09:53:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:53:06 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:53:06 --> Controller Class Initialized
INFO - 2025-06-25 09:53:06 --> Helper loaded: form_helper
INFO - 2025-06-25 09:53:06 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:53:06 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:53:06 --> Database Driver Class Initialized
INFO - 2025-06-25 09:53:06 --> Email Class Initialized
DEBUG - 2025-06-25 09:53:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 09:53:06 --> Model "Crud" initialized
INFO - 2025-06-25 09:53:06 --> Final output sent to browser
DEBUG - 2025-06-25 09:53:06 --> Total execution time: 0.0211
INFO - 2025-06-25 09:53:06 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 09:53:06 --> Controller Class Initialized
INFO - 2025-06-25 09:53:06 --> Helper loaded: form_helper
INFO - 2025-06-25 09:53:06 --> Form Validation Class Initialized
DEBUG - 2025-06-25 09:53:06 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 09:53:06 --> Database Driver Class Initialized
INFO - 2025-06-25 09:53:06 --> Model "Crud" initialized
INFO - 2025-06-25 09:53:06 --> Final output sent to browser
DEBUG - 2025-06-25 09:53:06 --> Total execution time: 0.0341
INFO - 2025-06-25 10:00:03 --> Config Class Initialized
INFO - 2025-06-25 10:00:03 --> Config Class Initialized
INFO - 2025-06-25 10:00:03 --> Hooks Class Initialized
INFO - 2025-06-25 10:00:03 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:00:03 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:00:03 --> Utf8 Class Initialized
DEBUG - 2025-06-25 10:00:03 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:00:03 --> Utf8 Class Initialized
INFO - 2025-06-25 10:00:03 --> URI Class Initialized
INFO - 2025-06-25 10:00:03 --> URI Class Initialized
INFO - 2025-06-25 10:00:03 --> Router Class Initialized
INFO - 2025-06-25 10:00:03 --> Router Class Initialized
INFO - 2025-06-25 10:00:03 --> Output Class Initialized
INFO - 2025-06-25 10:00:03 --> Output Class Initialized
INFO - 2025-06-25 10:00:03 --> Security Class Initialized
DEBUG - 2025-06-25 10:00:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:00:03 --> Input Class Initialized
INFO - 2025-06-25 10:00:03 --> Language Class Initialized
INFO - 2025-06-25 10:00:03 --> Security Class Initialized
DEBUG - 2025-06-25 10:00:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:00:03 --> Input Class Initialized
INFO - 2025-06-25 10:00:03 --> Language Class Initialized
INFO - 2025-06-25 10:00:03 --> Loader Class Initialized
INFO - 2025-06-25 10:00:03 --> Loader Class Initialized
INFO - 2025-06-25 10:00:03 --> Helper loaded: url_helper
INFO - 2025-06-25 10:00:03 --> Helper loaded: url_helper
INFO - 2025-06-25 10:00:03 --> Helper loaded: file_helper
INFO - 2025-06-25 10:00:03 --> Helper loaded: file_helper
INFO - 2025-06-25 10:00:03 --> Database Driver Class Initialized
INFO - 2025-06-25 10:00:03 --> Database Driver Class Initialized
INFO - 2025-06-25 10:00:03 --> Email Class Initialized
INFO - 2025-06-25 10:00:03 --> Email Class Initialized
DEBUG - 2025-06-25 10:00:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-25 10:00:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:00:03 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:00:03 --> Controller Class Initialized
INFO - 2025-06-25 10:00:03 --> Helper loaded: form_helper
INFO - 2025-06-25 10:00:03 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:00:03 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:00:03 --> Database Driver Class Initialized
INFO - 2025-06-25 10:00:03 --> Model "Crud" initialized
INFO - 2025-06-25 10:00:03 --> Final output sent to browser
DEBUG - 2025-06-25 10:00:03 --> Total execution time: 0.3036
INFO - 2025-06-25 10:00:03 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:00:03 --> Controller Class Initialized
INFO - 2025-06-25 10:00:03 --> Helper loaded: form_helper
INFO - 2025-06-25 10:00:03 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:00:03 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:00:03 --> Database Driver Class Initialized
INFO - 2025-06-25 10:00:03 --> Model "Crud" initialized
INFO - 2025-06-25 10:00:03 --> Final output sent to browser
DEBUG - 2025-06-25 10:00:03 --> Total execution time: 0.3889
INFO - 2025-06-25 10:00:06 --> Config Class Initialized
INFO - 2025-06-25 10:00:06 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:00:06 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:00:06 --> Utf8 Class Initialized
INFO - 2025-06-25 10:00:06 --> URI Class Initialized
INFO - 2025-06-25 10:00:06 --> Router Class Initialized
INFO - 2025-06-25 10:00:06 --> Output Class Initialized
INFO - 2025-06-25 10:00:06 --> Security Class Initialized
DEBUG - 2025-06-25 10:00:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:00:06 --> Input Class Initialized
INFO - 2025-06-25 10:00:06 --> Language Class Initialized
INFO - 2025-06-25 10:00:06 --> Loader Class Initialized
INFO - 2025-06-25 10:00:06 --> Helper loaded: url_helper
INFO - 2025-06-25 10:00:06 --> Helper loaded: file_helper
INFO - 2025-06-25 10:00:06 --> Database Driver Class Initialized
INFO - 2025-06-25 10:00:06 --> Config Class Initialized
INFO - 2025-06-25 10:00:06 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:00:06 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:00:06 --> Utf8 Class Initialized
INFO - 2025-06-25 10:00:06 --> URI Class Initialized
INFO - 2025-06-25 10:00:06 --> Router Class Initialized
INFO - 2025-06-25 10:00:06 --> Output Class Initialized
INFO - 2025-06-25 10:00:06 --> Security Class Initialized
DEBUG - 2025-06-25 10:00:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:00:06 --> Input Class Initialized
INFO - 2025-06-25 10:00:06 --> Language Class Initialized
INFO - 2025-06-25 10:00:06 --> Loader Class Initialized
INFO - 2025-06-25 10:00:06 --> Helper loaded: url_helper
INFO - 2025-06-25 10:00:06 --> Helper loaded: file_helper
INFO - 2025-06-25 10:00:06 --> Database Driver Class Initialized
INFO - 2025-06-25 10:00:06 --> Email Class Initialized
DEBUG - 2025-06-25 10:00:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:00:06 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:00:06 --> Controller Class Initialized
INFO - 2025-06-25 10:00:06 --> Helper loaded: form_helper
INFO - 2025-06-25 10:00:06 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:00:06 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:00:06 --> Database Driver Class Initialized
INFO - 2025-06-25 10:00:06 --> Email Class Initialized
DEBUG - 2025-06-25 10:00:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:00:06 --> Model "Crud" initialized
INFO - 2025-06-25 10:00:06 --> Final output sent to browser
DEBUG - 2025-06-25 10:00:06 --> Total execution time: 0.0809
INFO - 2025-06-25 10:00:06 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:00:06 --> Controller Class Initialized
INFO - 2025-06-25 10:00:06 --> Helper loaded: form_helper
INFO - 2025-06-25 10:00:06 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:00:06 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:00:06 --> Database Driver Class Initialized
INFO - 2025-06-25 10:00:07 --> Model "Crud" initialized
INFO - 2025-06-25 10:00:07 --> Final output sent to browser
DEBUG - 2025-06-25 10:00:07 --> Total execution time: 0.1182
INFO - 2025-06-25 10:48:40 --> Config Class Initialized
INFO - 2025-06-25 10:48:40 --> Config Class Initialized
INFO - 2025-06-25 10:48:40 --> Hooks Class Initialized
INFO - 2025-06-25 10:48:40 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:48:40 --> UTF-8 Support Enabled
DEBUG - 2025-06-25 10:48:40 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:48:40 --> Utf8 Class Initialized
INFO - 2025-06-25 10:48:40 --> Utf8 Class Initialized
INFO - 2025-06-25 10:48:40 --> URI Class Initialized
INFO - 2025-06-25 10:48:40 --> URI Class Initialized
INFO - 2025-06-25 10:48:40 --> Router Class Initialized
INFO - 2025-06-25 10:48:40 --> Router Class Initialized
INFO - 2025-06-25 10:48:40 --> Output Class Initialized
INFO - 2025-06-25 10:48:40 --> Output Class Initialized
INFO - 2025-06-25 10:48:40 --> Security Class Initialized
INFO - 2025-06-25 10:48:40 --> Security Class Initialized
DEBUG - 2025-06-25 10:48:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-25 10:48:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:48:40 --> Input Class Initialized
INFO - 2025-06-25 10:48:40 --> Input Class Initialized
INFO - 2025-06-25 10:48:40 --> Language Class Initialized
INFO - 2025-06-25 10:48:40 --> Language Class Initialized
INFO - 2025-06-25 10:48:40 --> Loader Class Initialized
INFO - 2025-06-25 10:48:40 --> Loader Class Initialized
INFO - 2025-06-25 10:48:40 --> Helper loaded: url_helper
INFO - 2025-06-25 10:48:40 --> Helper loaded: url_helper
INFO - 2025-06-25 10:48:40 --> Helper loaded: file_helper
INFO - 2025-06-25 10:48:40 --> Helper loaded: file_helper
INFO - 2025-06-25 10:48:40 --> Database Driver Class Initialized
INFO - 2025-06-25 10:48:40 --> Database Driver Class Initialized
INFO - 2025-06-25 10:48:40 --> Email Class Initialized
INFO - 2025-06-25 10:48:40 --> Email Class Initialized
DEBUG - 2025-06-25 10:48:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-25 10:48:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:48:40 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:48:40 --> Controller Class Initialized
INFO - 2025-06-25 10:48:40 --> Helper loaded: form_helper
INFO - 2025-06-25 10:48:40 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:48:40 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:48:40 --> Database Driver Class Initialized
INFO - 2025-06-25 10:48:40 --> Model "Crud" initialized
INFO - 2025-06-25 10:48:41 --> Final output sent to browser
DEBUG - 2025-06-25 10:48:41 --> Total execution time: 1.0172
INFO - 2025-06-25 10:48:41 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:48:41 --> Controller Class Initialized
INFO - 2025-06-25 10:48:41 --> Helper loaded: form_helper
INFO - 2025-06-25 10:48:41 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:48:41 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:48:41 --> Database Driver Class Initialized
INFO - 2025-06-25 10:48:41 --> Model "Crud" initialized
INFO - 2025-06-25 10:48:41 --> Final output sent to browser
DEBUG - 2025-06-25 10:48:41 --> Total execution time: 1.0659
INFO - 2025-06-25 10:48:47 --> Config Class Initialized
INFO - 2025-06-25 10:48:47 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:48:47 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:48:47 --> Utf8 Class Initialized
INFO - 2025-06-25 10:48:47 --> URI Class Initialized
INFO - 2025-06-25 10:48:47 --> Router Class Initialized
INFO - 2025-06-25 10:48:47 --> Output Class Initialized
INFO - 2025-06-25 10:48:47 --> Security Class Initialized
DEBUG - 2025-06-25 10:48:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:48:47 --> Input Class Initialized
INFO - 2025-06-25 10:48:47 --> Language Class Initialized
INFO - 2025-06-25 10:48:47 --> Config Class Initialized
INFO - 2025-06-25 10:48:47 --> Hooks Class Initialized
INFO - 2025-06-25 10:48:47 --> Loader Class Initialized
DEBUG - 2025-06-25 10:48:47 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:48:47 --> Utf8 Class Initialized
INFO - 2025-06-25 10:48:47 --> Helper loaded: url_helper
INFO - 2025-06-25 10:48:47 --> Helper loaded: file_helper
INFO - 2025-06-25 10:48:47 --> URI Class Initialized
INFO - 2025-06-25 10:48:47 --> Router Class Initialized
INFO - 2025-06-25 10:48:47 --> Output Class Initialized
INFO - 2025-06-25 10:48:47 --> Security Class Initialized
INFO - 2025-06-25 10:48:47 --> Database Driver Class Initialized
DEBUG - 2025-06-25 10:48:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:48:47 --> Input Class Initialized
INFO - 2025-06-25 10:48:47 --> Language Class Initialized
INFO - 2025-06-25 10:48:47 --> Loader Class Initialized
INFO - 2025-06-25 10:48:47 --> Helper loaded: url_helper
INFO - 2025-06-25 10:48:47 --> Helper loaded: file_helper
INFO - 2025-06-25 10:48:47 --> Database Driver Class Initialized
INFO - 2025-06-25 10:48:47 --> Email Class Initialized
DEBUG - 2025-06-25 10:48:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:48:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:48:47 --> Controller Class Initialized
INFO - 2025-06-25 10:48:47 --> Helper loaded: form_helper
INFO - 2025-06-25 10:48:47 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:48:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:48:47 --> Database Driver Class Initialized
INFO - 2025-06-25 10:48:47 --> Email Class Initialized
DEBUG - 2025-06-25 10:48:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:48:47 --> Model "Crud" initialized
INFO - 2025-06-25 10:48:47 --> Final output sent to browser
DEBUG - 2025-06-25 10:48:47 --> Total execution time: 0.0819
INFO - 2025-06-25 10:48:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:48:47 --> Controller Class Initialized
INFO - 2025-06-25 10:48:47 --> Helper loaded: form_helper
INFO - 2025-06-25 10:48:47 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:48:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:48:47 --> Database Driver Class Initialized
INFO - 2025-06-25 10:48:47 --> Model "Crud" initialized
INFO - 2025-06-25 10:48:47 --> Final output sent to browser
DEBUG - 2025-06-25 10:48:47 --> Total execution time: 0.1210
INFO - 2025-06-25 10:51:15 --> Config Class Initialized
INFO - 2025-06-25 10:51:15 --> Config Class Initialized
INFO - 2025-06-25 10:51:15 --> Hooks Class Initialized
INFO - 2025-06-25 10:51:15 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:51:15 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:51:15 --> Utf8 Class Initialized
DEBUG - 2025-06-25 10:51:15 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:51:15 --> Utf8 Class Initialized
INFO - 2025-06-25 10:51:15 --> URI Class Initialized
INFO - 2025-06-25 10:51:15 --> URI Class Initialized
INFO - 2025-06-25 10:51:15 --> Router Class Initialized
INFO - 2025-06-25 10:51:15 --> Output Class Initialized
INFO - 2025-06-25 10:51:15 --> Router Class Initialized
INFO - 2025-06-25 10:51:15 --> Security Class Initialized
INFO - 2025-06-25 10:51:15 --> Output Class Initialized
INFO - 2025-06-25 10:51:15 --> Security Class Initialized
DEBUG - 2025-06-25 10:51:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:51:15 --> Input Class Initialized
INFO - 2025-06-25 10:51:15 --> Language Class Initialized
DEBUG - 2025-06-25 10:51:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:51:15 --> Input Class Initialized
INFO - 2025-06-25 10:51:15 --> Language Class Initialized
INFO - 2025-06-25 10:51:15 --> Loader Class Initialized
INFO - 2025-06-25 10:51:15 --> Loader Class Initialized
INFO - 2025-06-25 10:51:15 --> Helper loaded: url_helper
INFO - 2025-06-25 10:51:15 --> Helper loaded: url_helper
INFO - 2025-06-25 10:51:15 --> Helper loaded: file_helper
INFO - 2025-06-25 10:51:15 --> Helper loaded: file_helper
INFO - 2025-06-25 10:51:15 --> Database Driver Class Initialized
INFO - 2025-06-25 10:51:15 --> Database Driver Class Initialized
INFO - 2025-06-25 10:51:15 --> Email Class Initialized
DEBUG - 2025-06-25 10:51:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:51:15 --> Email Class Initialized
INFO - 2025-06-25 10:51:15 --> Session: Class initialized using 'files' driver.
DEBUG - 2025-06-25 10:51:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:51:15 --> Controller Class Initialized
INFO - 2025-06-25 10:51:15 --> Helper loaded: form_helper
INFO - 2025-06-25 10:51:15 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:51:15 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:51:15 --> Database Driver Class Initialized
INFO - 2025-06-25 10:51:15 --> Model "Crud" initialized
INFO - 2025-06-25 10:51:15 --> Final output sent to browser
DEBUG - 2025-06-25 10:51:15 --> Total execution time: 0.0672
INFO - 2025-06-25 10:51:15 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:51:15 --> Controller Class Initialized
INFO - 2025-06-25 10:51:15 --> Helper loaded: form_helper
INFO - 2025-06-25 10:51:15 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:51:15 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:51:15 --> Database Driver Class Initialized
INFO - 2025-06-25 10:51:15 --> Model "Crud" initialized
INFO - 2025-06-25 10:51:15 --> Final output sent to browser
DEBUG - 2025-06-25 10:51:15 --> Total execution time: 0.1135
INFO - 2025-06-25 10:51:16 --> Config Class Initialized
INFO - 2025-06-25 10:51:16 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:51:16 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:51:16 --> Utf8 Class Initialized
INFO - 2025-06-25 10:51:16 --> URI Class Initialized
INFO - 2025-06-25 10:51:16 --> Config Class Initialized
INFO - 2025-06-25 10:51:16 --> Router Class Initialized
INFO - 2025-06-25 10:51:16 --> Hooks Class Initialized
INFO - 2025-06-25 10:51:16 --> Output Class Initialized
DEBUG - 2025-06-25 10:51:16 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:51:16 --> Utf8 Class Initialized
INFO - 2025-06-25 10:51:16 --> Security Class Initialized
INFO - 2025-06-25 10:51:16 --> URI Class Initialized
DEBUG - 2025-06-25 10:51:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:51:16 --> Router Class Initialized
INFO - 2025-06-25 10:51:16 --> Input Class Initialized
INFO - 2025-06-25 10:51:16 --> Output Class Initialized
INFO - 2025-06-25 10:51:16 --> Language Class Initialized
INFO - 2025-06-25 10:51:16 --> Security Class Initialized
DEBUG - 2025-06-25 10:51:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:51:16 --> Loader Class Initialized
INFO - 2025-06-25 10:51:16 --> Input Class Initialized
INFO - 2025-06-25 10:51:16 --> Helper loaded: url_helper
INFO - 2025-06-25 10:51:16 --> Language Class Initialized
INFO - 2025-06-25 10:51:16 --> Helper loaded: file_helper
INFO - 2025-06-25 10:51:16 --> Loader Class Initialized
INFO - 2025-06-25 10:51:16 --> Database Driver Class Initialized
INFO - 2025-06-25 10:51:16 --> Helper loaded: url_helper
INFO - 2025-06-25 10:51:16 --> Helper loaded: file_helper
INFO - 2025-06-25 10:51:16 --> Database Driver Class Initialized
INFO - 2025-06-25 10:51:16 --> Email Class Initialized
DEBUG - 2025-06-25 10:51:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:51:16 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:51:16 --> Controller Class Initialized
INFO - 2025-06-25 10:51:16 --> Helper loaded: form_helper
INFO - 2025-06-25 10:51:16 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:51:16 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:51:16 --> Database Driver Class Initialized
INFO - 2025-06-25 10:51:16 --> Email Class Initialized
DEBUG - 2025-06-25 10:51:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:51:16 --> Model "Crud" initialized
INFO - 2025-06-25 10:51:16 --> Final output sent to browser
DEBUG - 2025-06-25 10:51:16 --> Total execution time: 0.0564
INFO - 2025-06-25 10:51:16 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:51:16 --> Controller Class Initialized
INFO - 2025-06-25 10:51:16 --> Helper loaded: form_helper
INFO - 2025-06-25 10:51:16 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:51:16 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:51:16 --> Database Driver Class Initialized
INFO - 2025-06-25 10:51:16 --> Model "Crud" initialized
INFO - 2025-06-25 10:51:16 --> Final output sent to browser
DEBUG - 2025-06-25 10:51:16 --> Total execution time: 0.1046
INFO - 2025-06-25 10:51:27 --> Config Class Initialized
INFO - 2025-06-25 10:51:27 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:51:27 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:51:27 --> Utf8 Class Initialized
INFO - 2025-06-25 10:51:27 --> Config Class Initialized
INFO - 2025-06-25 10:51:27 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:51:27 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:51:27 --> URI Class Initialized
INFO - 2025-06-25 10:51:27 --> Utf8 Class Initialized
INFO - 2025-06-25 10:51:27 --> Router Class Initialized
INFO - 2025-06-25 10:51:27 --> URI Class Initialized
INFO - 2025-06-25 10:51:27 --> Output Class Initialized
INFO - 2025-06-25 10:51:27 --> Security Class Initialized
INFO - 2025-06-25 10:51:27 --> Router Class Initialized
INFO - 2025-06-25 10:51:27 --> Output Class Initialized
DEBUG - 2025-06-25 10:51:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:51:27 --> Security Class Initialized
INFO - 2025-06-25 10:51:27 --> Input Class Initialized
INFO - 2025-06-25 10:51:27 --> Language Class Initialized
DEBUG - 2025-06-25 10:51:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:51:27 --> Input Class Initialized
INFO - 2025-06-25 10:51:27 --> Language Class Initialized
INFO - 2025-06-25 10:51:27 --> Loader Class Initialized
INFO - 2025-06-25 10:51:27 --> Loader Class Initialized
INFO - 2025-06-25 10:51:27 --> Helper loaded: url_helper
INFO - 2025-06-25 10:51:27 --> Helper loaded: file_helper
INFO - 2025-06-25 10:51:27 --> Helper loaded: url_helper
INFO - 2025-06-25 10:51:27 --> Helper loaded: file_helper
INFO - 2025-06-25 10:51:27 --> Database Driver Class Initialized
INFO - 2025-06-25 10:51:27 --> Database Driver Class Initialized
INFO - 2025-06-25 10:51:27 --> Email Class Initialized
INFO - 2025-06-25 10:51:27 --> Email Class Initialized
DEBUG - 2025-06-25 10:51:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-25 10:51:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:51:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:51:27 --> Controller Class Initialized
INFO - 2025-06-25 10:51:27 --> Helper loaded: form_helper
INFO - 2025-06-25 10:51:27 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:51:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:51:27 --> Database Driver Class Initialized
INFO - 2025-06-25 10:51:27 --> Model "Crud" initialized
INFO - 2025-06-25 10:51:27 --> Final output sent to browser
DEBUG - 2025-06-25 10:51:27 --> Total execution time: 0.0446
INFO - 2025-06-25 10:51:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:51:27 --> Controller Class Initialized
INFO - 2025-06-25 10:51:27 --> Helper loaded: form_helper
INFO - 2025-06-25 10:51:27 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:51:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:51:27 --> Database Driver Class Initialized
INFO - 2025-06-25 10:51:27 --> Model "Crud" initialized
INFO - 2025-06-25 10:51:27 --> Final output sent to browser
DEBUG - 2025-06-25 10:51:27 --> Total execution time: 0.0784
INFO - 2025-06-25 10:51:37 --> Config Class Initialized
INFO - 2025-06-25 10:51:37 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:51:37 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:51:37 --> Utf8 Class Initialized
INFO - 2025-06-25 10:51:37 --> URI Class Initialized
INFO - 2025-06-25 10:51:37 --> Router Class Initialized
INFO - 2025-06-25 10:51:37 --> Output Class Initialized
INFO - 2025-06-25 10:51:37 --> Security Class Initialized
DEBUG - 2025-06-25 10:51:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:51:37 --> Input Class Initialized
INFO - 2025-06-25 10:51:37 --> Language Class Initialized
INFO - 2025-06-25 10:51:37 --> Loader Class Initialized
INFO - 2025-06-25 10:51:37 --> Helper loaded: url_helper
INFO - 2025-06-25 10:51:37 --> Helper loaded: file_helper
INFO - 2025-06-25 10:51:37 --> Config Class Initialized
INFO - 2025-06-25 10:51:37 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:51:37 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:51:37 --> Utf8 Class Initialized
INFO - 2025-06-25 10:51:37 --> Database Driver Class Initialized
INFO - 2025-06-25 10:51:37 --> URI Class Initialized
INFO - 2025-06-25 10:51:37 --> Router Class Initialized
INFO - 2025-06-25 10:51:37 --> Output Class Initialized
INFO - 2025-06-25 10:51:37 --> Security Class Initialized
DEBUG - 2025-06-25 10:51:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:51:37 --> Input Class Initialized
INFO - 2025-06-25 10:51:37 --> Language Class Initialized
INFO - 2025-06-25 10:51:37 --> Loader Class Initialized
INFO - 2025-06-25 10:51:37 --> Helper loaded: url_helper
INFO - 2025-06-25 10:51:37 --> Helper loaded: file_helper
INFO - 2025-06-25 10:51:37 --> Database Driver Class Initialized
INFO - 2025-06-25 10:51:37 --> Email Class Initialized
DEBUG - 2025-06-25 10:51:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:51:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:51:37 --> Controller Class Initialized
INFO - 2025-06-25 10:51:37 --> Helper loaded: form_helper
INFO - 2025-06-25 10:51:37 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:51:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:51:37 --> Database Driver Class Initialized
INFO - 2025-06-25 10:51:37 --> Email Class Initialized
DEBUG - 2025-06-25 10:51:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:51:37 --> Model "Crud" initialized
INFO - 2025-06-25 10:51:37 --> Final output sent to browser
DEBUG - 2025-06-25 10:51:37 --> Total execution time: 0.0374
INFO - 2025-06-25 10:51:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:51:37 --> Controller Class Initialized
INFO - 2025-06-25 10:51:37 --> Helper loaded: form_helper
INFO - 2025-06-25 10:51:37 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:51:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:51:37 --> Database Driver Class Initialized
INFO - 2025-06-25 10:51:37 --> Model "Crud" initialized
INFO - 2025-06-25 10:51:37 --> Final output sent to browser
DEBUG - 2025-06-25 10:51:37 --> Total execution time: 0.0534
INFO - 2025-06-25 10:51:46 --> Config Class Initialized
INFO - 2025-06-25 10:51:46 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:51:46 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:51:46 --> Utf8 Class Initialized
INFO - 2025-06-25 10:51:46 --> URI Class Initialized
INFO - 2025-06-25 10:51:46 --> Router Class Initialized
INFO - 2025-06-25 10:51:46 --> Output Class Initialized
INFO - 2025-06-25 10:51:46 --> Security Class Initialized
DEBUG - 2025-06-25 10:51:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:51:46 --> Input Class Initialized
INFO - 2025-06-25 10:51:46 --> Language Class Initialized
INFO - 2025-06-25 10:51:46 --> Loader Class Initialized
INFO - 2025-06-25 10:51:46 --> Helper loaded: url_helper
INFO - 2025-06-25 10:51:46 --> Helper loaded: file_helper
INFO - 2025-06-25 10:51:46 --> Database Driver Class Initialized
INFO - 2025-06-25 10:51:46 --> Config Class Initialized
INFO - 2025-06-25 10:51:46 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:51:46 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:51:46 --> Utf8 Class Initialized
INFO - 2025-06-25 10:51:46 --> URI Class Initialized
INFO - 2025-06-25 10:51:46 --> Router Class Initialized
INFO - 2025-06-25 10:51:46 --> Output Class Initialized
INFO - 2025-06-25 10:51:46 --> Security Class Initialized
DEBUG - 2025-06-25 10:51:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:51:46 --> Input Class Initialized
INFO - 2025-06-25 10:51:46 --> Language Class Initialized
INFO - 2025-06-25 10:51:46 --> Loader Class Initialized
INFO - 2025-06-25 10:51:46 --> Helper loaded: url_helper
INFO - 2025-06-25 10:51:46 --> Helper loaded: file_helper
INFO - 2025-06-25 10:51:46 --> Database Driver Class Initialized
INFO - 2025-06-25 10:51:46 --> Email Class Initialized
DEBUG - 2025-06-25 10:51:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:51:46 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:51:46 --> Controller Class Initialized
INFO - 2025-06-25 10:51:46 --> Helper loaded: form_helper
INFO - 2025-06-25 10:51:46 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:51:46 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:51:46 --> Database Driver Class Initialized
INFO - 2025-06-25 10:51:46 --> Email Class Initialized
DEBUG - 2025-06-25 10:51:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:51:46 --> Model "Crud" initialized
INFO - 2025-06-25 10:51:46 --> Final output sent to browser
DEBUG - 2025-06-25 10:51:46 --> Total execution time: 0.0507
INFO - 2025-06-25 10:51:46 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:51:46 --> Controller Class Initialized
INFO - 2025-06-25 10:51:46 --> Helper loaded: form_helper
INFO - 2025-06-25 10:51:46 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:51:46 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:51:46 --> Database Driver Class Initialized
INFO - 2025-06-25 10:51:46 --> Model "Crud" initialized
INFO - 2025-06-25 10:51:46 --> Final output sent to browser
DEBUG - 2025-06-25 10:51:46 --> Total execution time: 0.0753
INFO - 2025-06-25 10:51:56 --> Config Class Initialized
INFO - 2025-06-25 10:51:56 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:51:56 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:51:56 --> Utf8 Class Initialized
INFO - 2025-06-25 10:51:56 --> URI Class Initialized
INFO - 2025-06-25 10:51:56 --> Router Class Initialized
INFO - 2025-06-25 10:51:56 --> Output Class Initialized
INFO - 2025-06-25 10:51:56 --> Security Class Initialized
DEBUG - 2025-06-25 10:51:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:51:56 --> Input Class Initialized
INFO - 2025-06-25 10:51:56 --> Language Class Initialized
INFO - 2025-06-25 10:51:56 --> Loader Class Initialized
INFO - 2025-06-25 10:51:56 --> Helper loaded: url_helper
INFO - 2025-06-25 10:51:56 --> Helper loaded: file_helper
INFO - 2025-06-25 10:51:56 --> Database Driver Class Initialized
INFO - 2025-06-25 10:51:56 --> Config Class Initialized
INFO - 2025-06-25 10:51:56 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:51:56 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:51:56 --> Utf8 Class Initialized
INFO - 2025-06-25 10:51:56 --> URI Class Initialized
INFO - 2025-06-25 10:51:56 --> Router Class Initialized
INFO - 2025-06-25 10:51:56 --> Output Class Initialized
INFO - 2025-06-25 10:51:56 --> Email Class Initialized
INFO - 2025-06-25 10:51:56 --> Security Class Initialized
DEBUG - 2025-06-25 10:51:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-25 10:51:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:51:56 --> Input Class Initialized
INFO - 2025-06-25 10:51:56 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:51:56 --> Language Class Initialized
INFO - 2025-06-25 10:51:56 --> Controller Class Initialized
INFO - 2025-06-25 10:51:56 --> Helper loaded: form_helper
INFO - 2025-06-25 10:51:56 --> Loader Class Initialized
INFO - 2025-06-25 10:51:56 --> Form Validation Class Initialized
INFO - 2025-06-25 10:51:56 --> Helper loaded: url_helper
DEBUG - 2025-06-25 10:51:56 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:51:56 --> Helper loaded: file_helper
INFO - 2025-06-25 10:51:56 --> Database Driver Class Initialized
INFO - 2025-06-25 10:51:56 --> Database Driver Class Initialized
INFO - 2025-06-25 10:51:56 --> Model "Crud" initialized
INFO - 2025-06-25 10:51:56 --> Email Class Initialized
DEBUG - 2025-06-25 10:51:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:51:56 --> Final output sent to browser
DEBUG - 2025-06-25 10:51:56 --> Total execution time: 0.0422
INFO - 2025-06-25 10:51:56 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:51:56 --> Controller Class Initialized
INFO - 2025-06-25 10:51:56 --> Helper loaded: form_helper
INFO - 2025-06-25 10:51:56 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:51:56 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:51:56 --> Database Driver Class Initialized
INFO - 2025-06-25 10:51:56 --> Model "Crud" initialized
INFO - 2025-06-25 10:51:56 --> Final output sent to browser
DEBUG - 2025-06-25 10:51:56 --> Total execution time: 0.0827
INFO - 2025-06-25 10:52:07 --> Config Class Initialized
INFO - 2025-06-25 10:52:07 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:52:07 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:52:07 --> Utf8 Class Initialized
INFO - 2025-06-25 10:52:07 --> URI Class Initialized
INFO - 2025-06-25 10:52:07 --> Router Class Initialized
INFO - 2025-06-25 10:52:07 --> Output Class Initialized
INFO - 2025-06-25 10:52:07 --> Security Class Initialized
DEBUG - 2025-06-25 10:52:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:52:07 --> Input Class Initialized
INFO - 2025-06-25 10:52:07 --> Language Class Initialized
INFO - 2025-06-25 10:52:07 --> Loader Class Initialized
INFO - 2025-06-25 10:52:07 --> Helper loaded: url_helper
INFO - 2025-06-25 10:52:07 --> Helper loaded: file_helper
INFO - 2025-06-25 10:52:07 --> Database Driver Class Initialized
INFO - 2025-06-25 10:52:07 --> Config Class Initialized
INFO - 2025-06-25 10:52:07 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:52:07 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:52:07 --> Utf8 Class Initialized
INFO - 2025-06-25 10:52:07 --> URI Class Initialized
INFO - 2025-06-25 10:52:07 --> Router Class Initialized
INFO - 2025-06-25 10:52:07 --> Output Class Initialized
INFO - 2025-06-25 10:52:07 --> Security Class Initialized
DEBUG - 2025-06-25 10:52:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:52:07 --> Input Class Initialized
INFO - 2025-06-25 10:52:07 --> Language Class Initialized
INFO - 2025-06-25 10:52:07 --> Loader Class Initialized
INFO - 2025-06-25 10:52:07 --> Helper loaded: url_helper
INFO - 2025-06-25 10:52:07 --> Helper loaded: file_helper
INFO - 2025-06-25 10:52:07 --> Database Driver Class Initialized
INFO - 2025-06-25 10:52:07 --> Email Class Initialized
DEBUG - 2025-06-25 10:52:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:52:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:52:07 --> Controller Class Initialized
INFO - 2025-06-25 10:52:07 --> Helper loaded: form_helper
INFO - 2025-06-25 10:52:07 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:52:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:52:07 --> Database Driver Class Initialized
INFO - 2025-06-25 10:52:07 --> Email Class Initialized
DEBUG - 2025-06-25 10:52:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:52:07 --> Model "Crud" initialized
INFO - 2025-06-25 10:52:07 --> Final output sent to browser
DEBUG - 2025-06-25 10:52:07 --> Total execution time: 0.0432
INFO - 2025-06-25 10:52:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:52:07 --> Controller Class Initialized
INFO - 2025-06-25 10:52:07 --> Helper loaded: form_helper
INFO - 2025-06-25 10:52:07 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:52:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:52:07 --> Database Driver Class Initialized
INFO - 2025-06-25 10:52:07 --> Model "Crud" initialized
INFO - 2025-06-25 10:52:07 --> Final output sent to browser
DEBUG - 2025-06-25 10:52:07 --> Total execution time: 0.0725
INFO - 2025-06-25 10:52:16 --> Config Class Initialized
INFO - 2025-06-25 10:52:16 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:52:16 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:52:16 --> Utf8 Class Initialized
INFO - 2025-06-25 10:52:16 --> URI Class Initialized
INFO - 2025-06-25 10:52:16 --> Router Class Initialized
INFO - 2025-06-25 10:52:16 --> Output Class Initialized
INFO - 2025-06-25 10:52:16 --> Security Class Initialized
DEBUG - 2025-06-25 10:52:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:52:16 --> Input Class Initialized
INFO - 2025-06-25 10:52:16 --> Language Class Initialized
INFO - 2025-06-25 10:52:16 --> Loader Class Initialized
INFO - 2025-06-25 10:52:16 --> Helper loaded: url_helper
INFO - 2025-06-25 10:52:16 --> Helper loaded: file_helper
INFO - 2025-06-25 10:52:16 --> Database Driver Class Initialized
INFO - 2025-06-25 10:52:16 --> Config Class Initialized
INFO - 2025-06-25 10:52:16 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:52:16 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:52:16 --> Utf8 Class Initialized
INFO - 2025-06-25 10:52:16 --> URI Class Initialized
INFO - 2025-06-25 10:52:16 --> Router Class Initialized
INFO - 2025-06-25 10:52:16 --> Output Class Initialized
INFO - 2025-06-25 10:52:16 --> Security Class Initialized
DEBUG - 2025-06-25 10:52:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:52:16 --> Input Class Initialized
INFO - 2025-06-25 10:52:16 --> Language Class Initialized
INFO - 2025-06-25 10:52:16 --> Loader Class Initialized
INFO - 2025-06-25 10:52:16 --> Helper loaded: url_helper
INFO - 2025-06-25 10:52:16 --> Helper loaded: file_helper
INFO - 2025-06-25 10:52:16 --> Database Driver Class Initialized
INFO - 2025-06-25 10:52:16 --> Email Class Initialized
DEBUG - 2025-06-25 10:52:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:52:16 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:52:16 --> Controller Class Initialized
INFO - 2025-06-25 10:52:16 --> Helper loaded: form_helper
INFO - 2025-06-25 10:52:16 --> Form Validation Class Initialized
INFO - 2025-06-25 10:52:16 --> Email Class Initialized
DEBUG - 2025-06-25 10:52:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 10:52:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:52:16 --> Database Driver Class Initialized
INFO - 2025-06-25 10:52:16 --> Model "Crud" initialized
INFO - 2025-06-25 10:52:16 --> Final output sent to browser
DEBUG - 2025-06-25 10:52:16 --> Total execution time: 0.0439
INFO - 2025-06-25 10:52:16 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:52:16 --> Controller Class Initialized
INFO - 2025-06-25 10:52:16 --> Helper loaded: form_helper
INFO - 2025-06-25 10:52:16 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:52:16 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:52:16 --> Database Driver Class Initialized
INFO - 2025-06-25 10:52:17 --> Model "Crud" initialized
INFO - 2025-06-25 10:52:17 --> Final output sent to browser
DEBUG - 2025-06-25 10:52:17 --> Total execution time: 0.0741
INFO - 2025-06-25 10:52:26 --> Config Class Initialized
INFO - 2025-06-25 10:52:26 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:52:26 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:52:26 --> Utf8 Class Initialized
INFO - 2025-06-25 10:52:26 --> URI Class Initialized
INFO - 2025-06-25 10:52:26 --> Config Class Initialized
INFO - 2025-06-25 10:52:26 --> Hooks Class Initialized
INFO - 2025-06-25 10:52:26 --> Router Class Initialized
DEBUG - 2025-06-25 10:52:26 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:52:26 --> Utf8 Class Initialized
INFO - 2025-06-25 10:52:26 --> Output Class Initialized
INFO - 2025-06-25 10:52:26 --> URI Class Initialized
INFO - 2025-06-25 10:52:26 --> Security Class Initialized
INFO - 2025-06-25 10:52:26 --> Router Class Initialized
DEBUG - 2025-06-25 10:52:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:52:26 --> Input Class Initialized
INFO - 2025-06-25 10:52:26 --> Output Class Initialized
INFO - 2025-06-25 10:52:26 --> Language Class Initialized
INFO - 2025-06-25 10:52:26 --> Security Class Initialized
DEBUG - 2025-06-25 10:52:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:52:26 --> Loader Class Initialized
INFO - 2025-06-25 10:52:26 --> Input Class Initialized
INFO - 2025-06-25 10:52:26 --> Helper loaded: url_helper
INFO - 2025-06-25 10:52:26 --> Language Class Initialized
INFO - 2025-06-25 10:52:26 --> Helper loaded: file_helper
INFO - 2025-06-25 10:52:26 --> Loader Class Initialized
INFO - 2025-06-25 10:52:26 --> Database Driver Class Initialized
INFO - 2025-06-25 10:52:26 --> Helper loaded: url_helper
INFO - 2025-06-25 10:52:26 --> Helper loaded: file_helper
INFO - 2025-06-25 10:52:26 --> Database Driver Class Initialized
INFO - 2025-06-25 10:52:26 --> Email Class Initialized
DEBUG - 2025-06-25 10:52:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:52:26 --> Email Class Initialized
INFO - 2025-06-25 10:52:26 --> Session: Class initialized using 'files' driver.
DEBUG - 2025-06-25 10:52:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:52:26 --> Controller Class Initialized
INFO - 2025-06-25 10:52:26 --> Helper loaded: form_helper
INFO - 2025-06-25 10:52:26 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:52:26 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:52:26 --> Database Driver Class Initialized
INFO - 2025-06-25 10:52:26 --> Model "Crud" initialized
INFO - 2025-06-25 10:52:26 --> Final output sent to browser
DEBUG - 2025-06-25 10:52:26 --> Total execution time: 0.0396
INFO - 2025-06-25 10:52:26 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:52:26 --> Controller Class Initialized
INFO - 2025-06-25 10:52:26 --> Helper loaded: form_helper
INFO - 2025-06-25 10:52:26 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:52:26 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:52:26 --> Database Driver Class Initialized
INFO - 2025-06-25 10:52:26 --> Model "Crud" initialized
INFO - 2025-06-25 10:52:26 --> Final output sent to browser
DEBUG - 2025-06-25 10:52:26 --> Total execution time: 0.0719
INFO - 2025-06-25 10:52:37 --> Config Class Initialized
INFO - 2025-06-25 10:52:37 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:52:37 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:52:37 --> Utf8 Class Initialized
INFO - 2025-06-25 10:52:37 --> URI Class Initialized
INFO - 2025-06-25 10:52:37 --> Router Class Initialized
INFO - 2025-06-25 10:52:37 --> Output Class Initialized
INFO - 2025-06-25 10:52:37 --> Security Class Initialized
DEBUG - 2025-06-25 10:52:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:52:37 --> Input Class Initialized
INFO - 2025-06-25 10:52:37 --> Language Class Initialized
INFO - 2025-06-25 10:52:37 --> Loader Class Initialized
INFO - 2025-06-25 10:52:37 --> Helper loaded: url_helper
INFO - 2025-06-25 10:52:37 --> Helper loaded: file_helper
INFO - 2025-06-25 10:52:37 --> Database Driver Class Initialized
INFO - 2025-06-25 10:52:37 --> Config Class Initialized
INFO - 2025-06-25 10:52:37 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:52:37 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:52:37 --> Utf8 Class Initialized
INFO - 2025-06-25 10:52:37 --> URI Class Initialized
INFO - 2025-06-25 10:52:37 --> Router Class Initialized
INFO - 2025-06-25 10:52:37 --> Output Class Initialized
INFO - 2025-06-25 10:52:37 --> Security Class Initialized
DEBUG - 2025-06-25 10:52:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:52:37 --> Input Class Initialized
INFO - 2025-06-25 10:52:37 --> Language Class Initialized
INFO - 2025-06-25 10:52:37 --> Loader Class Initialized
INFO - 2025-06-25 10:52:37 --> Helper loaded: url_helper
INFO - 2025-06-25 10:52:37 --> Helper loaded: file_helper
INFO - 2025-06-25 10:52:37 --> Database Driver Class Initialized
INFO - 2025-06-25 10:52:37 --> Email Class Initialized
DEBUG - 2025-06-25 10:52:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:52:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:52:37 --> Controller Class Initialized
INFO - 2025-06-25 10:52:37 --> Helper loaded: form_helper
INFO - 2025-06-25 10:52:37 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:52:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:52:37 --> Database Driver Class Initialized
INFO - 2025-06-25 10:52:37 --> Email Class Initialized
DEBUG - 2025-06-25 10:52:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:52:37 --> Model "Crud" initialized
INFO - 2025-06-25 10:52:37 --> Final output sent to browser
DEBUG - 2025-06-25 10:52:37 --> Total execution time: 0.0270
INFO - 2025-06-25 10:52:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:52:37 --> Controller Class Initialized
INFO - 2025-06-25 10:52:37 --> Helper loaded: form_helper
INFO - 2025-06-25 10:52:37 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:52:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:52:37 --> Database Driver Class Initialized
INFO - 2025-06-25 10:52:37 --> Model "Crud" initialized
INFO - 2025-06-25 10:52:37 --> Final output sent to browser
DEBUG - 2025-06-25 10:52:37 --> Total execution time: 0.0458
INFO - 2025-06-25 10:52:46 --> Config Class Initialized
INFO - 2025-06-25 10:52:46 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:52:46 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:52:46 --> Utf8 Class Initialized
INFO - 2025-06-25 10:52:46 --> URI Class Initialized
INFO - 2025-06-25 10:52:46 --> Router Class Initialized
INFO - 2025-06-25 10:52:46 --> Output Class Initialized
INFO - 2025-06-25 10:52:46 --> Security Class Initialized
DEBUG - 2025-06-25 10:52:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:52:46 --> Input Class Initialized
INFO - 2025-06-25 10:52:46 --> Language Class Initialized
INFO - 2025-06-25 10:52:46 --> Loader Class Initialized
INFO - 2025-06-25 10:52:46 --> Helper loaded: url_helper
INFO - 2025-06-25 10:52:46 --> Helper loaded: file_helper
INFO - 2025-06-25 10:52:46 --> Database Driver Class Initialized
INFO - 2025-06-25 10:52:46 --> Config Class Initialized
INFO - 2025-06-25 10:52:46 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:52:46 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:52:46 --> Utf8 Class Initialized
INFO - 2025-06-25 10:52:46 --> URI Class Initialized
INFO - 2025-06-25 10:52:46 --> Router Class Initialized
INFO - 2025-06-25 10:52:46 --> Output Class Initialized
INFO - 2025-06-25 10:52:46 --> Security Class Initialized
DEBUG - 2025-06-25 10:52:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:52:46 --> Input Class Initialized
INFO - 2025-06-25 10:52:46 --> Language Class Initialized
INFO - 2025-06-25 10:52:46 --> Loader Class Initialized
INFO - 2025-06-25 10:52:46 --> Helper loaded: url_helper
INFO - 2025-06-25 10:52:46 --> Helper loaded: file_helper
INFO - 2025-06-25 10:52:46 --> Database Driver Class Initialized
INFO - 2025-06-25 10:52:46 --> Email Class Initialized
DEBUG - 2025-06-25 10:52:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:52:46 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:52:46 --> Controller Class Initialized
INFO - 2025-06-25 10:52:46 --> Helper loaded: form_helper
INFO - 2025-06-25 10:52:46 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:52:46 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:52:46 --> Database Driver Class Initialized
INFO - 2025-06-25 10:52:46 --> Email Class Initialized
DEBUG - 2025-06-25 10:52:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:52:46 --> Model "Crud" initialized
INFO - 2025-06-25 10:52:47 --> Final output sent to browser
DEBUG - 2025-06-25 10:52:47 --> Total execution time: 0.0304
INFO - 2025-06-25 10:52:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:52:47 --> Controller Class Initialized
INFO - 2025-06-25 10:52:47 --> Helper loaded: form_helper
INFO - 2025-06-25 10:52:47 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:52:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:52:47 --> Database Driver Class Initialized
INFO - 2025-06-25 10:52:47 --> Model "Crud" initialized
INFO - 2025-06-25 10:52:47 --> Final output sent to browser
DEBUG - 2025-06-25 10:52:47 --> Total execution time: 0.0543
INFO - 2025-06-25 10:52:56 --> Config Class Initialized
INFO - 2025-06-25 10:52:56 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:52:56 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:52:56 --> Utf8 Class Initialized
INFO - 2025-06-25 10:52:56 --> URI Class Initialized
INFO - 2025-06-25 10:52:56 --> Router Class Initialized
INFO - 2025-06-25 10:52:56 --> Output Class Initialized
INFO - 2025-06-25 10:52:56 --> Security Class Initialized
DEBUG - 2025-06-25 10:52:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:52:56 --> Input Class Initialized
INFO - 2025-06-25 10:52:56 --> Language Class Initialized
INFO - 2025-06-25 10:52:56 --> Loader Class Initialized
INFO - 2025-06-25 10:52:56 --> Helper loaded: url_helper
INFO - 2025-06-25 10:52:56 --> Helper loaded: file_helper
INFO - 2025-06-25 10:52:56 --> Database Driver Class Initialized
INFO - 2025-06-25 10:52:56 --> Config Class Initialized
INFO - 2025-06-25 10:52:56 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:52:56 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:52:56 --> Utf8 Class Initialized
INFO - 2025-06-25 10:52:56 --> URI Class Initialized
INFO - 2025-06-25 10:52:56 --> Router Class Initialized
INFO - 2025-06-25 10:52:56 --> Output Class Initialized
INFO - 2025-06-25 10:52:56 --> Security Class Initialized
DEBUG - 2025-06-25 10:52:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:52:56 --> Input Class Initialized
INFO - 2025-06-25 10:52:56 --> Language Class Initialized
INFO - 2025-06-25 10:52:56 --> Loader Class Initialized
INFO - 2025-06-25 10:52:56 --> Helper loaded: url_helper
INFO - 2025-06-25 10:52:56 --> Helper loaded: file_helper
INFO - 2025-06-25 10:52:56 --> Database Driver Class Initialized
INFO - 2025-06-25 10:52:56 --> Email Class Initialized
DEBUG - 2025-06-25 10:52:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:52:56 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:52:56 --> Controller Class Initialized
INFO - 2025-06-25 10:52:56 --> Helper loaded: form_helper
INFO - 2025-06-25 10:52:56 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:52:56 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:52:56 --> Database Driver Class Initialized
INFO - 2025-06-25 10:52:56 --> Email Class Initialized
DEBUG - 2025-06-25 10:52:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:52:56 --> Model "Crud" initialized
INFO - 2025-06-25 10:52:56 --> Final output sent to browser
DEBUG - 2025-06-25 10:52:56 --> Total execution time: 0.0353
INFO - 2025-06-25 10:52:56 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:52:56 --> Controller Class Initialized
INFO - 2025-06-25 10:52:56 --> Helper loaded: form_helper
INFO - 2025-06-25 10:52:56 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:52:56 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:52:56 --> Database Driver Class Initialized
INFO - 2025-06-25 10:52:56 --> Model "Crud" initialized
INFO - 2025-06-25 10:52:56 --> Final output sent to browser
DEBUG - 2025-06-25 10:52:56 --> Total execution time: 0.0566
INFO - 2025-06-25 10:53:07 --> Config Class Initialized
INFO - 2025-06-25 10:53:07 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:53:07 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:53:07 --> Utf8 Class Initialized
INFO - 2025-06-25 10:53:07 --> URI Class Initialized
INFO - 2025-06-25 10:53:07 --> Router Class Initialized
INFO - 2025-06-25 10:53:07 --> Output Class Initialized
INFO - 2025-06-25 10:53:07 --> Security Class Initialized
DEBUG - 2025-06-25 10:53:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:53:07 --> Input Class Initialized
INFO - 2025-06-25 10:53:07 --> Language Class Initialized
INFO - 2025-06-25 10:53:07 --> Loader Class Initialized
INFO - 2025-06-25 10:53:07 --> Helper loaded: url_helper
INFO - 2025-06-25 10:53:07 --> Helper loaded: file_helper
INFO - 2025-06-25 10:53:07 --> Database Driver Class Initialized
INFO - 2025-06-25 10:53:07 --> Config Class Initialized
INFO - 2025-06-25 10:53:07 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:53:07 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:53:07 --> Utf8 Class Initialized
INFO - 2025-06-25 10:53:07 --> URI Class Initialized
INFO - 2025-06-25 10:53:07 --> Router Class Initialized
INFO - 2025-06-25 10:53:07 --> Output Class Initialized
INFO - 2025-06-25 10:53:07 --> Security Class Initialized
DEBUG - 2025-06-25 10:53:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:53:07 --> Input Class Initialized
INFO - 2025-06-25 10:53:07 --> Language Class Initialized
INFO - 2025-06-25 10:53:07 --> Loader Class Initialized
INFO - 2025-06-25 10:53:07 --> Helper loaded: url_helper
INFO - 2025-06-25 10:53:07 --> Helper loaded: file_helper
INFO - 2025-06-25 10:53:07 --> Database Driver Class Initialized
INFO - 2025-06-25 10:53:07 --> Email Class Initialized
DEBUG - 2025-06-25 10:53:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:53:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:53:07 --> Controller Class Initialized
INFO - 2025-06-25 10:53:07 --> Helper loaded: form_helper
INFO - 2025-06-25 10:53:07 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:53:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:53:07 --> Database Driver Class Initialized
INFO - 2025-06-25 10:53:07 --> Email Class Initialized
DEBUG - 2025-06-25 10:53:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:53:07 --> Model "Crud" initialized
INFO - 2025-06-25 10:53:07 --> Final output sent to browser
DEBUG - 2025-06-25 10:53:07 --> Total execution time: 0.0411
INFO - 2025-06-25 10:53:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:53:07 --> Controller Class Initialized
INFO - 2025-06-25 10:53:07 --> Helper loaded: form_helper
INFO - 2025-06-25 10:53:07 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:53:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:53:07 --> Database Driver Class Initialized
INFO - 2025-06-25 10:53:07 --> Model "Crud" initialized
INFO - 2025-06-25 10:53:07 --> Final output sent to browser
DEBUG - 2025-06-25 10:53:07 --> Total execution time: 0.0699
INFO - 2025-06-25 10:53:17 --> Config Class Initialized
INFO - 2025-06-25 10:53:17 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:53:17 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:53:17 --> Utf8 Class Initialized
INFO - 2025-06-25 10:53:17 --> URI Class Initialized
INFO - 2025-06-25 10:53:17 --> Router Class Initialized
INFO - 2025-06-25 10:53:17 --> Output Class Initialized
INFO - 2025-06-25 10:53:17 --> Security Class Initialized
DEBUG - 2025-06-25 10:53:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:53:17 --> Input Class Initialized
INFO - 2025-06-25 10:53:17 --> Language Class Initialized
INFO - 2025-06-25 10:53:17 --> Config Class Initialized
INFO - 2025-06-25 10:53:17 --> Loader Class Initialized
INFO - 2025-06-25 10:53:17 --> Hooks Class Initialized
INFO - 2025-06-25 10:53:17 --> Helper loaded: url_helper
DEBUG - 2025-06-25 10:53:17 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:53:17 --> Helper loaded: file_helper
INFO - 2025-06-25 10:53:17 --> Utf8 Class Initialized
INFO - 2025-06-25 10:53:17 --> URI Class Initialized
INFO - 2025-06-25 10:53:17 --> Database Driver Class Initialized
INFO - 2025-06-25 10:53:17 --> Router Class Initialized
INFO - 2025-06-25 10:53:17 --> Output Class Initialized
INFO - 2025-06-25 10:53:17 --> Security Class Initialized
DEBUG - 2025-06-25 10:53:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:53:17 --> Input Class Initialized
INFO - 2025-06-25 10:53:17 --> Language Class Initialized
INFO - 2025-06-25 10:53:17 --> Loader Class Initialized
INFO - 2025-06-25 10:53:17 --> Helper loaded: url_helper
INFO - 2025-06-25 10:53:17 --> Helper loaded: file_helper
INFO - 2025-06-25 10:53:17 --> Database Driver Class Initialized
INFO - 2025-06-25 10:53:17 --> Email Class Initialized
DEBUG - 2025-06-25 10:53:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:53:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:53:17 --> Controller Class Initialized
INFO - 2025-06-25 10:53:17 --> Helper loaded: form_helper
INFO - 2025-06-25 10:53:17 --> Form Validation Class Initialized
INFO - 2025-06-25 10:53:17 --> Email Class Initialized
DEBUG - 2025-06-25 10:53:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 10:53:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:53:17 --> Database Driver Class Initialized
INFO - 2025-06-25 10:53:17 --> Model "Crud" initialized
INFO - 2025-06-25 10:53:17 --> Final output sent to browser
DEBUG - 2025-06-25 10:53:17 --> Total execution time: 0.0316
INFO - 2025-06-25 10:53:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:53:17 --> Controller Class Initialized
INFO - 2025-06-25 10:53:17 --> Helper loaded: form_helper
INFO - 2025-06-25 10:53:17 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:53:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:53:17 --> Database Driver Class Initialized
INFO - 2025-06-25 10:53:17 --> Model "Crud" initialized
INFO - 2025-06-25 10:53:17 --> Final output sent to browser
DEBUG - 2025-06-25 10:53:17 --> Total execution time: 0.0535
INFO - 2025-06-25 10:53:26 --> Config Class Initialized
INFO - 2025-06-25 10:53:26 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:53:26 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:53:26 --> Utf8 Class Initialized
INFO - 2025-06-25 10:53:26 --> Config Class Initialized
INFO - 2025-06-25 10:53:26 --> Hooks Class Initialized
INFO - 2025-06-25 10:53:26 --> URI Class Initialized
DEBUG - 2025-06-25 10:53:26 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:53:26 --> Utf8 Class Initialized
INFO - 2025-06-25 10:53:26 --> Router Class Initialized
INFO - 2025-06-25 10:53:26 --> URI Class Initialized
INFO - 2025-06-25 10:53:26 --> Output Class Initialized
INFO - 2025-06-25 10:53:26 --> Router Class Initialized
INFO - 2025-06-25 10:53:26 --> Security Class Initialized
INFO - 2025-06-25 10:53:26 --> Output Class Initialized
DEBUG - 2025-06-25 10:53:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:53:26 --> Security Class Initialized
INFO - 2025-06-25 10:53:26 --> Input Class Initialized
INFO - 2025-06-25 10:53:26 --> Language Class Initialized
DEBUG - 2025-06-25 10:53:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:53:26 --> Input Class Initialized
INFO - 2025-06-25 10:53:26 --> Loader Class Initialized
INFO - 2025-06-25 10:53:26 --> Language Class Initialized
INFO - 2025-06-25 10:53:26 --> Helper loaded: url_helper
INFO - 2025-06-25 10:53:26 --> Loader Class Initialized
INFO - 2025-06-25 10:53:26 --> Helper loaded: file_helper
INFO - 2025-06-25 10:53:26 --> Helper loaded: url_helper
INFO - 2025-06-25 10:53:26 --> Helper loaded: file_helper
INFO - 2025-06-25 10:53:26 --> Database Driver Class Initialized
INFO - 2025-06-25 10:53:26 --> Database Driver Class Initialized
INFO - 2025-06-25 10:53:26 --> Email Class Initialized
DEBUG - 2025-06-25 10:53:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:53:26 --> Email Class Initialized
INFO - 2025-06-25 10:53:26 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:53:26 --> Controller Class Initialized
DEBUG - 2025-06-25 10:53:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:53:26 --> Helper loaded: form_helper
INFO - 2025-06-25 10:53:26 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:53:26 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:53:26 --> Database Driver Class Initialized
INFO - 2025-06-25 10:53:26 --> Model "Crud" initialized
INFO - 2025-06-25 10:53:26 --> Final output sent to browser
DEBUG - 2025-06-25 10:53:26 --> Total execution time: 0.0266
INFO - 2025-06-25 10:53:26 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:53:26 --> Controller Class Initialized
INFO - 2025-06-25 10:53:26 --> Helper loaded: form_helper
INFO - 2025-06-25 10:53:26 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:53:26 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:53:26 --> Database Driver Class Initialized
INFO - 2025-06-25 10:53:26 --> Model "Crud" initialized
INFO - 2025-06-25 10:53:26 --> Final output sent to browser
DEBUG - 2025-06-25 10:53:26 --> Total execution time: 0.0437
INFO - 2025-06-25 10:53:37 --> Config Class Initialized
INFO - 2025-06-25 10:53:37 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:53:37 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:53:37 --> Utf8 Class Initialized
INFO - 2025-06-25 10:53:37 --> URI Class Initialized
INFO - 2025-06-25 10:53:37 --> Router Class Initialized
INFO - 2025-06-25 10:53:37 --> Output Class Initialized
INFO - 2025-06-25 10:53:37 --> Security Class Initialized
INFO - 2025-06-25 10:53:37 --> Config Class Initialized
DEBUG - 2025-06-25 10:53:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:53:37 --> Hooks Class Initialized
INFO - 2025-06-25 10:53:37 --> Input Class Initialized
DEBUG - 2025-06-25 10:53:37 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:53:37 --> Language Class Initialized
INFO - 2025-06-25 10:53:37 --> Utf8 Class Initialized
INFO - 2025-06-25 10:53:37 --> Loader Class Initialized
INFO - 2025-06-25 10:53:37 --> URI Class Initialized
INFO - 2025-06-25 10:53:37 --> Helper loaded: url_helper
INFO - 2025-06-25 10:53:37 --> Router Class Initialized
INFO - 2025-06-25 10:53:37 --> Helper loaded: file_helper
INFO - 2025-06-25 10:53:37 --> Output Class Initialized
INFO - 2025-06-25 10:53:37 --> Security Class Initialized
DEBUG - 2025-06-25 10:53:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:53:37 --> Input Class Initialized
INFO - 2025-06-25 10:53:37 --> Language Class Initialized
INFO - 2025-06-25 10:53:37 --> Database Driver Class Initialized
INFO - 2025-06-25 10:53:37 --> Loader Class Initialized
INFO - 2025-06-25 10:53:37 --> Helper loaded: url_helper
INFO - 2025-06-25 10:53:37 --> Helper loaded: file_helper
INFO - 2025-06-25 10:53:37 --> Database Driver Class Initialized
INFO - 2025-06-25 10:53:37 --> Email Class Initialized
DEBUG - 2025-06-25 10:53:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:53:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:53:37 --> Controller Class Initialized
INFO - 2025-06-25 10:53:37 --> Helper loaded: form_helper
INFO - 2025-06-25 10:53:37 --> Email Class Initialized
INFO - 2025-06-25 10:53:37 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:53:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 10:53:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:53:37 --> Database Driver Class Initialized
INFO - 2025-06-25 10:53:37 --> Model "Crud" initialized
INFO - 2025-06-25 10:53:37 --> Final output sent to browser
DEBUG - 2025-06-25 10:53:37 --> Total execution time: 0.0434
INFO - 2025-06-25 10:53:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:53:37 --> Controller Class Initialized
INFO - 2025-06-25 10:53:37 --> Helper loaded: form_helper
INFO - 2025-06-25 10:53:37 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:53:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:53:37 --> Database Driver Class Initialized
INFO - 2025-06-25 10:53:37 --> Model "Crud" initialized
INFO - 2025-06-25 10:53:37 --> Final output sent to browser
DEBUG - 2025-06-25 10:53:37 --> Total execution time: 0.0635
INFO - 2025-06-25 10:53:47 --> Config Class Initialized
INFO - 2025-06-25 10:53:47 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:53:47 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:53:47 --> Utf8 Class Initialized
INFO - 2025-06-25 10:53:47 --> URI Class Initialized
INFO - 2025-06-25 10:53:47 --> Router Class Initialized
INFO - 2025-06-25 10:53:47 --> Output Class Initialized
INFO - 2025-06-25 10:53:47 --> Security Class Initialized
DEBUG - 2025-06-25 10:53:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:53:47 --> Input Class Initialized
INFO - 2025-06-25 10:53:47 --> Language Class Initialized
INFO - 2025-06-25 10:53:47 --> Loader Class Initialized
INFO - 2025-06-25 10:53:47 --> Helper loaded: url_helper
INFO - 2025-06-25 10:53:47 --> Helper loaded: file_helper
INFO - 2025-06-25 10:53:47 --> Database Driver Class Initialized
INFO - 2025-06-25 10:53:47 --> Config Class Initialized
INFO - 2025-06-25 10:53:47 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:53:47 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:53:47 --> Utf8 Class Initialized
INFO - 2025-06-25 10:53:47 --> URI Class Initialized
INFO - 2025-06-25 10:53:47 --> Router Class Initialized
INFO - 2025-06-25 10:53:47 --> Output Class Initialized
INFO - 2025-06-25 10:53:47 --> Security Class Initialized
DEBUG - 2025-06-25 10:53:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:53:47 --> Input Class Initialized
INFO - 2025-06-25 10:53:47 --> Language Class Initialized
INFO - 2025-06-25 10:53:47 --> Loader Class Initialized
INFO - 2025-06-25 10:53:47 --> Helper loaded: url_helper
INFO - 2025-06-25 10:53:47 --> Helper loaded: file_helper
INFO - 2025-06-25 10:53:47 --> Database Driver Class Initialized
INFO - 2025-06-25 10:53:47 --> Email Class Initialized
DEBUG - 2025-06-25 10:53:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:53:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:53:47 --> Controller Class Initialized
INFO - 2025-06-25 10:53:47 --> Helper loaded: form_helper
INFO - 2025-06-25 10:53:47 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:53:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:53:47 --> Database Driver Class Initialized
INFO - 2025-06-25 10:53:47 --> Email Class Initialized
DEBUG - 2025-06-25 10:53:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:53:47 --> Model "Crud" initialized
INFO - 2025-06-25 10:53:47 --> Final output sent to browser
DEBUG - 2025-06-25 10:53:47 --> Total execution time: 0.0393
INFO - 2025-06-25 10:53:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:53:47 --> Controller Class Initialized
INFO - 2025-06-25 10:53:47 --> Helper loaded: form_helper
INFO - 2025-06-25 10:53:47 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:53:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:53:47 --> Database Driver Class Initialized
INFO - 2025-06-25 10:53:47 --> Model "Crud" initialized
INFO - 2025-06-25 10:53:47 --> Final output sent to browser
DEBUG - 2025-06-25 10:53:47 --> Total execution time: 0.0665
INFO - 2025-06-25 10:53:56 --> Config Class Initialized
INFO - 2025-06-25 10:53:56 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:53:56 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:53:56 --> Utf8 Class Initialized
INFO - 2025-06-25 10:53:56 --> URI Class Initialized
INFO - 2025-06-25 10:53:56 --> Router Class Initialized
INFO - 2025-06-25 10:53:56 --> Output Class Initialized
INFO - 2025-06-25 10:53:56 --> Security Class Initialized
DEBUG - 2025-06-25 10:53:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:53:56 --> Input Class Initialized
INFO - 2025-06-25 10:53:56 --> Language Class Initialized
INFO - 2025-06-25 10:53:56 --> Loader Class Initialized
INFO - 2025-06-25 10:53:56 --> Helper loaded: url_helper
INFO - 2025-06-25 10:53:56 --> Helper loaded: file_helper
INFO - 2025-06-25 10:53:56 --> Database Driver Class Initialized
INFO - 2025-06-25 10:53:56 --> Config Class Initialized
INFO - 2025-06-25 10:53:56 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:53:56 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:53:56 --> Utf8 Class Initialized
INFO - 2025-06-25 10:53:56 --> URI Class Initialized
INFO - 2025-06-25 10:53:56 --> Router Class Initialized
INFO - 2025-06-25 10:53:56 --> Output Class Initialized
INFO - 2025-06-25 10:53:56 --> Security Class Initialized
DEBUG - 2025-06-25 10:53:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:53:56 --> Input Class Initialized
INFO - 2025-06-25 10:53:56 --> Language Class Initialized
INFO - 2025-06-25 10:53:56 --> Loader Class Initialized
INFO - 2025-06-25 10:53:56 --> Helper loaded: url_helper
INFO - 2025-06-25 10:53:56 --> Helper loaded: file_helper
INFO - 2025-06-25 10:53:56 --> Database Driver Class Initialized
INFO - 2025-06-25 10:53:56 --> Email Class Initialized
DEBUG - 2025-06-25 10:53:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:53:56 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:53:56 --> Controller Class Initialized
INFO - 2025-06-25 10:53:56 --> Helper loaded: form_helper
INFO - 2025-06-25 10:53:56 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:53:56 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:53:56 --> Database Driver Class Initialized
INFO - 2025-06-25 10:53:56 --> Email Class Initialized
DEBUG - 2025-06-25 10:53:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:53:56 --> Model "Crud" initialized
INFO - 2025-06-25 10:53:56 --> Final output sent to browser
DEBUG - 2025-06-25 10:53:56 --> Total execution time: 0.0375
INFO - 2025-06-25 10:53:56 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:53:56 --> Controller Class Initialized
INFO - 2025-06-25 10:53:56 --> Helper loaded: form_helper
INFO - 2025-06-25 10:53:56 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:53:56 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:53:56 --> Database Driver Class Initialized
INFO - 2025-06-25 10:53:56 --> Model "Crud" initialized
INFO - 2025-06-25 10:53:56 --> Final output sent to browser
DEBUG - 2025-06-25 10:53:56 --> Total execution time: 0.0615
INFO - 2025-06-25 10:54:06 --> Config Class Initialized
INFO - 2025-06-25 10:54:06 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:54:06 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:54:06 --> Utf8 Class Initialized
INFO - 2025-06-25 10:54:06 --> URI Class Initialized
INFO - 2025-06-25 10:54:06 --> Router Class Initialized
INFO - 2025-06-25 10:54:06 --> Output Class Initialized
INFO - 2025-06-25 10:54:06 --> Security Class Initialized
DEBUG - 2025-06-25 10:54:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:54:06 --> Input Class Initialized
INFO - 2025-06-25 10:54:06 --> Language Class Initialized
INFO - 2025-06-25 10:54:06 --> Loader Class Initialized
INFO - 2025-06-25 10:54:06 --> Helper loaded: url_helper
INFO - 2025-06-25 10:54:06 --> Helper loaded: file_helper
INFO - 2025-06-25 10:54:06 --> Database Driver Class Initialized
INFO - 2025-06-25 10:54:06 --> Config Class Initialized
INFO - 2025-06-25 10:54:06 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:54:06 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:54:06 --> Utf8 Class Initialized
INFO - 2025-06-25 10:54:06 --> URI Class Initialized
INFO - 2025-06-25 10:54:06 --> Router Class Initialized
INFO - 2025-06-25 10:54:06 --> Output Class Initialized
INFO - 2025-06-25 10:54:06 --> Security Class Initialized
DEBUG - 2025-06-25 10:54:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:54:06 --> Input Class Initialized
INFO - 2025-06-25 10:54:06 --> Language Class Initialized
INFO - 2025-06-25 10:54:06 --> Loader Class Initialized
INFO - 2025-06-25 10:54:06 --> Helper loaded: url_helper
INFO - 2025-06-25 10:54:06 --> Helper loaded: file_helper
INFO - 2025-06-25 10:54:06 --> Database Driver Class Initialized
INFO - 2025-06-25 10:54:06 --> Email Class Initialized
INFO - 2025-06-25 10:54:06 --> Email Class Initialized
DEBUG - 2025-06-25 10:54:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:54:06 --> Session: Class initialized using 'files' driver.
DEBUG - 2025-06-25 10:54:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:54:06 --> Controller Class Initialized
INFO - 2025-06-25 10:54:06 --> Helper loaded: form_helper
INFO - 2025-06-25 10:54:06 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:54:06 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:54:06 --> Database Driver Class Initialized
INFO - 2025-06-25 10:54:06 --> Model "Crud" initialized
INFO - 2025-06-25 10:54:06 --> Final output sent to browser
DEBUG - 2025-06-25 10:54:06 --> Total execution time: 0.0497
INFO - 2025-06-25 10:54:06 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:54:06 --> Controller Class Initialized
INFO - 2025-06-25 10:54:06 --> Helper loaded: form_helper
INFO - 2025-06-25 10:54:06 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:54:06 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:54:06 --> Database Driver Class Initialized
INFO - 2025-06-25 10:54:06 --> Model "Crud" initialized
INFO - 2025-06-25 10:54:06 --> Final output sent to browser
DEBUG - 2025-06-25 10:54:06 --> Total execution time: 0.0806
INFO - 2025-06-25 10:54:17 --> Config Class Initialized
INFO - 2025-06-25 10:54:17 --> Hooks Class Initialized
DEBUG - 2025-06-25 10:54:17 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:54:17 --> Utf8 Class Initialized
INFO - 2025-06-25 10:54:17 --> URI Class Initialized
INFO - 2025-06-25 10:54:17 --> Router Class Initialized
INFO - 2025-06-25 10:54:17 --> Output Class Initialized
INFO - 2025-06-25 10:54:17 --> Security Class Initialized
DEBUG - 2025-06-25 10:54:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:54:17 --> Input Class Initialized
INFO - 2025-06-25 10:54:17 --> Language Class Initialized
INFO - 2025-06-25 10:54:17 --> Loader Class Initialized
INFO - 2025-06-25 10:54:17 --> Helper loaded: url_helper
INFO - 2025-06-25 10:54:17 --> Helper loaded: file_helper
INFO - 2025-06-25 10:54:17 --> Config Class Initialized
INFO - 2025-06-25 10:54:17 --> Hooks Class Initialized
INFO - 2025-06-25 10:54:17 --> Database Driver Class Initialized
DEBUG - 2025-06-25 10:54:17 --> UTF-8 Support Enabled
INFO - 2025-06-25 10:54:17 --> Utf8 Class Initialized
INFO - 2025-06-25 10:54:17 --> URI Class Initialized
INFO - 2025-06-25 10:54:17 --> Router Class Initialized
INFO - 2025-06-25 10:54:17 --> Output Class Initialized
INFO - 2025-06-25 10:54:17 --> Security Class Initialized
DEBUG - 2025-06-25 10:54:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 10:54:17 --> Input Class Initialized
INFO - 2025-06-25 10:54:17 --> Language Class Initialized
INFO - 2025-06-25 10:54:17 --> Loader Class Initialized
INFO - 2025-06-25 10:54:17 --> Helper loaded: url_helper
INFO - 2025-06-25 10:54:17 --> Helper loaded: file_helper
INFO - 2025-06-25 10:54:17 --> Database Driver Class Initialized
INFO - 2025-06-25 10:54:17 --> Email Class Initialized
DEBUG - 2025-06-25 10:54:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:54:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:54:17 --> Controller Class Initialized
INFO - 2025-06-25 10:54:17 --> Helper loaded: form_helper
INFO - 2025-06-25 10:54:17 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:54:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:54:17 --> Database Driver Class Initialized
INFO - 2025-06-25 10:54:17 --> Email Class Initialized
DEBUG - 2025-06-25 10:54:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 10:54:17 --> Model "Crud" initialized
INFO - 2025-06-25 10:54:17 --> Final output sent to browser
DEBUG - 2025-06-25 10:54:17 --> Total execution time: 0.0342
INFO - 2025-06-25 10:54:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 10:54:17 --> Controller Class Initialized
INFO - 2025-06-25 10:54:17 --> Helper loaded: form_helper
INFO - 2025-06-25 10:54:17 --> Form Validation Class Initialized
DEBUG - 2025-06-25 10:54:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 10:54:17 --> Database Driver Class Initialized
INFO - 2025-06-25 10:54:17 --> Model "Crud" initialized
INFO - 2025-06-25 10:54:17 --> Final output sent to browser
DEBUG - 2025-06-25 10:54:17 --> Total execution time: 0.0607
INFO - 2025-06-25 11:42:27 --> Config Class Initialized
INFO - 2025-06-25 11:42:27 --> Hooks Class Initialized
INFO - 2025-06-25 11:42:27 --> Config Class Initialized
INFO - 2025-06-25 11:42:27 --> Hooks Class Initialized
DEBUG - 2025-06-25 11:42:27 --> UTF-8 Support Enabled
INFO - 2025-06-25 11:42:27 --> Utf8 Class Initialized
DEBUG - 2025-06-25 11:42:27 --> UTF-8 Support Enabled
INFO - 2025-06-25 11:42:27 --> Utf8 Class Initialized
INFO - 2025-06-25 11:42:27 --> URI Class Initialized
INFO - 2025-06-25 11:42:27 --> Router Class Initialized
INFO - 2025-06-25 11:42:27 --> Output Class Initialized
INFO - 2025-06-25 11:42:27 --> URI Class Initialized
INFO - 2025-06-25 11:42:27 --> Security Class Initialized
INFO - 2025-06-25 11:42:27 --> Router Class Initialized
INFO - 2025-06-25 11:42:27 --> Output Class Initialized
INFO - 2025-06-25 11:42:27 --> Security Class Initialized
DEBUG - 2025-06-25 11:42:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 11:42:27 --> Input Class Initialized
INFO - 2025-06-25 11:42:27 --> Language Class Initialized
DEBUG - 2025-06-25 11:42:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 11:42:27 --> Input Class Initialized
INFO - 2025-06-25 11:42:27 --> Language Class Initialized
INFO - 2025-06-25 11:42:27 --> Loader Class Initialized
INFO - 2025-06-25 11:42:27 --> Loader Class Initialized
INFO - 2025-06-25 11:42:27 --> Helper loaded: url_helper
INFO - 2025-06-25 11:42:27 --> Helper loaded: file_helper
INFO - 2025-06-25 11:42:27 --> Helper loaded: url_helper
INFO - 2025-06-25 11:42:27 --> Helper loaded: file_helper
INFO - 2025-06-25 11:42:27 --> Database Driver Class Initialized
INFO - 2025-06-25 11:42:27 --> Database Driver Class Initialized
INFO - 2025-06-25 11:42:27 --> Email Class Initialized
INFO - 2025-06-25 11:42:27 --> Email Class Initialized
DEBUG - 2025-06-25 11:42:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-25 11:42:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 11:42:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 11:42:27 --> Controller Class Initialized
INFO - 2025-06-25 11:42:27 --> Helper loaded: form_helper
INFO - 2025-06-25 11:42:27 --> Form Validation Class Initialized
DEBUG - 2025-06-25 11:42:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 11:42:27 --> Database Driver Class Initialized
INFO - 2025-06-25 11:42:27 --> Model "Crud" initialized
INFO - 2025-06-25 11:42:27 --> Final output sent to browser
DEBUG - 2025-06-25 11:42:27 --> Total execution time: 0.4772
INFO - 2025-06-25 11:42:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 11:42:27 --> Controller Class Initialized
INFO - 2025-06-25 11:42:27 --> Helper loaded: form_helper
INFO - 2025-06-25 11:42:27 --> Form Validation Class Initialized
DEBUG - 2025-06-25 11:42:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 11:42:27 --> Database Driver Class Initialized
INFO - 2025-06-25 11:42:27 --> Model "Crud" initialized
INFO - 2025-06-25 11:42:27 --> Final output sent to browser
DEBUG - 2025-06-25 11:42:27 --> Total execution time: 0.6415
INFO - 2025-06-25 11:42:37 --> Config Class Initialized
INFO - 2025-06-25 11:42:37 --> Config Class Initialized
INFO - 2025-06-25 11:42:37 --> Hooks Class Initialized
INFO - 2025-06-25 11:42:37 --> Hooks Class Initialized
DEBUG - 2025-06-25 11:42:37 --> UTF-8 Support Enabled
DEBUG - 2025-06-25 11:42:37 --> UTF-8 Support Enabled
INFO - 2025-06-25 11:42:37 --> Utf8 Class Initialized
INFO - 2025-06-25 11:42:37 --> Utf8 Class Initialized
INFO - 2025-06-25 11:42:37 --> URI Class Initialized
INFO - 2025-06-25 11:42:37 --> URI Class Initialized
INFO - 2025-06-25 11:42:37 --> Router Class Initialized
INFO - 2025-06-25 11:42:37 --> Router Class Initialized
INFO - 2025-06-25 11:42:37 --> Output Class Initialized
INFO - 2025-06-25 11:42:37 --> Output Class Initialized
INFO - 2025-06-25 11:42:37 --> Security Class Initialized
INFO - 2025-06-25 11:42:37 --> Security Class Initialized
DEBUG - 2025-06-25 11:42:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-25 11:42:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 11:42:37 --> Input Class Initialized
INFO - 2025-06-25 11:42:37 --> Input Class Initialized
INFO - 2025-06-25 11:42:37 --> Language Class Initialized
INFO - 2025-06-25 11:42:37 --> Language Class Initialized
INFO - 2025-06-25 11:42:37 --> Loader Class Initialized
INFO - 2025-06-25 11:42:37 --> Loader Class Initialized
INFO - 2025-06-25 11:42:37 --> Helper loaded: url_helper
INFO - 2025-06-25 11:42:37 --> Helper loaded: url_helper
INFO - 2025-06-25 11:42:37 --> Helper loaded: file_helper
INFO - 2025-06-25 11:42:37 --> Helper loaded: file_helper
INFO - 2025-06-25 11:42:37 --> Database Driver Class Initialized
INFO - 2025-06-25 11:42:37 --> Database Driver Class Initialized
INFO - 2025-06-25 11:42:37 --> Email Class Initialized
DEBUG - 2025-06-25 11:42:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 11:42:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 11:42:37 --> Controller Class Initialized
INFO - 2025-06-25 11:42:37 --> Helper loaded: form_helper
INFO - 2025-06-25 11:42:37 --> Form Validation Class Initialized
DEBUG - 2025-06-25 11:42:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 11:42:37 --> Database Driver Class Initialized
INFO - 2025-06-25 11:42:37 --> Email Class Initialized
DEBUG - 2025-06-25 11:42:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 11:42:37 --> Model "Crud" initialized
INFO - 2025-06-25 11:42:37 --> Final output sent to browser
DEBUG - 2025-06-25 11:42:37 --> Total execution time: 0.0883
INFO - 2025-06-25 11:42:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 11:42:37 --> Controller Class Initialized
INFO - 2025-06-25 11:42:37 --> Helper loaded: form_helper
INFO - 2025-06-25 11:42:37 --> Form Validation Class Initialized
DEBUG - 2025-06-25 11:42:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 11:42:37 --> Database Driver Class Initialized
INFO - 2025-06-25 11:42:37 --> Model "Crud" initialized
INFO - 2025-06-25 11:42:37 --> Final output sent to browser
DEBUG - 2025-06-25 11:42:37 --> Total execution time: 0.1486
INFO - 2025-06-25 11:46:10 --> Config Class Initialized
INFO - 2025-06-25 11:46:10 --> Config Class Initialized
INFO - 2025-06-25 11:46:10 --> Hooks Class Initialized
INFO - 2025-06-25 11:46:10 --> Hooks Class Initialized
DEBUG - 2025-06-25 11:46:10 --> UTF-8 Support Enabled
DEBUG - 2025-06-25 11:46:10 --> UTF-8 Support Enabled
INFO - 2025-06-25 11:46:10 --> Utf8 Class Initialized
INFO - 2025-06-25 11:46:10 --> Utf8 Class Initialized
INFO - 2025-06-25 11:46:10 --> URI Class Initialized
INFO - 2025-06-25 11:46:10 --> URI Class Initialized
INFO - 2025-06-25 11:46:10 --> Router Class Initialized
INFO - 2025-06-25 11:46:10 --> Router Class Initialized
INFO - 2025-06-25 11:46:10 --> Output Class Initialized
INFO - 2025-06-25 11:46:10 --> Output Class Initialized
INFO - 2025-06-25 11:46:10 --> Security Class Initialized
INFO - 2025-06-25 11:46:10 --> Security Class Initialized
DEBUG - 2025-06-25 11:46:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 11:46:10 --> Input Class Initialized
INFO - 2025-06-25 11:46:10 --> Language Class Initialized
DEBUG - 2025-06-25 11:46:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 11:46:10 --> Input Class Initialized
INFO - 2025-06-25 11:46:10 --> Language Class Initialized
INFO - 2025-06-25 11:46:10 --> Loader Class Initialized
INFO - 2025-06-25 11:46:10 --> Loader Class Initialized
INFO - 2025-06-25 11:46:10 --> Helper loaded: url_helper
INFO - 2025-06-25 11:46:10 --> Helper loaded: file_helper
INFO - 2025-06-25 11:46:10 --> Helper loaded: url_helper
INFO - 2025-06-25 11:46:10 --> Helper loaded: file_helper
INFO - 2025-06-25 11:46:10 --> Database Driver Class Initialized
INFO - 2025-06-25 11:46:10 --> Database Driver Class Initialized
INFO - 2025-06-25 11:46:10 --> Email Class Initialized
DEBUG - 2025-06-25 11:46:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 11:46:10 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 11:46:10 --> Controller Class Initialized
INFO - 2025-06-25 11:46:10 --> Helper loaded: form_helper
INFO - 2025-06-25 11:46:10 --> Form Validation Class Initialized
DEBUG - 2025-06-25 11:46:10 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 11:46:10 --> Database Driver Class Initialized
INFO - 2025-06-25 11:46:10 --> Email Class Initialized
DEBUG - 2025-06-25 11:46:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 11:46:10 --> Model "Crud" initialized
INFO - 2025-06-25 11:46:10 --> Final output sent to browser
DEBUG - 2025-06-25 11:46:10 --> Total execution time: 0.0554
INFO - 2025-06-25 11:46:10 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 11:46:10 --> Controller Class Initialized
INFO - 2025-06-25 11:46:10 --> Helper loaded: form_helper
INFO - 2025-06-25 11:46:10 --> Form Validation Class Initialized
DEBUG - 2025-06-25 11:46:10 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 11:46:10 --> Database Driver Class Initialized
INFO - 2025-06-25 11:46:10 --> Model "Crud" initialized
INFO - 2025-06-25 11:46:10 --> Final output sent to browser
DEBUG - 2025-06-25 11:46:10 --> Total execution time: 0.0835
INFO - 2025-06-25 11:46:17 --> Config Class Initialized
INFO - 2025-06-25 11:46:17 --> Hooks Class Initialized
DEBUG - 2025-06-25 11:46:17 --> UTF-8 Support Enabled
INFO - 2025-06-25 11:46:17 --> Utf8 Class Initialized
INFO - 2025-06-25 11:46:17 --> URI Class Initialized
INFO - 2025-06-25 11:46:17 --> Router Class Initialized
INFO - 2025-06-25 11:46:17 --> Output Class Initialized
INFO - 2025-06-25 11:46:17 --> Security Class Initialized
INFO - 2025-06-25 11:46:17 --> Config Class Initialized
INFO - 2025-06-25 11:46:17 --> Hooks Class Initialized
DEBUG - 2025-06-25 11:46:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 11:46:17 --> Input Class Initialized
INFO - 2025-06-25 11:46:17 --> Language Class Initialized
DEBUG - 2025-06-25 11:46:17 --> UTF-8 Support Enabled
INFO - 2025-06-25 11:46:17 --> Utf8 Class Initialized
INFO - 2025-06-25 11:46:17 --> URI Class Initialized
INFO - 2025-06-25 11:46:17 --> Router Class Initialized
INFO - 2025-06-25 11:46:17 --> Output Class Initialized
INFO - 2025-06-25 11:46:17 --> Security Class Initialized
INFO - 2025-06-25 11:46:17 --> Loader Class Initialized
DEBUG - 2025-06-25 11:46:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 11:46:17 --> Helper loaded: url_helper
INFO - 2025-06-25 11:46:17 --> Input Class Initialized
INFO - 2025-06-25 11:46:17 --> Helper loaded: file_helper
INFO - 2025-06-25 11:46:17 --> Language Class Initialized
INFO - 2025-06-25 11:46:17 --> Loader Class Initialized
INFO - 2025-06-25 11:46:17 --> Helper loaded: url_helper
INFO - 2025-06-25 11:46:17 --> Helper loaded: file_helper
INFO - 2025-06-25 11:46:17 --> Database Driver Class Initialized
INFO - 2025-06-25 11:46:17 --> Database Driver Class Initialized
INFO - 2025-06-25 11:46:17 --> Email Class Initialized
DEBUG - 2025-06-25 11:46:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 11:46:17 --> Email Class Initialized
INFO - 2025-06-25 11:46:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 11:46:17 --> Controller Class Initialized
DEBUG - 2025-06-25 11:46:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 11:46:17 --> Helper loaded: form_helper
INFO - 2025-06-25 11:46:17 --> Form Validation Class Initialized
DEBUG - 2025-06-25 11:46:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 11:46:17 --> Database Driver Class Initialized
INFO - 2025-06-25 11:46:17 --> Model "Crud" initialized
INFO - 2025-06-25 11:46:17 --> Final output sent to browser
DEBUG - 2025-06-25 11:46:17 --> Total execution time: 0.0374
INFO - 2025-06-25 11:46:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 11:46:17 --> Controller Class Initialized
INFO - 2025-06-25 11:46:17 --> Helper loaded: form_helper
INFO - 2025-06-25 11:46:17 --> Form Validation Class Initialized
DEBUG - 2025-06-25 11:46:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 11:46:17 --> Database Driver Class Initialized
INFO - 2025-06-25 11:46:17 --> Model "Crud" initialized
INFO - 2025-06-25 11:46:17 --> Final output sent to browser
DEBUG - 2025-06-25 11:46:17 --> Total execution time: 0.0729
INFO - 2025-06-25 11:52:21 --> Config Class Initialized
INFO - 2025-06-25 11:52:21 --> Hooks Class Initialized
INFO - 2025-06-25 11:52:21 --> Config Class Initialized
INFO - 2025-06-25 11:52:21 --> Hooks Class Initialized
DEBUG - 2025-06-25 11:52:21 --> UTF-8 Support Enabled
DEBUG - 2025-06-25 11:52:21 --> UTF-8 Support Enabled
INFO - 2025-06-25 11:52:21 --> Utf8 Class Initialized
INFO - 2025-06-25 11:52:21 --> Utf8 Class Initialized
INFO - 2025-06-25 11:52:21 --> URI Class Initialized
INFO - 2025-06-25 11:52:21 --> URI Class Initialized
INFO - 2025-06-25 11:52:21 --> Router Class Initialized
INFO - 2025-06-25 11:52:21 --> Router Class Initialized
INFO - 2025-06-25 11:52:21 --> Output Class Initialized
INFO - 2025-06-25 11:52:21 --> Output Class Initialized
INFO - 2025-06-25 11:52:21 --> Security Class Initialized
INFO - 2025-06-25 11:52:21 --> Security Class Initialized
DEBUG - 2025-06-25 11:52:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 11:52:21 --> Input Class Initialized
DEBUG - 2025-06-25 11:52:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 11:52:21 --> Language Class Initialized
INFO - 2025-06-25 11:52:21 --> Input Class Initialized
INFO - 2025-06-25 11:52:21 --> Language Class Initialized
INFO - 2025-06-25 11:52:21 --> Loader Class Initialized
INFO - 2025-06-25 11:52:21 --> Loader Class Initialized
INFO - 2025-06-25 11:52:21 --> Helper loaded: url_helper
INFO - 2025-06-25 11:52:21 --> Helper loaded: file_helper
INFO - 2025-06-25 11:52:21 --> Helper loaded: url_helper
INFO - 2025-06-25 11:52:21 --> Helper loaded: file_helper
INFO - 2025-06-25 11:52:21 --> Database Driver Class Initialized
INFO - 2025-06-25 11:52:21 --> Database Driver Class Initialized
INFO - 2025-06-25 11:52:21 --> Email Class Initialized
DEBUG - 2025-06-25 11:52:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 11:52:21 --> Email Class Initialized
DEBUG - 2025-06-25 11:52:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 11:52:21 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 11:52:21 --> Controller Class Initialized
INFO - 2025-06-25 11:52:21 --> Helper loaded: form_helper
INFO - 2025-06-25 11:52:21 --> Form Validation Class Initialized
DEBUG - 2025-06-25 11:52:21 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 11:52:21 --> Database Driver Class Initialized
INFO - 2025-06-25 11:52:21 --> Model "Crud" initialized
INFO - 2025-06-25 11:52:21 --> Final output sent to browser
DEBUG - 2025-06-25 11:52:21 --> Total execution time: 0.0330
INFO - 2025-06-25 11:52:21 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 11:52:21 --> Controller Class Initialized
INFO - 2025-06-25 11:52:21 --> Helper loaded: form_helper
INFO - 2025-06-25 11:52:21 --> Form Validation Class Initialized
DEBUG - 2025-06-25 11:52:21 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 11:52:21 --> Database Driver Class Initialized
INFO - 2025-06-25 11:52:21 --> Model "Crud" initialized
INFO - 2025-06-25 11:52:21 --> Final output sent to browser
DEBUG - 2025-06-25 11:52:21 --> Total execution time: 0.0548
INFO - 2025-06-25 11:52:27 --> Config Class Initialized
INFO - 2025-06-25 11:52:27 --> Hooks Class Initialized
DEBUG - 2025-06-25 11:52:27 --> UTF-8 Support Enabled
INFO - 2025-06-25 11:52:27 --> Utf8 Class Initialized
INFO - 2025-06-25 11:52:27 --> URI Class Initialized
INFO - 2025-06-25 11:52:27 --> Router Class Initialized
INFO - 2025-06-25 11:52:27 --> Config Class Initialized
INFO - 2025-06-25 11:52:27 --> Output Class Initialized
INFO - 2025-06-25 11:52:27 --> Hooks Class Initialized
INFO - 2025-06-25 11:52:27 --> Security Class Initialized
DEBUG - 2025-06-25 11:52:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 11:52:27 --> Input Class Initialized
INFO - 2025-06-25 11:52:27 --> Language Class Initialized
DEBUG - 2025-06-25 11:52:27 --> UTF-8 Support Enabled
INFO - 2025-06-25 11:52:27 --> Utf8 Class Initialized
INFO - 2025-06-25 11:52:27 --> Loader Class Initialized
INFO - 2025-06-25 11:52:27 --> Helper loaded: url_helper
INFO - 2025-06-25 11:52:27 --> Helper loaded: file_helper
INFO - 2025-06-25 11:52:27 --> URI Class Initialized
INFO - 2025-06-25 11:52:27 --> Router Class Initialized
INFO - 2025-06-25 11:52:27 --> Output Class Initialized
INFO - 2025-06-25 11:52:27 --> Security Class Initialized
DEBUG - 2025-06-25 11:52:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 11:52:27 --> Input Class Initialized
INFO - 2025-06-25 11:52:27 --> Database Driver Class Initialized
INFO - 2025-06-25 11:52:27 --> Language Class Initialized
INFO - 2025-06-25 11:52:27 --> Loader Class Initialized
INFO - 2025-06-25 11:52:27 --> Helper loaded: url_helper
INFO - 2025-06-25 11:52:27 --> Helper loaded: file_helper
INFO - 2025-06-25 11:52:27 --> Database Driver Class Initialized
INFO - 2025-06-25 11:52:27 --> Email Class Initialized
INFO - 2025-06-25 11:52:27 --> Email Class Initialized
DEBUG - 2025-06-25 11:52:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-25 11:52:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 11:52:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 11:52:27 --> Controller Class Initialized
INFO - 2025-06-25 11:52:27 --> Helper loaded: form_helper
INFO - 2025-06-25 11:52:27 --> Form Validation Class Initialized
DEBUG - 2025-06-25 11:52:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 11:52:27 --> Database Driver Class Initialized
INFO - 2025-06-25 11:52:27 --> Model "Crud" initialized
INFO - 2025-06-25 11:52:27 --> Final output sent to browser
DEBUG - 2025-06-25 11:52:27 --> Total execution time: 0.0593
INFO - 2025-06-25 11:52:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 11:52:27 --> Controller Class Initialized
INFO - 2025-06-25 11:52:27 --> Helper loaded: form_helper
INFO - 2025-06-25 11:52:27 --> Form Validation Class Initialized
DEBUG - 2025-06-25 11:52:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 11:52:27 --> Database Driver Class Initialized
INFO - 2025-06-25 11:52:27 --> Model "Crud" initialized
INFO - 2025-06-25 11:52:27 --> Final output sent to browser
DEBUG - 2025-06-25 11:52:27 --> Total execution time: 0.1439
INFO - 2025-06-25 13:15:04 --> Config Class Initialized
INFO - 2025-06-25 13:15:04 --> Config Class Initialized
INFO - 2025-06-25 13:15:04 --> Hooks Class Initialized
INFO - 2025-06-25 13:15:04 --> Hooks Class Initialized
DEBUG - 2025-06-25 13:15:04 --> UTF-8 Support Enabled
INFO - 2025-06-25 13:15:04 --> Utf8 Class Initialized
DEBUG - 2025-06-25 13:15:04 --> UTF-8 Support Enabled
INFO - 2025-06-25 13:15:04 --> Utf8 Class Initialized
INFO - 2025-06-25 13:15:04 --> URI Class Initialized
INFO - 2025-06-25 13:15:04 --> URI Class Initialized
INFO - 2025-06-25 13:15:04 --> Router Class Initialized
INFO - 2025-06-25 13:15:04 --> Router Class Initialized
INFO - 2025-06-25 13:15:04 --> Output Class Initialized
INFO - 2025-06-25 13:15:04 --> Output Class Initialized
INFO - 2025-06-25 13:15:04 --> Security Class Initialized
INFO - 2025-06-25 13:15:04 --> Security Class Initialized
DEBUG - 2025-06-25 13:15:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 13:15:04 --> Input Class Initialized
DEBUG - 2025-06-25 13:15:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 13:15:04 --> Input Class Initialized
INFO - 2025-06-25 13:15:04 --> Language Class Initialized
INFO - 2025-06-25 13:15:04 --> Language Class Initialized
INFO - 2025-06-25 13:15:04 --> Loader Class Initialized
INFO - 2025-06-25 13:15:04 --> Loader Class Initialized
INFO - 2025-06-25 13:15:04 --> Helper loaded: url_helper
INFO - 2025-06-25 13:15:04 --> Helper loaded: url_helper
INFO - 2025-06-25 13:15:04 --> Helper loaded: file_helper
INFO - 2025-06-25 13:15:04 --> Helper loaded: file_helper
INFO - 2025-06-25 13:15:04 --> Database Driver Class Initialized
INFO - 2025-06-25 13:15:04 --> Database Driver Class Initialized
INFO - 2025-06-25 13:15:04 --> Email Class Initialized
INFO - 2025-06-25 13:15:04 --> Email Class Initialized
DEBUG - 2025-06-25 13:15:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-25 13:15:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 13:15:04 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 13:15:04 --> Controller Class Initialized
INFO - 2025-06-25 13:15:04 --> Helper loaded: form_helper
INFO - 2025-06-25 13:15:04 --> Form Validation Class Initialized
DEBUG - 2025-06-25 13:15:04 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 13:15:04 --> Database Driver Class Initialized
INFO - 2025-06-25 13:15:04 --> Model "Crud" initialized
INFO - 2025-06-25 13:15:04 --> Final output sent to browser
DEBUG - 2025-06-25 13:15:04 --> Total execution time: 0.2283
INFO - 2025-06-25 13:15:04 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 13:15:04 --> Controller Class Initialized
INFO - 2025-06-25 13:15:04 --> Helper loaded: form_helper
INFO - 2025-06-25 13:15:04 --> Form Validation Class Initialized
DEBUG - 2025-06-25 13:15:04 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 13:15:04 --> Database Driver Class Initialized
INFO - 2025-06-25 13:15:04 --> Model "Crud" initialized
INFO - 2025-06-25 13:15:04 --> Final output sent to browser
DEBUG - 2025-06-25 13:15:04 --> Total execution time: 0.2660
INFO - 2025-06-25 13:15:06 --> Config Class Initialized
INFO - 2025-06-25 13:15:06 --> Hooks Class Initialized
DEBUG - 2025-06-25 13:15:06 --> UTF-8 Support Enabled
INFO - 2025-06-25 13:15:06 --> Utf8 Class Initialized
INFO - 2025-06-25 13:15:06 --> URI Class Initialized
INFO - 2025-06-25 13:15:06 --> Config Class Initialized
INFO - 2025-06-25 13:15:06 --> Router Class Initialized
INFO - 2025-06-25 13:15:06 --> Hooks Class Initialized
INFO - 2025-06-25 13:15:06 --> Output Class Initialized
DEBUG - 2025-06-25 13:15:06 --> UTF-8 Support Enabled
INFO - 2025-06-25 13:15:06 --> Security Class Initialized
INFO - 2025-06-25 13:15:06 --> Utf8 Class Initialized
DEBUG - 2025-06-25 13:15:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 13:15:06 --> Input Class Initialized
INFO - 2025-06-25 13:15:06 --> URI Class Initialized
INFO - 2025-06-25 13:15:06 --> Language Class Initialized
INFO - 2025-06-25 13:15:06 --> Router Class Initialized
INFO - 2025-06-25 13:15:06 --> Loader Class Initialized
INFO - 2025-06-25 13:15:06 --> Output Class Initialized
INFO - 2025-06-25 13:15:06 --> Helper loaded: url_helper
INFO - 2025-06-25 13:15:06 --> Security Class Initialized
INFO - 2025-06-25 13:15:06 --> Helper loaded: file_helper
DEBUG - 2025-06-25 13:15:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 13:15:06 --> Database Driver Class Initialized
INFO - 2025-06-25 13:15:06 --> Input Class Initialized
INFO - 2025-06-25 13:15:06 --> Language Class Initialized
INFO - 2025-06-25 13:15:06 --> Loader Class Initialized
INFO - 2025-06-25 13:15:06 --> Helper loaded: url_helper
INFO - 2025-06-25 13:15:06 --> Helper loaded: file_helper
INFO - 2025-06-25 13:15:06 --> Database Driver Class Initialized
INFO - 2025-06-25 13:15:06 --> Email Class Initialized
DEBUG - 2025-06-25 13:15:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 13:15:06 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 13:15:06 --> Controller Class Initialized
INFO - 2025-06-25 13:15:06 --> Helper loaded: form_helper
INFO - 2025-06-25 13:15:06 --> Form Validation Class Initialized
INFO - 2025-06-25 13:15:06 --> Email Class Initialized
DEBUG - 2025-06-25 13:15:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 13:15:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 13:15:06 --> Database Driver Class Initialized
INFO - 2025-06-25 13:15:06 --> Model "Crud" initialized
INFO - 2025-06-25 13:15:06 --> Final output sent to browser
DEBUG - 2025-06-25 13:15:06 --> Total execution time: 0.0300
INFO - 2025-06-25 13:15:06 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 13:15:06 --> Controller Class Initialized
INFO - 2025-06-25 13:15:06 --> Helper loaded: form_helper
INFO - 2025-06-25 13:15:06 --> Form Validation Class Initialized
DEBUG - 2025-06-25 13:15:06 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 13:15:06 --> Database Driver Class Initialized
INFO - 2025-06-25 13:15:06 --> Model "Crud" initialized
INFO - 2025-06-25 13:15:06 --> Final output sent to browser
DEBUG - 2025-06-25 13:15:06 --> Total execution time: 0.0534
INFO - 2025-06-25 13:15:08 --> Config Class Initialized
INFO - 2025-06-25 13:15:08 --> Hooks Class Initialized
DEBUG - 2025-06-25 13:15:08 --> UTF-8 Support Enabled
INFO - 2025-06-25 13:15:08 --> Utf8 Class Initialized
INFO - 2025-06-25 13:15:08 --> URI Class Initialized
INFO - 2025-06-25 13:15:08 --> Router Class Initialized
INFO - 2025-06-25 13:15:08 --> Output Class Initialized
INFO - 2025-06-25 13:15:08 --> Security Class Initialized
DEBUG - 2025-06-25 13:15:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 13:15:08 --> Input Class Initialized
INFO - 2025-06-25 13:15:08 --> Language Class Initialized
INFO - 2025-06-25 13:15:08 --> Loader Class Initialized
INFO - 2025-06-25 13:15:08 --> Helper loaded: url_helper
INFO - 2025-06-25 13:15:08 --> Helper loaded: file_helper
INFO - 2025-06-25 13:15:08 --> Database Driver Class Initialized
INFO - 2025-06-25 13:15:08 --> Email Class Initialized
DEBUG - 2025-06-25 13:15:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 13:15:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 13:15:08 --> Controller Class Initialized
INFO - 2025-06-25 13:15:08 --> Model "CuriculumModel" initialized
INFO - 2025-06-25 13:15:08 --> Helper loaded: form_helper
INFO - 2025-06-25 13:15:08 --> Form Validation Class Initialized
INFO - 2025-06-25 13:15:08 --> Database Driver Class Initialized
INFO - 2025-06-25 13:15:08 --> Model "Crud" initialized
DEBUG - 2025-06-25 13:15:08 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 13:15:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 13:15:08 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-25 13:15:08 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/curiculum.php
INFO - 2025-06-25 13:15:08 --> Final output sent to browser
DEBUG - 2025-06-25 13:15:08 --> Total execution time: 0.0580
INFO - 2025-06-25 13:15:08 --> Config Class Initialized
INFO - 2025-06-25 13:15:08 --> Hooks Class Initialized
DEBUG - 2025-06-25 13:15:08 --> UTF-8 Support Enabled
INFO - 2025-06-25 13:15:08 --> Utf8 Class Initialized
INFO - 2025-06-25 13:15:08 --> URI Class Initialized
INFO - 2025-06-25 13:15:08 --> Router Class Initialized
INFO - 2025-06-25 13:15:08 --> Output Class Initialized
INFO - 2025-06-25 13:15:08 --> Security Class Initialized
DEBUG - 2025-06-25 13:15:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 13:15:08 --> Input Class Initialized
INFO - 2025-06-25 13:15:08 --> Language Class Initialized
INFO - 2025-06-25 13:15:08 --> Loader Class Initialized
INFO - 2025-06-25 13:15:08 --> Helper loaded: url_helper
INFO - 2025-06-25 13:15:08 --> Helper loaded: file_helper
INFO - 2025-06-25 13:15:08 --> Database Driver Class Initialized
INFO - 2025-06-25 13:15:08 --> Email Class Initialized
DEBUG - 2025-06-25 13:15:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 13:15:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 13:15:08 --> Controller Class Initialized
INFO - 2025-06-25 13:15:08 --> Model "CuriculumModel" initialized
INFO - 2025-06-25 13:15:08 --> Helper loaded: form_helper
INFO - 2025-06-25 13:15:08 --> Form Validation Class Initialized
INFO - 2025-06-25 13:15:08 --> Database Driver Class Initialized
INFO - 2025-06-25 13:15:08 --> Model "Crud" initialized
DEBUG - 2025-06-25 13:15:08 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 13:15:08 --> Session class already loaded. Second attempt ignored.
ERROR - 2025-06-25 13:15:08 --> Query error: Illegal mix of collations (utf8mb4_0900_ai_ci,IMPLICIT) and (utf8mb3_general_ci,COERCIBLE) for operation '=' - Invalid query: SELECT a.* FROM setting_users a JOIN users b ON a.users_id = b.username WHERE a.menus_id='‚ZjXì' and b.username='admin'
INFO - 2025-06-25 13:15:08 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-25 13:15:09 --> Config Class Initialized
INFO - 2025-06-25 13:15:09 --> Hooks Class Initialized
DEBUG - 2025-06-25 13:15:09 --> UTF-8 Support Enabled
INFO - 2025-06-25 13:15:09 --> Utf8 Class Initialized
INFO - 2025-06-25 13:15:09 --> URI Class Initialized
INFO - 2025-06-25 13:15:09 --> Router Class Initialized
INFO - 2025-06-25 13:15:09 --> Output Class Initialized
INFO - 2025-06-25 13:15:09 --> Security Class Initialized
DEBUG - 2025-06-25 13:15:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 13:15:09 --> Input Class Initialized
INFO - 2025-06-25 13:15:09 --> Language Class Initialized
INFO - 2025-06-25 13:15:09 --> Loader Class Initialized
INFO - 2025-06-25 13:15:09 --> Helper loaded: url_helper
INFO - 2025-06-25 13:15:09 --> Helper loaded: file_helper
INFO - 2025-06-25 13:15:09 --> Database Driver Class Initialized
INFO - 2025-06-25 13:15:09 --> Email Class Initialized
DEBUG - 2025-06-25 13:15:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 13:15:09 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 13:15:09 --> Controller Class Initialized
INFO - 2025-06-25 13:15:09 --> Helper loaded: form_helper
INFO - 2025-06-25 13:15:09 --> Form Validation Class Initialized
DEBUG - 2025-06-25 13:15:09 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 13:15:09 --> Database Driver Class Initialized
INFO - 2025-06-25 13:15:09 --> Model "Crud" initialized
INFO - 2025-06-25 13:15:09 --> Final output sent to browser
DEBUG - 2025-06-25 13:15:09 --> Total execution time: 0.0452
INFO - 2025-06-25 13:15:09 --> Config Class Initialized
INFO - 2025-06-25 13:15:09 --> Hooks Class Initialized
DEBUG - 2025-06-25 13:15:09 --> UTF-8 Support Enabled
INFO - 2025-06-25 13:15:09 --> Utf8 Class Initialized
INFO - 2025-06-25 13:15:09 --> URI Class Initialized
INFO - 2025-06-25 13:15:09 --> Router Class Initialized
INFO - 2025-06-25 13:15:09 --> Output Class Initialized
INFO - 2025-06-25 13:15:09 --> Security Class Initialized
DEBUG - 2025-06-25 13:15:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 13:15:09 --> Input Class Initialized
INFO - 2025-06-25 13:15:09 --> Language Class Initialized
INFO - 2025-06-25 13:15:09 --> Loader Class Initialized
INFO - 2025-06-25 13:15:09 --> Helper loaded: url_helper
INFO - 2025-06-25 13:15:09 --> Helper loaded: file_helper
INFO - 2025-06-25 13:15:09 --> Database Driver Class Initialized
INFO - 2025-06-25 13:15:09 --> Email Class Initialized
DEBUG - 2025-06-25 13:15:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 13:15:09 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 13:15:09 --> Controller Class Initialized
INFO - 2025-06-25 13:15:09 --> Model "CuriculumModel" initialized
INFO - 2025-06-25 13:15:09 --> Helper loaded: form_helper
INFO - 2025-06-25 13:15:09 --> Form Validation Class Initialized
INFO - 2025-06-25 13:15:09 --> Database Driver Class Initialized
INFO - 2025-06-25 13:15:09 --> Model "Crud" initialized
DEBUG - 2025-06-25 13:15:09 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-25 13:15:09 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 13:15:09 --> Final output sent to browser
DEBUG - 2025-06-25 13:15:09 --> Total execution time: 0.0963
INFO - 2025-06-25 13:15:17 --> Config Class Initialized
INFO - 2025-06-25 13:15:17 --> Hooks Class Initialized
DEBUG - 2025-06-25 13:15:17 --> UTF-8 Support Enabled
INFO - 2025-06-25 13:15:17 --> Utf8 Class Initialized
INFO - 2025-06-25 13:15:17 --> Config Class Initialized
INFO - 2025-06-25 13:15:17 --> Hooks Class Initialized
DEBUG - 2025-06-25 13:15:17 --> UTF-8 Support Enabled
INFO - 2025-06-25 13:15:17 --> Utf8 Class Initialized
INFO - 2025-06-25 13:15:17 --> URI Class Initialized
INFO - 2025-06-25 13:15:17 --> URI Class Initialized
INFO - 2025-06-25 13:15:17 --> Router Class Initialized
INFO - 2025-06-25 13:15:17 --> Router Class Initialized
INFO - 2025-06-25 13:15:17 --> Output Class Initialized
INFO - 2025-06-25 13:15:17 --> Output Class Initialized
INFO - 2025-06-25 13:15:17 --> Security Class Initialized
INFO - 2025-06-25 13:15:17 --> Security Class Initialized
DEBUG - 2025-06-25 13:15:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 13:15:17 --> Input Class Initialized
INFO - 2025-06-25 13:15:17 --> Language Class Initialized
DEBUG - 2025-06-25 13:15:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 13:15:17 --> Input Class Initialized
INFO - 2025-06-25 13:15:17 --> Language Class Initialized
INFO - 2025-06-25 13:15:17 --> Loader Class Initialized
INFO - 2025-06-25 13:15:17 --> Loader Class Initialized
INFO - 2025-06-25 13:15:17 --> Helper loaded: url_helper
INFO - 2025-06-25 13:15:17 --> Helper loaded: file_helper
INFO - 2025-06-25 13:15:17 --> Helper loaded: url_helper
INFO - 2025-06-25 13:15:17 --> Helper loaded: file_helper
INFO - 2025-06-25 13:15:17 --> Database Driver Class Initialized
INFO - 2025-06-25 13:15:17 --> Database Driver Class Initialized
INFO - 2025-06-25 13:15:17 --> Email Class Initialized
DEBUG - 2025-06-25 13:15:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 13:15:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 13:15:17 --> Controller Class Initialized
INFO - 2025-06-25 13:15:17 --> Helper loaded: form_helper
INFO - 2025-06-25 13:15:17 --> Form Validation Class Initialized
DEBUG - 2025-06-25 13:15:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 13:15:17 --> Email Class Initialized
INFO - 2025-06-25 13:15:17 --> Database Driver Class Initialized
DEBUG - 2025-06-25 13:15:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 13:15:17 --> Model "Crud" initialized
INFO - 2025-06-25 13:15:17 --> Final output sent to browser
DEBUG - 2025-06-25 13:15:17 --> Total execution time: 0.0297
INFO - 2025-06-25 13:15:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 13:15:17 --> Controller Class Initialized
INFO - 2025-06-25 13:15:17 --> Helper loaded: form_helper
INFO - 2025-06-25 13:15:17 --> Form Validation Class Initialized
DEBUG - 2025-06-25 13:15:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 13:15:17 --> Database Driver Class Initialized
INFO - 2025-06-25 13:15:17 --> Model "Crud" initialized
INFO - 2025-06-25 13:15:17 --> Final output sent to browser
DEBUG - 2025-06-25 13:15:17 --> Total execution time: 0.0481
INFO - 2025-06-25 13:15:27 --> Config Class Initialized
INFO - 2025-06-25 13:15:27 --> Hooks Class Initialized
DEBUG - 2025-06-25 13:15:27 --> UTF-8 Support Enabled
INFO - 2025-06-25 13:15:27 --> Utf8 Class Initialized
INFO - 2025-06-25 13:15:27 --> URI Class Initialized
INFO - 2025-06-25 13:15:27 --> Router Class Initialized
INFO - 2025-06-25 13:15:27 --> Output Class Initialized
INFO - 2025-06-25 13:15:27 --> Security Class Initialized
INFO - 2025-06-25 13:15:27 --> Config Class Initialized
INFO - 2025-06-25 13:15:27 --> Hooks Class Initialized
DEBUG - 2025-06-25 13:15:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 13:15:27 --> Input Class Initialized
INFO - 2025-06-25 13:15:27 --> Language Class Initialized
DEBUG - 2025-06-25 13:15:27 --> UTF-8 Support Enabled
INFO - 2025-06-25 13:15:27 --> Utf8 Class Initialized
INFO - 2025-06-25 13:15:27 --> URI Class Initialized
INFO - 2025-06-25 13:15:27 --> Loader Class Initialized
INFO - 2025-06-25 13:15:27 --> Router Class Initialized
INFO - 2025-06-25 13:15:27 --> Output Class Initialized
INFO - 2025-06-25 13:15:27 --> Security Class Initialized
INFO - 2025-06-25 13:15:27 --> Helper loaded: url_helper
INFO - 2025-06-25 13:15:27 --> Helper loaded: file_helper
DEBUG - 2025-06-25 13:15:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 13:15:27 --> Input Class Initialized
INFO - 2025-06-25 13:15:27 --> Language Class Initialized
INFO - 2025-06-25 13:15:27 --> Loader Class Initialized
INFO - 2025-06-25 13:15:27 --> Database Driver Class Initialized
INFO - 2025-06-25 13:15:27 --> Helper loaded: url_helper
INFO - 2025-06-25 13:15:27 --> Helper loaded: file_helper
INFO - 2025-06-25 13:15:27 --> Database Driver Class Initialized
INFO - 2025-06-25 13:15:27 --> Email Class Initialized
DEBUG - 2025-06-25 13:15:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 13:15:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 13:15:27 --> Controller Class Initialized
INFO - 2025-06-25 13:15:27 --> Helper loaded: form_helper
INFO - 2025-06-25 13:15:27 --> Form Validation Class Initialized
DEBUG - 2025-06-25 13:15:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 13:15:27 --> Database Driver Class Initialized
INFO - 2025-06-25 13:15:27 --> Email Class Initialized
DEBUG - 2025-06-25 13:15:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 13:15:27 --> Model "Crud" initialized
INFO - 2025-06-25 13:15:27 --> Final output sent to browser
DEBUG - 2025-06-25 13:15:27 --> Total execution time: 0.0256
INFO - 2025-06-25 13:15:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 13:15:27 --> Controller Class Initialized
INFO - 2025-06-25 13:15:27 --> Helper loaded: form_helper
INFO - 2025-06-25 13:15:27 --> Form Validation Class Initialized
DEBUG - 2025-06-25 13:15:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 13:15:27 --> Database Driver Class Initialized
INFO - 2025-06-25 13:15:27 --> Model "Crud" initialized
INFO - 2025-06-25 13:15:27 --> Final output sent to browser
DEBUG - 2025-06-25 13:15:27 --> Total execution time: 0.0358
INFO - 2025-06-25 13:15:37 --> Config Class Initialized
INFO - 2025-06-25 13:15:37 --> Hooks Class Initialized
DEBUG - 2025-06-25 13:15:37 --> UTF-8 Support Enabled
INFO - 2025-06-25 13:15:37 --> Utf8 Class Initialized
INFO - 2025-06-25 13:15:37 --> Config Class Initialized
INFO - 2025-06-25 13:15:37 --> Hooks Class Initialized
INFO - 2025-06-25 13:15:37 --> URI Class Initialized
DEBUG - 2025-06-25 13:15:37 --> UTF-8 Support Enabled
INFO - 2025-06-25 13:15:37 --> Utf8 Class Initialized
INFO - 2025-06-25 13:15:37 --> Router Class Initialized
INFO - 2025-06-25 13:15:37 --> Output Class Initialized
INFO - 2025-06-25 13:15:37 --> URI Class Initialized
INFO - 2025-06-25 13:15:37 --> Security Class Initialized
DEBUG - 2025-06-25 13:15:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 13:15:37 --> Input Class Initialized
INFO - 2025-06-25 13:15:37 --> Language Class Initialized
INFO - 2025-06-25 13:15:37 --> Router Class Initialized
INFO - 2025-06-25 13:15:37 --> Output Class Initialized
INFO - 2025-06-25 13:15:37 --> Security Class Initialized
DEBUG - 2025-06-25 13:15:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-25 13:15:37 --> Input Class Initialized
INFO - 2025-06-25 13:15:37 --> Language Class Initialized
INFO - 2025-06-25 13:15:37 --> Loader Class Initialized
INFO - 2025-06-25 13:15:37 --> Loader Class Initialized
INFO - 2025-06-25 13:15:37 --> Helper loaded: url_helper
INFO - 2025-06-25 13:15:37 --> Helper loaded: file_helper
INFO - 2025-06-25 13:15:37 --> Helper loaded: url_helper
INFO - 2025-06-25 13:15:37 --> Helper loaded: file_helper
INFO - 2025-06-25 13:15:37 --> Database Driver Class Initialized
INFO - 2025-06-25 13:15:37 --> Database Driver Class Initialized
INFO - 2025-06-25 13:15:37 --> Email Class Initialized
INFO - 2025-06-25 13:15:37 --> Email Class Initialized
DEBUG - 2025-06-25 13:15:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-25 13:15:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-25 13:15:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 13:15:37 --> Controller Class Initialized
INFO - 2025-06-25 13:15:37 --> Helper loaded: form_helper
INFO - 2025-06-25 13:15:37 --> Form Validation Class Initialized
DEBUG - 2025-06-25 13:15:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 13:15:37 --> Database Driver Class Initialized
INFO - 2025-06-25 13:15:37 --> Model "Crud" initialized
INFO - 2025-06-25 13:15:37 --> Final output sent to browser
DEBUG - 2025-06-25 13:15:37 --> Total execution time: 0.0214
INFO - 2025-06-25 13:15:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-25 13:15:37 --> Controller Class Initialized
INFO - 2025-06-25 13:15:37 --> Helper loaded: form_helper
INFO - 2025-06-25 13:15:37 --> Form Validation Class Initialized
DEBUG - 2025-06-25 13:15:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-25 13:15:37 --> Database Driver Class Initialized
INFO - 2025-06-25 13:15:37 --> Model "Crud" initialized
INFO - 2025-06-25 13:15:37 --> Final output sent to browser
DEBUG - 2025-06-25 13:15:37 --> Total execution time: 0.0366
