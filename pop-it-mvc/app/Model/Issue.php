<?php
namespace Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model {
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'librarian',
        'reader',
        'book',
        'date_of_issue',
        'return_date',
        'actual_date',
        'status',

    ];
    public $table = 'book_issuance';
}