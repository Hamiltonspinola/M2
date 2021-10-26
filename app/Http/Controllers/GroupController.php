<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\City;
use App\Models\Group;
use App\Models\GroupCity;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::get();
        $campaigns = Campaign::with('group')->get();
        return view('group.index', compact('groups', 'campaigns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('group.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Group::create($request->all());
        return redirect()->route('group.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        $cities = $group->cities()->paginate(5);
        return view('group.show', compact('cities', 'group'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit($name)
    {
        $groups = Group::where('name', $name)->get()->first();
        return view('group.edit', compact('groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $name)
    {
        $groups = Group::where('name', $name)->get()->first();
        $groups->update($request->all());
        return redirect()->route('group.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy($name)
    {
        $groups = Group::where('name', $name);
        $groups->delete();
        return redirect()->route('group.index');
    }
}
