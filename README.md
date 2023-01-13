# phpWebConection
https://app.planetscale.com/fabianlopezmagnan


CREAR TABLAS
###
CREATE TABLE products (
    id VARCHAR(50) NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    garantia ENUM('SI','NO') NOT NULL,
    PRIMARY KEY (id)
)  ENGINE=InnoDB;
###


BUSCAR DATOS
###
SELECT * FROM productos WHERE id = 'valor_del_id'
###


INCERTAR DATOS
###
INSERT INTO productos (id, nombre, garantia)
VALUES 
  ('ABC123', 'Producto 1', 'SI'),
  ('DEF456', 'Producto 2', 'NO'),
  ('GHI789', 'Producto 3', 'SI'),
  ('JKL012', 'Producto 4', 'NO'),
  ('MNO345', 'Producto 5', 'SI'),
  ('PQR678', 'Producto 6', 'NO'),
  ('STU901', 'Producto 7', 'SI'),
  ('VWX234', 'Producto 8', 'NO'),
  ('YZ0987', 'Producto 9', 'SI'),
  ('1234AB', 'Producto 10', 'NO');
  ###