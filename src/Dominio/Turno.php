<?php

declare(strict_types=1);

namespace Sisfet\Dominio;

interface Turno
{
	const TARDE = 1;
	const MAÑANA = 2;
	const VESPERTINO = 3;
	const DOBLE_TURNO = 4;
	const JORNADA_COMPLETA = 5;
}