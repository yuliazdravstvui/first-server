<?php
namespace Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model {
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'surname',
        'patronymic',

    ];
    protected $primaryKey = 'id_author';
}