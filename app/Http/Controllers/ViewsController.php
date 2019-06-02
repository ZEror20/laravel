<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Module {
  public $link;
  public $title;

  public function __construct($link, $title) {
    $this->link = $link;
    $this->title = $title;
  }
}

class ViewsController extends Controller
{
    function loop() {
      return view('loop');
    }

    function if($number) {
      return view('if')->with('number', $number);
    }

    function foreach($limit) {
      $values = range(1, $limit);
      return view('foreach')->with('values', $values);
    }

    function each() {
      $funcs_internal = get_defined_functions()['internal'];

      foreach($funcs_internal as $func) {
        $modules[] = new Module("https://php.net/$func", $func);
      }

      return view('each')->with('modules', $modules);
    }

    function include() {
      return view('include');
    }
}
