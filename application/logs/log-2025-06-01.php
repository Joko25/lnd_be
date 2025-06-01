<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2025-06-01 14:02:52 --> Config Class Initialized
INFO - 2025-06-01 14:02:52 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:02:52 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:02:52 --> Utf8 Class Initialized
INFO - 2025-06-01 14:02:52 --> URI Class Initialized
INFO - 2025-06-01 14:02:52 --> Router Class Initialized
INFO - 2025-06-01 14:02:52 --> Output Class Initialized
INFO - 2025-06-01 14:02:52 --> Security Class Initialized
DEBUG - 2025-06-01 14:02:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:02:52 --> Input Class Initialized
INFO - 2025-06-01 14:02:52 --> Language Class Initialized
INFO - 2025-06-01 14:02:52 --> Loader Class Initialized
INFO - 2025-06-01 14:02:52 --> Helper loaded: url_helper
INFO - 2025-06-01 14:02:52 --> Helper loaded: file_helper
INFO - 2025-06-01 14:02:52 --> Database Driver Class Initialized
INFO - 2025-06-01 14:02:52 --> Config Class Initialized
INFO - 2025-06-01 14:02:52 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:02:52 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:02:52 --> Utf8 Class Initialized
INFO - 2025-06-01 14:02:52 --> URI Class Initialized
INFO - 2025-06-01 14:02:52 --> Router Class Initialized
INFO - 2025-06-01 14:02:52 --> Output Class Initialized
INFO - 2025-06-01 14:02:52 --> Security Class Initialized
DEBUG - 2025-06-01 14:02:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:02:52 --> Input Class Initialized
INFO - 2025-06-01 14:02:52 --> Language Class Initialized
INFO - 2025-06-01 14:02:52 --> Loader Class Initialized
INFO - 2025-06-01 14:02:52 --> Helper loaded: url_helper
INFO - 2025-06-01 14:02:52 --> Helper loaded: file_helper
INFO - 2025-06-01 14:02:52 --> Database Driver Class Initialized
INFO - 2025-06-01 14:02:52 --> Email Class Initialized
DEBUG - 2025-06-01 14:02:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:02:52 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:02:52 --> Controller Class Initialized
INFO - 2025-06-01 14:02:52 --> Helper loaded: form_helper
INFO - 2025-06-01 14:02:52 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:02:52 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:02:52 --> Database Driver Class Initialized
INFO - 2025-06-01 14:02:52 --> Model "Crud" initialized
ERROR - 2025-06-01 14:02:52 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-01 14:02:52 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-01 14:02:52 --> Email Class Initialized
DEBUG - 2025-06-01 14:02:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:02:52 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:02:52 --> Controller Class Initialized
INFO - 2025-06-01 14:02:52 --> Helper loaded: form_helper
INFO - 2025-06-01 14:02:52 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:02:52 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:02:52 --> Database Driver Class Initialized
INFO - 2025-06-01 14:02:52 --> Model "Crud" initialized
ERROR - 2025-06-01 14:02:52 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-01 14:02:52 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-01 14:03:54 --> Config Class Initialized
INFO - 2025-06-01 14:03:54 --> Hooks Class Initialized
INFO - 2025-06-01 14:03:54 --> Config Class Initialized
INFO - 2025-06-01 14:03:54 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:03:54 --> UTF-8 Support Enabled
DEBUG - 2025-06-01 14:03:54 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:03:54 --> Utf8 Class Initialized
INFO - 2025-06-01 14:03:54 --> Utf8 Class Initialized
INFO - 2025-06-01 14:03:54 --> URI Class Initialized
INFO - 2025-06-01 14:03:54 --> URI Class Initialized
INFO - 2025-06-01 14:03:54 --> Router Class Initialized
INFO - 2025-06-01 14:03:54 --> Router Class Initialized
INFO - 2025-06-01 14:03:54 --> Output Class Initialized
INFO - 2025-06-01 14:03:54 --> Output Class Initialized
INFO - 2025-06-01 14:03:54 --> Security Class Initialized
INFO - 2025-06-01 14:03:54 --> Security Class Initialized
DEBUG - 2025-06-01 14:03:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-01 14:03:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:03:54 --> Input Class Initialized
INFO - 2025-06-01 14:03:54 --> Language Class Initialized
INFO - 2025-06-01 14:03:54 --> Input Class Initialized
INFO - 2025-06-01 14:03:54 --> Language Class Initialized
INFO - 2025-06-01 14:03:54 --> Loader Class Initialized
INFO - 2025-06-01 14:03:54 --> Loader Class Initialized
INFO - 2025-06-01 14:03:54 --> Helper loaded: url_helper
INFO - 2025-06-01 14:03:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:03:54 --> Helper loaded: url_helper
INFO - 2025-06-01 14:03:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:03:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:03:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:03:54 --> Email Class Initialized
INFO - 2025-06-01 14:03:54 --> Email Class Initialized
DEBUG - 2025-06-01 14:03:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-01 14:03:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:03:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:03:54 --> Controller Class Initialized
INFO - 2025-06-01 14:03:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:03:54 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:03:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:03:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:03:54 --> Model "Crud" initialized
ERROR - 2025-06-01 14:03:54 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-01 14:03:54 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-01 14:03:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:03:54 --> Controller Class Initialized
INFO - 2025-06-01 14:03:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:03:54 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:03:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:03:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:03:54 --> Model "Crud" initialized
ERROR - 2025-06-01 14:03:54 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-01 14:03:54 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-01 14:04:54 --> Config Class Initialized
INFO - 2025-06-01 14:04:54 --> Hooks Class Initialized
INFO - 2025-06-01 14:04:54 --> Config Class Initialized
INFO - 2025-06-01 14:04:54 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:04:54 --> UTF-8 Support Enabled
DEBUG - 2025-06-01 14:04:54 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:04:54 --> Utf8 Class Initialized
INFO - 2025-06-01 14:04:54 --> Utf8 Class Initialized
INFO - 2025-06-01 14:04:54 --> URI Class Initialized
INFO - 2025-06-01 14:04:54 --> URI Class Initialized
INFO - 2025-06-01 14:04:54 --> Router Class Initialized
INFO - 2025-06-01 14:04:54 --> Router Class Initialized
INFO - 2025-06-01 14:04:54 --> Output Class Initialized
INFO - 2025-06-01 14:04:54 --> Output Class Initialized
INFO - 2025-06-01 14:04:54 --> Security Class Initialized
INFO - 2025-06-01 14:04:54 --> Security Class Initialized
DEBUG - 2025-06-01 14:04:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:04:54 --> Input Class Initialized
DEBUG - 2025-06-01 14:04:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:04:54 --> Language Class Initialized
INFO - 2025-06-01 14:04:54 --> Input Class Initialized
INFO - 2025-06-01 14:04:54 --> Language Class Initialized
INFO - 2025-06-01 14:04:54 --> Loader Class Initialized
INFO - 2025-06-01 14:04:54 --> Loader Class Initialized
INFO - 2025-06-01 14:04:54 --> Helper loaded: url_helper
INFO - 2025-06-01 14:04:54 --> Helper loaded: url_helper
INFO - 2025-06-01 14:04:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:04:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:04:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:04:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:04:54 --> Email Class Initialized
DEBUG - 2025-06-01 14:04:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:04:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:04:54 --> Controller Class Initialized
INFO - 2025-06-01 14:04:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:04:54 --> Form Validation Class Initialized
INFO - 2025-06-01 14:04:54 --> Email Class Initialized
DEBUG - 2025-06-01 14:04:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:04:54 --> Database Driver Class Initialized
DEBUG - 2025-06-01 14:04:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:04:54 --> Model "Crud" initialized
ERROR - 2025-06-01 14:04:54 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-01 14:04:54 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-01 14:04:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:04:54 --> Controller Class Initialized
INFO - 2025-06-01 14:04:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:04:54 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:04:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:04:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:04:55 --> Model "Crud" initialized
ERROR - 2025-06-01 14:04:55 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-01 14:04:55 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-01 14:05:54 --> Config Class Initialized
INFO - 2025-06-01 14:05:54 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:05:54 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:05:54 --> Utf8 Class Initialized
INFO - 2025-06-01 14:05:54 --> Config Class Initialized
INFO - 2025-06-01 14:05:54 --> Hooks Class Initialized
INFO - 2025-06-01 14:05:54 --> URI Class Initialized
DEBUG - 2025-06-01 14:05:54 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:05:54 --> Utf8 Class Initialized
INFO - 2025-06-01 14:05:54 --> Router Class Initialized
INFO - 2025-06-01 14:05:54 --> URI Class Initialized
INFO - 2025-06-01 14:05:54 --> Output Class Initialized
INFO - 2025-06-01 14:05:54 --> Security Class Initialized
DEBUG - 2025-06-01 14:05:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:05:54 --> Router Class Initialized
INFO - 2025-06-01 14:05:54 --> Input Class Initialized
INFO - 2025-06-01 14:05:54 --> Output Class Initialized
INFO - 2025-06-01 14:05:54 --> Security Class Initialized
INFO - 2025-06-01 14:05:54 --> Language Class Initialized
DEBUG - 2025-06-01 14:05:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:05:54 --> Input Class Initialized
INFO - 2025-06-01 14:05:54 --> Language Class Initialized
INFO - 2025-06-01 14:05:54 --> Loader Class Initialized
INFO - 2025-06-01 14:05:54 --> Helper loaded: url_helper
INFO - 2025-06-01 14:05:54 --> Loader Class Initialized
INFO - 2025-06-01 14:05:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:05:54 --> Helper loaded: url_helper
INFO - 2025-06-01 14:05:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:05:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:05:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:05:54 --> Email Class Initialized
DEBUG - 2025-06-01 14:05:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:05:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:05:54 --> Controller Class Initialized
INFO - 2025-06-01 14:05:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:05:54 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:05:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:05:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:05:54 --> Email Class Initialized
DEBUG - 2025-06-01 14:05:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:05:54 --> Model "Crud" initialized
ERROR - 2025-06-01 14:05:54 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-01 14:05:54 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-01 14:05:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:05:54 --> Controller Class Initialized
INFO - 2025-06-01 14:05:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:05:54 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:05:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:05:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:05:54 --> Model "Crud" initialized
ERROR - 2025-06-01 14:05:54 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-01 14:05:54 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-01 14:06:55 --> Config Class Initialized
INFO - 2025-06-01 14:06:55 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:06:55 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:06:55 --> Utf8 Class Initialized
INFO - 2025-06-01 14:06:55 --> URI Class Initialized
INFO - 2025-06-01 14:06:55 --> Router Class Initialized
INFO - 2025-06-01 14:06:55 --> Output Class Initialized
INFO - 2025-06-01 14:06:55 --> Security Class Initialized
DEBUG - 2025-06-01 14:06:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:06:55 --> Input Class Initialized
INFO - 2025-06-01 14:06:55 --> Language Class Initialized
INFO - 2025-06-01 14:06:55 --> Loader Class Initialized
INFO - 2025-06-01 14:06:55 --> Helper loaded: url_helper
INFO - 2025-06-01 14:06:55 --> Helper loaded: file_helper
INFO - 2025-06-01 14:06:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:06:55 --> Config Class Initialized
INFO - 2025-06-01 14:06:55 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:06:55 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:06:55 --> Utf8 Class Initialized
INFO - 2025-06-01 14:06:55 --> URI Class Initialized
INFO - 2025-06-01 14:06:55 --> Router Class Initialized
INFO - 2025-06-01 14:06:55 --> Output Class Initialized
INFO - 2025-06-01 14:06:55 --> Security Class Initialized
DEBUG - 2025-06-01 14:06:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:06:55 --> Input Class Initialized
INFO - 2025-06-01 14:06:55 --> Language Class Initialized
INFO - 2025-06-01 14:06:55 --> Loader Class Initialized
INFO - 2025-06-01 14:06:55 --> Helper loaded: url_helper
INFO - 2025-06-01 14:06:55 --> Helper loaded: file_helper
INFO - 2025-06-01 14:06:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:06:55 --> Email Class Initialized
DEBUG - 2025-06-01 14:06:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:06:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:06:55 --> Controller Class Initialized
INFO - 2025-06-01 14:06:55 --> Helper loaded: form_helper
INFO - 2025-06-01 14:06:55 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:06:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:06:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:06:55 --> Email Class Initialized
DEBUG - 2025-06-01 14:06:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:06:55 --> Model "Crud" initialized
ERROR - 2025-06-01 14:06:55 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-01 14:06:55 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-01 14:06:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:06:55 --> Controller Class Initialized
INFO - 2025-06-01 14:06:55 --> Helper loaded: form_helper
INFO - 2025-06-01 14:06:55 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:06:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:06:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:06:55 --> Model "Crud" initialized
ERROR - 2025-06-01 14:06:55 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-01 14:06:55 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-01 14:07:55 --> Config Class Initialized
INFO - 2025-06-01 14:07:55 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:07:55 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:07:55 --> Utf8 Class Initialized
INFO - 2025-06-01 14:07:55 --> URI Class Initialized
INFO - 2025-06-01 14:07:55 --> Config Class Initialized
INFO - 2025-06-01 14:07:55 --> Hooks Class Initialized
INFO - 2025-06-01 14:07:55 --> Router Class Initialized
DEBUG - 2025-06-01 14:07:55 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:07:55 --> Utf8 Class Initialized
INFO - 2025-06-01 14:07:55 --> Output Class Initialized
INFO - 2025-06-01 14:07:55 --> Security Class Initialized
INFO - 2025-06-01 14:07:55 --> URI Class Initialized
DEBUG - 2025-06-01 14:07:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:07:55 --> Input Class Initialized
INFO - 2025-06-01 14:07:55 --> Router Class Initialized
INFO - 2025-06-01 14:07:55 --> Output Class Initialized
INFO - 2025-06-01 14:07:55 --> Language Class Initialized
INFO - 2025-06-01 14:07:55 --> Security Class Initialized
DEBUG - 2025-06-01 14:07:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:07:55 --> Input Class Initialized
INFO - 2025-06-01 14:07:55 --> Language Class Initialized
INFO - 2025-06-01 14:07:55 --> Loader Class Initialized
INFO - 2025-06-01 14:07:55 --> Helper loaded: url_helper
INFO - 2025-06-01 14:07:55 --> Helper loaded: file_helper
INFO - 2025-06-01 14:07:55 --> Loader Class Initialized
INFO - 2025-06-01 14:07:55 --> Helper loaded: url_helper
INFO - 2025-06-01 14:07:55 --> Helper loaded: file_helper
INFO - 2025-06-01 14:07:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:07:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:07:55 --> Email Class Initialized
DEBUG - 2025-06-01 14:07:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:07:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:07:55 --> Controller Class Initialized
INFO - 2025-06-01 14:07:55 --> Helper loaded: form_helper
INFO - 2025-06-01 14:07:55 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:07:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:07:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:07:55 --> Email Class Initialized
DEBUG - 2025-06-01 14:07:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:07:55 --> Model "Crud" initialized
ERROR - 2025-06-01 14:07:55 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-01 14:07:55 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-01 14:07:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:07:55 --> Controller Class Initialized
INFO - 2025-06-01 14:07:55 --> Helper loaded: form_helper
INFO - 2025-06-01 14:07:55 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:07:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:07:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:07:55 --> Model "Crud" initialized
ERROR - 2025-06-01 14:07:55 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-01 14:07:55 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-01 14:08:54 --> Config Class Initialized
INFO - 2025-06-01 14:08:54 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:08:54 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:08:54 --> Utf8 Class Initialized
INFO - 2025-06-01 14:08:54 --> URI Class Initialized
INFO - 2025-06-01 14:08:54 --> Router Class Initialized
INFO - 2025-06-01 14:08:54 --> Output Class Initialized
INFO - 2025-06-01 14:08:54 --> Security Class Initialized
DEBUG - 2025-06-01 14:08:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:08:54 --> Input Class Initialized
INFO - 2025-06-01 14:08:54 --> Language Class Initialized
INFO - 2025-06-01 14:08:54 --> Loader Class Initialized
INFO - 2025-06-01 14:08:54 --> Helper loaded: url_helper
INFO - 2025-06-01 14:08:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:08:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:08:54 --> Config Class Initialized
INFO - 2025-06-01 14:08:54 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:08:54 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:08:54 --> Utf8 Class Initialized
INFO - 2025-06-01 14:08:54 --> URI Class Initialized
INFO - 2025-06-01 14:08:54 --> Router Class Initialized
INFO - 2025-06-01 14:08:54 --> Output Class Initialized
INFO - 2025-06-01 14:08:54 --> Security Class Initialized
DEBUG - 2025-06-01 14:08:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:08:54 --> Input Class Initialized
INFO - 2025-06-01 14:08:54 --> Language Class Initialized
INFO - 2025-06-01 14:08:54 --> Loader Class Initialized
INFO - 2025-06-01 14:08:54 --> Helper loaded: url_helper
INFO - 2025-06-01 14:08:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:08:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:08:54 --> Email Class Initialized
DEBUG - 2025-06-01 14:08:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:08:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:08:54 --> Controller Class Initialized
INFO - 2025-06-01 14:08:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:08:54 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:08:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:08:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:08:54 --> Email Class Initialized
DEBUG - 2025-06-01 14:08:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:08:54 --> Model "Crud" initialized
ERROR - 2025-06-01 14:08:54 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-01 14:08:54 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-01 14:08:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:08:54 --> Controller Class Initialized
INFO - 2025-06-01 14:08:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:08:54 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:08:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:08:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:08:54 --> Model "Crud" initialized
ERROR - 2025-06-01 14:08:54 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-01 14:08:54 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-01 14:09:54 --> Config Class Initialized
INFO - 2025-06-01 14:09:54 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:09:54 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:09:54 --> Utf8 Class Initialized
INFO - 2025-06-01 14:09:54 --> URI Class Initialized
INFO - 2025-06-01 14:09:54 --> Router Class Initialized
INFO - 2025-06-01 14:09:54 --> Output Class Initialized
INFO - 2025-06-01 14:09:54 --> Security Class Initialized
DEBUG - 2025-06-01 14:09:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:09:54 --> Input Class Initialized
INFO - 2025-06-01 14:09:54 --> Language Class Initialized
INFO - 2025-06-01 14:09:54 --> Loader Class Initialized
INFO - 2025-06-01 14:09:54 --> Helper loaded: url_helper
INFO - 2025-06-01 14:09:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:09:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:09:54 --> Config Class Initialized
INFO - 2025-06-01 14:09:54 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:09:54 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:09:54 --> Utf8 Class Initialized
INFO - 2025-06-01 14:09:54 --> URI Class Initialized
INFO - 2025-06-01 14:09:54 --> Router Class Initialized
INFO - 2025-06-01 14:09:54 --> Output Class Initialized
INFO - 2025-06-01 14:09:54 --> Security Class Initialized
DEBUG - 2025-06-01 14:09:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:09:54 --> Input Class Initialized
INFO - 2025-06-01 14:09:54 --> Language Class Initialized
INFO - 2025-06-01 14:09:54 --> Loader Class Initialized
INFO - 2025-06-01 14:09:54 --> Helper loaded: url_helper
INFO - 2025-06-01 14:09:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:09:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:09:54 --> Email Class Initialized
DEBUG - 2025-06-01 14:09:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:09:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:09:54 --> Controller Class Initialized
INFO - 2025-06-01 14:09:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:09:54 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:09:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:09:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:09:54 --> Email Class Initialized
DEBUG - 2025-06-01 14:09:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:09:54 --> Model "Crud" initialized
ERROR - 2025-06-01 14:09:54 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-01 14:09:54 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-01 14:09:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:09:54 --> Controller Class Initialized
INFO - 2025-06-01 14:09:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:09:54 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:09:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:09:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:09:54 --> Model "Crud" initialized
ERROR - 2025-06-01 14:09:54 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-01 14:09:54 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-01 14:10:54 --> Config Class Initialized
INFO - 2025-06-01 14:10:54 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:10:54 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:10:54 --> Utf8 Class Initialized
INFO - 2025-06-01 14:10:54 --> URI Class Initialized
INFO - 2025-06-01 14:10:54 --> Router Class Initialized
INFO - 2025-06-01 14:10:54 --> Output Class Initialized
INFO - 2025-06-01 14:10:54 --> Security Class Initialized
DEBUG - 2025-06-01 14:10:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:10:54 --> Input Class Initialized
INFO - 2025-06-01 14:10:54 --> Language Class Initialized
INFO - 2025-06-01 14:10:54 --> Loader Class Initialized
INFO - 2025-06-01 14:10:54 --> Helper loaded: url_helper
INFO - 2025-06-01 14:10:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:10:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:10:54 --> Config Class Initialized
INFO - 2025-06-01 14:10:54 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:10:54 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:10:54 --> Utf8 Class Initialized
INFO - 2025-06-01 14:10:54 --> URI Class Initialized
INFO - 2025-06-01 14:10:54 --> Router Class Initialized
INFO - 2025-06-01 14:10:54 --> Output Class Initialized
INFO - 2025-06-01 14:10:54 --> Security Class Initialized
DEBUG - 2025-06-01 14:10:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:10:54 --> Input Class Initialized
INFO - 2025-06-01 14:10:54 --> Language Class Initialized
INFO - 2025-06-01 14:10:54 --> Loader Class Initialized
INFO - 2025-06-01 14:10:54 --> Helper loaded: url_helper
INFO - 2025-06-01 14:10:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:10:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:10:54 --> Email Class Initialized
DEBUG - 2025-06-01 14:10:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:10:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:10:54 --> Controller Class Initialized
INFO - 2025-06-01 14:10:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:10:54 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:10:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:10:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:10:54 --> Email Class Initialized
DEBUG - 2025-06-01 14:10:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:10:54 --> Model "Crud" initialized
ERROR - 2025-06-01 14:10:54 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-01 14:10:54 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-01 14:10:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:10:54 --> Controller Class Initialized
INFO - 2025-06-01 14:10:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:10:54 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:10:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:10:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:10:54 --> Model "Crud" initialized
ERROR - 2025-06-01 14:10:54 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-01 14:10:54 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-01 14:11:54 --> Config Class Initialized
INFO - 2025-06-01 14:11:54 --> Hooks Class Initialized
INFO - 2025-06-01 14:11:54 --> Config Class Initialized
DEBUG - 2025-06-01 14:11:54 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:11:54 --> Utf8 Class Initialized
INFO - 2025-06-01 14:11:54 --> Hooks Class Initialized
INFO - 2025-06-01 14:11:54 --> URI Class Initialized
DEBUG - 2025-06-01 14:11:54 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:11:54 --> Utf8 Class Initialized
INFO - 2025-06-01 14:11:54 --> Router Class Initialized
INFO - 2025-06-01 14:11:54 --> URI Class Initialized
INFO - 2025-06-01 14:11:54 --> Output Class Initialized
INFO - 2025-06-01 14:11:54 --> Router Class Initialized
INFO - 2025-06-01 14:11:54 --> Security Class Initialized
INFO - 2025-06-01 14:11:54 --> Output Class Initialized
DEBUG - 2025-06-01 14:11:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:11:54 --> Security Class Initialized
INFO - 2025-06-01 14:11:54 --> Input Class Initialized
DEBUG - 2025-06-01 14:11:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:11:54 --> Language Class Initialized
INFO - 2025-06-01 14:11:54 --> Input Class Initialized
INFO - 2025-06-01 14:11:54 --> Language Class Initialized
INFO - 2025-06-01 14:11:54 --> Loader Class Initialized
INFO - 2025-06-01 14:11:54 --> Loader Class Initialized
INFO - 2025-06-01 14:11:54 --> Helper loaded: url_helper
INFO - 2025-06-01 14:11:54 --> Helper loaded: url_helper
INFO - 2025-06-01 14:11:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:11:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:11:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:11:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:11:54 --> Email Class Initialized
DEBUG - 2025-06-01 14:11:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:11:54 --> Email Class Initialized
INFO - 2025-06-01 14:11:54 --> Session: Class initialized using 'files' driver.
DEBUG - 2025-06-01 14:11:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:11:54 --> Controller Class Initialized
INFO - 2025-06-01 14:11:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:11:54 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:11:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:11:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:11:54 --> Model "Crud" initialized
ERROR - 2025-06-01 14:11:54 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-01 14:11:54 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-01 14:11:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:11:54 --> Controller Class Initialized
INFO - 2025-06-01 14:11:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:11:54 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:11:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:11:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:11:54 --> Model "Crud" initialized
ERROR - 2025-06-01 14:11:54 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-01 14:11:54 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-01 14:12:55 --> Config Class Initialized
INFO - 2025-06-01 14:12:55 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:12:55 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:12:55 --> Utf8 Class Initialized
INFO - 2025-06-01 14:12:55 --> URI Class Initialized
INFO - 2025-06-01 14:12:55 --> Router Class Initialized
INFO - 2025-06-01 14:12:55 --> Output Class Initialized
INFO - 2025-06-01 14:12:55 --> Security Class Initialized
DEBUG - 2025-06-01 14:12:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:12:55 --> Input Class Initialized
INFO - 2025-06-01 14:12:55 --> Language Class Initialized
INFO - 2025-06-01 14:12:55 --> Loader Class Initialized
INFO - 2025-06-01 14:12:55 --> Helper loaded: url_helper
INFO - 2025-06-01 14:12:55 --> Helper loaded: file_helper
INFO - 2025-06-01 14:12:55 --> Config Class Initialized
INFO - 2025-06-01 14:12:55 --> Hooks Class Initialized
INFO - 2025-06-01 14:12:55 --> Database Driver Class Initialized
DEBUG - 2025-06-01 14:12:55 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:12:55 --> Utf8 Class Initialized
INFO - 2025-06-01 14:12:55 --> URI Class Initialized
INFO - 2025-06-01 14:12:55 --> Router Class Initialized
INFO - 2025-06-01 14:12:55 --> Output Class Initialized
INFO - 2025-06-01 14:12:55 --> Security Class Initialized
DEBUG - 2025-06-01 14:12:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:12:55 --> Input Class Initialized
INFO - 2025-06-01 14:12:55 --> Language Class Initialized
INFO - 2025-06-01 14:12:55 --> Loader Class Initialized
INFO - 2025-06-01 14:12:55 --> Helper loaded: url_helper
INFO - 2025-06-01 14:12:55 --> Helper loaded: file_helper
INFO - 2025-06-01 14:12:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:12:55 --> Email Class Initialized
INFO - 2025-06-01 14:12:55 --> Email Class Initialized
DEBUG - 2025-06-01 14:12:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-01 14:12:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:12:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:12:55 --> Controller Class Initialized
INFO - 2025-06-01 14:12:55 --> Helper loaded: form_helper
INFO - 2025-06-01 14:12:55 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:12:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:12:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:12:55 --> Model "Crud" initialized
ERROR - 2025-06-01 14:12:55 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-01 14:12:55 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-01 14:12:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:12:55 --> Controller Class Initialized
INFO - 2025-06-01 14:12:55 --> Helper loaded: form_helper
INFO - 2025-06-01 14:12:55 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:12:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:12:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:12:55 --> Model "Crud" initialized
ERROR - 2025-06-01 14:12:55 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-01 14:12:55 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-01 14:13:55 --> Config Class Initialized
INFO - 2025-06-01 14:13:55 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:13:55 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:13:55 --> Utf8 Class Initialized
INFO - 2025-06-01 14:13:55 --> URI Class Initialized
INFO - 2025-06-01 14:13:55 --> Router Class Initialized
INFO - 2025-06-01 14:13:55 --> Config Class Initialized
INFO - 2025-06-01 14:13:55 --> Hooks Class Initialized
INFO - 2025-06-01 14:13:55 --> Output Class Initialized
DEBUG - 2025-06-01 14:13:55 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:13:55 --> Utf8 Class Initialized
INFO - 2025-06-01 14:13:55 --> Security Class Initialized
INFO - 2025-06-01 14:13:55 --> URI Class Initialized
DEBUG - 2025-06-01 14:13:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:13:55 --> Router Class Initialized
INFO - 2025-06-01 14:13:55 --> Input Class Initialized
INFO - 2025-06-01 14:13:55 --> Output Class Initialized
INFO - 2025-06-01 14:13:55 --> Language Class Initialized
INFO - 2025-06-01 14:13:55 --> Security Class Initialized
DEBUG - 2025-06-01 14:13:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:13:55 --> Loader Class Initialized
INFO - 2025-06-01 14:13:55 --> Input Class Initialized
INFO - 2025-06-01 14:13:55 --> Helper loaded: url_helper
INFO - 2025-06-01 14:13:55 --> Language Class Initialized
INFO - 2025-06-01 14:13:55 --> Helper loaded: file_helper
INFO - 2025-06-01 14:13:55 --> Loader Class Initialized
INFO - 2025-06-01 14:13:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:13:55 --> Helper loaded: url_helper
INFO - 2025-06-01 14:13:55 --> Helper loaded: file_helper
INFO - 2025-06-01 14:13:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:13:55 --> Email Class Initialized
DEBUG - 2025-06-01 14:13:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:13:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:13:55 --> Controller Class Initialized
INFO - 2025-06-01 14:13:55 --> Helper loaded: form_helper
INFO - 2025-06-01 14:13:55 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:13:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:13:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:13:55 --> Email Class Initialized
DEBUG - 2025-06-01 14:13:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:13:55 --> Model "Crud" initialized
ERROR - 2025-06-01 14:13:55 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-01 14:13:55 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-01 14:13:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:13:55 --> Controller Class Initialized
INFO - 2025-06-01 14:13:55 --> Helper loaded: form_helper
INFO - 2025-06-01 14:13:55 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:13:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:13:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:13:55 --> Model "Crud" initialized
ERROR - 2025-06-01 14:13:55 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-01 14:13:55 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-01 14:14:11 --> Config Class Initialized
INFO - 2025-06-01 14:14:11 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:11 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:11 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:11 --> URI Class Initialized
INFO - 2025-06-01 14:14:11 --> Router Class Initialized
INFO - 2025-06-01 14:14:11 --> Output Class Initialized
INFO - 2025-06-01 14:14:11 --> Security Class Initialized
INFO - 2025-06-01 14:14:11 --> Config Class Initialized
DEBUG - 2025-06-01 14:14:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:11 --> Hooks Class Initialized
INFO - 2025-06-01 14:14:11 --> Input Class Initialized
INFO - 2025-06-01 14:14:11 --> Language Class Initialized
DEBUG - 2025-06-01 14:14:11 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:11 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:11 --> Loader Class Initialized
INFO - 2025-06-01 14:14:11 --> URI Class Initialized
INFO - 2025-06-01 14:14:11 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:11 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:11 --> Router Class Initialized
INFO - 2025-06-01 14:14:11 --> Output Class Initialized
INFO - 2025-06-01 14:14:11 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:11 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:11 --> Input Class Initialized
INFO - 2025-06-01 14:14:11 --> Language Class Initialized
INFO - 2025-06-01 14:14:11 --> Loader Class Initialized
INFO - 2025-06-01 14:14:11 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:11 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:11 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:11 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:11 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:11 --> Controller Class Initialized
INFO - 2025-06-01 14:14:11 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:11 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:14:11 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:11 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:11 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:11 --> Model "Crud" initialized
ERROR - 2025-06-01 14:14:11 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-01 14:14:11 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-01 14:14:11 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:11 --> Controller Class Initialized
INFO - 2025-06-01 14:14:11 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:11 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:14:11 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:11 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:11 --> Model "Crud" initialized
ERROR - 2025-06-01 14:14:11 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-01 14:14:11 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-01 14:14:13 --> Config Class Initialized
INFO - 2025-06-01 14:14:13 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:13 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:13 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:13 --> URI Class Initialized
INFO - 2025-06-01 14:14:13 --> Router Class Initialized
INFO - 2025-06-01 14:14:13 --> Output Class Initialized
INFO - 2025-06-01 14:14:13 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:13 --> Input Class Initialized
INFO - 2025-06-01 14:14:13 --> Language Class Initialized
INFO - 2025-06-01 14:14:13 --> Loader Class Initialized
INFO - 2025-06-01 14:14:13 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:13 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:13 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:13 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:13 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:13 --> Controller Class Initialized
INFO - 2025-06-01 14:14:13 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:13 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:14:13 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:13 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:13 --> Model "Crud" initialized
INFO - 2025-06-01 14:14:13 --> Config Class Initialized
INFO - 2025-06-01 14:14:13 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:13 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:13 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:13 --> URI Class Initialized
INFO - 2025-06-01 14:14:13 --> Router Class Initialized
INFO - 2025-06-01 14:14:13 --> Output Class Initialized
INFO - 2025-06-01 14:14:13 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:13 --> Input Class Initialized
INFO - 2025-06-01 14:14:13 --> Language Class Initialized
INFO - 2025-06-01 14:14:13 --> Loader Class Initialized
INFO - 2025-06-01 14:14:13 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:13 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:13 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:13 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:13 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:13 --> Controller Class Initialized
INFO - 2025-06-01 14:14:13 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:13 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:14:13 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:13 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:13 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:14:13 --> Email class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:13 --> Model "Emails" initialized
ERROR - 2025-06-01 14:14:13 --> Unable to delete cache file for login
INFO - 2025-06-01 14:14:13 --> File loaded: /var/www/html/hris_lnd/application/views/login.php
INFO - 2025-06-01 14:14:13 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:13 --> Total execution time: 0.0418
INFO - 2025-06-01 14:14:16 --> Config Class Initialized
INFO - 2025-06-01 14:14:16 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:16 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:16 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:16 --> URI Class Initialized
INFO - 2025-06-01 14:14:16 --> Router Class Initialized
INFO - 2025-06-01 14:14:16 --> Output Class Initialized
INFO - 2025-06-01 14:14:16 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:16 --> Input Class Initialized
INFO - 2025-06-01 14:14:16 --> Language Class Initialized
INFO - 2025-06-01 14:14:16 --> Loader Class Initialized
INFO - 2025-06-01 14:14:16 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:16 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:16 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:16 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:16 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:16 --> Controller Class Initialized
INFO - 2025-06-01 14:14:16 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:16 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:14:16 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:16 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:16 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:14:16 --> Email class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:16 --> Model "Emails" initialized
ERROR - 2025-06-01 14:14:16 --> Unable to delete cache file for login
INFO - 2025-06-01 14:14:16 --> Config Class Initialized
INFO - 2025-06-01 14:14:16 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:16 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:16 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:16 --> URI Class Initialized
INFO - 2025-06-01 14:14:16 --> Router Class Initialized
INFO - 2025-06-01 14:14:16 --> Output Class Initialized
INFO - 2025-06-01 14:14:16 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:16 --> Input Class Initialized
INFO - 2025-06-01 14:14:16 --> Language Class Initialized
INFO - 2025-06-01 14:14:16 --> Loader Class Initialized
INFO - 2025-06-01 14:14:16 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:16 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:16 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:16 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:16 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:16 --> Controller Class Initialized
INFO - 2025-06-01 14:14:16 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:16 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:14:16 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:16 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:16 --> Model "Crud" initialized
INFO - 2025-06-01 14:14:16 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-01 14:14:16 --> File loaded: /var/www/html/hris_lnd/application/views/home.php
INFO - 2025-06-01 14:14:16 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:16 --> Total execution time: 0.0363
INFO - 2025-06-01 14:14:17 --> Config Class Initialized
INFO - 2025-06-01 14:14:17 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:17 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:17 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:17 --> URI Class Initialized
INFO - 2025-06-01 14:14:17 --> Router Class Initialized
INFO - 2025-06-01 14:14:17 --> Output Class Initialized
INFO - 2025-06-01 14:14:17 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:17 --> Input Class Initialized
INFO - 2025-06-01 14:14:17 --> Language Class Initialized
INFO - 2025-06-01 14:14:17 --> Config Class Initialized
INFO - 2025-06-01 14:14:17 --> Config Class Initialized
INFO - 2025-06-01 14:14:17 --> Hooks Class Initialized
INFO - 2025-06-01 14:14:17 --> Hooks Class Initialized
INFO - 2025-06-01 14:14:17 --> Config Class Initialized
INFO - 2025-06-01 14:14:17 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:17 --> UTF-8 Support Enabled
DEBUG - 2025-06-01 14:14:17 --> UTF-8 Support Enabled
DEBUG - 2025-06-01 14:14:17 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:17 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:17 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:17 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:17 --> Loader Class Initialized
INFO - 2025-06-01 14:14:17 --> URI Class Initialized
INFO - 2025-06-01 14:14:17 --> URI Class Initialized
INFO - 2025-06-01 14:14:17 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:17 --> URI Class Initialized
INFO - 2025-06-01 14:14:17 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:17 --> Router Class Initialized
INFO - 2025-06-01 14:14:17 --> Router Class Initialized
INFO - 2025-06-01 14:14:17 --> Router Class Initialized
INFO - 2025-06-01 14:14:17 --> Output Class Initialized
INFO - 2025-06-01 14:14:17 --> Output Class Initialized
INFO - 2025-06-01 14:14:17 --> Output Class Initialized
INFO - 2025-06-01 14:14:17 --> Security Class Initialized
INFO - 2025-06-01 14:14:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:17 --> Security Class Initialized
INFO - 2025-06-01 14:14:17 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-01 14:14:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:17 --> Input Class Initialized
DEBUG - 2025-06-01 14:14:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:17 --> Language Class Initialized
INFO - 2025-06-01 14:14:17 --> Input Class Initialized
INFO - 2025-06-01 14:14:17 --> Input Class Initialized
INFO - 2025-06-01 14:14:17 --> Loader Class Initialized
INFO - 2025-06-01 14:14:17 --> Language Class Initialized
INFO - 2025-06-01 14:14:17 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:17 --> Language Class Initialized
INFO - 2025-06-01 14:14:17 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:17 --> Loader Class Initialized
INFO - 2025-06-01 14:14:17 --> Loader Class Initialized
INFO - 2025-06-01 14:14:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:17 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:17 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:17 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:17 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:17 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:17 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:17 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:17 --> Controller Class Initialized
INFO - 2025-06-01 14:14:17 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:17 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:14:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:17 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:17 --> Model "Crud" initialized
INFO - 2025-06-01 14:14:17 --> Config Class Initialized
INFO - 2025-06-01 14:14:17 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:17 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:17 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:17 --> URI Class Initialized
INFO - 2025-06-01 14:14:17 --> Router Class Initialized
INFO - 2025-06-01 14:14:17 --> Output Class Initialized
INFO - 2025-06-01 14:14:17 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:17 --> Input Class Initialized
INFO - 2025-06-01 14:14:17 --> Language Class Initialized
INFO - 2025-06-01 14:14:17 --> Loader Class Initialized
INFO - 2025-06-01 14:14:17 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:17 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:17 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:17 --> Config Class Initialized
INFO - 2025-06-01 14:14:17 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:17 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:17 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:17 --> URI Class Initialized
INFO - 2025-06-01 14:14:17 --> Router Class Initialized
INFO - 2025-06-01 14:14:17 --> Output Class Initialized
INFO - 2025-06-01 14:14:17 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:17 --> Input Class Initialized
INFO - 2025-06-01 14:14:17 --> Language Class Initialized
INFO - 2025-06-01 14:14:17 --> Loader Class Initialized
INFO - 2025-06-01 14:14:17 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:17 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:17 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:17 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-01 14:14:17 --> File loaded: /var/www/html/hris_lnd/application/views/dashboard/dashboard.php
INFO - 2025-06-01 14:14:17 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:17 --> Total execution time: 0.3404
INFO - 2025-06-01 14:14:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:17 --> Controller Class Initialized
INFO - 2025-06-01 14:14:17 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:17 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:14:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:17 --> Model "Crud" initialized
INFO - 2025-06-01 14:14:17 --> Config Class Initialized
INFO - 2025-06-01 14:14:17 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:17 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:17 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:17 --> URI Class Initialized
INFO - 2025-06-01 14:14:17 --> Router Class Initialized
INFO - 2025-06-01 14:14:17 --> Output Class Initialized
INFO - 2025-06-01 14:14:17 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:17 --> Input Class Initialized
INFO - 2025-06-01 14:14:17 --> Language Class Initialized
INFO - 2025-06-01 14:14:17 --> Loader Class Initialized
INFO - 2025-06-01 14:14:17 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:17 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:17 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:17 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:17 --> Total execution time: 0.3636
INFO - 2025-06-01 14:14:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:17 --> Controller Class Initialized
INFO - 2025-06-01 14:14:17 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:17 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:14:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:17 --> Config Class Initialized
INFO - 2025-06-01 14:14:17 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:17 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:17 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:17 --> URI Class Initialized
INFO - 2025-06-01 14:14:17 --> Router Class Initialized
INFO - 2025-06-01 14:14:17 --> Output Class Initialized
INFO - 2025-06-01 14:14:17 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:17 --> Input Class Initialized
INFO - 2025-06-01 14:14:17 --> Language Class Initialized
INFO - 2025-06-01 14:14:17 --> Loader Class Initialized
INFO - 2025-06-01 14:14:17 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:17 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:17 --> Model "Crud" initialized
INFO - 2025-06-01 14:14:17 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:17 --> Config Class Initialized
INFO - 2025-06-01 14:14:17 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:17 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:17 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:17 --> URI Class Initialized
INFO - 2025-06-01 14:14:17 --> Router Class Initialized
INFO - 2025-06-01 14:14:17 --> Output Class Initialized
INFO - 2025-06-01 14:14:17 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:17 --> Input Class Initialized
INFO - 2025-06-01 14:14:17 --> Language Class Initialized
INFO - 2025-06-01 14:14:17 --> Loader Class Initialized
INFO - 2025-06-01 14:14:17 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:17 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:17 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:17 --> Config Class Initialized
INFO - 2025-06-01 14:14:17 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:17 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:17 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:17 --> URI Class Initialized
INFO - 2025-06-01 14:14:17 --> Router Class Initialized
INFO - 2025-06-01 14:14:17 --> Output Class Initialized
INFO - 2025-06-01 14:14:17 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:17 --> Input Class Initialized
INFO - 2025-06-01 14:14:17 --> Language Class Initialized
INFO - 2025-06-01 14:14:17 --> Loader Class Initialized
INFO - 2025-06-01 14:14:17 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:17 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:17 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:17 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:17 --> Total execution time: 0.4862
INFO - 2025-06-01 14:14:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:17 --> Controller Class Initialized
INFO - 2025-06-01 14:14:17 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:17 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:14:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:17 --> Model "Crud" initialized
INFO - 2025-06-01 14:14:18 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:18 --> Total execution time: 0.5204
INFO - 2025-06-01 14:14:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:18 --> Controller Class Initialized
INFO - 2025-06-01 14:14:18 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:18 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:14:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:18 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:18 --> Model "Crud" initialized
INFO - 2025-06-01 14:14:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:18 --> Controller Class Initialized
INFO - 2025-06-01 14:14:18 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:18 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:14:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:18 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:18 --> Model "Crud" initialized
INFO - 2025-06-01 14:14:18 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-01 14:14:18 --> File loaded: /var/www/html/hris_lnd/application/views/dashboard/dashboard.php
INFO - 2025-06-01 14:14:18 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:18 --> Total execution time: 0.3918
INFO - 2025-06-01 14:14:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:18 --> Controller Class Initialized
INFO - 2025-06-01 14:14:18 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:18 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:14:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:18 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:18 --> Model "Crud" initialized
INFO - 2025-06-01 14:14:18 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-01 14:14:18 --> File loaded: /var/www/html/hris_lnd/application/views/dashboard/dashboard.php
INFO - 2025-06-01 14:14:18 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:18 --> Total execution time: 0.4794
INFO - 2025-06-01 14:14:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:18 --> Controller Class Initialized
INFO - 2025-06-01 14:14:18 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:18 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:14:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:18 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:18 --> Model "Crud" initialized
INFO - 2025-06-01 14:14:18 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-01 14:14:18 --> File loaded: /var/www/html/hris_lnd/application/views/dashboard/dashboard.php
INFO - 2025-06-01 14:14:18 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:18 --> Total execution time: 0.6373
INFO - 2025-06-01 14:14:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:18 --> Controller Class Initialized
INFO - 2025-06-01 14:14:18 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:18 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:14:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:18 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:18 --> Model "Crud" initialized
INFO - 2025-06-01 14:14:18 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-01 14:14:18 --> File loaded: /var/www/html/hris_lnd/application/views/dashboard/dashboard.php
INFO - 2025-06-01 14:14:18 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:18 --> Total execution time: 0.7536
INFO - 2025-06-01 14:14:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:18 --> Controller Class Initialized
INFO - 2025-06-01 14:14:18 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:18 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:14:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:18 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:18 --> Model "Crud" initialized
INFO - 2025-06-01 14:14:19 --> Config Class Initialized
INFO - 2025-06-01 14:14:19 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:19 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:19 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:19 --> URI Class Initialized
INFO - 2025-06-01 14:14:19 --> Router Class Initialized
INFO - 2025-06-01 14:14:19 --> Output Class Initialized
INFO - 2025-06-01 14:14:19 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:19 --> Input Class Initialized
INFO - 2025-06-01 14:14:19 --> Language Class Initialized
INFO - 2025-06-01 14:14:19 --> Loader Class Initialized
INFO - 2025-06-01 14:14:19 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:19 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:19 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:19 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:19 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:19 --> Controller Class Initialized
INFO - 2025-06-01 14:14:19 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:19 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:14:19 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:19 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:19 --> Config Class Initialized
INFO - 2025-06-01 14:14:19 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:19 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:19 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:19 --> URI Class Initialized
INFO - 2025-06-01 14:14:19 --> Router Class Initialized
INFO - 2025-06-01 14:14:19 --> Output Class Initialized
INFO - 2025-06-01 14:14:19 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:19 --> Input Class Initialized
INFO - 2025-06-01 14:14:19 --> Language Class Initialized
INFO - 2025-06-01 14:14:19 --> Model "Crud" initialized
INFO - 2025-06-01 14:14:19 --> Loader Class Initialized
INFO - 2025-06-01 14:14:19 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:19 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:19 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:19 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:19 --> Config Class Initialized
INFO - 2025-06-01 14:14:19 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:19 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:19 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:19 --> URI Class Initialized
INFO - 2025-06-01 14:14:19 --> Router Class Initialized
INFO - 2025-06-01 14:14:19 --> Output Class Initialized
INFO - 2025-06-01 14:14:19 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:19 --> Input Class Initialized
INFO - 2025-06-01 14:14:19 --> Language Class Initialized
INFO - 2025-06-01 14:14:19 --> Loader Class Initialized
INFO - 2025-06-01 14:14:19 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:19 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:19 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:19 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:19 --> Config Class Initialized
INFO - 2025-06-01 14:14:19 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:19 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:19 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:19 --> URI Class Initialized
INFO - 2025-06-01 14:14:19 --> Router Class Initialized
INFO - 2025-06-01 14:14:19 --> Output Class Initialized
INFO - 2025-06-01 14:14:19 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:19 --> Input Class Initialized
INFO - 2025-06-01 14:14:19 --> Language Class Initialized
INFO - 2025-06-01 14:14:19 --> Loader Class Initialized
INFO - 2025-06-01 14:14:19 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:19 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:19 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:19 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:19 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:19 --> Total execution time: 0.0518
INFO - 2025-06-01 14:14:19 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:19 --> Controller Class Initialized
INFO - 2025-06-01 14:14:19 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:19 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:14:19 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:19 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:19 --> Model "Crud" initialized
INFO - 2025-06-01 14:14:19 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:19 --> Total execution time: 0.0520
INFO - 2025-06-01 14:14:19 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:19 --> Controller Class Initialized
INFO - 2025-06-01 14:14:19 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:19 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:14:19 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:19 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:19 --> Model "Crud" initialized
INFO - 2025-06-01 14:14:19 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:19 --> Total execution time: 0.0609
INFO - 2025-06-01 14:14:19 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:19 --> Controller Class Initialized
INFO - 2025-06-01 14:14:19 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:19 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:14:19 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:19 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:19 --> Model "Crud" initialized
INFO - 2025-06-01 14:14:19 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:19 --> Total execution time: 0.0465
INFO - 2025-06-01 14:14:27 --> Config Class Initialized
INFO - 2025-06-01 14:14:27 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:27 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:27 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:27 --> URI Class Initialized
INFO - 2025-06-01 14:14:27 --> Router Class Initialized
INFO - 2025-06-01 14:14:27 --> Output Class Initialized
INFO - 2025-06-01 14:14:27 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:27 --> Input Class Initialized
INFO - 2025-06-01 14:14:27 --> Config Class Initialized
INFO - 2025-06-01 14:14:27 --> Language Class Initialized
INFO - 2025-06-01 14:14:27 --> Hooks Class Initialized
INFO - 2025-06-01 14:14:27 --> Loader Class Initialized
DEBUG - 2025-06-01 14:14:27 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:27 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:27 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:27 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:27 --> URI Class Initialized
INFO - 2025-06-01 14:14:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:27 --> Router Class Initialized
INFO - 2025-06-01 14:14:27 --> Output Class Initialized
INFO - 2025-06-01 14:14:27 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:27 --> Input Class Initialized
INFO - 2025-06-01 14:14:27 --> Language Class Initialized
INFO - 2025-06-01 14:14:27 --> Loader Class Initialized
INFO - 2025-06-01 14:14:27 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:27 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:27 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:27 --> Controller Class Initialized
INFO - 2025-06-01 14:14:27 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:27 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:14:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:27 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:27 --> Model "Crud" initialized
INFO - 2025-06-01 14:14:27 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:27 --> Total execution time: 0.0257
INFO - 2025-06-01 14:14:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:27 --> Controller Class Initialized
INFO - 2025-06-01 14:14:27 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:27 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:14:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:27 --> Model "Crud" initialized
INFO - 2025-06-01 14:14:27 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:27 --> Total execution time: 0.0403
INFO - 2025-06-01 14:14:28 --> Config Class Initialized
INFO - 2025-06-01 14:14:28 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:28 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:28 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:28 --> URI Class Initialized
INFO - 2025-06-01 14:14:28 --> Router Class Initialized
INFO - 2025-06-01 14:14:28 --> Output Class Initialized
INFO - 2025-06-01 14:14:28 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:28 --> Input Class Initialized
INFO - 2025-06-01 14:14:28 --> Language Class Initialized
INFO - 2025-06-01 14:14:28 --> Loader Class Initialized
INFO - 2025-06-01 14:14:28 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:28 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:28 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:28 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:28 --> Controller Class Initialized
INFO - 2025-06-01 14:14:28 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:14:28 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:28 --> Form Validation Class Initialized
INFO - 2025-06-01 14:14:28 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:28 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:14:28 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:14:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:28 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-01 14:14:28 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/request-training.php
INFO - 2025-06-01 14:14:28 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:28 --> Total execution time: 0.0246
INFO - 2025-06-01 14:14:28 --> Config Class Initialized
INFO - 2025-06-01 14:14:28 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:28 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:28 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:28 --> URI Class Initialized
INFO - 2025-06-01 14:14:28 --> Router Class Initialized
INFO - 2025-06-01 14:14:28 --> Output Class Initialized
INFO - 2025-06-01 14:14:28 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:28 --> Input Class Initialized
INFO - 2025-06-01 14:14:28 --> Language Class Initialized
INFO - 2025-06-01 14:14:28 --> Loader Class Initialized
INFO - 2025-06-01 14:14:28 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:28 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:28 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:28 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:28 --> Controller Class Initialized
INFO - 2025-06-01 14:14:28 --> Model "TrainingActivityModel" initialized
INFO - 2025-06-01 14:14:28 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:28 --> Form Validation Class Initialized
INFO - 2025-06-01 14:14:28 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:28 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:14:28 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:14:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:28 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:28 --> Total execution time: 0.0337
INFO - 2025-06-01 14:14:28 --> Config Class Initialized
INFO - 2025-06-01 14:14:28 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:28 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:28 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:28 --> URI Class Initialized
INFO - 2025-06-01 14:14:28 --> Router Class Initialized
INFO - 2025-06-01 14:14:28 --> Output Class Initialized
INFO - 2025-06-01 14:14:28 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:28 --> Input Class Initialized
INFO - 2025-06-01 14:14:28 --> Language Class Initialized
INFO - 2025-06-01 14:14:28 --> Loader Class Initialized
INFO - 2025-06-01 14:14:28 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:28 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:28 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:28 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:28 --> Controller Class Initialized
INFO - 2025-06-01 14:14:28 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:14:28 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:28 --> Form Validation Class Initialized
INFO - 2025-06-01 14:14:28 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:28 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:14:28 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:14:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:28 --> Config Class Initialized
INFO - 2025-06-01 14:14:28 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:28 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:28 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:28 --> URI Class Initialized
INFO - 2025-06-01 14:14:28 --> Router Class Initialized
INFO - 2025-06-01 14:14:28 --> Output Class Initialized
INFO - 2025-06-01 14:14:28 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:28 --> Input Class Initialized
INFO - 2025-06-01 14:14:28 --> Language Class Initialized
INFO - 2025-06-01 14:14:28 --> Loader Class Initialized
INFO - 2025-06-01 14:14:28 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:28 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:28 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:28 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:28 --> Total execution time: 0.0162
INFO - 2025-06-01 14:14:28 --> Config Class Initialized
INFO - 2025-06-01 14:14:28 --> Email Class Initialized
INFO - 2025-06-01 14:14:28 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-01 14:14:28 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:28 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:28 --> URI Class Initialized
INFO - 2025-06-01 14:14:28 --> Controller Class Initialized
INFO - 2025-06-01 14:14:28 --> Router Class Initialized
INFO - 2025-06-01 14:14:28 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:14:28 --> Output Class Initialized
INFO - 2025-06-01 14:14:28 --> Security Class Initialized
INFO - 2025-06-01 14:14:28 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:28 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:14:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:28 --> Input Class Initialized
INFO - 2025-06-01 14:14:28 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:28 --> Language Class Initialized
INFO - 2025-06-01 14:14:28 --> Loader Class Initialized
INFO - 2025-06-01 14:14:28 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:28 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:28 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:28 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:14:28 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:14:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:28 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:28 --> Config Class Initialized
INFO - 2025-06-01 14:14:28 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:28 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:28 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:28 --> URI Class Initialized
INFO - 2025-06-01 14:14:28 --> Router Class Initialized
INFO - 2025-06-01 14:14:28 --> Output Class Initialized
INFO - 2025-06-01 14:14:28 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:28 --> Input Class Initialized
INFO - 2025-06-01 14:14:28 --> Language Class Initialized
INFO - 2025-06-01 14:14:28 --> Loader Class Initialized
INFO - 2025-06-01 14:14:28 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:28 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:28 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:28 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:28 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:28 --> Total execution time: 0.0268
INFO - 2025-06-01 14:14:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:28 --> Controller Class Initialized
INFO - 2025-06-01 14:14:28 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:14:28 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:28 --> Form Validation Class Initialized
INFO - 2025-06-01 14:14:28 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:28 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:14:28 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:14:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:28 --> Config Class Initialized
INFO - 2025-06-01 14:14:28 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:28 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:28 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:28 --> URI Class Initialized
INFO - 2025-06-01 14:14:28 --> Router Class Initialized
INFO - 2025-06-01 14:14:28 --> Output Class Initialized
INFO - 2025-06-01 14:14:28 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:28 --> Input Class Initialized
INFO - 2025-06-01 14:14:28 --> Language Class Initialized
INFO - 2025-06-01 14:14:28 --> Loader Class Initialized
INFO - 2025-06-01 14:14:28 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:28 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:28 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:28 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:28 --> Total execution time: 0.0349
INFO - 2025-06-01 14:14:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:28 --> Controller Class Initialized
INFO - 2025-06-01 14:14:28 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:14:28 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:28 --> Form Validation Class Initialized
INFO - 2025-06-01 14:14:28 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:28 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:28 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:14:28 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:14:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:28 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:28 --> Total execution time: 0.0286
INFO - 2025-06-01 14:14:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:28 --> Controller Class Initialized
INFO - 2025-06-01 14:14:28 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:14:28 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:28 --> Form Validation Class Initialized
INFO - 2025-06-01 14:14:28 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:28 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:14:28 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:14:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:28 --> Config Class Initialized
INFO - 2025-06-01 14:14:28 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:28 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:28 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:28 --> URI Class Initialized
INFO - 2025-06-01 14:14:28 --> Router Class Initialized
INFO - 2025-06-01 14:14:28 --> Output Class Initialized
INFO - 2025-06-01 14:14:28 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:28 --> Input Class Initialized
INFO - 2025-06-01 14:14:28 --> Language Class Initialized
INFO - 2025-06-01 14:14:28 --> Loader Class Initialized
INFO - 2025-06-01 14:14:28 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:28 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:28 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:28 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:28 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:28 --> Total execution time: 0.0449
INFO - 2025-06-01 14:14:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:28 --> Controller Class Initialized
INFO - 2025-06-01 14:14:28 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:14:28 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:28 --> Form Validation Class Initialized
INFO - 2025-06-01 14:14:28 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:28 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:14:28 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:14:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:29 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:29 --> Total execution time: 0.0274
INFO - 2025-06-01 14:14:33 --> Config Class Initialized
INFO - 2025-06-01 14:14:33 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:33 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:33 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:33 --> URI Class Initialized
INFO - 2025-06-01 14:14:33 --> Router Class Initialized
INFO - 2025-06-01 14:14:33 --> Output Class Initialized
INFO - 2025-06-01 14:14:33 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:33 --> Input Class Initialized
INFO - 2025-06-01 14:14:33 --> Language Class Initialized
INFO - 2025-06-01 14:14:33 --> Loader Class Initialized
INFO - 2025-06-01 14:14:33 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:33 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:33 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:33 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:33 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:33 --> Controller Class Initialized
INFO - 2025-06-01 14:14:33 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:14:33 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:33 --> Form Validation Class Initialized
INFO - 2025-06-01 14:14:33 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:33 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:14:33 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:14:33 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:33 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:33 --> Total execution time: 0.0181
INFO - 2025-06-01 14:14:35 --> Config Class Initialized
INFO - 2025-06-01 14:14:35 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:35 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:35 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:35 --> URI Class Initialized
INFO - 2025-06-01 14:14:35 --> Router Class Initialized
INFO - 2025-06-01 14:14:35 --> Output Class Initialized
INFO - 2025-06-01 14:14:35 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:35 --> Input Class Initialized
INFO - 2025-06-01 14:14:35 --> Language Class Initialized
INFO - 2025-06-01 14:14:35 --> Loader Class Initialized
INFO - 2025-06-01 14:14:35 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:35 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:35 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:35 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:35 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:35 --> Controller Class Initialized
INFO - 2025-06-01 14:14:35 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:14:35 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:35 --> Form Validation Class Initialized
INFO - 2025-06-01 14:14:35 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:35 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:14:35 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:14:35 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:35 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:35 --> Total execution time: 0.0153
INFO - 2025-06-01 14:14:37 --> Config Class Initialized
INFO - 2025-06-01 14:14:37 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:37 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:37 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:37 --> URI Class Initialized
INFO - 2025-06-01 14:14:37 --> Router Class Initialized
INFO - 2025-06-01 14:14:37 --> Output Class Initialized
INFO - 2025-06-01 14:14:37 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:37 --> Input Class Initialized
INFO - 2025-06-01 14:14:37 --> Language Class Initialized
INFO - 2025-06-01 14:14:37 --> Loader Class Initialized
INFO - 2025-06-01 14:14:37 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:37 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:37 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:37 --> Config Class Initialized
INFO - 2025-06-01 14:14:37 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:37 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:37 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:37 --> URI Class Initialized
INFO - 2025-06-01 14:14:37 --> Router Class Initialized
INFO - 2025-06-01 14:14:37 --> Output Class Initialized
INFO - 2025-06-01 14:14:37 --> Email Class Initialized
INFO - 2025-06-01 14:14:37 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-01 14:14:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:37 --> Input Class Initialized
INFO - 2025-06-01 14:14:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:37 --> Language Class Initialized
INFO - 2025-06-01 14:14:37 --> Controller Class Initialized
INFO - 2025-06-01 14:14:37 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:37 --> Loader Class Initialized
INFO - 2025-06-01 14:14:37 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:14:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:37 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:37 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:37 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:37 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:37 --> Model "Crud" initialized
INFO - 2025-06-01 14:14:37 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:37 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:37 --> Total execution time: 0.0229
INFO - 2025-06-01 14:14:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:37 --> Controller Class Initialized
INFO - 2025-06-01 14:14:37 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:37 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:14:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:37 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:37 --> Model "Crud" initialized
INFO - 2025-06-01 14:14:37 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:37 --> Total execution time: 0.0361
INFO - 2025-06-01 14:14:47 --> Config Class Initialized
INFO - 2025-06-01 14:14:47 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:47 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:47 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:47 --> URI Class Initialized
INFO - 2025-06-01 14:14:47 --> Router Class Initialized
INFO - 2025-06-01 14:14:47 --> Output Class Initialized
INFO - 2025-06-01 14:14:47 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:47 --> Input Class Initialized
INFO - 2025-06-01 14:14:47 --> Language Class Initialized
INFO - 2025-06-01 14:14:47 --> Loader Class Initialized
INFO - 2025-06-01 14:14:47 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:47 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:47 --> Config Class Initialized
INFO - 2025-06-01 14:14:47 --> Hooks Class Initialized
INFO - 2025-06-01 14:14:47 --> Database Driver Class Initialized
DEBUG - 2025-06-01 14:14:47 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:47 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:47 --> URI Class Initialized
INFO - 2025-06-01 14:14:47 --> Router Class Initialized
INFO - 2025-06-01 14:14:47 --> Output Class Initialized
INFO - 2025-06-01 14:14:47 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:47 --> Input Class Initialized
INFO - 2025-06-01 14:14:47 --> Language Class Initialized
INFO - 2025-06-01 14:14:47 --> Loader Class Initialized
INFO - 2025-06-01 14:14:47 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:47 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:47 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:47 --> Controller Class Initialized
INFO - 2025-06-01 14:14:47 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:47 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:14:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:47 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:47 --> Model "Crud" initialized
INFO - 2025-06-01 14:14:47 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:47 --> Total execution time: 0.0204
INFO - 2025-06-01 14:14:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:47 --> Controller Class Initialized
INFO - 2025-06-01 14:14:47 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:47 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:14:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:47 --> Model "Crud" initialized
INFO - 2025-06-01 14:14:47 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:47 --> Total execution time: 0.0362
INFO - 2025-06-01 14:14:50 --> Config Class Initialized
INFO - 2025-06-01 14:14:50 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:50 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:50 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:50 --> URI Class Initialized
INFO - 2025-06-01 14:14:50 --> Router Class Initialized
INFO - 2025-06-01 14:14:50 --> Output Class Initialized
INFO - 2025-06-01 14:14:50 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:50 --> Input Class Initialized
INFO - 2025-06-01 14:14:50 --> Language Class Initialized
INFO - 2025-06-01 14:14:50 --> Loader Class Initialized
INFO - 2025-06-01 14:14:50 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:50 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:50 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:50 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:50 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:50 --> Controller Class Initialized
INFO - 2025-06-01 14:14:50 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:14:50 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:50 --> Form Validation Class Initialized
INFO - 2025-06-01 14:14:50 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:50 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:14:50 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:14:50 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:50 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:50 --> Total execution time: 0.0373
INFO - 2025-06-01 14:14:57 --> Config Class Initialized
INFO - 2025-06-01 14:14:57 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:57 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:57 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:57 --> URI Class Initialized
INFO - 2025-06-01 14:14:57 --> Router Class Initialized
INFO - 2025-06-01 14:14:57 --> Output Class Initialized
INFO - 2025-06-01 14:14:57 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:57 --> Input Class Initialized
INFO - 2025-06-01 14:14:57 --> Language Class Initialized
INFO - 2025-06-01 14:14:57 --> Loader Class Initialized
INFO - 2025-06-01 14:14:57 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:57 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:57 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:57 --> Controller Class Initialized
INFO - 2025-06-01 14:14:57 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:14:57 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:57 --> Form Validation Class Initialized
INFO - 2025-06-01 14:14:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:57 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:14:57 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:14:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:57 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:57 --> Total execution time: 0.0465
INFO - 2025-06-01 14:14:57 --> Config Class Initialized
INFO - 2025-06-01 14:14:57 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:57 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:57 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:57 --> URI Class Initialized
INFO - 2025-06-01 14:14:57 --> Router Class Initialized
INFO - 2025-06-01 14:14:57 --> Output Class Initialized
INFO - 2025-06-01 14:14:57 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:57 --> Input Class Initialized
INFO - 2025-06-01 14:14:57 --> Language Class Initialized
INFO - 2025-06-01 14:14:57 --> Loader Class Initialized
INFO - 2025-06-01 14:14:57 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:57 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:57 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:57 --> Controller Class Initialized
INFO - 2025-06-01 14:14:57 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:14:57 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:57 --> Form Validation Class Initialized
INFO - 2025-06-01 14:14:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:57 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:14:57 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:14:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:57 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:57 --> Total execution time: 0.0191
INFO - 2025-06-01 14:14:57 --> Config Class Initialized
INFO - 2025-06-01 14:14:57 --> Hooks Class Initialized
INFO - 2025-06-01 14:14:57 --> Config Class Initialized
DEBUG - 2025-06-01 14:14:57 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:57 --> Hooks Class Initialized
INFO - 2025-06-01 14:14:57 --> Utf8 Class Initialized
DEBUG - 2025-06-01 14:14:57 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:57 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:57 --> URI Class Initialized
INFO - 2025-06-01 14:14:57 --> URI Class Initialized
INFO - 2025-06-01 14:14:57 --> Router Class Initialized
INFO - 2025-06-01 14:14:57 --> Router Class Initialized
INFO - 2025-06-01 14:14:57 --> Output Class Initialized
INFO - 2025-06-01 14:14:57 --> Output Class Initialized
INFO - 2025-06-01 14:14:57 --> Security Class Initialized
INFO - 2025-06-01 14:14:57 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-01 14:14:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:57 --> Input Class Initialized
INFO - 2025-06-01 14:14:57 --> Input Class Initialized
INFO - 2025-06-01 14:14:57 --> Language Class Initialized
INFO - 2025-06-01 14:14:57 --> Language Class Initialized
INFO - 2025-06-01 14:14:57 --> Loader Class Initialized
INFO - 2025-06-01 14:14:57 --> Loader Class Initialized
INFO - 2025-06-01 14:14:57 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:57 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:57 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:57 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:57 --> Email Class Initialized
INFO - 2025-06-01 14:14:57 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-01 14:14:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:57 --> Controller Class Initialized
INFO - 2025-06-01 14:14:57 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:57 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:14:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:57 --> Model "Crud" initialized
INFO - 2025-06-01 14:14:57 --> Config Class Initialized
INFO - 2025-06-01 14:14:57 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:14:57 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:14:57 --> Utf8 Class Initialized
INFO - 2025-06-01 14:14:57 --> URI Class Initialized
INFO - 2025-06-01 14:14:57 --> Router Class Initialized
INFO - 2025-06-01 14:14:57 --> Output Class Initialized
INFO - 2025-06-01 14:14:57 --> Security Class Initialized
DEBUG - 2025-06-01 14:14:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:14:57 --> Input Class Initialized
INFO - 2025-06-01 14:14:57 --> Language Class Initialized
INFO - 2025-06-01 14:14:57 --> Loader Class Initialized
INFO - 2025-06-01 14:14:57 --> Helper loaded: url_helper
INFO - 2025-06-01 14:14:57 --> Helper loaded: file_helper
INFO - 2025-06-01 14:14:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:57 --> Email Class Initialized
DEBUG - 2025-06-01 14:14:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:14:57 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:57 --> Total execution time: 0.0361
INFO - 2025-06-01 14:14:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:57 --> Controller Class Initialized
INFO - 2025-06-01 14:14:57 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:57 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:14:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:57 --> Model "Crud" initialized
INFO - 2025-06-01 14:14:57 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:57 --> Total execution time: 0.0545
INFO - 2025-06-01 14:14:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:14:57 --> Controller Class Initialized
INFO - 2025-06-01 14:14:57 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:14:57 --> Helper loaded: form_helper
INFO - 2025-06-01 14:14:57 --> Form Validation Class Initialized
INFO - 2025-06-01 14:14:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:14:57 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:14:57 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:14:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:14:57 --> Final output sent to browser
DEBUG - 2025-06-01 14:14:57 --> Total execution time: 0.0536
INFO - 2025-06-01 14:15:08 --> Config Class Initialized
INFO - 2025-06-01 14:15:08 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:15:08 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:15:08 --> Utf8 Class Initialized
INFO - 2025-06-01 14:15:08 --> URI Class Initialized
INFO - 2025-06-01 14:15:08 --> Router Class Initialized
INFO - 2025-06-01 14:15:08 --> Output Class Initialized
INFO - 2025-06-01 14:15:08 --> Security Class Initialized
DEBUG - 2025-06-01 14:15:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:15:08 --> Input Class Initialized
INFO - 2025-06-01 14:15:08 --> Language Class Initialized
INFO - 2025-06-01 14:15:08 --> Loader Class Initialized
INFO - 2025-06-01 14:15:08 --> Helper loaded: url_helper
INFO - 2025-06-01 14:15:08 --> Helper loaded: file_helper
INFO - 2025-06-01 14:15:08 --> Database Driver Class Initialized
INFO - 2025-06-01 14:15:08 --> Config Class Initialized
INFO - 2025-06-01 14:15:08 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:15:08 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:15:08 --> Utf8 Class Initialized
INFO - 2025-06-01 14:15:08 --> URI Class Initialized
INFO - 2025-06-01 14:15:08 --> Router Class Initialized
INFO - 2025-06-01 14:15:08 --> Output Class Initialized
INFO - 2025-06-01 14:15:08 --> Security Class Initialized
DEBUG - 2025-06-01 14:15:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:15:08 --> Input Class Initialized
INFO - 2025-06-01 14:15:08 --> Language Class Initialized
INFO - 2025-06-01 14:15:08 --> Loader Class Initialized
INFO - 2025-06-01 14:15:08 --> Helper loaded: url_helper
INFO - 2025-06-01 14:15:08 --> Helper loaded: file_helper
INFO - 2025-06-01 14:15:08 --> Database Driver Class Initialized
INFO - 2025-06-01 14:15:08 --> Email Class Initialized
DEBUG - 2025-06-01 14:15:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:15:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:15:08 --> Controller Class Initialized
INFO - 2025-06-01 14:15:08 --> Helper loaded: form_helper
INFO - 2025-06-01 14:15:08 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:15:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:15:08 --> Database Driver Class Initialized
INFO - 2025-06-01 14:15:08 --> Email Class Initialized
DEBUG - 2025-06-01 14:15:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:15:08 --> Model "Crud" initialized
INFO - 2025-06-01 14:15:08 --> Final output sent to browser
DEBUG - 2025-06-01 14:15:08 --> Total execution time: 0.0140
INFO - 2025-06-01 14:15:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:15:08 --> Controller Class Initialized
INFO - 2025-06-01 14:15:08 --> Helper loaded: form_helper
INFO - 2025-06-01 14:15:08 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:15:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:15:08 --> Database Driver Class Initialized
INFO - 2025-06-01 14:15:08 --> Model "Crud" initialized
INFO - 2025-06-01 14:15:08 --> Final output sent to browser
DEBUG - 2025-06-01 14:15:08 --> Total execution time: 0.0249
INFO - 2025-06-01 14:15:17 --> Config Class Initialized
INFO - 2025-06-01 14:15:17 --> Hooks Class Initialized
INFO - 2025-06-01 14:15:17 --> Config Class Initialized
DEBUG - 2025-06-01 14:15:17 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:15:17 --> Hooks Class Initialized
INFO - 2025-06-01 14:15:17 --> Utf8 Class Initialized
DEBUG - 2025-06-01 14:15:17 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:15:17 --> Utf8 Class Initialized
INFO - 2025-06-01 14:15:17 --> URI Class Initialized
INFO - 2025-06-01 14:15:17 --> URI Class Initialized
INFO - 2025-06-01 14:15:17 --> Router Class Initialized
INFO - 2025-06-01 14:15:17 --> Router Class Initialized
INFO - 2025-06-01 14:15:17 --> Output Class Initialized
INFO - 2025-06-01 14:15:17 --> Output Class Initialized
INFO - 2025-06-01 14:15:17 --> Security Class Initialized
INFO - 2025-06-01 14:15:17 --> Security Class Initialized
DEBUG - 2025-06-01 14:15:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-01 14:15:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:15:17 --> Input Class Initialized
INFO - 2025-06-01 14:15:17 --> Input Class Initialized
INFO - 2025-06-01 14:15:17 --> Language Class Initialized
INFO - 2025-06-01 14:15:17 --> Language Class Initialized
INFO - 2025-06-01 14:15:17 --> Loader Class Initialized
INFO - 2025-06-01 14:15:17 --> Loader Class Initialized
INFO - 2025-06-01 14:15:17 --> Helper loaded: url_helper
INFO - 2025-06-01 14:15:17 --> Helper loaded: url_helper
INFO - 2025-06-01 14:15:17 --> Helper loaded: file_helper
INFO - 2025-06-01 14:15:17 --> Helper loaded: file_helper
INFO - 2025-06-01 14:15:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:15:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:15:17 --> Email Class Initialized
DEBUG - 2025-06-01 14:15:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:15:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:15:17 --> Controller Class Initialized
INFO - 2025-06-01 14:15:17 --> Email Class Initialized
INFO - 2025-06-01 14:15:17 --> Helper loaded: form_helper
INFO - 2025-06-01 14:15:17 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:15:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-01 14:15:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:15:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:15:17 --> Model "Crud" initialized
INFO - 2025-06-01 14:15:17 --> Final output sent to browser
DEBUG - 2025-06-01 14:15:17 --> Total execution time: 0.0176
INFO - 2025-06-01 14:15:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:15:17 --> Controller Class Initialized
INFO - 2025-06-01 14:15:17 --> Helper loaded: form_helper
INFO - 2025-06-01 14:15:17 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:15:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:15:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:15:17 --> Model "Crud" initialized
INFO - 2025-06-01 14:15:17 --> Final output sent to browser
DEBUG - 2025-06-01 14:15:17 --> Total execution time: 0.0285
INFO - 2025-06-01 14:15:27 --> Config Class Initialized
INFO - 2025-06-01 14:15:27 --> Hooks Class Initialized
INFO - 2025-06-01 14:15:27 --> Config Class Initialized
INFO - 2025-06-01 14:15:27 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:15:27 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:15:27 --> Utf8 Class Initialized
DEBUG - 2025-06-01 14:15:27 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:15:27 --> URI Class Initialized
INFO - 2025-06-01 14:15:27 --> Utf8 Class Initialized
INFO - 2025-06-01 14:15:27 --> Router Class Initialized
INFO - 2025-06-01 14:15:27 --> Output Class Initialized
INFO - 2025-06-01 14:15:27 --> Security Class Initialized
INFO - 2025-06-01 14:15:27 --> URI Class Initialized
DEBUG - 2025-06-01 14:15:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:15:27 --> Input Class Initialized
INFO - 2025-06-01 14:15:27 --> Language Class Initialized
INFO - 2025-06-01 14:15:27 --> Router Class Initialized
INFO - 2025-06-01 14:15:27 --> Output Class Initialized
INFO - 2025-06-01 14:15:27 --> Security Class Initialized
DEBUG - 2025-06-01 14:15:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:15:27 --> Input Class Initialized
INFO - 2025-06-01 14:15:27 --> Language Class Initialized
INFO - 2025-06-01 14:15:27 --> Loader Class Initialized
INFO - 2025-06-01 14:15:27 --> Loader Class Initialized
INFO - 2025-06-01 14:15:27 --> Helper loaded: url_helper
INFO - 2025-06-01 14:15:27 --> Helper loaded: url_helper
INFO - 2025-06-01 14:15:27 --> Helper loaded: file_helper
INFO - 2025-06-01 14:15:27 --> Helper loaded: file_helper
INFO - 2025-06-01 14:15:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:15:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:15:27 --> Email Class Initialized
INFO - 2025-06-01 14:15:27 --> Email Class Initialized
DEBUG - 2025-06-01 14:15:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-01 14:15:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:15:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:15:27 --> Controller Class Initialized
INFO - 2025-06-01 14:15:27 --> Helper loaded: form_helper
INFO - 2025-06-01 14:15:27 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:15:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:15:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:15:27 --> Model "Crud" initialized
INFO - 2025-06-01 14:15:27 --> Final output sent to browser
DEBUG - 2025-06-01 14:15:27 --> Total execution time: 0.0182
INFO - 2025-06-01 14:15:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:15:27 --> Controller Class Initialized
INFO - 2025-06-01 14:15:27 --> Helper loaded: form_helper
INFO - 2025-06-01 14:15:27 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:15:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:15:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:15:27 --> Model "Crud" initialized
INFO - 2025-06-01 14:15:27 --> Final output sent to browser
DEBUG - 2025-06-01 14:15:27 --> Total execution time: 0.0312
INFO - 2025-06-01 14:15:38 --> Config Class Initialized
INFO - 2025-06-01 14:15:38 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:15:38 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:15:38 --> Utf8 Class Initialized
INFO - 2025-06-01 14:15:38 --> URI Class Initialized
INFO - 2025-06-01 14:15:38 --> Router Class Initialized
INFO - 2025-06-01 14:15:38 --> Output Class Initialized
INFO - 2025-06-01 14:15:38 --> Security Class Initialized
DEBUG - 2025-06-01 14:15:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:15:38 --> Input Class Initialized
INFO - 2025-06-01 14:15:38 --> Language Class Initialized
INFO - 2025-06-01 14:15:38 --> Loader Class Initialized
INFO - 2025-06-01 14:15:38 --> Helper loaded: url_helper
INFO - 2025-06-01 14:15:38 --> Helper loaded: file_helper
INFO - 2025-06-01 14:15:38 --> Database Driver Class Initialized
INFO - 2025-06-01 14:15:38 --> Config Class Initialized
INFO - 2025-06-01 14:15:38 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:15:38 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:15:38 --> Utf8 Class Initialized
INFO - 2025-06-01 14:15:38 --> URI Class Initialized
INFO - 2025-06-01 14:15:38 --> Router Class Initialized
INFO - 2025-06-01 14:15:38 --> Email Class Initialized
INFO - 2025-06-01 14:15:38 --> Output Class Initialized
INFO - 2025-06-01 14:15:38 --> Security Class Initialized
DEBUG - 2025-06-01 14:15:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-01 14:15:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:15:38 --> Input Class Initialized
INFO - 2025-06-01 14:15:38 --> Language Class Initialized
INFO - 2025-06-01 14:15:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:15:38 --> Controller Class Initialized
INFO - 2025-06-01 14:15:38 --> Loader Class Initialized
INFO - 2025-06-01 14:15:38 --> Helper loaded: form_helper
INFO - 2025-06-01 14:15:38 --> Helper loaded: url_helper
INFO - 2025-06-01 14:15:38 --> Helper loaded: file_helper
INFO - 2025-06-01 14:15:38 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:15:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:15:38 --> Database Driver Class Initialized
INFO - 2025-06-01 14:15:38 --> Database Driver Class Initialized
INFO - 2025-06-01 14:15:38 --> Model "Crud" initialized
INFO - 2025-06-01 14:15:38 --> Email Class Initialized
DEBUG - 2025-06-01 14:15:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:15:38 --> Final output sent to browser
DEBUG - 2025-06-01 14:15:38 --> Total execution time: 0.0131
INFO - 2025-06-01 14:15:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:15:38 --> Controller Class Initialized
INFO - 2025-06-01 14:15:38 --> Helper loaded: form_helper
INFO - 2025-06-01 14:15:38 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:15:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:15:38 --> Database Driver Class Initialized
INFO - 2025-06-01 14:15:38 --> Model "Crud" initialized
INFO - 2025-06-01 14:15:38 --> Final output sent to browser
DEBUG - 2025-06-01 14:15:38 --> Total execution time: 0.0216
INFO - 2025-06-01 14:15:47 --> Config Class Initialized
INFO - 2025-06-01 14:15:47 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:15:47 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:15:47 --> Utf8 Class Initialized
INFO - 2025-06-01 14:15:47 --> URI Class Initialized
INFO - 2025-06-01 14:15:47 --> Config Class Initialized
INFO - 2025-06-01 14:15:47 --> Router Class Initialized
INFO - 2025-06-01 14:15:47 --> Hooks Class Initialized
INFO - 2025-06-01 14:15:47 --> Output Class Initialized
DEBUG - 2025-06-01 14:15:47 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:15:47 --> Security Class Initialized
INFO - 2025-06-01 14:15:47 --> Utf8 Class Initialized
DEBUG - 2025-06-01 14:15:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:15:47 --> Input Class Initialized
INFO - 2025-06-01 14:15:47 --> Language Class Initialized
INFO - 2025-06-01 14:15:47 --> URI Class Initialized
INFO - 2025-06-01 14:15:47 --> Loader Class Initialized
INFO - 2025-06-01 14:15:47 --> Router Class Initialized
INFO - 2025-06-01 14:15:47 --> Helper loaded: url_helper
INFO - 2025-06-01 14:15:47 --> Output Class Initialized
INFO - 2025-06-01 14:15:47 --> Security Class Initialized
INFO - 2025-06-01 14:15:47 --> Helper loaded: file_helper
DEBUG - 2025-06-01 14:15:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:15:47 --> Input Class Initialized
INFO - 2025-06-01 14:15:47 --> Language Class Initialized
INFO - 2025-06-01 14:15:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:15:47 --> Loader Class Initialized
INFO - 2025-06-01 14:15:47 --> Helper loaded: url_helper
INFO - 2025-06-01 14:15:47 --> Helper loaded: file_helper
INFO - 2025-06-01 14:15:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:15:47 --> Email Class Initialized
DEBUG - 2025-06-01 14:15:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:15:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:15:47 --> Email Class Initialized
INFO - 2025-06-01 14:15:47 --> Controller Class Initialized
DEBUG - 2025-06-01 14:15:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:15:47 --> Helper loaded: form_helper
INFO - 2025-06-01 14:15:47 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:15:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:15:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:15:47 --> Model "Crud" initialized
INFO - 2025-06-01 14:15:47 --> Final output sent to browser
DEBUG - 2025-06-01 14:15:47 --> Total execution time: 0.0147
INFO - 2025-06-01 14:15:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:15:47 --> Controller Class Initialized
INFO - 2025-06-01 14:15:47 --> Helper loaded: form_helper
INFO - 2025-06-01 14:15:47 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:15:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:15:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:15:47 --> Model "Crud" initialized
INFO - 2025-06-01 14:15:47 --> Final output sent to browser
DEBUG - 2025-06-01 14:15:47 --> Total execution time: 0.0255
INFO - 2025-06-01 14:15:57 --> Config Class Initialized
INFO - 2025-06-01 14:15:57 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:15:57 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:15:57 --> Utf8 Class Initialized
INFO - 2025-06-01 14:15:57 --> URI Class Initialized
INFO - 2025-06-01 14:15:57 --> Router Class Initialized
INFO - 2025-06-01 14:15:57 --> Output Class Initialized
INFO - 2025-06-01 14:15:57 --> Security Class Initialized
DEBUG - 2025-06-01 14:15:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:15:57 --> Input Class Initialized
INFO - 2025-06-01 14:15:57 --> Language Class Initialized
INFO - 2025-06-01 14:15:57 --> Config Class Initialized
INFO - 2025-06-01 14:15:57 --> Loader Class Initialized
INFO - 2025-06-01 14:15:57 --> Hooks Class Initialized
INFO - 2025-06-01 14:15:57 --> Helper loaded: url_helper
DEBUG - 2025-06-01 14:15:57 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:15:57 --> Utf8 Class Initialized
INFO - 2025-06-01 14:15:57 --> Helper loaded: file_helper
INFO - 2025-06-01 14:15:57 --> URI Class Initialized
INFO - 2025-06-01 14:15:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:15:57 --> Router Class Initialized
INFO - 2025-06-01 14:15:57 --> Output Class Initialized
INFO - 2025-06-01 14:15:57 --> Security Class Initialized
DEBUG - 2025-06-01 14:15:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:15:57 --> Input Class Initialized
INFO - 2025-06-01 14:15:57 --> Language Class Initialized
INFO - 2025-06-01 14:15:57 --> Loader Class Initialized
INFO - 2025-06-01 14:15:57 --> Helper loaded: url_helper
INFO - 2025-06-01 14:15:57 --> Helper loaded: file_helper
INFO - 2025-06-01 14:15:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:15:57 --> Email Class Initialized
DEBUG - 2025-06-01 14:15:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:15:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:15:57 --> Controller Class Initialized
INFO - 2025-06-01 14:15:57 --> Helper loaded: form_helper
INFO - 2025-06-01 14:15:57 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:15:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:15:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:15:57 --> Email Class Initialized
DEBUG - 2025-06-01 14:15:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:15:57 --> Model "Crud" initialized
INFO - 2025-06-01 14:15:57 --> Final output sent to browser
DEBUG - 2025-06-01 14:15:57 --> Total execution time: 0.0144
INFO - 2025-06-01 14:15:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:15:57 --> Controller Class Initialized
INFO - 2025-06-01 14:15:57 --> Helper loaded: form_helper
INFO - 2025-06-01 14:15:57 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:15:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:15:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:15:57 --> Model "Crud" initialized
INFO - 2025-06-01 14:15:57 --> Final output sent to browser
DEBUG - 2025-06-01 14:15:57 --> Total execution time: 0.0257
INFO - 2025-06-01 14:16:08 --> Config Class Initialized
INFO - 2025-06-01 14:16:08 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:16:08 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:16:08 --> Utf8 Class Initialized
INFO - 2025-06-01 14:16:08 --> URI Class Initialized
INFO - 2025-06-01 14:16:08 --> Router Class Initialized
INFO - 2025-06-01 14:16:08 --> Output Class Initialized
INFO - 2025-06-01 14:16:08 --> Security Class Initialized
DEBUG - 2025-06-01 14:16:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:16:08 --> Input Class Initialized
INFO - 2025-06-01 14:16:08 --> Language Class Initialized
INFO - 2025-06-01 14:16:08 --> Loader Class Initialized
INFO - 2025-06-01 14:16:08 --> Helper loaded: url_helper
INFO - 2025-06-01 14:16:08 --> Helper loaded: file_helper
INFO - 2025-06-01 14:16:08 --> Config Class Initialized
INFO - 2025-06-01 14:16:08 --> Hooks Class Initialized
INFO - 2025-06-01 14:16:08 --> Database Driver Class Initialized
DEBUG - 2025-06-01 14:16:08 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:16:08 --> Utf8 Class Initialized
INFO - 2025-06-01 14:16:08 --> URI Class Initialized
INFO - 2025-06-01 14:16:08 --> Router Class Initialized
INFO - 2025-06-01 14:16:08 --> Output Class Initialized
INFO - 2025-06-01 14:16:08 --> Security Class Initialized
DEBUG - 2025-06-01 14:16:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:16:08 --> Input Class Initialized
INFO - 2025-06-01 14:16:08 --> Language Class Initialized
INFO - 2025-06-01 14:16:08 --> Loader Class Initialized
INFO - 2025-06-01 14:16:08 --> Helper loaded: url_helper
INFO - 2025-06-01 14:16:08 --> Helper loaded: file_helper
INFO - 2025-06-01 14:16:08 --> Database Driver Class Initialized
INFO - 2025-06-01 14:16:08 --> Email Class Initialized
DEBUG - 2025-06-01 14:16:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:16:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:16:08 --> Controller Class Initialized
INFO - 2025-06-01 14:16:08 --> Helper loaded: form_helper
INFO - 2025-06-01 14:16:08 --> Email Class Initialized
INFO - 2025-06-01 14:16:08 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:16:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:16:08 --> Database Driver Class Initialized
DEBUG - 2025-06-01 14:16:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:16:08 --> Model "Crud" initialized
INFO - 2025-06-01 14:16:08 --> Final output sent to browser
DEBUG - 2025-06-01 14:16:08 --> Total execution time: 0.0136
INFO - 2025-06-01 14:16:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:16:08 --> Controller Class Initialized
INFO - 2025-06-01 14:16:08 --> Helper loaded: form_helper
INFO - 2025-06-01 14:16:08 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:16:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:16:08 --> Database Driver Class Initialized
INFO - 2025-06-01 14:16:08 --> Model "Crud" initialized
INFO - 2025-06-01 14:16:08 --> Final output sent to browser
DEBUG - 2025-06-01 14:16:08 --> Total execution time: 0.0254
INFO - 2025-06-01 14:16:18 --> Config Class Initialized
INFO - 2025-06-01 14:16:18 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:16:18 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:16:18 --> Utf8 Class Initialized
INFO - 2025-06-01 14:16:18 --> URI Class Initialized
INFO - 2025-06-01 14:16:18 --> Router Class Initialized
INFO - 2025-06-01 14:16:18 --> Output Class Initialized
INFO - 2025-06-01 14:16:18 --> Security Class Initialized
DEBUG - 2025-06-01 14:16:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:16:18 --> Input Class Initialized
INFO - 2025-06-01 14:16:18 --> Language Class Initialized
INFO - 2025-06-01 14:16:18 --> Loader Class Initialized
INFO - 2025-06-01 14:16:18 --> Config Class Initialized
INFO - 2025-06-01 14:16:18 --> Helper loaded: url_helper
INFO - 2025-06-01 14:16:18 --> Hooks Class Initialized
INFO - 2025-06-01 14:16:18 --> Helper loaded: file_helper
DEBUG - 2025-06-01 14:16:18 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:16:18 --> Utf8 Class Initialized
INFO - 2025-06-01 14:16:18 --> Database Driver Class Initialized
INFO - 2025-06-01 14:16:18 --> URI Class Initialized
INFO - 2025-06-01 14:16:18 --> Router Class Initialized
INFO - 2025-06-01 14:16:18 --> Output Class Initialized
INFO - 2025-06-01 14:16:18 --> Security Class Initialized
DEBUG - 2025-06-01 14:16:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:16:18 --> Input Class Initialized
INFO - 2025-06-01 14:16:18 --> Language Class Initialized
INFO - 2025-06-01 14:16:18 --> Loader Class Initialized
INFO - 2025-06-01 14:16:18 --> Helper loaded: url_helper
INFO - 2025-06-01 14:16:18 --> Helper loaded: file_helper
INFO - 2025-06-01 14:16:18 --> Database Driver Class Initialized
INFO - 2025-06-01 14:16:18 --> Email Class Initialized
DEBUG - 2025-06-01 14:16:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:16:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:16:18 --> Controller Class Initialized
INFO - 2025-06-01 14:16:18 --> Helper loaded: form_helper
INFO - 2025-06-01 14:16:18 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:16:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:16:18 --> Email Class Initialized
INFO - 2025-06-01 14:16:18 --> Database Driver Class Initialized
DEBUG - 2025-06-01 14:16:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:16:18 --> Model "Crud" initialized
INFO - 2025-06-01 14:16:18 --> Final output sent to browser
DEBUG - 2025-06-01 14:16:18 --> Total execution time: 0.0129
INFO - 2025-06-01 14:16:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:16:18 --> Controller Class Initialized
INFO - 2025-06-01 14:16:18 --> Helper loaded: form_helper
INFO - 2025-06-01 14:16:18 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:16:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:16:18 --> Database Driver Class Initialized
INFO - 2025-06-01 14:16:18 --> Model "Crud" initialized
INFO - 2025-06-01 14:16:18 --> Final output sent to browser
DEBUG - 2025-06-01 14:16:18 --> Total execution time: 0.0263
INFO - 2025-06-01 14:16:27 --> Config Class Initialized
INFO - 2025-06-01 14:16:27 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:16:27 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:16:27 --> Utf8 Class Initialized
INFO - 2025-06-01 14:16:27 --> URI Class Initialized
INFO - 2025-06-01 14:16:27 --> Router Class Initialized
INFO - 2025-06-01 14:16:27 --> Output Class Initialized
INFO - 2025-06-01 14:16:27 --> Security Class Initialized
INFO - 2025-06-01 14:16:27 --> Config Class Initialized
INFO - 2025-06-01 14:16:27 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:16:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-01 14:16:27 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:16:27 --> Input Class Initialized
INFO - 2025-06-01 14:16:27 --> Utf8 Class Initialized
INFO - 2025-06-01 14:16:27 --> Language Class Initialized
INFO - 2025-06-01 14:16:27 --> URI Class Initialized
INFO - 2025-06-01 14:16:27 --> Loader Class Initialized
INFO - 2025-06-01 14:16:27 --> Router Class Initialized
INFO - 2025-06-01 14:16:27 --> Helper loaded: url_helper
INFO - 2025-06-01 14:16:27 --> Helper loaded: file_helper
INFO - 2025-06-01 14:16:27 --> Output Class Initialized
INFO - 2025-06-01 14:16:27 --> Security Class Initialized
INFO - 2025-06-01 14:16:27 --> Database Driver Class Initialized
DEBUG - 2025-06-01 14:16:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:16:27 --> Input Class Initialized
INFO - 2025-06-01 14:16:27 --> Language Class Initialized
INFO - 2025-06-01 14:16:27 --> Loader Class Initialized
INFO - 2025-06-01 14:16:27 --> Helper loaded: url_helper
INFO - 2025-06-01 14:16:27 --> Helper loaded: file_helper
INFO - 2025-06-01 14:16:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:16:27 --> Email Class Initialized
INFO - 2025-06-01 14:16:27 --> Email Class Initialized
DEBUG - 2025-06-01 14:16:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-01 14:16:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:16:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:16:27 --> Controller Class Initialized
INFO - 2025-06-01 14:16:27 --> Helper loaded: form_helper
INFO - 2025-06-01 14:16:27 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:16:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:16:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:16:27 --> Model "Crud" initialized
INFO - 2025-06-01 14:16:27 --> Final output sent to browser
DEBUG - 2025-06-01 14:16:27 --> Total execution time: 0.0132
INFO - 2025-06-01 14:16:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:16:27 --> Controller Class Initialized
INFO - 2025-06-01 14:16:27 --> Helper loaded: form_helper
INFO - 2025-06-01 14:16:27 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:16:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:16:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:16:27 --> Model "Crud" initialized
INFO - 2025-06-01 14:16:27 --> Final output sent to browser
DEBUG - 2025-06-01 14:16:27 --> Total execution time: 0.0249
INFO - 2025-06-01 14:16:38 --> Config Class Initialized
INFO - 2025-06-01 14:16:38 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:16:38 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:16:38 --> Utf8 Class Initialized
INFO - 2025-06-01 14:16:38 --> URI Class Initialized
INFO - 2025-06-01 14:16:38 --> Router Class Initialized
INFO - 2025-06-01 14:16:38 --> Output Class Initialized
INFO - 2025-06-01 14:16:38 --> Security Class Initialized
DEBUG - 2025-06-01 14:16:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:16:38 --> Input Class Initialized
INFO - 2025-06-01 14:16:38 --> Language Class Initialized
INFO - 2025-06-01 14:16:38 --> Loader Class Initialized
INFO - 2025-06-01 14:16:38 --> Helper loaded: url_helper
INFO - 2025-06-01 14:16:38 --> Helper loaded: file_helper
INFO - 2025-06-01 14:16:38 --> Database Driver Class Initialized
INFO - 2025-06-01 14:16:38 --> Config Class Initialized
INFO - 2025-06-01 14:16:38 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:16:38 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:16:38 --> Utf8 Class Initialized
INFO - 2025-06-01 14:16:38 --> URI Class Initialized
INFO - 2025-06-01 14:16:38 --> Router Class Initialized
INFO - 2025-06-01 14:16:38 --> Output Class Initialized
INFO - 2025-06-01 14:16:38 --> Security Class Initialized
DEBUG - 2025-06-01 14:16:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:16:38 --> Input Class Initialized
INFO - 2025-06-01 14:16:38 --> Language Class Initialized
INFO - 2025-06-01 14:16:38 --> Loader Class Initialized
INFO - 2025-06-01 14:16:38 --> Helper loaded: url_helper
INFO - 2025-06-01 14:16:38 --> Helper loaded: file_helper
INFO - 2025-06-01 14:16:38 --> Database Driver Class Initialized
INFO - 2025-06-01 14:16:38 --> Email Class Initialized
DEBUG - 2025-06-01 14:16:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:16:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:16:38 --> Controller Class Initialized
INFO - 2025-06-01 14:16:38 --> Helper loaded: form_helper
INFO - 2025-06-01 14:16:38 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:16:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:16:38 --> Database Driver Class Initialized
INFO - 2025-06-01 14:16:38 --> Email Class Initialized
DEBUG - 2025-06-01 14:16:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:16:38 --> Model "Crud" initialized
INFO - 2025-06-01 14:16:38 --> Final output sent to browser
DEBUG - 2025-06-01 14:16:38 --> Total execution time: 0.0165
INFO - 2025-06-01 14:16:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:16:38 --> Controller Class Initialized
INFO - 2025-06-01 14:16:38 --> Helper loaded: form_helper
INFO - 2025-06-01 14:16:38 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:16:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:16:38 --> Database Driver Class Initialized
INFO - 2025-06-01 14:16:38 --> Model "Crud" initialized
INFO - 2025-06-01 14:16:38 --> Final output sent to browser
DEBUG - 2025-06-01 14:16:38 --> Total execution time: 0.0249
INFO - 2025-06-01 14:16:48 --> Config Class Initialized
INFO - 2025-06-01 14:16:48 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:16:48 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:16:48 --> Utf8 Class Initialized
INFO - 2025-06-01 14:16:48 --> URI Class Initialized
INFO - 2025-06-01 14:16:48 --> Router Class Initialized
INFO - 2025-06-01 14:16:48 --> Output Class Initialized
INFO - 2025-06-01 14:16:48 --> Security Class Initialized
DEBUG - 2025-06-01 14:16:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:16:48 --> Input Class Initialized
INFO - 2025-06-01 14:16:48 --> Language Class Initialized
INFO - 2025-06-01 14:16:48 --> Config Class Initialized
INFO - 2025-06-01 14:16:48 --> Hooks Class Initialized
INFO - 2025-06-01 14:16:48 --> Loader Class Initialized
DEBUG - 2025-06-01 14:16:48 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:16:48 --> Helper loaded: url_helper
INFO - 2025-06-01 14:16:48 --> Utf8 Class Initialized
INFO - 2025-06-01 14:16:48 --> Helper loaded: file_helper
INFO - 2025-06-01 14:16:48 --> URI Class Initialized
INFO - 2025-06-01 14:16:48 --> Router Class Initialized
INFO - 2025-06-01 14:16:48 --> Database Driver Class Initialized
INFO - 2025-06-01 14:16:48 --> Output Class Initialized
INFO - 2025-06-01 14:16:48 --> Security Class Initialized
DEBUG - 2025-06-01 14:16:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:16:48 --> Input Class Initialized
INFO - 2025-06-01 14:16:48 --> Language Class Initialized
INFO - 2025-06-01 14:16:48 --> Loader Class Initialized
INFO - 2025-06-01 14:16:48 --> Helper loaded: url_helper
INFO - 2025-06-01 14:16:48 --> Helper loaded: file_helper
INFO - 2025-06-01 14:16:48 --> Database Driver Class Initialized
INFO - 2025-06-01 14:16:48 --> Email Class Initialized
DEBUG - 2025-06-01 14:16:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:16:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:16:48 --> Controller Class Initialized
INFO - 2025-06-01 14:16:48 --> Helper loaded: form_helper
INFO - 2025-06-01 14:16:48 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:16:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:16:48 --> Database Driver Class Initialized
INFO - 2025-06-01 14:16:48 --> Email Class Initialized
DEBUG - 2025-06-01 14:16:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:16:48 --> Model "Crud" initialized
INFO - 2025-06-01 14:16:48 --> Final output sent to browser
DEBUG - 2025-06-01 14:16:48 --> Total execution time: 0.0142
INFO - 2025-06-01 14:16:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:16:48 --> Controller Class Initialized
INFO - 2025-06-01 14:16:48 --> Helper loaded: form_helper
INFO - 2025-06-01 14:16:48 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:16:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:16:48 --> Database Driver Class Initialized
INFO - 2025-06-01 14:16:48 --> Model "Crud" initialized
INFO - 2025-06-01 14:16:48 --> Final output sent to browser
DEBUG - 2025-06-01 14:16:48 --> Total execution time: 0.0252
INFO - 2025-06-01 14:16:57 --> Config Class Initialized
INFO - 2025-06-01 14:16:57 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:16:57 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:16:57 --> Utf8 Class Initialized
INFO - 2025-06-01 14:16:57 --> URI Class Initialized
INFO - 2025-06-01 14:16:57 --> Router Class Initialized
INFO - 2025-06-01 14:16:57 --> Output Class Initialized
INFO - 2025-06-01 14:16:57 --> Security Class Initialized
DEBUG - 2025-06-01 14:16:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:16:57 --> Input Class Initialized
INFO - 2025-06-01 14:16:57 --> Language Class Initialized
INFO - 2025-06-01 14:16:57 --> Loader Class Initialized
INFO - 2025-06-01 14:16:57 --> Helper loaded: url_helper
INFO - 2025-06-01 14:16:57 --> Helper loaded: file_helper
INFO - 2025-06-01 14:16:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:16:57 --> Config Class Initialized
INFO - 2025-06-01 14:16:57 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:16:57 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:16:57 --> Utf8 Class Initialized
INFO - 2025-06-01 14:16:57 --> URI Class Initialized
INFO - 2025-06-01 14:16:57 --> Email Class Initialized
INFO - 2025-06-01 14:16:57 --> Router Class Initialized
INFO - 2025-06-01 14:16:57 --> Output Class Initialized
DEBUG - 2025-06-01 14:16:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:16:57 --> Security Class Initialized
DEBUG - 2025-06-01 14:16:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:16:57 --> Input Class Initialized
INFO - 2025-06-01 14:16:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:16:57 --> Language Class Initialized
INFO - 2025-06-01 14:16:57 --> Controller Class Initialized
INFO - 2025-06-01 14:16:57 --> Loader Class Initialized
INFO - 2025-06-01 14:16:57 --> Helper loaded: form_helper
INFO - 2025-06-01 14:16:57 --> Helper loaded: url_helper
INFO - 2025-06-01 14:16:57 --> Form Validation Class Initialized
INFO - 2025-06-01 14:16:57 --> Helper loaded: file_helper
DEBUG - 2025-06-01 14:16:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:16:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:16:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:16:57 --> Email Class Initialized
DEBUG - 2025-06-01 14:16:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:16:57 --> Model "Crud" initialized
INFO - 2025-06-01 14:16:57 --> Final output sent to browser
DEBUG - 2025-06-01 14:16:57 --> Total execution time: 0.0162
INFO - 2025-06-01 14:16:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:16:57 --> Controller Class Initialized
INFO - 2025-06-01 14:16:57 --> Helper loaded: form_helper
INFO - 2025-06-01 14:16:57 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:16:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:16:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:16:57 --> Model "Crud" initialized
INFO - 2025-06-01 14:16:57 --> Final output sent to browser
DEBUG - 2025-06-01 14:16:57 --> Total execution time: 0.0235
INFO - 2025-06-01 14:17:07 --> Config Class Initialized
INFO - 2025-06-01 14:17:07 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:17:07 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:07 --> Utf8 Class Initialized
INFO - 2025-06-01 14:17:07 --> URI Class Initialized
INFO - 2025-06-01 14:17:07 --> Router Class Initialized
INFO - 2025-06-01 14:17:07 --> Output Class Initialized
INFO - 2025-06-01 14:17:07 --> Security Class Initialized
DEBUG - 2025-06-01 14:17:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:07 --> Input Class Initialized
INFO - 2025-06-01 14:17:07 --> Language Class Initialized
INFO - 2025-06-01 14:17:07 --> Loader Class Initialized
INFO - 2025-06-01 14:17:07 --> Helper loaded: url_helper
INFO - 2025-06-01 14:17:07 --> Helper loaded: file_helper
INFO - 2025-06-01 14:17:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:07 --> Config Class Initialized
INFO - 2025-06-01 14:17:07 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:17:07 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:07 --> Utf8 Class Initialized
INFO - 2025-06-01 14:17:07 --> URI Class Initialized
INFO - 2025-06-01 14:17:07 --> Router Class Initialized
INFO - 2025-06-01 14:17:07 --> Output Class Initialized
INFO - 2025-06-01 14:17:07 --> Security Class Initialized
DEBUG - 2025-06-01 14:17:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:07 --> Input Class Initialized
INFO - 2025-06-01 14:17:07 --> Language Class Initialized
INFO - 2025-06-01 14:17:07 --> Loader Class Initialized
INFO - 2025-06-01 14:17:07 --> Helper loaded: url_helper
INFO - 2025-06-01 14:17:07 --> Helper loaded: file_helper
INFO - 2025-06-01 14:17:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:07 --> Email Class Initialized
DEBUG - 2025-06-01 14:17:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:17:07 --> Controller Class Initialized
INFO - 2025-06-01 14:17:07 --> Helper loaded: form_helper
INFO - 2025-06-01 14:17:07 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:17:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:17:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:07 --> Email Class Initialized
DEBUG - 2025-06-01 14:17:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:07 --> Model "Crud" initialized
INFO - 2025-06-01 14:17:07 --> Final output sent to browser
DEBUG - 2025-06-01 14:17:07 --> Total execution time: 0.0276
INFO - 2025-06-01 14:17:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:17:07 --> Controller Class Initialized
INFO - 2025-06-01 14:17:07 --> Helper loaded: form_helper
INFO - 2025-06-01 14:17:07 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:17:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:17:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:07 --> Model "Crud" initialized
INFO - 2025-06-01 14:17:07 --> Final output sent to browser
DEBUG - 2025-06-01 14:17:07 --> Total execution time: 0.0475
INFO - 2025-06-01 14:17:11 --> Config Class Initialized
INFO - 2025-06-01 14:17:11 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:17:11 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:11 --> Utf8 Class Initialized
INFO - 2025-06-01 14:17:11 --> URI Class Initialized
INFO - 2025-06-01 14:17:11 --> Router Class Initialized
INFO - 2025-06-01 14:17:11 --> Output Class Initialized
INFO - 2025-06-01 14:17:11 --> Security Class Initialized
DEBUG - 2025-06-01 14:17:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:11 --> Input Class Initialized
INFO - 2025-06-01 14:17:11 --> Language Class Initialized
INFO - 2025-06-01 14:17:11 --> Loader Class Initialized
INFO - 2025-06-01 14:17:11 --> Helper loaded: url_helper
INFO - 2025-06-01 14:17:11 --> Helper loaded: file_helper
INFO - 2025-06-01 14:17:11 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:11 --> Email Class Initialized
DEBUG - 2025-06-01 14:17:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:11 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:17:11 --> Controller Class Initialized
INFO - 2025-06-01 14:17:11 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:17:11 --> Helper loaded: form_helper
INFO - 2025-06-01 14:17:11 --> Form Validation Class Initialized
INFO - 2025-06-01 14:17:11 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:11 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:17:11 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:17:11 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:17:11 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-01 14:17:11 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/request-training.php
INFO - 2025-06-01 14:17:11 --> Final output sent to browser
DEBUG - 2025-06-01 14:17:11 --> Total execution time: 0.0311
INFO - 2025-06-01 14:17:13 --> Config Class Initialized
INFO - 2025-06-01 14:17:13 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:17:13 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:13 --> Utf8 Class Initialized
INFO - 2025-06-01 14:17:13 --> URI Class Initialized
INFO - 2025-06-01 14:17:13 --> Router Class Initialized
INFO - 2025-06-01 14:17:13 --> Output Class Initialized
INFO - 2025-06-01 14:17:13 --> Security Class Initialized
DEBUG - 2025-06-01 14:17:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:13 --> Input Class Initialized
INFO - 2025-06-01 14:17:13 --> Language Class Initialized
INFO - 2025-06-01 14:17:13 --> Loader Class Initialized
INFO - 2025-06-01 14:17:13 --> Helper loaded: url_helper
INFO - 2025-06-01 14:17:13 --> Helper loaded: file_helper
INFO - 2025-06-01 14:17:13 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:13 --> Email Class Initialized
DEBUG - 2025-06-01 14:17:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:13 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:17:13 --> Controller Class Initialized
INFO - 2025-06-01 14:17:13 --> Model "TrainingActivityModel" initialized
INFO - 2025-06-01 14:17:13 --> Helper loaded: form_helper
INFO - 2025-06-01 14:17:13 --> Form Validation Class Initialized
INFO - 2025-06-01 14:17:13 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:13 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:17:13 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:17:13 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:17:13 --> Final output sent to browser
DEBUG - 2025-06-01 14:17:13 --> Total execution time: 0.0377
INFO - 2025-06-01 14:17:13 --> Config Class Initialized
INFO - 2025-06-01 14:17:13 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:17:13 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:13 --> Utf8 Class Initialized
INFO - 2025-06-01 14:17:13 --> URI Class Initialized
INFO - 2025-06-01 14:17:13 --> Router Class Initialized
INFO - 2025-06-01 14:17:13 --> Output Class Initialized
INFO - 2025-06-01 14:17:13 --> Security Class Initialized
DEBUG - 2025-06-01 14:17:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:13 --> Input Class Initialized
INFO - 2025-06-01 14:17:13 --> Language Class Initialized
INFO - 2025-06-01 14:17:13 --> Loader Class Initialized
INFO - 2025-06-01 14:17:13 --> Helper loaded: url_helper
INFO - 2025-06-01 14:17:13 --> Helper loaded: file_helper
INFO - 2025-06-01 14:17:13 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:13 --> Email Class Initialized
DEBUG - 2025-06-01 14:17:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:13 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:17:13 --> Controller Class Initialized
INFO - 2025-06-01 14:17:13 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:17:13 --> Helper loaded: form_helper
INFO - 2025-06-01 14:17:13 --> Form Validation Class Initialized
INFO - 2025-06-01 14:17:13 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:13 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:17:13 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:17:13 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:17:13 --> Final output sent to browser
DEBUG - 2025-06-01 14:17:13 --> Total execution time: 0.0094
INFO - 2025-06-01 14:17:13 --> Config Class Initialized
INFO - 2025-06-01 14:17:13 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:17:13 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:13 --> Utf8 Class Initialized
INFO - 2025-06-01 14:17:13 --> URI Class Initialized
INFO - 2025-06-01 14:17:13 --> Router Class Initialized
INFO - 2025-06-01 14:17:13 --> Output Class Initialized
INFO - 2025-06-01 14:17:13 --> Security Class Initialized
DEBUG - 2025-06-01 14:17:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:13 --> Input Class Initialized
INFO - 2025-06-01 14:17:13 --> Language Class Initialized
INFO - 2025-06-01 14:17:13 --> Loader Class Initialized
INFO - 2025-06-01 14:17:13 --> Helper loaded: url_helper
INFO - 2025-06-01 14:17:13 --> Helper loaded: file_helper
INFO - 2025-06-01 14:17:13 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:13 --> Config Class Initialized
INFO - 2025-06-01 14:17:13 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:17:13 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:13 --> Utf8 Class Initialized
INFO - 2025-06-01 14:17:13 --> URI Class Initialized
INFO - 2025-06-01 14:17:13 --> Router Class Initialized
INFO - 2025-06-01 14:17:13 --> Output Class Initialized
INFO - 2025-06-01 14:17:13 --> Security Class Initialized
DEBUG - 2025-06-01 14:17:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:13 --> Input Class Initialized
INFO - 2025-06-01 14:17:13 --> Language Class Initialized
INFO - 2025-06-01 14:17:13 --> Loader Class Initialized
INFO - 2025-06-01 14:17:13 --> Helper loaded: url_helper
INFO - 2025-06-01 14:17:13 --> Helper loaded: file_helper
INFO - 2025-06-01 14:17:13 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:13 --> Email Class Initialized
DEBUG - 2025-06-01 14:17:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:13 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:17:13 --> Controller Class Initialized
INFO - 2025-06-01 14:17:13 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:17:13 --> Helper loaded: form_helper
INFO - 2025-06-01 14:17:13 --> Form Validation Class Initialized
INFO - 2025-06-01 14:17:13 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:13 --> Email Class Initialized
DEBUG - 2025-06-01 14:17:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:13 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:17:13 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:17:13 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:17:13 --> Final output sent to browser
DEBUG - 2025-06-01 14:17:13 --> Total execution time: 0.0172
INFO - 2025-06-01 14:17:13 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:17:13 --> Controller Class Initialized
INFO - 2025-06-01 14:17:13 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:17:13 --> Helper loaded: form_helper
INFO - 2025-06-01 14:17:13 --> Form Validation Class Initialized
INFO - 2025-06-01 14:17:13 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:13 --> Config Class Initialized
INFO - 2025-06-01 14:17:13 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:17:13 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:13 --> Utf8 Class Initialized
INFO - 2025-06-01 14:17:13 --> URI Class Initialized
INFO - 2025-06-01 14:17:13 --> Router Class Initialized
INFO - 2025-06-01 14:17:13 --> Output Class Initialized
INFO - 2025-06-01 14:17:13 --> Security Class Initialized
DEBUG - 2025-06-01 14:17:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:13 --> Input Class Initialized
INFO - 2025-06-01 14:17:13 --> Language Class Initialized
INFO - 2025-06-01 14:17:13 --> Loader Class Initialized
INFO - 2025-06-01 14:17:13 --> Helper loaded: url_helper
INFO - 2025-06-01 14:17:13 --> Helper loaded: file_helper
INFO - 2025-06-01 14:17:13 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:13 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:17:13 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:17:13 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:17:13 --> Email Class Initialized
DEBUG - 2025-06-01 14:17:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:13 --> Final output sent to browser
DEBUG - 2025-06-01 14:17:13 --> Total execution time: 0.0269
INFO - 2025-06-01 14:17:13 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:17:13 --> Controller Class Initialized
INFO - 2025-06-01 14:17:13 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:17:13 --> Helper loaded: form_helper
INFO - 2025-06-01 14:17:13 --> Form Validation Class Initialized
INFO - 2025-06-01 14:17:13 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:13 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:17:13 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:17:13 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:17:13 --> Final output sent to browser
DEBUG - 2025-06-01 14:17:13 --> Total execution time: 0.0159
INFO - 2025-06-01 14:17:13 --> Config Class Initialized
INFO - 2025-06-01 14:17:13 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:17:13 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:13 --> Utf8 Class Initialized
INFO - 2025-06-01 14:17:13 --> URI Class Initialized
INFO - 2025-06-01 14:17:13 --> Router Class Initialized
INFO - 2025-06-01 14:17:13 --> Output Class Initialized
INFO - 2025-06-01 14:17:13 --> Security Class Initialized
DEBUG - 2025-06-01 14:17:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:13 --> Input Class Initialized
INFO - 2025-06-01 14:17:13 --> Language Class Initialized
INFO - 2025-06-01 14:17:13 --> Loader Class Initialized
INFO - 2025-06-01 14:17:13 --> Helper loaded: url_helper
INFO - 2025-06-01 14:17:13 --> Helper loaded: file_helper
INFO - 2025-06-01 14:17:13 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:13 --> Email Class Initialized
DEBUG - 2025-06-01 14:17:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:13 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:17:13 --> Controller Class Initialized
INFO - 2025-06-01 14:17:13 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:17:13 --> Helper loaded: form_helper
INFO - 2025-06-01 14:17:13 --> Form Validation Class Initialized
INFO - 2025-06-01 14:17:13 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:13 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:17:13 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:17:13 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:17:13 --> Final output sent to browser
DEBUG - 2025-06-01 14:17:13 --> Total execution time: 0.0152
INFO - 2025-06-01 14:17:13 --> Config Class Initialized
INFO - 2025-06-01 14:17:13 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:17:13 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:13 --> Utf8 Class Initialized
INFO - 2025-06-01 14:17:13 --> URI Class Initialized
INFO - 2025-06-01 14:17:13 --> Router Class Initialized
INFO - 2025-06-01 14:17:13 --> Output Class Initialized
INFO - 2025-06-01 14:17:13 --> Security Class Initialized
DEBUG - 2025-06-01 14:17:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:13 --> Input Class Initialized
INFO - 2025-06-01 14:17:13 --> Language Class Initialized
INFO - 2025-06-01 14:17:13 --> Loader Class Initialized
INFO - 2025-06-01 14:17:13 --> Helper loaded: url_helper
INFO - 2025-06-01 14:17:13 --> Helper loaded: file_helper
INFO - 2025-06-01 14:17:13 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:13 --> Email Class Initialized
DEBUG - 2025-06-01 14:17:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:13 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:17:13 --> Controller Class Initialized
INFO - 2025-06-01 14:17:13 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:17:13 --> Helper loaded: form_helper
INFO - 2025-06-01 14:17:13 --> Form Validation Class Initialized
INFO - 2025-06-01 14:17:13 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:13 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:17:13 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:17:13 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:17:13 --> Final output sent to browser
DEBUG - 2025-06-01 14:17:13 --> Total execution time: 0.0324
INFO - 2025-06-01 14:17:15 --> Config Class Initialized
INFO - 2025-06-01 14:17:15 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:17:15 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:15 --> Utf8 Class Initialized
INFO - 2025-06-01 14:17:15 --> URI Class Initialized
INFO - 2025-06-01 14:17:15 --> Router Class Initialized
INFO - 2025-06-01 14:17:15 --> Output Class Initialized
INFO - 2025-06-01 14:17:15 --> Security Class Initialized
DEBUG - 2025-06-01 14:17:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:15 --> Input Class Initialized
INFO - 2025-06-01 14:17:15 --> Language Class Initialized
INFO - 2025-06-01 14:17:15 --> Loader Class Initialized
INFO - 2025-06-01 14:17:15 --> Helper loaded: url_helper
INFO - 2025-06-01 14:17:15 --> Helper loaded: file_helper
INFO - 2025-06-01 14:17:15 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:15 --> Email Class Initialized
DEBUG - 2025-06-01 14:17:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:15 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:17:15 --> Controller Class Initialized
INFO - 2025-06-01 14:17:15 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:17:15 --> Helper loaded: form_helper
INFO - 2025-06-01 14:17:15 --> Form Validation Class Initialized
INFO - 2025-06-01 14:17:15 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:15 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:17:15 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:17:15 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:17:15 --> Final output sent to browser
DEBUG - 2025-06-01 14:17:15 --> Total execution time: 0.0128
INFO - 2025-06-01 14:17:17 --> Config Class Initialized
INFO - 2025-06-01 14:17:17 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:17:17 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:17 --> Utf8 Class Initialized
INFO - 2025-06-01 14:17:17 --> URI Class Initialized
INFO - 2025-06-01 14:17:17 --> Config Class Initialized
INFO - 2025-06-01 14:17:17 --> Router Class Initialized
INFO - 2025-06-01 14:17:17 --> Output Class Initialized
INFO - 2025-06-01 14:17:17 --> Hooks Class Initialized
INFO - 2025-06-01 14:17:17 --> Security Class Initialized
DEBUG - 2025-06-01 14:17:17 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:17 --> Utf8 Class Initialized
DEBUG - 2025-06-01 14:17:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:17 --> Input Class Initialized
INFO - 2025-06-01 14:17:17 --> URI Class Initialized
INFO - 2025-06-01 14:17:17 --> Language Class Initialized
INFO - 2025-06-01 14:17:17 --> Router Class Initialized
INFO - 2025-06-01 14:17:17 --> Output Class Initialized
INFO - 2025-06-01 14:17:17 --> Loader Class Initialized
INFO - 2025-06-01 14:17:17 --> Security Class Initialized
INFO - 2025-06-01 14:17:17 --> Helper loaded: url_helper
DEBUG - 2025-06-01 14:17:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:17 --> Input Class Initialized
INFO - 2025-06-01 14:17:17 --> Language Class Initialized
INFO - 2025-06-01 14:17:17 --> Helper loaded: file_helper
INFO - 2025-06-01 14:17:17 --> Loader Class Initialized
INFO - 2025-06-01 14:17:17 --> Helper loaded: url_helper
INFO - 2025-06-01 14:17:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:17 --> Helper loaded: file_helper
INFO - 2025-06-01 14:17:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:17 --> Email Class Initialized
DEBUG - 2025-06-01 14:17:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:17:17 --> Email Class Initialized
INFO - 2025-06-01 14:17:17 --> Controller Class Initialized
INFO - 2025-06-01 14:17:17 --> Helper loaded: form_helper
DEBUG - 2025-06-01 14:17:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:17 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:17:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:17:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:17 --> Model "Crud" initialized
INFO - 2025-06-01 14:17:17 --> Final output sent to browser
DEBUG - 2025-06-01 14:17:17 --> Total execution time: 0.0265
INFO - 2025-06-01 14:17:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:17:17 --> Controller Class Initialized
INFO - 2025-06-01 14:17:17 --> Helper loaded: form_helper
INFO - 2025-06-01 14:17:17 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:17:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:17:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:17 --> Model "Crud" initialized
INFO - 2025-06-01 14:17:17 --> Final output sent to browser
DEBUG - 2025-06-01 14:17:17 --> Total execution time: 0.0466
INFO - 2025-06-01 14:17:27 --> Config Class Initialized
INFO - 2025-06-01 14:17:27 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:17:27 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:27 --> Utf8 Class Initialized
INFO - 2025-06-01 14:17:27 --> URI Class Initialized
INFO - 2025-06-01 14:17:27 --> Router Class Initialized
INFO - 2025-06-01 14:17:27 --> Output Class Initialized
INFO - 2025-06-01 14:17:27 --> Security Class Initialized
DEBUG - 2025-06-01 14:17:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:27 --> Input Class Initialized
INFO - 2025-06-01 14:17:27 --> Language Class Initialized
INFO - 2025-06-01 14:17:27 --> Loader Class Initialized
INFO - 2025-06-01 14:17:27 --> Helper loaded: url_helper
INFO - 2025-06-01 14:17:27 --> Helper loaded: file_helper
INFO - 2025-06-01 14:17:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:27 --> Config Class Initialized
INFO - 2025-06-01 14:17:27 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:17:27 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:27 --> Utf8 Class Initialized
INFO - 2025-06-01 14:17:27 --> URI Class Initialized
INFO - 2025-06-01 14:17:27 --> Router Class Initialized
INFO - 2025-06-01 14:17:27 --> Output Class Initialized
INFO - 2025-06-01 14:17:27 --> Security Class Initialized
DEBUG - 2025-06-01 14:17:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:27 --> Input Class Initialized
INFO - 2025-06-01 14:17:27 --> Language Class Initialized
INFO - 2025-06-01 14:17:27 --> Loader Class Initialized
INFO - 2025-06-01 14:17:27 --> Helper loaded: url_helper
INFO - 2025-06-01 14:17:27 --> Helper loaded: file_helper
INFO - 2025-06-01 14:17:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:27 --> Email Class Initialized
DEBUG - 2025-06-01 14:17:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:17:27 --> Controller Class Initialized
INFO - 2025-06-01 14:17:27 --> Helper loaded: form_helper
INFO - 2025-06-01 14:17:27 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:17:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:17:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:27 --> Email Class Initialized
DEBUG - 2025-06-01 14:17:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:27 --> Model "Crud" initialized
INFO - 2025-06-01 14:17:27 --> Final output sent to browser
DEBUG - 2025-06-01 14:17:27 --> Total execution time: 0.0225
INFO - 2025-06-01 14:17:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:17:27 --> Controller Class Initialized
INFO - 2025-06-01 14:17:27 --> Helper loaded: form_helper
INFO - 2025-06-01 14:17:27 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:17:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:17:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:27 --> Model "Crud" initialized
INFO - 2025-06-01 14:17:27 --> Final output sent to browser
DEBUG - 2025-06-01 14:17:27 --> Total execution time: 0.0335
INFO - 2025-06-01 14:17:37 --> Config Class Initialized
INFO - 2025-06-01 14:17:37 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:17:37 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:37 --> Utf8 Class Initialized
INFO - 2025-06-01 14:17:37 --> URI Class Initialized
INFO - 2025-06-01 14:17:37 --> Router Class Initialized
INFO - 2025-06-01 14:17:37 --> Output Class Initialized
INFO - 2025-06-01 14:17:37 --> Config Class Initialized
INFO - 2025-06-01 14:17:37 --> Security Class Initialized
INFO - 2025-06-01 14:17:37 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:17:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:37 --> Input Class Initialized
DEBUG - 2025-06-01 14:17:37 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:37 --> Language Class Initialized
INFO - 2025-06-01 14:17:37 --> Utf8 Class Initialized
INFO - 2025-06-01 14:17:37 --> URI Class Initialized
INFO - 2025-06-01 14:17:37 --> Loader Class Initialized
INFO - 2025-06-01 14:17:37 --> Router Class Initialized
INFO - 2025-06-01 14:17:37 --> Helper loaded: url_helper
INFO - 2025-06-01 14:17:37 --> Helper loaded: file_helper
INFO - 2025-06-01 14:17:37 --> Output Class Initialized
INFO - 2025-06-01 14:17:37 --> Security Class Initialized
INFO - 2025-06-01 14:17:37 --> Database Driver Class Initialized
DEBUG - 2025-06-01 14:17:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:37 --> Input Class Initialized
INFO - 2025-06-01 14:17:37 --> Language Class Initialized
INFO - 2025-06-01 14:17:37 --> Loader Class Initialized
INFO - 2025-06-01 14:17:37 --> Helper loaded: url_helper
INFO - 2025-06-01 14:17:37 --> Helper loaded: file_helper
INFO - 2025-06-01 14:17:37 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:37 --> Email Class Initialized
DEBUG - 2025-06-01 14:17:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:37 --> Email Class Initialized
INFO - 2025-06-01 14:17:37 --> Session: Class initialized using 'files' driver.
DEBUG - 2025-06-01 14:17:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:37 --> Controller Class Initialized
INFO - 2025-06-01 14:17:37 --> Helper loaded: form_helper
INFO - 2025-06-01 14:17:37 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:17:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:17:37 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:37 --> Model "Crud" initialized
INFO - 2025-06-01 14:17:37 --> Final output sent to browser
DEBUG - 2025-06-01 14:17:37 --> Total execution time: 0.0207
INFO - 2025-06-01 14:17:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:17:37 --> Controller Class Initialized
INFO - 2025-06-01 14:17:37 --> Helper loaded: form_helper
INFO - 2025-06-01 14:17:37 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:17:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:17:37 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:37 --> Model "Crud" initialized
INFO - 2025-06-01 14:17:37 --> Final output sent to browser
DEBUG - 2025-06-01 14:17:37 --> Total execution time: 0.0390
INFO - 2025-06-01 14:17:39 --> Config Class Initialized
INFO - 2025-06-01 14:17:39 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:17:39 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:39 --> Utf8 Class Initialized
INFO - 2025-06-01 14:17:39 --> URI Class Initialized
INFO - 2025-06-01 14:17:39 --> Router Class Initialized
INFO - 2025-06-01 14:17:39 --> Output Class Initialized
INFO - 2025-06-01 14:17:39 --> Security Class Initialized
DEBUG - 2025-06-01 14:17:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:39 --> Input Class Initialized
INFO - 2025-06-01 14:17:39 --> Language Class Initialized
INFO - 2025-06-01 14:17:39 --> Loader Class Initialized
INFO - 2025-06-01 14:17:39 --> Helper loaded: url_helper
INFO - 2025-06-01 14:17:39 --> Helper loaded: file_helper
INFO - 2025-06-01 14:17:39 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:39 --> Email Class Initialized
DEBUG - 2025-06-01 14:17:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:39 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:17:39 --> Controller Class Initialized
INFO - 2025-06-01 14:17:39 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:17:39 --> Helper loaded: form_helper
INFO - 2025-06-01 14:17:39 --> Form Validation Class Initialized
INFO - 2025-06-01 14:17:39 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:39 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:17:39 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:17:39 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:17:39 --> Final output sent to browser
DEBUG - 2025-06-01 14:17:39 --> Total execution time: 0.0112
INFO - 2025-06-01 14:17:39 --> Config Class Initialized
INFO - 2025-06-01 14:17:39 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:17:39 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:39 --> Utf8 Class Initialized
INFO - 2025-06-01 14:17:39 --> URI Class Initialized
INFO - 2025-06-01 14:17:39 --> Router Class Initialized
INFO - 2025-06-01 14:17:39 --> Output Class Initialized
INFO - 2025-06-01 14:17:39 --> Security Class Initialized
DEBUG - 2025-06-01 14:17:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:39 --> Input Class Initialized
INFO - 2025-06-01 14:17:39 --> Language Class Initialized
INFO - 2025-06-01 14:17:39 --> Loader Class Initialized
INFO - 2025-06-01 14:17:39 --> Helper loaded: url_helper
INFO - 2025-06-01 14:17:39 --> Helper loaded: file_helper
INFO - 2025-06-01 14:17:39 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:39 --> Email Class Initialized
DEBUG - 2025-06-01 14:17:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:39 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:17:39 --> Controller Class Initialized
INFO - 2025-06-01 14:17:39 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:17:39 --> Helper loaded: form_helper
INFO - 2025-06-01 14:17:39 --> Form Validation Class Initialized
INFO - 2025-06-01 14:17:39 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:39 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:17:39 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:17:39 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:17:39 --> Final output sent to browser
DEBUG - 2025-06-01 14:17:39 --> Total execution time: 0.0109
INFO - 2025-06-01 14:17:47 --> Config Class Initialized
INFO - 2025-06-01 14:17:47 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:17:47 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:47 --> Utf8 Class Initialized
INFO - 2025-06-01 14:17:47 --> URI Class Initialized
INFO - 2025-06-01 14:17:47 --> Router Class Initialized
INFO - 2025-06-01 14:17:47 --> Output Class Initialized
INFO - 2025-06-01 14:17:47 --> Security Class Initialized
DEBUG - 2025-06-01 14:17:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:47 --> Input Class Initialized
INFO - 2025-06-01 14:17:47 --> Language Class Initialized
INFO - 2025-06-01 14:17:47 --> Loader Class Initialized
INFO - 2025-06-01 14:17:47 --> Helper loaded: url_helper
INFO - 2025-06-01 14:17:47 --> Helper loaded: file_helper
INFO - 2025-06-01 14:17:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:47 --> Config Class Initialized
INFO - 2025-06-01 14:17:47 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:17:47 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:47 --> Utf8 Class Initialized
INFO - 2025-06-01 14:17:47 --> URI Class Initialized
INFO - 2025-06-01 14:17:47 --> Router Class Initialized
INFO - 2025-06-01 14:17:47 --> Output Class Initialized
INFO - 2025-06-01 14:17:47 --> Security Class Initialized
DEBUG - 2025-06-01 14:17:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:47 --> Input Class Initialized
INFO - 2025-06-01 14:17:47 --> Language Class Initialized
INFO - 2025-06-01 14:17:47 --> Email Class Initialized
DEBUG - 2025-06-01 14:17:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:47 --> Loader Class Initialized
INFO - 2025-06-01 14:17:47 --> Helper loaded: url_helper
INFO - 2025-06-01 14:17:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:17:47 --> Helper loaded: file_helper
INFO - 2025-06-01 14:17:47 --> Controller Class Initialized
INFO - 2025-06-01 14:17:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:47 --> Helper loaded: form_helper
INFO - 2025-06-01 14:17:47 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:17:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:17:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:47 --> Email Class Initialized
INFO - 2025-06-01 14:17:47 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:17:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:47 --> Final output sent to browser
DEBUG - 2025-06-01 14:17:47 --> Total execution time: 0.0188
INFO - 2025-06-01 14:17:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:17:47 --> Controller Class Initialized
INFO - 2025-06-01 14:17:47 --> Helper loaded: form_helper
INFO - 2025-06-01 14:17:47 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:17:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:17:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:47 --> Model "Crud" initialized
INFO - 2025-06-01 14:17:47 --> Final output sent to browser
DEBUG - 2025-06-01 14:17:47 --> Total execution time: 0.0304
INFO - 2025-06-01 14:17:49 --> Config Class Initialized
INFO - 2025-06-01 14:17:49 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:17:49 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:49 --> Utf8 Class Initialized
INFO - 2025-06-01 14:17:49 --> URI Class Initialized
INFO - 2025-06-01 14:17:49 --> Router Class Initialized
INFO - 2025-06-01 14:17:49 --> Output Class Initialized
INFO - 2025-06-01 14:17:49 --> Security Class Initialized
DEBUG - 2025-06-01 14:17:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:49 --> Input Class Initialized
INFO - 2025-06-01 14:17:49 --> Language Class Initialized
INFO - 2025-06-01 14:17:49 --> Loader Class Initialized
INFO - 2025-06-01 14:17:49 --> Helper loaded: url_helper
INFO - 2025-06-01 14:17:49 --> Helper loaded: file_helper
INFO - 2025-06-01 14:17:49 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:49 --> Email Class Initialized
DEBUG - 2025-06-01 14:17:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:49 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:17:49 --> Controller Class Initialized
INFO - 2025-06-01 14:17:49 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:17:49 --> Helper loaded: form_helper
INFO - 2025-06-01 14:17:49 --> Form Validation Class Initialized
INFO - 2025-06-01 14:17:49 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:49 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:17:49 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:17:49 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:17:49 --> Final output sent to browser
DEBUG - 2025-06-01 14:17:49 --> Total execution time: 0.0116
INFO - 2025-06-01 14:17:57 --> Config Class Initialized
INFO - 2025-06-01 14:17:57 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:17:57 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:57 --> Utf8 Class Initialized
INFO - 2025-06-01 14:17:57 --> URI Class Initialized
INFO - 2025-06-01 14:17:57 --> Router Class Initialized
INFO - 2025-06-01 14:17:57 --> Output Class Initialized
INFO - 2025-06-01 14:17:57 --> Security Class Initialized
DEBUG - 2025-06-01 14:17:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:57 --> Input Class Initialized
INFO - 2025-06-01 14:17:57 --> Language Class Initialized
INFO - 2025-06-01 14:17:57 --> Loader Class Initialized
INFO - 2025-06-01 14:17:57 --> Helper loaded: url_helper
INFO - 2025-06-01 14:17:57 --> Helper loaded: file_helper
INFO - 2025-06-01 14:17:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:57 --> Email Class Initialized
DEBUG - 2025-06-01 14:17:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:17:57 --> Controller Class Initialized
INFO - 2025-06-01 14:17:57 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:17:57 --> Helper loaded: form_helper
INFO - 2025-06-01 14:17:57 --> Form Validation Class Initialized
INFO - 2025-06-01 14:17:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:57 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:17:57 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:17:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:17:57 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-01 14:17:57 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/request-training.php
INFO - 2025-06-01 14:17:57 --> Config Class Initialized
INFO - 2025-06-01 14:17:57 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:17:57 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:57 --> Utf8 Class Initialized
INFO - 2025-06-01 14:17:57 --> URI Class Initialized
INFO - 2025-06-01 14:17:57 --> Router Class Initialized
INFO - 2025-06-01 14:17:57 --> Final output sent to browser
INFO - 2025-06-01 14:17:57 --> Output Class Initialized
DEBUG - 2025-06-01 14:17:57 --> Total execution time: 0.0121
INFO - 2025-06-01 14:17:57 --> Security Class Initialized
DEBUG - 2025-06-01 14:17:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:57 --> Input Class Initialized
INFO - 2025-06-01 14:17:57 --> Language Class Initialized
INFO - 2025-06-01 14:17:57 --> Loader Class Initialized
INFO - 2025-06-01 14:17:57 --> Helper loaded: url_helper
INFO - 2025-06-01 14:17:57 --> Helper loaded: file_helper
INFO - 2025-06-01 14:17:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:57 --> Config Class Initialized
INFO - 2025-06-01 14:17:57 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:17:57 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:57 --> Utf8 Class Initialized
INFO - 2025-06-01 14:17:57 --> URI Class Initialized
INFO - 2025-06-01 14:17:57 --> Router Class Initialized
INFO - 2025-06-01 14:17:57 --> Output Class Initialized
INFO - 2025-06-01 14:17:57 --> Security Class Initialized
DEBUG - 2025-06-01 14:17:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:57 --> Input Class Initialized
INFO - 2025-06-01 14:17:57 --> Language Class Initialized
INFO - 2025-06-01 14:17:57 --> Loader Class Initialized
INFO - 2025-06-01 14:17:57 --> Email Class Initialized
INFO - 2025-06-01 14:17:57 --> Helper loaded: url_helper
INFO - 2025-06-01 14:17:57 --> Helper loaded: file_helper
DEBUG - 2025-06-01 14:17:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:17:57 --> Controller Class Initialized
INFO - 2025-06-01 14:17:57 --> Helper loaded: form_helper
INFO - 2025-06-01 14:17:57 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:17:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:17:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:57 --> Email Class Initialized
INFO - 2025-06-01 14:17:57 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:17:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:57 --> Final output sent to browser
DEBUG - 2025-06-01 14:17:57 --> Total execution time: 0.0218
INFO - 2025-06-01 14:17:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:17:57 --> Controller Class Initialized
INFO - 2025-06-01 14:17:57 --> Helper loaded: form_helper
INFO - 2025-06-01 14:17:57 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:17:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:17:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:57 --> Model "Crud" initialized
INFO - 2025-06-01 14:17:57 --> Final output sent to browser
DEBUG - 2025-06-01 14:17:57 --> Total execution time: 0.0364
INFO - 2025-06-01 14:17:57 --> Config Class Initialized
INFO - 2025-06-01 14:17:57 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:17:57 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:57 --> Utf8 Class Initialized
INFO - 2025-06-01 14:17:57 --> URI Class Initialized
INFO - 2025-06-01 14:17:57 --> Router Class Initialized
INFO - 2025-06-01 14:17:57 --> Output Class Initialized
INFO - 2025-06-01 14:17:57 --> Security Class Initialized
DEBUG - 2025-06-01 14:17:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:57 --> Input Class Initialized
INFO - 2025-06-01 14:17:57 --> Language Class Initialized
INFO - 2025-06-01 14:17:57 --> Loader Class Initialized
INFO - 2025-06-01 14:17:57 --> Helper loaded: url_helper
INFO - 2025-06-01 14:17:57 --> Helper loaded: file_helper
INFO - 2025-06-01 14:17:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:57 --> Email Class Initialized
DEBUG - 2025-06-01 14:17:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:17:57 --> Controller Class Initialized
INFO - 2025-06-01 14:17:57 --> Model "TrainingActivityModel" initialized
INFO - 2025-06-01 14:17:57 --> Helper loaded: form_helper
INFO - 2025-06-01 14:17:57 --> Form Validation Class Initialized
INFO - 2025-06-01 14:17:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:57 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:17:57 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:17:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:17:57 --> Final output sent to browser
DEBUG - 2025-06-01 14:17:57 --> Total execution time: 0.0143
INFO - 2025-06-01 14:17:58 --> Config Class Initialized
INFO - 2025-06-01 14:17:58 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:17:58 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:58 --> Utf8 Class Initialized
INFO - 2025-06-01 14:17:58 --> URI Class Initialized
INFO - 2025-06-01 14:17:58 --> Router Class Initialized
INFO - 2025-06-01 14:17:58 --> Output Class Initialized
INFO - 2025-06-01 14:17:58 --> Security Class Initialized
DEBUG - 2025-06-01 14:17:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:58 --> Input Class Initialized
INFO - 2025-06-01 14:17:58 --> Language Class Initialized
INFO - 2025-06-01 14:17:58 --> Loader Class Initialized
INFO - 2025-06-01 14:17:58 --> Helper loaded: url_helper
INFO - 2025-06-01 14:17:58 --> Helper loaded: file_helper
INFO - 2025-06-01 14:17:58 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:58 --> Config Class Initialized
INFO - 2025-06-01 14:17:58 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:17:58 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:58 --> Utf8 Class Initialized
INFO - 2025-06-01 14:17:58 --> URI Class Initialized
INFO - 2025-06-01 14:17:58 --> Email Class Initialized
INFO - 2025-06-01 14:17:58 --> Router Class Initialized
DEBUG - 2025-06-01 14:17:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:58 --> Output Class Initialized
INFO - 2025-06-01 14:17:58 --> Security Class Initialized
INFO - 2025-06-01 14:17:58 --> Session: Class initialized using 'files' driver.
DEBUG - 2025-06-01 14:17:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:58 --> Controller Class Initialized
INFO - 2025-06-01 14:17:58 --> Input Class Initialized
INFO - 2025-06-01 14:17:58 --> Language Class Initialized
INFO - 2025-06-01 14:17:58 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:17:58 --> Loader Class Initialized
INFO - 2025-06-01 14:17:58 --> Helper loaded: form_helper
INFO - 2025-06-01 14:17:58 --> Form Validation Class Initialized
INFO - 2025-06-01 14:17:58 --> Helper loaded: url_helper
INFO - 2025-06-01 14:17:58 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:58 --> Helper loaded: file_helper
INFO - 2025-06-01 14:17:58 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:58 --> Model "Crud" initialized
INFO - 2025-06-01 14:17:58 --> Email Class Initialized
DEBUG - 2025-06-01 14:17:58 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:17:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:17:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:58 --> Final output sent to browser
DEBUG - 2025-06-01 14:17:58 --> Total execution time: 0.0104
INFO - 2025-06-01 14:17:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:17:58 --> Controller Class Initialized
INFO - 2025-06-01 14:17:58 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:17:58 --> Helper loaded: form_helper
INFO - 2025-06-01 14:17:58 --> Form Validation Class Initialized
INFO - 2025-06-01 14:17:58 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:58 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:17:58 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:17:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:17:58 --> Config Class Initialized
INFO - 2025-06-01 14:17:58 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:17:58 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:58 --> Utf8 Class Initialized
INFO - 2025-06-01 14:17:58 --> URI Class Initialized
INFO - 2025-06-01 14:17:58 --> Router Class Initialized
INFO - 2025-06-01 14:17:58 --> Output Class Initialized
INFO - 2025-06-01 14:17:58 --> Security Class Initialized
DEBUG - 2025-06-01 14:17:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:58 --> Input Class Initialized
INFO - 2025-06-01 14:17:58 --> Language Class Initialized
INFO - 2025-06-01 14:17:58 --> Loader Class Initialized
INFO - 2025-06-01 14:17:58 --> Helper loaded: url_helper
INFO - 2025-06-01 14:17:58 --> Helper loaded: file_helper
INFO - 2025-06-01 14:17:58 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:58 --> Final output sent to browser
DEBUG - 2025-06-01 14:17:58 --> Total execution time: 0.0160
INFO - 2025-06-01 14:17:58 --> Email Class Initialized
DEBUG - 2025-06-01 14:17:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:17:58 --> Controller Class Initialized
INFO - 2025-06-01 14:17:58 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:17:58 --> Helper loaded: form_helper
INFO - 2025-06-01 14:17:58 --> Form Validation Class Initialized
INFO - 2025-06-01 14:17:58 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:58 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:17:58 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:17:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:17:58 --> Config Class Initialized
INFO - 2025-06-01 14:17:58 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:17:58 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:58 --> Utf8 Class Initialized
INFO - 2025-06-01 14:17:58 --> URI Class Initialized
INFO - 2025-06-01 14:17:58 --> Router Class Initialized
INFO - 2025-06-01 14:17:58 --> Output Class Initialized
INFO - 2025-06-01 14:17:58 --> Security Class Initialized
DEBUG - 2025-06-01 14:17:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:58 --> Input Class Initialized
INFO - 2025-06-01 14:17:58 --> Language Class Initialized
INFO - 2025-06-01 14:17:58 --> Loader Class Initialized
INFO - 2025-06-01 14:17:58 --> Helper loaded: url_helper
INFO - 2025-06-01 14:17:58 --> Helper loaded: file_helper
INFO - 2025-06-01 14:17:58 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:58 --> Final output sent to browser
DEBUG - 2025-06-01 14:17:58 --> Total execution time: 0.0178
INFO - 2025-06-01 14:17:58 --> Email Class Initialized
DEBUG - 2025-06-01 14:17:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:17:58 --> Controller Class Initialized
INFO - 2025-06-01 14:17:58 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:17:58 --> Helper loaded: form_helper
INFO - 2025-06-01 14:17:58 --> Form Validation Class Initialized
INFO - 2025-06-01 14:17:58 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:58 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:17:58 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:17:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:17:58 --> Final output sent to browser
DEBUG - 2025-06-01 14:17:58 --> Total execution time: 0.0076
INFO - 2025-06-01 14:17:58 --> Config Class Initialized
INFO - 2025-06-01 14:17:58 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:17:58 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:58 --> Utf8 Class Initialized
INFO - 2025-06-01 14:17:58 --> URI Class Initialized
INFO - 2025-06-01 14:17:58 --> Router Class Initialized
INFO - 2025-06-01 14:17:58 --> Output Class Initialized
INFO - 2025-06-01 14:17:58 --> Security Class Initialized
DEBUG - 2025-06-01 14:17:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:58 --> Input Class Initialized
INFO - 2025-06-01 14:17:58 --> Language Class Initialized
INFO - 2025-06-01 14:17:58 --> Loader Class Initialized
INFO - 2025-06-01 14:17:58 --> Helper loaded: url_helper
INFO - 2025-06-01 14:17:58 --> Helper loaded: file_helper
INFO - 2025-06-01 14:17:58 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:58 --> Email Class Initialized
DEBUG - 2025-06-01 14:17:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:17:58 --> Controller Class Initialized
INFO - 2025-06-01 14:17:58 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:17:58 --> Helper loaded: form_helper
INFO - 2025-06-01 14:17:58 --> Form Validation Class Initialized
INFO - 2025-06-01 14:17:58 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:58 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:17:58 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:17:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:17:58 --> Final output sent to browser
DEBUG - 2025-06-01 14:17:58 --> Total execution time: 0.0249
INFO - 2025-06-01 14:17:58 --> Config Class Initialized
INFO - 2025-06-01 14:17:58 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:17:58 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:17:58 --> Utf8 Class Initialized
INFO - 2025-06-01 14:17:58 --> URI Class Initialized
INFO - 2025-06-01 14:17:58 --> Router Class Initialized
INFO - 2025-06-01 14:17:58 --> Output Class Initialized
INFO - 2025-06-01 14:17:58 --> Security Class Initialized
DEBUG - 2025-06-01 14:17:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:17:58 --> Input Class Initialized
INFO - 2025-06-01 14:17:58 --> Language Class Initialized
INFO - 2025-06-01 14:17:58 --> Loader Class Initialized
INFO - 2025-06-01 14:17:58 --> Helper loaded: url_helper
INFO - 2025-06-01 14:17:58 --> Helper loaded: file_helper
INFO - 2025-06-01 14:17:58 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:58 --> Email Class Initialized
DEBUG - 2025-06-01 14:17:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:17:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:17:58 --> Controller Class Initialized
INFO - 2025-06-01 14:17:58 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:17:58 --> Helper loaded: form_helper
INFO - 2025-06-01 14:17:58 --> Form Validation Class Initialized
INFO - 2025-06-01 14:17:58 --> Database Driver Class Initialized
INFO - 2025-06-01 14:17:58 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:17:58 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:17:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:17:58 --> Final output sent to browser
DEBUG - 2025-06-01 14:17:58 --> Total execution time: 0.0241
INFO - 2025-06-01 14:18:02 --> Config Class Initialized
INFO - 2025-06-01 14:18:02 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:18:02 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:18:02 --> Utf8 Class Initialized
INFO - 2025-06-01 14:18:02 --> URI Class Initialized
INFO - 2025-06-01 14:18:02 --> Router Class Initialized
INFO - 2025-06-01 14:18:02 --> Output Class Initialized
INFO - 2025-06-01 14:18:02 --> Security Class Initialized
DEBUG - 2025-06-01 14:18:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:18:02 --> Input Class Initialized
INFO - 2025-06-01 14:18:02 --> Language Class Initialized
INFO - 2025-06-01 14:18:02 --> Loader Class Initialized
INFO - 2025-06-01 14:18:02 --> Helper loaded: url_helper
INFO - 2025-06-01 14:18:02 --> Helper loaded: file_helper
INFO - 2025-06-01 14:18:02 --> Database Driver Class Initialized
INFO - 2025-06-01 14:18:02 --> Email Class Initialized
DEBUG - 2025-06-01 14:18:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:18:02 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:18:02 --> Controller Class Initialized
INFO - 2025-06-01 14:18:02 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:18:02 --> Helper loaded: form_helper
INFO - 2025-06-01 14:18:02 --> Form Validation Class Initialized
INFO - 2025-06-01 14:18:02 --> Database Driver Class Initialized
INFO - 2025-06-01 14:18:02 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:18:02 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:18:02 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:18:02 --> Final output sent to browser
DEBUG - 2025-06-01 14:18:02 --> Total execution time: 0.0096
INFO - 2025-06-01 14:18:07 --> Config Class Initialized
INFO - 2025-06-01 14:18:07 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:18:07 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:18:07 --> Utf8 Class Initialized
INFO - 2025-06-01 14:18:07 --> URI Class Initialized
INFO - 2025-06-01 14:18:07 --> Router Class Initialized
INFO - 2025-06-01 14:18:07 --> Output Class Initialized
INFO - 2025-06-01 14:18:07 --> Security Class Initialized
DEBUG - 2025-06-01 14:18:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:18:07 --> Input Class Initialized
INFO - 2025-06-01 14:18:07 --> Language Class Initialized
INFO - 2025-06-01 14:18:07 --> Loader Class Initialized
INFO - 2025-06-01 14:18:07 --> Helper loaded: url_helper
INFO - 2025-06-01 14:18:07 --> Helper loaded: file_helper
INFO - 2025-06-01 14:18:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:18:07 --> Config Class Initialized
INFO - 2025-06-01 14:18:07 --> Email Class Initialized
INFO - 2025-06-01 14:18:07 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:18:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-01 14:18:07 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:18:07 --> Utf8 Class Initialized
INFO - 2025-06-01 14:18:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:18:07 --> URI Class Initialized
INFO - 2025-06-01 14:18:07 --> Controller Class Initialized
INFO - 2025-06-01 14:18:07 --> Router Class Initialized
INFO - 2025-06-01 14:18:07 --> Helper loaded: form_helper
INFO - 2025-06-01 14:18:07 --> Output Class Initialized
INFO - 2025-06-01 14:18:07 --> Form Validation Class Initialized
INFO - 2025-06-01 14:18:07 --> Security Class Initialized
DEBUG - 2025-06-01 14:18:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:18:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:18:07 --> Input Class Initialized
INFO - 2025-06-01 14:18:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:18:07 --> Language Class Initialized
INFO - 2025-06-01 14:18:07 --> Loader Class Initialized
INFO - 2025-06-01 14:18:07 --> Helper loaded: url_helper
INFO - 2025-06-01 14:18:07 --> Helper loaded: file_helper
INFO - 2025-06-01 14:18:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:18:07 --> Model "Crud" initialized
INFO - 2025-06-01 14:18:07 --> Email Class Initialized
DEBUG - 2025-06-01 14:18:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:18:07 --> Final output sent to browser
DEBUG - 2025-06-01 14:18:07 --> Total execution time: 0.0142
INFO - 2025-06-01 14:18:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:18:07 --> Controller Class Initialized
INFO - 2025-06-01 14:18:07 --> Helper loaded: form_helper
INFO - 2025-06-01 14:18:07 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:18:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:18:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:18:07 --> Model "Crud" initialized
INFO - 2025-06-01 14:18:07 --> Final output sent to browser
DEBUG - 2025-06-01 14:18:07 --> Total execution time: 0.0223
INFO - 2025-06-01 14:18:18 --> Config Class Initialized
INFO - 2025-06-01 14:18:18 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:18:18 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:18:18 --> Utf8 Class Initialized
INFO - 2025-06-01 14:18:18 --> URI Class Initialized
INFO - 2025-06-01 14:18:18 --> Router Class Initialized
INFO - 2025-06-01 14:18:18 --> Output Class Initialized
INFO - 2025-06-01 14:18:18 --> Security Class Initialized
DEBUG - 2025-06-01 14:18:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:18:18 --> Input Class Initialized
INFO - 2025-06-01 14:18:18 --> Language Class Initialized
INFO - 2025-06-01 14:18:18 --> Loader Class Initialized
INFO - 2025-06-01 14:18:18 --> Helper loaded: url_helper
INFO - 2025-06-01 14:18:18 --> Helper loaded: file_helper
INFO - 2025-06-01 14:18:18 --> Database Driver Class Initialized
INFO - 2025-06-01 14:18:18 --> Email Class Initialized
DEBUG - 2025-06-01 14:18:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:18:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:18:18 --> Controller Class Initialized
INFO - 2025-06-01 14:18:18 --> Helper loaded: form_helper
INFO - 2025-06-01 14:18:18 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:18:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:18:18 --> Database Driver Class Initialized
INFO - 2025-06-01 14:18:18 --> Model "Crud" initialized
INFO - 2025-06-01 14:18:18 --> Config Class Initialized
INFO - 2025-06-01 14:18:18 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:18:18 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:18:18 --> Utf8 Class Initialized
INFO - 2025-06-01 14:18:18 --> URI Class Initialized
INFO - 2025-06-01 14:18:18 --> Router Class Initialized
INFO - 2025-06-01 14:18:18 --> Output Class Initialized
INFO - 2025-06-01 14:18:18 --> Security Class Initialized
DEBUG - 2025-06-01 14:18:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:18:18 --> Input Class Initialized
INFO - 2025-06-01 14:18:18 --> Language Class Initialized
INFO - 2025-06-01 14:18:18 --> Loader Class Initialized
INFO - 2025-06-01 14:18:18 --> Helper loaded: url_helper
INFO - 2025-06-01 14:18:18 --> Helper loaded: file_helper
INFO - 2025-06-01 14:18:18 --> Database Driver Class Initialized
INFO - 2025-06-01 14:18:18 --> Email Class Initialized
DEBUG - 2025-06-01 14:18:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:18:18 --> Final output sent to browser
DEBUG - 2025-06-01 14:18:18 --> Total execution time: 0.0133
INFO - 2025-06-01 14:18:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:18:18 --> Controller Class Initialized
INFO - 2025-06-01 14:18:18 --> Helper loaded: form_helper
INFO - 2025-06-01 14:18:18 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:18:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:18:18 --> Database Driver Class Initialized
INFO - 2025-06-01 14:18:18 --> Model "Crud" initialized
INFO - 2025-06-01 14:18:18 --> Final output sent to browser
DEBUG - 2025-06-01 14:18:18 --> Total execution time: 0.0192
INFO - 2025-06-01 14:18:28 --> Config Class Initialized
INFO - 2025-06-01 14:18:28 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:18:28 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:18:28 --> Utf8 Class Initialized
INFO - 2025-06-01 14:18:28 --> URI Class Initialized
INFO - 2025-06-01 14:18:28 --> Router Class Initialized
INFO - 2025-06-01 14:18:28 --> Output Class Initialized
INFO - 2025-06-01 14:18:28 --> Security Class Initialized
DEBUG - 2025-06-01 14:18:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:18:28 --> Input Class Initialized
INFO - 2025-06-01 14:18:28 --> Language Class Initialized
INFO - 2025-06-01 14:18:28 --> Loader Class Initialized
INFO - 2025-06-01 14:18:28 --> Helper loaded: url_helper
INFO - 2025-06-01 14:18:28 --> Helper loaded: file_helper
INFO - 2025-06-01 14:18:28 --> Database Driver Class Initialized
INFO - 2025-06-01 14:18:28 --> Config Class Initialized
INFO - 2025-06-01 14:18:28 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:18:28 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:18:28 --> Utf8 Class Initialized
INFO - 2025-06-01 14:18:28 --> URI Class Initialized
INFO - 2025-06-01 14:18:28 --> Router Class Initialized
INFO - 2025-06-01 14:18:28 --> Output Class Initialized
INFO - 2025-06-01 14:18:28 --> Security Class Initialized
DEBUG - 2025-06-01 14:18:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:18:28 --> Input Class Initialized
INFO - 2025-06-01 14:18:28 --> Language Class Initialized
INFO - 2025-06-01 14:18:28 --> Loader Class Initialized
INFO - 2025-06-01 14:18:28 --> Helper loaded: url_helper
INFO - 2025-06-01 14:18:28 --> Helper loaded: file_helper
INFO - 2025-06-01 14:18:28 --> Database Driver Class Initialized
INFO - 2025-06-01 14:18:28 --> Email Class Initialized
DEBUG - 2025-06-01 14:18:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:18:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:18:28 --> Controller Class Initialized
INFO - 2025-06-01 14:18:28 --> Helper loaded: form_helper
INFO - 2025-06-01 14:18:28 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:18:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:18:28 --> Database Driver Class Initialized
INFO - 2025-06-01 14:18:28 --> Email Class Initialized
DEBUG - 2025-06-01 14:18:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:18:28 --> Model "Crud" initialized
INFO - 2025-06-01 14:18:28 --> Final output sent to browser
DEBUG - 2025-06-01 14:18:28 --> Total execution time: 0.0145
INFO - 2025-06-01 14:18:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:18:28 --> Controller Class Initialized
INFO - 2025-06-01 14:18:28 --> Helper loaded: form_helper
INFO - 2025-06-01 14:18:28 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:18:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:18:28 --> Database Driver Class Initialized
INFO - 2025-06-01 14:18:28 --> Model "Crud" initialized
INFO - 2025-06-01 14:18:28 --> Final output sent to browser
DEBUG - 2025-06-01 14:18:28 --> Total execution time: 0.0252
INFO - 2025-06-01 14:18:37 --> Config Class Initialized
INFO - 2025-06-01 14:18:37 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:18:37 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:18:37 --> Utf8 Class Initialized
INFO - 2025-06-01 14:18:37 --> URI Class Initialized
INFO - 2025-06-01 14:18:37 --> Router Class Initialized
INFO - 2025-06-01 14:18:37 --> Output Class Initialized
INFO - 2025-06-01 14:18:37 --> Security Class Initialized
DEBUG - 2025-06-01 14:18:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:18:37 --> Input Class Initialized
INFO - 2025-06-01 14:18:37 --> Language Class Initialized
INFO - 2025-06-01 14:18:37 --> Loader Class Initialized
INFO - 2025-06-01 14:18:37 --> Helper loaded: url_helper
INFO - 2025-06-01 14:18:37 --> Helper loaded: file_helper
INFO - 2025-06-01 14:18:37 --> Database Driver Class Initialized
INFO - 2025-06-01 14:18:37 --> Config Class Initialized
INFO - 2025-06-01 14:18:37 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:18:37 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:18:37 --> Utf8 Class Initialized
INFO - 2025-06-01 14:18:37 --> URI Class Initialized
INFO - 2025-06-01 14:18:37 --> Router Class Initialized
INFO - 2025-06-01 14:18:37 --> Output Class Initialized
INFO - 2025-06-01 14:18:37 --> Security Class Initialized
DEBUG - 2025-06-01 14:18:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:18:37 --> Input Class Initialized
INFO - 2025-06-01 14:18:37 --> Language Class Initialized
INFO - 2025-06-01 14:18:37 --> Email Class Initialized
INFO - 2025-06-01 14:18:37 --> Loader Class Initialized
INFO - 2025-06-01 14:18:37 --> Helper loaded: url_helper
INFO - 2025-06-01 14:18:37 --> Helper loaded: file_helper
DEBUG - 2025-06-01 14:18:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:18:37 --> Database Driver Class Initialized
INFO - 2025-06-01 14:18:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:18:37 --> Controller Class Initialized
INFO - 2025-06-01 14:18:37 --> Helper loaded: form_helper
INFO - 2025-06-01 14:18:37 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:18:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:18:37 --> Database Driver Class Initialized
INFO - 2025-06-01 14:18:37 --> Email Class Initialized
DEBUG - 2025-06-01 14:18:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:18:37 --> Model "Crud" initialized
INFO - 2025-06-01 14:18:37 --> Final output sent to browser
DEBUG - 2025-06-01 14:18:37 --> Total execution time: 0.0126
INFO - 2025-06-01 14:18:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:18:37 --> Controller Class Initialized
INFO - 2025-06-01 14:18:37 --> Helper loaded: form_helper
INFO - 2025-06-01 14:18:37 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:18:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:18:37 --> Database Driver Class Initialized
INFO - 2025-06-01 14:18:37 --> Model "Crud" initialized
INFO - 2025-06-01 14:18:37 --> Final output sent to browser
DEBUG - 2025-06-01 14:18:37 --> Total execution time: 0.0204
INFO - 2025-06-01 14:18:47 --> Config Class Initialized
INFO - 2025-06-01 14:18:47 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:18:47 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:18:47 --> Utf8 Class Initialized
INFO - 2025-06-01 14:18:47 --> URI Class Initialized
INFO - 2025-06-01 14:18:47 --> Router Class Initialized
INFO - 2025-06-01 14:18:47 --> Output Class Initialized
INFO - 2025-06-01 14:18:47 --> Config Class Initialized
INFO - 2025-06-01 14:18:47 --> Security Class Initialized
INFO - 2025-06-01 14:18:47 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:18:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-01 14:18:47 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:18:47 --> Input Class Initialized
INFO - 2025-06-01 14:18:47 --> Utf8 Class Initialized
INFO - 2025-06-01 14:18:47 --> Language Class Initialized
INFO - 2025-06-01 14:18:47 --> URI Class Initialized
INFO - 2025-06-01 14:18:47 --> Loader Class Initialized
INFO - 2025-06-01 14:18:47 --> Router Class Initialized
INFO - 2025-06-01 14:18:47 --> Helper loaded: url_helper
INFO - 2025-06-01 14:18:47 --> Output Class Initialized
INFO - 2025-06-01 14:18:47 --> Helper loaded: file_helper
INFO - 2025-06-01 14:18:47 --> Security Class Initialized
DEBUG - 2025-06-01 14:18:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:18:47 --> Input Class Initialized
INFO - 2025-06-01 14:18:47 --> Language Class Initialized
INFO - 2025-06-01 14:18:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:18:47 --> Loader Class Initialized
INFO - 2025-06-01 14:18:47 --> Helper loaded: url_helper
INFO - 2025-06-01 14:18:47 --> Helper loaded: file_helper
INFO - 2025-06-01 14:18:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:18:47 --> Email Class Initialized
DEBUG - 2025-06-01 14:18:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:18:47 --> Email Class Initialized
INFO - 2025-06-01 14:18:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:18:47 --> Controller Class Initialized
DEBUG - 2025-06-01 14:18:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:18:47 --> Helper loaded: form_helper
INFO - 2025-06-01 14:18:47 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:18:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:18:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:18:47 --> Model "Crud" initialized
INFO - 2025-06-01 14:18:48 --> Final output sent to browser
DEBUG - 2025-06-01 14:18:48 --> Total execution time: 0.5077
INFO - 2025-06-01 14:18:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:18:48 --> Controller Class Initialized
INFO - 2025-06-01 14:18:48 --> Helper loaded: form_helper
INFO - 2025-06-01 14:18:48 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:18:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:18:48 --> Database Driver Class Initialized
INFO - 2025-06-01 14:18:48 --> Model "Crud" initialized
INFO - 2025-06-01 14:18:48 --> Final output sent to browser
DEBUG - 2025-06-01 14:18:48 --> Total execution time: 0.5213
INFO - 2025-06-01 14:18:58 --> Config Class Initialized
INFO - 2025-06-01 14:18:58 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:18:58 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:18:58 --> Utf8 Class Initialized
INFO - 2025-06-01 14:18:58 --> URI Class Initialized
INFO - 2025-06-01 14:18:58 --> Router Class Initialized
INFO - 2025-06-01 14:18:58 --> Output Class Initialized
INFO - 2025-06-01 14:18:58 --> Security Class Initialized
DEBUG - 2025-06-01 14:18:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:18:58 --> Input Class Initialized
INFO - 2025-06-01 14:18:58 --> Language Class Initialized
INFO - 2025-06-01 14:18:58 --> Loader Class Initialized
INFO - 2025-06-01 14:18:58 --> Helper loaded: url_helper
INFO - 2025-06-01 14:18:58 --> Helper loaded: file_helper
INFO - 2025-06-01 14:18:58 --> Database Driver Class Initialized
INFO - 2025-06-01 14:18:58 --> Config Class Initialized
INFO - 2025-06-01 14:18:58 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:18:58 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:18:58 --> Utf8 Class Initialized
INFO - 2025-06-01 14:18:58 --> Email Class Initialized
INFO - 2025-06-01 14:18:58 --> URI Class Initialized
DEBUG - 2025-06-01 14:18:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:18:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:18:58 --> Router Class Initialized
INFO - 2025-06-01 14:18:58 --> Controller Class Initialized
INFO - 2025-06-01 14:18:58 --> Output Class Initialized
INFO - 2025-06-01 14:18:58 --> Security Class Initialized
DEBUG - 2025-06-01 14:18:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:18:58 --> Input Class Initialized
INFO - 2025-06-01 14:18:58 --> Helper loaded: form_helper
INFO - 2025-06-01 14:18:58 --> Language Class Initialized
INFO - 2025-06-01 14:18:58 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:18:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:18:58 --> Database Driver Class Initialized
INFO - 2025-06-01 14:18:58 --> Loader Class Initialized
INFO - 2025-06-01 14:18:58 --> Helper loaded: url_helper
INFO - 2025-06-01 14:18:58 --> Helper loaded: file_helper
INFO - 2025-06-01 14:18:58 --> Database Driver Class Initialized
INFO - 2025-06-01 14:18:58 --> Model "Crud" initialized
INFO - 2025-06-01 14:18:58 --> Email Class Initialized
DEBUG - 2025-06-01 14:18:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:18:58 --> Final output sent to browser
DEBUG - 2025-06-01 14:18:58 --> Total execution time: 0.0131
INFO - 2025-06-01 14:18:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:18:58 --> Controller Class Initialized
INFO - 2025-06-01 14:18:58 --> Helper loaded: form_helper
INFO - 2025-06-01 14:18:58 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:18:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:18:58 --> Database Driver Class Initialized
INFO - 2025-06-01 14:18:58 --> Model "Crud" initialized
INFO - 2025-06-01 14:18:58 --> Final output sent to browser
DEBUG - 2025-06-01 14:18:58 --> Total execution time: 0.0217
INFO - 2025-06-01 14:19:07 --> Config Class Initialized
INFO - 2025-06-01 14:19:07 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:19:07 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:19:07 --> Utf8 Class Initialized
INFO - 2025-06-01 14:19:07 --> URI Class Initialized
INFO - 2025-06-01 14:19:07 --> Config Class Initialized
INFO - 2025-06-01 14:19:07 --> Router Class Initialized
INFO - 2025-06-01 14:19:07 --> Hooks Class Initialized
INFO - 2025-06-01 14:19:07 --> Output Class Initialized
DEBUG - 2025-06-01 14:19:07 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:19:07 --> Utf8 Class Initialized
INFO - 2025-06-01 14:19:07 --> Security Class Initialized
INFO - 2025-06-01 14:19:07 --> URI Class Initialized
DEBUG - 2025-06-01 14:19:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:19:07 --> Input Class Initialized
INFO - 2025-06-01 14:19:07 --> Language Class Initialized
INFO - 2025-06-01 14:19:07 --> Router Class Initialized
INFO - 2025-06-01 14:19:07 --> Output Class Initialized
INFO - 2025-06-01 14:19:07 --> Loader Class Initialized
INFO - 2025-06-01 14:19:07 --> Security Class Initialized
INFO - 2025-06-01 14:19:07 --> Helper loaded: url_helper
DEBUG - 2025-06-01 14:19:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:19:07 --> Helper loaded: file_helper
INFO - 2025-06-01 14:19:07 --> Input Class Initialized
INFO - 2025-06-01 14:19:07 --> Language Class Initialized
INFO - 2025-06-01 14:19:07 --> Loader Class Initialized
INFO - 2025-06-01 14:19:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:19:07 --> Helper loaded: url_helper
INFO - 2025-06-01 14:19:07 --> Helper loaded: file_helper
INFO - 2025-06-01 14:19:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:19:07 --> Email Class Initialized
INFO - 2025-06-01 14:19:07 --> Email Class Initialized
DEBUG - 2025-06-01 14:19:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-01 14:19:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:19:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:19:07 --> Controller Class Initialized
INFO - 2025-06-01 14:19:07 --> Helper loaded: form_helper
INFO - 2025-06-01 14:19:07 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:19:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:19:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:19:07 --> Model "Crud" initialized
INFO - 2025-06-01 14:19:07 --> Final output sent to browser
DEBUG - 2025-06-01 14:19:07 --> Total execution time: 0.0133
INFO - 2025-06-01 14:19:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:19:07 --> Controller Class Initialized
INFO - 2025-06-01 14:19:07 --> Helper loaded: form_helper
INFO - 2025-06-01 14:19:07 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:19:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:19:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:19:07 --> Model "Crud" initialized
INFO - 2025-06-01 14:19:07 --> Final output sent to browser
DEBUG - 2025-06-01 14:19:07 --> Total execution time: 0.0226
INFO - 2025-06-01 14:19:55 --> Config Class Initialized
INFO - 2025-06-01 14:19:55 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:19:55 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:19:55 --> Utf8 Class Initialized
INFO - 2025-06-01 14:19:55 --> URI Class Initialized
INFO - 2025-06-01 14:19:55 --> Router Class Initialized
INFO - 2025-06-01 14:19:55 --> Output Class Initialized
INFO - 2025-06-01 14:19:55 --> Security Class Initialized
DEBUG - 2025-06-01 14:19:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:19:55 --> Input Class Initialized
INFO - 2025-06-01 14:19:55 --> Language Class Initialized
INFO - 2025-06-01 14:19:55 --> Loader Class Initialized
INFO - 2025-06-01 14:19:55 --> Helper loaded: url_helper
INFO - 2025-06-01 14:19:55 --> Helper loaded: file_helper
INFO - 2025-06-01 14:19:55 --> Config Class Initialized
INFO - 2025-06-01 14:19:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:19:55 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:19:55 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:19:55 --> Utf8 Class Initialized
INFO - 2025-06-01 14:19:55 --> URI Class Initialized
INFO - 2025-06-01 14:19:55 --> Router Class Initialized
INFO - 2025-06-01 14:19:55 --> Output Class Initialized
INFO - 2025-06-01 14:19:55 --> Security Class Initialized
DEBUG - 2025-06-01 14:19:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:19:55 --> Input Class Initialized
INFO - 2025-06-01 14:19:55 --> Language Class Initialized
INFO - 2025-06-01 14:19:55 --> Loader Class Initialized
INFO - 2025-06-01 14:19:55 --> Helper loaded: url_helper
INFO - 2025-06-01 14:19:55 --> Helper loaded: file_helper
INFO - 2025-06-01 14:19:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:19:55 --> Email Class Initialized
DEBUG - 2025-06-01 14:19:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:19:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:19:55 --> Controller Class Initialized
INFO - 2025-06-01 14:19:55 --> Helper loaded: form_helper
INFO - 2025-06-01 14:19:55 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:19:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:19:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:19:55 --> Email Class Initialized
DEBUG - 2025-06-01 14:19:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:19:55 --> Model "Crud" initialized
INFO - 2025-06-01 14:19:55 --> Final output sent to browser
DEBUG - 2025-06-01 14:19:55 --> Total execution time: 0.0163
INFO - 2025-06-01 14:19:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:19:55 --> Controller Class Initialized
INFO - 2025-06-01 14:19:55 --> Helper loaded: form_helper
INFO - 2025-06-01 14:19:55 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:19:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:19:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:19:55 --> Model "Crud" initialized
INFO - 2025-06-01 14:19:55 --> Final output sent to browser
DEBUG - 2025-06-01 14:19:55 --> Total execution time: 0.0264
INFO - 2025-06-01 14:20:54 --> Config Class Initialized
INFO - 2025-06-01 14:20:54 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:20:54 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:20:54 --> Utf8 Class Initialized
INFO - 2025-06-01 14:20:54 --> URI Class Initialized
INFO - 2025-06-01 14:20:54 --> Router Class Initialized
INFO - 2025-06-01 14:20:54 --> Output Class Initialized
INFO - 2025-06-01 14:20:54 --> Security Class Initialized
DEBUG - 2025-06-01 14:20:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:20:54 --> Input Class Initialized
INFO - 2025-06-01 14:20:54 --> Language Class Initialized
INFO - 2025-06-01 14:20:54 --> Loader Class Initialized
INFO - 2025-06-01 14:20:54 --> Helper loaded: url_helper
INFO - 2025-06-01 14:20:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:20:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:20:54 --> Config Class Initialized
INFO - 2025-06-01 14:20:54 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:20:54 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:20:54 --> Utf8 Class Initialized
INFO - 2025-06-01 14:20:54 --> URI Class Initialized
INFO - 2025-06-01 14:20:54 --> Router Class Initialized
INFO - 2025-06-01 14:20:54 --> Output Class Initialized
INFO - 2025-06-01 14:20:54 --> Security Class Initialized
DEBUG - 2025-06-01 14:20:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:20:54 --> Input Class Initialized
INFO - 2025-06-01 14:20:54 --> Language Class Initialized
INFO - 2025-06-01 14:20:54 --> Loader Class Initialized
INFO - 2025-06-01 14:20:54 --> Email Class Initialized
INFO - 2025-06-01 14:20:54 --> Helper loaded: url_helper
DEBUG - 2025-06-01 14:20:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:20:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:20:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:20:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:20:54 --> Controller Class Initialized
INFO - 2025-06-01 14:20:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:20:54 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:20:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:20:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:20:54 --> Email Class Initialized
DEBUG - 2025-06-01 14:20:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:20:54 --> Model "Crud" initialized
INFO - 2025-06-01 14:20:54 --> Final output sent to browser
DEBUG - 2025-06-01 14:20:54 --> Total execution time: 0.0143
INFO - 2025-06-01 14:20:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:20:54 --> Controller Class Initialized
INFO - 2025-06-01 14:20:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:20:54 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:20:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:20:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:20:54 --> Model "Crud" initialized
INFO - 2025-06-01 14:20:54 --> Final output sent to browser
DEBUG - 2025-06-01 14:20:54 --> Total execution time: 0.0230
INFO - 2025-06-01 14:21:54 --> Config Class Initialized
INFO - 2025-06-01 14:21:54 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:21:54 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:21:54 --> Utf8 Class Initialized
INFO - 2025-06-01 14:21:54 --> URI Class Initialized
INFO - 2025-06-01 14:21:54 --> Router Class Initialized
INFO - 2025-06-01 14:21:54 --> Output Class Initialized
INFO - 2025-06-01 14:21:54 --> Security Class Initialized
DEBUG - 2025-06-01 14:21:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:21:54 --> Input Class Initialized
INFO - 2025-06-01 14:21:54 --> Language Class Initialized
INFO - 2025-06-01 14:21:54 --> Config Class Initialized
INFO - 2025-06-01 14:21:54 --> Hooks Class Initialized
INFO - 2025-06-01 14:21:54 --> Loader Class Initialized
DEBUG - 2025-06-01 14:21:54 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:21:54 --> Helper loaded: url_helper
INFO - 2025-06-01 14:21:54 --> Utf8 Class Initialized
INFO - 2025-06-01 14:21:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:21:54 --> URI Class Initialized
INFO - 2025-06-01 14:21:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:21:54 --> Router Class Initialized
INFO - 2025-06-01 14:21:54 --> Output Class Initialized
INFO - 2025-06-01 14:21:54 --> Security Class Initialized
DEBUG - 2025-06-01 14:21:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:21:54 --> Input Class Initialized
INFO - 2025-06-01 14:21:54 --> Language Class Initialized
INFO - 2025-06-01 14:21:54 --> Loader Class Initialized
INFO - 2025-06-01 14:21:54 --> Helper loaded: url_helper
INFO - 2025-06-01 14:21:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:21:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:21:54 --> Email Class Initialized
DEBUG - 2025-06-01 14:21:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:21:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:21:54 --> Controller Class Initialized
INFO - 2025-06-01 14:21:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:21:54 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:21:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:21:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:21:54 --> Email Class Initialized
DEBUG - 2025-06-01 14:21:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:21:54 --> Model "Crud" initialized
INFO - 2025-06-01 14:21:54 --> Final output sent to browser
DEBUG - 2025-06-01 14:21:54 --> Total execution time: 0.0159
INFO - 2025-06-01 14:21:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:21:54 --> Controller Class Initialized
INFO - 2025-06-01 14:21:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:21:54 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:21:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:21:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:21:54 --> Model "Crud" initialized
INFO - 2025-06-01 14:21:54 --> Final output sent to browser
DEBUG - 2025-06-01 14:21:54 --> Total execution time: 0.0283
INFO - 2025-06-01 14:22:54 --> Config Class Initialized
INFO - 2025-06-01 14:22:54 --> Hooks Class Initialized
INFO - 2025-06-01 14:22:54 --> Config Class Initialized
DEBUG - 2025-06-01 14:22:54 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:22:54 --> Hooks Class Initialized
INFO - 2025-06-01 14:22:54 --> Utf8 Class Initialized
DEBUG - 2025-06-01 14:22:54 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:22:54 --> Utf8 Class Initialized
INFO - 2025-06-01 14:22:54 --> URI Class Initialized
INFO - 2025-06-01 14:22:54 --> URI Class Initialized
INFO - 2025-06-01 14:22:54 --> Router Class Initialized
INFO - 2025-06-01 14:22:54 --> Router Class Initialized
INFO - 2025-06-01 14:22:54 --> Output Class Initialized
INFO - 2025-06-01 14:22:54 --> Output Class Initialized
INFO - 2025-06-01 14:22:54 --> Security Class Initialized
INFO - 2025-06-01 14:22:54 --> Security Class Initialized
DEBUG - 2025-06-01 14:22:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-01 14:22:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:22:54 --> Input Class Initialized
INFO - 2025-06-01 14:22:54 --> Input Class Initialized
INFO - 2025-06-01 14:22:54 --> Language Class Initialized
INFO - 2025-06-01 14:22:54 --> Language Class Initialized
INFO - 2025-06-01 14:22:54 --> Loader Class Initialized
INFO - 2025-06-01 14:22:54 --> Loader Class Initialized
INFO - 2025-06-01 14:22:54 --> Helper loaded: url_helper
INFO - 2025-06-01 14:22:54 --> Helper loaded: url_helper
INFO - 2025-06-01 14:22:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:22:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:22:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:22:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:22:54 --> Email Class Initialized
INFO - 2025-06-01 14:22:54 --> Email Class Initialized
DEBUG - 2025-06-01 14:22:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-01 14:22:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:22:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:22:54 --> Controller Class Initialized
INFO - 2025-06-01 14:22:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:22:54 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:22:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:22:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:22:54 --> Model "Crud" initialized
INFO - 2025-06-01 14:22:54 --> Final output sent to browser
DEBUG - 2025-06-01 14:22:54 --> Total execution time: 0.0158
INFO - 2025-06-01 14:22:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:22:54 --> Controller Class Initialized
INFO - 2025-06-01 14:22:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:22:54 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:22:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:22:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:22:54 --> Model "Crud" initialized
INFO - 2025-06-01 14:22:54 --> Final output sent to browser
DEBUG - 2025-06-01 14:22:54 --> Total execution time: 0.0274
INFO - 2025-06-01 14:23:55 --> Config Class Initialized
INFO - 2025-06-01 14:23:55 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:23:55 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:23:55 --> Utf8 Class Initialized
INFO - 2025-06-01 14:23:55 --> URI Class Initialized
INFO - 2025-06-01 14:23:55 --> Router Class Initialized
INFO - 2025-06-01 14:23:55 --> Output Class Initialized
INFO - 2025-06-01 14:23:55 --> Security Class Initialized
DEBUG - 2025-06-01 14:23:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:23:55 --> Input Class Initialized
INFO - 2025-06-01 14:23:55 --> Language Class Initialized
INFO - 2025-06-01 14:23:55 --> Loader Class Initialized
INFO - 2025-06-01 14:23:55 --> Helper loaded: url_helper
INFO - 2025-06-01 14:23:55 --> Helper loaded: file_helper
INFO - 2025-06-01 14:23:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:23:55 --> Config Class Initialized
INFO - 2025-06-01 14:23:55 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:23:55 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:23:55 --> Utf8 Class Initialized
INFO - 2025-06-01 14:23:55 --> URI Class Initialized
INFO - 2025-06-01 14:23:55 --> Router Class Initialized
INFO - 2025-06-01 14:23:55 --> Output Class Initialized
INFO - 2025-06-01 14:23:55 --> Security Class Initialized
DEBUG - 2025-06-01 14:23:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:23:55 --> Input Class Initialized
INFO - 2025-06-01 14:23:55 --> Language Class Initialized
INFO - 2025-06-01 14:23:55 --> Loader Class Initialized
INFO - 2025-06-01 14:23:55 --> Helper loaded: url_helper
INFO - 2025-06-01 14:23:55 --> Helper loaded: file_helper
INFO - 2025-06-01 14:23:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:23:55 --> Email Class Initialized
DEBUG - 2025-06-01 14:23:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:23:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:23:55 --> Controller Class Initialized
INFO - 2025-06-01 14:23:55 --> Helper loaded: form_helper
INFO - 2025-06-01 14:23:55 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:23:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:23:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:23:55 --> Email Class Initialized
DEBUG - 2025-06-01 14:23:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:23:55 --> Model "Crud" initialized
INFO - 2025-06-01 14:23:55 --> Final output sent to browser
DEBUG - 2025-06-01 14:23:55 --> Total execution time: 0.0144
INFO - 2025-06-01 14:23:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:23:55 --> Controller Class Initialized
INFO - 2025-06-01 14:23:55 --> Helper loaded: form_helper
INFO - 2025-06-01 14:23:55 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:23:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:23:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:23:55 --> Model "Crud" initialized
INFO - 2025-06-01 14:23:55 --> Final output sent to browser
DEBUG - 2025-06-01 14:23:55 --> Total execution time: 0.0236
INFO - 2025-06-01 14:24:55 --> Config Class Initialized
INFO - 2025-06-01 14:24:55 --> Hooks Class Initialized
INFO - 2025-06-01 14:24:55 --> Config Class Initialized
DEBUG - 2025-06-01 14:24:55 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:24:55 --> Hooks Class Initialized
INFO - 2025-06-01 14:24:55 --> Utf8 Class Initialized
DEBUG - 2025-06-01 14:24:55 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:24:55 --> Utf8 Class Initialized
INFO - 2025-06-01 14:24:55 --> URI Class Initialized
INFO - 2025-06-01 14:24:55 --> URI Class Initialized
INFO - 2025-06-01 14:24:55 --> Router Class Initialized
INFO - 2025-06-01 14:24:55 --> Router Class Initialized
INFO - 2025-06-01 14:24:55 --> Output Class Initialized
INFO - 2025-06-01 14:24:55 --> Output Class Initialized
INFO - 2025-06-01 14:24:55 --> Security Class Initialized
INFO - 2025-06-01 14:24:55 --> Security Class Initialized
DEBUG - 2025-06-01 14:24:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-01 14:24:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:24:55 --> Input Class Initialized
INFO - 2025-06-01 14:24:55 --> Input Class Initialized
INFO - 2025-06-01 14:24:55 --> Language Class Initialized
INFO - 2025-06-01 14:24:55 --> Language Class Initialized
INFO - 2025-06-01 14:24:55 --> Loader Class Initialized
INFO - 2025-06-01 14:24:55 --> Loader Class Initialized
INFO - 2025-06-01 14:24:55 --> Helper loaded: url_helper
INFO - 2025-06-01 14:24:55 --> Helper loaded: url_helper
INFO - 2025-06-01 14:24:55 --> Helper loaded: file_helper
INFO - 2025-06-01 14:24:55 --> Helper loaded: file_helper
INFO - 2025-06-01 14:24:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:24:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:24:55 --> Email Class Initialized
INFO - 2025-06-01 14:24:55 --> Email Class Initialized
DEBUG - 2025-06-01 14:24:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-01 14:24:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:24:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:24:55 --> Controller Class Initialized
INFO - 2025-06-01 14:24:55 --> Helper loaded: form_helper
INFO - 2025-06-01 14:24:55 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:24:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:24:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:24:55 --> Model "Crud" initialized
INFO - 2025-06-01 14:24:55 --> Final output sent to browser
DEBUG - 2025-06-01 14:24:55 --> Total execution time: 0.0141
INFO - 2025-06-01 14:24:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:24:55 --> Controller Class Initialized
INFO - 2025-06-01 14:24:55 --> Helper loaded: form_helper
INFO - 2025-06-01 14:24:55 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:24:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:24:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:24:55 --> Model "Crud" initialized
INFO - 2025-06-01 14:24:55 --> Final output sent to browser
DEBUG - 2025-06-01 14:24:55 --> Total execution time: 0.0259
INFO - 2025-06-01 14:25:42 --> Config Class Initialized
INFO - 2025-06-01 14:25:42 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:25:42 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:25:42 --> Utf8 Class Initialized
INFO - 2025-06-01 14:25:42 --> URI Class Initialized
INFO - 2025-06-01 14:25:42 --> Router Class Initialized
INFO - 2025-06-01 14:25:42 --> Output Class Initialized
INFO - 2025-06-01 14:25:42 --> Security Class Initialized
DEBUG - 2025-06-01 14:25:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:25:42 --> Input Class Initialized
INFO - 2025-06-01 14:25:42 --> Language Class Initialized
INFO - 2025-06-01 14:25:42 --> Loader Class Initialized
INFO - 2025-06-01 14:25:42 --> Helper loaded: url_helper
INFO - 2025-06-01 14:25:42 --> Helper loaded: file_helper
INFO - 2025-06-01 14:25:42 --> Database Driver Class Initialized
INFO - 2025-06-01 14:25:42 --> Email Class Initialized
DEBUG - 2025-06-01 14:25:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:25:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:25:42 --> Controller Class Initialized
INFO - 2025-06-01 14:25:42 --> Config Class Initialized
INFO - 2025-06-01 14:25:42 --> Helper loaded: form_helper
INFO - 2025-06-01 14:25:42 --> Hooks Class Initialized
INFO - 2025-06-01 14:25:42 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:25:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:25:42 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:25:42 --> Database Driver Class Initialized
INFO - 2025-06-01 14:25:42 --> Utf8 Class Initialized
INFO - 2025-06-01 14:25:42 --> URI Class Initialized
INFO - 2025-06-01 14:25:42 --> Router Class Initialized
INFO - 2025-06-01 14:25:42 --> Output Class Initialized
INFO - 2025-06-01 14:25:42 --> Security Class Initialized
DEBUG - 2025-06-01 14:25:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:25:42 --> Input Class Initialized
INFO - 2025-06-01 14:25:42 --> Language Class Initialized
INFO - 2025-06-01 14:25:42 --> Loader Class Initialized
INFO - 2025-06-01 14:25:42 --> Helper loaded: url_helper
INFO - 2025-06-01 14:25:42 --> Helper loaded: file_helper
INFO - 2025-06-01 14:25:42 --> Database Driver Class Initialized
INFO - 2025-06-01 14:25:42 --> Model "Crud" initialized
INFO - 2025-06-01 14:25:42 --> Email Class Initialized
DEBUG - 2025-06-01 14:25:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:25:42 --> Final output sent to browser
DEBUG - 2025-06-01 14:25:42 --> Total execution time: 0.0208
INFO - 2025-06-01 14:25:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:25:42 --> Controller Class Initialized
INFO - 2025-06-01 14:25:42 --> Helper loaded: form_helper
INFO - 2025-06-01 14:25:42 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:25:42 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:25:42 --> Database Driver Class Initialized
INFO - 2025-06-01 14:25:42 --> Model "Crud" initialized
INFO - 2025-06-01 14:25:42 --> Final output sent to browser
DEBUG - 2025-06-01 14:25:42 --> Total execution time: 0.0313
INFO - 2025-06-01 14:25:44 --> Config Class Initialized
INFO - 2025-06-01 14:25:44 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:25:44 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:25:44 --> Utf8 Class Initialized
INFO - 2025-06-01 14:25:44 --> URI Class Initialized
INFO - 2025-06-01 14:25:44 --> Router Class Initialized
INFO - 2025-06-01 14:25:44 --> Output Class Initialized
INFO - 2025-06-01 14:25:44 --> Security Class Initialized
DEBUG - 2025-06-01 14:25:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:25:44 --> Input Class Initialized
INFO - 2025-06-01 14:25:44 --> Language Class Initialized
INFO - 2025-06-01 14:25:44 --> Loader Class Initialized
INFO - 2025-06-01 14:25:44 --> Helper loaded: url_helper
INFO - 2025-06-01 14:25:44 --> Helper loaded: file_helper
INFO - 2025-06-01 14:25:44 --> Database Driver Class Initialized
INFO - 2025-06-01 14:25:44 --> Email Class Initialized
DEBUG - 2025-06-01 14:25:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:25:44 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:25:44 --> Controller Class Initialized
INFO - 2025-06-01 14:25:44 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:25:44 --> Helper loaded: form_helper
INFO - 2025-06-01 14:25:44 --> Form Validation Class Initialized
INFO - 2025-06-01 14:25:44 --> Database Driver Class Initialized
INFO - 2025-06-01 14:25:44 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:25:44 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:25:44 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:25:44 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-01 14:25:44 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/request-training.php
INFO - 2025-06-01 14:25:44 --> Final output sent to browser
DEBUG - 2025-06-01 14:25:44 --> Total execution time: 0.0243
INFO - 2025-06-01 14:25:46 --> Config Class Initialized
INFO - 2025-06-01 14:25:46 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:25:46 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:25:46 --> Utf8 Class Initialized
INFO - 2025-06-01 14:25:46 --> URI Class Initialized
INFO - 2025-06-01 14:25:46 --> Router Class Initialized
INFO - 2025-06-01 14:25:46 --> Output Class Initialized
INFO - 2025-06-01 14:25:46 --> Security Class Initialized
DEBUG - 2025-06-01 14:25:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:25:46 --> Input Class Initialized
INFO - 2025-06-01 14:25:46 --> Language Class Initialized
INFO - 2025-06-01 14:25:46 --> Loader Class Initialized
INFO - 2025-06-01 14:25:46 --> Helper loaded: url_helper
INFO - 2025-06-01 14:25:46 --> Helper loaded: file_helper
INFO - 2025-06-01 14:25:46 --> Database Driver Class Initialized
INFO - 2025-06-01 14:25:46 --> Email Class Initialized
DEBUG - 2025-06-01 14:25:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:25:46 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:25:46 --> Controller Class Initialized
INFO - 2025-06-01 14:25:46 --> Model "TrainingActivityModel" initialized
INFO - 2025-06-01 14:25:46 --> Helper loaded: form_helper
INFO - 2025-06-01 14:25:46 --> Form Validation Class Initialized
INFO - 2025-06-01 14:25:46 --> Database Driver Class Initialized
INFO - 2025-06-01 14:25:46 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:25:46 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:25:46 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:25:46 --> Final output sent to browser
DEBUG - 2025-06-01 14:25:46 --> Total execution time: 0.0236
INFO - 2025-06-01 14:25:46 --> Config Class Initialized
INFO - 2025-06-01 14:25:46 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:25:46 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:25:46 --> Utf8 Class Initialized
INFO - 2025-06-01 14:25:46 --> URI Class Initialized
INFO - 2025-06-01 14:25:46 --> Router Class Initialized
INFO - 2025-06-01 14:25:46 --> Output Class Initialized
INFO - 2025-06-01 14:25:46 --> Security Class Initialized
DEBUG - 2025-06-01 14:25:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:25:46 --> Input Class Initialized
INFO - 2025-06-01 14:25:46 --> Language Class Initialized
INFO - 2025-06-01 14:25:46 --> Loader Class Initialized
INFO - 2025-06-01 14:25:46 --> Helper loaded: url_helper
INFO - 2025-06-01 14:25:46 --> Helper loaded: file_helper
INFO - 2025-06-01 14:25:46 --> Database Driver Class Initialized
INFO - 2025-06-01 14:25:46 --> Email Class Initialized
DEBUG - 2025-06-01 14:25:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:25:46 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:25:46 --> Controller Class Initialized
INFO - 2025-06-01 14:25:46 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:25:46 --> Helper loaded: form_helper
INFO - 2025-06-01 14:25:46 --> Form Validation Class Initialized
INFO - 2025-06-01 14:25:46 --> Database Driver Class Initialized
INFO - 2025-06-01 14:25:46 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:25:46 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:25:46 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:25:46 --> Final output sent to browser
DEBUG - 2025-06-01 14:25:46 --> Total execution time: 0.0065
INFO - 2025-06-01 14:25:46 --> Config Class Initialized
INFO - 2025-06-01 14:25:46 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:25:46 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:25:46 --> Utf8 Class Initialized
INFO - 2025-06-01 14:25:46 --> URI Class Initialized
INFO - 2025-06-01 14:25:46 --> Router Class Initialized
INFO - 2025-06-01 14:25:46 --> Output Class Initialized
INFO - 2025-06-01 14:25:46 --> Security Class Initialized
DEBUG - 2025-06-01 14:25:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:25:46 --> Input Class Initialized
INFO - 2025-06-01 14:25:46 --> Language Class Initialized
INFO - 2025-06-01 14:25:46 --> Loader Class Initialized
INFO - 2025-06-01 14:25:46 --> Helper loaded: url_helper
INFO - 2025-06-01 14:25:46 --> Helper loaded: file_helper
INFO - 2025-06-01 14:25:46 --> Database Driver Class Initialized
INFO - 2025-06-01 14:25:46 --> Config Class Initialized
INFO - 2025-06-01 14:25:46 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:25:46 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:25:46 --> Utf8 Class Initialized
INFO - 2025-06-01 14:25:46 --> URI Class Initialized
INFO - 2025-06-01 14:25:46 --> Router Class Initialized
INFO - 2025-06-01 14:25:46 --> Output Class Initialized
INFO - 2025-06-01 14:25:46 --> Security Class Initialized
DEBUG - 2025-06-01 14:25:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:25:46 --> Input Class Initialized
INFO - 2025-06-01 14:25:46 --> Language Class Initialized
INFO - 2025-06-01 14:25:46 --> Loader Class Initialized
INFO - 2025-06-01 14:25:46 --> Helper loaded: url_helper
INFO - 2025-06-01 14:25:46 --> Helper loaded: file_helper
INFO - 2025-06-01 14:25:46 --> Database Driver Class Initialized
INFO - 2025-06-01 14:25:46 --> Email Class Initialized
DEBUG - 2025-06-01 14:25:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:25:46 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:25:46 --> Controller Class Initialized
INFO - 2025-06-01 14:25:46 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:25:46 --> Helper loaded: form_helper
INFO - 2025-06-01 14:25:46 --> Form Validation Class Initialized
INFO - 2025-06-01 14:25:46 --> Database Driver Class Initialized
INFO - 2025-06-01 14:25:46 --> Email Class Initialized
DEBUG - 2025-06-01 14:25:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:25:46 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:25:46 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:25:46 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:25:46 --> Config Class Initialized
INFO - 2025-06-01 14:25:46 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:25:46 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:25:46 --> Utf8 Class Initialized
INFO - 2025-06-01 14:25:46 --> URI Class Initialized
INFO - 2025-06-01 14:25:46 --> Router Class Initialized
INFO - 2025-06-01 14:25:46 --> Output Class Initialized
INFO - 2025-06-01 14:25:46 --> Security Class Initialized
DEBUG - 2025-06-01 14:25:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:25:46 --> Input Class Initialized
INFO - 2025-06-01 14:25:46 --> Language Class Initialized
INFO - 2025-06-01 14:25:46 --> Loader Class Initialized
INFO - 2025-06-01 14:25:46 --> Helper loaded: url_helper
INFO - 2025-06-01 14:25:46 --> Helper loaded: file_helper
INFO - 2025-06-01 14:25:46 --> Database Driver Class Initialized
INFO - 2025-06-01 14:25:46 --> Final output sent to browser
DEBUG - 2025-06-01 14:25:46 --> Total execution time: 0.0187
INFO - 2025-06-01 14:25:46 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:25:46 --> Controller Class Initialized
INFO - 2025-06-01 14:25:46 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:25:46 --> Helper loaded: form_helper
INFO - 2025-06-01 14:25:46 --> Form Validation Class Initialized
INFO - 2025-06-01 14:25:46 --> Database Driver Class Initialized
INFO - 2025-06-01 14:25:46 --> Email Class Initialized
DEBUG - 2025-06-01 14:25:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:25:46 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:25:46 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:25:46 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:25:46 --> Final output sent to browser
DEBUG - 2025-06-01 14:25:46 --> Total execution time: 0.0269
INFO - 2025-06-01 14:25:46 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:25:46 --> Controller Class Initialized
INFO - 2025-06-01 14:25:46 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:25:46 --> Helper loaded: form_helper
INFO - 2025-06-01 14:25:46 --> Form Validation Class Initialized
INFO - 2025-06-01 14:25:46 --> Database Driver Class Initialized
INFO - 2025-06-01 14:25:46 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:25:46 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:25:46 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:25:46 --> Config Class Initialized
INFO - 2025-06-01 14:25:46 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:25:46 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:25:46 --> Utf8 Class Initialized
INFO - 2025-06-01 14:25:46 --> URI Class Initialized
INFO - 2025-06-01 14:25:46 --> Router Class Initialized
INFO - 2025-06-01 14:25:46 --> Output Class Initialized
INFO - 2025-06-01 14:25:46 --> Security Class Initialized
DEBUG - 2025-06-01 14:25:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:25:46 --> Input Class Initialized
INFO - 2025-06-01 14:25:46 --> Language Class Initialized
INFO - 2025-06-01 14:25:46 --> Loader Class Initialized
INFO - 2025-06-01 14:25:46 --> Helper loaded: url_helper
INFO - 2025-06-01 14:25:46 --> Helper loaded: file_helper
INFO - 2025-06-01 14:25:46 --> Database Driver Class Initialized
INFO - 2025-06-01 14:25:46 --> Final output sent to browser
DEBUG - 2025-06-01 14:25:46 --> Total execution time: 0.0199
INFO - 2025-06-01 14:25:46 --> Email Class Initialized
DEBUG - 2025-06-01 14:25:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:25:46 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:25:46 --> Controller Class Initialized
INFO - 2025-06-01 14:25:46 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:25:46 --> Helper loaded: form_helper
INFO - 2025-06-01 14:25:46 --> Form Validation Class Initialized
INFO - 2025-06-01 14:25:46 --> Database Driver Class Initialized
INFO - 2025-06-01 14:25:46 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:25:46 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:25:46 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:25:46 --> Final output sent to browser
DEBUG - 2025-06-01 14:25:46 --> Total execution time: 0.0109
INFO - 2025-06-01 14:25:46 --> Config Class Initialized
INFO - 2025-06-01 14:25:46 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:25:46 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:25:46 --> Utf8 Class Initialized
INFO - 2025-06-01 14:25:46 --> URI Class Initialized
INFO - 2025-06-01 14:25:46 --> Router Class Initialized
INFO - 2025-06-01 14:25:46 --> Output Class Initialized
INFO - 2025-06-01 14:25:46 --> Security Class Initialized
DEBUG - 2025-06-01 14:25:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:25:46 --> Input Class Initialized
INFO - 2025-06-01 14:25:46 --> Language Class Initialized
INFO - 2025-06-01 14:25:46 --> Loader Class Initialized
INFO - 2025-06-01 14:25:46 --> Helper loaded: url_helper
INFO - 2025-06-01 14:25:46 --> Helper loaded: file_helper
INFO - 2025-06-01 14:25:46 --> Database Driver Class Initialized
INFO - 2025-06-01 14:25:46 --> Email Class Initialized
DEBUG - 2025-06-01 14:25:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:25:46 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:25:46 --> Controller Class Initialized
INFO - 2025-06-01 14:25:46 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:25:46 --> Helper loaded: form_helper
INFO - 2025-06-01 14:25:46 --> Form Validation Class Initialized
INFO - 2025-06-01 14:25:46 --> Database Driver Class Initialized
INFO - 2025-06-01 14:25:46 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:25:46 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:25:46 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:25:46 --> Final output sent to browser
DEBUG - 2025-06-01 14:25:46 --> Total execution time: 0.0284
INFO - 2025-06-01 14:25:47 --> Config Class Initialized
INFO - 2025-06-01 14:25:47 --> Config Class Initialized
INFO - 2025-06-01 14:25:47 --> Hooks Class Initialized
INFO - 2025-06-01 14:25:47 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:25:47 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:25:47 --> Utf8 Class Initialized
DEBUG - 2025-06-01 14:25:47 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:25:47 --> URI Class Initialized
INFO - 2025-06-01 14:25:47 --> Utf8 Class Initialized
INFO - 2025-06-01 14:25:47 --> Router Class Initialized
INFO - 2025-06-01 14:25:47 --> URI Class Initialized
INFO - 2025-06-01 14:25:47 --> Output Class Initialized
INFO - 2025-06-01 14:25:47 --> Security Class Initialized
INFO - 2025-06-01 14:25:47 --> Router Class Initialized
DEBUG - 2025-06-01 14:25:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:25:47 --> Output Class Initialized
INFO - 2025-06-01 14:25:47 --> Input Class Initialized
INFO - 2025-06-01 14:25:47 --> Security Class Initialized
INFO - 2025-06-01 14:25:47 --> Language Class Initialized
DEBUG - 2025-06-01 14:25:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:25:47 --> Input Class Initialized
INFO - 2025-06-01 14:25:47 --> Language Class Initialized
INFO - 2025-06-01 14:25:47 --> Loader Class Initialized
INFO - 2025-06-01 14:25:47 --> Helper loaded: url_helper
INFO - 2025-06-01 14:25:47 --> Loader Class Initialized
INFO - 2025-06-01 14:25:47 --> Helper loaded: file_helper
INFO - 2025-06-01 14:25:47 --> Helper loaded: url_helper
INFO - 2025-06-01 14:25:47 --> Helper loaded: file_helper
INFO - 2025-06-01 14:25:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:25:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:25:47 --> Email Class Initialized
INFO - 2025-06-01 14:25:47 --> Email Class Initialized
DEBUG - 2025-06-01 14:25:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-01 14:25:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:25:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:25:47 --> Controller Class Initialized
INFO - 2025-06-01 14:25:47 --> Helper loaded: form_helper
INFO - 2025-06-01 14:25:47 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:25:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:25:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:25:47 --> Model "Crud" initialized
INFO - 2025-06-01 14:25:47 --> Final output sent to browser
DEBUG - 2025-06-01 14:25:47 --> Total execution time: 0.0172
INFO - 2025-06-01 14:25:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:25:47 --> Controller Class Initialized
INFO - 2025-06-01 14:25:47 --> Helper loaded: form_helper
INFO - 2025-06-01 14:25:47 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:25:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:25:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:25:47 --> Model "Crud" initialized
INFO - 2025-06-01 14:25:47 --> Final output sent to browser
DEBUG - 2025-06-01 14:25:47 --> Total execution time: 0.0280
INFO - 2025-06-01 14:25:47 --> Config Class Initialized
INFO - 2025-06-01 14:25:47 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:25:47 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:25:47 --> Utf8 Class Initialized
INFO - 2025-06-01 14:25:47 --> URI Class Initialized
INFO - 2025-06-01 14:25:47 --> Router Class Initialized
INFO - 2025-06-01 14:25:47 --> Output Class Initialized
INFO - 2025-06-01 14:25:47 --> Security Class Initialized
DEBUG - 2025-06-01 14:25:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:25:47 --> Input Class Initialized
INFO - 2025-06-01 14:25:47 --> Language Class Initialized
INFO - 2025-06-01 14:25:47 --> Loader Class Initialized
INFO - 2025-06-01 14:25:47 --> Helper loaded: url_helper
INFO - 2025-06-01 14:25:47 --> Helper loaded: file_helper
INFO - 2025-06-01 14:25:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:25:47 --> Email Class Initialized
DEBUG - 2025-06-01 14:25:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:25:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:25:47 --> Controller Class Initialized
INFO - 2025-06-01 14:25:47 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:25:47 --> Helper loaded: form_helper
INFO - 2025-06-01 14:25:47 --> Form Validation Class Initialized
INFO - 2025-06-01 14:25:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:25:47 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:25:47 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:25:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:25:47 --> Final output sent to browser
DEBUG - 2025-06-01 14:25:47 --> Total execution time: 0.0057
INFO - 2025-06-01 14:25:57 --> Config Class Initialized
INFO - 2025-06-01 14:25:57 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:25:57 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:25:57 --> Utf8 Class Initialized
INFO - 2025-06-01 14:25:57 --> Config Class Initialized
INFO - 2025-06-01 14:25:57 --> URI Class Initialized
INFO - 2025-06-01 14:25:57 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:25:57 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:25:57 --> Router Class Initialized
INFO - 2025-06-01 14:25:57 --> Utf8 Class Initialized
INFO - 2025-06-01 14:25:57 --> Output Class Initialized
INFO - 2025-06-01 14:25:57 --> URI Class Initialized
INFO - 2025-06-01 14:25:57 --> Security Class Initialized
INFO - 2025-06-01 14:25:57 --> Router Class Initialized
DEBUG - 2025-06-01 14:25:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:25:57 --> Output Class Initialized
INFO - 2025-06-01 14:25:57 --> Input Class Initialized
INFO - 2025-06-01 14:25:57 --> Security Class Initialized
INFO - 2025-06-01 14:25:57 --> Language Class Initialized
DEBUG - 2025-06-01 14:25:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:25:57 --> Input Class Initialized
INFO - 2025-06-01 14:25:57 --> Language Class Initialized
INFO - 2025-06-01 14:25:57 --> Loader Class Initialized
INFO - 2025-06-01 14:25:57 --> Helper loaded: url_helper
INFO - 2025-06-01 14:25:57 --> Loader Class Initialized
INFO - 2025-06-01 14:25:57 --> Helper loaded: file_helper
INFO - 2025-06-01 14:25:57 --> Helper loaded: url_helper
INFO - 2025-06-01 14:25:57 --> Helper loaded: file_helper
INFO - 2025-06-01 14:25:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:25:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:25:57 --> Email Class Initialized
INFO - 2025-06-01 14:25:57 --> Email Class Initialized
DEBUG - 2025-06-01 14:25:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-01 14:25:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:25:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:25:57 --> Controller Class Initialized
INFO - 2025-06-01 14:25:57 --> Helper loaded: form_helper
INFO - 2025-06-01 14:25:57 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:25:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:25:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:25:57 --> Model "Crud" initialized
INFO - 2025-06-01 14:25:57 --> Final output sent to browser
DEBUG - 2025-06-01 14:25:57 --> Total execution time: 0.0166
INFO - 2025-06-01 14:25:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:25:57 --> Controller Class Initialized
INFO - 2025-06-01 14:25:57 --> Helper loaded: form_helper
INFO - 2025-06-01 14:25:57 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:25:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:25:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:25:57 --> Model "Crud" initialized
INFO - 2025-06-01 14:25:57 --> Final output sent to browser
DEBUG - 2025-06-01 14:25:57 --> Total execution time: 0.0295
INFO - 2025-06-01 14:26:00 --> Config Class Initialized
INFO - 2025-06-01 14:26:00 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:26:00 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:26:00 --> Utf8 Class Initialized
INFO - 2025-06-01 14:26:00 --> URI Class Initialized
INFO - 2025-06-01 14:26:00 --> Router Class Initialized
INFO - 2025-06-01 14:26:00 --> Output Class Initialized
INFO - 2025-06-01 14:26:00 --> Security Class Initialized
DEBUG - 2025-06-01 14:26:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:26:00 --> Input Class Initialized
INFO - 2025-06-01 14:26:00 --> Language Class Initialized
INFO - 2025-06-01 14:26:00 --> Loader Class Initialized
INFO - 2025-06-01 14:26:00 --> Helper loaded: url_helper
INFO - 2025-06-01 14:26:00 --> Helper loaded: file_helper
INFO - 2025-06-01 14:26:00 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:00 --> Email Class Initialized
DEBUG - 2025-06-01 14:26:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:26:00 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:26:00 --> Controller Class Initialized
INFO - 2025-06-01 14:26:00 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:26:00 --> Helper loaded: form_helper
INFO - 2025-06-01 14:26:00 --> Form Validation Class Initialized
INFO - 2025-06-01 14:26:00 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:00 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:26:00 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:26:00 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:26:00 --> Final output sent to browser
DEBUG - 2025-06-01 14:26:00 --> Total execution time: 0.0123
INFO - 2025-06-01 14:26:03 --> Config Class Initialized
INFO - 2025-06-01 14:26:03 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:26:03 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:26:03 --> Utf8 Class Initialized
INFO - 2025-06-01 14:26:03 --> URI Class Initialized
INFO - 2025-06-01 14:26:03 --> Router Class Initialized
INFO - 2025-06-01 14:26:03 --> Output Class Initialized
INFO - 2025-06-01 14:26:03 --> Security Class Initialized
DEBUG - 2025-06-01 14:26:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:26:03 --> Input Class Initialized
INFO - 2025-06-01 14:26:03 --> Language Class Initialized
INFO - 2025-06-01 14:26:03 --> Loader Class Initialized
INFO - 2025-06-01 14:26:03 --> Helper loaded: url_helper
INFO - 2025-06-01 14:26:03 --> Helper loaded: file_helper
INFO - 2025-06-01 14:26:03 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:03 --> Email Class Initialized
DEBUG - 2025-06-01 14:26:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:26:03 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:26:03 --> Controller Class Initialized
INFO - 2025-06-01 14:26:03 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:26:03 --> Helper loaded: form_helper
INFO - 2025-06-01 14:26:03 --> Form Validation Class Initialized
INFO - 2025-06-01 14:26:03 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:03 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:26:03 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:26:03 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:26:03 --> Final output sent to browser
DEBUG - 2025-06-01 14:26:03 --> Total execution time: 0.0561
INFO - 2025-06-01 14:26:07 --> Config Class Initialized
INFO - 2025-06-01 14:26:07 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:26:07 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:26:07 --> Utf8 Class Initialized
INFO - 2025-06-01 14:26:07 --> URI Class Initialized
INFO - 2025-06-01 14:26:07 --> Router Class Initialized
INFO - 2025-06-01 14:26:07 --> Output Class Initialized
INFO - 2025-06-01 14:26:07 --> Security Class Initialized
DEBUG - 2025-06-01 14:26:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:26:07 --> Input Class Initialized
INFO - 2025-06-01 14:26:07 --> Language Class Initialized
INFO - 2025-06-01 14:26:07 --> Loader Class Initialized
INFO - 2025-06-01 14:26:07 --> Helper loaded: url_helper
INFO - 2025-06-01 14:26:07 --> Helper loaded: file_helper
INFO - 2025-06-01 14:26:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:07 --> Email Class Initialized
DEBUG - 2025-06-01 14:26:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:26:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:26:07 --> Controller Class Initialized
INFO - 2025-06-01 14:26:07 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:26:07 --> Helper loaded: form_helper
INFO - 2025-06-01 14:26:07 --> Form Validation Class Initialized
INFO - 2025-06-01 14:26:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:07 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:26:07 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:26:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:26:07 --> Final output sent to browser
DEBUG - 2025-06-01 14:26:07 --> Total execution time: 0.0339
INFO - 2025-06-01 14:26:07 --> Config Class Initialized
INFO - 2025-06-01 14:26:07 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:26:07 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:26:07 --> Utf8 Class Initialized
INFO - 2025-06-01 14:26:07 --> URI Class Initialized
INFO - 2025-06-01 14:26:07 --> Router Class Initialized
INFO - 2025-06-01 14:26:07 --> Output Class Initialized
INFO - 2025-06-01 14:26:07 --> Security Class Initialized
DEBUG - 2025-06-01 14:26:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:26:07 --> Input Class Initialized
INFO - 2025-06-01 14:26:07 --> Language Class Initialized
INFO - 2025-06-01 14:26:07 --> Loader Class Initialized
INFO - 2025-06-01 14:26:07 --> Helper loaded: url_helper
INFO - 2025-06-01 14:26:07 --> Helper loaded: file_helper
INFO - 2025-06-01 14:26:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:07 --> Email Class Initialized
DEBUG - 2025-06-01 14:26:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:26:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:26:07 --> Controller Class Initialized
INFO - 2025-06-01 14:26:07 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:26:07 --> Helper loaded: form_helper
INFO - 2025-06-01 14:26:07 --> Form Validation Class Initialized
INFO - 2025-06-01 14:26:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:07 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:26:07 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:26:07 --> Session class already loaded. Second attempt ignored.
ERROR - 2025-06-01 14:26:07 --> Severity: Notice --> Undefined property: Request_training::$dataTemp /var/www/html/hris_lnd/application/controllers/lnd/Request_training.php 236
INFO - 2025-06-01 14:26:07 --> Final output sent to browser
DEBUG - 2025-06-01 14:26:07 --> Total execution time: 0.0110
INFO - 2025-06-01 14:26:07 --> Config Class Initialized
INFO - 2025-06-01 14:26:07 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:26:07 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:26:07 --> Utf8 Class Initialized
INFO - 2025-06-01 14:26:07 --> URI Class Initialized
INFO - 2025-06-01 14:26:07 --> Router Class Initialized
INFO - 2025-06-01 14:26:07 --> Output Class Initialized
INFO - 2025-06-01 14:26:07 --> Security Class Initialized
DEBUG - 2025-06-01 14:26:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:26:07 --> Input Class Initialized
INFO - 2025-06-01 14:26:07 --> Language Class Initialized
INFO - 2025-06-01 14:26:07 --> Loader Class Initialized
INFO - 2025-06-01 14:26:07 --> Helper loaded: url_helper
INFO - 2025-06-01 14:26:07 --> Helper loaded: file_helper
INFO - 2025-06-01 14:26:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:07 --> Email Class Initialized
INFO - 2025-06-01 14:26:07 --> Config Class Initialized
DEBUG - 2025-06-01 14:26:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:26:07 --> Hooks Class Initialized
INFO - 2025-06-01 14:26:07 --> Session: Class initialized using 'files' driver.
DEBUG - 2025-06-01 14:26:07 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:26:07 --> Controller Class Initialized
INFO - 2025-06-01 14:26:07 --> Utf8 Class Initialized
INFO - 2025-06-01 14:26:07 --> Helper loaded: form_helper
INFO - 2025-06-01 14:26:07 --> URI Class Initialized
INFO - 2025-06-01 14:26:07 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:26:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:26:07 --> Router Class Initialized
INFO - 2025-06-01 14:26:07 --> Output Class Initialized
INFO - 2025-06-01 14:26:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:07 --> Security Class Initialized
DEBUG - 2025-06-01 14:26:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:26:07 --> Input Class Initialized
INFO - 2025-06-01 14:26:07 --> Language Class Initialized
INFO - 2025-06-01 14:26:07 --> Loader Class Initialized
INFO - 2025-06-01 14:26:07 --> Helper loaded: url_helper
INFO - 2025-06-01 14:26:07 --> Helper loaded: file_helper
INFO - 2025-06-01 14:26:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:07 --> Model "Crud" initialized
INFO - 2025-06-01 14:26:07 --> Email Class Initialized
DEBUG - 2025-06-01 14:26:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:26:07 --> Final output sent to browser
DEBUG - 2025-06-01 14:26:07 --> Total execution time: 0.0142
INFO - 2025-06-01 14:26:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:26:07 --> Controller Class Initialized
INFO - 2025-06-01 14:26:07 --> Helper loaded: form_helper
INFO - 2025-06-01 14:26:07 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:26:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:26:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:07 --> Model "Crud" initialized
INFO - 2025-06-01 14:26:07 --> Final output sent to browser
DEBUG - 2025-06-01 14:26:07 --> Total execution time: 0.0205
INFO - 2025-06-01 14:26:17 --> Config Class Initialized
INFO - 2025-06-01 14:26:17 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:26:17 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:26:17 --> Utf8 Class Initialized
INFO - 2025-06-01 14:26:17 --> URI Class Initialized
INFO - 2025-06-01 14:26:17 --> Router Class Initialized
INFO - 2025-06-01 14:26:17 --> Output Class Initialized
INFO - 2025-06-01 14:26:17 --> Security Class Initialized
DEBUG - 2025-06-01 14:26:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:26:17 --> Input Class Initialized
INFO - 2025-06-01 14:26:17 --> Language Class Initialized
INFO - 2025-06-01 14:26:17 --> Loader Class Initialized
INFO - 2025-06-01 14:26:17 --> Helper loaded: url_helper
INFO - 2025-06-01 14:26:17 --> Helper loaded: file_helper
INFO - 2025-06-01 14:26:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:17 --> Config Class Initialized
INFO - 2025-06-01 14:26:17 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:26:17 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:26:17 --> Utf8 Class Initialized
INFO - 2025-06-01 14:26:17 --> URI Class Initialized
INFO - 2025-06-01 14:26:17 --> Router Class Initialized
INFO - 2025-06-01 14:26:17 --> Output Class Initialized
INFO - 2025-06-01 14:26:17 --> Security Class Initialized
DEBUG - 2025-06-01 14:26:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:26:17 --> Input Class Initialized
INFO - 2025-06-01 14:26:17 --> Language Class Initialized
INFO - 2025-06-01 14:26:17 --> Loader Class Initialized
INFO - 2025-06-01 14:26:17 --> Helper loaded: url_helper
INFO - 2025-06-01 14:26:17 --> Helper loaded: file_helper
INFO - 2025-06-01 14:26:17 --> Email Class Initialized
INFO - 2025-06-01 14:26:17 --> Database Driver Class Initialized
DEBUG - 2025-06-01 14:26:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:26:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:26:17 --> Controller Class Initialized
INFO - 2025-06-01 14:26:17 --> Helper loaded: form_helper
INFO - 2025-06-01 14:26:17 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:26:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:26:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:17 --> Email Class Initialized
DEBUG - 2025-06-01 14:26:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:26:17 --> Model "Crud" initialized
INFO - 2025-06-01 14:26:17 --> Final output sent to browser
DEBUG - 2025-06-01 14:26:17 --> Total execution time: 0.0174
INFO - 2025-06-01 14:26:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:26:17 --> Controller Class Initialized
INFO - 2025-06-01 14:26:17 --> Helper loaded: form_helper
INFO - 2025-06-01 14:26:17 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:26:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:26:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:17 --> Model "Crud" initialized
INFO - 2025-06-01 14:26:17 --> Final output sent to browser
DEBUG - 2025-06-01 14:26:17 --> Total execution time: 0.0302
INFO - 2025-06-01 14:26:27 --> Config Class Initialized
INFO - 2025-06-01 14:26:27 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:26:27 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:26:27 --> Utf8 Class Initialized
INFO - 2025-06-01 14:26:27 --> URI Class Initialized
INFO - 2025-06-01 14:26:27 --> Router Class Initialized
INFO - 2025-06-01 14:26:27 --> Output Class Initialized
INFO - 2025-06-01 14:26:27 --> Security Class Initialized
DEBUG - 2025-06-01 14:26:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:26:27 --> Input Class Initialized
INFO - 2025-06-01 14:26:27 --> Language Class Initialized
INFO - 2025-06-01 14:26:27 --> Loader Class Initialized
INFO - 2025-06-01 14:26:27 --> Helper loaded: url_helper
INFO - 2025-06-01 14:26:27 --> Helper loaded: file_helper
INFO - 2025-06-01 14:26:27 --> Config Class Initialized
INFO - 2025-06-01 14:26:27 --> Hooks Class Initialized
INFO - 2025-06-01 14:26:27 --> Database Driver Class Initialized
DEBUG - 2025-06-01 14:26:27 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:26:27 --> Utf8 Class Initialized
INFO - 2025-06-01 14:26:27 --> URI Class Initialized
INFO - 2025-06-01 14:26:27 --> Router Class Initialized
INFO - 2025-06-01 14:26:27 --> Output Class Initialized
INFO - 2025-06-01 14:26:27 --> Security Class Initialized
DEBUG - 2025-06-01 14:26:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:26:27 --> Input Class Initialized
INFO - 2025-06-01 14:26:27 --> Language Class Initialized
INFO - 2025-06-01 14:26:27 --> Loader Class Initialized
INFO - 2025-06-01 14:26:27 --> Helper loaded: url_helper
INFO - 2025-06-01 14:26:27 --> Helper loaded: file_helper
INFO - 2025-06-01 14:26:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:27 --> Email Class Initialized
DEBUG - 2025-06-01 14:26:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:26:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:26:27 --> Controller Class Initialized
INFO - 2025-06-01 14:26:27 --> Helper loaded: form_helper
INFO - 2025-06-01 14:26:27 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:26:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:26:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:27 --> Email Class Initialized
DEBUG - 2025-06-01 14:26:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:26:27 --> Model "Crud" initialized
INFO - 2025-06-01 14:26:27 --> Final output sent to browser
DEBUG - 2025-06-01 14:26:27 --> Total execution time: 0.0138
INFO - 2025-06-01 14:26:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:26:27 --> Controller Class Initialized
INFO - 2025-06-01 14:26:27 --> Helper loaded: form_helper
INFO - 2025-06-01 14:26:27 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:26:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:26:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:27 --> Model "Crud" initialized
INFO - 2025-06-01 14:26:27 --> Final output sent to browser
DEBUG - 2025-06-01 14:26:27 --> Total execution time: 0.0277
INFO - 2025-06-01 14:26:38 --> Config Class Initialized
INFO - 2025-06-01 14:26:38 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:26:38 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:26:38 --> Utf8 Class Initialized
INFO - 2025-06-01 14:26:38 --> URI Class Initialized
INFO - 2025-06-01 14:26:38 --> Router Class Initialized
INFO - 2025-06-01 14:26:38 --> Output Class Initialized
INFO - 2025-06-01 14:26:38 --> Security Class Initialized
DEBUG - 2025-06-01 14:26:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:26:38 --> Input Class Initialized
INFO - 2025-06-01 14:26:38 --> Language Class Initialized
INFO - 2025-06-01 14:26:38 --> Loader Class Initialized
INFO - 2025-06-01 14:26:38 --> Helper loaded: url_helper
INFO - 2025-06-01 14:26:38 --> Helper loaded: file_helper
INFO - 2025-06-01 14:26:38 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:38 --> Config Class Initialized
INFO - 2025-06-01 14:26:38 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:26:38 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:26:38 --> Utf8 Class Initialized
INFO - 2025-06-01 14:26:38 --> URI Class Initialized
INFO - 2025-06-01 14:26:38 --> Router Class Initialized
INFO - 2025-06-01 14:26:38 --> Output Class Initialized
INFO - 2025-06-01 14:26:38 --> Security Class Initialized
DEBUG - 2025-06-01 14:26:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:26:38 --> Input Class Initialized
INFO - 2025-06-01 14:26:38 --> Language Class Initialized
INFO - 2025-06-01 14:26:38 --> Loader Class Initialized
INFO - 2025-06-01 14:26:38 --> Helper loaded: url_helper
INFO - 2025-06-01 14:26:38 --> Helper loaded: file_helper
INFO - 2025-06-01 14:26:38 --> Email Class Initialized
INFO - 2025-06-01 14:26:38 --> Database Driver Class Initialized
DEBUG - 2025-06-01 14:26:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:26:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:26:38 --> Controller Class Initialized
INFO - 2025-06-01 14:26:38 --> Helper loaded: form_helper
INFO - 2025-06-01 14:26:38 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:26:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:26:38 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:38 --> Email Class Initialized
INFO - 2025-06-01 14:26:38 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:26:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:26:38 --> Final output sent to browser
DEBUG - 2025-06-01 14:26:38 --> Total execution time: 0.0134
INFO - 2025-06-01 14:26:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:26:38 --> Controller Class Initialized
INFO - 2025-06-01 14:26:38 --> Helper loaded: form_helper
INFO - 2025-06-01 14:26:38 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:26:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:26:38 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:38 --> Model "Crud" initialized
INFO - 2025-06-01 14:26:38 --> Final output sent to browser
DEBUG - 2025-06-01 14:26:38 --> Total execution time: 0.0228
INFO - 2025-06-01 14:26:47 --> Config Class Initialized
INFO - 2025-06-01 14:26:47 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:26:47 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:26:47 --> Utf8 Class Initialized
INFO - 2025-06-01 14:26:47 --> URI Class Initialized
INFO - 2025-06-01 14:26:47 --> Router Class Initialized
INFO - 2025-06-01 14:26:47 --> Output Class Initialized
INFO - 2025-06-01 14:26:47 --> Security Class Initialized
DEBUG - 2025-06-01 14:26:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:26:47 --> Input Class Initialized
INFO - 2025-06-01 14:26:47 --> Language Class Initialized
INFO - 2025-06-01 14:26:47 --> Loader Class Initialized
INFO - 2025-06-01 14:26:47 --> Helper loaded: url_helper
INFO - 2025-06-01 14:26:47 --> Helper loaded: file_helper
INFO - 2025-06-01 14:26:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:47 --> Email Class Initialized
DEBUG - 2025-06-01 14:26:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:26:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:26:47 --> Controller Class Initialized
INFO - 2025-06-01 14:26:47 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:26:47 --> Helper loaded: form_helper
INFO - 2025-06-01 14:26:47 --> Form Validation Class Initialized
INFO - 2025-06-01 14:26:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:47 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:26:47 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:26:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:26:47 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-01 14:26:47 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/request-training.php
INFO - 2025-06-01 14:26:47 --> Final output sent to browser
DEBUG - 2025-06-01 14:26:47 --> Total execution time: 0.0138
INFO - 2025-06-01 14:26:47 --> Config Class Initialized
INFO - 2025-06-01 14:26:47 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:26:47 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:26:47 --> Utf8 Class Initialized
INFO - 2025-06-01 14:26:47 --> URI Class Initialized
INFO - 2025-06-01 14:26:47 --> Router Class Initialized
INFO - 2025-06-01 14:26:47 --> Output Class Initialized
INFO - 2025-06-01 14:26:47 --> Security Class Initialized
DEBUG - 2025-06-01 14:26:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:26:47 --> Input Class Initialized
INFO - 2025-06-01 14:26:47 --> Language Class Initialized
INFO - 2025-06-01 14:26:47 --> Loader Class Initialized
INFO - 2025-06-01 14:26:47 --> Helper loaded: url_helper
INFO - 2025-06-01 14:26:47 --> Helper loaded: file_helper
INFO - 2025-06-01 14:26:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:47 --> Config Class Initialized
INFO - 2025-06-01 14:26:47 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:26:47 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:26:47 --> Utf8 Class Initialized
INFO - 2025-06-01 14:26:47 --> URI Class Initialized
INFO - 2025-06-01 14:26:47 --> Router Class Initialized
INFO - 2025-06-01 14:26:47 --> Output Class Initialized
INFO - 2025-06-01 14:26:47 --> Security Class Initialized
DEBUG - 2025-06-01 14:26:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:26:47 --> Input Class Initialized
INFO - 2025-06-01 14:26:47 --> Language Class Initialized
INFO - 2025-06-01 14:26:47 --> Loader Class Initialized
INFO - 2025-06-01 14:26:47 --> Helper loaded: url_helper
INFO - 2025-06-01 14:26:47 --> Helper loaded: file_helper
INFO - 2025-06-01 14:26:47 --> Email Class Initialized
INFO - 2025-06-01 14:26:47 --> Database Driver Class Initialized
DEBUG - 2025-06-01 14:26:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:26:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:26:47 --> Controller Class Initialized
INFO - 2025-06-01 14:26:47 --> Helper loaded: form_helper
INFO - 2025-06-01 14:26:47 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:26:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:26:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:47 --> Email Class Initialized
DEBUG - 2025-06-01 14:26:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:26:47 --> Model "Crud" initialized
INFO - 2025-06-01 14:26:47 --> Config Class Initialized
INFO - 2025-06-01 14:26:47 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:26:47 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:26:47 --> Utf8 Class Initialized
INFO - 2025-06-01 14:26:47 --> URI Class Initialized
INFO - 2025-06-01 14:26:47 --> Router Class Initialized
INFO - 2025-06-01 14:26:47 --> Output Class Initialized
INFO - 2025-06-01 14:26:47 --> Security Class Initialized
DEBUG - 2025-06-01 14:26:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:26:47 --> Input Class Initialized
INFO - 2025-06-01 14:26:47 --> Language Class Initialized
INFO - 2025-06-01 14:26:47 --> Loader Class Initialized
INFO - 2025-06-01 14:26:47 --> Helper loaded: url_helper
INFO - 2025-06-01 14:26:47 --> Helper loaded: file_helper
INFO - 2025-06-01 14:26:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:47 --> Email Class Initialized
DEBUG - 2025-06-01 14:26:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:26:47 --> Final output sent to browser
DEBUG - 2025-06-01 14:26:47 --> Total execution time: 0.0481
INFO - 2025-06-01 14:26:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:26:47 --> Controller Class Initialized
INFO - 2025-06-01 14:26:47 --> Helper loaded: form_helper
INFO - 2025-06-01 14:26:47 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:26:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:26:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:47 --> Model "Crud" initialized
INFO - 2025-06-01 14:26:47 --> Final output sent to browser
DEBUG - 2025-06-01 14:26:47 --> Total execution time: 0.0499
INFO - 2025-06-01 14:26:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:26:47 --> Controller Class Initialized
INFO - 2025-06-01 14:26:47 --> Model "TrainingActivityModel" initialized
INFO - 2025-06-01 14:26:47 --> Helper loaded: form_helper
INFO - 2025-06-01 14:26:47 --> Form Validation Class Initialized
INFO - 2025-06-01 14:26:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:47 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:26:47 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:26:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:26:47 --> Final output sent to browser
DEBUG - 2025-06-01 14:26:47 --> Total execution time: 0.0512
INFO - 2025-06-01 14:26:48 --> Config Class Initialized
INFO - 2025-06-01 14:26:48 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:26:48 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:26:48 --> Utf8 Class Initialized
INFO - 2025-06-01 14:26:48 --> URI Class Initialized
INFO - 2025-06-01 14:26:48 --> Router Class Initialized
INFO - 2025-06-01 14:26:48 --> Output Class Initialized
INFO - 2025-06-01 14:26:48 --> Security Class Initialized
DEBUG - 2025-06-01 14:26:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:26:48 --> Input Class Initialized
INFO - 2025-06-01 14:26:48 --> Language Class Initialized
INFO - 2025-06-01 14:26:48 --> Loader Class Initialized
INFO - 2025-06-01 14:26:48 --> Helper loaded: url_helper
INFO - 2025-06-01 14:26:48 --> Helper loaded: file_helper
INFO - 2025-06-01 14:26:48 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:48 --> Email Class Initialized
DEBUG - 2025-06-01 14:26:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:26:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:26:48 --> Controller Class Initialized
INFO - 2025-06-01 14:26:48 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:26:48 --> Helper loaded: form_helper
INFO - 2025-06-01 14:26:48 --> Form Validation Class Initialized
INFO - 2025-06-01 14:26:48 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:48 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:26:48 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:26:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:26:48 --> Final output sent to browser
DEBUG - 2025-06-01 14:26:48 --> Total execution time: 0.0081
INFO - 2025-06-01 14:26:48 --> Config Class Initialized
INFO - 2025-06-01 14:26:48 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:26:48 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:26:48 --> Utf8 Class Initialized
INFO - 2025-06-01 14:26:48 --> URI Class Initialized
INFO - 2025-06-01 14:26:48 --> Router Class Initialized
INFO - 2025-06-01 14:26:48 --> Output Class Initialized
INFO - 2025-06-01 14:26:48 --> Security Class Initialized
DEBUG - 2025-06-01 14:26:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:26:48 --> Input Class Initialized
INFO - 2025-06-01 14:26:48 --> Language Class Initialized
INFO - 2025-06-01 14:26:48 --> Loader Class Initialized
INFO - 2025-06-01 14:26:48 --> Helper loaded: url_helper
INFO - 2025-06-01 14:26:48 --> Helper loaded: file_helper
INFO - 2025-06-01 14:26:48 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:48 --> Email Class Initialized
DEBUG - 2025-06-01 14:26:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:26:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:26:48 --> Controller Class Initialized
INFO - 2025-06-01 14:26:48 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:26:48 --> Helper loaded: form_helper
INFO - 2025-06-01 14:26:48 --> Form Validation Class Initialized
INFO - 2025-06-01 14:26:48 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:48 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:26:48 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:26:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:26:48 --> Final output sent to browser
DEBUG - 2025-06-01 14:26:48 --> Total execution time: 0.0068
INFO - 2025-06-01 14:26:48 --> Config Class Initialized
INFO - 2025-06-01 14:26:48 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:26:48 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:26:48 --> Utf8 Class Initialized
INFO - 2025-06-01 14:26:48 --> URI Class Initialized
INFO - 2025-06-01 14:26:48 --> Router Class Initialized
INFO - 2025-06-01 14:26:48 --> Output Class Initialized
INFO - 2025-06-01 14:26:48 --> Security Class Initialized
DEBUG - 2025-06-01 14:26:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:26:48 --> Input Class Initialized
INFO - 2025-06-01 14:26:48 --> Language Class Initialized
INFO - 2025-06-01 14:26:48 --> Loader Class Initialized
INFO - 2025-06-01 14:26:48 --> Helper loaded: url_helper
INFO - 2025-06-01 14:26:48 --> Helper loaded: file_helper
INFO - 2025-06-01 14:26:48 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:48 --> Email Class Initialized
DEBUG - 2025-06-01 14:26:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:26:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:26:48 --> Controller Class Initialized
INFO - 2025-06-01 14:26:48 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:26:48 --> Helper loaded: form_helper
INFO - 2025-06-01 14:26:48 --> Form Validation Class Initialized
INFO - 2025-06-01 14:26:48 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:48 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:26:48 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:26:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:26:48 --> Final output sent to browser
DEBUG - 2025-06-01 14:26:48 --> Total execution time: 0.0107
INFO - 2025-06-01 14:26:48 --> Config Class Initialized
INFO - 2025-06-01 14:26:48 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:26:48 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:26:48 --> Utf8 Class Initialized
INFO - 2025-06-01 14:26:48 --> URI Class Initialized
INFO - 2025-06-01 14:26:48 --> Router Class Initialized
INFO - 2025-06-01 14:26:48 --> Output Class Initialized
INFO - 2025-06-01 14:26:48 --> Security Class Initialized
DEBUG - 2025-06-01 14:26:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:26:48 --> Input Class Initialized
INFO - 2025-06-01 14:26:48 --> Language Class Initialized
INFO - 2025-06-01 14:26:48 --> Loader Class Initialized
INFO - 2025-06-01 14:26:48 --> Helper loaded: url_helper
INFO - 2025-06-01 14:26:48 --> Helper loaded: file_helper
INFO - 2025-06-01 14:26:48 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:48 --> Email Class Initialized
DEBUG - 2025-06-01 14:26:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:26:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:26:48 --> Controller Class Initialized
INFO - 2025-06-01 14:26:48 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:26:48 --> Helper loaded: form_helper
INFO - 2025-06-01 14:26:48 --> Form Validation Class Initialized
INFO - 2025-06-01 14:26:48 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:48 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:26:48 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:26:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:26:48 --> Final output sent to browser
DEBUG - 2025-06-01 14:26:48 --> Total execution time: 0.0082
INFO - 2025-06-01 14:26:48 --> Config Class Initialized
INFO - 2025-06-01 14:26:48 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:26:48 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:26:48 --> Utf8 Class Initialized
INFO - 2025-06-01 14:26:48 --> URI Class Initialized
INFO - 2025-06-01 14:26:48 --> Router Class Initialized
INFO - 2025-06-01 14:26:48 --> Output Class Initialized
INFO - 2025-06-01 14:26:48 --> Security Class Initialized
DEBUG - 2025-06-01 14:26:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:26:48 --> Input Class Initialized
INFO - 2025-06-01 14:26:48 --> Language Class Initialized
INFO - 2025-06-01 14:26:48 --> Loader Class Initialized
INFO - 2025-06-01 14:26:48 --> Helper loaded: url_helper
INFO - 2025-06-01 14:26:48 --> Helper loaded: file_helper
INFO - 2025-06-01 14:26:48 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:48 --> Email Class Initialized
DEBUG - 2025-06-01 14:26:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:26:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:26:48 --> Controller Class Initialized
INFO - 2025-06-01 14:26:48 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:26:48 --> Helper loaded: form_helper
INFO - 2025-06-01 14:26:48 --> Form Validation Class Initialized
INFO - 2025-06-01 14:26:48 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:48 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:26:48 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:26:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:26:48 --> Final output sent to browser
DEBUG - 2025-06-01 14:26:48 --> Total execution time: 0.0094
INFO - 2025-06-01 14:26:48 --> Config Class Initialized
INFO - 2025-06-01 14:26:48 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:26:48 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:26:48 --> Utf8 Class Initialized
INFO - 2025-06-01 14:26:48 --> URI Class Initialized
INFO - 2025-06-01 14:26:48 --> Router Class Initialized
INFO - 2025-06-01 14:26:48 --> Output Class Initialized
INFO - 2025-06-01 14:26:48 --> Security Class Initialized
DEBUG - 2025-06-01 14:26:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:26:48 --> Input Class Initialized
INFO - 2025-06-01 14:26:48 --> Language Class Initialized
INFO - 2025-06-01 14:26:48 --> Loader Class Initialized
INFO - 2025-06-01 14:26:48 --> Helper loaded: url_helper
INFO - 2025-06-01 14:26:48 --> Helper loaded: file_helper
INFO - 2025-06-01 14:26:48 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:48 --> Email Class Initialized
DEBUG - 2025-06-01 14:26:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:26:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:26:48 --> Controller Class Initialized
INFO - 2025-06-01 14:26:48 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:26:48 --> Helper loaded: form_helper
INFO - 2025-06-01 14:26:48 --> Form Validation Class Initialized
INFO - 2025-06-01 14:26:48 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:48 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:26:48 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:26:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:26:48 --> Final output sent to browser
DEBUG - 2025-06-01 14:26:48 --> Total execution time: 0.0330
INFO - 2025-06-01 14:26:57 --> Config Class Initialized
INFO - 2025-06-01 14:26:57 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:26:57 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:26:57 --> Utf8 Class Initialized
INFO - 2025-06-01 14:26:57 --> URI Class Initialized
INFO - 2025-06-01 14:26:57 --> Router Class Initialized
INFO - 2025-06-01 14:26:57 --> Output Class Initialized
INFO - 2025-06-01 14:26:57 --> Security Class Initialized
DEBUG - 2025-06-01 14:26:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:26:57 --> Input Class Initialized
INFO - 2025-06-01 14:26:57 --> Language Class Initialized
INFO - 2025-06-01 14:26:57 --> Loader Class Initialized
INFO - 2025-06-01 14:26:57 --> Helper loaded: url_helper
INFO - 2025-06-01 14:26:57 --> Helper loaded: file_helper
INFO - 2025-06-01 14:26:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:57 --> Config Class Initialized
INFO - 2025-06-01 14:26:57 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:26:57 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:26:57 --> Utf8 Class Initialized
INFO - 2025-06-01 14:26:57 --> URI Class Initialized
INFO - 2025-06-01 14:26:57 --> Router Class Initialized
INFO - 2025-06-01 14:26:57 --> Output Class Initialized
INFO - 2025-06-01 14:26:57 --> Security Class Initialized
DEBUG - 2025-06-01 14:26:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:26:57 --> Input Class Initialized
INFO - 2025-06-01 14:26:57 --> Language Class Initialized
INFO - 2025-06-01 14:26:57 --> Loader Class Initialized
INFO - 2025-06-01 14:26:57 --> Email Class Initialized
INFO - 2025-06-01 14:26:57 --> Helper loaded: url_helper
INFO - 2025-06-01 14:26:57 --> Helper loaded: file_helper
DEBUG - 2025-06-01 14:26:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:26:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:26:57 --> Controller Class Initialized
INFO - 2025-06-01 14:26:57 --> Helper loaded: form_helper
INFO - 2025-06-01 14:26:57 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:26:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:26:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:57 --> Email Class Initialized
DEBUG - 2025-06-01 14:26:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:26:57 --> Model "Crud" initialized
INFO - 2025-06-01 14:26:57 --> Final output sent to browser
DEBUG - 2025-06-01 14:26:57 --> Total execution time: 0.0132
INFO - 2025-06-01 14:26:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:26:57 --> Controller Class Initialized
INFO - 2025-06-01 14:26:57 --> Helper loaded: form_helper
INFO - 2025-06-01 14:26:57 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:26:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:26:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:26:57 --> Model "Crud" initialized
INFO - 2025-06-01 14:26:57 --> Final output sent to browser
DEBUG - 2025-06-01 14:26:57 --> Total execution time: 0.0223
INFO - 2025-06-01 14:27:01 --> Config Class Initialized
INFO - 2025-06-01 14:27:01 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:27:01 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:27:01 --> Utf8 Class Initialized
INFO - 2025-06-01 14:27:01 --> URI Class Initialized
INFO - 2025-06-01 14:27:01 --> Router Class Initialized
INFO - 2025-06-01 14:27:01 --> Output Class Initialized
INFO - 2025-06-01 14:27:01 --> Security Class Initialized
DEBUG - 2025-06-01 14:27:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:27:01 --> Input Class Initialized
INFO - 2025-06-01 14:27:01 --> Language Class Initialized
INFO - 2025-06-01 14:27:01 --> Loader Class Initialized
INFO - 2025-06-01 14:27:01 --> Helper loaded: url_helper
INFO - 2025-06-01 14:27:01 --> Helper loaded: file_helper
INFO - 2025-06-01 14:27:01 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:01 --> Email Class Initialized
DEBUG - 2025-06-01 14:27:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:27:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:27:01 --> Controller Class Initialized
INFO - 2025-06-01 14:27:01 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:27:01 --> Helper loaded: form_helper
INFO - 2025-06-01 14:27:01 --> Form Validation Class Initialized
INFO - 2025-06-01 14:27:01 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:01 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:27:01 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:27:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:27:01 --> Final output sent to browser
DEBUG - 2025-06-01 14:27:01 --> Total execution time: 0.0083
INFO - 2025-06-01 14:27:05 --> Config Class Initialized
INFO - 2025-06-01 14:27:05 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:27:05 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:27:05 --> Utf8 Class Initialized
INFO - 2025-06-01 14:27:05 --> URI Class Initialized
INFO - 2025-06-01 14:27:05 --> Router Class Initialized
INFO - 2025-06-01 14:27:05 --> Output Class Initialized
INFO - 2025-06-01 14:27:05 --> Security Class Initialized
DEBUG - 2025-06-01 14:27:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:27:05 --> Input Class Initialized
INFO - 2025-06-01 14:27:05 --> Language Class Initialized
INFO - 2025-06-01 14:27:05 --> Loader Class Initialized
INFO - 2025-06-01 14:27:05 --> Helper loaded: url_helper
INFO - 2025-06-01 14:27:05 --> Helper loaded: file_helper
INFO - 2025-06-01 14:27:05 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:05 --> Email Class Initialized
DEBUG - 2025-06-01 14:27:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:27:05 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:27:05 --> Controller Class Initialized
INFO - 2025-06-01 14:27:05 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:27:05 --> Helper loaded: form_helper
INFO - 2025-06-01 14:27:05 --> Form Validation Class Initialized
INFO - 2025-06-01 14:27:05 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:05 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:27:05 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:27:05 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:27:05 --> Final output sent to browser
DEBUG - 2025-06-01 14:27:05 --> Total execution time: 0.0249
INFO - 2025-06-01 14:27:07 --> Config Class Initialized
INFO - 2025-06-01 14:27:07 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:27:07 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:27:07 --> Utf8 Class Initialized
INFO - 2025-06-01 14:27:07 --> URI Class Initialized
INFO - 2025-06-01 14:27:07 --> Router Class Initialized
INFO - 2025-06-01 14:27:07 --> Output Class Initialized
INFO - 2025-06-01 14:27:07 --> Security Class Initialized
DEBUG - 2025-06-01 14:27:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:27:07 --> Input Class Initialized
INFO - 2025-06-01 14:27:07 --> Language Class Initialized
INFO - 2025-06-01 14:27:07 --> Loader Class Initialized
INFO - 2025-06-01 14:27:07 --> Helper loaded: url_helper
INFO - 2025-06-01 14:27:07 --> Helper loaded: file_helper
INFO - 2025-06-01 14:27:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:07 --> Config Class Initialized
INFO - 2025-06-01 14:27:07 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:27:07 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:27:07 --> Utf8 Class Initialized
INFO - 2025-06-01 14:27:07 --> URI Class Initialized
INFO - 2025-06-01 14:27:07 --> Router Class Initialized
INFO - 2025-06-01 14:27:07 --> Output Class Initialized
INFO - 2025-06-01 14:27:07 --> Security Class Initialized
DEBUG - 2025-06-01 14:27:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:27:07 --> Input Class Initialized
INFO - 2025-06-01 14:27:07 --> Language Class Initialized
INFO - 2025-06-01 14:27:07 --> Loader Class Initialized
INFO - 2025-06-01 14:27:07 --> Helper loaded: url_helper
INFO - 2025-06-01 14:27:07 --> Email Class Initialized
INFO - 2025-06-01 14:27:07 --> Helper loaded: file_helper
INFO - 2025-06-01 14:27:07 --> Database Driver Class Initialized
DEBUG - 2025-06-01 14:27:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:27:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:27:07 --> Controller Class Initialized
INFO - 2025-06-01 14:27:07 --> Helper loaded: form_helper
INFO - 2025-06-01 14:27:07 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:27:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:27:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:07 --> Email Class Initialized
INFO - 2025-06-01 14:27:07 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:27:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:27:07 --> Final output sent to browser
DEBUG - 2025-06-01 14:27:07 --> Total execution time: 0.0152
INFO - 2025-06-01 14:27:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:27:07 --> Controller Class Initialized
INFO - 2025-06-01 14:27:07 --> Helper loaded: form_helper
INFO - 2025-06-01 14:27:07 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:27:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:27:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:07 --> Model "Crud" initialized
INFO - 2025-06-01 14:27:07 --> Final output sent to browser
DEBUG - 2025-06-01 14:27:07 --> Total execution time: 0.0321
INFO - 2025-06-01 14:27:08 --> Config Class Initialized
INFO - 2025-06-01 14:27:08 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:27:08 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:27:08 --> Utf8 Class Initialized
INFO - 2025-06-01 14:27:08 --> URI Class Initialized
INFO - 2025-06-01 14:27:08 --> Router Class Initialized
INFO - 2025-06-01 14:27:08 --> Output Class Initialized
INFO - 2025-06-01 14:27:08 --> Security Class Initialized
DEBUG - 2025-06-01 14:27:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:27:08 --> Input Class Initialized
INFO - 2025-06-01 14:27:08 --> Language Class Initialized
INFO - 2025-06-01 14:27:08 --> Loader Class Initialized
INFO - 2025-06-01 14:27:08 --> Helper loaded: url_helper
INFO - 2025-06-01 14:27:08 --> Helper loaded: file_helper
INFO - 2025-06-01 14:27:08 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:08 --> Email Class Initialized
DEBUG - 2025-06-01 14:27:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:27:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:27:08 --> Controller Class Initialized
INFO - 2025-06-01 14:27:08 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:27:08 --> Helper loaded: form_helper
INFO - 2025-06-01 14:27:08 --> Form Validation Class Initialized
INFO - 2025-06-01 14:27:08 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:08 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:27:08 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:27:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:27:08 --> Final output sent to browser
DEBUG - 2025-06-01 14:27:08 --> Total execution time: 0.0142
INFO - 2025-06-01 14:27:08 --> Config Class Initialized
INFO - 2025-06-01 14:27:08 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:27:08 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:27:08 --> Utf8 Class Initialized
INFO - 2025-06-01 14:27:08 --> URI Class Initialized
INFO - 2025-06-01 14:27:08 --> Router Class Initialized
INFO - 2025-06-01 14:27:08 --> Output Class Initialized
INFO - 2025-06-01 14:27:08 --> Security Class Initialized
DEBUG - 2025-06-01 14:27:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:27:08 --> Input Class Initialized
INFO - 2025-06-01 14:27:08 --> Language Class Initialized
INFO - 2025-06-01 14:27:08 --> Loader Class Initialized
INFO - 2025-06-01 14:27:08 --> Helper loaded: url_helper
INFO - 2025-06-01 14:27:08 --> Helper loaded: file_helper
INFO - 2025-06-01 14:27:08 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:08 --> Email Class Initialized
DEBUG - 2025-06-01 14:27:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:27:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:27:08 --> Controller Class Initialized
INFO - 2025-06-01 14:27:08 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:27:08 --> Helper loaded: form_helper
INFO - 2025-06-01 14:27:08 --> Form Validation Class Initialized
INFO - 2025-06-01 14:27:08 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:08 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:27:08 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:27:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:27:08 --> Final output sent to browser
DEBUG - 2025-06-01 14:27:08 --> Total execution time: 0.0116
INFO - 2025-06-01 14:27:08 --> Config Class Initialized
INFO - 2025-06-01 14:27:08 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:27:08 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:27:08 --> Utf8 Class Initialized
INFO - 2025-06-01 14:27:08 --> URI Class Initialized
INFO - 2025-06-01 14:27:08 --> Router Class Initialized
INFO - 2025-06-01 14:27:08 --> Output Class Initialized
INFO - 2025-06-01 14:27:08 --> Security Class Initialized
DEBUG - 2025-06-01 14:27:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:27:08 --> Input Class Initialized
INFO - 2025-06-01 14:27:08 --> Language Class Initialized
INFO - 2025-06-01 14:27:08 --> Loader Class Initialized
INFO - 2025-06-01 14:27:08 --> Helper loaded: url_helper
INFO - 2025-06-01 14:27:08 --> Helper loaded: file_helper
INFO - 2025-06-01 14:27:08 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:08 --> Email Class Initialized
DEBUG - 2025-06-01 14:27:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:27:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:27:08 --> Controller Class Initialized
INFO - 2025-06-01 14:27:08 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:27:08 --> Helper loaded: form_helper
INFO - 2025-06-01 14:27:08 --> Form Validation Class Initialized
INFO - 2025-06-01 14:27:08 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:08 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:27:08 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:27:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:27:08 --> Final output sent to browser
DEBUG - 2025-06-01 14:27:08 --> Total execution time: 0.0062
INFO - 2025-06-01 14:27:08 --> Config Class Initialized
INFO - 2025-06-01 14:27:08 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:27:08 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:27:08 --> Utf8 Class Initialized
INFO - 2025-06-01 14:27:08 --> URI Class Initialized
INFO - 2025-06-01 14:27:08 --> Router Class Initialized
INFO - 2025-06-01 14:27:08 --> Output Class Initialized
INFO - 2025-06-01 14:27:08 --> Security Class Initialized
DEBUG - 2025-06-01 14:27:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:27:08 --> Input Class Initialized
INFO - 2025-06-01 14:27:08 --> Language Class Initialized
INFO - 2025-06-01 14:27:08 --> Loader Class Initialized
INFO - 2025-06-01 14:27:08 --> Helper loaded: url_helper
INFO - 2025-06-01 14:27:08 --> Helper loaded: file_helper
INFO - 2025-06-01 14:27:08 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:08 --> Email Class Initialized
DEBUG - 2025-06-01 14:27:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:27:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:27:08 --> Controller Class Initialized
INFO - 2025-06-01 14:27:08 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:27:08 --> Helper loaded: form_helper
INFO - 2025-06-01 14:27:08 --> Form Validation Class Initialized
INFO - 2025-06-01 14:27:08 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:08 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:27:08 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:27:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:27:08 --> Final output sent to browser
DEBUG - 2025-06-01 14:27:08 --> Total execution time: 0.0130
INFO - 2025-06-01 14:27:10 --> Config Class Initialized
INFO - 2025-06-01 14:27:10 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:27:10 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:27:10 --> Utf8 Class Initialized
INFO - 2025-06-01 14:27:10 --> URI Class Initialized
INFO - 2025-06-01 14:27:10 --> Router Class Initialized
INFO - 2025-06-01 14:27:10 --> Output Class Initialized
INFO - 2025-06-01 14:27:10 --> Security Class Initialized
DEBUG - 2025-06-01 14:27:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:27:10 --> Input Class Initialized
INFO - 2025-06-01 14:27:10 --> Language Class Initialized
INFO - 2025-06-01 14:27:10 --> Loader Class Initialized
INFO - 2025-06-01 14:27:10 --> Helper loaded: url_helper
INFO - 2025-06-01 14:27:10 --> Helper loaded: file_helper
INFO - 2025-06-01 14:27:10 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:10 --> Email Class Initialized
DEBUG - 2025-06-01 14:27:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:27:10 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:27:10 --> Controller Class Initialized
INFO - 2025-06-01 14:27:10 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:27:10 --> Helper loaded: form_helper
INFO - 2025-06-01 14:27:10 --> Form Validation Class Initialized
INFO - 2025-06-01 14:27:10 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:10 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:27:10 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:27:10 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:27:10 --> Final output sent to browser
DEBUG - 2025-06-01 14:27:10 --> Total execution time: 0.0135
INFO - 2025-06-01 14:27:17 --> Config Class Initialized
INFO - 2025-06-01 14:27:17 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:27:17 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:27:17 --> Utf8 Class Initialized
INFO - 2025-06-01 14:27:17 --> URI Class Initialized
INFO - 2025-06-01 14:27:17 --> Router Class Initialized
INFO - 2025-06-01 14:27:17 --> Output Class Initialized
INFO - 2025-06-01 14:27:17 --> Config Class Initialized
INFO - 2025-06-01 14:27:17 --> Security Class Initialized
INFO - 2025-06-01 14:27:17 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:27:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-01 14:27:17 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:27:17 --> Input Class Initialized
INFO - 2025-06-01 14:27:17 --> Utf8 Class Initialized
INFO - 2025-06-01 14:27:17 --> Language Class Initialized
INFO - 2025-06-01 14:27:17 --> URI Class Initialized
INFO - 2025-06-01 14:27:17 --> Router Class Initialized
INFO - 2025-06-01 14:27:17 --> Loader Class Initialized
INFO - 2025-06-01 14:27:17 --> Output Class Initialized
INFO - 2025-06-01 14:27:17 --> Helper loaded: url_helper
INFO - 2025-06-01 14:27:17 --> Security Class Initialized
INFO - 2025-06-01 14:27:17 --> Helper loaded: file_helper
DEBUG - 2025-06-01 14:27:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:27:17 --> Input Class Initialized
INFO - 2025-06-01 14:27:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:17 --> Language Class Initialized
INFO - 2025-06-01 14:27:17 --> Loader Class Initialized
INFO - 2025-06-01 14:27:17 --> Helper loaded: url_helper
INFO - 2025-06-01 14:27:17 --> Helper loaded: file_helper
INFO - 2025-06-01 14:27:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:17 --> Email Class Initialized
INFO - 2025-06-01 14:27:17 --> Email Class Initialized
DEBUG - 2025-06-01 14:27:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-01 14:27:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:27:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:27:17 --> Controller Class Initialized
INFO - 2025-06-01 14:27:17 --> Helper loaded: form_helper
INFO - 2025-06-01 14:27:17 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:27:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:27:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:17 --> Model "Crud" initialized
INFO - 2025-06-01 14:27:17 --> Final output sent to browser
DEBUG - 2025-06-01 14:27:17 --> Total execution time: 0.0239
INFO - 2025-06-01 14:27:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:27:17 --> Controller Class Initialized
INFO - 2025-06-01 14:27:17 --> Helper loaded: form_helper
INFO - 2025-06-01 14:27:17 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:27:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:27:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:17 --> Model "Crud" initialized
INFO - 2025-06-01 14:27:17 --> Final output sent to browser
DEBUG - 2025-06-01 14:27:17 --> Total execution time: 0.0427
INFO - 2025-06-01 14:27:27 --> Config Class Initialized
INFO - 2025-06-01 14:27:27 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:27:27 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:27:27 --> Utf8 Class Initialized
INFO - 2025-06-01 14:27:27 --> URI Class Initialized
INFO - 2025-06-01 14:27:27 --> Router Class Initialized
INFO - 2025-06-01 14:27:27 --> Output Class Initialized
INFO - 2025-06-01 14:27:27 --> Security Class Initialized
DEBUG - 2025-06-01 14:27:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:27:27 --> Input Class Initialized
INFO - 2025-06-01 14:27:27 --> Language Class Initialized
INFO - 2025-06-01 14:27:27 --> Config Class Initialized
INFO - 2025-06-01 14:27:27 --> Hooks Class Initialized
INFO - 2025-06-01 14:27:27 --> Loader Class Initialized
DEBUG - 2025-06-01 14:27:27 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:27:27 --> Helper loaded: url_helper
INFO - 2025-06-01 14:27:27 --> Utf8 Class Initialized
INFO - 2025-06-01 14:27:27 --> Helper loaded: file_helper
INFO - 2025-06-01 14:27:27 --> URI Class Initialized
INFO - 2025-06-01 14:27:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:27 --> Router Class Initialized
INFO - 2025-06-01 14:27:27 --> Output Class Initialized
INFO - 2025-06-01 14:27:27 --> Security Class Initialized
DEBUG - 2025-06-01 14:27:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:27:27 --> Input Class Initialized
INFO - 2025-06-01 14:27:27 --> Language Class Initialized
INFO - 2025-06-01 14:27:27 --> Loader Class Initialized
INFO - 2025-06-01 14:27:27 --> Helper loaded: url_helper
INFO - 2025-06-01 14:27:27 --> Helper loaded: file_helper
INFO - 2025-06-01 14:27:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:27 --> Email Class Initialized
DEBUG - 2025-06-01 14:27:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:27:27 --> Email Class Initialized
DEBUG - 2025-06-01 14:27:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:27:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:27:27 --> Controller Class Initialized
INFO - 2025-06-01 14:27:27 --> Helper loaded: form_helper
INFO - 2025-06-01 14:27:27 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:27:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:27:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:27 --> Model "Crud" initialized
INFO - 2025-06-01 14:27:27 --> Final output sent to browser
DEBUG - 2025-06-01 14:27:27 --> Total execution time: 0.0171
INFO - 2025-06-01 14:27:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:27:27 --> Controller Class Initialized
INFO - 2025-06-01 14:27:27 --> Helper loaded: form_helper
INFO - 2025-06-01 14:27:27 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:27:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:27:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:27 --> Model "Crud" initialized
INFO - 2025-06-01 14:27:27 --> Final output sent to browser
DEBUG - 2025-06-01 14:27:27 --> Total execution time: 0.0337
INFO - 2025-06-01 14:27:38 --> Config Class Initialized
INFO - 2025-06-01 14:27:38 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:27:38 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:27:38 --> Utf8 Class Initialized
INFO - 2025-06-01 14:27:38 --> URI Class Initialized
INFO - 2025-06-01 14:27:38 --> Router Class Initialized
INFO - 2025-06-01 14:27:38 --> Output Class Initialized
INFO - 2025-06-01 14:27:38 --> Security Class Initialized
DEBUG - 2025-06-01 14:27:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:27:38 --> Input Class Initialized
INFO - 2025-06-01 14:27:38 --> Language Class Initialized
INFO - 2025-06-01 14:27:38 --> Loader Class Initialized
INFO - 2025-06-01 14:27:38 --> Helper loaded: url_helper
INFO - 2025-06-01 14:27:38 --> Helper loaded: file_helper
INFO - 2025-06-01 14:27:38 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:38 --> Config Class Initialized
INFO - 2025-06-01 14:27:38 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:27:38 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:27:38 --> Utf8 Class Initialized
INFO - 2025-06-01 14:27:38 --> URI Class Initialized
INFO - 2025-06-01 14:27:38 --> Router Class Initialized
INFO - 2025-06-01 14:27:38 --> Output Class Initialized
INFO - 2025-06-01 14:27:38 --> Security Class Initialized
DEBUG - 2025-06-01 14:27:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:27:38 --> Input Class Initialized
INFO - 2025-06-01 14:27:38 --> Language Class Initialized
INFO - 2025-06-01 14:27:38 --> Loader Class Initialized
INFO - 2025-06-01 14:27:38 --> Helper loaded: url_helper
INFO - 2025-06-01 14:27:38 --> Helper loaded: file_helper
INFO - 2025-06-01 14:27:38 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:38 --> Email Class Initialized
DEBUG - 2025-06-01 14:27:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:27:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:27:38 --> Controller Class Initialized
INFO - 2025-06-01 14:27:38 --> Helper loaded: form_helper
INFO - 2025-06-01 14:27:38 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:27:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:27:38 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:38 --> Email Class Initialized
DEBUG - 2025-06-01 14:27:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:27:38 --> Model "Crud" initialized
INFO - 2025-06-01 14:27:38 --> Final output sent to browser
DEBUG - 2025-06-01 14:27:38 --> Total execution time: 0.0157
INFO - 2025-06-01 14:27:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:27:38 --> Controller Class Initialized
INFO - 2025-06-01 14:27:38 --> Helper loaded: form_helper
INFO - 2025-06-01 14:27:38 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:27:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:27:38 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:38 --> Model "Crud" initialized
INFO - 2025-06-01 14:27:38 --> Final output sent to browser
DEBUG - 2025-06-01 14:27:38 --> Total execution time: 0.0238
INFO - 2025-06-01 14:27:48 --> Config Class Initialized
INFO - 2025-06-01 14:27:48 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:27:48 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:27:48 --> Utf8 Class Initialized
INFO - 2025-06-01 14:27:48 --> Config Class Initialized
INFO - 2025-06-01 14:27:48 --> Hooks Class Initialized
INFO - 2025-06-01 14:27:48 --> URI Class Initialized
DEBUG - 2025-06-01 14:27:48 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:27:48 --> Utf8 Class Initialized
INFO - 2025-06-01 14:27:48 --> Router Class Initialized
INFO - 2025-06-01 14:27:48 --> URI Class Initialized
INFO - 2025-06-01 14:27:48 --> Output Class Initialized
INFO - 2025-06-01 14:27:48 --> Router Class Initialized
INFO - 2025-06-01 14:27:48 --> Security Class Initialized
INFO - 2025-06-01 14:27:48 --> Output Class Initialized
DEBUG - 2025-06-01 14:27:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:27:48 --> Security Class Initialized
INFO - 2025-06-01 14:27:48 --> Input Class Initialized
DEBUG - 2025-06-01 14:27:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:27:48 --> Language Class Initialized
INFO - 2025-06-01 14:27:48 --> Input Class Initialized
INFO - 2025-06-01 14:27:48 --> Language Class Initialized
INFO - 2025-06-01 14:27:48 --> Loader Class Initialized
INFO - 2025-06-01 14:27:48 --> Loader Class Initialized
INFO - 2025-06-01 14:27:48 --> Helper loaded: url_helper
INFO - 2025-06-01 14:27:48 --> Helper loaded: url_helper
INFO - 2025-06-01 14:27:48 --> Helper loaded: file_helper
INFO - 2025-06-01 14:27:48 --> Helper loaded: file_helper
INFO - 2025-06-01 14:27:48 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:48 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:48 --> Email Class Initialized
INFO - 2025-06-01 14:27:48 --> Email Class Initialized
DEBUG - 2025-06-01 14:27:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-01 14:27:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:27:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:27:48 --> Controller Class Initialized
INFO - 2025-06-01 14:27:48 --> Helper loaded: form_helper
INFO - 2025-06-01 14:27:48 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:27:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:27:48 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:48 --> Model "Crud" initialized
INFO - 2025-06-01 14:27:48 --> Final output sent to browser
DEBUG - 2025-06-01 14:27:48 --> Total execution time: 0.0132
INFO - 2025-06-01 14:27:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:27:48 --> Controller Class Initialized
INFO - 2025-06-01 14:27:48 --> Helper loaded: form_helper
INFO - 2025-06-01 14:27:48 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:27:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:27:48 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:48 --> Model "Crud" initialized
INFO - 2025-06-01 14:27:48 --> Final output sent to browser
DEBUG - 2025-06-01 14:27:48 --> Total execution time: 0.0253
INFO - 2025-06-01 14:27:57 --> Config Class Initialized
INFO - 2025-06-01 14:27:57 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:27:57 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:27:57 --> Utf8 Class Initialized
INFO - 2025-06-01 14:27:57 --> URI Class Initialized
INFO - 2025-06-01 14:27:57 --> Router Class Initialized
INFO - 2025-06-01 14:27:57 --> Output Class Initialized
INFO - 2025-06-01 14:27:57 --> Security Class Initialized
DEBUG - 2025-06-01 14:27:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:27:57 --> Input Class Initialized
INFO - 2025-06-01 14:27:57 --> Language Class Initialized
INFO - 2025-06-01 14:27:57 --> Loader Class Initialized
INFO - 2025-06-01 14:27:57 --> Config Class Initialized
INFO - 2025-06-01 14:27:57 --> Helper loaded: url_helper
INFO - 2025-06-01 14:27:57 --> Hooks Class Initialized
INFO - 2025-06-01 14:27:57 --> Helper loaded: file_helper
DEBUG - 2025-06-01 14:27:57 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:27:57 --> Utf8 Class Initialized
INFO - 2025-06-01 14:27:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:57 --> URI Class Initialized
INFO - 2025-06-01 14:27:57 --> Router Class Initialized
INFO - 2025-06-01 14:27:57 --> Output Class Initialized
INFO - 2025-06-01 14:27:57 --> Security Class Initialized
DEBUG - 2025-06-01 14:27:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:27:57 --> Input Class Initialized
INFO - 2025-06-01 14:27:57 --> Language Class Initialized
INFO - 2025-06-01 14:27:57 --> Loader Class Initialized
INFO - 2025-06-01 14:27:57 --> Helper loaded: url_helper
INFO - 2025-06-01 14:27:57 --> Helper loaded: file_helper
INFO - 2025-06-01 14:27:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:57 --> Email Class Initialized
DEBUG - 2025-06-01 14:27:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:27:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:27:57 --> Controller Class Initialized
INFO - 2025-06-01 14:27:57 --> Helper loaded: form_helper
INFO - 2025-06-01 14:27:57 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:27:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:27:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:57 --> Email Class Initialized
DEBUG - 2025-06-01 14:27:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:27:57 --> Model "Crud" initialized
INFO - 2025-06-01 14:27:57 --> Final output sent to browser
DEBUG - 2025-06-01 14:27:57 --> Total execution time: 0.0139
INFO - 2025-06-01 14:27:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:27:57 --> Controller Class Initialized
INFO - 2025-06-01 14:27:57 --> Helper loaded: form_helper
INFO - 2025-06-01 14:27:57 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:27:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:27:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:27:57 --> Model "Crud" initialized
INFO - 2025-06-01 14:27:57 --> Final output sent to browser
DEBUG - 2025-06-01 14:27:57 --> Total execution time: 0.0247
INFO - 2025-06-01 14:28:08 --> Config Class Initialized
INFO - 2025-06-01 14:28:08 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:28:08 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:28:08 --> Utf8 Class Initialized
INFO - 2025-06-01 14:28:08 --> URI Class Initialized
INFO - 2025-06-01 14:28:08 --> Router Class Initialized
INFO - 2025-06-01 14:28:08 --> Output Class Initialized
INFO - 2025-06-01 14:28:08 --> Security Class Initialized
DEBUG - 2025-06-01 14:28:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:28:08 --> Input Class Initialized
INFO - 2025-06-01 14:28:08 --> Language Class Initialized
INFO - 2025-06-01 14:28:08 --> Loader Class Initialized
INFO - 2025-06-01 14:28:08 --> Helper loaded: url_helper
INFO - 2025-06-01 14:28:08 --> Helper loaded: file_helper
INFO - 2025-06-01 14:28:08 --> Database Driver Class Initialized
INFO - 2025-06-01 14:28:08 --> Email Class Initialized
DEBUG - 2025-06-01 14:28:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:28:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:28:08 --> Controller Class Initialized
INFO - 2025-06-01 14:28:08 --> Helper loaded: form_helper
INFO - 2025-06-01 14:28:08 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:28:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:28:08 --> Database Driver Class Initialized
INFO - 2025-06-01 14:28:08 --> Model "Crud" initialized
INFO - 2025-06-01 14:28:08 --> Config Class Initialized
INFO - 2025-06-01 14:28:08 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:28:08 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:28:08 --> Utf8 Class Initialized
INFO - 2025-06-01 14:28:08 --> URI Class Initialized
INFO - 2025-06-01 14:28:08 --> Router Class Initialized
INFO - 2025-06-01 14:28:08 --> Output Class Initialized
INFO - 2025-06-01 14:28:08 --> Security Class Initialized
DEBUG - 2025-06-01 14:28:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:28:08 --> Input Class Initialized
INFO - 2025-06-01 14:28:08 --> Language Class Initialized
INFO - 2025-06-01 14:28:08 --> Loader Class Initialized
INFO - 2025-06-01 14:28:08 --> Helper loaded: url_helper
INFO - 2025-06-01 14:28:08 --> Helper loaded: file_helper
INFO - 2025-06-01 14:28:08 --> Database Driver Class Initialized
INFO - 2025-06-01 14:28:08 --> Email Class Initialized
DEBUG - 2025-06-01 14:28:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:28:08 --> Final output sent to browser
DEBUG - 2025-06-01 14:28:08 --> Total execution time: 0.0951
INFO - 2025-06-01 14:28:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:28:08 --> Controller Class Initialized
INFO - 2025-06-01 14:28:08 --> Helper loaded: form_helper
INFO - 2025-06-01 14:28:08 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:28:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:28:08 --> Database Driver Class Initialized
INFO - 2025-06-01 14:28:08 --> Model "Crud" initialized
INFO - 2025-06-01 14:28:08 --> Final output sent to browser
DEBUG - 2025-06-01 14:28:08 --> Total execution time: 0.0350
INFO - 2025-06-01 14:28:18 --> Config Class Initialized
INFO - 2025-06-01 14:28:18 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:28:18 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:28:18 --> Utf8 Class Initialized
INFO - 2025-06-01 14:28:18 --> URI Class Initialized
INFO - 2025-06-01 14:28:18 --> Router Class Initialized
INFO - 2025-06-01 14:28:18 --> Output Class Initialized
INFO - 2025-06-01 14:28:18 --> Security Class Initialized
DEBUG - 2025-06-01 14:28:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:28:18 --> Input Class Initialized
INFO - 2025-06-01 14:28:18 --> Language Class Initialized
INFO - 2025-06-01 14:28:18 --> Loader Class Initialized
INFO - 2025-06-01 14:28:18 --> Helper loaded: url_helper
INFO - 2025-06-01 14:28:18 --> Helper loaded: file_helper
INFO - 2025-06-01 14:28:18 --> Database Driver Class Initialized
INFO - 2025-06-01 14:28:18 --> Config Class Initialized
INFO - 2025-06-01 14:28:18 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:28:18 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:28:18 --> Utf8 Class Initialized
INFO - 2025-06-01 14:28:18 --> URI Class Initialized
INFO - 2025-06-01 14:28:18 --> Router Class Initialized
INFO - 2025-06-01 14:28:18 --> Output Class Initialized
INFO - 2025-06-01 14:28:18 --> Security Class Initialized
DEBUG - 2025-06-01 14:28:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:28:18 --> Input Class Initialized
INFO - 2025-06-01 14:28:18 --> Language Class Initialized
INFO - 2025-06-01 14:28:18 --> Loader Class Initialized
INFO - 2025-06-01 14:28:18 --> Helper loaded: url_helper
INFO - 2025-06-01 14:28:18 --> Helper loaded: file_helper
INFO - 2025-06-01 14:28:18 --> Database Driver Class Initialized
INFO - 2025-06-01 14:28:18 --> Email Class Initialized
DEBUG - 2025-06-01 14:28:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:28:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:28:18 --> Controller Class Initialized
INFO - 2025-06-01 14:28:18 --> Helper loaded: form_helper
INFO - 2025-06-01 14:28:18 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:28:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:28:18 --> Database Driver Class Initialized
INFO - 2025-06-01 14:28:18 --> Email Class Initialized
DEBUG - 2025-06-01 14:28:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:28:18 --> Model "Crud" initialized
INFO - 2025-06-01 14:28:18 --> Final output sent to browser
DEBUG - 2025-06-01 14:28:18 --> Total execution time: 0.0165
INFO - 2025-06-01 14:28:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:28:18 --> Controller Class Initialized
INFO - 2025-06-01 14:28:18 --> Helper loaded: form_helper
INFO - 2025-06-01 14:28:18 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:28:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:28:18 --> Database Driver Class Initialized
INFO - 2025-06-01 14:28:18 --> Model "Crud" initialized
INFO - 2025-06-01 14:28:18 --> Final output sent to browser
DEBUG - 2025-06-01 14:28:18 --> Total execution time: 0.0281
INFO - 2025-06-01 14:28:27 --> Config Class Initialized
INFO - 2025-06-01 14:28:27 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:28:27 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:28:27 --> Utf8 Class Initialized
INFO - 2025-06-01 14:28:27 --> URI Class Initialized
INFO - 2025-06-01 14:28:27 --> Router Class Initialized
INFO - 2025-06-01 14:28:27 --> Output Class Initialized
INFO - 2025-06-01 14:28:27 --> Security Class Initialized
DEBUG - 2025-06-01 14:28:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:28:27 --> Input Class Initialized
INFO - 2025-06-01 14:28:27 --> Language Class Initialized
INFO - 2025-06-01 14:28:27 --> Loader Class Initialized
INFO - 2025-06-01 14:28:27 --> Config Class Initialized
INFO - 2025-06-01 14:28:27 --> Helper loaded: url_helper
INFO - 2025-06-01 14:28:27 --> Hooks Class Initialized
INFO - 2025-06-01 14:28:27 --> Helper loaded: file_helper
DEBUG - 2025-06-01 14:28:27 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:28:27 --> Utf8 Class Initialized
INFO - 2025-06-01 14:28:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:28:27 --> URI Class Initialized
INFO - 2025-06-01 14:28:27 --> Router Class Initialized
INFO - 2025-06-01 14:28:27 --> Output Class Initialized
INFO - 2025-06-01 14:28:27 --> Security Class Initialized
DEBUG - 2025-06-01 14:28:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:28:27 --> Input Class Initialized
INFO - 2025-06-01 14:28:27 --> Language Class Initialized
INFO - 2025-06-01 14:28:27 --> Loader Class Initialized
INFO - 2025-06-01 14:28:27 --> Helper loaded: url_helper
INFO - 2025-06-01 14:28:27 --> Helper loaded: file_helper
INFO - 2025-06-01 14:28:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:28:27 --> Email Class Initialized
DEBUG - 2025-06-01 14:28:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:28:27 --> Email Class Initialized
INFO - 2025-06-01 14:28:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:28:27 --> Controller Class Initialized
DEBUG - 2025-06-01 14:28:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:28:27 --> Helper loaded: form_helper
INFO - 2025-06-01 14:28:27 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:28:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:28:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:28:27 --> Model "Crud" initialized
INFO - 2025-06-01 14:28:27 --> Final output sent to browser
DEBUG - 2025-06-01 14:28:27 --> Total execution time: 0.0271
INFO - 2025-06-01 14:28:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:28:27 --> Controller Class Initialized
INFO - 2025-06-01 14:28:27 --> Helper loaded: form_helper
INFO - 2025-06-01 14:28:27 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:28:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:28:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:28:27 --> Model "Crud" initialized
INFO - 2025-06-01 14:28:27 --> Final output sent to browser
DEBUG - 2025-06-01 14:28:27 --> Total execution time: 0.0501
INFO - 2025-06-01 14:28:37 --> Config Class Initialized
INFO - 2025-06-01 14:28:37 --> Config Class Initialized
INFO - 2025-06-01 14:28:37 --> Hooks Class Initialized
INFO - 2025-06-01 14:28:37 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:28:37 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:28:37 --> Utf8 Class Initialized
DEBUG - 2025-06-01 14:28:37 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:28:37 --> Utf8 Class Initialized
INFO - 2025-06-01 14:28:37 --> URI Class Initialized
INFO - 2025-06-01 14:28:37 --> URI Class Initialized
INFO - 2025-06-01 14:28:37 --> Router Class Initialized
INFO - 2025-06-01 14:28:37 --> Router Class Initialized
INFO - 2025-06-01 14:28:37 --> Output Class Initialized
INFO - 2025-06-01 14:28:37 --> Output Class Initialized
INFO - 2025-06-01 14:28:37 --> Security Class Initialized
INFO - 2025-06-01 14:28:37 --> Security Class Initialized
DEBUG - 2025-06-01 14:28:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:28:37 --> Input Class Initialized
DEBUG - 2025-06-01 14:28:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:28:37 --> Language Class Initialized
INFO - 2025-06-01 14:28:37 --> Input Class Initialized
INFO - 2025-06-01 14:28:37 --> Language Class Initialized
INFO - 2025-06-01 14:28:37 --> Loader Class Initialized
INFO - 2025-06-01 14:28:37 --> Loader Class Initialized
INFO - 2025-06-01 14:28:37 --> Helper loaded: url_helper
INFO - 2025-06-01 14:28:37 --> Helper loaded: file_helper
INFO - 2025-06-01 14:28:37 --> Helper loaded: url_helper
INFO - 2025-06-01 14:28:37 --> Helper loaded: file_helper
INFO - 2025-06-01 14:28:37 --> Database Driver Class Initialized
INFO - 2025-06-01 14:28:37 --> Database Driver Class Initialized
INFO - 2025-06-01 14:28:37 --> Email Class Initialized
INFO - 2025-06-01 14:28:37 --> Email Class Initialized
DEBUG - 2025-06-01 14:28:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-01 14:28:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:28:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:28:37 --> Controller Class Initialized
INFO - 2025-06-01 14:28:37 --> Helper loaded: form_helper
INFO - 2025-06-01 14:28:37 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:28:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:28:37 --> Database Driver Class Initialized
INFO - 2025-06-01 14:28:37 --> Model "Crud" initialized
INFO - 2025-06-01 14:28:37 --> Final output sent to browser
DEBUG - 2025-06-01 14:28:37 --> Total execution time: 0.0130
INFO - 2025-06-01 14:28:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:28:37 --> Controller Class Initialized
INFO - 2025-06-01 14:28:37 --> Helper loaded: form_helper
INFO - 2025-06-01 14:28:37 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:28:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:28:37 --> Database Driver Class Initialized
INFO - 2025-06-01 14:28:37 --> Model "Crud" initialized
INFO - 2025-06-01 14:28:37 --> Final output sent to browser
DEBUG - 2025-06-01 14:28:37 --> Total execution time: 0.0255
INFO - 2025-06-01 14:28:48 --> Config Class Initialized
INFO - 2025-06-01 14:28:48 --> Config Class Initialized
INFO - 2025-06-01 14:28:48 --> Hooks Class Initialized
INFO - 2025-06-01 14:28:48 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:28:48 --> UTF-8 Support Enabled
DEBUG - 2025-06-01 14:28:48 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:28:48 --> Utf8 Class Initialized
INFO - 2025-06-01 14:28:48 --> Utf8 Class Initialized
INFO - 2025-06-01 14:28:48 --> URI Class Initialized
INFO - 2025-06-01 14:28:48 --> URI Class Initialized
INFO - 2025-06-01 14:28:48 --> Router Class Initialized
INFO - 2025-06-01 14:28:48 --> Output Class Initialized
INFO - 2025-06-01 14:28:48 --> Router Class Initialized
INFO - 2025-06-01 14:28:48 --> Security Class Initialized
INFO - 2025-06-01 14:28:48 --> Output Class Initialized
DEBUG - 2025-06-01 14:28:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:28:48 --> Input Class Initialized
INFO - 2025-06-01 14:28:48 --> Security Class Initialized
INFO - 2025-06-01 14:28:48 --> Language Class Initialized
DEBUG - 2025-06-01 14:28:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:28:48 --> Input Class Initialized
INFO - 2025-06-01 14:28:48 --> Loader Class Initialized
INFO - 2025-06-01 14:28:48 --> Language Class Initialized
INFO - 2025-06-01 14:28:48 --> Helper loaded: url_helper
INFO - 2025-06-01 14:28:48 --> Helper loaded: file_helper
INFO - 2025-06-01 14:28:48 --> Loader Class Initialized
INFO - 2025-06-01 14:28:48 --> Database Driver Class Initialized
INFO - 2025-06-01 14:28:48 --> Helper loaded: url_helper
INFO - 2025-06-01 14:28:48 --> Helper loaded: file_helper
INFO - 2025-06-01 14:28:48 --> Database Driver Class Initialized
INFO - 2025-06-01 14:28:48 --> Email Class Initialized
INFO - 2025-06-01 14:28:48 --> Email Class Initialized
DEBUG - 2025-06-01 14:28:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-01 14:28:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:28:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:28:48 --> Controller Class Initialized
INFO - 2025-06-01 14:28:48 --> Helper loaded: form_helper
INFO - 2025-06-01 14:28:48 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:28:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:28:48 --> Database Driver Class Initialized
INFO - 2025-06-01 14:28:48 --> Model "Crud" initialized
INFO - 2025-06-01 14:28:48 --> Final output sent to browser
DEBUG - 2025-06-01 14:28:48 --> Total execution time: 0.0141
INFO - 2025-06-01 14:28:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:28:48 --> Controller Class Initialized
INFO - 2025-06-01 14:28:48 --> Helper loaded: form_helper
INFO - 2025-06-01 14:28:48 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:28:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:28:48 --> Database Driver Class Initialized
INFO - 2025-06-01 14:28:48 --> Model "Crud" initialized
INFO - 2025-06-01 14:28:48 --> Final output sent to browser
DEBUG - 2025-06-01 14:28:48 --> Total execution time: 0.0250
INFO - 2025-06-01 14:28:57 --> Config Class Initialized
INFO - 2025-06-01 14:28:57 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:28:57 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:28:57 --> Utf8 Class Initialized
INFO - 2025-06-01 14:28:57 --> URI Class Initialized
INFO - 2025-06-01 14:28:57 --> Config Class Initialized
INFO - 2025-06-01 14:28:57 --> Router Class Initialized
INFO - 2025-06-01 14:28:57 --> Hooks Class Initialized
INFO - 2025-06-01 14:28:57 --> Output Class Initialized
INFO - 2025-06-01 14:28:57 --> Security Class Initialized
DEBUG - 2025-06-01 14:28:57 --> UTF-8 Support Enabled
DEBUG - 2025-06-01 14:28:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:28:57 --> Utf8 Class Initialized
INFO - 2025-06-01 14:28:57 --> Input Class Initialized
INFO - 2025-06-01 14:28:57 --> Language Class Initialized
INFO - 2025-06-01 14:28:57 --> URI Class Initialized
INFO - 2025-06-01 14:28:57 --> Loader Class Initialized
INFO - 2025-06-01 14:28:57 --> Router Class Initialized
INFO - 2025-06-01 14:28:57 --> Output Class Initialized
INFO - 2025-06-01 14:28:57 --> Helper loaded: url_helper
INFO - 2025-06-01 14:28:57 --> Security Class Initialized
INFO - 2025-06-01 14:28:57 --> Helper loaded: file_helper
INFO - 2025-06-01 14:28:57 --> Database Driver Class Initialized
DEBUG - 2025-06-01 14:28:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:28:57 --> Input Class Initialized
INFO - 2025-06-01 14:28:57 --> Language Class Initialized
INFO - 2025-06-01 14:28:57 --> Loader Class Initialized
INFO - 2025-06-01 14:28:57 --> Helper loaded: url_helper
INFO - 2025-06-01 14:28:57 --> Helper loaded: file_helper
INFO - 2025-06-01 14:28:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:28:57 --> Email Class Initialized
DEBUG - 2025-06-01 14:28:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:28:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:28:57 --> Controller Class Initialized
INFO - 2025-06-01 14:28:57 --> Email Class Initialized
INFO - 2025-06-01 14:28:57 --> Helper loaded: form_helper
INFO - 2025-06-01 14:28:57 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:28:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-01 14:28:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:28:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:28:57 --> Model "Crud" initialized
INFO - 2025-06-01 14:28:57 --> Final output sent to browser
DEBUG - 2025-06-01 14:28:57 --> Total execution time: 0.0167
INFO - 2025-06-01 14:28:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:28:57 --> Controller Class Initialized
INFO - 2025-06-01 14:28:57 --> Helper loaded: form_helper
INFO - 2025-06-01 14:28:57 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:28:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:28:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:28:57 --> Model "Crud" initialized
INFO - 2025-06-01 14:28:57 --> Final output sent to browser
DEBUG - 2025-06-01 14:28:57 --> Total execution time: 0.0300
INFO - 2025-06-01 14:29:07 --> Config Class Initialized
INFO - 2025-06-01 14:29:07 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:29:07 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:29:07 --> Utf8 Class Initialized
INFO - 2025-06-01 14:29:07 --> URI Class Initialized
INFO - 2025-06-01 14:29:07 --> Router Class Initialized
INFO - 2025-06-01 14:29:07 --> Output Class Initialized
INFO - 2025-06-01 14:29:07 --> Security Class Initialized
DEBUG - 2025-06-01 14:29:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:29:07 --> Input Class Initialized
INFO - 2025-06-01 14:29:07 --> Language Class Initialized
INFO - 2025-06-01 14:29:07 --> Loader Class Initialized
INFO - 2025-06-01 14:29:07 --> Helper loaded: url_helper
INFO - 2025-06-01 14:29:07 --> Helper loaded: file_helper
INFO - 2025-06-01 14:29:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:29:07 --> Config Class Initialized
INFO - 2025-06-01 14:29:07 --> Hooks Class Initialized
INFO - 2025-06-01 14:29:07 --> Email Class Initialized
DEBUG - 2025-06-01 14:29:07 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:29:07 --> Utf8 Class Initialized
DEBUG - 2025-06-01 14:29:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:29:07 --> URI Class Initialized
INFO - 2025-06-01 14:29:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:29:07 --> Router Class Initialized
INFO - 2025-06-01 14:29:07 --> Controller Class Initialized
INFO - 2025-06-01 14:29:07 --> Output Class Initialized
INFO - 2025-06-01 14:29:07 --> Helper loaded: form_helper
INFO - 2025-06-01 14:29:07 --> Security Class Initialized
INFO - 2025-06-01 14:29:07 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:29:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:29:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:29:07 --> Input Class Initialized
INFO - 2025-06-01 14:29:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:29:07 --> Language Class Initialized
INFO - 2025-06-01 14:29:07 --> Loader Class Initialized
INFO - 2025-06-01 14:29:07 --> Helper loaded: url_helper
INFO - 2025-06-01 14:29:07 --> Helper loaded: file_helper
INFO - 2025-06-01 14:29:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:29:07 --> Model "Crud" initialized
INFO - 2025-06-01 14:29:07 --> Email Class Initialized
DEBUG - 2025-06-01 14:29:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:29:07 --> Final output sent to browser
DEBUG - 2025-06-01 14:29:07 --> Total execution time: 0.0279
INFO - 2025-06-01 14:29:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:29:07 --> Controller Class Initialized
INFO - 2025-06-01 14:29:07 --> Helper loaded: form_helper
INFO - 2025-06-01 14:29:07 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:29:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:29:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:29:07 --> Model "Crud" initialized
INFO - 2025-06-01 14:29:07 --> Final output sent to browser
DEBUG - 2025-06-01 14:29:07 --> Total execution time: 0.0466
INFO - 2025-06-01 14:29:55 --> Config Class Initialized
INFO - 2025-06-01 14:29:55 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:29:55 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:29:55 --> Utf8 Class Initialized
INFO - 2025-06-01 14:29:55 --> URI Class Initialized
INFO - 2025-06-01 14:29:55 --> Router Class Initialized
INFO - 2025-06-01 14:29:55 --> Output Class Initialized
INFO - 2025-06-01 14:29:55 --> Security Class Initialized
DEBUG - 2025-06-01 14:29:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:29:55 --> Input Class Initialized
INFO - 2025-06-01 14:29:55 --> Config Class Initialized
INFO - 2025-06-01 14:29:55 --> Language Class Initialized
INFO - 2025-06-01 14:29:55 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:29:55 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:29:55 --> Loader Class Initialized
INFO - 2025-06-01 14:29:55 --> Utf8 Class Initialized
INFO - 2025-06-01 14:29:55 --> Helper loaded: url_helper
INFO - 2025-06-01 14:29:55 --> URI Class Initialized
INFO - 2025-06-01 14:29:55 --> Helper loaded: file_helper
INFO - 2025-06-01 14:29:55 --> Router Class Initialized
INFO - 2025-06-01 14:29:55 --> Output Class Initialized
INFO - 2025-06-01 14:29:55 --> Security Class Initialized
INFO - 2025-06-01 14:29:55 --> Database Driver Class Initialized
DEBUG - 2025-06-01 14:29:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:29:55 --> Input Class Initialized
INFO - 2025-06-01 14:29:55 --> Language Class Initialized
INFO - 2025-06-01 14:29:55 --> Loader Class Initialized
INFO - 2025-06-01 14:29:55 --> Helper loaded: url_helper
INFO - 2025-06-01 14:29:55 --> Helper loaded: file_helper
INFO - 2025-06-01 14:29:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:29:55 --> Email Class Initialized
DEBUG - 2025-06-01 14:29:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:29:55 --> Email Class Initialized
INFO - 2025-06-01 14:29:55 --> Session: Class initialized using 'files' driver.
DEBUG - 2025-06-01 14:29:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:29:55 --> Controller Class Initialized
INFO - 2025-06-01 14:29:55 --> Helper loaded: form_helper
INFO - 2025-06-01 14:29:55 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:29:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:29:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:29:55 --> Model "Crud" initialized
INFO - 2025-06-01 14:29:55 --> Final output sent to browser
DEBUG - 2025-06-01 14:29:55 --> Total execution time: 0.0135
INFO - 2025-06-01 14:29:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:29:55 --> Controller Class Initialized
INFO - 2025-06-01 14:29:55 --> Helper loaded: form_helper
INFO - 2025-06-01 14:29:55 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:29:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:29:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:29:55 --> Model "Crud" initialized
INFO - 2025-06-01 14:29:55 --> Final output sent to browser
DEBUG - 2025-06-01 14:29:55 --> Total execution time: 0.0240
INFO - 2025-06-01 14:30:55 --> Config Class Initialized
INFO - 2025-06-01 14:30:55 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:30:55 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:30:55 --> Utf8 Class Initialized
INFO - 2025-06-01 14:30:55 --> Config Class Initialized
INFO - 2025-06-01 14:30:55 --> URI Class Initialized
INFO - 2025-06-01 14:30:55 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:30:55 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:30:55 --> Router Class Initialized
INFO - 2025-06-01 14:30:55 --> Utf8 Class Initialized
INFO - 2025-06-01 14:30:55 --> Output Class Initialized
INFO - 2025-06-01 14:30:55 --> URI Class Initialized
INFO - 2025-06-01 14:30:55 --> Security Class Initialized
INFO - 2025-06-01 14:30:55 --> Router Class Initialized
DEBUG - 2025-06-01 14:30:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:30:55 --> Output Class Initialized
INFO - 2025-06-01 14:30:55 --> Input Class Initialized
INFO - 2025-06-01 14:30:55 --> Security Class Initialized
INFO - 2025-06-01 14:30:55 --> Language Class Initialized
DEBUG - 2025-06-01 14:30:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:30:55 --> Input Class Initialized
INFO - 2025-06-01 14:30:55 --> Language Class Initialized
INFO - 2025-06-01 14:30:55 --> Loader Class Initialized
INFO - 2025-06-01 14:30:55 --> Loader Class Initialized
INFO - 2025-06-01 14:30:55 --> Helper loaded: url_helper
INFO - 2025-06-01 14:30:55 --> Helper loaded: url_helper
INFO - 2025-06-01 14:30:55 --> Helper loaded: file_helper
INFO - 2025-06-01 14:30:55 --> Helper loaded: file_helper
INFO - 2025-06-01 14:30:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:30:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:30:55 --> Email Class Initialized
INFO - 2025-06-01 14:30:55 --> Email Class Initialized
DEBUG - 2025-06-01 14:30:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-01 14:30:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:30:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:30:55 --> Controller Class Initialized
INFO - 2025-06-01 14:30:55 --> Helper loaded: form_helper
INFO - 2025-06-01 14:30:55 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:30:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:30:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:30:55 --> Model "Crud" initialized
INFO - 2025-06-01 14:30:55 --> Final output sent to browser
DEBUG - 2025-06-01 14:30:55 --> Total execution time: 0.0155
INFO - 2025-06-01 14:30:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:30:55 --> Controller Class Initialized
INFO - 2025-06-01 14:30:55 --> Helper loaded: form_helper
INFO - 2025-06-01 14:30:55 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:30:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:30:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:30:55 --> Model "Crud" initialized
INFO - 2025-06-01 14:30:55 --> Final output sent to browser
DEBUG - 2025-06-01 14:30:55 --> Total execution time: 0.0272
INFO - 2025-06-01 14:31:54 --> Config Class Initialized
INFO - 2025-06-01 14:31:54 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:31:54 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:31:54 --> Utf8 Class Initialized
INFO - 2025-06-01 14:31:54 --> URI Class Initialized
INFO - 2025-06-01 14:31:54 --> Config Class Initialized
INFO - 2025-06-01 14:31:54 --> Router Class Initialized
INFO - 2025-06-01 14:31:54 --> Hooks Class Initialized
INFO - 2025-06-01 14:31:54 --> Output Class Initialized
DEBUG - 2025-06-01 14:31:54 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:31:54 --> Utf8 Class Initialized
INFO - 2025-06-01 14:31:54 --> Security Class Initialized
INFO - 2025-06-01 14:31:54 --> URI Class Initialized
DEBUG - 2025-06-01 14:31:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:31:54 --> Input Class Initialized
INFO - 2025-06-01 14:31:54 --> Router Class Initialized
INFO - 2025-06-01 14:31:54 --> Language Class Initialized
INFO - 2025-06-01 14:31:54 --> Output Class Initialized
INFO - 2025-06-01 14:31:54 --> Security Class Initialized
INFO - 2025-06-01 14:31:54 --> Loader Class Initialized
DEBUG - 2025-06-01 14:31:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:31:54 --> Input Class Initialized
INFO - 2025-06-01 14:31:54 --> Helper loaded: url_helper
INFO - 2025-06-01 14:31:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:31:54 --> Language Class Initialized
INFO - 2025-06-01 14:31:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:31:54 --> Loader Class Initialized
INFO - 2025-06-01 14:31:54 --> Helper loaded: url_helper
INFO - 2025-06-01 14:31:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:31:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:31:54 --> Email Class Initialized
INFO - 2025-06-01 14:31:54 --> Email Class Initialized
DEBUG - 2025-06-01 14:31:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-01 14:31:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:31:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:31:54 --> Controller Class Initialized
INFO - 2025-06-01 14:31:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:31:54 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:31:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:31:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:31:54 --> Model "Crud" initialized
INFO - 2025-06-01 14:31:54 --> Final output sent to browser
DEBUG - 2025-06-01 14:31:54 --> Total execution time: 0.0171
INFO - 2025-06-01 14:31:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:31:54 --> Controller Class Initialized
INFO - 2025-06-01 14:31:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:31:54 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:31:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:31:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:31:54 --> Model "Crud" initialized
INFO - 2025-06-01 14:31:54 --> Final output sent to browser
DEBUG - 2025-06-01 14:31:54 --> Total execution time: 0.0302
INFO - 2025-06-01 14:32:54 --> Config Class Initialized
INFO - 2025-06-01 14:32:54 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:32:54 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:32:54 --> Utf8 Class Initialized
INFO - 2025-06-01 14:32:54 --> URI Class Initialized
INFO - 2025-06-01 14:32:54 --> Router Class Initialized
INFO - 2025-06-01 14:32:54 --> Output Class Initialized
INFO - 2025-06-01 14:32:54 --> Security Class Initialized
DEBUG - 2025-06-01 14:32:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:32:54 --> Input Class Initialized
INFO - 2025-06-01 14:32:54 --> Language Class Initialized
INFO - 2025-06-01 14:32:54 --> Loader Class Initialized
INFO - 2025-06-01 14:32:54 --> Helper loaded: url_helper
INFO - 2025-06-01 14:32:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:32:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:32:54 --> Config Class Initialized
INFO - 2025-06-01 14:32:54 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:32:54 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:32:54 --> Utf8 Class Initialized
INFO - 2025-06-01 14:32:54 --> URI Class Initialized
INFO - 2025-06-01 14:32:54 --> Router Class Initialized
INFO - 2025-06-01 14:32:54 --> Output Class Initialized
INFO - 2025-06-01 14:32:54 --> Security Class Initialized
DEBUG - 2025-06-01 14:32:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:32:54 --> Input Class Initialized
INFO - 2025-06-01 14:32:54 --> Language Class Initialized
INFO - 2025-06-01 14:32:54 --> Loader Class Initialized
INFO - 2025-06-01 14:32:54 --> Helper loaded: url_helper
INFO - 2025-06-01 14:32:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:32:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:32:54 --> Email Class Initialized
DEBUG - 2025-06-01 14:32:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:32:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:32:54 --> Controller Class Initialized
INFO - 2025-06-01 14:32:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:32:54 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:32:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:32:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:32:54 --> Email Class Initialized
DEBUG - 2025-06-01 14:32:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:32:54 --> Model "Crud" initialized
INFO - 2025-06-01 14:32:54 --> Final output sent to browser
DEBUG - 2025-06-01 14:32:54 --> Total execution time: 0.0176
INFO - 2025-06-01 14:32:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:32:54 --> Controller Class Initialized
INFO - 2025-06-01 14:32:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:32:54 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:32:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:32:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:32:54 --> Model "Crud" initialized
INFO - 2025-06-01 14:32:54 --> Final output sent to browser
DEBUG - 2025-06-01 14:32:54 --> Total execution time: 0.0268
INFO - 2025-06-01 14:33:54 --> Config Class Initialized
INFO - 2025-06-01 14:33:54 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:33:54 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:33:54 --> Utf8 Class Initialized
INFO - 2025-06-01 14:33:54 --> URI Class Initialized
INFO - 2025-06-01 14:33:54 --> Router Class Initialized
INFO - 2025-06-01 14:33:54 --> Output Class Initialized
INFO - 2025-06-01 14:33:54 --> Security Class Initialized
DEBUG - 2025-06-01 14:33:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:33:54 --> Input Class Initialized
INFO - 2025-06-01 14:33:54 --> Language Class Initialized
INFO - 2025-06-01 14:33:54 --> Loader Class Initialized
INFO - 2025-06-01 14:33:54 --> Helper loaded: url_helper
INFO - 2025-06-01 14:33:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:33:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:33:54 --> Config Class Initialized
INFO - 2025-06-01 14:33:54 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:33:54 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:33:54 --> Utf8 Class Initialized
INFO - 2025-06-01 14:33:54 --> URI Class Initialized
INFO - 2025-06-01 14:33:54 --> Router Class Initialized
INFO - 2025-06-01 14:33:54 --> Output Class Initialized
INFO - 2025-06-01 14:33:54 --> Security Class Initialized
DEBUG - 2025-06-01 14:33:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:33:54 --> Input Class Initialized
INFO - 2025-06-01 14:33:54 --> Language Class Initialized
INFO - 2025-06-01 14:33:54 --> Loader Class Initialized
INFO - 2025-06-01 14:33:54 --> Helper loaded: url_helper
INFO - 2025-06-01 14:33:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:33:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:33:54 --> Email Class Initialized
INFO - 2025-06-01 14:33:54 --> Email Class Initialized
DEBUG - 2025-06-01 14:33:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-01 14:33:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:33:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:33:54 --> Controller Class Initialized
INFO - 2025-06-01 14:33:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:33:54 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:33:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:33:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:33:54 --> Model "Crud" initialized
INFO - 2025-06-01 14:33:54 --> Final output sent to browser
DEBUG - 2025-06-01 14:33:54 --> Total execution time: 0.0169
INFO - 2025-06-01 14:33:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:33:54 --> Controller Class Initialized
INFO - 2025-06-01 14:33:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:33:54 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:33:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:33:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:33:54 --> Model "Crud" initialized
INFO - 2025-06-01 14:33:54 --> Final output sent to browser
DEBUG - 2025-06-01 14:33:54 --> Total execution time: 0.0269
INFO - 2025-06-01 14:34:55 --> Config Class Initialized
INFO - 2025-06-01 14:34:55 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:34:55 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:34:55 --> Utf8 Class Initialized
INFO - 2025-06-01 14:34:55 --> URI Class Initialized
INFO - 2025-06-01 14:34:55 --> Router Class Initialized
INFO - 2025-06-01 14:34:55 --> Output Class Initialized
INFO - 2025-06-01 14:34:55 --> Security Class Initialized
DEBUG - 2025-06-01 14:34:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:34:55 --> Input Class Initialized
INFO - 2025-06-01 14:34:55 --> Language Class Initialized
INFO - 2025-06-01 14:34:55 --> Loader Class Initialized
INFO - 2025-06-01 14:34:55 --> Helper loaded: url_helper
INFO - 2025-06-01 14:34:55 --> Helper loaded: file_helper
INFO - 2025-06-01 14:34:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:34:55 --> Email Class Initialized
INFO - 2025-06-01 14:34:55 --> Config Class Initialized
INFO - 2025-06-01 14:34:55 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:34:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-01 14:34:55 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:34:55 --> Utf8 Class Initialized
INFO - 2025-06-01 14:34:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:34:55 --> URI Class Initialized
INFO - 2025-06-01 14:34:55 --> Controller Class Initialized
INFO - 2025-06-01 14:34:55 --> Helper loaded: form_helper
INFO - 2025-06-01 14:34:55 --> Router Class Initialized
INFO - 2025-06-01 14:34:55 --> Form Validation Class Initialized
INFO - 2025-06-01 14:34:55 --> Output Class Initialized
DEBUG - 2025-06-01 14:34:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:34:55 --> Security Class Initialized
DEBUG - 2025-06-01 14:34:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:34:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:34:55 --> Input Class Initialized
INFO - 2025-06-01 14:34:55 --> Language Class Initialized
INFO - 2025-06-01 14:34:55 --> Loader Class Initialized
INFO - 2025-06-01 14:34:55 --> Helper loaded: url_helper
INFO - 2025-06-01 14:34:55 --> Helper loaded: file_helper
INFO - 2025-06-01 14:34:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:34:55 --> Model "Crud" initialized
INFO - 2025-06-01 14:34:55 --> Email Class Initialized
DEBUG - 2025-06-01 14:34:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:34:55 --> Final output sent to browser
DEBUG - 2025-06-01 14:34:55 --> Total execution time: 0.0203
INFO - 2025-06-01 14:34:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:34:55 --> Controller Class Initialized
INFO - 2025-06-01 14:34:55 --> Helper loaded: form_helper
INFO - 2025-06-01 14:34:55 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:34:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:34:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:34:55 --> Model "Crud" initialized
INFO - 2025-06-01 14:34:55 --> Final output sent to browser
DEBUG - 2025-06-01 14:34:55 --> Total execution time: 0.0294
INFO - 2025-06-01 14:35:54 --> Config Class Initialized
INFO - 2025-06-01 14:35:54 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:35:54 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:35:54 --> Utf8 Class Initialized
INFO - 2025-06-01 14:35:54 --> URI Class Initialized
INFO - 2025-06-01 14:35:54 --> Router Class Initialized
INFO - 2025-06-01 14:35:54 --> Output Class Initialized
INFO - 2025-06-01 14:35:54 --> Security Class Initialized
DEBUG - 2025-06-01 14:35:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:35:54 --> Input Class Initialized
INFO - 2025-06-01 14:35:54 --> Language Class Initialized
INFO - 2025-06-01 14:35:54 --> Loader Class Initialized
INFO - 2025-06-01 14:35:54 --> Helper loaded: url_helper
INFO - 2025-06-01 14:35:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:35:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:35:54 --> Config Class Initialized
INFO - 2025-06-01 14:35:54 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:35:54 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:35:54 --> Utf8 Class Initialized
INFO - 2025-06-01 14:35:54 --> URI Class Initialized
INFO - 2025-06-01 14:35:54 --> Router Class Initialized
INFO - 2025-06-01 14:35:54 --> Output Class Initialized
INFO - 2025-06-01 14:35:54 --> Security Class Initialized
DEBUG - 2025-06-01 14:35:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:35:54 --> Input Class Initialized
INFO - 2025-06-01 14:35:54 --> Language Class Initialized
INFO - 2025-06-01 14:35:54 --> Loader Class Initialized
INFO - 2025-06-01 14:35:54 --> Helper loaded: url_helper
INFO - 2025-06-01 14:35:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:35:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:35:54 --> Email Class Initialized
DEBUG - 2025-06-01 14:35:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:35:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:35:54 --> Controller Class Initialized
INFO - 2025-06-01 14:35:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:35:54 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:35:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:35:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:35:54 --> Email Class Initialized
DEBUG - 2025-06-01 14:35:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:35:54 --> Model "Crud" initialized
INFO - 2025-06-01 14:35:54 --> Final output sent to browser
DEBUG - 2025-06-01 14:35:54 --> Total execution time: 0.0228
INFO - 2025-06-01 14:35:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:35:54 --> Controller Class Initialized
INFO - 2025-06-01 14:35:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:35:54 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:35:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:35:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:35:54 --> Model "Crud" initialized
INFO - 2025-06-01 14:35:54 --> Final output sent to browser
DEBUG - 2025-06-01 14:35:54 --> Total execution time: 0.0330
INFO - 2025-06-01 14:36:55 --> Config Class Initialized
INFO - 2025-06-01 14:36:55 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:36:55 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:36:55 --> Utf8 Class Initialized
INFO - 2025-06-01 14:36:55 --> URI Class Initialized
INFO - 2025-06-01 14:36:55 --> Router Class Initialized
INFO - 2025-06-01 14:36:55 --> Output Class Initialized
INFO - 2025-06-01 14:36:55 --> Security Class Initialized
DEBUG - 2025-06-01 14:36:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:36:55 --> Input Class Initialized
INFO - 2025-06-01 14:36:55 --> Language Class Initialized
INFO - 2025-06-01 14:36:55 --> Loader Class Initialized
INFO - 2025-06-01 14:36:55 --> Helper loaded: url_helper
INFO - 2025-06-01 14:36:55 --> Helper loaded: file_helper
INFO - 2025-06-01 14:36:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:36:55 --> Email Class Initialized
DEBUG - 2025-06-01 14:36:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:36:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:36:55 --> Controller Class Initialized
INFO - 2025-06-01 14:36:55 --> Helper loaded: form_helper
INFO - 2025-06-01 14:36:55 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:36:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:36:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:36:55 --> Model "Crud" initialized
INFO - 2025-06-01 14:36:55 --> Config Class Initialized
INFO - 2025-06-01 14:36:55 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:36:55 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:36:55 --> Utf8 Class Initialized
INFO - 2025-06-01 14:36:55 --> URI Class Initialized
INFO - 2025-06-01 14:36:55 --> Router Class Initialized
INFO - 2025-06-01 14:36:55 --> Output Class Initialized
INFO - 2025-06-01 14:36:55 --> Security Class Initialized
DEBUG - 2025-06-01 14:36:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:36:55 --> Input Class Initialized
INFO - 2025-06-01 14:36:55 --> Language Class Initialized
INFO - 2025-06-01 14:36:55 --> Loader Class Initialized
INFO - 2025-06-01 14:36:55 --> Helper loaded: url_helper
INFO - 2025-06-01 14:36:55 --> Helper loaded: file_helper
INFO - 2025-06-01 14:36:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:36:55 --> Email Class Initialized
DEBUG - 2025-06-01 14:36:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:36:55 --> Final output sent to browser
DEBUG - 2025-06-01 14:36:55 --> Total execution time: 0.0269
INFO - 2025-06-01 14:36:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:36:55 --> Controller Class Initialized
INFO - 2025-06-01 14:36:55 --> Helper loaded: form_helper
INFO - 2025-06-01 14:36:55 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:36:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:36:55 --> Database Driver Class Initialized
INFO - 2025-06-01 14:36:55 --> Model "Crud" initialized
INFO - 2025-06-01 14:36:55 --> Final output sent to browser
DEBUG - 2025-06-01 14:36:55 --> Total execution time: 0.0246
INFO - 2025-06-01 14:37:54 --> Config Class Initialized
INFO - 2025-06-01 14:37:54 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:37:54 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:37:54 --> Utf8 Class Initialized
INFO - 2025-06-01 14:37:54 --> URI Class Initialized
INFO - 2025-06-01 14:37:54 --> Router Class Initialized
INFO - 2025-06-01 14:37:54 --> Output Class Initialized
INFO - 2025-06-01 14:37:54 --> Security Class Initialized
DEBUG - 2025-06-01 14:37:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:37:54 --> Input Class Initialized
INFO - 2025-06-01 14:37:54 --> Language Class Initialized
INFO - 2025-06-01 14:37:54 --> Loader Class Initialized
INFO - 2025-06-01 14:37:54 --> Helper loaded: url_helper
INFO - 2025-06-01 14:37:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:37:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:37:54 --> Config Class Initialized
INFO - 2025-06-01 14:37:54 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:37:54 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:37:54 --> Utf8 Class Initialized
INFO - 2025-06-01 14:37:54 --> URI Class Initialized
INFO - 2025-06-01 14:37:54 --> Router Class Initialized
INFO - 2025-06-01 14:37:54 --> Output Class Initialized
INFO - 2025-06-01 14:37:54 --> Security Class Initialized
DEBUG - 2025-06-01 14:37:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:37:54 --> Input Class Initialized
INFO - 2025-06-01 14:37:54 --> Language Class Initialized
INFO - 2025-06-01 14:37:54 --> Loader Class Initialized
INFO - 2025-06-01 14:37:54 --> Helper loaded: url_helper
INFO - 2025-06-01 14:37:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:37:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:37:54 --> Email Class Initialized
DEBUG - 2025-06-01 14:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:37:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:37:54 --> Controller Class Initialized
INFO - 2025-06-01 14:37:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:37:54 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:37:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:37:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:37:54 --> Email Class Initialized
DEBUG - 2025-06-01 14:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:37:54 --> Model "Crud" initialized
INFO - 2025-06-01 14:37:54 --> Final output sent to browser
DEBUG - 2025-06-01 14:37:54 --> Total execution time: 0.0176
INFO - 2025-06-01 14:37:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:37:54 --> Controller Class Initialized
INFO - 2025-06-01 14:37:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:37:54 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:37:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:37:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:37:54 --> Model "Crud" initialized
INFO - 2025-06-01 14:37:54 --> Final output sent to browser
DEBUG - 2025-06-01 14:37:54 --> Total execution time: 0.0306
INFO - 2025-06-01 14:38:54 --> Config Class Initialized
INFO - 2025-06-01 14:38:54 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:38:54 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:38:54 --> Utf8 Class Initialized
INFO - 2025-06-01 14:38:54 --> URI Class Initialized
INFO - 2025-06-01 14:38:54 --> Router Class Initialized
INFO - 2025-06-01 14:38:54 --> Output Class Initialized
INFO - 2025-06-01 14:38:54 --> Security Class Initialized
DEBUG - 2025-06-01 14:38:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:38:54 --> Input Class Initialized
INFO - 2025-06-01 14:38:54 --> Language Class Initialized
INFO - 2025-06-01 14:38:54 --> Loader Class Initialized
INFO - 2025-06-01 14:38:54 --> Helper loaded: url_helper
INFO - 2025-06-01 14:38:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:38:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:38:54 --> Config Class Initialized
INFO - 2025-06-01 14:38:54 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:38:54 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:38:54 --> Utf8 Class Initialized
INFO - 2025-06-01 14:38:54 --> URI Class Initialized
INFO - 2025-06-01 14:38:54 --> Router Class Initialized
INFO - 2025-06-01 14:38:54 --> Output Class Initialized
INFO - 2025-06-01 14:38:54 --> Security Class Initialized
DEBUG - 2025-06-01 14:38:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:38:54 --> Input Class Initialized
INFO - 2025-06-01 14:38:54 --> Language Class Initialized
INFO - 2025-06-01 14:38:54 --> Loader Class Initialized
INFO - 2025-06-01 14:38:54 --> Helper loaded: url_helper
INFO - 2025-06-01 14:38:54 --> Helper loaded: file_helper
INFO - 2025-06-01 14:38:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:38:54 --> Email Class Initialized
DEBUG - 2025-06-01 14:38:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:38:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:38:54 --> Controller Class Initialized
INFO - 2025-06-01 14:38:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:38:54 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:38:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:38:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:38:54 --> Email Class Initialized
DEBUG - 2025-06-01 14:38:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:38:54 --> Model "Crud" initialized
INFO - 2025-06-01 14:38:54 --> Final output sent to browser
DEBUG - 2025-06-01 14:38:54 --> Total execution time: 0.0168
INFO - 2025-06-01 14:38:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:38:54 --> Controller Class Initialized
INFO - 2025-06-01 14:38:54 --> Helper loaded: form_helper
INFO - 2025-06-01 14:38:54 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:38:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:38:54 --> Database Driver Class Initialized
INFO - 2025-06-01 14:38:54 --> Model "Crud" initialized
INFO - 2025-06-01 14:38:54 --> Final output sent to browser
DEBUG - 2025-06-01 14:38:54 --> Total execution time: 0.0251
INFO - 2025-06-01 14:38:58 --> Config Class Initialized
INFO - 2025-06-01 14:38:58 --> Config Class Initialized
INFO - 2025-06-01 14:38:58 --> Hooks Class Initialized
INFO - 2025-06-01 14:38:58 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:38:58 --> UTF-8 Support Enabled
DEBUG - 2025-06-01 14:38:58 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:38:58 --> Utf8 Class Initialized
INFO - 2025-06-01 14:38:58 --> Utf8 Class Initialized
INFO - 2025-06-01 14:38:58 --> URI Class Initialized
INFO - 2025-06-01 14:38:58 --> URI Class Initialized
INFO - 2025-06-01 14:38:58 --> Router Class Initialized
INFO - 2025-06-01 14:38:58 --> Router Class Initialized
INFO - 2025-06-01 14:38:58 --> Output Class Initialized
INFO - 2025-06-01 14:38:58 --> Output Class Initialized
INFO - 2025-06-01 14:38:58 --> Security Class Initialized
INFO - 2025-06-01 14:38:58 --> Security Class Initialized
DEBUG - 2025-06-01 14:38:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:38:58 --> Input Class Initialized
DEBUG - 2025-06-01 14:38:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:38:58 --> Language Class Initialized
INFO - 2025-06-01 14:38:58 --> Input Class Initialized
INFO - 2025-06-01 14:38:58 --> Language Class Initialized
INFO - 2025-06-01 14:38:58 --> Loader Class Initialized
INFO - 2025-06-01 14:38:58 --> Loader Class Initialized
INFO - 2025-06-01 14:38:58 --> Helper loaded: url_helper
INFO - 2025-06-01 14:38:58 --> Helper loaded: url_helper
INFO - 2025-06-01 14:38:58 --> Helper loaded: file_helper
INFO - 2025-06-01 14:38:58 --> Helper loaded: file_helper
INFO - 2025-06-01 14:38:58 --> Database Driver Class Initialized
INFO - 2025-06-01 14:38:58 --> Database Driver Class Initialized
INFO - 2025-06-01 14:38:58 --> Email Class Initialized
DEBUG - 2025-06-01 14:38:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:38:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:38:58 --> Controller Class Initialized
INFO - 2025-06-01 14:38:58 --> Helper loaded: form_helper
INFO - 2025-06-01 14:38:58 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:38:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:38:58 --> Database Driver Class Initialized
INFO - 2025-06-01 14:38:58 --> Email Class Initialized
INFO - 2025-06-01 14:38:58 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:38:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:38:58 --> Final output sent to browser
DEBUG - 2025-06-01 14:38:58 --> Total execution time: 0.0341
INFO - 2025-06-01 14:38:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:38:58 --> Controller Class Initialized
INFO - 2025-06-01 14:38:58 --> Helper loaded: form_helper
INFO - 2025-06-01 14:38:58 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:38:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:38:58 --> Database Driver Class Initialized
INFO - 2025-06-01 14:38:58 --> Model "Crud" initialized
INFO - 2025-06-01 14:38:58 --> Final output sent to browser
DEBUG - 2025-06-01 14:38:58 --> Total execution time: 0.0559
INFO - 2025-06-01 14:39:03 --> Config Class Initialized
INFO - 2025-06-01 14:39:03 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:39:03 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:39:03 --> Utf8 Class Initialized
INFO - 2025-06-01 14:39:03 --> URI Class Initialized
INFO - 2025-06-01 14:39:03 --> Router Class Initialized
INFO - 2025-06-01 14:39:03 --> Output Class Initialized
INFO - 2025-06-01 14:39:03 --> Security Class Initialized
DEBUG - 2025-06-01 14:39:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:39:03 --> Input Class Initialized
INFO - 2025-06-01 14:39:03 --> Language Class Initialized
INFO - 2025-06-01 14:39:03 --> Loader Class Initialized
INFO - 2025-06-01 14:39:03 --> Helper loaded: url_helper
INFO - 2025-06-01 14:39:03 --> Helper loaded: file_helper
INFO - 2025-06-01 14:39:03 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:03 --> Email Class Initialized
DEBUG - 2025-06-01 14:39:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:39:03 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:39:03 --> Controller Class Initialized
INFO - 2025-06-01 14:39:03 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:39:03 --> Helper loaded: form_helper
INFO - 2025-06-01 14:39:03 --> Form Validation Class Initialized
INFO - 2025-06-01 14:39:03 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:03 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:39:03 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:39:03 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:39:03 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-06-01 14:39:03 --> File loaded: /var/www/html/hris_lnd/application/views/lnd/request-training.php
INFO - 2025-06-01 14:39:03 --> Final output sent to browser
DEBUG - 2025-06-01 14:39:03 --> Total execution time: 0.0355
INFO - 2025-06-01 14:39:04 --> Config Class Initialized
INFO - 2025-06-01 14:39:04 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:39:04 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:39:04 --> Utf8 Class Initialized
INFO - 2025-06-01 14:39:04 --> URI Class Initialized
INFO - 2025-06-01 14:39:04 --> Router Class Initialized
INFO - 2025-06-01 14:39:04 --> Output Class Initialized
INFO - 2025-06-01 14:39:04 --> Security Class Initialized
DEBUG - 2025-06-01 14:39:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:39:04 --> Input Class Initialized
INFO - 2025-06-01 14:39:04 --> Language Class Initialized
INFO - 2025-06-01 14:39:04 --> Loader Class Initialized
INFO - 2025-06-01 14:39:04 --> Helper loaded: url_helper
INFO - 2025-06-01 14:39:04 --> Helper loaded: file_helper
INFO - 2025-06-01 14:39:04 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:04 --> Email Class Initialized
DEBUG - 2025-06-01 14:39:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:39:04 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:39:04 --> Controller Class Initialized
INFO - 2025-06-01 14:39:04 --> Model "TrainingActivityModel" initialized
INFO - 2025-06-01 14:39:04 --> Helper loaded: form_helper
INFO - 2025-06-01 14:39:04 --> Form Validation Class Initialized
INFO - 2025-06-01 14:39:04 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:04 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:39:04 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:39:04 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:39:04 --> Final output sent to browser
DEBUG - 2025-06-01 14:39:04 --> Total execution time: 0.0332
INFO - 2025-06-01 14:39:05 --> Config Class Initialized
INFO - 2025-06-01 14:39:05 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:39:05 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:39:05 --> Utf8 Class Initialized
INFO - 2025-06-01 14:39:05 --> URI Class Initialized
INFO - 2025-06-01 14:39:05 --> Router Class Initialized
INFO - 2025-06-01 14:39:05 --> Output Class Initialized
INFO - 2025-06-01 14:39:05 --> Security Class Initialized
DEBUG - 2025-06-01 14:39:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:39:05 --> Input Class Initialized
INFO - 2025-06-01 14:39:05 --> Language Class Initialized
INFO - 2025-06-01 14:39:05 --> Loader Class Initialized
INFO - 2025-06-01 14:39:05 --> Helper loaded: url_helper
INFO - 2025-06-01 14:39:05 --> Helper loaded: file_helper
INFO - 2025-06-01 14:39:05 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:05 --> Email Class Initialized
DEBUG - 2025-06-01 14:39:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:39:05 --> Config Class Initialized
INFO - 2025-06-01 14:39:05 --> Hooks Class Initialized
INFO - 2025-06-01 14:39:05 --> Session: Class initialized using 'files' driver.
DEBUG - 2025-06-01 14:39:05 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:39:05 --> Utf8 Class Initialized
INFO - 2025-06-01 14:39:05 --> Controller Class Initialized
INFO - 2025-06-01 14:39:05 --> URI Class Initialized
INFO - 2025-06-01 14:39:05 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:39:05 --> Router Class Initialized
INFO - 2025-06-01 14:39:05 --> Output Class Initialized
INFO - 2025-06-01 14:39:05 --> Helper loaded: form_helper
INFO - 2025-06-01 14:39:05 --> Security Class Initialized
INFO - 2025-06-01 14:39:05 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:39:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:39:05 --> Input Class Initialized
INFO - 2025-06-01 14:39:05 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:05 --> Language Class Initialized
INFO - 2025-06-01 14:39:05 --> Loader Class Initialized
INFO - 2025-06-01 14:39:05 --> Helper loaded: url_helper
INFO - 2025-06-01 14:39:05 --> Helper loaded: file_helper
INFO - 2025-06-01 14:39:05 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:05 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:39:05 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:39:05 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:39:05 --> Email Class Initialized
DEBUG - 2025-06-01 14:39:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:39:05 --> Final output sent to browser
DEBUG - 2025-06-01 14:39:05 --> Total execution time: 0.0091
INFO - 2025-06-01 14:39:05 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:39:05 --> Controller Class Initialized
INFO - 2025-06-01 14:39:05 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:39:05 --> Helper loaded: form_helper
INFO - 2025-06-01 14:39:05 --> Form Validation Class Initialized
INFO - 2025-06-01 14:39:05 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:05 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:39:05 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:39:05 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:39:05 --> Config Class Initialized
INFO - 2025-06-01 14:39:05 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:39:05 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:39:05 --> Utf8 Class Initialized
INFO - 2025-06-01 14:39:05 --> URI Class Initialized
INFO - 2025-06-01 14:39:05 --> Router Class Initialized
INFO - 2025-06-01 14:39:05 --> Output Class Initialized
INFO - 2025-06-01 14:39:05 --> Security Class Initialized
DEBUG - 2025-06-01 14:39:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:39:05 --> Input Class Initialized
INFO - 2025-06-01 14:39:05 --> Language Class Initialized
INFO - 2025-06-01 14:39:05 --> Loader Class Initialized
INFO - 2025-06-01 14:39:05 --> Helper loaded: url_helper
INFO - 2025-06-01 14:39:05 --> Helper loaded: file_helper
INFO - 2025-06-01 14:39:05 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:05 --> Email Class Initialized
DEBUG - 2025-06-01 14:39:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:39:05 --> Final output sent to browser
DEBUG - 2025-06-01 14:39:05 --> Total execution time: 0.0180
INFO - 2025-06-01 14:39:05 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:39:05 --> Controller Class Initialized
INFO - 2025-06-01 14:39:05 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:39:05 --> Helper loaded: form_helper
INFO - 2025-06-01 14:39:05 --> Form Validation Class Initialized
INFO - 2025-06-01 14:39:05 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:05 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:39:05 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:39:05 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:39:05 --> Config Class Initialized
INFO - 2025-06-01 14:39:05 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:39:05 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:39:05 --> Utf8 Class Initialized
INFO - 2025-06-01 14:39:05 --> URI Class Initialized
INFO - 2025-06-01 14:39:05 --> Final output sent to browser
DEBUG - 2025-06-01 14:39:05 --> Total execution time: 0.0162
INFO - 2025-06-01 14:39:05 --> Router Class Initialized
INFO - 2025-06-01 14:39:05 --> Output Class Initialized
INFO - 2025-06-01 14:39:05 --> Security Class Initialized
DEBUG - 2025-06-01 14:39:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:39:05 --> Input Class Initialized
INFO - 2025-06-01 14:39:05 --> Language Class Initialized
INFO - 2025-06-01 14:39:05 --> Loader Class Initialized
INFO - 2025-06-01 14:39:05 --> Helper loaded: url_helper
INFO - 2025-06-01 14:39:05 --> Helper loaded: file_helper
INFO - 2025-06-01 14:39:05 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:05 --> Email Class Initialized
DEBUG - 2025-06-01 14:39:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:39:05 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:39:05 --> Controller Class Initialized
INFO - 2025-06-01 14:39:05 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:39:05 --> Helper loaded: form_helper
INFO - 2025-06-01 14:39:05 --> Form Validation Class Initialized
INFO - 2025-06-01 14:39:05 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:05 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:39:05 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:39:05 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:39:05 --> Final output sent to browser
DEBUG - 2025-06-01 14:39:05 --> Total execution time: 0.0107
INFO - 2025-06-01 14:39:05 --> Config Class Initialized
INFO - 2025-06-01 14:39:05 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:39:05 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:39:05 --> Utf8 Class Initialized
INFO - 2025-06-01 14:39:05 --> URI Class Initialized
INFO - 2025-06-01 14:39:05 --> Router Class Initialized
INFO - 2025-06-01 14:39:05 --> Output Class Initialized
INFO - 2025-06-01 14:39:05 --> Security Class Initialized
DEBUG - 2025-06-01 14:39:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:39:05 --> Input Class Initialized
INFO - 2025-06-01 14:39:05 --> Language Class Initialized
INFO - 2025-06-01 14:39:05 --> Loader Class Initialized
INFO - 2025-06-01 14:39:05 --> Helper loaded: url_helper
INFO - 2025-06-01 14:39:05 --> Helper loaded: file_helper
INFO - 2025-06-01 14:39:05 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:05 --> Email Class Initialized
DEBUG - 2025-06-01 14:39:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:39:05 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:39:05 --> Controller Class Initialized
INFO - 2025-06-01 14:39:05 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:39:05 --> Helper loaded: form_helper
INFO - 2025-06-01 14:39:05 --> Form Validation Class Initialized
INFO - 2025-06-01 14:39:05 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:05 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:39:05 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:39:05 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:39:05 --> Final output sent to browser
DEBUG - 2025-06-01 14:39:05 --> Total execution time: 0.0111
INFO - 2025-06-01 14:39:05 --> Config Class Initialized
INFO - 2025-06-01 14:39:05 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:39:05 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:39:05 --> Utf8 Class Initialized
INFO - 2025-06-01 14:39:05 --> URI Class Initialized
INFO - 2025-06-01 14:39:05 --> Router Class Initialized
INFO - 2025-06-01 14:39:05 --> Output Class Initialized
INFO - 2025-06-01 14:39:05 --> Security Class Initialized
DEBUG - 2025-06-01 14:39:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:39:05 --> Input Class Initialized
INFO - 2025-06-01 14:39:05 --> Language Class Initialized
INFO - 2025-06-01 14:39:05 --> Loader Class Initialized
INFO - 2025-06-01 14:39:05 --> Helper loaded: url_helper
INFO - 2025-06-01 14:39:05 --> Helper loaded: file_helper
INFO - 2025-06-01 14:39:05 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:05 --> Email Class Initialized
DEBUG - 2025-06-01 14:39:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:39:05 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:39:05 --> Controller Class Initialized
INFO - 2025-06-01 14:39:05 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:39:05 --> Helper loaded: form_helper
INFO - 2025-06-01 14:39:05 --> Form Validation Class Initialized
INFO - 2025-06-01 14:39:05 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:05 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:39:05 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:39:05 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:39:05 --> Final output sent to browser
DEBUG - 2025-06-01 14:39:05 --> Total execution time: 0.0383
INFO - 2025-06-01 14:39:07 --> Config Class Initialized
INFO - 2025-06-01 14:39:07 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:39:07 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:39:07 --> Utf8 Class Initialized
INFO - 2025-06-01 14:39:07 --> URI Class Initialized
INFO - 2025-06-01 14:39:07 --> Router Class Initialized
INFO - 2025-06-01 14:39:07 --> Output Class Initialized
INFO - 2025-06-01 14:39:07 --> Security Class Initialized
DEBUG - 2025-06-01 14:39:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:39:07 --> Input Class Initialized
INFO - 2025-06-01 14:39:07 --> Language Class Initialized
INFO - 2025-06-01 14:39:07 --> Loader Class Initialized
INFO - 2025-06-01 14:39:07 --> Helper loaded: url_helper
INFO - 2025-06-01 14:39:07 --> Helper loaded: file_helper
INFO - 2025-06-01 14:39:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:07 --> Email Class Initialized
DEBUG - 2025-06-01 14:39:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:39:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:39:07 --> Controller Class Initialized
INFO - 2025-06-01 14:39:07 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:39:07 --> Helper loaded: form_helper
INFO - 2025-06-01 14:39:07 --> Form Validation Class Initialized
INFO - 2025-06-01 14:39:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:07 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:39:07 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:39:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:39:07 --> Final output sent to browser
DEBUG - 2025-06-01 14:39:07 --> Total execution time: 0.0115
INFO - 2025-06-01 14:39:07 --> Config Class Initialized
INFO - 2025-06-01 14:39:07 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:39:07 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:39:07 --> Utf8 Class Initialized
INFO - 2025-06-01 14:39:07 --> URI Class Initialized
INFO - 2025-06-01 14:39:07 --> Router Class Initialized
INFO - 2025-06-01 14:39:07 --> Output Class Initialized
INFO - 2025-06-01 14:39:07 --> Security Class Initialized
DEBUG - 2025-06-01 14:39:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:39:07 --> Input Class Initialized
INFO - 2025-06-01 14:39:07 --> Language Class Initialized
INFO - 2025-06-01 14:39:07 --> Config Class Initialized
INFO - 2025-06-01 14:39:07 --> Hooks Class Initialized
INFO - 2025-06-01 14:39:07 --> Loader Class Initialized
DEBUG - 2025-06-01 14:39:07 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:39:07 --> Utf8 Class Initialized
INFO - 2025-06-01 14:39:07 --> Helper loaded: url_helper
INFO - 2025-06-01 14:39:07 --> Helper loaded: file_helper
INFO - 2025-06-01 14:39:07 --> URI Class Initialized
INFO - 2025-06-01 14:39:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:07 --> Router Class Initialized
INFO - 2025-06-01 14:39:07 --> Output Class Initialized
INFO - 2025-06-01 14:39:07 --> Security Class Initialized
DEBUG - 2025-06-01 14:39:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:39:07 --> Input Class Initialized
INFO - 2025-06-01 14:39:07 --> Language Class Initialized
INFO - 2025-06-01 14:39:07 --> Loader Class Initialized
INFO - 2025-06-01 14:39:07 --> Helper loaded: url_helper
INFO - 2025-06-01 14:39:07 --> Helper loaded: file_helper
INFO - 2025-06-01 14:39:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:07 --> Email Class Initialized
DEBUG - 2025-06-01 14:39:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:39:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:39:07 --> Controller Class Initialized
INFO - 2025-06-01 14:39:07 --> Helper loaded: form_helper
INFO - 2025-06-01 14:39:07 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:39:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:39:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:07 --> Email Class Initialized
DEBUG - 2025-06-01 14:39:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:39:07 --> Model "Crud" initialized
INFO - 2025-06-01 14:39:07 --> Final output sent to browser
DEBUG - 2025-06-01 14:39:07 --> Total execution time: 0.0144
INFO - 2025-06-01 14:39:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:39:07 --> Controller Class Initialized
INFO - 2025-06-01 14:39:07 --> Helper loaded: form_helper
INFO - 2025-06-01 14:39:07 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:39:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:39:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:07 --> Model "Crud" initialized
INFO - 2025-06-01 14:39:07 --> Final output sent to browser
DEBUG - 2025-06-01 14:39:07 --> Total execution time: 0.0299
INFO - 2025-06-01 14:39:17 --> Config Class Initialized
INFO - 2025-06-01 14:39:17 --> Config Class Initialized
INFO - 2025-06-01 14:39:17 --> Hooks Class Initialized
INFO - 2025-06-01 14:39:17 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:39:17 --> UTF-8 Support Enabled
DEBUG - 2025-06-01 14:39:17 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:39:17 --> Utf8 Class Initialized
INFO - 2025-06-01 14:39:17 --> Utf8 Class Initialized
INFO - 2025-06-01 14:39:17 --> URI Class Initialized
INFO - 2025-06-01 14:39:17 --> URI Class Initialized
INFO - 2025-06-01 14:39:17 --> Router Class Initialized
INFO - 2025-06-01 14:39:17 --> Router Class Initialized
INFO - 2025-06-01 14:39:17 --> Output Class Initialized
INFO - 2025-06-01 14:39:17 --> Output Class Initialized
INFO - 2025-06-01 14:39:17 --> Security Class Initialized
INFO - 2025-06-01 14:39:17 --> Security Class Initialized
DEBUG - 2025-06-01 14:39:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-01 14:39:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:39:17 --> Input Class Initialized
INFO - 2025-06-01 14:39:17 --> Input Class Initialized
INFO - 2025-06-01 14:39:17 --> Language Class Initialized
INFO - 2025-06-01 14:39:17 --> Language Class Initialized
INFO - 2025-06-01 14:39:17 --> Loader Class Initialized
INFO - 2025-06-01 14:39:17 --> Loader Class Initialized
INFO - 2025-06-01 14:39:17 --> Helper loaded: url_helper
INFO - 2025-06-01 14:39:17 --> Helper loaded: url_helper
INFO - 2025-06-01 14:39:17 --> Helper loaded: file_helper
INFO - 2025-06-01 14:39:17 --> Helper loaded: file_helper
INFO - 2025-06-01 14:39:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:17 --> Email Class Initialized
INFO - 2025-06-01 14:39:17 --> Email Class Initialized
DEBUG - 2025-06-01 14:39:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-01 14:39:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:39:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:39:17 --> Controller Class Initialized
INFO - 2025-06-01 14:39:17 --> Helper loaded: form_helper
INFO - 2025-06-01 14:39:17 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:39:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:39:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:17 --> Model "Crud" initialized
INFO - 2025-06-01 14:39:17 --> Final output sent to browser
DEBUG - 2025-06-01 14:39:17 --> Total execution time: 0.0175
INFO - 2025-06-01 14:39:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:39:17 --> Controller Class Initialized
INFO - 2025-06-01 14:39:17 --> Helper loaded: form_helper
INFO - 2025-06-01 14:39:17 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:39:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:39:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:17 --> Model "Crud" initialized
INFO - 2025-06-01 14:39:17 --> Final output sent to browser
DEBUG - 2025-06-01 14:39:17 --> Total execution time: 0.0303
INFO - 2025-06-01 14:39:22 --> Config Class Initialized
INFO - 2025-06-01 14:39:22 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:39:22 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:39:22 --> Utf8 Class Initialized
INFO - 2025-06-01 14:39:22 --> URI Class Initialized
INFO - 2025-06-01 14:39:22 --> Router Class Initialized
INFO - 2025-06-01 14:39:22 --> Output Class Initialized
INFO - 2025-06-01 14:39:22 --> Security Class Initialized
DEBUG - 2025-06-01 14:39:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:39:22 --> Input Class Initialized
INFO - 2025-06-01 14:39:22 --> Language Class Initialized
INFO - 2025-06-01 14:39:22 --> Loader Class Initialized
INFO - 2025-06-01 14:39:22 --> Helper loaded: url_helper
INFO - 2025-06-01 14:39:22 --> Helper loaded: file_helper
INFO - 2025-06-01 14:39:22 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:22 --> Email Class Initialized
DEBUG - 2025-06-01 14:39:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:39:22 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:39:22 --> Controller Class Initialized
INFO - 2025-06-01 14:39:22 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:39:22 --> Helper loaded: form_helper
INFO - 2025-06-01 14:39:22 --> Form Validation Class Initialized
INFO - 2025-06-01 14:39:22 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:22 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:39:22 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:39:22 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:39:22 --> Final output sent to browser
DEBUG - 2025-06-01 14:39:22 --> Total execution time: 0.0780
INFO - 2025-06-01 14:39:26 --> Config Class Initialized
INFO - 2025-06-01 14:39:26 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:39:26 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:39:26 --> Utf8 Class Initialized
INFO - 2025-06-01 14:39:26 --> URI Class Initialized
INFO - 2025-06-01 14:39:26 --> Router Class Initialized
INFO - 2025-06-01 14:39:26 --> Output Class Initialized
INFO - 2025-06-01 14:39:26 --> Security Class Initialized
DEBUG - 2025-06-01 14:39:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:39:26 --> Input Class Initialized
INFO - 2025-06-01 14:39:26 --> Language Class Initialized
INFO - 2025-06-01 14:39:26 --> Loader Class Initialized
INFO - 2025-06-01 14:39:26 --> Helper loaded: url_helper
INFO - 2025-06-01 14:39:26 --> Helper loaded: file_helper
INFO - 2025-06-01 14:39:26 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:26 --> Email Class Initialized
DEBUG - 2025-06-01 14:39:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:39:26 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:39:26 --> Controller Class Initialized
INFO - 2025-06-01 14:39:26 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:39:26 --> Helper loaded: form_helper
INFO - 2025-06-01 14:39:26 --> Form Validation Class Initialized
INFO - 2025-06-01 14:39:26 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:26 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:39:26 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:39:26 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:39:26 --> Final output sent to browser
DEBUG - 2025-06-01 14:39:26 --> Total execution time: 0.0380
INFO - 2025-06-01 14:39:26 --> Config Class Initialized
INFO - 2025-06-01 14:39:26 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:39:26 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:39:26 --> Utf8 Class Initialized
INFO - 2025-06-01 14:39:26 --> URI Class Initialized
INFO - 2025-06-01 14:39:26 --> Router Class Initialized
INFO - 2025-06-01 14:39:26 --> Output Class Initialized
INFO - 2025-06-01 14:39:26 --> Security Class Initialized
DEBUG - 2025-06-01 14:39:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:39:26 --> Input Class Initialized
INFO - 2025-06-01 14:39:26 --> Language Class Initialized
INFO - 2025-06-01 14:39:26 --> Loader Class Initialized
INFO - 2025-06-01 14:39:26 --> Helper loaded: url_helper
INFO - 2025-06-01 14:39:26 --> Helper loaded: file_helper
INFO - 2025-06-01 14:39:26 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:26 --> Email Class Initialized
DEBUG - 2025-06-01 14:39:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:39:26 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:39:26 --> Controller Class Initialized
INFO - 2025-06-01 14:39:26 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:39:26 --> Helper loaded: form_helper
INFO - 2025-06-01 14:39:26 --> Form Validation Class Initialized
INFO - 2025-06-01 14:39:26 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:26 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:39:26 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:39:26 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:39:26 --> Final output sent to browser
DEBUG - 2025-06-01 14:39:26 --> Total execution time: 0.0156
INFO - 2025-06-01 14:39:26 --> Config Class Initialized
INFO - 2025-06-01 14:39:26 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:39:26 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:39:26 --> Utf8 Class Initialized
INFO - 2025-06-01 14:39:26 --> URI Class Initialized
INFO - 2025-06-01 14:39:26 --> Router Class Initialized
INFO - 2025-06-01 14:39:26 --> Output Class Initialized
INFO - 2025-06-01 14:39:26 --> Security Class Initialized
DEBUG - 2025-06-01 14:39:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:39:26 --> Input Class Initialized
INFO - 2025-06-01 14:39:26 --> Language Class Initialized
INFO - 2025-06-01 14:39:26 --> Loader Class Initialized
INFO - 2025-06-01 14:39:26 --> Helper loaded: url_helper
INFO - 2025-06-01 14:39:26 --> Helper loaded: file_helper
INFO - 2025-06-01 14:39:26 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:26 --> Email Class Initialized
DEBUG - 2025-06-01 14:39:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:39:26 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:39:26 --> Controller Class Initialized
INFO - 2025-06-01 14:39:26 --> Model "RequestTrainingModel" initialized
INFO - 2025-06-01 14:39:26 --> Helper loaded: form_helper
INFO - 2025-06-01 14:39:26 --> Form Validation Class Initialized
INFO - 2025-06-01 14:39:26 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:26 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:39:26 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2025-06-01 14:39:26 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:39:26 --> Final output sent to browser
DEBUG - 2025-06-01 14:39:26 --> Total execution time: 0.0087
INFO - 2025-06-01 14:39:27 --> Config Class Initialized
INFO - 2025-06-01 14:39:27 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:39:27 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:39:27 --> Utf8 Class Initialized
INFO - 2025-06-01 14:39:27 --> URI Class Initialized
INFO - 2025-06-01 14:39:27 --> Router Class Initialized
INFO - 2025-06-01 14:39:27 --> Output Class Initialized
INFO - 2025-06-01 14:39:27 --> Security Class Initialized
DEBUG - 2025-06-01 14:39:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:39:27 --> Input Class Initialized
INFO - 2025-06-01 14:39:27 --> Language Class Initialized
INFO - 2025-06-01 14:39:27 --> Loader Class Initialized
INFO - 2025-06-01 14:39:27 --> Helper loaded: url_helper
INFO - 2025-06-01 14:39:27 --> Helper loaded: file_helper
INFO - 2025-06-01 14:39:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:27 --> Email Class Initialized
DEBUG - 2025-06-01 14:39:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:39:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:39:27 --> Controller Class Initialized
INFO - 2025-06-01 14:39:27 --> Helper loaded: form_helper
INFO - 2025-06-01 14:39:27 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:39:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:39:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:27 --> Config Class Initialized
INFO - 2025-06-01 14:39:27 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:39:27 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:39:27 --> Utf8 Class Initialized
INFO - 2025-06-01 14:39:27 --> URI Class Initialized
INFO - 2025-06-01 14:39:27 --> Router Class Initialized
INFO - 2025-06-01 14:39:27 --> Output Class Initialized
INFO - 2025-06-01 14:39:27 --> Security Class Initialized
DEBUG - 2025-06-01 14:39:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:39:27 --> Input Class Initialized
INFO - 2025-06-01 14:39:27 --> Language Class Initialized
INFO - 2025-06-01 14:39:27 --> Loader Class Initialized
INFO - 2025-06-01 14:39:27 --> Helper loaded: url_helper
INFO - 2025-06-01 14:39:27 --> Helper loaded: file_helper
INFO - 2025-06-01 14:39:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:27 --> Model "Crud" initialized
INFO - 2025-06-01 14:39:27 --> Email Class Initialized
DEBUG - 2025-06-01 14:39:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:39:27 --> Final output sent to browser
DEBUG - 2025-06-01 14:39:27 --> Total execution time: 0.0157
INFO - 2025-06-01 14:39:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:39:27 --> Controller Class Initialized
INFO - 2025-06-01 14:39:27 --> Helper loaded: form_helper
INFO - 2025-06-01 14:39:27 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:39:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:39:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:27 --> Model "Crud" initialized
INFO - 2025-06-01 14:39:27 --> Final output sent to browser
DEBUG - 2025-06-01 14:39:27 --> Total execution time: 0.0267
INFO - 2025-06-01 14:39:37 --> Config Class Initialized
INFO - 2025-06-01 14:39:37 --> Config Class Initialized
INFO - 2025-06-01 14:39:37 --> Hooks Class Initialized
INFO - 2025-06-01 14:39:37 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:39:37 --> UTF-8 Support Enabled
DEBUG - 2025-06-01 14:39:37 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:39:37 --> Utf8 Class Initialized
INFO - 2025-06-01 14:39:37 --> Utf8 Class Initialized
INFO - 2025-06-01 14:39:37 --> URI Class Initialized
INFO - 2025-06-01 14:39:37 --> URI Class Initialized
INFO - 2025-06-01 14:39:37 --> Router Class Initialized
INFO - 2025-06-01 14:39:37 --> Router Class Initialized
INFO - 2025-06-01 14:39:37 --> Output Class Initialized
INFO - 2025-06-01 14:39:37 --> Output Class Initialized
INFO - 2025-06-01 14:39:37 --> Security Class Initialized
INFO - 2025-06-01 14:39:37 --> Security Class Initialized
DEBUG - 2025-06-01 14:39:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-01 14:39:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:39:37 --> Input Class Initialized
INFO - 2025-06-01 14:39:37 --> Input Class Initialized
INFO - 2025-06-01 14:39:37 --> Language Class Initialized
INFO - 2025-06-01 14:39:37 --> Language Class Initialized
INFO - 2025-06-01 14:39:37 --> Loader Class Initialized
INFO - 2025-06-01 14:39:37 --> Loader Class Initialized
INFO - 2025-06-01 14:39:37 --> Helper loaded: url_helper
INFO - 2025-06-01 14:39:37 --> Helper loaded: url_helper
INFO - 2025-06-01 14:39:37 --> Helper loaded: file_helper
INFO - 2025-06-01 14:39:37 --> Helper loaded: file_helper
INFO - 2025-06-01 14:39:37 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:37 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:37 --> Email Class Initialized
INFO - 2025-06-01 14:39:37 --> Email Class Initialized
DEBUG - 2025-06-01 14:39:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-01 14:39:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:39:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:39:37 --> Controller Class Initialized
INFO - 2025-06-01 14:39:37 --> Helper loaded: form_helper
INFO - 2025-06-01 14:39:37 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:39:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:39:37 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:37 --> Model "Crud" initialized
INFO - 2025-06-01 14:39:37 --> Final output sent to browser
DEBUG - 2025-06-01 14:39:37 --> Total execution time: 0.0175
INFO - 2025-06-01 14:39:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:39:37 --> Controller Class Initialized
INFO - 2025-06-01 14:39:37 --> Helper loaded: form_helper
INFO - 2025-06-01 14:39:37 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:39:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:39:37 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:37 --> Model "Crud" initialized
INFO - 2025-06-01 14:39:37 --> Final output sent to browser
DEBUG - 2025-06-01 14:39:37 --> Total execution time: 0.0328
INFO - 2025-06-01 14:39:47 --> Config Class Initialized
INFO - 2025-06-01 14:39:47 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:39:47 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:39:47 --> Utf8 Class Initialized
INFO - 2025-06-01 14:39:47 --> URI Class Initialized
INFO - 2025-06-01 14:39:47 --> Router Class Initialized
INFO - 2025-06-01 14:39:47 --> Output Class Initialized
INFO - 2025-06-01 14:39:47 --> Security Class Initialized
DEBUG - 2025-06-01 14:39:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:39:47 --> Input Class Initialized
INFO - 2025-06-01 14:39:47 --> Language Class Initialized
INFO - 2025-06-01 14:39:47 --> Loader Class Initialized
INFO - 2025-06-01 14:39:47 --> Helper loaded: url_helper
INFO - 2025-06-01 14:39:47 --> Helper loaded: file_helper
INFO - 2025-06-01 14:39:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:47 --> Config Class Initialized
INFO - 2025-06-01 14:39:47 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:39:47 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:39:47 --> Utf8 Class Initialized
INFO - 2025-06-01 14:39:47 --> URI Class Initialized
INFO - 2025-06-01 14:39:47 --> Router Class Initialized
INFO - 2025-06-01 14:39:47 --> Output Class Initialized
INFO - 2025-06-01 14:39:47 --> Security Class Initialized
INFO - 2025-06-01 14:39:47 --> Email Class Initialized
DEBUG - 2025-06-01 14:39:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:39:47 --> Input Class Initialized
DEBUG - 2025-06-01 14:39:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:39:47 --> Language Class Initialized
INFO - 2025-06-01 14:39:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:39:47 --> Loader Class Initialized
INFO - 2025-06-01 14:39:47 --> Controller Class Initialized
INFO - 2025-06-01 14:39:47 --> Helper loaded: url_helper
INFO - 2025-06-01 14:39:47 --> Helper loaded: file_helper
INFO - 2025-06-01 14:39:47 --> Helper loaded: form_helper
INFO - 2025-06-01 14:39:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:47 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:39:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:39:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:47 --> Email Class Initialized
INFO - 2025-06-01 14:39:47 --> Model "Crud" initialized
DEBUG - 2025-06-01 14:39:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:39:47 --> Final output sent to browser
DEBUG - 2025-06-01 14:39:47 --> Total execution time: 0.0219
INFO - 2025-06-01 14:39:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:39:47 --> Controller Class Initialized
INFO - 2025-06-01 14:39:47 --> Helper loaded: form_helper
INFO - 2025-06-01 14:39:47 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:39:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:39:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:47 --> Model "Crud" initialized
INFO - 2025-06-01 14:39:47 --> Final output sent to browser
DEBUG - 2025-06-01 14:39:47 --> Total execution time: 0.0435
INFO - 2025-06-01 14:39:57 --> Config Class Initialized
INFO - 2025-06-01 14:39:57 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:39:57 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:39:57 --> Utf8 Class Initialized
INFO - 2025-06-01 14:39:57 --> URI Class Initialized
INFO - 2025-06-01 14:39:57 --> Router Class Initialized
INFO - 2025-06-01 14:39:57 --> Output Class Initialized
INFO - 2025-06-01 14:39:57 --> Security Class Initialized
DEBUG - 2025-06-01 14:39:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:39:57 --> Input Class Initialized
INFO - 2025-06-01 14:39:57 --> Language Class Initialized
INFO - 2025-06-01 14:39:57 --> Loader Class Initialized
INFO - 2025-06-01 14:39:57 --> Helper loaded: url_helper
INFO - 2025-06-01 14:39:57 --> Helper loaded: file_helper
INFO - 2025-06-01 14:39:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:57 --> Config Class Initialized
INFO - 2025-06-01 14:39:57 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:39:57 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:39:57 --> Utf8 Class Initialized
INFO - 2025-06-01 14:39:57 --> URI Class Initialized
INFO - 2025-06-01 14:39:57 --> Router Class Initialized
INFO - 2025-06-01 14:39:57 --> Output Class Initialized
INFO - 2025-06-01 14:39:57 --> Security Class Initialized
DEBUG - 2025-06-01 14:39:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:39:57 --> Input Class Initialized
INFO - 2025-06-01 14:39:57 --> Language Class Initialized
INFO - 2025-06-01 14:39:57 --> Loader Class Initialized
INFO - 2025-06-01 14:39:57 --> Helper loaded: url_helper
INFO - 2025-06-01 14:39:57 --> Helper loaded: file_helper
INFO - 2025-06-01 14:39:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:57 --> Email Class Initialized
DEBUG - 2025-06-01 14:39:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:39:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:39:57 --> Controller Class Initialized
INFO - 2025-06-01 14:39:57 --> Helper loaded: form_helper
INFO - 2025-06-01 14:39:57 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:39:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:39:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:57 --> Email Class Initialized
DEBUG - 2025-06-01 14:39:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:39:57 --> Model "Crud" initialized
INFO - 2025-06-01 14:39:57 --> Final output sent to browser
DEBUG - 2025-06-01 14:39:57 --> Total execution time: 0.0154
INFO - 2025-06-01 14:39:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:39:57 --> Controller Class Initialized
INFO - 2025-06-01 14:39:57 --> Helper loaded: form_helper
INFO - 2025-06-01 14:39:57 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:39:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:39:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:39:57 --> Model "Crud" initialized
INFO - 2025-06-01 14:39:57 --> Final output sent to browser
DEBUG - 2025-06-01 14:39:57 --> Total execution time: 0.0304
INFO - 2025-06-01 14:40:07 --> Config Class Initialized
INFO - 2025-06-01 14:40:07 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:40:07 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:40:07 --> Utf8 Class Initialized
INFO - 2025-06-01 14:40:07 --> URI Class Initialized
INFO - 2025-06-01 14:40:07 --> Config Class Initialized
INFO - 2025-06-01 14:40:07 --> Router Class Initialized
INFO - 2025-06-01 14:40:07 --> Hooks Class Initialized
INFO - 2025-06-01 14:40:07 --> Output Class Initialized
DEBUG - 2025-06-01 14:40:07 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:40:07 --> Security Class Initialized
INFO - 2025-06-01 14:40:07 --> Utf8 Class Initialized
DEBUG - 2025-06-01 14:40:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:40:07 --> URI Class Initialized
INFO - 2025-06-01 14:40:07 --> Input Class Initialized
INFO - 2025-06-01 14:40:07 --> Language Class Initialized
INFO - 2025-06-01 14:40:07 --> Router Class Initialized
INFO - 2025-06-01 14:40:07 --> Output Class Initialized
INFO - 2025-06-01 14:40:07 --> Loader Class Initialized
INFO - 2025-06-01 14:40:07 --> Security Class Initialized
INFO - 2025-06-01 14:40:07 --> Helper loaded: url_helper
DEBUG - 2025-06-01 14:40:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:40:07 --> Helper loaded: file_helper
INFO - 2025-06-01 14:40:07 --> Input Class Initialized
INFO - 2025-06-01 14:40:07 --> Language Class Initialized
INFO - 2025-06-01 14:40:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:40:07 --> Loader Class Initialized
INFO - 2025-06-01 14:40:07 --> Helper loaded: url_helper
INFO - 2025-06-01 14:40:07 --> Helper loaded: file_helper
INFO - 2025-06-01 14:40:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:40:07 --> Email Class Initialized
INFO - 2025-06-01 14:40:07 --> Email Class Initialized
DEBUG - 2025-06-01 14:40:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-01 14:40:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:40:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:40:07 --> Controller Class Initialized
INFO - 2025-06-01 14:40:07 --> Helper loaded: form_helper
INFO - 2025-06-01 14:40:07 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:40:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:40:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:40:07 --> Model "Crud" initialized
INFO - 2025-06-01 14:40:07 --> Final output sent to browser
DEBUG - 2025-06-01 14:40:07 --> Total execution time: 0.0211
INFO - 2025-06-01 14:40:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:40:07 --> Controller Class Initialized
INFO - 2025-06-01 14:40:07 --> Helper loaded: form_helper
INFO - 2025-06-01 14:40:07 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:40:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:40:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:40:07 --> Model "Crud" initialized
INFO - 2025-06-01 14:40:07 --> Final output sent to browser
DEBUG - 2025-06-01 14:40:07 --> Total execution time: 0.0369
INFO - 2025-06-01 14:40:17 --> Config Class Initialized
INFO - 2025-06-01 14:40:17 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:40:17 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:40:17 --> Utf8 Class Initialized
INFO - 2025-06-01 14:40:17 --> URI Class Initialized
INFO - 2025-06-01 14:40:17 --> Router Class Initialized
INFO - 2025-06-01 14:40:17 --> Config Class Initialized
INFO - 2025-06-01 14:40:17 --> Output Class Initialized
INFO - 2025-06-01 14:40:17 --> Hooks Class Initialized
INFO - 2025-06-01 14:40:17 --> Security Class Initialized
DEBUG - 2025-06-01 14:40:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-01 14:40:17 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:40:17 --> Input Class Initialized
INFO - 2025-06-01 14:40:17 --> Utf8 Class Initialized
INFO - 2025-06-01 14:40:17 --> Language Class Initialized
INFO - 2025-06-01 14:40:17 --> URI Class Initialized
INFO - 2025-06-01 14:40:17 --> Loader Class Initialized
INFO - 2025-06-01 14:40:17 --> Router Class Initialized
INFO - 2025-06-01 14:40:17 --> Helper loaded: url_helper
INFO - 2025-06-01 14:40:17 --> Output Class Initialized
INFO - 2025-06-01 14:40:17 --> Helper loaded: file_helper
INFO - 2025-06-01 14:40:17 --> Security Class Initialized
DEBUG - 2025-06-01 14:40:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:40:17 --> Input Class Initialized
INFO - 2025-06-01 14:40:17 --> Language Class Initialized
INFO - 2025-06-01 14:40:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:40:17 --> Loader Class Initialized
INFO - 2025-06-01 14:40:17 --> Helper loaded: url_helper
INFO - 2025-06-01 14:40:17 --> Helper loaded: file_helper
INFO - 2025-06-01 14:40:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:40:17 --> Email Class Initialized
INFO - 2025-06-01 14:40:17 --> Email Class Initialized
DEBUG - 2025-06-01 14:40:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-01 14:40:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:40:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:40:17 --> Controller Class Initialized
INFO - 2025-06-01 14:40:17 --> Helper loaded: form_helper
INFO - 2025-06-01 14:40:17 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:40:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:40:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:40:17 --> Model "Crud" initialized
INFO - 2025-06-01 14:40:17 --> Final output sent to browser
DEBUG - 2025-06-01 14:40:17 --> Total execution time: 0.0171
INFO - 2025-06-01 14:40:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:40:17 --> Controller Class Initialized
INFO - 2025-06-01 14:40:17 --> Helper loaded: form_helper
INFO - 2025-06-01 14:40:17 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:40:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:40:17 --> Database Driver Class Initialized
INFO - 2025-06-01 14:40:17 --> Model "Crud" initialized
INFO - 2025-06-01 14:40:17 --> Final output sent to browser
DEBUG - 2025-06-01 14:40:17 --> Total execution time: 0.0309
INFO - 2025-06-01 14:40:27 --> Config Class Initialized
INFO - 2025-06-01 14:40:27 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:40:27 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:40:27 --> Utf8 Class Initialized
INFO - 2025-06-01 14:40:27 --> URI Class Initialized
INFO - 2025-06-01 14:40:27 --> Router Class Initialized
INFO - 2025-06-01 14:40:27 --> Output Class Initialized
INFO - 2025-06-01 14:40:27 --> Security Class Initialized
DEBUG - 2025-06-01 14:40:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:40:27 --> Input Class Initialized
INFO - 2025-06-01 14:40:27 --> Language Class Initialized
INFO - 2025-06-01 14:40:27 --> Loader Class Initialized
INFO - 2025-06-01 14:40:27 --> Helper loaded: url_helper
INFO - 2025-06-01 14:40:27 --> Helper loaded: file_helper
INFO - 2025-06-01 14:40:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:40:27 --> Email Class Initialized
DEBUG - 2025-06-01 14:40:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:40:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:40:27 --> Controller Class Initialized
INFO - 2025-06-01 14:40:27 --> Helper loaded: form_helper
INFO - 2025-06-01 14:40:27 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:40:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:40:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:40:27 --> Config Class Initialized
INFO - 2025-06-01 14:40:27 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:40:27 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:40:27 --> Utf8 Class Initialized
INFO - 2025-06-01 14:40:27 --> URI Class Initialized
INFO - 2025-06-01 14:40:27 --> Router Class Initialized
INFO - 2025-06-01 14:40:27 --> Output Class Initialized
INFO - 2025-06-01 14:40:27 --> Security Class Initialized
DEBUG - 2025-06-01 14:40:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:40:27 --> Input Class Initialized
INFO - 2025-06-01 14:40:27 --> Language Class Initialized
INFO - 2025-06-01 14:40:27 --> Loader Class Initialized
INFO - 2025-06-01 14:40:27 --> Helper loaded: url_helper
INFO - 2025-06-01 14:40:27 --> Helper loaded: file_helper
INFO - 2025-06-01 14:40:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:40:27 --> Email Class Initialized
DEBUG - 2025-06-01 14:40:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:40:27 --> Model "Crud" initialized
INFO - 2025-06-01 14:40:27 --> Final output sent to browser
DEBUG - 2025-06-01 14:40:27 --> Total execution time: 0.0355
INFO - 2025-06-01 14:40:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:40:27 --> Controller Class Initialized
INFO - 2025-06-01 14:40:27 --> Helper loaded: form_helper
INFO - 2025-06-01 14:40:27 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:40:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:40:27 --> Database Driver Class Initialized
INFO - 2025-06-01 14:40:27 --> Model "Crud" initialized
INFO - 2025-06-01 14:40:27 --> Final output sent to browser
DEBUG - 2025-06-01 14:40:27 --> Total execution time: 0.0623
INFO - 2025-06-01 14:40:37 --> Config Class Initialized
INFO - 2025-06-01 14:40:37 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:40:37 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:40:37 --> Config Class Initialized
INFO - 2025-06-01 14:40:37 --> Hooks Class Initialized
INFO - 2025-06-01 14:40:37 --> Utf8 Class Initialized
DEBUG - 2025-06-01 14:40:37 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:40:37 --> URI Class Initialized
INFO - 2025-06-01 14:40:37 --> Utf8 Class Initialized
INFO - 2025-06-01 14:40:37 --> Router Class Initialized
INFO - 2025-06-01 14:40:37 --> URI Class Initialized
INFO - 2025-06-01 14:40:37 --> Output Class Initialized
INFO - 2025-06-01 14:40:37 --> Router Class Initialized
INFO - 2025-06-01 14:40:37 --> Output Class Initialized
INFO - 2025-06-01 14:40:37 --> Security Class Initialized
INFO - 2025-06-01 14:40:37 --> Security Class Initialized
DEBUG - 2025-06-01 14:40:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-01 14:40:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:40:37 --> Input Class Initialized
INFO - 2025-06-01 14:40:37 --> Input Class Initialized
INFO - 2025-06-01 14:40:37 --> Language Class Initialized
INFO - 2025-06-01 14:40:37 --> Language Class Initialized
INFO - 2025-06-01 14:40:37 --> Loader Class Initialized
INFO - 2025-06-01 14:40:37 --> Loader Class Initialized
INFO - 2025-06-01 14:40:37 --> Helper loaded: url_helper
INFO - 2025-06-01 14:40:37 --> Helper loaded: file_helper
INFO - 2025-06-01 14:40:37 --> Helper loaded: url_helper
INFO - 2025-06-01 14:40:37 --> Helper loaded: file_helper
INFO - 2025-06-01 14:40:37 --> Database Driver Class Initialized
INFO - 2025-06-01 14:40:37 --> Database Driver Class Initialized
INFO - 2025-06-01 14:40:37 --> Email Class Initialized
INFO - 2025-06-01 14:40:37 --> Email Class Initialized
DEBUG - 2025-06-01 14:40:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-01 14:40:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:40:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:40:37 --> Controller Class Initialized
INFO - 2025-06-01 14:40:37 --> Helper loaded: form_helper
INFO - 2025-06-01 14:40:37 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:40:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:40:37 --> Database Driver Class Initialized
INFO - 2025-06-01 14:40:37 --> Model "Crud" initialized
INFO - 2025-06-01 14:40:37 --> Final output sent to browser
DEBUG - 2025-06-01 14:40:37 --> Total execution time: 0.0189
INFO - 2025-06-01 14:40:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:40:37 --> Controller Class Initialized
INFO - 2025-06-01 14:40:37 --> Helper loaded: form_helper
INFO - 2025-06-01 14:40:37 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:40:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:40:37 --> Database Driver Class Initialized
INFO - 2025-06-01 14:40:37 --> Model "Crud" initialized
INFO - 2025-06-01 14:40:37 --> Final output sent to browser
DEBUG - 2025-06-01 14:40:37 --> Total execution time: 0.0343
INFO - 2025-06-01 14:40:47 --> Config Class Initialized
INFO - 2025-06-01 14:40:47 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:40:47 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:40:47 --> Config Class Initialized
INFO - 2025-06-01 14:40:47 --> Utf8 Class Initialized
INFO - 2025-06-01 14:40:47 --> Hooks Class Initialized
INFO - 2025-06-01 14:40:47 --> URI Class Initialized
DEBUG - 2025-06-01 14:40:47 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:40:47 --> Utf8 Class Initialized
INFO - 2025-06-01 14:40:47 --> Router Class Initialized
INFO - 2025-06-01 14:40:47 --> URI Class Initialized
INFO - 2025-06-01 14:40:47 --> Output Class Initialized
INFO - 2025-06-01 14:40:47 --> Router Class Initialized
INFO - 2025-06-01 14:40:47 --> Output Class Initialized
INFO - 2025-06-01 14:40:47 --> Security Class Initialized
INFO - 2025-06-01 14:40:47 --> Security Class Initialized
DEBUG - 2025-06-01 14:40:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-01 14:40:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:40:47 --> Input Class Initialized
INFO - 2025-06-01 14:40:47 --> Input Class Initialized
INFO - 2025-06-01 14:40:47 --> Language Class Initialized
INFO - 2025-06-01 14:40:47 --> Language Class Initialized
INFO - 2025-06-01 14:40:47 --> Loader Class Initialized
INFO - 2025-06-01 14:40:47 --> Loader Class Initialized
INFO - 2025-06-01 14:40:47 --> Helper loaded: url_helper
INFO - 2025-06-01 14:40:47 --> Helper loaded: file_helper
INFO - 2025-06-01 14:40:47 --> Helper loaded: url_helper
INFO - 2025-06-01 14:40:47 --> Helper loaded: file_helper
INFO - 2025-06-01 14:40:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:40:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:40:47 --> Email Class Initialized
INFO - 2025-06-01 14:40:47 --> Email Class Initialized
DEBUG - 2025-06-01 14:40:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-01 14:40:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:40:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:40:47 --> Controller Class Initialized
INFO - 2025-06-01 14:40:47 --> Helper loaded: form_helper
INFO - 2025-06-01 14:40:47 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:40:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:40:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:40:47 --> Model "Crud" initialized
INFO - 2025-06-01 14:40:47 --> Final output sent to browser
DEBUG - 2025-06-01 14:40:47 --> Total execution time: 0.0168
INFO - 2025-06-01 14:40:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:40:47 --> Controller Class Initialized
INFO - 2025-06-01 14:40:47 --> Helper loaded: form_helper
INFO - 2025-06-01 14:40:47 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:40:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:40:47 --> Database Driver Class Initialized
INFO - 2025-06-01 14:40:47 --> Model "Crud" initialized
INFO - 2025-06-01 14:40:47 --> Final output sent to browser
DEBUG - 2025-06-01 14:40:47 --> Total execution time: 0.0331
INFO - 2025-06-01 14:40:57 --> Config Class Initialized
INFO - 2025-06-01 14:40:57 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:40:57 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:40:57 --> Utf8 Class Initialized
INFO - 2025-06-01 14:40:57 --> URI Class Initialized
INFO - 2025-06-01 14:40:57 --> Router Class Initialized
INFO - 2025-06-01 14:40:57 --> Output Class Initialized
INFO - 2025-06-01 14:40:57 --> Security Class Initialized
DEBUG - 2025-06-01 14:40:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:40:57 --> Input Class Initialized
INFO - 2025-06-01 14:40:57 --> Language Class Initialized
INFO - 2025-06-01 14:40:57 --> Loader Class Initialized
INFO - 2025-06-01 14:40:57 --> Helper loaded: url_helper
INFO - 2025-06-01 14:40:57 --> Helper loaded: file_helper
INFO - 2025-06-01 14:40:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:40:57 --> Config Class Initialized
INFO - 2025-06-01 14:40:57 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:40:57 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:40:57 --> Utf8 Class Initialized
INFO - 2025-06-01 14:40:57 --> URI Class Initialized
INFO - 2025-06-01 14:40:57 --> Router Class Initialized
INFO - 2025-06-01 14:40:57 --> Output Class Initialized
INFO - 2025-06-01 14:40:57 --> Security Class Initialized
DEBUG - 2025-06-01 14:40:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:40:57 --> Input Class Initialized
INFO - 2025-06-01 14:40:57 --> Language Class Initialized
INFO - 2025-06-01 14:40:57 --> Email Class Initialized
INFO - 2025-06-01 14:40:57 --> Loader Class Initialized
INFO - 2025-06-01 14:40:57 --> Helper loaded: url_helper
INFO - 2025-06-01 14:40:57 --> Helper loaded: file_helper
DEBUG - 2025-06-01 14:40:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:40:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:40:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:40:57 --> Controller Class Initialized
INFO - 2025-06-01 14:40:57 --> Helper loaded: form_helper
INFO - 2025-06-01 14:40:57 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:40:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:40:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:40:57 --> Email Class Initialized
DEBUG - 2025-06-01 14:40:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:40:57 --> Model "Crud" initialized
INFO - 2025-06-01 14:40:57 --> Final output sent to browser
DEBUG - 2025-06-01 14:40:57 --> Total execution time: 0.0167
INFO - 2025-06-01 14:40:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:40:57 --> Controller Class Initialized
INFO - 2025-06-01 14:40:57 --> Helper loaded: form_helper
INFO - 2025-06-01 14:40:57 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:40:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:40:57 --> Database Driver Class Initialized
INFO - 2025-06-01 14:40:57 --> Model "Crud" initialized
INFO - 2025-06-01 14:40:57 --> Final output sent to browser
DEBUG - 2025-06-01 14:40:57 --> Total execution time: 0.0352
INFO - 2025-06-01 14:41:07 --> Config Class Initialized
INFO - 2025-06-01 14:41:07 --> Hooks Class Initialized
DEBUG - 2025-06-01 14:41:07 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:41:07 --> Utf8 Class Initialized
INFO - 2025-06-01 14:41:07 --> URI Class Initialized
INFO - 2025-06-01 14:41:07 --> Config Class Initialized
INFO - 2025-06-01 14:41:07 --> Hooks Class Initialized
INFO - 2025-06-01 14:41:07 --> Router Class Initialized
DEBUG - 2025-06-01 14:41:07 --> UTF-8 Support Enabled
INFO - 2025-06-01 14:41:07 --> Output Class Initialized
INFO - 2025-06-01 14:41:07 --> Utf8 Class Initialized
INFO - 2025-06-01 14:41:07 --> Security Class Initialized
INFO - 2025-06-01 14:41:07 --> URI Class Initialized
DEBUG - 2025-06-01 14:41:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:41:07 --> Input Class Initialized
INFO - 2025-06-01 14:41:07 --> Router Class Initialized
INFO - 2025-06-01 14:41:07 --> Language Class Initialized
INFO - 2025-06-01 14:41:07 --> Output Class Initialized
INFO - 2025-06-01 14:41:07 --> Security Class Initialized
DEBUG - 2025-06-01 14:41:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-01 14:41:07 --> Loader Class Initialized
INFO - 2025-06-01 14:41:07 --> Input Class Initialized
INFO - 2025-06-01 14:41:07 --> Language Class Initialized
INFO - 2025-06-01 14:41:07 --> Loader Class Initialized
INFO - 2025-06-01 14:41:07 --> Helper loaded: url_helper
INFO - 2025-06-01 14:41:07 --> Helper loaded: file_helper
INFO - 2025-06-01 14:41:07 --> Helper loaded: url_helper
INFO - 2025-06-01 14:41:07 --> Helper loaded: file_helper
INFO - 2025-06-01 14:41:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:41:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:41:07 --> Email Class Initialized
INFO - 2025-06-01 14:41:07 --> Email Class Initialized
DEBUG - 2025-06-01 14:41:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-01 14:41:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-01 14:41:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:41:07 --> Controller Class Initialized
INFO - 2025-06-01 14:41:07 --> Helper loaded: form_helper
INFO - 2025-06-01 14:41:07 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:41:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:41:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:41:07 --> Model "Crud" initialized
INFO - 2025-06-01 14:41:07 --> Final output sent to browser
DEBUG - 2025-06-01 14:41:07 --> Total execution time: 0.0132
INFO - 2025-06-01 14:41:07 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-01 14:41:07 --> Controller Class Initialized
INFO - 2025-06-01 14:41:07 --> Helper loaded: form_helper
INFO - 2025-06-01 14:41:07 --> Form Validation Class Initialized
DEBUG - 2025-06-01 14:41:07 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-01 14:41:07 --> Database Driver Class Initialized
INFO - 2025-06-01 14:41:07 --> Model "Crud" initialized
INFO - 2025-06-01 14:41:07 --> Final output sent to browser
DEBUG - 2025-06-01 14:41:07 --> Total execution time: 0.0245
