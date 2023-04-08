CREATE TABLE LIST (
  empId INTEGER PRIMARY KEY AUTO_INCREMENT,
  name TEXT NOT NULL,
  age INTEGER NOT NULL,
  address TEXT NOT NULL
);

INSERT INTO LIST (name, age, address) VALUES ('Аркадий', 18, 'Москва');
INSERT INTO LIST (name, age, address) VALUES ('Алексей', 19, 'Электросталь');
INSERT INTO LIST (name, age, address) VALUES ('Елена', 18, 'Москва');
INSERT INTO LIST (name, age, address) VALUES ('Михаил', 18, 'Пушкин');
INSERT INTO LIST (name, age, address) VALUES ('Юлия', 19, 'Красногорск');
INSERT INTO LIST (name, age, address) VALUES ('Анна', 17, 'Москва');
INSERT INTO LIST (name, age, address) VALUES ('Николай', 18, 'Подольск');
INSERT INTO LIST (name, age, address) VALUES ('Денис', 19, 'Москва');

SELECT
  name
FROM 
  LIST 
WHERE 
  address = 'Москва'
  AND age >= 18
  AND age < 30