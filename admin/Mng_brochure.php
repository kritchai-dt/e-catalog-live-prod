<?php include('loadSession.php'); ?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Security-Policy" content="default-src 'self' 'unsafe-inline' 'unsafe-eval' *.cdn.sdelivr.net *.fontawesome.com www.google-analytics.com www.googletagmanager.com *.w3.org cdn.jsdelivr.net unpkg.com code.jquery.com " />
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





 <body>


  <div class="wrapper">

  <div class="sidebar">
    <ul style="padding-left:0;">
      <li>
        <a href="Mng_home.php">
          <span class="icon"><i class="far fa-circle"></i></span>
          <span class="item">Home</span>
        </a>
      </li>
      <li>
        <a href="Mng_content.php">
          <span class="icon"><i class="far fa-circle"></i></span>
          <span class="item">Content</span>
        </a>
      </li>
      <li>
        <a href="Mng_video.php">
          <span class="icon"><i class="far fa-circle"></i></span>
          <span class="item">Video</span>
        </a>
      </li>
      <li>
        <a href="Mng_brochure.php">
          <span class="icon"><i class="far fa-circle"></i></span>
          <span class="item">Brochure</span>
        </a>
      </li>
      <li>
        <a href="Mng_productSheet.php">
          <span class="icon"><i class="far fa-circle"></i></span>
          <span class="item">Product Sheet</span>
        </a>
      </li>
      <li>
        <a href="Mng_document.php">
          <span class="icon"><i class="far fa-circle"></i></span>
          <span class="item">Document</span>
        </a>
      </li>
    </ul>
  </div>


  <div class="section">
    <div class="top_navbar">
      <div class="hamburger">
        <a href="#">
          <i class="fas fa-bars"></i>
        </a>
      </div>
      <div class="box-system">
        <img class="img-logo" src="../img/Coway-CI-blue.png">
        <span class="text-system"> E-catalogue Admin </span>
      </div>
      <a href="logout.php" class="btn btn-danger" style="top:0; right:15px; position:sticky;">Logout</a>
    </div>


    <div class="container" id="crudApp">


        <!-- ############################################## Brochure ############################################## -->
      <div  class="menu">
        <div class="row">
          <div class="col-lg-7">
            <h2>การจัดการข้อมูลหน้า Brochure</h2>
          </div>
          <div class="col-4 col-lg-2 text-right">
              <select class="form-control" v-model="displayFlagSearch">
                          <option disabled value="">การแสดงผล</option>
                          <option value="all" >ทั้งหมด</option>
                          <option value="Y" >แสดง</option>
                          <option value="N" >ไม่แสดง</option>
                      </select>
          </div>
          <div class="col-5 col-lg-2 text-right">
          <select class="form-control" v-model="categorySearch">
                          <option disabled value="">ประเภทผลิตภัณฑ์</option>
                          <option value="all" >ทั้งหมด</option>
                          <option value="water" >Water Purifier</option>
                          <option value="air" >Air Purifier</option>
                          <option value="chair" >Massage chair</option>
                          <option value="bidet" >Bidet / Water Softener</option>
                          <option value="Outdoor" >Outdoor</option>
                          <option value="AirCon" >Air conditioner</option>
                      </select>
          </div>
          <div class="col-3 col-lg-1 text-right">
          <input type="button" value="Search" class="btn btn-primary btn-xs w-100" @click="SearchData">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-6">
            <input type="button" class="btn btn-success btn-xs" data-bs-toggle="modal" data-bs-target="#modalBrochure"
              @click="openModel" value="เพิ่มข้อมูล" />
          </div>
        </div>


        <div class="row"> 
            <div class="col-lg-4 col-sm-6 mt-60" v-for="row in allData">
            <div class="box-brochure" :class="{ 'box-disable': row.display_flag == 'N' }" data-bs-toggle="modal" data-bs-target="#modalBrochure" @click="fetchData(row.id)">
                <button type="button" name="delete" class="btn btn-danger btn-xs delete" @click="deleteData(row.id)">X</button>
                <img class="img-brochure" :class="{ 'img-disable': row.display_flag == 'N' }" v-bind:src="row.img_src" alt="" >
                    <div class="box-text-brochure">
                        <p class="text-code">{{ row.product_code }}</p>
                        <h3 class="text-brochure">{{ row.product_name }}</h3>
                        <a class="text-file" v-bind:href="row.file_src" target="_blank"><i class="fas fa-file-pdf"> </i> {{ row.file_src.substr(7) }} </a>
                    </div>
                </div>
            </div>    
        </div>

 

         
        <div v-if="modalBrochure" id="modalBrochure" class="modal fade" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">{{ dynamicTitle }}</h4>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" @click="modalBrochure=false"></button> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" @click="closeModal"></button>
              </div>
              <div class="modal-body">
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label font-20">Product Code</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" v-model="product_code"  />
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label font-20">Product Name</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" v-model="product_name"  />
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label font-20">Category</label>
                  <div class="col-sm-9">
                      <select class="form-control" v-model="category">
                          <option disabled value="">Please select type product</option>
                          <option value="water" >Water Purifier</option>
                          <option value="air" >Air Purifier</option>
                          <option value="chair" >Massage chair</option>
                          <option value="bidet" >Bidet / Water Softener</option>
                          <option value="Outdoor" >Outdoor</option>
                          <option value="AirCon" >Air conditioner</option>
                          
                      </select>
                  </div>
                </div>

                 <div class="row mb-3">
                  <label class="col-sm-3 col-form-label font-20">Image</label>
                  <div class="col-sm-9">
                      <input type="hidden" v-model="img_src" />
                      <input type="file" class="form-control" ref="file"  />
                      <input type="button" class="btn btn-primary btn-xs mt-2" @click="uploadIMG" value="Upload Image" /> 
                      <div v-if="img_src != ''" class="text-center mt-3" > 
                          <img v-bind:src="imagePath" class='img-thumbnail' width='300'>
                      </div>
                      <div v-html="uploadedImage" align="center" style="display:none"></div>
                  </div>
                </div>



                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label font-20">File PDF</label>
                  <div class="col-sm-9">
                      <input type="hidden" v-model="file_src" />
                      <input type="file" class="form-control" ref="file2"  />
                      <input type="button" class="btn btn-primary btn-xs mt-2" @click="uploadPDF" value="Upload File PDF" /> 
                      <div v-if="file_src != ''" class="mt-3" > 
                      <a v-bind:href="filePath" target="_blank" class="text-file"><i class="fas fa-file-pdf"></i> {{filePath.substr(7) }} </a>
                      </div>
                      <div v-html="uploadedfile" align="center" style="display:none"></div>
                  </div>
                </div>


                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label font-20">Display</label>
                  <div class="col-sm-9">
                      <div class="form-check form-switch mt-2">
                          <input class="form-check-input" type="checkbox" id="checkbox" v-model="display_flag" false-value="N"  true-value="Y">
                          <label class="mt-1" v-if="display_flag === 'Y'">&nbsp;&nbsp;แสดง</label>
                          <label class="mt-1" v-else >&nbsp;&nbsp;ไม่แสดง</label>
                      </div>
                  </div>
                </div>
                <br>
                <div class="modal-footer">
                  <input type="hidden" v-model="hiddenId" />
                  <input type="button" class="btn btn-success btn-xs" v-model="actionButton" @click="submitData" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      


    </div>
  </div>

  </div>








 </body>
