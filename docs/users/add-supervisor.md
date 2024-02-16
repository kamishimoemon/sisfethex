Feature: Add supervisor

Roles:
- Administrador
- Gobernador

Input:
- Usuario
- Contraseña: con confirmación
- Apellido
- Nombre
- Correo electrónico
- Jurisdicción
- Escuelas: múltiples valores

Output:
- Newly created user

Rules:
- Usernames must be unique
- Emails must be unique