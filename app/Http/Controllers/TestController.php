<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{
    public function test() {
        Storage::disk('sftp')->put('Mes_Fichiers/test.txt', 'Je fais un test');
        dd('Faire un test...');
    }
}
