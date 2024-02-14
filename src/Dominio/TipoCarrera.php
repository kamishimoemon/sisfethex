<?php

declare(strict_types=1);

namespace Sisfet\Dominio;

class TipoCarrera
{
	const TITULO = 1;
	const CERTIFICADO = 2;

	/*
	public static function crearSegunId (int $id_tipo_carrera): TipoCarrera
	{
		static $instancias = null;

		if ($instancias === null) $instancias = [
			Titulo::ID => Titulo::instancia(),
			Certificado::ID => Certificado::instancia(),
		];

		if (isset($instancias[$id_tipo_carrera])) return $instancias[$id_tipo_carrera];

		throw new Exception("Tipo de carrera desconocida: {$id_tipo_carrera}");
	}
	*/
}