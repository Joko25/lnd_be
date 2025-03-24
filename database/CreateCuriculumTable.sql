CREATE TABLE lnd_curriculum (
    id CHAR(36) NOT NULL PRIMARY KEY DEFAULT (UUID()),
    curiculumId CHAR(36) NOT NULL,
    competenceId CHAR(36) NOT NULL,
    trainingActivityId CHAR(36) NOT NULL,
    indicators TEXT,
    createdBy CHAR(36),              -- UUID reference for creator
    createdTime DATETIME DEFAULT CURRENT_TIMESTAMP, -- Creation timestamp
    updatedBy CHAR(36),              -- UUID reference for last updater
    updatedTime DATETIME ON UPDATE CURRENT_TIMESTAMP, -- Last update timestamp
    CONSTRAINT fk_competence FOREIGN KEY (competenceId) REFERENCES lnd_competence(competenceId) ON DELETE CASCADE,
    CONSTRAINT fk_training_activity FOREIGN KEY (trainingActivityId) REFERENCES lnd_training_activity(trainingActivityId) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
