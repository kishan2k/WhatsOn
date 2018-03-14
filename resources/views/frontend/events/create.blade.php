@extends('frontend.layouts.app')

@section('title', app_name() . ' | '.__('navs.general.home'))

@section('content')
<div class="page-title" style="">
			<div class="inner">
				<h2>Add Listing</h2>
				<p>Add your own event here</p>
			</div> <!-- end .inner -->
		</div> <!-- end .page-title -->

		<div class="section boxed-section light">
			<div class="inner">
				<div class="container">
					<div class="box">
						<form class="add-listing-form light-inputs">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">Event Name :</span>
									<input type="text" name="name" id="name" placeholder="e.g Your listing name here ...">
								</div> <!-- end .input-group -->
							</div> <!-- end .form-group -->
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">Short Description :</span>
									<input type="text" name="shortDesc" id="shortDesc" placeholder="e.g Conference">
								</div> <!-- end .input-group -->
							</div> <!-- end .form-group -->
							<div class="form-group">              
							    <textarea placeholder="Description" rows="4" name="text" id="text"></textarea>
							</div> <!-- end .form-group -->
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">Listing category :</span>
									<select class="selectpicker" title="Choose one or more categories" data-live-search="true" multiple="multiple">
										<option value="1">Option one</option>
										<option value="2">Option two</option>
										<option value="3">Option three</option>
										<option value="4">Option four</option>
                                    </select>                                    
								</div> <!-- end .input-group -->
								<span class="help-block">Visitors can filter their search by the categories and amenities they want - so make sure you choose them wisely and include all the relevant ones</span>
							</div> <!-- end .form-group -->
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">Listing tags (optional) :</span>
									<select class="selectpicker" title="Add tags or amenties" data-live-search="true" multiple="multiple">
										<option value="1">Option one</option>
										<option value="2">Option two</option>
										<option value="3">Option three</option>
										<option value="4">Option four</option>
									</select>
								</div> <!-- end .input-group -->
								<span class="help-block">Visitors can filter their search by the amenities too, so make sure you include all the relevant ones.</span>
                            </div> <!-- end .form-group -->
                            <div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">Event Start Date and Time :</span>
									<input type="text" name="datetimestart" id="datetimestart" placeholder="e.g Your listing name here ...">
								</div> <!-- end .input-group -->
                            </div> <!-- end .form-group -->
                            <div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">Event End Date and Time :</span>
									<input type="text" name="datetimeend " id="datetimeend" placeholder="e.g Your listing name here ...">
								</div> <!-- end .input-group -->
							</div> <!-- end .form-group -->
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">Listing Region :</span>
									<select class="selectpicker" data-live-search="true">	    	
										<option value="" disabled selected>City of USA</option>
										<option value="1">Option one</option>
										<option value="2">Option two</option>
										<option value="3">Option three</option>
										<option value="4">Option four</option>
									</select>
								</div> <!-- end .input-group -->
							</div> <!-- end .form-group -->

							<div class="form-group">
								<div class="row">
									<div class="col-sm-6">
										<div class='input-group date'>
										<span class="input-group-addon">Select Start :</span>
											<input type='text' class="form-control" id="eventstart" name="eventstart" />											
										</div>
									</div>
									<div class="col-sm-6">
										<div class='input-group date'>
										<span class="input-group-addon">Select End :</span>
											<input type='text' class="form-control" id="eventend" name="eventend" />											
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">Location (optional) :</span>
									<input type="text" placeholder="e.g 79 Leonard St , NewYork">
								</div> <!-- end .input-group -->
								<span class="help-block">Leave this blank if the location is not important.</span>
							</div> <!-- end .form-group -->
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">PhoneNumber (optional) :</span>
									<input type="text" placeholder="e.g +84 0939793979">
								</div> <!-- end .input-group -->
							</div> <!-- end .form-group -->
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">Website (optional) :</span>
									<input type="text" placeholder="e.g themeforest.net/user/wecookcode/portfolio">
								</div> <!-- end .input-group -->
							</div> <!-- end .form-group -->
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">Facebook username (optional) :</span>
									<input type="text" placeholder="e.g yournamecompany">
								</div> <!-- end .input-group -->
							</div> <!-- end .form-group -->
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">Twitter username (optional) :</span>
									<input type="text" placeholder="e.g @yournamecompany">
								</div> <!-- end .input-group -->
							</div> <!-- end .form-group -->
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">Googleplus username (optional) :</span>
									<input type="text" placeholder="e.g yournamecompany">
								</div> <!-- end .input-group -->
							</div> <!-- end .form-group -->
							<div class="form-group add_photo">
							    <form action="http://explorecity.icookcode.net/demo/upload.php" method="post" enctype="multipart/form-data">	
							    	<label for="file-upload" class="button">Add Photo for Gallery</label>
								    <input type="file" name="file-upload" id="file-upload">
								    <span>4 Photos ( 570px × 400px)</span>   								    
								</form>
							</div> <!-- end .text-left .add_photo -->
							<div class="form-group photo_thumbnails">
								<div class="photo_preview_box"></div>
								<div class="photo_preview_box"></div>
								<div class="photo_preview_box"></div>
								<div class="photo_preview_box"></div>
							</div> <!-- end .form-group .photo_thumbnails -->
							<div class="form-group listing-hours">
								<div class="row">
									<div class="col-sm-4 operation-hours-button">
										<button type="button" id="hours-of-operation" class="button">Add Hours of Operation</button>
									</div> <!-- end .col-sm-4 -->
									<div class="listing-hours-fields-wrapper">
										<div class="col-sm-8 listing-hours-fields">
											<div class="row">
												<div class="col-sm-2 weekday-text">										
													<span>Monday</span>
												</div> <!-- end .col-sm-2 -->
												<div class="col-sm-5">
													<div class="input-group">
														<span class="input-group-addon">open :</span>
														<select class="selectpicker" data-live-search="false">
															<option value="" disabled selected></option>
															<option value="1">12:00 am</option>
															<option value="2">01:00 am</option>
															<option value="3">02:00 am</option>
															<option value="4">03:00 am</option>
															<option value="4">04:00 am</option>
															<option value="4">05:00 am</option>
															<option value="4">06:00 am</option>
															<option value="4">07:00 am</option>
															<option value="4">08:00 am</option>
															<option value="4">09:00 am</option>
															<option value="4">10:00 am</option>
															<option value="4">11:00 am</option>
															<option value="4">12:00 pm</option>
															<option value="2">01:00 pm</option>
															<option value="3">02:00 pm</option>
															<option value="4">03:00 pm</option>
															<option value="4">04:00 pm</option>
															<option value="4">05:00 pm</option>
															<option value="4">06:00 pm</option>
															<option value="4">07:00 pm</option>
															<option value="4">08:00 pm</option>
															<option value="4">09:00 pm</option>
															<option value="4">10:00 pm</option>
															<option value="4">11:00 pm</option>
														</select>
													</div> <!-- end .input-group -->
												</div> <!-- end .col-sm-5 -->
												<div class="col-sm-5">
													<div class="input-group">
														<span class="input-group-addon">Close :</span>
														<select class="selectpicker" data-live-search="false">
															<option value="" disabled selected></option>
															<option value="1">12:00 am</option>
															<option value="2">01:00 am</option>
															<option value="3">02:00 am</option>
															<option value="4">03:00 am</option>
															<option value="4">04:00 am</option>
															<option value="4">05:00 am</option>
															<option value="4">06:00 am</option>
															<option value="4">07:00 am</option>
															<option value="4">08:00 am</option>
															<option value="4">09:00 am</option>
															<option value="4">10:00 am</option>
															<option value="4">11:00 am</option>
															<option value="4">12:00 pm</option>
															<option value="2">01:00 pm</option>
															<option value="3">02:00 pm</option>
															<option value="4">03:00 pm</option>
															<option value="4">04:00 pm</option>
															<option value="4">05:00 pm</option>
															<option value="4">06:00 pm</option>
															<option value="4">07:00 pm</option>
															<option value="4">08:00 pm</option>
															<option value="4">09:00 pm</option>
															<option value="4">10:00 pm</option>
															<option value="4">11:00 pm</option>
														</select>
													</div> <!-- end .input-group -->
												</div> <!-- end .col-sm-5 -->
											</div> <!-- end .row -->
										</div> <!-- end .col-sm-8 -->
										<div class="col-sm-8 col-sm-offset-4 listing-hours-fields">
											<div class="row">
												<div class="col-sm-2 weekday-text">										
													<span>Tuesday</span>
												</div> <!-- end .col-sm-2 -->
												<div class="col-sm-5">
													<div class="input-group">
														<span class="input-group-addon">open :</span>
														<select class="selectpicker" data-live-search="false">
															<option value="" disabled selected></option>
															<option value="1">12:00 am</option>
															<option value="2">01:00 am</option>
															<option value="3">02:00 am</option>
															<option value="4">03:00 am</option>
															<option value="4">04:00 am</option>
															<option value="4">05:00 am</option>
															<option value="4">06:00 am</option>
															<option value="4">07:00 am</option>
															<option value="4">08:00 am</option>
															<option value="4">09:00 am</option>
															<option value="4">10:00 am</option>
															<option value="4">11:00 am</option>
															<option value="4">12:00 pm</option>
															<option value="2">01:00 pm</option>
															<option value="3">02:00 pm</option>
															<option value="4">03:00 pm</option>
															<option value="4">04:00 pm</option>
															<option value="4">05:00 pm</option>
															<option value="4">06:00 pm</option>
															<option value="4">07:00 pm</option>
															<option value="4">08:00 pm</option>
															<option value="4">09:00 pm</option>
															<option value="4">10:00 pm</option>
															<option value="4">11:00 pm</option>
														</select>
													</div> <!-- end .input-group -->
												</div> <!-- end .col-sm-5 -->
												<div class="col-sm-5">
													<div class="input-group">
														<span class="input-group-addon">Close :</span>
														<select class="selectpicker" data-live-search="false">
															<option value="" disabled selected></option>
															<option value="1">12:00 am</option>
															<option value="2">01:00 am</option>
															<option value="3">02:00 am</option>
															<option value="4">03:00 am</option>
															<option value="4">04:00 am</option>
															<option value="4">05:00 am</option>
															<option value="4">06:00 am</option>
															<option value="4">07:00 am</option>
															<option value="4">08:00 am</option>
															<option value="4">09:00 am</option>
															<option value="4">10:00 am</option>
															<option value="4">11:00 am</option>
															<option value="4">12:00 pm</option>
															<option value="2">01:00 pm</option>
															<option value="3">02:00 pm</option>
															<option value="4">03:00 pm</option>
															<option value="4">04:00 pm</option>
															<option value="4">05:00 pm</option>
															<option value="4">06:00 pm</option>
															<option value="4">07:00 pm</option>
															<option value="4">08:00 pm</option>
															<option value="4">09:00 pm</option>
															<option value="4">10:00 pm</option>
															<option value="4">11:00 pm</option>
														</select>
													</div> <!-- end .input-group -->
												</div> <!-- end .col-sm-5 -->
											</div> <!-- end .row -->
										</div> <!-- end .col-sm-8 -->
										<div class="col-sm-8 col-sm-offset-4 listing-hours-fields">
											<div class="row">
												<div class="col-sm-2 weekday-text">										
													<span>Wednesday</span>
												</div> <!-- end .col-sm-2 -->
												<div class="col-sm-5">
													<div class="input-group">
														<span class="input-group-addon">open :</span>
														<select class="selectpicker" data-live-search="false">
															<option value="" disabled selected></option>
															<option value="1">12:00 am</option>
															<option value="2">01:00 am</option>
															<option value="3">02:00 am</option>
															<option value="4">03:00 am</option>
															<option value="4">04:00 am</option>
															<option value="4">05:00 am</option>
															<option value="4">06:00 am</option>
															<option value="4">07:00 am</option>
															<option value="4">08:00 am</option>
															<option value="4">09:00 am</option>
															<option value="4">10:00 am</option>
															<option value="4">11:00 am</option>
															<option value="4">12:00 pm</option>
															<option value="2">01:00 pm</option>
															<option value="3">02:00 pm</option>
															<option value="4">03:00 pm</option>
															<option value="4">04:00 pm</option>
															<option value="4">05:00 pm</option>
															<option value="4">06:00 pm</option>
															<option value="4">07:00 pm</option>
															<option value="4">08:00 pm</option>
															<option value="4">09:00 pm</option>
															<option value="4">10:00 pm</option>
															<option value="4">11:00 pm</option>
														</select>
													</div> <!-- end .input-group -->
												</div> <!-- end .col-sm-5 -->
												<div class="col-sm-5">
													<div class="input-group">
														<span class="input-group-addon">Close :</span>
														<select class="selectpicker" data-live-search="false">
															<option value="" disabled selected></option>
															<option value="1">12:00 am</option>
															<option value="2">01:00 am</option>
															<option value="3">02:00 am</option>
															<option value="4">03:00 am</option>
															<option value="4">04:00 am</option>
															<option value="4">05:00 am</option>
															<option value="4">06:00 am</option>
															<option value="4">07:00 am</option>
															<option value="4">08:00 am</option>
															<option value="4">09:00 am</option>
															<option value="4">10:00 am</option>
															<option value="4">11:00 am</option>
															<option value="4">12:00 pm</option>
															<option value="2">01:00 pm</option>
															<option value="3">02:00 pm</option>
															<option value="4">03:00 pm</option>
															<option value="4">04:00 pm</option>
															<option value="4">05:00 pm</option>
															<option value="4">06:00 pm</option>
															<option value="4">07:00 pm</option>
															<option value="4">08:00 pm</option>
															<option value="4">09:00 pm</option>
															<option value="4">10:00 pm</option>
															<option value="4">11:00 pm</option>
														</select>
													</div> <!-- end .input-group -->
												</div> <!-- end .col-sm-5 -->
											</div> <!-- end .row -->
										</div> <!-- end .col-sm-8 -->

										<div class="col-sm-8 col-sm-offset-4 listing-hours-fields">
											<div class="row">
												<div class="col-sm-2 weekday-text">										
													<span>Thursday</span>
												</div> <!-- end .col-sm-2 -->
												<div class="col-sm-5">
													<div class="input-group">
														<span class="input-group-addon">open :</span>
														<select class="selectpicker" data-live-search="false">
															<option value="" disabled selected></option>
															<option value="1">12:00 am</option>
															<option value="2">01:00 am</option>
															<option value="3">02:00 am</option>
															<option value="4">03:00 am</option>
															<option value="4">04:00 am</option>
															<option value="4">05:00 am</option>
															<option value="4">06:00 am</option>
															<option value="4">07:00 am</option>
															<option value="4">08:00 am</option>
															<option value="4">09:00 am</option>
															<option value="4">10:00 am</option>
															<option value="4">11:00 am</option>
															<option value="4">12:00 pm</option>
															<option value="2">01:00 pm</option>
															<option value="3">02:00 pm</option>
															<option value="4">03:00 pm</option>
															<option value="4">04:00 pm</option>
															<option value="4">05:00 pm</option>
															<option value="4">06:00 pm</option>
															<option value="4">07:00 pm</option>
															<option value="4">08:00 pm</option>
															<option value="4">09:00 pm</option>
															<option value="4">10:00 pm</option>
															<option value="4">11:00 pm</option>
														</select>
													</div> <!-- end .input-group -->
												</div> <!-- end .col-sm-5 -->
												<div class="col-sm-5">
													<div class="input-group">
														<span class="input-group-addon">Close :</span>
														<select class="selectpicker" data-live-search="false">
															<option value="" disabled selected></option>
															<option value="1">12:00 am</option>
															<option value="2">01:00 am</option>
															<option value="3">02:00 am</option>
															<option value="4">03:00 am</option>
															<option value="4">04:00 am</option>
															<option value="4">05:00 am</option>
															<option value="4">06:00 am</option>
															<option value="4">07:00 am</option>
															<option value="4">08:00 am</option>
															<option value="4">09:00 am</option>
															<option value="4">10:00 am</option>
															<option value="4">11:00 am</option>
															<option value="4">12:00 pm</option>
															<option value="2">01:00 pm</option>
															<option value="3">02:00 pm</option>
															<option value="4">03:00 pm</option>
															<option value="4">04:00 pm</option>
															<option value="4">05:00 pm</option>
															<option value="4">06:00 pm</option>
															<option value="4">07:00 pm</option>
															<option value="4">08:00 pm</option>
															<option value="4">09:00 pm</option>
															<option value="4">10:00 pm</option>
															<option value="4">11:00 pm</option>
														</select>
													</div> <!-- end .input-group -->
												</div> <!-- end .col-sm-5 -->
											</div> <!-- end .row -->
										</div> <!-- end .col-sm-8 -->

										<div class="col-sm-8 col-sm-offset-4 listing-hours-fields">
											<div class="row">
												<div class="col-sm-2 weekday-text">										
													<span>Friday</span>
												</div> <!-- end .col-sm-2 -->
												<div class="col-sm-5">
													<div class="input-group">
														<span class="input-group-addon">open :</span>
														<select class="selectpicker" data-live-search="false">
															<option value="" disabled selected></option>
															<option value="1">12:00 am</option>
															<option value="2">01:00 am</option>
															<option value="3">02:00 am</option>
															<option value="4">03:00 am</option>
															<option value="4">04:00 am</option>
															<option value="4">05:00 am</option>
															<option value="4">06:00 am</option>
															<option value="4">07:00 am</option>
															<option value="4">08:00 am</option>
															<option value="4">09:00 am</option>
															<option value="4">10:00 am</option>
															<option value="4">11:00 am</option>
															<option value="4">12:00 pm</option>
															<option value="2">01:00 pm</option>
															<option value="3">02:00 pm</option>
															<option value="4">03:00 pm</option>
															<option value="4">04:00 pm</option>
															<option value="4">05:00 pm</option>
															<option value="4">06:00 pm</option>
															<option value="4">07:00 pm</option>
															<option value="4">08:00 pm</option>
															<option value="4">09:00 pm</option>
															<option value="4">10:00 pm</option>
															<option value="4">11:00 pm</option>
														</select>
													</div> <!-- end .input-group -->
												</div> <!-- end .col-sm-5 -->
												<div class="col-sm-5">
													<div class="input-group">
														<span class="input-group-addon">Close :</span>
														<select class="selectpicker" data-live-search="false">
															<option value="" disabled selected></option>
															<option value="1">12:00 am</option>
															<option value="2">01:00 am</option>
															<option value="3">02:00 am</option>
															<option value="4">03:00 am</option>
															<option value="4">04:00 am</option>
															<option value="4">05:00 am</option>
															<option value="4">06:00 am</option>
															<option value="4">07:00 am</option>
															<option value="4">08:00 am</option>
															<option value="4">09:00 am</option>
															<option value="4">10:00 am</option>
															<option value="4">11:00 am</option>
															<option value="4">12:00 pm</option>
															<option value="2">01:00 pm</option>
															<option value="3">02:00 pm</option>
															<option value="4">03:00 pm</option>
															<option value="4">04:00 pm</option>
															<option value="4">05:00 pm</option>
															<option value="4">06:00 pm</option>
															<option value="4">07:00 pm</option>
															<option value="4">08:00 pm</option>
															<option value="4">09:00 pm</option>
															<option value="4">10:00 pm</option>
															<option value="4">11:00 pm</option>
														</select>
													</div> <!-- end .input-group -->
												</div> <!-- end .col-sm-5 -->
											</div> <!-- end .row -->
										</div> <!-- end .col-sm-8 -->

										<div class="col-sm-8 col-sm-offset-4 listing-hours-fields">
											<div class="row">
												<div class="col-sm-2 weekday-text">										
													<span>Saturday</span>
												</div> <!-- end .col-sm-2 -->
												<div class="col-sm-5">
													<div class="input-group">
														<span class="input-group-addon">open :</span>
														<select class="selectpicker" data-live-search="false">
															<option value="" disabled selected></option>
															<option value="1">12:00 am</option>
															<option value="2">01:00 am</option>
															<option value="3">02:00 am</option>
															<option value="4">03:00 am</option>
															<option value="4">04:00 am</option>
															<option value="4">05:00 am</option>
															<option value="4">06:00 am</option>
															<option value="4">07:00 am</option>
															<option value="4">08:00 am</option>
															<option value="4">09:00 am</option>
															<option value="4">10:00 am</option>
															<option value="4">11:00 am</option>
															<option value="4">12:00 pm</option>
															<option value="2">01:00 pm</option>
															<option value="3">02:00 pm</option>
															<option value="4">03:00 pm</option>
															<option value="4">04:00 pm</option>
															<option value="4">05:00 pm</option>
															<option value="4">06:00 pm</option>
															<option value="4">07:00 pm</option>
															<option value="4">08:00 pm</option>
															<option value="4">09:00 pm</option>
															<option value="4">10:00 pm</option>
															<option value="4">11:00 pm</option>
														</select>
													</div> <!-- end .input-group -->
												</div> <!-- end .col-sm-5 -->
												<div class="col-sm-5">
													<div class="input-group">
														<span class="input-group-addon">Close :</span>
														<select class="selectpicker" data-live-search="false">
															<option value="" disabled selected></option>
															<option value="1">12:00 am</option>
															<option value="2">01:00 am</option>
															<option value="3">02:00 am</option>
															<option value="4">03:00 am</option>
															<option value="4">04:00 am</option>
															<option value="4">05:00 am</option>
															<option value="4">06:00 am</option>
															<option value="4">07:00 am</option>
															<option value="4">08:00 am</option>
															<option value="4">09:00 am</option>
															<option value="4">10:00 am</option>
															<option value="4">11:00 am</option>
															<option value="4">12:00 pm</option>
															<option value="2">01:00 pm</option>
															<option value="3">02:00 pm</option>
															<option value="4">03:00 pm</option>
															<option value="4">04:00 pm</option>
															<option value="4">05:00 pm</option>
															<option value="4">06:00 pm</option>
															<option value="4">07:00 pm</option>
															<option value="4">08:00 pm</option>
															<option value="4">09:00 pm</option>
															<option value="4">10:00 pm</option>
															<option value="4">11:00 pm</option>
														</select>
													</div> <!-- end .input-group -->
												</div> <!-- end .col-sm-5 -->
											</div> <!-- end .row -->
										</div> <!-- end .col-sm-8 -->

										<div class="col-sm-8 col-sm-offset-4 listing-hours-fields">
											<div class="row">
												<div class="col-sm-2 weekday-text">										
													<span>Sunday</span>
												</div> <!-- end .col-sm-2 -->
												<div class="col-sm-5">
													<div class="input-group">
														<span class="input-group-addon">open :</span>
														<select class="selectpicker" data-live-search="false">
															<option value="" disabled selected></option>
															<option value="1">12:00 am</option>
															<option value="2">01:00 am</option>
															<option value="3">02:00 am</option>
															<option value="4">03:00 am</option>
															<option value="4">04:00 am</option>
															<option value="4">05:00 am</option>
															<option value="4">06:00 am</option>
															<option value="4">07:00 am</option>
															<option value="4">08:00 am</option>
															<option value="4">09:00 am</option>
															<option value="4">10:00 am</option>
															<option value="4">11:00 am</option>
															<option value="4">12:00 pm</option>
															<option value="2">01:00 pm</option>
															<option value="3">02:00 pm</option>
															<option value="4">03:00 pm</option>
															<option value="4">04:00 pm</option>
															<option value="4">05:00 pm</option>
															<option value="4">06:00 pm</option>
															<option value="4">07:00 pm</option>
															<option value="4">08:00 pm</option>
															<option value="4">09:00 pm</option>
															<option value="4">10:00 pm</option>
															<option value="4">11:00 pm</option>
														</select>
													</div> <!-- end .input-group -->
												</div> <!-- end .col-sm-5 -->
												<div class="col-sm-5">
													<div class="input-group">
														<span class="input-group-addon">Close :</span>
														<select class="selectpicker" data-live-search="false">
															<option value="" disabled selected></option>
															<option value="1">12:00 am</option>
															<option value="2">01:00 am</option>
															<option value="3">02:00 am</option>
															<option value="4">03:00 am</option>
															<option value="4">04:00 am</option>
															<option value="4">05:00 am</option>
															<option value="4">06:00 am</option>
															<option value="4">07:00 am</option>
															<option value="4">08:00 am</option>
															<option value="4">09:00 am</option>
															<option value="4">10:00 am</option>
															<option value="4">11:00 am</option>
															<option value="4">12:00 pm</option>
															<option value="2">01:00 pm</option>
															<option value="3">02:00 pm</option>
															<option value="4">03:00 pm</option>
															<option value="4">04:00 pm</option>
															<option value="4">05:00 pm</option>
															<option value="4">06:00 pm</option>
															<option value="4">07:00 pm</option>
															<option value="4">08:00 pm</option>
															<option value="4">09:00 pm</option>
															<option value="4">10:00 pm</option>
															<option value="4">11:00 pm</option>
														</select>
													</div> <!-- end .input-group -->
												</div> <!-- end .col-sm-5 -->
											</div> <!-- end .row -->
										</div> <!-- end .col-sm-8 -->

									</div> <!-- end .listing-hours-fields -->

								</div> <!-- end .row -->

							</div> <!-- end .form-group -->
							<div class="submit"><button type="submit" class="button">Add your Listing</button></div>
						</form>
					</div> <!-- end .box -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->


@endsection
