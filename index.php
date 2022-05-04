<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Emily Llauro Portfolio | Graphic Design</title>
    <link href="css/externalcss.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <style>
    ul {
      padding-inline-start: 0;
    }
    #footerStrip {
      padding-top: 10px;
      margin-top: 10px;
    }
    #footerGrid {
      display: grid;
      grid-template-columns: 1fr 2fr 2fr 2fr;
      height: 100%;
    }
    footer li {
      list-style-type: none;
      line-height: 25px;
      color: white;
      font-size: 16px;
      font-family: arial;
    }
    .footerHeading {
      font-family: 'Josefin Sans', sans-serif;
      font-size: 20px;
    }
    figure {
      background-image: url(images/initials.png);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      height: 80px;
      width: 100px;
    }
    body {
      background-color: #F7F9F7;
    }
    nav {
      margin-bottom: 2.5vw;
    }
    #bg-white {
      background: white;
      display: block;
      margin-right: 10%;
      margin-left: 10%;
      height: auto;
      overflow: hidden;
    }

    #GD {
      color: white;
      font-family: 'Josefin Sans', sans-serif;
      font-size: 55px;
      text-align: center;
      line-height: 2px;
      margin-top: 185px;
      text-shadow: 1px 1px 6px black;
    }

    #GDport {
      color: white;
      font-family: 'Josefin Sans', sans-serif;
      font-size: 40px;
      text-align: center;
      text-shadow: 1px 1px 6px black;
    }

    #logo {
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
    .img:hover {
      opacity: 60%;
    }
    .img:active {
      opacity: 40%;
    }
    .GDgallery {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      flex-basis: auto;
      justify-content: space-between;
      align-content: center;
    }
    .gdphoto img {
      width: 100%;
    }
    .gdphoto {
      background-color: gray;
      box-sizing: border-box;
      width: 19vw;
      height: 19vw;
      overflow: hidden;
    }
    .watch {
      background-image: url(https://emilydesigns.github.io/Portfolio/images/graphic_design/watch.jpg);
      background-size: 101%;
      background-repeat: no-repeat;
      background-position: center;
      transition: opacity 0.3s;
    }
    .watch:hover {
      opacity: 0.8;
    }
    .milk {
      background-image: url(https://emilydesigns.github.io/Portfolio/images/graphic_design/milk.jpg);
      background-size: 32vw;
      background-repeat: no-repeat;
      background-position: center;
      transition: opacity 0.3s;
    }
    .milk:hover {
      opacity: 0.8;
    }
    .japan {
      background-image: url(https://emilydesigns.github.io/Portfolio/images/graphic_design/japan.jpg);
      background-size: 36vw;
      background-repeat: no-repeat;
      background-position: center;
      transition: opacity 0.3s;
    }
    .japan:hover {
      opacity: 0.8;
    }
    .smoothie {
      background-image: url(https://emilydesigns.github.io/Portfolio/images/graphic_design/smoothie.jpg);
      background-size: 36vw;
      background-repeat: no-repeat;
      background-position: center;
      transition: opacity 0.3s;
    }
    .smoothie:hover {
      opacity: 0.8;
    }
    .doubleEX {
      background-image: url(https://emilydesigns.github.io/Portfolio/images/graphic_design/doubleEX.jpg);
      background-size: 36vw;
      background-repeat: no-repeat;
      background-position: center;
      transition: opacity 0.3s;
    }
    .doubleEX:hover {
      opacity: 0.8;
    }
    .dogred {
      background-image: url(https://emilydesigns.github.io/Portfolio/images/graphic_design/dogred.gif);
      background-size: 100%;
      background-repeat: no-repeat;
      background-position: center;
      transition: opacity 0.3s;
    }
    .dogred:hover {
      opacity: 0.8;
    }
    .airbnb {
      background-image: url(https://emilydesigns.github.io/Portfolio/images/graphic_design/airbnb1.jpg);
      background-size: 29vw;
      background-repeat: no-repeat;
      background-position: center;
      transition: opacity 0.3s;
    }
    .airbnb:hover {
      opacity: 0.8;
    }
    .shoeAD {
      background-image: url(https://emilydesigns.github.io/Portfolio/images/graphic_design/shoe_ad.jpg);
      background-size: 31vw;
      background-repeat: no-repeat;
      background-position: center;
      transition: opacity 0.3s;
    }
    .shoeAD:hover {
      opacity: 0.8;
    }
    .soup {
      background-image: url(https://emilydesigns.github.io/Portfolio/images/graphic_design/soup.jpg);
      background-size: 36vw;
      background-repeat: no-repeat;
      background-position: center;
      transition: opacity 0.3s;
    }
    .soup:hover {
      opacity: 0.8;
    }
    .stars {
      background-image: url(https://emilydesigns.github.io/Portfolio/images/graphic_design/stars.png);
      background-size: 100%;
      background-repeat: no-repeat;
      background-position: center;
      transition: opacity 0.3s;
    }
    .stars:hover {
      opacity: 0.8;
    }
    .orangecat {
      background-image: url(https://emilydesigns.github.io/Portfolio/images/graphic_design/orangecat.jpg);
      background-size: 29vw;
      background-repeat: no-repeat;
      background-position: center;
      transition: opacity 0.3s;
    }
    .orangecat:hover {
      opacity: 0.8;
    }
    .catad {
      background-image: url(https://emilydesigns.github.io/Portfolio/images/graphic_design/catad.jpg);
      background-size: 29vw;
      background-repeat: no-repeat;
      background-position: center;
      transition: opacity 0.3s;
    }
    .catad:hover {
      opacity: 0.8;
    }
    .photoedit {
      background-image: url(https://emilydesigns.github.io/Portfolio/images/graphic_design/photoedit.jpg);
      background-size: 35vw;
      background-repeat: no-repeat;
      background-position: center;
      transition: opacity 0.3s;
    }
    .photoedit:hover {
      opacity: 0.8;
    }
    .catlong {
      background-image: url(https://emilydesigns.github.io/Portfolio/images/graphic_design/catlong.jpg);
      background-size: 24vw;
      background-repeat: no-repeat;
      transition: opacity 0.3s;
    }
    .catlong:hover {
      opacity: 0.8;
    }
    .foodie {
      background-image: url(https://emilydesigns.github.io/Portfolio/images/graphic_design/foodie.jpg);
      background-size: 27vw;
      background-repeat: no-repeat;
      background-position: top;
      transition: opacity 0.3s;
    }
    .foodie:hover {
      opacity: 0.8;
    }
    .coolwear {
      background-image: url(https://emilydesigns.github.io/Portfolio/images/graphic_design/coolwear.jpg);
      background-size: 24vw;
      background-repeat: no-repeat;
      background-position: top left;
      transition: opacity 0.3s;
    }
    .coolwear:hover {
      opacity: 0.8;
    }
    header {
      padding: 4%;
      margin-bottom: 2.5vw;
      height: 400px;
      position: relative;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-color: gray;
      background-image: url(images/graphic_design/japan.jpg);
    }
    h2 {
      color: #0B3954;
      font-family: 'Josefin Sans', sans-serif;
      font-size: 34px;
      text-align: center;
    }
    h3 {
      font-family: 'Josefin Sans', sans-serif;
      font-size: 25px;
      color: #0B3954;
    }
    #contactButton {
      display: flex;
      flex-direction: column;
      justify-content: space-around;
      align-items: center;
      margin-top: 60px;
      margin-bottom: 25px;
    }
    input[type=button] {
      background-color: #FF5A5F;
      border-radius: 50px;
      border: 0;
      color: white;
      font-family: 'Josefin Sans', sans-serif;
      font-size: 18px;
      padding: 13px 30px 10px 30px;
      margin-bottom: 50px;
    }
    input[type=button]:hover {
      cursor: pointer;
    }
    #contactLink:hover {
      cursor: default;
    }
    .contact {
      background-color: gray;
      display: grid;
    }

    .navItem {
      display: inline;
      box-sizing: border-box;
      position: relative;
    }
    .dropDown {
      font-size: 20px;
      position: absolute;
      width: 187px;
      background: linear-gradient(to top,#135e8a, #0B3954);
      border-radius: 0px 0px 20px 20px;
      display: block;
      padding: 10px;
      line-height: 50px;
      text-align: left;
      box-sizing: border-box;
      z-index: 1;
      left: 0;
      top: 51px;
      margin-left: 45px;
      display: none;
    }
    li {
      box-sizing: border-box;
    }
    #portnav {
      box-sizing: border-box;
    }
    nav {
      box-sizing: border-box;
    }
    .dropDown > div:hover {
      color: #FF5A5F;
    }
    .navItem.dropdownOpen .dropDown {
      display: block;
    }
    .clickDropdown:hover {
      cursor: pointer;
    }

    /*---------MEDIA QUERIES---------*/

    @media screen and (max-width: 889px) and (min-width: 481px) {
      .list {
        margin: 40px;
      }
      .dropDown {
        margin-left: 30px;
      }
    }

    @media screen and (max-width: 777px) and (min-width: 482px) {
      .list {
        margin: 30px;
      }
      .dropDown {
        margin-left: 20px;
      }
    }

    @media screen and (max-width: 702px) {
      .list {
        margin: 20px;
      }
      .dropDown {
        margin-left: 10px;
      }
    }

    @media screen and (max-width: 627px) {
      .dropDown {
        top: 30px;
        margin-left: 80px;
      }
      .list {
        margin: 30%;
        line-height: 1.7;
      }
      #GD {
        font-size: 37px;
      }
      #GDport {
        font-size: 22px;
      }
    }
    @media screen and (max-width: 675px) {
      .dropDown {
        top: 45px;
        text-align: center;
        margin-left: 0;
        width: 100%;
      }
      .navItem {
        display: inline-block;
        width: 100%;
      }
      #bg-white {
        display: block;
        margin-right: 0%;
        margin-left: 0%;
        height: auto;
        overflow: hidden;
      }
      #GD {
        font-size: 37px;
      }
      #GDport {
        font-size: 22px;
      }
      .list {
        line-height: 1.7;
      }
      header {
        margin-bottom: 10%;
        margin-top: 10%;
      }
      .gdphoto {
        width: 47vw;
        height: 47vw;
      }
      #logo2 {
        font-size: 95px;
      }
      .milk {
        background-size: 65vw;
      }
      .japan {
        background-size: 73vw;
      }
      .smoothie {
        background-size: 70vw;
      }
      .doubleEX {
        background-size: 50vw;
      }
      .airbnb {
        background-size: 60vw;
      }
      .shoeAD {
        background-size: 63vw;
      }
      .soup {
        background-size: 73vw;
      }
      .orangecat {
        background-size: 60vw;
      }
      .catad {
        background-size: 48vw;
      }
      .photoedit {
        background-size: 73vw;
      }
      .catlong {
        background-size: 50vw;
      }
      .foodie {
        background-size: 50vw;
      }
      .coolwear {
        background-size: 48vw;
      }
      footer li {
        font-size: 14px;
      }
    }
    @media screen and (max-width: 363px) {
      #GD {
        font-size: 30px;
      }
      #GDport {
        font-size: 22px;
      }
    }
    /*FOOTER QUERIES*/
    @media screen and (max-width: 863px) {
      footer li {
        margin-inline-end: 30px;
      }
      #footerGrid {
        grid-template-columns: 1fr 1fr 1fr;
        margin-left: 11%;
      }
      figure {
        display: none;
        margin-inline-end: 20px;
        margin-inline-start: 25px;
      }
    }
    @media screen and (max-width: 540px) {
      #footerGrid {
        margin-left: 9%;
      }
      #footerStrip {
        padding-top: 4px;
      }
      footer li {
        line-height: 30px;
      }
    }
    @media screen and (max-width: 480px) {
      #footerGrid {
        margin-left: 8%;
      }
      footer li {
        font-size: 14px;
      }
    }
    </style>
  </head>
  <body>
    <!--White Center-->
    <div id="bg-white">
    <!--White Center-->
        <a href="https://emilydesigns.github.io/Portfolio/">
          <img id="logo" style="height: 150px" src="images/emily.png" alt="logo" />
        </a>
        <nav>
          <ul id="portnav">
            <div class="navItem">
              <li class="list">
                Portfolio
                <img style="width: 15px;" src="images/chevron.png" alt="arrow"/>
              </li>
                <div class="dropDown">
                  <div>
                    <a href="https://emilydesigns.github.io/Portfolio/illustrations">
                      Digital Illustration
                    </a>
                  </div>
                  <div>
                    <a href="https://emilydesigns.github.io/Portfolio/">
                      Graphic Design
                    </a>
                  </div>
                </div>
            </div>
            <div class="navItem">
              <li class="list">
                <a href="https://emilydesigns.github.io/Portfolio/aboutme">About Me</a>
              </li>
            </div>
            <div class="navItem">
              <li class="list">
                <a href="https://emilydesigns.github.io/Portfolio/contactme">Contact Me</a>
              </li>
            </div>
          </ul>
        </nav>
        <header>
          <h1 id="GD">Graphic Design</h1>
          <h2 id="GDport">Portfolio</h2>
        </header>
        <main class="GDgallery">
          <a href ="https://emilydesigns.github.io/Portfolio/images/graphic_design/watch.jpg">
            <div class="gdphoto watch">
              <!--<img src="images/graphic_design/watch.jpg" alt="watch" />-->
            </div>
          </a>
          <a href="https://emilydesigns.github.io/Portfolio/images/graphic_design/milk.jpg">
            <div class="gdphoto milk">
              <!--<img style="width: 650px" src="images/graphic_design/milk.jpg" alt="watch" />-->
            </div>
          </a>
          <a href="https://emilydesigns.github.io/Portfolio/images/graphic_design/japan.jpg">
            <div class="gdphoto japan">
              <!--<img style="width: 597px" src="images/graphic_design/japan.jpg" alt="japan_collage" />-->
            </div>
          </a>
          <a href="https://emilydesigns.github.io/Portfolio/images/graphic_design/smoothie.jpg">
            <div class="gdphoto smoothie">
              <!--<img style="width: 607px" src="images/graphic_design/smoothie.jpg" alt="smoothie_packaging" />-->
            </div>
          </a>
          <a href="https://emilydesigns.github.io/Portfolio/images/graphic_design/doubleEX.jpg">
            <div class="gdphoto doubleEX">
              <!--<img style="width: 450px" src="images/graphic_design/doubleEX.jpg" alt="watch" />-->
            </div>
          </a>
          <a href="https://emilydesigns.github.io/Portfolio/images/graphic_design/dogred.gif">
            <div class="gdphoto dogred">
              <!--<img src="images/graphic_design/dogred.gif" alt="watch" />-->
            </div>
          </a>
          <a href="https://emilydesigns.github.io/Portfolio/images/graphic_design/airbnb1.jpg">
            <div class="gdphoto airbnb">
              <!--<img style="width: 465px" src="images/graphic_design/airbnb1.jpg" alt="watch" />-->
            </div>
          </a>
          <a href="https://emilydesigns.github.io/Portfolio/images/graphic_design/shoe_ad.jpg">
            <div class="gdphoto shoeAD">
              <!--<img style="width: 500px" src="images/graphic_design/shoe_ad.jpg" alt="watch" />-->
            </div>
          </a>
          <a href="https://emilydesigns.github.io/Portfolio/images/graphic_design/soup.jpg">
            <div class="gdphoto soup">
              <!--<img style="width: 585px" src="images/graphic_design/soup.jpg" alt="watch" />-->
            </div>
          </a>
          <a href="https://emilydesigns.github.io/Portfolio/images/graphic_design/stars.png">
            <div class="gdphoto stars">
              <!--<img src="images/graphic_design/stars.png" alt="watch" />-->
            </div>
          </a>
          <a href="https://emilydesigns.github.io/Portfolio/images/graphic_design/orangecat.jpg">
            <div class="gdphoto orangecat">
              <!--<img style="width: 465px" src="images/graphic_design/orangecat.jpg" alt="watch" />-->
            </div>
          </a>
          <a href="https://emilydesigns.github.io/Portfolio/images/graphic_design/catad.jpg">
            <div class="gdphoto catad">
              <!--<img src="images/graphic_design/catad.jpg" alt="watch" />-->
            </div>
          </a>
          <a href="https://emilydesigns.github.io/Portfolio/images/graphic_design/photoedit.jpg">
            <div class="gdphoto photoedit">
              <!--<img style="width: 625px" src="images/graphic_design/photoedit.jpg" alt="watch" />-->
            </div>
          </a>
          <a href="https://emilydesigns.github.io/Portfolio/images/graphic_design/catlong.jpg">
            <div class="gdphoto catlong">
              <!--<img src="images/graphic_design/catlong.jpg" alt="watch" />-->
            </div>
          </a>
          <a href="https://emilydesigns.github.io/Portfolio/images/graphic_design/foodie.jpg">
            <div class="gdphoto foodie">
              <!--<img src="images/graphic_design/foodie.jpg" alt="watch" />-->
            </div>
          </a>
          <a href="https://emilydesigns.github.io/Portfolio/images/graphic_design/coolwear.jpg">
            <div class="gdphoto coolwear">
              <!--<img src="images/graphic_design/coolwear.jpg" alt="watch" />-->
            </div>
          </a>
        </main>
        <div id="contactButton">
          <h3>Like What You See?</h3>
          <a id="contactLink" href="https://emilydesigns.github.io/Portfolio/contactme">
            <input type="button" value="Contact Me">
          </a>
        </div>
        <footer>
          <div id="footerStrip">
            <div id="footerGrid">
              <figure>
                <!--EL logo-->
              </figure>
              <div id="footerContact">
                <ul>
                  <a style="text-decoration: none;" href="https://emilydesigns.github.io/Portfolio/contactme">
                    <li class="footerHeading">Contact Info</li>
                  </a>
                  <li>EA_Llauro@aol.com</li>
                  <li>123-456-789</li>
                </ul>
              </div>
              <div id="footerPortfolio">
                <ul>
                  <li class="footerHeading">Portfolio</li>
                  <a style="text-decoration: none;" href="https://emilydesigns.github.io/Portfolio/illustrations">
                    <li>Digital Illustration</li>
                  </a>
                  <a style="text-decoration: none;" href="https://emilydesigns.github.io/Portfolio/">
                    <li>Graphic Design</li>
                  </a>
                </ul>
              </div>
              <div id="footerAbout">
                <ul>
                  <a style="text-decoration: none;" href="https://emilydesigns.github.io/Portfolio/aboutme">
                    <li class="footerHeading">About Me</li>
                  </a>
                </ul>
              </div>
            </div>
          </div>
        </footer>

    <script type="text/javascript">
    $('.navItem').click(
      function() {
        if ($(this).hasClass('dropdownOpen')) {
          $(this).removeClass('dropdownOpen');
        }
        else {
          $(this).addClass('dropdownOpen');
        }
      }
    );
    </script>
  </body>
</html>
