    <center>
        <br/>
        <div class="col-lg-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>Formulario de Usuarios</h4>
                    </div>
                        <div class="card-body">
                            <p>Registrar Usuario</p>
                        <div id="app">
                            <div class="alert alert-danger text-center" v-if="errorMessage">
                                <button type="button" class="close" @click="clearMessage();"><span aria-hidden="true">&times;</span></button>
                                <span class="glyphicon glyphicon-alert"></span> {{ errorMessage }}
                            </div>

                            <div class="alert alert-success text-center" v-if="successMessage">
                                <button type="button" class="close" @click="clearMessage();"><span aria-hidden="true">&times;</span></button>
                                <span class="glyphicon glyphicon-check"></span> {{ successMessage }}
                            </div>
                            <div class="form-group">
                                <label>Ingrese el Nombre de la Persona</label>
                                <input type="text"name="user" placeholder="Pedro Perez" v-model="logUser.name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Ingrese el Nombre de usuario</label>
                                <input type="text"  placeholder="Pperez" v-model="logUser.user" class="form-control">
                            </div>

                            <div class="form-group">       
                                <label>Ingrese su clave secreta</label>
                                <input type="password"  placeholder="Password" v-model="logUser.password" class="form-control">
                            </div>
                            <div class="form-group">       
                               <button v-on:click="users" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </center>

    <script type="text/javascript"src="<?php echo base_url();?>/Vue/vue.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/Vue/axios.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/Vue/app.js"></script>