<?php

namespace App\Http\Controllers;

use App\Models\AuthorsModel; 
use Illuminate\Http\Request;
use function Pest\Laravel\json;

class AuthorsController extends Controller
{
    public function index(){
        $authors = AuthorsModel::all() ;
        
        return response() ->json([
            "success" => true,
            "message" => "Get All Resource",
            "data"    => $authors
        ],200); 
    }
}
