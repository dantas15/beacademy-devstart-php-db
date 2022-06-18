-- Criar o banco --
CREATE DATABASE db_store;

-- Selecionar o banco --
USE db_store;

-- Criando a tabela categoria --
CREATE TABLE tb_category
(
    id          INT(11) PRIMARY KEY AUTO_INCREMENT,
    name        VARCHAR(30)  NOT NULL,
    description VARCHAR(100) NOT NULL
);

-- Criando a tabela produto com relação com categoria --
CREATE TABLE tb_product (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(100) NOT NULL,
    photo VARCHAR(255) NOT NULL,
    valor FLOAT(5,2) NOT NULL,
    categoria_id INT(11) NOT NULL,
    quantity INT(5) NOT NULL,
    created_at DATETIME NOT NULL
);

-- Inserindo dados na tabela categoria --
INSERT INTO tb_category (name, description)
VALUES
    ('Informática', 'Produtos de informática e acessórios para computador'),
    ('Escritório', 'Canetas, cadernos, etc'),
    ('Eletrônicos', 'TVs, som portátil, etc')

