<?php
/**
 * Created by PhpStorm.
 * User: liuxing06
 * Date: 2018/1/19
 * Time: 15:38
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SnapInviteStatisticRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Input;


class SnapInviteStatisticController extends Controller
{
    protected $snapInviteStatisticRepository;

    public function __construct(SnapInviteStatisticRepository $snapInviteStatisticRepository)
    {
        $this->snapInviteStatisticRepository = $snapInviteStatisticRepository;
    }

    public function findAllSnaps(Request $request)
    {
        /**
         * 每页大小在[1,100]
         */
        $this->validate($request, ['per_page' => 'integer|min:1|max:100']);
        $per_page = Input::get('per_page');
        /**
         * 不传参则取默认值
         */
        if (empty($per_page))
            $per_page = Config::get('page.default_per_page');
        return $this->snapInviteStatisticRepository->findAll($per_page);
    }

    public function findSnapById($id)
    {

        return $this->snapInviteStatisticRepository->find($id);
    }

    public function addSnapInvite(Request $request)
    {
        /**
         * 判断参数合法性
         * 不合法，重定向至用户上一个页面。
         * 如果收到的是一个 AJAX 请求，那么不会生成一个重定向。相反的，一个带有 422 状态码的 HTTP 响应会被返回给浏览器，包含了一个含有错误信息的 JSON 对象。
         */
        $this->validate($request, [
            'site_id' => 'required',
            'cs_id' => 'required',
            'style_id' => 'required',
            'is_mobile' => 'required|boolean',
            'statistic_info' => 'required|json',
            'statistic_time' => 'date'
        ]);


        $site_id = Input::get("site_id");
        $cs_id = Input::get("cs_id");
        $style_id = Input::get("style_id");
        $is_mobile = (boolean)Input::get("is_mobile");
        $statistic_info = Input::get("statistic_info");
        $statistic_time = Input::get("statistic_time");

        /**
         * 如果没传时间，取当前时间
         */
        if (empty($statistic_time))
            $statistic_time = Carbon::now();
        $model = [
            "site_id" => $site_id,
            "cs_id" => $cs_id,
            "style_id" => $style_id,
            "is_mobile" => $is_mobile,
            "statistic_info" => $statistic_info,
            "statistic_time" => $statistic_time];
        $success = $this->snapInviteStatisticRepository->save($model);
        if ($success)
            return "{\"success\":1}";
        else
            return "{\"success\":0,\"msg\":\"can't save\"}";
    }

}