<!-- Modal -->
<style>
    .modal-form-style{
        width: 70% !important;
        margin-left: 15%;
    }

    /* Password Visibility Toggle Style */
    #password + .glyphicon {
        cursor: pointer;
        pointer-events: all;
    }
</style>

<div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="width: 340px;;">
      <div class="modal-content">
        <div class="modal-body">
            <!-- Default form register -->
            <form id="signupForm">
                @csrf
                <div class="form-group">
                    <center>
                        <img src="/storage/images/firststonelogog.png" style="max-height: 80px; text-center: center;" />   
                    </center> 
                </div>
                <div class="form-group text-center">
                    <div class="text-center label label-default" style="font-size: 15px;">Quick Signup</div>
                </div>
                <div class="modal-form-style">
                <center>
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="First Name" name="signup[firstname]" id="" required>
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Last Name" name="signup[lastname]" id="" required>
                    </div>
                    <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email Address" name="signup[email]" id="" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Phone Number" name="signup[phone]" id="" required>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control"placeholder="Choose Password" name="signup[password]"  id="password">
                        <i class="glyphicon glyphicon-eye-open form-control-feedback"></i>
                    </div>
                    <div class="form-group" style="background:aliceblue; padding: 9px; font-size: 10px; color: #000; font-weight: bold; ">
                     By clicking "Sign Me Up", you agree to the <a href="">Terms and Conditions</a>
                    </div>
                    <div class="form-group" id="data-msg"></div>
                </center>
                </div>
                
           
            
            <!-- Default form register -->
        </div>
        <div class="modal-footer">
                
                <div>
                    <center>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-bolt"></i> Maybe Later</button>
                    <button type="submit" class="btn btn-success"><i class="fas fa-check-square"></i> Sign Me Up</button>
                    </center>
                </div>
        </form>
        </div>
      </div>
    </div>
  </div>
     <!-- MAIN JAVASCRIPTS  -->
     <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.js"></script> -->
    
     <script type="text/javascript" src='{{ asset('/admin/js/jquery.min.js') }}'></script>
     <script type="text/javascript" src="{{ asset('/admin/js/jquery.tools.min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('/admin/js/jquery.uniform.min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('/js/ajax.js') }}"></script>
<script>
    // toggle password visibility
    $( document ).ready(function() {
        $('#password + .glyphicon').on('click', function() {
            $(this).toggleClass('glyphicon-eye-close').toggleClass('glyphicon-eye-open'); // toggle our classes for the eye icon
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
            //$('#password').togglePassword(); // activate the hideShowPassword plugin
        });
    });

    $("#signupForm").submit(function(e){
        e.preventDefault();
        submit_form("signupForm", "{{ route('signup') }}", "data-msg");
    });


   
</script>