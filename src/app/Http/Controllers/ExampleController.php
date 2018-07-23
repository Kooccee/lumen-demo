<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

class ExampleController extends Controller
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

    public function logging()
    {
        Log::info("time is " . date("Y-m-d H:i:s"));
        Log::error("time is " . date("Y-m-d H:i:s"));
    }
}
