CREATE TABLE lnd_setup_curiculum (
    id CHAR(36) NOT NULL PRIMARY KEY DEFAULT (UUID()), -- UUID as a 36-character string
    setupCuriculumId CHAR(36) NOT NULL,                        -- UUID reference for competence
    levelId CHAR(36) NOT NULL,                          -- UUID reference for level
    description TEXT,                                   -- Description
    departmentId CHAR(36) NOT NULL,                    -- UUID reference for department
    subId CHAR(36),                                    -- UUID reference for sub
    competenceId CHAR(36),                             -- UUID reference for competence
    curriculumId CHAR(36),                             -- UUID reference for curriculum
    updateBy CHAR(36),                                 -- UUID reference for last updater
    updateDate DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, -- Last update timestamp
    createdBy CHAR(30),              -- UUID reference for creator
    createdTime DATETIME DEFAULT CURRENT_TIMESTAMP, -- Creation timestamp
    INDEX (levelId),                                   -- Index for faster lookups
    INDEX (departmentId),                              -- Index for faster lookups
    INDEX (subId),                                     -- Index for faster lookups
    INDEX (competenceId),                              -- Index for faster lookups
    INDEX (curriculumId),                              -- Index for faster lookups
    FOREIGN KEY (competenceId) REFERENCES lnd_competence(competenceId) ON DELETE CASCADE, -- Foreign key reference to lnd_competence
    FOREIGN KEY (curriculumId) REFERENCES lnd_curiculum(curiculumId) ON DELETE CASCADE  -- Foreign key reference to lnd_curiculum
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
