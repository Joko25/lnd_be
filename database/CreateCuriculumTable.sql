CREATE TABLE lnd_Curiculum (
    id CHAR(30) NOT NULL PRIMARY KEY DEFAULT UUID(), -- UUID as a 30-character string
    curiculumId CHAR(30) NOT NULL,  -- UUID reference for curiculum
    `desc` TEXT,                     -- Description
    remark TEXT,                     -- Remarks
    divisionId CHAR(30),             -- UUID reference for division
    departementId CHAR(30),          -- UUID reference for department
    subDepartementId CHAR(30),       -- UUID reference for sub-department
    isActive TINYINT(1) DEFAULT 1,   -- 1 for active, 0 for inactive
    createdBy CHAR(30),              -- UUID reference for creator
    createdTime DATETIME DEFAULT CURRENT_TIMESTAMP, -- Creation timestamp
    updatedBy CHAR(30),              -- UUID reference for last updater
    updatedTime DATETIME ON UPDATE CURRENT_TIMESTAMP, -- Last update timestamp
    INDEX (curiculumId),            -- Index for faster lookups
    INDEX (divisionId),              -- Index for faster lookups
    INDEX (departementId),           -- Index for faster lookups
    INDEX (subDepartementId)         -- Index for faster lookups
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;