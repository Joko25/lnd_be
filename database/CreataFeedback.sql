CREATE TABLE lnd_master_feedback (
    id CHAR(36) NOT NULL PRIMARY KEY DEFAULT (UUID()),
    title VARCHAR(50) NOT NULL,
    instruction TEXT,
    json_feedback TEXT,
    createdBy CHAR(36),
    createdTime DATETIME DEFAULT CURRENT_TIMESTAMP,
    updatedBy CHAR(36),
    updatedTime DATETIME DEFAULT CURRENT_TIMESTAMP,
);

CREATE TABLE lnd_feedback_history (
    id CHAR(36) NOT NULL PRIMARY KEY DEFAULT (UUID()),
    feedback_id CHAR(36) NOT NULL,
    user_id CHAR(36) NOT NULL,
    json_response TEXT NOT NULL,
    createdBy CHAR(36),
    createdTime DATETIME DEFAULT CURRENT_TIMESTAMP,
    updatedBy CHAR(36),
    updatedTime DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (feedback_id) REFERENCES lnd_master_feedback(id) ON DELETE CASCADE
);
