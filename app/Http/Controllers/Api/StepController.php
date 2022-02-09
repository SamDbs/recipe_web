<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Step;

use Illuminate\Http\Request;

class StepController extends Controller
{
    protected $step;

    public function __construct(Step $recipes){
        $this->step = $step;
    }

}
