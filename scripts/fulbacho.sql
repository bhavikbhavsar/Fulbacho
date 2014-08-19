DROP DATABASE IF EXISTS fulbacho;

CREATE DATABASE IF NOT EXISTS fulbacho 
							DEFAULT CHARACTER SET utf8;
							
CREATE TABLE IF NOT EXISTS fulbacho.usuarios (
   	id int not null auto_increment KEY,
 	nombre varchar(100) not null,
	apellido varchar(100) not null,
	mail varchar(100) not null,
	pass blob not null,
	
	sexo ENUM('M', 'F', 'O') not null
);

