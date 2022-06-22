<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    ///
    public function destroy(){
        return 'destroyed';
    }
    public function create(){
        return 'method created';
    }
    public function show(){
        return 'showwing method';
    }
    public function putting(){
        return 'updating';
    }
}
