@da4linux

--CRIANDO TABELA COM CHAVE ESTRANGEIERA OU REFERENCIA
CREATE TABLE posts(
	id INT NOT NULL AUTO_INCREMENT,
	titulo VARCHAR(200) NOT NULL,
	conteudo TEXT,
	criado_em DATETIME DEFAULT NOW(),
	publicado BOOLEAN DEFAULT FALSE,
	usuario_id INT NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);


--INSERINDO DADOS
INSERT INTO usuarios(nome, email, senha)
VALUES('Tiago Felipe', 'tiagosantos0412@gmail.com', '123');

--BUSCAR INFORMACOES NO BANCO COM O SELECT
SELECT * FROM usuarios;

--ATUALIZAR INFORMACAO DO BANCO
UPDATE usuarios SET nome = 'Tiago F' WHERE id = 3;

--DELETANDO INFORMACOES DO BANCO
DELETE FROM usuarios WHERE id = 3;

SELECT * FROM usuarios WHERE senha = 123;

--BUSCANDO REGISTROS ORDENADOS
SELECT * FROM usuarios ORDER BY id DESC;

SELECT count(*) FROM usuarios;


INSERT INTO posts(titulo, usuario_id)
VALUES('Meu primeiro post', 1);

--SELECT COM O JOIN
SELECT u.*, p.* FROM posts p
INNER JOIN usuarios u ON p.usuario_id = u.id 
WHERE u.id = 4;

SELECT u.nome as autor, p.titulo FROM posts p
INNER JOIN usuarios u ON p.usuario_id = u.id 
WHERE u.id = 4;

--NAO VEIRIFICAR A CHAVE ESTRANGEIRA PARA PODER EXECUTAR O TRUNCATE
SET FOREIGN_KEY_CHECKS = 0;

--LIMPAR O BANCO DE DADOS
TRUNCATE usuarios;
