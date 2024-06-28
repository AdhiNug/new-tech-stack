<?php

namespace App\Http\Controllers;

use App\Models\Git;
use App\Models\Header;
use App\Models\Porto;
use App\Models\Skill;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $header = Header::first();
        $gits = Git::all();
        $skill = Skill::first();
        $porto = Porto::first();
        if (!$skill) {
            $skill = (object) [
                'description' => 'default description',
                'detail_skill' => []
            ];
        } else {
            if (!is_string($skill->description)) {
                $skill->description = 'default description';
            }
            if (!is_array($skill->detail_skill)) {
                $skill->detail_skill = [];
            }
        }

        return view('layouts.main', compact('gits', 'header', 'skill', 'porto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
