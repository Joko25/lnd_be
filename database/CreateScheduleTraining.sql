CREATE TABLE lnd_schedule_training (
    id CHAR(36) NOT NULL PRIMARY KEY DEFAULT (UUID()),
    registerDate DATE NOT NULL,
    induction TEXT,
    category TEXT,
    -- trainingMaterial
    -- trainer 
    trainingName TEXT,
    trainee TEXT,
    remarks TEXT,
    totalTrainee INT,
    duration FLOAT,
    createdBy CHAR(36) NOT NULL,
    createdTime DATETIME DEFAULT CURRENT_TIMESTAMP,
    updatedBy CHAR(36),
    updatedTime DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
