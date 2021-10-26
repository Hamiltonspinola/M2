<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Group;
use Illuminate\Http\Request;

class CampaignGroupController extends Controller
{
    public function index()
    {
        $groups = Group::get();
        $campaigns = Campaign::get();

        return view('campaignGroup.index', compact('groups','campaigns'));
    }

    public function create()
    {

    }

    public function edit()
    {
        
    }

    public function updtade()
    {
        
    }

    public function show()
    {
        
    }

    public function destroy()
    {
        
    }
}
