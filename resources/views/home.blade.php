@extends('master')

@section('content')

{!! HTML::style('css/custom.css') !!}



  

    <section id="event">
     <div class="row container">
     <div class="mdl-grid">
            <div class="mdl-cell col-md-4 mdl-shadow--4dp">
              <div class="box-area" align="center">
                  <div class="box-area-icon">
                 <a href="www.google.com">{!! HTML::image('img/plus.png', 'facebook', array('class' => 'img-responsive mdl-shadow--2dp')) !!} </a>
                  </div>
                  <h3>Create Ticket</h3>
                  <div class="box-area-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</div>
              </div>
            </div>
            <div class="mdl-cell col-md-4 mdl-shadow--4dp">
              <div class="box-area" align="center">
                  <div class="box-area-icon">
                 <a href="www.google.com">{!! HTML::image('img/calendar-multiple.png', 'facebook', array('class' => 'img-responsive mdl-shadow--2dp')) !!} </a>
                 
                  </div>
                  <h3>View Event</h3>
                  <div class="box-area-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</div>
              </div>
            </div>
            <div class="mdl-cell col-md-4 mdl-shadow--4dp">
              <div class="box-area" align="center">
                  <div class="box-area-icon">
                 <a href="www.google.com"> {!! HTML::image('img/ticket.png', 'facebook', array('class' => 'img-responsive mdl-shadow--2dp')) !!} </a>
                  </div>
                  <h3>Get Ticket</h3>
                  <div class="box-area-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</div>
              </div>
            </div>
            

      </div>
      <div  class="col-md-2"></div>
      <div class="col-md-8 line"><div>
      </section>

            <!--popular event-->

      <section id="popularevent">

      <div class="row container">
      <div class="col-md-12">

      <h3 align="center">Popular Event</h3>
      
      <div class="displayPE mdl-shadow--4dp">
      <h2 align="center">

      </h2>
      <div id="PEtable">
        
     
      <table class="mdl-data-table mdl-js-data-table"  align="center">
 
  <tbody >
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Dont e-ticket</td>
      <td class="mdl-data-table__cell--non-numeric">May 21st</td>
      <td></td>
      <td class="mdl-data-table__cell--non-numeric">Devcon Yangon Myanmar</td>
       <td class="mdl-data-table__cell--non-numeric">2pm - 4pm</td>
      <td></td>
      <td class="mdl-data-table__cell--non-numeric"><a href=""><i class="material-icons">book</i></a></td>
      <td class="mdl-data-table__cell--non-numeric"><a href=""><i class="material-icons">linkvariant</i></a></td>
    </tr>
   <tr>
      <td class="mdl-data-table__cell--non-numeric">Dont e-ticket</td>
      <td class="mdl-data-table__cell--non-numeric">May 21st</td>
      <td></td>
      <td class="mdl-data-table__cell--non-numeric">Devcon Yangon Myanmar</td>
       <td class="mdl-data-table__cell--non-numeric">2pm - 4pm</td>
      <td></td>
      <td class="mdl-data-table__cell--non-numeric"><a href=""><i class="material-icons">book</i></a></td>
      <td class="mdl-data-table__cell--non-numeric"><a href=""><i class="material-icons">linkvariant</i></a></td>
    </tr>
      <tr>
      <td class="mdl-data-table__cell--non-numeric">Dont e-ticket</td>
      <td class="mdl-data-table__cell--non-numeric">May 21st</td>
      <td></td>
      <td class="mdl-data-table__cell--non-numeric">Devcon Yangon Myanmar</td>
       <td class="mdl-data-table__cell--non-numeric">2pm - 4pm</td>
      <td></td>
      <td class="mdl-data-table__cell--non-numeric"><a href=""><i class="material-icons">book</i></a></td>
      <td class="mdl-data-table__cell--non-numeric"><a href=""><i class="material-icons">linkvariant</i></a></td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Dont e-ticket</td>
      <td class="mdl-data-table__cell--non-numeric">May 21st</td>
      <td></td>
      <td class="mdl-data-table__cell--non-numeric">Devcon Yangon Myanmar</td>
       <td class="mdl-data-table__cell--non-numeric">2pm - 4pm</td>
      <td></td>
      <td class="mdl-data-table__cell--non-numeric"><a href=""><i class="material-icons">book</i></a></td>
      <td class="mdl-data-table__cell--non-numeric"><a href=""><i class="material-icons">linkvariant</i></a></td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Dont e-ticket</td>
      <td class="mdl-data-table__cell--non-numeric">May 21st</td>
      <td></td>
      <td class="mdl-data-table__cell--non-numeric">Devcon Yangon Myanmar</td>
       <td class="mdl-data-table__cell--non-numeric">2pm - 4pm</td>
      <td></td>
      <td class="mdl-data-table__cell--non-numeric"><a href=""><i class="material-icons">book</i></a></td>
      <td class="mdl-data-table__cell--non-numeric"><a href=""><i class="material-icons">linkvariant</i></a></td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Dont e-ticket</td>
      <td class="mdl-data-table__cell--non-numeric">May 21st</td>
      <td></td>
      <td class="mdl-data-table__cell--non-numeric">Devcon Yangon Myanmar</td>
       <td class="mdl-data-table__cell--non-numeric">2pm - 4pm</td>
      <td></td>
      <td class="mdl-data-table__cell--non-numeric"><a href=""><i class="material-icons">book</i></a></td>
      <td class="mdl-data-table__cell--non-numeric"><a href=""><i class="material-icons">linkvariant</i></a></td>
    </tr>
  </tbody>
