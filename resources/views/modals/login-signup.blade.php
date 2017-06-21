{{--modal for login begins here--}}
<div class="modal fade" id="login-modal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="modal-title">
          <h3 style="text-align:center">Login</h3>
        </div>
      </div>
      <div class="modal-body">
        <div class="login-page">
          <div class="row">
            <div class="form col-sm-offset-3 col-sm-6">
              <form class="login-form">
                <form>
                  <div class="form-group has-feedback">
                    <i class="glyphicon glyphicon-user main_color form-control-feedback left"></i>
                    <input type="text" class="form-control" placeholder="Username" />
                  </div>
                  <div class="form-group has-feedback">
                    <i class="glyphicon glyphicon-lock main_color form-control-feedback left"></i>
                    <input type="password" placeholder="Password" required class="form-control">
                  </div>
                  <input type = "checkbox" name = "remember" value = "remember me" checked>remember me<br/>
                  <div style="text-align:center;">
                    <button>login</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{--modal for login begins here--}}


  <!--modal for signup begins here-->
  <div class="modal fade" id="signup-modal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <div class="modal-title">
            <h3 style="text-align:center">Signup</h3>
          </div>
        </div>
        <div class="modal-body">
          <div class="signup-page">
            <div class="row">
          <div class = "reg-form col-sm-offset-2 col-sm-8">
            <div class="form">
                <form>
                  <div class="col-sm-6">
                    <input type="text" placeholder="FirstName" required class="form-control"/>
                  </div>
                  <div class = "col-sm-6">
                    <input type="text" placeholder="LastName"  required class="form-control"/>
                  </div>
                  <div class="col-md-12">
                    <input type="password" placeholder="email/phoneNo" required class="form-control"/>
                  </div>
                  <div class="col-md-12">
                    <input type="password" placeholder="password" required class="form-control"/>
                  </div>
                  <div class="col-md-12">
                    <input type="password" placeholder=" confirm password" required class="form-control"/>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" placeholder="Date of Birth" required class="form-control"/>
                  </div>
                  <div class = "col-sm-6">
                    <input type="text" placeholder="Gender"  required class="form-control"/>
                  </div>
                  <div style="text-align:center;">
                    <button class="">Register</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{--modal for signup ends here--}}
@yield('form-modal')
