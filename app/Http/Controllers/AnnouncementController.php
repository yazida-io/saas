<?php

namespace App\Http\Controllers;

use App\Http\Requests\Announcement\AnnouncementRequest;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Announcement::class);

        return Announcement::all();
    }

    public function store(AnnouncementRequest $request)
    {
        $this->authorize('create', Announcement::class);

        return Announcement::create($request->validated());
    }

    public function show(Announcement $announcement)
    {
        $this->authorize('view', $announcement);

        return $announcement;
    }

    public function update(AnnouncementRequest $request, Announcement $announcement)
    {
        $this->authorize('update', $announcement);

        $announcement->update($request->validated());

        return $announcement;
    }

    public function destroy(Announcement $announcement)
    {
        $this->authorize('delete', $announcement);

        $announcement->delete();

        return response()->json();
    }
}
