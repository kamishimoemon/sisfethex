Operación: Gestión / Carreras
Roles:
- Administrador
- Ministerio
- Area Central
- Supervisor
- Institucional

Reglas:
- El botón "Nueva carrera" dirigirá a la pantalla [Crear y editar carrera](./2-crear-y-editar-carrera.md)

Feature: Filtrar carreras
Campos:
- Jurisdicción: combo
- Título de la carrera: combo editable
- Norma Jurisdiccional de Aprobación: texto, colapsado
- Validez Nacional Otorgada por: texto, colapsado
- Fecha Baja de la Carrera: fecha, colapsado
- Cantidad de Años: entero positivo, colapsado
- Estado: combo, Aprobada o En carga o Inactica o Pendiente de Revisión o Rechazada, colapsado
- Establecimiento: combo editable, colapsado

Feature: Listar carreras
Columnas:
- ID
- Título
- Descripción
- Jurisdicción
- Norma Jurisdiccional de Aprobación
- Validez Nacional Otorgada por
- Estado
Reglas:
- Debe haber un botón editar por fila que redirija a la pantalla [Crear y editar carrera](./2-crear-y-editar-carrera.md) con los datos de la carrera seleccionada precargados
