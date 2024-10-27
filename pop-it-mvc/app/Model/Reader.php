<?php
namespace Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reader extends Model {
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'surname',
        'patronymic',
        'address',
        'number',
    ];

    public function issues(): HasMany
    {
        return $this->hasMany(Issue::class, 'reader');
    }
}