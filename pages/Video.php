<!DOCTYPE html>
<html lang="en">
<head>
  <title>Video | Coway E-catalogue</title>
  <meta name="title" content="Video" />
  <meta name="description" content="Video" />
  <meta name="keywords" content="Video Coway , Coway E-catalogue ,โคเวย์,เครื่องกรองน้ำโคเวย์,เครื่องกรองน้ำCoway,เครื่องฟอกอากาศโคเวย์,เครื่องฟอกอากาศCoway" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Security-Policy" content="default-src 'self' 'unsafe-inline' 'unsafe-eval' *.cdn.sdelivr.net *.fontawesome.com *.youtube.com www.google-analytics.com www.googletagmanager.com  cdn.jsdelivr.net unpkg.com code.jquery.com " />
  <meta property='og:title' content='Video | Coway E-catalogue'/>
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

    var tag = document.createElement("script");
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName("script")[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    var player;
    
    var CodeYT = "NZ-idJWYvOQ";

    function onYouTubeIframeAPIReady() {
      player = new YT.Player("player", {
        height: "315",
        width: "560",
        videoId: CodeYT,
        events: {
          onReady: function () {
            $(".video-thumb").click(function () {
              var $this = $(this);
              if (!$this.hasClass("active")) {
                player.loadVideoById($this.attr("data-video"));
                $this.addClass("active").siblings().removeClass("active");
              }
            });
          },
        },
      });
    }
  </script>

  <style>


    .service-content{
      background-image: url("../img/bg-video.png");
    }

    img {
      max-width: 100%;
      height: auto;
    }
    .embed-container {
      position: relative;
      padding-bottom: 56.25%;
      height: 0;
      overflow: hidden;
      max-width: 100%;
      height: auto;
    }
    .embed-container iframe,
    .embed-container object,
    .embed-container embed {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
    .video-player__playing {
      margin: 1%;
      box-shadow: 3px 4px 5px #ccc;
    }
    .video-player__thumbs {
      overflow: hidden;
    }
    .video-thumb {
      float: left;
      width: 23%;
      margin: 1%;
      position: relative;
      overflow: hidden;
      padding-bottom: 13%;
      margin-bottom: 1em;
      cursor: pointer;
      box-shadow: 3px 4px 5px #ccc;
    }
    .video-thumb.active {
      cursor: default;
    }
    .video-thumb:before,
    .video-thumb:after {
      display: block;
      position: absolute;
      transition: all 250ms ease-out;
      z-index: 1;
    }
    .video-thumb:before {
      content: "";
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(247, 148, 30, 0);
    }
    .video-thumb.active:before {
      background: rgba(0, 178, 255, 0.7);
    }
    .video-thumb:not(.active):hover:before {
      background: rgba(22, 178, 245, 0.5);
    }
    .video-thumb:after {
      content: "\f144";
      font-family: "Font Awesome 5 Free";
      top: 50%;
      left: 50%;
      margin: -0.458em 0 0 -0.5em;
      color: rgba(255, 255, 255, 0);
      font-size: 3em;
      line-height: 1;
    }

    .video-thumb.active:after {
      color: rgba(255, 255, 255, 1);
    }
    .video-thumb img {
      position: absolute;
      top: 50%;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
      left: 0;
    }

    @media only screen and (max-width: 600px) {
      .video-thumb {
        width: 48%;
        padding-bottom: 27%;
      }     
    }
    @media only screen and (min-width: 601px) and (max-width: 1020px) {
      .video-thumb {
        width: 31%;
        padding-bottom: 17%;
      }
    }



  </style>


<header id="header">
</header>




  <body>
    <div class="service-content">
      <h5 class="service-content-header">Video</h5>
    </div>
    <div class="container mt-5 mb-5" id="crudApp">
      <div class="video-player">
        <div class="video-player__playing">
          <div class="embed-container">
            <div id="player"></div>
          </div>
        </div>
        <div class="video-player__thumbs mt-5">
          <div>
            <h3 class="ml-2">วิดีโอทั้งหมด</h3>
          </div>


<!-- 
          <div data-video="NZ-idJWYvOQ" class="video-thumb active">
            <img src="https://img.youtube.com/vi/JNLU4OxB8RY/hqdefault.jpg" />
          </div>
 -->



          <div v-for="(row, index) in allData" :class="{ 'active': index === 0 }" v-bind:data-video="row.code_yt" class="video-thumb" >
            <img v-bind:src="'https://img.youtube.com/vi/' +  row.code_yt + '/hqdefault.jpg'">
          </div>


        </div>
        <div class="video-player__thumbs"></div>
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
    action:'fetchallVideo'
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
