<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="zadatak5.css">
    <title>Document</title>
</head>
<body>

    <header>

        <div class="head_line">
            <div class="company_name">
                <p class="head_par"><strong>WOLF <span class="span">Book's</span></strong></p>
            </div>

            <div class="user">
                <ul type="none">
                    <li><a href="register.html" class="a_nav">Register</a></li>
                    <li><a href="log-in.html" class="a_nav">Log in</a></li>
                    <li><a href="#" class="a_nav">Cart</a></li>
                </ul>   
            </div>
        </div>

        <div class="navigation">
            <ul type="none">
                <li><a href="index.html" class="a_nav">HOME</a></li>
                <li><a href="products.html" class="a_nav">PRODUCTS</a></li>
                <li><a href="about-us.html" class="a_nav">ABOUT US</a></li>
                <li><a href="contact-us.html" class="a_nav">CONTACT US</a></li>
            </ul>  
        </div>      

    </header>   

    <main>
        <section class="section_block">
            <img src="/theme/img/back2.avif" alt="office" class="first_sec_pic">
        </section>

        <section class="section_block">
            <div>
                <h3>Digital Marketing</h3>
                <p class="section_par">
                    We put all our knowledge and experience in content & social media marketing, 
                    and develop marketing strategy tailored exactly to YOUR NEEDS. 
                </p>
                <p class="section_par">
                    Our (copy)writers are experinced in content analysis, and in wide range of fileds:
                    <ul type="square">
                        <li>psychology;</li>
                        <li>pedagogy;</li>
                        <li>law;</li>
                        <li>criminology;</li>
                        <li>behavioral disorder;</li>
                        <li>sociology;</li>
                        <li>victimology;</li>
                        <li>security;</li>
                        <li>safety;</li>
                        <li>private security;</li>
                        <li>technical security systems;</li>
                        <li>political science;</li>
                        <li>emergency management;</li>
                        <li>prevention;</li>                         
                        <li>media;</li>
                        <li>digital marketing;</li>
                        <li>web development;</li>
                        <li>HTML;</li>
                        <li>CSS;</li>
                        <li>PHP;</li>
                        <li>Word Press.</li>
                    </ul>
                </p>
            </div>

            <div>

            </div>
            
        </section>

        <section class="section_block">
            
        </section>

        <section class="section_block">
            
        </section>








    </main>

    <footer class="footer_style">
        <div class="footer1">
            <div class="footer_blocks">
                <p class="footers_heading">Company information</p>
                <ul type="">
                    <li><a href="#" class="a_foot">About us</a></li>
                    <li><a href="#" class="a_foot">Contact us</a></li>
                    <li><a href="#" class="a_foot">Contact us</a></li>
                    <li><a href="#" class="a_foot">Company data</a></li>
                </ul>  
            </div>
            
            <div class="footer_blocks">
                <p class="footers_heading">Customer support</p>
                <ul type="">
                    <li><a href="#" class="a_foot">How to order?</a></li>
                    <li><a href="#" class="a_foot">How to create user profile?</a></li>
                    <li><a href="#" class="a_foot">Payment methods</a></li>
                    <li><a href="#" class="a_foot">Shipping services</a></li>
                    <li><a href="#" class="a_foot">Reclamations</a></li>
                    <li><a href="#" class="a_foot">Refund</a></li>
                </ul>
            </div>   

            <div class="footer_blocks">
                <p class="footers_heading">Terms of using</p>
                <ul type="">
                    <li><a href="#" class="a_foot">General terms of sale in online shop</a></li>
                    <li><a href="#" class="a_foot">Terms of using online shop</a></li>
                    <li><a href="#" class="a_foot">Privacy policy and data protection</a></li>
                    <li><a href="#" class="a_foot">Cookie policy</a></li>
                </ul>
            </div>   
            
            <div class="footer_blocks">
                <p class="footers_heading"><strong>WOLF <span class="span">Book's</span></strong></p>
                <ul type="">
                    <li>Adresa, Beograd</li>
                    <li>Telefon: 011/123-45-67</li>
                    <li>PIB: 1234567</li>
                    <li>MB: 12345678</li>
                    <li>Account No.: 160-1234567891011-60</li>
                </ul>  
            </div>

            <div class="footer_blocks">
                <p class="footers_heading">FOLLOW US</p>
                <div class="footer_subblock">
                    <ul type="">
                        <li><a href="" class="a_foot">Facebook</a></li>
                        <li><a href="" class="a_foot">Instagram</a></li>
                        <li><a href="" class="a_foot">Twiiter</a></li>
                        <li><a href="" class="a_foot">Linked In</a></li>
                    </ul>  
                </div>

                <div class="footer_subblock">
                    <img src="" width="20px" alt="facebook_icon" class="img_foot">
                    <img src="" width="20px" alt="instagram_icon" class="img_foot">
                    <img src="" width="20px" alt="twitter_icon" class="img_foot">
                    <img src="" width="20px" alt="linkedin_icon" class="img_foot">
                </div>  
            </div>

            <div class="copy">

                <div class="copy1">
                    <p class="copy1_par">Copyright by <strong>WOLF <span class="span">Book's</span></strong></p>
                </div>

                <div class="copy2">                    
                    <p class="copy2_par">Powered by IT bootcamp</p>
                    <img src="bootcamp_logo.png" alt="itbootcamp" class="boot_logo">
                </div>

            </div>

        </div>

        <button onclick="topFunction()" id="top" title="Go to top">Go to top</button>

</footer>

</body>

</html>

<script>
//Get the button
var mybutton = document.getElementById("top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>