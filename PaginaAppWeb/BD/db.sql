USE Almacen;

USE Almacen;
CREATE TABLE Producto (
  id_producto int(5) NOT NULL AUTO_INCREMENT,
  nombre varchar(50) DEFAULT NULL,
  descripcion varchar(50) DEFAULT NULL,
  PRIMARY KEY (id_producto)
);