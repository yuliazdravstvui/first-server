<?php

namespace Reader;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Src\Auth\Auth;
use Src\Auth\IdentityInterface;
use Src\Request;
use Src\Session;
use Src\View;

class Reader extends Model implements IdentityInterface
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'name',
        'surname',
        'patronymic',
        'address',
        'number'
    ];

    protected static function booted()
    {
        static::created(function ($reader) {
            $reader->save();
        });
    }

    //Выборка пользователя по первичному ключу
    public function findIdentity(int $id)
    {
        return self::where('id', $id)->first();
    }

    //Возврат первичного ключа
    public function getId(): int
    {
        return $this->id;
    }



}