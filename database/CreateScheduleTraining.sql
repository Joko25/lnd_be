-- Master table (already exists, just add trainingName maybe as VARCHAR)
CREATE TABLE lnd_schedule_training (
    id CHAR(36) NOT NULL PRIMARY KEY DEFAULT (UUID()),
    registerDate DATE NOT NULL,
    induction TEXT,
    category TEXT,
    trainingName VARCHAR(255),
    trainee TEXT,
    remarks TEXT,
    totalTrainee INT,
    duration FLOAT,
    createdBy CHAR(36) NOT NULL,
    createdTime DATETIME DEFAULT CURRENT_TIMESTAMP,
    updatedBy CHAR(36),
    updatedTime DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Detail table to hold multiple training dates
CREATE TABLE lnd_schedule_training_dates (
    id CHAR(36) NOT NULL PRIMARY KEY DEFAULT (UUID()),
    training_id CHAR(36) NOT NULL, -- FK to master table
    training_date DATE NOT NULL,
    batch_count INT NOT NULL,
    week_label VARCHAR(5), -- e.g. W1, W2, etc.
    createdTime DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (training_id) REFERENCES lnd_schedule_training(id) ON DELETE CASCADE
);

CREATE TABLE lnd_schedule_trainers (
	id CHAR(36) NOT NULL PRIMARY KEY DEFAULT (UUID()),
	training_id CHAR(36) NOT NULL, -- FK to master table
	trainer_name TEXT,
	trainer_id CHAR(36)
);
