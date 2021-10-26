<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Group;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campaigns = Campaign::paginate(5);
        return view('campaign.index', compact('campaigns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::get();
        return view('campaign.create', compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->status == 1)
        {
            $query = Campaign::where('status', 1)->get()->first();
                if(count($query)>=1){
                    Campaign::create([
                        'name'      => $request->name,
                        'status'    => 0,
                        'group_id'  => $request->group,
                    ]);
                    return redirect()->route('campaign.index')->with('message', 'Este grupo já possui campanha ativada!');
                }
        }
        
        Campaign::create([
            'name'      => $request->name,
            'status'    => $request->status,
            'group_id'  => $request->group
        ]);
        return redirect()->route('campaign.index')->with('message', 'Campanha cadastrada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function show(Campaign $campaign, $id)
    {
        $campaigns = Campaign::where('id', $id);
        return view('campaign.show', compact('camapigns'));;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function edit(Campaign $campaign, $id)
    {
        $campaigns = Campaign::where('id', $id);
        return view('campaign.edit', compact('camapigns'));;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campaign $campaign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campaign $campaign)
    {
        //
    }
}
