<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class SnapInviteStatistic extends Model
{
    /**
     * The database table used by the model.
     *
     * @var
     */
    protected $table = 'snap_invite_statistics';

    /**
     * 客服id
     * @var
     */
    protected $cs_id;
    /**
     * 站点id
     * @var
     */
    protected $site_id;

    /**
     * 样式id
     * @var
     */
    protected $style_id;
    /**
     * 是否是移动访客
     * @var
     */
    protected $is_mobile;
    /**
     * 统计信息
     * @var
     */
    protected $statistic_info;
    /**
     * 统计时间
     * @var
     */
    protected $statistic_time;

}
