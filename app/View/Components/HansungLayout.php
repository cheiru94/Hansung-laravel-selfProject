<?php

namespace App\View\Components; // 반드시 지정

use Illuminate\View\Component;
use Illuminate\View\View;

class HansungLayout extends Component
{
  /**
   * Get the view / contents that represents the component.
   */
  public function render(): View
  {
    return view('layouts.hansung');
  }
}
