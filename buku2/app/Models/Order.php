<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    use HasFactory;

    // public function create()
    // {
    //     $buku = Buku::all(); // Ganti Buku::all() dengan query yang sesuai untuk mendapatkan data buku
    //     return view('order', ['buku' => $buku]);
    // }


      protected $guarded=['id'];
    /**
 * The table associated with the model.
 *
 * @var string
 */
protected $table = 'orders';


}
