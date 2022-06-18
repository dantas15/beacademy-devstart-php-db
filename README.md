# beacademy-devstart-php-db

![Screenshot do projeto que foi desenvolvido](https://i.imgur.com/taPqMZf.png)

<p align="center">  
  <a href="#sobre">Sobre</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#requisitos">Requisitos</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#mariadb-com-docker">Baixar e configurar container MariaDB</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#como-executar">Como executar</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#ferramentas">Ferramentas utilizadas</a>
</p>

## Sobre

Repositório final das aulas introdutórias de PHP do Devstart [Paylivre](https://www.paylivre.com/),
da [BeAcademy](https://www.beacademy.com.br/). Este repositório, diferentemente dos outros, apresenta um projeto com um
CRUD completo utilizando um banco de dados MariaDB.

## Requisitos

- Assumo que você tenha instalado e configurado na sua máquina:
  - [PHP](https://www.php.net/) (estou usando a versão `8.1`)
  - [Docker](https://docs.docker.com/get-docker/) **OU** [MariaDB](https://mariadb.org/) Configurados corretamente
    para o seu sistema operacional

## MariaDB com Docker

> _**Obs.:** Não é necessário seguir este passo caso você já tenha o banco de dados configurado na sua máquina (
> Lembre-se de mudar as variáveis de ambiente)_

> [MariaDB - Imagem Oficial | Docker Hub](https://hub.docker.com/_/mariadb)

- Baixando a última imagem disponível

```bash
docker run --detach --name mariadb-php-db --env MARIADB_USER=php_db_user --env MARIADB_PASSWORD=drowssap --env MARIADB_ROOT_PASSWORD=toor_drowssap -p3306:3306 mariadb:latest
```

- `--detach` ou `-d` faz com que o container continue executando normalmente. Caso não seja fornecido, só será possível
  utilizar o MariaDB em um terminal que será aberto
- `--name` nome do container a ser criado
- `--env` serve para passar uma variável ambiente para o container a ser criado
  - Variáveis de ambiente do MariaDB (mude conforme achar melhor):
    - `MARIADB_USER`=`php_db_user`
    - `MARIADB_PASSWORD`=`drowssap`
    - `MARIADB_ROOT_PASSWORD`=`toor_drowssap`

### Executar o MariaDB pelo terminal

```bash
 docker exec -it <container-id> mariadb -u php_db_user -pdrowssap
```

- Substitua `<container-id>` pelo id do container criado (`docker ps` para ver os containers rodando)
- `-u` é o usuário fornecido
- `-p` é a senha fornecida para o usuário

## Como executar

> Certifique-se de configurar corretamente as variáveis de ambiente do MariaDB ou de ter executado o container corretamente <a href="#mariadb-com-docker">aqui</a>

1. Clone o repositório

   ```bash
   # Clonando com HTTPS
   git clone https://github.com/gusgalote/beacademy-devstart-php-db.git

   # Entre no diretório raiz do projeto
   cd beacademy-devstart-php-db
   ```

2. Pela raiz do projeto, ligue o servidor embutido do PHP:

   ```bash
   php -S localhost:8000 -t projeto-final/public
   ```

3. Pronto ✅ O projeto desenvolvido estará rodando em http://localhost:8000/

## Ferramentas

- [VSCode](https://code.visualstudio.com/)
- [PHP](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Docker](https://docker.com/)
- [MariaDB](https://mariadb.org/)
- [Bootstrap](https://getbootstrap.com/docs/5.2/getting-started/introduction/)
