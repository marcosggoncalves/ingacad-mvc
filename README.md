
# IngáCad 

Guia para subir o projeto **IngáCad**  localmente. 

## Requisitos:

1. **PHP 8.1 ou superior** (que vem junto com o Laravel)
2. **Composer** (o gerenciador de dependências do PHP)
3. **XAMPP** (para rodar o banco de dados MySQL localmente)

##  Subir a Aplicação:

### 1. **Instalar o XAMPP**

Primeiro, baixe o [XAMPP](https://www.apachefriends.org/pt_br/index.html) no seu computador e siga as instruções para instalar. O XAMPP vai te ajudar a rodar o Apache (servidor) e o MySQL (banco de dados), que são essenciais para rodar nossa aplicação.

- Durante a instalação, marque para instalar o **Apache** e o **MySQL**.
- Após a instalação, abra o **XAMPP Control Panel** e inicie o **Apache** e o **MySQL**.
- Se tudo correr bem, ambos devem estar com o status **Running**. 💻🚀

### 2. **Configurar o Banco de Dados**

1. No XAMPP, abra o **phpMyAdmin** clicando em "Admin" no painel de controle do XAMPP.
2. Crie um novo banco de dados chamado **`inga_cad`**.

Depois, abra o arquivo `.env` que fica na raiz do seu projeto e edite as configurações do banco de dados:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=inga_cad
DB_USERNAME=root
DB_PASSWORD=
```

- O `DB_USERNAME` geralmente é `root` por padrão no XAMPP e o `DB_PASSWORD` deixa em branco.
- Não esqueça de rodar as **migrations** 

### 3. **Instalar as Dependências do Projeto**

Agora que o Laravel já está configurado, vamos instalar as dependências que o projeto precisa para funcionar. No terminal (dentro do diretório do seu projeto), execute:

```bash
composer install
```

Esse comando vai baixar todas as dependências necessárias para rodar o Laravel.

### 4. **Rodar as Migrations**

As migrations são arquivos que criam as tabelas do banco de dados. Para rodá-las, basta rodar o comando:

```bash
php artisan migrate
```

Criar as tabelas do banco de dados (como a tabela de **clientes**) e as configs do laravel.

### 5. **Rodar a Aplicação (Frontend e Backend)**

Agora vem a parte mais simples! Para rodar tanto o frontend (Bootstrap, CSS, JS) quanto o backend (Laravel, API, etc.), basta rodar o seguinte comando:

```bash
composer run dev
```

Esse comando vai iniciar o servidor do Laravel, compilar os assets do frontend e garantir que tudo esteja funcionando.

Quando o processo finalizar, você pode acessar a aplicação diretamente no seu navegador em:

```
http://localhost:8000
```
