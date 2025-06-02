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


