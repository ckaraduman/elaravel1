<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CourseController;
use App\Models\Course;
use DateTime;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$data=Course::all();

        // $data=Course::find(1);//id varsa ve sadece id ise modelle koşullu veri çekelim.
        // echo $data->course_title;

        // $data=Course::where('id',1)->first();//where ile sorgulu veri çekelim.
        // echo $data->course_title;

        //dd($data);
        // foreach($data as $key)//TÜMÜNÜ ÇEK
        // {
        //   echo $key['course_title']."<br>";//dizi öğesi olarak çekelim.-Modelle çekim.
        //   echo $key->course_content."<br>";//nesne olarak çekelim.-Modelle çekim.
        // }

        $course = new Course; // Kayıt ekleme - model kullanarak - start
        $course->course_title='Test 01';
        $course->course_content='Denemeler';
        $course->course_must=111;
        $course->save(); // Kayıt ekleme - model kullanarak - end
        $dt = new DateTime();
        echo $dt->format('Y-m-d H:i:s');
        Echo "<br>"."İşlem tamamlandı!";
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
        //
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
