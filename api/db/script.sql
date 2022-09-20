CREATE DATABASE IF NOT EXISTS cinema;
USE cinema;

CREATE TABLE IF NOT EXISTS filmes(
  id INT(11) AUTO_INCREMENT,
  nome_do_filme VARCHAR(255),
  numero_da_sala INT(11),
  dia_e_hora_da_sessao DATETIME,
  PRIMARY KEY (id)
);

INSERT INTO filmes VALUE(0, 'Coringa', 01, '2022-09-30 21:30:00');
INSERT INTO filmes VALUE(0, 'Whiplash', 02, '2022-10-01 17:15:00');