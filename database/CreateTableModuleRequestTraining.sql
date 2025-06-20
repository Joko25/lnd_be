CREATE TABLE lnd_request_training_trainee (
											  id CHAR(30) NOT NULL PRIMARY KEY DEFAULT (UUID()),
											  fullName TEXT NOT NULL,
											  trainingRequestId CHAR(30) NOT NULL,
											  national_id CHAR(30) NOT NULL,
											  position TEXT NOT NULL,
											  departement TEXT NOT NULL,
											  departement_subs TEXT NOT NULL,
											  date_sign DATETIME NOT NULL,
											  createdBy CHAR(30),
											  createdTime DATETIME DEFAULT CURRENT_TIMESTAMP
)

CREATE TABLE lnd_request_training_approvals_history (
														id CHAR(30) NOT NULL PRIMARY KEY DEFAULT (UUID()),
														trainingRequestId CHAR(30) NOT NULL, -- Foreign Key ke training_requests
														status INT NOT NULL, -- Status approval terbaru dalam bentuk INT
														approved TINYINT(1) NOT NULL DEFAULT 0,
														approved_to VARCHAR(100),
														approved_by VARCHAR(100),
														approved_date TIMESTAMP,
														approval_data TEXT
--     FOREIGN KEY (trainingRequestId) REFERENCES lnd_training_requests(id) ON DELETE CASCADE
);

CREATE TABLE lnd_request_training (
									  id CHAR(30) NOT NULL PRIMARY KEY DEFAULT (UUID()),
									  requestTrainingId CHAR(30) NOT NULL,
									  induction TEXT,
									  trainingActivities TEXT,
									  suggestDateTraining DATETIME,
									  reasons TEXT,
									  trainer VARCHAR(100),
									  trainerFees VARCHAR(30),
									  status INT NOT NULL DEFAULT 0, -- Status dalam bentuk angka (Waiting, Approved, etc.)
									  latestApprovalId CHAR(30) DEFAULT NULL, -- Foreign Key ke approval terbaru
									  attachment TEXT,
									  trainer_name VARCHAR(36),
									  createdBy CHAR(30),
									  createdTime DATETIME DEFAULT CURRENT_TIMESTAMP,
									  updatedBy CHAR(30),
									  updatedTime DATETIME ON UPDATE CURRENT_TIMESTAMP
--     FOREIGN KEY (traineeId) REFERENCES employees(id) ON DELETE CASCADE,
--     FOREIGN KEY (latestApprovalId) REFERENCES lnd_request_training_approvals_history(id) ON DELETE SET NULL
);

ALTER TABLE lnd_request_training
	ADD attachment TEXT;
ALTER TABLE lnd_request_training
	ADD trainer_name CHAR(36);


-- Add the new 'approved' column
ALTER TABLE lnd_request_training_approvals_history
ADD COLUMN approved TINYINT(1) NOT NULL DEFAULT 0;

-- Add the new 'approved_to' column
ALTER TABLE lnd_request_training_approvals_history
ADD COLUMN approved_to VARCHAR(100) NULL;

-- Rename 'approvedBy' to 'approved_by' and adjust nullability (if needed)
-- Note: Based on your desired schema, 'approved_by' is implied to be nullable,
-- even if 'approvedBy' was previously NOT NULL.
ALTER TABLE lnd_request_training_approvals_history
CHANGE COLUMN approvedBy approved_by VARCHAR(100) NULL;

-- Rename 'approvedTime' to 'approved_date' and change its data type to TIMESTAMP
-- Note: 'approved_date' is implied to be nullable based on your desired schema.
ALTER TABLE lnd_request_training_approvals_history
CHANGE COLUMN approvedTime approved_date TIMESTAMP NULL;

-- Rename 'approvalNotes' to 'approval_data'
ALTER TABLE lnd_request_training_approvals_history
CHANGE COLUMN approvalNotes approval_data TEXT NULL;

