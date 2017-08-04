@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
         <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="well-block">
                        <div class="well-title">
                            
                        </div>
                        <div class="feature-block">
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">Ambitious and dedicated LL.M. candidates and legal professionals meet law schools, law firms and service providers!</h4>
                                <div class="feature-content">
                                    <p>We expect a number of US law schools. The fairs give students the opportunity to meet law school and law firm representatives as well as service providers. The seminars associated with the fairs will familiarize you with the LL.M. application process and the value of an LL.M. degree, so that you will be well prepared for your first encounter with the law schools. </p><p>This year, in addition to the fairs, to conferences and space for networking, we also provide the possibility for candidates to meet law school representatives and law firms in one-on-one interviews.</p></p>
                                </div>
                            </div><hr>
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">Experienced Staff Available</h4>
                                <div class="feature-content">
                                    <p>Aliquam sit amet mi eu libero fermentum bibendum pulvinar a turpis. Vestibulum quis feugiat risus. </p>
                                </div>
                            </div><hr>
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">Low Price & Fees</h4>
                                <div class="feature-content">
                                    <p>Praesent eu sollicitudin nunc. Cras malesuada vel nisi consequat pretium. Integer auctor elementum nulla suscipit in.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="well-block">
                        <div class="well-title">
                            <h3>Contact information</h3>
                        </div>
                        <form>
                            <!-- Form start -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="time">Address / Title</label>
                                        <select id="tittle" name="tittle" class="form-control">
                                            <option value="Mr.s">Mr.s</option>
                                            <option value="Mr.">Mr.</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Email</label>
                                        <input id="email" name="email" type="text" placeholder="Your E-Mail" class="form-control input-md">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="firstname">First Name</label>
                                        <input id="firstname" name="firstname" type="text" placeholder="Your First Name" class="form-control input-md">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="lastname">Last Name</label>
                                        <input id="lastname" name="lastname" type="text" placeholder="Your Last Name" class="form-control input-md">
                                    </div>
                                </div>
                            </div>
                            <div class="row">                                
                                <!-- Text input-->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="street">Street</label>
                                        <input id="street" name="street" type="text" placeholder=" Street" class="form-control input-md">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="nunber">Number</label>
                                        <input id="nunber" name="nunber" type="text" placeholder=" Number" class="form-control input-md">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="zipcode">Zip Code</label>
                                        <input id="zipcode" name="zipcode" type="text" placeholder=" Zip Code" class="form-control input-md">
                                    </div>
                                </div>
                            </div>
                            <div class="row">    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="city">City</label>
                                        <input id="city" name="city" type="text" placeholder="City" class="form-control input-md">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="country">Country</label>
                                        <input id="country" name="country" type="text" placeholder=" Country" class="form-control input-md">
                                    </div>
                                </div>                                                                                                
                            </div>
                            <div class="well-title">
                                <h3>Event information</h3>
                            </div>
                            <div class="feature-content">
                                <p>At which event/s will you attend to?</p>
                            </div>
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><img src="https://s3.amazonaws.com/llmfair/img/ch.png" alt="" width="5%" height="auto" > LEXPO (Zurich) – October 26, 2017</h3>
                                </div>
                                <div class="panel-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios">
                                                    October 26, 2017 (LEXPO)
                                                </label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios">
                                                    October 26, 2017 (One-on-one Interviews)
                                                </label>
                                                <a href="#" target="_blank" class="btn btn-info"><img src="https://s3.amazonaws.com/llmfair/img/pdf.png" alt="" width="30px"><h5>Download me!</h5></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><img src="https://s3.amazonaws.com/llmfair/img/de.png" alt="" width="5%" height="auto"> DAJV LL.M. Fair (Cologne)</h3>
                                </div>
                                <div class="panel-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios">
                                                    October 27, 2017 (LL.M. Seminar)
                                                </label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios">
                                                    *October 27, 2017 (One-on-one Interviews)
                                                </label>
                                                <a href="#" target="_blank" class="btn btn-info"><img src="https://s3.amazonaws.com/llmfair/img/pdf.png" alt="" width="30px"><h5>Download me!</h5></a>

                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsRadios">
                                                    October 28, 2017 (LL.M. Fair)
                                                </label>
                                            </div>
                                        </li>                                        
                                    </ul>
                                    * At the DAJV LL.M. Fair the one-on-one interviews is only for persons who has a DAJV membership permitted. (Not a member yet? Become one! <a href="http://www.dajv.de/membership.html"> http://www.dajv.de/membership.html</a>)
                                </div>
                            </div>                            

                            <!-- Select Basic -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="time">Preferred Time</label>
                                        <select id="time" name="time" class="form-control">
                                            <option value="8:00 to 9:00">8:00 to 9:00</option>
                                            <option value="9:00 to 10:00">9:00 to 10:00</option>
                                            <option value="10:00 to 1:00">10:00 to 1:00</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- Select Basic -->
                            <div class="row">       
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="appointmentfor">Appointment For</label>
                                        <select id="appointmentfor" name="appointmentfor" class="form-control">
                                            <option value="Service#1">Service#1</option>
                                            <option value="Service#2">Service#2</option>
                                            <option value="Service#3">Service#3</option>
                                            <option value="Service#4">Service#4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- Button -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button id="singlebutton" name="singlebutton" class="btn btn-default">Make An Appointment</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- form end -->
                    </div>
                </div>

            </div>
        </div>

    </div>
    
</div>
@endsection
