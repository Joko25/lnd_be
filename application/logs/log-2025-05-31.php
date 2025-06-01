<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2025-05-31 00:42:50 --> Config Class Initialized
INFO - 2025-05-31 00:42:50 --> Hooks Class Initialized
DEBUG - 2025-05-31 00:42:50 --> UTF-8 Support Enabled
INFO - 2025-05-31 00:42:50 --> Utf8 Class Initialized
INFO - 2025-05-31 00:42:50 --> URI Class Initialized
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2025-05-31 00:42:50 --> Config Class Initialized
INFO - 2025-05-31 00:42:50 --> Hooks Class Initialized
DEBUG - 2025-05-31 00:42:50 --> UTF-8 Support Enabled
INFO - 2025-05-31 00:42:50 --> Utf8 Class Initialized
INFO - 2025-05-31 00:42:50 --> URI Class Initialized
INFO - 2025-05-31 00:42:50 --> Router Class Initialized
INFO - 2025-05-31 00:42:50 --> Output Class Initialized
INFO - 2025-05-31 00:42:50 --> Security Class Initialized
DEBUG - 2025-05-31 00:42:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 00:42:50 --> Input Class Initialized
INFO - 2025-05-31 00:42:50 --> Language Class Initialized
INFO - 2025-05-31 00:42:50 --> Loader Class Initialized
INFO - 2025-05-31 00:42:50 --> Helper loaded: url_helper
INFO - 2025-05-31 00:42:50 --> Helper loaded: file_helper
INFO - 2025-05-31 00:42:50 --> Database Driver Class Initialized
INFO - 2025-05-31 00:42:50 --> Router Class Initialized
INFO - 2025-05-31 00:42:50 --> Output Class Initialized
INFO - 2025-05-31 00:42:50 --> Security Class Initialized
DEBUG - 2025-05-31 00:42:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 00:42:50 --> Input Class Initialized
INFO - 2025-05-31 00:42:50 --> Language Class Initialized
INFO - 2025-05-31 00:42:50 --> Loader Class Initialized
INFO - 2025-05-31 00:42:50 --> Helper loaded: url_helper
INFO - 2025-05-31 00:42:50 --> Helper loaded: file_helper
INFO - 2025-05-31 00:42:50 --> Database Driver Class Initialized
INFO - 2025-05-31 00:42:50 --> Email Class Initialized
DEBUG - 2025-05-31 00:42:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 00:42:50 --> Email Class Initialized
DEBUG - 2025-05-31 00:42:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 00:42:50 --> Config Class Initialized
INFO - 2025-05-31 00:42:50 --> Hooks Class Initialized
DEBUG - 2025-05-31 00:42:50 --> UTF-8 Support Enabled
INFO - 2025-05-31 00:42:50 --> Utf8 Class Initialized
INFO - 2025-05-31 00:42:50 --> URI Class Initialized
INFO - 2025-05-31 00:42:50 --> Router Class Initialized
INFO - 2025-05-31 00:42:50 --> Output Class Initialized
INFO - 2025-05-31 00:42:50 --> Security Class Initialized
DEBUG - 2025-05-31 00:42:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 00:42:50 --> Input Class Initialized
INFO - 2025-05-31 00:42:50 --> Language Class Initialized
INFO - 2025-05-31 00:42:50 --> Loader Class Initialized
INFO - 2025-05-31 00:42:50 --> Helper loaded: url_helper
INFO - 2025-05-31 00:42:50 --> Helper loaded: file_helper
INFO - 2025-05-31 00:42:50 --> Database Driver Class Initialized
INFO - 2025-05-31 00:42:50 --> Email Class Initialized
DEBUG - 2025-05-31 00:42:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 00:42:50 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 00:42:50 --> Controller Class Initialized
INFO - 2025-05-31 00:42:50 --> Helper loaded: form_helper
INFO - 2025-05-31 00:42:50 --> Form Validation Class Initialized
DEBUG - 2025-05-31 00:42:50 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 00:42:50 --> Database Driver Class Initialized
INFO - 2025-05-31 00:42:50 --> Model "Crud" initialized
ERROR - 2025-05-31 00:42:50 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 00:42:50 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 00:42:51 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 00:42:51 --> Controller Class Initialized
INFO - 2025-05-31 00:42:51 --> Helper loaded: form_helper
INFO - 2025-05-31 00:42:51 --> Form Validation Class Initialized
DEBUG - 2025-05-31 00:42:51 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 00:42:51 --> Database Driver Class Initialized
INFO - 2025-05-31 00:42:51 --> Model "Crud" initialized
INFO - 2025-05-31 00:42:51 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 00:42:51 --> Controller Class Initialized
INFO - 2025-05-31 00:42:51 --> Helper loaded: form_helper
INFO - 2025-05-31 00:42:51 --> Form Validation Class Initialized
DEBUG - 2025-05-31 00:42:51 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 00:42:51 --> Database Driver Class Initialized
ERROR - 2025-05-31 00:42:51 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 00:42:51 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 00:42:51 --> Model "Crud" initialized
ERROR - 2025-05-31 00:42:51 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 00:42:51 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 00:42:51 --> Config Class Initialized
INFO - 2025-05-31 00:42:51 --> Hooks Class Initialized
DEBUG - 2025-05-31 00:42:51 --> UTF-8 Support Enabled
INFO - 2025-05-31 00:42:51 --> Utf8 Class Initialized
INFO - 2025-05-31 00:42:51 --> URI Class Initialized
INFO - 2025-05-31 00:42:51 --> Router Class Initialized
INFO - 2025-05-31 00:42:51 --> Output Class Initialized
INFO - 2025-05-31 00:42:51 --> Security Class Initialized
DEBUG - 2025-05-31 00:42:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 00:42:51 --> Input Class Initialized
INFO - 2025-05-31 00:42:51 --> Language Class Initialized
INFO - 2025-05-31 00:42:51 --> Loader Class Initialized
INFO - 2025-05-31 00:42:51 --> Helper loaded: url_helper
INFO - 2025-05-31 00:42:51 --> Helper loaded: file_helper
INFO - 2025-05-31 00:42:51 --> Database Driver Class Initialized
INFO - 2025-05-31 00:42:51 --> Email Class Initialized
DEBUG - 2025-05-31 00:42:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 00:42:51 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 00:42:51 --> Controller Class Initialized
INFO - 2025-05-31 00:42:51 --> Helper loaded: form_helper
INFO - 2025-05-31 00:42:51 --> Form Validation Class Initialized
DEBUG - 2025-05-31 00:42:51 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 00:42:51 --> Database Driver Class Initialized
INFO - 2025-05-31 00:42:51 --> Model "Crud" initialized
ERROR - 2025-05-31 00:42:52 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 00:42:52 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 00:43:04 --> Config Class Initialized
INFO - 2025-05-31 00:43:04 --> Hooks Class Initialized
DEBUG - 2025-05-31 00:43:04 --> UTF-8 Support Enabled
INFO - 2025-05-31 00:43:04 --> Utf8 Class Initialized
INFO - 2025-05-31 00:43:04 --> URI Class Initialized
INFO - 2025-05-31 00:43:04 --> Router Class Initialized
INFO - 2025-05-31 00:43:04 --> Output Class Initialized
INFO - 2025-05-31 00:43:04 --> Security Class Initialized
DEBUG - 2025-05-31 00:43:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 00:43:04 --> Input Class Initialized
INFO - 2025-05-31 00:43:04 --> Language Class Initialized
INFO - 2025-05-31 00:43:04 --> Loader Class Initialized
INFO - 2025-05-31 00:43:04 --> Helper loaded: url_helper
INFO - 2025-05-31 00:43:04 --> Helper loaded: file_helper
INFO - 2025-05-31 00:43:04 --> Database Driver Class Initialized
INFO - 2025-05-31 00:43:04 --> Config Class Initialized
INFO - 2025-05-31 00:43:04 --> Hooks Class Initialized
DEBUG - 2025-05-31 00:43:04 --> UTF-8 Support Enabled
INFO - 2025-05-31 00:43:04 --> Utf8 Class Initialized
INFO - 2025-05-31 00:43:04 --> URI Class Initialized
INFO - 2025-05-31 00:43:04 --> Router Class Initialized
INFO - 2025-05-31 00:43:04 --> Email Class Initialized
INFO - 2025-05-31 00:43:04 --> Output Class Initialized
INFO - 2025-05-31 00:43:04 --> Security Class Initialized
DEBUG - 2025-05-31 00:43:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 00:43:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 00:43:04 --> Input Class Initialized
INFO - 2025-05-31 00:43:04 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 00:43:04 --> Language Class Initialized
INFO - 2025-05-31 00:43:04 --> Controller Class Initialized
INFO - 2025-05-31 00:43:04 --> Helper loaded: form_helper
INFO - 2025-05-31 00:43:04 --> Loader Class Initialized
INFO - 2025-05-31 00:43:04 --> Form Validation Class Initialized
INFO - 2025-05-31 00:43:04 --> Helper loaded: url_helper
DEBUG - 2025-05-31 00:43:04 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 00:43:04 --> Helper loaded: file_helper
INFO - 2025-05-31 00:43:04 --> Database Driver Class Initialized
INFO - 2025-05-31 00:43:04 --> Database Driver Class Initialized
INFO - 2025-05-31 00:43:04 --> Email Class Initialized
DEBUG - 2025-05-31 00:43:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 00:43:04 --> Model "Crud" initialized
ERROR - 2025-05-31 00:43:04 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 00:43:04 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 00:43:04 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 00:43:04 --> Controller Class Initialized
INFO - 2025-05-31 00:43:04 --> Helper loaded: form_helper
INFO - 2025-05-31 00:43:04 --> Form Validation Class Initialized
DEBUG - 2025-05-31 00:43:04 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 00:43:04 --> Database Driver Class Initialized
INFO - 2025-05-31 00:43:04 --> Model "Crud" initialized
ERROR - 2025-05-31 00:43:04 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 00:43:04 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 00:44:04 --> Config Class Initialized
INFO - 2025-05-31 00:44:04 --> Hooks Class Initialized
DEBUG - 2025-05-31 00:44:04 --> UTF-8 Support Enabled
INFO - 2025-05-31 00:44:04 --> Utf8 Class Initialized
INFO - 2025-05-31 00:44:04 --> URI Class Initialized
INFO - 2025-05-31 00:44:04 --> Router Class Initialized
INFO - 2025-05-31 00:44:04 --> Output Class Initialized
INFO - 2025-05-31 00:44:04 --> Security Class Initialized
INFO - 2025-05-31 00:44:04 --> Config Class Initialized
DEBUG - 2025-05-31 00:44:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 00:44:04 --> Hooks Class Initialized
INFO - 2025-05-31 00:44:04 --> Input Class Initialized
INFO - 2025-05-31 00:44:04 --> Language Class Initialized
DEBUG - 2025-05-31 00:44:04 --> UTF-8 Support Enabled
INFO - 2025-05-31 00:44:04 --> Utf8 Class Initialized
INFO - 2025-05-31 00:44:04 --> URI Class Initialized
INFO - 2025-05-31 00:44:04 --> Loader Class Initialized
INFO - 2025-05-31 00:44:04 --> Router Class Initialized
INFO - 2025-05-31 00:44:04 --> Helper loaded: url_helper
INFO - 2025-05-31 00:44:04 --> Output Class Initialized
INFO - 2025-05-31 00:44:04 --> Helper loaded: file_helper
INFO - 2025-05-31 00:44:04 --> Security Class Initialized
DEBUG - 2025-05-31 00:44:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 00:44:04 --> Input Class Initialized
INFO - 2025-05-31 00:44:04 --> Language Class Initialized
INFO - 2025-05-31 00:44:04 --> Database Driver Class Initialized
INFO - 2025-05-31 00:44:04 --> Loader Class Initialized
INFO - 2025-05-31 00:44:04 --> Helper loaded: url_helper
INFO - 2025-05-31 00:44:04 --> Helper loaded: file_helper
INFO - 2025-05-31 00:44:04 --> Database Driver Class Initialized
INFO - 2025-05-31 00:44:04 --> Email Class Initialized
DEBUG - 2025-05-31 00:44:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 00:44:04 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 00:44:04 --> Controller Class Initialized
INFO - 2025-05-31 00:44:04 --> Helper loaded: form_helper
INFO - 2025-05-31 00:44:04 --> Form Validation Class Initialized
DEBUG - 2025-05-31 00:44:04 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 00:44:04 --> Email Class Initialized
INFO - 2025-05-31 00:44:04 --> Database Driver Class Initialized
DEBUG - 2025-05-31 00:44:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 00:44:04 --> Model "Crud" initialized
ERROR - 2025-05-31 00:44:04 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 00:44:04 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 00:44:04 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 00:44:04 --> Controller Class Initialized
INFO - 2025-05-31 00:44:04 --> Helper loaded: form_helper
INFO - 2025-05-31 00:44:04 --> Form Validation Class Initialized
DEBUG - 2025-05-31 00:44:04 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 00:44:04 --> Database Driver Class Initialized
INFO - 2025-05-31 00:44:04 --> Model "Crud" initialized
ERROR - 2025-05-31 00:44:04 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 00:44:04 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 00:44:35 --> Config Class Initialized
INFO - 2025-05-31 00:44:35 --> Hooks Class Initialized
DEBUG - 2025-05-31 00:44:35 --> UTF-8 Support Enabled
INFO - 2025-05-31 00:44:35 --> Utf8 Class Initialized
INFO - 2025-05-31 00:44:35 --> URI Class Initialized
INFO - 2025-05-31 00:44:35 --> Router Class Initialized
INFO - 2025-05-31 00:44:35 --> Output Class Initialized
INFO - 2025-05-31 00:44:35 --> Security Class Initialized
DEBUG - 2025-05-31 00:44:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 00:44:35 --> Input Class Initialized
INFO - 2025-05-31 00:44:35 --> Language Class Initialized
INFO - 2025-05-31 00:44:35 --> Loader Class Initialized
INFO - 2025-05-31 00:44:35 --> Helper loaded: url_helper
INFO - 2025-05-31 00:44:35 --> Helper loaded: file_helper
INFO - 2025-05-31 00:44:35 --> Database Driver Class Initialized
INFO - 2025-05-31 00:44:35 --> Email Class Initialized
DEBUG - 2025-05-31 00:44:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 00:44:35 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 00:44:35 --> Controller Class Initialized
INFO - 2025-05-31 00:44:35 --> Helper loaded: form_helper
INFO - 2025-05-31 00:44:35 --> Form Validation Class Initialized
DEBUG - 2025-05-31 00:44:35 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 00:44:35 --> Database Driver Class Initialized
INFO - 2025-05-31 00:44:35 --> Model "Crud" initialized
ERROR - 2025-05-31 00:44:35 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 00:44:35 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 00:44:36 --> Config Class Initialized
INFO - 2025-05-31 00:44:36 --> Hooks Class Initialized
DEBUG - 2025-05-31 00:44:36 --> UTF-8 Support Enabled
INFO - 2025-05-31 00:44:36 --> Utf8 Class Initialized
INFO - 2025-05-31 00:44:36 --> URI Class Initialized
INFO - 2025-05-31 00:44:36 --> Router Class Initialized
INFO - 2025-05-31 00:44:36 --> Output Class Initialized
INFO - 2025-05-31 00:44:36 --> Security Class Initialized
DEBUG - 2025-05-31 00:44:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 00:44:36 --> Input Class Initialized
INFO - 2025-05-31 00:44:36 --> Language Class Initialized
INFO - 2025-05-31 00:44:36 --> Loader Class Initialized
INFO - 2025-05-31 00:44:36 --> Helper loaded: url_helper
INFO - 2025-05-31 00:44:36 --> Helper loaded: file_helper
INFO - 2025-05-31 00:44:36 --> Database Driver Class Initialized
INFO - 2025-05-31 00:44:36 --> Email Class Initialized
DEBUG - 2025-05-31 00:44:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 00:44:36 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 00:44:36 --> Controller Class Initialized
INFO - 2025-05-31 00:44:36 --> Helper loaded: form_helper
INFO - 2025-05-31 00:44:36 --> Form Validation Class Initialized
DEBUG - 2025-05-31 00:44:36 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 00:44:36 --> Database Driver Class Initialized
INFO - 2025-05-31 00:44:36 --> Model "Crud" initialized
ERROR - 2025-05-31 00:44:36 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 00:44:36 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:09:16 --> Config Class Initialized
INFO - 2025-05-31 07:09:16 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:09:16 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:09:16 --> Utf8 Class Initialized
INFO - 2025-05-31 07:09:16 --> URI Class Initialized
INFO - 2025-05-31 07:09:16 --> Router Class Initialized
INFO - 2025-05-31 07:09:16 --> Output Class Initialized
INFO - 2025-05-31 07:09:16 --> Security Class Initialized
DEBUG - 2025-05-31 07:09:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:09:16 --> Input Class Initialized
INFO - 2025-05-31 07:09:16 --> Language Class Initialized
INFO - 2025-05-31 07:09:16 --> Loader Class Initialized
INFO - 2025-05-31 07:09:16 --> Helper loaded: url_helper
INFO - 2025-05-31 07:09:16 --> Helper loaded: file_helper
INFO - 2025-05-31 07:09:16 --> Database Driver Class Initialized
INFO - 2025-05-31 07:09:16 --> Config Class Initialized
INFO - 2025-05-31 07:09:16 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:09:16 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:09:16 --> Utf8 Class Initialized
INFO - 2025-05-31 07:09:16 --> URI Class Initialized
INFO - 2025-05-31 07:09:16 --> Router Class Initialized
INFO - 2025-05-31 07:09:16 --> Output Class Initialized
INFO - 2025-05-31 07:09:16 --> Security Class Initialized
DEBUG - 2025-05-31 07:09:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:09:16 --> Input Class Initialized
INFO - 2025-05-31 07:09:16 --> Language Class Initialized
INFO - 2025-05-31 07:09:16 --> Loader Class Initialized
INFO - 2025-05-31 07:09:16 --> Helper loaded: url_helper
INFO - 2025-05-31 07:09:16 --> Helper loaded: file_helper
INFO - 2025-05-31 07:09:16 --> Database Driver Class Initialized
INFO - 2025-05-31 07:09:16 --> Email Class Initialized
INFO - 2025-05-31 07:09:16 --> Email Class Initialized
DEBUG - 2025-05-31 07:09:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 07:09:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:09:16 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:09:16 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:09:16 --> Controller Class Initialized
INFO - 2025-05-31 07:09:16 --> Controller Class Initialized
INFO - 2025-05-31 07:09:16 --> Helper loaded: form_helper
INFO - 2025-05-31 07:09:16 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:09:16 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:09:16 --> Database Driver Class Initialized
INFO - 2025-05-31 07:09:16 --> Helper loaded: form_helper
INFO - 2025-05-31 07:09:16 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:09:16 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:09:16 --> Database Driver Class Initialized
INFO - 2025-05-31 07:09:16 --> Model "Crud" initialized
ERROR - 2025-05-31 07:09:16 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:09:16 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:09:17 --> Model "Crud" initialized
ERROR - 2025-05-31 07:09:17 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:09:17 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:10:01 --> Config Class Initialized
INFO - 2025-05-31 07:10:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:10:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:10:01 --> Utf8 Class Initialized
INFO - 2025-05-31 07:10:01 --> URI Class Initialized
INFO - 2025-05-31 07:10:01 --> Router Class Initialized
INFO - 2025-05-31 07:10:01 --> Output Class Initialized
INFO - 2025-05-31 07:10:01 --> Security Class Initialized
DEBUG - 2025-05-31 07:10:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:10:01 --> Input Class Initialized
INFO - 2025-05-31 07:10:01 --> Language Class Initialized
INFO - 2025-05-31 07:10:01 --> Loader Class Initialized
INFO - 2025-05-31 07:10:01 --> Helper loaded: url_helper
INFO - 2025-05-31 07:10:01 --> Helper loaded: file_helper
INFO - 2025-05-31 07:10:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:10:01 --> Config Class Initialized
INFO - 2025-05-31 07:10:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:10:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:10:01 --> Utf8 Class Initialized
INFO - 2025-05-31 07:10:01 --> URI Class Initialized
INFO - 2025-05-31 07:10:01 --> Router Class Initialized
INFO - 2025-05-31 07:10:01 --> Output Class Initialized
INFO - 2025-05-31 07:10:01 --> Security Class Initialized
DEBUG - 2025-05-31 07:10:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:10:01 --> Input Class Initialized
INFO - 2025-05-31 07:10:01 --> Language Class Initialized
INFO - 2025-05-31 07:10:01 --> Loader Class Initialized
INFO - 2025-05-31 07:10:01 --> Helper loaded: url_helper
INFO - 2025-05-31 07:10:01 --> Helper loaded: file_helper
INFO - 2025-05-31 07:10:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:10:01 --> Email Class Initialized
DEBUG - 2025-05-31 07:10:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:10:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:10:01 --> Controller Class Initialized
INFO - 2025-05-31 07:10:01 --> Helper loaded: form_helper
INFO - 2025-05-31 07:10:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:10:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:10:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:10:01 --> Email Class Initialized
DEBUG - 2025-05-31 07:10:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:10:01 --> Model "Crud" initialized
ERROR - 2025-05-31 07:10:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:10:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:10:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:10:01 --> Controller Class Initialized
INFO - 2025-05-31 07:10:01 --> Helper loaded: form_helper
INFO - 2025-05-31 07:10:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:10:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:10:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:10:01 --> Model "Crud" initialized
ERROR - 2025-05-31 07:10:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:10:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:11:01 --> Config Class Initialized
INFO - 2025-05-31 07:11:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:11:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:11:01 --> Utf8 Class Initialized
INFO - 2025-05-31 07:11:01 --> URI Class Initialized
INFO - 2025-05-31 07:11:01 --> Router Class Initialized
INFO - 2025-05-31 07:11:01 --> Output Class Initialized
INFO - 2025-05-31 07:11:01 --> Security Class Initialized
DEBUG - 2025-05-31 07:11:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:11:01 --> Input Class Initialized
INFO - 2025-05-31 07:11:01 --> Language Class Initialized
INFO - 2025-05-31 07:11:01 --> Loader Class Initialized
INFO - 2025-05-31 07:11:01 --> Helper loaded: url_helper
INFO - 2025-05-31 07:11:01 --> Helper loaded: file_helper
INFO - 2025-05-31 07:11:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:11:01 --> Email Class Initialized
DEBUG - 2025-05-31 07:11:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:11:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:11:01 --> Controller Class Initialized
INFO - 2025-05-31 07:11:01 --> Helper loaded: form_helper
INFO - 2025-05-31 07:11:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:11:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:11:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:11:01 --> Config Class Initialized
INFO - 2025-05-31 07:11:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:11:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:11:01 --> Utf8 Class Initialized
INFO - 2025-05-31 07:11:01 --> URI Class Initialized
INFO - 2025-05-31 07:11:01 --> Router Class Initialized
INFO - 2025-05-31 07:11:01 --> Output Class Initialized
INFO - 2025-05-31 07:11:01 --> Security Class Initialized
DEBUG - 2025-05-31 07:11:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:11:01 --> Input Class Initialized
INFO - 2025-05-31 07:11:01 --> Language Class Initialized
INFO - 2025-05-31 07:11:01 --> Loader Class Initialized
INFO - 2025-05-31 07:11:01 --> Helper loaded: url_helper
INFO - 2025-05-31 07:11:01 --> Helper loaded: file_helper
INFO - 2025-05-31 07:11:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:11:01 --> Model "Crud" initialized
ERROR - 2025-05-31 07:11:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:11:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:11:01 --> Email Class Initialized
DEBUG - 2025-05-31 07:11:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:11:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:11:01 --> Controller Class Initialized
INFO - 2025-05-31 07:11:01 --> Helper loaded: form_helper
INFO - 2025-05-31 07:11:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:11:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:11:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:11:01 --> Model "Crud" initialized
ERROR - 2025-05-31 07:11:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:11:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:12:01 --> Config Class Initialized
INFO - 2025-05-31 07:12:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:12:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:12:01 --> Utf8 Class Initialized
INFO - 2025-05-31 07:12:01 --> URI Class Initialized
INFO - 2025-05-31 07:12:01 --> Router Class Initialized
INFO - 2025-05-31 07:12:01 --> Output Class Initialized
INFO - 2025-05-31 07:12:01 --> Security Class Initialized
DEBUG - 2025-05-31 07:12:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:12:01 --> Input Class Initialized
INFO - 2025-05-31 07:12:01 --> Language Class Initialized
INFO - 2025-05-31 07:12:01 --> Loader Class Initialized
INFO - 2025-05-31 07:12:01 --> Helper loaded: url_helper
INFO - 2025-05-31 07:12:01 --> Helper loaded: file_helper
INFO - 2025-05-31 07:12:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:12:01 --> Email Class Initialized
DEBUG - 2025-05-31 07:12:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:12:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:12:01 --> Controller Class Initialized
INFO - 2025-05-31 07:12:01 --> Helper loaded: form_helper
INFO - 2025-05-31 07:12:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:12:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:12:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:12:01 --> Model "Crud" initialized
ERROR - 2025-05-31 07:12:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:12:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:12:01 --> Config Class Initialized
INFO - 2025-05-31 07:12:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:12:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:12:01 --> Utf8 Class Initialized
INFO - 2025-05-31 07:12:01 --> URI Class Initialized
INFO - 2025-05-31 07:12:01 --> Router Class Initialized
INFO - 2025-05-31 07:12:01 --> Output Class Initialized
INFO - 2025-05-31 07:12:01 --> Security Class Initialized
DEBUG - 2025-05-31 07:12:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:12:01 --> Input Class Initialized
INFO - 2025-05-31 07:12:01 --> Language Class Initialized
INFO - 2025-05-31 07:12:01 --> Loader Class Initialized
INFO - 2025-05-31 07:12:01 --> Helper loaded: url_helper
INFO - 2025-05-31 07:12:01 --> Helper loaded: file_helper
INFO - 2025-05-31 07:12:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:12:01 --> Email Class Initialized
DEBUG - 2025-05-31 07:12:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:12:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:12:01 --> Controller Class Initialized
INFO - 2025-05-31 07:12:01 --> Helper loaded: form_helper
INFO - 2025-05-31 07:12:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:12:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:12:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:12:01 --> Model "Crud" initialized
ERROR - 2025-05-31 07:12:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:12:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:13:01 --> Config Class Initialized
INFO - 2025-05-31 07:13:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:13:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:13:01 --> Utf8 Class Initialized
INFO - 2025-05-31 07:13:01 --> URI Class Initialized
INFO - 2025-05-31 07:13:01 --> Router Class Initialized
INFO - 2025-05-31 07:13:01 --> Output Class Initialized
INFO - 2025-05-31 07:13:01 --> Config Class Initialized
INFO - 2025-05-31 07:13:01 --> Security Class Initialized
INFO - 2025-05-31 07:13:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:13:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-05-31 07:13:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:13:01 --> Input Class Initialized
INFO - 2025-05-31 07:13:01 --> Utf8 Class Initialized
INFO - 2025-05-31 07:13:01 --> Language Class Initialized
INFO - 2025-05-31 07:13:01 --> URI Class Initialized
INFO - 2025-05-31 07:13:01 --> Router Class Initialized
INFO - 2025-05-31 07:13:01 --> Loader Class Initialized
INFO - 2025-05-31 07:13:01 --> Output Class Initialized
INFO - 2025-05-31 07:13:01 --> Security Class Initialized
DEBUG - 2025-05-31 07:13:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:13:01 --> Input Class Initialized
INFO - 2025-05-31 07:13:01 --> Helper loaded: url_helper
INFO - 2025-05-31 07:13:01 --> Language Class Initialized
INFO - 2025-05-31 07:13:01 --> Helper loaded: file_helper
INFO - 2025-05-31 07:13:01 --> Loader Class Initialized
INFO - 2025-05-31 07:13:01 --> Helper loaded: url_helper
INFO - 2025-05-31 07:13:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:13:01 --> Helper loaded: file_helper
INFO - 2025-05-31 07:13:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:13:01 --> Email Class Initialized
DEBUG - 2025-05-31 07:13:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:13:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:13:01 --> Controller Class Initialized
INFO - 2025-05-31 07:13:01 --> Helper loaded: form_helper
INFO - 2025-05-31 07:13:01 --> Email Class Initialized
INFO - 2025-05-31 07:13:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:13:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-05-31 07:13:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:13:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:13:01 --> Model "Crud" initialized
ERROR - 2025-05-31 07:13:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:13:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:13:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:13:01 --> Controller Class Initialized
INFO - 2025-05-31 07:13:01 --> Helper loaded: form_helper
INFO - 2025-05-31 07:13:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:13:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:13:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:13:01 --> Model "Crud" initialized
ERROR - 2025-05-31 07:13:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:13:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:14:01 --> Config Class Initialized
INFO - 2025-05-31 07:14:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:14:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:14:01 --> Utf8 Class Initialized
INFO - 2025-05-31 07:14:01 --> URI Class Initialized
INFO - 2025-05-31 07:14:01 --> Router Class Initialized
INFO - 2025-05-31 07:14:01 --> Output Class Initialized
INFO - 2025-05-31 07:14:01 --> Security Class Initialized
DEBUG - 2025-05-31 07:14:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:14:01 --> Input Class Initialized
INFO - 2025-05-31 07:14:01 --> Language Class Initialized
INFO - 2025-05-31 07:14:01 --> Config Class Initialized
INFO - 2025-05-31 07:14:01 --> Loader Class Initialized
INFO - 2025-05-31 07:14:01 --> Hooks Class Initialized
INFO - 2025-05-31 07:14:01 --> Helper loaded: url_helper
DEBUG - 2025-05-31 07:14:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:14:01 --> Helper loaded: file_helper
INFO - 2025-05-31 07:14:01 --> Utf8 Class Initialized
INFO - 2025-05-31 07:14:01 --> URI Class Initialized
INFO - 2025-05-31 07:14:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:14:01 --> Router Class Initialized
INFO - 2025-05-31 07:14:01 --> Output Class Initialized
INFO - 2025-05-31 07:14:01 --> Security Class Initialized
DEBUG - 2025-05-31 07:14:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:14:01 --> Input Class Initialized
INFO - 2025-05-31 07:14:01 --> Language Class Initialized
INFO - 2025-05-31 07:14:01 --> Loader Class Initialized
INFO - 2025-05-31 07:14:01 --> Helper loaded: url_helper
INFO - 2025-05-31 07:14:01 --> Helper loaded: file_helper
INFO - 2025-05-31 07:14:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:14:01 --> Email Class Initialized
DEBUG - 2025-05-31 07:14:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:14:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:14:01 --> Controller Class Initialized
INFO - 2025-05-31 07:14:01 --> Helper loaded: form_helper
INFO - 2025-05-31 07:14:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:14:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:14:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:14:01 --> Email Class Initialized
DEBUG - 2025-05-31 07:14:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:14:01 --> Model "Crud" initialized
ERROR - 2025-05-31 07:14:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:14:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:14:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:14:01 --> Controller Class Initialized
INFO - 2025-05-31 07:14:01 --> Helper loaded: form_helper
INFO - 2025-05-31 07:14:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:14:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:14:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:14:01 --> Model "Crud" initialized
ERROR - 2025-05-31 07:14:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:14:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:14:30 --> Config Class Initialized
INFO - 2025-05-31 07:14:30 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:14:30 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:14:30 --> Utf8 Class Initialized
INFO - 2025-05-31 07:14:30 --> URI Class Initialized
INFO - 2025-05-31 07:14:30 --> Router Class Initialized
INFO - 2025-05-31 07:14:30 --> Output Class Initialized
INFO - 2025-05-31 07:14:30 --> Security Class Initialized
DEBUG - 2025-05-31 07:14:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:14:30 --> Input Class Initialized
INFO - 2025-05-31 07:14:30 --> Language Class Initialized
INFO - 2025-05-31 07:14:30 --> Loader Class Initialized
INFO - 2025-05-31 07:14:30 --> Helper loaded: url_helper
INFO - 2025-05-31 07:14:30 --> Helper loaded: file_helper
INFO - 2025-05-31 07:14:30 --> Database Driver Class Initialized
INFO - 2025-05-31 07:14:30 --> Config Class Initialized
INFO - 2025-05-31 07:14:30 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:14:30 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:14:30 --> Utf8 Class Initialized
INFO - 2025-05-31 07:14:30 --> URI Class Initialized
INFO - 2025-05-31 07:14:30 --> Router Class Initialized
INFO - 2025-05-31 07:14:30 --> Output Class Initialized
INFO - 2025-05-31 07:14:30 --> Security Class Initialized
DEBUG - 2025-05-31 07:14:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:14:30 --> Input Class Initialized
INFO - 2025-05-31 07:14:30 --> Language Class Initialized
INFO - 2025-05-31 07:14:30 --> Loader Class Initialized
INFO - 2025-05-31 07:14:30 --> Helper loaded: url_helper
INFO - 2025-05-31 07:14:30 --> Helper loaded: file_helper
INFO - 2025-05-31 07:14:30 --> Database Driver Class Initialized
INFO - 2025-05-31 07:14:30 --> Email Class Initialized
DEBUG - 2025-05-31 07:14:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:14:30 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:14:30 --> Controller Class Initialized
INFO - 2025-05-31 07:14:30 --> Helper loaded: form_helper
INFO - 2025-05-31 07:14:30 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:14:30 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:14:30 --> Database Driver Class Initialized
INFO - 2025-05-31 07:14:30 --> Model "Crud" initialized
ERROR - 2025-05-31 07:14:30 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:14:30 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:14:30 --> Email Class Initialized
DEBUG - 2025-05-31 07:14:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:14:30 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:14:30 --> Controller Class Initialized
INFO - 2025-05-31 07:14:30 --> Helper loaded: form_helper
INFO - 2025-05-31 07:14:30 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:14:30 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:14:30 --> Database Driver Class Initialized
INFO - 2025-05-31 07:14:30 --> Model "Crud" initialized
ERROR - 2025-05-31 07:14:30 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:14:30 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:23:02 --> Config Class Initialized
INFO - 2025-05-31 07:23:02 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:23:02 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:23:02 --> Utf8 Class Initialized
INFO - 2025-05-31 07:23:02 --> URI Class Initialized
INFO - 2025-05-31 07:23:02 --> Router Class Initialized
INFO - 2025-05-31 07:23:02 --> Output Class Initialized
INFO - 2025-05-31 07:23:02 --> Security Class Initialized
DEBUG - 2025-05-31 07:23:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:23:02 --> Input Class Initialized
INFO - 2025-05-31 07:23:02 --> Language Class Initialized
INFO - 2025-05-31 07:23:02 --> Loader Class Initialized
INFO - 2025-05-31 07:23:02 --> Helper loaded: url_helper
INFO - 2025-05-31 07:23:02 --> Helper loaded: file_helper
INFO - 2025-05-31 07:23:02 --> Database Driver Class Initialized
INFO - 2025-05-31 07:23:02 --> Email Class Initialized
DEBUG - 2025-05-31 07:23:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:23:02 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:23:02 --> Controller Class Initialized
INFO - 2025-05-31 07:23:02 --> Helper loaded: form_helper
INFO - 2025-05-31 07:23:02 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:23:02 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:23:02 --> Database Driver Class Initialized
INFO - 2025-05-31 07:23:02 --> Config Class Initialized
INFO - 2025-05-31 07:23:02 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:23:02 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:23:02 --> Utf8 Class Initialized
INFO - 2025-05-31 07:23:02 --> URI Class Initialized
INFO - 2025-05-31 07:23:02 --> Router Class Initialized
INFO - 2025-05-31 07:23:02 --> Output Class Initialized
INFO - 2025-05-31 07:23:02 --> Security Class Initialized
DEBUG - 2025-05-31 07:23:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:23:02 --> Input Class Initialized
INFO - 2025-05-31 07:23:02 --> Language Class Initialized
INFO - 2025-05-31 07:23:02 --> Loader Class Initialized
INFO - 2025-05-31 07:23:02 --> Helper loaded: url_helper
INFO - 2025-05-31 07:23:02 --> Helper loaded: file_helper
INFO - 2025-05-31 07:23:02 --> Database Driver Class Initialized
INFO - 2025-05-31 07:23:02 --> Email Class Initialized
DEBUG - 2025-05-31 07:23:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:23:02 --> Model "Crud" initialized
ERROR - 2025-05-31 07:23:02 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:23:02 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:23:02 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:23:02 --> Controller Class Initialized
INFO - 2025-05-31 07:23:02 --> Helper loaded: form_helper
INFO - 2025-05-31 07:23:02 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:23:02 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:23:02 --> Database Driver Class Initialized
INFO - 2025-05-31 07:23:03 --> Model "Crud" initialized
ERROR - 2025-05-31 07:23:03 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:23:03 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:24:01 --> Config Class Initialized
INFO - 2025-05-31 07:24:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:24:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:24:01 --> Utf8 Class Initialized
INFO - 2025-05-31 07:24:01 --> URI Class Initialized
INFO - 2025-05-31 07:24:01 --> Router Class Initialized
INFO - 2025-05-31 07:24:01 --> Output Class Initialized
INFO - 2025-05-31 07:24:01 --> Security Class Initialized
DEBUG - 2025-05-31 07:24:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:24:01 --> Input Class Initialized
INFO - 2025-05-31 07:24:01 --> Language Class Initialized
INFO - 2025-05-31 07:24:01 --> Loader Class Initialized
INFO - 2025-05-31 07:24:01 --> Helper loaded: url_helper
INFO - 2025-05-31 07:24:01 --> Helper loaded: file_helper
INFO - 2025-05-31 07:24:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:24:01 --> Config Class Initialized
INFO - 2025-05-31 07:24:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:24:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:24:01 --> Utf8 Class Initialized
INFO - 2025-05-31 07:24:01 --> URI Class Initialized
INFO - 2025-05-31 07:24:01 --> Router Class Initialized
INFO - 2025-05-31 07:24:01 --> Output Class Initialized
INFO - 2025-05-31 07:24:01 --> Security Class Initialized
DEBUG - 2025-05-31 07:24:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:24:01 --> Input Class Initialized
INFO - 2025-05-31 07:24:01 --> Language Class Initialized
INFO - 2025-05-31 07:24:01 --> Loader Class Initialized
INFO - 2025-05-31 07:24:01 --> Helper loaded: url_helper
INFO - 2025-05-31 07:24:01 --> Helper loaded: file_helper
INFO - 2025-05-31 07:24:01 --> Email Class Initialized
INFO - 2025-05-31 07:24:01 --> Database Driver Class Initialized
DEBUG - 2025-05-31 07:24:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:24:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:24:01 --> Controller Class Initialized
INFO - 2025-05-31 07:24:01 --> Helper loaded: form_helper
INFO - 2025-05-31 07:24:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:24:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:24:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:24:01 --> Email Class Initialized
DEBUG - 2025-05-31 07:24:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:24:01 --> Model "Crud" initialized
ERROR - 2025-05-31 07:24:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:24:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:24:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:24:01 --> Controller Class Initialized
INFO - 2025-05-31 07:24:01 --> Helper loaded: form_helper
INFO - 2025-05-31 07:24:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:24:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:24:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:24:01 --> Model "Crud" initialized
ERROR - 2025-05-31 07:24:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:24:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:25:01 --> Config Class Initialized
INFO - 2025-05-31 07:25:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:25:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:25:01 --> Config Class Initialized
INFO - 2025-05-31 07:25:01 --> Utf8 Class Initialized
INFO - 2025-05-31 07:25:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:25:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:25:01 --> URI Class Initialized
INFO - 2025-05-31 07:25:01 --> Utf8 Class Initialized
INFO - 2025-05-31 07:25:01 --> Router Class Initialized
INFO - 2025-05-31 07:25:01 --> URI Class Initialized
INFO - 2025-05-31 07:25:01 --> Output Class Initialized
INFO - 2025-05-31 07:25:01 --> Router Class Initialized
INFO - 2025-05-31 07:25:01 --> Security Class Initialized
INFO - 2025-05-31 07:25:01 --> Output Class Initialized
DEBUG - 2025-05-31 07:25:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:25:01 --> Security Class Initialized
INFO - 2025-05-31 07:25:01 --> Input Class Initialized
DEBUG - 2025-05-31 07:25:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:25:01 --> Language Class Initialized
INFO - 2025-05-31 07:25:01 --> Input Class Initialized
INFO - 2025-05-31 07:25:01 --> Language Class Initialized
INFO - 2025-05-31 07:25:01 --> Loader Class Initialized
INFO - 2025-05-31 07:25:01 --> Loader Class Initialized
INFO - 2025-05-31 07:25:01 --> Helper loaded: url_helper
INFO - 2025-05-31 07:25:01 --> Helper loaded: file_helper
INFO - 2025-05-31 07:25:01 --> Helper loaded: url_helper
INFO - 2025-05-31 07:25:01 --> Helper loaded: file_helper
INFO - 2025-05-31 07:25:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:25:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:25:01 --> Email Class Initialized
DEBUG - 2025-05-31 07:25:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:25:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:25:01 --> Controller Class Initialized
INFO - 2025-05-31 07:25:01 --> Helper loaded: form_helper
INFO - 2025-05-31 07:25:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:25:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:25:01 --> Email Class Initialized
INFO - 2025-05-31 07:25:01 --> Database Driver Class Initialized
DEBUG - 2025-05-31 07:25:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:25:01 --> Model "Crud" initialized
ERROR - 2025-05-31 07:25:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:25:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:25:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:25:01 --> Controller Class Initialized
INFO - 2025-05-31 07:25:01 --> Helper loaded: form_helper
INFO - 2025-05-31 07:25:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:25:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:25:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:25:01 --> Model "Crud" initialized
ERROR - 2025-05-31 07:25:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:25:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:26:01 --> Config Class Initialized
INFO - 2025-05-31 07:26:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:26:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:26:01 --> Utf8 Class Initialized
INFO - 2025-05-31 07:26:01 --> URI Class Initialized
INFO - 2025-05-31 07:26:01 --> Router Class Initialized
INFO - 2025-05-31 07:26:01 --> Output Class Initialized
INFO - 2025-05-31 07:26:01 --> Security Class Initialized
DEBUG - 2025-05-31 07:26:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:26:01 --> Input Class Initialized
INFO - 2025-05-31 07:26:01 --> Language Class Initialized
INFO - 2025-05-31 07:26:01 --> Loader Class Initialized
INFO - 2025-05-31 07:26:01 --> Helper loaded: url_helper
INFO - 2025-05-31 07:26:01 --> Helper loaded: file_helper
INFO - 2025-05-31 07:26:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:26:01 --> Config Class Initialized
INFO - 2025-05-31 07:26:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:26:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:26:01 --> Utf8 Class Initialized
INFO - 2025-05-31 07:26:01 --> Email Class Initialized
INFO - 2025-05-31 07:26:01 --> URI Class Initialized
DEBUG - 2025-05-31 07:26:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:26:01 --> Router Class Initialized
INFO - 2025-05-31 07:26:01 --> Output Class Initialized
INFO - 2025-05-31 07:26:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:26:01 --> Security Class Initialized
INFO - 2025-05-31 07:26:01 --> Controller Class Initialized
DEBUG - 2025-05-31 07:26:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:26:01 --> Helper loaded: form_helper
INFO - 2025-05-31 07:26:01 --> Input Class Initialized
INFO - 2025-05-31 07:26:01 --> Form Validation Class Initialized
INFO - 2025-05-31 07:26:01 --> Language Class Initialized
DEBUG - 2025-05-31 07:26:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:26:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:26:01 --> Loader Class Initialized
INFO - 2025-05-31 07:26:01 --> Helper loaded: url_helper
INFO - 2025-05-31 07:26:01 --> Helper loaded: file_helper
INFO - 2025-05-31 07:26:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:26:01 --> Model "Crud" initialized
ERROR - 2025-05-31 07:26:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:26:01 --> Email Class Initialized
INFO - 2025-05-31 07:26:01 --> Language file loaded: language/english/db_lang.php
DEBUG - 2025-05-31 07:26:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:26:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:26:01 --> Controller Class Initialized
INFO - 2025-05-31 07:26:01 --> Helper loaded: form_helper
INFO - 2025-05-31 07:26:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:26:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:26:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:26:01 --> Model "Crud" initialized
ERROR - 2025-05-31 07:26:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:26:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:27:01 --> Config Class Initialized
INFO - 2025-05-31 07:27:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:27:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:27:01 --> Utf8 Class Initialized
INFO - 2025-05-31 07:27:01 --> URI Class Initialized
INFO - 2025-05-31 07:27:01 --> Router Class Initialized
INFO - 2025-05-31 07:27:01 --> Output Class Initialized
INFO - 2025-05-31 07:27:01 --> Security Class Initialized
DEBUG - 2025-05-31 07:27:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:27:01 --> Input Class Initialized
INFO - 2025-05-31 07:27:01 --> Language Class Initialized
INFO - 2025-05-31 07:27:01 --> Loader Class Initialized
INFO - 2025-05-31 07:27:01 --> Helper loaded: url_helper
INFO - 2025-05-31 07:27:01 --> Helper loaded: file_helper
INFO - 2025-05-31 07:27:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:27:01 --> Email Class Initialized
DEBUG - 2025-05-31 07:27:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:27:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:27:01 --> Controller Class Initialized
INFO - 2025-05-31 07:27:01 --> Helper loaded: form_helper
INFO - 2025-05-31 07:27:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:27:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:27:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:27:01 --> Config Class Initialized
INFO - 2025-05-31 07:27:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:27:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:27:01 --> Utf8 Class Initialized
INFO - 2025-05-31 07:27:01 --> URI Class Initialized
INFO - 2025-05-31 07:27:01 --> Router Class Initialized
INFO - 2025-05-31 07:27:01 --> Output Class Initialized
INFO - 2025-05-31 07:27:01 --> Security Class Initialized
DEBUG - 2025-05-31 07:27:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:27:01 --> Input Class Initialized
INFO - 2025-05-31 07:27:01 --> Language Class Initialized
INFO - 2025-05-31 07:27:01 --> Loader Class Initialized
INFO - 2025-05-31 07:27:01 --> Helper loaded: url_helper
INFO - 2025-05-31 07:27:01 --> Helper loaded: file_helper
INFO - 2025-05-31 07:27:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:27:01 --> Model "Crud" initialized
ERROR - 2025-05-31 07:27:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:27:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:27:01 --> Email Class Initialized
DEBUG - 2025-05-31 07:27:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:27:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:27:01 --> Controller Class Initialized
INFO - 2025-05-31 07:27:01 --> Helper loaded: form_helper
INFO - 2025-05-31 07:27:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:27:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:27:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:27:01 --> Model "Crud" initialized
ERROR - 2025-05-31 07:27:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:27:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:28:01 --> Config Class Initialized
INFO - 2025-05-31 07:28:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:28:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:28:01 --> Utf8 Class Initialized
INFO - 2025-05-31 07:28:01 --> URI Class Initialized
INFO - 2025-05-31 07:28:01 --> Router Class Initialized
INFO - 2025-05-31 07:28:01 --> Output Class Initialized
INFO - 2025-05-31 07:28:01 --> Security Class Initialized
INFO - 2025-05-31 07:28:01 --> Config Class Initialized
DEBUG - 2025-05-31 07:28:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:28:01 --> Hooks Class Initialized
INFO - 2025-05-31 07:28:01 --> Input Class Initialized
INFO - 2025-05-31 07:28:01 --> Language Class Initialized
DEBUG - 2025-05-31 07:28:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:28:01 --> Utf8 Class Initialized
INFO - 2025-05-31 07:28:01 --> Loader Class Initialized
INFO - 2025-05-31 07:28:01 --> URI Class Initialized
INFO - 2025-05-31 07:28:01 --> Helper loaded: url_helper
INFO - 2025-05-31 07:28:01 --> Helper loaded: file_helper
INFO - 2025-05-31 07:28:01 --> Router Class Initialized
INFO - 2025-05-31 07:28:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:28:01 --> Output Class Initialized
INFO - 2025-05-31 07:28:01 --> Security Class Initialized
DEBUG - 2025-05-31 07:28:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:28:01 --> Input Class Initialized
INFO - 2025-05-31 07:28:01 --> Language Class Initialized
INFO - 2025-05-31 07:28:01 --> Loader Class Initialized
INFO - 2025-05-31 07:28:01 --> Helper loaded: url_helper
INFO - 2025-05-31 07:28:01 --> Helper loaded: file_helper
INFO - 2025-05-31 07:28:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:28:01 --> Email Class Initialized
DEBUG - 2025-05-31 07:28:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:28:01 --> Email Class Initialized
INFO - 2025-05-31 07:28:01 --> Session: Class initialized using 'files' driver.
DEBUG - 2025-05-31 07:28:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:28:01 --> Controller Class Initialized
INFO - 2025-05-31 07:28:01 --> Helper loaded: form_helper
INFO - 2025-05-31 07:28:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:28:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:28:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:28:01 --> Model "Crud" initialized
ERROR - 2025-05-31 07:28:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:28:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:28:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:28:01 --> Controller Class Initialized
INFO - 2025-05-31 07:28:01 --> Helper loaded: form_helper
INFO - 2025-05-31 07:28:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:28:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:28:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:28:01 --> Model "Crud" initialized
ERROR - 2025-05-31 07:28:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:28:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:28:30 --> Config Class Initialized
INFO - 2025-05-31 07:28:30 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:28:30 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:28:30 --> Utf8 Class Initialized
INFO - 2025-05-31 07:28:30 --> URI Class Initialized
INFO - 2025-05-31 07:28:30 --> Router Class Initialized
INFO - 2025-05-31 07:28:30 --> Output Class Initialized
INFO - 2025-05-31 07:28:30 --> Security Class Initialized
DEBUG - 2025-05-31 07:28:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:28:30 --> Input Class Initialized
INFO - 2025-05-31 07:28:30 --> Language Class Initialized
INFO - 2025-05-31 07:28:30 --> Loader Class Initialized
INFO - 2025-05-31 07:28:30 --> Helper loaded: url_helper
INFO - 2025-05-31 07:28:30 --> Helper loaded: file_helper
INFO - 2025-05-31 07:28:30 --> Database Driver Class Initialized
INFO - 2025-05-31 07:28:30 --> Config Class Initialized
INFO - 2025-05-31 07:28:30 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:28:30 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:28:30 --> Utf8 Class Initialized
INFO - 2025-05-31 07:28:30 --> URI Class Initialized
INFO - 2025-05-31 07:28:30 --> Router Class Initialized
INFO - 2025-05-31 07:28:30 --> Output Class Initialized
INFO - 2025-05-31 07:28:30 --> Security Class Initialized
DEBUG - 2025-05-31 07:28:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:28:30 --> Input Class Initialized
INFO - 2025-05-31 07:28:30 --> Language Class Initialized
INFO - 2025-05-31 07:28:30 --> Loader Class Initialized
INFO - 2025-05-31 07:28:30 --> Helper loaded: url_helper
INFO - 2025-05-31 07:28:30 --> Helper loaded: file_helper
INFO - 2025-05-31 07:28:30 --> Database Driver Class Initialized
INFO - 2025-05-31 07:28:30 --> Email Class Initialized
DEBUG - 2025-05-31 07:28:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:28:30 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:28:30 --> Controller Class Initialized
INFO - 2025-05-31 07:28:30 --> Helper loaded: form_helper
INFO - 2025-05-31 07:28:30 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:28:30 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:28:30 --> Database Driver Class Initialized
INFO - 2025-05-31 07:28:30 --> Email Class Initialized
DEBUG - 2025-05-31 07:28:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:28:30 --> Model "Crud" initialized
ERROR - 2025-05-31 07:28:30 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:28:30 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:28:30 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:28:30 --> Controller Class Initialized
INFO - 2025-05-31 07:28:30 --> Helper loaded: form_helper
INFO - 2025-05-31 07:28:30 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:28:30 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:28:30 --> Database Driver Class Initialized
INFO - 2025-05-31 07:28:30 --> Model "Crud" initialized
ERROR - 2025-05-31 07:28:30 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:28:30 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:36:30 --> Config Class Initialized
INFO - 2025-05-31 07:36:30 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:36:30 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:36:30 --> Utf8 Class Initialized
INFO - 2025-05-31 07:36:30 --> URI Class Initialized
INFO - 2025-05-31 07:36:30 --> Router Class Initialized
INFO - 2025-05-31 07:36:30 --> Output Class Initialized
INFO - 2025-05-31 07:36:30 --> Security Class Initialized
DEBUG - 2025-05-31 07:36:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:36:30 --> Input Class Initialized
INFO - 2025-05-31 07:36:30 --> Language Class Initialized
INFO - 2025-05-31 07:36:30 --> Loader Class Initialized
INFO - 2025-05-31 07:36:30 --> Helper loaded: url_helper
INFO - 2025-05-31 07:36:30 --> Helper loaded: file_helper
INFO - 2025-05-31 07:36:30 --> Database Driver Class Initialized
INFO - 2025-05-31 07:36:30 --> Email Class Initialized
DEBUG - 2025-05-31 07:36:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:36:30 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:36:30 --> Controller Class Initialized
INFO - 2025-05-31 07:36:30 --> Helper loaded: form_helper
INFO - 2025-05-31 07:36:30 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:36:30 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:36:30 --> Database Driver Class Initialized
INFO - 2025-05-31 07:36:30 --> Model "Crud" initialized
ERROR - 2025-05-31 07:36:30 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:36:30 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:36:30 --> Config Class Initialized
INFO - 2025-05-31 07:36:30 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:36:30 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:36:30 --> Utf8 Class Initialized
INFO - 2025-05-31 07:36:30 --> URI Class Initialized
INFO - 2025-05-31 07:36:30 --> Router Class Initialized
INFO - 2025-05-31 07:36:30 --> Output Class Initialized
INFO - 2025-05-31 07:36:30 --> Security Class Initialized
DEBUG - 2025-05-31 07:36:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:36:30 --> Input Class Initialized
INFO - 2025-05-31 07:36:30 --> Language Class Initialized
INFO - 2025-05-31 07:36:30 --> Loader Class Initialized
INFO - 2025-05-31 07:36:30 --> Helper loaded: url_helper
INFO - 2025-05-31 07:36:30 --> Helper loaded: file_helper
INFO - 2025-05-31 07:36:30 --> Database Driver Class Initialized
INFO - 2025-05-31 07:36:30 --> Email Class Initialized
DEBUG - 2025-05-31 07:36:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:36:30 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:36:30 --> Controller Class Initialized
INFO - 2025-05-31 07:36:30 --> Helper loaded: form_helper
INFO - 2025-05-31 07:36:30 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:36:30 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:36:30 --> Database Driver Class Initialized
INFO - 2025-05-31 07:36:30 --> Model "Crud" initialized
ERROR - 2025-05-31 07:36:30 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:36:30 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:37:01 --> Config Class Initialized
INFO - 2025-05-31 07:37:01 --> Config Class Initialized
INFO - 2025-05-31 07:37:01 --> Hooks Class Initialized
INFO - 2025-05-31 07:37:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:37:01 --> UTF-8 Support Enabled
DEBUG - 2025-05-31 07:37:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:37:01 --> Utf8 Class Initialized
INFO - 2025-05-31 07:37:01 --> Utf8 Class Initialized
INFO - 2025-05-31 07:37:01 --> URI Class Initialized
INFO - 2025-05-31 07:37:01 --> URI Class Initialized
INFO - 2025-05-31 07:37:01 --> Router Class Initialized
INFO - 2025-05-31 07:37:01 --> Router Class Initialized
INFO - 2025-05-31 07:37:01 --> Output Class Initialized
INFO - 2025-05-31 07:37:01 --> Output Class Initialized
INFO - 2025-05-31 07:37:01 --> Security Class Initialized
INFO - 2025-05-31 07:37:01 --> Security Class Initialized
DEBUG - 2025-05-31 07:37:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-05-31 07:37:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:37:01 --> Input Class Initialized
INFO - 2025-05-31 07:37:01 --> Input Class Initialized
INFO - 2025-05-31 07:37:01 --> Language Class Initialized
INFO - 2025-05-31 07:37:01 --> Language Class Initialized
INFO - 2025-05-31 07:37:01 --> Loader Class Initialized
INFO - 2025-05-31 07:37:01 --> Loader Class Initialized
INFO - 2025-05-31 07:37:01 --> Helper loaded: url_helper
INFO - 2025-05-31 07:37:01 --> Helper loaded: url_helper
INFO - 2025-05-31 07:37:01 --> Helper loaded: file_helper
INFO - 2025-05-31 07:37:01 --> Helper loaded: file_helper
INFO - 2025-05-31 07:37:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:37:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:37:01 --> Email Class Initialized
DEBUG - 2025-05-31 07:37:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:37:01 --> Email Class Initialized
INFO - 2025-05-31 07:37:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:37:01 --> Controller Class Initialized
DEBUG - 2025-05-31 07:37:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:37:01 --> Helper loaded: form_helper
INFO - 2025-05-31 07:37:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:37:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:37:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:37:01 --> Model "Crud" initialized
ERROR - 2025-05-31 07:37:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:37:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:37:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:37:01 --> Controller Class Initialized
INFO - 2025-05-31 07:37:01 --> Helper loaded: form_helper
INFO - 2025-05-31 07:37:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:37:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:37:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:37:01 --> Model "Crud" initialized
ERROR - 2025-05-31 07:37:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:37:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:38:01 --> Config Class Initialized
INFO - 2025-05-31 07:38:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:38:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:38:01 --> Utf8 Class Initialized
INFO - 2025-05-31 07:38:01 --> URI Class Initialized
INFO - 2025-05-31 07:38:01 --> Router Class Initialized
INFO - 2025-05-31 07:38:01 --> Output Class Initialized
INFO - 2025-05-31 07:38:01 --> Security Class Initialized
DEBUG - 2025-05-31 07:38:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:38:01 --> Input Class Initialized
INFO - 2025-05-31 07:38:01 --> Language Class Initialized
INFO - 2025-05-31 07:38:01 --> Loader Class Initialized
INFO - 2025-05-31 07:38:01 --> Helper loaded: url_helper
INFO - 2025-05-31 07:38:01 --> Helper loaded: file_helper
INFO - 2025-05-31 07:38:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:38:01 --> Config Class Initialized
INFO - 2025-05-31 07:38:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:38:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:38:01 --> Utf8 Class Initialized
INFO - 2025-05-31 07:38:01 --> URI Class Initialized
INFO - 2025-05-31 07:38:01 --> Router Class Initialized
INFO - 2025-05-31 07:38:01 --> Output Class Initialized
INFO - 2025-05-31 07:38:01 --> Security Class Initialized
DEBUG - 2025-05-31 07:38:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:38:01 --> Input Class Initialized
INFO - 2025-05-31 07:38:01 --> Language Class Initialized
INFO - 2025-05-31 07:38:01 --> Loader Class Initialized
INFO - 2025-05-31 07:38:01 --> Helper loaded: url_helper
INFO - 2025-05-31 07:38:01 --> Helper loaded: file_helper
INFO - 2025-05-31 07:38:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:38:01 --> Email Class Initialized
DEBUG - 2025-05-31 07:38:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:38:01 --> Email Class Initialized
INFO - 2025-05-31 07:38:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:38:01 --> Controller Class Initialized
DEBUG - 2025-05-31 07:38:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:38:01 --> Helper loaded: form_helper
INFO - 2025-05-31 07:38:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:38:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:38:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:38:01 --> Model "Crud" initialized
ERROR - 2025-05-31 07:38:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:38:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:38:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:38:01 --> Controller Class Initialized
INFO - 2025-05-31 07:38:01 --> Helper loaded: form_helper
INFO - 2025-05-31 07:38:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:38:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:38:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:38:01 --> Model "Crud" initialized
ERROR - 2025-05-31 07:38:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:38:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:39:02 --> Config Class Initialized
INFO - 2025-05-31 07:39:02 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:39:02 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:39:02 --> Utf8 Class Initialized
INFO - 2025-05-31 07:39:02 --> URI Class Initialized
INFO - 2025-05-31 07:39:02 --> Router Class Initialized
INFO - 2025-05-31 07:39:02 --> Output Class Initialized
INFO - 2025-05-31 07:39:02 --> Security Class Initialized
DEBUG - 2025-05-31 07:39:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:39:02 --> Input Class Initialized
INFO - 2025-05-31 07:39:02 --> Language Class Initialized
INFO - 2025-05-31 07:39:02 --> Loader Class Initialized
INFO - 2025-05-31 07:39:02 --> Helper loaded: url_helper
INFO - 2025-05-31 07:39:02 --> Helper loaded: file_helper
INFO - 2025-05-31 07:39:02 --> Database Driver Class Initialized
INFO - 2025-05-31 07:39:02 --> Email Class Initialized
DEBUG - 2025-05-31 07:39:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:39:02 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:39:02 --> Controller Class Initialized
INFO - 2025-05-31 07:39:02 --> Helper loaded: form_helper
INFO - 2025-05-31 07:39:02 --> Config Class Initialized
INFO - 2025-05-31 07:39:02 --> Form Validation Class Initialized
INFO - 2025-05-31 07:39:02 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:39:02 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:39:02 --> Database Driver Class Initialized
DEBUG - 2025-05-31 07:39:02 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:39:02 --> Utf8 Class Initialized
INFO - 2025-05-31 07:39:02 --> URI Class Initialized
INFO - 2025-05-31 07:39:02 --> Router Class Initialized
INFO - 2025-05-31 07:39:02 --> Output Class Initialized
INFO - 2025-05-31 07:39:02 --> Security Class Initialized
DEBUG - 2025-05-31 07:39:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:39:02 --> Input Class Initialized
INFO - 2025-05-31 07:39:02 --> Language Class Initialized
INFO - 2025-05-31 07:39:02 --> Loader Class Initialized
INFO - 2025-05-31 07:39:02 --> Helper loaded: url_helper
INFO - 2025-05-31 07:39:02 --> Helper loaded: file_helper
INFO - 2025-05-31 07:39:02 --> Database Driver Class Initialized
INFO - 2025-05-31 07:39:02 --> Model "Crud" initialized
ERROR - 2025-05-31 07:39:02 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:39:02 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:39:02 --> Email Class Initialized
DEBUG - 2025-05-31 07:39:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:39:02 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:39:02 --> Controller Class Initialized
INFO - 2025-05-31 07:39:02 --> Helper loaded: form_helper
INFO - 2025-05-31 07:39:02 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:39:02 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:39:02 --> Database Driver Class Initialized
INFO - 2025-05-31 07:39:02 --> Model "Crud" initialized
ERROR - 2025-05-31 07:39:02 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:39:02 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:39:27 --> Config Class Initialized
INFO - 2025-05-31 07:39:27 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:39:27 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:39:27 --> Utf8 Class Initialized
INFO - 2025-05-31 07:39:27 --> URI Class Initialized
INFO - 2025-05-31 07:39:27 --> Router Class Initialized
INFO - 2025-05-31 07:39:27 --> Output Class Initialized
INFO - 2025-05-31 07:39:27 --> Security Class Initialized
DEBUG - 2025-05-31 07:39:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:39:27 --> Input Class Initialized
INFO - 2025-05-31 07:39:27 --> Language Class Initialized
INFO - 2025-05-31 07:39:27 --> Loader Class Initialized
INFO - 2025-05-31 07:39:27 --> Helper loaded: url_helper
INFO - 2025-05-31 07:39:27 --> Helper loaded: file_helper
INFO - 2025-05-31 07:39:27 --> Database Driver Class Initialized
INFO - 2025-05-31 07:39:27 --> Email Class Initialized
DEBUG - 2025-05-31 07:39:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:39:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:39:27 --> Controller Class Initialized
INFO - 2025-05-31 07:39:27 --> Helper loaded: form_helper
INFO - 2025-05-31 07:39:27 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:39:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:39:27 --> Database Driver Class Initialized
INFO - 2025-05-31 07:39:27 --> Model "Crud" initialized
INFO - 2025-05-31 07:39:27 --> Config Class Initialized
INFO - 2025-05-31 07:39:27 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:39:27 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:39:27 --> Utf8 Class Initialized
INFO - 2025-05-31 07:39:27 --> URI Class Initialized
INFO - 2025-05-31 07:39:27 --> Router Class Initialized
INFO - 2025-05-31 07:39:27 --> Output Class Initialized
INFO - 2025-05-31 07:39:27 --> Security Class Initialized
DEBUG - 2025-05-31 07:39:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:39:27 --> Input Class Initialized
INFO - 2025-05-31 07:39:27 --> Language Class Initialized
INFO - 2025-05-31 07:39:27 --> Loader Class Initialized
INFO - 2025-05-31 07:39:27 --> Helper loaded: url_helper
INFO - 2025-05-31 07:39:27 --> Helper loaded: file_helper
INFO - 2025-05-31 07:39:27 --> Database Driver Class Initialized
ERROR - 2025-05-31 07:39:27 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:39:27 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:39:27 --> Email Class Initialized
DEBUG - 2025-05-31 07:39:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:39:27 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:39:27 --> Controller Class Initialized
INFO - 2025-05-31 07:39:27 --> Helper loaded: form_helper
INFO - 2025-05-31 07:39:27 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:39:27 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:39:27 --> Database Driver Class Initialized
INFO - 2025-05-31 07:39:27 --> Model "Crud" initialized
ERROR - 2025-05-31 07:39:27 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:39:27 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:55:00 --> Config Class Initialized
INFO - 2025-05-31 07:55:00 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:55:00 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:55:00 --> Utf8 Class Initialized
INFO - 2025-05-31 07:55:00 --> URI Class Initialized
INFO - 2025-05-31 07:55:00 --> Router Class Initialized
INFO - 2025-05-31 07:55:00 --> Output Class Initialized
INFO - 2025-05-31 07:55:00 --> Security Class Initialized
DEBUG - 2025-05-31 07:55:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:55:00 --> Input Class Initialized
INFO - 2025-05-31 07:55:00 --> Language Class Initialized
INFO - 2025-05-31 07:55:00 --> Loader Class Initialized
INFO - 2025-05-31 07:55:00 --> Helper loaded: url_helper
INFO - 2025-05-31 07:55:00 --> Config Class Initialized
INFO - 2025-05-31 07:55:00 --> Helper loaded: file_helper
INFO - 2025-05-31 07:55:00 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:55:00 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:55:00 --> Database Driver Class Initialized
INFO - 2025-05-31 07:55:00 --> Utf8 Class Initialized
INFO - 2025-05-31 07:55:00 --> URI Class Initialized
INFO - 2025-05-31 07:55:00 --> Router Class Initialized
INFO - 2025-05-31 07:55:00 --> Output Class Initialized
INFO - 2025-05-31 07:55:00 --> Security Class Initialized
DEBUG - 2025-05-31 07:55:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:55:00 --> Input Class Initialized
INFO - 2025-05-31 07:55:00 --> Language Class Initialized
INFO - 2025-05-31 07:55:00 --> Loader Class Initialized
INFO - 2025-05-31 07:55:00 --> Helper loaded: url_helper
INFO - 2025-05-31 07:55:00 --> Helper loaded: file_helper
INFO - 2025-05-31 07:55:00 --> Database Driver Class Initialized
INFO - 2025-05-31 07:55:00 --> Email Class Initialized
INFO - 2025-05-31 07:55:00 --> Email Class Initialized
DEBUG - 2025-05-31 07:55:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 07:55:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:55:00 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:55:00 --> Controller Class Initialized
INFO - 2025-05-31 07:55:00 --> Helper loaded: form_helper
INFO - 2025-05-31 07:55:00 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:55:00 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:55:00 --> Database Driver Class Initialized
INFO - 2025-05-31 07:55:00 --> Model "Crud" initialized
ERROR - 2025-05-31 07:55:00 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:55:00 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:55:00 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:55:00 --> Controller Class Initialized
INFO - 2025-05-31 07:55:00 --> Helper loaded: form_helper
INFO - 2025-05-31 07:55:00 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:55:00 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:55:00 --> Database Driver Class Initialized
INFO - 2025-05-31 07:55:00 --> Model "Crud" initialized
ERROR - 2025-05-31 07:55:00 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:55:00 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:56:01 --> Config Class Initialized
INFO - 2025-05-31 07:56:01 --> Config Class Initialized
INFO - 2025-05-31 07:56:01 --> Hooks Class Initialized
INFO - 2025-05-31 07:56:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:56:01 --> UTF-8 Support Enabled
DEBUG - 2025-05-31 07:56:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:56:01 --> Utf8 Class Initialized
INFO - 2025-05-31 07:56:01 --> Utf8 Class Initialized
INFO - 2025-05-31 07:56:01 --> URI Class Initialized
INFO - 2025-05-31 07:56:01 --> URI Class Initialized
INFO - 2025-05-31 07:56:01 --> Router Class Initialized
INFO - 2025-05-31 07:56:01 --> Output Class Initialized
INFO - 2025-05-31 07:56:01 --> Security Class Initialized
DEBUG - 2025-05-31 07:56:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:56:01 --> Input Class Initialized
INFO - 2025-05-31 07:56:01 --> Language Class Initialized
INFO - 2025-05-31 07:56:01 --> Router Class Initialized
INFO - 2025-05-31 07:56:01 --> Output Class Initialized
INFO - 2025-05-31 07:56:01 --> Security Class Initialized
DEBUG - 2025-05-31 07:56:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:56:01 --> Loader Class Initialized
INFO - 2025-05-31 07:56:01 --> Input Class Initialized
INFO - 2025-05-31 07:56:01 --> Helper loaded: url_helper
INFO - 2025-05-31 07:56:01 --> Language Class Initialized
INFO - 2025-05-31 07:56:01 --> Helper loaded: file_helper
INFO - 2025-05-31 07:56:01 --> Loader Class Initialized
INFO - 2025-05-31 07:56:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:56:01 --> Helper loaded: url_helper
INFO - 2025-05-31 07:56:01 --> Helper loaded: file_helper
INFO - 2025-05-31 07:56:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:56:01 --> Email Class Initialized
DEBUG - 2025-05-31 07:56:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:56:01 --> Email Class Initialized
INFO - 2025-05-31 07:56:01 --> Session: Class initialized using 'files' driver.
DEBUG - 2025-05-31 07:56:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:56:01 --> Controller Class Initialized
INFO - 2025-05-31 07:56:01 --> Helper loaded: form_helper
INFO - 2025-05-31 07:56:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:56:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:56:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:56:01 --> Model "Crud" initialized
ERROR - 2025-05-31 07:56:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:56:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:56:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:56:01 --> Controller Class Initialized
INFO - 2025-05-31 07:56:01 --> Helper loaded: form_helper
INFO - 2025-05-31 07:56:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:56:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:56:01 --> Database Driver Class Initialized
INFO - 2025-05-31 07:56:01 --> Model "Crud" initialized
ERROR - 2025-05-31 07:56:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:56:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:57:02 --> Config Class Initialized
INFO - 2025-05-31 07:57:02 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:57:02 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:57:02 --> Utf8 Class Initialized
INFO - 2025-05-31 07:57:02 --> URI Class Initialized
INFO - 2025-05-31 07:57:02 --> Router Class Initialized
INFO - 2025-05-31 07:57:02 --> Output Class Initialized
INFO - 2025-05-31 07:57:02 --> Security Class Initialized
DEBUG - 2025-05-31 07:57:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:57:02 --> Input Class Initialized
INFO - 2025-05-31 07:57:02 --> Language Class Initialized
INFO - 2025-05-31 07:57:02 --> Loader Class Initialized
INFO - 2025-05-31 07:57:02 --> Helper loaded: url_helper
INFO - 2025-05-31 07:57:02 --> Helper loaded: file_helper
INFO - 2025-05-31 07:57:02 --> Database Driver Class Initialized
INFO - 2025-05-31 07:57:02 --> Config Class Initialized
INFO - 2025-05-31 07:57:02 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:57:02 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:57:02 --> Utf8 Class Initialized
INFO - 2025-05-31 07:57:02 --> URI Class Initialized
INFO - 2025-05-31 07:57:02 --> Router Class Initialized
INFO - 2025-05-31 07:57:02 --> Output Class Initialized
INFO - 2025-05-31 07:57:02 --> Security Class Initialized
DEBUG - 2025-05-31 07:57:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:57:02 --> Input Class Initialized
INFO - 2025-05-31 07:57:02 --> Language Class Initialized
INFO - 2025-05-31 07:57:02 --> Loader Class Initialized
INFO - 2025-05-31 07:57:02 --> Helper loaded: url_helper
INFO - 2025-05-31 07:57:02 --> Helper loaded: file_helper
INFO - 2025-05-31 07:57:02 --> Database Driver Class Initialized
INFO - 2025-05-31 07:57:02 --> Email Class Initialized
DEBUG - 2025-05-31 07:57:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:57:02 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:57:02 --> Controller Class Initialized
INFO - 2025-05-31 07:57:02 --> Helper loaded: form_helper
INFO - 2025-05-31 07:57:02 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:57:02 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:57:02 --> Database Driver Class Initialized
INFO - 2025-05-31 07:57:02 --> Email Class Initialized
DEBUG - 2025-05-31 07:57:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:57:02 --> Model "Crud" initialized
ERROR - 2025-05-31 07:57:02 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:57:02 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:57:02 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:57:02 --> Controller Class Initialized
INFO - 2025-05-31 07:57:02 --> Helper loaded: form_helper
INFO - 2025-05-31 07:57:02 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:57:02 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:57:02 --> Database Driver Class Initialized
INFO - 2025-05-31 07:57:02 --> Model "Crud" initialized
ERROR - 2025-05-31 07:57:02 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:57:02 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:57:21 --> Config Class Initialized
INFO - 2025-05-31 07:57:21 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:57:21 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:57:21 --> Utf8 Class Initialized
INFO - 2025-05-31 07:57:21 --> URI Class Initialized
INFO - 2025-05-31 07:57:21 --> Router Class Initialized
INFO - 2025-05-31 07:57:21 --> Output Class Initialized
INFO - 2025-05-31 07:57:21 --> Security Class Initialized
DEBUG - 2025-05-31 07:57:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:57:21 --> Input Class Initialized
INFO - 2025-05-31 07:57:21 --> Language Class Initialized
INFO - 2025-05-31 07:57:21 --> Loader Class Initialized
INFO - 2025-05-31 07:57:21 --> Helper loaded: url_helper
INFO - 2025-05-31 07:57:21 --> Helper loaded: file_helper
INFO - 2025-05-31 07:57:21 --> Database Driver Class Initialized
INFO - 2025-05-31 07:57:21 --> Email Class Initialized
DEBUG - 2025-05-31 07:57:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:57:21 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:57:21 --> Controller Class Initialized
INFO - 2025-05-31 07:57:21 --> Helper loaded: form_helper
INFO - 2025-05-31 07:57:21 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:57:21 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:57:21 --> Database Driver Class Initialized
INFO - 2025-05-31 07:57:21 --> Model "Crud" initialized
ERROR - 2025-05-31 07:57:21 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:57:21 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 07:57:21 --> Config Class Initialized
INFO - 2025-05-31 07:57:21 --> Hooks Class Initialized
DEBUG - 2025-05-31 07:57:21 --> UTF-8 Support Enabled
INFO - 2025-05-31 07:57:21 --> Utf8 Class Initialized
INFO - 2025-05-31 07:57:21 --> URI Class Initialized
INFO - 2025-05-31 07:57:21 --> Router Class Initialized
INFO - 2025-05-31 07:57:21 --> Output Class Initialized
INFO - 2025-05-31 07:57:21 --> Security Class Initialized
DEBUG - 2025-05-31 07:57:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 07:57:21 --> Input Class Initialized
INFO - 2025-05-31 07:57:21 --> Language Class Initialized
INFO - 2025-05-31 07:57:21 --> Loader Class Initialized
INFO - 2025-05-31 07:57:21 --> Helper loaded: url_helper
INFO - 2025-05-31 07:57:21 --> Helper loaded: file_helper
INFO - 2025-05-31 07:57:21 --> Database Driver Class Initialized
INFO - 2025-05-31 07:57:21 --> Email Class Initialized
DEBUG - 2025-05-31 07:57:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 07:57:21 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 07:57:21 --> Controller Class Initialized
INFO - 2025-05-31 07:57:21 --> Helper loaded: form_helper
INFO - 2025-05-31 07:57:21 --> Form Validation Class Initialized
DEBUG - 2025-05-31 07:57:21 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 07:57:21 --> Database Driver Class Initialized
INFO - 2025-05-31 07:57:21 --> Model "Crud" initialized
ERROR - 2025-05-31 07:57:21 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 07:57:21 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 08:59:01 --> Config Class Initialized
INFO - 2025-05-31 08:59:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 08:59:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 08:59:01 --> Utf8 Class Initialized
INFO - 2025-05-31 08:59:01 --> URI Class Initialized
INFO - 2025-05-31 08:59:01 --> Router Class Initialized
INFO - 2025-05-31 08:59:01 --> Output Class Initialized
INFO - 2025-05-31 08:59:01 --> Security Class Initialized
DEBUG - 2025-05-31 08:59:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 08:59:01 --> Input Class Initialized
INFO - 2025-05-31 08:59:01 --> Language Class Initialized
INFO - 2025-05-31 08:59:01 --> Loader Class Initialized
INFO - 2025-05-31 08:59:01 --> Helper loaded: url_helper
INFO - 2025-05-31 08:59:01 --> Helper loaded: file_helper
INFO - 2025-05-31 08:59:01 --> Database Driver Class Initialized
INFO - 2025-05-31 08:59:01 --> Config Class Initialized
INFO - 2025-05-31 08:59:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 08:59:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 08:59:01 --> Utf8 Class Initialized
INFO - 2025-05-31 08:59:01 --> URI Class Initialized
INFO - 2025-05-31 08:59:01 --> Router Class Initialized
INFO - 2025-05-31 08:59:01 --> Output Class Initialized
INFO - 2025-05-31 08:59:01 --> Security Class Initialized
DEBUG - 2025-05-31 08:59:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 08:59:01 --> Input Class Initialized
INFO - 2025-05-31 08:59:01 --> Language Class Initialized
INFO - 2025-05-31 08:59:01 --> Loader Class Initialized
INFO - 2025-05-31 08:59:01 --> Helper loaded: url_helper
INFO - 2025-05-31 08:59:01 --> Helper loaded: file_helper
INFO - 2025-05-31 08:59:01 --> Database Driver Class Initialized
INFO - 2025-05-31 08:59:01 --> Email Class Initialized
DEBUG - 2025-05-31 08:59:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 08:59:01 --> Email Class Initialized
INFO - 2025-05-31 08:59:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 08:59:01 --> Controller Class Initialized
DEBUG - 2025-05-31 08:59:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 08:59:01 --> Helper loaded: form_helper
INFO - 2025-05-31 08:59:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 08:59:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 08:59:01 --> Database Driver Class Initialized
INFO - 2025-05-31 08:59:01 --> Model "Crud" initialized
ERROR - 2025-05-31 08:59:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 08:59:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 08:59:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 08:59:01 --> Controller Class Initialized
INFO - 2025-05-31 08:59:01 --> Helper loaded: form_helper
INFO - 2025-05-31 08:59:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 08:59:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 08:59:01 --> Database Driver Class Initialized
INFO - 2025-05-31 08:59:01 --> Model "Crud" initialized
ERROR - 2025-05-31 08:59:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 08:59:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:00:01 --> Config Class Initialized
INFO - 2025-05-31 09:00:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:00:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:00:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:00:01 --> URI Class Initialized
INFO - 2025-05-31 09:00:01 --> Router Class Initialized
INFO - 2025-05-31 09:00:01 --> Output Class Initialized
INFO - 2025-05-31 09:00:01 --> Security Class Initialized
DEBUG - 2025-05-31 09:00:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:00:01 --> Input Class Initialized
INFO - 2025-05-31 09:00:01 --> Language Class Initialized
INFO - 2025-05-31 09:00:01 --> Loader Class Initialized
INFO - 2025-05-31 09:00:01 --> Config Class Initialized
INFO - 2025-05-31 09:00:01 --> Hooks Class Initialized
INFO - 2025-05-31 09:00:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:00:01 --> Helper loaded: file_helper
DEBUG - 2025-05-31 09:00:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:00:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:00:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:00:01 --> URI Class Initialized
INFO - 2025-05-31 09:00:01 --> Router Class Initialized
INFO - 2025-05-31 09:00:01 --> Output Class Initialized
INFO - 2025-05-31 09:00:01 --> Security Class Initialized
DEBUG - 2025-05-31 09:00:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:00:01 --> Input Class Initialized
INFO - 2025-05-31 09:00:01 --> Language Class Initialized
INFO - 2025-05-31 09:00:01 --> Loader Class Initialized
INFO - 2025-05-31 09:00:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:00:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:00:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:00:01 --> Email Class Initialized
INFO - 2025-05-31 09:00:01 --> Email Class Initialized
DEBUG - 2025-05-31 09:00:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 09:00:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:00:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:00:01 --> Controller Class Initialized
INFO - 2025-05-31 09:00:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:00:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:00:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:00:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:00:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:00:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:00:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:00:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:00:01 --> Controller Class Initialized
INFO - 2025-05-31 09:00:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:00:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:00:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:00:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:00:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:00:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:00:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:01:01 --> Config Class Initialized
INFO - 2025-05-31 09:01:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:01:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:01:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:01:01 --> URI Class Initialized
INFO - 2025-05-31 09:01:01 --> Router Class Initialized
INFO - 2025-05-31 09:01:01 --> Output Class Initialized
INFO - 2025-05-31 09:01:01 --> Security Class Initialized
DEBUG - 2025-05-31 09:01:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:01:01 --> Input Class Initialized
INFO - 2025-05-31 09:01:01 --> Language Class Initialized
INFO - 2025-05-31 09:01:01 --> Loader Class Initialized
INFO - 2025-05-31 09:01:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:01:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:01:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:01:01 --> Config Class Initialized
INFO - 2025-05-31 09:01:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:01:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:01:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:01:01 --> URI Class Initialized
INFO - 2025-05-31 09:01:01 --> Router Class Initialized
INFO - 2025-05-31 09:01:01 --> Output Class Initialized
INFO - 2025-05-31 09:01:01 --> Security Class Initialized
DEBUG - 2025-05-31 09:01:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:01:01 --> Input Class Initialized
INFO - 2025-05-31 09:01:01 --> Language Class Initialized
INFO - 2025-05-31 09:01:01 --> Loader Class Initialized
INFO - 2025-05-31 09:01:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:01:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:01:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:01:01 --> Email Class Initialized
INFO - 2025-05-31 09:01:01 --> Email Class Initialized
DEBUG - 2025-05-31 09:01:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:01:01 --> Session: Class initialized using 'files' driver.
DEBUG - 2025-05-31 09:01:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:01:01 --> Controller Class Initialized
INFO - 2025-05-31 09:01:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:01:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:01:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:01:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:01:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:01:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:01:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:01:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:01:01 --> Controller Class Initialized
INFO - 2025-05-31 09:01:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:01:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:01:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:01:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:01:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:01:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:01:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:02:01 --> Config Class Initialized
INFO - 2025-05-31 09:02:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:02:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:02:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:02:01 --> URI Class Initialized
INFO - 2025-05-31 09:02:01 --> Router Class Initialized
INFO - 2025-05-31 09:02:01 --> Output Class Initialized
INFO - 2025-05-31 09:02:01 --> Security Class Initialized
DEBUG - 2025-05-31 09:02:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:02:01 --> Input Class Initialized
INFO - 2025-05-31 09:02:01 --> Language Class Initialized
INFO - 2025-05-31 09:02:01 --> Loader Class Initialized
INFO - 2025-05-31 09:02:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:02:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:02:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:02:01 --> Config Class Initialized
INFO - 2025-05-31 09:02:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:02:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:02:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:02:01 --> URI Class Initialized
INFO - 2025-05-31 09:02:01 --> Router Class Initialized
INFO - 2025-05-31 09:02:01 --> Output Class Initialized
INFO - 2025-05-31 09:02:01 --> Security Class Initialized
DEBUG - 2025-05-31 09:02:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:02:01 --> Input Class Initialized
INFO - 2025-05-31 09:02:01 --> Language Class Initialized
INFO - 2025-05-31 09:02:01 --> Loader Class Initialized
INFO - 2025-05-31 09:02:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:02:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:02:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:02:01 --> Email Class Initialized
DEBUG - 2025-05-31 09:02:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:02:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:02:01 --> Controller Class Initialized
INFO - 2025-05-31 09:02:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:02:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:02:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:02:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:02:01 --> Email Class Initialized
DEBUG - 2025-05-31 09:02:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:02:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:02:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:02:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:02:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:02:01 --> Controller Class Initialized
INFO - 2025-05-31 09:02:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:02:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:02:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:02:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:02:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:02:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:02:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:03:01 --> Config Class Initialized
INFO - 2025-05-31 09:03:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:03:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:03:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:03:01 --> URI Class Initialized
INFO - 2025-05-31 09:03:01 --> Router Class Initialized
INFO - 2025-05-31 09:03:01 --> Output Class Initialized
INFO - 2025-05-31 09:03:01 --> Security Class Initialized
DEBUG - 2025-05-31 09:03:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:03:01 --> Input Class Initialized
INFO - 2025-05-31 09:03:01 --> Language Class Initialized
INFO - 2025-05-31 09:03:01 --> Loader Class Initialized
INFO - 2025-05-31 09:03:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:03:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:03:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:03:01 --> Config Class Initialized
INFO - 2025-05-31 09:03:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:03:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:03:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:03:01 --> URI Class Initialized
INFO - 2025-05-31 09:03:01 --> Router Class Initialized
INFO - 2025-05-31 09:03:01 --> Output Class Initialized
INFO - 2025-05-31 09:03:01 --> Security Class Initialized
DEBUG - 2025-05-31 09:03:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:03:01 --> Input Class Initialized
INFO - 2025-05-31 09:03:01 --> Language Class Initialized
INFO - 2025-05-31 09:03:01 --> Loader Class Initialized
INFO - 2025-05-31 09:03:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:03:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:03:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:03:01 --> Email Class Initialized
DEBUG - 2025-05-31 09:03:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:03:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:03:01 --> Controller Class Initialized
INFO - 2025-05-31 09:03:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:03:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:03:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:03:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:03:01 --> Email Class Initialized
DEBUG - 2025-05-31 09:03:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:03:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:03:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:03:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:03:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:03:01 --> Controller Class Initialized
INFO - 2025-05-31 09:03:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:03:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:03:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:03:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:03:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:03:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:03:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:04:01 --> Config Class Initialized
INFO - 2025-05-31 09:04:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:04:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:04:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:04:01 --> URI Class Initialized
INFO - 2025-05-31 09:04:01 --> Router Class Initialized
INFO - 2025-05-31 09:04:01 --> Output Class Initialized
INFO - 2025-05-31 09:04:01 --> Security Class Initialized
DEBUG - 2025-05-31 09:04:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:04:01 --> Input Class Initialized
INFO - 2025-05-31 09:04:01 --> Language Class Initialized
INFO - 2025-05-31 09:04:01 --> Config Class Initialized
INFO - 2025-05-31 09:04:01 --> Loader Class Initialized
INFO - 2025-05-31 09:04:01 --> Hooks Class Initialized
INFO - 2025-05-31 09:04:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:04:01 --> Helper loaded: file_helper
DEBUG - 2025-05-31 09:04:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:04:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:04:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:04:01 --> URI Class Initialized
INFO - 2025-05-31 09:04:01 --> Router Class Initialized
INFO - 2025-05-31 09:04:01 --> Output Class Initialized
INFO - 2025-05-31 09:04:01 --> Security Class Initialized
DEBUG - 2025-05-31 09:04:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:04:01 --> Input Class Initialized
INFO - 2025-05-31 09:04:01 --> Language Class Initialized
INFO - 2025-05-31 09:04:01 --> Loader Class Initialized
INFO - 2025-05-31 09:04:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:04:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:04:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:04:01 --> Email Class Initialized
DEBUG - 2025-05-31 09:04:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:04:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:04:01 --> Controller Class Initialized
INFO - 2025-05-31 09:04:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:04:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:04:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:04:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:04:01 --> Email Class Initialized
DEBUG - 2025-05-31 09:04:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:04:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:04:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:04:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:04:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:04:01 --> Controller Class Initialized
INFO - 2025-05-31 09:04:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:04:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:04:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:04:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:04:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:04:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:04:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:05:01 --> Config Class Initialized
INFO - 2025-05-31 09:05:01 --> Hooks Class Initialized
INFO - 2025-05-31 09:05:01 --> Config Class Initialized
DEBUG - 2025-05-31 09:05:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:05:01 --> Hooks Class Initialized
INFO - 2025-05-31 09:05:01 --> Utf8 Class Initialized
DEBUG - 2025-05-31 09:05:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:05:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:05:01 --> URI Class Initialized
INFO - 2025-05-31 09:05:01 --> URI Class Initialized
INFO - 2025-05-31 09:05:01 --> Router Class Initialized
INFO - 2025-05-31 09:05:01 --> Router Class Initialized
INFO - 2025-05-31 09:05:01 --> Output Class Initialized
INFO - 2025-05-31 09:05:01 --> Output Class Initialized
INFO - 2025-05-31 09:05:01 --> Security Class Initialized
INFO - 2025-05-31 09:05:01 --> Security Class Initialized
DEBUG - 2025-05-31 09:05:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-05-31 09:05:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:05:01 --> Input Class Initialized
INFO - 2025-05-31 09:05:01 --> Input Class Initialized
INFO - 2025-05-31 09:05:01 --> Language Class Initialized
INFO - 2025-05-31 09:05:01 --> Language Class Initialized
INFO - 2025-05-31 09:05:01 --> Loader Class Initialized
INFO - 2025-05-31 09:05:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:05:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:05:01 --> Loader Class Initialized
INFO - 2025-05-31 09:05:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:05:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:05:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:05:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:05:01 --> Email Class Initialized
INFO - 2025-05-31 09:05:01 --> Email Class Initialized
DEBUG - 2025-05-31 09:05:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 09:05:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:05:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:05:01 --> Controller Class Initialized
INFO - 2025-05-31 09:05:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:05:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:05:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:05:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:05:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:05:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:05:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:05:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:05:01 --> Controller Class Initialized
INFO - 2025-05-31 09:05:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:05:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:05:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:05:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:05:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:05:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:05:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:06:01 --> Config Class Initialized
INFO - 2025-05-31 09:06:01 --> Config Class Initialized
INFO - 2025-05-31 09:06:01 --> Hooks Class Initialized
INFO - 2025-05-31 09:06:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:06:01 --> UTF-8 Support Enabled
DEBUG - 2025-05-31 09:06:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:06:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:06:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:06:01 --> URI Class Initialized
INFO - 2025-05-31 09:06:01 --> URI Class Initialized
INFO - 2025-05-31 09:06:01 --> Router Class Initialized
INFO - 2025-05-31 09:06:01 --> Router Class Initialized
INFO - 2025-05-31 09:06:01 --> Output Class Initialized
INFO - 2025-05-31 09:06:01 --> Output Class Initialized
INFO - 2025-05-31 09:06:01 --> Security Class Initialized
INFO - 2025-05-31 09:06:01 --> Security Class Initialized
DEBUG - 2025-05-31 09:06:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:06:01 --> Input Class Initialized
DEBUG - 2025-05-31 09:06:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:06:01 --> Language Class Initialized
INFO - 2025-05-31 09:06:01 --> Input Class Initialized
INFO - 2025-05-31 09:06:01 --> Language Class Initialized
INFO - 2025-05-31 09:06:01 --> Loader Class Initialized
INFO - 2025-05-31 09:06:01 --> Loader Class Initialized
INFO - 2025-05-31 09:06:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:06:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:06:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:06:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:06:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:06:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:06:01 --> Email Class Initialized
DEBUG - 2025-05-31 09:06:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:06:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:06:01 --> Controller Class Initialized
INFO - 2025-05-31 09:06:01 --> Email Class Initialized
INFO - 2025-05-31 09:06:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:06:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:06:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-05-31 09:06:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:06:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:06:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:06:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:06:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:06:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:06:01 --> Controller Class Initialized
INFO - 2025-05-31 09:06:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:06:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:06:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:06:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:06:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:06:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:06:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:07:01 --> Config Class Initialized
INFO - 2025-05-31 09:07:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:07:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:07:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:07:01 --> URI Class Initialized
INFO - 2025-05-31 09:07:01 --> Config Class Initialized
INFO - 2025-05-31 09:07:01 --> Router Class Initialized
INFO - 2025-05-31 09:07:01 --> Hooks Class Initialized
INFO - 2025-05-31 09:07:01 --> Output Class Initialized
DEBUG - 2025-05-31 09:07:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:07:01 --> Security Class Initialized
INFO - 2025-05-31 09:07:01 --> Utf8 Class Initialized
DEBUG - 2025-05-31 09:07:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:07:01 --> URI Class Initialized
INFO - 2025-05-31 09:07:01 --> Input Class Initialized
INFO - 2025-05-31 09:07:01 --> Language Class Initialized
INFO - 2025-05-31 09:07:01 --> Router Class Initialized
INFO - 2025-05-31 09:07:01 --> Loader Class Initialized
INFO - 2025-05-31 09:07:01 --> Output Class Initialized
INFO - 2025-05-31 09:07:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:07:01 --> Security Class Initialized
INFO - 2025-05-31 09:07:01 --> Helper loaded: file_helper
DEBUG - 2025-05-31 09:07:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:07:01 --> Input Class Initialized
INFO - 2025-05-31 09:07:01 --> Language Class Initialized
INFO - 2025-05-31 09:07:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:07:01 --> Loader Class Initialized
INFO - 2025-05-31 09:07:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:07:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:07:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:07:01 --> Email Class Initialized
INFO - 2025-05-31 09:07:01 --> Email Class Initialized
DEBUG - 2025-05-31 09:07:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 09:07:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:07:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:07:01 --> Controller Class Initialized
INFO - 2025-05-31 09:07:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:07:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:07:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:07:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:07:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:07:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:07:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:07:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:07:01 --> Controller Class Initialized
INFO - 2025-05-31 09:07:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:07:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:07:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:07:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:07:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:07:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:07:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:08:01 --> Config Class Initialized
INFO - 2025-05-31 09:08:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:08:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:08:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:08:01 --> URI Class Initialized
INFO - 2025-05-31 09:08:01 --> Router Class Initialized
INFO - 2025-05-31 09:08:01 --> Output Class Initialized
INFO - 2025-05-31 09:08:01 --> Security Class Initialized
DEBUG - 2025-05-31 09:08:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:08:01 --> Input Class Initialized
INFO - 2025-05-31 09:08:01 --> Language Class Initialized
INFO - 2025-05-31 09:08:01 --> Loader Class Initialized
INFO - 2025-05-31 09:08:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:08:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:08:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:08:01 --> Config Class Initialized
INFO - 2025-05-31 09:08:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:08:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:08:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:08:01 --> URI Class Initialized
INFO - 2025-05-31 09:08:01 --> Router Class Initialized
INFO - 2025-05-31 09:08:01 --> Output Class Initialized
INFO - 2025-05-31 09:08:01 --> Security Class Initialized
DEBUG - 2025-05-31 09:08:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:08:01 --> Input Class Initialized
INFO - 2025-05-31 09:08:01 --> Language Class Initialized
INFO - 2025-05-31 09:08:01 --> Loader Class Initialized
INFO - 2025-05-31 09:08:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:08:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:08:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:08:01 --> Email Class Initialized
DEBUG - 2025-05-31 09:08:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:08:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:08:01 --> Controller Class Initialized
INFO - 2025-05-31 09:08:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:08:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:08:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:08:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:08:01 --> Email Class Initialized
DEBUG - 2025-05-31 09:08:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:08:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:08:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:08:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:08:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:08:01 --> Controller Class Initialized
INFO - 2025-05-31 09:08:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:08:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:08:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:08:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:08:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:08:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:08:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:09:01 --> Config Class Initialized
INFO - 2025-05-31 09:09:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:09:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:09:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:09:01 --> URI Class Initialized
INFO - 2025-05-31 09:09:01 --> Router Class Initialized
INFO - 2025-05-31 09:09:01 --> Output Class Initialized
INFO - 2025-05-31 09:09:01 --> Security Class Initialized
DEBUG - 2025-05-31 09:09:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:09:01 --> Input Class Initialized
INFO - 2025-05-31 09:09:01 --> Language Class Initialized
INFO - 2025-05-31 09:09:01 --> Loader Class Initialized
INFO - 2025-05-31 09:09:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:09:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:09:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:09:01 --> Config Class Initialized
INFO - 2025-05-31 09:09:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:09:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:09:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:09:01 --> URI Class Initialized
INFO - 2025-05-31 09:09:01 --> Router Class Initialized
INFO - 2025-05-31 09:09:01 --> Output Class Initialized
INFO - 2025-05-31 09:09:01 --> Security Class Initialized
DEBUG - 2025-05-31 09:09:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:09:01 --> Input Class Initialized
INFO - 2025-05-31 09:09:01 --> Language Class Initialized
INFO - 2025-05-31 09:09:01 --> Loader Class Initialized
INFO - 2025-05-31 09:09:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:09:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:09:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:09:01 --> Email Class Initialized
DEBUG - 2025-05-31 09:09:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:09:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:09:01 --> Controller Class Initialized
INFO - 2025-05-31 09:09:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:09:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:09:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:09:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:09:01 --> Email Class Initialized
INFO - 2025-05-31 09:09:01 --> Model "Crud" initialized
DEBUG - 2025-05-31 09:09:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2025-05-31 09:09:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:09:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:09:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:09:01 --> Controller Class Initialized
INFO - 2025-05-31 09:09:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:09:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:09:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:09:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:09:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:09:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:09:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:10:01 --> Config Class Initialized
INFO - 2025-05-31 09:10:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:10:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:10:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:10:01 --> Config Class Initialized
INFO - 2025-05-31 09:10:01 --> URI Class Initialized
INFO - 2025-05-31 09:10:01 --> Hooks Class Initialized
INFO - 2025-05-31 09:10:01 --> Router Class Initialized
DEBUG - 2025-05-31 09:10:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:10:01 --> Output Class Initialized
INFO - 2025-05-31 09:10:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:10:01 --> Security Class Initialized
INFO - 2025-05-31 09:10:01 --> URI Class Initialized
DEBUG - 2025-05-31 09:10:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:10:01 --> Input Class Initialized
INFO - 2025-05-31 09:10:01 --> Router Class Initialized
INFO - 2025-05-31 09:10:01 --> Language Class Initialized
INFO - 2025-05-31 09:10:01 --> Output Class Initialized
INFO - 2025-05-31 09:10:01 --> Security Class Initialized
DEBUG - 2025-05-31 09:10:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:10:01 --> Input Class Initialized
INFO - 2025-05-31 09:10:01 --> Loader Class Initialized
INFO - 2025-05-31 09:10:01 --> Language Class Initialized
INFO - 2025-05-31 09:10:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:10:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:10:01 --> Loader Class Initialized
INFO - 2025-05-31 09:10:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:10:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:10:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:10:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:10:01 --> Email Class Initialized
INFO - 2025-05-31 09:10:01 --> Email Class Initialized
DEBUG - 2025-05-31 09:10:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 09:10:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:10:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:10:01 --> Controller Class Initialized
INFO - 2025-05-31 09:10:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:10:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:10:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:10:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:10:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:10:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:10:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:10:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:10:01 --> Controller Class Initialized
INFO - 2025-05-31 09:10:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:10:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:10:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:10:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:10:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:10:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:10:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:11:01 --> Config Class Initialized
INFO - 2025-05-31 09:11:01 --> Config Class Initialized
INFO - 2025-05-31 09:11:01 --> Hooks Class Initialized
INFO - 2025-05-31 09:11:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:11:01 --> UTF-8 Support Enabled
DEBUG - 2025-05-31 09:11:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:11:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:11:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:11:01 --> URI Class Initialized
INFO - 2025-05-31 09:11:01 --> URI Class Initialized
INFO - 2025-05-31 09:11:01 --> Router Class Initialized
INFO - 2025-05-31 09:11:01 --> Output Class Initialized
INFO - 2025-05-31 09:11:01 --> Router Class Initialized
INFO - 2025-05-31 09:11:01 --> Security Class Initialized
INFO - 2025-05-31 09:11:01 --> Output Class Initialized
DEBUG - 2025-05-31 09:11:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:11:01 --> Input Class Initialized
INFO - 2025-05-31 09:11:01 --> Security Class Initialized
INFO - 2025-05-31 09:11:01 --> Language Class Initialized
DEBUG - 2025-05-31 09:11:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:11:01 --> Input Class Initialized
INFO - 2025-05-31 09:11:01 --> Language Class Initialized
INFO - 2025-05-31 09:11:01 --> Loader Class Initialized
INFO - 2025-05-31 09:11:01 --> Loader Class Initialized
INFO - 2025-05-31 09:11:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:11:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:11:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:11:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:11:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:11:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:11:01 --> Email Class Initialized
INFO - 2025-05-31 09:11:01 --> Email Class Initialized
DEBUG - 2025-05-31 09:11:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 09:11:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:11:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:11:01 --> Controller Class Initialized
INFO - 2025-05-31 09:11:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:11:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:11:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:11:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:11:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:11:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:11:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:11:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:11:01 --> Controller Class Initialized
INFO - 2025-05-31 09:11:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:11:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:11:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:11:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:11:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:11:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:11:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:12:01 --> Config Class Initialized
INFO - 2025-05-31 09:12:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:12:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:12:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:12:01 --> URI Class Initialized
INFO - 2025-05-31 09:12:01 --> Router Class Initialized
INFO - 2025-05-31 09:12:01 --> Output Class Initialized
INFO - 2025-05-31 09:12:01 --> Security Class Initialized
DEBUG - 2025-05-31 09:12:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:12:01 --> Input Class Initialized
INFO - 2025-05-31 09:12:01 --> Language Class Initialized
INFO - 2025-05-31 09:12:01 --> Loader Class Initialized
INFO - 2025-05-31 09:12:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:12:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:12:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:12:01 --> Config Class Initialized
INFO - 2025-05-31 09:12:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:12:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:12:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:12:01 --> URI Class Initialized
INFO - 2025-05-31 09:12:01 --> Email Class Initialized
INFO - 2025-05-31 09:12:01 --> Router Class Initialized
DEBUG - 2025-05-31 09:12:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:12:01 --> Output Class Initialized
INFO - 2025-05-31 09:12:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:12:01 --> Controller Class Initialized
INFO - 2025-05-31 09:12:01 --> Security Class Initialized
INFO - 2025-05-31 09:12:01 --> Helper loaded: form_helper
DEBUG - 2025-05-31 09:12:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:12:01 --> Form Validation Class Initialized
INFO - 2025-05-31 09:12:01 --> Input Class Initialized
DEBUG - 2025-05-31 09:12:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:12:01 --> Language Class Initialized
INFO - 2025-05-31 09:12:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:12:01 --> Loader Class Initialized
INFO - 2025-05-31 09:12:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:12:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:12:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:12:01 --> Model "Crud" initialized
INFO - 2025-05-31 09:12:01 --> Email Class Initialized
ERROR - 2025-05-31 09:12:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
DEBUG - 2025-05-31 09:12:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:12:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:12:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:12:01 --> Controller Class Initialized
INFO - 2025-05-31 09:12:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:12:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:12:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:12:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:12:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:12:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:12:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:13:01 --> Config Class Initialized
INFO - 2025-05-31 09:13:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:13:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:13:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:13:01 --> URI Class Initialized
INFO - 2025-05-31 09:13:01 --> Router Class Initialized
INFO - 2025-05-31 09:13:01 --> Config Class Initialized
INFO - 2025-05-31 09:13:01 --> Output Class Initialized
INFO - 2025-05-31 09:13:01 --> Hooks Class Initialized
INFO - 2025-05-31 09:13:01 --> Security Class Initialized
DEBUG - 2025-05-31 09:13:01 --> UTF-8 Support Enabled
DEBUG - 2025-05-31 09:13:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:13:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:13:01 --> Input Class Initialized
INFO - 2025-05-31 09:13:01 --> Language Class Initialized
INFO - 2025-05-31 09:13:01 --> URI Class Initialized
INFO - 2025-05-31 09:13:01 --> Loader Class Initialized
INFO - 2025-05-31 09:13:01 --> Router Class Initialized
INFO - 2025-05-31 09:13:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:13:01 --> Output Class Initialized
INFO - 2025-05-31 09:13:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:13:01 --> Security Class Initialized
DEBUG - 2025-05-31 09:13:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:13:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:13:01 --> Input Class Initialized
INFO - 2025-05-31 09:13:01 --> Language Class Initialized
INFO - 2025-05-31 09:13:01 --> Loader Class Initialized
INFO - 2025-05-31 09:13:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:13:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:13:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:13:01 --> Email Class Initialized
INFO - 2025-05-31 09:13:01 --> Email Class Initialized
DEBUG - 2025-05-31 09:13:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 09:13:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:13:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:13:01 --> Controller Class Initialized
INFO - 2025-05-31 09:13:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:13:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:13:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:13:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:13:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:13:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:13:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:13:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:13:01 --> Controller Class Initialized
INFO - 2025-05-31 09:13:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:13:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:13:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:13:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:13:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:13:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:13:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:14:01 --> Config Class Initialized
INFO - 2025-05-31 09:14:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:14:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:14:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:14:01 --> URI Class Initialized
INFO - 2025-05-31 09:14:01 --> Router Class Initialized
INFO - 2025-05-31 09:14:01 --> Output Class Initialized
INFO - 2025-05-31 09:14:01 --> Security Class Initialized
DEBUG - 2025-05-31 09:14:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:14:01 --> Input Class Initialized
INFO - 2025-05-31 09:14:01 --> Language Class Initialized
INFO - 2025-05-31 09:14:01 --> Loader Class Initialized
INFO - 2025-05-31 09:14:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:14:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:14:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:14:01 --> Config Class Initialized
INFO - 2025-05-31 09:14:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:14:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:14:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:14:01 --> URI Class Initialized
INFO - 2025-05-31 09:14:01 --> Router Class Initialized
INFO - 2025-05-31 09:14:01 --> Output Class Initialized
INFO - 2025-05-31 09:14:01 --> Security Class Initialized
DEBUG - 2025-05-31 09:14:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:14:01 --> Input Class Initialized
INFO - 2025-05-31 09:14:01 --> Language Class Initialized
INFO - 2025-05-31 09:14:01 --> Loader Class Initialized
INFO - 2025-05-31 09:14:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:14:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:14:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:14:01 --> Email Class Initialized
DEBUG - 2025-05-31 09:14:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:14:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:14:01 --> Controller Class Initialized
INFO - 2025-05-31 09:14:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:14:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:14:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:14:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:14:01 --> Email Class Initialized
DEBUG - 2025-05-31 09:14:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:14:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:14:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:14:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:14:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:14:01 --> Controller Class Initialized
INFO - 2025-05-31 09:14:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:14:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:14:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:14:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:14:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:14:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:14:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:15:01 --> Config Class Initialized
INFO - 2025-05-31 09:15:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:15:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:15:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:15:01 --> URI Class Initialized
INFO - 2025-05-31 09:15:01 --> Config Class Initialized
INFO - 2025-05-31 09:15:01 --> Router Class Initialized
INFO - 2025-05-31 09:15:01 --> Hooks Class Initialized
INFO - 2025-05-31 09:15:01 --> Output Class Initialized
DEBUG - 2025-05-31 09:15:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:15:01 --> Security Class Initialized
INFO - 2025-05-31 09:15:01 --> Utf8 Class Initialized
DEBUG - 2025-05-31 09:15:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:15:01 --> URI Class Initialized
INFO - 2025-05-31 09:15:01 --> Input Class Initialized
INFO - 2025-05-31 09:15:01 --> Language Class Initialized
INFO - 2025-05-31 09:15:01 --> Router Class Initialized
INFO - 2025-05-31 09:15:01 --> Output Class Initialized
INFO - 2025-05-31 09:15:01 --> Loader Class Initialized
INFO - 2025-05-31 09:15:01 --> Security Class Initialized
INFO - 2025-05-31 09:15:01 --> Helper loaded: url_helper
DEBUG - 2025-05-31 09:15:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:15:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:15:01 --> Input Class Initialized
INFO - 2025-05-31 09:15:01 --> Language Class Initialized
INFO - 2025-05-31 09:15:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:15:01 --> Loader Class Initialized
INFO - 2025-05-31 09:15:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:15:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:15:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:15:01 --> Email Class Initialized
DEBUG - 2025-05-31 09:15:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:15:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:15:01 --> Controller Class Initialized
INFO - 2025-05-31 09:15:01 --> Email Class Initialized
INFO - 2025-05-31 09:15:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:15:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:15:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 09:15:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:15:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:15:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:15:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:15:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:15:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:15:01 --> Controller Class Initialized
INFO - 2025-05-31 09:15:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:15:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:15:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:15:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:15:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:15:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:15:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:16:01 --> Config Class Initialized
INFO - 2025-05-31 09:16:01 --> Config Class Initialized
INFO - 2025-05-31 09:16:01 --> Hooks Class Initialized
INFO - 2025-05-31 09:16:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:16:01 --> UTF-8 Support Enabled
DEBUG - 2025-05-31 09:16:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:16:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:16:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:16:01 --> URI Class Initialized
INFO - 2025-05-31 09:16:01 --> URI Class Initialized
INFO - 2025-05-31 09:16:01 --> Router Class Initialized
INFO - 2025-05-31 09:16:01 --> Router Class Initialized
INFO - 2025-05-31 09:16:01 --> Output Class Initialized
INFO - 2025-05-31 09:16:01 --> Output Class Initialized
INFO - 2025-05-31 09:16:01 --> Security Class Initialized
INFO - 2025-05-31 09:16:01 --> Security Class Initialized
DEBUG - 2025-05-31 09:16:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-05-31 09:16:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:16:01 --> Input Class Initialized
INFO - 2025-05-31 09:16:01 --> Input Class Initialized
INFO - 2025-05-31 09:16:01 --> Language Class Initialized
INFO - 2025-05-31 09:16:01 --> Language Class Initialized
INFO - 2025-05-31 09:16:01 --> Loader Class Initialized
INFO - 2025-05-31 09:16:01 --> Loader Class Initialized
INFO - 2025-05-31 09:16:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:16:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:16:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:16:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:16:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:16:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:16:01 --> Email Class Initialized
INFO - 2025-05-31 09:16:01 --> Email Class Initialized
DEBUG - 2025-05-31 09:16:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 09:16:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:16:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:16:01 --> Controller Class Initialized
INFO - 2025-05-31 09:16:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:16:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:16:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:16:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:16:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:16:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:16:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:16:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:16:01 --> Controller Class Initialized
INFO - 2025-05-31 09:16:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:16:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:16:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:16:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:16:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:16:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:16:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:17:01 --> Config Class Initialized
INFO - 2025-05-31 09:17:01 --> Config Class Initialized
INFO - 2025-05-31 09:17:01 --> Hooks Class Initialized
INFO - 2025-05-31 09:17:01 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:17:01 --> UTF-8 Support Enabled
DEBUG - 2025-05-31 09:17:01 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:17:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:17:01 --> Utf8 Class Initialized
INFO - 2025-05-31 09:17:01 --> URI Class Initialized
INFO - 2025-05-31 09:17:01 --> URI Class Initialized
INFO - 2025-05-31 09:17:01 --> Router Class Initialized
INFO - 2025-05-31 09:17:01 --> Output Class Initialized
INFO - 2025-05-31 09:17:01 --> Router Class Initialized
INFO - 2025-05-31 09:17:01 --> Security Class Initialized
DEBUG - 2025-05-31 09:17:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:17:01 --> Output Class Initialized
INFO - 2025-05-31 09:17:01 --> Input Class Initialized
INFO - 2025-05-31 09:17:01 --> Security Class Initialized
INFO - 2025-05-31 09:17:01 --> Language Class Initialized
DEBUG - 2025-05-31 09:17:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:17:01 --> Input Class Initialized
INFO - 2025-05-31 09:17:01 --> Language Class Initialized
INFO - 2025-05-31 09:17:01 --> Loader Class Initialized
INFO - 2025-05-31 09:17:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:17:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:17:01 --> Loader Class Initialized
INFO - 2025-05-31 09:17:01 --> Helper loaded: url_helper
INFO - 2025-05-31 09:17:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:17:01 --> Helper loaded: file_helper
INFO - 2025-05-31 09:17:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:17:01 --> Email Class Initialized
INFO - 2025-05-31 09:17:01 --> Email Class Initialized
DEBUG - 2025-05-31 09:17:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 09:17:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:17:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:17:01 --> Controller Class Initialized
INFO - 2025-05-31 09:17:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:17:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:17:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:17:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:17:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:17:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:17:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:17:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:17:01 --> Controller Class Initialized
INFO - 2025-05-31 09:17:01 --> Helper loaded: form_helper
INFO - 2025-05-31 09:17:01 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:17:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:17:01 --> Database Driver Class Initialized
INFO - 2025-05-31 09:17:01 --> Model "Crud" initialized
ERROR - 2025-05-31 09:17:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:17:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:18:00 --> Config Class Initialized
INFO - 2025-05-31 09:18:00 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:18:00 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:18:00 --> Utf8 Class Initialized
INFO - 2025-05-31 09:18:00 --> URI Class Initialized
INFO - 2025-05-31 09:18:00 --> Router Class Initialized
INFO - 2025-05-31 09:18:00 --> Output Class Initialized
INFO - 2025-05-31 09:18:00 --> Security Class Initialized
DEBUG - 2025-05-31 09:18:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:18:00 --> Input Class Initialized
INFO - 2025-05-31 09:18:00 --> Config Class Initialized
INFO - 2025-05-31 09:18:00 --> Language Class Initialized
INFO - 2025-05-31 09:18:00 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:18:00 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:18:00 --> Loader Class Initialized
INFO - 2025-05-31 09:18:00 --> Utf8 Class Initialized
INFO - 2025-05-31 09:18:00 --> Helper loaded: url_helper
INFO - 2025-05-31 09:18:00 --> Helper loaded: file_helper
INFO - 2025-05-31 09:18:00 --> URI Class Initialized
INFO - 2025-05-31 09:18:00 --> Database Driver Class Initialized
INFO - 2025-05-31 09:18:00 --> Router Class Initialized
INFO - 2025-05-31 09:18:00 --> Output Class Initialized
INFO - 2025-05-31 09:18:00 --> Security Class Initialized
DEBUG - 2025-05-31 09:18:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:18:00 --> Input Class Initialized
INFO - 2025-05-31 09:18:00 --> Language Class Initialized
INFO - 2025-05-31 09:18:00 --> Loader Class Initialized
INFO - 2025-05-31 09:18:00 --> Helper loaded: url_helper
INFO - 2025-05-31 09:18:00 --> Helper loaded: file_helper
INFO - 2025-05-31 09:18:00 --> Database Driver Class Initialized
INFO - 2025-05-31 09:18:00 --> Email Class Initialized
DEBUG - 2025-05-31 09:18:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:18:00 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:18:00 --> Email Class Initialized
INFO - 2025-05-31 09:18:00 --> Controller Class Initialized
INFO - 2025-05-31 09:18:00 --> Helper loaded: form_helper
DEBUG - 2025-05-31 09:18:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:18:00 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:18:00 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:18:00 --> Database Driver Class Initialized
INFO - 2025-05-31 09:18:00 --> Model "Crud" initialized
ERROR - 2025-05-31 09:18:00 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:18:00 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:18:00 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:18:00 --> Controller Class Initialized
INFO - 2025-05-31 09:18:00 --> Helper loaded: form_helper
INFO - 2025-05-31 09:18:00 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:18:00 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:18:00 --> Database Driver Class Initialized
INFO - 2025-05-31 09:18:00 --> Model "Crud" initialized
ERROR - 2025-05-31 09:18:00 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:18:00 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:18:16 --> Config Class Initialized
INFO - 2025-05-31 09:18:16 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:18:16 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:18:16 --> Utf8 Class Initialized
INFO - 2025-05-31 09:18:16 --> URI Class Initialized
INFO - 2025-05-31 09:18:16 --> Router Class Initialized
INFO - 2025-05-31 09:18:16 --> Output Class Initialized
INFO - 2025-05-31 09:18:16 --> Security Class Initialized
DEBUG - 2025-05-31 09:18:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:18:16 --> Input Class Initialized
INFO - 2025-05-31 09:18:16 --> Language Class Initialized
INFO - 2025-05-31 09:18:16 --> Loader Class Initialized
INFO - 2025-05-31 09:18:16 --> Helper loaded: url_helper
INFO - 2025-05-31 09:18:16 --> Helper loaded: file_helper
INFO - 2025-05-31 09:18:16 --> Database Driver Class Initialized
INFO - 2025-05-31 09:18:16 --> Email Class Initialized
DEBUG - 2025-05-31 09:18:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:18:16 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:18:16 --> Controller Class Initialized
INFO - 2025-05-31 09:18:16 --> Helper loaded: form_helper
INFO - 2025-05-31 09:18:16 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:18:16 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:18:16 --> Database Driver Class Initialized
INFO - 2025-05-31 09:18:16 --> Config Class Initialized
INFO - 2025-05-31 09:18:16 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:18:16 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:18:16 --> Utf8 Class Initialized
INFO - 2025-05-31 09:18:16 --> URI Class Initialized
INFO - 2025-05-31 09:18:16 --> Router Class Initialized
INFO - 2025-05-31 09:18:16 --> Output Class Initialized
INFO - 2025-05-31 09:18:16 --> Security Class Initialized
DEBUG - 2025-05-31 09:18:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:18:16 --> Input Class Initialized
INFO - 2025-05-31 09:18:16 --> Language Class Initialized
INFO - 2025-05-31 09:18:16 --> Loader Class Initialized
INFO - 2025-05-31 09:18:16 --> Helper loaded: url_helper
INFO - 2025-05-31 09:18:16 --> Helper loaded: file_helper
INFO - 2025-05-31 09:18:16 --> Database Driver Class Initialized
INFO - 2025-05-31 09:18:16 --> Email Class Initialized
DEBUG - 2025-05-31 09:18:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:18:16 --> Model "Crud" initialized
ERROR - 2025-05-31 09:18:16 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:18:16 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:18:16 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:18:16 --> Controller Class Initialized
INFO - 2025-05-31 09:18:16 --> Helper loaded: form_helper
INFO - 2025-05-31 09:18:16 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:18:16 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:18:16 --> Database Driver Class Initialized
INFO - 2025-05-31 09:18:16 --> Model "Crud" initialized
ERROR - 2025-05-31 09:18:16 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:18:16 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:38:38 --> Config Class Initialized
INFO - 2025-05-31 09:38:38 --> Config Class Initialized
INFO - 2025-05-31 09:38:38 --> Hooks Class Initialized
INFO - 2025-05-31 09:38:38 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:38:38 --> UTF-8 Support Enabled
DEBUG - 2025-05-31 09:38:38 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:38:38 --> Utf8 Class Initialized
INFO - 2025-05-31 09:38:38 --> Utf8 Class Initialized
INFO - 2025-05-31 09:38:38 --> URI Class Initialized
INFO - 2025-05-31 09:38:38 --> URI Class Initialized
INFO - 2025-05-31 09:38:38 --> Router Class Initialized
INFO - 2025-05-31 09:38:38 --> Output Class Initialized
INFO - 2025-05-31 09:38:38 --> Router Class Initialized
INFO - 2025-05-31 09:38:38 --> Security Class Initialized
INFO - 2025-05-31 09:38:38 --> Output Class Initialized
DEBUG - 2025-05-31 09:38:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:38:38 --> Input Class Initialized
INFO - 2025-05-31 09:38:38 --> Security Class Initialized
INFO - 2025-05-31 09:38:38 --> Language Class Initialized
DEBUG - 2025-05-31 09:38:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:38:38 --> Input Class Initialized
INFO - 2025-05-31 09:38:38 --> Loader Class Initialized
INFO - 2025-05-31 09:38:38 --> Language Class Initialized
INFO - 2025-05-31 09:38:38 --> Helper loaded: url_helper
INFO - 2025-05-31 09:38:38 --> Helper loaded: file_helper
INFO - 2025-05-31 09:38:38 --> Loader Class Initialized
INFO - 2025-05-31 09:38:38 --> Helper loaded: url_helper
INFO - 2025-05-31 09:38:38 --> Helper loaded: file_helper
INFO - 2025-05-31 09:38:38 --> Database Driver Class Initialized
INFO - 2025-05-31 09:38:38 --> Database Driver Class Initialized
INFO - 2025-05-31 09:38:38 --> Email Class Initialized
INFO - 2025-05-31 09:38:38 --> Email Class Initialized
DEBUG - 2025-05-31 09:38:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 09:38:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:38:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:38:38 --> Controller Class Initialized
INFO - 2025-05-31 09:38:38 --> Helper loaded: form_helper
INFO - 2025-05-31 09:38:38 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:38:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:38:38 --> Database Driver Class Initialized
INFO - 2025-05-31 09:38:38 --> Model "Crud" initialized
ERROR - 2025-05-31 09:38:38 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:38:38 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:38:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:38:38 --> Controller Class Initialized
INFO - 2025-05-31 09:38:38 --> Helper loaded: form_helper
INFO - 2025-05-31 09:38:38 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:38:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:38:38 --> Database Driver Class Initialized
INFO - 2025-05-31 09:38:38 --> Model "Crud" initialized
ERROR - 2025-05-31 09:38:38 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:38:38 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:38:58 --> Config Class Initialized
INFO - 2025-05-31 09:38:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:38:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:38:58 --> Utf8 Class Initialized
INFO - 2025-05-31 09:38:58 --> URI Class Initialized
INFO - 2025-05-31 09:38:58 --> Router Class Initialized
INFO - 2025-05-31 09:38:58 --> Config Class Initialized
INFO - 2025-05-31 09:38:58 --> Output Class Initialized
INFO - 2025-05-31 09:38:58 --> Hooks Class Initialized
INFO - 2025-05-31 09:38:58 --> Security Class Initialized
DEBUG - 2025-05-31 09:38:58 --> UTF-8 Support Enabled
DEBUG - 2025-05-31 09:38:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:38:58 --> Utf8 Class Initialized
INFO - 2025-05-31 09:38:58 --> URI Class Initialized
INFO - 2025-05-31 09:38:58 --> Input Class Initialized
INFO - 2025-05-31 09:38:58 --> Router Class Initialized
INFO - 2025-05-31 09:38:58 --> Language Class Initialized
INFO - 2025-05-31 09:38:58 --> Output Class Initialized
INFO - 2025-05-31 09:38:58 --> Security Class Initialized
INFO - 2025-05-31 09:38:58 --> Loader Class Initialized
INFO - 2025-05-31 09:38:58 --> Helper loaded: url_helper
DEBUG - 2025-05-31 09:38:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:38:58 --> Helper loaded: file_helper
INFO - 2025-05-31 09:38:58 --> Input Class Initialized
INFO - 2025-05-31 09:38:58 --> Language Class Initialized
INFO - 2025-05-31 09:38:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:38:58 --> Loader Class Initialized
INFO - 2025-05-31 09:38:58 --> Helper loaded: url_helper
INFO - 2025-05-31 09:38:58 --> Helper loaded: file_helper
INFO - 2025-05-31 09:38:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:38:58 --> Email Class Initialized
DEBUG - 2025-05-31 09:38:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:38:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:38:58 --> Controller Class Initialized
INFO - 2025-05-31 09:38:58 --> Helper loaded: form_helper
INFO - 2025-05-31 09:38:58 --> Form Validation Class Initialized
INFO - 2025-05-31 09:38:58 --> Email Class Initialized
DEBUG - 2025-05-31 09:38:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-05-31 09:38:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:38:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:38:58 --> Model "Crud" initialized
ERROR - 2025-05-31 09:38:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:38:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:38:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:38:58 --> Controller Class Initialized
INFO - 2025-05-31 09:38:58 --> Helper loaded: form_helper
INFO - 2025-05-31 09:38:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:38:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:38:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:38:58 --> Model "Crud" initialized
ERROR - 2025-05-31 09:38:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:38:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:39:57 --> Config Class Initialized
INFO - 2025-05-31 09:39:57 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:39:57 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:39:57 --> Utf8 Class Initialized
INFO - 2025-05-31 09:39:57 --> URI Class Initialized
INFO - 2025-05-31 09:39:57 --> Router Class Initialized
INFO - 2025-05-31 09:39:57 --> Output Class Initialized
INFO - 2025-05-31 09:39:57 --> Security Class Initialized
INFO - 2025-05-31 09:39:57 --> Config Class Initialized
INFO - 2025-05-31 09:39:57 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:39:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-05-31 09:39:57 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:39:57 --> Input Class Initialized
INFO - 2025-05-31 09:39:57 --> Utf8 Class Initialized
INFO - 2025-05-31 09:39:57 --> Language Class Initialized
INFO - 2025-05-31 09:39:57 --> URI Class Initialized
INFO - 2025-05-31 09:39:57 --> Router Class Initialized
INFO - 2025-05-31 09:39:57 --> Output Class Initialized
INFO - 2025-05-31 09:39:57 --> Security Class Initialized
DEBUG - 2025-05-31 09:39:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:39:57 --> Input Class Initialized
INFO - 2025-05-31 09:39:57 --> Language Class Initialized
INFO - 2025-05-31 09:39:57 --> Loader Class Initialized
INFO - 2025-05-31 09:39:57 --> Loader Class Initialized
INFO - 2025-05-31 09:39:57 --> Helper loaded: url_helper
INFO - 2025-05-31 09:39:57 --> Helper loaded: url_helper
INFO - 2025-05-31 09:39:57 --> Helper loaded: file_helper
INFO - 2025-05-31 09:39:57 --> Helper loaded: file_helper
INFO - 2025-05-31 09:39:57 --> Database Driver Class Initialized
INFO - 2025-05-31 09:39:57 --> Database Driver Class Initialized
INFO - 2025-05-31 09:39:57 --> Email Class Initialized
DEBUG - 2025-05-31 09:39:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:39:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:39:57 --> Controller Class Initialized
INFO - 2025-05-31 09:39:57 --> Helper loaded: form_helper
INFO - 2025-05-31 09:39:57 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:39:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:39:57 --> Email Class Initialized
INFO - 2025-05-31 09:39:57 --> Database Driver Class Initialized
DEBUG - 2025-05-31 09:39:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:39:57 --> Model "Crud" initialized
ERROR - 2025-05-31 09:39:57 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:39:57 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:39:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:39:57 --> Controller Class Initialized
INFO - 2025-05-31 09:39:57 --> Helper loaded: form_helper
INFO - 2025-05-31 09:39:57 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:39:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:39:57 --> Database Driver Class Initialized
INFO - 2025-05-31 09:39:57 --> Model "Crud" initialized
ERROR - 2025-05-31 09:39:57 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:39:57 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:40:57 --> Config Class Initialized
INFO - 2025-05-31 09:40:57 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:40:57 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:40:57 --> Utf8 Class Initialized
INFO - 2025-05-31 09:40:57 --> URI Class Initialized
INFO - 2025-05-31 09:40:57 --> Config Class Initialized
INFO - 2025-05-31 09:40:57 --> Hooks Class Initialized
INFO - 2025-05-31 09:40:57 --> Router Class Initialized
DEBUG - 2025-05-31 09:40:57 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:40:57 --> Output Class Initialized
INFO - 2025-05-31 09:40:57 --> Utf8 Class Initialized
INFO - 2025-05-31 09:40:57 --> Security Class Initialized
INFO - 2025-05-31 09:40:57 --> URI Class Initialized
DEBUG - 2025-05-31 09:40:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:40:57 --> Input Class Initialized
INFO - 2025-05-31 09:40:57 --> Router Class Initialized
INFO - 2025-05-31 09:40:57 --> Language Class Initialized
INFO - 2025-05-31 09:40:57 --> Output Class Initialized
INFO - 2025-05-31 09:40:57 --> Security Class Initialized
INFO - 2025-05-31 09:40:57 --> Loader Class Initialized
DEBUG - 2025-05-31 09:40:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:40:57 --> Helper loaded: url_helper
INFO - 2025-05-31 09:40:57 --> Input Class Initialized
INFO - 2025-05-31 09:40:57 --> Helper loaded: file_helper
INFO - 2025-05-31 09:40:57 --> Language Class Initialized
INFO - 2025-05-31 09:40:57 --> Database Driver Class Initialized
INFO - 2025-05-31 09:40:57 --> Loader Class Initialized
INFO - 2025-05-31 09:40:57 --> Helper loaded: url_helper
INFO - 2025-05-31 09:40:57 --> Helper loaded: file_helper
INFO - 2025-05-31 09:40:57 --> Database Driver Class Initialized
INFO - 2025-05-31 09:40:57 --> Email Class Initialized
INFO - 2025-05-31 09:40:57 --> Email Class Initialized
DEBUG - 2025-05-31 09:40:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 09:40:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:40:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:40:57 --> Controller Class Initialized
INFO - 2025-05-31 09:40:57 --> Helper loaded: form_helper
INFO - 2025-05-31 09:40:57 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:40:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:40:57 --> Database Driver Class Initialized
INFO - 2025-05-31 09:40:57 --> Model "Crud" initialized
ERROR - 2025-05-31 09:40:57 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:40:57 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:40:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:40:57 --> Controller Class Initialized
INFO - 2025-05-31 09:40:57 --> Helper loaded: form_helper
INFO - 2025-05-31 09:40:57 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:40:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:40:57 --> Database Driver Class Initialized
INFO - 2025-05-31 09:40:57 --> Model "Crud" initialized
ERROR - 2025-05-31 09:40:57 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:40:57 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:41:57 --> Config Class Initialized
INFO - 2025-05-31 09:41:57 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:41:57 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:41:57 --> Utf8 Class Initialized
INFO - 2025-05-31 09:41:57 --> Config Class Initialized
INFO - 2025-05-31 09:41:57 --> URI Class Initialized
INFO - 2025-05-31 09:41:57 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:41:57 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:41:57 --> Router Class Initialized
INFO - 2025-05-31 09:41:57 --> Output Class Initialized
INFO - 2025-05-31 09:41:57 --> Utf8 Class Initialized
INFO - 2025-05-31 09:41:57 --> Security Class Initialized
DEBUG - 2025-05-31 09:41:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:41:57 --> Input Class Initialized
INFO - 2025-05-31 09:41:57 --> URI Class Initialized
INFO - 2025-05-31 09:41:57 --> Language Class Initialized
INFO - 2025-05-31 09:41:57 --> Router Class Initialized
INFO - 2025-05-31 09:41:57 --> Output Class Initialized
INFO - 2025-05-31 09:41:57 --> Loader Class Initialized
INFO - 2025-05-31 09:41:57 --> Security Class Initialized
INFO - 2025-05-31 09:41:57 --> Helper loaded: url_helper
DEBUG - 2025-05-31 09:41:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:41:57 --> Helper loaded: file_helper
INFO - 2025-05-31 09:41:57 --> Input Class Initialized
INFO - 2025-05-31 09:41:57 --> Language Class Initialized
INFO - 2025-05-31 09:41:57 --> Database Driver Class Initialized
INFO - 2025-05-31 09:41:57 --> Loader Class Initialized
INFO - 2025-05-31 09:41:57 --> Helper loaded: url_helper
INFO - 2025-05-31 09:41:57 --> Helper loaded: file_helper
INFO - 2025-05-31 09:41:57 --> Database Driver Class Initialized
INFO - 2025-05-31 09:41:57 --> Email Class Initialized
INFO - 2025-05-31 09:41:57 --> Email Class Initialized
DEBUG - 2025-05-31 09:41:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 09:41:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:41:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:41:57 --> Controller Class Initialized
INFO - 2025-05-31 09:41:57 --> Helper loaded: form_helper
INFO - 2025-05-31 09:41:57 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:41:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:41:57 --> Database Driver Class Initialized
INFO - 2025-05-31 09:41:57 --> Model "Crud" initialized
ERROR - 2025-05-31 09:41:57 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:41:57 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:41:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:41:58 --> Controller Class Initialized
INFO - 2025-05-31 09:41:58 --> Helper loaded: form_helper
INFO - 2025-05-31 09:41:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:41:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:41:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:41:58 --> Model "Crud" initialized
ERROR - 2025-05-31 09:41:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:41:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:42:59 --> Config Class Initialized
INFO - 2025-05-31 09:42:59 --> Hooks Class Initialized
INFO - 2025-05-31 09:42:59 --> Config Class Initialized
DEBUG - 2025-05-31 09:42:59 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:42:59 --> Hooks Class Initialized
INFO - 2025-05-31 09:42:59 --> Utf8 Class Initialized
DEBUG - 2025-05-31 09:42:59 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:42:59 --> Utf8 Class Initialized
INFO - 2025-05-31 09:42:59 --> URI Class Initialized
INFO - 2025-05-31 09:42:59 --> URI Class Initialized
INFO - 2025-05-31 09:42:59 --> Router Class Initialized
INFO - 2025-05-31 09:42:59 --> Router Class Initialized
INFO - 2025-05-31 09:42:59 --> Output Class Initialized
INFO - 2025-05-31 09:42:59 --> Output Class Initialized
INFO - 2025-05-31 09:42:59 --> Security Class Initialized
INFO - 2025-05-31 09:42:59 --> Security Class Initialized
DEBUG - 2025-05-31 09:42:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-05-31 09:42:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:42:59 --> Input Class Initialized
INFO - 2025-05-31 09:42:59 --> Input Class Initialized
INFO - 2025-05-31 09:42:59 --> Language Class Initialized
INFO - 2025-05-31 09:42:59 --> Language Class Initialized
INFO - 2025-05-31 09:42:59 --> Loader Class Initialized
INFO - 2025-05-31 09:42:59 --> Loader Class Initialized
INFO - 2025-05-31 09:42:59 --> Helper loaded: url_helper
INFO - 2025-05-31 09:42:59 --> Helper loaded: url_helper
INFO - 2025-05-31 09:42:59 --> Helper loaded: file_helper
INFO - 2025-05-31 09:42:59 --> Helper loaded: file_helper
INFO - 2025-05-31 09:42:59 --> Database Driver Class Initialized
INFO - 2025-05-31 09:42:59 --> Database Driver Class Initialized
INFO - 2025-05-31 09:42:59 --> Email Class Initialized
DEBUG - 2025-05-31 09:42:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:42:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:42:59 --> Controller Class Initialized
INFO - 2025-05-31 09:42:59 --> Helper loaded: form_helper
INFO - 2025-05-31 09:42:59 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:42:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:42:59 --> Email Class Initialized
INFO - 2025-05-31 09:42:59 --> Database Driver Class Initialized
DEBUG - 2025-05-31 09:42:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:42:59 --> Model "Crud" initialized
ERROR - 2025-05-31 09:42:59 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:42:59 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:42:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:42:59 --> Controller Class Initialized
INFO - 2025-05-31 09:42:59 --> Helper loaded: form_helper
INFO - 2025-05-31 09:42:59 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:42:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:42:59 --> Database Driver Class Initialized
INFO - 2025-05-31 09:42:59 --> Model "Crud" initialized
ERROR - 2025-05-31 09:42:59 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:42:59 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:43:59 --> Config Class Initialized
INFO - 2025-05-31 09:43:59 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:43:59 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:43:59 --> Utf8 Class Initialized
INFO - 2025-05-31 09:43:59 --> URI Class Initialized
INFO - 2025-05-31 09:43:59 --> Router Class Initialized
INFO - 2025-05-31 09:43:59 --> Output Class Initialized
INFO - 2025-05-31 09:43:59 --> Security Class Initialized
DEBUG - 2025-05-31 09:43:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:43:59 --> Input Class Initialized
INFO - 2025-05-31 09:43:59 --> Language Class Initialized
INFO - 2025-05-31 09:43:59 --> Loader Class Initialized
INFO - 2025-05-31 09:43:59 --> Helper loaded: url_helper
INFO - 2025-05-31 09:43:59 --> Helper loaded: file_helper
INFO - 2025-05-31 09:43:59 --> Database Driver Class Initialized
INFO - 2025-05-31 09:43:59 --> Email Class Initialized
DEBUG - 2025-05-31 09:43:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:43:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:43:59 --> Controller Class Initialized
INFO - 2025-05-31 09:43:59 --> Helper loaded: form_helper
INFO - 2025-05-31 09:43:59 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:43:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:43:59 --> Database Driver Class Initialized
INFO - 2025-05-31 09:43:59 --> Config Class Initialized
INFO - 2025-05-31 09:43:59 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:43:59 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:43:59 --> Utf8 Class Initialized
INFO - 2025-05-31 09:43:59 --> URI Class Initialized
INFO - 2025-05-31 09:43:59 --> Router Class Initialized
INFO - 2025-05-31 09:43:59 --> Output Class Initialized
INFO - 2025-05-31 09:43:59 --> Security Class Initialized
DEBUG - 2025-05-31 09:43:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:43:59 --> Input Class Initialized
INFO - 2025-05-31 09:43:59 --> Language Class Initialized
INFO - 2025-05-31 09:43:59 --> Loader Class Initialized
INFO - 2025-05-31 09:43:59 --> Model "Crud" initialized
INFO - 2025-05-31 09:43:59 --> Helper loaded: url_helper
INFO - 2025-05-31 09:43:59 --> Helper loaded: file_helper
INFO - 2025-05-31 09:43:59 --> Database Driver Class Initialized
ERROR - 2025-05-31 09:43:59 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:43:59 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:43:59 --> Email Class Initialized
DEBUG - 2025-05-31 09:43:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:43:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:43:59 --> Controller Class Initialized
INFO - 2025-05-31 09:43:59 --> Helper loaded: form_helper
INFO - 2025-05-31 09:43:59 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:43:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:43:59 --> Database Driver Class Initialized
INFO - 2025-05-31 09:43:59 --> Model "Crud" initialized
ERROR - 2025-05-31 09:43:59 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:43:59 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:44:59 --> Config Class Initialized
INFO - 2025-05-31 09:44:59 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:44:59 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:44:59 --> Utf8 Class Initialized
INFO - 2025-05-31 09:44:59 --> URI Class Initialized
INFO - 2025-05-31 09:44:59 --> Router Class Initialized
INFO - 2025-05-31 09:44:59 --> Output Class Initialized
INFO - 2025-05-31 09:44:59 --> Security Class Initialized
DEBUG - 2025-05-31 09:44:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:44:59 --> Input Class Initialized
INFO - 2025-05-31 09:44:59 --> Language Class Initialized
INFO - 2025-05-31 09:44:59 --> Loader Class Initialized
INFO - 2025-05-31 09:44:59 --> Helper loaded: url_helper
INFO - 2025-05-31 09:44:59 --> Helper loaded: file_helper
INFO - 2025-05-31 09:44:59 --> Database Driver Class Initialized
INFO - 2025-05-31 09:44:59 --> Config Class Initialized
INFO - 2025-05-31 09:44:59 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:44:59 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:44:59 --> Utf8 Class Initialized
INFO - 2025-05-31 09:44:59 --> URI Class Initialized
INFO - 2025-05-31 09:44:59 --> Router Class Initialized
INFO - 2025-05-31 09:44:59 --> Output Class Initialized
INFO - 2025-05-31 09:44:59 --> Security Class Initialized
DEBUG - 2025-05-31 09:44:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:44:59 --> Input Class Initialized
INFO - 2025-05-31 09:44:59 --> Language Class Initialized
INFO - 2025-05-31 09:44:59 --> Loader Class Initialized
INFO - 2025-05-31 09:44:59 --> Helper loaded: url_helper
INFO - 2025-05-31 09:44:59 --> Helper loaded: file_helper
INFO - 2025-05-31 09:44:59 --> Database Driver Class Initialized
INFO - 2025-05-31 09:44:59 --> Email Class Initialized
DEBUG - 2025-05-31 09:44:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:44:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:44:59 --> Controller Class Initialized
INFO - 2025-05-31 09:44:59 --> Helper loaded: form_helper
INFO - 2025-05-31 09:44:59 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:44:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:44:59 --> Database Driver Class Initialized
INFO - 2025-05-31 09:44:59 --> Email Class Initialized
DEBUG - 2025-05-31 09:44:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:44:59 --> Model "Crud" initialized
ERROR - 2025-05-31 09:44:59 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:44:59 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:44:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:44:59 --> Controller Class Initialized
INFO - 2025-05-31 09:44:59 --> Helper loaded: form_helper
INFO - 2025-05-31 09:44:59 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:44:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:44:59 --> Database Driver Class Initialized
INFO - 2025-05-31 09:44:59 --> Model "Crud" initialized
ERROR - 2025-05-31 09:44:59 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:44:59 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:45:58 --> Config Class Initialized
INFO - 2025-05-31 09:45:58 --> Hooks Class Initialized
INFO - 2025-05-31 09:45:58 --> Config Class Initialized
DEBUG - 2025-05-31 09:45:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:45:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:45:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:45:58 --> Utf8 Class Initialized
INFO - 2025-05-31 09:45:58 --> Utf8 Class Initialized
INFO - 2025-05-31 09:45:58 --> URI Class Initialized
INFO - 2025-05-31 09:45:58 --> URI Class Initialized
INFO - 2025-05-31 09:45:58 --> Router Class Initialized
INFO - 2025-05-31 09:45:58 --> Router Class Initialized
INFO - 2025-05-31 09:45:58 --> Output Class Initialized
INFO - 2025-05-31 09:45:58 --> Output Class Initialized
INFO - 2025-05-31 09:45:58 --> Security Class Initialized
INFO - 2025-05-31 09:45:58 --> Security Class Initialized
DEBUG - 2025-05-31 09:45:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-05-31 09:45:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:45:58 --> Input Class Initialized
INFO - 2025-05-31 09:45:58 --> Input Class Initialized
INFO - 2025-05-31 09:45:58 --> Language Class Initialized
INFO - 2025-05-31 09:45:58 --> Language Class Initialized
INFO - 2025-05-31 09:45:58 --> Loader Class Initialized
INFO - 2025-05-31 09:45:58 --> Loader Class Initialized
INFO - 2025-05-31 09:45:58 --> Helper loaded: url_helper
INFO - 2025-05-31 09:45:58 --> Helper loaded: url_helper
INFO - 2025-05-31 09:45:58 --> Helper loaded: file_helper
INFO - 2025-05-31 09:45:58 --> Helper loaded: file_helper
INFO - 2025-05-31 09:45:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:45:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:45:58 --> Email Class Initialized
INFO - 2025-05-31 09:45:58 --> Email Class Initialized
DEBUG - 2025-05-31 09:45:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 09:45:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:45:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:45:58 --> Controller Class Initialized
INFO - 2025-05-31 09:45:58 --> Helper loaded: form_helper
INFO - 2025-05-31 09:45:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:45:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:45:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:45:58 --> Model "Crud" initialized
ERROR - 2025-05-31 09:45:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:45:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:45:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:45:58 --> Controller Class Initialized
INFO - 2025-05-31 09:45:58 --> Helper loaded: form_helper
INFO - 2025-05-31 09:45:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:45:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:45:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:45:58 --> Model "Crud" initialized
ERROR - 2025-05-31 09:45:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:45:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:46:58 --> Config Class Initialized
INFO - 2025-05-31 09:46:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:46:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:46:58 --> Utf8 Class Initialized
INFO - 2025-05-31 09:46:58 --> URI Class Initialized
INFO - 2025-05-31 09:46:58 --> Router Class Initialized
INFO - 2025-05-31 09:46:58 --> Output Class Initialized
INFO - 2025-05-31 09:46:58 --> Security Class Initialized
DEBUG - 2025-05-31 09:46:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:46:58 --> Input Class Initialized
INFO - 2025-05-31 09:46:58 --> Language Class Initialized
INFO - 2025-05-31 09:46:58 --> Loader Class Initialized
INFO - 2025-05-31 09:46:58 --> Helper loaded: url_helper
INFO - 2025-05-31 09:46:58 --> Helper loaded: file_helper
INFO - 2025-05-31 09:46:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:46:58 --> Config Class Initialized
INFO - 2025-05-31 09:46:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:46:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:46:58 --> Utf8 Class Initialized
INFO - 2025-05-31 09:46:58 --> URI Class Initialized
INFO - 2025-05-31 09:46:58 --> Router Class Initialized
INFO - 2025-05-31 09:46:58 --> Output Class Initialized
INFO - 2025-05-31 09:46:58 --> Security Class Initialized
DEBUG - 2025-05-31 09:46:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:46:58 --> Input Class Initialized
INFO - 2025-05-31 09:46:58 --> Language Class Initialized
INFO - 2025-05-31 09:46:58 --> Loader Class Initialized
INFO - 2025-05-31 09:46:58 --> Email Class Initialized
INFO - 2025-05-31 09:46:58 --> Helper loaded: url_helper
INFO - 2025-05-31 09:46:58 --> Helper loaded: file_helper
DEBUG - 2025-05-31 09:46:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:46:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:46:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:46:58 --> Controller Class Initialized
INFO - 2025-05-31 09:46:58 --> Helper loaded: form_helper
INFO - 2025-05-31 09:46:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:46:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:46:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:46:58 --> Model "Crud" initialized
INFO - 2025-05-31 09:46:58 --> Email Class Initialized
DEBUG - 2025-05-31 09:46:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2025-05-31 09:46:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:46:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:46:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:46:58 --> Controller Class Initialized
INFO - 2025-05-31 09:46:58 --> Helper loaded: form_helper
INFO - 2025-05-31 09:46:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:46:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:46:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:46:58 --> Model "Crud" initialized
ERROR - 2025-05-31 09:46:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:46:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:47:59 --> Config Class Initialized
INFO - 2025-05-31 09:47:59 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:47:59 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:47:59 --> Utf8 Class Initialized
INFO - 2025-05-31 09:47:59 --> URI Class Initialized
INFO - 2025-05-31 09:47:59 --> Router Class Initialized
INFO - 2025-05-31 09:47:59 --> Output Class Initialized
INFO - 2025-05-31 09:47:59 --> Config Class Initialized
INFO - 2025-05-31 09:47:59 --> Security Class Initialized
INFO - 2025-05-31 09:47:59 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:47:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-05-31 09:47:59 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:47:59 --> Input Class Initialized
INFO - 2025-05-31 09:47:59 --> Utf8 Class Initialized
INFO - 2025-05-31 09:47:59 --> Language Class Initialized
INFO - 2025-05-31 09:47:59 --> URI Class Initialized
INFO - 2025-05-31 09:47:59 --> Loader Class Initialized
INFO - 2025-05-31 09:47:59 --> Router Class Initialized
INFO - 2025-05-31 09:47:59 --> Helper loaded: url_helper
INFO - 2025-05-31 09:47:59 --> Helper loaded: file_helper
INFO - 2025-05-31 09:47:59 --> Output Class Initialized
INFO - 2025-05-31 09:47:59 --> Database Driver Class Initialized
INFO - 2025-05-31 09:47:59 --> Security Class Initialized
DEBUG - 2025-05-31 09:47:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:47:59 --> Input Class Initialized
INFO - 2025-05-31 09:47:59 --> Language Class Initialized
INFO - 2025-05-31 09:47:59 --> Loader Class Initialized
INFO - 2025-05-31 09:47:59 --> Helper loaded: url_helper
INFO - 2025-05-31 09:47:59 --> Helper loaded: file_helper
INFO - 2025-05-31 09:47:59 --> Database Driver Class Initialized
INFO - 2025-05-31 09:47:59 --> Email Class Initialized
INFO - 2025-05-31 09:47:59 --> Email Class Initialized
DEBUG - 2025-05-31 09:47:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 09:47:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:47:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:47:59 --> Controller Class Initialized
INFO - 2025-05-31 09:47:59 --> Helper loaded: form_helper
INFO - 2025-05-31 09:47:59 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:47:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:47:59 --> Database Driver Class Initialized
INFO - 2025-05-31 09:47:59 --> Model "Crud" initialized
ERROR - 2025-05-31 09:47:59 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:47:59 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:47:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:47:59 --> Controller Class Initialized
INFO - 2025-05-31 09:47:59 --> Helper loaded: form_helper
INFO - 2025-05-31 09:47:59 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:47:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:47:59 --> Database Driver Class Initialized
INFO - 2025-05-31 09:47:59 --> Model "Crud" initialized
ERROR - 2025-05-31 09:47:59 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:47:59 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:48:58 --> Config Class Initialized
INFO - 2025-05-31 09:48:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:48:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:48:58 --> Utf8 Class Initialized
INFO - 2025-05-31 09:48:58 --> URI Class Initialized
INFO - 2025-05-31 09:48:58 --> Router Class Initialized
INFO - 2025-05-31 09:48:58 --> Output Class Initialized
INFO - 2025-05-31 09:48:58 --> Security Class Initialized
DEBUG - 2025-05-31 09:48:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:48:58 --> Input Class Initialized
INFO - 2025-05-31 09:48:58 --> Language Class Initialized
INFO - 2025-05-31 09:48:58 --> Loader Class Initialized
INFO - 2025-05-31 09:48:58 --> Helper loaded: url_helper
INFO - 2025-05-31 09:48:58 --> Helper loaded: file_helper
INFO - 2025-05-31 09:48:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:48:58 --> Config Class Initialized
INFO - 2025-05-31 09:48:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:48:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:48:58 --> Utf8 Class Initialized
INFO - 2025-05-31 09:48:58 --> URI Class Initialized
INFO - 2025-05-31 09:48:58 --> Router Class Initialized
INFO - 2025-05-31 09:48:58 --> Output Class Initialized
INFO - 2025-05-31 09:48:58 --> Security Class Initialized
DEBUG - 2025-05-31 09:48:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:48:58 --> Input Class Initialized
INFO - 2025-05-31 09:48:58 --> Language Class Initialized
INFO - 2025-05-31 09:48:58 --> Loader Class Initialized
INFO - 2025-05-31 09:48:58 --> Helper loaded: url_helper
INFO - 2025-05-31 09:48:58 --> Helper loaded: file_helper
INFO - 2025-05-31 09:48:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:48:58 --> Email Class Initialized
DEBUG - 2025-05-31 09:48:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:48:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:48:58 --> Controller Class Initialized
INFO - 2025-05-31 09:48:58 --> Helper loaded: form_helper
INFO - 2025-05-31 09:48:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:48:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:48:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:48:58 --> Email Class Initialized
DEBUG - 2025-05-31 09:48:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:48:58 --> Model "Crud" initialized
ERROR - 2025-05-31 09:48:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:48:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:48:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:48:58 --> Controller Class Initialized
INFO - 2025-05-31 09:48:58 --> Helper loaded: form_helper
INFO - 2025-05-31 09:48:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:48:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:48:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:48:58 --> Model "Crud" initialized
ERROR - 2025-05-31 09:48:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:48:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:49:59 --> Config Class Initialized
INFO - 2025-05-31 09:49:59 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:49:59 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:49:59 --> Utf8 Class Initialized
INFO - 2025-05-31 09:49:59 --> URI Class Initialized
INFO - 2025-05-31 09:49:59 --> Router Class Initialized
INFO - 2025-05-31 09:49:59 --> Output Class Initialized
INFO - 2025-05-31 09:49:59 --> Security Class Initialized
DEBUG - 2025-05-31 09:49:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:49:59 --> Input Class Initialized
INFO - 2025-05-31 09:49:59 --> Language Class Initialized
INFO - 2025-05-31 09:49:59 --> Loader Class Initialized
INFO - 2025-05-31 09:49:59 --> Helper loaded: url_helper
INFO - 2025-05-31 09:49:59 --> Helper loaded: file_helper
INFO - 2025-05-31 09:49:59 --> Database Driver Class Initialized
INFO - 2025-05-31 09:49:59 --> Config Class Initialized
INFO - 2025-05-31 09:49:59 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:49:59 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:49:59 --> Utf8 Class Initialized
INFO - 2025-05-31 09:49:59 --> URI Class Initialized
INFO - 2025-05-31 09:49:59 --> Router Class Initialized
INFO - 2025-05-31 09:49:59 --> Output Class Initialized
INFO - 2025-05-31 09:49:59 --> Security Class Initialized
DEBUG - 2025-05-31 09:49:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:49:59 --> Input Class Initialized
INFO - 2025-05-31 09:49:59 --> Language Class Initialized
INFO - 2025-05-31 09:49:59 --> Loader Class Initialized
INFO - 2025-05-31 09:49:59 --> Helper loaded: url_helper
INFO - 2025-05-31 09:49:59 --> Helper loaded: file_helper
INFO - 2025-05-31 09:49:59 --> Database Driver Class Initialized
INFO - 2025-05-31 09:49:59 --> Email Class Initialized
DEBUG - 2025-05-31 09:49:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:49:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:49:59 --> Controller Class Initialized
INFO - 2025-05-31 09:49:59 --> Helper loaded: form_helper
INFO - 2025-05-31 09:49:59 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:49:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:49:59 --> Database Driver Class Initialized
INFO - 2025-05-31 09:49:59 --> Email Class Initialized
DEBUG - 2025-05-31 09:49:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:49:59 --> Model "Crud" initialized
ERROR - 2025-05-31 09:49:59 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:49:59 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:49:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:49:59 --> Controller Class Initialized
INFO - 2025-05-31 09:49:59 --> Helper loaded: form_helper
INFO - 2025-05-31 09:49:59 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:49:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:49:59 --> Database Driver Class Initialized
INFO - 2025-05-31 09:49:59 --> Model "Crud" initialized
ERROR - 2025-05-31 09:49:59 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:49:59 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:50:58 --> Config Class Initialized
INFO - 2025-05-31 09:50:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:50:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:50:58 --> Utf8 Class Initialized
INFO - 2025-05-31 09:50:58 --> URI Class Initialized
INFO - 2025-05-31 09:50:58 --> Router Class Initialized
INFO - 2025-05-31 09:50:58 --> Output Class Initialized
INFO - 2025-05-31 09:50:58 --> Security Class Initialized
DEBUG - 2025-05-31 09:50:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:50:58 --> Input Class Initialized
INFO - 2025-05-31 09:50:58 --> Language Class Initialized
INFO - 2025-05-31 09:50:58 --> Loader Class Initialized
INFO - 2025-05-31 09:50:58 --> Helper loaded: url_helper
INFO - 2025-05-31 09:50:58 --> Helper loaded: file_helper
INFO - 2025-05-31 09:50:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:50:58 --> Config Class Initialized
INFO - 2025-05-31 09:50:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:50:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:50:58 --> Utf8 Class Initialized
INFO - 2025-05-31 09:50:58 --> URI Class Initialized
INFO - 2025-05-31 09:50:58 --> Router Class Initialized
INFO - 2025-05-31 09:50:58 --> Output Class Initialized
INFO - 2025-05-31 09:50:58 --> Security Class Initialized
DEBUG - 2025-05-31 09:50:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:50:58 --> Input Class Initialized
INFO - 2025-05-31 09:50:58 --> Language Class Initialized
INFO - 2025-05-31 09:50:58 --> Loader Class Initialized
INFO - 2025-05-31 09:50:58 --> Helper loaded: url_helper
INFO - 2025-05-31 09:50:58 --> Helper loaded: file_helper
INFO - 2025-05-31 09:50:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:50:58 --> Email Class Initialized
DEBUG - 2025-05-31 09:50:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:50:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:50:58 --> Controller Class Initialized
INFO - 2025-05-31 09:50:58 --> Helper loaded: form_helper
INFO - 2025-05-31 09:50:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:50:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:50:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:50:58 --> Email Class Initialized
DEBUG - 2025-05-31 09:50:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:50:58 --> Model "Crud" initialized
ERROR - 2025-05-31 09:50:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:50:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:50:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:50:58 --> Controller Class Initialized
INFO - 2025-05-31 09:50:58 --> Helper loaded: form_helper
INFO - 2025-05-31 09:50:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:50:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:50:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:50:58 --> Model "Crud" initialized
ERROR - 2025-05-31 09:50:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:50:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:51:58 --> Config Class Initialized
INFO - 2025-05-31 09:51:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:51:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:51:58 --> Utf8 Class Initialized
INFO - 2025-05-31 09:51:58 --> URI Class Initialized
INFO - 2025-05-31 09:51:58 --> Config Class Initialized
INFO - 2025-05-31 09:51:58 --> Router Class Initialized
INFO - 2025-05-31 09:51:58 --> Hooks Class Initialized
INFO - 2025-05-31 09:51:58 --> Output Class Initialized
DEBUG - 2025-05-31 09:51:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:51:58 --> Utf8 Class Initialized
INFO - 2025-05-31 09:51:58 --> Security Class Initialized
INFO - 2025-05-31 09:51:58 --> URI Class Initialized
DEBUG - 2025-05-31 09:51:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:51:58 --> Input Class Initialized
INFO - 2025-05-31 09:51:58 --> Router Class Initialized
INFO - 2025-05-31 09:51:58 --> Language Class Initialized
INFO - 2025-05-31 09:51:58 --> Output Class Initialized
INFO - 2025-05-31 09:51:58 --> Security Class Initialized
INFO - 2025-05-31 09:51:58 --> Loader Class Initialized
DEBUG - 2025-05-31 09:51:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:51:58 --> Helper loaded: url_helper
INFO - 2025-05-31 09:51:58 --> Input Class Initialized
INFO - 2025-05-31 09:51:58 --> Helper loaded: file_helper
INFO - 2025-05-31 09:51:58 --> Language Class Initialized
INFO - 2025-05-31 09:51:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:51:58 --> Loader Class Initialized
INFO - 2025-05-31 09:51:58 --> Helper loaded: url_helper
INFO - 2025-05-31 09:51:58 --> Helper loaded: file_helper
INFO - 2025-05-31 09:51:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:51:58 --> Email Class Initialized
INFO - 2025-05-31 09:51:58 --> Email Class Initialized
DEBUG - 2025-05-31 09:51:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 09:51:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:51:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:51:58 --> Controller Class Initialized
INFO - 2025-05-31 09:51:58 --> Helper loaded: form_helper
INFO - 2025-05-31 09:51:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:51:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:51:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:51:58 --> Model "Crud" initialized
ERROR - 2025-05-31 09:51:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:51:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:51:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:51:58 --> Controller Class Initialized
INFO - 2025-05-31 09:51:58 --> Helper loaded: form_helper
INFO - 2025-05-31 09:51:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:51:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:51:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:51:58 --> Model "Crud" initialized
ERROR - 2025-05-31 09:51:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:51:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:52:59 --> Config Class Initialized
INFO - 2025-05-31 09:52:59 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:52:59 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:52:59 --> Utf8 Class Initialized
INFO - 2025-05-31 09:52:59 --> URI Class Initialized
INFO - 2025-05-31 09:52:59 --> Router Class Initialized
INFO - 2025-05-31 09:52:59 --> Output Class Initialized
INFO - 2025-05-31 09:52:59 --> Security Class Initialized
DEBUG - 2025-05-31 09:52:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:52:59 --> Input Class Initialized
INFO - 2025-05-31 09:52:59 --> Language Class Initialized
INFO - 2025-05-31 09:52:59 --> Loader Class Initialized
INFO - 2025-05-31 09:52:59 --> Helper loaded: url_helper
INFO - 2025-05-31 09:52:59 --> Helper loaded: file_helper
INFO - 2025-05-31 09:52:59 --> Database Driver Class Initialized
INFO - 2025-05-31 09:52:59 --> Email Class Initialized
DEBUG - 2025-05-31 09:52:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:52:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:52:59 --> Controller Class Initialized
INFO - 2025-05-31 09:52:59 --> Helper loaded: form_helper
INFO - 2025-05-31 09:52:59 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:52:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:52:59 --> Database Driver Class Initialized
INFO - 2025-05-31 09:52:59 --> Model "Crud" initialized
ERROR - 2025-05-31 09:52:59 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:52:59 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:52:59 --> Config Class Initialized
INFO - 2025-05-31 09:52:59 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:52:59 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:52:59 --> Utf8 Class Initialized
INFO - 2025-05-31 09:52:59 --> URI Class Initialized
INFO - 2025-05-31 09:52:59 --> Router Class Initialized
INFO - 2025-05-31 09:52:59 --> Output Class Initialized
INFO - 2025-05-31 09:52:59 --> Security Class Initialized
DEBUG - 2025-05-31 09:52:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:52:59 --> Input Class Initialized
INFO - 2025-05-31 09:52:59 --> Language Class Initialized
INFO - 2025-05-31 09:52:59 --> Loader Class Initialized
INFO - 2025-05-31 09:52:59 --> Helper loaded: url_helper
INFO - 2025-05-31 09:52:59 --> Helper loaded: file_helper
INFO - 2025-05-31 09:52:59 --> Database Driver Class Initialized
INFO - 2025-05-31 09:52:59 --> Email Class Initialized
DEBUG - 2025-05-31 09:52:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:52:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:52:59 --> Controller Class Initialized
INFO - 2025-05-31 09:52:59 --> Helper loaded: form_helper
INFO - 2025-05-31 09:52:59 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:52:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:52:59 --> Database Driver Class Initialized
INFO - 2025-05-31 09:52:59 --> Model "Crud" initialized
ERROR - 2025-05-31 09:52:59 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:52:59 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:53:58 --> Config Class Initialized
INFO - 2025-05-31 09:53:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:53:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:53:58 --> Utf8 Class Initialized
INFO - 2025-05-31 09:53:58 --> URI Class Initialized
INFO - 2025-05-31 09:53:58 --> Router Class Initialized
INFO - 2025-05-31 09:53:58 --> Output Class Initialized
INFO - 2025-05-31 09:53:58 --> Security Class Initialized
DEBUG - 2025-05-31 09:53:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:53:58 --> Input Class Initialized
INFO - 2025-05-31 09:53:58 --> Language Class Initialized
INFO - 2025-05-31 09:53:58 --> Loader Class Initialized
INFO - 2025-05-31 09:53:58 --> Helper loaded: url_helper
INFO - 2025-05-31 09:53:58 --> Helper loaded: file_helper
INFO - 2025-05-31 09:53:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:53:58 --> Config Class Initialized
INFO - 2025-05-31 09:53:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:53:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:53:58 --> Utf8 Class Initialized
INFO - 2025-05-31 09:53:58 --> URI Class Initialized
INFO - 2025-05-31 09:53:58 --> Router Class Initialized
INFO - 2025-05-31 09:53:58 --> Output Class Initialized
INFO - 2025-05-31 09:53:58 --> Security Class Initialized
DEBUG - 2025-05-31 09:53:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:53:58 --> Input Class Initialized
INFO - 2025-05-31 09:53:58 --> Language Class Initialized
INFO - 2025-05-31 09:53:58 --> Loader Class Initialized
INFO - 2025-05-31 09:53:58 --> Email Class Initialized
INFO - 2025-05-31 09:53:58 --> Helper loaded: url_helper
INFO - 2025-05-31 09:53:58 --> Helper loaded: file_helper
DEBUG - 2025-05-31 09:53:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:53:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:53:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:53:58 --> Controller Class Initialized
INFO - 2025-05-31 09:53:58 --> Helper loaded: form_helper
INFO - 2025-05-31 09:53:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:53:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:53:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:53:58 --> Email Class Initialized
DEBUG - 2025-05-31 09:53:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:53:58 --> Model "Crud" initialized
ERROR - 2025-05-31 09:53:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:53:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:53:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:53:58 --> Controller Class Initialized
INFO - 2025-05-31 09:53:58 --> Helper loaded: form_helper
INFO - 2025-05-31 09:53:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:53:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:53:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:53:58 --> Model "Crud" initialized
ERROR - 2025-05-31 09:53:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:53:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:54:58 --> Config Class Initialized
INFO - 2025-05-31 09:54:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:54:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:54:58 --> Utf8 Class Initialized
INFO - 2025-05-31 09:54:58 --> URI Class Initialized
INFO - 2025-05-31 09:54:58 --> Router Class Initialized
INFO - 2025-05-31 09:54:58 --> Config Class Initialized
INFO - 2025-05-31 09:54:58 --> Output Class Initialized
INFO - 2025-05-31 09:54:58 --> Hooks Class Initialized
INFO - 2025-05-31 09:54:58 --> Security Class Initialized
DEBUG - 2025-05-31 09:54:58 --> UTF-8 Support Enabled
DEBUG - 2025-05-31 09:54:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:54:58 --> Utf8 Class Initialized
INFO - 2025-05-31 09:54:58 --> Input Class Initialized
INFO - 2025-05-31 09:54:58 --> URI Class Initialized
INFO - 2025-05-31 09:54:58 --> Language Class Initialized
INFO - 2025-05-31 09:54:58 --> Router Class Initialized
INFO - 2025-05-31 09:54:58 --> Output Class Initialized
INFO - 2025-05-31 09:54:58 --> Loader Class Initialized
INFO - 2025-05-31 09:54:58 --> Security Class Initialized
INFO - 2025-05-31 09:54:58 --> Helper loaded: url_helper
DEBUG - 2025-05-31 09:54:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:54:58 --> Helper loaded: file_helper
INFO - 2025-05-31 09:54:58 --> Input Class Initialized
INFO - 2025-05-31 09:54:58 --> Language Class Initialized
INFO - 2025-05-31 09:54:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:54:58 --> Loader Class Initialized
INFO - 2025-05-31 09:54:58 --> Helper loaded: url_helper
INFO - 2025-05-31 09:54:58 --> Helper loaded: file_helper
INFO - 2025-05-31 09:54:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:54:58 --> Email Class Initialized
DEBUG - 2025-05-31 09:54:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:54:58 --> Email Class Initialized
INFO - 2025-05-31 09:54:58 --> Session: Class initialized using 'files' driver.
DEBUG - 2025-05-31 09:54:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:54:58 --> Controller Class Initialized
INFO - 2025-05-31 09:54:58 --> Helper loaded: form_helper
INFO - 2025-05-31 09:54:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:54:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:54:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:54:58 --> Model "Crud" initialized
ERROR - 2025-05-31 09:54:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:54:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:54:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:54:58 --> Controller Class Initialized
INFO - 2025-05-31 09:54:58 --> Helper loaded: form_helper
INFO - 2025-05-31 09:54:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:54:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:54:58 --> Database Driver Class Initialized
INFO - 2025-05-31 09:54:58 --> Model "Crud" initialized
ERROR - 2025-05-31 09:54:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:54:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:55:15 --> Config Class Initialized
INFO - 2025-05-31 09:55:15 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:55:15 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:55:15 --> Utf8 Class Initialized
INFO - 2025-05-31 09:55:15 --> URI Class Initialized
INFO - 2025-05-31 09:55:15 --> Router Class Initialized
INFO - 2025-05-31 09:55:15 --> Output Class Initialized
INFO - 2025-05-31 09:55:15 --> Security Class Initialized
DEBUG - 2025-05-31 09:55:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:55:15 --> Input Class Initialized
INFO - 2025-05-31 09:55:15 --> Language Class Initialized
INFO - 2025-05-31 09:55:15 --> Loader Class Initialized
INFO - 2025-05-31 09:55:15 --> Helper loaded: url_helper
INFO - 2025-05-31 09:55:15 --> Helper loaded: file_helper
INFO - 2025-05-31 09:55:15 --> Database Driver Class Initialized
INFO - 2025-05-31 09:55:15 --> Config Class Initialized
INFO - 2025-05-31 09:55:15 --> Hooks Class Initialized
DEBUG - 2025-05-31 09:55:15 --> UTF-8 Support Enabled
INFO - 2025-05-31 09:55:15 --> Utf8 Class Initialized
INFO - 2025-05-31 09:55:15 --> URI Class Initialized
INFO - 2025-05-31 09:55:15 --> Router Class Initialized
INFO - 2025-05-31 09:55:15 --> Output Class Initialized
INFO - 2025-05-31 09:55:15 --> Security Class Initialized
DEBUG - 2025-05-31 09:55:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 09:55:15 --> Input Class Initialized
INFO - 2025-05-31 09:55:15 --> Language Class Initialized
INFO - 2025-05-31 09:55:15 --> Loader Class Initialized
INFO - 2025-05-31 09:55:15 --> Helper loaded: url_helper
INFO - 2025-05-31 09:55:15 --> Helper loaded: file_helper
INFO - 2025-05-31 09:55:15 --> Database Driver Class Initialized
INFO - 2025-05-31 09:55:15 --> Email Class Initialized
DEBUG - 2025-05-31 09:55:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:55:15 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:55:15 --> Controller Class Initialized
INFO - 2025-05-31 09:55:15 --> Helper loaded: form_helper
INFO - 2025-05-31 09:55:15 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:55:15 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:55:15 --> Database Driver Class Initialized
INFO - 2025-05-31 09:55:15 --> Model "Crud" initialized
ERROR - 2025-05-31 09:55:15 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:55:15 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 09:55:15 --> Email Class Initialized
DEBUG - 2025-05-31 09:55:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 09:55:15 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 09:55:15 --> Controller Class Initialized
INFO - 2025-05-31 09:55:15 --> Helper loaded: form_helper
INFO - 2025-05-31 09:55:15 --> Form Validation Class Initialized
DEBUG - 2025-05-31 09:55:15 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 09:55:15 --> Database Driver Class Initialized
INFO - 2025-05-31 09:55:15 --> Model "Crud" initialized
ERROR - 2025-05-31 09:55:15 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 09:55:15 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:02:17 --> Config Class Initialized
INFO - 2025-05-31 10:02:17 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:02:17 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:02:17 --> Utf8 Class Initialized
INFO - 2025-05-31 10:02:17 --> URI Class Initialized
INFO - 2025-05-31 10:02:17 --> Router Class Initialized
INFO - 2025-05-31 10:02:17 --> Output Class Initialized
INFO - 2025-05-31 10:02:17 --> Security Class Initialized
DEBUG - 2025-05-31 10:02:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:02:17 --> Input Class Initialized
INFO - 2025-05-31 10:02:17 --> Language Class Initialized
INFO - 2025-05-31 10:02:17 --> Loader Class Initialized
INFO - 2025-05-31 10:02:17 --> Helper loaded: url_helper
INFO - 2025-05-31 10:02:17 --> Helper loaded: file_helper
INFO - 2025-05-31 10:02:17 --> Database Driver Class Initialized
INFO - 2025-05-31 10:02:17 --> Email Class Initialized
DEBUG - 2025-05-31 10:02:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:02:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:02:17 --> Controller Class Initialized
INFO - 2025-05-31 10:02:17 --> Helper loaded: form_helper
INFO - 2025-05-31 10:02:17 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:02:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:02:17 --> Database Driver Class Initialized
INFO - 2025-05-31 10:02:17 --> Config Class Initialized
INFO - 2025-05-31 10:02:17 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:02:17 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:02:17 --> Utf8 Class Initialized
INFO - 2025-05-31 10:02:17 --> URI Class Initialized
INFO - 2025-05-31 10:02:17 --> Router Class Initialized
INFO - 2025-05-31 10:02:17 --> Output Class Initialized
INFO - 2025-05-31 10:02:17 --> Security Class Initialized
DEBUG - 2025-05-31 10:02:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:02:17 --> Input Class Initialized
INFO - 2025-05-31 10:02:17 --> Language Class Initialized
INFO - 2025-05-31 10:02:17 --> Loader Class Initialized
INFO - 2025-05-31 10:02:17 --> Helper loaded: url_helper
INFO - 2025-05-31 10:02:17 --> Helper loaded: file_helper
INFO - 2025-05-31 10:02:17 --> Database Driver Class Initialized
INFO - 2025-05-31 10:02:17 --> Email Class Initialized
DEBUG - 2025-05-31 10:02:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:02:17 --> Model "Crud" initialized
ERROR - 2025-05-31 10:02:17 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:02:17 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:02:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:02:17 --> Controller Class Initialized
INFO - 2025-05-31 10:02:17 --> Helper loaded: form_helper
INFO - 2025-05-31 10:02:17 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:02:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:02:17 --> Database Driver Class Initialized
INFO - 2025-05-31 10:02:17 --> Model "Crud" initialized
ERROR - 2025-05-31 10:02:17 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:02:17 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:02:58 --> Config Class Initialized
INFO - 2025-05-31 10:02:58 --> Config Class Initialized
INFO - 2025-05-31 10:02:58 --> Hooks Class Initialized
INFO - 2025-05-31 10:02:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:02:58 --> UTF-8 Support Enabled
DEBUG - 2025-05-31 10:02:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:02:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:02:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:02:58 --> URI Class Initialized
INFO - 2025-05-31 10:02:58 --> URI Class Initialized
INFO - 2025-05-31 10:02:58 --> Router Class Initialized
INFO - 2025-05-31 10:02:58 --> Router Class Initialized
INFO - 2025-05-31 10:02:58 --> Output Class Initialized
INFO - 2025-05-31 10:02:58 --> Output Class Initialized
INFO - 2025-05-31 10:02:58 --> Security Class Initialized
INFO - 2025-05-31 10:02:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:02:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-05-31 10:02:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:02:58 --> Input Class Initialized
INFO - 2025-05-31 10:02:58 --> Input Class Initialized
INFO - 2025-05-31 10:02:58 --> Language Class Initialized
INFO - 2025-05-31 10:02:58 --> Language Class Initialized
INFO - 2025-05-31 10:02:58 --> Loader Class Initialized
INFO - 2025-05-31 10:02:58 --> Loader Class Initialized
INFO - 2025-05-31 10:02:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:02:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:02:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:02:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:02:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:02:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:02:58 --> Email Class Initialized
INFO - 2025-05-31 10:02:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:02:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 10:02:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:02:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:02:58 --> Controller Class Initialized
INFO - 2025-05-31 10:02:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:02:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:02:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:02:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:02:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:02:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:02:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:02:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:02:58 --> Controller Class Initialized
INFO - 2025-05-31 10:02:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:02:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:02:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:02:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:02:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:02:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:02:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:03:58 --> Config Class Initialized
INFO - 2025-05-31 10:03:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:03:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:03:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:03:58 --> URI Class Initialized
INFO - 2025-05-31 10:03:58 --> Router Class Initialized
INFO - 2025-05-31 10:03:58 --> Output Class Initialized
INFO - 2025-05-31 10:03:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:03:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:03:58 --> Input Class Initialized
INFO - 2025-05-31 10:03:58 --> Language Class Initialized
INFO - 2025-05-31 10:03:58 --> Loader Class Initialized
INFO - 2025-05-31 10:03:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:03:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:03:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:03:58 --> Config Class Initialized
INFO - 2025-05-31 10:03:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:03:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:03:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:03:58 --> URI Class Initialized
INFO - 2025-05-31 10:03:58 --> Router Class Initialized
INFO - 2025-05-31 10:03:58 --> Output Class Initialized
INFO - 2025-05-31 10:03:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:03:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:03:58 --> Input Class Initialized
INFO - 2025-05-31 10:03:58 --> Language Class Initialized
INFO - 2025-05-31 10:03:58 --> Loader Class Initialized
INFO - 2025-05-31 10:03:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:03:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:03:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:03:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:03:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:03:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:03:58 --> Controller Class Initialized
INFO - 2025-05-31 10:03:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:03:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:03:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:03:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:03:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:03:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:03:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:03:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:03:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:03:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:03:58 --> Controller Class Initialized
INFO - 2025-05-31 10:03:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:03:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:03:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:03:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:03:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:03:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:03:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:04:58 --> Config Class Initialized
INFO - 2025-05-31 10:04:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:04:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:04:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:04:58 --> URI Class Initialized
INFO - 2025-05-31 10:04:58 --> Router Class Initialized
INFO - 2025-05-31 10:04:58 --> Output Class Initialized
INFO - 2025-05-31 10:04:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:04:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:04:58 --> Input Class Initialized
INFO - 2025-05-31 10:04:58 --> Language Class Initialized
INFO - 2025-05-31 10:04:58 --> Loader Class Initialized
INFO - 2025-05-31 10:04:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:04:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:04:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:04:58 --> Config Class Initialized
INFO - 2025-05-31 10:04:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:04:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:04:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:04:58 --> URI Class Initialized
INFO - 2025-05-31 10:04:58 --> Router Class Initialized
INFO - 2025-05-31 10:04:58 --> Email Class Initialized
INFO - 2025-05-31 10:04:58 --> Output Class Initialized
INFO - 2025-05-31 10:04:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:04:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 10:04:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:04:58 --> Input Class Initialized
INFO - 2025-05-31 10:04:58 --> Language Class Initialized
INFO - 2025-05-31 10:04:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:04:58 --> Controller Class Initialized
INFO - 2025-05-31 10:04:58 --> Loader Class Initialized
INFO - 2025-05-31 10:04:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:04:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:04:58 --> Form Validation Class Initialized
INFO - 2025-05-31 10:04:58 --> Helper loaded: file_helper
DEBUG - 2025-05-31 10:04:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:04:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:04:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:04:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:04:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:04:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:04:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:04:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:04:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:04:58 --> Controller Class Initialized
INFO - 2025-05-31 10:04:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:04:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:04:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:04:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:04:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:04:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:04:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:05:59 --> Config Class Initialized
INFO - 2025-05-31 10:05:59 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:05:59 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:05:59 --> Utf8 Class Initialized
INFO - 2025-05-31 10:05:59 --> URI Class Initialized
INFO - 2025-05-31 10:05:59 --> Router Class Initialized
INFO - 2025-05-31 10:05:59 --> Output Class Initialized
INFO - 2025-05-31 10:05:59 --> Security Class Initialized
DEBUG - 2025-05-31 10:05:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:05:59 --> Config Class Initialized
INFO - 2025-05-31 10:05:59 --> Input Class Initialized
INFO - 2025-05-31 10:05:59 --> Hooks Class Initialized
INFO - 2025-05-31 10:05:59 --> Language Class Initialized
DEBUG - 2025-05-31 10:05:59 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:05:59 --> Loader Class Initialized
INFO - 2025-05-31 10:05:59 --> Utf8 Class Initialized
INFO - 2025-05-31 10:05:59 --> Helper loaded: url_helper
INFO - 2025-05-31 10:05:59 --> Helper loaded: file_helper
INFO - 2025-05-31 10:05:59 --> URI Class Initialized
INFO - 2025-05-31 10:05:59 --> Database Driver Class Initialized
INFO - 2025-05-31 10:05:59 --> Router Class Initialized
INFO - 2025-05-31 10:05:59 --> Output Class Initialized
INFO - 2025-05-31 10:05:59 --> Security Class Initialized
DEBUG - 2025-05-31 10:05:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:05:59 --> Input Class Initialized
INFO - 2025-05-31 10:05:59 --> Language Class Initialized
INFO - 2025-05-31 10:05:59 --> Loader Class Initialized
INFO - 2025-05-31 10:05:59 --> Helper loaded: url_helper
INFO - 2025-05-31 10:05:59 --> Helper loaded: file_helper
INFO - 2025-05-31 10:05:59 --> Database Driver Class Initialized
INFO - 2025-05-31 10:05:59 --> Email Class Initialized
DEBUG - 2025-05-31 10:05:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:05:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:05:59 --> Controller Class Initialized
INFO - 2025-05-31 10:05:59 --> Helper loaded: form_helper
INFO - 2025-05-31 10:05:59 --> Email Class Initialized
INFO - 2025-05-31 10:05:59 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:05:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-05-31 10:05:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:05:59 --> Database Driver Class Initialized
INFO - 2025-05-31 10:05:59 --> Model "Crud" initialized
ERROR - 2025-05-31 10:05:59 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:05:59 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:05:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:05:59 --> Controller Class Initialized
INFO - 2025-05-31 10:05:59 --> Helper loaded: form_helper
INFO - 2025-05-31 10:05:59 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:05:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:05:59 --> Database Driver Class Initialized
INFO - 2025-05-31 10:05:59 --> Model "Crud" initialized
ERROR - 2025-05-31 10:05:59 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:05:59 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:06:58 --> Config Class Initialized
INFO - 2025-05-31 10:06:58 --> Config Class Initialized
INFO - 2025-05-31 10:06:58 --> Hooks Class Initialized
INFO - 2025-05-31 10:06:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:06:58 --> UTF-8 Support Enabled
DEBUG - 2025-05-31 10:06:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:06:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:06:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:06:58 --> URI Class Initialized
INFO - 2025-05-31 10:06:58 --> URI Class Initialized
INFO - 2025-05-31 10:06:58 --> Router Class Initialized
INFO - 2025-05-31 10:06:58 --> Router Class Initialized
INFO - 2025-05-31 10:06:58 --> Output Class Initialized
INFO - 2025-05-31 10:06:58 --> Security Class Initialized
INFO - 2025-05-31 10:06:58 --> Output Class Initialized
DEBUG - 2025-05-31 10:06:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:06:58 --> Security Class Initialized
INFO - 2025-05-31 10:06:58 --> Input Class Initialized
DEBUG - 2025-05-31 10:06:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:06:58 --> Language Class Initialized
INFO - 2025-05-31 10:06:58 --> Input Class Initialized
INFO - 2025-05-31 10:06:58 --> Language Class Initialized
INFO - 2025-05-31 10:06:58 --> Loader Class Initialized
INFO - 2025-05-31 10:06:58 --> Loader Class Initialized
INFO - 2025-05-31 10:06:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:06:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:06:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:06:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:06:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:06:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:06:58 --> Email Class Initialized
INFO - 2025-05-31 10:06:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:06:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 10:06:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:06:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:06:58 --> Controller Class Initialized
INFO - 2025-05-31 10:06:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:06:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:06:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:06:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:06:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:06:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:06:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:06:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:06:58 --> Controller Class Initialized
INFO - 2025-05-31 10:06:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:06:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:06:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:06:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:06:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:06:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:06:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:07:58 --> Config Class Initialized
INFO - 2025-05-31 10:07:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:07:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:07:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:07:58 --> URI Class Initialized
INFO - 2025-05-31 10:07:58 --> Router Class Initialized
INFO - 2025-05-31 10:07:58 --> Output Class Initialized
INFO - 2025-05-31 10:07:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:07:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:07:58 --> Input Class Initialized
INFO - 2025-05-31 10:07:58 --> Language Class Initialized
INFO - 2025-05-31 10:07:58 --> Loader Class Initialized
INFO - 2025-05-31 10:07:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:07:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:07:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:07:58 --> Config Class Initialized
INFO - 2025-05-31 10:07:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:07:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:07:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:07:58 --> URI Class Initialized
INFO - 2025-05-31 10:07:58 --> Router Class Initialized
INFO - 2025-05-31 10:07:58 --> Output Class Initialized
INFO - 2025-05-31 10:07:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:07:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:07:58 --> Input Class Initialized
INFO - 2025-05-31 10:07:58 --> Language Class Initialized
INFO - 2025-05-31 10:07:58 --> Loader Class Initialized
INFO - 2025-05-31 10:07:58 --> Email Class Initialized
INFO - 2025-05-31 10:07:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:07:58 --> Helper loaded: file_helper
DEBUG - 2025-05-31 10:07:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:07:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:07:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:07:58 --> Controller Class Initialized
INFO - 2025-05-31 10:07:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:07:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:07:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:07:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:07:58 --> Model "Crud" initialized
INFO - 2025-05-31 10:07:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:07:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2025-05-31 10:07:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:07:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:07:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:07:58 --> Controller Class Initialized
INFO - 2025-05-31 10:07:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:07:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:07:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:07:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:07:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:07:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:07:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:08:58 --> Config Class Initialized
INFO - 2025-05-31 10:08:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:08:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:08:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:08:58 --> URI Class Initialized
INFO - 2025-05-31 10:08:58 --> Router Class Initialized
INFO - 2025-05-31 10:08:58 --> Output Class Initialized
INFO - 2025-05-31 10:08:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:08:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:08:58 --> Input Class Initialized
INFO - 2025-05-31 10:08:58 --> Language Class Initialized
INFO - 2025-05-31 10:08:58 --> Loader Class Initialized
INFO - 2025-05-31 10:08:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:08:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:08:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:08:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:08:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:08:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:08:58 --> Controller Class Initialized
INFO - 2025-05-31 10:08:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:08:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:08:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:08:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:08:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:08:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:08:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:08:58 --> Config Class Initialized
INFO - 2025-05-31 10:08:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:08:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:08:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:08:58 --> URI Class Initialized
INFO - 2025-05-31 10:08:58 --> Router Class Initialized
INFO - 2025-05-31 10:08:58 --> Output Class Initialized
INFO - 2025-05-31 10:08:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:08:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:08:58 --> Input Class Initialized
INFO - 2025-05-31 10:08:58 --> Language Class Initialized
INFO - 2025-05-31 10:08:58 --> Loader Class Initialized
INFO - 2025-05-31 10:08:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:08:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:08:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:08:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:08:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:08:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:08:58 --> Controller Class Initialized
INFO - 2025-05-31 10:08:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:08:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:08:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:08:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:08:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:08:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:08:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:09:58 --> Config Class Initialized
INFO - 2025-05-31 10:09:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:09:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:09:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:09:58 --> URI Class Initialized
INFO - 2025-05-31 10:09:58 --> Router Class Initialized
INFO - 2025-05-31 10:09:58 --> Output Class Initialized
INFO - 2025-05-31 10:09:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:09:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:09:58 --> Input Class Initialized
INFO - 2025-05-31 10:09:58 --> Language Class Initialized
INFO - 2025-05-31 10:09:58 --> Loader Class Initialized
INFO - 2025-05-31 10:09:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:09:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:09:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:09:58 --> Config Class Initialized
INFO - 2025-05-31 10:09:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:09:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:09:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:09:58 --> URI Class Initialized
INFO - 2025-05-31 10:09:58 --> Email Class Initialized
INFO - 2025-05-31 10:09:58 --> Router Class Initialized
DEBUG - 2025-05-31 10:09:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:09:58 --> Output Class Initialized
INFO - 2025-05-31 10:09:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:09:58 --> Security Class Initialized
INFO - 2025-05-31 10:09:58 --> Controller Class Initialized
DEBUG - 2025-05-31 10:09:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:09:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:09:58 --> Input Class Initialized
INFO - 2025-05-31 10:09:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:09:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:09:58 --> Language Class Initialized
INFO - 2025-05-31 10:09:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:09:58 --> Loader Class Initialized
INFO - 2025-05-31 10:09:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:09:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:09:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:09:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:09:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:09:58 --> Email Class Initialized
INFO - 2025-05-31 10:09:58 --> Language file loaded: language/english/db_lang.php
DEBUG - 2025-05-31 10:09:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:09:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:09:58 --> Controller Class Initialized
INFO - 2025-05-31 10:09:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:09:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:09:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:09:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:09:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:09:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:09:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:10:58 --> Config Class Initialized
INFO - 2025-05-31 10:10:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:10:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:10:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:10:58 --> URI Class Initialized
INFO - 2025-05-31 10:10:58 --> Router Class Initialized
INFO - 2025-05-31 10:10:58 --> Output Class Initialized
INFO - 2025-05-31 10:10:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:10:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:10:58 --> Input Class Initialized
INFO - 2025-05-31 10:10:58 --> Language Class Initialized
INFO - 2025-05-31 10:10:58 --> Loader Class Initialized
INFO - 2025-05-31 10:10:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:10:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:10:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:10:58 --> Config Class Initialized
INFO - 2025-05-31 10:10:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:10:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:10:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:10:58 --> URI Class Initialized
INFO - 2025-05-31 10:10:58 --> Router Class Initialized
INFO - 2025-05-31 10:10:58 --> Output Class Initialized
INFO - 2025-05-31 10:10:58 --> Email Class Initialized
INFO - 2025-05-31 10:10:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:10:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 10:10:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:10:58 --> Input Class Initialized
INFO - 2025-05-31 10:10:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:10:58 --> Language Class Initialized
INFO - 2025-05-31 10:10:58 --> Controller Class Initialized
INFO - 2025-05-31 10:10:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:10:58 --> Loader Class Initialized
INFO - 2025-05-31 10:10:58 --> Form Validation Class Initialized
INFO - 2025-05-31 10:10:58 --> Helper loaded: url_helper
DEBUG - 2025-05-31 10:10:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:10:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:10:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:10:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:10:58 --> Model "Crud" initialized
INFO - 2025-05-31 10:10:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:10:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2025-05-31 10:10:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:10:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:10:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:10:58 --> Controller Class Initialized
INFO - 2025-05-31 10:10:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:10:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:10:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:10:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:10:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:10:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:10:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:11:58 --> Config Class Initialized
INFO - 2025-05-31 10:11:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:11:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:11:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:11:58 --> URI Class Initialized
INFO - 2025-05-31 10:11:58 --> Router Class Initialized
INFO - 2025-05-31 10:11:58 --> Output Class Initialized
INFO - 2025-05-31 10:11:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:11:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:11:58 --> Input Class Initialized
INFO - 2025-05-31 10:11:58 --> Language Class Initialized
INFO - 2025-05-31 10:11:58 --> Loader Class Initialized
INFO - 2025-05-31 10:11:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:11:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:11:58 --> Config Class Initialized
INFO - 2025-05-31 10:11:58 --> Hooks Class Initialized
INFO - 2025-05-31 10:11:58 --> Database Driver Class Initialized
DEBUG - 2025-05-31 10:11:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:11:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:11:58 --> URI Class Initialized
INFO - 2025-05-31 10:11:58 --> Router Class Initialized
INFO - 2025-05-31 10:11:58 --> Output Class Initialized
INFO - 2025-05-31 10:11:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:11:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:11:58 --> Input Class Initialized
INFO - 2025-05-31 10:11:58 --> Language Class Initialized
INFO - 2025-05-31 10:11:58 --> Loader Class Initialized
INFO - 2025-05-31 10:11:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:11:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:11:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:11:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:11:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:11:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:11:58 --> Controller Class Initialized
INFO - 2025-05-31 10:11:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:11:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:11:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:11:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:11:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:11:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:11:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:11:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:11:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:11:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:11:58 --> Controller Class Initialized
INFO - 2025-05-31 10:11:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:11:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:11:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:11:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:11:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:11:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:11:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:12:58 --> Config Class Initialized
INFO - 2025-05-31 10:12:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:12:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:12:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:12:58 --> URI Class Initialized
INFO - 2025-05-31 10:12:58 --> Router Class Initialized
INFO - 2025-05-31 10:12:58 --> Output Class Initialized
INFO - 2025-05-31 10:12:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:12:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:12:58 --> Input Class Initialized
INFO - 2025-05-31 10:12:58 --> Language Class Initialized
INFO - 2025-05-31 10:12:58 --> Config Class Initialized
INFO - 2025-05-31 10:12:58 --> Loader Class Initialized
INFO - 2025-05-31 10:12:58 --> Hooks Class Initialized
INFO - 2025-05-31 10:12:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:12:58 --> Helper loaded: file_helper
DEBUG - 2025-05-31 10:12:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:12:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:12:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:12:58 --> URI Class Initialized
INFO - 2025-05-31 10:12:58 --> Router Class Initialized
INFO - 2025-05-31 10:12:58 --> Output Class Initialized
INFO - 2025-05-31 10:12:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:12:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:12:58 --> Input Class Initialized
INFO - 2025-05-31 10:12:58 --> Language Class Initialized
INFO - 2025-05-31 10:12:58 --> Loader Class Initialized
INFO - 2025-05-31 10:12:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:12:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:12:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:12:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:12:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:12:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:12:58 --> Email Class Initialized
INFO - 2025-05-31 10:12:58 --> Controller Class Initialized
INFO - 2025-05-31 10:12:58 --> Helper loaded: form_helper
DEBUG - 2025-05-31 10:12:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:12:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:12:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:12:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:12:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:12:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:12:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:12:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:12:58 --> Controller Class Initialized
INFO - 2025-05-31 10:12:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:12:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:12:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:12:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:12:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:12:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:12:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:13:58 --> Config Class Initialized
INFO - 2025-05-31 10:13:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:13:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:13:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:13:58 --> URI Class Initialized
INFO - 2025-05-31 10:13:58 --> Router Class Initialized
INFO - 2025-05-31 10:13:58 --> Output Class Initialized
INFO - 2025-05-31 10:13:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:13:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:13:58 --> Input Class Initialized
INFO - 2025-05-31 10:13:58 --> Language Class Initialized
INFO - 2025-05-31 10:13:58 --> Loader Class Initialized
INFO - 2025-05-31 10:13:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:13:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:13:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:13:58 --> Config Class Initialized
INFO - 2025-05-31 10:13:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:13:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:13:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:13:58 --> URI Class Initialized
INFO - 2025-05-31 10:13:58 --> Router Class Initialized
INFO - 2025-05-31 10:13:58 --> Output Class Initialized
INFO - 2025-05-31 10:13:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:13:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:13:58 --> Input Class Initialized
INFO - 2025-05-31 10:13:58 --> Language Class Initialized
INFO - 2025-05-31 10:13:58 --> Loader Class Initialized
INFO - 2025-05-31 10:13:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:13:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:13:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:13:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:13:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:13:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:13:58 --> Controller Class Initialized
INFO - 2025-05-31 10:13:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:13:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:13:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:13:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:13:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:13:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:13:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:13:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:13:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:13:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:13:58 --> Controller Class Initialized
INFO - 2025-05-31 10:13:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:13:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:13:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:13:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:13:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:13:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:13:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:14:58 --> Config Class Initialized
INFO - 2025-05-31 10:14:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:14:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:14:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:14:58 --> URI Class Initialized
INFO - 2025-05-31 10:14:58 --> Router Class Initialized
INFO - 2025-05-31 10:14:58 --> Output Class Initialized
INFO - 2025-05-31 10:14:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:14:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:14:58 --> Config Class Initialized
INFO - 2025-05-31 10:14:58 --> Input Class Initialized
INFO - 2025-05-31 10:14:58 --> Hooks Class Initialized
INFO - 2025-05-31 10:14:58 --> Language Class Initialized
DEBUG - 2025-05-31 10:14:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:14:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:14:58 --> URI Class Initialized
INFO - 2025-05-31 10:14:58 --> Loader Class Initialized
INFO - 2025-05-31 10:14:58 --> Router Class Initialized
INFO - 2025-05-31 10:14:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:14:58 --> Output Class Initialized
INFO - 2025-05-31 10:14:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:14:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:14:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:14:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:14:58 --> Input Class Initialized
INFO - 2025-05-31 10:14:58 --> Language Class Initialized
INFO - 2025-05-31 10:14:58 --> Loader Class Initialized
INFO - 2025-05-31 10:14:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:14:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:14:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:14:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:14:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:14:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:14:58 --> Email Class Initialized
INFO - 2025-05-31 10:14:58 --> Controller Class Initialized
DEBUG - 2025-05-31 10:14:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:14:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:14:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:14:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:14:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:14:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:14:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:14:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:14:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:14:58 --> Controller Class Initialized
INFO - 2025-05-31 10:14:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:14:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:14:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:14:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:14:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:14:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:14:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:15:58 --> Config Class Initialized
INFO - 2025-05-31 10:15:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:15:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:15:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:15:58 --> URI Class Initialized
INFO - 2025-05-31 10:15:58 --> Config Class Initialized
INFO - 2025-05-31 10:15:58 --> Router Class Initialized
INFO - 2025-05-31 10:15:58 --> Hooks Class Initialized
INFO - 2025-05-31 10:15:58 --> Output Class Initialized
DEBUG - 2025-05-31 10:15:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:15:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:15:58 --> Security Class Initialized
INFO - 2025-05-31 10:15:58 --> URI Class Initialized
DEBUG - 2025-05-31 10:15:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:15:58 --> Router Class Initialized
INFO - 2025-05-31 10:15:58 --> Input Class Initialized
INFO - 2025-05-31 10:15:58 --> Output Class Initialized
INFO - 2025-05-31 10:15:58 --> Language Class Initialized
INFO - 2025-05-31 10:15:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:15:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:15:58 --> Input Class Initialized
INFO - 2025-05-31 10:15:58 --> Loader Class Initialized
INFO - 2025-05-31 10:15:58 --> Language Class Initialized
INFO - 2025-05-31 10:15:58 --> Loader Class Initialized
INFO - 2025-05-31 10:15:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:15:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:15:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:15:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:15:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:15:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:15:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:15:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:15:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:15:58 --> Controller Class Initialized
INFO - 2025-05-31 10:15:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:15:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:15:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:15:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:15:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:15:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:15:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:15:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:15:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:15:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:15:58 --> Controller Class Initialized
INFO - 2025-05-31 10:15:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:15:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:15:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:15:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:15:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:15:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:15:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:16:58 --> Config Class Initialized
INFO - 2025-05-31 10:16:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:16:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:16:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:16:58 --> URI Class Initialized
INFO - 2025-05-31 10:16:58 --> Router Class Initialized
INFO - 2025-05-31 10:16:58 --> Output Class Initialized
INFO - 2025-05-31 10:16:58 --> Security Class Initialized
INFO - 2025-05-31 10:16:58 --> Config Class Initialized
DEBUG - 2025-05-31 10:16:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:16:58 --> Hooks Class Initialized
INFO - 2025-05-31 10:16:58 --> Input Class Initialized
INFO - 2025-05-31 10:16:58 --> Language Class Initialized
DEBUG - 2025-05-31 10:16:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:16:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:16:58 --> Loader Class Initialized
INFO - 2025-05-31 10:16:58 --> URI Class Initialized
INFO - 2025-05-31 10:16:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:16:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:16:58 --> Router Class Initialized
INFO - 2025-05-31 10:16:58 --> Output Class Initialized
INFO - 2025-05-31 10:16:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:16:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:16:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:16:58 --> Input Class Initialized
INFO - 2025-05-31 10:16:58 --> Language Class Initialized
INFO - 2025-05-31 10:16:58 --> Loader Class Initialized
INFO - 2025-05-31 10:16:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:16:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:16:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:16:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:16:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:16:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:16:58 --> Controller Class Initialized
INFO - 2025-05-31 10:16:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:16:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:16:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:16:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:16:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:16:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:16:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:16:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:16:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:16:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:16:58 --> Controller Class Initialized
INFO - 2025-05-31 10:16:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:16:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:16:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:16:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:16:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:16:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:16:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:17:58 --> Config Class Initialized
INFO - 2025-05-31 10:17:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:17:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:17:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:17:58 --> URI Class Initialized
INFO - 2025-05-31 10:17:58 --> Router Class Initialized
INFO - 2025-05-31 10:17:58 --> Output Class Initialized
INFO - 2025-05-31 10:17:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:17:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:17:58 --> Input Class Initialized
INFO - 2025-05-31 10:17:58 --> Config Class Initialized
INFO - 2025-05-31 10:17:58 --> Hooks Class Initialized
INFO - 2025-05-31 10:17:58 --> Language Class Initialized
DEBUG - 2025-05-31 10:17:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:17:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:17:58 --> Loader Class Initialized
INFO - 2025-05-31 10:17:58 --> URI Class Initialized
INFO - 2025-05-31 10:17:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:17:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:17:58 --> Router Class Initialized
INFO - 2025-05-31 10:17:58 --> Output Class Initialized
INFO - 2025-05-31 10:17:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:17:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:17:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:17:58 --> Input Class Initialized
INFO - 2025-05-31 10:17:58 --> Language Class Initialized
INFO - 2025-05-31 10:17:58 --> Loader Class Initialized
INFO - 2025-05-31 10:17:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:17:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:17:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:17:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:17:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:17:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:17:58 --> Controller Class Initialized
INFO - 2025-05-31 10:17:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:17:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:17:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:17:58 --> Email Class Initialized
INFO - 2025-05-31 10:17:58 --> Database Driver Class Initialized
DEBUG - 2025-05-31 10:17:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:17:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:17:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:17:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:17:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:17:58 --> Controller Class Initialized
INFO - 2025-05-31 10:17:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:17:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:17:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:17:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:17:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:17:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:17:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:18:58 --> Config Class Initialized
INFO - 2025-05-31 10:18:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:18:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:18:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:18:58 --> URI Class Initialized
INFO - 2025-05-31 10:18:58 --> Router Class Initialized
INFO - 2025-05-31 10:18:58 --> Output Class Initialized
INFO - 2025-05-31 10:18:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:18:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:18:58 --> Config Class Initialized
INFO - 2025-05-31 10:18:58 --> Input Class Initialized
INFO - 2025-05-31 10:18:58 --> Hooks Class Initialized
INFO - 2025-05-31 10:18:58 --> Language Class Initialized
DEBUG - 2025-05-31 10:18:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:18:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:18:58 --> Loader Class Initialized
INFO - 2025-05-31 10:18:58 --> URI Class Initialized
INFO - 2025-05-31 10:18:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:18:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:18:58 --> Router Class Initialized
INFO - 2025-05-31 10:18:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:18:58 --> Output Class Initialized
INFO - 2025-05-31 10:18:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:18:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:18:58 --> Input Class Initialized
INFO - 2025-05-31 10:18:58 --> Language Class Initialized
INFO - 2025-05-31 10:18:58 --> Loader Class Initialized
INFO - 2025-05-31 10:18:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:18:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:18:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:18:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:18:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:18:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:18:58 --> Controller Class Initialized
INFO - 2025-05-31 10:18:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:18:58 --> Form Validation Class Initialized
INFO - 2025-05-31 10:18:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:18:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-05-31 10:18:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:18:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:18:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:18:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:18:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:18:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:18:58 --> Controller Class Initialized
INFO - 2025-05-31 10:18:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:18:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:18:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:18:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:18:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:18:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:18:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:19:58 --> Config Class Initialized
INFO - 2025-05-31 10:19:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:19:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:19:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:19:58 --> URI Class Initialized
INFO - 2025-05-31 10:19:58 --> Router Class Initialized
INFO - 2025-05-31 10:19:58 --> Output Class Initialized
INFO - 2025-05-31 10:19:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:19:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:19:58 --> Input Class Initialized
INFO - 2025-05-31 10:19:58 --> Language Class Initialized
INFO - 2025-05-31 10:19:58 --> Loader Class Initialized
INFO - 2025-05-31 10:19:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:19:58 --> Config Class Initialized
INFO - 2025-05-31 10:19:58 --> Hooks Class Initialized
INFO - 2025-05-31 10:19:58 --> Helper loaded: file_helper
DEBUG - 2025-05-31 10:19:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:19:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:19:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:19:58 --> URI Class Initialized
INFO - 2025-05-31 10:19:58 --> Router Class Initialized
INFO - 2025-05-31 10:19:58 --> Output Class Initialized
INFO - 2025-05-31 10:19:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:19:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:19:58 --> Input Class Initialized
INFO - 2025-05-31 10:19:58 --> Language Class Initialized
INFO - 2025-05-31 10:19:58 --> Loader Class Initialized
INFO - 2025-05-31 10:19:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:19:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:19:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:19:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:19:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:19:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:19:58 --> Controller Class Initialized
INFO - 2025-05-31 10:19:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:19:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:19:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:19:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:19:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:19:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:19:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:19:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:19:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:19:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:19:58 --> Controller Class Initialized
INFO - 2025-05-31 10:19:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:19:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:19:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:19:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:19:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:19:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:19:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:20:58 --> Config Class Initialized
INFO - 2025-05-31 10:20:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:20:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:20:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:20:58 --> URI Class Initialized
INFO - 2025-05-31 10:20:58 --> Router Class Initialized
INFO - 2025-05-31 10:20:58 --> Output Class Initialized
INFO - 2025-05-31 10:20:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:20:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:20:58 --> Input Class Initialized
INFO - 2025-05-31 10:20:58 --> Language Class Initialized
INFO - 2025-05-31 10:20:58 --> Loader Class Initialized
INFO - 2025-05-31 10:20:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:20:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:20:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:20:58 --> Config Class Initialized
INFO - 2025-05-31 10:20:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:20:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:20:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:20:58 --> URI Class Initialized
INFO - 2025-05-31 10:20:58 --> Email Class Initialized
INFO - 2025-05-31 10:20:58 --> Router Class Initialized
DEBUG - 2025-05-31 10:20:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:20:58 --> Output Class Initialized
INFO - 2025-05-31 10:20:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:20:58 --> Security Class Initialized
INFO - 2025-05-31 10:20:58 --> Controller Class Initialized
DEBUG - 2025-05-31 10:20:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:20:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:20:58 --> Input Class Initialized
INFO - 2025-05-31 10:20:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:20:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:20:58 --> Language Class Initialized
INFO - 2025-05-31 10:20:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:20:58 --> Loader Class Initialized
INFO - 2025-05-31 10:20:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:20:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:20:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:20:58 --> Model "Crud" initialized
INFO - 2025-05-31 10:20:58 --> Email Class Initialized
ERROR - 2025-05-31 10:20:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:20:58 --> Language file loaded: language/english/db_lang.php
DEBUG - 2025-05-31 10:20:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:20:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:20:58 --> Controller Class Initialized
INFO - 2025-05-31 10:20:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:20:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:20:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:20:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:20:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:20:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:20:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:21:58 --> Config Class Initialized
INFO - 2025-05-31 10:21:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:21:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:21:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:21:58 --> URI Class Initialized
INFO - 2025-05-31 10:21:58 --> Router Class Initialized
INFO - 2025-05-31 10:21:58 --> Output Class Initialized
INFO - 2025-05-31 10:21:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:21:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:21:58 --> Input Class Initialized
INFO - 2025-05-31 10:21:58 --> Language Class Initialized
INFO - 2025-05-31 10:21:58 --> Loader Class Initialized
INFO - 2025-05-31 10:21:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:21:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:21:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:21:58 --> Config Class Initialized
INFO - 2025-05-31 10:21:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:21:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:21:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:21:58 --> URI Class Initialized
INFO - 2025-05-31 10:21:58 --> Router Class Initialized
INFO - 2025-05-31 10:21:58 --> Output Class Initialized
INFO - 2025-05-31 10:21:58 --> Security Class Initialized
INFO - 2025-05-31 10:21:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:21:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:21:58 --> Input Class Initialized
DEBUG - 2025-05-31 10:21:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:21:58 --> Language Class Initialized
INFO - 2025-05-31 10:21:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:21:58 --> Controller Class Initialized
INFO - 2025-05-31 10:21:58 --> Loader Class Initialized
INFO - 2025-05-31 10:21:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:21:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:21:58 --> Form Validation Class Initialized
INFO - 2025-05-31 10:21:58 --> Helper loaded: file_helper
DEBUG - 2025-05-31 10:21:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:21:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:21:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:21:58 --> Model "Crud" initialized
INFO - 2025-05-31 10:21:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:21:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2025-05-31 10:21:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:21:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:21:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:21:58 --> Controller Class Initialized
INFO - 2025-05-31 10:21:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:21:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:21:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:21:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:21:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:21:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:21:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:22:58 --> Config Class Initialized
INFO - 2025-05-31 10:22:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:22:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:22:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:22:58 --> URI Class Initialized
INFO - 2025-05-31 10:22:58 --> Router Class Initialized
INFO - 2025-05-31 10:22:58 --> Output Class Initialized
INFO - 2025-05-31 10:22:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:22:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:22:58 --> Input Class Initialized
INFO - 2025-05-31 10:22:58 --> Language Class Initialized
INFO - 2025-05-31 10:22:58 --> Loader Class Initialized
INFO - 2025-05-31 10:22:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:22:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:22:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:22:58 --> Config Class Initialized
INFO - 2025-05-31 10:22:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:22:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:22:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:22:58 --> URI Class Initialized
INFO - 2025-05-31 10:22:58 --> Router Class Initialized
INFO - 2025-05-31 10:22:58 --> Output Class Initialized
INFO - 2025-05-31 10:22:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:22:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:22:58 --> Input Class Initialized
INFO - 2025-05-31 10:22:58 --> Language Class Initialized
INFO - 2025-05-31 10:22:58 --> Loader Class Initialized
INFO - 2025-05-31 10:22:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:22:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:22:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:22:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:22:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:22:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:22:58 --> Controller Class Initialized
INFO - 2025-05-31 10:22:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:22:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:22:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:22:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:22:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:22:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:22:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:22:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:22:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:22:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:22:58 --> Controller Class Initialized
INFO - 2025-05-31 10:22:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:22:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:22:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:22:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:22:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:22:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:22:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:23:58 --> Config Class Initialized
INFO - 2025-05-31 10:23:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:23:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:23:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:23:58 --> URI Class Initialized
INFO - 2025-05-31 10:23:58 --> Router Class Initialized
INFO - 2025-05-31 10:23:58 --> Output Class Initialized
INFO - 2025-05-31 10:23:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:23:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:23:58 --> Input Class Initialized
INFO - 2025-05-31 10:23:58 --> Language Class Initialized
INFO - 2025-05-31 10:23:58 --> Loader Class Initialized
INFO - 2025-05-31 10:23:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:23:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:23:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:23:58 --> Config Class Initialized
INFO - 2025-05-31 10:23:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:23:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:23:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:23:58 --> URI Class Initialized
INFO - 2025-05-31 10:23:58 --> Router Class Initialized
INFO - 2025-05-31 10:23:58 --> Output Class Initialized
INFO - 2025-05-31 10:23:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:23:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:23:58 --> Input Class Initialized
INFO - 2025-05-31 10:23:58 --> Language Class Initialized
INFO - 2025-05-31 10:23:58 --> Email Class Initialized
INFO - 2025-05-31 10:23:58 --> Loader Class Initialized
INFO - 2025-05-31 10:23:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:23:58 --> Helper loaded: file_helper
DEBUG - 2025-05-31 10:23:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:23:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:23:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:23:58 --> Controller Class Initialized
INFO - 2025-05-31 10:23:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:23:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:23:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:23:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:23:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:23:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:23:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:23:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:23:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:23:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:23:58 --> Controller Class Initialized
INFO - 2025-05-31 10:23:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:23:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:23:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:23:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:23:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:23:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:23:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:24:58 --> Config Class Initialized
INFO - 2025-05-31 10:24:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:24:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:24:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:24:58 --> URI Class Initialized
INFO - 2025-05-31 10:24:58 --> Router Class Initialized
INFO - 2025-05-31 10:24:58 --> Output Class Initialized
INFO - 2025-05-31 10:24:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:24:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:24:58 --> Input Class Initialized
INFO - 2025-05-31 10:24:58 --> Language Class Initialized
INFO - 2025-05-31 10:24:58 --> Loader Class Initialized
INFO - 2025-05-31 10:24:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:24:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:24:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:24:58 --> Config Class Initialized
INFO - 2025-05-31 10:24:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:24:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:24:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:24:58 --> URI Class Initialized
INFO - 2025-05-31 10:24:58 --> Router Class Initialized
INFO - 2025-05-31 10:24:58 --> Output Class Initialized
INFO - 2025-05-31 10:24:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:24:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:24:58 --> Input Class Initialized
INFO - 2025-05-31 10:24:58 --> Language Class Initialized
INFO - 2025-05-31 10:24:58 --> Loader Class Initialized
INFO - 2025-05-31 10:24:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:24:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:24:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:24:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:24:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:24:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:24:58 --> Controller Class Initialized
INFO - 2025-05-31 10:24:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:24:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:24:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:24:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:24:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:24:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:24:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:24:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:24:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:24:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:24:58 --> Controller Class Initialized
INFO - 2025-05-31 10:24:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:24:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:24:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:24:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:24:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:24:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:24:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:25:58 --> Config Class Initialized
INFO - 2025-05-31 10:25:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:25:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:25:58 --> Config Class Initialized
INFO - 2025-05-31 10:25:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:25:58 --> Hooks Class Initialized
INFO - 2025-05-31 10:25:58 --> URI Class Initialized
DEBUG - 2025-05-31 10:25:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:25:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:25:58 --> Router Class Initialized
INFO - 2025-05-31 10:25:58 --> URI Class Initialized
INFO - 2025-05-31 10:25:58 --> Output Class Initialized
INFO - 2025-05-31 10:25:58 --> Router Class Initialized
INFO - 2025-05-31 10:25:58 --> Security Class Initialized
INFO - 2025-05-31 10:25:58 --> Output Class Initialized
DEBUG - 2025-05-31 10:25:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:25:58 --> Security Class Initialized
INFO - 2025-05-31 10:25:58 --> Input Class Initialized
DEBUG - 2025-05-31 10:25:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:25:58 --> Language Class Initialized
INFO - 2025-05-31 10:25:58 --> Input Class Initialized
INFO - 2025-05-31 10:25:58 --> Language Class Initialized
INFO - 2025-05-31 10:25:58 --> Loader Class Initialized
INFO - 2025-05-31 10:25:58 --> Loader Class Initialized
INFO - 2025-05-31 10:25:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:25:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:25:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:25:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:25:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:25:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:25:58 --> Email Class Initialized
INFO - 2025-05-31 10:25:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:25:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 10:25:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:25:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:25:58 --> Controller Class Initialized
INFO - 2025-05-31 10:25:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:25:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:25:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:25:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:25:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:25:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:25:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:25:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:25:58 --> Controller Class Initialized
INFO - 2025-05-31 10:25:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:25:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:25:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:25:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:25:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:25:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:25:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:26:58 --> Config Class Initialized
INFO - 2025-05-31 10:26:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:26:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:26:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:26:58 --> URI Class Initialized
INFO - 2025-05-31 10:26:58 --> Router Class Initialized
INFO - 2025-05-31 10:26:58 --> Output Class Initialized
INFO - 2025-05-31 10:26:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:26:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:26:58 --> Input Class Initialized
INFO - 2025-05-31 10:26:58 --> Language Class Initialized
INFO - 2025-05-31 10:26:58 --> Loader Class Initialized
INFO - 2025-05-31 10:26:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:26:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:26:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:26:58 --> Config Class Initialized
INFO - 2025-05-31 10:26:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:26:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:26:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:26:58 --> URI Class Initialized
INFO - 2025-05-31 10:26:58 --> Router Class Initialized
INFO - 2025-05-31 10:26:58 --> Output Class Initialized
INFO - 2025-05-31 10:26:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:26:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:26:58 --> Input Class Initialized
INFO - 2025-05-31 10:26:58 --> Email Class Initialized
INFO - 2025-05-31 10:26:58 --> Language Class Initialized
INFO - 2025-05-31 10:26:58 --> Loader Class Initialized
DEBUG - 2025-05-31 10:26:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:26:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:26:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:26:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:26:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:26:58 --> Controller Class Initialized
INFO - 2025-05-31 10:26:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:26:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:26:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:26:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:26:58 --> Email Class Initialized
INFO - 2025-05-31 10:26:58 --> Model "Crud" initialized
DEBUG - 2025-05-31 10:26:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2025-05-31 10:26:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:26:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:26:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:26:58 --> Controller Class Initialized
INFO - 2025-05-31 10:26:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:26:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:26:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:26:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:26:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:26:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:26:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:27:58 --> Config Class Initialized
INFO - 2025-05-31 10:27:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:27:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:27:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:27:58 --> URI Class Initialized
INFO - 2025-05-31 10:27:58 --> Router Class Initialized
INFO - 2025-05-31 10:27:58 --> Output Class Initialized
INFO - 2025-05-31 10:27:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:27:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:27:58 --> Input Class Initialized
INFO - 2025-05-31 10:27:58 --> Language Class Initialized
INFO - 2025-05-31 10:27:58 --> Loader Class Initialized
INFO - 2025-05-31 10:27:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:27:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:27:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:27:58 --> Config Class Initialized
INFO - 2025-05-31 10:27:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:27:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:27:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:27:58 --> URI Class Initialized
INFO - 2025-05-31 10:27:58 --> Router Class Initialized
INFO - 2025-05-31 10:27:58 --> Output Class Initialized
INFO - 2025-05-31 10:27:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:27:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:27:58 --> Input Class Initialized
INFO - 2025-05-31 10:27:58 --> Language Class Initialized
INFO - 2025-05-31 10:27:58 --> Loader Class Initialized
INFO - 2025-05-31 10:27:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:27:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:27:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:27:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:27:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:27:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:27:58 --> Controller Class Initialized
INFO - 2025-05-31 10:27:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:27:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:27:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:27:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:27:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:27:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:27:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:27:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:27:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:27:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:27:58 --> Controller Class Initialized
INFO - 2025-05-31 10:27:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:27:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:27:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:27:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:27:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:27:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:27:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:28:58 --> Config Class Initialized
INFO - 2025-05-31 10:28:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:28:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:28:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:28:58 --> URI Class Initialized
INFO - 2025-05-31 10:28:58 --> Router Class Initialized
INFO - 2025-05-31 10:28:58 --> Output Class Initialized
INFO - 2025-05-31 10:28:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:28:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:28:58 --> Input Class Initialized
INFO - 2025-05-31 10:28:58 --> Config Class Initialized
INFO - 2025-05-31 10:28:58 --> Language Class Initialized
INFO - 2025-05-31 10:28:58 --> Hooks Class Initialized
INFO - 2025-05-31 10:28:58 --> Loader Class Initialized
INFO - 2025-05-31 10:28:58 --> Helper loaded: url_helper
DEBUG - 2025-05-31 10:28:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:28:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:28:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:28:58 --> URI Class Initialized
INFO - 2025-05-31 10:28:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:28:58 --> Router Class Initialized
INFO - 2025-05-31 10:28:58 --> Output Class Initialized
INFO - 2025-05-31 10:28:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:28:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:28:58 --> Input Class Initialized
INFO - 2025-05-31 10:28:58 --> Language Class Initialized
INFO - 2025-05-31 10:28:58 --> Loader Class Initialized
INFO - 2025-05-31 10:28:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:28:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:28:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:28:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:28:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:28:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:28:58 --> Controller Class Initialized
INFO - 2025-05-31 10:28:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:28:58 --> Form Validation Class Initialized
INFO - 2025-05-31 10:28:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:28:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-05-31 10:28:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:28:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:28:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:28:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:28:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:28:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:28:58 --> Controller Class Initialized
INFO - 2025-05-31 10:28:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:28:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:28:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:28:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:28:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:28:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:28:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:29:58 --> Config Class Initialized
INFO - 2025-05-31 10:29:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:29:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:29:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:29:58 --> URI Class Initialized
INFO - 2025-05-31 10:29:58 --> Router Class Initialized
INFO - 2025-05-31 10:29:58 --> Output Class Initialized
INFO - 2025-05-31 10:29:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:29:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:29:58 --> Input Class Initialized
INFO - 2025-05-31 10:29:58 --> Language Class Initialized
INFO - 2025-05-31 10:29:58 --> Loader Class Initialized
INFO - 2025-05-31 10:29:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:29:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:29:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:29:58 --> Config Class Initialized
INFO - 2025-05-31 10:29:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:29:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:29:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:29:58 --> URI Class Initialized
INFO - 2025-05-31 10:29:58 --> Router Class Initialized
INFO - 2025-05-31 10:29:58 --> Output Class Initialized
INFO - 2025-05-31 10:29:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:29:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:29:58 --> Input Class Initialized
INFO - 2025-05-31 10:29:58 --> Language Class Initialized
INFO - 2025-05-31 10:29:58 --> Email Class Initialized
INFO - 2025-05-31 10:29:58 --> Loader Class Initialized
INFO - 2025-05-31 10:29:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:29:58 --> Helper loaded: file_helper
DEBUG - 2025-05-31 10:29:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:29:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:29:58 --> Controller Class Initialized
INFO - 2025-05-31 10:29:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:29:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:29:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:29:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:29:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:29:58 --> Model "Crud" initialized
INFO - 2025-05-31 10:29:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:29:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2025-05-31 10:29:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:29:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:29:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:29:58 --> Controller Class Initialized
INFO - 2025-05-31 10:29:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:29:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:29:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:29:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:29:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:29:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:29:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:30:58 --> Config Class Initialized
INFO - 2025-05-31 10:30:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:30:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:30:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:30:58 --> URI Class Initialized
INFO - 2025-05-31 10:30:58 --> Config Class Initialized
INFO - 2025-05-31 10:30:58 --> Router Class Initialized
INFO - 2025-05-31 10:30:58 --> Hooks Class Initialized
INFO - 2025-05-31 10:30:58 --> Output Class Initialized
DEBUG - 2025-05-31 10:30:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:30:58 --> Security Class Initialized
INFO - 2025-05-31 10:30:58 --> Utf8 Class Initialized
DEBUG - 2025-05-31 10:30:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:30:58 --> Input Class Initialized
INFO - 2025-05-31 10:30:58 --> URI Class Initialized
INFO - 2025-05-31 10:30:58 --> Language Class Initialized
INFO - 2025-05-31 10:30:58 --> Router Class Initialized
INFO - 2025-05-31 10:30:58 --> Loader Class Initialized
INFO - 2025-05-31 10:30:58 --> Output Class Initialized
INFO - 2025-05-31 10:30:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:30:58 --> Security Class Initialized
INFO - 2025-05-31 10:30:58 --> Helper loaded: file_helper
DEBUG - 2025-05-31 10:30:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:30:58 --> Input Class Initialized
INFO - 2025-05-31 10:30:58 --> Language Class Initialized
INFO - 2025-05-31 10:30:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:30:58 --> Loader Class Initialized
INFO - 2025-05-31 10:30:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:30:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:30:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:30:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:30:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:30:58 --> Email Class Initialized
INFO - 2025-05-31 10:30:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:30:58 --> Controller Class Initialized
DEBUG - 2025-05-31 10:30:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:30:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:30:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:30:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:30:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:30:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:30:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:30:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:30:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:30:58 --> Controller Class Initialized
INFO - 2025-05-31 10:30:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:30:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:30:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:30:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:30:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:30:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:30:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:31:58 --> Config Class Initialized
INFO - 2025-05-31 10:31:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:31:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:31:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:31:58 --> URI Class Initialized
INFO - 2025-05-31 10:31:58 --> Router Class Initialized
INFO - 2025-05-31 10:31:58 --> Output Class Initialized
INFO - 2025-05-31 10:31:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:31:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:31:58 --> Input Class Initialized
INFO - 2025-05-31 10:31:58 --> Config Class Initialized
INFO - 2025-05-31 10:31:58 --> Language Class Initialized
INFO - 2025-05-31 10:31:58 --> Hooks Class Initialized
INFO - 2025-05-31 10:31:58 --> Loader Class Initialized
DEBUG - 2025-05-31 10:31:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:31:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:31:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:31:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:31:58 --> URI Class Initialized
INFO - 2025-05-31 10:31:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:31:58 --> Router Class Initialized
INFO - 2025-05-31 10:31:58 --> Output Class Initialized
INFO - 2025-05-31 10:31:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:31:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:31:58 --> Input Class Initialized
INFO - 2025-05-31 10:31:58 --> Language Class Initialized
INFO - 2025-05-31 10:31:58 --> Loader Class Initialized
INFO - 2025-05-31 10:31:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:31:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:31:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:31:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:31:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:31:58 --> Email Class Initialized
INFO - 2025-05-31 10:31:58 --> Session: Class initialized using 'files' driver.
DEBUG - 2025-05-31 10:31:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:31:58 --> Controller Class Initialized
INFO - 2025-05-31 10:31:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:31:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:31:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:31:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:31:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:31:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:31:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:31:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:31:58 --> Controller Class Initialized
INFO - 2025-05-31 10:31:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:31:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:31:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:31:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:31:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:31:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:31:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:32:58 --> Config Class Initialized
INFO - 2025-05-31 10:32:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:32:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:32:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:32:58 --> URI Class Initialized
INFO - 2025-05-31 10:32:58 --> Router Class Initialized
INFO - 2025-05-31 10:32:58 --> Output Class Initialized
INFO - 2025-05-31 10:32:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:32:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:32:58 --> Input Class Initialized
INFO - 2025-05-31 10:32:58 --> Language Class Initialized
INFO - 2025-05-31 10:32:58 --> Loader Class Initialized
INFO - 2025-05-31 10:32:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:32:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:32:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:32:58 --> Config Class Initialized
INFO - 2025-05-31 10:32:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:32:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:32:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:32:58 --> Email Class Initialized
INFO - 2025-05-31 10:32:58 --> URI Class Initialized
DEBUG - 2025-05-31 10:32:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:32:58 --> Router Class Initialized
INFO - 2025-05-31 10:32:58 --> Output Class Initialized
INFO - 2025-05-31 10:32:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:32:58 --> Security Class Initialized
INFO - 2025-05-31 10:32:58 --> Controller Class Initialized
DEBUG - 2025-05-31 10:32:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:32:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:32:58 --> Input Class Initialized
INFO - 2025-05-31 10:32:58 --> Language Class Initialized
INFO - 2025-05-31 10:32:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:32:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:32:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:32:58 --> Loader Class Initialized
INFO - 2025-05-31 10:32:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:32:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:32:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:32:58 --> Model "Crud" initialized
INFO - 2025-05-31 10:32:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:32:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2025-05-31 10:32:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:32:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:32:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:32:58 --> Controller Class Initialized
INFO - 2025-05-31 10:32:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:32:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:32:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:32:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:32:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:32:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:32:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:33:58 --> Config Class Initialized
INFO - 2025-05-31 10:33:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:33:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:33:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:33:58 --> URI Class Initialized
INFO - 2025-05-31 10:33:58 --> Router Class Initialized
INFO - 2025-05-31 10:33:58 --> Output Class Initialized
INFO - 2025-05-31 10:33:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:33:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:33:58 --> Input Class Initialized
INFO - 2025-05-31 10:33:58 --> Language Class Initialized
INFO - 2025-05-31 10:33:58 --> Config Class Initialized
INFO - 2025-05-31 10:33:58 --> Loader Class Initialized
INFO - 2025-05-31 10:33:58 --> Hooks Class Initialized
INFO - 2025-05-31 10:33:58 --> Helper loaded: url_helper
DEBUG - 2025-05-31 10:33:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:33:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:33:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:33:58 --> URI Class Initialized
INFO - 2025-05-31 10:33:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:33:58 --> Router Class Initialized
INFO - 2025-05-31 10:33:58 --> Output Class Initialized
INFO - 2025-05-31 10:33:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:33:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:33:58 --> Input Class Initialized
INFO - 2025-05-31 10:33:58 --> Language Class Initialized
INFO - 2025-05-31 10:33:58 --> Loader Class Initialized
INFO - 2025-05-31 10:33:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:33:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:33:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:33:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:33:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:33:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:33:58 --> Controller Class Initialized
INFO - 2025-05-31 10:33:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:33:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:33:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:33:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:33:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:33:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:33:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:33:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:33:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:33:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:33:58 --> Controller Class Initialized
INFO - 2025-05-31 10:33:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:33:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:33:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:33:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:33:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:33:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:33:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:34:58 --> Config Class Initialized
INFO - 2025-05-31 10:34:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:34:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:34:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:34:58 --> URI Class Initialized
INFO - 2025-05-31 10:34:58 --> Router Class Initialized
INFO - 2025-05-31 10:34:58 --> Output Class Initialized
INFO - 2025-05-31 10:34:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:34:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:34:58 --> Input Class Initialized
INFO - 2025-05-31 10:34:58 --> Language Class Initialized
INFO - 2025-05-31 10:34:58 --> Loader Class Initialized
INFO - 2025-05-31 10:34:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:34:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:34:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:34:58 --> Config Class Initialized
INFO - 2025-05-31 10:34:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:34:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:34:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:34:58 --> URI Class Initialized
INFO - 2025-05-31 10:34:58 --> Router Class Initialized
INFO - 2025-05-31 10:34:58 --> Output Class Initialized
INFO - 2025-05-31 10:34:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:34:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:34:58 --> Input Class Initialized
INFO - 2025-05-31 10:34:58 --> Language Class Initialized
INFO - 2025-05-31 10:34:58 --> Loader Class Initialized
INFO - 2025-05-31 10:34:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:34:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:34:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:34:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:34:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:34:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:34:58 --> Controller Class Initialized
INFO - 2025-05-31 10:34:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:34:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:34:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:34:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:34:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:34:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:34:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:34:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:34:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:34:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:34:58 --> Controller Class Initialized
INFO - 2025-05-31 10:34:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:34:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:34:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:34:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:34:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:34:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:34:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:35:58 --> Config Class Initialized
INFO - 2025-05-31 10:35:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:35:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:35:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:35:58 --> URI Class Initialized
INFO - 2025-05-31 10:35:58 --> Router Class Initialized
INFO - 2025-05-31 10:35:58 --> Output Class Initialized
INFO - 2025-05-31 10:35:58 --> Security Class Initialized
INFO - 2025-05-31 10:35:58 --> Config Class Initialized
DEBUG - 2025-05-31 10:35:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:35:58 --> Input Class Initialized
INFO - 2025-05-31 10:35:58 --> Hooks Class Initialized
INFO - 2025-05-31 10:35:58 --> Language Class Initialized
DEBUG - 2025-05-31 10:35:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:35:58 --> Loader Class Initialized
INFO - 2025-05-31 10:35:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:35:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:35:58 --> URI Class Initialized
INFO - 2025-05-31 10:35:58 --> Router Class Initialized
INFO - 2025-05-31 10:35:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:35:58 --> Output Class Initialized
INFO - 2025-05-31 10:35:58 --> Security Class Initialized
INFO - 2025-05-31 10:35:58 --> Database Driver Class Initialized
DEBUG - 2025-05-31 10:35:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:35:58 --> Input Class Initialized
INFO - 2025-05-31 10:35:58 --> Language Class Initialized
INFO - 2025-05-31 10:35:58 --> Loader Class Initialized
INFO - 2025-05-31 10:35:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:35:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:35:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:35:58 --> Email Class Initialized
INFO - 2025-05-31 10:35:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:35:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 10:35:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:35:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:35:58 --> Controller Class Initialized
INFO - 2025-05-31 10:35:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:35:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:35:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:35:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:35:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:35:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:35:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:35:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:35:58 --> Controller Class Initialized
INFO - 2025-05-31 10:35:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:35:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:35:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:35:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:35:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:35:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:35:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:36:58 --> Config Class Initialized
INFO - 2025-05-31 10:36:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:36:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:36:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:36:58 --> URI Class Initialized
INFO - 2025-05-31 10:36:58 --> Router Class Initialized
INFO - 2025-05-31 10:36:58 --> Output Class Initialized
INFO - 2025-05-31 10:36:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:36:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:36:58 --> Input Class Initialized
INFO - 2025-05-31 10:36:58 --> Language Class Initialized
INFO - 2025-05-31 10:36:58 --> Loader Class Initialized
INFO - 2025-05-31 10:36:58 --> Config Class Initialized
INFO - 2025-05-31 10:36:58 --> Hooks Class Initialized
INFO - 2025-05-31 10:36:58 --> Helper loaded: url_helper
DEBUG - 2025-05-31 10:36:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:36:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:36:58 --> URI Class Initialized
INFO - 2025-05-31 10:36:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:36:58 --> Router Class Initialized
INFO - 2025-05-31 10:36:58 --> Output Class Initialized
INFO - 2025-05-31 10:36:58 --> Security Class Initialized
INFO - 2025-05-31 10:36:58 --> Database Driver Class Initialized
DEBUG - 2025-05-31 10:36:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:36:58 --> Input Class Initialized
INFO - 2025-05-31 10:36:58 --> Language Class Initialized
INFO - 2025-05-31 10:36:58 --> Loader Class Initialized
INFO - 2025-05-31 10:36:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:36:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:36:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:36:58 --> Email Class Initialized
INFO - 2025-05-31 10:36:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:36:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 10:36:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:36:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:36:58 --> Controller Class Initialized
INFO - 2025-05-31 10:36:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:36:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:36:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:36:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:36:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:36:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:36:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:36:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:36:58 --> Controller Class Initialized
INFO - 2025-05-31 10:36:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:36:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:36:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:36:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:36:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:36:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:36:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:37:58 --> Config Class Initialized
INFO - 2025-05-31 10:37:58 --> Config Class Initialized
INFO - 2025-05-31 10:37:58 --> Hooks Class Initialized
INFO - 2025-05-31 10:37:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:37:58 --> UTF-8 Support Enabled
DEBUG - 2025-05-31 10:37:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:37:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:37:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:37:58 --> URI Class Initialized
INFO - 2025-05-31 10:37:58 --> URI Class Initialized
INFO - 2025-05-31 10:37:58 --> Router Class Initialized
INFO - 2025-05-31 10:37:58 --> Router Class Initialized
INFO - 2025-05-31 10:37:58 --> Output Class Initialized
INFO - 2025-05-31 10:37:58 --> Output Class Initialized
INFO - 2025-05-31 10:37:58 --> Security Class Initialized
INFO - 2025-05-31 10:37:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:37:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-05-31 10:37:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:37:58 --> Input Class Initialized
INFO - 2025-05-31 10:37:58 --> Input Class Initialized
INFO - 2025-05-31 10:37:58 --> Language Class Initialized
INFO - 2025-05-31 10:37:58 --> Language Class Initialized
INFO - 2025-05-31 10:37:58 --> Loader Class Initialized
INFO - 2025-05-31 10:37:58 --> Loader Class Initialized
INFO - 2025-05-31 10:37:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:37:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:37:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:37:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:37:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:37:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:37:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:37:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:37:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:37:58 --> Controller Class Initialized
INFO - 2025-05-31 10:37:58 --> Email Class Initialized
INFO - 2025-05-31 10:37:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:37:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:37:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 10:37:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:37:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:37:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:37:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:37:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:37:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:37:58 --> Controller Class Initialized
INFO - 2025-05-31 10:37:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:37:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:37:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:37:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:37:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:37:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:37:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:38:58 --> Config Class Initialized
INFO - 2025-05-31 10:38:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:38:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:38:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:38:58 --> URI Class Initialized
INFO - 2025-05-31 10:38:58 --> Router Class Initialized
INFO - 2025-05-31 10:38:58 --> Output Class Initialized
INFO - 2025-05-31 10:38:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:38:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:38:58 --> Input Class Initialized
INFO - 2025-05-31 10:38:58 --> Language Class Initialized
INFO - 2025-05-31 10:38:58 --> Loader Class Initialized
INFO - 2025-05-31 10:38:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:38:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:38:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:38:58 --> Config Class Initialized
INFO - 2025-05-31 10:38:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:38:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:38:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:38:58 --> URI Class Initialized
INFO - 2025-05-31 10:38:58 --> Router Class Initialized
INFO - 2025-05-31 10:38:58 --> Output Class Initialized
INFO - 2025-05-31 10:38:58 --> Email Class Initialized
INFO - 2025-05-31 10:38:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:38:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-05-31 10:38:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:38:58 --> Input Class Initialized
INFO - 2025-05-31 10:38:58 --> Language Class Initialized
INFO - 2025-05-31 10:38:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:38:58 --> Controller Class Initialized
INFO - 2025-05-31 10:38:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:38:58 --> Loader Class Initialized
INFO - 2025-05-31 10:38:58 --> Form Validation Class Initialized
INFO - 2025-05-31 10:38:58 --> Helper loaded: url_helper
DEBUG - 2025-05-31 10:38:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:38:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:38:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:38:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:38:58 --> Model "Crud" initialized
INFO - 2025-05-31 10:38:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:38:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2025-05-31 10:38:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:38:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:38:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:38:58 --> Controller Class Initialized
INFO - 2025-05-31 10:38:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:38:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:38:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:38:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:38:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:38:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:38:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:39:58 --> Config Class Initialized
INFO - 2025-05-31 10:39:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:39:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:39:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:39:58 --> URI Class Initialized
INFO - 2025-05-31 10:39:58 --> Router Class Initialized
INFO - 2025-05-31 10:39:58 --> Output Class Initialized
INFO - 2025-05-31 10:39:58 --> Security Class Initialized
INFO - 2025-05-31 10:39:58 --> Config Class Initialized
DEBUG - 2025-05-31 10:39:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:39:58 --> Hooks Class Initialized
INFO - 2025-05-31 10:39:58 --> Input Class Initialized
INFO - 2025-05-31 10:39:58 --> Language Class Initialized
DEBUG - 2025-05-31 10:39:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:39:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:39:58 --> Loader Class Initialized
INFO - 2025-05-31 10:39:58 --> URI Class Initialized
INFO - 2025-05-31 10:39:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:39:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:39:58 --> Router Class Initialized
INFO - 2025-05-31 10:39:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:39:58 --> Output Class Initialized
INFO - 2025-05-31 10:39:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:39:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:39:58 --> Input Class Initialized
INFO - 2025-05-31 10:39:58 --> Language Class Initialized
INFO - 2025-05-31 10:39:58 --> Loader Class Initialized
INFO - 2025-05-31 10:39:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:39:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:39:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:39:58 --> Email Class Initialized
INFO - 2025-05-31 10:39:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:39:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 10:39:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:39:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:39:58 --> Controller Class Initialized
INFO - 2025-05-31 10:39:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:39:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:39:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:39:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:39:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:39:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:39:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:39:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:39:58 --> Controller Class Initialized
INFO - 2025-05-31 10:39:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:39:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:39:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:39:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:39:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:39:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:39:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:40:58 --> Config Class Initialized
INFO - 2025-05-31 10:40:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:40:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:40:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:40:58 --> URI Class Initialized
INFO - 2025-05-31 10:40:58 --> Router Class Initialized
INFO - 2025-05-31 10:40:58 --> Output Class Initialized
INFO - 2025-05-31 10:40:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:40:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:40:58 --> Input Class Initialized
INFO - 2025-05-31 10:40:58 --> Language Class Initialized
INFO - 2025-05-31 10:40:58 --> Loader Class Initialized
INFO - 2025-05-31 10:40:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:40:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:40:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:40:58 --> Config Class Initialized
INFO - 2025-05-31 10:40:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:40:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:40:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:40:58 --> URI Class Initialized
INFO - 2025-05-31 10:40:58 --> Router Class Initialized
INFO - 2025-05-31 10:40:58 --> Output Class Initialized
INFO - 2025-05-31 10:40:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:40:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:40:58 --> Input Class Initialized
INFO - 2025-05-31 10:40:58 --> Language Class Initialized
INFO - 2025-05-31 10:40:58 --> Loader Class Initialized
INFO - 2025-05-31 10:40:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:40:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:40:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:40:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:40:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:40:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:40:58 --> Controller Class Initialized
INFO - 2025-05-31 10:40:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:40:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:40:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:40:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:40:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:40:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:40:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:40:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:40:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:40:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:40:58 --> Controller Class Initialized
INFO - 2025-05-31 10:40:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:40:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:40:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:40:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:40:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:40:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:40:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:41:58 --> Config Class Initialized
INFO - 2025-05-31 10:41:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:41:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:41:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:41:58 --> URI Class Initialized
INFO - 2025-05-31 10:41:58 --> Router Class Initialized
INFO - 2025-05-31 10:41:58 --> Output Class Initialized
INFO - 2025-05-31 10:41:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:41:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:41:58 --> Input Class Initialized
INFO - 2025-05-31 10:41:58 --> Language Class Initialized
INFO - 2025-05-31 10:41:58 --> Loader Class Initialized
INFO - 2025-05-31 10:41:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:41:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:41:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:41:58 --> Config Class Initialized
INFO - 2025-05-31 10:41:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:41:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:41:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:41:58 --> URI Class Initialized
INFO - 2025-05-31 10:41:58 --> Router Class Initialized
INFO - 2025-05-31 10:41:58 --> Output Class Initialized
INFO - 2025-05-31 10:41:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:41:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:41:58 --> Input Class Initialized
INFO - 2025-05-31 10:41:58 --> Email Class Initialized
INFO - 2025-05-31 10:41:58 --> Language Class Initialized
DEBUG - 2025-05-31 10:41:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:41:58 --> Loader Class Initialized
INFO - 2025-05-31 10:41:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:41:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:41:58 --> Controller Class Initialized
INFO - 2025-05-31 10:41:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:41:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:41:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:41:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:41:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:41:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:41:58 --> Email Class Initialized
INFO - 2025-05-31 10:41:58 --> Model "Crud" initialized
DEBUG - 2025-05-31 10:41:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2025-05-31 10:41:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:41:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:41:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:41:58 --> Controller Class Initialized
INFO - 2025-05-31 10:41:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:41:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:41:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:41:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:41:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:41:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:41:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:42:15 --> Config Class Initialized
INFO - 2025-05-31 10:42:15 --> Config Class Initialized
INFO - 2025-05-31 10:42:15 --> Hooks Class Initialized
INFO - 2025-05-31 10:42:15 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:42:15 --> UTF-8 Support Enabled
DEBUG - 2025-05-31 10:42:15 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:42:15 --> Utf8 Class Initialized
INFO - 2025-05-31 10:42:15 --> Utf8 Class Initialized
INFO - 2025-05-31 10:42:15 --> URI Class Initialized
INFO - 2025-05-31 10:42:15 --> URI Class Initialized
INFO - 2025-05-31 10:42:15 --> Router Class Initialized
INFO - 2025-05-31 10:42:15 --> Router Class Initialized
INFO - 2025-05-31 10:42:15 --> Output Class Initialized
INFO - 2025-05-31 10:42:15 --> Output Class Initialized
INFO - 2025-05-31 10:42:15 --> Security Class Initialized
INFO - 2025-05-31 10:42:15 --> Security Class Initialized
DEBUG - 2025-05-31 10:42:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:42:15 --> Input Class Initialized
DEBUG - 2025-05-31 10:42:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:42:15 --> Language Class Initialized
INFO - 2025-05-31 10:42:15 --> Input Class Initialized
INFO - 2025-05-31 10:42:15 --> Language Class Initialized
INFO - 2025-05-31 10:42:15 --> Loader Class Initialized
INFO - 2025-05-31 10:42:15 --> Loader Class Initialized
INFO - 2025-05-31 10:42:15 --> Helper loaded: url_helper
INFO - 2025-05-31 10:42:15 --> Helper loaded: url_helper
INFO - 2025-05-31 10:42:15 --> Helper loaded: file_helper
INFO - 2025-05-31 10:42:15 --> Helper loaded: file_helper
INFO - 2025-05-31 10:42:15 --> Database Driver Class Initialized
INFO - 2025-05-31 10:42:15 --> Database Driver Class Initialized
INFO - 2025-05-31 10:42:15 --> Email Class Initialized
INFO - 2025-05-31 10:42:15 --> Email Class Initialized
DEBUG - 2025-05-31 10:42:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 10:42:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:42:15 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:42:15 --> Controller Class Initialized
INFO - 2025-05-31 10:42:15 --> Helper loaded: form_helper
INFO - 2025-05-31 10:42:15 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:42:15 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:42:15 --> Database Driver Class Initialized
INFO - 2025-05-31 10:42:15 --> Model "Crud" initialized
ERROR - 2025-05-31 10:42:15 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:42:15 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:42:15 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:42:15 --> Controller Class Initialized
INFO - 2025-05-31 10:42:15 --> Helper loaded: form_helper
INFO - 2025-05-31 10:42:15 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:42:15 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:42:15 --> Database Driver Class Initialized
INFO - 2025-05-31 10:42:15 --> Model "Crud" initialized
ERROR - 2025-05-31 10:42:15 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:42:15 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:52:48 --> Config Class Initialized
INFO - 2025-05-31 10:52:48 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:52:48 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:52:48 --> Utf8 Class Initialized
INFO - 2025-05-31 10:52:48 --> URI Class Initialized
INFO - 2025-05-31 10:52:48 --> Router Class Initialized
INFO - 2025-05-31 10:52:48 --> Output Class Initialized
INFO - 2025-05-31 10:52:48 --> Security Class Initialized
DEBUG - 2025-05-31 10:52:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:52:48 --> Input Class Initialized
INFO - 2025-05-31 10:52:48 --> Language Class Initialized
INFO - 2025-05-31 10:52:48 --> Loader Class Initialized
INFO - 2025-05-31 10:52:48 --> Helper loaded: url_helper
INFO - 2025-05-31 10:52:48 --> Helper loaded: file_helper
INFO - 2025-05-31 10:52:48 --> Database Driver Class Initialized
INFO - 2025-05-31 10:52:48 --> Config Class Initialized
INFO - 2025-05-31 10:52:48 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:52:48 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:52:48 --> Utf8 Class Initialized
INFO - 2025-05-31 10:52:48 --> URI Class Initialized
INFO - 2025-05-31 10:52:48 --> Router Class Initialized
INFO - 2025-05-31 10:52:48 --> Output Class Initialized
INFO - 2025-05-31 10:52:48 --> Security Class Initialized
DEBUG - 2025-05-31 10:52:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:52:48 --> Input Class Initialized
INFO - 2025-05-31 10:52:48 --> Language Class Initialized
INFO - 2025-05-31 10:52:48 --> Loader Class Initialized
INFO - 2025-05-31 10:52:48 --> Helper loaded: url_helper
INFO - 2025-05-31 10:52:48 --> Helper loaded: file_helper
INFO - 2025-05-31 10:52:48 --> Database Driver Class Initialized
INFO - 2025-05-31 10:52:48 --> Email Class Initialized
DEBUG - 2025-05-31 10:52:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:52:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:52:48 --> Email Class Initialized
INFO - 2025-05-31 10:52:48 --> Controller Class Initialized
INFO - 2025-05-31 10:52:48 --> Helper loaded: form_helper
DEBUG - 2025-05-31 10:52:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:52:48 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:52:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:52:48 --> Database Driver Class Initialized
INFO - 2025-05-31 10:52:48 --> Model "Crud" initialized
ERROR - 2025-05-31 10:52:48 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:52:48 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:52:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:52:48 --> Controller Class Initialized
INFO - 2025-05-31 10:52:48 --> Helper loaded: form_helper
INFO - 2025-05-31 10:52:48 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:52:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:52:48 --> Database Driver Class Initialized
INFO - 2025-05-31 10:52:48 --> Model "Crud" initialized
ERROR - 2025-05-31 10:52:48 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:52:48 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:52:58 --> Config Class Initialized
INFO - 2025-05-31 10:52:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:52:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:52:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:52:58 --> URI Class Initialized
INFO - 2025-05-31 10:52:58 --> Router Class Initialized
INFO - 2025-05-31 10:52:58 --> Output Class Initialized
INFO - 2025-05-31 10:52:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:52:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:52:58 --> Input Class Initialized
INFO - 2025-05-31 10:52:58 --> Language Class Initialized
INFO - 2025-05-31 10:52:58 --> Config Class Initialized
INFO - 2025-05-31 10:52:58 --> Hooks Class Initialized
INFO - 2025-05-31 10:52:58 --> Loader Class Initialized
DEBUG - 2025-05-31 10:52:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:52:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:52:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:52:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:52:58 --> URI Class Initialized
INFO - 2025-05-31 10:52:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:52:58 --> Router Class Initialized
INFO - 2025-05-31 10:52:58 --> Output Class Initialized
INFO - 2025-05-31 10:52:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:52:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:52:58 --> Input Class Initialized
INFO - 2025-05-31 10:52:58 --> Language Class Initialized
INFO - 2025-05-31 10:52:58 --> Loader Class Initialized
INFO - 2025-05-31 10:52:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:52:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:52:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:52:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:52:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:52:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:52:58 --> Controller Class Initialized
INFO - 2025-05-31 10:52:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:52:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:52:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:52:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:52:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:52:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:52:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:52:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:52:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:52:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:52:58 --> Controller Class Initialized
INFO - 2025-05-31 10:52:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:52:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:52:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:52:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:52:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:52:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:52:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:53:58 --> Config Class Initialized
INFO - 2025-05-31 10:53:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:53:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:53:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:53:58 --> URI Class Initialized
INFO - 2025-05-31 10:53:58 --> Config Class Initialized
INFO - 2025-05-31 10:53:58 --> Router Class Initialized
INFO - 2025-05-31 10:53:58 --> Hooks Class Initialized
INFO - 2025-05-31 10:53:58 --> Output Class Initialized
DEBUG - 2025-05-31 10:53:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:53:58 --> Security Class Initialized
INFO - 2025-05-31 10:53:58 --> Utf8 Class Initialized
DEBUG - 2025-05-31 10:53:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:53:58 --> Input Class Initialized
INFO - 2025-05-31 10:53:58 --> URI Class Initialized
INFO - 2025-05-31 10:53:58 --> Language Class Initialized
INFO - 2025-05-31 10:53:58 --> Router Class Initialized
INFO - 2025-05-31 10:53:58 --> Output Class Initialized
INFO - 2025-05-31 10:53:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:53:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:53:58 --> Input Class Initialized
INFO - 2025-05-31 10:53:58 --> Loader Class Initialized
INFO - 2025-05-31 10:53:58 --> Language Class Initialized
INFO - 2025-05-31 10:53:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:53:58 --> Loader Class Initialized
INFO - 2025-05-31 10:53:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:53:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:53:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:53:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:53:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:53:58 --> Email Class Initialized
INFO - 2025-05-31 10:53:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:53:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 10:53:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:53:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:53:58 --> Controller Class Initialized
INFO - 2025-05-31 10:53:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:53:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:53:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:53:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:53:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:53:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:53:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:53:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:53:58 --> Controller Class Initialized
INFO - 2025-05-31 10:53:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:53:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:53:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:53:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:53:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:53:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:53:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:54:58 --> Config Class Initialized
INFO - 2025-05-31 10:54:58 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:54:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:54:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:54:58 --> URI Class Initialized
INFO - 2025-05-31 10:54:58 --> Router Class Initialized
INFO - 2025-05-31 10:54:58 --> Output Class Initialized
INFO - 2025-05-31 10:54:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:54:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:54:58 --> Input Class Initialized
INFO - 2025-05-31 10:54:58 --> Language Class Initialized
INFO - 2025-05-31 10:54:58 --> Loader Class Initialized
INFO - 2025-05-31 10:54:58 --> Config Class Initialized
INFO - 2025-05-31 10:54:58 --> Hooks Class Initialized
INFO - 2025-05-31 10:54:58 --> Helper loaded: url_helper
DEBUG - 2025-05-31 10:54:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:54:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:54:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:54:58 --> URI Class Initialized
INFO - 2025-05-31 10:54:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:54:58 --> Router Class Initialized
INFO - 2025-05-31 10:54:58 --> Output Class Initialized
INFO - 2025-05-31 10:54:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:54:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:54:58 --> Input Class Initialized
INFO - 2025-05-31 10:54:58 --> Language Class Initialized
INFO - 2025-05-31 10:54:58 --> Loader Class Initialized
INFO - 2025-05-31 10:54:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:54:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:54:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:54:58 --> Email Class Initialized
INFO - 2025-05-31 10:54:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:54:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 10:54:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:54:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:54:58 --> Controller Class Initialized
INFO - 2025-05-31 10:54:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:54:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:54:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:54:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:54:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:54:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:54:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:54:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:54:58 --> Controller Class Initialized
INFO - 2025-05-31 10:54:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:54:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:54:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:54:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:54:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:54:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:54:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:55:58 --> Config Class Initialized
INFO - 2025-05-31 10:55:58 --> Hooks Class Initialized
INFO - 2025-05-31 10:55:58 --> Config Class Initialized
DEBUG - 2025-05-31 10:55:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:55:58 --> Hooks Class Initialized
INFO - 2025-05-31 10:55:58 --> Utf8 Class Initialized
DEBUG - 2025-05-31 10:55:58 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:55:58 --> Utf8 Class Initialized
INFO - 2025-05-31 10:55:58 --> URI Class Initialized
INFO - 2025-05-31 10:55:58 --> URI Class Initialized
INFO - 2025-05-31 10:55:58 --> Router Class Initialized
INFO - 2025-05-31 10:55:58 --> Router Class Initialized
INFO - 2025-05-31 10:55:58 --> Output Class Initialized
INFO - 2025-05-31 10:55:58 --> Output Class Initialized
INFO - 2025-05-31 10:55:58 --> Security Class Initialized
INFO - 2025-05-31 10:55:58 --> Security Class Initialized
DEBUG - 2025-05-31 10:55:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-05-31 10:55:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:55:58 --> Input Class Initialized
INFO - 2025-05-31 10:55:58 --> Input Class Initialized
INFO - 2025-05-31 10:55:58 --> Language Class Initialized
INFO - 2025-05-31 10:55:58 --> Language Class Initialized
INFO - 2025-05-31 10:55:58 --> Loader Class Initialized
INFO - 2025-05-31 10:55:58 --> Loader Class Initialized
INFO - 2025-05-31 10:55:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:55:58 --> Helper loaded: url_helper
INFO - 2025-05-31 10:55:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:55:58 --> Helper loaded: file_helper
INFO - 2025-05-31 10:55:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:55:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:55:58 --> Email Class Initialized
INFO - 2025-05-31 10:55:58 --> Email Class Initialized
DEBUG - 2025-05-31 10:55:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 10:55:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:55:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:55:58 --> Controller Class Initialized
INFO - 2025-05-31 10:55:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:55:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:55:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:55:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:55:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:55:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:55:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:55:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:55:58 --> Controller Class Initialized
INFO - 2025-05-31 10:55:58 --> Helper loaded: form_helper
INFO - 2025-05-31 10:55:58 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:55:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:55:58 --> Database Driver Class Initialized
INFO - 2025-05-31 10:55:58 --> Model "Crud" initialized
ERROR - 2025-05-31 10:55:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:55:58 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:56:57 --> Config Class Initialized
INFO - 2025-05-31 10:56:57 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:56:57 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:56:57 --> Config Class Initialized
INFO - 2025-05-31 10:56:57 --> Utf8 Class Initialized
INFO - 2025-05-31 10:56:57 --> Hooks Class Initialized
INFO - 2025-05-31 10:56:57 --> URI Class Initialized
DEBUG - 2025-05-31 10:56:57 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:56:57 --> Router Class Initialized
INFO - 2025-05-31 10:56:57 --> Utf8 Class Initialized
INFO - 2025-05-31 10:56:57 --> Output Class Initialized
INFO - 2025-05-31 10:56:57 --> URI Class Initialized
INFO - 2025-05-31 10:56:57 --> Security Class Initialized
INFO - 2025-05-31 10:56:57 --> Router Class Initialized
DEBUG - 2025-05-31 10:56:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:56:57 --> Output Class Initialized
INFO - 2025-05-31 10:56:57 --> Input Class Initialized
INFO - 2025-05-31 10:56:57 --> Security Class Initialized
INFO - 2025-05-31 10:56:57 --> Language Class Initialized
DEBUG - 2025-05-31 10:56:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:56:57 --> Input Class Initialized
INFO - 2025-05-31 10:56:57 --> Language Class Initialized
INFO - 2025-05-31 10:56:57 --> Loader Class Initialized
INFO - 2025-05-31 10:56:57 --> Loader Class Initialized
INFO - 2025-05-31 10:56:57 --> Helper loaded: url_helper
INFO - 2025-05-31 10:56:57 --> Helper loaded: url_helper
INFO - 2025-05-31 10:56:57 --> Helper loaded: file_helper
INFO - 2025-05-31 10:56:57 --> Helper loaded: file_helper
INFO - 2025-05-31 10:56:57 --> Database Driver Class Initialized
INFO - 2025-05-31 10:56:57 --> Database Driver Class Initialized
INFO - 2025-05-31 10:56:57 --> Email Class Initialized
INFO - 2025-05-31 10:56:57 --> Email Class Initialized
DEBUG - 2025-05-31 10:56:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 10:56:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:56:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:56:57 --> Controller Class Initialized
INFO - 2025-05-31 10:56:57 --> Helper loaded: form_helper
INFO - 2025-05-31 10:56:57 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:56:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:56:57 --> Database Driver Class Initialized
INFO - 2025-05-31 10:56:57 --> Model "Crud" initialized
ERROR - 2025-05-31 10:56:57 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:56:57 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:56:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:56:57 --> Controller Class Initialized
INFO - 2025-05-31 10:56:57 --> Helper loaded: form_helper
INFO - 2025-05-31 10:56:57 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:56:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:56:57 --> Database Driver Class Initialized
INFO - 2025-05-31 10:56:57 --> Model "Crud" initialized
ERROR - 2025-05-31 10:56:57 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:56:57 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:57:59 --> Config Class Initialized
INFO - 2025-05-31 10:57:59 --> Config Class Initialized
INFO - 2025-05-31 10:57:59 --> Hooks Class Initialized
INFO - 2025-05-31 10:57:59 --> Hooks Class Initialized
DEBUG - 2025-05-31 10:57:59 --> UTF-8 Support Enabled
DEBUG - 2025-05-31 10:57:59 --> UTF-8 Support Enabled
INFO - 2025-05-31 10:57:59 --> Utf8 Class Initialized
INFO - 2025-05-31 10:57:59 --> Utf8 Class Initialized
INFO - 2025-05-31 10:57:59 --> URI Class Initialized
INFO - 2025-05-31 10:57:59 --> URI Class Initialized
INFO - 2025-05-31 10:57:59 --> Router Class Initialized
INFO - 2025-05-31 10:57:59 --> Router Class Initialized
INFO - 2025-05-31 10:57:59 --> Output Class Initialized
INFO - 2025-05-31 10:57:59 --> Output Class Initialized
INFO - 2025-05-31 10:57:59 --> Security Class Initialized
INFO - 2025-05-31 10:57:59 --> Security Class Initialized
DEBUG - 2025-05-31 10:57:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-05-31 10:57:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 10:57:59 --> Input Class Initialized
INFO - 2025-05-31 10:57:59 --> Input Class Initialized
INFO - 2025-05-31 10:57:59 --> Language Class Initialized
INFO - 2025-05-31 10:57:59 --> Language Class Initialized
INFO - 2025-05-31 10:57:59 --> Loader Class Initialized
INFO - 2025-05-31 10:57:59 --> Helper loaded: url_helper
INFO - 2025-05-31 10:57:59 --> Helper loaded: file_helper
INFO - 2025-05-31 10:57:59 --> Database Driver Class Initialized
INFO - 2025-05-31 10:57:59 --> Loader Class Initialized
INFO - 2025-05-31 10:57:59 --> Helper loaded: url_helper
INFO - 2025-05-31 10:57:59 --> Helper loaded: file_helper
INFO - 2025-05-31 10:57:59 --> Database Driver Class Initialized
INFO - 2025-05-31 10:57:59 --> Email Class Initialized
INFO - 2025-05-31 10:57:59 --> Email Class Initialized
DEBUG - 2025-05-31 10:57:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-31 10:57:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 10:57:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:57:59 --> Controller Class Initialized
INFO - 2025-05-31 10:57:59 --> Helper loaded: form_helper
INFO - 2025-05-31 10:57:59 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:57:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:57:59 --> Database Driver Class Initialized
INFO - 2025-05-31 10:57:59 --> Model "Crud" initialized
ERROR - 2025-05-31 10:57:59 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:57:59 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 10:57:59 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 10:57:59 --> Controller Class Initialized
INFO - 2025-05-31 10:57:59 --> Helper loaded: form_helper
INFO - 2025-05-31 10:57:59 --> Form Validation Class Initialized
DEBUG - 2025-05-31 10:57:59 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 10:57:59 --> Database Driver Class Initialized
INFO - 2025-05-31 10:57:59 --> Model "Crud" initialized
ERROR - 2025-05-31 10:57:59 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 10:57:59 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 19:06:41 --> Config Class Initialized
INFO - 2025-05-31 19:06:41 --> Hooks Class Initialized
DEBUG - 2025-05-31 19:06:41 --> UTF-8 Support Enabled
INFO - 2025-05-31 19:06:41 --> Utf8 Class Initialized
INFO - 2025-05-31 19:06:41 --> URI Class Initialized
INFO - 2025-05-31 19:06:41 --> Router Class Initialized
INFO - 2025-05-31 19:06:41 --> Output Class Initialized
INFO - 2025-05-31 19:06:41 --> Security Class Initialized
DEBUG - 2025-05-31 19:06:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 19:06:41 --> Input Class Initialized
INFO - 2025-05-31 19:06:41 --> Language Class Initialized
INFO - 2025-05-31 19:06:41 --> Loader Class Initialized
INFO - 2025-05-31 19:06:41 --> Helper loaded: url_helper
INFO - 2025-05-31 19:06:41 --> Helper loaded: file_helper
INFO - 2025-05-31 19:06:41 --> Database Driver Class Initialized
INFO - 2025-05-31 19:06:41 --> Email Class Initialized
DEBUG - 2025-05-31 19:06:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 19:06:41 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 19:06:41 --> Controller Class Initialized
INFO - 2025-05-31 19:06:41 --> Helper loaded: form_helper
INFO - 2025-05-31 19:06:41 --> Form Validation Class Initialized
DEBUG - 2025-05-31 19:06:41 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 19:06:41 --> Database Driver Class Initialized
INFO - 2025-05-31 19:06:41 --> Config Class Initialized
INFO - 2025-05-31 19:06:41 --> Hooks Class Initialized
DEBUG - 2025-05-31 19:06:41 --> UTF-8 Support Enabled
INFO - 2025-05-31 19:06:41 --> Utf8 Class Initialized
INFO - 2025-05-31 19:06:41 --> URI Class Initialized
INFO - 2025-05-31 19:06:41 --> Router Class Initialized
INFO - 2025-05-31 19:06:41 --> Output Class Initialized
INFO - 2025-05-31 19:06:41 --> Security Class Initialized
DEBUG - 2025-05-31 19:06:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-31 19:06:41 --> Input Class Initialized
INFO - 2025-05-31 19:06:41 --> Language Class Initialized
INFO - 2025-05-31 19:06:41 --> Loader Class Initialized
INFO - 2025-05-31 19:06:41 --> Helper loaded: url_helper
INFO - 2025-05-31 19:06:41 --> Helper loaded: file_helper
INFO - 2025-05-31 19:06:41 --> Database Driver Class Initialized
INFO - 2025-05-31 19:06:41 --> Email Class Initialized
DEBUG - 2025-05-31 19:06:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-31 19:06:41 --> Model "Crud" initialized
ERROR - 2025-05-31 19:06:41 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 19:06:41 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-31 19:06:41 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-31 19:06:41 --> Controller Class Initialized
INFO - 2025-05-31 19:06:41 --> Helper loaded: form_helper
INFO - 2025-05-31 19:06:41 --> Form Validation Class Initialized
DEBUG - 2025-05-31 19:06:41 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-31 19:06:41 --> Database Driver Class Initialized
INFO - 2025-05-31 19:06:41 --> Model "Crud" initialized
ERROR - 2025-05-31 19:06:41 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-31 19:06:41 --> Language file loaded: language/english/db_lang.php
