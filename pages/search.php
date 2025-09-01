<!DOCTYPE html>
<html lang="en">

<head>
  <title>Search | Coway E-catalogue</title>
  <meta name="title" content="Search" />
  <meta name="description" content="Search" />
  <meta name="keywords" content="Coway , Coway E-catalogue ,โคเวย์,เครื่องกรองน้ำโคเวย์,เครื่องกรองน้ำCoway,เครื่องฟอกอากาศโคเวย์,เครื่องฟอกอากาศCoway" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Security-Policy" content="default-src 'self' 'unsafe-inline' 'unsafe-eval' *.cdn.sdelivr.net *.shopify.com *.fontawesome.com www.google-analytics.com www.googletagmanager.com  cdn.jsdelivr.net unpkg.com code.jquery.com " />

  
  <meta property='og:title' content='Coway E-catalogue'/>
  <meta property='og:image' content='../img/bg-url.png'/>
  <meta property='og:description' content='วัฒนธรรมใหม่ของการดื่มน้ำ แบรนด์อันดับ 1 จากเกาหลี'/>
  <meta property='og:url' content='https://ecatalog.coway.co.th'/>


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-200527398-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-200527398-1');
</script>


 

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.0.min.js"></script>

  <link rel="stylesheet" href="../fonts/stylesheet.css">
  <link rel="dns-prefetch" href="https://maps.gstatic.com">
  <link rel="shortcut icon"href="//cdn.shopify.com/s/files/1/0523/0346/2599/files/fav-icon-coway-01_32x32.png?v=1639366925" type="image/png" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

  <!-- font-awesome -->
  <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
  <link rel="stylesheet" href="../css/style.css">

   <!-- animation AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

</head>



<script>
  $(function () {
    $("#header").load("../components/header.html");
    $("#footer").load("../components/footer.html");
  });
</script>



<header id="header">
</header>


<body>



    <div class="service-content">
        <h5 class="service-content-header">Search</h5>
    </div>

    <div class="container mt-5 mb-5" id="crudApp">


      <h2>ผลิตภัณฑ์ที่ต้องการค้นหา</h2>

      <input type="text" class="form-control box-search" v-model="SearchPD"  @keyup="SearchData()"  />

      
      <h1 :class="{ 'd-none': allDataHome <= 0 }" class="text-header-search mt-5">Home</h1>
      <div class="row">
        <div class="col-md-4 col-6 mt-3" v-for="(row, index) in allDataHome" data-aos="fade-up" data-aos-duration="1000">
          <div class="panel panel-default" data-aos="fade-up" data-aos-duration="1500">
            <div class="panel-body">
              <a href="#" data-toggle="modal" data-target="#lightbox">
                <img class="img-product" v-bind:src="row.img_src" alt="...">
              </a>
            </div>
          </div> 
        </div>
      </div>


      <h1 :class="{ 'd-none': allDataBrochure <= 0 }" class="text-header-search mt-5">Brochure</h1>
      <div class="row">
        <div v-for="row in allDataBrochure"  class="col-lg-4 col-sm-6 mt-60">
          <div class="box-brochure">
            <img class="img-brochure" v-bind:src="row.img_src" alt="" >
            <div class="box-text-brochure">
              <p class="text-code">{{ row.product_code }}</p>
              <h3 class="text-brochure">{{ row.product_name }}</h3>
              <a class="bth-download" v-bind:href="row.file_src" target="_blank">Download</a>
            </div>
          </div>
        </div>
      </div>
     

      <h1 :class="{ 'd-none': allDataProductSheet <= 0 }" class="text-header-search mt-5">Product Sheet </h1>
      <div v-for="row in allDataProductSheet" class="box row" data-aos="fade-up"  data-aos-anchor-placement="top-bottom">
          <div class="col-md-6"> {{ row.product_code }} / {{ row.product_name }} </div>
            <div class="col-md-6 text-left text-md-right ">
              <a v-bind:href="row.file_src_th" target="_blank"> <i class="fas fa-download"></i> ภาษาไทย</a>     
              <a v-bind:href="row.file_src_en" target="_blank"> <i class="fas fa-download"></i> ภาษาอังกฤษ</a>    
          </div>
      </div>








      <h1 :class="{ 'd-none': allDataContent <= 0 }" class="text-header-search mt-5">Content </h1>
      <div class="row">
      <div v-for="row in allDataContent" class="col-lg-4 col-sm-4 col-xs-6 mt-5">
          <div class="panel panel-default" data-aos="fade-up" data-aos-duration="1000">
                <div class="panel-body">
                    <a href="#" data-toggle="modal" data-target="#lightbox">
                        <img v-bind:src="row.img_src" alt="...">
                    </a>
                </div>
              </div>
          </div>
      </div>

      <h1 :class="{ 'd-none': allDataDocument <= 0 }" class="text-header-search mt-5">Document </h1>
      <div v-for="row in allDataDocument" class="box row" data-aos="fade-up"  data-aos-anchor-placement="top-bottom">
          <div class="col-md-6"> {{ row.description_name }} </div>
            <div class="col-md-6 text-left text-md-right ">
              <a v-bind:href="row.file_src" target="_blank"> <i class="fas fa-download"></i> Download</a>      
          </div>
      </div>
    

      <div v-if="allDataContent == 0 && allDataHome == 0 && allDataBrochure == 0 && allDataProductSheet == 0  && allDataDocument == 0 "  class="box-nofound ">
            <i class="fas fa-search"></i>
            <br>
            <h1 class="text-red">"{{ SearchPD }}"</h1>
            <span>No results found</span>
      </div> 




    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>





<footer id="footer">
</footer>


<script>

let app = new Vue({
 el:'#crudApp',
 data:{
  allData:'',
  allDataHome:'',
  allDataBrochure:'',
  allDataProductSheet:'',
  allDataContent:'',
  allDataDocument:'',
  SearchPD:''
 },
 methods:{
  fetchAllData(){
   axios.post('action.php', {
    action:'fetchallBrochure'
   }).then(res => {
    app.allData = res.data;
   });
  },
  SearchDataHome(){
    axios.post('action.php', { 
      SearchPD:this.SearchPD,
      action:'searchDataHome'
    }).then(res => { 
     app.allDataHome = res.data; 
    });
  },
  searchDataBrochure(){
    axios.post('action.php', { 
      SearchPD:this.SearchPD,
      action:'searchDataBrochure'
    }).then(res => { 
     app.allDataBrochure = res.data; 
    });
  },
  searchDataProductSheet(){
    axios.post('action.php', { 
      SearchPD:this.SearchPD,
      action:'searchDataProductSheet'
    }).then(res => { 
     app.allDataProductSheet = res.data; 
    });
  },
  searchDataContent(){
    axios.post('action.php', { 
      SearchPD:this.SearchPD,
      action:'searchDataContent'
    }).then(res => { 
     app.allDataContent = res.data; 
    });
  },
  searchDataDocument(){
    axios.post('action.php', { 
      SearchPD:this.SearchPD,
      action:'searchDataDocument'
    }).then(res => { 
     app.allDataDocument = res.data; 
    });
  },
  SearchData(){
    this.SearchDataHome()
    this.searchDataBrochure()
    this.searchDataProductSheet()
    this.searchDataContent()
    this.searchDataDocument()
  }
 },
 created(){
  this.fetchAllData();
  this.SearchData();
 }

});
</script>


</html>