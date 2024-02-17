<?php

declare(strict_types=1);

namespace Sisfet\Domain;

interface RegulationType
{
	const LAW = 1;
	const DECREE = 2;
	const RULING = 3;
	const RESOLVE = 4;
	const ACCORD = 5;
}