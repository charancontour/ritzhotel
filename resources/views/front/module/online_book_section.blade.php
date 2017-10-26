<section class="online-book-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="section-title-area section-title-one text-center">
              <div class="title-box">
                <div class="title-box-inner tb">
                  <div class="tb-cell">
                    <h3 class="section-name">Search<span>Room</span></h3><i class="fa fa-angle-down"></i>
                  </div>
                </div>
              </div><!--/.site-header-->
              <h2 class="section-title"><span>For rates &amp;</span><span>Availability</span></h2><!--/.section-title-->
              <p class="section-title-dec">Simply fill in the required fields and then click on check availability button then you'll redirect to available rooms and suites to book online.</p>
            </div><!--/.section-title-area-->
          </div><!--/.col-md-12-->
        </div><!--/.row-->
        <div class="row">
          <div class="col-md-12">
            <form action="{{ url('check-availability')}}" method="get" class="online-book-form">
              <div class="row">
                <div class="col-md-3 padding-left">
                  <label class="text-uppercase">Check-in Date</label>
                  <div class="input box-radius"><i class="fa fa-calendar"></i>
                    <input type="text" name="arrival" id="date-arrival" placeholder="Check-in Date" class=" form-controller" required>
                  </div><!--/.input-->
                </div><!--/.col-md-3-->
                <div class="col-md-3 padding-left">
                  <label class="text-uppercase">Check-out Date</label>
                  <div class="input box-radius"><i class="fa fa-calendar"></i>
                    <input type="text" name="departure" id="date-departure" placeholder="Check-out Date" class=" form-controller" required>
                  </div><!--/.input-->
                </div><!--/.col-md-3-->
                <div class="col-md-2 padding-left">
                  <label class="text-uppercase">room</label>
                  <div class="input box-radius"><i class="fa fa-caret-down"></i>
                    <select name="room">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                    </select>
                  </div><!--/.input-->
                </div><!--/.col-md-2-->
                <div class="col-md-2 padding-left">
                  <label class="text-uppercase">Adult</label>
                  <div class="input box-radius"><i class="fa fa-caret-down"></i>
                    <select name="adult">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                    </select>
                  </div><!--/.input-->
                </div><!--/.col-md-2-->
                <div class="col-md-2 padding-left">
                  <label class="text-uppercase">children</label>
                  <div class="input box-radius"><i class="fa fa-caret-down"></i>
                    <select name="childrens">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                    </select>
                  </div><!--/.input-->
                </div><!--/.col-md-2-->
              </div><!--/.row-->  
              <div class="row">
                <div class="col-md-12 text-center"><button class="btn btn-default">Check Availability</button><!--/.btn--></div><!--/.col-md-12-->
              </div><!--/.row-->
            </form><!--/.online-book-form-->
          </div><!--/.col-md-12-->
        </div><!--/.row-->
      </div><!--/.container-->
    </section><!--/.online-book-section-->
    <script type="text/javascript">
    window.onload = function(){
        jQuery('#date-arrival').pignoseCalendar({
          buttons: true,
          minDate: new Date(),
          select: function(date, context) {
          },
          apply: function(date, context) {
            console.log(date);
          }
        });
        jQuery('#date-departure').pignoseCalendar({
          buttons: true,
          minDate: new Date(),
          select: function(dates, context) {
          },
          apply: function(date, context) {
            if(new Date(jQuery('#date-arrival').val()) >= new Date(date)){
              jQuery('#date-departure').val('');
              alert('Please select departure date bigger than arrival date.');
            }
          }
        });
      }
    </script>