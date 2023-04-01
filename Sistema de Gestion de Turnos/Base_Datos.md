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

# Query
~~~
CREATE TABLE Bancos ( idbanco int AUTO_INCREMENT, nombre varchar(40), rnc varchar(12), PRIMARY KEY(idbanco) ); 

CREATE TABLE Sucursales ( idsurcusales int AUTO_INCREMENT, idbanco int, nombre varchar(40), PRIMARY KEY(idsurcusales) );

CREATE TABLE Cliente ( idcliente int AUTO_INCREMENT, nombre varchar(40), apellido varchar(40), sexo varchar(1), fecha date, telefono varchar(12), correo varchar(50), PRIMARY KEY(idcliente) );

CREATE TABLE Servicio ( idservicio int AUTO_INCREMENT, nombre varchar (40), prioridad varchar (40), tiempoestimado int, PRIMARY KEY(idservicio) );

CREATE TABLE Empleado ( idempleado int AUTO_INCREMENT, nombre varchar (40), apellido varchar (40), cedula varchar (40), sexo varchar (40), idcargo int, PRIMARY KEY(idempleado) );

create TABLE cargo ( id_cargo int PRIMARY key AUTO_INCREMENT, cargo varchar (50) not null );

create table turnos ( idturnos int PRIMARY KEY AUTO_INCREMENT, idsucursal int, idcliente int, idservicios int, idempleados int, idfechayhora int, idestado int, secuencia varchar (50) );

CREATE TABLE estatus ( idestatus int PRIMARY KEY AUTO_INCREMENT, estatus varchar(50) );
~~~
