
var app = new Vue({
  el: '#app',
  data: 
  {
    url:'http://localhost/inventario/',
    // message: 'Hello Vue!',
    successMessage: "",
    errorMessage: "",
    logDetails: {usuario: '', clave: ''},
    logUser : {name: '', user: '', password : ''},
    info : null,
  		loading: true,
  		errored : false
    
  	},

  mounted () 
  {
    axios
      .get('http://localhost/inventario/users/user/list')
      .then(response => { this.info = response.data })
      .catch(error => 
        {
          console.log(error)
          this.errored = true
      })
      .finally(() => this.loading = false)
  },

    methods:
    {
        keymonitor: function(event) 
        
        {
            if(event.key == "Enter")
            {
                app.enviar();
            }
        },

    enviar: function()
    {
       var logForm = app.formData(app.logDetails);
            axios.post(this.url+"login/comprobar", logForm)
                .then(function(response){
 
                    if(response.data.error)
                    {
                        app.errorMessage = response.data.message;
                    }
                    else
                    {
                        app.successMessage = response.data.message;
                        app.logDetails = {usuario: '', clave:''};
                        setTimeout(function()
                        {
                            window.location.href="dashboard/admin";
                        },2000);
                         
                    }
                });
        },

        users: function()
        {
          var logForm = app.formData(app.logUser);
           axios.post(this.url+"users/user/registers", logForm)
           .then(function(response)
           {
          
            if(response.data.error)
            {
                app.errorMessage = response.data.message;
            }
            else
            {
                app.successMessage = response.data.message;
                app.logUser = {name: '', user:'', password: ''};
                setTimeout(function()
                        {
                            window.location.href="users/user/list";
                        },2000);
            }

          });

        },
  
        formData(obj)
        {
          var formData = new FormData();
            for ( var key in obj ) {
                formData.append(key, obj[key]);
            } 
            return formData;
        },

        clearMessage: function()
        {
          app.errorMessage = '';
          app.successMessage = '';
      }
   }
});