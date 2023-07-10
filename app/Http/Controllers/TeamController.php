<?php

namespace App\Http\Controllers;

use App\Http\Requests\Team\TeamRequest;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Team::class);

        return Team::all();
    }

    public function store(TeamRequest $request)
    {
        $this->authorize('create', Team::class);

        return Team::create($request->validated());
    }

    public function show(Team $team)
    {
        $this->authorize('view', $team);

        return $team;
    }

    public function update(TeamRequest $request, Team $team)
    {
        $this->authorize('update', $team);

        $team->update($request->validated());

        return $team;
    }

    public function destroy(Team $team)
    {
        $this->authorize('delete', $team);

        $team->delete();

        return response()->json();
    }
}
