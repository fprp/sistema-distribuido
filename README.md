Projeto da disciplina de sistemas distribuidos da UFRPE

## Como rodar

### Instalando dependências
Acesse a pasta `./api` no terminal e execute:
```
npm install
```

### Construindo as imagens e rodando os container
Acesse a pasta do diretorio do projeto no terminal e execute:
```
docker-compose up -d
```

### Adicionando o bd 
Acesse a pasta do diretorio do projeto no terminal e, apos o comando acima, execute:
```
docker exec -i mysql-container mysql -uroot -padmin < api/db/script.sql
```
### Parar os containers
Acesse a pasta do diretorio do projeto no terminal e execute:
```
docker-compose stop
```

### Acessar o banco de dados
1. Acesse a pasta do diretorio do projeto no terminal e execute:
```
docker exec -it mysql-container /bin/bash
```
2. Execute:
```
mysql -uroot -padmin
```
3. Acesse o banco executando:
```
use cinema
```