</table>
 </div>
</div>
</div>
      <!--backend processes for popular event-->
      <div  class="col-md-2"></div>
      <div class="col-md-8 line"><div>

        
      </section>



  <section id="famousevent">
  <div class="row container">
  <div class="col-md-12">
  
  <h3 align="center">Famous Event</h3>

      <div id="demo">
        <div id="dayevent" class="owl-carousel mdl-shadow--4dp">
          <!--display for famous event-->
          <div class="item"><h5>1Mon</h5>
          <p>24th December</p>
          <p>12:00-2:00</p>
          <p>MICT Park</p>
          </div>
          <div class="item"><h5>2Tue</h5>
          <p>24th December</p>
          <p>12:00-2:00</p>
          <p>MICT Park</p>
          </div>
          <div class="item"><h5>3Wed</h5>
          <p>24th December</p>
          <p>12:00-2:00</p>
          <p>MICT Park</p>
          </div>
          <div class="item"><h5>4Thu</h5>
          <p>24th December</p>
          <p>12:00-2:00</p>
          <p>MICT Park</p>
          </div>
          <div class="item"><h5>5Fri</h5>
          <p>24th December</p>
          <p>12:00-2:00</p>
          <p>MICT Park</p>
          </div>
          <div class="item"><h5>6Sat</h5>
          <p>24th December</p>
          <p>12:00-2:00</p>
          <p>MICT Park</p>
          </div>
          <div class="item"><h5>7Sun</h5>
          <p>24th December</p>
          <p>12:00-2:00</p>
          <p>MICT Park</p>
          </div>
            <div class="item"><h5>1Mon</h5>
          <p>24th December</p>
          <p>12:00-2:00</p>
          <p>MICT Park</p>
          </div>
          <div class="item"><h5>2Tue</h5>
          <p>24th December</p>
          <p>12:00-2:00</p>
          <p>MICT Park</p>
          </div>
          <div class="item"><h5>3Wed</h5>
          <p>24th December</p>
          <p>12:00-2:00</p>
          <p>MICT Park</p>
          </div>
          <div class="item"><h5>4Thu</h5>
          <p>24th December</p>
          <p>12:00-2:00</p>
          <p>MICT Park</p>
          </div>
          <div class="item"><h5>5Fri</h5>
          <p>24th December</p>
          <p>12:00-2:00</p>
          <p>MICT Park</p>
          </div>
          <div class="item"><h5>6Sat</h5>
          <p>24th December</p>
          <p>12:00-2:00</p>
          <p>MICT Park</p>
          </div>
          <div class="item"><h5>7Sun</h5>
          <p>24th December</p>
          <p>12:00-2:00</p>
          <p>MICT Park</p>
          </div>
          <div class="item"><h1>15</h1></div>
          <div class="item"><h1>16</h1></div>
          <div class="item"><h1>17</h1></div>
          <div class="item"><h1>18</h1></div>
          <div class="item"><h1>19</h1></div>
          <div class="item"><h1>20</h1></div>

        </div>
    </div>

   

 
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>


    <!-- Demo -->

    


    <script>
    $(document).ready(function() {

      var owl = $("#dayevent");

      owl.owlCarousel({

        // Define custom and unlimited items depending from the width
        // If this option is set, itemsDeskop, itemsDesktopSmall, itemsTablet, itemsMobile etc. are disabled
        // For better preview, order the arrays by screen size, but it's not mandatory
        // Don't forget to include the lowest available screen size, otherwise it will take the default one for screens lower than lowest available.
        // In the example there is dimension with 0 with which cover screens between 0 and 450px
        
        itemsCustom : [
          [0, 2],
          [450, 4],
          [600, 7],
          [700, 9],
          [1000, 10],
          [1200, 12],
          [1400, 13],
          [1600, 15]
        ],
        navigation : true

      });



    });
    </script>



</div>

