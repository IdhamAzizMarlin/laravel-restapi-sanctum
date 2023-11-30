<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Http\Resources\BlogResource;
use App\Services\BlogService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    private $blog_service;

    public function __construct()
    {
        $this->blog_service = new BlogService();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->sendResponse('Daftar blog', BlogResource::collection($this->blog_service->lists()));
    }

     /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)
    {
        $data = [
            'title' => $request->title,
            'description' => $request->description,
        ];

        if($request->has('image')) {
            $file = $request->file('image'); 
            $fileNewName = $file->hashName();
            
            $data['image'] = $fileNewName;

            // UPLOAD FILE
            Storage::putFileAs('public/images', $file, $fileNewName);
        }

        if(!$this->blog_service->create($data)) {
            return response()->sendError(__('messages.save_failed', ['action' => 'Blog',]));
        }

        return response()->sendResponse(__('messages.save_success', ['action' => 'Blog',]),null, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blog = $this->blog_service->show($id);

        if(!$blog) {
            return response()->sendError(__('messages.data_not_found'));
        }

        return response()->sendResponse('Data blog', BlogResource::make($blog));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogRequest $request, string $id)
    {
        $blog = $this->blog_service->show($id);

        if(!$blog) {
            return response()->sendError(__('messages.data_not_found'));
        }

        $data = [
            'title' => $request->title,
            'description' => $request->description,
        ];

        if($request->has('image')) {
            $file = $request->file('image'); 
            $fileNewName = $file->hashName();
            
            $data['image'] = $fileNewName;

            // HAPUS GAMBAR SEBELUMNYA
            if (Storage::disk('public')->exists('public/images/' . $blog->image)) {
                Storage::disk('public')->delete('public/images/' . $blog->image);
            }
            
            // UPLOAD FILE
            Storage::putFileAs('public/images', $file, $fileNewName);
        }

        if(!$this->blog_service->update($data, $id)) {
            return response()->sendError(__('messages.update_failed', ['action' => 'Blog',]));
        }

        return response()->sendResponse(__('messages.update_success', ['action' => 'Blog',]),null, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = $this->blog_service->show($id);

        if(!$blog) {
            return response()->sendError(__('messages.data_not_found'));
        }

        if(!$this->blog_service->delete($id)) {
            return response()->sendError(__('messages.delete_failed', ['action' => 'Blog',]));
        }

        return response()->sendResponse(__('messages.delete_success', ['name' => $blog->title,]));
    }
}