</html>


<script type="text/javascript">

$(document).ready(function () {
  $("div.hamburger").click(function () {
    $("body").toggleClass("active");
  });

  if ($(window).width() < 600) {
    $("body").addClass("active");
  }
  

}); 
</script>



<script>

let app = new Vue({
 el:'#crudApp',
 data:{
  allData:'',  
  modalBrochure:false,
  hiddenId: null,
  actionButton:'Insert',
  dynamicTitle:'Add Brochure',
  file:'',
  filePDF:'',
  uploadedFile:'',
  uploadedImage:'',
  categorySearch : '',
  displayFlagSearch : ''
 },
 methods:{
  fetchAllData(){
   axios.post('action.php', {
    action:'fetchallBrochure'
   }).then(res => {
    app.allData = res.data;
   });
  },
  SearchData(){
    axios.post('action.php', {
      
    categorySearch:app.categorySearch, 
    displayFlagSearch:app.displayFlagSearch,  
    hiddenSearch:'B',  
    action:'search'
   }).then(res => {
    app.allData = res.data;
   });
  }, 
  openModel(){
   app.product_name = '';
   app.product_code = '';
   app.img_src = '';
   app.file_src = '';
   app.category = '';
   app.display_flag = 'Y';
   app.actionButton = "Insert";
   app.dynamicTitle = "Add Brochure";
   app.modalBrochure = true;
  },
  closeModal(){
    app.img_src = '';
    app.file_src = '';
    app.modalBrochure = false;
    window.location.reload(); 
  },

  
  uploadIMG(){
      app.file = app.$refs.file.files[0];
      var formData = new FormData();
      formData.append('file', app.file);
      axios.post('upload.php', formData, {
        header:{
        'Content-Type' : 'multipart/form-data'
        }
      }).then(function(response){
        if(response.data.image == '')
        {
        app.uploadedImage = '';
        }
        else
        {
        var image_html = "<img src='../"+response.data.image+"' class='img-thumbnail' width='200' />";
        app.uploadedImage = image_html;
        app.$refs.file.value = '';
        }
        app.img_src = response.data.image;
      });
    },

  
  
  uploadPDF(){
    app.file2 = app.$refs.file2.files[0];
      var formData = new FormData();
      formData.append('file', app.file2);
      axios.post('uploadPDF.php', formData, {
      header:{
        'Content-Type' : 'multipart/form-data'
      }
      }).then(function(response){
      if(response.data.image == '')
      {
        app.uploadedImage = '';
      }
      else
      {
        var image_html = "<img src='../"+response.data.image+"' class='img-thumbnail' width='200' />";
        app.uploadedImage = image_html;
        app.$refs.file2.value = '';
      }
      app.file_src = response.data.image;
      });
  },


  submitData(){
   if(app.product_name != '' && app.product_code != '' && app.category != '' && app.display_flag != '' && app.img_src != '' && app.file_src != '') {
    if(app.actionButton == 'Insert')
    {
      axios.post('action.php', {
      action:'insertBrochure',
      ProductName:app.product_name, 
      ProductCode:app.product_code, 
      Image:app.img_src,
      FileSrc:app.file_src,
      Category:app.category,
      DisplayFlag:app.display_flag, 
     }).then(function(response){
      app.modalBrochure = false;
      app.fetchAllData();
      app.product_name = '';
      app.img_src = '';
      app.file_src = '';
      app.category = '';
      app.display_flag = '';
      alert(response.data.message);
      window.location.reload(); 
     });
    }
    if(app.actionButton == 'Update')
    {
     axios.post('action.php', {
      action:'updateBrochure',
      ProductName:app.product_name, 
      ProductCode:app.product_code, 
      Image:app.img_src,
      FileSrc:app.file_src,
      Category:app.category,
      DisplayFlag:app.display_flag,
      hiddenId : app.hiddenId, 
     }).then(res => {
      app.modalBrochure = false;
      app.fetchAllData();
      app.product_name = '';
      app.product_code = '';
      app.img_src = '';
      app.file_src = '';
      app.category = '';
      app.display_flag = '';
      app.hiddenId = '';
      var image_html = "<img src=../'"+response.data.image+"' class='img-thumbnail' width='200' />";
      alert(res.data.message)
      window.location.reload();
     });
    } window.location.reload();
   } else {
    alert("Fill All Field");
   }
  },
  fetchData(id){
   axios.post('action.php', {
    action:'fetchSingleBrochure',
    id:id
   }).then(res => {
    app.product_name = res.data.product_name;
    app.product_code = res.data.product_code;
    app.file_src = res.data.file_src;
    app.img_src = res.data.img_src;
    app.category = res.data.category;
    app.display_flag = res.data.display_flag;
    app.hiddenId = res.data.id;
    app.modalBrochure = true;
    app.actionButton = 'Update';
    app.dynamicTitle = 'Edit Brochure';
   });
  },
  deleteData(id){
    modalBrochure = false;
   if(confirm("Are you sure you want to remove this data?"))
   {
    axios.post('action.php', {
     action:'deleteBrochure',
     id:id
    }).then(res => {
     app.fetchAllData();
     alert(res.data.message);
    });
   }
   window.location.reload(); 
  }
 },
 created(){
  this.fetchAllData(); 
 },
 computed: {
  imagePath() { 
     return app.img_src ;
  },
  filePath() { 
     return app.file_src ;
  }
}

});
</script>
