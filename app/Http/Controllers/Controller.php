<?php

namespace App\Http\Controllers;

class Controller
{
  public function indexCategoria()
  {
    return view('categoria-main');
  }

  public function indexAlimento()
  {
    return view('alimento');
  }
}
