<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class PagantiController extends Controller
{
    function getPaganti() {

      $paganti = DB::table('paganti')->select('id', 'name', 'lastname')->get();

      return view('pages.paganti', [
        'paganti' => $paganti
      ]);
    }

    function getPagante($id) {

      $pagante = DB::table('paganti')->select('id', 'name', 'lastname')->where('id', '=', $id)->get();

      return view('pages.pagante', [
        'pagante' => $pagante
      ]);
    }
}
