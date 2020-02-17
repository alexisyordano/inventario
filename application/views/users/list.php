<center>
    <br/>
<div id="app">
<div v-if="loading">
				Caragando...
			</div>
<div class="col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h4>Datos de los usuarios creados</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Usuario</th>
                          <th>Operaciones</th>
                        </tr>
                      </thead>
                      
                      <tbody  v-for="user in info">
                         <tr>

                         <td>{{user.name}}</td>
                         <td>{{user.user}}</td>
                         <td><button class="btn btn-danger" v-on:click="deleteuser">Eliminar</button>
                        
                        </td>
                         
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
       </div>
</center>
       <script type="text/javascript"src="<?php echo base_url();?>/Vue/vue.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/Vue/axios.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/Vue/app.js"></script>
