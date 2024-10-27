<?php
namespace Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'title',
        'year_edition',
        'price',
        'id_author',
        'id_type_edition',
        'annotation',
        'img',
    ];
    public $table = 'books';
    public function getAuthor(): BelongsTo
    {
        return $this->belongsTo(Author::class, 'id_author');
    }
    public function getEdition(): BelongsTo
    {
        return $this->belongsTo(Editions::class, 'id_type_edition');
    }
    public function issues(): HasMany
    {
        return $this->hasMany(Issue::class, 'book');
    }

}