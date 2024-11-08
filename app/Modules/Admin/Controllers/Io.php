<?php

namespace Modules\Admin\Controllers;

use App\Core\BaseController;

class Io extends BaseController
{
    public function index()
    {
        $arr = ['test'];
        $mod = APPPATH . 'Modules';
        $dir = glob($mod . '/**/Config/Routes.php', GLOB_BRACE);

        // dd($dir);
        foreach ($dir as $dire)
        {
            array_push($arr, $dire);
        }

        dd($arr);
        

    }
}