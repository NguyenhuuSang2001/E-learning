<?php

namespace App\Models\Clients;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Answer extends Model
{
    use HasFactory;
    protected $table = 'answers';

    public function getallAnswers($question_id)
    {
        $answers = DB::table($this->table);

        $result = $answers->where('question_id', '=', $question_id)
            ->inRandomOrder()
            ->get();
        return $result;
    }

    public function addAnswers($question_id, $answers)
    {
        // dd($answers);
        $answers_tb = DB::table($this->table);
        foreach ($answers as $key => $item) {
            // dd($item);
            $answers_tb->insert(
                [
                    'question_id' => $question_id,
                    'content' => $item[0],
                    'is_correct' => $item[1],
                    'created_at' => now(),
                    'updated_at' => now()
                ]

            );
        }
    }
}
