<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $group
 * @property int $gid
 * @property string $alia
 * @property string $created_at
 * @property string $updated_at
 */
class PersonAlia extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'person_alia';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['group', 'gid', 'alia', 'created_at', 'updated_at'];

}