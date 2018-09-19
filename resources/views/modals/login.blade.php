<!-- Modal -->


<div  class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="width: 400px;">
      <div class="modal-content">
        {{-- <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> --}}
        <div class="modal-body">
            <!-- Default form register -->
<form class="text-center border border-light p-5">

  <p class="h4 mb-4">Sign up</p>

  <div class="form-row mb-4">
      <div class="col">
          <!-- First name -->
          <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name">
      </div>
      <div class="col">
          <!-- Last name -->
          <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name">
      </div>
  </div>

  <!-- E-mail -->
  <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">

  <!-- Password -->
  <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
  <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
      At least 8 characters and 1 digit
  </small>

  <!-- Phone number -->
  <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
  <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
      Optional - for two step authentication
  </small>

  <!-- Newsletter -->
  <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
      <label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our newsletter</label>
  </div>

  <!-- Sign up button -->
  <button class="btn btn-info my-4 btn-block" type="submit">Sign in</button>

  <!-- Social register -->
  <p>or sign up with:</p>

  <a type="button" class="light-blue-text mx-2">
      <i class="fa fa-facebook"></i>
  </a>
  <a type="button" class="light-blue-text mx-2">
      <i class="fa fa-twitter"></i>
  </a>
  <a type="button" class="light-blue-text mx-2">
      <i class="fa fa-linkedin"></i>
  </a>
  <a type="button" class="light-blue-text mx-2">
      <i class="fa fa-github"></i>
  </a>

  <hr>

  <!-- Terms of service -->
  <p>By clicking
      <em>Sign up</em> you agree to our
      <a href="" target="_blank">terms of service</a> and
      <a href="" target="_blank">terms of service</a>. </p>

</form>
<!-- Default form register -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>