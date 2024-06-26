<?php

namespace App\Http\Controllers\Pages;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('articles.index',[
            'numb' => Article::count(),
            $user_id = Auth::user()->id,
            $user = User::find($user_id),
            'articles' => $user->articles,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => ['required','string','max:200'],
            'body' => ['required','string','max:3000'],
            'image' => ['max:2048'],
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path = $request->file('image')->storeAs('images',$filename,'public');
        } else {
            $filename = "noimage";
        }

        DB::table('articles')
            ->insert([
                'title' => $request->input('title'),
                'body' => $request->input('body'),
                'image' => $filename,
                'user_id' => Auth::user()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        return redirect()->route('articles.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('articles.show',[
            'article' => $article,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('articles.edit',[
            'article' => $article,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $this->validate($request,[
            'title' => ['required','string','max:200'],
            'body' => ['required','string','max:3000'],
            'image' => ['max:2048'],
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if (File::exists('storage/images/'.$article->image)) {
                File::delete('storage/images/'.$article->image);
            }
            $filename = $file->getClientOriginalName();
            $path = $request->file('image')->storeAs('images',$filename,'public');
        } else {
            $filename = "noimage";
        }
          $article->update([
                'title' => $request->input('title'),
                'body' => $request->input('body'),
                'image' => $filename,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        if (Auth::user()->roles === 'admin' || Auth::user()->roles ==='user') {
            $article->delete();
            return back();
        }else{
            return back();
        }
    }
}
