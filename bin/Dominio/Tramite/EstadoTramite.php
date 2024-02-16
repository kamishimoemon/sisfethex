<?php

declare(strict_types=1);

namespace Sisfet\Dominio\Tramite;

interface EstadoTramite
{
	const EN_CARGA = 1;
	const EN_DIRECCION = 2;
	const ADQUIRIDO_POR_DIRECCION = 3;
	const EN_SUPERVISION = 4;
	const ADQUIRIDO_POR_SUPERVISION = 5;
	const EN_ADMINISTRADOR_JURISDICCION = 6;
	const ADQUIRIDO_POR_ADMINISTRADOR = 7;
	const PENDIENTE_ENVIO_FIRMA_DIGITAL = 8;
	const RECHAZADO = 9;
	const ENVIADO_A_FIRMA_DIGITAL = 10;
	const FIRMADO_DIGITALMENTE = 11;

	/*
	public static function getInstancia (int $id): EstadoTramite
	{
		switch ($id) {
			case EnCarga::ID:				return EnCarga::instancia();
			case PendienteRevision::ID:		return PendienteRevision::instancia();
			case EnRevision::ID:			return EnRevision::instancia();
			case PendienteAreaCentral::ID:	return PendienteAreaCentral::instancia();
			case EnAreaCentral::ID:			return EnAreaCentral::instancia();
			case PendienteFirmante::ID:		return PendienteFirmante::instancia();
			case EnFirmante::ID:			return EnFirmante::instancia();
			case ListoParaFirmar::ID:		return ListoParaFirmar::instancia();
			case Rechazado::ID:				return Rechazado::instancia();
			case EnviadoALaFirma::ID:		return EnviadoALaFirma::instancia();
			case FirmadoDigitalmente::ID:	return FirmadoDigitalmente::instancia();
		};

		throw new Exception('Estado de tramite desconocido: ' . $id);
	}
	*/
}