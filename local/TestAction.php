<?php

class TestAction extends AbstractAction
{
	public function __invoke(int $id)
	{
		return [
			'id'   => $id,
			'date' => new DateTime()
		];
	}
}
