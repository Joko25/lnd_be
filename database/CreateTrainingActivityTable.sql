CREATE TABLE lnd_training_activity (
    id CHAR(30) NOT NULL PRIMARY KEY DEFAULT UUID(), -- UUID as a 30-character string
    trainingActivityId CHAR(30) NOT NULL,  -- UUID untuk Training Activity ID 
    activityName TEXT,                     -- Activity Name
    `index` INT,                    -- Index 
    trainingActivity TEXT,             -- Training Activity
    remarks TEXT,             -- Remarks
    isActive TINYINT(1) DEFAULT 1,   -- 1 for active, 0 for inactive
    createdBy CHAR(30),              -- UUID reference for creator
    createdTime DATETIME DEFAULT CURRENT_TIMESTAMP, -- Creation timestamp
    updatedBy CHAR(30),              -- UUID reference for last updater
    updatedTime DATETIME ON UPDATE CURRENT_TIMESTAMP -- Last update timestamp
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
