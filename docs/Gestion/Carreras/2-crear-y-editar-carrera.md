Operación: Gestión / Carreras
Roles:
- Administrador
- Ministerio
- Area Central
- Supervisor
- Institucional

Pantalla: Crear y editar carrera

Feature: Guardar borrador
Campos:
- Jurisdicción: será inicializada dependiendo del usuario logueado, obligatorio
- Título: Título o Certificado, obligatorio
- Título de la carrera: texto, 100 caracteres, obligatorio, único dentro de su jurisdicción (case-insensitive)
- Descripción
- Nivel Educativo: Educación Secundaria Completa o Educación Superior Completa
- Fecha de Baja
- Cantidad de Años: entero positivo, obligatorio
- Norma Jurisdiccional de Aprobación: múltiples valores, obligatorio
	- Tipo de Norma: Ley, Decreto, RM, RS, RSS, Disposición, Resolución o Acuerdo, obligatorio
	- N°: entero positivo, obligatorio
	- Año: entero entre 1950 y año actual
- Validez Nacional Otorgada por: múltiples valores, obligatorio
	- Tipo de Norma: Ley, Decreto, RM, RS, RSS, Disposición, Resolución o Acuerdo, obligatorio
	- N°: entero positivo, obligatorio
	- Año: entero entre 1950 y año actual
- Asignaturas: múltiples valores, obligatorio
	- Asignatura: una asignatura perteneciente a la jurisdicción seleccionada anteriormente, obligatorio
	- Año: el año de la asignatura, sólo lectura

Feature: Copiar asignaturas
Reglas:
- Selecciona una carrera perteneciente a la jurisdicción anteriormente seleccionada, elimina las asignaturas de la carrera actual y copia las asignaturas de la carrera seleccionada en la carrera actual manteniendo el orden