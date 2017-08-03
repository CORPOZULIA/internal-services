<?php  

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class GitController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(Request $req){
        return $req->ip();
    }
}
