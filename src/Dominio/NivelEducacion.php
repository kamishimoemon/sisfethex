<?php

declare(strict_types=1);

namespace Sisfet\Dominio;

interface NivelEducacion
{
	const SECUNDARIA = 1;
	const SUPERIOR = 2;

	/*
	public static function crearSegunId (int $id_nivel_educacion): NivelEducacion
	{
		static $instancias = null;

		if ($instancias === null) $instancias = [
			Secundaria::ID => Secundaria::instancia(),
			Superior::ID => Superior::instancia(),
		];

		if (isset($instancias[$id_nivel_educacion])) return $instancias[$id_nivel_educacion];

		throw new Exception("Nivel de educación desconocido: {$id_nivel_educacion}");
	}
	*/
}