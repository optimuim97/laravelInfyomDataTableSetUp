<?php

namespace App\Repositories;

use App\Models\AccountType;
use App\Repositories\BaseRepository;

/**
 * Class AccountTypeRepository
 * @package App\Repositories
 * @version October 21, 2021, 4:14 pm UTC
*/

class AccountTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'slug',
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
        return AccountType::class;
    }
}
