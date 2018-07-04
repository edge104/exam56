<?php

namespace App\Http\Controllers;

use App\Exam;
use App\Http\Requests\ExamRequest;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responser
     */
    public function index()
    {
        $exams = Exam::where('enable', 1)
                //->where('created_at', '>', '2018-05-30')
                ->orderBy('created_at', 'desc')
                ->take(10)
                ->paginate(2);
                //->get();有分頁不需get()
        return view('exam.index', compact('exams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exam.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExamRequest $request)
    {
        //寫法3
        //直接用$request->all，將exam.php裡$fillable定義的通通寫入
        //換句話說就是在這裡指示全部寫入，至於什麼是全部，從model裡面用$fillable去定義

        //驗證
        Exam::create($request->all());

        //寫法2
        //批量賦值寫入，要搭裡app/Exam.php裡的模型
        // Exam::create([
        //     'title'   => $request->title,
        //     'user_id' => $request->user_id,
        //     'enable'  => $request->enable,
        // ]);

        // 寫法1
        // $exam          = new Exam;
        // $exam->title   = $request->title;
        // $exam->user_id = $request->user_id;
        // $exam->enable  = $request->enable;
        // $exam->save();
        return redirect()->route('exam.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
