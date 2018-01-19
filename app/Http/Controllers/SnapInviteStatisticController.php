<?php
/**
 * Created by PhpStorm.
 * User: liuxing06
 * Date: 2018/1/19
 * Time: 15:38
 */

namespace App\Http\Controllers;

use App\Repositories\SnapInviteStatisticRepository;
use App\Utils\CommonValueCheck;
use Illuminate\Support\Facades\Input;

class SnapInviteStatisticController extends Controller
{
    protected $snapInviteStatisticRepository;

    public function __construct(SnapInviteStatisticRepository $snapInviteStatisticRepository)
    {
        $this->snapInviteStatisticRepository = $snapInviteStatisticRepository;
    }

    public function findAllSnaps()
    {
        $per_page = CommonValueCheck::perPageCheck(Input::get('per_page'));
        return $this->snapInviteStatisticRepository->findAll($per_page);
    }

    public function findSnapById($id)
    {

        return $this->snapInviteStatisticRepository->find($id);
    }
}