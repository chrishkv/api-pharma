<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function index()
    {
        return response()->json(['medicina1']);
    }
}