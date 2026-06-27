<?php

namespace App\Models;

use Dyrynda\Database\Support\GeneratesUuid;
use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
    use GeneratesUuid;

    /**
     * @param string $uuid
     * @return TestModel|null
     */
    public static function getByUuid(string $uuid): ?TestModel
    {
        return TestModel::query()->whereUuid($uuid)->first();
    }
}
