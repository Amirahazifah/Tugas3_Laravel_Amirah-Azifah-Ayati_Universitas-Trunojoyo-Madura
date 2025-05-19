<?php

namespace App\Http\Controllers;


use App\Models\BookModel;
use Illuminate\Http\Request;
use function Pest\Laravel\json;

class BookController extends Controller
{
    public function index(){
        $books = BookModel::all();
        
    return response() ->json([
            "success" => true,
            "message" => "Get All Resource",
            "data"    => $books
        ],200);
    }

}
