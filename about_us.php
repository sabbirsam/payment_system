<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href=".//css/style.css">


    <!-- Required meta tags by removing it less the parameter  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

 
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
          <style>
                            body {
                  margin: 0;
                  padding: 0;
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  min-height: 100vh;
                  background: #031321;
                  /* background: #00CA79; */
                  font-family: consolas;
              }
              a
              {
                  position: relative;
                  display: inline-block;
                  padding: 15px 30px;
                  color: #2196f3;
                  text-transform: uppercase;
                  letter-spacing: 4px;
                  text-decoration: none;
                  font-size: 24px;
                  overflow: hidden;
                  transition: 0.2s;
              }
              a:hover
              {
                  color: #255784;
                  background: #2196f3;
                  box-shadow: 0 0 10px #2196f3, 0 0 40px #2196f3, 0 0 80px #2196f3;
                  transition-delay: 1s;
              }
              a span
              {
                  position: absolute;
                  display: block;
              }
              a span:nth-child(1)
              {
                  top: 0;
                  left: -100%;
                  width: 100%;
                  height: 2px;
                  background: linear-gradient(90deg,transparent,#2196f3);
              }
              a:hover span:nth-child(1)
              {
                  left: 100%;
                  transition: 1s;
              } 
              a span:nth-child(2)
              {
                  bottom: 0;
                  right: -100%;
                  width: 100%;
                  height: 2px;
                  background: linear-gradient(270deg,transparent,#2196f3);
              }
              a:hover span:nth-child(2)
              {
                  right: 100%;
                  transition: 1s;
                  transition-delay: 0.5s;
              }
              a span:nth-child(3)
              {
                  top: -100℅;
                  right: 0%;
                  width: 2px%;
                  height: 100%;
                  background: linear-gradient(180deg,transparent,#2196f3);
              }
              a:hover span:nth-child(3)
              {
                  top: 100%;
                  transition: 1s;
                  transition-delay: 0.25s;
              }
              a span:nth-child(4)
              {
                  bottom: -100℅;
                  left: 0%;
                  width: 2px%;
                  height: 100%;
                  background: linear-gradient(360deg,transparent,#2196f3);
              }
              a:hover span:nth-child(4)
              {
                  bottom: 100%;
                  transition: 1s;
                  transition-delay: 0.75s;
              }
              .button{
                margin-top:150px;
              }
              .aboutUss{
                background: #031321;
                color: #2196f3;
              }
              .about img{
                width: 200px;
                height: 200px;
                border-radius: 50%;
              }
              .name{
                /* color: black; */
                color: #FF2F71;
              }


              #footer-sec {
                background-color:#000;
                padding:20px 50px;
                color:#fff;
                font-size:12px;
            }

                #footer-sec a {
                    color:#fff;
                }
                #footer-sec a:hover,a:focus {
                    color:#fff;
                    text-decoration:none;
                }

      </style>
  </head>

  <body>
  
<!-- 
  <a href="index.php">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            BACK
        </a>
 -->


    <div class="aboutUss">
      <div class="inner">

        <h1 class="head">About Us</h1>
        <div class="border">
        </div>

        <div class="row">
          <div class="col">
            <div class="about">
              <img src="./image/p1.png" alt="">
              <div class="name">Md Sabbir Ahmed</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>

              <p>
                Md Sabbir Ahmed Student of IUBAT University .11th semester .Computer sciece and engineering
              </p>
            </div>
          </div>

          <div class="col">
            <div class="about">
              <img src="./image/p2.png" alt="">
              <div class="name">Susmita Mondol</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>

              <p>
                Susmita Mondol Student of IUBAT University ..11th semester .Computer sciece and engineering</p>
            </div>
          </div>

         
      
		  <!-- <div class="button">
            <a href="index.php" style="text-decoration:none;">Back to home</a>
          </div> -->


        </div>
      </div>
    </div>

   

    <div id="footer-sec">
       Dhaka Bank Payment System For IUBAT -University | Team-S <a href="index.php" target="_blank">Back</a>
    </div>
    

  </body>
</html>
