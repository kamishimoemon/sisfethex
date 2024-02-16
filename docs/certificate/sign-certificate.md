Feature: Sign certificate

Roles:
- Gobernador

Input:
- Certificate ID

Output (unknown)

Rules:
- Sólo se podrán firmar los analíticos en estado Listo para la firma
- Deben enviarse los datos del analítico a la api del firmador
- Los analíticos enviados correctamente deben pasarse al estado Enviado a la firma