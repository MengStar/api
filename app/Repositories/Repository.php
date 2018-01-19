<?php
/**
 * Created by PhpStorm.
 * User: liuxing06
 * Date: 2018/1/19
 * Time: 16:45
 */

namespace App\Repositories;


interface Repository
{
    public function findAll($per_page);

    public function find($id);

    public function save($model);

    public function delete($model);


}