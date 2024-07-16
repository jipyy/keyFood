<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="{{ asset("../css/contact-us.css") }}">
</head>
<body>
    <div class="contactUs">
        <div class="title">
            <h2>Contact us</h2>
        </div>
        <div class="box">
            <!-- form -->
            <div class="contact form">
                <h3>What's your problem?
                <form action="">
                    <div class="formBox">
                        <div class="row50">
                            <div class="inputBox">
                                <span>First Name</span>
                                <input type="text" placeholder="Joko">
                            </div>
                            <div class="inputBox">
                                <span>Last Name</span>
                                <input type="text" placeholder="Utep">
                            </div>
                        </div>

                        <div class="row50">
                            <div class="inputBox">
                                <span>Email</span>
                                <input type="text" placeholder="jokobodong@gmail.com">
                            </div>
                            <div class="inputBox">
                                <span>Mobile</span>
                                <input type="text" placeholder="+90 987 456 6666">
                            </div>
                        </div>
                        <div class="row100">
                            <div class="inputBox">
                                <span>Message</span>
                                <textarea placeholder="Write your message here..."></textarea>
                            </div>
                        </div>
                        <div class="row100">
                            <div class="inputBox">
                                <input type="submit" value="Send">
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- info box -->
            <div class="contact info">
                <h3>Contact Info</h3>
                <div class="infoBox">
                    <div>
                        <span><ion-icon name="pin"></ion-icon></span>
                        <p>Perubahan Kota Baru Keandra, cirebon<br>Indonesia</p>
                    </div>
                    <div>
                        <span><ion-icon name="mail"></ion-icon></span>
                        <a href="mailto:loremipsum@gmail.com">loremipsum@gmail.com</a>
                    </div>
                    <div>
                        <span><ion-icon name="call"></ion-icon></span>
                        <a href="tel:+919876543211">+91 987 654 3211</a>
                    </div>

                    <!-- social media links -->
                    <ul class="sci">
                        <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                    </ul>
                </div>
            </div>

            <!-- map -->
            <div class="contact map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15848.025922409286!2d108.4574444772461!3d-6.7690625997904945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1skeandra%20sumber!5e0!3m2!1sid!2sid!4v1721094248618!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>
