<?php

namespace App\Http\Controllers;

use App\Model\Event;
use App\Http\Requests\EventRequest;
use App\Model\Content;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Event::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequest $request)
    {
        $validated = $request->validated();
        $x = Content::create([
            'owner_id' => $validated['owner_id'],
            'type' => 'event'
        ]);
        $validated['id'] = $x['id'];
        Event::create($validated);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return $event;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(EventRequest $request, Event $event)
    {
        $validated = $request->validated();
        $event->update($validated);
        return $event;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        if($event->delete()){
            Content::find($event['id'])->delete();
        }
        return back(response('', 204));
    }

    // GET FIRST 3
    public function getThree(){ return Event::orderBy('id', 'desc')->take(3)->get();}
}
