<?php
/**
 * Created by PhpStorm.
 * User: klinson <klinson@163.com>
 * Date: 18-4-12
 * Time: 下午5:24
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Cache;

class TestController extends Controller
{
    public function index()
    {
        Cache::put('cache_1', 1, 3600);
        echo Cache::get('cache_1');


        echo "<br/>";
        return 'hello, klinson.';
    }
}