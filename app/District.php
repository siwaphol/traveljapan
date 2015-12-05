<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\District
 *
 * @property integer $id
 * @property string $name
 * @property integer $province_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\District whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\District whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\District whereProvinceId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\District whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\District whereUpdatedAt($value)
 */
class District extends Model
{
    //
}
