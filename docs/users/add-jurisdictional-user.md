Feature: Add jurisdictional user

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

Output:
- Newly created user

Rules:
- Usernames must be unique
- Emails must be unique