<?php namespace App\Property;

interface PropertyRepositoryInterface {
	public function getAll();
	public function getByID($id);
	public function getAllByUser($user);
	public function create($input);
}