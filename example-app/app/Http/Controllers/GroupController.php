<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::all();
        return view('group.index', [
            'hd_title' => 'Группы',
            'title' => 'Страница групп',
            'groups' => $groups
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('group.create', [
            'hd_title' => 'Создание группы',
            'title' => 'Страница создания группы',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $group = new Group;
        $group->fill($request->all());
        $group->save();
        return redirect()->action([GroupController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        $students = $group->students;
        return view('group.single', [
            'hd_title' => 'Группа - ' . $group->title,
            'title' => 'Страница группы ' . $group->title,
            'groups' => $group,
            'students' => $students
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        //
    }
}