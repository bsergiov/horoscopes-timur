<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\EnArticl;
use App\Models\EnCategory;
use App\Models\EnCompliant;
use App\Models\EnOverAllArticl;
use App\Models\EnTaro;
use App\Models\RuArticl;
use App\Models\RuCategory;
use App\Models\RuCompliant;
use App\Models\RuOverAllArticl;
use App\Models\RuTaro;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function enAllArticles()
    {
        $articles = EnArticl::all();
        $count = count($articles);
        $resartic = [
            'count' => $count,
            'data' => $articles
        ];
        $headers = ['Content-Type' => 'application/json; charset=utf-8'];
        return response()->json($resartic, 200, $headers, JSON_UNESCAPED_UNICODE);
    }

    public function enIdArticl($id)
    {
        $articl = EnArticl::find($id);
        $headers = ['Content-Type' => 'application/json; charset=utf-8'];
        return response()->json($articl, 200, $headers, JSON_UNESCAPED_UNICODE);
    }

    public function enSignArticl($sign)
    {
        $articls = EnOverallArticl::where('sign', $sign)->get();
        $count = count($articls);
        $resartic = [
            'count' => $count,
            'data' => $articls
        ];
        $headers = ['Content-Type' => 'application/json; charset=utf-8'];
        return response()->json($resartic, 200, $headers, JSON_UNESCAPED_UNICODE);
    }

    public function enCategoryArticl($category)
    {
        $articls = EnCategory::where('category', $category)->get();
        $count = count($articls);
        $resartic = [
            'count' => $count,
            'data' => $articls
        ];
        $headers = ['Content-Type' => 'application/json; charset=utf-8'];
        return response()->json($resartic, 200, $headers, JSON_UNESCAPED_UNICODE);
    }

    ############# Ru version ################
    public function ruAllArticles()
    {
        $articles = RuArticl::all();
        $count = count($articles);
        $resartic = [
            'count' => $count,
            'data' => $articles
        ];
        $headers = ['Content-Type' => 'application/json; charset=utf-8'];
        return response()->json($resartic, 200, $headers, JSON_UNESCAPED_UNICODE);
    }

    public function ruIdArticl($id)
    {
        $articl = RuArticl::find($id);
        $headers = ['Content-Type' => 'application/json; charset=utf-8'];
        return response()->json($articl, 200, $headers, JSON_UNESCAPED_UNICODE);
    }

    public function ruSignArticl($sign)
    {
        $articls = RuOverallArticl::where('sign', $sign)->get();
        $count = count($articls);
        $resartic = [
            'count' => $count,
            'data' => $articls
        ];
        $headers = ['Content-Type' => 'application/json; charset=utf-8'];
        return response()->json($resartic, 200, $headers, JSON_UNESCAPED_UNICODE);
    }

    public function ruCategoryArticl($category)
    {
        $articls = RuCategory::where('category', $category)->get();
        $count = count($articls);
        $resartic = [
            'count' => $count,
            'data' => $articls
        ];
        $headers = ['Content-Type' => 'application/json; charset=utf-8'];
        return response()->json($resartic, 200, $headers, JSON_UNESCAPED_UNICODE);
    }

    # даем овет на совместимость

    public function rucompliant(Request $request)
    {

        $pair = $request->pair;
        $post = Rucompliant::where('pair', $pair)->get();
        if (!$post) {
            return response()->json([
                "status" => false,
                "message" => "Not Found"
            ], 404);
        }
        $headers = ['Content-Type' => 'application/json; charset=utf-8'];
        return response()->json($post, 200, $headers, JSON_UNESCAPED_UNICODE);
    }

    public function encompliant(Request $request)
    {
        $pair = $request->pair;
        $post = Encompliant::where('pair', $pair)->get();
        if (!$post) {
            return response()->json([
                "status" => false,
                "message" => "Not Found"
            ], 404);
        }
        $headers = ['Content-Type' => 'application/json; charset=utf-8'];
        return response()->json($post, 200, $headers, JSON_UNESCAPED_UNICODE);
    }

    # Taro
    public function enTaro()
    {
        $articles = EnTaro::all( );
        $count = count($articles);
        $resartic = [
            'count' => $count,
            'data' => $articles
        ];
        $headers = ['Content-Type' => 'application/json; charset=utf-8'];
        return response()->json($resartic, 200, $headers, JSON_UNESCAPED_UNICODE);
    }

    public function ruTaro()
    {
        $articles = RuTaro::all( );
        $count = count($articles);
        $resartic = [
            'count' => $count,
            'data' => $articles
        ];
        $headers = ['Content-Type' => 'application/json; charset=utf-8'];
        return response()->json($resartic, 200, $headers, JSON_UNESCAPED_UNICODE);
    }



    # категория overall
    public function enOverall()
    {
        $articles = EnOverallArticl::all();

        $count = count($articles);
        $resartic = [
            'count' => $count,
            'data' => $articles
        ];
        $headers = ['Content-Type' => 'application/json; charset=utf-8'];
        return response()->json($resartic, 200, $headers, JSON_UNESCAPED_UNICODE);
    }

    public function ruOverall()
    {
        $articles = RuOverallArticl::all();

        $count = count($articles);
        $resartic = [
            'count' => $count,
            'data' => $articles
        ];
        $headers = ['Content-Type' => 'application/json; charset=utf-8'];
        return response()->json($resartic, 200, $headers, JSON_UNESCAPED_UNICODE);
    }

    public function enOver($id)
    {
        $articl = EnOverallArticl::find($id);
        if (!$articl){
            return response()->json([
                "status" => false,
                "message" => "Not Found"
            ], 404);
        }
        $headers = ['Content-Type' => 'application/json; charset=utf-8'];
        return response()->json($articl, 200, $headers, JSON_UNESCAPED_UNICODE);
    }

    public function ruOver($id)
    {
        $articl = RuOverallArticl::find($id);
        if (!$articl){
            return response()->json([
                "status" => false,
                "message" => "Not Found"
            ], 404);
        }
        $headers = ['Content-Type' => 'application/json; charset=utf-8'];
        return response()->json($articl, 200, $headers, JSON_UNESCAPED_UNICODE);

    }
}
