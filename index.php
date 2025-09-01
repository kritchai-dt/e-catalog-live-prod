<!DOCTYPE html>
<html lang="en">

<head>
  <title>Coway E-catalogue</title>
  <meta name="title" content="Home" />
	<meta name="description" content="Home" />
	<meta name="keywords" content="Coway , Coway E-catalogue ,โคเวย์,เครื่องกรองน้ำโคเวย์,เครื่องกรองน้ำCoway,เครื่องฟอกอากาศโคเวย์,เครื่องฟอกอากาศCoway" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Security-Policy" content="default-src 'self' 'unsafe-inline' 'unsafe-eval' *.cdn.sdelivr.net *.fontawesome.com www.google-analytics.com www.googletagmanager.com  cdn.jsdelivr.net unpkg.com code.jquery.com " />
  <meta property='og:title' content='Coway E-catalogue'/>
  <meta property='og:image' content='https://ecatalog.coway.co.th/img/bg-url.jpg'/>
  <meta property='og:image:alt' content='วัตนธรรมใหม่ของการดื่มน้ำ แบรนด์อันดับ 1 จากเกาหลี'/>
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
 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.0.min.js"></script>

  <link rel="stylesheet" href="../fonts/stylesheet.css">
  <link rel="icon" type="image/png" sizes="32x32" href="../fav-icon-coway-01_32x32.webp">

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



<style>
  .box-scroll {
    position: absolute;
    right: 0;
    width: 100%;
    margin-top:10%;
  }

  a {
    text-decoration: none !important;
  }


  .chevron {
    position: absolute;
    width: 65px;
    height: 8px;
    opacity: 0;
    animation: move 3s ease-out infinite;
  }

  .chevron:first-child {
    animation: move 3s ease-out 1s infinite;
  }

  .chevron:nth-child(2) {
    animation: move 3s ease-out 2s infinite;
  }

  .chevron:before,
  .chevron:after {
    content: ' ';
    position: absolute;
    top: 0;
    height: 100%;
    width: 51%;
    background: #fff;
  }

  .chevron:before {
    left: 0;
    transform: skew(0deg, 30deg);
  }

  .chevron:after {
    right: 0;
    width: 50%;
    transform: skew(0deg, -30deg);
  }

  @keyframes move {
    25% {
      opacity: 1;
    }

    33% {
      opacity: 1;
      transform: translateY(30px);
    }

    67% {
      opacity: 1;
      transform: translateY(40px);
    }

    100% {
      opacity: 0;
      transform: translateY(55px);
    }
  }

  .text {
    position: relative;
    line-height: 0.5;
    top: 75px;
    left: 7px;
    font-size: 30px;
    color: #fff;
    animation: pulse 2s linear alternate infinite;
  }

  @keyframes pulse {
    to {
      opacity: 1;
    }
  }

  .brand-story{
      height: auto;
      padding-bottom: 50px;
    }

  /* Extra small devices (phones, 600px and down) */
  @media only screen and (max-width: 600px) {
    .brand-story-detail {
      font-size: 24px;
      padding: 0 ;
    }
    .text-header{
      margin-top:0px;
    }
    .box-scroll{
      margin-top: 80%;
    }
   
  }

    /* Medium devices (landscape tablets, 768px and up) */ 
    @media only screen and (min-width: 601px) and (max-width: 1020px) {
      .brand-story-detail{
        width: 75%;
      }
      .brand-story{
        padding-bottom: 100px;
      }
      .box-scroll{
        margin-top: 50%;
      }
      .text-header{
        font-size:40px;
      }
      .text-header-2{
        font-size:100px;
      }
     
    }

</style>




<header id="header">
</header>

