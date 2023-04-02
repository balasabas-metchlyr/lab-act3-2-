<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model{
protected $table = 'woods';
// column sa table
protected $fillable = [
'ProductID', 'Name', 'Price', 'DeliveryGuy'
];
}
