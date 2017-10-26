@extends('front/templateFront')

@section('content')
<div class="room-single-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-full-width">
            <div class="section-title-area text-center">
              <h2 class="section-title">Reset Password</h2>
              <p class="section-title-dec">Let's get you logged back in.</p>
            </div><!--/.section-title-area-->
          </div><!--/.col-md-8-->
        </div><!--/.row-->
        
        
        
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <form action="passwordreset" method="post" id="comment_form" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="redirect" value="dashboard" />
                <input type="hidden" name="email" value="{{ Input::get('email') }}" />
                <input type="hidden" name="code" value="{{ Input::get('code') }}" />

                <div class="room-comments-area">
                  <div id="respond" class="comment-respond box-radius">
                    <div class="row">
                      <div class="col-md-12">
                        <h4 class="comment-reply-title">Reset Your Login Password</h4><!--/.comment-reply-title--> 
                      </div><!--/.col-md-12-->
                    </div><!--/.row-->
                    <div class="row">
                      <div class="col-md-12">
                        
                          <div class="row">
                            <div class="col-md-12">
                                @if(Session::has('error'))
                                <div class="alert alert-danger">
                                    <i class="fa fa-exclamation-triangle"></i> &nbsp;<strong>We are sorry!</strong> {{ Session::get('error') }}
                                </div>
                                @endif
                                @if(Session::has('success'))
                                <div class="alert alert-success">
                                    <i class="fa fa-thumbs-up"></i> &nbsp;<strong>Success!</strong>  {{ Session::get('success') }}
                                </div>
                                @endif
                                <p>Please type in the new password below.</p>
                            </div><!--/.col-md-12-->
                            
                            <div class="col-md-6 col-sm-6 padding-right">
                              <p>
                                <input min="8" max="12" required type="password" name="password" id="password" aria-required="true" placeholder="Your New Password *" class="form-controllar">
                              </p>
                            </div><!--/.col-md-6-->
                            <div class="col-md-6 col-sm-6 padding-right">
                              <p>
                                <input min="8" max="12" required type="password" name="passconf" id="passconf" aria-required="true" placeholder="Verify New Password *" class="form-controllar">
                              </p>
                            </div><!--/.col-md-6-->
                            
                            <div class="col-md-12">
                              <p><div class="alert alert-info"><i class="fa fa-info-circle"></i> &nbsp;<strong>Note:</strong> Password length should be between 8-12 characters with combination of alphabet letters, digits and special characters (eg. *@$!+%~)</div></p>
                               
                            </div><!--/.col-md-12-->
                            
                            
                          </div><!--/.row-->
                          
                          
                        
                        
                                                
                      </div><!--/.col-md-12--> 
                    </div><!--/.row-->
                  </div><!--/.comment-respond--> 
                  
  
                </div>
                
                <div class="clearfix margin-top"></div>
                <div class="text-center">
                    <input type="submit" class="btn btn-default" value="Reset Password">
                </div>
                </form><!--/#comment_form-->
            </div><!--/.col-md-6-->
              
                            
        </div><!--/.row-->
        
         <br/>
        
      </div><!--/.container-->
    </div><!--/.room-grid-area-->
    
    
    <section data-jarallax="{&quot;speed&quot;: 0.3, &quot;imgSrc&quot;: &quot;images/parallax/bg_hotel_services.jpg&quot; }" class="hotel-service-section jarallax">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
                <div class="section-title-area text-center">
                    <h2 class="section-title">Hotel Services</h2>
                    <p class="section-title-dec">For your comfort and convenience.</p>
                </div><!--/.section-title-area-->
            </div><!--/.col-md-12-->
          </div><!--/.row-->
          <div class="row">
            <div class="col-md-12">
              <div class="aravira-hospitality owl-carousel">
                <div class="item">
                  <div class="single-hospitality box-radius">
                    <div class="icon">
                      <img src="images/hotel_services/icon_tour_desk.png" alt="Tour Desk">
                    </div>
                    <h5>Tour Desk</h5>
                  </div><!--/.single-hospitality-->
                </div><!--/.item-->
                <div class="item">
                  <div class="single-hospitality box-radius">
                    <div class="icon">
                      <img src="images/hotel_services/icon_reception.png" alt="24 hour Reception">
                    </div>
                    <h5>24 hour Reception</h5>
                  </div><!--/.single-hospitality-->
                </div><!--/.item-->
                <div class="item">
                  <div class="single-hospitality box-radius">
                    <div class="icon">
                        <img src="images/hotel_services/icon_wifi.png" alt="WiFi">
                    </div>
                    <h5>WiFi Internet</h5>
                  </div><!--/.single-hospitality-->
                </div><!--/.item-->
                <div class="item">
                  <div class="single-hospitality box-radius">
                    <div class="icon">
                        <img src="images/hotel_services/icon_elevator.png" alt="Lift/Elevator">
                    </div>
                    <h5>Lift / Elevator</h5>
                  </div><!--/.single-hospitality-->
                </div><!--/.item-->
                
                <div class="item">
                  <div class="single-hospitality box-radius">
                    <div class="icon">
                        <img src="images/hotel_services/icon_no-smoking.png" alt="Non-Smoking Room">
                    </div>
                    <h5>Non-Smoking Rooms</h5>
                  </div><!--/.single-hospitality-->
                </div><!--/.item-->
                
                <div class="item">
                  <div class="single-hospitality box-radius">
                    <div class="icon">
                        <img src="images/hotel_services/icon_laundry.png" alt="Guest Laundry">
                    </div>
                    <h3>Guest Laundry</h3>
                  </div><!--/.single-hospitality-->
                </div><!--/.item-->
                
                
              </div><!--/.end facilities-->
  
            </div><!--/.col-md-12-->
          </div><!--/.row-->
        </div><!--/.container-large-screen-->
      </div><!--/.container-fluid-->
    </section>
            
    
<?php
    // Brands & Services are done in the templateFront.blade.php
    if(isset($brands_scroller)) unset($brands_scroller);
?>

@endsection