</div>

      <div  class="col-md-2"></div>
      <div class="col-md-8 line"><div>
      </section>
 
      <section id="eventsearch">

      <div class="row container">
      <div class="col-md-12">

      <h3 align="center">Event Search</h3>
      
    
  <form action="" class="search mdl-shadow--4dp" align="">
        

      
  <fieldset>
  
  <table class="tables">
  
  <tbody align="center">
    <tr>
     <td><label>Search by Category</label></td>
      <td><select class="mdl-textfield__input">
          <option value="">---Category</option>
          <option value="option1">option 1</option>
          <option value="option2">option 2</option>
          <option value="option3">option 3</option>
          <option value="option4">option 4</option>
          <option value="option5">option 5</option>
        </select></td>
     
      <br></br>
      <td></td>

      <td><label>Search by Country</label></td>
      <td><select class="mdl-textfield__input">
          <option value="">---Country</option>
          <option value="option1">option 1</option>
          <option value="option2">option 2</option>
          <option value="option3">option 3</option>
          <option value="option4">option 4</option>
          <option value="option5">option 5</option>
        </select></td>
     </tr>

    <tr><td></td></tr>

    <tr><td><label>Event Dates</label></td></tr>

    <tr>
      <td><label>From</label></td>
      <td><select class="mdl-textfield__input">
          <option value="">---Date</option>
          <option value="option1">option 1</option>
          <option value="option2">option 2</option>
          <option value="option3">option 3</option>
          <option value="option4">option 4</option>
          <option value="option5">option 5</option>
        </select></td>
     
      <br></br>
      <td></td>
      <td><label>To</label></td>
      <td><select class="mdl-textfield__input">
          <option value="">---Date</option>
          <option value="option1">option 1</option>
          <option value="option2">option 2</option>
          <option value="option3">option 3</option>
          <option value="option4">option 4</option>
          <option value="option5">option 5</option>
        </select></td>
    </tr>

     <tr><td><label> </label></td></tr>

    <tr>
      <td><label>Event Type</label></td>
      <td><select class="mdl-textfield__input">
          <option value="">---Date</option>
          <option value="option1">option 1</option>
          <option value="option2">option 2</option>
          <option value="option3">option 3</option>
          <option value="option4">option 4</option>
          <option value="option5">option 5</option>
        </select></td>
         <td><label></label></td>
         <td><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="sample3">
    <label class="mdl-textfield__label" for="sample3">Search By Words</label>
    </div></td>
     
    <td><button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
    <i class="material-icons">search</i>
    </button></td>
    </tr>
  
  </tbody>
</table>
    
    
        
  </fieldset>


      </form>

  <div class="search mdl-shadow--4dp" align="">

  <div class="e-result" align="center">
    
  
  <h3>Result will show Here!</h3>

  </div>

  </div>

      </div>
      </div>

      <div  class="col-md-2"></div>
      <div class="col-md-8 line"><div>
      </section>


<section id="get-ticket">
  <div class="row container">
      <div class="col-md-12">

      <h3 align="center">Get Tickets</h3>
      
    
  <form action="" class="getticket mdl-shadow--4dp" align="">

        <table class="tables" align="center">
        <tbody>
          <tr>
            <td><label>Search Event</label></td>
            <td></td>
            <br></br>
            <td><div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" type="text" id="username"/>
    <label class="mdl-textfield__label" for="username">Text Event Name Here</label>
  </div></td>
           
            <td><button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
            <i class="material-icons">search</i>
            </button></td>

          </tr>
        </tbody>
      </table>
</form>


<div class="search mdl-shadow--4dp" align="">

  <div class="e-result" align="center">
    
  
  <h3>Result will show Here!</h3>

  </div>
  
  </div>

      </div>
     </div>
 <div  class="col-md-2"></div>
      <div class="col-md-8 line"><div>
</section>
<section id="sponsership">
  


<div class="row">
<div class="col-md-12">

  <div class="mdl-cell col-md-1 mdl-shadow--2dp" id="sponser">2</div>
  <div class="mdl-cell col-md-1 mdl-shadow--2dp" id="sponser">2</div>
  <div class="mdl-cell col-md-1 mdl-shadow--2dp" id="sponser">2</div>
  <div class="mdl-cell col-md-1 mdl-shadow--2dp" id="sponser">2</div>
  <div class="mdl-cell col-md-1 mdl-shadow--2dp" id="sponser">2</div>
  <div class="mdl-cell col-md-1 mdl-shadow--2dp" id="sponser">2</div>
  <div class="mdl-cell col-md-1 mdl-shadow--2dp" id="sponser">2</div>
  <div class="mdl-cell col-md-1 mdl-shadow--2dp" id="sponser">2</div>
  <div class="mdl-cell col-md-1 mdl-shadow--2dp" id="sponser">2</div>
  <div class="mdl-cell col-md-1 mdl-shadow--2dp" id="sponser">2</div>
  <div class="mdl-cell col-md-1 mdl-shadow--2dp" id="sponser">2</div>
  


</div>
</div>
</section>

@endsection