<?php 
namespace App\Services;

use App\Models\Blog;

class BlogService implements CrudInterface
{
    public function lists()
    {
        return Blog::latest()->paginate(5);
    }

    public function show($id)
    {
        return Blog::find($id);
    }

    public function create($request)
    {
        return Blog::create($request);
    }

    public function update($request, $id)
    {
        $blog = Blog::find($id);
        return $blog->update($request);
    }

    public function delete($id)
    {
        $blog = Blog::find($id);
        return $blog->delete();
    }
}