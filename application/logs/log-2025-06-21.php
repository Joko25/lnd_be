<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2025-06-21 11:04:38 --> Email Class Initialized
DEBUG - 2025-06-21 11:04:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2025-06-21 11:04:39 --> Session: Class initialized using 'files' driver.
INFO - 2025-06-21 11:04:39 --> Controller Class Initialized
INFO - 2025-06-21 11:04:39 --> Helper loaded: form_helper
INFO - 2025-06-21 11:04:39 --> Form Validation Class Initialized
DEBUG - 2025-06-21 11:04:39 --> Session class already loaded. Second attempt ignored.
INFO - 2025-06-21 11:04:39 --> Database Driver Class Initialized
INFO - 2025-06-21 11:04:39 --> Model "Crud" initialized
ERROR - 2025-06-21 11:04:40 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'hris_bri.a.approved_to' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `b`.`name` as `fullname`, `a`.`approved_to`, `a`.`approved_by`, `b`.`avatar`
FROM `cash_carries` `a`
JOIN `users` `b` ON `a`.`approved_by` = `b`.`username`
JOIN `users` `c` ON `a`.`approved_to` = `c`.`username`
WHERE `a`.`approved_to` IS NULL
GROUP BY `a`.`approved_by`
INFO - 2025-06-21 11:04:40 --> Language file loaded: language/english/db_lang.php
