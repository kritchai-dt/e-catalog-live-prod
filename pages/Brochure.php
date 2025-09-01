<!DOCTYPE html>
<html lang="en">

<head>
  <title>Brochure | Coway E-catalogue</title>
  <meta name="title" content="Brochure" />
	<meta name="description" content="Brochure" />
	<meta name="keywords" content="Brochure Coway , Coway E-catalogue ,โคเวย์,เครื่องกรองน้ำโคเวย์,เครื่องกรองน้ำCoway,เครื่องฟอกอากาศโคเวย์,เครื่องฟอกอากาศCoway" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Security-Policy" content="default-src 'self' 'unsafe-inline' 'unsafe-eval' *.cdn.sdelivr.net *.fontawesome.com www.google-analytics.com www.googletagmanager.com  cdn.jsdelivr.net unpkg.com code.jquery.com " />
  <meta property='og:title' content='Brochure | Coway E-catalogue'/>
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
  <link rel="icon" type="image/png" sizes="32x32" href="../fav-icon-coway-01_32x32.webp">
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
        <h5 class="service-content-header">Brochure</h5>
    </div>

    <div class="container mt-4 mb-5" id="crudApp">
      <div class="row">
        <div v-for="row in allData"  class="col-lg-4 col-sm-6 mt-60">
          <div class="box-brochure" data-aos="fade-up" data-aos-duration="1500">
            <img class="img-brochure" v-bind:src="row.img_src" alt="" >
            <div class="box-text-brochure">
              <p class="text-code">{{ row.product_code }}</p>
              <h3 class="text-brochure">{{ row.product_name }}</h3>
              <a class="bth-download" v-bind:href="row.file_src" target="_blank">Download</a>
            </div>
          </div>
        </div>
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
  allData:''
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
    displayFlagSearch:app.displayFlagSearch,   
    hiddenSearch:'C', 
    action:'search2'
   }).then(res => {
    app.allData = res.data;
   });
  }
 },
 created(){
  this.fetchAllData();
 }

});
</script>


</html>