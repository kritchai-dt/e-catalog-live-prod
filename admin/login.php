<?php
    session_start();
    if(isset($_SESSION['user'])){
        header('location:Mng_home.php');
    }
?>

<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="default-src 'self' 'unsafe-inline' 'unsafe-eval' *.cdn.sdelivr.net *.fontawesome.com www.google-analytics.com www.googletagmanager.com  cdn.jsdelivr.net unpkg.com code.jquery.com " />

  <title>Coway E-catalogue Admin</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

  <link rel="stylesheet" href="../css/styleAdmin.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link rel="stylesheet" href="../fonts/stylesheet.css">
  <link rel="icon" type="image/png" sizes="32x32" href="../fav-icon-coway-01_32x32.webp">

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.0.min.js"></script>

 </head>


 <style>

html {
  height: 100%;
}
body {
  margin:0;
  padding:0;
  background-image: url(../img/03-01.jpg); 
  background-size: cover;
  background-position: center;
  /* background: linear-gradient(#141e30, #243b55); */ 
}

.login-box {
  position: absolute;
  top: 45%;
  left: 50%;
  width: 400px;
  padding: 30px 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 24px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 24px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #45cfff;
  font-size: 20px;
}
.btn-login{
  background-color : #00a7e1;
  color:#ffffff;
  font-size : 24px;
  padding : 2px 40px;
}
.btn-login:hover{
  color:#ffffff;
  background-color : #084298;
}

.text-back , .text-back:hover {
  color:#ffffffa8;
  text-decoration: none;
  font-size : 20px
}

</style>



 




 <body>


 <div id="vueapplogin">



 



 <div class="login-box">
  <div class="text-center">
    <img src="../img/Coway-CI-blue.png" alt="" style="width:200px">
  </div>
  <form autocomplete="off">
    <div class="user-box mt-4">
       <input type="text" v-model="logDetails.username" name="" required=""  autocomplete="false" v-on:keyup="keymonitor">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" v-model="logDetails.password" name="" required=""  autoComplete="new-password" v-on:keyup="keymonitor">
      <label>Password</label>
    </div>
    <div class="text-center">
      <button type="button" name="login" class="btn btn-login btn-xs" @click="checkLogin();" data-bs-toggle="modal" data-bs-target="#exampleModal">Log In</button>
    </div>
    <div class=" mt-3">
        <a href="../pages/home.php" class="text-back"> Back to Coway E-catalouge</a>
    </div>


  </form>
</div>

  <div class="alert alert-danger text-center" v-if="errorMessage">
      <button type="button" class="close" @click="clearMessage();"><span aria-hidden="true" c>×</span></button>
      <span class="glyphicon glyphicon-alert"></span> {{ errorMessage }}
  </div>

  <div class="alert alert-success text-center" v-if="successMessage">
      <button type="button" class="close" @click="clearMessage();"><span aria-hidden="true">×</span></button>
      <span class="glyphicon glyphicon-check"></span> {{ successMessage }}
  </div>

 

 




    </div>





 </body>
</html>


<script>

var app = new Vue({
    el: '#vueapplogin',
    data:{
        successMessage: "",
        errorMessage: "",
        logDetails: {username: '', password: ''},
        action:'login'
    },
    mounted() {
    this.showModal()
    },
    methods:{
        keymonitor: function(event) {
            if(event.key == "Enter"){
                app.checkLogin();
            }
        },
        showModal() {
            this.$modal.show("errorModal")
        },
        checkLogin: function(){
            var logForm = app.toFormData(app.logDetails);
            var action = "login";
            axios.post('chkLogin.php', logForm , { action:'login'}
            ).then(function(response){
                    if(response.data.error){
                        app.errorMessage = response.data.message;
                    }
                    else{
                        app.successMessage = response.data.message;
                        app.logDetails = {username: '', password:''};
                        setTimeout(function(){
                            window.location.href="Mng_home.php";
                        },2000);
                         
                    }
                });
        },
 
        toFormData: function(obj){
            var form_data = new FormData();
            for(var key in obj){
                form_data.append(key, obj[key]);
            }
            return form_data;
        },
 
        clearMessage: function(){
            app.errorMessage = '';
            app.successMessage = '';
        }
 
    }
});
</script>
