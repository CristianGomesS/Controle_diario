<?php

namespace App\Repositories\Core;

use App\Models\Profile;

class ProfileRepository extends BaseRepository
{
    public function __construct(private Profile $entity)
    {
        parent::__construct($entity);
    }

}
