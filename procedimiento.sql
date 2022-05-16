DELIMITER //
USE usuarios
CREATE PROCEDURE seleccionar4 (
	IN nombre1 VARCHAR(20),
	contra1 VARCHAR(20)

)
BEGIN
	SELECT *
	FROM  credenciales 
	WHERE nombre = nombre1 and password = contra1;
END//

CALL seleccionar4('pepe','pepe');



