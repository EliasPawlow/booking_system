<div class="row">

    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#form">New Facility</a></li>
      </ul>
    </div>

    <div class="step-container z-depth-2">

        <div id="form" class="col s12 white z-depth-3">

            <div class="row">
              <div class="input-field col s6">
                {!! Form::text('name', null, ['class' => 'validate']) !!}
                <label for="name">Facility Name</label>
            </div>

              <div class="input-field col s6">
                {!! Form::text('price', null, ['class' => 'validate']) !!}
                <label for="price">Default Price</label>
            </div>

        </div>

      <div class="row">
        <div class="input-field col s6">
            {!! Form::text('capacity', null, ['class' => 'validate']) !!}
            <label for="capacity">Capacity</label>
        </div>
         
      </div>
      <div class="row">
        <div class="input-field col s6">

            {!! Form::submit('Add!', ['class' => 'btn waves-effect waves-light']) !!}
        </div>
         
      </div>


        </div>
    </div>
</div>
  
        