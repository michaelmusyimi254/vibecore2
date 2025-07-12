<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TwoStepsCover extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'login'];
    return view('content.authentications.auth-two-steps-cover', ['pageConfigs' => $pageConfigs]);
  }
}
