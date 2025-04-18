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


-- Tabel 1: Curriculum
CREATE TABLE lnd_curriculum (
    id CHAR(36) NOT NULL PRIMARY KEY DEFAULT (UUID()),
    curriculum_id CHAR(36) NOT NULL,
    competence_standard VARCHAR(50) NOT NULL,
    createdBy CHAR(36),
    createdTime DATETIME DEFAULT CURRENT_TIMESTAMP,
    updatedBy CHAR(36),
    updatedTime DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Tabel 2: Training Activity
CREATE TABLE lnd_curriculum_training_activity (
    id CHAR(36) NOT NULL PRIMARY KEY DEFAULT (UUID()),
    competence_id CHAR(36) NOT NULL,
    training_activity VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (competence_id) REFERENCES lnd_curriculum(id) ON DELETE CASCADE
);

-- Tabel 3: Indicator
CREATE TABLE lnd_curriculum_indicator (
    id CHAR(36) NOT NULL PRIMARY KEY DEFAULT (UUID()),
    training_id CHAR(36) NOT NULL,
    indicator_name VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (training_id) REFERENCES lnd_curriculum_training_activity(id) ON DELETE CASCADE
);
