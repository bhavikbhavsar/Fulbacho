DROP DATABASE IF EXISTS fulbacho;

CREATE DATABASE IF NOT EXISTS fulbacho 
							DEFAULT CHARACTER SET utf8;
							
CREATE TABLE IF NOT EXISTS fulbacho.usuarios (
   	id int not null auto_increment KEY,
 	nombre varchar(100) not null,
	apellido varchar(100) not null,
	mail varchar(100) not null UNIQUE,
	password blob not null,
	sexo ENUM('M', 'F', 'O') not null
);


CREATE PROCEDURE fulbacho.registrarUsuario(nombre varchar(100), 
										 apellido varchar(100), 
										 mail varchar(100),
										 password blob, 
										 sexo char)
	INSERT INTO fulbacho.usuarios(nombre, apellido, mail, password, sexo) 
	VALUES (nombre, apellido, mail, AES_ENCRYPT(password, 'masterPassword'), sexo);


CREATE PROCEDURE fulbacho.login(mail varchar(100), password varchar(100))
	SELECT 	U.id id, 
			U.nombre nombre, 
			U.apellido apellido, 
			U.mail mail 
	FROM fulbacho.usuarios U
	WHERE U.mail = mail AND
		  U.password = AES_ENCRYPT(password, 'masterPassword');

		  
/*     USUARIOS    */
GRANT EXECUTE 
	  ON fulbacho.* 
	  TO 'usuario'@'localhost'
	  IDENTIFIED BY '1234' 
	  WITH GRANT OPTION;