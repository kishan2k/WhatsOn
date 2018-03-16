<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Models\Auth\User;
use App\Models\Shared\Events;
use App\Models\Shared\Address;
use App\Models\Shared\Category;
use App\Models\Shared\Subcategory;
use App\Models\Shared\Organizer;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use Carbon\Carbon;
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

  public function getCountries()
  {
//    $data = Events::with(['category','category.subcategory', 'address','organizer'])->first();
// Send an asynchronous request.
    $client = new Client();  
    $res = $client->request('GET', 'https://restcountries.eu/rest/v2/region/europe');
    $data =  json_decode($res->getBody(),true);   
    //dd($promise);
    return $data;
  }



  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $categorys = Category::get();
    $subcategorys = Subcategory::get();
    $id = Auth::id();
    $user = User::find($id)->load('organizer','address', 'organizer.address');
    //$organizer = Organizer::find($userid->organizerID);
    // $data = $organizer->address;
    //return $user;
    return view('frontend.events.create', compact('categorys', 'subcategorys', 'user'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {

    $eventstart = Carbon::parse($request['eventstart']);
    $eventend = Carbon::parse($request['eventend']);
    $slug = str_slug($request['eventname'], "-");
    $userId = Auth::user()->organizerID;



    $address = Address::firstOrCreate(
      [
        'name' => $request->name, 
        'address1' => $request->address1,
        'address2' => $request->address2, 
        'address3' => $request->address3, 
        'city' => $request->city, 
        'postcode' => $request->postcode, 
        'country' => $request->county, 
        'region' => $request->region, 
        'country' => $request->country,         
      ]);
      
      
      $event = Events::firstOrCreate(
        [
          'categoryID' => $request->category,
          'organizerID' => $userId,
          'addressID' => $address->id,
          'slug' => $slug,
          'name' => $request->eventname,
          'source' => Auth::user()->name,
          'body' => $request->text,
          'cost' => $request->cost,
          'start' => $eventstart,
          'end' => $eventstart,
          'isVisible' => 1,
          'isPublic' => 1,
          'image_url' => $request->url,
        ]);

        return redirect()->action(
          'EventsController@show', [$event->id]
      );
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
  public function all()
  {    
        
            // Using the Laravel Scout syntax to search the products table.
            $events = Events::get();

            // If there are results return them, if none, return the error message.
            //$events->count() ? $events : $error;

            //dd($events);

            return view('frontend.events.listall', compact('events'));
     
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

