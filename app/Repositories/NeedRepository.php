<?php

namespace App\Repositories;

use App\Models\Need;
use App\Repositories\BaseRepository;

/**
 * Class NeedRepository
 * @package App\Repositories
 * @version October 21, 2021, 4:17 pm UTC
*/

class NeedRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description',
        'user_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Need::class;
    }
}
