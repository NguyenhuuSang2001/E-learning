<?php

namespace App\Models\Clients;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Components extends Model
{
    use HasFactory;
    protected $table = 'component_sub';
    public function getAll()
    {
        $sujects = DB::table($this->table)
            ->orderBy('content', 'ASC')
            ->where('sub_id', '=', 2)
            ->get();
        return $sujects;
    }
}
