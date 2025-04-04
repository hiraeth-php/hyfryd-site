<?php

class TestAction extends AbstractAction
{
	public function __invoke(int $id)
	{
		if ($id == 404) {
			return $this->response(404);
		}

		if ($id == 500) {
			throw new Exception('This is an example error page');
		}

		return [
			'id'   => $id,
			'date' => new DateTime()
		];
	}
}
