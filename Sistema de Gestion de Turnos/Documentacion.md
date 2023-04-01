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
- IDservicios
- IDempleado
- Fechayhora
- IDestados
- Secuencia

Estados
- IDestados
- Estados
