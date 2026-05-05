-- get all users
SELECT * FROM users_tbl;

-- insert single user
INSERT INTO users_tbl (first_name, last_name, email)
VALUES ('Lando', 'Norris', 'lando@f1.com');

-- insert users
INSERT INTO users_tbl (first_name, last_name, email)
VALUES 
('Mr.', 'Spock', 'spock@kirk.com'),
('Nyota', 'Uhura', 'uhura@kirk.com'),
('Nurse', 'Chapel', 'chapel@kirk.com'),
('Bones', 'McCoy', 'bones@kirk.com'),
('Montgomery', 'Scott', 'scotty@kirk.com'),
('Bruce', 'Wayne', 'batman@batman.com'),
('Dick', 'Grayson', 'dick@batman.com'),
('Barbara', 'Gordon', 'barb@batman.com'),
('Max', 'Verstappen', 'max@f1.com'),
('Lando', 'Norris', 'lando@f1.com')
;

ALTER TABLE users_tbl ADD password VARCHAR(255) AFTER email;

CREATE TABLE products (
  product_id INT AUTO_INCREMENT PRIMARY KEY,
  product_name VARCHAR(30) NOT NULL,
  category VARCHAR(30),
  created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  last_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO products (product_name, category)
VALUES
('Guitar', 'Instrument'),
('Bass', 'Instrument'),
('Drum Kit', 'Instrument'),
('Microphone', 'Audio'),
('Mixer', 'Audio'),
('Powered Monitors', 'Audio'),
('Compressor', 'Audio'),
('Headphones', 'Audio'),
('Audio Interface', 'Recording'),
('Sound Panels', 'Recording');

SELECT * FROM products