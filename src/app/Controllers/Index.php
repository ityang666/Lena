<?php
/**
 * Project: Lena
 *
 * Author: Nine
 * Date: 2018/5/29
 */

namespace Lena\app\Controllers;


use Lena\main\Http\Request;

class Index extends BaseController
{
    public function index($id, $name)
    {

    }

    public function info($name, $age)
    {

    }

    public function user(Request $request, $name)
    {
        var_dump($request);
        return $name;
    }
}