<?php

declare(strict_types=1);

namespace Sisfet\Dominio;

interface TipoDocumento
{
	const DNI = 1;
	const LE = 2;
	const LC = 3;
	const DOCUMENTO_EXTRANJERO = 4;

	/*
	public static final function DNI (): TipoDocumento

	public static function crearSegunId (int $id_tipo_documento): TipoDocumento
	{
		static $instancias = null;

		if ($instancias === null) $instancias = [
			DNI::ID => DNI::instancia(),
			LE::ID => LE::instancia(),
			LC::ID => LC::instancia(),
			DocumentoExtranjero::ID => DocumentoExtranjero::instancia(),
		];

		return $instancias[$id_tipo_documento];
	}
	*/
}