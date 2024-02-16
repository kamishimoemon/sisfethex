Feature: Add certificate

Roles:
- Administrador

Input:
- Tipo de documento: combo, obligatorio
- Nro. de documento: texto, obligatorio
- Sexo: combo, obligatorio
- CUIL: texto, opcional
- Apellidos: texto, obligatorio
- Nombres: texto, obligatorio
- Lugar de nacimiento: texto, obligatorio
- Fecha de nacimiento: fecha, obligatorio
- Nacionalidad: combo, obligatorio
- Email: dirección de email, obligatorio
- Teléfono: texto, obligatorio
- Observaciones: texto, opcional
- Carrera: combo editable, listado de carreras de la jurisdicción, obligatorio
- Descripción adicional: etiqueta
- Datos de la carrera: etiqueta
- Fecha de egreso: fecha, opcional
- Promedio: entero positivo, opcional
- Libro Matriz: texto, opcional
- Folio: entero positivo, opcional
- Calificaciones: multilinea
	- Año: año de la carrera, sólo lectura
	- Asignatura: nombre de la asignatura, sólo lectura
	- Calificación: texto o entero positivo, opcional
	- Condición: combo, opcional
	- Mes: combo, opcional
	- Año: combo, entre 1950 y 2024, opcional
	- Establecimiento: combo, En este establecimiento o En otro establecimiento, obligatorio

Output:
- Newly created certificate