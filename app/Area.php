<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Area
 *
 * @property integer $id
 * @property string $name
 * @property integer $district_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Area whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Area whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Area whereDistrictId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Area whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Area whereUpdatedAt($value)
 */
class Area extends Model
{
    //
}
