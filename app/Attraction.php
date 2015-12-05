<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Attraction
 *
 * @property integer $id
 * @property string $name
 * @property string $real_name
 * @property string $latitude
 * @property string $longitude
 * @property string $data
 * @property string $pic
 * @property integer $area_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Attraction whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Attraction whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Attraction whereRealName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Attraction whereLatitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Attraction whereLongitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Attraction whereData($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Attraction wherePic($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Attraction whereAreaId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Attraction whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Attraction whereUpdatedAt($value)
 */
class Attraction extends Model
{
    //
}
