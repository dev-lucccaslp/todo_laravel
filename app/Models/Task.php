<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_done',
        'title',
        'description',
        'due_date',
        'user_id',
        'category_id'
    ];
    //CONFIGURANDO RELACIONAMENTO DO TASK COM USER PARA RECEBER O ID DO USERS
    public function user() {
        return $this->belongsTo(User::class);
    }

    //CONFIGURANDO RELACIONAMENTO DO TASK COM CATEGORY PARA RECEBER O ID DO CATEGORIES
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
