<?php

namespace App\Http\Controllers;

use App\Models\GenreModel;
use Illuminate\Http\Request;
use function Pest\Laravel\json;

class GenreController extends Controller
{
    public function index(){
        $genres = GenreModel ::all();

    return response() ->json([
        "success" => true,
        "message" => "Get All Resource",
        "data"    => $genres
    ],200);
    }
}
