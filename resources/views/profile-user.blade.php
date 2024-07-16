<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website designing -K2inofocom</title>
    <!---external css ---->
    <link rel="stylesheet" href="{{ asset('../css/profile.css') }}">
    <!---font awesome cdn for font icons---->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
   <div class="container-profile">
      <div class="profile-card"> 
         <button onclick="history.back()">
            <i class="fa-solid fa-arrow-left back"></i>
         </button>
            <div class="profile-pic">
                <img src="{{ asset('img/1.png') }}" alt="user avatar">
            </div>

            <div class="profile-details">
                 <div class="intro">
                    <h2>{{ Auth::user()->name }}</h2>
                    <h4>Buyer</h4>
                    <div class="social">
                        <a href="#"><i class="fab fa-facebook" style="color:var(--blue)"></i></a>
                        <a href="#"><i class="fab fa-twitter"  style="color:var(--skyblue)"></i></a>
                        <a href="#"><i class="fab fa-dribbble"  style="color:var(--dark-pink)"></i></a>
                        <a href="#"><i class="fab fa-linkedin"  style="color:var(--light-blue)"></i></a>
                    </div>
                 </div>

                 <div class="contact-info">
                    <div class="row">
                         <div class="icon">
                            <i class="fa fa-phone"  style="color:var(--dark-magenta)"></i>
                         </div>
                         <div class="content">
                            <span>Phone</span>
                            <h5>+{{ Auth::user()->name }}</h5>
                         </div>
                    </div>

                    <div class="row">
                        <div class="icon">
                           <i class="fa fa-envelope-open"  style="color:var(--light-green)"></i>
                        </div>
                        <div class="content">
                           <span>Email</span>
                           <h5>{{ Auth::user()->email }}</h5>
                        </div>
                   </div>
    
                   <div class="row">
                    <div class="icon">
                       <i class="fa fa-map-marker"  style="color:var(--light-purple)"></i>
                    </div>
                    <div class="content">
                       <span>Location</span>
                       <h5>{{ Auth::user()->name }}</h5>
                    </div>
                 </div>

            </div>
               <button class="download-btn"> <i class="fa fa-edit"></i> Edit Profile</button>
            </div>
       </div>

       <!----about section ----->
       <!-- <div class="about">
           <h1>Profile User</h1>

           <p> I'm Creative Director and UI/UX Designer from Sydney, Australia,  
            working in web development and print media.I enjoy turning complex problems into simple, 
            beautiful and intuitive designs.
          </p>

          <p>
            My aim is to bring across your message and identity in the most creative way. 
            I created web design for many famous brand companies.
          </p>
          <h2>What I Do !!!</h2>
          <div class="work">
             <div class="workbox">
                 <div class="icon">
                    <img src="images/ui.svg" alt="">
                 </div>
                 <div class="desc">
                    <h3>UI/UX Designer</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam euismod volutpat.</p>
                 </div>
             </div>

             <div class="workbox">
                <div class="icon">
                   <img src="images/app.svg" alt="">
                </div>
                <div class="desc">
                   <h3>App Developement</h3>
                   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam euismod volutpat.</p>
                </div>
            </div>

            <div class="workbox">
                <div class="icon">
                   <img src="images/api.svg" alt="">
                </div>
                <div class="desc">
                   <h3>API Developement</h3>
                   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam euismod volutpat.</p>
                </div>
            </div>

            <div class="workbox">
                <div class="icon">
                   <img src="images/web.svg" alt="">
                </div>
                <div class="desc">
                   <h3>Web Developement</h3>
                   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam euismod volutpat.</p>
                </div>
            </div>
          </div>
       </div> -->
   </div>
</body>
</html>