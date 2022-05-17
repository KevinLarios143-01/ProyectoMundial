-- Database: mundial

-- DROP DATABASE IF EXISTS mundial;

CREATE DATABASE Mundial;
	
CREATE TABLE Federacion(
	cod_federacion serial,
	nombre_federacion varchar(30),
	PRIMARY KEY (cod_federacion)
);

INSERT INTO Federacion VALUES (1,'UEFA');
INSERT INTO Federacion VALUES (2,'CONMEBOL');
INSERT INTO Federacion VALUES (3,'CONCACAF');
INSERT INTO Federacion VALUES (4,'AFC');
INSERT INTO Federacion VALUES (5,'OFC');
INSERT INTO Federacion VALUES (6,'CAF');


CREATE TABLE Grupo(
	cod_grupo serial,
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
	skin text,
	cod_federacion int,
	cod_grupo int,
	wins int,
	draws int,
	loses int,
	PRIMARY KEY (cod_participante),
	FOREIGN KEY (cod_federacion) REFERENCES Federacion(cod_federacion),
	FOREIGN KEY (cod_grupo) REFERENCES Grupo(cod_grupo)
);

CREATE TABLE Lugar(
	cod_lugar serial,
	nombre_estadio varchar(45),
	PRIMARY KEY (cod_lugar)
);

INSERT INTO public.lugar(cod_lugar, nombre_estadio) VALUES (1, 'LUSAIL');
INSERT INTO public.lugar(cod_lugar, nombre_estadio) VALUES (2, 'AL JANOUB');
INSERT INTO public.lugar(cod_lugar, nombre_estadio) VALUES (3, '974');
INSERT INTO public.lugar(cod_lugar, nombre_estadio) VALUES (4, 'AL THUMAMA');
INSERT INTO public.lugar(cod_lugar, nombre_estadio) VALUES (5, 'INTERNACIONAL KHALIFA');
INSERT INTO public.lugar(cod_lugar, nombre_estadio) VALUES (6, 'CIUDAD DE LA EDUCACION');
INSERT INTO public.lugar(cod_lugar, nombre_estadio) VALUES (7, 'AHMED BIN ALI');

CREATE TABLE Partidos(
	num_partido SERIAL,
	cod_lugar int,
	hora time,
	fecha date,
	fase char,
	cod_participante1 int,
	cod_participante2 int,
	marcador1 int,
	marcador2 int,
	PRIMARY KEY (num_partido),
	FOREIGN KEY (cod_participante1) REFERENCES Participantes(cod_participante),
	FOREIGN KEY (cod_participante2) REFERENCES Participantes(cod_participante),
	FOREIGN KEY (cod_lugar) REFERENCES Lugar(cod_lugar),
	CHECK(fase in ('G','E') and cod_participante1<>cod_participante2)
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
	cod_quiniela SERIAL,
	M_1 int,
	M_2 int,
	usuario varchar(25),
	num_partido int,
	PRIMARY KEY (cod_quiniela),
	FOREIGN KEY (usuario) REFERENCES Usuarios(usuario),
	FOREIGN KEY (num_partido) REFERENCES Partidos(num_partido)
);

