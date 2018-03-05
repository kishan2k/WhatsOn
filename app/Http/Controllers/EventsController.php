<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Models\Shared\Events;

class EventsController extends Controller
{
    /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $events = DB::table('events')->get()->toArray();
      return $events;
    //return view('frontend.events.index', compact('events'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $event = DB::table('events')->where('id', $id)->first();
    //dd($event);
    return view('frontend.events.index', compact('event'));
  }

/**
   * Search the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function search(Request $request)
  {
    $q = Input::get ( 'q' );
    $events = Events::search($q)->get();
    if (count ( $events ) > 0)
        return view ( 'frontend.events.search' )->withDetails ( $events )->withQuery ( $q );
    else
        return view ( 'frontend.events.search' )->withMessage ( 'No Details found. Try to search again !' );
    
    
      
  }


  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
}

