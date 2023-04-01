# Estrutura Base de datos
Bancos
- IDBanco
- Nombre
- RNC

Sucursales
- IDsucursal
- IDBancop
- Nombre

Cliente
- IDCliente
- Nombre
- Apellido
- Sexo
- Fecha
- Telefono
- Correo

Sericio
- Servicio
- Nombre
- Prioridad
- Tiempo_Estimado

Empleado
- IDEmpleada
- Nombre
- Apellido
- Cedula
- Sexo
- IDCargo

Cargo
- IDCargo
- Cargo

Turnos
- IDTurno
- IDSurcusal
- IDCliente
- IDServicios
- IDEmpleado
- Fechayhora
- IDEstados
- Secuencia

Estatus
- IDEstatus
- Estatus

CREATE TABLE Bancos (
    idbanco int AUTO_INCREMENT,
    nombre varchar(40),
    rnc varchar(12),
    PRIMARY KEY(idbanco)
);
CREATE TABLE Sucursales (
    idsurcusales int AUTO_INCREMENT,
    idbanco int,
    nombre varchar(40),
    PRIMARY KEY(idsurcusales)
);

CREATE TABLE Cliente (
    idcliente int AUTO_INCREMENT,
    nombre varchar(40),
    apellido varchar(40),
    sexo varchar(1),
    fecha date,
    telefono varchar(12),
    correo varchar(50),
    PRIMARY KEY(idcliente)
);


Servicios>Mysql80>Propiedades>Desabilitad>Aplicar>Reiniciar si no funciona Mysql
