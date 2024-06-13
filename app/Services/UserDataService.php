<?php

namespace App\Services;

use App\Services\BaseService;
use Exception;
use App\Repositories\UserDataRepository;
use Illuminate\Support\Facades\Log;

class UserDataService extends BaseService
{
    protected $repo;

    public function __construct(
        UserDataRepository $repo,
    ) {
        parent::__construct();
        $this->repo = $repo;
    }

    public function index($request)
    {
        try {
            $data = $this->repo->getAll($request);
            return $this->responseMessage(__('content.message.read.success'), 200, $data);
        } catch (Exception $exc) {
            Log::error($exc);
            return $this->responseMessage(__('content.message.read.failed'), 400);
        }
    }

}
