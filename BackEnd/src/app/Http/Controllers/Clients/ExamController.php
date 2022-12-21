<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Clients\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $exams;
    public function __construct()
    {
        $this->exams = new Exam();
    }

    public function index()
    {
        return view('client.create-test');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'user_id' => 2,
            'name' => $request->get('nameTest'),
            'is_public' => $request->get('status') == 'public' ? 1 : 0,
            'start_at' => $request->get('time'),
            'end_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
        // dd($data);
        // if (!empty($request->get('nameTest'))) {
        $this->exams->addTest($data);
        $message = "Tạo bài test thành công!";
        return view('client.create-test', ['message' => $message]);
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $infor = $this->exams->getTestDetails(32);
        $data = $infor['data'];
        $name = $infor['name_test'];

        return view('client.do-test', ['id' => $id, 'data' => $data, 'name' => $name]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
