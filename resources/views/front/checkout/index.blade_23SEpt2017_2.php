@extends('front/templateFront')

@section('content')
<div class="room-single-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-full-width">
            <div class="section-title-area text-center">
              <h2 class="section-title">Checkout</h2>
              <p class="section-title-dec">Review your booking and pay.</p>
            </div><!--/.section-title-area-->
          </div><!--/.col-md-8-->
        </div><!--/.row-->
        
        <div class="row">
          <div class="col-md-12 room-single-content">
            <div class="single-room list mobile-extend">
            
                
            <ul>
                <li>Check-in: <span class="text-black"><b><?= $cart['arrival'] ?></b></span></li>
                <li>Check-out: <span class="text-black"><b><?= $cart['departure'] ?></b></span></li>
            </ul>
            
            <div class="table-responsive margin-top">
                                

                                <table class="table cart-table">
                                    <thead>
                                        <tr>
                                            <th class="table-title">Types</th>
                                            <th class="table-title">Room Code</th>
                                            <th class="table-title">Unit Price / night (nett)</th>
                                            <th class="table-title">Quantity</th>
                                            <th class="table-title">SubTotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    // cart info
                                    $total_amount = 0;
                                    foreach ($cart['product'] as $key => $value) {
                                        $total_amount += $value['sale_price']*$value['qty'];
                                     ?>
                                        <tr>
                                            <td class="item-name-col">
                                                
                                                <figure>
                                                <a href="#room-details"><img src="public/admin/products/medium/<?= $value['thumbnail_image_1'] ?>" alt="Deluxe Room" class="img-responsive"></a></figure>
                                                <header class="item-name">
                                                    <a href="{{url('rooms-suites/show')}}/<?= $value['product_id'] ?>" target="_blank"><?= $value['type'] ?></a>                                           
                                                </header>
                                                <ul>
                                                  <li><i class="fa fa-bed"></i> <b>BED:</b> <?= $value['bed'] ?> </li>
                                                  <li><i class="fa fa-user"></i> <b>GUEST:</b> <?= $value['guest'] ?></li>
                                                  <li><i class="fa fa-cutlery"></i> <b>MEAL:</b> <?= $value['meal'] ?></li>
                                                </ul> 
                                            </td>
                                            <td class="item-price-col"><?= $value['room_code'] ?></td>
                                            <td class="item-price-col"><span class="item-price-special">RM <?= $value['sale_price'] ?>.<span class="sub-price">00</span></span></td>
                                            <td><?= $value['qty'] ?></td>
                                            <td class="item-total-col"><span class="item-price-special">RM <?= $value['sale_price']*$value['qty'] ?>.<span class="sub-price">00</span></span> 
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div><!-- end table responsive -->
                            
            </div>
         
            
            <div class="hidden-md hidden-lg text-center extend-btn"><span class="extend-icon"><i class="fa fa-angle-down"></i></span></div>
          </div><!--/.col-md-12-->
          
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
            
                <div class="room-comments-area" style="/* display: none; */"> 
                @if(!$isUserLogin)
                  <div id="respond" class="comment-respond box-radius">
                    <div class="row">
                      <div class="col-md-12">
                          
                        <h4 class="comment-reply-title">Returning Customers</h4><!--/.comment-reply-title--> 
                      </div><!--/.col-md-12-->
                    </div><!--/.row-->
                    <div class="row">
                         @if(Session::has('error'))
                         <div class="alert alert-danger" style="margin-top: 15px;">
                              		<i class="fa fa-exclamation-triangle"></i> &nbsp; {{ Session::get('error') }}
                                </div>
                         @else
                         <div class="alert alert-danger" style="margin-top: 15px;">
                             <i class="fa fa-exclamation-triangle"></i> &nbsp; <span>Please sign in or sign up to place order and payment.</span>
                         </div>
                         @endif
                  
                      <div class="col-md-12">
                        <form action="{{ url('login') }}" method="post" id="comment_form" name="commentForm">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="redirect" value="checkout">
                          <div class="row">
<!--                            <div class="col-md-12">
                                <div class="alert alert-danger">
                                    <i class="fa fa-exclamation-triangle"></i> &nbsp;<strong>We are sorry!</strong> Your account does not exist. If you don't have an account with us, please proceed to registration page.
                                </div>
                                <div class="alert alert-danger">
                                    <i class="fa fa-exclamation-triangle"></i> &nbsp;<strong>Oops!</strong> You have entered wrong User ID or Password. Please try again.
                                </div>
                                <p>If you have an account with us, please log in.</p>
                            </div>/.col-md-12-->
                            
                            <div class="col-md-6 col-sm-6 padding-right">
                              <p>
                                  <input type="text" name="email" id="email" aria-required="true" placeholder="Email *" class="form-controllar">
                              </p>
                            </div><!--/.col-md-6-->
                            <div class="col-md-6 col-sm-6 padding-right">
                              <p>
                                  <input type="password" name="password" id="email" aria-required="true" placeholder="Password *" class="form-controllar">
                              </p>
                            </div><!--/.col-md-6-->
                            
                            <div class="pull-left">
                                <button type="submit" class="btn btn-default">Continue</button>
                            </div>
                            
                            <div class="pull-right">
                                <a href="{{ url('create_account') }}" class="btn btn-default">Create an Account</a>
                            </div>
                            
                          </div><!--/.row-->
                          
                          
                        </form><!--/#comment_form-->
                        
                        <div class="margin-top">
                            <a href="#">Forgot Password?</a>
                        </div>
                        
                      </div><!--/.col-md-12-->
                      
                    </div><!--/.row-->
                  </div><!--/.comment-respond--> 
                  @endif
                </div>
                
            </div><!--/.col-md-6-->
            
                            
                            <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
                                
                                <table class="table total-table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td class="total-table-title"><span class="alignleft">Subtotal</span></td>
                                            <td class="amount"><span class="alignright">RM <?= $total_amount ?><span class="sub-price">.00</span></span></td>
                                        </tr>
                                        <tr>
                                            <td class="total-table-title text-danger"><span class="alignleft">Discount <span class="text-12px"></span></span> </td>
                                            <?php
                                            $discount_price = floor($discount);
                                             ?>
                                            <td class="amount text-danger"><span class="alignright">- RM <?= $discount_price ?><span class="sub-price">.00</span></span></td>
                                        </tr>
                                        <tr>
                                            <td class="total-table-title"><span class="alignleft">GST (6%)</span></td>
                                            <td class="amount"><span class="alignright">RM 0<span class="sub-price">.00</span></span></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td><span class="alignleft">Total</span></td>
                                            <td class="amount-total"><span class="alignright">RM <?= $total_amount-$discount_price ?><span class="sub-price">.00</span></span></td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <div class="margin-top"></div>
                                <strong>Please select the payment option and proceed.</strong>
                                <div class="input-group custom-checkbox">
                                     <input type="checkbox"> <span class="checbox-container"></span> PayPal
                                     <img src="images/checkout/img_payment.png" alt="PayPal">
                                </div>
                                <hr>
                                <div class="pull-right">
                                    <a href="{{route('addmoney.paypal')}}" id="toggle_anchor" class="btn btn-default">Place order &amp; Pay</a>  
                                </div>
                                
  
                            </div>
                        </div><!--/.row-->
        
        <div class="row">
            
            <div class="col-md-12">
            
                <div class="single-room list mobile-extend ">
                  <div class="room-info">
                    
                    <div class="room-description clearfix">
    
                    <h4 class="margin-top">Terms and Conditions</h4>
                                    
                    <ul class="list-group-item">
                        <li>- All rates listed are Nett rates inclusive of 10% service charge and 6% government tax.</li>
                        <li>- All rates quoted include breakfast.</li>
                        <li>- Check-in: 3:00 pm.</li>
                        <li>- Check-out: 12:00 pm.</li>
                        <li>- Rates are subject to change without prior notice.</li>
                    </ul>
                    <h4 class="margin-top">Cancellation Policy</h4>
                    <p>One night's room charge shall be levied on guaranteed reservations, in the event of "no show" or if cancelled within/less than 48 hours before the day of arrival. Please cancel online or contact us at (05) 242-7777.</p>  
                    <p>For bookings made less than 2 working days before arrival date, the hotel reserves the right to charge your credit card upon confirmation.</p>
                    <p>Cancellation policy for festive/peak season will supercede those stated here. Customers are deemed to have understood and agreed to the above before making this reservation.</p>
                    
                    </div><!--/.room-description-->
                    
                  </div><!--/.room-info-->
                </div><!--/.room-single-content-->
            </div><!--/. col-md-12-->
        </div><!--/.row-->
        
      </div><!--/.container-->
    </div>
 @if(!$isUserLogin)
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('#toggle_anchor').attr('disabled','disabled');
        $('#toggle_anchor').on('click',function(e){
            e.preventDefault();
        });
    });

</script>
@endif
@endsection