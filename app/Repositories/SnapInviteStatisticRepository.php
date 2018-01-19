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

        return SnapInviteStatistic::paginate($per_page);
    }

    public function find($id)
    {
        $ret = SnapInviteStatistic::find($id);
        return empty($ret) ? "{}" : $ret;
    }

    /**
     * @param $model
     * @return bool
     */
    public function save($model)
    {
        $snap = new SnapInviteStatistic;
        $snap->site_id = $model["site_id"];
        $snap->cs_id = $model["cs_id"];
        $snap->is_mobile = $model["is_mobile"];
        $snap->style_id = $model["style_id"];
        $snap->statistic_info = $model["statistic_info"];
        $snap->statistic_time = $model['statistic_time'];

        return $snap->save();

    }

    public function delete($model)
    {
        // TODO: Implement delete() method.
    }
}