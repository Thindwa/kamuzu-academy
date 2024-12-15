<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(7);

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   // Your controller method
public function store(Request $request)
{
    $requestData = $request->only('title', 'description', 'images', 'body');

    // Check if images are present in the request
    if ($request->hasFile('images')) {
        $images = $request->file('images');

        // Iterate through each image
        foreach ($images as $index => $image) {
            $imageName = $image->getClientOriginalName();
            $image->storeAs('public/uploads/news', $imageName);
            // Append each image name to the array
            $requestData['images'][] = $imageName;
        }
    }

    // Generate the slug from the title
    $requestData['slug'] = Str::slug($requestData['title']);

    $requestData['user_id'] = auth()->id();

    // Create the post with the image names
    $post = Post::create($requestData);

    Session::flash('success', 'Post updated successfully.');

    return redirect()->route('posts.index');
}





    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, Post $post)
    {
        $requestData = $request->only('title', 'description', 'body');

        // Check if images are present in the request
        if ($request->hasFile('images')) {


            if (is_array($post->images)) {
                foreach ($post->images as $imageName) {
                    // Storage::delete("public/uploads/news/{$imageName}");
                }
            } else {
                // Log or dump information for debugging
                // For example: Log::debug('Images are not an array', ['images' => $post->images]);
            }


            // Clear the images array before adding new ones
            $requestData['images'] = [];

            $images = $request->file('images');

            // Iterate through each image
            foreach ($images as $index => $image) {
                // Generate a unique file name
                $imageName = uniqid() . '_' . $image->getClientOriginalName();
                $image->storeAs('public/uploads/news', $imageName);
                // Append each new image name to the array
                $requestData['images'][] = $imageName;
            }
        }

        // Generate the slug from the title
        $requestData['slug'] = Str::slug($requestData['title']);

        $requestData['user_id'] = auth()->id();

        // Update the post with the new image names
        $post->update($requestData);

        Session::flash('success', 'Post updated successfully.');

        return redirect()->route('posts.index');
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
{
    // Delete associated images
    foreach ($post->images as $imageName) {
        // Storage::delete("public/uploads/news/{$imageName}");
    }

    $post->delete();

    Session::flash('success', 'Post deleted successfully.');

    return redirect()->route('posts.index');
}

}