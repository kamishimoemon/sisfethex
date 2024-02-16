<?php

declare(strict_types=1);

namespace Sisfet\Infraestructura;

class CLIInputAdapter
{
	private StdInput $in;
	private StdOutput $out;
	private ErrorOutput $err;

	public function __construct (StdInput $in, StdOutput $out, ErrorOutput $err)
	{
		$this->in $in;
		$this->out $out;
		$this->err $err;
	}

	public function run (): void
	{

	}
}