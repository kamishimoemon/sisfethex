Feature: Browser certificates

Roles:
- Administrador
- Gobernador
- Supervisor

Input:
- Jurisdicción: etiqueta, jurisdicción del usuario logueado
- Institución: etiqueta, establecimiento del usuario logueado
- Nro. de trámite: id de trámite
- Apellidos: texto, colapsado
- Nombres: texto, colapsado
- Tipo: combo, todas las opciones de tipo de documento
- Nro. Documento: texto
- Carrera: combo editable, listado de carreras de la jurisdicción, colapsado
- Fecha de egreso desde: fecha, colapsado
- Fecha de egreso hasta: fecha, colapsado
- Estado: En carga o Rechazado o Ambos, colapsado

Output:
- Iterable of certificates

Reglas:
- Si se especifica escuela y el usuario es supervisor, la escuela especificada debe estar dentro de las escuelas supervisadas por el usuario