<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function checkDbConnection()
    {
        try {
            $results = DB::select("SELECT 1");
            dd("Successfully connected to the database!");
        } catch (\Exception $e) {
            dd("Could not connect to the database. " . $e->getMessage());
        }
    }
}
