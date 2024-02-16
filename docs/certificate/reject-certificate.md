Feature: Reject certificate

Roles:
- Gobernador
- Supervisor

Input:
- Certificate ID
- Remarks

Output:
- Updated certificate

Rules:
- Si el usuario es supervisor, el analítico debe estar en estado En revisión.
- Si el usuario es supervisor, el analítico deberá pasar al estado Rechazado.
- Si el usuario es gobernador, el analítico debe estar en estado En firmante.
- Si el usuario es gobernador, el analítico deberá pasar al estado Rechazado.