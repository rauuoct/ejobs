@extends('master.master')
@section('content')

	<main role="main">
	    <section class="master-head">
	        <div class="container">
	            <div class="row h-100 justify-content-center align-items-center py-4">
	                <div class="col-md-11">
	                    <div class="d-md-flex align-items-center">
	                        <div class="flex-shrink-0 text-center text-md-start">
	                            <img src="{{ URL::asset('theme/images/ejo.png') }}" class="img-fluid" alt="e-JOB Logo" width="380"/>
	                        </div>
	                        <div class="flex-grow-1 ms-3 text-center text-md-start">
	                            <img src="{{ URL::asset('theme/images/logo1.png') }}" class="ïmg-fluid" alt="e-JOB Logo" width="100"/>
	                            <img src="{{ URL::asset('theme/images/logo2.png') }}" class="ïmg-fluid" alt="e-JOB Logo" width="100"/>
	                            <div class="mast-headings mt-3">
	                                <h1>E-Job</h1>
	                                <h2>Centers <span class="ms-3 font-urdu d-md-inline-block d-block mt-3 mt-md-0">روزگارسب کے لیے</span></h2>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>
	    <section class="filter-section">
	        <div class="container">
	            <div class="row justify-content-center">
	                <div class="col-md-11">
	                    <div class="filter-box">
	                        <form method="" action="">
	                            <div class="row align-items-center">
	                                <div class="col-md-3">
	                                    <div class="filter-field">                                            
	                                      <input type="text" class="form-control" placeholder="Job or position" aria-label="Job or position" />
	                                      <div class="ps-3 field-icons">
	                                        <i class="las la-search"></i>                                               
	                                      </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-3">
	                                    <div class="filter-field">                                            
	                                      <input type="text" class="form-control" placeholder="Location" aria-label="First name" />
	                                      <div class="ps-3 field-icons">
	                                        <i class="las la-map-marker"></i>                                               
	                                      </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-3">
	                                    <div class="filter-field">                                            
	                                      <select class="form-select" id="" aria-label="Floating label select example">
	                                        <option selected>Job</option>
	                                        <option value="1">Task</option>
	                                        <option value="2">Training</option>
	                                      </select>
	                                      <div class="ps-3 field-icons">
	                                        <i class="las la-user-md"></i>                                          
	                                      </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-3 d-grid">
	                                    <button type="submit" class="btn btn-search">Search</button>
	                                </div>
	                            </div>

	                        </form>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>
	</main>

@endsection
