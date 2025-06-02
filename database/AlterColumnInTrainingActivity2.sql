SET @table_name = 'lnd_training_activity';
SET @column_to_add = 'induction';
SET @column_type = 'TEXT'; -- Change this to your desired column type

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
