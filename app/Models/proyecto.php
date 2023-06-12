<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proyecto
 *
 * @property $id
 * @property $NombreProyecto
 * @property $FuenteFondos
 * @property $MontoPlanificado
 * @property $MontoPatrocinado
 * @property $MontoFondosPropios
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proyecto extends Model
{
    
    static $rules = [
		'NombreProyecto' => 'required',
		'FuenteFondos' => 'required',
		'MontoPlanificado' => 'required',
		'MontoPatrocinado' => 'required',
		'MontoFondosPropios' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['NombreProyecto','FuenteFondos','MontoPlanificado','MontoPatrocinado','MontoFondosPropios'];



}
