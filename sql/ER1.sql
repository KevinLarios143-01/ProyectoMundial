-- Database: mundial

-- DROP DATABASE IF EXISTS mundial;

CREATE DATABASE mundial
    WITH 
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'C'
    LC_CTYPE = 'C'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1;
	
CREATE TABLE Federacion(
	cod_federacion int,
	nombre_federacion varchar(30),
	PRIMARY KEY (cod_federacion)
);

INSERT INTO Federacion VALUES (1,'UEFA');
INSERT INTO Federacion VALUES (2,'CONMEBOL');
INSERT INTO Federacion VALUES (3,'CONCACAF');
INSERT INTO Federacion VALUES (4,'AFC');
INSERT INTO Federacion VALUES (5,'OFC');

CREATE TABLE Grupo(
	cod_grupo int,
	nombre_grupo char(1),
	PRIMARY KEY (cod_grupo)
);

INSERT INTO Grupo VALUES (1,'A');
INSERT INTO Grupo VALUES (2,'B');
INSERT INTO Grupo VALUES (3,'C');
INSERT INTO Grupo VALUES (4,'D');
INSERT INTO Grupo VALUES (5,'E');
INSERT INTO Grupo VALUES (6,'F');
INSERT INTO Grupo VALUES (7,'G');
INSERT INTO Grupo VALUES (8,'H');

CREATE TABLE Participantes(
	cod_participante SERIAL,
	nombre_participante varchar(30),
	Bombo int,
	skin bytea,
	cod_federacion int,
	cod_grupo int,
	PRIMARY KEY (cod_participante),
	FOREIGN KEY (cod_federacion) REFERENCES Federacion(cod_federacion),
	FOREIGN KEY (cod_grupo) REFERENCES Grupo(cod_grupo)
);

CREATE TABLE Partidos(
	num_partido int,
	lugar varchar(50),
	hora time,
	fecha date,
	cod_participante1 int,
	cod_participante2 int,
	marcador1 int,
	marcador2 int,
	PRIMARY KEY (num_partido),
	FOREIGN KEY (cod_participante1) REFERENCES Participantes(cod_participante),
	FOREIGN KEY (cod_participante2) REFERENCES Participantes(cod_participante)
);

CREATE TABLE Usuarios(
	usuario varchar(25),
	contra varchar(30),
	nombre varchar(30),
	apellido varchar(30),
	rol char(1),
	acumulado int,
	PRIMARY KEY (usuario),
	CHECK (rol in ('A','U'))
);

CREATE TABLE Quinielas(
	cod_quiniela int,
	M_1 int,
	M_2 int,
	usuario varchar(25),
	num_partido int,
	PRIMARY KEY (cod_quiniela),
	FOREIGN KEY (usuario) REFERENCES Usuarios(usuario),
	FOREIGN KEY (num_partido) REFERENCES Partidos(num_partido)
);

