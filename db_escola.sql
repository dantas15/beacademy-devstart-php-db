-- Para criar um banco de dados --
CREATE DATABASE db_escola;

-- Selecionar o banco de dados --
USE db_escola;


-- Criar tabela --
CREATE TABLE tb_professor
(
    nome  VARCHAR(100)        NOT NULL,
    cpf   CHAR(11) UNIQUE     NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL
);

-- Excluir tabela --
DROP TABLE tb_professor;

CREATE TABLE tb_aluno
(
    nome      VARCHAR(100) NOT NULL,
    cpf       CHAR(11)     NOT NULL,
    email     VARCHAR(255) NOT NULL,
    matricula VARCHAR(10)  NOT NULL
);

-- Inserir dados  --
INSERT INTO tb_professor (nome, email, cpf)
VALUES ('Alessandro', 'ale@teste.com', '33344478901');

INSERT INTO tb_professor (nome, email, cpf)
VALUES ('Bruno', 'bruno@teste.com', '12345678901');

