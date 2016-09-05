  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#form">Contact Details</a></li>
        <li class="tab col s3"><a href="#form2">Invoicing Details</a></li>
      </ul>
    </div>
    <div class="step-container z-depth-2">
     <div id="form" class="col s12 white z-depth-3">
          <div class="row">
            <div class="input-field col s6">
                {!! Form::text('name', null, ['class' => 'validate']) !!}
              <label for="name">Full Name</label>
            </div>
            <div class="input-field col s6">
                {!! Form::text('organisation', null, ['class' => 'validate']) !!}
              <label for="organisation">Organisation</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
                {!! Form::text('email', null, ['class' => 'validate']) !!}
              <label for="email">Email</label>
            </div>

            <div class="input-field col s6">
                {!! Form::text('phone', null, ['class' => 'validate']) !!}
              <label for="phone">Phone</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
                {!! Form::text('address', null, ['class' => 'validate']) !!}
              <label for="address">Address</label>
            </div>
          </div>
     </div>
     <div id="form2" class="col s12 white z-depth-3">
          <div class="row">
            <div class="input-field col s6">
                {!! Form::text('inv_name', null, ['class' => 'validate']) !!}
              <label for="inv_name">Full Name</label>
            </div>
            <div class="input-field col s6">
                {!! Form::text('inv_organisation', null, ['class' => 'validate']) !!}
              <label for="inv_organisation">Organisation</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
                {!! Form::text('inv_email', null, ['class' => 'validate']) !!}
              <label for="inv_email">Email</label>
            </div>

            <div class="input-field col s6">
                {!! Form::text('inv_phone', null, ['class' => 'validate']) !!}
              <label for="inv_phone">Phone</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
                {!! Form::text('inv_address', null, ['class' => 'validate']) !!}
              <label for="inv_address">Address</label>
            </div>
                {!! Form::submit('Add!', ['class' => 'btn waves-effect waves-light']) !!}

          </div>

     </div>
    </div>
  </div>
        
