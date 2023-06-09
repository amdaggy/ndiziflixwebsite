<!DOCTYPE html>
<html>
<head>
  <title>Company Members</title>
  <style>
    /* Add your custom styles here */
    .member {
      display: inline-block;
      text-align: center;
      margin: 0 10px;
      width: 30%;
      max-width: 300px;
    }
    .member img {
      width: 100%;
      height: auto;
      border-radius: 10px;
      object-fit: cover;
    }
    .member h3 {
      margin-top: 10px;
    }
    .member p {
      margin-top: 5px;
    }
    .members-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      padding: 20px;
      box-sizing: border-box;
    }
    .center-text {
      text-align: center;
    }
    #top-bar {
      background-color: #999705;
      color: #fff;
      height: 95px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 20px;
      position: fixed;
      top: 0;
      width: 98%;
      z-index: 999;
    }
    #top-bar a {
      color: #fff;
      text-decoration: none;
      margin-left: 10px;
    }
    #home-link {
      margin-left: auto;
      margin-right: 20px;
    }
    #full-width-image {
      width: 60%;
      margin-top: 115px;
      height: 320px;
      
    }
    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
    }
  </style>
</head>
<body>
<div id="top-bar">
    <div>
    <img src="img/flix.png" alt="flix" width="200" height="90">
    </div>
    <a href="ndizipage.php" id="home-link">Home</a>
  </div>
  <img src="img/ndiziflix.png" alt="Full Width Image" id="full-width-image" class="center">
  
  <h1 class="center-text">Our Team</h1>
  
  <div class="members-container">
    <div class="member">
      <img src="img/samora.jpg" alt="CEO">
      <h3>SAMMY SAMORA KIBAGENDI</h3>
      <p>I'm a Digital Content Creator and Tech Entrepreneur. Founder of NDIZI TV LTD and CEO Ndiziflix Ent.
      </p>
    </div>

    <div class="member">
      <img src="img/oki.jpg" alt="OKIONDO">
      <h3>OKIONDO</h3>
      <p>A Kenyan Gusii based comedian and Content Creator. passionate about Culture and progression</p>
    </div>

    <div class="member">
      <img src="img/osoro.jpg" alt="OSORO">
      <h3>OSORO THE ACTOR</h3>
      <p>We are content creators in radio space and drama. Enjoy.</p>
    </div>
  </div>
  <div class="members-container">

  <div class="member">
      <img src="img/sigara.jpg" alt="SIGARA ACTESS">
      <h3>SIGARA ACTESS</h3>
      <p>Nothing is impossible... The impossibilities are always the untried🤭
       Sigara Actress  on the trends...
       We keep connecting and connecting... 
       We are starting our dance classes
      </p>

    </div>
    <div class="member">
      <img src="img/kemu.jpg" alt="KEMUNTO">
      <h3>KEMUNTO ACTRESS</h3>
      <p>Do you miss kemunto na osoro 
         Tupost ama tungoje kidogo????</p>
    </div>
    <div class="member">
      <img src="img/turu.jpg" alt="OMWANCHI TURUBENA">
      <h3>OMWANCHI TURUBENA</h3>
      <p>Digital Creator</p>
    </div>
  </div>
  <div class="members-container">
  <div class="member">
      <img src="img/virus.jpg" alt="PAPA ANTIVIRUS">
      <h3>PAPA ANTIVIRUS</h3>
      <p>Content Creator </p>
  </div>
  <div class="member">
      <img src="img/bo.jpg" alt="BOCHABERI">
      <h3>BOCHABERI ACTRESS</h3>
      <p>Content Creator </p>
  </div>
  <div class="member">
      <img src="img/nyomenda.jpg" alt="NYOMENDA">
      <h3>NYOMENDA ACTRESS</h3>
      <p>Content Creator </p>
  </div>

  </div>
  <!-- Add more member sections as needed -->

</body>
</html>