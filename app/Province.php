<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Province
 *
 * @property integer $id
 * @property string $name
 * @property integer $region_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Province whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Province whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Province whereRegionId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Province whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Province whereUpdatedAt($value)
 */
class Province extends Model
{
    //
}
