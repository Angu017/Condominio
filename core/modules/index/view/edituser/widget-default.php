            <?php $user = UserData::getById($_GET["id"]);?>
            <div class="row">
            	<div class="col-md-12">
            	  <h1>Editar Usuario</h1>
            	  <br> 
                  <form class="col s12" method="post" id="addproduct" action="index.php?view=updateuser" role="form">


                    <div class="input-field col s6">
                      <label for="inputEmail1">Nombre*</label>
                        <input type="text" name="name" value="<?php echo $user->name;?>" id="name">
                    </div>

                    <div class="input-field col s6">
                      <label for="inputEmail1">Apellido*</label>
                        <input type="text" name="lastname" value="<?php echo $user->lastname;?>" required id="lastname" >
                    </div>

                    <div class="input-field col s6">
                      <label for="inputEmail1">Nombre de usuario*</label>
                        <input type="text" name="username" value="<?php echo $user->username;?>" required id="username" >
                    </div>

                    <div class="input-field col s6">
                      <label for="inputEmail1">Email*</label>
                        <input type="text" name="email" value="<?php echo $user->email;?>" id="email" >
                    </div>

                    <div class="input-field col s6">
                      <label for="inputEmail1">Nueva Contrase&ntilde;a</label>
                        <input type="password" name="password" id="inputEmail1" > 
                    </div>

                    <div class="input-field col s6">
                      <label for="inputEmail1">Repite Contrase&ntilde;a</label>
                        <input type="password" name="password" id="inputEmail1" > 
                    </div>

                    <div class="input-field col s6">
                      <p>
                        <input type="checkbox" id="test5" name="is_active" <?php if($user->is_active){ echo "checked";}?> />
                        <label for="test5">Esta Activo</label>
                      </p> 
                    </div>


                    <div class="input-field col s6"> 
                      <p>
                        <input type="checkbox" id="test6"  name="is_admin" <?php if($user->is_admin){ echo "checked";}?> />
                        <label for="test6">Es administrador</label>
                      </p>  
                    </div>
                    <div class="input-field col s12"> 
                      <input type="hidden" name="user_id" value="<?php echo $user->id;?>">
                        <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
                    </div>

                    <div class="input-field col s12"> 
                      <p class="alert alert-info">* Campos obligatorios</p>
                    </div>
                  </form>
              </div>
            </div>