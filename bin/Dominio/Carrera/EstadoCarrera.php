<?php

declare(strict_types=1);

namespace Sisfet\Dominio\Carrera;

interface EstadoCarrera
{
	const EN_CARGA = 1;
	const PENDIENTE = 2;
	const RECHAZADA = 3;
	const APROBADA = 4;
	const INACTIVA = 5;
}