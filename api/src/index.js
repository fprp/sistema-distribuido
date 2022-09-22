const express = require('express');
const mysql = require('mysql');
const bodyParser = require ('body-parser');
const path = require('path');
const multer = require('multer');

const app = express();

app.use(bodyParser.urlencoded({extended:true}));

const connection = mysql.createConnection({
  host: 'mysql-container',
  user: 'root',
  password: 'admin',
  database: 'cinema'
});

connection.connect();

app.post('/', function(req, res){
  console.log(req.body);
  const { username, password } = req.body;
  const { authorization } = req.headers;
});
 

app.get('/filmes', function(req, res) {
  connection.query('SELECT * FROM filmes', function (error, results) {

    if (error) {
      throw error
    };

    res.send(results.map(item => ({ Nome_do_Filme: item.nome_do_filme, Numero_da_Sala: item.numero_da_sala, Dia_e_Hora_da_Sessao: item.dia_e_hora_da_sessao})));
  });
});

app.get('/usuarios', function(req, res) {
  connection.query('SELECT * FROM usuarios', function (error, results) {

    if (error) { 
      throw error
    };

    res.send(results.map(item => ({ Nome: item.nome, Email: item.email, Senha: item.senha})));
  });
});


app.listen(9001, '0.0.0.0', function() {
  console.log('Listening on port 9001');
})