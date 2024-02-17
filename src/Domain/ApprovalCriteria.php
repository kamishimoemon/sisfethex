<?php

declare(strict_types=1);

namespace Sisfet\Domain;

interface ApprovalCriteria
{
	const APPROVED = 1;
	const FAIL = 2;
	const EXEMPT = 3;
	const AUTHORIZED = 4;
	const IRREGULAR = 5;
	const PROMOTED = 6;
}