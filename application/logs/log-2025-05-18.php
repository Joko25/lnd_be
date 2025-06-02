<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2025-05-18 09:41:55 --> Config Class Initialized
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2025-05-18 09:41:55 --> Config Class Initialized
INFO - 2025-05-18 09:41:55 --> Hooks Class Initialized
INFO - 2025-05-18 09:41:55 --> Hooks Class Initialized
DEBUG - 2025-05-18 09:41:55 --> UTF-8 Support Enabled
INFO - 2025-05-18 09:41:55 --> Utf8 Class Initialized
INFO - 2025-05-18 09:41:55 --> URI Class Initialized
INFO - 2025-05-18 09:41:55 --> Router Class Initialized
INFO - 2025-05-18 09:41:55 --> Output Class Initialized
INFO - 2025-05-18 09:41:55 --> Security Class Initialized
DEBUG - 2025-05-18 09:41:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-18 09:41:55 --> Input Class Initialized
INFO - 2025-05-18 09:41:55 --> Language Class Initialized
INFO - 2025-05-18 09:41:55 --> Loader Class Initialized
INFO - 2025-05-18 09:41:55 --> Helper loaded: url_helper
INFO - 2025-05-18 09:41:55 --> Helper loaded: file_helper
DEBUG - 2025-05-18 09:41:55 --> UTF-8 Support Enabled
INFO - 2025-05-18 09:41:55 --> Utf8 Class Initialized
INFO - 2025-05-18 09:41:55 --> URI Class Initialized
INFO - 2025-05-18 09:41:55 --> Database Driver Class Initialized
INFO - 2025-05-18 09:41:55 --> Router Class Initialized
INFO - 2025-05-18 09:41:55 --> Output Class Initialized
INFO - 2025-05-18 09:41:55 --> Security Class Initialized
DEBUG - 2025-05-18 09:41:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-18 09:41:55 --> Input Class Initialized
INFO - 2025-05-18 09:41:55 --> Language Class Initialized
INFO - 2025-05-18 09:41:55 --> Loader Class Initialized
INFO - 2025-05-18 09:41:55 --> Helper loaded: url_helper
INFO - 2025-05-18 09:41:55 --> Helper loaded: file_helper
INFO - 2025-05-18 09:41:55 --> Database Driver Class Initialized
INFO - 2025-05-18 09:41:55 --> Email Class Initialized
DEBUG - 2025-05-18 09:41:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-18 09:41:55 --> Email Class Initialized
DEBUG - 2025-05-18 09:41:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-18 09:41:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-18 09:41:55 --> Controller Class Initialized
INFO - 2025-05-18 09:41:55 --> Helper loaded: form_helper
INFO - 2025-05-18 09:41:55 --> Form Validation Class Initialized
DEBUG - 2025-05-18 09:41:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-18 09:41:55 --> Database Driver Class Initialized
INFO - 2025-05-18 09:41:55 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-18 09:41:55 --> Controller Class Initialized
INFO - 2025-05-18 09:41:55 --> Helper loaded: form_helper
INFO - 2025-05-18 09:41:55 --> Form Validation Class Initialized
DEBUG - 2025-05-18 09:41:55 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-18 09:41:55 --> Database Driver Class Initialized
INFO - 2025-05-18 09:41:55 --> Model "Crud" initialized
INFO - 2025-05-18 09:41:55 --> Model "Crud" initialized
ERROR - 2025-05-18 09:41:55 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
ERROR - 2025-05-18 09:41:55 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-18 09:41:55 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-18 09:41:55 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-18 12:39:40 --> Config Class Initialized
INFO - 2025-05-18 12:39:40 --> Hooks Class Initialized
DEBUG - 2025-05-18 12:39:40 --> UTF-8 Support Enabled
INFO - 2025-05-18 12:39:40 --> Utf8 Class Initialized
INFO - 2025-05-18 12:39:40 --> URI Class Initialized
INFO - 2025-05-18 12:39:40 --> Router Class Initialized
INFO - 2025-05-18 12:39:40 --> Output Class Initialized
INFO - 2025-05-18 12:39:40 --> Security Class Initialized
DEBUG - 2025-05-18 12:39:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-18 12:39:40 --> Input Class Initialized
INFO - 2025-05-18 12:39:40 --> Language Class Initialized
INFO - 2025-05-18 12:39:40 --> Loader Class Initialized
INFO - 2025-05-18 12:39:40 --> Helper loaded: url_helper
INFO - 2025-05-18 12:39:41 --> Helper loaded: file_helper
INFO - 2025-05-18 12:39:41 --> Database Driver Class Initialized
INFO - 2025-05-18 12:39:41 --> Email Class Initialized
DEBUG - 2025-05-18 12:39:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-18 12:39:41 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-18 12:39:41 --> Controller Class Initialized
INFO - 2025-05-18 12:39:41 --> Helper loaded: form_helper
INFO - 2025-05-18 12:39:41 --> Form Validation Class Initialized
DEBUG - 2025-05-18 12:39:41 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-18 12:39:41 --> Database Driver Class Initialized
INFO - 2025-05-18 12:39:41 --> Model "Crud" initialized
ERROR - 2025-05-18 12:39:41 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-18 12:39:41 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-18 12:39:42 --> Config Class Initialized
INFO - 2025-05-18 12:39:42 --> Hooks Class Initialized
DEBUG - 2025-05-18 12:39:42 --> UTF-8 Support Enabled
INFO - 2025-05-18 12:39:42 --> Utf8 Class Initialized
INFO - 2025-05-18 12:39:42 --> URI Class Initialized
INFO - 2025-05-18 12:39:42 --> Router Class Initialized
INFO - 2025-05-18 12:39:42 --> Output Class Initialized
INFO - 2025-05-18 12:39:42 --> Security Class Initialized
DEBUG - 2025-05-18 12:39:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-18 12:39:42 --> Input Class Initialized
INFO - 2025-05-18 12:39:42 --> Language Class Initialized
INFO - 2025-05-18 12:39:42 --> Loader Class Initialized
INFO - 2025-05-18 12:39:42 --> Helper loaded: url_helper
INFO - 2025-05-18 12:39:42 --> Helper loaded: file_helper
INFO - 2025-05-18 12:39:42 --> Database Driver Class Initialized
INFO - 2025-05-18 12:39:42 --> Email Class Initialized
DEBUG - 2025-05-18 12:39:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-18 12:39:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-18 12:39:42 --> Controller Class Initialized
INFO - 2025-05-18 12:39:42 --> Helper loaded: form_helper
INFO - 2025-05-18 12:39:42 --> Form Validation Class Initialized
DEBUG - 2025-05-18 12:39:42 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-18 12:39:42 --> Database Driver Class Initialized
INFO - 2025-05-18 12:39:42 --> Model "Crud" initialized
ERROR - 2025-05-18 12:39:42 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-18 12:39:42 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-18 12:39:54 --> Config Class Initialized
INFO - 2025-05-18 12:39:54 --> Hooks Class Initialized
DEBUG - 2025-05-18 12:39:54 --> UTF-8 Support Enabled
INFO - 2025-05-18 12:39:54 --> Utf8 Class Initialized
INFO - 2025-05-18 12:39:54 --> URI Class Initialized
INFO - 2025-05-18 12:39:54 --> Router Class Initialized
INFO - 2025-05-18 12:39:54 --> Output Class Initialized
INFO - 2025-05-18 12:39:54 --> Security Class Initialized
DEBUG - 2025-05-18 12:39:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-18 12:39:54 --> Input Class Initialized
INFO - 2025-05-18 12:39:54 --> Language Class Initialized
INFO - 2025-05-18 12:39:54 --> Loader Class Initialized
INFO - 2025-05-18 12:39:54 --> Helper loaded: url_helper
INFO - 2025-05-18 12:39:54 --> Helper loaded: file_helper
INFO - 2025-05-18 12:39:54 --> Database Driver Class Initialized
INFO - 2025-05-18 12:39:54 --> Config Class Initialized
INFO - 2025-05-18 12:39:54 --> Hooks Class Initialized
DEBUG - 2025-05-18 12:39:54 --> UTF-8 Support Enabled
INFO - 2025-05-18 12:39:54 --> Utf8 Class Initialized
INFO - 2025-05-18 12:39:54 --> URI Class Initialized
INFO - 2025-05-18 12:39:54 --> Router Class Initialized
INFO - 2025-05-18 12:39:54 --> Output Class Initialized
INFO - 2025-05-18 12:39:54 --> Security Class Initialized
DEBUG - 2025-05-18 12:39:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-18 12:39:54 --> Input Class Initialized
INFO - 2025-05-18 12:39:54 --> Language Class Initialized
INFO - 2025-05-18 12:39:54 --> Loader Class Initialized
INFO - 2025-05-18 12:39:54 --> Helper loaded: url_helper
INFO - 2025-05-18 12:39:54 --> Helper loaded: file_helper
INFO - 2025-05-18 12:39:54 --> Database Driver Class Initialized
INFO - 2025-05-18 12:39:54 --> Email Class Initialized
DEBUG - 2025-05-18 12:39:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-18 12:39:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-18 12:39:54 --> Controller Class Initialized
INFO - 2025-05-18 12:39:54 --> Helper loaded: form_helper
INFO - 2025-05-18 12:39:54 --> Form Validation Class Initialized
DEBUG - 2025-05-18 12:39:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-18 12:39:54 --> Database Driver Class Initialized
INFO - 2025-05-18 12:39:54 --> Model "Crud" initialized
ERROR - 2025-05-18 12:39:54 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-18 12:39:54 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-18 12:39:54 --> Email Class Initialized
DEBUG - 2025-05-18 12:39:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-18 12:39:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-18 12:39:54 --> Controller Class Initialized
INFO - 2025-05-18 12:39:54 --> Helper loaded: form_helper
INFO - 2025-05-18 12:39:54 --> Form Validation Class Initialized
DEBUG - 2025-05-18 12:39:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-18 12:39:54 --> Database Driver Class Initialized
INFO - 2025-05-18 12:39:54 --> Model "Crud" initialized
ERROR - 2025-05-18 12:39:54 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-18 12:39:54 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-18 16:39:48 --> Config Class Initialized
INFO - 2025-05-18 16:39:48 --> Hooks Class Initialized
DEBUG - 2025-05-18 16:39:48 --> UTF-8 Support Enabled
INFO - 2025-05-18 16:39:48 --> Utf8 Class Initialized
INFO - 2025-05-18 16:39:48 --> URI Class Initialized
INFO - 2025-05-18 16:39:48 --> Router Class Initialized
INFO - 2025-05-18 16:39:48 --> Output Class Initialized
INFO - 2025-05-18 16:39:48 --> Security Class Initialized
DEBUG - 2025-05-18 16:39:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-18 16:39:48 --> Input Class Initialized
INFO - 2025-05-18 16:39:48 --> Language Class Initialized
INFO - 2025-05-18 16:39:48 --> Config Class Initialized
INFO - 2025-05-18 16:39:48 --> Hooks Class Initialized
DEBUG - 2025-05-18 16:39:48 --> UTF-8 Support Enabled
INFO - 2025-05-18 16:39:48 --> Utf8 Class Initialized
INFO - 2025-05-18 16:39:48 --> URI Class Initialized
INFO - 2025-05-18 16:39:48 --> Router Class Initialized
INFO - 2025-05-18 16:39:48 --> Output Class Initialized
INFO - 2025-05-18 16:39:48 --> Security Class Initialized
DEBUG - 2025-05-18 16:39:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-18 16:39:48 --> Input Class Initialized
INFO - 2025-05-18 16:39:48 --> Language Class Initialized
INFO - 2025-05-18 16:39:48 --> Loader Class Initialized
INFO - 2025-05-18 16:39:48 --> Helper loaded: url_helper
INFO - 2025-05-18 16:39:48 --> Helper loaded: file_helper
INFO - 2025-05-18 16:39:48 --> Database Driver Class Initialized
INFO - 2025-05-18 16:39:48 --> Loader Class Initialized
INFO - 2025-05-18 16:39:48 --> Helper loaded: url_helper
INFO - 2025-05-18 16:39:48 --> Helper loaded: file_helper
INFO - 2025-05-18 16:39:48 --> Database Driver Class Initialized
INFO - 2025-05-18 16:39:48 --> Email Class Initialized
INFO - 2025-05-18 16:39:48 --> Email Class Initialized
DEBUG - 2025-05-18 16:39:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-05-18 16:39:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-18 16:39:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-18 16:39:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-18 16:39:48 --> Controller Class Initialized
INFO - 2025-05-18 16:39:48 --> Controller Class Initialized
INFO - 2025-05-18 16:39:48 --> Helper loaded: form_helper
INFO - 2025-05-18 16:39:48 --> Helper loaded: form_helper
INFO - 2025-05-18 16:39:48 --> Form Validation Class Initialized
INFO - 2025-05-18 16:39:48 --> Form Validation Class Initialized
DEBUG - 2025-05-18 16:39:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-05-18 16:39:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-18 16:39:48 --> Database Driver Class Initialized
INFO - 2025-05-18 16:39:48 --> Database Driver Class Initialized
INFO - 2025-05-18 16:39:48 --> Model "Crud" initialized
INFO - 2025-05-18 16:39:48 --> Model "Crud" initialized
ERROR - 2025-05-18 16:39:48 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-18 16:39:48 --> Language file loaded: language/english/db_lang.php
ERROR - 2025-05-18 16:39:48 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-18 16:39:48 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-18 17:06:54 --> Config Class Initialized
INFO - 2025-05-18 17:06:54 --> Hooks Class Initialized
DEBUG - 2025-05-18 17:06:54 --> UTF-8 Support Enabled
INFO - 2025-05-18 17:06:54 --> Utf8 Class Initialized
INFO - 2025-05-18 17:06:54 --> URI Class Initialized
INFO - 2025-05-18 17:06:54 --> Router Class Initialized
INFO - 2025-05-18 17:06:54 --> Output Class Initialized
INFO - 2025-05-18 17:06:54 --> Security Class Initialized
DEBUG - 2025-05-18 17:06:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-18 17:06:54 --> Input Class Initialized
INFO - 2025-05-18 17:06:54 --> Language Class Initialized
INFO - 2025-05-18 17:06:54 --> Loader Class Initialized
INFO - 2025-05-18 17:06:54 --> Helper loaded: url_helper
INFO - 2025-05-18 17:06:54 --> Helper loaded: file_helper
INFO - 2025-05-18 17:06:54 --> Database Driver Class Initialized
INFO - 2025-05-18 17:06:54 --> Email Class Initialized
DEBUG - 2025-05-18 17:06:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-18 17:06:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-18 17:06:54 --> Controller Class Initialized
INFO - 2025-05-18 17:06:54 --> Helper loaded: form_helper
INFO - 2025-05-18 17:06:54 --> Form Validation Class Initialized
DEBUG - 2025-05-18 17:06:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-18 17:06:54 --> Database Driver Class Initialized
INFO - 2025-05-18 17:06:54 --> Config Class Initialized
INFO - 2025-05-18 17:06:54 --> Hooks Class Initialized
DEBUG - 2025-05-18 17:06:54 --> UTF-8 Support Enabled
INFO - 2025-05-18 17:06:54 --> Utf8 Class Initialized
INFO - 2025-05-18 17:06:54 --> URI Class Initialized
INFO - 2025-05-18 17:06:54 --> Router Class Initialized
INFO - 2025-05-18 17:06:54 --> Output Class Initialized
INFO - 2025-05-18 17:06:54 --> Security Class Initialized
DEBUG - 2025-05-18 17:06:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-18 17:06:54 --> Input Class Initialized
INFO - 2025-05-18 17:06:54 --> Language Class Initialized
INFO - 2025-05-18 17:06:54 --> Loader Class Initialized
INFO - 2025-05-18 17:06:54 --> Helper loaded: url_helper
INFO - 2025-05-18 17:06:54 --> Helper loaded: file_helper
INFO - 2025-05-18 17:06:54 --> Model "Crud" initialized
INFO - 2025-05-18 17:06:54 --> Database Driver Class Initialized
ERROR - 2025-05-18 17:06:54 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-18 17:06:54 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-18 17:06:54 --> Email Class Initialized
DEBUG - 2025-05-18 17:06:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-18 17:06:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-18 17:06:54 --> Controller Class Initialized
INFO - 2025-05-18 17:06:54 --> Helper loaded: form_helper
INFO - 2025-05-18 17:06:54 --> Form Validation Class Initialized
DEBUG - 2025-05-18 17:06:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-18 17:06:54 --> Database Driver Class Initialized
INFO - 2025-05-18 17:06:54 --> Model "Crud" initialized
ERROR - 2025-05-18 17:06:54 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-18 17:06:54 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-18 17:07:54 --> Config Class Initialized
INFO - 2025-05-18 17:07:54 --> Hooks Class Initialized
DEBUG - 2025-05-18 17:07:54 --> UTF-8 Support Enabled
INFO - 2025-05-18 17:07:54 --> Utf8 Class Initialized
INFO - 2025-05-18 17:07:54 --> URI Class Initialized
INFO - 2025-05-18 17:07:54 --> Router Class Initialized
INFO - 2025-05-18 17:07:54 --> Output Class Initialized
INFO - 2025-05-18 17:07:54 --> Security Class Initialized
DEBUG - 2025-05-18 17:07:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-18 17:07:54 --> Input Class Initialized
INFO - 2025-05-18 17:07:54 --> Language Class Initialized
INFO - 2025-05-18 17:07:54 --> Loader Class Initialized
INFO - 2025-05-18 17:07:54 --> Helper loaded: url_helper
INFO - 2025-05-18 17:07:54 --> Helper loaded: file_helper
INFO - 2025-05-18 17:07:54 --> Database Driver Class Initialized
INFO - 2025-05-18 17:07:54 --> Email Class Initialized
DEBUG - 2025-05-18 17:07:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-18 17:07:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-18 17:07:54 --> Controller Class Initialized
INFO - 2025-05-18 17:07:54 --> Helper loaded: form_helper
INFO - 2025-05-18 17:07:54 --> Form Validation Class Initialized
DEBUG - 2025-05-18 17:07:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-18 17:07:54 --> Database Driver Class Initialized
INFO - 2025-05-18 17:07:54 --> Config Class Initialized
INFO - 2025-05-18 17:07:54 --> Hooks Class Initialized
DEBUG - 2025-05-18 17:07:54 --> UTF-8 Support Enabled
INFO - 2025-05-18 17:07:54 --> Utf8 Class Initialized
INFO - 2025-05-18 17:07:54 --> URI Class Initialized
INFO - 2025-05-18 17:07:54 --> Router Class Initialized
INFO - 2025-05-18 17:07:54 --> Output Class Initialized
INFO - 2025-05-18 17:07:54 --> Security Class Initialized
DEBUG - 2025-05-18 17:07:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-05-18 17:07:54 --> Input Class Initialized
INFO - 2025-05-18 17:07:54 --> Language Class Initialized
INFO - 2025-05-18 17:07:54 --> Loader Class Initialized
INFO - 2025-05-18 17:07:54 --> Helper loaded: url_helper
INFO - 2025-05-18 17:07:54 --> Helper loaded: file_helper
INFO - 2025-05-18 17:07:54 --> Database Driver Class Initialized
INFO - 2025-05-18 17:07:54 --> Model "Crud" initialized
ERROR - 2025-05-18 17:07:54 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-18 17:07:54 --> Language file loaded: language/english/db_lang.php
INFO - 2025-05-18 17:07:54 --> Email Class Initialized
DEBUG - 2025-05-18 17:07:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-05-18 17:07:54 --> Session: Class initialized using 'files' driver.
INFO - 2025-05-18 17:07:54 --> Controller Class Initialized
INFO - 2025-05-18 17:07:54 --> Helper loaded: form_helper
INFO - 2025-05-18 17:07:54 --> Form Validation Class Initialized
DEBUG - 2025-05-18 17:07:54 --> Session class already loaded. Second attempt ignored.
INFO - 2025-05-18 17:07:54 --> Database Driver Class Initialized
INFO - 2025-05-18 17:07:54 --> Model "Crud" initialized
ERROR - 2025-05-18 17:07:54 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-05-18 17:07:54 --> Language file loaded: language/english/db_lang.php
