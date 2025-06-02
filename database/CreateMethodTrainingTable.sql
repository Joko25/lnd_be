CREATE TABLE lnd_method_training (
    id CHAR(30) NOT NULL PRIMARY KEY DEFAULT UUID(), -- UUID as a 30-character string
    methodTrainingId CHAR(30) NOT NULL,  -- UUID untuk Training Activity ID 
    `name` TEXT,                     -- Activity Name
    remarks TEXT,             -- Remarks
    createdBy CHAR(30),              -- UUID reference for creator
    createdTime DATETIME DEFAULT CURRENT_TIMESTAMP, -- Creation timestamp
    updatedBy CHAR(30),              -- UUID reference for last updater
    updatedTime DATETIME ON UPDATE CURRENT_TIMESTAMP -- Last update timestamp
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
