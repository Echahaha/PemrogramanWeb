<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

class GuestController extends Controller
{
    function index() {
        foreach (Guest::all() as $guest) {
        echo $guest->name;
        echo '<br/>';
         }
    }
    function insert() {
        $guest = new Guest;
        $guest->name = "Meylin";
        $guest->save();
}

function update() {
    $guest = Guest::find(3);
    $guest->name = "Errykaaa";
    $guest->save();
}
function delete() {
    $guest = Guest::find(3);
    $guest->delete();
}
}