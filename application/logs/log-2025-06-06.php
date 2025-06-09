<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2025-06-06 09:53:47 --> Config Class Initialized
INFO - 2025-06-06 09:53:47 --> Hooks Class Initialized
DEBUG - 2025-06-06 09:53:47 --> UTF-8 Support Enabled
INFO - 2025-06-06 09:53:47 --> Utf8 Class Initialized
INFO - 2025-06-06 09:53:47 --> URI Class Initialized
INFO - 2025-06-06 09:53:47 --> Router Class Initialized
INFO - 2025-06-06 09:53:47 --> Output Class Initialized
INFO - 2025-06-06 09:53:47 --> Security Class Initialized
DEBUG - 2025-06-06 09:53:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-06 09:53:47 --> Input Class Initialized
INFO - 2025-06-06 09:53:47 --> Language Class Initialized
INFO - 2025-06-06 09:53:47 --> Loader Class Initialized
INFO - 2025-06-06 09:53:47 --> Helper loaded: url_helper
INFO - 2025-06-06 09:53:47 --> Helper loaded: file_helper
INFO - 2025-06-06 09:53:47 --> Database Driver Class Initialized
INFO - 2025-06-06 09:53:47 --> Config Class Initialized
INFO - 2025-06-06 09:53:47 --> Hooks Class Initialized
DEBUG - 2025-06-06 09:53:47 --> UTF-8 Support Enabled
INFO - 2025-06-06 09:53:47 --> Utf8 Class Initialized
INFO - 2025-06-06 09:53:47 --> URI Class Initialized
INFO - 2025-06-06 09:53:47 --> Router Class Initialized
INFO - 2025-06-06 09:53:47 --> Output Class Initialized
INFO - 2025-06-06 09:53:47 --> Security Class Initialized
DEBUG - 2025-06-06 09:53:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-06 09:53:47 --> Input Class Initialized
INFO - 2025-06-06 09:53:47 --> Language Class Initialized
INFO - 2025-06-06 09:53:47 --> Loader Class Initialized
INFO - 2025-06-06 09:53:47 --> Helper loaded: url_helper
INFO - 2025-06-06 09:53:47 --> Helper loaded: file_helper
INFO - 2025-06-06 09:53:47 --> Database Driver Class Initialized
INFO - 2025-06-06 09:53:48 --> Email Class Initialized
DEBUG - 2025-06-06 09:53:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-06 09:53:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-06 09:53:48 --> Controller Class Initialized
INFO - 2025-06-06 09:53:48 --> Helper loaded: form_helper
INFO - 2025-06-06 09:53:48 --> Form Validation Class Initialized
DEBUG - 2025-06-06 09:53:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-06 09:53:48 --> Database Driver Class Initialized
INFO - 2025-06-06 09:53:48 --> Model "Crud" initialized
ERROR - 2025-06-06 09:53:48 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-06 09:53:48 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-06 09:53:48 --> Email Class Initialized
DEBUG - 2025-06-06 09:53:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-06 09:53:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-06 09:53:48 --> Controller Class Initialized
INFO - 2025-06-06 09:53:48 --> Helper loaded: form_helper
INFO - 2025-06-06 09:53:48 --> Form Validation Class Initialized
DEBUG - 2025-06-06 09:53:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-06 09:53:48 --> Database Driver Class Initialized
INFO - 2025-06-06 09:53:48 --> Model "Crud" initialized
ERROR - 2025-06-06 09:53:48 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-06 09:53:48 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-06 16:41:20 --> Config Class Initialized
INFO - 2025-06-06 16:41:20 --> Hooks Class Initialized
DEBUG - 2025-06-06 16:41:20 --> UTF-8 Support Enabled
INFO - 2025-06-06 16:41:20 --> Utf8 Class Initialized
INFO - 2025-06-06 16:41:20 --> Config Class Initialized
INFO - 2025-06-06 16:41:20 --> Hooks Class Initialized
DEBUG - 2025-06-06 16:41:20 --> UTF-8 Support Enabled
INFO - 2025-06-06 16:41:20 --> Utf8 Class Initialized
INFO - 2025-06-06 16:41:20 --> URI Class Initialized
INFO - 2025-06-06 16:41:20 --> URI Class Initialized
INFO - 2025-06-06 16:41:20 --> Router Class Initialized
INFO - 2025-06-06 16:41:20 --> Router Class Initialized
INFO - 2025-06-06 16:41:20 --> Output Class Initialized
INFO - 2025-06-06 16:41:20 --> Output Class Initialized
INFO - 2025-06-06 16:41:20 --> Security Class Initialized
INFO - 2025-06-06 16:41:20 --> Security Class Initialized
DEBUG - 2025-06-06 16:41:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-06 16:41:20 --> Input Class Initialized
INFO - 2025-06-06 16:41:20 --> Language Class Initialized
DEBUG - 2025-06-06 16:41:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-06 16:41:20 --> Input Class Initialized
INFO - 2025-06-06 16:41:20 --> Language Class Initialized
INFO - 2025-06-06 16:41:20 --> Loader Class Initialized
INFO - 2025-06-06 16:41:20 --> Helper loaded: url_helper
INFO - 2025-06-06 16:41:20 --> Loader Class Initialized
INFO - 2025-06-06 16:41:20 --> Helper loaded: url_helper
INFO - 2025-06-06 16:41:20 --> Helper loaded: file_helper
INFO - 2025-06-06 16:41:20 --> Helper loaded: file_helper
INFO - 2025-06-06 16:41:20 --> Database Driver Class Initialized
INFO - 2025-06-06 16:41:20 --> Database Driver Class Initialized
INFO - 2025-06-06 16:41:20 --> Email Class Initialized
INFO - 2025-06-06 16:41:20 --> Email Class Initialized
DEBUG - 2025-06-06 16:41:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-06 16:41:20 --> Session: Class initialized using 'files' driver.
DEBUG - 2025-06-06 16:41:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-06 16:41:20 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-06 16:41:20 --> Controller Class Initialized
INFO - 2025-06-06 16:41:20 --> Controller Class Initialized
INFO - 2025-06-06 16:41:20 --> Helper loaded: form_helper
INFO - 2025-06-06 16:41:20 --> Helper loaded: form_helper
INFO - 2025-06-06 16:41:20 --> Form Validation Class Initialized
DEBUG - 2025-06-06 16:41:20 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-06 16:41:20 --> Form Validation Class Initialized
DEBUG - 2025-06-06 16:41:20 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-06 16:41:20 --> Database Driver Class Initialized
INFO - 2025-06-06 16:41:20 --> Database Driver Class Initialized
INFO - 2025-06-06 16:41:20 --> Model "Crud" initialized
INFO - 2025-06-06 16:41:20 --> Model "Crud" initialized
ERROR - 2025-06-06 16:41:20 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-06 16:41:20 --> Language file loaded: language/english/db_lang.php
ERROR - 2025-06-06 16:41:20 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-06 16:41:20 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-06 16:41:50 --> Config Class Initialized
INFO - 2025-06-06 16:41:50 --> Hooks Class Initialized
DEBUG - 2025-06-06 16:41:50 --> UTF-8 Support Enabled
INFO - 2025-06-06 16:41:50 --> Utf8 Class Initialized
INFO - 2025-06-06 16:41:50 --> URI Class Initialized
INFO - 2025-06-06 16:41:50 --> Router Class Initialized
INFO - 2025-06-06 16:41:50 --> Output Class Initialized
INFO - 2025-06-06 16:41:50 --> Security Class Initialized
DEBUG - 2025-06-06 16:41:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-06 16:41:50 --> Input Class Initialized
INFO - 2025-06-06 16:41:50 --> Language Class Initialized
INFO - 2025-06-06 16:41:50 --> Loader Class Initialized
INFO - 2025-06-06 16:41:50 --> Helper loaded: url_helper
INFO - 2025-06-06 16:41:50 --> Helper loaded: file_helper
INFO - 2025-06-06 16:41:50 --> Database Driver Class Initialized
INFO - 2025-06-06 16:41:50 --> Config Class Initialized
INFO - 2025-06-06 16:41:50 --> Hooks Class Initialized
DEBUG - 2025-06-06 16:41:50 --> UTF-8 Support Enabled
INFO - 2025-06-06 16:41:50 --> Utf8 Class Initialized
INFO - 2025-06-06 16:41:50 --> Email Class Initialized
INFO - 2025-06-06 16:41:50 --> URI Class Initialized
DEBUG - 2025-06-06 16:41:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-06 16:41:50 --> Router Class Initialized
INFO - 2025-06-06 16:41:50 --> Output Class Initialized
INFO - 2025-06-06 16:41:50 --> Security Class Initialized
DEBUG - 2025-06-06 16:41:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-06 16:41:50 --> Input Class Initialized
INFO - 2025-06-06 16:41:50 --> Language Class Initialized
INFO - 2025-06-06 16:41:50 --> Loader Class Initialized
INFO - 2025-06-06 16:41:50 --> Helper loaded: url_helper
INFO - 2025-06-06 16:41:50 --> Helper loaded: file_helper
INFO - 2025-06-06 16:41:50 --> Database Driver Class Initialized
INFO - 2025-06-06 16:41:50 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-06 16:41:50 --> Controller Class Initialized
INFO - 2025-06-06 16:41:50 --> Helper loaded: form_helper
INFO - 2025-06-06 16:41:50 --> Form Validation Class Initialized
DEBUG - 2025-06-06 16:41:50 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-06 16:41:50 --> Database Driver Class Initialized
INFO - 2025-06-06 16:41:50 --> Email Class Initialized
DEBUG - 2025-06-06 16:41:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-06 16:41:50 --> Model "Crud" initialized
ERROR - 2025-06-06 16:41:50 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-06 16:41:50 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-06 16:41:50 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-06 16:41:50 --> Controller Class Initialized
INFO - 2025-06-06 16:41:50 --> Helper loaded: form_helper
INFO - 2025-06-06 16:41:50 --> Form Validation Class Initialized
DEBUG - 2025-06-06 16:41:50 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-06 16:41:50 --> Database Driver Class Initialized
INFO - 2025-06-06 16:41:50 --> Model "Crud" initialized
ERROR - 2025-06-06 16:41:50 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-06 16:41:50 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-06 16:42:49 --> Config Class Initialized
INFO - 2025-06-06 16:42:49 --> Hooks Class Initialized
DEBUG - 2025-06-06 16:42:49 --> UTF-8 Support Enabled
INFO - 2025-06-06 16:42:49 --> Utf8 Class Initialized
INFO - 2025-06-06 16:42:49 --> URI Class Initialized
INFO - 2025-06-06 16:42:49 --> Router Class Initialized
INFO - 2025-06-06 16:42:49 --> Output Class Initialized
INFO - 2025-06-06 16:42:49 --> Security Class Initialized
DEBUG - 2025-06-06 16:42:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-06 16:42:49 --> Input Class Initialized
INFO - 2025-06-06 16:42:49 --> Language Class Initialized
INFO - 2025-06-06 16:42:49 --> Loader Class Initialized
INFO - 2025-06-06 16:42:49 --> Helper loaded: url_helper
INFO - 2025-06-06 16:42:49 --> Helper loaded: file_helper
INFO - 2025-06-06 16:42:49 --> Database Driver Class Initialized
INFO - 2025-06-06 16:42:49 --> Config Class Initialized
INFO - 2025-06-06 16:42:49 --> Hooks Class Initialized
DEBUG - 2025-06-06 16:42:49 --> UTF-8 Support Enabled
INFO - 2025-06-06 16:42:49 --> Utf8 Class Initialized
INFO - 2025-06-06 16:42:49 --> URI Class Initialized
INFO - 2025-06-06 16:42:49 --> Router Class Initialized
INFO - 2025-06-06 16:42:49 --> Output Class Initialized
INFO - 2025-06-06 16:42:49 --> Security Class Initialized
DEBUG - 2025-06-06 16:42:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-06 16:42:49 --> Input Class Initialized
INFO - 2025-06-06 16:42:49 --> Language Class Initialized
INFO - 2025-06-06 16:42:49 --> Loader Class Initialized
INFO - 2025-06-06 16:42:49 --> Helper loaded: url_helper
INFO - 2025-06-06 16:42:49 --> Helper loaded: file_helper
INFO - 2025-06-06 16:42:49 --> Database Driver Class Initialized
INFO - 2025-06-06 16:42:49 --> Email Class Initialized
INFO - 2025-06-06 16:42:49 --> Email Class Initialized
DEBUG - 2025-06-06 16:42:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-06 16:42:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-06 16:42:49 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-06 16:42:49 --> Controller Class Initialized
INFO - 2025-06-06 16:42:49 --> Helper loaded: form_helper
INFO - 2025-06-06 16:42:49 --> Form Validation Class Initialized
DEBUG - 2025-06-06 16:42:49 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-06 16:42:49 --> Database Driver Class Initialized
INFO - 2025-06-06 16:42:49 --> Model "Crud" initialized
ERROR - 2025-06-06 16:42:49 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-06 16:42:49 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-06 16:42:49 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-06 16:42:49 --> Controller Class Initialized
INFO - 2025-06-06 16:42:49 --> Helper loaded: form_helper
INFO - 2025-06-06 16:42:49 --> Form Validation Class Initialized
DEBUG - 2025-06-06 16:42:49 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-06 16:42:49 --> Database Driver Class Initialized
INFO - 2025-06-06 16:42:49 --> Model "Crud" initialized
ERROR - 2025-06-06 16:42:49 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-06 16:42:49 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-06 16:43:49 --> Config Class Initialized
INFO - 2025-06-06 16:43:49 --> Hooks Class Initialized
DEBUG - 2025-06-06 16:43:49 --> UTF-8 Support Enabled
INFO - 2025-06-06 16:43:49 --> Utf8 Class Initialized
INFO - 2025-06-06 16:43:49 --> URI Class Initialized
INFO - 2025-06-06 16:43:49 --> Config Class Initialized
INFO - 2025-06-06 16:43:49 --> Hooks Class Initialized
INFO - 2025-06-06 16:43:49 --> Router Class Initialized
INFO - 2025-06-06 16:43:49 --> Output Class Initialized
DEBUG - 2025-06-06 16:43:49 --> UTF-8 Support Enabled
INFO - 2025-06-06 16:43:49 --> Security Class Initialized
INFO - 2025-06-06 16:43:49 --> Utf8 Class Initialized
DEBUG - 2025-06-06 16:43:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-06 16:43:49 --> Input Class Initialized
INFO - 2025-06-06 16:43:49 --> Language Class Initialized
INFO - 2025-06-06 16:43:49 --> URI Class Initialized
INFO - 2025-06-06 16:43:49 --> Loader Class Initialized
INFO - 2025-06-06 16:43:49 --> Router Class Initialized
INFO - 2025-06-06 16:43:49 --> Output Class Initialized
INFO - 2025-06-06 16:43:49 --> Helper loaded: url_helper
INFO - 2025-06-06 16:43:49 --> Security Class Initialized
INFO - 2025-06-06 16:43:49 --> Helper loaded: file_helper
DEBUG - 2025-06-06 16:43:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-06 16:43:49 --> Input Class Initialized
INFO - 2025-06-06 16:43:49 --> Database Driver Class Initialized
INFO - 2025-06-06 16:43:49 --> Language Class Initialized
INFO - 2025-06-06 16:43:49 --> Loader Class Initialized
INFO - 2025-06-06 16:43:49 --> Helper loaded: url_helper
INFO - 2025-06-06 16:43:49 --> Helper loaded: file_helper
INFO - 2025-06-06 16:43:49 --> Database Driver Class Initialized
INFO - 2025-06-06 16:43:49 --> Email Class Initialized
DEBUG - 2025-06-06 16:43:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-06 16:43:49 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-06 16:43:49 --> Controller Class Initialized
INFO - 2025-06-06 16:43:49 --> Helper loaded: form_helper
INFO - 2025-06-06 16:43:49 --> Form Validation Class Initialized
DEBUG - 2025-06-06 16:43:49 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-06 16:43:49 --> Email Class Initialized
INFO - 2025-06-06 16:43:49 --> Database Driver Class Initialized
DEBUG - 2025-06-06 16:43:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-06 16:43:49 --> Model "Crud" initialized
ERROR - 2025-06-06 16:43:49 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-06 16:43:49 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-06 16:43:49 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-06 16:43:49 --> Controller Class Initialized
INFO - 2025-06-06 16:43:49 --> Helper loaded: form_helper
INFO - 2025-06-06 16:43:49 --> Form Validation Class Initialized
DEBUG - 2025-06-06 16:43:49 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-06 16:43:49 --> Database Driver Class Initialized
INFO - 2025-06-06 16:43:49 --> Model "Crud" initialized
ERROR - 2025-06-06 16:43:49 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-06 16:43:49 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-06 16:44:10 --> Config Class Initialized
INFO - 2025-06-06 16:44:10 --> Hooks Class Initialized
DEBUG - 2025-06-06 16:44:10 --> UTF-8 Support Enabled
INFO - 2025-06-06 16:44:10 --> Utf8 Class Initialized
INFO - 2025-06-06 16:44:10 --> URI Class Initialized
INFO - 2025-06-06 16:44:10 --> Router Class Initialized
INFO - 2025-06-06 16:44:10 --> Output Class Initialized
INFO - 2025-06-06 16:44:10 --> Security Class Initialized
DEBUG - 2025-06-06 16:44:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-06 16:44:10 --> Input Class Initialized
INFO - 2025-06-06 16:44:10 --> Language Class Initialized
INFO - 2025-06-06 16:44:10 --> Loader Class Initialized
INFO - 2025-06-06 16:44:10 --> Helper loaded: url_helper
INFO - 2025-06-06 16:44:10 --> Helper loaded: file_helper
INFO - 2025-06-06 16:44:10 --> Database Driver Class Initialized
INFO - 2025-06-06 16:44:10 --> Config Class Initialized
INFO - 2025-06-06 16:44:10 --> Hooks Class Initialized
DEBUG - 2025-06-06 16:44:10 --> UTF-8 Support Enabled
INFO - 2025-06-06 16:44:10 --> Utf8 Class Initialized
INFO - 2025-06-06 16:44:10 --> URI Class Initialized
INFO - 2025-06-06 16:44:10 --> Router Class Initialized
INFO - 2025-06-06 16:44:10 --> Output Class Initialized
INFO - 2025-06-06 16:44:10 --> Security Class Initialized
DEBUG - 2025-06-06 16:44:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-06 16:44:10 --> Input Class Initialized
INFO - 2025-06-06 16:44:10 --> Language Class Initialized
INFO - 2025-06-06 16:44:10 --> Loader Class Initialized
INFO - 2025-06-06 16:44:10 --> Helper loaded: url_helper
INFO - 2025-06-06 16:44:10 --> Helper loaded: file_helper
INFO - 2025-06-06 16:44:10 --> Database Driver Class Initialized
INFO - 2025-06-06 16:44:10 --> Email Class Initialized
DEBUG - 2025-06-06 16:44:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-06 16:44:10 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-06 16:44:10 --> Controller Class Initialized
INFO - 2025-06-06 16:44:10 --> Helper loaded: form_helper
INFO - 2025-06-06 16:44:10 --> Form Validation Class Initialized
DEBUG - 2025-06-06 16:44:10 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-06 16:44:10 --> Database Driver Class Initialized
INFO - 2025-06-06 16:44:10 --> Model "Crud" initialized
ERROR - 2025-06-06 16:44:10 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-06 16:44:10 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-06 16:44:10 --> Email Class Initialized
DEBUG - 2025-06-06 16:44:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-06 16:44:10 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-06 16:44:10 --> Controller Class Initialized
INFO - 2025-06-06 16:44:10 --> Helper loaded: form_helper
INFO - 2025-06-06 16:44:10 --> Form Validation Class Initialized
DEBUG - 2025-06-06 16:44:10 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-06 16:44:10 --> Database Driver Class Initialized
INFO - 2025-06-06 16:44:11 --> Model "Crud" initialized
ERROR - 2025-06-06 16:44:11 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-06 16:44:11 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-06 19:41:49 --> Config Class Initialized
INFO - 2025-06-06 19:41:49 --> Hooks Class Initialized
INFO - 2025-06-06 19:41:49 --> Config Class Initialized
INFO - 2025-06-06 19:41:49 --> Hooks Class Initialized
DEBUG - 2025-06-06 19:41:49 --> UTF-8 Support Enabled
INFO - 2025-06-06 19:41:49 --> Utf8 Class Initialized
DEBUG - 2025-06-06 19:41:49 --> UTF-8 Support Enabled
INFO - 2025-06-06 19:41:49 --> Utf8 Class Initialized
INFO - 2025-06-06 19:41:49 --> URI Class Initialized
INFO - 2025-06-06 19:41:49 --> URI Class Initialized
INFO - 2025-06-06 19:41:49 --> Router Class Initialized
INFO - 2025-06-06 19:41:49 --> Router Class Initialized
INFO - 2025-06-06 19:41:49 --> Output Class Initialized
INFO - 2025-06-06 19:41:49 --> Output Class Initialized
INFO - 2025-06-06 19:41:49 --> Security Class Initialized
INFO - 2025-06-06 19:41:49 --> Security Class Initialized
DEBUG - 2025-06-06 19:41:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-06 19:41:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-06 19:41:49 --> Input Class Initialized
INFO - 2025-06-06 19:41:49 --> Input Class Initialized
INFO - 2025-06-06 19:41:49 --> Language Class Initialized
INFO - 2025-06-06 19:41:49 --> Language Class Initialized
INFO - 2025-06-06 19:41:49 --> Loader Class Initialized
INFO - 2025-06-06 19:41:49 --> Loader Class Initialized
INFO - 2025-06-06 19:41:49 --> Helper loaded: url_helper
INFO - 2025-06-06 19:41:49 --> Helper loaded: url_helper
INFO - 2025-06-06 19:41:49 --> Helper loaded: file_helper
INFO - 2025-06-06 19:41:49 --> Helper loaded: file_helper
INFO - 2025-06-06 19:41:49 --> Database Driver Class Initialized
INFO - 2025-06-06 19:41:49 --> Database Driver Class Initialized
INFO - 2025-06-06 19:41:49 --> Email Class Initialized
DEBUG - 2025-06-06 19:41:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-06 19:41:49 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-06 19:41:49 --> Controller Class Initialized
INFO - 2025-06-06 19:41:49 --> Helper loaded: form_helper
INFO - 2025-06-06 19:41:49 --> Form Validation Class Initialized
DEBUG - 2025-06-06 19:41:49 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-06 19:41:49 --> Database Driver Class Initialized
INFO - 2025-06-06 19:41:49 --> Email Class Initialized
DEBUG - 2025-06-06 19:41:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-06 19:41:49 --> Model "Crud" initialized
ERROR - 2025-06-06 19:41:49 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-06 19:41:49 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-06 19:41:49 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-06 19:41:49 --> Controller Class Initialized
INFO - 2025-06-06 19:41:49 --> Helper loaded: form_helper
INFO - 2025-06-06 19:41:49 --> Form Validation Class Initialized
DEBUG - 2025-06-06 19:41:49 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-06 19:41:49 --> Database Driver Class Initialized
INFO - 2025-06-06 19:41:49 --> Model "Crud" initialized
ERROR - 2025-06-06 19:41:49 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-06 19:41:49 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-06 19:42:11 --> Config Class Initialized
INFO - 2025-06-06 19:42:11 --> Config Class Initialized
INFO - 2025-06-06 19:42:11 --> Hooks Class Initialized
INFO - 2025-06-06 19:42:11 --> Hooks Class Initialized
DEBUG - 2025-06-06 19:42:11 --> UTF-8 Support Enabled
DEBUG - 2025-06-06 19:42:11 --> UTF-8 Support Enabled
INFO - 2025-06-06 19:42:11 --> Utf8 Class Initialized
INFO - 2025-06-06 19:42:11 --> Utf8 Class Initialized
INFO - 2025-06-06 19:42:11 --> URI Class Initialized
INFO - 2025-06-06 19:42:11 --> URI Class Initialized
INFO - 2025-06-06 19:42:11 --> Router Class Initialized
INFO - 2025-06-06 19:42:11 --> Router Class Initialized
INFO - 2025-06-06 19:42:11 --> Output Class Initialized
INFO - 2025-06-06 19:42:11 --> Output Class Initialized
INFO - 2025-06-06 19:42:11 --> Security Class Initialized
INFO - 2025-06-06 19:42:11 --> Security Class Initialized
DEBUG - 2025-06-06 19:42:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-06 19:42:11 --> Input Class Initialized
INFO - 2025-06-06 19:42:11 --> Language Class Initialized
INFO - 2025-06-06 19:42:11 --> Loader Class Initialized
DEBUG - 2025-06-06 19:42:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-06 19:42:11 --> Input Class Initialized
INFO - 2025-06-06 19:42:11 --> Language Class Initialized
INFO - 2025-06-06 19:42:11 --> Loader Class Initialized
INFO - 2025-06-06 19:42:11 --> Helper loaded: url_helper
INFO - 2025-06-06 19:42:11 --> Helper loaded: file_helper
INFO - 2025-06-06 19:42:11 --> Helper loaded: url_helper
INFO - 2025-06-06 19:42:11 --> Helper loaded: file_helper
INFO - 2025-06-06 19:42:11 --> Database Driver Class Initialized
INFO - 2025-06-06 19:42:11 --> Database Driver Class Initialized
INFO - 2025-06-06 19:42:11 --> Email Class Initialized
DEBUG - 2025-06-06 19:42:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-06 19:42:11 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-06 19:42:11 --> Controller Class Initialized
INFO - 2025-06-06 19:42:11 --> Helper loaded: form_helper
INFO - 2025-06-06 19:42:11 --> Form Validation Class Initialized
DEBUG - 2025-06-06 19:42:11 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-06 19:42:11 --> Database Driver Class Initialized
INFO - 2025-06-06 19:42:11 --> Email Class Initialized
DEBUG - 2025-06-06 19:42:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-06 19:42:11 --> Model "Crud" initialized
ERROR - 2025-06-06 19:42:11 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-06 19:42:11 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-06 19:42:11 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-06 19:42:11 --> Controller Class Initialized
INFO - 2025-06-06 19:42:11 --> Helper loaded: form_helper
INFO - 2025-06-06 19:42:11 --> Form Validation Class Initialized
DEBUG - 2025-06-06 19:42:11 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-06 19:42:11 --> Database Driver Class Initialized
INFO - 2025-06-06 19:42:12 --> Model "Crud" initialized
ERROR - 2025-06-06 19:42:12 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-06 19:42:12 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-06 19:58:00 --> Config Class Initialized
INFO - 2025-06-06 19:58:00 --> Hooks Class Initialized
DEBUG - 2025-06-06 19:58:00 --> UTF-8 Support Enabled
INFO - 2025-06-06 19:58:00 --> Utf8 Class Initialized
INFO - 2025-06-06 19:58:00 --> URI Class Initialized
INFO - 2025-06-06 19:58:00 --> Router Class Initialized
INFO - 2025-06-06 19:58:00 --> Output Class Initialized
INFO - 2025-06-06 19:58:00 --> Security Class Initialized
DEBUG - 2025-06-06 19:58:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-06 19:58:00 --> Input Class Initialized
INFO - 2025-06-06 19:58:00 --> Language Class Initialized
INFO - 2025-06-06 19:58:00 --> Loader Class Initialized
INFO - 2025-06-06 19:58:00 --> Helper loaded: url_helper
INFO - 2025-06-06 19:58:00 --> Helper loaded: file_helper
INFO - 2025-06-06 19:58:00 --> Database Driver Class Initialized
INFO - 2025-06-06 19:58:00 --> Email Class Initialized
DEBUG - 2025-06-06 19:58:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-06 19:58:00 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-06 19:58:00 --> Controller Class Initialized
INFO - 2025-06-06 19:58:00 --> Config Class Initialized
INFO - 2025-06-06 19:58:00 --> Helper loaded: form_helper
INFO - 2025-06-06 19:58:00 --> Hooks Class Initialized
INFO - 2025-06-06 19:58:00 --> Form Validation Class Initialized
DEBUG - 2025-06-06 19:58:00 --> UTF-8 Support Enabled
DEBUG - 2025-06-06 19:58:00 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-06 19:58:00 --> Utf8 Class Initialized
INFO - 2025-06-06 19:58:00 --> Database Driver Class Initialized
INFO - 2025-06-06 19:58:00 --> URI Class Initialized
INFO - 2025-06-06 19:58:00 --> Router Class Initialized
INFO - 2025-06-06 19:58:00 --> Output Class Initialized
INFO - 2025-06-06 19:58:00 --> Security Class Initialized
DEBUG - 2025-06-06 19:58:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-06 19:58:00 --> Input Class Initialized
INFO - 2025-06-06 19:58:00 --> Language Class Initialized
INFO - 2025-06-06 19:58:00 --> Loader Class Initialized
INFO - 2025-06-06 19:58:00 --> Helper loaded: url_helper
INFO - 2025-06-06 19:58:00 --> Helper loaded: file_helper
INFO - 2025-06-06 19:58:00 --> Database Driver Class Initialized
INFO - 2025-06-06 19:58:00 --> Model "Crud" initialized
ERROR - 2025-06-06 19:58:00 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-06 19:58:00 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-06 19:58:00 --> Email Class Initialized
DEBUG - 2025-06-06 19:58:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-06 19:58:00 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-06 19:58:00 --> Controller Class Initialized
INFO - 2025-06-06 19:58:00 --> Helper loaded: form_helper
INFO - 2025-06-06 19:58:00 --> Form Validation Class Initialized
DEBUG - 2025-06-06 19:58:00 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-06 19:58:00 --> Database Driver Class Initialized
INFO - 2025-06-06 19:58:00 --> Model "Crud" initialized
ERROR - 2025-06-06 19:58:00 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-06 19:58:00 --> Language file loaded: language/english/db_lang.php
