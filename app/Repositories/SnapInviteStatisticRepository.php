<?php
/**
 * Created by PhpStorm.
 * User: liuxing06
 * Date: 2018/1/19
 * Time: 15:36
 */

namespace App\Repositories;


use App\Models\SnapInviteStatistic;

class SnapInviteStatisticRepository implements Repository
{


    public function findAll($per_page)
    {

        return SnapInviteStatistic::paginate($per_page)->toJson();
    }

    public function find($id)
    {
        return SnapInviteStatistic::find($id)->toJson();
    }

    public function save($model)
    {
        $snap = new SnapInviteStatistic;
        $snap->cs_id = 1;
        $snap->save();
    }

    public function delete($model)
    {
        // TODO: Implement delete() method.
    }
}