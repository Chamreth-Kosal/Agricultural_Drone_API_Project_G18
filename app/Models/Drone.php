<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drone extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_of_drones',
        'model',
        'description',
        'weight',
        'price',
    ];
    public static function store($request, $id = null)
    {
        $drone = $request->only(['type_of_drones', 'model', 'description', 'weight', 'price']);
        $drone = self::updateOrCreate(['id' => $id], $drone);

        return $drone;
    }

}
