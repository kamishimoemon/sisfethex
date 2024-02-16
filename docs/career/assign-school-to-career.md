Feature: Assign school(s) to career

Roles:
- Gobernador
- Supervisor

Input:
- Career ID
- School ID

Output:
- Updated career

Rules:
- Los gobernadores sólo pueden asignar escuelas de su jurisdicción a carreras de su jurisdicción
- Los supervisores sólo pueden asignar escuelas que tengas asignadas a carreras de su jurisdicción