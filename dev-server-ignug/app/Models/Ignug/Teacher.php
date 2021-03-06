<?php

namespace App\Models\Ignug;

use App\User;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Teacher extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $connection = 'pgsql-ignug';
    protected $fillable = [

    ];

    public function attendances()
    {
        return $this->morphMany(Attendance::class, 'attendanceable');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function careers()
    {
        return $this->morphToMany(Career::class, 'careerable');
    }
}
