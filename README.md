# CakePHP Application

# O que você precisa saber antes de seguir adiante?

-   É necessário ter o MySQL instalado na sua máquina, caso não tenha, acesse o link da documentação (https://dev.mysql.com/doc/mysql-installation-excerpt/8.0/en/) para saber como instalá-lo.
-   Após inicializar o servidor do MySQL, você deve utilizar esses comandos para criar o banco de dados e as tabelas que serão utilizadas no projeto:

```
CREATE DATABASE cake_cms;

USE cake_cms;

CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL,
created DATETIME,
modified DATETIME
);

CREATE TABLE articles (
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT NOT NULL,
title VARCHAR(255) NOT NULL,
slug VARCHAR(191) NOT NULL,
body TEXT,
published BOOLEAN DEFAULT FALSE,
created DATETIME,
modified DATETIME,
UNIQUE KEY (slug),
FOREIGN KEY user_key (user_id) REFERENCES users(id)
) CHARSET=utf8mb4;

CREATE TABLE tags (
id INT AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(191),
created DATETIME,
modified DATETIME,
UNIQUE KEY (title)
) CHARSET=utf8mb4;

CREATE TABLE articles_tags (
article_id INT NOT NULL,
tag_id INT NOT NULL,
PRIMARY KEY (article_id, tag_id),
FOREIGN KEY tag_key(tag_id) REFERENCES tags(id),
FOREIGN KEY article_key(article_id) REFERENCES articles(id)
);

INSERT INTO users (email, password, created, modified)
VALUES
('cakephp@example.com', 'secret', NOW(), NOW());

INSERT INTO articles (user_id, title, slug, body, published, created, modified)
VALUES
(1, 'First Post', 'first-post', 'This is the first post.', 1, NOW(), NOW());
```

-   Preencha o arquivo `Caminho/Do/Seu/Diretorio/cakephp_cms/config/app.php`, na configuração de 'Datasources', com as credenciais de acesso ao MySQL para que o CakePHP consiga conectar com sucesso.

# Como executar esse projeto?

-   Faça o download do repositório.
-   Abra o terminal e entre na pasta do projeto com o seguinte comando: `cd Caminho/Do/Seu/Diretorio/cakephp_cms`.
-   Após acessar à pasta do projeto, execute o comando `bin/cake server` para rodar o servidor da aplicação.
-   Utilize a URL http://localhost:8765/articles para acessar à página principal.

# Como ficou o projeto?

Aqui estão algumas capturas de tela das principais funcionalidades do projeto ("consultar", "incluir", "alterar" e "excluir").
