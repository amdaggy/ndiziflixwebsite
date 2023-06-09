<!DOCTYPE html>
<html>
<head>
  <title>Ndizi Flix</title>
  <style>
    body {
      margin: 0;
      padding: 0;
    
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
    .center-text {
      text-align: center;
    }
    .video-section {
      padding: 20px;
    }
    .video-container {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 20px;
    }
    video {
      max-width: 800px;
      height: auto;
    }
    .video-container iframe {
      margin: 0 10px; /* Adjust the left and right spacing */
      margin-bottom: 20px; /* Adjust the bottom spacing */
      transition: transform 0.3s, box-shadow 0.3s;
    }
    .video-container iframe.active {
      transform: scale(1.2);
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
      z-index: 3;
    }
    .video-container iframe.active + iframe {
      transform: scale(1);
    }
    .shows-heading {
      text-decoration: underline;
      text-decoration-color: green;
      text-decoration-thickness: 2px;
    }

    .social-icons {
      display: flex;
      align-items: center;
      margin-left: auto; /* Add this line */
    }
    .social-icons a {
      margin-left: 10px;
    }
    .follow-us {
      display: flex;
      align-items: center;
      margin-left: 10px;
    }
    .follow-us-text {
      margin-right: 5px;
    }
    .follow-us {
      background-color: grey;
      display: flex;
      justify-content: center;
      padding: 10px 0;
    }

    .social-icons {
      display: flex;
      justify-content: space-between;
      width: 300px; /* Adjust the width as needed */
    }

    .social-icons img {
      width: 30px;
      height: 30px;
    }
       .social-icons:after {
      content: "";
      display: block;
      background-color: black;
      height: 10px;
      margin-top: 10px;
    }

    .welcome-text {
      padding-top: 120px; /* Adjust the padding value as needed */
    }

    .copyright {
      background-color: black;
      color: green;
      text-align: center;
      padding: 10px 0;
    }
  </style>
  <script>
    function focusVideo(event) {
      const iframes = document.getElementsByTagName('iframe');
      for (let i = 0; i < iframes.length; i++) {
        iframes[i].classList.remove('active');
      }
      event.target.classList.add('active');
      event.target.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
    
    function scrollToContact() {
      const contactSection = document.getElementById('contact-section');
      const topOffset = contactSection.offsetTop - 100; // Adjust the offset as needed
      window.scrollTo({ top: topOffset, behavior: 'smooth' });
    }
    
    function scrollToVideos() {
      const videoContainer = document.getElementById('video-section');
      videoContainer.scrollIntoView({ behavior: 'smooth' });
    }
    
    function scrollToTop() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }
  </script>
  <link rel="stylesheet" href="path/to/icons/font-awesome.css">
</head>
<body>
  <div id="top-bar">
    <div>
      <img src="img/icon.png" alt="flix" width="90" height="90">
      <a href="#" style="font-size:200%;" > Ndizi Flix</a>
      
      
    </div>
    <div> 
      <a href="#" onclick="scrollToTop(); return false;">Home</a>
      <a href="#" onclick="scrollToVideos(); return false;">Shows</a>
      <a href="#" onclick="scrollToContact(); return false;">About Us</a>
      <a href="team.php" onclick="#"> TEAM </a>
    </div>
  </div>
  
  <div class="welcome-text">
    <h1 style="background-color:green;" class="center-text">Welcome to Ndizi Flix</h1>
  </div>
  
  <div class="video-section">
    <div class="video-container">
      <video controls autoplay muted loop src="img/ndizi.mp4"></video>
    </div>
  </div>
  <h4  class="center-text"> <u>NDIZI TV</u></h4>
  <p class="center-text">If you enjoy our content, you can watch NDIZIFLIX ORIGINAL MOVIES at <a href="https://www.ndiziflix.com" target="_blank">www.ndiziflix.com</a> before they come to YouTube. 
  <p class="center-text">For business partnerships, call/WhatsApp 0716175485 or email ndizitv@gmail.com. Tunawapenda. Keep it locked to NDIZI TV.</p>
  <p class="center-text"> Obwansu Bw'omogusii.</p></p>
  <div id="contact-section" class="video-section">
    <h3 class="center-text"><u>Contact Information:</u></h3>
    <p class="center-text">Email: ndizitv@gmail.com</p>
    <p class="center-text">Phone: 0728 429617</p>
  </div>
  
  <div id="video-section" class="video-section">
    <div class="center-text">
      <h2 class="shows-heading"><u>SHOWS</u></h2>
      <p>NDIZI TV is your number one TV Channel, offering up-to-date news and the best programs ranging from Education, Religious, Political, Health, Agriculture. 
        <p>NDIZI TV is the home of the latest comedy clips and drama. Stay tuned for the latest breaking news from Kisii and beyond. </p>
       <p> We are your number one TV platform for comedy, news, and general entertainment. For factual news and programs, keep it NDIZI TV. Media & News Company.</p>
    </div>
    <div class="video-container">
      <iframe width="450" height="300" src="https://www.youtube.com/embed/ryxCmHRUzyA?list=PLLeX6XRpJsZqz_5dc4WnbrrhD0fV2AI8O" title="Ron Muruka in [THE LAST TAKE WITH SAMORA] Episode 3" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen onclick="focusVideo(event)"></iframe>
      <iframe width="450" height="300" src="https://www.youtube.com/embed/Zg8CuQBSmyo" title="WAJINGA NYINYI OKIONDO IS BACK!! - Ndizi TV Trending Kisii Comedy" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen onclick="focusVideo(event)"></iframe>
      <iframe width="450" height="300" src="https://www.youtube.com/embed/lZODScwZcgE" title="PAPA ANTIVIRUS DRAMA: EPISODE 15" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen onclick="focusVideo(event)"></iframe>
    </div>
    <div class="video-container">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/1IlkhN6_DuI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <iframe width="450" height="300" src="https://www.youtube.com/embed/2W7hDT-DFJM" title="VILLAGE ELECTIONS PART 1: OKIONDO VS BOCHABERI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen onclick="focusVideo(event)"></iframe>
      <iframe width="450" height="300" src="https://www.youtube.com/embed/RNovS89vrzU" title="Okiondo Anapea Kijana Discipline" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen onclick="focusVideo(event)"></iframe>
    </div>
    <div class="video-container">
    <iframe width="450" height="300" src="https://www.youtube.com/embed/AeB6QnYDvMc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <iframe width="450" height="300" src="https://www.youtube.com/embed/-3s8C9QGPyA" title="ANTIVIRUS TAKES OKIONDO AND OSORO TO EAT BUT IT BACKFIRES!!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe width="450" height="300" src="https://www.youtube.com/embed/dxouM7AbsVI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
  </div>
  <div class="follow-us">
    <div class="follow-us-text">FOLLOW US</div>
    <div class="social-icons">
      <a href="https://www.facebook.com/ndizitv" target="_blank"><img src="socialicons/fb.png" alt="Facebook"></a>
      <a href="https://www.instagram.com/ndizitv_comedy/" target="_blank"><img src="socialicons/ig.png" alt="Instagram"></a>
      <a href="https://www.tiktok.com/@ndizitv?is_from_webapp=1&sender_device=pc" target="_blank"><img src="socialicons/tk.png" alt="Tiktok"></a>
      <a href="https://youtube.com/@NDIZITV" target="_blank"><img src="socialicons/yt.png" alt="YouTube"></a>
      <a href="https://twitter.com/Ndizitvnews" target="_blank"><img src="socialicons/tw.png" alt="Twiter"></a>
    </div>
  </div>
  <footer>
    <div class="center-text">
      <p class="copyright">
        &copy; 2023 Ndizi Flix. All rights reserved.
      </p>
    </div>
  </footer>
</body>
</html>
