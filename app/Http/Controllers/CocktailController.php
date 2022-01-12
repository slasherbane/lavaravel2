<?php

namespace App\Http\Controllers;

use App\Models\Cocktail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CocktailController extends Controller
{

    public function home()
    {
        return view("home");
    }

    public function show()
    {
        $cocktails =   Cocktail::all();
        return view("showCocktails")->with("cocktails", $cocktails);
    }

    public function delete($id)
    {
        Cocktail::findOrFail($id)->delete();
        return Response::redirectToRoute("cocktails.show");
    }
}
