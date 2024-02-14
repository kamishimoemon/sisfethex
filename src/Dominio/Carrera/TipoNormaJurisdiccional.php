<?php

declare(strict_types=1);

namespace Sisfet\Dominio\Carrera;

interface TipoNormaJurisdiccional
{
	const LEY = 1;
	const DECRETO = 2;
	const RESOLUCION_MINISTERIAL = 3;
	const RESOLUCION_SECRETARIA = 4;
	const RESOLUCION_SUBSECRETARIA = 5;
	const DISPOSICION = 6;
	const RESOLUCION = 7;
	const ACUERDO = 8;

	/*
	public static function crearSegunId (int $id_tipo_norma_jurisdiccional): TipoNormaJurisdiccional
	{
		static $instancias = null;

		if ($instancias === null) $instancias = [
			Ley::ID => Ley::instancia(),
			Decreto::ID => Decreto::instancia(),
			Resolucion::ID => Resolucion::instancia(),
			ResolucionMinisterial::ID => ResolucionMinisterial::instancia(),
			ResolucionSecretaria::ID => ResolucionSecretaria::instancia(),
			ResolucionSubsecretaria::ID => ResolucionSubsecretaria::instancia(),
			Disposicion::ID => Disposicion::instancia(),
			Acuerdo::ID => Acuerdo::instancia(),
		];

		if (isset($instancias[$id_tipo_norma_jurisdiccional])) return $instancias[$id_tipo_norma_jurisdiccional];

		throw new Exception("Tipo de norma desconocida: {$id_tipo_norma_jurisdiccional}");
	}
	*/
}