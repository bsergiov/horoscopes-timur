<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EnCompliant;
use Illuminate\Http\Request;

class EnPairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = EnCompliant::orderBy('created_at', 'desc')->get();
        return view('en.pair.index', [
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
        $new_articl = new EnCompliant();
        $new_articl->title = $request['title'];
        $new_articl->body = $request['body'];
        $new_articl->pair = $request['pair'];
        $new_articl->ltfv = $request['ltfv'];
        $new_articl->save();
        return redirect('/enparies');
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
        $article = EnCompliant::find($id);
        return view('en.pair.edit', [
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
        $article = EnCompliant::find($id);
        $article->title = $request['title'];
        $article->body = $request['body'];
        $article->pair = $request['pair'];
        $article->ltfv = $request['ltfv'];
        $article->save();

        return redirect('/enparies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articl = EnCompliant::find($id);
        $articl->delete();
        return redirect('/enparies');
    }
}
