<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Plan extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'area',
        'datetime',
        'duration',
        'status',
        'drone_id',
    ];
    
    public static function store($request, $id = null)
    {
        $plan = $request->only(['name', 'area', 'datetime', 'duration', 'status', 'drone_id']);
        $plan = self::updateOrCreate(['id' => $id], $plan);

        return $plan;
    }

    public function drone():BelongsTo
    {
        return $this->belongsTo(Drone::class);
    }
}
