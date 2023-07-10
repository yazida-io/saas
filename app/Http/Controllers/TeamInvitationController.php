<?php

namespace App\Http\Controllers;

use App\Http\Requests\Team\TeamInvitationRequest;
use App\Models\TeamInvitation;

class TeamInvitationController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', TeamInvitation::class);

        return TeamInvitation::all();
    }

    public function store(TeamInvitationRequest $request)
    {
        $this->authorize('create', TeamInvitation::class);

        return TeamInvitation::create($request->validated());
    }

    public function show(TeamInvitation $teamInvitation)
    {
        $this->authorize('view', $teamInvitation);

        return $teamInvitation;
    }

    public function update(TeamInvitationRequest $request, TeamInvitation $teamInvitation)
    {
        $this->authorize('update', $teamInvitation);

        $teamInvitation->update($request->validated());

        return $teamInvitation;
    }

    public function destroy(TeamInvitation $teamInvitation)
    {
        $this->authorize('delete', $teamInvitation);

        $teamInvitation->delete();

        return response()->json();
    }
}
