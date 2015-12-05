<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Festival
 *
 * @property integer $id
 * @property string $name
 * @property string $data
 * @property string $pic
 * @property string $start_date
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Festival whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Festival whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Festival whereData($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Festival wherePic($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Festival whereStartDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Festival whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Festival whereUpdatedAt($value)
 */
class Festival extends Model
{
    //
}
