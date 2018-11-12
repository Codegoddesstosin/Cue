@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


         <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h4 class="m-b-0 text-white">Please fill out this form</h4>


               </div>
                            <div class="card-body">

    
                                  
                        <form action="/students" method="POST">


                                    {{ csrf_field () }}
                                    <div class="form-body">
                                        <h3 class="card-title">Personal Info</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">First Name</label>
                                                    <input type="text" name="first_name" class="form-control" placeholder="">
                                                    <small class="form-control-feedback">  </small> </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Last Name</label>
                                                    <input type="text" name="Last_name" class="form-control form-control-danger" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div>
                                            </div>
                                            <!--/span-->
                                             <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Email</label>
                                                    <input type="text" name="email" class="form-control form-control-danger" placeholder="">
                                                    <small class="form-control-feedback">  </small> </div>
                                            </div>

                                             <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Nationality</label>
                                                    <input type="text" name="Nationality" class="form-control form-control-danger" placeholder="">
                                                    <small class="form-control-feedback">  </small> </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Gender</label>
                                                    <select class="form-control custom-select">
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                    <small class="form-control-feedback"> Select your gender </small> </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Date of Birth</label>
                                                    <input type="date" name="Date" class="form-control" placeholder="dd/mm/yyyy">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Blood Group</label>
                                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                        <option value="Category 1">O+</option>
                                                        <option value="Category 2">A</option>
                                                        <option value="Category 3">B</option>
                                                        <option value="Category 4">AB</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                 <div class="form-group">
                                                    <label class="control-label">Category</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio1">Day</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">Boarding</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <h3 class="box-title m-t-40">Address</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Street</label>
                                                    <input type="text" name="Address" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" name="City" class="form-control">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <input type="text" name="State" class="form-control">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Post Code</label>
                                                    <input type="text" name="Post_code" class="form-control">
                                                </div>
                                            </div>
                                            <!--/span-->
                                               <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <input type="text" name="Country" class="form-control">
                                                </div>
                                            </div>
                                            <!--/span-->

                                              <h3 class="box-title m-t-40">Guardian's Info</h3>
                                               <hr>
                                            
                                               <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Guardian's Full name</label>
                                                    <input type="text" name="Guardians_name" class="form-control">
                                                </div>
                                            </div>
                                          
                                            
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Guardian's Phonenumber</label>
                                                    <input type="text" name="Guardians_phonenumber" class="form-control">
                                                </div>
                                            </div>
                                            
                                              
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Guardian's Address</label>
                                                    <input type="text" name="Guardians_address" class="form-control">
                                                </div>
                                            </div>
                                       

                                             
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Guardian's Relationship</label>
                                                    <input type="text" name="Guardians_relationship" class="form-control">
                                                </div>
                                            </div>
                                           
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Guardian's Occupation</label>
                                                    <input type="text" name="Guardians_occupation" class="form-control">
                                                </div>
                                            </div>



                                            <h3 class="box-title m-t-40">School History</h3>
                                            <hr>
                                    
                                               <div class="col-md-10">
                                                <div class="form-group">
                                                    <label>Last school attended</label>
                                                    <input type="text" name="Last_school_attended" class="form-control">
                                                </div>

                                            </div>
                                          
                                            
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Reason for leaving last school</label>
                                                    <input type="text" name="Reason_for_leaving_last_school" class="form-control">
                                                </div>
                                            </div>
                                            
                                              
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Last class attended</label>
                                                    <input type="text" name="Last_class_attended" class="form-control">
                                                </div>
                                            </div>
                                       

                                             
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Admission Class Sought</label>
                                                    <input type="text" name="Admission_class_sought" class="form-control">
                                                </div>
                                            </div>

                                          




                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                       
                                    </div>
                                </form>

                                
                            </div>
                        </div>
                    </div>
                </div>













        </div>
    </div>
</div>
@endsection