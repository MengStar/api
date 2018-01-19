<?php
/**
 * Created by PhpStorm.
 * User: liuxing06
 * Date: 2018/1/19
 * Time: 15:38
 */

namespace App\Http\Controllers;

use App\Repositories\SnapInviteStatisticRepository;

class SnapInviteStatisticController extends Controller
{
    protected $snapInviteStatisticRepository;

    public function __construct(SnapInviteStatisticRepository $snapInviteStatisticRepository)
    {
        $this->snapInviteStatisticRepository = $snapInviteStatisticRepository;
    }

    /**
     *
     */
    public function findAllSnaps()
    {

        return $this->snapInviteStatisticRepository->findAll();
    }

    public function findSnapById($id)
    {
        return $this->snapInviteStatisticRepository->find($id);
    }
}