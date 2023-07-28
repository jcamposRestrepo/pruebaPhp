<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $ID
 * @property string $nombre
 * @property string $referencia
 * @property integer $precio
 * @property integer $peso
 * @property string $categoria
 * @property integer $stock
  * @property string $fechaCreacion

 */
class Producto extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'productos';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['nombre', 'referencia', 'precio', 'peso', 'categoria', 'stock', 'fechaCreacion'];


}
