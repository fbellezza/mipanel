<div class="login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="inicio">Admin<b>FEB</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Ingresá al Sistema</p>

     <form method="post" >

      <div class="form-group has-feedback">

        <input type="email" class="form-control" placeholder="Usuario" name="email" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" placeholder="Contraseña" name="pass" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      
      </div>

      <div class="row">
       
        <div class="col-xs-4">

          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        
        </div>

      </div>

      <?php

        $login = new ControladorUsuarios();
        $login -> ctrIngresoUsuario();
        
      ?>

    </form>

      
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
</div>