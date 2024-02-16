Feature: Add administrator

Roles:
- Administrador
- Gobernador

Input:
- Usuario
- Contraseña: con confirmación
- Apellido
- Nombre
- Correo electrónico

Output:
- Newly created user

Rules:
- Usernames must be unique
- Emails must be unique