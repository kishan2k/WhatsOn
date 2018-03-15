@extends('frontend.layouts.app')

@section('title', app_name() . ' | '.__('navs.general.home'))

@section('content')
<div class="page-title" style="">
			<div class="inner">
				<h2>Add New Event</h2>
				<p>Add your own event here</p>
			</div> <!-- end .inner -->
		</div> <!-- end .page-title -->

		<div class="section boxed-section light">
			<div class="inner">
				<div class="container">
					<div class="box">
						<form class="add-listing-form light-inputs" METHOD="POST" action="{{ action('EventsController@store') }}">
							{{csrf_field()}}
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">Event Name :</span>
									<input type="text" name="eventname" id="eventame" placeholder="e.g Your Event name here ...">
								</div> <!-- end .input-group -->
							</div> <!-- end .form-group -->
							
							<div class="form-group">              
							    <textarea placeholder="Description" rows="4" name="text" id="text"></textarea>
							</div> <!-- end .form-group -->
							<div class="row">
							<div class="col-sm-6">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon">Category :</span>
											<select class="selectpicker" data-live-search="true" name="category" id="category">	    	
												<option value="" >Select One</option>
												@foreach($categorys as $category)
												<option value="{{$category->id}}">{{ $category->name}}</option>
												@endforeach
											</select>
										</div> <!-- end .input-group -->
									</div> <!-- end .form-group -->
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon">Subcategory :</span>
											<select class="selectpicker" data-live-search="true" name="subcategory" id="subcategory">	    	
											<option value=""  >Select One</option>
												@foreach($subcategorys as $subcategory)
												<option value="{{$subcategory->id}}">{{ $subcategory->name}}</option>
												@endforeach
											</select>
										</div> <!-- end .input-group -->
									<span class="help-block">Not Required, but will help users find this event.</span>															
										
									</div> <!-- end .form-group -->			
								</div>								
							</div>																			                            							
							<div class="form-group">
								<div class="row">
									<div class="col-sm-6">
										<div class='input-group date' >
										<span class="input-group-addon">Select Start :</span>
											<input class="form-control datetimepicker" type="text" value=""  name="eventstart" id="eventstart">   
											               										
										</div>
								
									</div>
									<div class="col-sm-6">
										<div class='input-group date'>
										<span class="input-group-addon">Select End :</span>
											<input type='text'  class="form-control datetimepicker" id="eventend" name="eventend" />											
										</div>
									</div>
								</div>
							</div>


             



							</br>
							<span class="help-block">Leave this blank if the you want to use your organization address.</span>
							
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">Location Name :</span>
									<input type="text" value="{{$user->organizer->address->name}}" id="name" name="name">
								</div> <!-- end .input-group -->
								
							</div> <!-- end .form-group -->
							<div class="row">
							
								<div class="col-sm-6">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">Address Line 1 :</span>
												<input type='text' class="form-control" value="{{$user->organizer->address->address1}}" id="address1" name="address1" />											
											</div> <!-- end .input-group -->
										</div> <!-- end .form-group -->
								</div>
								<div class="col-sm-6">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">Address Line 2 :</span>
												<input type='text' class="form-control" value="{{$user->organizer->address->address2}}" id="address2" name="address2" />											
											</div> <!-- end .input-group -->
										</div> <!-- end .form-group -->
								</div>													
							</div>	
							<div class="row">
								<div class="col-sm-6">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">Address Line 3 :</span>
												<input type='text' class="form-control" value="{{$user->organizer->address->address3}}" id="address3" name="address3" />											
											</div> <!-- end .input-group -->
										</div> <!-- end .form-group -->
								</div>
								<div class="col-sm-6">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">City :</span>
												<input type='text' class="form-control" value="{{$user->organizer->address->city}}" id="city" name="city" />											
											</div> <!-- end .input-group -->
										</div> <!-- end .form-group -->
								</div>													
							</div>	
							<div class="row">
								<div class="col-sm-6">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">Postcode :</span>
												<input type='text' class="form-control" value="{{$user->organizer->address->postcode}}" id="postcode" name="postcode" />											
											</div> <!-- end .input-group -->
										</div> <!-- end .form-group -->
								</div>
								<div class="col-sm-6">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">County :</span>
												<input type='text' class="form-control" value="{{$user->organizer->address->county}}" id="county" name="county" />											
											</div> <!-- end .input-group -->
										</div> <!-- end .form-group -->
								</div>													
							</div>	
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon">Region :</span>
											<select class="selectpicker" data-live-search="true" id="region" name="region">	    	
											<option value="{{ $user->organizer->address->region}}" selected>{{ $user->organizer->address->region}}</option>
											<option value="England"  >England</option>
											<option value="Wales"  >Wales</option>
											<option value="Scotland">Scotland</option>
											<option value="Ireland" >Ireland</option>
											</select>
										</div> <!-- end .input-group -->								
									</div> <!-- end .form-group -->			
								</div>	
								<div class="col-sm-6">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon">Country :</span>
											<select class="selectpicker" data-live-search="true" id="country" name="country">	    	
												<option value="{{ $user->organizer->address->country}}" selected>{{ $user->organizer->address->country}}</option>
												<option value="GB" >United Kingdom</option>
											</select>
										</div> <!-- end .input-group -->
									</div> <!-- end .form-group -->
								</div>							
							</div>				
							</br>	
							<div class="form-group">
								<div class="row">
									<div class="col-sm-6">
										<div class='input-group '>
										<span class="input-group-addon">Enter Cost : £</span>
											<input type='text' class="form-control" id="cost" name="cost" />											
										</div>
									</div>
									<div class="col-sm-6">
										<div class='input-group '>
										<span class="input-group-addon">Enter Image Url :</span>
											<input type='text' class="form-control" id="url" name="url" />											
										</div>
									</div>
								</div>
							</div>
						
							

								
							<div class="submit"><button type="submit" class="button">Add your Listing</button></div>
						</form>
					</div> <!-- end .box -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->


@endsection
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
$(function () {
	$("#eventstart").flatpickr({
		enableTime: true,
		altInput: true,
    	altFormat: "F j, Y  H:i ",
		minDate: "today",

	});
	$("#eventend").flatpickr({
		enableTime: true,
		altInput: true,
    	altFormat: "F j, Y  H:i ",
		minDate: "today",
	});
});
</script>
@endpush