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
    ('Eletrônicos', 'TVs, som portátil, etc');


-- Renomeando colunas
ALTER TABLE tb_product RENAME COLUMN valor TO value;
ALTER TABLE tb_product RENAME COLUMN categoria_id TO category_id;

INSERT INTO tb_product (name, description, photo, value, category_id, quantity, created_at)
VALUES
('Teclado', 'Teclado para melhor produtividade', 'https://resource.logitech.com/content/dam/logitech/en/products/keyboards/multi-keyboard-k380/gallery/k380-grey-gallery-01-ori.png', 699.50, 1, 50, '2022-06-17 22:30:34'),
('Mouse', 'Mouse para jogar', 'https://images.kabum.com.br/produtos/fotos/107333/mouse-gamer-sem-fio-logitech-g-pro-wireless-lightspeed-rgb-lightsync-ambidestro-6-botoes-programaveis-hero-25k-910-005271_1644501564_g.jpg', 499.99, 1, 20, '2022-06-17 22:30:34'),
('Fone', 'Fone gamer minimalista', 'https://www.logitechstore.com.br/media/catalog/product/cache/1/image/634x545/9df78eab33525d08d6e5fb8d27136e95/h/e/headseat-g-pro-3.png', 199.32, 1, 60, '2022-06-17 22:30:34');

