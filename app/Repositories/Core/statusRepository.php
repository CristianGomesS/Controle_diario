<?php

namespace App\Repositories\Core;

use App\Models\Status;

class statusRepository extends BaseRepository
{
    public function __construct(private Status $entity)
    {
        parent::__construct($entity);
    }

}
