
<div class="row">

  <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#form3">Booking Details</a></li>
      </ul>
  </div>

    <div class="step-container z-depth-2">

        <div id="form" class="col s12 white z-depth-3">

            <div class="row">
              <div class="input-field col s6">
                  {!! Form::select('customer_id', App\Customer::pluck('name', 'id')) !!}
                  <label for="customer_id">Customer</label>
              </div>
              <div class="input-field col s6">
                  {!! Form::select('facility_id',App\Facility::pluck('name', 'id')) !!}
                  <label for="facility">Facility</label>
              </div>
          </div>

          <div class="row">

            <div class="input-field col s6">
                {!! Form::time('time_in', null, ['class' => 'validate']) !!}
            </div>

            <div class="input-field col s6">
                {!! Form::time('time_out', null, ['class' => 'validate']) !!}
            </div>

          </div>
        <div class="row">
            <div class="input-field col s6">
                {!! Form::date('date', \Carbon\Carbon::now(), ['class'=> 'datepicker'])!!}
                <label for="date">Date</label>
            </div>
              <div class="input-field col s6">
                  {!! Form::select('frequency',['Single Event', 'Weekly Event'] , null, ['class' => 'frequency-select'])  !!}
                  <label for="frequency">Frequency</label>

              </div>
        </div>
            <div class="row show-number">
                <label for="number">Number</label>
                {!! Form::text('number', null, ['class' => 'number']) !!}
                <a class="waves-effect waves-light booking btn">test</a>
            </div>
                        

        </div>

    </div>
</div>

<div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Bookings</h4>
      <ul class="final"></ul>

    </div>
    <div class="modal-footer">
      {!! Form::submit('Add!', ['class' => 'btn waves-effect waves-light']) !!}
    </div>
  </div>
        


    <script>
      $(document).ready(function() {
    $('select').material_select();
   $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year
    format: 'yyyy-mm-dd'
  });

    function dateFunction(dates){
          $('#modal1').openModal();
        let datepicker = $('.datepicker').val();
        let date = moment(datepicker);
        let pretty = date.format('L');
        let test = date.format()

        $('.final').html('');
            $('.final').append('<input name="weeks[]" type="checkbox"  value="'+date.format("YYYY-MM-DD")+'" class="filled-in" id="'+ pretty +'" checked="checked" /> <label for="'+ pretty +'">'+ pretty +'</label>')
        
        for(var i = 0; i<$('.number').val(); i++){
            let workout =  date.add(7, 'd');
            date = workout;
            pretty = workout.format('L') 
            $('.final').append('<input name="weeks[]" type="checkbox"  value="'+workout.format("YYYY-MM-DD")+'" class="filled-in" id="'+ pretty +'" checked="checked" /> <label for="'+ pretty +'">'+ pretty +'</label>')
        }
    }   
                
    $(".frequency-select" ).change(() => {
        $('.show-number').show();
    });
        
    $('.booking').click(() => {
        dateFunction('weeks');
    })
});
    </script>
