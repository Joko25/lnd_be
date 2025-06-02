CREATE TABLE lnd_trainee_training_history (
											  id INT AUTO_INCREMENT PRIMARY KEY,

											  trainee_name VARCHAR(100),
											  employee_id VARCHAR(50),
											  position VARCHAR(100),
											  department VARCHAR(100),
											  section VARCHAR(100),

											  training_name VARCHAR(100),
											  trainer_name VARCHAR(100),
											  training_date DATE,
											  location VARCHAR(100),

											  pre_test_score DECIMAL(5,2),
											  post_test_score DECIMAL(5,2),

											  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
