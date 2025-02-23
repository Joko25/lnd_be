CREATE TABLE lnd_assesment_technique (
    id CHAR(36) NOT NULL PRIMARY KEY DEFAULT (UUID()),  -- UUID sebagai Primary Key
    assesmentId CHAR(36) NOT NULL,  -- UUID untuk Assessment ID
    techniqueName VARCHAR(255) NOT NULL,  -- Nama Teknik Assessment
    remarks TEXT,  -- Catatan tambahan
    createdBy CHAR(36) NOT NULL,  -- UUID pembuat
    createdTime DATETIME DEFAULT CURRENT_TIMESTAMP,  -- Waktu pembuatan
    updatedBy CHAR(36),  -- UUID yang terakhir mengupdate
    updatedTime DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,  -- Waktu update terakhir
    INDEX (assesmentId)  -- Index untuk pencarian cepat berdasarkan Assessment ID
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
