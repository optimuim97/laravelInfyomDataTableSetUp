<?php

namespace App\Repositories;

use App\Models\Advantage;
use App\Repositories\BaseRepository;

/**
 * Class AdvantageRepository
 * @package App\Repositories
 * @version October 21, 2021, 4:15 pm UTC
*/

class AdvantageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'logo'
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
        return Advantage::class;
    }
}
