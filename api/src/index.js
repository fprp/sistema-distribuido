const express = require('express');
const mysql = require('mysql');

const app = express();

const connection = mysql.createConnection({
  host: 'mysql-container',
  user: 'root',
  password: 'admin',
  database: 'cinema'
});

connection.connect();

app.get('/filmes', function(req, res) {
  connection.query('SELECT * FROM filmes', function (error, results) {

    if (error) { 
      throw error
    };

    res.send(results.map(item => ({ Nome_do_Filme: item.nome_do_filme, Numero_da_Sala: item.numero_da_sala, Dia_e_Hora_da_Sessao: item.dia_e_hora_da_sessao})));
  });
});


app.listen(9001, '0.0.0.0', function() {
  console.log('Listening on port 9001');
})