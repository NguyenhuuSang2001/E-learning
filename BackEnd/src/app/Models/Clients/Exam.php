<?php

namespace App\Models\Clients;

use App\Models\Clients\Answer;
use App\Models\Clients\Question;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Exam extends Model
{
    use HasFactory;
    protected $table = 'test';

    public function getallTests()
    {
        $all_test = DB::table($this->table);
        $result = $all_test->orderBy('created_at', 'DESC')
            ->get();
        return $result;
    }


    public function addTest($data)
    {
        // dd($data);

        DB::table($this->table)->insert([
            'user_id' => $data['user_id'],
            'name' => $data['name'],
            'code' => 4869,
            'is_public' => $data['is_public'],
            'start_at' => $data['start_at'],
            'end_at' => $data['end_at'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $last_test_id = DB::getPdo()->lastInsertId();
        $table_question = new Question();
        $questions_id = $table_question->getallQuestions();
        $this->addTestDetails($last_test_id, $questions_id);
    }

    protected function addTestDetails($test_id, $questions_id)
    {
        // dd($questions_id);
        $tabel_details = $this->table . '_detail';
        foreach ($questions_id as $key => $item) {
            DB::table($tabel_details)->insert([
                'test_id' => $test_id,
                'question_id' => $item->question_id,
                'point' => 1,
                'created_at' => now(),
                'updated_at' => now(),

            ]);
        }
    }
    public function getTestDetails($test_id)
    {
        $name_test = DB::table($this->table)->where('id', '=', $test_id)->get()['0'];
        $name_test = $name_test->name;
        // dd($name_test);
        $tabel_details = $this->table . '_detail';
        $infor = DB::table($tabel_details)
            ->where('test_id', '=', $test_id)
            ->join('questions_detail', 'questions_detail.question_id', '=', 'test_detail.question_id')
            ->inRandomOrder()
            ->limit(10)
            ->get();
        // dd($infor);
        $ans = new Answer();
        $data = [];
        foreach ($infor as $key => $value) {
            array_push($data, [$value->question_id, $value->content, $ans->getallAnswers($value->question_id)]);
        };
        // dd($data);
        return ['data' => $data, 'name_test' => $name_test];
    }
}
