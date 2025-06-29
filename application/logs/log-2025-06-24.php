<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2025-06-24 05:01:57 --> Config Class Initialized
INFO - 2025-06-24 05:01:57 --> Config Class Initialized
INFO - 2025-06-24 05:01:57 --> Hooks Class Initialized
INFO - 2025-06-24 05:01:57 --> Hooks Class Initialized
DEBUG - 2025-06-24 05:01:57 --> UTF-8 Support Enabled
INFO - 2025-06-24 05:01:57 --> Utf8 Class Initialized
INFO - 2025-06-24 05:01:57 --> URI Class Initialized
INFO - 2025-06-24 05:01:57 --> Router Class Initialized
INFO - 2025-06-24 05:01:57 --> Output Class Initialized
DEBUG - 2025-06-24 05:01:57 --> UTF-8 Support Enabled
INFO - 2025-06-24 05:01:57 --> Security Class Initialized
INFO - 2025-06-24 05:01:57 --> Utf8 Class Initialized
DEBUG - 2025-06-24 05:01:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-24 05:01:57 --> Input Class Initialized
INFO - 2025-06-24 05:01:57 --> Language Class Initialized
INFO - 2025-06-24 05:01:57 --> URI Class Initialized
INFO - 2025-06-24 05:01:57 --> Router Class Initialized
INFO - 2025-06-24 05:01:57 --> Output Class Initialized
INFO - 2025-06-24 05:01:57 --> Security Class Initialized
DEBUG - 2025-06-24 05:01:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-24 05:01:57 --> Input Class Initialized
INFO - 2025-06-24 05:01:57 --> Language Class Initialized
INFO - 2025-06-24 05:01:57 --> Loader Class Initialized
INFO - 2025-06-24 05:01:57 --> Loader Class Initialized
INFO - 2025-06-24 05:01:57 --> Helper loaded: url_helper
INFO - 2025-06-24 05:01:57 --> Helper loaded: url_helper
INFO - 2025-06-24 05:01:57 --> Helper loaded: file_helper
INFO - 2025-06-24 05:01:57 --> Helper loaded: file_helper
INFO - 2025-06-24 05:01:57 --> Database Driver Class Initialized
INFO - 2025-06-24 05:01:57 --> Database Driver Class Initialized
INFO - 2025-06-24 05:01:57 --> Email Class Initialized
DEBUG - 2025-06-24 05:01:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-24 05:01:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-24 05:01:57 --> Controller Class Initialized
INFO - 2025-06-24 05:01:57 --> Helper loaded: form_helper
INFO - 2025-06-24 05:01:57 --> Form Validation Class Initialized
DEBUG - 2025-06-24 05:01:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-24 05:01:57 --> Database Driver Class Initialized
INFO - 2025-06-24 05:01:57 --> Email Class Initialized
DEBUG - 2025-06-24 05:01:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-24 05:01:57 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-24 05:01:57 --> Controller Class Initialized
INFO - 2025-06-24 05:01:57 --> Helper loaded: form_helper
INFO - 2025-06-24 05:01:57 --> Form Validation Class Initialized
DEBUG - 2025-06-24 05:01:57 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-24 05:01:57 --> Database Driver Class Initialized
INFO - 2025-06-24 05:01:57 --> Model "Crud" initialized
INFO - 2025-06-24 05:01:57 --> Model "Crud" initialized
ERROR - 2025-06-24 05:01:57 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
ERROR - 2025-06-24 05:01:57 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-24 05:01:57 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-24 05:01:57 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-24 05:02:03 --> Config Class Initialized
INFO - 2025-06-24 05:02:03 --> Hooks Class Initialized
DEBUG - 2025-06-24 05:02:03 --> UTF-8 Support Enabled
INFO - 2025-06-24 05:02:03 --> Utf8 Class Initialized
INFO - 2025-06-24 05:02:03 --> URI Class Initialized
INFO - 2025-06-24 05:02:03 --> Router Class Initialized
INFO - 2025-06-24 05:02:03 --> Output Class Initialized
INFO - 2025-06-24 05:02:03 --> Security Class Initialized
DEBUG - 2025-06-24 05:02:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-24 05:02:03 --> Input Class Initialized
INFO - 2025-06-24 05:02:03 --> Language Class Initialized
INFO - 2025-06-24 05:02:03 --> Loader Class Initialized
INFO - 2025-06-24 05:02:03 --> Helper loaded: url_helper
INFO - 2025-06-24 05:02:03 --> Helper loaded: file_helper
INFO - 2025-06-24 05:02:03 --> Database Driver Class Initialized
INFO - 2025-06-24 05:02:03 --> Config Class Initialized
INFO - 2025-06-24 05:02:03 --> Hooks Class Initialized
DEBUG - 2025-06-24 05:02:03 --> UTF-8 Support Enabled
INFO - 2025-06-24 05:02:03 --> Utf8 Class Initialized
INFO - 2025-06-24 05:02:03 --> URI Class Initialized
INFO - 2025-06-24 05:02:03 --> Router Class Initialized
INFO - 2025-06-24 05:02:03 --> Output Class Initialized
INFO - 2025-06-24 05:02:03 --> Security Class Initialized
DEBUG - 2025-06-24 05:02:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-06-24 05:02:03 --> Input Class Initialized
INFO - 2025-06-24 05:02:03 --> Language Class Initialized
INFO - 2025-06-24 05:02:03 --> Loader Class Initialized
INFO - 2025-06-24 05:02:03 --> Helper loaded: url_helper
INFO - 2025-06-24 05:02:03 --> Helper loaded: file_helper
INFO - 2025-06-24 05:02:03 --> Database Driver Class Initialized
INFO - 2025-06-24 05:02:03 --> Email Class Initialized
DEBUG - 2025-06-24 05:02:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-24 05:02:03 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-24 05:02:03 --> Controller Class Initialized
INFO - 2025-06-24 05:02:03 --> Helper loaded: form_helper
INFO - 2025-06-24 05:02:03 --> Form Validation Class Initialized
DEBUG - 2025-06-24 05:02:03 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-24 05:02:03 --> Database Driver Class Initialized
INFO - 2025-06-24 05:02:03 --> Email Class Initialized
DEBUG - 2025-06-24 05:02:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-24 05:02:03 --> Model "Crud" initialized
ERROR - 2025-06-24 05:02:03 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-24 05:02:03 --> Language file loaded: language/english/db_lang.php
INFO - 2025-06-24 05:02:03 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-24 05:02:03 --> Controller Class Initialized
INFO - 2025-06-24 05:02:03 --> Helper loaded: form_helper
INFO - 2025-06-24 05:02:03 --> Form Validation Class Initialized
DEBUG - 2025-06-24 05:02:03 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-24 05:02:03 --> Database Driver Class Initialized
INFO - 2025-06-24 05:02:03 --> Model "Crud" initialized
ERROR - 2025-06-24 05:02:03 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-24 05:02:03 --> Language file loaded: language/english/db_lang.php
