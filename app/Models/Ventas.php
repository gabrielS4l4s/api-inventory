<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    use HasFactory;
    protected $table = 'Ventas';
    protected $fillable = ['IdProducto', 'IdCliente', 'Cantidad', 'PrecioVenta', 'Fecha', 'TotalPago', 'Descuento','Despachado'];
}
