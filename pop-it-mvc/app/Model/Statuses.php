<?php
namespace Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statuses extends Model {
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'status',

    ];
    public $table = 'statuses';
}