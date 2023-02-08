<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Affiche la vue Actualites du dashboard
     *
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(9);
        return view('dashboard.posts.index', compact('posts'));
    }

    /**
     * Affiche la vue Actualites sur la page acutalites
     *
     */
    public function public()
    {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(9);
        return view('actualites', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.actions');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        // Créer le post, et enregistre l'image dans le dossier storage
        $post = Post::create(array_merge($request->validated(), [
            'author' => Auth::user()->id,
            'thumb_path' => $request->thumb_path->store("posts"),
        ]));

        return redirect(route("actualites.index"))->with('success', 'Article publié !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        // Sélectionne le post en fonction du slug
        $post = Post::where('slug', $slug)
            ->firstOrFail();
        
        $lastPosts = Post::where('id', '!=', $post->id)->orderBy('created_at', 'DESC')->take(3)->get();

        return view("single-actualites", compact("post", "lastPosts"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $actualite)
    {
        $post = $actualite;
        return view("dashboard.posts.actions", compact("post"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $actualite)
    {
        if ($request->has("thumb_path")) {
            //On supprime l'ancienne image
            Storage::delete($request->thumb_path);
        }

        $actualite->update(
            array_merge($request->validated(), [
                'updated_at' => DB::raw('NOW()'),
                // Si il y'a une nouvelle image ? on upload la nouvelle image : on laisse l'image actuelle
                'thumb_path' => ($request->has("thumb_path")) ? $request->thumb_path->store("posts") : $actualite->thumb_path
            ])
        );

        return redirect(route("actualites.index"))->with('success', 'Article modifié !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $actualite)
    {
        // Suppresion de l'image
        if(Storage::disk('public')->exists($actualite->thumb_path)){
            Storage::delete($actualite->thumb_path);
        }
        // Suppresion du actualite
        $actualite->delete();
        return redirect(route('actualites.index'))->with('success', 'Article supprimé !');
    }
}
