<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Group;
use App\Models\GroupCity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GroupCityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(City $city)
    {
        $cities = City::with('groups')->get();
        $groups = Group::with('cities')->get();
        $groupCity = GroupCity::get();
        
        return view('groupCity.index', compact('cities', 'groups', 'groupCity'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::get();
        $groups = Group::get();
        $groupCity = GroupCity::get();
        return view('groupCity.create', compact('cities', 'groups', 'groupCity'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $groupCity = GroupCity::get();
        foreach ($groupCity as $g) {
            $city = City::where('id', $g->city_id);
            if($request->city == $g->city_id)
            {
                return redirect()->route('groupCity.create')->with('errorCity', 'Esta cidade já pertence a este grupo.');
            }
        }
        GroupCity::create([
            'city_id'   => $request->city,
            'group_id'  => $request->group
        ]);
        return redirect()->route('group.index')->with('message','Cidade Inserida!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GroupCity  $groupCity
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group, City $city, $id)
    {
        $groupCity = GroupCity::where('group_id', $id);
        $groups = $city->groups()->get();
        $cities = $group->cities()->get();
        return view('groupCity.show', compact('groupCity', 'groups', 'cities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GroupCity  $groupCity
     * @return \Illuminate\Http\Response
     */
    public function edit(GroupCity $groupCity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GroupCity  $groupCity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GroupCity $groupCity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GroupCity  $groupCity
     * @return \Illuminate\Http\Response
     */
    public function destroy(GroupCity $groupCity, $name)
    {
        $city = City::where('name', $name)->get()->first(); 
        $gc = GroupCity::where('city_id', $city->id)->get()->first();
        
        $gc->delete();
        return redirect()->route('group.index')->with('removeCity', 'Cidade removida deste grupo');
        
    }
}
