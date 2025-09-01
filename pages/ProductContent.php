<!DOCTYPE html>
<html lang="en">

<head>
  <title>Content | Coway E-catalogue</title>
  <meta name="title" content="Content" />
  <meta name="description" content="Content" />
  <meta name="keywords" content="Content Coway , Coway E-catalogue ,โคเวย์,เครื่องกรองน้ำโคเวย์,เครื่องกรองน้ำCoway,เครื่องฟอกอากาศโคเวย์,เครื่องฟอกอากาศCoway" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Security-Policy" content="default-src 'self' 'unsafe-inline' 'unsafe-eval' *.cdn.sdelivr.net *.fontawesome.com www.google-analytics.com www.googletagmanager.com  cdn.jsdelivr.net unpkg.com code.jquery.com " />
  <meta property='og:title' content='Content | Coway E-catalogue'/>
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



<style>
    .service-content{
        background-image: url("../img/bg-product-content.png");
    }
</style> 



<header id="header">
</header>

<body>
    <div class="service-content">
        <h5 class="service-content-header">Product Contents</h5>
    </div>
    <div class="container mt-md-5 mb-5 " id="crudApp">
        <section class="row">
          <div v-for="row in allData" class="col-lg-4 col-sm-4 col-xs-6 mt-5">
              <div class="panel panel-default" data-aos="fade-up" data-aos-duration="1000">
                  <div class="panel-body">
                      <a href="#" data-toggle="modal" data-target="#lightbox">
                          <img v-bind:src="row.img_src" alt="..." onclick="onClick(this)">
                      </a>
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



        </section> <!-- closing section -->
    </div> <!-- closing div container -->

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
  allData:'',
  myModel:false
 },
 methods:{
  fetchAllData(){
   axios.post('action.php', {
    action:'fetchallContent'
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



<!-- Javascript for each modal containing a different pic. This code was written so that you don't have to write multiple modal divs -->
<script>
    $(document).ready(function () {
        var $lightbox = $('#lightbox');
        $('[data-target="#lightbox"]').on('click', function (event) {
            var $img = $(this).find('img'),
                src = $img.attr('src'),
                alt = $img.attr('alt'),
                css = {
                    'maxWidth': $(window).width() - 100,
                    'maxHeight': $(window).height() - 100,
                    'Width': 100 
                };
            $lightbox.find('img').attr('src', src);
            $lightbox.find('img').attr('alt', alt);
            $lightbox.find('img').css(css);
        });
        $lightbox.on('shown.bs.modal', function (e) {
            var $img = $lightbox.find('img');
            $lightbox.find('.modal-dialog').css({ 'width': $img.width() });
            $lightbox.find('.close').removeClass('hidden');
        });
    });
</script>


</html>