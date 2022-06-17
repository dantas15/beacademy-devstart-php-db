-- Para criar um banco de dados --
CREATE DATABASE db_escola;

-- Selecionar o banco de dados --
USE db_escola;


-- Criar tabela --
CREATE TABLE tb_professor
(
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    nome  VARCHAR(100)        NOT NULL,
    cpf   CHAR(11) UNIQUE     NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL
);

-- Excluir tabela --
DROP TABLE tb_professor;

CREATE TABLE tb_aluno
(
    nome      VARCHAR(100)        NOT NULL,
    cpf       CHAR(11) UNIQUE     NOT NULL,
    email     VARCHAR(255) UNIQUE NOT NULL,
    matricula VARCHAR(10) UNIQUE  NOT NULL
);

-- Inserir dados  --
INSERT INTO tb_professor (nome, email, cpf)
VALUES ('Alessandro', 'ale@teste.com', '33344478901');

INSERT INTO tb_professor (nome, email, cpf)
VALUES ('Bruno', 'bruno@teste.com', '12345678901');

-- Selecionar os dados --
SELECT *
FROM tb_professor;

-- Criar as tabelas de curso e disciplina
CREATE TABLE tb_curso (
    nome VARCHAR(100) NOT NULL
);

CREATE TABLE tb_disciplina (
    nome VARCHAR(100) NOT NULL
);