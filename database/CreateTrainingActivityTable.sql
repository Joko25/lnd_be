CREATE TABLE lnd_training_activity (
    id CHAR(36) NOT NULL PRIMARY KEY DEFAULT (UUID()),
    trainingActivityId CHAR(36) NOT NULL,
    activityName VARCHAR(255) NOT NULL,
    `index` INT,
    trainingActivity VARCHAR(255),
    remarks TEXT,
    isActive TINYINT(1) DEFAULT 1,
    createdBy CHAR(36) NOT NULL,
    createdTime DATETIME DEFAULT CURRENT_TIMESTAMP,
    updatedBy CHAR(36),
    updatedTime DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    competenceId CHAR(36) NOT NULL,
    INDEX idx_trainingActivityId (trainingActivityId),
    INDEX idx_index (`index`),
    INDEX idx_competenceId (competenceId),
    FOREIGN KEY (competenceId) REFERENCES lnd_competence(id)
);
