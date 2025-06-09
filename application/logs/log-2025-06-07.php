<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2025-06-07 08:32:05 --> Config Class Initialized
INFO - 2025-06-07 08:32:05 --> Hooks Class Initialized
DEBUG - 2025-06-07 08:32:05 --> UTF-8 Support Enabled
INFO - 2025-06-07 08:32:05 --> Utf8 Class Initialized
INFO - 2025-06-07 08:32:05 --> URI Class Initialized
INFO - 2025-06-07 08:32:05 --> Router Class Initialized
INFO - 2025-06-07 08:32:05 --> Output Class Initialized
INFO - 2025-06-07 08:32:05 --> Security Class Initialized
DEBUG - 2025-06-07 08:32:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-07 08:32:05 --> Input Class Initialized
INFO - 2025-06-07 08:32:05 --> Language Class Initialized
INFO - 2025-06-07 08:32:05 --> Loader Class Initialized
INFO - 2025-06-07 08:32:05 --> Helper loaded: url_helper
INFO - 2025-06-07 08:32:05 --> Helper loaded: file_helper
INFO - 2025-06-07 08:32:05 --> Database Driver Class Initialized
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2025-06-07 08:32:05 --> Config Class Initialized
INFO - 2025-06-07 08:32:05 --> Hooks Class Initialized
INFO - 2025-06-07 08:32:05 --> Email Class Initialized
DEBUG - 2025-06-07 08:32:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-07 08:32:05 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-07 08:32:05 --> Controller Class Initialized
INFO - 2025-06-07 08:32:05 --> Helper loaded: form_helper
INFO - 2025-06-07 08:32:05 --> Form Validation Class Initialized
DEBUG - 2025-06-07 08:32:05 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-07 08:32:05 --> Database Driver Class Initialized
DEBUG - 2025-06-07 08:32:05 --> UTF-8 Support Enabled
INFO - 2025-06-07 08:32:05 --> Utf8 Class Initialized
INFO - 2025-06-07 08:32:05 --> URI Class Initialized
INFO - 2025-06-07 08:32:05 --> Router Class Initialized
INFO - 2025-06-07 08:32:05 --> Output Class Initialized
INFO - 2025-06-07 08:32:05 --> Security Class Initialized
DEBUG - 2025-06-07 08:32:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-07 08:32:05 --> Input Class Initialized
INFO - 2025-06-07 08:32:05 --> Language Class Initialized
INFO - 2025-06-07 08:32:05 --> Loader Class Initialized
INFO - 2025-06-07 08:32:05 --> Helper loaded: url_helper
INFO - 2025-06-07 08:32:05 --> Helper loaded: file_helper
INFO - 2025-06-07 08:32:05 --> Database Driver Class Initialized
INFO - 2025-06-07 08:32:05 --> Model "Crud" initialized
ERROR - 2025-06-07 08:32:05 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-07 08:32:05 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-07 08:32:05 --> Email Class Initialized
DEBUG - 2025-06-07 08:32:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-07 08:32:05 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-07 08:32:05 --> Controller Class Initialized
INFO - 2025-06-07 08:32:05 --> Helper loaded: form_helper
INFO - 2025-06-07 08:32:05 --> Form Validation Class Initialized
DEBUG - 2025-06-07 08:32:05 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-07 08:32:05 --> Database Driver Class Initialized
INFO - 2025-06-07 08:32:05 --> Model "Crud" initialized
ERROR - 2025-06-07 08:32:05 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-07 08:32:05 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-07 19:00:36 --> Config Class Initialized
INFO - 2025-06-07 19:00:36 --> Hooks Class Initialized
INFO - 2025-06-07 19:00:36 --> Config Class Initialized
INFO - 2025-06-07 19:00:36 --> Hooks Class Initialized
DEBUG - 2025-06-07 19:00:36 --> UTF-8 Support Enabled
INFO - 2025-06-07 19:00:36 --> Utf8 Class Initialized
DEBUG - 2025-06-07 19:00:36 --> UTF-8 Support Enabled
INFO - 2025-06-07 19:00:36 --> Utf8 Class Initialized
INFO - 2025-06-07 19:00:36 --> URI Class Initialized
INFO - 2025-06-07 19:00:36 --> URI Class Initialized
INFO - 2025-06-07 19:00:36 --> Router Class Initialized
INFO - 2025-06-07 19:00:36 --> Router Class Initialized
INFO - 2025-06-07 19:00:36 --> Output Class Initialized
INFO - 2025-06-07 19:00:36 --> Output Class Initialized
INFO - 2025-06-07 19:00:36 --> Security Class Initialized
INFO - 2025-06-07 19:00:36 --> Security Class Initialized
DEBUG - 2025-06-07 19:00:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-07 19:00:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-07 19:00:36 --> Input Class Initialized
INFO - 2025-06-07 19:00:36 --> Input Class Initialized
INFO - 2025-06-07 19:00:36 --> Language Class Initialized
INFO - 2025-06-07 19:00:36 --> Language Class Initialized
INFO - 2025-06-07 19:00:36 --> Loader Class Initialized
INFO - 2025-06-07 19:00:36 --> Helper loaded: url_helper
INFO - 2025-06-07 19:00:36 --> Loader Class Initialized
INFO - 2025-06-07 19:00:36 --> Helper loaded: url_helper
INFO - 2025-06-07 19:00:36 --> Helper loaded: file_helper
INFO - 2025-06-07 19:00:36 --> Helper loaded: file_helper
INFO - 2025-06-07 19:00:36 --> Database Driver Class Initialized
INFO - 2025-06-07 19:00:36 --> Database Driver Class Initialized
INFO - 2025-06-07 19:00:36 --> Email Class Initialized
INFO - 2025-06-07 19:00:36 --> Email Class Initialized
DEBUG - 2025-06-07 19:00:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-07 19:00:36 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-07 19:00:36 --> Controller Class Initialized
DEBUG - 2025-06-07 19:00:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-07 19:00:36 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-07 19:00:36 --> Controller Class Initialized
INFO - 2025-06-07 19:00:36 --> Helper loaded: form_helper
INFO - 2025-06-07 19:00:36 --> Helper loaded: form_helper
INFO - 2025-06-07 19:00:36 --> Form Validation Class Initialized
DEBUG - 2025-06-07 19:00:36 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-07 19:00:36 --> Form Validation Class Initialized
DEBUG - 2025-06-07 19:00:36 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-07 19:00:36 --> Database Driver Class Initialized
INFO - 2025-06-07 19:00:36 --> Database Driver Class Initialized
INFO - 2025-06-07 19:00:36 --> Model "Crud" initialized
INFO - 2025-06-07 19:00:36 --> Model "Crud" initialized
ERROR - 2025-06-07 19:00:36 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-07 19:00:36 --> Language file loaded: language/english/db_lang.php
ERROR - 2025-06-07 19:00:36 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-07 19:00:36 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-07 16:32:48 --> Config Class Initialized
INFO - 2025-06-07 16:32:48 --> Config Class Initialized
INFO - 2025-06-07 16:32:48 --> Hooks Class Initialized
INFO - 2025-06-07 16:32:48 --> Hooks Class Initialized
DEBUG - 2025-06-07 16:32:48 --> UTF-8 Support Enabled
INFO - 2025-06-07 16:32:48 --> Utf8 Class Initialized
DEBUG - 2025-06-07 16:32:48 --> UTF-8 Support Enabled
INFO - 2025-06-07 16:32:48 --> Utf8 Class Initialized
INFO - 2025-06-07 16:32:48 --> URI Class Initialized
INFO - 2025-06-07 16:32:48 --> URI Class Initialized
INFO - 2025-06-07 16:32:48 --> Router Class Initialized
INFO - 2025-06-07 16:32:48 --> Router Class Initialized
INFO - 2025-06-07 16:32:48 --> Output Class Initialized
INFO - 2025-06-07 16:32:48 --> Output Class Initialized
INFO - 2025-06-07 16:32:48 --> Security Class Initialized
INFO - 2025-06-07 16:32:48 --> Security Class Initialized
DEBUG - 2025-06-07 16:32:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-06-07 16:32:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-07 16:32:48 --> Input Class Initialized
INFO - 2025-06-07 16:32:48 --> Input Class Initialized
INFO - 2025-06-07 16:32:48 --> Language Class Initialized
INFO - 2025-06-07 16:32:48 --> Language Class Initialized
INFO - 2025-06-07 16:32:48 --> Loader Class Initialized
INFO - 2025-06-07 16:32:48 --> Loader Class Initialized
INFO - 2025-06-07 16:32:48 --> Helper loaded: url_helper
INFO - 2025-06-07 16:32:48 --> Helper loaded: url_helper
INFO - 2025-06-07 16:32:48 --> Helper loaded: file_helper
INFO - 2025-06-07 16:32:48 --> Helper loaded: file_helper
INFO - 2025-06-07 16:32:48 --> Database Driver Class Initialized
INFO - 2025-06-07 16:32:48 --> Database Driver Class Initialized
INFO - 2025-06-07 16:32:48 --> Email Class Initialized
INFO - 2025-06-07 16:32:48 --> Email Class Initialized
DEBUG - 2025-06-07 16:32:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-06-07 16:32:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-07 16:32:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-07 16:32:48 --> Controller Class Initialized
INFO - 2025-06-07 16:32:48 --> Helper loaded: form_helper
INFO - 2025-06-07 16:32:48 --> Form Validation Class Initialized
DEBUG - 2025-06-07 16:32:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-07 16:32:48 --> Database Driver Class Initialized
INFO - 2025-06-07 16:32:48 --> Model "Crud" initialized
ERROR - 2025-06-07 16:32:48 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-07 16:32:48 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-07 16:32:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-07 16:32:48 --> Controller Class Initialized
INFO - 2025-06-07 16:32:48 --> Helper loaded: form_helper
INFO - 2025-06-07 16:32:48 --> Form Validation Class Initialized
DEBUG - 2025-06-07 16:32:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-07 16:32:48 --> Database Driver Class Initialized
INFO - 2025-06-07 16:32:48 --> Model "Crud" initialized
ERROR - 2025-06-07 16:32:48 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-07 16:32:48 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-07 16:33:48 --> Config Class Initialized
INFO - 2025-06-07 16:33:48 --> Hooks Class Initialized
DEBUG - 2025-06-07 16:33:48 --> UTF-8 Support Enabled
INFO - 2025-06-07 16:33:48 --> Utf8 Class Initialized
INFO - 2025-06-07 16:33:48 --> URI Class Initialized
INFO - 2025-06-07 16:33:48 --> Router Class Initialized
INFO - 2025-06-07 16:33:48 --> Output Class Initialized
INFO - 2025-06-07 16:33:48 --> Security Class Initialized
DEBUG - 2025-06-07 16:33:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-07 16:33:48 --> Input Class Initialized
INFO - 2025-06-07 16:33:48 --> Language Class Initialized
INFO - 2025-06-07 16:33:48 --> Loader Class Initialized
INFO - 2025-06-07 16:33:48 --> Config Class Initialized
INFO - 2025-06-07 16:33:48 --> Hooks Class Initialized
INFO - 2025-06-07 16:33:48 --> Helper loaded: url_helper
INFO - 2025-06-07 16:33:48 --> Helper loaded: file_helper
DEBUG - 2025-06-07 16:33:48 --> UTF-8 Support Enabled
INFO - 2025-06-07 16:33:48 --> Utf8 Class Initialized
INFO - 2025-06-07 16:33:48 --> URI Class Initialized
INFO - 2025-06-07 16:33:48 --> Database Driver Class Initialized
INFO - 2025-06-07 16:33:48 --> Router Class Initialized
INFO - 2025-06-07 16:33:48 --> Output Class Initialized
INFO - 2025-06-07 16:33:48 --> Security Class Initialized
DEBUG - 2025-06-07 16:33:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-07 16:33:48 --> Input Class Initialized
INFO - 2025-06-07 16:33:48 --> Language Class Initialized
INFO - 2025-06-07 16:33:48 --> Loader Class Initialized
INFO - 2025-06-07 16:33:48 --> Helper loaded: url_helper
INFO - 2025-06-07 16:33:48 --> Helper loaded: file_helper
INFO - 2025-06-07 16:33:48 --> Database Driver Class Initialized
INFO - 2025-06-07 16:33:48 --> Email Class Initialized
DEBUG - 2025-06-07 16:33:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-07 16:33:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-07 16:33:48 --> Controller Class Initialized
INFO - 2025-06-07 16:33:48 --> Helper loaded: form_helper
INFO - 2025-06-07 16:33:48 --> Form Validation Class Initialized
DEBUG - 2025-06-07 16:33:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-07 16:33:48 --> Database Driver Class Initialized
INFO - 2025-06-07 16:33:48 --> Email Class Initialized
DEBUG - 2025-06-07 16:33:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-07 16:33:48 --> Model "Crud" initialized
ERROR - 2025-06-07 16:33:48 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-07 16:33:48 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-07 16:33:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-07 16:33:48 --> Controller Class Initialized
INFO - 2025-06-07 16:33:48 --> Helper loaded: form_helper
INFO - 2025-06-07 16:33:48 --> Form Validation Class Initialized
DEBUG - 2025-06-07 16:33:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-07 16:33:48 --> Database Driver Class Initialized
INFO - 2025-06-07 16:33:48 --> Model "Crud" initialized
ERROR - 2025-06-07 16:33:48 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-07 16:33:48 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-07 23:08:29 --> Config Class Initialized
INFO - 2025-06-07 23:08:29 --> Hooks Class Initialized
DEBUG - 2025-06-07 23:08:29 --> UTF-8 Support Enabled
INFO - 2025-06-07 23:08:29 --> Utf8 Class Initialized
INFO - 2025-06-07 23:08:29 --> URI Class Initialized
INFO - 2025-06-07 23:08:29 --> Router Class Initialized
INFO - 2025-06-07 23:08:29 --> Output Class Initialized
INFO - 2025-06-07 23:08:29 --> Security Class Initialized
DEBUG - 2025-06-07 23:08:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-07 23:08:29 --> Input Class Initialized
INFO - 2025-06-07 23:08:29 --> Language Class Initialized
INFO - 2025-06-07 23:08:29 --> Loader Class Initialized
INFO - 2025-06-07 23:08:29 --> Config Class Initialized
INFO - 2025-06-07 23:08:29 --> Hooks Class Initialized
DEBUG - 2025-06-07 23:08:29 --> UTF-8 Support Enabled
INFO - 2025-06-07 23:08:29 --> Utf8 Class Initialized
INFO - 2025-06-07 23:08:29 --> URI Class Initialized
INFO - 2025-06-07 23:08:29 --> Router Class Initialized
INFO - 2025-06-07 23:08:29 --> Output Class Initialized
INFO - 2025-06-07 23:08:29 --> Security Class Initialized
DEBUG - 2025-06-07 23:08:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-07 23:08:29 --> Input Class Initialized
INFO - 2025-06-07 23:08:29 --> Language Class Initialized
INFO - 2025-06-07 23:08:29 --> Loader Class Initialized
INFO - 2025-06-07 23:08:29 --> Helper loaded: url_helper
INFO - 2025-06-07 23:08:29 --> Helper loaded: file_helper
INFO - 2025-06-07 23:08:29 --> Database Driver Class Initialized
INFO - 2025-06-07 23:08:29 --> Helper loaded: url_helper
INFO - 2025-06-07 23:08:29 --> Helper loaded: file_helper
INFO - 2025-06-07 23:08:29 --> Database Driver Class Initialized
INFO - 2025-06-07 23:08:29 --> Email Class Initialized
DEBUG - 2025-06-07 23:08:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-07 23:08:29 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-07 23:08:29 --> Controller Class Initialized
INFO - 2025-06-07 23:08:29 --> Helper loaded: form_helper
INFO - 2025-06-07 23:08:29 --> Form Validation Class Initialized
DEBUG - 2025-06-07 23:08:29 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-07 23:08:29 --> Database Driver Class Initialized
INFO - 2025-06-07 23:08:29 --> Email Class Initialized
DEBUG - 2025-06-07 23:08:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-07 23:08:29 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-07 23:08:29 --> Controller Class Initialized
INFO - 2025-06-07 23:08:29 --> Helper loaded: form_helper
INFO - 2025-06-07 23:08:29 --> Form Validation Class Initialized
DEBUG - 2025-06-07 23:08:29 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-07 23:08:29 --> Database Driver Class Initialized
INFO - 2025-06-07 23:08:29 --> Model "Crud" initialized
INFO - 2025-06-07 23:08:29 --> Model "Crud" initialized
ERROR - 2025-06-07 23:08:29 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-07 23:08:29 --> Language file loaded: language/english/db_lang.php
ERROR - 2025-06-07 23:08:30 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-07 23:08:30 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-07 23:08:48 --> Config Class Initialized
INFO - 2025-06-07 23:08:48 --> Hooks Class Initialized
DEBUG - 2025-06-07 23:08:48 --> UTF-8 Support Enabled
INFO - 2025-06-07 23:08:48 --> Utf8 Class Initialized
INFO - 2025-06-07 23:08:48 --> URI Class Initialized
INFO - 2025-06-07 23:08:48 --> Router Class Initialized
INFO - 2025-06-07 23:08:48 --> Output Class Initialized
INFO - 2025-06-07 23:08:48 --> Security Class Initialized
DEBUG - 2025-06-07 23:08:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-07 23:08:48 --> Input Class Initialized
INFO - 2025-06-07 23:08:48 --> Language Class Initialized
INFO - 2025-06-07 23:08:48 --> Loader Class Initialized
INFO - 2025-06-07 23:08:48 --> Helper loaded: url_helper
INFO - 2025-06-07 23:08:48 --> Helper loaded: file_helper
INFO - 2025-06-07 23:08:48 --> Database Driver Class Initialized
INFO - 2025-06-07 23:08:48 --> Config Class Initialized
INFO - 2025-06-07 23:08:48 --> Hooks Class Initialized
DEBUG - 2025-06-07 23:08:48 --> UTF-8 Support Enabled
INFO - 2025-06-07 23:08:48 --> Utf8 Class Initialized
INFO - 2025-06-07 23:08:48 --> URI Class Initialized
INFO - 2025-06-07 23:08:48 --> Router Class Initialized
INFO - 2025-06-07 23:08:48 --> Output Class Initialized
INFO - 2025-06-07 23:08:48 --> Security Class Initialized
DEBUG - 2025-06-07 23:08:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-07 23:08:48 --> Input Class Initialized
INFO - 2025-06-07 23:08:48 --> Language Class Initialized
INFO - 2025-06-07 23:08:48 --> Loader Class Initialized
INFO - 2025-06-07 23:08:48 --> Helper loaded: url_helper
INFO - 2025-06-07 23:08:48 --> Helper loaded: file_helper
INFO - 2025-06-07 23:08:48 --> Database Driver Class Initialized
INFO - 2025-06-07 23:08:48 --> Email Class Initialized
DEBUG - 2025-06-07 23:08:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-07 23:08:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-07 23:08:48 --> Controller Class Initialized
INFO - 2025-06-07 23:08:48 --> Helper loaded: form_helper
INFO - 2025-06-07 23:08:48 --> Form Validation Class Initialized
DEBUG - 2025-06-07 23:08:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-07 23:08:48 --> Database Driver Class Initialized
INFO - 2025-06-07 23:08:48 --> Email Class Initialized
DEBUG - 2025-06-07 23:08:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-07 23:08:48 --> Model "Crud" initialized
ERROR - 2025-06-07 23:08:48 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-07 23:08:48 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-07 23:08:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-07 23:08:48 --> Controller Class Initialized
INFO - 2025-06-07 23:08:48 --> Helper loaded: form_helper
INFO - 2025-06-07 23:08:48 --> Form Validation Class Initialized
DEBUG - 2025-06-07 23:08:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-07 23:08:48 --> Database Driver Class Initialized
INFO - 2025-06-07 23:08:48 --> Model "Crud" initialized
ERROR - 2025-06-07 23:08:48 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-07 23:08:48 --> Language file loaded: language/english/db_lang.php
