Create DATABASE livraria;

Create TABLE livros(
    nome VARCHAR(255),
    autor VARCHAR(255),
    quantidade int(11),
    preco VARCHAR(255),
    flag TINYINT(1) NULL DEFAULT 0,
    data DATE
);