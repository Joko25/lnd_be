SET @table_name = 'your_table_name';
SET @column_to_delete = 'activityName';
SET @column_to_add = 'competenceId';
SET @column_type = 'CHAR(36)'; -- Change this to your desired column type

-- Check if column 'activityName' exists and drop it if found
SET @sql = (
    SELECT IF(
        EXISTS (
            SELECT 1
            FROM INFORMATION_SCHEMA.COLUMNS
            WHERE TABLE_SCHEMA = DATABASE()
            AND TABLE_NAME = @table_name
            AND COLUMN_NAME = @column_to_delete
        ), 
        CONCAT('ALTER TABLE ', @table_name, ' DROP COLUMN ', @column_to_delete, ';'), 
        'SELECT "Column activityName does not exist";'
    )
);
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

-- Check if column 'competenceId' exists and add it if not found
SET @sql = (
    SELECT IF(
        EXISTS (
            SELECT 1
            FROM INFORMATION_SCHEMA.COLUMNS
            WHERE TABLE_SCHEMA = DATABASE()
            AND TABLE_NAME = @table_name
            AND COLUMN_NAME = @column_to_add
        ), 
        'SELECT "Column competenceId already exists";', 
        CONCAT('ALTER TABLE ', @table_name, ' ADD COLUMN ', @column_to_add, ' ', @column_type, ';')
    )
);
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;
