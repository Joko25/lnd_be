CREATE TABLE lnd_master_source (
    id CHAR(36) NOT NULL PRIMARY KEY DEFAULT (UUID()), -- UUID sebagai Primary Key
    masterSourceId VARCHAR(12) NOT NULL UNIQUE, -- Format unik seperti S-2502001
    competenceName VARCHAR(255) NOT NULL, -- Nama kompetensi
    trainingActivityName VARCHAR(255) NOT NULL, -- Nama Training
    trainingActivityId CHAR(36) NOT NULL, -- Referensi ke lnd_training_activity
    uploadDataSource VARCHAR(255), -- Upload Data Source
    sourceName VARCHAR(255), -- Source Name
    remarks TEXT, -- Remarks 
    registerDate DATETIME , -- Timestamp pembuatan
    createdBy CHAR(36), -- UUID pembuat
    createdTime DATETIME DEFAULT CURRENT_TIMESTAMP, -- Timestamp pembuatan
    updatedBy CHAR(36), -- UUID terakhir mengupdate
    updatedTime DATETIME ON UPDATE CURRENT_TIMESTAMP, -- Timestamp update terakhir

    -- Foreign Key ke tabel lnd_training_activity
    CONSTRAINT fk_trainingActivity FOREIGN KEY (trainingActivityId) 
    REFERENCES lnd_training_activity(id) ON DELETE CASCADE,

    -- Index untuk optimasi query
    INDEX idx_basicCompetenceId (masterSourceId),
    INDEX idx_trainingActivityId (trainingActivityId)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
