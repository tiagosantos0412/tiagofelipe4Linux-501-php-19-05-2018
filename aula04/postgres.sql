--CRIANDO UM BANCO DE DADOS
CREATE DATABASE aula;

--CRIANDO UM USUARIO E ALTERANDO O NOME DO BANCO
CREATE USER tiago PASSWORD '123';

ALTER DATABASE aula OWNER TO tiago;

--LOGANDO COM O NOSSO USUARIO
\q
exit
exit
psql -H localhost -U tiago -d aula;

--COMANDOS POSTGRES
\d => estrutura da tabela
\l => lista os bancos de dados 
\dt => lista as tabelas
\du => lista todos os usuarios
\x => altera o tipo de visualizacao

--CRIANDO TABELA DE USUARIOS
CREATE TABLE usuarios(
	id SERIAL PRIMARY KEY,
	nome VARCHAR(200) NOT NULL,
	email VARCHAR(150) NOT NULL UNIQUE,
	senha VARCHAR(200) NOT NULL
);

--CRIANDO TABELA POSTS
CREATE TABLE posts(
	id SERIAL PRIMARY KEY,
	titulo VARCHAR(150) NOT NULL UNIQUE,
	conteudo TEXT,
	criado_em TIMESTAMP DEFAULT NOW(),
	publicado BOOLEAN DEFAULT FALSE,
	usuario_id INT NOT NULL REFERENCES usuarios(id)
);

--ALTERANDO VALOR DA TABELA
ALTER TABLE posts ALTER COLUMN criado_em TYPE TIMESTAMP DEFAULT DEFAULT NOW();

--inserir dados usuarios
INSERT INTO usuarios(nome, email, senha)
VALUES('Tiago Felipe', 'tiagosantos0412@gmail.com', '123');

--inserir dados posts
INSERT INTO posts(titulo, usuario_id)
VALUES('Meu primeiro post', 1);

--removendo a chave unique 
ALTER TABLE POSTS DROP CONSTRAINT posts_titulo_key;


SELECT u.*, p.* FROM posts p
INNER JOIN usuarios u ON p.usuario_id = u.id 
WHERE u.id = 3;

