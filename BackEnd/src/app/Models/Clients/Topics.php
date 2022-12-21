<?php

namespace App\Models\Clients;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Topics extends Model
{
    use HasFactory;
    protected $table = 'topic';
    public function getAll()
    {
        $topics = DB::table($this->table)
            ->orderBy('content', 'ASC')
            ->where('user_id', '=', 2)
            ->get();
        return $topics;
    }
}
