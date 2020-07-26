CREATE DATABASE IF NOT EXISTS argos;
USE argos;

CREATE TABLE IF NOT EXISTS led_argos (
  id INTEGER AUTO_INCREMENT,
  clientID VARCHAR(255),
  topic VARCHAR(255),
  message VARCHAR(255),
  PRIMARY KEY (id)
);

INSERT INTO led_argos VALUE(0, 'localhost', 'led', 'aceso');
