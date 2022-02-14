<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videogame;
use App\Mail\DeleteMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;



class ApiController extends Controller
{
    public function getVideogames() {
        $videogames = Videogame::all();
        return json_encode($videogames);
    }

    public function delete($id) {
        $videogame = Videogame::findOrFail($id);
        $videogame -> delete();
        Mail::to(Auth::user() -> email) -> send(new DeleteMail());
    }
}
