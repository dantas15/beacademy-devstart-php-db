USE db_escola;

-- Inserir 1 registro
INSERT INTO tb_professor (nome, email, cpf)
VALUES ('Chiquim', 'chiquim@email.com', '5554477777');

-- Inserir mais de 1 registro
INSERT INTO tb_professor (nome, email, cpf)
VALUES ('Zezim', 'zezim@email.com', '63334445556'),
       ('Maria', 'maria@email.com', '73334445556'),
       ('Luiza', 'luiza@email.com', '83334445556');

-- Excluir 1 registro
DELETE FROM tb_professor WHERE id='1';

-- Excluir todos --
DELETE FROM tb_professor;

-- Editar dados de 1 registro --
UPDATE tb_professor SET nome='Luiza da Caucaia' WHERE cpf='83334445556';

-- Editar dados de todos os registros --
UPDATE tb_professor SET nome='Francisco';

-- Selecionar dados --
SELECT * FROM tb_professor;

-- Selecionar todos os dados do professor de id = 4 --
SELECT * FROM tb_professor WHERE id='4';

-- Selecionar alguns dados de todos os professores
SELECT nome, cpf FROM tb_professor;