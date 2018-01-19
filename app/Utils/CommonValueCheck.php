<?php
/**
 * Created by PhpStorm.
 * User: liuxing06
 * Date: 2018/1/19
 * Time: 17:58
 */

namespace App\Utils;


use Illuminate\Support\Facades\Config;

/**
 * Class CommonValueCheck
 * @package App\Utils
 */
class CommonValueCheck
{
    /**
     * 校验$per_page是否在(0,100)之内，否则返回default_per_page
     * @param $per_page
     * @return int
     */
    public static function perPageCheck($per_page)
    {
        if ((int)$per_page > 0 && (int)$per_page < 100)
            return (int)$per_page;
        else
            return Config::get('page.default_per_page');
    }
}
