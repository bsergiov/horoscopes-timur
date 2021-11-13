<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EnCategory;
use Illuminate\Http\Request;

class EnCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = EnCategory::orderBy('created_at', 'desc')->get();
        return view('en.category.index', [
            'articles' => $articles,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_articl = new EnCategory();
        $new_articl->title = $request['title'];
        $new_articl->body = $request['body'];
        $new_articl->category = $request['category'];
        $new_articl->sign = $request['sign'];
        $new_articl->save();
        return redirect('/encategories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = EnCategory::find($id);
        return view('en.category.edit', [
            'article' => $article
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = EnCategory::find($id);
        $article->title = $request['title'];
        $article->body = $request['body'];
        $article->category = $request['category'];
        $article->sign = $request['sign'];
        $article->save();

        return redirect('/encategories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articl = EnCategory::find($id);
        $articl->delete();
        return redirect('/encategories');
    }
}
