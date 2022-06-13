Create DATABASE db_login;

Create table users(
    user_id INT(20) PRIMARY KEY IDENTITY,
    user_name VARCHAR(100),
    user_email VARCHAR(100),
    user_date DATE,
    user_mensagem VARCHAR(100)
);

/* CASO DE ERRO, TROCAR IDENTITY POR AUTO_INCREMENT*/