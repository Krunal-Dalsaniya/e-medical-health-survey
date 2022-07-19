<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicalRegisterController extends Controller
{
    public function index()
    {
        return view('medicalRegister.index');
    }
}
