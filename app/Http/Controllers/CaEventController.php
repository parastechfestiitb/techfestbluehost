<?php

namespace App\Http\Controllers;

use App\CaEvent;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CaEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return json_encode(CaEvent::where('start_date','<',Carbon::now()->addHours(5)->addMinutes(30))->where('end_date','>',Carbon::now()->subHours(19)->addMinutes(30))->orderBy('id','DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'title'=>'required|max:255',
            'task'=>'required',
        ]);
        $event = new CaEvent();
        $event->title = $request->title;
        $event->information = $request->information;
        $event->task = $request->task;
        $event->social_link = $request->social_links;
        $event->start_date = Carbon::parse($request->start_date);
        $event->end_date = Carbon::parse($request->end_date)->addHours(23)->addMinutes(59);
        $event->save();
        return abort(200,'true');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CaEvent  $caEvent
     * @return \Illuminate\Http\Response
     */
    public function show(CaEvent $caEvent)
    {
        return parse_json($caEvent);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CaEvent  $caEvent
     * @return \Illuminate\Http\Response
     */
    public function edit(CaEvent $event)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CaEvent  $caEvent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaEvent $event)
    {
        $request->validate([
            'title'=>'required|max:255',
            'task'=>'required',
        ]);
        $event->title = $request->title?$request->title:$event->title;
        $event->information = $request->information?$request->information:$event->information;
        $event->task = $request->task?$request->task:$event->task;
        $event->social_link = $request->social_links?$request->social_links:$event->social_links;
        $event->start_date = $request->start_date?Carbon::parse($request->start_date):$event->start_date;
        $event->end_date = $request->end_date?Carbon::parse($request->end_date):$event->end_day;
        $event->save();
        return abort(200,'true');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CaEvent  $caEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaEvent $caEvent)
    {
        $caEvent->delete();
        return abort(200,'true');
    }
}
