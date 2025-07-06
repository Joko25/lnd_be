<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2025-07-01 10:16:32 --> Config Class Initialized
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2025-07-01 10:16:32 --> Config Class Initialized
INFO - 2025-07-01 10:16:32 --> Hooks Class Initialized
INFO - 2025-07-01 10:16:32 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:16:32 --> UTF-8 Support Enabled
DEBUG - 2025-07-01 10:16:32 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:16:32 --> Utf8 Class Initialized
INFO - 2025-07-01 10:16:32 --> Utf8 Class Initialized
INFO - 2025-07-01 10:16:32 --> URI Class Initialized
INFO - 2025-07-01 10:16:32 --> URI Class Initialized
INFO - 2025-07-01 10:16:32 --> Router Class Initialized
INFO - 2025-07-01 10:16:32 --> Router Class Initialized
INFO - 2025-07-01 10:16:32 --> Output Class Initialized
INFO - 2025-07-01 10:16:32 --> Output Class Initialized
INFO - 2025-07-01 10:16:32 --> Security Class Initialized
INFO - 2025-07-01 10:16:32 --> Security Class Initialized
DEBUG - 2025-07-01 10:16:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-07-01 10:16:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:16:32 --> Input Class Initialized
INFO - 2025-07-01 10:16:32 --> Input Class Initialized
INFO - 2025-07-01 10:16:32 --> Language Class Initialized
INFO - 2025-07-01 10:16:32 --> Language Class Initialized
INFO - 2025-07-01 10:16:32 --> Loader Class Initialized
INFO - 2025-07-01 10:16:32 --> Loader Class Initialized
INFO - 2025-07-01 10:16:32 --> Helper loaded: url_helper
INFO - 2025-07-01 10:16:32 --> Helper loaded: url_helper
INFO - 2025-07-01 10:16:32 --> Helper loaded: file_helper
INFO - 2025-07-01 10:16:32 --> Helper loaded: file_helper
INFO - 2025-07-01 10:16:32 --> Database Driver Class Initialized
INFO - 2025-07-01 10:16:32 --> Database Driver Class Initialized
INFO - 2025-07-01 10:16:32 --> Email Class Initialized
INFO - 2025-07-01 10:16:32 --> Email Class Initialized
DEBUG - 2025-07-01 10:16:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-07-01 10:16:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:16:32 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:16:32 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:16:32 --> Controller Class Initialized
INFO - 2025-07-01 10:16:32 --> Controller Class Initialized
INFO - 2025-07-01 10:16:32 --> Helper loaded: form_helper
INFO - 2025-07-01 10:16:32 --> Helper loaded: form_helper
INFO - 2025-07-01 10:16:32 --> Form Validation Class Initialized
INFO - 2025-07-01 10:16:32 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:16:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2025-07-01 10:16:32 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:16:32 --> Database Driver Class Initialized
INFO - 2025-07-01 10:16:32 --> Database Driver Class Initialized
INFO - 2025-07-01 10:16:32 --> Model "Crud" initialized
INFO - 2025-07-01 10:16:32 --> Model "Crud" initialized
ERROR - 2025-07-01 10:16:32 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
ERROR - 2025-07-01 10:16:32 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-07-01 10:16:32 --> Language file loaded: language/english/db_lang.php
INFO - 2025-07-01 10:16:32 --> Language file loaded: language/english/db_lang.php
INFO - 2025-07-01 10:16:41 --> Config Class Initialized
INFO - 2025-07-01 10:16:41 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:16:41 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:16:41 --> Utf8 Class Initialized
INFO - 2025-07-01 10:16:41 --> URI Class Initialized
INFO - 2025-07-01 10:16:41 --> Router Class Initialized
INFO - 2025-07-01 10:16:41 --> Output Class Initialized
INFO - 2025-07-01 10:16:41 --> Security Class Initialized
DEBUG - 2025-07-01 10:16:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:16:41 --> Input Class Initialized
INFO - 2025-07-01 10:16:41 --> Language Class Initialized
INFO - 2025-07-01 10:16:41 --> Loader Class Initialized
INFO - 2025-07-01 10:16:41 --> Helper loaded: url_helper
INFO - 2025-07-01 10:16:41 --> Helper loaded: file_helper
INFO - 2025-07-01 10:16:41 --> Config Class Initialized
INFO - 2025-07-01 10:16:41 --> Hooks Class Initialized
INFO - 2025-07-01 10:16:41 --> Database Driver Class Initialized
DEBUG - 2025-07-01 10:16:41 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:16:41 --> Utf8 Class Initialized
INFO - 2025-07-01 10:16:41 --> URI Class Initialized
INFO - 2025-07-01 10:16:41 --> Router Class Initialized
INFO - 2025-07-01 10:16:41 --> Output Class Initialized
INFO - 2025-07-01 10:16:41 --> Security Class Initialized
DEBUG - 2025-07-01 10:16:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:16:41 --> Input Class Initialized
INFO - 2025-07-01 10:16:41 --> Language Class Initialized
INFO - 2025-07-01 10:16:41 --> Loader Class Initialized
INFO - 2025-07-01 10:16:41 --> Helper loaded: url_helper
INFO - 2025-07-01 10:16:41 --> Helper loaded: file_helper
INFO - 2025-07-01 10:16:41 --> Database Driver Class Initialized
INFO - 2025-07-01 10:16:41 --> Email Class Initialized
DEBUG - 2025-07-01 10:16:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:16:41 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:16:41 --> Controller Class Initialized
INFO - 2025-07-01 10:16:41 --> Helper loaded: form_helper
INFO - 2025-07-01 10:16:41 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:16:41 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:16:41 --> Database Driver Class Initialized
INFO - 2025-07-01 10:16:41 --> Email Class Initialized
DEBUG - 2025-07-01 10:16:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:16:41 --> Model "Crud" initialized
ERROR - 2025-07-01 10:16:41 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-07-01 10:16:41 --> Language file loaded: language/english/db_lang.php
INFO - 2025-07-01 10:16:41 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:16:41 --> Controller Class Initialized
INFO - 2025-07-01 10:16:41 --> Helper loaded: form_helper
INFO - 2025-07-01 10:16:41 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:16:41 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:16:41 --> Database Driver Class Initialized
INFO - 2025-07-01 10:16:41 --> Model "Crud" initialized
ERROR - 2025-07-01 10:16:41 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-07-01 10:16:41 --> Language file loaded: language/english/db_lang.php
INFO - 2025-07-01 10:16:51 --> Config Class Initialized
INFO - 2025-07-01 10:16:51 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:16:51 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:16:51 --> Utf8 Class Initialized
INFO - 2025-07-01 10:16:51 --> URI Class Initialized
INFO - 2025-07-01 10:16:51 --> Router Class Initialized
INFO - 2025-07-01 10:16:51 --> Output Class Initialized
INFO - 2025-07-01 10:16:51 --> Security Class Initialized
DEBUG - 2025-07-01 10:16:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:16:51 --> Input Class Initialized
INFO - 2025-07-01 10:16:51 --> Language Class Initialized
INFO - 2025-07-01 10:16:51 --> Loader Class Initialized
INFO - 2025-07-01 10:16:51 --> Helper loaded: url_helper
INFO - 2025-07-01 10:16:51 --> Helper loaded: file_helper
INFO - 2025-07-01 10:16:51 --> Database Driver Class Initialized
INFO - 2025-07-01 10:16:51 --> Config Class Initialized
INFO - 2025-07-01 10:16:51 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:16:51 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:16:51 --> Utf8 Class Initialized
INFO - 2025-07-01 10:16:51 --> URI Class Initialized
INFO - 2025-07-01 10:16:51 --> Router Class Initialized
INFO - 2025-07-01 10:16:51 --> Output Class Initialized
INFO - 2025-07-01 10:16:51 --> Security Class Initialized
DEBUG - 2025-07-01 10:16:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:16:51 --> Input Class Initialized
INFO - 2025-07-01 10:16:51 --> Language Class Initialized
INFO - 2025-07-01 10:16:51 --> Loader Class Initialized
INFO - 2025-07-01 10:16:51 --> Helper loaded: url_helper
INFO - 2025-07-01 10:16:51 --> Helper loaded: file_helper
INFO - 2025-07-01 10:16:51 --> Database Driver Class Initialized
INFO - 2025-07-01 10:16:51 --> Email Class Initialized
DEBUG - 2025-07-01 10:16:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:16:51 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:16:51 --> Controller Class Initialized
INFO - 2025-07-01 10:16:51 --> Helper loaded: form_helper
INFO - 2025-07-01 10:16:51 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:16:51 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:16:51 --> Database Driver Class Initialized
INFO - 2025-07-01 10:16:51 --> Email Class Initialized
DEBUG - 2025-07-01 10:16:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:16:51 --> Model "Crud" initialized
ERROR - 2025-07-01 10:16:51 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-07-01 10:16:51 --> Language file loaded: language/english/db_lang.php
INFO - 2025-07-01 10:16:51 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:16:51 --> Controller Class Initialized
INFO - 2025-07-01 10:16:51 --> Helper loaded: form_helper
INFO - 2025-07-01 10:16:51 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:16:51 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:16:51 --> Database Driver Class Initialized
INFO - 2025-07-01 10:16:51 --> Model "Crud" initialized
ERROR - 2025-07-01 10:16:51 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-07-01 10:16:51 --> Language file loaded: language/english/db_lang.php
INFO - 2025-07-01 10:17:01 --> Config Class Initialized
INFO - 2025-07-01 10:17:01 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:01 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:01 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:01 --> Config Class Initialized
INFO - 2025-07-01 10:17:01 --> URI Class Initialized
INFO - 2025-07-01 10:17:01 --> Hooks Class Initialized
INFO - 2025-07-01 10:17:01 --> Router Class Initialized
INFO - 2025-07-01 10:17:01 --> Output Class Initialized
INFO - 2025-07-01 10:17:01 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:01 --> Input Class Initialized
INFO - 2025-07-01 10:17:01 --> Language Class Initialized
DEBUG - 2025-07-01 10:17:01 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:01 --> Loader Class Initialized
INFO - 2025-07-01 10:17:01 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:01 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:01 --> URI Class Initialized
INFO - 2025-07-01 10:17:01 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:01 --> Router Class Initialized
INFO - 2025-07-01 10:17:01 --> Output Class Initialized
INFO - 2025-07-01 10:17:01 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:01 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:01 --> Input Class Initialized
INFO - 2025-07-01 10:17:01 --> Language Class Initialized
INFO - 2025-07-01 10:17:01 --> Loader Class Initialized
INFO - 2025-07-01 10:17:01 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:01 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:01 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:01 --> Email Class Initialized
DEBUG - 2025-07-01 10:17:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:01 --> Controller Class Initialized
INFO - 2025-07-01 10:17:01 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:01 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:01 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:01 --> Email Class Initialized
DEBUG - 2025-07-01 10:17:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:01 --> Model "Crud" initialized
ERROR - 2025-07-01 10:17:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-07-01 10:17:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-07-01 10:17:01 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:01 --> Controller Class Initialized
INFO - 2025-07-01 10:17:01 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:01 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:01 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:01 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:01 --> Model "Crud" initialized
ERROR - 2025-07-01 10:17:01 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-07-01 10:17:01 --> Language file loaded: language/english/db_lang.php
INFO - 2025-07-01 10:17:11 --> Config Class Initialized
INFO - 2025-07-01 10:17:11 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:11 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:11 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:11 --> URI Class Initialized
INFO - 2025-07-01 10:17:11 --> Router Class Initialized
INFO - 2025-07-01 10:17:11 --> Output Class Initialized
INFO - 2025-07-01 10:17:11 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:11 --> Input Class Initialized
INFO - 2025-07-01 10:17:11 --> Language Class Initialized
INFO - 2025-07-01 10:17:11 --> Loader Class Initialized
INFO - 2025-07-01 10:17:11 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:11 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:11 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:11 --> Config Class Initialized
INFO - 2025-07-01 10:17:11 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:11 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:11 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:11 --> URI Class Initialized
INFO - 2025-07-01 10:17:11 --> Router Class Initialized
INFO - 2025-07-01 10:17:11 --> Output Class Initialized
INFO - 2025-07-01 10:17:11 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:11 --> Input Class Initialized
INFO - 2025-07-01 10:17:11 --> Language Class Initialized
INFO - 2025-07-01 10:17:11 --> Loader Class Initialized
INFO - 2025-07-01 10:17:11 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:11 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:11 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:11 --> Email Class Initialized
DEBUG - 2025-07-01 10:17:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:11 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:11 --> Controller Class Initialized
INFO - 2025-07-01 10:17:11 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:11 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:11 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:11 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:11 --> Email Class Initialized
DEBUG - 2025-07-01 10:17:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:11 --> Model "Crud" initialized
ERROR - 2025-07-01 10:17:11 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-07-01 10:17:11 --> Language file loaded: language/english/db_lang.php
INFO - 2025-07-01 10:17:11 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:11 --> Controller Class Initialized
INFO - 2025-07-01 10:17:11 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:11 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:11 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:11 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:11 --> Model "Crud" initialized
ERROR - 2025-07-01 10:17:11 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-07-01 10:17:11 --> Language file loaded: language/english/db_lang.php
INFO - 2025-07-01 10:17:13 --> Config Class Initialized
INFO - 2025-07-01 10:17:13 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:13 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:13 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:13 --> URI Class Initialized
INFO - 2025-07-01 10:17:13 --> Router Class Initialized
INFO - 2025-07-01 10:17:13 --> Output Class Initialized
INFO - 2025-07-01 10:17:13 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:13 --> Input Class Initialized
INFO - 2025-07-01 10:17:13 --> Language Class Initialized
INFO - 2025-07-01 10:17:13 --> Loader Class Initialized
INFO - 2025-07-01 10:17:13 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:13 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:13 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:13 --> Email Class Initialized
DEBUG - 2025-07-01 10:17:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:13 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:13 --> Controller Class Initialized
INFO - 2025-07-01 10:17:13 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:13 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:13 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:13 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:13 --> Model "Crud" initialized
INFO - 2025-07-01 10:17:13 --> Config Class Initialized
INFO - 2025-07-01 10:17:13 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:13 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:13 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:13 --> URI Class Initialized
INFO - 2025-07-01 10:17:13 --> Router Class Initialized
INFO - 2025-07-01 10:17:13 --> Output Class Initialized
INFO - 2025-07-01 10:17:13 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:13 --> Input Class Initialized
INFO - 2025-07-01 10:17:13 --> Language Class Initialized
INFO - 2025-07-01 10:17:13 --> Loader Class Initialized
INFO - 2025-07-01 10:17:13 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:13 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:13 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:13 --> Email Class Initialized
DEBUG - 2025-07-01 10:17:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:13 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:13 --> Controller Class Initialized
INFO - 2025-07-01 10:17:13 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:13 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:13 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:13 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:13 --> Model "Crud" initialized
ERROR - 2025-07-01 10:17:13 --> Severity: Notice --> Trying to get property 'theme' of non-object /var/www/html/hris_lnd/application/views/template/header.php 30
INFO - 2025-07-01 10:17:13 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-07-01 10:17:13 --> File loaded: /var/www/html/hris_lnd/application/views/error_session.php
INFO - 2025-07-01 10:17:13 --> Final output sent to browser
DEBUG - 2025-07-01 10:17:13 --> Total execution time: 0.0748
INFO - 2025-07-01 10:17:13 --> Config Class Initialized
INFO - 2025-07-01 10:17:13 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:13 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:13 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:13 --> URI Class Initialized
INFO - 2025-07-01 10:17:13 --> Router Class Initialized
INFO - 2025-07-01 10:17:13 --> Output Class Initialized
INFO - 2025-07-01 10:17:13 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:13 --> Input Class Initialized
INFO - 2025-07-01 10:17:13 --> Language Class Initialized
ERROR - 2025-07-01 10:17:13 --> 404 Page Not Found: %3Cdiv%20style=/index
INFO - 2025-07-01 10:17:15 --> Config Class Initialized
INFO - 2025-07-01 10:17:15 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:15 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:15 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:15 --> URI Class Initialized
INFO - 2025-07-01 10:17:15 --> Router Class Initialized
INFO - 2025-07-01 10:17:15 --> Output Class Initialized
INFO - 2025-07-01 10:17:15 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:15 --> Input Class Initialized
INFO - 2025-07-01 10:17:15 --> Language Class Initialized
INFO - 2025-07-01 10:17:15 --> Loader Class Initialized
INFO - 2025-07-01 10:17:15 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:15 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:15 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:15 --> Email Class Initialized
DEBUG - 2025-07-01 10:17:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:15 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:15 --> Controller Class Initialized
INFO - 2025-07-01 10:17:15 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:15 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:15 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:15 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:15 --> Model "Crud" initialized
INFO - 2025-07-01 10:17:15 --> Config Class Initialized
INFO - 2025-07-01 10:17:15 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:15 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:15 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:15 --> URI Class Initialized
INFO - 2025-07-01 10:17:15 --> Router Class Initialized
INFO - 2025-07-01 10:17:15 --> Output Class Initialized
INFO - 2025-07-01 10:17:15 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:15 --> Input Class Initialized
INFO - 2025-07-01 10:17:15 --> Language Class Initialized
INFO - 2025-07-01 10:17:15 --> Loader Class Initialized
INFO - 2025-07-01 10:17:15 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:15 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:15 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:15 --> Email Class Initialized
DEBUG - 2025-07-01 10:17:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:15 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:15 --> Controller Class Initialized
INFO - 2025-07-01 10:17:15 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:15 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:15 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:15 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:15 --> Model "Crud" initialized
DEBUG - 2025-07-01 10:17:15 --> Email class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:15 --> Model "Emails" initialized
ERROR - 2025-07-01 10:17:15 --> Unable to delete cache file for login
INFO - 2025-07-01 10:17:15 --> File loaded: /var/www/html/hris_lnd/application/views/login.php
INFO - 2025-07-01 10:17:15 --> Final output sent to browser
DEBUG - 2025-07-01 10:17:15 --> Total execution time: 0.0286
INFO - 2025-07-01 10:17:17 --> Config Class Initialized
INFO - 2025-07-01 10:17:17 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:17 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:17 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:17 --> URI Class Initialized
INFO - 2025-07-01 10:17:17 --> Router Class Initialized
INFO - 2025-07-01 10:17:17 --> Output Class Initialized
INFO - 2025-07-01 10:17:17 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:17 --> Input Class Initialized
INFO - 2025-07-01 10:17:17 --> Language Class Initialized
INFO - 2025-07-01 10:17:17 --> Loader Class Initialized
INFO - 2025-07-01 10:17:17 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:17 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:17 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:17 --> Email Class Initialized
DEBUG - 2025-07-01 10:17:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:17 --> Controller Class Initialized
INFO - 2025-07-01 10:17:17 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:17 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:17 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:17 --> Model "Crud" initialized
DEBUG - 2025-07-01 10:17:17 --> Email class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:17 --> Model "Emails" initialized
ERROR - 2025-07-01 10:17:17 --> Unable to delete cache file for login
INFO - 2025-07-01 10:17:18 --> Config Class Initialized
INFO - 2025-07-01 10:17:18 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:18 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:18 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:18 --> URI Class Initialized
INFO - 2025-07-01 10:17:18 --> Router Class Initialized
INFO - 2025-07-01 10:17:18 --> Output Class Initialized
INFO - 2025-07-01 10:17:18 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:18 --> Input Class Initialized
INFO - 2025-07-01 10:17:18 --> Language Class Initialized
INFO - 2025-07-01 10:17:18 --> Loader Class Initialized
INFO - 2025-07-01 10:17:18 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:18 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:18 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:18 --> Email Class Initialized
DEBUG - 2025-07-01 10:17:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:18 --> Controller Class Initialized
INFO - 2025-07-01 10:17:18 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:18 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:18 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:18 --> Model "Crud" initialized
INFO - 2025-07-01 10:17:18 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-07-01 10:17:18 --> File loaded: /var/www/html/hris_lnd/application/views/home.php
INFO - 2025-07-01 10:17:18 --> Final output sent to browser
DEBUG - 2025-07-01 10:17:18 --> Total execution time: 0.0394
INFO - 2025-07-01 10:17:18 --> Config Class Initialized
INFO - 2025-07-01 10:17:18 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:18 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:18 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:18 --> URI Class Initialized
INFO - 2025-07-01 10:17:18 --> Router Class Initialized
INFO - 2025-07-01 10:17:18 --> Output Class Initialized
INFO - 2025-07-01 10:17:18 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:18 --> Input Class Initialized
INFO - 2025-07-01 10:17:18 --> Language Class Initialized
INFO - 2025-07-01 10:17:18 --> Config Class Initialized
INFO - 2025-07-01 10:17:18 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:18 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:18 --> Loader Class Initialized
INFO - 2025-07-01 10:17:18 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:18 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:18 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:18 --> URI Class Initialized
INFO - 2025-07-01 10:17:18 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:18 --> Router Class Initialized
INFO - 2025-07-01 10:17:18 --> Output Class Initialized
INFO - 2025-07-01 10:17:18 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:18 --> Input Class Initialized
INFO - 2025-07-01 10:17:18 --> Language Class Initialized
INFO - 2025-07-01 10:17:18 --> Loader Class Initialized
INFO - 2025-07-01 10:17:18 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:18 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:18 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:18 --> Config Class Initialized
INFO - 2025-07-01 10:17:18 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:18 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:18 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:18 --> URI Class Initialized
INFO - 2025-07-01 10:17:18 --> Router Class Initialized
INFO - 2025-07-01 10:17:18 --> Output Class Initialized
INFO - 2025-07-01 10:17:18 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:18 --> Input Class Initialized
INFO - 2025-07-01 10:17:18 --> Language Class Initialized
INFO - 2025-07-01 10:17:18 --> Loader Class Initialized
INFO - 2025-07-01 10:17:18 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:18 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:18 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:18 --> Email Class Initialized
DEBUG - 2025-07-01 10:17:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:18 --> Controller Class Initialized
INFO - 2025-07-01 10:17:18 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:18 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:18 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:18 --> Email Class Initialized
DEBUG - 2025-07-01 10:17:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:18 --> Email Class Initialized
INFO - 2025-07-01 10:17:18 --> Config Class Initialized
DEBUG - 2025-07-01 10:17:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:18 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:18 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:18 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:18 --> URI Class Initialized
INFO - 2025-07-01 10:17:18 --> Router Class Initialized
INFO - 2025-07-01 10:17:18 --> Output Class Initialized
INFO - 2025-07-01 10:17:18 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:18 --> Input Class Initialized
INFO - 2025-07-01 10:17:18 --> Language Class Initialized
INFO - 2025-07-01 10:17:18 --> Model "Crud" initialized
INFO - 2025-07-01 10:17:18 --> Loader Class Initialized
INFO - 2025-07-01 10:17:18 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:18 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:18 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:18 --> Email Class Initialized
DEBUG - 2025-07-01 10:17:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:18 --> Config Class Initialized
INFO - 2025-07-01 10:17:18 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:18 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:18 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:18 --> URI Class Initialized
INFO - 2025-07-01 10:17:18 --> Router Class Initialized
INFO - 2025-07-01 10:17:18 --> Output Class Initialized
INFO - 2025-07-01 10:17:18 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:18 --> Input Class Initialized
INFO - 2025-07-01 10:17:18 --> Language Class Initialized
INFO - 2025-07-01 10:17:18 --> Loader Class Initialized
INFO - 2025-07-01 10:17:18 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:18 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:18 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:18 --> Email Class Initialized
DEBUG - 2025-07-01 10:17:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:18 --> Final output sent to browser
DEBUG - 2025-07-01 10:17:18 --> Total execution time: 0.3051
INFO - 2025-07-01 10:17:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:18 --> Controller Class Initialized
INFO - 2025-07-01 10:17:18 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:18 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:18 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:18 --> Model "Crud" initialized
INFO - 2025-07-01 10:17:18 --> Config Class Initialized
INFO - 2025-07-01 10:17:18 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:18 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:18 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:18 --> URI Class Initialized
INFO - 2025-07-01 10:17:18 --> Router Class Initialized
INFO - 2025-07-01 10:17:18 --> Output Class Initialized
INFO - 2025-07-01 10:17:18 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:18 --> Input Class Initialized
INFO - 2025-07-01 10:17:18 --> Language Class Initialized
INFO - 2025-07-01 10:17:18 --> Loader Class Initialized
INFO - 2025-07-01 10:17:18 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:18 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:18 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:18 --> Email Class Initialized
DEBUG - 2025-07-01 10:17:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:18 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-07-01 10:17:18 --> File loaded: /var/www/html/hris_lnd/application/views/dashboard/dashboard.php
INFO - 2025-07-01 10:17:18 --> Final output sent to browser
DEBUG - 2025-07-01 10:17:18 --> Total execution time: 0.4949
INFO - 2025-07-01 10:17:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:18 --> Controller Class Initialized
INFO - 2025-07-01 10:17:18 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:18 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:18 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:18 --> Model "Crud" initialized
INFO - 2025-07-01 10:17:18 --> Config Class Initialized
INFO - 2025-07-01 10:17:18 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:18 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:18 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:18 --> URI Class Initialized
INFO - 2025-07-01 10:17:18 --> Router Class Initialized
INFO - 2025-07-01 10:17:18 --> Output Class Initialized
INFO - 2025-07-01 10:17:18 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:18 --> Input Class Initialized
INFO - 2025-07-01 10:17:18 --> Language Class Initialized
INFO - 2025-07-01 10:17:18 --> Loader Class Initialized
INFO - 2025-07-01 10:17:18 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:18 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:18 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:18 --> Email Class Initialized
DEBUG - 2025-07-01 10:17:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:18 --> Final output sent to browser
DEBUG - 2025-07-01 10:17:18 --> Total execution time: 0.6252
INFO - 2025-07-01 10:17:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:18 --> Controller Class Initialized
INFO - 2025-07-01 10:17:18 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:18 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:18 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:18 --> Model "Crud" initialized
INFO - 2025-07-01 10:17:18 --> Final output sent to browser
DEBUG - 2025-07-01 10:17:18 --> Total execution time: 0.6337
INFO - 2025-07-01 10:17:19 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:19 --> Controller Class Initialized
INFO - 2025-07-01 10:17:19 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:19 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:19 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:19 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:19 --> Model "Crud" initialized
INFO - 2025-07-01 10:17:19 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:19 --> Controller Class Initialized
INFO - 2025-07-01 10:17:19 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:19 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:19 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:19 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:19 --> Model "Crud" initialized
INFO - 2025-07-01 10:17:19 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-07-01 10:17:19 --> File loaded: /var/www/html/hris_lnd/application/views/dashboard/dashboard.php
INFO - 2025-07-01 10:17:19 --> Final output sent to browser
DEBUG - 2025-07-01 10:17:19 --> Total execution time: 0.3817
INFO - 2025-07-01 10:17:19 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:19 --> Controller Class Initialized
INFO - 2025-07-01 10:17:19 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:19 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:19 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:19 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:19 --> Model "Crud" initialized
INFO - 2025-07-01 10:17:19 --> Config Class Initialized
INFO - 2025-07-01 10:17:19 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:19 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:19 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:19 --> URI Class Initialized
INFO - 2025-07-01 10:17:19 --> Router Class Initialized
INFO - 2025-07-01 10:17:19 --> Output Class Initialized
INFO - 2025-07-01 10:17:19 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:19 --> Input Class Initialized
INFO - 2025-07-01 10:17:19 --> Language Class Initialized
INFO - 2025-07-01 10:17:19 --> Loader Class Initialized
INFO - 2025-07-01 10:17:19 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:19 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:19 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:19 --> Email Class Initialized
DEBUG - 2025-07-01 10:17:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:19 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-07-01 10:17:19 --> File loaded: /var/www/html/hris_lnd/application/views/dashboard/dashboard.php
INFO - 2025-07-01 10:17:19 --> Final output sent to browser
DEBUG - 2025-07-01 10:17:19 --> Total execution time: 0.3162
INFO - 2025-07-01 10:17:19 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:19 --> Controller Class Initialized
INFO - 2025-07-01 10:17:19 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:19 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:19 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:19 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:19 --> Model "Crud" initialized
INFO - 2025-07-01 10:17:20 --> Config Class Initialized
INFO - 2025-07-01 10:17:20 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:20 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:20 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:20 --> URI Class Initialized
INFO - 2025-07-01 10:17:20 --> Router Class Initialized
INFO - 2025-07-01 10:17:20 --> Output Class Initialized
INFO - 2025-07-01 10:17:20 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:20 --> Input Class Initialized
INFO - 2025-07-01 10:17:20 --> Language Class Initialized
INFO - 2025-07-01 10:17:20 --> Loader Class Initialized
INFO - 2025-07-01 10:17:20 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:20 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:20 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:20 --> Email Class Initialized
DEBUG - 2025-07-01 10:17:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:20 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:20 --> Controller Class Initialized
INFO - 2025-07-01 10:17:20 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:20 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:20 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:20 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:20 --> Config Class Initialized
INFO - 2025-07-01 10:17:20 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:20 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:20 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:20 --> URI Class Initialized
INFO - 2025-07-01 10:17:20 --> Router Class Initialized
INFO - 2025-07-01 10:17:20 --> Output Class Initialized
INFO - 2025-07-01 10:17:20 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:20 --> Input Class Initialized
INFO - 2025-07-01 10:17:20 --> Language Class Initialized
INFO - 2025-07-01 10:17:20 --> Loader Class Initialized
INFO - 2025-07-01 10:17:20 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:20 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:20 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:20 --> Model "Crud" initialized
INFO - 2025-07-01 10:17:20 --> Email Class Initialized
DEBUG - 2025-07-01 10:17:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:20 --> Config Class Initialized
INFO - 2025-07-01 10:17:20 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:20 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:20 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:20 --> URI Class Initialized
INFO - 2025-07-01 10:17:20 --> Router Class Initialized
INFO - 2025-07-01 10:17:20 --> Output Class Initialized
INFO - 2025-07-01 10:17:20 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:20 --> Input Class Initialized
INFO - 2025-07-01 10:17:20 --> Language Class Initialized
INFO - 2025-07-01 10:17:20 --> Loader Class Initialized
INFO - 2025-07-01 10:17:20 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:20 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:20 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:20 --> Email Class Initialized
DEBUG - 2025-07-01 10:17:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:20 --> Config Class Initialized
INFO - 2025-07-01 10:17:20 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:20 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:20 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:20 --> URI Class Initialized
INFO - 2025-07-01 10:17:20 --> Router Class Initialized
INFO - 2025-07-01 10:17:20 --> Output Class Initialized
INFO - 2025-07-01 10:17:20 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:20 --> Input Class Initialized
INFO - 2025-07-01 10:17:20 --> Language Class Initialized
INFO - 2025-07-01 10:17:20 --> Loader Class Initialized
INFO - 2025-07-01 10:17:20 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:20 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:20 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:20 --> Email Class Initialized
DEBUG - 2025-07-01 10:17:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:20 --> Final output sent to browser
DEBUG - 2025-07-01 10:17:20 --> Total execution time: 0.1082
INFO - 2025-07-01 10:17:20 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:20 --> Controller Class Initialized
INFO - 2025-07-01 10:17:20 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:20 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:20 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:20 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:20 --> Model "Crud" initialized
INFO - 2025-07-01 10:17:20 --> Final output sent to browser
DEBUG - 2025-07-01 10:17:20 --> Total execution time: 0.1079
INFO - 2025-07-01 10:17:20 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:20 --> Controller Class Initialized
INFO - 2025-07-01 10:17:20 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:20 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:20 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:20 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:20 --> Model "Crud" initialized
INFO - 2025-07-01 10:17:20 --> Final output sent to browser
DEBUG - 2025-07-01 10:17:20 --> Total execution time: 0.1169
INFO - 2025-07-01 10:17:20 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:20 --> Controller Class Initialized
INFO - 2025-07-01 10:17:20 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:20 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:20 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:20 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:20 --> Model "Crud" initialized
INFO - 2025-07-01 10:17:20 --> Final output sent to browser
DEBUG - 2025-07-01 10:17:20 --> Total execution time: 0.0920
INFO - 2025-07-01 10:17:28 --> Config Class Initialized
INFO - 2025-07-01 10:17:28 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:28 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:28 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:28 --> URI Class Initialized
INFO - 2025-07-01 10:17:28 --> Router Class Initialized
INFO - 2025-07-01 10:17:28 --> Output Class Initialized
INFO - 2025-07-01 10:17:28 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:28 --> Input Class Initialized
INFO - 2025-07-01 10:17:28 --> Language Class Initialized
INFO - 2025-07-01 10:17:28 --> Loader Class Initialized
INFO - 2025-07-01 10:17:28 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:28 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:28 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:28 --> Email Class Initialized
DEBUG - 2025-07-01 10:17:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:28 --> Config Class Initialized
INFO - 2025-07-01 10:17:28 --> Controller Class Initialized
INFO - 2025-07-01 10:17:28 --> Hooks Class Initialized
INFO - 2025-07-01 10:17:28 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:28 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:28 --> Database Driver Class Initialized
DEBUG - 2025-07-01 10:17:28 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:28 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:28 --> URI Class Initialized
INFO - 2025-07-01 10:17:28 --> Router Class Initialized
INFO - 2025-07-01 10:17:28 --> Output Class Initialized
INFO - 2025-07-01 10:17:28 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:28 --> Input Class Initialized
INFO - 2025-07-01 10:17:28 --> Language Class Initialized
INFO - 2025-07-01 10:17:28 --> Loader Class Initialized
INFO - 2025-07-01 10:17:28 --> Model "Crud" initialized
INFO - 2025-07-01 10:17:28 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:28 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:28 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:28 --> Email Class Initialized
DEBUG - 2025-07-01 10:17:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:28 --> Final output sent to browser
DEBUG - 2025-07-01 10:17:28 --> Total execution time: 0.0281
INFO - 2025-07-01 10:17:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:28 --> Controller Class Initialized
INFO - 2025-07-01 10:17:28 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:28 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:28 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:28 --> Model "Crud" initialized
INFO - 2025-07-01 10:17:28 --> Final output sent to browser
DEBUG - 2025-07-01 10:17:28 --> Total execution time: 0.0522
INFO - 2025-07-01 10:17:38 --> Config Class Initialized
INFO - 2025-07-01 10:17:38 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:38 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:38 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:38 --> URI Class Initialized
INFO - 2025-07-01 10:17:38 --> Router Class Initialized
INFO - 2025-07-01 10:17:38 --> Output Class Initialized
INFO - 2025-07-01 10:17:38 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:38 --> Input Class Initialized
INFO - 2025-07-01 10:17:38 --> Language Class Initialized
INFO - 2025-07-01 10:17:38 --> Loader Class Initialized
INFO - 2025-07-01 10:17:38 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:38 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:38 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:38 --> Config Class Initialized
INFO - 2025-07-01 10:17:38 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:38 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:38 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:38 --> Email Class Initialized
INFO - 2025-07-01 10:17:38 --> URI Class Initialized
DEBUG - 2025-07-01 10:17:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:38 --> Controller Class Initialized
INFO - 2025-07-01 10:17:38 --> Router Class Initialized
INFO - 2025-07-01 10:17:38 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:38 --> Output Class Initialized
INFO - 2025-07-01 10:17:38 --> Form Validation Class Initialized
INFO - 2025-07-01 10:17:38 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:38 --> Database Driver Class Initialized
DEBUG - 2025-07-01 10:17:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:38 --> Input Class Initialized
INFO - 2025-07-01 10:17:38 --> Language Class Initialized
INFO - 2025-07-01 10:17:38 --> Loader Class Initialized
INFO - 2025-07-01 10:17:38 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:38 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:38 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:38 --> Email Class Initialized
DEBUG - 2025-07-01 10:17:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:38 --> Model "Crud" initialized
INFO - 2025-07-01 10:17:38 --> Final output sent to browser
DEBUG - 2025-07-01 10:17:38 --> Total execution time: 0.0325
INFO - 2025-07-01 10:17:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:38 --> Controller Class Initialized
INFO - 2025-07-01 10:17:38 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:38 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:38 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:38 --> Model "Crud" initialized
INFO - 2025-07-01 10:17:38 --> Final output sent to browser
DEBUG - 2025-07-01 10:17:38 --> Total execution time: 0.0536
INFO - 2025-07-01 10:17:48 --> Config Class Initialized
INFO - 2025-07-01 10:17:48 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:48 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:48 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:48 --> URI Class Initialized
INFO - 2025-07-01 10:17:48 --> Router Class Initialized
INFO - 2025-07-01 10:17:48 --> Output Class Initialized
INFO - 2025-07-01 10:17:48 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:48 --> Input Class Initialized
INFO - 2025-07-01 10:17:48 --> Language Class Initialized
INFO - 2025-07-01 10:17:48 --> Loader Class Initialized
INFO - 2025-07-01 10:17:48 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:48 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:48 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:48 --> Config Class Initialized
INFO - 2025-07-01 10:17:48 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:48 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:48 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:48 --> URI Class Initialized
INFO - 2025-07-01 10:17:48 --> Router Class Initialized
INFO - 2025-07-01 10:17:48 --> Output Class Initialized
INFO - 2025-07-01 10:17:48 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:48 --> Input Class Initialized
INFO - 2025-07-01 10:17:48 --> Language Class Initialized
INFO - 2025-07-01 10:17:48 --> Loader Class Initialized
INFO - 2025-07-01 10:17:48 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:48 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:48 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:48 --> Email Class Initialized
DEBUG - 2025-07-01 10:17:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:48 --> Controller Class Initialized
INFO - 2025-07-01 10:17:48 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:48 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:48 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:48 --> Email Class Initialized
DEBUG - 2025-07-01 10:17:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:48 --> Model "Crud" initialized
INFO - 2025-07-01 10:17:48 --> Final output sent to browser
DEBUG - 2025-07-01 10:17:48 --> Total execution time: 0.0529
INFO - 2025-07-01 10:17:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:48 --> Controller Class Initialized
INFO - 2025-07-01 10:17:48 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:48 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:48 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:48 --> Model "Crud" initialized
INFO - 2025-07-01 10:17:48 --> Final output sent to browser
DEBUG - 2025-07-01 10:17:48 --> Total execution time: 0.0990
INFO - 2025-07-01 10:17:48 --> Config Class Initialized
INFO - 2025-07-01 10:17:48 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:48 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:48 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:48 --> URI Class Initialized
INFO - 2025-07-01 10:17:48 --> Router Class Initialized
INFO - 2025-07-01 10:17:48 --> Output Class Initialized
INFO - 2025-07-01 10:17:48 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:48 --> Input Class Initialized
INFO - 2025-07-01 10:17:48 --> Language Class Initialized
INFO - 2025-07-01 10:17:48 --> Loader Class Initialized
INFO - 2025-07-01 10:17:48 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:48 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:48 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:48 --> Email Class Initialized
DEBUG - 2025-07-01 10:17:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:48 --> Controller Class Initialized
INFO - 2025-07-01 10:17:48 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:48 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:48 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:48 --> Model "Crud" initialized
INFO - 2025-07-01 10:17:48 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-07-01 10:17:48 --> File loaded: /var/www/html/hris_lnd/application/views/requitment/requirements.php
INFO - 2025-07-01 10:17:48 --> Final output sent to browser
DEBUG - 2025-07-01 10:17:48 --> Total execution time: 0.0540
INFO - 2025-07-01 10:17:48 --> Config Class Initialized
INFO - 2025-07-01 10:17:48 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:48 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:48 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:48 --> URI Class Initialized
INFO - 2025-07-01 10:17:48 --> Router Class Initialized
INFO - 2025-07-01 10:17:48 --> Output Class Initialized
INFO - 2025-07-01 10:17:48 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:48 --> Input Class Initialized
INFO - 2025-07-01 10:17:48 --> Language Class Initialized
INFO - 2025-07-01 10:17:48 --> Loader Class Initialized
INFO - 2025-07-01 10:17:48 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:48 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:48 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:48 --> Email Class Initialized
DEBUG - 2025-07-01 10:17:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:48 --> Controller Class Initialized
INFO - 2025-07-01 10:17:48 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:48 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:48 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:48 --> Model "Crud" initialized
INFO - 2025-07-01 10:17:48 --> Final output sent to browser
DEBUG - 2025-07-01 10:17:48 --> Total execution time: 0.0961
INFO - 2025-07-01 10:17:49 --> Config Class Initialized
INFO - 2025-07-01 10:17:49 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:49 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:49 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:49 --> URI Class Initialized
INFO - 2025-07-01 10:17:49 --> Router Class Initialized
INFO - 2025-07-01 10:17:49 --> Output Class Initialized
INFO - 2025-07-01 10:17:49 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:49 --> Input Class Initialized
INFO - 2025-07-01 10:17:49 --> Language Class Initialized
INFO - 2025-07-01 10:17:49 --> Loader Class Initialized
INFO - 2025-07-01 10:17:49 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:49 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:49 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:49 --> Email Class Initialized
DEBUG - 2025-07-01 10:17:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:49 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:49 --> Controller Class Initialized
INFO - 2025-07-01 10:17:49 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:49 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:49 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:49 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:49 --> Model "Crud" initialized
INFO - 2025-07-01 10:17:49 --> Final output sent to browser
DEBUG - 2025-07-01 10:17:49 --> Total execution time: 0.0168
INFO - 2025-07-01 10:17:58 --> Config Class Initialized
INFO - 2025-07-01 10:17:58 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:58 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:58 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:58 --> URI Class Initialized
INFO - 2025-07-01 10:17:58 --> Router Class Initialized
INFO - 2025-07-01 10:17:58 --> Output Class Initialized
INFO - 2025-07-01 10:17:58 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:58 --> Input Class Initialized
INFO - 2025-07-01 10:17:58 --> Language Class Initialized
INFO - 2025-07-01 10:17:58 --> Loader Class Initialized
INFO - 2025-07-01 10:17:58 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:58 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:58 --> Config Class Initialized
INFO - 2025-07-01 10:17:58 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:17:58 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:17:58 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:58 --> Utf8 Class Initialized
INFO - 2025-07-01 10:17:58 --> URI Class Initialized
INFO - 2025-07-01 10:17:58 --> Router Class Initialized
INFO - 2025-07-01 10:17:58 --> Output Class Initialized
INFO - 2025-07-01 10:17:58 --> Security Class Initialized
DEBUG - 2025-07-01 10:17:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:17:58 --> Input Class Initialized
INFO - 2025-07-01 10:17:58 --> Language Class Initialized
INFO - 2025-07-01 10:17:58 --> Loader Class Initialized
INFO - 2025-07-01 10:17:58 --> Helper loaded: url_helper
INFO - 2025-07-01 10:17:58 --> Helper loaded: file_helper
INFO - 2025-07-01 10:17:58 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:58 --> Email Class Initialized
INFO - 2025-07-01 10:17:58 --> Email Class Initialized
DEBUG - 2025-07-01 10:17:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-07-01 10:17:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:17:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:58 --> Controller Class Initialized
INFO - 2025-07-01 10:17:58 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:58 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:58 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:58 --> Model "Crud" initialized
INFO - 2025-07-01 10:17:58 --> Final output sent to browser
DEBUG - 2025-07-01 10:17:58 --> Total execution time: 0.0283
INFO - 2025-07-01 10:17:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:17:58 --> Controller Class Initialized
INFO - 2025-07-01 10:17:58 --> Helper loaded: form_helper
INFO - 2025-07-01 10:17:58 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:17:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:17:58 --> Database Driver Class Initialized
INFO - 2025-07-01 10:17:58 --> Model "Crud" initialized
INFO - 2025-07-01 10:17:58 --> Final output sent to browser
DEBUG - 2025-07-01 10:17:58 --> Total execution time: 0.0503
INFO - 2025-07-01 10:18:00 --> Config Class Initialized
INFO - 2025-07-01 10:18:00 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:18:00 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:18:00 --> Utf8 Class Initialized
INFO - 2025-07-01 10:18:00 --> URI Class Initialized
INFO - 2025-07-01 10:18:00 --> Router Class Initialized
INFO - 2025-07-01 10:18:00 --> Output Class Initialized
INFO - 2025-07-01 10:18:00 --> Security Class Initialized
DEBUG - 2025-07-01 10:18:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:18:00 --> Input Class Initialized
INFO - 2025-07-01 10:18:00 --> Language Class Initialized
INFO - 2025-07-01 10:18:00 --> Loader Class Initialized
INFO - 2025-07-01 10:18:00 --> Helper loaded: url_helper
INFO - 2025-07-01 10:18:00 --> Helper loaded: file_helper
INFO - 2025-07-01 10:18:00 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:00 --> Email Class Initialized
DEBUG - 2025-07-01 10:18:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:18:00 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:18:00 --> Controller Class Initialized
INFO - 2025-07-01 10:18:00 --> Helper loaded: form_helper
INFO - 2025-07-01 10:18:00 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:18:00 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:18:00 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:00 --> Model "Crud" initialized
INFO - 2025-07-01 10:18:00 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-07-01 10:18:00 --> File loaded: /var/www/html/hris_lnd/application/views/attandance/shifts.php
INFO - 2025-07-01 10:18:00 --> Final output sent to browser
DEBUG - 2025-07-01 10:18:00 --> Total execution time: 0.0216
INFO - 2025-07-01 10:18:00 --> Config Class Initialized
INFO - 2025-07-01 10:18:00 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:18:00 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:18:00 --> Utf8 Class Initialized
INFO - 2025-07-01 10:18:00 --> URI Class Initialized
INFO - 2025-07-01 10:18:00 --> Router Class Initialized
INFO - 2025-07-01 10:18:00 --> Output Class Initialized
INFO - 2025-07-01 10:18:00 --> Security Class Initialized
DEBUG - 2025-07-01 10:18:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:18:00 --> Input Class Initialized
INFO - 2025-07-01 10:18:00 --> Language Class Initialized
INFO - 2025-07-01 10:18:00 --> Loader Class Initialized
INFO - 2025-07-01 10:18:00 --> Helper loaded: url_helper
INFO - 2025-07-01 10:18:00 --> Helper loaded: file_helper
INFO - 2025-07-01 10:18:00 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:00 --> Email Class Initialized
DEBUG - 2025-07-01 10:18:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:18:00 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:18:00 --> Controller Class Initialized
INFO - 2025-07-01 10:18:00 --> Helper loaded: form_helper
INFO - 2025-07-01 10:18:00 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:18:00 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:18:00 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:00 --> Model "Crud" initialized
INFO - 2025-07-01 10:18:00 --> Final output sent to browser
DEBUG - 2025-07-01 10:18:00 --> Total execution time: 0.0264
INFO - 2025-07-01 10:18:00 --> Config Class Initialized
INFO - 2025-07-01 10:18:00 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:18:00 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:18:00 --> Utf8 Class Initialized
INFO - 2025-07-01 10:18:00 --> URI Class Initialized
INFO - 2025-07-01 10:18:00 --> Router Class Initialized
INFO - 2025-07-01 10:18:00 --> Output Class Initialized
INFO - 2025-07-01 10:18:00 --> Security Class Initialized
DEBUG - 2025-07-01 10:18:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:18:00 --> Input Class Initialized
INFO - 2025-07-01 10:18:00 --> Language Class Initialized
INFO - 2025-07-01 10:18:00 --> Loader Class Initialized
INFO - 2025-07-01 10:18:00 --> Helper loaded: url_helper
INFO - 2025-07-01 10:18:00 --> Helper loaded: file_helper
INFO - 2025-07-01 10:18:00 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:00 --> Email Class Initialized
DEBUG - 2025-07-01 10:18:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:18:00 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:18:00 --> Controller Class Initialized
INFO - 2025-07-01 10:18:00 --> Helper loaded: form_helper
INFO - 2025-07-01 10:18:00 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:18:00 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:18:00 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:00 --> Model "Crud" initialized
INFO - 2025-07-01 10:18:00 --> Final output sent to browser
DEBUG - 2025-07-01 10:18:00 --> Total execution time: 0.0138
INFO - 2025-07-01 10:18:08 --> Config Class Initialized
INFO - 2025-07-01 10:18:08 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:18:08 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:18:08 --> Utf8 Class Initialized
INFO - 2025-07-01 10:18:08 --> URI Class Initialized
INFO - 2025-07-01 10:18:08 --> Router Class Initialized
INFO - 2025-07-01 10:18:08 --> Output Class Initialized
INFO - 2025-07-01 10:18:08 --> Security Class Initialized
DEBUG - 2025-07-01 10:18:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:18:08 --> Input Class Initialized
INFO - 2025-07-01 10:18:08 --> Language Class Initialized
INFO - 2025-07-01 10:18:08 --> Loader Class Initialized
INFO - 2025-07-01 10:18:08 --> Helper loaded: url_helper
INFO - 2025-07-01 10:18:08 --> Helper loaded: file_helper
INFO - 2025-07-01 10:18:08 --> Config Class Initialized
INFO - 2025-07-01 10:18:08 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:08 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:18:08 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:18:08 --> Utf8 Class Initialized
INFO - 2025-07-01 10:18:08 --> URI Class Initialized
INFO - 2025-07-01 10:18:08 --> Router Class Initialized
INFO - 2025-07-01 10:18:08 --> Output Class Initialized
INFO - 2025-07-01 10:18:08 --> Security Class Initialized
DEBUG - 2025-07-01 10:18:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:18:08 --> Input Class Initialized
INFO - 2025-07-01 10:18:08 --> Language Class Initialized
INFO - 2025-07-01 10:18:08 --> Loader Class Initialized
INFO - 2025-07-01 10:18:08 --> Helper loaded: url_helper
INFO - 2025-07-01 10:18:08 --> Helper loaded: file_helper
INFO - 2025-07-01 10:18:08 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:08 --> Email Class Initialized
DEBUG - 2025-07-01 10:18:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:18:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:18:08 --> Controller Class Initialized
INFO - 2025-07-01 10:18:08 --> Helper loaded: form_helper
INFO - 2025-07-01 10:18:08 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:18:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:18:08 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:08 --> Email Class Initialized
DEBUG - 2025-07-01 10:18:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:18:08 --> Model "Crud" initialized
INFO - 2025-07-01 10:18:08 --> Final output sent to browser
DEBUG - 2025-07-01 10:18:08 --> Total execution time: 0.0294
INFO - 2025-07-01 10:18:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:18:08 --> Controller Class Initialized
INFO - 2025-07-01 10:18:08 --> Helper loaded: form_helper
INFO - 2025-07-01 10:18:08 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:18:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:18:08 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:08 --> Model "Crud" initialized
INFO - 2025-07-01 10:18:08 --> Final output sent to browser
DEBUG - 2025-07-01 10:18:08 --> Total execution time: 0.0504
INFO - 2025-07-01 10:18:17 --> Config Class Initialized
INFO - 2025-07-01 10:18:17 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:18:17 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:18:17 --> Utf8 Class Initialized
INFO - 2025-07-01 10:18:17 --> URI Class Initialized
INFO - 2025-07-01 10:18:17 --> Router Class Initialized
INFO - 2025-07-01 10:18:17 --> Output Class Initialized
INFO - 2025-07-01 10:18:17 --> Security Class Initialized
DEBUG - 2025-07-01 10:18:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:18:17 --> Input Class Initialized
INFO - 2025-07-01 10:18:17 --> Language Class Initialized
INFO - 2025-07-01 10:18:17 --> Loader Class Initialized
INFO - 2025-07-01 10:18:17 --> Helper loaded: url_helper
INFO - 2025-07-01 10:18:17 --> Helper loaded: file_helper
INFO - 2025-07-01 10:18:17 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:17 --> Email Class Initialized
DEBUG - 2025-07-01 10:18:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:18:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:18:17 --> Controller Class Initialized
INFO - 2025-07-01 10:18:17 --> Helper loaded: form_helper
INFO - 2025-07-01 10:18:17 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:18:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:18:17 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:17 --> Model "Crud" initialized
INFO - 2025-07-01 10:18:17 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-07-01 10:18:17 --> File loaded: /var/www/html/hris_lnd/application/views/attandance/attandances.php
INFO - 2025-07-01 10:18:17 --> Final output sent to browser
DEBUG - 2025-07-01 10:18:17 --> Total execution time: 0.0300
INFO - 2025-07-01 10:18:17 --> Config Class Initialized
INFO - 2025-07-01 10:18:17 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:18:17 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:18:17 --> Utf8 Class Initialized
INFO - 2025-07-01 10:18:17 --> URI Class Initialized
INFO - 2025-07-01 10:18:17 --> Router Class Initialized
INFO - 2025-07-01 10:18:17 --> Output Class Initialized
INFO - 2025-07-01 10:18:17 --> Security Class Initialized
DEBUG - 2025-07-01 10:18:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:18:17 --> Input Class Initialized
INFO - 2025-07-01 10:18:17 --> Language Class Initialized
INFO - 2025-07-01 10:18:17 --> Loader Class Initialized
INFO - 2025-07-01 10:18:17 --> Helper loaded: url_helper
INFO - 2025-07-01 10:18:17 --> Helper loaded: file_helper
INFO - 2025-07-01 10:18:17 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:17 --> Email Class Initialized
DEBUG - 2025-07-01 10:18:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:18:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:18:17 --> Controller Class Initialized
INFO - 2025-07-01 10:18:17 --> Helper loaded: form_helper
INFO - 2025-07-01 10:18:17 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:18:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:18:17 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:17 --> Model "Crud" initialized
INFO - 2025-07-01 10:18:17 --> Config Class Initialized
INFO - 2025-07-01 10:18:17 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:18:17 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:18:17 --> Utf8 Class Initialized
INFO - 2025-07-01 10:18:17 --> URI Class Initialized
INFO - 2025-07-01 10:18:17 --> Router Class Initialized
INFO - 2025-07-01 10:18:17 --> Output Class Initialized
INFO - 2025-07-01 10:18:17 --> Security Class Initialized
DEBUG - 2025-07-01 10:18:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:18:17 --> Input Class Initialized
INFO - 2025-07-01 10:18:17 --> Language Class Initialized
INFO - 2025-07-01 10:18:17 --> Final output sent to browser
DEBUG - 2025-07-01 10:18:17 --> Total execution time: 0.0254
INFO - 2025-07-01 10:18:17 --> Loader Class Initialized
INFO - 2025-07-01 10:18:17 --> Helper loaded: url_helper
INFO - 2025-07-01 10:18:17 --> Helper loaded: file_helper
INFO - 2025-07-01 10:18:17 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:17 --> Config Class Initialized
INFO - 2025-07-01 10:18:17 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:18:17 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:18:17 --> Utf8 Class Initialized
INFO - 2025-07-01 10:18:17 --> URI Class Initialized
INFO - 2025-07-01 10:18:17 --> Router Class Initialized
INFO - 2025-07-01 10:18:17 --> Output Class Initialized
INFO - 2025-07-01 10:18:17 --> Security Class Initialized
DEBUG - 2025-07-01 10:18:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:18:17 --> Input Class Initialized
INFO - 2025-07-01 10:18:17 --> Language Class Initialized
INFO - 2025-07-01 10:18:17 --> Loader Class Initialized
INFO - 2025-07-01 10:18:17 --> Helper loaded: url_helper
INFO - 2025-07-01 10:18:17 --> Helper loaded: file_helper
INFO - 2025-07-01 10:18:17 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:17 --> Email Class Initialized
DEBUG - 2025-07-01 10:18:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:18:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:18:17 --> Controller Class Initialized
INFO - 2025-07-01 10:18:17 --> Helper loaded: form_helper
INFO - 2025-07-01 10:18:17 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:18:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:18:17 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:17 --> Email Class Initialized
DEBUG - 2025-07-01 10:18:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:18:17 --> Model "Crud" initialized
INFO - 2025-07-01 10:18:17 --> Final output sent to browser
DEBUG - 2025-07-01 10:18:17 --> Total execution time: 0.0707
INFO - 2025-07-01 10:18:17 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:18:17 --> Controller Class Initialized
INFO - 2025-07-01 10:18:17 --> Helper loaded: form_helper
INFO - 2025-07-01 10:18:17 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:18:17 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:18:17 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:17 --> Model "Crud" initialized
INFO - 2025-07-01 10:18:17 --> Final output sent to browser
DEBUG - 2025-07-01 10:18:17 --> Total execution time: 0.1055
INFO - 2025-07-01 10:18:18 --> Config Class Initialized
INFO - 2025-07-01 10:18:18 --> Config Class Initialized
INFO - 2025-07-01 10:18:18 --> Hooks Class Initialized
INFO - 2025-07-01 10:18:18 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:18:18 --> UTF-8 Support Enabled
DEBUG - 2025-07-01 10:18:18 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:18:18 --> Utf8 Class Initialized
INFO - 2025-07-01 10:18:18 --> Utf8 Class Initialized
INFO - 2025-07-01 10:18:18 --> URI Class Initialized
INFO - 2025-07-01 10:18:18 --> Router Class Initialized
INFO - 2025-07-01 10:18:18 --> Output Class Initialized
INFO - 2025-07-01 10:18:18 --> Security Class Initialized
DEBUG - 2025-07-01 10:18:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:18:18 --> Input Class Initialized
INFO - 2025-07-01 10:18:18 --> URI Class Initialized
INFO - 2025-07-01 10:18:18 --> Language Class Initialized
INFO - 2025-07-01 10:18:18 --> Router Class Initialized
INFO - 2025-07-01 10:18:18 --> Loader Class Initialized
INFO - 2025-07-01 10:18:18 --> Output Class Initialized
INFO - 2025-07-01 10:18:18 --> Helper loaded: url_helper
INFO - 2025-07-01 10:18:18 --> Helper loaded: file_helper
INFO - 2025-07-01 10:18:18 --> Security Class Initialized
INFO - 2025-07-01 10:18:18 --> Database Driver Class Initialized
DEBUG - 2025-07-01 10:18:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:18:18 --> Input Class Initialized
INFO - 2025-07-01 10:18:18 --> Language Class Initialized
INFO - 2025-07-01 10:18:18 --> Loader Class Initialized
INFO - 2025-07-01 10:18:18 --> Helper loaded: url_helper
INFO - 2025-07-01 10:18:18 --> Helper loaded: file_helper
INFO - 2025-07-01 10:18:18 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:18 --> Email Class Initialized
DEBUG - 2025-07-01 10:18:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:18:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:18:18 --> Controller Class Initialized
INFO - 2025-07-01 10:18:18 --> Helper loaded: form_helper
INFO - 2025-07-01 10:18:18 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:18:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:18:18 --> Email Class Initialized
INFO - 2025-07-01 10:18:18 --> Database Driver Class Initialized
DEBUG - 2025-07-01 10:18:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:18:18 --> Model "Crud" initialized
INFO - 2025-07-01 10:18:18 --> Final output sent to browser
DEBUG - 2025-07-01 10:18:18 --> Total execution time: 0.0314
INFO - 2025-07-01 10:18:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:18:18 --> Controller Class Initialized
INFO - 2025-07-01 10:18:18 --> Helper loaded: form_helper
INFO - 2025-07-01 10:18:18 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:18:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:18:18 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:18 --> Model "Crud" initialized
INFO - 2025-07-01 10:18:18 --> Final output sent to browser
DEBUG - 2025-07-01 10:18:18 --> Total execution time: 0.0508
INFO - 2025-07-01 10:18:28 --> Config Class Initialized
INFO - 2025-07-01 10:18:28 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:18:28 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:18:28 --> Utf8 Class Initialized
INFO - 2025-07-01 10:18:28 --> URI Class Initialized
INFO - 2025-07-01 10:18:28 --> Router Class Initialized
INFO - 2025-07-01 10:18:28 --> Output Class Initialized
INFO - 2025-07-01 10:18:28 --> Security Class Initialized
DEBUG - 2025-07-01 10:18:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:18:28 --> Input Class Initialized
INFO - 2025-07-01 10:18:28 --> Language Class Initialized
INFO - 2025-07-01 10:18:28 --> Loader Class Initialized
INFO - 2025-07-01 10:18:28 --> Helper loaded: url_helper
INFO - 2025-07-01 10:18:28 --> Helper loaded: file_helper
INFO - 2025-07-01 10:18:28 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:28 --> Email Class Initialized
DEBUG - 2025-07-01 10:18:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:18:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:18:28 --> Controller Class Initialized
INFO - 2025-07-01 10:18:28 --> Helper loaded: form_helper
INFO - 2025-07-01 10:18:28 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:18:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:18:28 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:28 --> Config Class Initialized
INFO - 2025-07-01 10:18:28 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:18:28 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:18:28 --> Utf8 Class Initialized
INFO - 2025-07-01 10:18:28 --> URI Class Initialized
INFO - 2025-07-01 10:18:28 --> Router Class Initialized
INFO - 2025-07-01 10:18:28 --> Output Class Initialized
INFO - 2025-07-01 10:18:28 --> Security Class Initialized
DEBUG - 2025-07-01 10:18:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:18:28 --> Input Class Initialized
INFO - 2025-07-01 10:18:28 --> Language Class Initialized
INFO - 2025-07-01 10:18:28 --> Loader Class Initialized
INFO - 2025-07-01 10:18:28 --> Helper loaded: url_helper
INFO - 2025-07-01 10:18:28 --> Helper loaded: file_helper
INFO - 2025-07-01 10:18:28 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:28 --> Model "Crud" initialized
INFO - 2025-07-01 10:18:28 --> Email Class Initialized
DEBUG - 2025-07-01 10:18:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:18:28 --> Final output sent to browser
DEBUG - 2025-07-01 10:18:28 --> Total execution time: 0.1124
INFO - 2025-07-01 10:18:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:18:28 --> Controller Class Initialized
INFO - 2025-07-01 10:18:28 --> Helper loaded: form_helper
INFO - 2025-07-01 10:18:28 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:18:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:18:28 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:28 --> Model "Crud" initialized
INFO - 2025-07-01 10:18:28 --> Final output sent to browser
DEBUG - 2025-07-01 10:18:28 --> Total execution time: 0.1514
INFO - 2025-07-01 10:18:43 --> Config Class Initialized
INFO - 2025-07-01 10:18:43 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:18:43 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:18:43 --> Utf8 Class Initialized
INFO - 2025-07-01 10:18:43 --> URI Class Initialized
INFO - 2025-07-01 10:18:43 --> Router Class Initialized
INFO - 2025-07-01 10:18:43 --> Output Class Initialized
INFO - 2025-07-01 10:18:43 --> Security Class Initialized
DEBUG - 2025-07-01 10:18:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:18:43 --> Input Class Initialized
INFO - 2025-07-01 10:18:43 --> Language Class Initialized
INFO - 2025-07-01 10:18:43 --> Loader Class Initialized
INFO - 2025-07-01 10:18:43 --> Helper loaded: url_helper
INFO - 2025-07-01 10:18:43 --> Helper loaded: file_helper
INFO - 2025-07-01 10:18:43 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:43 --> Config Class Initialized
INFO - 2025-07-01 10:18:43 --> Email Class Initialized
INFO - 2025-07-01 10:18:43 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:18:43 --> UTF-8 Support Enabled
DEBUG - 2025-07-01 10:18:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:18:43 --> Utf8 Class Initialized
INFO - 2025-07-01 10:18:43 --> URI Class Initialized
INFO - 2025-07-01 10:18:43 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:18:43 --> Controller Class Initialized
INFO - 2025-07-01 10:18:43 --> Router Class Initialized
INFO - 2025-07-01 10:18:43 --> Helper loaded: form_helper
INFO - 2025-07-01 10:18:43 --> Output Class Initialized
INFO - 2025-07-01 10:18:43 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:18:43 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:18:43 --> Security Class Initialized
INFO - 2025-07-01 10:18:43 --> Database Driver Class Initialized
DEBUG - 2025-07-01 10:18:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:18:43 --> Input Class Initialized
INFO - 2025-07-01 10:18:43 --> Language Class Initialized
INFO - 2025-07-01 10:18:43 --> Loader Class Initialized
INFO - 2025-07-01 10:18:43 --> Helper loaded: url_helper
INFO - 2025-07-01 10:18:43 --> Helper loaded: file_helper
INFO - 2025-07-01 10:18:43 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:43 --> Email Class Initialized
DEBUG - 2025-07-01 10:18:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:18:43 --> Model "Crud" initialized
INFO - 2025-07-01 10:18:43 --> Final output sent to browser
DEBUG - 2025-07-01 10:18:43 --> Total execution time: 0.0547
INFO - 2025-07-01 10:18:43 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:18:43 --> Controller Class Initialized
INFO - 2025-07-01 10:18:43 --> Helper loaded: form_helper
INFO - 2025-07-01 10:18:43 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:18:43 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:18:43 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:43 --> Model "Crud" initialized
INFO - 2025-07-01 10:18:43 --> Final output sent to browser
DEBUG - 2025-07-01 10:18:43 --> Total execution time: 0.0754
INFO - 2025-07-01 10:18:48 --> Config Class Initialized
INFO - 2025-07-01 10:18:48 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:18:48 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:18:48 --> Utf8 Class Initialized
INFO - 2025-07-01 10:18:48 --> URI Class Initialized
INFO - 2025-07-01 10:18:48 --> Router Class Initialized
INFO - 2025-07-01 10:18:48 --> Output Class Initialized
INFO - 2025-07-01 10:18:48 --> Security Class Initialized
DEBUG - 2025-07-01 10:18:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:18:48 --> Input Class Initialized
INFO - 2025-07-01 10:18:48 --> Language Class Initialized
INFO - 2025-07-01 10:18:48 --> Loader Class Initialized
INFO - 2025-07-01 10:18:48 --> Helper loaded: url_helper
INFO - 2025-07-01 10:18:48 --> Helper loaded: file_helper
INFO - 2025-07-01 10:18:48 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:48 --> Config Class Initialized
INFO - 2025-07-01 10:18:48 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:18:48 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:18:48 --> Utf8 Class Initialized
INFO - 2025-07-01 10:18:48 --> URI Class Initialized
INFO - 2025-07-01 10:18:48 --> Router Class Initialized
INFO - 2025-07-01 10:18:48 --> Output Class Initialized
INFO - 2025-07-01 10:18:48 --> Security Class Initialized
DEBUG - 2025-07-01 10:18:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:18:48 --> Input Class Initialized
INFO - 2025-07-01 10:18:48 --> Language Class Initialized
INFO - 2025-07-01 10:18:48 --> Loader Class Initialized
INFO - 2025-07-01 10:18:48 --> Helper loaded: url_helper
INFO - 2025-07-01 10:18:48 --> Helper loaded: file_helper
INFO - 2025-07-01 10:18:48 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:48 --> Email Class Initialized
DEBUG - 2025-07-01 10:18:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:18:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:18:48 --> Controller Class Initialized
INFO - 2025-07-01 10:18:48 --> Helper loaded: form_helper
INFO - 2025-07-01 10:18:48 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:18:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:18:48 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:48 --> Email Class Initialized
DEBUG - 2025-07-01 10:18:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:18:48 --> Model "Crud" initialized
INFO - 2025-07-01 10:18:48 --> Final output sent to browser
DEBUG - 2025-07-01 10:18:48 --> Total execution time: 0.0241
INFO - 2025-07-01 10:18:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:18:48 --> Controller Class Initialized
INFO - 2025-07-01 10:18:48 --> Helper loaded: form_helper
INFO - 2025-07-01 10:18:48 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:18:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:18:48 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:48 --> Model "Crud" initialized
INFO - 2025-07-01 10:18:48 --> Final output sent to browser
DEBUG - 2025-07-01 10:18:48 --> Total execution time: 0.0453
INFO - 2025-07-01 10:18:51 --> Config Class Initialized
INFO - 2025-07-01 10:18:51 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:18:51 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:18:51 --> Utf8 Class Initialized
INFO - 2025-07-01 10:18:51 --> URI Class Initialized
INFO - 2025-07-01 10:18:51 --> Router Class Initialized
INFO - 2025-07-01 10:18:51 --> Output Class Initialized
INFO - 2025-07-01 10:18:51 --> Security Class Initialized
DEBUG - 2025-07-01 10:18:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:18:51 --> Input Class Initialized
INFO - 2025-07-01 10:18:51 --> Language Class Initialized
INFO - 2025-07-01 10:18:51 --> Loader Class Initialized
INFO - 2025-07-01 10:18:51 --> Helper loaded: url_helper
INFO - 2025-07-01 10:18:51 --> Helper loaded: file_helper
INFO - 2025-07-01 10:18:51 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:51 --> Email Class Initialized
DEBUG - 2025-07-01 10:18:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:18:51 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:18:51 --> Controller Class Initialized
INFO - 2025-07-01 10:18:51 --> Helper loaded: form_helper
INFO - 2025-07-01 10:18:51 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:18:51 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:18:51 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:51 --> Model "Crud" initialized
INFO - 2025-07-01 10:18:51 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-07-01 10:18:51 --> File loaded: /var/www/html/hris_lnd/application/views/attandance/machines.php
INFO - 2025-07-01 10:18:51 --> Final output sent to browser
DEBUG - 2025-07-01 10:18:51 --> Total execution time: 0.0293
INFO - 2025-07-01 10:18:51 --> Config Class Initialized
INFO - 2025-07-01 10:18:51 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:18:51 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:18:51 --> Utf8 Class Initialized
INFO - 2025-07-01 10:18:51 --> URI Class Initialized
INFO - 2025-07-01 10:18:51 --> Router Class Initialized
INFO - 2025-07-01 10:18:51 --> Output Class Initialized
INFO - 2025-07-01 10:18:51 --> Security Class Initialized
DEBUG - 2025-07-01 10:18:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:18:51 --> Input Class Initialized
INFO - 2025-07-01 10:18:51 --> Language Class Initialized
INFO - 2025-07-01 10:18:51 --> Loader Class Initialized
INFO - 2025-07-01 10:18:51 --> Helper loaded: url_helper
INFO - 2025-07-01 10:18:51 --> Helper loaded: file_helper
INFO - 2025-07-01 10:18:51 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:51 --> Email Class Initialized
DEBUG - 2025-07-01 10:18:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:18:51 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:18:51 --> Controller Class Initialized
INFO - 2025-07-01 10:18:51 --> Helper loaded: form_helper
INFO - 2025-07-01 10:18:51 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:18:51 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:18:51 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:51 --> Model "Crud" initialized
INFO - 2025-07-01 10:18:51 --> Final output sent to browser
DEBUG - 2025-07-01 10:18:51 --> Total execution time: 0.1892
INFO - 2025-07-01 10:18:51 --> Config Class Initialized
INFO - 2025-07-01 10:18:51 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:18:51 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:18:51 --> Utf8 Class Initialized
INFO - 2025-07-01 10:18:51 --> URI Class Initialized
INFO - 2025-07-01 10:18:51 --> Router Class Initialized
INFO - 2025-07-01 10:18:51 --> Output Class Initialized
INFO - 2025-07-01 10:18:51 --> Security Class Initialized
DEBUG - 2025-07-01 10:18:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:18:51 --> Input Class Initialized
INFO - 2025-07-01 10:18:51 --> Language Class Initialized
INFO - 2025-07-01 10:18:51 --> Loader Class Initialized
INFO - 2025-07-01 10:18:51 --> Helper loaded: url_helper
INFO - 2025-07-01 10:18:51 --> Helper loaded: file_helper
INFO - 2025-07-01 10:18:51 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:51 --> Email Class Initialized
DEBUG - 2025-07-01 10:18:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:18:51 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:18:51 --> Controller Class Initialized
INFO - 2025-07-01 10:18:51 --> Helper loaded: form_helper
INFO - 2025-07-01 10:18:51 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:18:51 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:18:51 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:51 --> Model "Crud" initialized
INFO - 2025-07-01 10:18:51 --> Final output sent to browser
DEBUG - 2025-07-01 10:18:51 --> Total execution time: 0.0135
INFO - 2025-07-01 10:18:58 --> Config Class Initialized
INFO - 2025-07-01 10:18:58 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:18:58 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:18:58 --> Utf8 Class Initialized
INFO - 2025-07-01 10:18:58 --> URI Class Initialized
INFO - 2025-07-01 10:18:58 --> Router Class Initialized
INFO - 2025-07-01 10:18:58 --> Output Class Initialized
INFO - 2025-07-01 10:18:58 --> Security Class Initialized
DEBUG - 2025-07-01 10:18:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:18:58 --> Input Class Initialized
INFO - 2025-07-01 10:18:58 --> Language Class Initialized
INFO - 2025-07-01 10:18:58 --> Loader Class Initialized
INFO - 2025-07-01 10:18:58 --> Helper loaded: url_helper
INFO - 2025-07-01 10:18:58 --> Helper loaded: file_helper
INFO - 2025-07-01 10:18:58 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:58 --> Config Class Initialized
INFO - 2025-07-01 10:18:58 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:18:58 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:18:58 --> Utf8 Class Initialized
INFO - 2025-07-01 10:18:58 --> URI Class Initialized
INFO - 2025-07-01 10:18:58 --> Router Class Initialized
INFO - 2025-07-01 10:18:58 --> Output Class Initialized
INFO - 2025-07-01 10:18:58 --> Security Class Initialized
DEBUG - 2025-07-01 10:18:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:18:58 --> Input Class Initialized
INFO - 2025-07-01 10:18:58 --> Language Class Initialized
INFO - 2025-07-01 10:18:58 --> Loader Class Initialized
INFO - 2025-07-01 10:18:58 --> Helper loaded: url_helper
INFO - 2025-07-01 10:18:58 --> Helper loaded: file_helper
INFO - 2025-07-01 10:18:58 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:58 --> Email Class Initialized
DEBUG - 2025-07-01 10:18:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:18:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:18:58 --> Controller Class Initialized
INFO - 2025-07-01 10:18:58 --> Helper loaded: form_helper
INFO - 2025-07-01 10:18:58 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:18:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:18:58 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:58 --> Email Class Initialized
DEBUG - 2025-07-01 10:18:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:18:58 --> Model "Crud" initialized
INFO - 2025-07-01 10:18:58 --> Final output sent to browser
DEBUG - 2025-07-01 10:18:58 --> Total execution time: 0.0243
INFO - 2025-07-01 10:18:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:18:58 --> Controller Class Initialized
INFO - 2025-07-01 10:18:58 --> Helper loaded: form_helper
INFO - 2025-07-01 10:18:58 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:18:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:18:58 --> Database Driver Class Initialized
INFO - 2025-07-01 10:18:58 --> Model "Crud" initialized
INFO - 2025-07-01 10:18:58 --> Final output sent to browser
DEBUG - 2025-07-01 10:18:58 --> Total execution time: 0.0501
INFO - 2025-07-01 10:19:08 --> Config Class Initialized
INFO - 2025-07-01 10:19:08 --> Config Class Initialized
INFO - 2025-07-01 10:19:08 --> Hooks Class Initialized
INFO - 2025-07-01 10:19:08 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:19:08 --> UTF-8 Support Enabled
DEBUG - 2025-07-01 10:19:08 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:19:08 --> Utf8 Class Initialized
INFO - 2025-07-01 10:19:08 --> Utf8 Class Initialized
INFO - 2025-07-01 10:19:08 --> URI Class Initialized
INFO - 2025-07-01 10:19:08 --> URI Class Initialized
INFO - 2025-07-01 10:19:08 --> Router Class Initialized
INFO - 2025-07-01 10:19:08 --> Router Class Initialized
INFO - 2025-07-01 10:19:08 --> Output Class Initialized
INFO - 2025-07-01 10:19:08 --> Output Class Initialized
INFO - 2025-07-01 10:19:08 --> Security Class Initialized
INFO - 2025-07-01 10:19:08 --> Security Class Initialized
DEBUG - 2025-07-01 10:19:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-07-01 10:19:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:19:08 --> Input Class Initialized
INFO - 2025-07-01 10:19:08 --> Input Class Initialized
INFO - 2025-07-01 10:19:08 --> Language Class Initialized
INFO - 2025-07-01 10:19:08 --> Language Class Initialized
INFO - 2025-07-01 10:19:08 --> Loader Class Initialized
INFO - 2025-07-01 10:19:08 --> Loader Class Initialized
INFO - 2025-07-01 10:19:08 --> Helper loaded: url_helper
INFO - 2025-07-01 10:19:08 --> Helper loaded: url_helper
INFO - 2025-07-01 10:19:08 --> Helper loaded: file_helper
INFO - 2025-07-01 10:19:08 --> Helper loaded: file_helper
INFO - 2025-07-01 10:19:08 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:08 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:08 --> Email Class Initialized
DEBUG - 2025-07-01 10:19:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:19:08 --> Email Class Initialized
INFO - 2025-07-01 10:19:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:19:08 --> Controller Class Initialized
DEBUG - 2025-07-01 10:19:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:19:08 --> Helper loaded: form_helper
INFO - 2025-07-01 10:19:08 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:19:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:19:08 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:08 --> Model "Crud" initialized
INFO - 2025-07-01 10:19:08 --> Final output sent to browser
DEBUG - 2025-07-01 10:19:08 --> Total execution time: 0.0203
INFO - 2025-07-01 10:19:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:19:08 --> Controller Class Initialized
INFO - 2025-07-01 10:19:08 --> Helper loaded: form_helper
INFO - 2025-07-01 10:19:08 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:19:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:19:08 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:08 --> Model "Crud" initialized
INFO - 2025-07-01 10:19:08 --> Final output sent to browser
DEBUG - 2025-07-01 10:19:08 --> Total execution time: 0.0338
INFO - 2025-07-01 10:19:15 --> Config Class Initialized
INFO - 2025-07-01 10:19:15 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:19:15 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:19:15 --> Utf8 Class Initialized
INFO - 2025-07-01 10:19:15 --> URI Class Initialized
INFO - 2025-07-01 10:19:15 --> Router Class Initialized
INFO - 2025-07-01 10:19:15 --> Output Class Initialized
INFO - 2025-07-01 10:19:15 --> Security Class Initialized
DEBUG - 2025-07-01 10:19:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:19:15 --> Input Class Initialized
INFO - 2025-07-01 10:19:15 --> Language Class Initialized
INFO - 2025-07-01 10:19:15 --> Loader Class Initialized
INFO - 2025-07-01 10:19:15 --> Helper loaded: url_helper
INFO - 2025-07-01 10:19:15 --> Helper loaded: file_helper
INFO - 2025-07-01 10:19:15 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:15 --> Email Class Initialized
DEBUG - 2025-07-01 10:19:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:19:15 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:19:15 --> Controller Class Initialized
INFO - 2025-07-01 10:19:15 --> Helper loaded: form_helper
INFO - 2025-07-01 10:19:15 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:19:15 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:19:15 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:15 --> Model "Crud" initialized
INFO - 2025-07-01 10:19:15 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-07-01 10:19:15 --> File loaded: /var/www/html/hris_lnd/application/views/report/attandances.php
INFO - 2025-07-01 10:19:15 --> Final output sent to browser
DEBUG - 2025-07-01 10:19:15 --> Total execution time: 0.0205
INFO - 2025-07-01 10:19:16 --> Config Class Initialized
INFO - 2025-07-01 10:19:16 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:19:16 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:19:16 --> Utf8 Class Initialized
INFO - 2025-07-01 10:19:16 --> URI Class Initialized
INFO - 2025-07-01 10:19:16 --> Router Class Initialized
INFO - 2025-07-01 10:19:16 --> Output Class Initialized
INFO - 2025-07-01 10:19:16 --> Security Class Initialized
DEBUG - 2025-07-01 10:19:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:19:16 --> Input Class Initialized
INFO - 2025-07-01 10:19:16 --> Language Class Initialized
INFO - 2025-07-01 10:19:16 --> Loader Class Initialized
INFO - 2025-07-01 10:19:16 --> Helper loaded: url_helper
INFO - 2025-07-01 10:19:16 --> Helper loaded: file_helper
INFO - 2025-07-01 10:19:16 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:16 --> Email Class Initialized
DEBUG - 2025-07-01 10:19:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:19:16 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:19:16 --> Controller Class Initialized
INFO - 2025-07-01 10:19:16 --> Helper loaded: form_helper
INFO - 2025-07-01 10:19:16 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:19:16 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:19:16 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:16 --> Model "Crud" initialized
INFO - 2025-07-01 10:19:16 --> Final output sent to browser
DEBUG - 2025-07-01 10:19:16 --> Total execution time: 0.0115
INFO - 2025-07-01 10:19:16 --> Config Class Initialized
INFO - 2025-07-01 10:19:16 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:19:16 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:19:16 --> Utf8 Class Initialized
INFO - 2025-07-01 10:19:16 --> URI Class Initialized
INFO - 2025-07-01 10:19:16 --> Router Class Initialized
INFO - 2025-07-01 10:19:16 --> Output Class Initialized
INFO - 2025-07-01 10:19:16 --> Security Class Initialized
DEBUG - 2025-07-01 10:19:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:19:16 --> Input Class Initialized
INFO - 2025-07-01 10:19:16 --> Language Class Initialized
INFO - 2025-07-01 10:19:16 --> Loader Class Initialized
INFO - 2025-07-01 10:19:16 --> Helper loaded: url_helper
INFO - 2025-07-01 10:19:16 --> Helper loaded: file_helper
INFO - 2025-07-01 10:19:16 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:16 --> Email Class Initialized
DEBUG - 2025-07-01 10:19:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:19:16 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:19:16 --> Controller Class Initialized
INFO - 2025-07-01 10:19:16 --> Helper loaded: form_helper
INFO - 2025-07-01 10:19:16 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:19:16 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:19:16 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:16 --> Config Class Initialized
INFO - 2025-07-01 10:19:16 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:19:16 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:19:16 --> Utf8 Class Initialized
INFO - 2025-07-01 10:19:16 --> URI Class Initialized
INFO - 2025-07-01 10:19:16 --> Router Class Initialized
INFO - 2025-07-01 10:19:16 --> Output Class Initialized
INFO - 2025-07-01 10:19:16 --> Security Class Initialized
DEBUG - 2025-07-01 10:19:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:19:16 --> Input Class Initialized
INFO - 2025-07-01 10:19:16 --> Language Class Initialized
INFO - 2025-07-01 10:19:16 --> Model "Crud" initialized
INFO - 2025-07-01 10:19:16 --> Loader Class Initialized
INFO - 2025-07-01 10:19:16 --> Helper loaded: url_helper
INFO - 2025-07-01 10:19:16 --> Helper loaded: file_helper
INFO - 2025-07-01 10:19:16 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:16 --> Email Class Initialized
DEBUG - 2025-07-01 10:19:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:19:16 --> Config Class Initialized
INFO - 2025-07-01 10:19:16 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:19:16 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:19:16 --> Utf8 Class Initialized
INFO - 2025-07-01 10:19:16 --> URI Class Initialized
INFO - 2025-07-01 10:19:16 --> Router Class Initialized
INFO - 2025-07-01 10:19:16 --> Output Class Initialized
INFO - 2025-07-01 10:19:16 --> Security Class Initialized
DEBUG - 2025-07-01 10:19:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:19:16 --> Input Class Initialized
INFO - 2025-07-01 10:19:16 --> Language Class Initialized
INFO - 2025-07-01 10:19:16 --> Loader Class Initialized
INFO - 2025-07-01 10:19:16 --> Helper loaded: url_helper
INFO - 2025-07-01 10:19:16 --> Helper loaded: file_helper
INFO - 2025-07-01 10:19:16 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:16 --> Email Class Initialized
DEBUG - 2025-07-01 10:19:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:19:16 --> Final output sent to browser
DEBUG - 2025-07-01 10:19:16 --> Total execution time: 0.0466
INFO - 2025-07-01 10:19:16 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:19:16 --> Controller Class Initialized
INFO - 2025-07-01 10:19:16 --> Helper loaded: form_helper
INFO - 2025-07-01 10:19:16 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:19:16 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:19:16 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:16 --> Model "Crud" initialized
INFO - 2025-07-01 10:19:16 --> Final output sent to browser
DEBUG - 2025-07-01 10:19:16 --> Total execution time: 0.0577
INFO - 2025-07-01 10:19:16 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:19:16 --> Controller Class Initialized
INFO - 2025-07-01 10:19:16 --> Helper loaded: form_helper
INFO - 2025-07-01 10:19:16 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:19:16 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:19:16 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:16 --> Model "Crud" initialized
ERROR - 2025-07-01 10:19:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'groups b ON a.group_id = b.id WHERE a.username = 'admin' and a.status = '1'' at line 1 - Invalid query: SELECT b.id, b.name FROM privilege_groups a JOIN groups b ON a.group_id = b.id WHERE a.username = 'admin' and a.status = '1'
INFO - 2025-07-01 10:19:16 --> Language file loaded: language/english/db_lang.php
INFO - 2025-07-01 10:19:18 --> Config Class Initialized
INFO - 2025-07-01 10:19:18 --> Hooks Class Initialized
INFO - 2025-07-01 10:19:18 --> Config Class Initialized
DEBUG - 2025-07-01 10:19:18 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:19:18 --> Utf8 Class Initialized
INFO - 2025-07-01 10:19:18 --> Hooks Class Initialized
INFO - 2025-07-01 10:19:18 --> URI Class Initialized
DEBUG - 2025-07-01 10:19:18 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:19:18 --> Utf8 Class Initialized
INFO - 2025-07-01 10:19:18 --> Router Class Initialized
INFO - 2025-07-01 10:19:18 --> URI Class Initialized
INFO - 2025-07-01 10:19:18 --> Output Class Initialized
INFO - 2025-07-01 10:19:18 --> Router Class Initialized
INFO - 2025-07-01 10:19:18 --> Output Class Initialized
INFO - 2025-07-01 10:19:18 --> Security Class Initialized
INFO - 2025-07-01 10:19:18 --> Security Class Initialized
DEBUG - 2025-07-01 10:19:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-07-01 10:19:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:19:18 --> Input Class Initialized
INFO - 2025-07-01 10:19:18 --> Language Class Initialized
INFO - 2025-07-01 10:19:18 --> Input Class Initialized
INFO - 2025-07-01 10:19:18 --> Language Class Initialized
INFO - 2025-07-01 10:19:18 --> Loader Class Initialized
INFO - 2025-07-01 10:19:18 --> Loader Class Initialized
INFO - 2025-07-01 10:19:18 --> Helper loaded: url_helper
INFO - 2025-07-01 10:19:18 --> Helper loaded: url_helper
INFO - 2025-07-01 10:19:18 --> Helper loaded: file_helper
INFO - 2025-07-01 10:19:18 --> Helper loaded: file_helper
INFO - 2025-07-01 10:19:18 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:18 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:18 --> Email Class Initialized
DEBUG - 2025-07-01 10:19:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:19:18 --> Email Class Initialized
DEBUG - 2025-07-01 10:19:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:19:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:19:18 --> Controller Class Initialized
INFO - 2025-07-01 10:19:18 --> Helper loaded: form_helper
INFO - 2025-07-01 10:19:18 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:19:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:19:18 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:18 --> Model "Crud" initialized
INFO - 2025-07-01 10:19:18 --> Final output sent to browser
DEBUG - 2025-07-01 10:19:18 --> Total execution time: 0.0234
INFO - 2025-07-01 10:19:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:19:18 --> Controller Class Initialized
INFO - 2025-07-01 10:19:18 --> Helper loaded: form_helper
INFO - 2025-07-01 10:19:18 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:19:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:19:18 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:18 --> Model "Crud" initialized
INFO - 2025-07-01 10:19:18 --> Final output sent to browser
DEBUG - 2025-07-01 10:19:18 --> Total execution time: 0.0465
INFO - 2025-07-01 10:19:28 --> Config Class Initialized
INFO - 2025-07-01 10:19:28 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:19:28 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:19:28 --> Utf8 Class Initialized
INFO - 2025-07-01 10:19:28 --> URI Class Initialized
INFO - 2025-07-01 10:19:28 --> Router Class Initialized
INFO - 2025-07-01 10:19:28 --> Output Class Initialized
INFO - 2025-07-01 10:19:28 --> Security Class Initialized
DEBUG - 2025-07-01 10:19:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:19:28 --> Input Class Initialized
INFO - 2025-07-01 10:19:28 --> Language Class Initialized
INFO - 2025-07-01 10:19:28 --> Loader Class Initialized
INFO - 2025-07-01 10:19:28 --> Helper loaded: url_helper
INFO - 2025-07-01 10:19:28 --> Helper loaded: file_helper
INFO - 2025-07-01 10:19:28 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:28 --> Config Class Initialized
INFO - 2025-07-01 10:19:28 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:19:28 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:19:28 --> Utf8 Class Initialized
INFO - 2025-07-01 10:19:28 --> URI Class Initialized
INFO - 2025-07-01 10:19:28 --> Router Class Initialized
INFO - 2025-07-01 10:19:28 --> Output Class Initialized
INFO - 2025-07-01 10:19:28 --> Security Class Initialized
DEBUG - 2025-07-01 10:19:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:19:28 --> Input Class Initialized
INFO - 2025-07-01 10:19:28 --> Language Class Initialized
INFO - 2025-07-01 10:19:28 --> Loader Class Initialized
INFO - 2025-07-01 10:19:28 --> Helper loaded: url_helper
INFO - 2025-07-01 10:19:28 --> Helper loaded: file_helper
INFO - 2025-07-01 10:19:28 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:28 --> Email Class Initialized
INFO - 2025-07-01 10:19:28 --> Email Class Initialized
DEBUG - 2025-07-01 10:19:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-07-01 10:19:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:19:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:19:28 --> Controller Class Initialized
INFO - 2025-07-01 10:19:28 --> Helper loaded: form_helper
INFO - 2025-07-01 10:19:28 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:19:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:19:28 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:28 --> Model "Crud" initialized
INFO - 2025-07-01 10:19:28 --> Final output sent to browser
DEBUG - 2025-07-01 10:19:28 --> Total execution time: 0.0200
INFO - 2025-07-01 10:19:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:19:28 --> Controller Class Initialized
INFO - 2025-07-01 10:19:28 --> Helper loaded: form_helper
INFO - 2025-07-01 10:19:28 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:19:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:19:28 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:28 --> Model "Crud" initialized
INFO - 2025-07-01 10:19:28 --> Final output sent to browser
DEBUG - 2025-07-01 10:19:28 --> Total execution time: 0.0338
INFO - 2025-07-01 10:19:36 --> Config Class Initialized
INFO - 2025-07-01 10:19:36 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:19:36 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:19:36 --> Utf8 Class Initialized
INFO - 2025-07-01 10:19:36 --> URI Class Initialized
INFO - 2025-07-01 10:19:36 --> Router Class Initialized
INFO - 2025-07-01 10:19:36 --> Output Class Initialized
INFO - 2025-07-01 10:19:36 --> Security Class Initialized
DEBUG - 2025-07-01 10:19:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:19:36 --> Input Class Initialized
INFO - 2025-07-01 10:19:36 --> Language Class Initialized
INFO - 2025-07-01 10:19:36 --> Loader Class Initialized
INFO - 2025-07-01 10:19:36 --> Helper loaded: url_helper
INFO - 2025-07-01 10:19:36 --> Helper loaded: file_helper
INFO - 2025-07-01 10:19:36 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:36 --> Email Class Initialized
DEBUG - 2025-07-01 10:19:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:19:36 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:19:36 --> Controller Class Initialized
INFO - 2025-07-01 10:19:36 --> Helper loaded: form_helper
INFO - 2025-07-01 10:19:36 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:19:36 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:19:36 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:36 --> Model "Crud" initialized
INFO - 2025-07-01 10:19:36 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-07-01 10:19:36 --> File loaded: /var/www/html/hris_lnd/application/views/report/attandance_summary.php
INFO - 2025-07-01 10:19:36 --> Final output sent to browser
DEBUG - 2025-07-01 10:19:36 --> Total execution time: 0.0241
INFO - 2025-07-01 10:19:37 --> Config Class Initialized
INFO - 2025-07-01 10:19:37 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:19:37 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:19:37 --> Utf8 Class Initialized
INFO - 2025-07-01 10:19:37 --> URI Class Initialized
INFO - 2025-07-01 10:19:37 --> Router Class Initialized
INFO - 2025-07-01 10:19:37 --> Output Class Initialized
INFO - 2025-07-01 10:19:37 --> Security Class Initialized
DEBUG - 2025-07-01 10:19:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:19:37 --> Input Class Initialized
INFO - 2025-07-01 10:19:37 --> Language Class Initialized
INFO - 2025-07-01 10:19:37 --> Loader Class Initialized
INFO - 2025-07-01 10:19:37 --> Helper loaded: url_helper
INFO - 2025-07-01 10:19:37 --> Helper loaded: file_helper
INFO - 2025-07-01 10:19:37 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:37 --> Email Class Initialized
DEBUG - 2025-07-01 10:19:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:19:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:19:37 --> Controller Class Initialized
INFO - 2025-07-01 10:19:37 --> Helper loaded: form_helper
INFO - 2025-07-01 10:19:37 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:19:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:19:37 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:37 --> Model "Crud" initialized
INFO - 2025-07-01 10:19:37 --> Final output sent to browser
DEBUG - 2025-07-01 10:19:37 --> Total execution time: 0.0141
INFO - 2025-07-01 10:19:37 --> Config Class Initialized
INFO - 2025-07-01 10:19:37 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:19:37 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:19:37 --> Utf8 Class Initialized
INFO - 2025-07-01 10:19:37 --> URI Class Initialized
INFO - 2025-07-01 10:19:37 --> Router Class Initialized
INFO - 2025-07-01 10:19:37 --> Output Class Initialized
INFO - 2025-07-01 10:19:37 --> Security Class Initialized
DEBUG - 2025-07-01 10:19:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:19:37 --> Input Class Initialized
INFO - 2025-07-01 10:19:37 --> Language Class Initialized
INFO - 2025-07-01 10:19:37 --> Loader Class Initialized
INFO - 2025-07-01 10:19:37 --> Helper loaded: url_helper
INFO - 2025-07-01 10:19:37 --> Helper loaded: file_helper
INFO - 2025-07-01 10:19:37 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:37 --> Email Class Initialized
DEBUG - 2025-07-01 10:19:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:19:37 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:19:37 --> Controller Class Initialized
INFO - 2025-07-01 10:19:37 --> Helper loaded: form_helper
INFO - 2025-07-01 10:19:37 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:19:37 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:19:37 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:37 --> Model "Crud" initialized
INFO - 2025-07-01 10:19:37 --> Final output sent to browser
DEBUG - 2025-07-01 10:19:37 --> Total execution time: 0.0474
INFO - 2025-07-01 10:19:38 --> Config Class Initialized
INFO - 2025-07-01 10:19:38 --> Hooks Class Initialized
INFO - 2025-07-01 10:19:38 --> Config Class Initialized
DEBUG - 2025-07-01 10:19:38 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:19:38 --> Hooks Class Initialized
INFO - 2025-07-01 10:19:38 --> Utf8 Class Initialized
INFO - 2025-07-01 10:19:38 --> URI Class Initialized
DEBUG - 2025-07-01 10:19:38 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:19:38 --> Router Class Initialized
INFO - 2025-07-01 10:19:38 --> Utf8 Class Initialized
INFO - 2025-07-01 10:19:38 --> Output Class Initialized
INFO - 2025-07-01 10:19:38 --> URI Class Initialized
INFO - 2025-07-01 10:19:38 --> Security Class Initialized
INFO - 2025-07-01 10:19:38 --> Router Class Initialized
DEBUG - 2025-07-01 10:19:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:19:38 --> Output Class Initialized
INFO - 2025-07-01 10:19:38 --> Input Class Initialized
INFO - 2025-07-01 10:19:38 --> Security Class Initialized
INFO - 2025-07-01 10:19:38 --> Language Class Initialized
DEBUG - 2025-07-01 10:19:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:19:38 --> Input Class Initialized
INFO - 2025-07-01 10:19:38 --> Language Class Initialized
INFO - 2025-07-01 10:19:38 --> Loader Class Initialized
INFO - 2025-07-01 10:19:38 --> Loader Class Initialized
INFO - 2025-07-01 10:19:38 --> Helper loaded: url_helper
INFO - 2025-07-01 10:19:38 --> Helper loaded: url_helper
INFO - 2025-07-01 10:19:38 --> Helper loaded: file_helper
INFO - 2025-07-01 10:19:38 --> Helper loaded: file_helper
INFO - 2025-07-01 10:19:38 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:38 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:38 --> Email Class Initialized
INFO - 2025-07-01 10:19:38 --> Email Class Initialized
DEBUG - 2025-07-01 10:19:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-07-01 10:19:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:19:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:19:38 --> Controller Class Initialized
INFO - 2025-07-01 10:19:38 --> Helper loaded: form_helper
INFO - 2025-07-01 10:19:38 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:19:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:19:38 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:38 --> Model "Crud" initialized
INFO - 2025-07-01 10:19:38 --> Final output sent to browser
DEBUG - 2025-07-01 10:19:38 --> Total execution time: 0.0209
INFO - 2025-07-01 10:19:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:19:38 --> Controller Class Initialized
INFO - 2025-07-01 10:19:38 --> Helper loaded: form_helper
INFO - 2025-07-01 10:19:38 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:19:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:19:38 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:38 --> Model "Crud" initialized
INFO - 2025-07-01 10:19:38 --> Final output sent to browser
DEBUG - 2025-07-01 10:19:38 --> Total execution time: 0.0411
INFO - 2025-07-01 10:19:42 --> Config Class Initialized
INFO - 2025-07-01 10:19:42 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:19:42 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:19:42 --> Utf8 Class Initialized
INFO - 2025-07-01 10:19:42 --> URI Class Initialized
INFO - 2025-07-01 10:19:42 --> Router Class Initialized
INFO - 2025-07-01 10:19:42 --> Output Class Initialized
INFO - 2025-07-01 10:19:42 --> Security Class Initialized
DEBUG - 2025-07-01 10:19:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:19:42 --> Input Class Initialized
INFO - 2025-07-01 10:19:42 --> Language Class Initialized
INFO - 2025-07-01 10:19:42 --> Loader Class Initialized
INFO - 2025-07-01 10:19:42 --> Helper loaded: url_helper
INFO - 2025-07-01 10:19:42 --> Helper loaded: file_helper
INFO - 2025-07-01 10:19:42 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:42 --> Email Class Initialized
DEBUG - 2025-07-01 10:19:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:19:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:19:42 --> Controller Class Initialized
INFO - 2025-07-01 10:19:42 --> Helper loaded: form_helper
INFO - 2025-07-01 10:19:42 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:19:42 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:19:42 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:42 --> Model "Crud" initialized
INFO - 2025-07-01 10:19:42 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-07-01 10:19:42 --> File loaded: /var/www/html/hris_lnd/application/views/dashboard/payrolls.php
INFO - 2025-07-01 10:19:42 --> Final output sent to browser
DEBUG - 2025-07-01 10:19:42 --> Total execution time: 0.0157
INFO - 2025-07-01 10:19:42 --> Config Class Initialized
INFO - 2025-07-01 10:19:42 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:19:42 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:19:42 --> Utf8 Class Initialized
INFO - 2025-07-01 10:19:42 --> URI Class Initialized
INFO - 2025-07-01 10:19:42 --> Router Class Initialized
INFO - 2025-07-01 10:19:42 --> Output Class Initialized
INFO - 2025-07-01 10:19:42 --> Security Class Initialized
DEBUG - 2025-07-01 10:19:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:19:42 --> Input Class Initialized
INFO - 2025-07-01 10:19:42 --> Language Class Initialized
INFO - 2025-07-01 10:19:42 --> Loader Class Initialized
INFO - 2025-07-01 10:19:42 --> Helper loaded: url_helper
INFO - 2025-07-01 10:19:42 --> Helper loaded: file_helper
INFO - 2025-07-01 10:19:42 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:42 --> Email Class Initialized
DEBUG - 2025-07-01 10:19:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:19:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:19:42 --> Controller Class Initialized
INFO - 2025-07-01 10:19:42 --> Helper loaded: form_helper
INFO - 2025-07-01 10:19:42 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:19:42 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:19:42 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:42 --> Model "Crud" initialized
INFO - 2025-07-01 10:19:42 --> Final output sent to browser
DEBUG - 2025-07-01 10:19:42 --> Total execution time: 0.0168
INFO - 2025-07-01 10:19:47 --> Config Class Initialized
INFO - 2025-07-01 10:19:47 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:19:47 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:19:47 --> Utf8 Class Initialized
INFO - 2025-07-01 10:19:47 --> URI Class Initialized
INFO - 2025-07-01 10:19:47 --> Router Class Initialized
INFO - 2025-07-01 10:19:47 --> Output Class Initialized
INFO - 2025-07-01 10:19:47 --> Security Class Initialized
DEBUG - 2025-07-01 10:19:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:19:47 --> Input Class Initialized
INFO - 2025-07-01 10:19:47 --> Language Class Initialized
INFO - 2025-07-01 10:19:47 --> Loader Class Initialized
INFO - 2025-07-01 10:19:47 --> Helper loaded: url_helper
INFO - 2025-07-01 10:19:47 --> Helper loaded: file_helper
INFO - 2025-07-01 10:19:47 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:47 --> Email Class Initialized
DEBUG - 2025-07-01 10:19:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:19:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:19:47 --> Controller Class Initialized
INFO - 2025-07-01 10:19:47 --> Helper loaded: form_helper
INFO - 2025-07-01 10:19:47 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:19:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:19:47 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:47 --> Model "Crud" initialized
INFO - 2025-07-01 10:19:47 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-07-01 10:19:47 --> File loaded: /var/www/html/hris_lnd/application/views/payroll/bpjs.php
INFO - 2025-07-01 10:19:47 --> Final output sent to browser
DEBUG - 2025-07-01 10:19:47 --> Total execution time: 0.0169
INFO - 2025-07-01 10:19:47 --> Config Class Initialized
INFO - 2025-07-01 10:19:47 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:19:47 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:19:47 --> Utf8 Class Initialized
INFO - 2025-07-01 10:19:47 --> URI Class Initialized
INFO - 2025-07-01 10:19:47 --> Router Class Initialized
INFO - 2025-07-01 10:19:47 --> Output Class Initialized
INFO - 2025-07-01 10:19:47 --> Security Class Initialized
DEBUG - 2025-07-01 10:19:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:19:47 --> Input Class Initialized
INFO - 2025-07-01 10:19:47 --> Language Class Initialized
INFO - 2025-07-01 10:19:47 --> Loader Class Initialized
INFO - 2025-07-01 10:19:47 --> Helper loaded: url_helper
INFO - 2025-07-01 10:19:47 --> Helper loaded: file_helper
INFO - 2025-07-01 10:19:47 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:47 --> Email Class Initialized
DEBUG - 2025-07-01 10:19:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:19:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:19:47 --> Controller Class Initialized
INFO - 2025-07-01 10:19:47 --> Helper loaded: form_helper
INFO - 2025-07-01 10:19:47 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:19:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:19:47 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:47 --> Model "Crud" initialized
INFO - 2025-07-01 10:19:47 --> Final output sent to browser
DEBUG - 2025-07-01 10:19:47 --> Total execution time: 0.0401
INFO - 2025-07-01 10:19:47 --> Config Class Initialized
INFO - 2025-07-01 10:19:47 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:19:47 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:19:47 --> Utf8 Class Initialized
INFO - 2025-07-01 10:19:47 --> URI Class Initialized
INFO - 2025-07-01 10:19:47 --> Router Class Initialized
INFO - 2025-07-01 10:19:47 --> Output Class Initialized
INFO - 2025-07-01 10:19:47 --> Security Class Initialized
DEBUG - 2025-07-01 10:19:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:19:47 --> Input Class Initialized
INFO - 2025-07-01 10:19:47 --> Language Class Initialized
INFO - 2025-07-01 10:19:47 --> Loader Class Initialized
INFO - 2025-07-01 10:19:47 --> Helper loaded: url_helper
INFO - 2025-07-01 10:19:47 --> Helper loaded: file_helper
INFO - 2025-07-01 10:19:47 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:47 --> Email Class Initialized
DEBUG - 2025-07-01 10:19:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:19:47 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:19:47 --> Controller Class Initialized
INFO - 2025-07-01 10:19:47 --> Helper loaded: form_helper
INFO - 2025-07-01 10:19:47 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:19:47 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:19:47 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:47 --> Model "Crud" initialized
INFO - 2025-07-01 10:19:47 --> Final output sent to browser
DEBUG - 2025-07-01 10:19:47 --> Total execution time: 0.0115
INFO - 2025-07-01 10:19:48 --> Config Class Initialized
INFO - 2025-07-01 10:19:48 --> Config Class Initialized
INFO - 2025-07-01 10:19:48 --> Hooks Class Initialized
INFO - 2025-07-01 10:19:48 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:19:48 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:19:48 --> Utf8 Class Initialized
DEBUG - 2025-07-01 10:19:48 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:19:48 --> Utf8 Class Initialized
INFO - 2025-07-01 10:19:48 --> URI Class Initialized
INFO - 2025-07-01 10:19:48 --> URI Class Initialized
INFO - 2025-07-01 10:19:48 --> Router Class Initialized
INFO - 2025-07-01 10:19:48 --> Router Class Initialized
INFO - 2025-07-01 10:19:48 --> Output Class Initialized
INFO - 2025-07-01 10:19:48 --> Output Class Initialized
INFO - 2025-07-01 10:19:48 --> Security Class Initialized
INFO - 2025-07-01 10:19:48 --> Security Class Initialized
DEBUG - 2025-07-01 10:19:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-07-01 10:19:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:19:48 --> Input Class Initialized
INFO - 2025-07-01 10:19:48 --> Input Class Initialized
INFO - 2025-07-01 10:19:48 --> Language Class Initialized
INFO - 2025-07-01 10:19:48 --> Language Class Initialized
INFO - 2025-07-01 10:19:48 --> Loader Class Initialized
INFO - 2025-07-01 10:19:48 --> Loader Class Initialized
INFO - 2025-07-01 10:19:48 --> Helper loaded: url_helper
INFO - 2025-07-01 10:19:48 --> Helper loaded: url_helper
INFO - 2025-07-01 10:19:48 --> Helper loaded: file_helper
INFO - 2025-07-01 10:19:48 --> Helper loaded: file_helper
INFO - 2025-07-01 10:19:48 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:48 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:48 --> Email Class Initialized
DEBUG - 2025-07-01 10:19:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:19:48 --> Email Class Initialized
INFO - 2025-07-01 10:19:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:19:48 --> Controller Class Initialized
DEBUG - 2025-07-01 10:19:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:19:48 --> Helper loaded: form_helper
INFO - 2025-07-01 10:19:48 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:19:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:19:48 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:48 --> Model "Crud" initialized
INFO - 2025-07-01 10:19:48 --> Final output sent to browser
DEBUG - 2025-07-01 10:19:48 --> Total execution time: 0.0308
INFO - 2025-07-01 10:19:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:19:48 --> Controller Class Initialized
INFO - 2025-07-01 10:19:48 --> Helper loaded: form_helper
INFO - 2025-07-01 10:19:48 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:19:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:19:48 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:48 --> Model "Crud" initialized
INFO - 2025-07-01 10:19:48 --> Final output sent to browser
DEBUG - 2025-07-01 10:19:48 --> Total execution time: 0.0536
INFO - 2025-07-01 10:19:58 --> Config Class Initialized
INFO - 2025-07-01 10:19:58 --> Config Class Initialized
INFO - 2025-07-01 10:19:58 --> Hooks Class Initialized
INFO - 2025-07-01 10:19:58 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:19:58 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:19:58 --> Utf8 Class Initialized
DEBUG - 2025-07-01 10:19:58 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:19:58 --> URI Class Initialized
INFO - 2025-07-01 10:19:58 --> Utf8 Class Initialized
INFO - 2025-07-01 10:19:58 --> Router Class Initialized
INFO - 2025-07-01 10:19:58 --> Output Class Initialized
INFO - 2025-07-01 10:19:58 --> URI Class Initialized
INFO - 2025-07-01 10:19:58 --> Security Class Initialized
INFO - 2025-07-01 10:19:58 --> Router Class Initialized
DEBUG - 2025-07-01 10:19:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:19:58 --> Output Class Initialized
INFO - 2025-07-01 10:19:58 --> Input Class Initialized
INFO - 2025-07-01 10:19:58 --> Security Class Initialized
INFO - 2025-07-01 10:19:58 --> Language Class Initialized
DEBUG - 2025-07-01 10:19:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:19:58 --> Input Class Initialized
INFO - 2025-07-01 10:19:58 --> Language Class Initialized
INFO - 2025-07-01 10:19:58 --> Loader Class Initialized
INFO - 2025-07-01 10:19:58 --> Loader Class Initialized
INFO - 2025-07-01 10:19:58 --> Helper loaded: url_helper
INFO - 2025-07-01 10:19:58 --> Helper loaded: url_helper
INFO - 2025-07-01 10:19:58 --> Helper loaded: file_helper
INFO - 2025-07-01 10:19:58 --> Helper loaded: file_helper
INFO - 2025-07-01 10:19:58 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:58 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:58 --> Email Class Initialized
DEBUG - 2025-07-01 10:19:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:19:58 --> Email Class Initialized
INFO - 2025-07-01 10:19:58 --> Session: Class initialized using 'files' driver.
DEBUG - 2025-07-01 10:19:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:19:58 --> Controller Class Initialized
INFO - 2025-07-01 10:19:58 --> Helper loaded: form_helper
INFO - 2025-07-01 10:19:58 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:19:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:19:58 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:58 --> Model "Crud" initialized
INFO - 2025-07-01 10:19:58 --> Final output sent to browser
DEBUG - 2025-07-01 10:19:58 --> Total execution time: 0.0246
INFO - 2025-07-01 10:19:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:19:58 --> Controller Class Initialized
INFO - 2025-07-01 10:19:58 --> Helper loaded: form_helper
INFO - 2025-07-01 10:19:58 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:19:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:19:58 --> Database Driver Class Initialized
INFO - 2025-07-01 10:19:58 --> Model "Crud" initialized
INFO - 2025-07-01 10:19:58 --> Final output sent to browser
DEBUG - 2025-07-01 10:19:58 --> Total execution time: 0.0484
INFO - 2025-07-01 10:20:08 --> Config Class Initialized
INFO - 2025-07-01 10:20:08 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:20:08 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:20:08 --> Utf8 Class Initialized
INFO - 2025-07-01 10:20:08 --> URI Class Initialized
INFO - 2025-07-01 10:20:08 --> Router Class Initialized
INFO - 2025-07-01 10:20:08 --> Output Class Initialized
INFO - 2025-07-01 10:20:08 --> Security Class Initialized
INFO - 2025-07-01 10:20:08 --> Config Class Initialized
DEBUG - 2025-07-01 10:20:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:20:08 --> Hooks Class Initialized
INFO - 2025-07-01 10:20:08 --> Input Class Initialized
DEBUG - 2025-07-01 10:20:08 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:20:08 --> Language Class Initialized
INFO - 2025-07-01 10:20:08 --> Utf8 Class Initialized
INFO - 2025-07-01 10:20:08 --> Loader Class Initialized
INFO - 2025-07-01 10:20:08 --> URI Class Initialized
INFO - 2025-07-01 10:20:08 --> Helper loaded: url_helper
INFO - 2025-07-01 10:20:08 --> Router Class Initialized
INFO - 2025-07-01 10:20:08 --> Helper loaded: file_helper
INFO - 2025-07-01 10:20:08 --> Output Class Initialized
INFO - 2025-07-01 10:20:08 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:08 --> Security Class Initialized
DEBUG - 2025-07-01 10:20:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:20:08 --> Input Class Initialized
INFO - 2025-07-01 10:20:08 --> Language Class Initialized
INFO - 2025-07-01 10:20:08 --> Loader Class Initialized
INFO - 2025-07-01 10:20:08 --> Helper loaded: url_helper
INFO - 2025-07-01 10:20:08 --> Helper loaded: file_helper
INFO - 2025-07-01 10:20:08 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:08 --> Email Class Initialized
INFO - 2025-07-01 10:20:08 --> Email Class Initialized
DEBUG - 2025-07-01 10:20:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-07-01 10:20:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:20:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:20:08 --> Controller Class Initialized
INFO - 2025-07-01 10:20:08 --> Helper loaded: form_helper
INFO - 2025-07-01 10:20:08 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:20:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:20:08 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:08 --> Model "Crud" initialized
INFO - 2025-07-01 10:20:08 --> Final output sent to browser
DEBUG - 2025-07-01 10:20:08 --> Total execution time: 0.0180
INFO - 2025-07-01 10:20:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:20:08 --> Controller Class Initialized
INFO - 2025-07-01 10:20:08 --> Helper loaded: form_helper
INFO - 2025-07-01 10:20:08 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:20:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:20:08 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:08 --> Model "Crud" initialized
INFO - 2025-07-01 10:20:08 --> Final output sent to browser
DEBUG - 2025-07-01 10:20:08 --> Total execution time: 0.0369
INFO - 2025-07-01 10:20:18 --> Config Class Initialized
INFO - 2025-07-01 10:20:18 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:20:18 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:20:18 --> Utf8 Class Initialized
INFO - 2025-07-01 10:20:18 --> URI Class Initialized
INFO - 2025-07-01 10:20:18 --> Router Class Initialized
INFO - 2025-07-01 10:20:18 --> Config Class Initialized
INFO - 2025-07-01 10:20:18 --> Output Class Initialized
INFO - 2025-07-01 10:20:18 --> Hooks Class Initialized
INFO - 2025-07-01 10:20:18 --> Security Class Initialized
DEBUG - 2025-07-01 10:20:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2025-07-01 10:20:18 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:20:18 --> Input Class Initialized
INFO - 2025-07-01 10:20:18 --> Utf8 Class Initialized
INFO - 2025-07-01 10:20:18 --> Language Class Initialized
INFO - 2025-07-01 10:20:18 --> URI Class Initialized
INFO - 2025-07-01 10:20:18 --> Loader Class Initialized
INFO - 2025-07-01 10:20:18 --> Router Class Initialized
INFO - 2025-07-01 10:20:18 --> Helper loaded: url_helper
INFO - 2025-07-01 10:20:18 --> Output Class Initialized
INFO - 2025-07-01 10:20:18 --> Helper loaded: file_helper
INFO - 2025-07-01 10:20:18 --> Security Class Initialized
DEBUG - 2025-07-01 10:20:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:20:18 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:18 --> Input Class Initialized
INFO - 2025-07-01 10:20:18 --> Language Class Initialized
INFO - 2025-07-01 10:20:18 --> Loader Class Initialized
INFO - 2025-07-01 10:20:18 --> Helper loaded: url_helper
INFO - 2025-07-01 10:20:18 --> Helper loaded: file_helper
INFO - 2025-07-01 10:20:18 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:18 --> Email Class Initialized
INFO - 2025-07-01 10:20:18 --> Email Class Initialized
DEBUG - 2025-07-01 10:20:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-07-01 10:20:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:20:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:20:18 --> Controller Class Initialized
INFO - 2025-07-01 10:20:18 --> Helper loaded: form_helper
INFO - 2025-07-01 10:20:18 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:20:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:20:18 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:18 --> Model "Crud" initialized
INFO - 2025-07-01 10:20:18 --> Final output sent to browser
DEBUG - 2025-07-01 10:20:18 --> Total execution time: 0.0224
INFO - 2025-07-01 10:20:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:20:18 --> Controller Class Initialized
INFO - 2025-07-01 10:20:18 --> Helper loaded: form_helper
INFO - 2025-07-01 10:20:18 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:20:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:20:18 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:18 --> Model "Crud" initialized
INFO - 2025-07-01 10:20:18 --> Final output sent to browser
DEBUG - 2025-07-01 10:20:18 --> Total execution time: 0.0393
INFO - 2025-07-01 10:20:28 --> Config Class Initialized
INFO - 2025-07-01 10:20:28 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:20:28 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:20:28 --> Utf8 Class Initialized
INFO - 2025-07-01 10:20:28 --> URI Class Initialized
INFO - 2025-07-01 10:20:28 --> Router Class Initialized
INFO - 2025-07-01 10:20:28 --> Output Class Initialized
INFO - 2025-07-01 10:20:28 --> Security Class Initialized
DEBUG - 2025-07-01 10:20:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:20:28 --> Input Class Initialized
INFO - 2025-07-01 10:20:28 --> Config Class Initialized
INFO - 2025-07-01 10:20:28 --> Language Class Initialized
INFO - 2025-07-01 10:20:28 --> Hooks Class Initialized
INFO - 2025-07-01 10:20:28 --> Loader Class Initialized
DEBUG - 2025-07-01 10:20:28 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:20:28 --> Helper loaded: url_helper
INFO - 2025-07-01 10:20:28 --> Utf8 Class Initialized
INFO - 2025-07-01 10:20:28 --> Helper loaded: file_helper
INFO - 2025-07-01 10:20:28 --> URI Class Initialized
INFO - 2025-07-01 10:20:28 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:28 --> Router Class Initialized
INFO - 2025-07-01 10:20:28 --> Output Class Initialized
INFO - 2025-07-01 10:20:28 --> Security Class Initialized
DEBUG - 2025-07-01 10:20:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:20:28 --> Input Class Initialized
INFO - 2025-07-01 10:20:28 --> Language Class Initialized
INFO - 2025-07-01 10:20:28 --> Loader Class Initialized
INFO - 2025-07-01 10:20:28 --> Helper loaded: url_helper
INFO - 2025-07-01 10:20:28 --> Helper loaded: file_helper
INFO - 2025-07-01 10:20:28 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:28 --> Email Class Initialized
DEBUG - 2025-07-01 10:20:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:20:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:20:28 --> Controller Class Initialized
INFO - 2025-07-01 10:20:28 --> Helper loaded: form_helper
INFO - 2025-07-01 10:20:28 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:20:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:20:28 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:28 --> Email Class Initialized
DEBUG - 2025-07-01 10:20:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:20:28 --> Model "Crud" initialized
INFO - 2025-07-01 10:20:28 --> Final output sent to browser
DEBUG - 2025-07-01 10:20:28 --> Total execution time: 0.0250
INFO - 2025-07-01 10:20:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:20:28 --> Controller Class Initialized
INFO - 2025-07-01 10:20:28 --> Helper loaded: form_helper
INFO - 2025-07-01 10:20:28 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:20:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:20:28 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:28 --> Model "Crud" initialized
INFO - 2025-07-01 10:20:28 --> Final output sent to browser
DEBUG - 2025-07-01 10:20:28 --> Total execution time: 0.0408
INFO - 2025-07-01 10:20:31 --> Config Class Initialized
INFO - 2025-07-01 10:20:31 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:20:31 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:20:31 --> Utf8 Class Initialized
INFO - 2025-07-01 10:20:31 --> URI Class Initialized
INFO - 2025-07-01 10:20:31 --> Router Class Initialized
INFO - 2025-07-01 10:20:31 --> Output Class Initialized
INFO - 2025-07-01 10:20:31 --> Security Class Initialized
DEBUG - 2025-07-01 10:20:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:20:31 --> Input Class Initialized
INFO - 2025-07-01 10:20:31 --> Language Class Initialized
INFO - 2025-07-01 10:20:31 --> Loader Class Initialized
INFO - 2025-07-01 10:20:31 --> Helper loaded: url_helper
INFO - 2025-07-01 10:20:31 --> Helper loaded: file_helper
INFO - 2025-07-01 10:20:31 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:31 --> Email Class Initialized
DEBUG - 2025-07-01 10:20:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:20:31 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:20:31 --> Controller Class Initialized
INFO - 2025-07-01 10:20:31 --> Helper loaded: form_helper
INFO - 2025-07-01 10:20:31 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:20:31 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:20:31 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:31 --> Model "Crud" initialized
INFO - 2025-07-01 10:20:31 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-07-01 10:20:31 --> File loaded: /var/www/html/hris_lnd/application/views/relation/reasons.php
INFO - 2025-07-01 10:20:31 --> Final output sent to browser
DEBUG - 2025-07-01 10:20:31 --> Total execution time: 0.0183
INFO - 2025-07-01 10:20:31 --> Config Class Initialized
INFO - 2025-07-01 10:20:31 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:20:31 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:20:31 --> Utf8 Class Initialized
INFO - 2025-07-01 10:20:31 --> URI Class Initialized
INFO - 2025-07-01 10:20:31 --> Router Class Initialized
INFO - 2025-07-01 10:20:31 --> Output Class Initialized
INFO - 2025-07-01 10:20:31 --> Security Class Initialized
DEBUG - 2025-07-01 10:20:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:20:31 --> Input Class Initialized
INFO - 2025-07-01 10:20:31 --> Language Class Initialized
INFO - 2025-07-01 10:20:31 --> Loader Class Initialized
INFO - 2025-07-01 10:20:31 --> Helper loaded: url_helper
INFO - 2025-07-01 10:20:31 --> Helper loaded: file_helper
INFO - 2025-07-01 10:20:31 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:31 --> Email Class Initialized
DEBUG - 2025-07-01 10:20:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:20:31 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:20:31 --> Controller Class Initialized
INFO - 2025-07-01 10:20:31 --> Helper loaded: form_helper
INFO - 2025-07-01 10:20:31 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:20:31 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:20:31 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:31 --> Model "Crud" initialized
INFO - 2025-07-01 10:20:31 --> Final output sent to browser
DEBUG - 2025-07-01 10:20:31 --> Total execution time: 0.0235
INFO - 2025-07-01 10:20:31 --> Config Class Initialized
INFO - 2025-07-01 10:20:31 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:20:31 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:20:31 --> Utf8 Class Initialized
INFO - 2025-07-01 10:20:31 --> URI Class Initialized
INFO - 2025-07-01 10:20:31 --> Router Class Initialized
INFO - 2025-07-01 10:20:31 --> Output Class Initialized
INFO - 2025-07-01 10:20:31 --> Security Class Initialized
DEBUG - 2025-07-01 10:20:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:20:31 --> Input Class Initialized
INFO - 2025-07-01 10:20:31 --> Language Class Initialized
INFO - 2025-07-01 10:20:31 --> Loader Class Initialized
INFO - 2025-07-01 10:20:31 --> Helper loaded: url_helper
INFO - 2025-07-01 10:20:31 --> Helper loaded: file_helper
INFO - 2025-07-01 10:20:31 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:31 --> Email Class Initialized
DEBUG - 2025-07-01 10:20:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:20:31 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:20:31 --> Controller Class Initialized
INFO - 2025-07-01 10:20:31 --> Helper loaded: form_helper
INFO - 2025-07-01 10:20:31 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:20:31 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:20:31 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:31 --> Model "Crud" initialized
INFO - 2025-07-01 10:20:31 --> Final output sent to browser
DEBUG - 2025-07-01 10:20:31 --> Total execution time: 0.0105
INFO - 2025-07-01 10:20:38 --> Config Class Initialized
INFO - 2025-07-01 10:20:38 --> Config Class Initialized
INFO - 2025-07-01 10:20:38 --> Hooks Class Initialized
INFO - 2025-07-01 10:20:38 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:20:38 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:20:38 --> Utf8 Class Initialized
DEBUG - 2025-07-01 10:20:38 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:20:38 --> URI Class Initialized
INFO - 2025-07-01 10:20:38 --> Utf8 Class Initialized
INFO - 2025-07-01 10:20:38 --> Router Class Initialized
INFO - 2025-07-01 10:20:38 --> URI Class Initialized
INFO - 2025-07-01 10:20:38 --> Output Class Initialized
INFO - 2025-07-01 10:20:38 --> Router Class Initialized
INFO - 2025-07-01 10:20:38 --> Security Class Initialized
INFO - 2025-07-01 10:20:38 --> Output Class Initialized
DEBUG - 2025-07-01 10:20:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:20:38 --> Input Class Initialized
INFO - 2025-07-01 10:20:38 --> Security Class Initialized
INFO - 2025-07-01 10:20:38 --> Language Class Initialized
DEBUG - 2025-07-01 10:20:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:20:38 --> Input Class Initialized
INFO - 2025-07-01 10:20:38 --> Loader Class Initialized
INFO - 2025-07-01 10:20:38 --> Language Class Initialized
INFO - 2025-07-01 10:20:38 --> Helper loaded: url_helper
INFO - 2025-07-01 10:20:38 --> Helper loaded: file_helper
INFO - 2025-07-01 10:20:38 --> Loader Class Initialized
INFO - 2025-07-01 10:20:38 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:38 --> Helper loaded: url_helper
INFO - 2025-07-01 10:20:38 --> Helper loaded: file_helper
INFO - 2025-07-01 10:20:38 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:38 --> Email Class Initialized
DEBUG - 2025-07-01 10:20:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:20:38 --> Email Class Initialized
INFO - 2025-07-01 10:20:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:20:38 --> Controller Class Initialized
INFO - 2025-07-01 10:20:38 --> Helper loaded: form_helper
DEBUG - 2025-07-01 10:20:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:20:38 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:20:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:20:38 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:38 --> Model "Crud" initialized
INFO - 2025-07-01 10:20:38 --> Final output sent to browser
DEBUG - 2025-07-01 10:20:38 --> Total execution time: 0.0176
INFO - 2025-07-01 10:20:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:20:38 --> Controller Class Initialized
INFO - 2025-07-01 10:20:38 --> Helper loaded: form_helper
INFO - 2025-07-01 10:20:38 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:20:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:20:38 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:38 --> Model "Crud" initialized
INFO - 2025-07-01 10:20:38 --> Final output sent to browser
DEBUG - 2025-07-01 10:20:38 --> Total execution time: 0.0420
INFO - 2025-07-01 10:20:42 --> Config Class Initialized
INFO - 2025-07-01 10:20:42 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:20:42 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:20:42 --> Utf8 Class Initialized
INFO - 2025-07-01 10:20:42 --> URI Class Initialized
INFO - 2025-07-01 10:20:42 --> Router Class Initialized
INFO - 2025-07-01 10:20:42 --> Output Class Initialized
INFO - 2025-07-01 10:20:42 --> Security Class Initialized
DEBUG - 2025-07-01 10:20:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:20:42 --> Input Class Initialized
INFO - 2025-07-01 10:20:42 --> Language Class Initialized
INFO - 2025-07-01 10:20:42 --> Loader Class Initialized
INFO - 2025-07-01 10:20:42 --> Helper loaded: url_helper
INFO - 2025-07-01 10:20:42 --> Helper loaded: file_helper
INFO - 2025-07-01 10:20:42 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:42 --> Email Class Initialized
DEBUG - 2025-07-01 10:20:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:20:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:20:42 --> Controller Class Initialized
INFO - 2025-07-01 10:20:42 --> Helper loaded: form_helper
INFO - 2025-07-01 10:20:42 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:20:42 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:20:42 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:42 --> Model "Crud" initialized
INFO - 2025-07-01 10:20:42 --> File loaded: /var/www/html/hris_lnd/application/views/template/header.php
INFO - 2025-07-01 10:20:42 --> File loaded: /var/www/html/hris_lnd/application/views/relation/warning_letters.php
INFO - 2025-07-01 10:20:42 --> Final output sent to browser
DEBUG - 2025-07-01 10:20:42 --> Total execution time: 0.0175
INFO - 2025-07-01 10:20:42 --> Config Class Initialized
INFO - 2025-07-01 10:20:42 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:20:42 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:20:42 --> Utf8 Class Initialized
INFO - 2025-07-01 10:20:42 --> URI Class Initialized
INFO - 2025-07-01 10:20:42 --> Router Class Initialized
INFO - 2025-07-01 10:20:42 --> Output Class Initialized
INFO - 2025-07-01 10:20:42 --> Security Class Initialized
DEBUG - 2025-07-01 10:20:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:20:42 --> Input Class Initialized
INFO - 2025-07-01 10:20:42 --> Language Class Initialized
INFO - 2025-07-01 10:20:42 --> Loader Class Initialized
INFO - 2025-07-01 10:20:42 --> Helper loaded: url_helper
INFO - 2025-07-01 10:20:42 --> Helper loaded: file_helper
INFO - 2025-07-01 10:20:42 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:42 --> Email Class Initialized
DEBUG - 2025-07-01 10:20:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:20:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:20:42 --> Controller Class Initialized
INFO - 2025-07-01 10:20:42 --> Helper loaded: form_helper
INFO - 2025-07-01 10:20:42 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:20:42 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:20:42 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:42 --> Model "Crud" initialized
ERROR - 2025-07-01 10:20:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `a`.`issue_date` < `IS` `NULL`
AND  `b`.`id` LIKE '%%' ESCAPE '!'
AND' at line 9 - Invalid query: SELECT `a`.*, `b`.`name` as `employee_name`, `b`.`number` as `employee_number`, `b`.`date_sign`, `d`.`name` as `division_name`, `e`.`name` as `departement_name`, `f`.`name` as `departement_sub_name`, `c`.`name` as `violation_name`
FROM `warning_letters` `a`
JOIN `employees` `b` ON `a`.`employee_id` = `b`.`id`
JOIN `violations` `c` ON `a`.`violation_id` = `c`.`id`
JOIN `divisions` `d` ON `b`.`division_id` = `d`.`id`
JOIN `departements` `e` ON `b`.`departement_id` = `e`.`id`
JOIN `departement_subs` `f` ON `b`.`departement_sub_id` = `f`.`id`
WHERE `a`.`deleted` = 0
AND `a`.`issue_date` > `IS` `NULL`
AND `a`.`issue_date` < `IS` `NULL`
AND  `b`.`id` LIKE '%%' ESCAPE '!'
AND  `b`.`division_id` LIKE '%%' ESCAPE '!'
AND  `b`.`departement_id` LIKE '%%' ESCAPE '!'
AND  `b`.`departement_sub_id` LIKE '%%' ESCAPE '!'
AND  `a`.`warning_letter` LIKE '%%' ESCAPE '!'
AND  `a`.`violation_id` LIKE '%%' ESCAPE '!'
ORDER BY `b`.`name` ASC
INFO - 2025-07-01 10:20:42 --> Language file loaded: language/english/db_lang.php
INFO - 2025-07-01 10:20:42 --> Config Class Initialized
INFO - 2025-07-01 10:20:42 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:20:42 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:20:42 --> Utf8 Class Initialized
INFO - 2025-07-01 10:20:42 --> URI Class Initialized
INFO - 2025-07-01 10:20:42 --> Router Class Initialized
INFO - 2025-07-01 10:20:42 --> Output Class Initialized
INFO - 2025-07-01 10:20:42 --> Security Class Initialized
DEBUG - 2025-07-01 10:20:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:20:42 --> Input Class Initialized
INFO - 2025-07-01 10:20:42 --> Language Class Initialized
INFO - 2025-07-01 10:20:42 --> Loader Class Initialized
INFO - 2025-07-01 10:20:42 --> Helper loaded: url_helper
INFO - 2025-07-01 10:20:42 --> Helper loaded: file_helper
INFO - 2025-07-01 10:20:42 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:42 --> Config Class Initialized
INFO - 2025-07-01 10:20:42 --> Email Class Initialized
INFO - 2025-07-01 10:20:42 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:20:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-07-01 10:20:42 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:20:42 --> Utf8 Class Initialized
INFO - 2025-07-01 10:20:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:20:42 --> URI Class Initialized
INFO - 2025-07-01 10:20:42 --> Controller Class Initialized
INFO - 2025-07-01 10:20:42 --> Helper loaded: form_helper
INFO - 2025-07-01 10:20:42 --> Router Class Initialized
INFO - 2025-07-01 10:20:42 --> Form Validation Class Initialized
INFO - 2025-07-01 10:20:42 --> Output Class Initialized
DEBUG - 2025-07-01 10:20:42 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:20:42 --> Security Class Initialized
DEBUG - 2025-07-01 10:20:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:20:42 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:42 --> Input Class Initialized
INFO - 2025-07-01 10:20:42 --> Language Class Initialized
INFO - 2025-07-01 10:20:42 --> Loader Class Initialized
INFO - 2025-07-01 10:20:42 --> Helper loaded: url_helper
INFO - 2025-07-01 10:20:42 --> Helper loaded: file_helper
INFO - 2025-07-01 10:20:42 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:42 --> Model "Crud" initialized
INFO - 2025-07-01 10:20:42 --> Email Class Initialized
DEBUG - 2025-07-01 10:20:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:20:42 --> Config Class Initialized
INFO - 2025-07-01 10:20:42 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:20:42 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:20:42 --> Utf8 Class Initialized
INFO - 2025-07-01 10:20:42 --> URI Class Initialized
INFO - 2025-07-01 10:20:42 --> Router Class Initialized
INFO - 2025-07-01 10:20:42 --> Output Class Initialized
INFO - 2025-07-01 10:20:42 --> Security Class Initialized
DEBUG - 2025-07-01 10:20:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:20:42 --> Input Class Initialized
INFO - 2025-07-01 10:20:42 --> Language Class Initialized
INFO - 2025-07-01 10:20:42 --> Loader Class Initialized
INFO - 2025-07-01 10:20:42 --> Helper loaded: url_helper
INFO - 2025-07-01 10:20:42 --> Helper loaded: file_helper
INFO - 2025-07-01 10:20:42 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:42 --> Email Class Initialized
DEBUG - 2025-07-01 10:20:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:20:42 --> Config Class Initialized
INFO - 2025-07-01 10:20:42 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:20:42 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:20:42 --> Utf8 Class Initialized
INFO - 2025-07-01 10:20:42 --> URI Class Initialized
INFO - 2025-07-01 10:20:42 --> Router Class Initialized
INFO - 2025-07-01 10:20:42 --> Output Class Initialized
INFO - 2025-07-01 10:20:42 --> Security Class Initialized
DEBUG - 2025-07-01 10:20:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:20:42 --> Input Class Initialized
INFO - 2025-07-01 10:20:42 --> Language Class Initialized
INFO - 2025-07-01 10:20:42 --> Loader Class Initialized
INFO - 2025-07-01 10:20:42 --> Helper loaded: url_helper
INFO - 2025-07-01 10:20:42 --> Helper loaded: file_helper
INFO - 2025-07-01 10:20:42 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:42 --> Email Class Initialized
DEBUG - 2025-07-01 10:20:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:20:42 --> Final output sent to browser
DEBUG - 2025-07-01 10:20:42 --> Total execution time: 0.0425
INFO - 2025-07-01 10:20:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:20:42 --> Controller Class Initialized
INFO - 2025-07-01 10:20:42 --> Helper loaded: form_helper
INFO - 2025-07-01 10:20:42 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:20:42 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:20:42 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:42 --> Config Class Initialized
INFO - 2025-07-01 10:20:42 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:20:42 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:20:42 --> Utf8 Class Initialized
INFO - 2025-07-01 10:20:42 --> URI Class Initialized
INFO - 2025-07-01 10:20:42 --> Router Class Initialized
INFO - 2025-07-01 10:20:42 --> Output Class Initialized
INFO - 2025-07-01 10:20:42 --> Security Class Initialized
DEBUG - 2025-07-01 10:20:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:20:42 --> Input Class Initialized
INFO - 2025-07-01 10:20:42 --> Language Class Initialized
INFO - 2025-07-01 10:20:42 --> Loader Class Initialized
INFO - 2025-07-01 10:20:42 --> Helper loaded: url_helper
INFO - 2025-07-01 10:20:42 --> Helper loaded: file_helper
INFO - 2025-07-01 10:20:42 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:42 --> Email Class Initialized
DEBUG - 2025-07-01 10:20:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:20:42 --> Model "Crud" initialized
INFO - 2025-07-01 10:20:42 --> Config Class Initialized
INFO - 2025-07-01 10:20:42 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:20:42 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:20:42 --> Utf8 Class Initialized
INFO - 2025-07-01 10:20:42 --> URI Class Initialized
INFO - 2025-07-01 10:20:42 --> Router Class Initialized
INFO - 2025-07-01 10:20:42 --> Output Class Initialized
INFO - 2025-07-01 10:20:42 --> Security Class Initialized
DEBUG - 2025-07-01 10:20:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:20:42 --> Input Class Initialized
INFO - 2025-07-01 10:20:42 --> Language Class Initialized
INFO - 2025-07-01 10:20:42 --> Loader Class Initialized
INFO - 2025-07-01 10:20:42 --> Helper loaded: url_helper
INFO - 2025-07-01 10:20:42 --> Helper loaded: file_helper
INFO - 2025-07-01 10:20:42 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:42 --> Email Class Initialized
DEBUG - 2025-07-01 10:20:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:20:42 --> Final output sent to browser
DEBUG - 2025-07-01 10:20:42 --> Total execution time: 0.0670
INFO - 2025-07-01 10:20:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:20:42 --> Controller Class Initialized
INFO - 2025-07-01 10:20:42 --> Helper loaded: form_helper
INFO - 2025-07-01 10:20:42 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:20:42 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:20:42 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:42 --> Model "Crud" initialized
INFO - 2025-07-01 10:20:42 --> Final output sent to browser
DEBUG - 2025-07-01 10:20:42 --> Total execution time: 0.0690
INFO - 2025-07-01 10:20:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:20:42 --> Controller Class Initialized
INFO - 2025-07-01 10:20:42 --> Helper loaded: form_helper
INFO - 2025-07-01 10:20:42 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:20:42 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:20:42 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:42 --> Model "Crud" initialized
ERROR - 2025-07-01 10:20:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`NULL`
AND `a`.`issue_date` < `IS` `NULL`
AND  `b`.`id` LIKE '%%' ESCAPE '!'
AND' at line 9 - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `warning_letters` `a`
JOIN `employees` `b` ON `a`.`employee_id` = `b`.`id`
JOIN `violations` `c` ON `a`.`violation_id` = `c`.`id`
JOIN `divisions` `d` ON `b`.`division_id` = `d`.`id`
JOIN `departements` `e` ON `b`.`departement_id` = `e`.`id`
JOIN `departement_subs` `f` ON `b`.`departement_sub_id` = `f`.`id`
WHERE `a`.`deleted` = 0
AND `a`.`issue_date` > `IS` `NULL`
AND `a`.`issue_date` < `IS` `NULL`
AND  `b`.`id` LIKE '%%' ESCAPE '!'
AND  `b`.`division_id` LIKE '%%' ESCAPE '!'
AND  `b`.`departement_id` LIKE '%%' ESCAPE '!'
AND  `b`.`departement_sub_id` LIKE '%%' ESCAPE '!'
AND  `a`.`warning_letter` LIKE '%%' ESCAPE '!'
AND  `a`.`violation_id` LIKE '%%' ESCAPE '!'
INFO - 2025-07-01 10:20:42 --> Language file loaded: language/english/db_lang.php
INFO - 2025-07-01 10:20:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:20:42 --> Controller Class Initialized
INFO - 2025-07-01 10:20:42 --> Helper loaded: form_helper
INFO - 2025-07-01 10:20:42 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:20:42 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:20:42 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:42 --> Model "Crud" initialized
INFO - 2025-07-01 10:20:42 --> Final output sent to browser
DEBUG - 2025-07-01 10:20:42 --> Total execution time: 0.0536
INFO - 2025-07-01 10:20:42 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:20:42 --> Controller Class Initialized
INFO - 2025-07-01 10:20:42 --> Helper loaded: form_helper
INFO - 2025-07-01 10:20:42 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:20:42 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:20:42 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:42 --> Model "Crud" initialized
INFO - 2025-07-01 10:20:42 --> Final output sent to browser
DEBUG - 2025-07-01 10:20:42 --> Total execution time: 0.0638
INFO - 2025-07-01 10:20:48 --> Config Class Initialized
INFO - 2025-07-01 10:20:48 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:20:48 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:20:48 --> Utf8 Class Initialized
INFO - 2025-07-01 10:20:48 --> URI Class Initialized
INFO - 2025-07-01 10:20:48 --> Router Class Initialized
INFO - 2025-07-01 10:20:48 --> Output Class Initialized
INFO - 2025-07-01 10:20:48 --> Security Class Initialized
DEBUG - 2025-07-01 10:20:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:20:48 --> Input Class Initialized
INFO - 2025-07-01 10:20:48 --> Language Class Initialized
INFO - 2025-07-01 10:20:48 --> Config Class Initialized
INFO - 2025-07-01 10:20:48 --> Hooks Class Initialized
INFO - 2025-07-01 10:20:48 --> Loader Class Initialized
DEBUG - 2025-07-01 10:20:48 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:20:48 --> Helper loaded: url_helper
INFO - 2025-07-01 10:20:48 --> Utf8 Class Initialized
INFO - 2025-07-01 10:20:48 --> Helper loaded: file_helper
INFO - 2025-07-01 10:20:48 --> URI Class Initialized
INFO - 2025-07-01 10:20:48 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:48 --> Router Class Initialized
INFO - 2025-07-01 10:20:48 --> Output Class Initialized
INFO - 2025-07-01 10:20:48 --> Security Class Initialized
DEBUG - 2025-07-01 10:20:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:20:48 --> Input Class Initialized
INFO - 2025-07-01 10:20:48 --> Language Class Initialized
INFO - 2025-07-01 10:20:48 --> Loader Class Initialized
INFO - 2025-07-01 10:20:48 --> Helper loaded: url_helper
INFO - 2025-07-01 10:20:48 --> Helper loaded: file_helper
INFO - 2025-07-01 10:20:48 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:48 --> Email Class Initialized
DEBUG - 2025-07-01 10:20:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:20:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:20:48 --> Controller Class Initialized
INFO - 2025-07-01 10:20:48 --> Helper loaded: form_helper
INFO - 2025-07-01 10:20:48 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:20:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:20:48 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:48 --> Email Class Initialized
DEBUG - 2025-07-01 10:20:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:20:48 --> Model "Crud" initialized
INFO - 2025-07-01 10:20:48 --> Final output sent to browser
DEBUG - 2025-07-01 10:20:48 --> Total execution time: 0.0222
INFO - 2025-07-01 10:20:48 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:20:48 --> Controller Class Initialized
INFO - 2025-07-01 10:20:48 --> Helper loaded: form_helper
INFO - 2025-07-01 10:20:48 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:20:48 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:20:48 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:48 --> Model "Crud" initialized
INFO - 2025-07-01 10:20:48 --> Final output sent to browser
DEBUG - 2025-07-01 10:20:48 --> Total execution time: 0.0493
INFO - 2025-07-01 10:20:58 --> Config Class Initialized
INFO - 2025-07-01 10:20:58 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:20:58 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:20:58 --> Utf8 Class Initialized
INFO - 2025-07-01 10:20:58 --> URI Class Initialized
INFO - 2025-07-01 10:20:58 --> Router Class Initialized
INFO - 2025-07-01 10:20:58 --> Config Class Initialized
INFO - 2025-07-01 10:20:58 --> Output Class Initialized
INFO - 2025-07-01 10:20:58 --> Hooks Class Initialized
INFO - 2025-07-01 10:20:58 --> Security Class Initialized
DEBUG - 2025-07-01 10:20:58 --> UTF-8 Support Enabled
DEBUG - 2025-07-01 10:20:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:20:58 --> Utf8 Class Initialized
INFO - 2025-07-01 10:20:58 --> Input Class Initialized
INFO - 2025-07-01 10:20:58 --> URI Class Initialized
INFO - 2025-07-01 10:20:58 --> Language Class Initialized
INFO - 2025-07-01 10:20:58 --> Router Class Initialized
INFO - 2025-07-01 10:20:58 --> Output Class Initialized
INFO - 2025-07-01 10:20:58 --> Loader Class Initialized
INFO - 2025-07-01 10:20:58 --> Security Class Initialized
INFO - 2025-07-01 10:20:58 --> Helper loaded: url_helper
DEBUG - 2025-07-01 10:20:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:20:58 --> Helper loaded: file_helper
INFO - 2025-07-01 10:20:58 --> Input Class Initialized
INFO - 2025-07-01 10:20:58 --> Language Class Initialized
INFO - 2025-07-01 10:20:58 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:58 --> Loader Class Initialized
INFO - 2025-07-01 10:20:58 --> Helper loaded: url_helper
INFO - 2025-07-01 10:20:58 --> Helper loaded: file_helper
INFO - 2025-07-01 10:20:58 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:58 --> Email Class Initialized
DEBUG - 2025-07-01 10:20:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:20:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:20:58 --> Controller Class Initialized
INFO - 2025-07-01 10:20:58 --> Email Class Initialized
INFO - 2025-07-01 10:20:58 --> Helper loaded: form_helper
DEBUG - 2025-07-01 10:20:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:20:58 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:20:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:20:58 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:58 --> Model "Crud" initialized
INFO - 2025-07-01 10:20:58 --> Final output sent to browser
DEBUG - 2025-07-01 10:20:58 --> Total execution time: 0.0197
INFO - 2025-07-01 10:20:58 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:20:58 --> Controller Class Initialized
INFO - 2025-07-01 10:20:58 --> Helper loaded: form_helper
INFO - 2025-07-01 10:20:58 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:20:58 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:20:58 --> Database Driver Class Initialized
INFO - 2025-07-01 10:20:58 --> Model "Crud" initialized
INFO - 2025-07-01 10:20:58 --> Final output sent to browser
DEBUG - 2025-07-01 10:20:58 --> Total execution time: 0.0375
INFO - 2025-07-01 10:21:08 --> Config Class Initialized
INFO - 2025-07-01 10:21:08 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:21:08 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:21:08 --> Utf8 Class Initialized
INFO - 2025-07-01 10:21:08 --> URI Class Initialized
INFO - 2025-07-01 10:21:08 --> Router Class Initialized
INFO - 2025-07-01 10:21:08 --> Output Class Initialized
INFO - 2025-07-01 10:21:08 --> Security Class Initialized
DEBUG - 2025-07-01 10:21:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:21:08 --> Input Class Initialized
INFO - 2025-07-01 10:21:08 --> Language Class Initialized
INFO - 2025-07-01 10:21:08 --> Loader Class Initialized
INFO - 2025-07-01 10:21:08 --> Helper loaded: url_helper
INFO - 2025-07-01 10:21:08 --> Helper loaded: file_helper
INFO - 2025-07-01 10:21:08 --> Database Driver Class Initialized
INFO - 2025-07-01 10:21:08 --> Email Class Initialized
DEBUG - 2025-07-01 10:21:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:21:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:21:08 --> Controller Class Initialized
INFO - 2025-07-01 10:21:08 --> Helper loaded: form_helper
INFO - 2025-07-01 10:21:08 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:21:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:21:08 --> Database Driver Class Initialized
INFO - 2025-07-01 10:21:08 --> Model "Crud" initialized
INFO - 2025-07-01 10:21:08 --> Config Class Initialized
INFO - 2025-07-01 10:21:08 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:21:08 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:21:08 --> Utf8 Class Initialized
INFO - 2025-07-01 10:21:08 --> URI Class Initialized
INFO - 2025-07-01 10:21:08 --> Router Class Initialized
INFO - 2025-07-01 10:21:08 --> Output Class Initialized
INFO - 2025-07-01 10:21:08 --> Security Class Initialized
DEBUG - 2025-07-01 10:21:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:21:08 --> Input Class Initialized
INFO - 2025-07-01 10:21:08 --> Language Class Initialized
INFO - 2025-07-01 10:21:08 --> Loader Class Initialized
INFO - 2025-07-01 10:21:08 --> Helper loaded: url_helper
INFO - 2025-07-01 10:21:08 --> Helper loaded: file_helper
INFO - 2025-07-01 10:21:08 --> Database Driver Class Initialized
INFO - 2025-07-01 10:21:08 --> Email Class Initialized
DEBUG - 2025-07-01 10:21:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:21:08 --> Final output sent to browser
DEBUG - 2025-07-01 10:21:08 --> Total execution time: 0.0211
INFO - 2025-07-01 10:21:08 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:21:08 --> Controller Class Initialized
INFO - 2025-07-01 10:21:08 --> Helper loaded: form_helper
INFO - 2025-07-01 10:21:08 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:21:08 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:21:08 --> Database Driver Class Initialized
INFO - 2025-07-01 10:21:08 --> Model "Crud" initialized
INFO - 2025-07-01 10:21:08 --> Final output sent to browser
DEBUG - 2025-07-01 10:21:08 --> Total execution time: 0.0368
INFO - 2025-07-01 10:21:18 --> Config Class Initialized
INFO - 2025-07-01 10:21:18 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:21:18 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:21:18 --> Utf8 Class Initialized
INFO - 2025-07-01 10:21:18 --> URI Class Initialized
INFO - 2025-07-01 10:21:18 --> Router Class Initialized
INFO - 2025-07-01 10:21:18 --> Output Class Initialized
INFO - 2025-07-01 10:21:18 --> Security Class Initialized
DEBUG - 2025-07-01 10:21:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:21:18 --> Input Class Initialized
INFO - 2025-07-01 10:21:18 --> Language Class Initialized
INFO - 2025-07-01 10:21:18 --> Loader Class Initialized
INFO - 2025-07-01 10:21:18 --> Helper loaded: url_helper
INFO - 2025-07-01 10:21:18 --> Config Class Initialized
INFO - 2025-07-01 10:21:18 --> Helper loaded: file_helper
INFO - 2025-07-01 10:21:18 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:21:18 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:21:18 --> Database Driver Class Initialized
INFO - 2025-07-01 10:21:18 --> Utf8 Class Initialized
INFO - 2025-07-01 10:21:18 --> URI Class Initialized
INFO - 2025-07-01 10:21:18 --> Router Class Initialized
INFO - 2025-07-01 10:21:18 --> Output Class Initialized
INFO - 2025-07-01 10:21:18 --> Security Class Initialized
DEBUG - 2025-07-01 10:21:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:21:18 --> Input Class Initialized
INFO - 2025-07-01 10:21:18 --> Language Class Initialized
INFO - 2025-07-01 10:21:18 --> Loader Class Initialized
INFO - 2025-07-01 10:21:18 --> Helper loaded: url_helper
INFO - 2025-07-01 10:21:18 --> Helper loaded: file_helper
INFO - 2025-07-01 10:21:18 --> Database Driver Class Initialized
INFO - 2025-07-01 10:21:18 --> Email Class Initialized
DEBUG - 2025-07-01 10:21:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:21:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:21:18 --> Controller Class Initialized
INFO - 2025-07-01 10:21:18 --> Email Class Initialized
INFO - 2025-07-01 10:21:18 --> Helper loaded: form_helper
INFO - 2025-07-01 10:21:18 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:21:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-07-01 10:21:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:21:18 --> Database Driver Class Initialized
INFO - 2025-07-01 10:21:18 --> Model "Crud" initialized
INFO - 2025-07-01 10:21:18 --> Final output sent to browser
DEBUG - 2025-07-01 10:21:18 --> Total execution time: 0.0161
INFO - 2025-07-01 10:21:18 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:21:18 --> Controller Class Initialized
INFO - 2025-07-01 10:21:18 --> Helper loaded: form_helper
INFO - 2025-07-01 10:21:18 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:21:18 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:21:18 --> Database Driver Class Initialized
INFO - 2025-07-01 10:21:18 --> Model "Crud" initialized
INFO - 2025-07-01 10:21:18 --> Final output sent to browser
DEBUG - 2025-07-01 10:21:18 --> Total execution time: 0.0336
INFO - 2025-07-01 10:21:28 --> Config Class Initialized
INFO - 2025-07-01 10:21:28 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:21:28 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:21:28 --> Utf8 Class Initialized
INFO - 2025-07-01 10:21:28 --> URI Class Initialized
INFO - 2025-07-01 10:21:28 --> Router Class Initialized
INFO - 2025-07-01 10:21:28 --> Output Class Initialized
INFO - 2025-07-01 10:21:28 --> Security Class Initialized
DEBUG - 2025-07-01 10:21:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:21:28 --> Input Class Initialized
INFO - 2025-07-01 10:21:28 --> Language Class Initialized
INFO - 2025-07-01 10:21:28 --> Loader Class Initialized
INFO - 2025-07-01 10:21:28 --> Helper loaded: url_helper
INFO - 2025-07-01 10:21:28 --> Helper loaded: file_helper
INFO - 2025-07-01 10:21:28 --> Database Driver Class Initialized
INFO - 2025-07-01 10:21:28 --> Email Class Initialized
INFO - 2025-07-01 10:21:28 --> Config Class Initialized
INFO - 2025-07-01 10:21:28 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:21:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-07-01 10:21:28 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:21:28 --> Utf8 Class Initialized
INFO - 2025-07-01 10:21:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:21:28 --> URI Class Initialized
INFO - 2025-07-01 10:21:28 --> Controller Class Initialized
INFO - 2025-07-01 10:21:28 --> Router Class Initialized
INFO - 2025-07-01 10:21:28 --> Helper loaded: form_helper
INFO - 2025-07-01 10:21:28 --> Output Class Initialized
INFO - 2025-07-01 10:21:28 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:21:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:21:28 --> Security Class Initialized
INFO - 2025-07-01 10:21:28 --> Database Driver Class Initialized
DEBUG - 2025-07-01 10:21:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:21:28 --> Input Class Initialized
INFO - 2025-07-01 10:21:28 --> Language Class Initialized
INFO - 2025-07-01 10:21:28 --> Loader Class Initialized
INFO - 2025-07-01 10:21:28 --> Helper loaded: url_helper
INFO - 2025-07-01 10:21:28 --> Helper loaded: file_helper
INFO - 2025-07-01 10:21:28 --> Database Driver Class Initialized
INFO - 2025-07-01 10:21:28 --> Model "Crud" initialized
INFO - 2025-07-01 10:21:28 --> Email Class Initialized
DEBUG - 2025-07-01 10:21:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:21:28 --> Final output sent to browser
DEBUG - 2025-07-01 10:21:28 --> Total execution time: 0.0207
INFO - 2025-07-01 10:21:28 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:21:28 --> Controller Class Initialized
INFO - 2025-07-01 10:21:28 --> Helper loaded: form_helper
INFO - 2025-07-01 10:21:28 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:21:28 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:21:28 --> Database Driver Class Initialized
INFO - 2025-07-01 10:21:28 --> Model "Crud" initialized
INFO - 2025-07-01 10:21:28 --> Final output sent to browser
DEBUG - 2025-07-01 10:21:28 --> Total execution time: 0.0332
INFO - 2025-07-01 10:21:38 --> Config Class Initialized
INFO - 2025-07-01 10:21:38 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:21:38 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:21:38 --> Utf8 Class Initialized
INFO - 2025-07-01 10:21:38 --> URI Class Initialized
INFO - 2025-07-01 10:21:38 --> Router Class Initialized
INFO - 2025-07-01 10:21:38 --> Output Class Initialized
INFO - 2025-07-01 10:21:38 --> Config Class Initialized
INFO - 2025-07-01 10:21:38 --> Hooks Class Initialized
DEBUG - 2025-07-01 10:21:38 --> UTF-8 Support Enabled
INFO - 2025-07-01 10:21:38 --> Utf8 Class Initialized
INFO - 2025-07-01 10:21:38 --> Security Class Initialized
INFO - 2025-07-01 10:21:38 --> URI Class Initialized
DEBUG - 2025-07-01 10:21:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:21:38 --> Router Class Initialized
INFO - 2025-07-01 10:21:38 --> Input Class Initialized
INFO - 2025-07-01 10:21:38 --> Output Class Initialized
INFO - 2025-07-01 10:21:38 --> Language Class Initialized
INFO - 2025-07-01 10:21:38 --> Security Class Initialized
DEBUG - 2025-07-01 10:21:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-07-01 10:21:38 --> Loader Class Initialized
INFO - 2025-07-01 10:21:38 --> Input Class Initialized
INFO - 2025-07-01 10:21:38 --> Helper loaded: url_helper
INFO - 2025-07-01 10:21:38 --> Language Class Initialized
INFO - 2025-07-01 10:21:38 --> Helper loaded: file_helper
INFO - 2025-07-01 10:21:38 --> Loader Class Initialized
INFO - 2025-07-01 10:21:38 --> Database Driver Class Initialized
INFO - 2025-07-01 10:21:38 --> Helper loaded: url_helper
INFO - 2025-07-01 10:21:38 --> Helper loaded: file_helper
INFO - 2025-07-01 10:21:38 --> Database Driver Class Initialized
INFO - 2025-07-01 10:21:38 --> Email Class Initialized
INFO - 2025-07-01 10:21:38 --> Email Class Initialized
DEBUG - 2025-07-01 10:21:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2025-07-01 10:21:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-07-01 10:21:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:21:38 --> Controller Class Initialized
INFO - 2025-07-01 10:21:38 --> Helper loaded: form_helper
INFO - 2025-07-01 10:21:38 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:21:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:21:38 --> Database Driver Class Initialized
INFO - 2025-07-01 10:21:38 --> Model "Crud" initialized
INFO - 2025-07-01 10:21:38 --> Final output sent to browser
DEBUG - 2025-07-01 10:21:38 --> Total execution time: 0.0278
INFO - 2025-07-01 10:21:38 --> Session: Class initialized using 'files' driver.
INFO - 2025-07-01 10:21:38 --> Controller Class Initialized
INFO - 2025-07-01 10:21:38 --> Helper loaded: form_helper
INFO - 2025-07-01 10:21:38 --> Form Validation Class Initialized
DEBUG - 2025-07-01 10:21:38 --> Session class already loaded. Second attempt ignored.
INFO - 2025-07-01 10:21:38 --> Database Driver Class Initialized
INFO - 2025-07-01 10:21:38 --> Model "Crud" initialized
INFO - 2025-07-01 10:21:38 --> Final output sent to browser
DEBUG - 2025-07-01 10:21:38 --> Total execution time: 0.0464
