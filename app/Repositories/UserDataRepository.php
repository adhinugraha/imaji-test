<?php

namespace App\Repositories;

use App\Models\UserData;
use App\Repositories\BaseRepository;

class UserDataRepository extends BaseRepository
{
    protected $repoUser;
    public function __construct(
        UserData $model
    ) {
        $this->model = $model;
    }

    public function getAll($request)
    {
        $data = $this->model
            ->leftJoin('user_score as tb2', 'tb2.id', '=', 'user_data.id')
            ->select(['user_data.name', 'tb2.score']);
        
        if (isset($request->user)){
            $data = $data->where('name', 'LIKE', '%'.$request->user.'%' );
            return $data->get()->firstOrFail();
        }

        if (isset($request->sort)){
            $data = $data->orderBy('tb2.score', $request->sort);
        } else {
            $data = $data->orderBy('tb2.score', 'desc');
        }

        return $data->get()->all();
    }
}
