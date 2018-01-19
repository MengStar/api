<?php

namespace App\Models;

use Faker\Provider\DateTime;
use Illuminate\Database\Eloquent\Model;
use Psy\Util\Json;

class SnapInviteStatistic extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'snap_invite_statistics';

    /**
     * 客服id
     * @var string
     */
    public $cs_id;
    /**
     * 站点id
     * @var string
     */
    public $site_id;
    /**
     * 样式id
     * @var string
     */
    public $style_id;
    /**
     * 是否是移动访客
     * @var boolean
     */
    public $is_mobile;
    /**
     * 统计信息
     * @var Json
     */
    public $statistic_info;
    /**
     * 统计时间
     * @var DateTime
     */
    public $statistic_time;

}
