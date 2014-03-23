<?php namespace App\Property;

interface PropertyServiceInterface {
	public function index();
	public function create($input);
	public function edit($id, $input);
}