<body>


  <div class="wrapper ">
    <div class="container text-center" style="position:relative; top:30%">
      <div class="box-text-header">
        <h2 class="text-header">The new Culture of Drinking Water</h2>
        <h1 class="text-header-2">Coway E-Catalogue</h1>
      </div>

    
      <div class="box-scroll">
        <a href="#product&price">
          <span class="chevron"></span>
          <span class="chevron"></span>
          <span class="chevron"></span>
          <span class="text">Scroll</span>
        </a>
      </div>

    </div>
    <ul class="list-menu">
      <li class="list"><a href="/pages/product-factsheet.php">Product Sheet</a></li>
      <li class="list"><a href="/pages/brochure.php">Brochure</a></li>
      <li class="list"><a href="/pages/service.php">Service</a></li>
      <li class="list"><a href="/pages/video.php">Video</a></li>
      <li class="list"><a href="/pages/product-content.php">Content</a></li>
      <li class="list"><a href="/pages/document.php">Documents</a></li>
    </ul>



  </div>
 



  <div id="crudApp">
    <div id="product&price" class="container" style="margin: 20px auto 50px auto; text-align: center;">



    
  

      <div class="box-info-product mt-5">
        <h4>ข้อมูลผลิตภัณฑ์และราคา</h4>
        <h1>Products information & Price</h1>
      </div>
      <div class="box-white-product" data-aos="zoom-in">
        <h4>Water Purifier | เครื่องกรองน้ำ</h4>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 col-6 mt-3 " v-for="row in allDataWater" data-aos="fade-up" data-aos-duration="1000">
          <div class="panel panel-default" data-aos="fade-up" data-aos-duration="1500">
            <div class="panel-body">
              <a href="#" data-toggle="modal" data-target="#lightbox">
                <img class="img-product" v-bind:src="row.img_src" alt="..." onclick="onClick(this)">
              </a>
            </div>
          </div> 
        </div>
      </div>

      <div class="box-white-product" data-aos="zoom-in">
        <h4>Air Purifier | เครื่องฟอกอากาศ</h4>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 col-6 mt-3 " v-for="row in allDataAir" data-aos="fade-up" data-aos-duration="1000">
          <div class="panel panel-default" data-aos="fade-up" data-aos-duration="1500">
            <div class="panel-body">
              <a href="#" data-toggle="modal" data-target="#lightbox">
                <img class="img-product" v-bind:src="row.img_src" alt="..." onclick="onClick(this)">
              </a>
            </div>
          </div> 
      </div>
      </div>
        <div class="box-white-product" data-aos="zoom-in">
          <h4>Bidet & Water Softener | ผลิตภัณฑ์ในห้องน้ำ</h4>
        </div>
        <br>
        <div class="row">
        <div class="col-md-4 col-6 mt-3 " v-for="row in allDataBidet" data-aos="fade-up" data-aos-duration="1000">
          <div class="panel panel-default" data-aos="fade-up" data-aos-duration="1500">
            <div class="panel-body">
              <a href="#" data-toggle="modal" data-target="#lightbox">
                <img class="img-product" v-bind:src="row.img_src" alt="..." onclick="onClick(this)">
              </a>
            </div>
          </div> 
        </div>
      </div>

    
     
         <!-- Modal -->
      <div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" onclick="this.style.display='none'">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="modal-body">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true" @click="myModel=false">&times;</button>
                      <img id="img01" src="" alt="" style="width: 100%;" />
                  </div>
              </div>
          </div>
      </div>


     

    </div>




    <div class="bg-catalog">
      <div class="container-catalog pt-5">
          <div class="row pt-5">
              <div class="col-md-5 text-center">
                  <img class="book-catalog" data-aos="zoom-in-right" src="../img/book-catalog.png" alt="">
              </div>
              <div class="col-md-7 text-center">
                  <h1 class="text-catalog-header" data-aos="zoom-in">The new culture of drinking water </h1>
                  <h3 class="text-catalog-subheader" data-aos="zoom-in">วัฒนธรรมใหม่ของการดื่มน้ำ</h3>
                    <p class="text-catalog" data-aos="zoom-in">
                      ในวันนี้ เรามีความภาคภูมิใจที่ได้นำเสนอวัฒนธรรมใหม่ของการดื่มน้ำให้แก่ผู้บริโภคในประเทศไทย ได้ดื่มน้ำสะอาดไม่ขาดตอน พร้อมด้วยผลิตภัณฑ์เพื่อสุขภาพอื่นๆ
                    </p>
                    <a href="https://online.flippingbook.com/view/381967650/" data-aos="zoom-in" target="_blank" class="bth-catalog">ภาษาไทย</a> &nbsp;&nbsp; &nbsp;&nbsp; 
                    <a href="https://online.flippingbook.com/view/677157119/" data-aos="zoom-in" target="_blank" class="bth-catalog">English</a>
                    <br><br>
                    <p class="text-catalog" data-aos="zoom-in">
                      สามารถดูตารางเปรียบเทียบผลิตภัณฑ์ทั้งหมดของเราได้ที่ &nbsp;&nbsp;&nbsp; <a href="https://online.flippingbook.com/view/263501961/" target="_blank" class="bth-comparison">คลิกที่นี้</a>
                    </p>
              </div>
          </div>
          </div>

    </div>
    <div class="brand-story">
      <h5 class="brand-story-header" data-aos="zoom-in">Brand Story</h5>
      <h1 class="brand-story-title" data-aos="zoom-in">The Best Life <br>Solution Company</h1>
      <br>
      <p class="brand-story-detail" data-aos="zoom-in">
        Over the past 30 years that “Coway”,
        the water purifier and air purifier brand from South Korea, has brought
        the products with services innovation as “Subscription Model” or
        an after-service called “Coway Care” to consistently rank 1st in the South
        Korean market.
      </p>
      <br>
      <a class="list" href="/pages/band-story.php" data-aos="zoom-in"> See More </a>
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

  function onClick(element) {
    document.getElementById("img01").src = element.src; 
  }


  let app = new Vue({
  el:'#crudApp',
  data:{
    allDataWater:'',
    allDataAir:'',
    allDataBidet:'',
    myModel:false
  },
  methods:{
    fetchAllDataW(){
    axios.post('pages/action.php', {
      action:'fetchallHomeWater'
    }).then(res => {
      app.allDataWater = res.data;
    });
    },
    fetchAllDataA(){
    axios.post('pages/action.php', {
      action:'fetchallHomeAir'
    }).then(res => {
      app.allDataAir = res.data;
    });
    },
    fetchAllDataB(){
    axios.post('pages/action.php', {
      action:'fetchallHomeBidet'
    }).then(res => {
      app.allDataBidet = res.data;
    });
    },
    SearchData(){
      axios.post('pages/action.php', {
      displayFlagSearch:app.displayFlagSearch,   
      hiddenSearch:'C', 
      action:'search2'
    }).then(res => {
      app.allData = res.data;
    });
    }
  },
  created(){
    this.fetchAllDataW();
    this.fetchAllDataA();
    this.fetchAllDataB();
  }

  });
</script>




 



 


 


</html>