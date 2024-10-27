<?php
namespace Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'id_status'
    ];

    public function getBook(): BelongsTo
    {
        return $this->belongsTo(Book::class, 'book');
    }

    public function getReader(): BelongsTo
    {
        return $this->belongsTo(Reader::class, 'reader');
    }

    public function getStatuses(): BelongsTo
    {
        return $this->belongsTo(Statuses::class, 'id_status', 'id');
    }

    public $table = 'issue';
}