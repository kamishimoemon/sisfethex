<?php

declare(strict_types=1);

namespace Sisfet\Domain;

interface CareerStatus
{
	const EDITING = 1;
	const PENDING = 2;
	const REJECTED = 3;
	const APPROVED = 4;
	const INACTIVE = 5;
}