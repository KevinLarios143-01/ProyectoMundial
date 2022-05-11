CREATE DATABASE Mundial;
USE Mundial;

CREATE TABLE Federacion(
	cod_federacion int,
	nombre_federacion varchar(30),
	PRIMARY KEY (cod_federacion)
);

CREATE TABLE Grupo(
	cod_grupo int,
	nombre_grupo char(1),
	PRIMARY KEY (cod_grupo)
);

CREATE TABLE Participantes(
	cod_participante int,
	nombre_participante varchar(30),
	Bombo int,
	skin image,
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
	rol char(1),
	acumulado int,
	PRIMARY KEY (usuario)
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

