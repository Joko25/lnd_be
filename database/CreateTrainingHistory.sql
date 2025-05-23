CREATE TABLE lnd_test_form_detail (
    id CHAR(36) NOT NULL PRIMARY KEY DEFAULT (UUID()),
    test_id CHAR(36) NOT NULL,
    employee_id VARCHAR(30) NOT NULL,
    type_training CHAR(36),
    json_response JSON NOT NULL,
    grade DECIMAL(10,2),
    test_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    test_completed_date DATETIME NULL,
    createdBy CHAR(36),
    createdTime DATETIME DEFAULT CURRENT_TIMESTAMP,
    updatedBy CHAR(36),
    updatedTime DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_test_id (test_id),
    INDEX idx_employee_id (employee_id),
    INDEX idx_test_date (test_date)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE lnd_feedback_history (
    id CHAR(36) NOT NULL PRIMARY KEY DEFAULT (UUID()),
    feedback_id CHAR(36) NOT NULL,
    user_id CHAR(36),
    json_response TEXT NOT NULL,
    createdBy CHAR(36),
    createdTime DATETIME DEFAULT CURRENT_TIMESTAMP,
    updatedBy CHAR(36),
    updatedTime DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (feedback_id) REFERENCES lnd_master_feedback(id) ON DELETE CASCADE
);

CREATE TABLE lnd_training_history (
    id CHAR(36) NOT NULL PRIMARY KEY DEFAULT (UUID()),
    test_id CHAR(36) NOT NULL,
    employee_id VARCHAR(30) NOT NULL,
    trainer TEXT,
    date_test DATETIME DEFAULT CURRENT_TIMESTAMP,
    type_training CHAR(36),
    json_result JSON,
    score_pre_test DECIMAL(5,2),
    score_post_test DECIMAL(5,2),
    history_feedback_id CHAR(36),
    createdBy CHAR(36),
    createdTime DATETIME DEFAULT CURRENT_TIMESTAMP,
    updatedBy CHAR(36),
    updatedTime DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_test_id (test_id),
    INDEX idx_employee_id (employee_id),
    INDEX idx_date_test (date_test),
    INDEX idx_type_training (type_training)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;