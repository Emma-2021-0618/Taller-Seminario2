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
- Foto
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
    IDBanco int AUTO_INCREMENT,
    Nombre varchar(40),
    RNC varchar(12),
    PRIMARY KEY(IDBanco)
);

CREATE TABLE Sucursales (
    IDSurcusales int AUTO_INCREMENT,
    IDBanco int,
    Nombre varchar(40),
    PRIMARY KEY(IDSurcusales)
);

CREATE TABLE Sucursales (
    IDSurcusales int AUTO_INCREMENT,
    IDBanco int,
    Nombre varchar(40),
    PRIMARY KEY(IDSurcusales)
);

Servicios>Mysql80>Propiedades>Desabilitad>Aplicar>Reiniciar si no funciona Mysql
