@extends('master')
 
@section('content')
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
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
                  <a href="www.google.com"><div class="box-area-icon">
                 {!! HTML::image('img/calendar-multiple.png', 'facebook', array('class' => 'img-responsive mdl-shadow--2dp')) !!} </a>
                 
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

<script type="text/javascript">

	$(document).ready(function() {
		
		var local = $.fullCalendar.moment('2014-05-01T12:00:00');

		$('#my-prev-button').click(function() {
   	    $('#calendar').fullCalendar('prev');
		});

		$('#my-next-button').click(function() {
        $('#calendar').fullCalendar('next');
		});

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next, today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			
			defaultView: 'month',
			editable: true,
			events: [
				{
					title: 'All Day Event',
					start: '2015-12-01'
				},
				{
					title: 'Long Event',
					start: '2015-12-07',
					end: '2015-15-10'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2015-012-09T16:00:00'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2015-12-16T16:00:00'
				},
				{
					title: 'Meeting',
					start: '2015-012-12T10:30:00',
					end: '2015-12-12T12:30:00'
				},
				{
					title: 'Lunch',
					start: '2015-12-12T12:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2015-12-13T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2015-12-28'
				}
			]
		});
		
	});

</script>   
@section('event')

@endsection

<div class="row container">
<div class="col-md-12">
<div class="calendar" id="calendar">
</div>
</div>
@endsection