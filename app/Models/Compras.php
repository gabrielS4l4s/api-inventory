<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    use HasFactory;
    protected $table = 'Compras';
    protected $fillable = ['IdProducto', 'IdProveedor', 'Cantidad', 'CostoBase', 'Fecha', 'NumeroPedido', 'TotalPago', 'Descuento','PedidoRecibido'];
}
