CREATE DATABASE IF NOT EXISTS cinema;
USE cinema;

CREATE TABLE IF NOT EXISTS usuarios(
  id INT(11) AUTO_INCREMENT,
  nome VARCHAR(255),
  email VARCHAR(255),
  senha VARCHAR(32),
  PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS filmes(
  id INT(11) AUTO_INCREMENT,
  nome_do_filme VARCHAR(255),
  numero_da_sala INT(11),
  dia_e_hora_da_sessao DATETIME,
  PRIMARY KEY (id)
);

INSERT INTO usuarios VALUE(0, 'Filipe', 'filipe@test.com', 'admin');
INSERT INTO filmes VALUE(0, 'Coringa', 01, '2022-09-30 21:30:00');
INSERT INTO filmes VALUE(0, 'Whiplash', 02, '2022-10-01 17:15:00');