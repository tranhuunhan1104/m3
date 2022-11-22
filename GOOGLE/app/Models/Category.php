<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Category extends Model
{
    use HasFactory;
    protected $dates = [
        'created_at',
        'updated_at',
        // your other new column
    ];
    protected $fillable = [
        'id', 'name', 'slug', 'description', 'status'
    ];
    protected $primaryKey = 'id';
    protected $table = 'categories';
    public $timestamps = true;
    // public function attributes()
    // {
    //     return $this->hasMany(Attributes::class);
    // }
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
