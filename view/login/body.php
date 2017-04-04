<br/>
<div class="container">
  

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Login</a></li>
    <li role="presentation"><a href="#register" aria-controls="register" role="tab" data-toggle="tab">Register</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="login">
    <br/>
      <!-- Login -->
      <form id="formLogin">
        <div class="form-group">
          <label for="loginEmail">Email address</label>
          <input type="email" class="form-control" id="loginEmail" placeholder="Email">
        </div>

        <div class="form-group">
          <label for="loginPass">Password</label>
          <input type="password" class="form-control" id="loginPass" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
      </form>
  <!-- END Login -->
    </div>
    <div role="tabpanel" class="tab-pane" id="register">
    <br/>
    <!-- Register -->
      <form class="formRegister">
        <div class="form-group">
          <label for="registerEmail">Email address</label>
          <input type="email" class="form-control" id="registerEmail" placeholder="Email">
        </div>

        <div class="form-group">
          <label for="registerName">Name</label>
          <input type="email" class="form-control" id="registerName" placeholder="Name">
        </div>

        <div class="form-group">
          <label for="registerPass">Password</label>
          <input type="password" class="form-control" id="registerPass" placeholder="Password">
        </div>

        <div class="form-group">
          <label for="registerCPass">Confirm Password</label>
          <input type="password" class="form-control" id="registerCPass" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    <!-- END Register -->

    </div>
  </div>

</div>