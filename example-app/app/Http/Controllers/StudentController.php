<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($group)
    {
        return view('student.create', [
            'hd_title' => 'Добавление студента',
            'title' => 'Страница добавления студента в группу',
            'group' => $group
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($group, Request $request)
    {
        $student = new Student;
        $student->surname = $request->surname;
        $student->name = $request->name;
        $student->group_id = $group;
        $student->save();
        var_dump($student);
        return redirect('/groups/' . $group);
    }

    /**
     * Display the specified resource.
     */
    public function show($groups, Student $student)
    {
        return view('student.single', [
            'hd_title' => 'Студент - ' . $student->surname,
            'title' => 'Студент ' . $student->surname . ' ' . $student->name,
            'group' => $student->group,
            'student' => $student
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}