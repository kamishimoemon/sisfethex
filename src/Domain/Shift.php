<?php

declare(strict_types=1);

namespace Sisfet\Domain;

interface Shift
{
	const MORNING = 1;
	const AFTERNOON = 2;
	const EVENING = 3;
	const DOUBLE_SHIFT = 4;
	const FULL_SHIFT = 5;
}