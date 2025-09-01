<!DOCTYPE html>
<html lang="en">

<head>
  <title>Service | Coway E-catalogue</title>
  <meta name="title" content="Service" />
  <meta name="description" content="Service" />
  <meta name="keywords" content="Service Coway , Coway E-catalogue ,โคเวย์,เครื่องกรองน้ำโคเวย์,เครื่องกรองน้ำCoway,เครื่องฟอกอากาศโคเวย์,เครื่องฟอกอากาศCoway" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Security-Policy" content="default-src 'self' 'unsafe-inline' 'unsafe-eval' *.cdn.sdelivr.net  *.fontawesome.com www.google-analytics.com www.googletagmanager.com  cdn.jsdelivr.net unpkg.com code.jquery.com " />
  
  
  <meta property='og:title' content='Service | Coway E-catalogue'/>
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
        background-image: url("../img/bg-service.png");
    }
    .flex-section {
        display: flex;
        max-width: 1400px;
        height: auto;
        /*   padding: 1rem; */
        margin: auto;
        line-height: 1.6;
        margin-bottom: 50px;
    }
    .flex-section img {
        object-fit: cover;
        width: 100%;
        /* height: 500px; */
    }
    .text-image {
        align-items: center;
    }
    .column-right {
        flex-basis: 40%;
        margin: 1rem 1rem 1rem -10rem;
        color: #000;
        padding: 3rem;
        background-color: rgba(255, 255, 255, 0.7);
        z-index: 1;
        backdrop-filter: blur(10px);
        box-shadow: 3px 6px 15px #d0d0d0;
    }
    .column-right p {
        font-size: 24px;
        line-height: 1.2;
    }
    .column-left {
        flex-basis: 70%;
    }

  
    .text-image:nth-of-type(even) .column-left {
        order: 2;
        flex-basis: 100%;
        margin: 1rem 1rem 1rem -10rem;
        z-index: 1;
    }
    .text-image:nth-of-type(even) .column-right {
        flex-basis: 60%;
        margin: 1rem;
    } 






    @media screen and (max-width: 767px) {
        .flex-section {
            flex-direction: column;
        }
        .column-left {
            flex-basis: 50%;
            margin: 0;
        }
        .column-right {
            flex-basis: 50%;
            margin: 0.5rem 0 0;
            padding: 3rem;
        }
    }

   



    /* Extra small devices (phones, 600px and down) */
    @media only screen and (max-width: 600px) {
        .column-left{
            margin: 0 1rem;
        }
        .column-right{
            margin: 0 1rem ;
        }
        .text-image:nth-of-type(even) .column-left {
            order: inherit;
            margin: 0 1rem ;
        }
        .text-image:nth-of-type(even) .column-right {
            margin: 0 1rem ;
        }

    } 


</style>






<header id="header">
</header>


<body>

    <div class="service-content">
        <h5 class="service-content-header">Services</h5>
    </div>


 
    <br><br><br>


    <section class="flex-section text-image">
        <div class="column-left" data-aos="fade-right">
            <div id="carouselImg-1" class="carousel slide" data-ride="carousel" data-interval="10000">
                <ol class="carousel-indicators">
                    <li data-target="#carouselImg-1" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselImg-1" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active" style="background-color:#c7ccd0;">
                        <img class="d-block w-100 fade-in-img" src="../img/service1.png"  alt="Second slide">
                    </div>
                    <div class="carousel-item" style="background-color:#c7ccd0;">
                        <img class="d-block w-100 fade-in-img" src="../img/service2.png"  alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselImg-1" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselImg-1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="column-right" data-aos="zoom-in" >
            <h1>ตรวจเช็คทำความสะอาดทุก 2 เดือน</h1>
            <p>เจ้าหน้าที่โคดี้ เข้าบริการทำความสะอาดผลิตภัณฑ์อย่างละเอียดและรวดเร็ว</p>
        </div>
    </section> 


    <section class="flex-section text-image">
        <div class="column-left" data-aos="fade-right">
            <div id="carouselImg-2" class="carousel slide" data-ride="carousel" data-interval="10000">
                <ol class="carousel-indicators">
                    <li data-target="#carouselImg-2" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselImg-2" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active" style="background-color:#c7ccd0;">
                        <img class="d-block w-100 fade-in-img" src="../img/service3.png"  alt="Second slide">
                    </div>
                    <div class="carousel-item" style="background-color:#c7ccd0;">
                        <img class="d-block w-100 fade-in-img" src="../img/service4.png"  alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselImg-2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselImg-2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="column-right" data-aos="zoom-in" >
            <h1>บริการเปลี่ยนไส้กรองทุก 4 เดือน</h1>
            <!-- <p>รักษาคุณภาพและประสิทธิภาพการทำงานของเครื่องด้วยการเปลี่ยนใส้กรองอย่างสม่ำเสมอ</p> -->
            <p>ทุกๆ 4 เดือน "โคดี้" จะเข้ามาทำการเปลี่ยนใส้กรองให้กับผลิตภัณฑ์ของลูกค้า ตามระยะเวลาของแต่ละใส้กรอง เพื่อการใช้งานอย่างต่อเนื่อง</p>
        </div>
    </section> 




 

    <section class="flex-section text-image">
        <div class="column-left" data-aos="zoom-in-right">
            <img src="../img/service5.png" alt="" style="background-color:#c7ccd0;" >
        </div>
        <div class="column-right" style="flex-basis:40%;" data-aos="zoom-in">
            <h1>เปลี่ยนอะไหล่ไม่มีค่าใช้จ่ายเพิ่ม</h1>
            <!-- <p>สำหรับลูกค้าระบบ Coway care จะดูแลให้ตลอดอายุสัญญา</p> -->
            <p>ลูกค้าสามารถใช้งานได้อย่างสบายใจ หมดกังวล เรามีเจ้าหน้าที่คอยตรวจเช็คผลิตภัณฑ์ หากชิ้นส่วนไหนมีปัญหา เราเปลี่ยนให้ทันที ไม่มีค่าใช้จ่าย ไม่มีค่าบริการเพิ่มเติม</p>
        </div>
    </section>


 


 
 
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>



<footer id="footer">
</footer>


</html>