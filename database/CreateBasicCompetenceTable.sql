CREATE TABLE lnd_basic_competency (
    id CHAR(36) NOT NULL PRIMARY KEY DEFAULT (UUID()), -- UUID sebagai Primary Key
    basicCompetenceId VARCHAR(12) NOT NULL UNIQUE, -- Format unik seperti BC-2502001
    competenceName VARCHAR(255) NOT NULL, -- Nama kompetensi
    trainingActivityId CHAR(36) NOT NULL, -- Referensi ke lnd_training_activity
    `index` INT AUTO_INCREMENT UNIQUE, -- Nomor urut unik
    indicator VARCHAR(255), -- Indikator kompetensi
    training_objective TEXT, -- Tujuan pelatihan
    training_material TEXT, -- Materi pelatihan
    training_method BOOLEAN DEFAULT FALSE, -- Metode pelatihan (TRUE/FALSE)
    source BOOLEAN DEFAULT FALSE, -- Sumber kompetensi (TRUE/FALSE)
    createdBy CHAR(36), -- UUID pembuat
    createdTime DATETIME DEFAULT CURRENT_TIMESTAMP, -- Timestamp pembuatan
    updatedBy CHAR(36), -- UUID terakhir mengupdate
    updatedTime DATETIME ON UPDATE CURRENT_TIMESTAMP, -- Timestamp update terakhir

    -- Foreign Key ke tabel lnd_training_activity
    CONSTRAINT fk_trainingActivity FOREIGN KEY (trainingActivityId) 
    REFERENCES lnd_training_activity(id) ON DELETE CASCADE,

    -- Index untuk optimasi query
    INDEX idx_basicCompetenceId (basicCompetenceId),
    INDEX idx_trainingActivityId (trainingActivityId)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
