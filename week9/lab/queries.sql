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