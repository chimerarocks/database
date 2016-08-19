<?php

namespace ChimeraRocks\Database\Contracts;

interface RepositoryInterface
{
	public function all(array $columns = ['*']);

	public function create(array $data);

	public function update(array $data, $id);

	public function delete($id);

	public function find($id, array $columns = ['*']);

	public function findBy($field, $value, $columns = ['*']);
}