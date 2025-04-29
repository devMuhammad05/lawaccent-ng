<?php

namespace App\Http\Controllers\Admin;

use Storage;
use App\Models\Blog;
use Illuminate\Support\Str;
use App\DataTables\BlogsDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Blog\StoreBlogRequest;
use App\Http\Requests\Admin\Blog\UpdateBlogRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BlogsDataTable $blogsDataTable)
    {
        return $blogsDataTable->render('admin.blog.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('thumbnail')) {
            $imagePath = $request->file('thumbnail')->store('blog', 'public');

            $validatedData['thumbnail'] = (string) 'storage/'.$imagePath;
        }

        $validatedData['slug'] = Str::slug($validatedData['title']);

        Blog::create($validatedData);

        flash()->success('Blog created successfully');


        return to_route('admin.blogs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::find($id);

        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, string $id)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('thumbnail')) {
            $imagePath = $request->file('thumbnail')->store('blog', 'public');

            $validatedData['thumbnail'] = (string) 'storage/'.$imagePath;
        }

        $validatedData['slug'] = Str::slug($validatedData['title']);

        Blog::find($id)->update($validatedData);

        flash()->success('Blog updated successfully');

        return to_route('admin.blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $blog = Blog::find($id);
            if (Storage::exists($blog->thumbnail)) {
                Storage::delete($blog->thumbnail);
            }

            $blog->delete();

            return response()->json(['status' => 'success', 'message' => 'Deleted successfully']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Unable to complete this action']);
        }
    }
}
