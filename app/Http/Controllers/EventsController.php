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
    $events = Events::get();
 //   return $events;
    
    
    // dd($events);
    if (count ( $events ) > 0)
        return view ( 'frontend.events.index' )->withDetails ( $events );
    else
        return view ( 'frontend.events.index' )->withMessage ( 'No Details found. Try to  again !' );
    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('frontend.events.create');
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
    $event = Events::find($id);
    //dd($event);
    return view('frontend.events.show', compact('event'));
  }

/**
   * Search the specified resource.
   *
   * @param  $id
   * @return Response
   */
  public function search()
  {    
        // First we define the error message we are going to show if no keywords
        // existed or if no results found.
        $error = ['error' => 'No results found, please try with different keywords.'];

        $q = \Request::get('q');
        //dd($data);

        // Making sure the user entered a keyword.
        if($q) {

            // Using the Laravel Scout syntax to search the products table.
            $events = Events::where('name','like','%'.$q.'%')->orderBy('name')->get();

            // If there are results return them, if none, return the error message.
            //$events->count() ? $events : $error;

            //dd($events);

            return view('frontend.events.search', compact('events', 'q'));
        }

        // Return the error message if no keywords existed
        //return $error;
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

