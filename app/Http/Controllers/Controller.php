<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected $data = [];
    protected $perPage = 8;
    
    public function __construct() {
        $this->data['perPage'] = $this->perPage;
    }

    protected function LoadTheme($view, $data = []) {
        $theme = env('APP_THEME', 'default'); // Ambil dari .env, default 'default'
        return view("themes.$theme.$view", $data);
    }


}
