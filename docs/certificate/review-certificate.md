Feature: Review certificate

Roles:
- Gobernador
- Supervisor

Input:
- Certificate ID

Output:
- Updated certificate

Rules:
- Si el usuario es supervisor, el analítico debe estar en estado Pendiente de revisión.
- Si el usuario es supervisor, el analítico deberá pasar al estado En revisión.
- Si el usuario es gobernador, el analítico debe estar en estado Pendiente jurisdicción.
- Si el usuario es gobernador, el analítico deberá pasar al estado En firmante.