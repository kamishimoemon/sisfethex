<?php

declare(strict_types=1);

namespace Sisfet\Dominio;

interface Gestion
{
	const ESTATAL = 1;
	const PRIVADO = 2;
	const SOCIAL_COOPERATIVA = 3;

	/*
	public static function crearSegunId (int $id_gestion): Gestion
	{
		$instancias = self::instancias();

		if (isset($instancias[$id_gestion])) return $instancias[$id_gestion];

		throw new Exception("ID de gestión desconocido: {$id_gestion}");
	}

	private static function instancias (): array
	{
		static $instancias = null;

		if ($instancias === null) $instancias = [
			Estatal::ID => Estatal::instancia(),
			Privado::ID => Privado::instancia(),
			SocialCooperativa::ID => SocialCooperativa::instancia(),
		];

		return $instancias;
	}
	*/
}