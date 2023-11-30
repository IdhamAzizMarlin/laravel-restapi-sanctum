<?php 
namespace App\Services;

interface CrudInterface
{
    public function lists();

    public function show($id);

    public function create($request);

    public function update($request, $id);

    public function delete($id);
}