<?php

declare(strict_types=1);

namespace Sisfet\Dominio\Tramite;

interface CondicionAprobado
{
	const REGULAR = 1;
	const EQUIVALENCIA = 2;
	const SABERES_ADQUIRIDOS = 3;
	const LIBRE = 4;
	const PPI = 5;
	const EXCEPTUADO = 6;
	const HOMOLOGADO = 7;
	const NO_REGULAR = 8;
	const MOVILIDAD = 9;
	const PROMOCION = 10;
	const CORRESPONDENCIA = 11;

	/*
	public static function getInstancia (int $id): CondicionAprobado
	{
		static $instancias = null;

		if ($instancias === null) $instancias = [
			Regular::ID => Regular::instancia(),
			Equivalencia::ID => Equivalencia::instancia(),
			SaberesAdquiridos::ID => SaberesAdquiridos::instancia(),
			Libre::ID => Libre::instancia(),
			PPI::ID => PPI::instancia(),
			Exceptuado::ID => Exceptuado::instancia(),
			Homologado::ID => Homologado::instancia(),
			NoRegular::ID => NoRegular::instancia(),
			Movilidad::ID => Movilidad::instancia(),
			Promocion::ID => Promocion::instancia(),
			Correspondencia::ID => Correspondencia::instancia(),
		];

		if (isset($instancias[$id])) return $instancias[$id];

		throw new Exception("Condición de aprobado desconocida: {$id}");
	}
	*/
}