<?php 
namespace App\Services;

use App\Models\User;

class UserService implements CrudInterface
{
    public function lists()
    {
        return User::latest()->paginate(5);
    }

    public function show($id)
    {
        return User::find($id);
    }

    public function create($request)
    {
        return User::create($request);
    }

    public function update($request, $id)
    {
        $user = User::find($id);
        return $user->update($request);
    }

    public function delete($id)
    {
        $user = User::find($id);
        return $user->delete();
    }
}