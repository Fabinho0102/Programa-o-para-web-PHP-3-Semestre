CREATE DATABASE eleicao;

CREATE TABLE eleitor(
    ideleitor int(11) PRIMARY KEY IDENTITY,
    nomeleitor VARCHAR(110),
    tituloeleitor VARCHAR(20),
    rgeleitor VARCHAR(20),
    cpfeleitor VARCHAR(20),
    datadia varchar(10),
    estadoeleitor VARCHAR(10),
    cidadeleitor VARCHAR(100),
    municipioeleitor VARCHAR(100),
    codpartido VARCHAR(20),
    voto VARCHAR(20)
);