<?php

namespace App\Models\Clients;

use App\Models\Clients\Answer;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;
    protected $table = 'questions';

    public function getallQuestions()
    {
        $questions = DB::table($this->table);
        $result = $questions->select('questions_detail.*', $this->table . '.*')
            ->leftJoin('questions_detail', $this->table . '.id', '=', 'questions_detail.question_id')
            ->orderBy($this->table . '.created_at', 'DESC')
            ->get();
        return $result;
    }

    public function addQuestion($data)
    {
        // dd(session()->all());
        // dd($data);
        DB::table($this->table)->insert([
            'user_id' => $data['user_id'],
            // 'level' => $question->level,
            // 'user_id' => 1,
            'level' => 0,
            'created_at' => now(),
        ]);
        // dd($data);
        $last_question_id = DB::getPdo()->lastInsertId();
        DB::table('questions_detail')->insert([
            'question_id' => $last_question_id,
            'sub_id' => 1,
            'component_id' => 1,
            'topic_id' => 1,
            'content' => $data['content'],
            'number_answer' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $ans = new Answer();
        $data_ans = [
            1 => [$data['answer_1'], 1],
            2 => [$data['answer_2'], 0],
            3 => [$data['answer_3'], 0],
            4 => [$data['answer_4'], 0],
        ];
        $ans->addAnswers($last_question_id, $data_ans);
    }
    public function getDetail($id)
    {
        return DB::select('SELECT * FROM ' . $this->table . ' WHERE id = ?', [$id]);
    }
}
