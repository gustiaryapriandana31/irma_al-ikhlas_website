<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Bidang;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardPostController extends Controller
{
    public function getAllMembers() {
        return view('dashboard.members.index', [
            'title' => 'Seluruh Anggota Irma',
            // 'active' => 'dashboard',
            'members' => Member::all()
        ]);
    }

    public function index() {
        return view('dashboard.posts.index', [
            'title' => 'Postingan Irma',
            // 'active' => 'dashboard',
            'posts' => Post::all()
        ]);
    }

    public function show(Post $post) {
        return view('dashboard.posts.show', [
            'title' => 'Postingan Irma',
            // 'active' => 'dashboard',
            'post' => $post
        ]);
    }

    public function create() {
        return view('dashboard.posts.create', [
            'bidangs' => Bidang::all(),
        ]);
    }

    public function store(Request $request) {

        // return $request->file('image')->store('post-images');
        
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'bidang_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required',
        ]);

        // cek apabila ada atau tidak ada gambarnya
        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request['body']), 200, '...');

        $post = new Post();

        $post->bidang_id = $validatedData['bidang_id'] ;
        $post->title = $validatedData['title'];
        $post->slug = $validatedData['slug'];
        $post->excerpt = $validatedData['excerpt'];
        // $post->image = $validatedData['image'];
        $post->body = $validatedData['body'] ;

        $post->save();
        
        return redirect(route('all-posts'))->with('success', 'Postingan Baru Berhasil Ditambahkan!');
    }

    
    public function edit(Post $post) {
        return view('dashboard.posts.edit', [
            'title' => 'Postingan Irma',
            'active' => 'dashboard',
            'post' => $post,
            'bidangs' => Bidang::all()
        ]);
    }

    public function update(Request $request, Post $post) {
        $rules = [
            'title' => 'required|max:255',
            'bidang_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ];

        // validasi untuk boleh memakai slug yang samapp
        if($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);

         // cek apabila ada atau tidak ada gambarnya
         if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200, '...');

        // $post = Post::where('id', $post->id);
        
        // $post->bidang_id = $request->$validatedData['bidang_id'];
        // $post->title = $request->$validatedData['title'];
        // $post->slug = $request->$validatedData['slug'];
        // $post->excerpt = $request->$validatedData['excerpt'];
        // $post->image = $request->$validatedData['image'];
        // $post->body = $request->$validatedData['body'];

        // $post->save();

        Post::where('id', $post->id)
            ->update($validatedData); // perintah untuk update data dengan mengambil id nya

        return redirect(route('all-posts'))->with('success', 'Postingan Berhasil Diupdate!');
    }

    public function destroy(Post $post) {
        if($post->image) {
            Storage::delete($post->image);
        }
        
        Post::destroy($post->id); // perintah untuk delete dari database table Post
        return redirect(route('all-posts'))->with('success', 'Postingan Sudah Dihapus!');
    }

    // method tambahan untuk membuat slug
    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}