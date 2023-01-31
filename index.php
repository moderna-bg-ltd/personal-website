<?php
    // Design: https://madebydesignesia.com/themes/kyros/index-video-background.html#top
    $name ='Ilcho Vuchkov';
    $description = 'Personal website of ' . $name . '. Work and live in Bulgaria (EU).';
    $phone ='+359 878 777 111'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $name; ?> - Personal Website</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="<?php echo $name; ?> - Personal Website" name="description" />
    <meta content="<?php echo $description; ?>" name="description" />
    <meta content="<?php echo $name; ?>" name="author" />
    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap" />
    <link href="css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <style>
        :root {
            --primary-color: #CF1F1F;
            --primary-color-rgb: 207, 31, 31;
        }
    </style>
    <link href="css/coloring.css" rel="stylesheet" type="text/css" />
</head>
<body class="onepage dark-scheme">
<div id="wrapper">
    <!-- header begin -->
    <header class="transparent">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="de-flex sm-pt10">
                        <div class="de-flex-col">
                            <div class="de-flex-col">
                                <!-- logo begin -->
                                <div id="logo">
                                    <a href="index.php">
                                        <img alt="" class="logo" src="images/logo.png" />
                                        <img alt="" class="logo-2" src="images/logo.png" />
                                    </a>
                                </div>
                                <!-- logo close -->
                            </div>
                        </div>
                        <div class="de-flex-col header-col-right">
                            <ul id="mainmenu">
                                <li><a class="active" href="#top">Home<span></span></a></li>
                                <li><a href="#section-about">About me<span></span></a></li>
                                <li><a href="#section-services">What I Do<span></span></a></li>
                                <li><a href="#section-portfolio">Portfolio<span></span></a></li>
                                <li><a href="#section-resume">My Resume<span></span></a></li>
                                <li><a href="#section-blog">Blog<span></span></a></li>
                                <li><a href="#section-contact">Contact Me<span></span></a></li>
                            </ul>
                            <div class="menu_side_area">
                                <span id="menu-btn"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header close -->
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- page preloader begin -->
        <div id="preloader">
            <div class="preloader1"></div>
        </div>
        <!-- page preloader close -->

        <!-- float text begin -->
        <div class="float-text">
            <div class="de_social-icons">
                <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
            </div>
            <span>Follow Me</span>
        </div>
        <!-- float text close -->

        <!-- load external content begin -->
        <div id="de_modal">
            <button class="button-close"></button>
            <div class="d-modal-loader"></div>
        </div>
        <!-- load external content close -->

        <section class="no-top no-bottom jarallax position-relative" aria-label="section" data-video-src="mp4:video/local-video-1.mp4">
            <div class="v-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <h6 class="wow fadeInUp" data-wow-delay=".4s"><span class="id-color">I Am <?php echo $name; ?></span></h6>
                            <div class="spacer-10"></div>
                            <div class="h1_big text-white wow fadeInUp" data-wow-delay=".6s">
                                <div class="typed-strings">
                                    <p>Programmer</p>
                                    <p>Master of Science</p>
                                    <p>Entrepreneur</p>
                                </div>
                                <div class="typed"></div>
                            </div>
                        </div>
                        <div class="spacer-20"></div>
                        <ul class="list_location wow fadeInUp" data-wow-delay=".8s">
                            <li><span>Ireland</span>Dublin</li>
                            <li><span>Bulgaria</span>Plovdiv</li>
                            <li><span>UAE</span>Dubai</li>
                        </ul>
                    </div>
                </div>
            </div>
            <a href="#section-about" class="mouse-icon-click scroll-to wow fadeInUp" data-wow-delay=".8s">
                    <span class="mouse fadeScroll relative" data-scroll-speed="10">
                        <span class="scroll"></span>
                    </span>
            </a>
            <div class="de-gradient-edge-bottom"></div>
        </section>
        <section id="section-about">
            <div class="container relative">
                <div class="row">
                    <div class="col-md-12 text-center wow fadeInUp">
                        <h2>About Me</h2>
                        <div class="space-border"></div>
                    </div>
                    <div class="col-md-8 offset-md-2 text-center wow fadeInUp">
                        <p>I am a website designer from Lousiana, with a strong focus in UI/UX design. I love to get new experiences and always learn from my surroundings. I've done more than 285 projects. You can check it through portfolio section on
                            this website. I looking forward to any opportunities and challenges. </p>
                    </div>
                    <div class="spacer-single"></div>
                    <div class="col-lg-3 position-relative wow fadeIn" data-wow-delay=".2s">
                        <div class="position-relative">
                            <div class="progressbar" data-animate="false">
                                <div class="circle" data-percent="90">
                                    <div></div>
                                </div>
                                <h4>HTML</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 position-relative wow fadeIn" data-wow-delay=".4s">
                        <div class="position-relative">
                            <div class="progressbar" data-animate="false">
                                <div class="circle" data-percent="85">
                                    <div></div>
                                </div>
                                <h4>CSS</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 position-relative wow fadeIn" data-wow-delay=".6s">
                        <div class="position-relative">
                            <div class="progressbar" data-animate="false">
                                <div class="circle" data-percent="80">
                                    <div></div>
                                </div>
                                <h4>PHP</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 position-relative wow fadeIn" data-wow-delay=".8s">
                        <div class="position-relative">
                            <div class="progressbar" data-animate="false">
                                <div class="circle" data-percent="75">
                                    <div></div>
                                </div>
                                <h4>jQuery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-my-quote" aria-label="section" class="jarallax no-top no-bottom">
            <div class="de-gradient-edge-top"></div>
            <img src="images/background/2.jpg" class="jarallax-img" alt="">
            <div class="v-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-10 offset-md-1">
                            <blockquote class="q-big wow fadeIn" data-wow-duration="3s">
                                <i class="d-big icon_quotations"></i>
                                Do more than is required. What is the distance between someone who achieves their goals consistently and those who spend their lives and careers merely following? The extra mile.
                                <span class="d-quote-by"><?php echo $name; ?></span>
                            </blockquote>
                            <div class="spacer-double"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="de-gradient-edge-bottom"></div>
        </section>
        <section id="section-services" class="no-bottom">
            <div class="container relative">
                <div class="row">
                    <div class="col-md-12 text-center wow fadeInUp">
                        <h2>What I Do</h2>
                        <div class="space-border"></div>
                    </div>
                    <div class="spacer-single"></div>
                    <div class="row g-0">
                        <div class="col-lg-4 wow fadeIn" data-wow-delay=".2s">
                            <div class="de_3d-box">
                                <div class="d-inner">
                                    <i class="icon_genius id-color"></i>
                                    <div class="text">
                                        <h3>Development</h3>
                                        Ex velit cupidatat magna voluptate deserunt quis et dolor adipisicing elit culpa ad exercitation proident irure deserunt irure.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 wow fadeIn" data-wow-delay=".4s">
                            <div class="de_3d-box">
                                <div class="d-inner">
                                    <i class="icon_tools id-color"></i>
                                    <div class="text">
                                        <h3>Learning</h3>
                                        Ex velit cupidatat magna voluptate deserunt quis et dolor adipisicing elit culpa ad exercitation proident irure deserunt irure.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 wow fadeIn" data-wow-delay=".6s">
                            <div class="de_3d-box">
                                <div class="d-inner">
                                    <i class="icon_camera_alt id-color"></i>
                                    <div class="text">
                                        <h3>Entrepreneur</h3>
                                        Ex velit cupidatat magna voluptate deserunt quis et dolor adipisicing elit culpa ad exercitation proident irure deserunt irure.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-portfolio" class="no-bottom">
            <div class="container relative">
                <div class="row">
                    <div class="col-md-12 text-center wow fadeInUp">
                        <h2>Portfolio</h2>
                        <div class="space-border"></div>
                    </div>
                </div>
                <div id="gallery" class="row sequence">
                    <div class="col-md-4 item">
                        <div class="de_modal wow" data-url="single-project.html">
                            <div class="card-image-1 mod-c" data-tilt>
                                <div class="d-text">
                                    <h3>Single Image</h3>
                                    <h5 class="d-tag">website</h5>
                                </div>
                                <img src="images/gallery/1.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 item">
                        <div class="de_modal wow" data-url="single-project-2.html">
                            <div class="card-image-1 mod-c" data-tilt>
                                <div class="d-text">
                                    <h3>Multiple Images</h3>
                                    <h5 class="d-tag">website</h5>
                                </div>
                                <img src="images/gallery/2.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 item">
                        <div class="de_modal wow" data-url="single-project-3.html">
                            <div class="card-image-1 mod-c" data-tilt>
                                <div class="d-text">
                                    <h3>Self Hosted Video</h3>
                                    <h5 class="d-tag">website</h5>
                                </div>
                                <img src="images/gallery/3.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 item">
                        <div class="de_modal wow" data-url="single-project.html">
                            <div class="card-image-1 mod-c" data-tilt>
                                <div class="d-text">
                                    <h3>Bluetec App</h3>
                                    <h5 class="d-tag">website</h5>
                                </div>
                                <img src="images/gallery/4.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 item">
                        <div class="de_modal wow" data-url="single-project.html">
                            <div class="card-image-1 mod-c" data-tilt>
                                <div class="d-text">
                                    <h3>Uhost Hosting</h3>
                                    <h5 class="d-tag">website</h5>
                                </div>
                                <img src="images/gallery/5.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 item">
                        <div class="de_modal wow" data-url="single-project.html">
                            <div class="card-image-1 mod-c" data-tilt>
                                <div class="d-text">
                                    <h3>Bolo Creative</h3>
                                    <h5 class="d-tag">website</h5>
                                </div>
                                <img src="images/gallery/6.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-resume">
            <div class="container relative">
                <div class="row">
                    <div class="col-md-12 text-center wow fadeInUp">
                        <h2>My Resume</h2>
                        <div class="space-border"></div>
                    </div>
                </div>
                <div class="row gh-5">
                    <div class="col-lg-6 wow fadeInUp">
                        <div class="p-4">
                            <h3 class="s_border">Experiences</h3>
                            <ul class="d_timeline">
                                <li class="d_timeline-item">
                                    <h3 class="d_timeline-title">2014 - now</h3>
                                    <p class="d_timeline-text"><span class="d_title">Founder &amp; Creative Director</span><span class="d_company">Kyros Studio</span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi tempora perferendis vero officia enim impedit voluptatem dignissimos, veniam ratione est alias rerum aperiam, nam aliquam reprehenderit iste dolor.</p>
                                </li>
                                <li class="d_timeline-item">
                                    <h3 class="d_timeline-title">2010 - 2014</h3>
                                    <p class="d_timeline-text"><span class="d_title">Senior UI / UX Designer</span><span class="d_company">Google Inc</span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi tempora perferendis vero officia enim impedit voluptatem dignissimos, veniam ratione est alias rerum aperiam, nam aliquam reprehenderit iste dolor.</p>
                                </li>
                                <li class="d_timeline-item">
                                    <h3 class="d_timeline-title">2008 - 2010</h3>
                                    <p class="d_timeline-text"><span class="d_title">Graphic Designer</span><span class="d_company">Kyros Studio</span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi tempora perferendis vero officia enim impedit voluptatem dignissimos, veniam ratione est alias rerum aperiam, nam aliquam reprehenderit iste dolor.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp">
                        <div class="p-4">
                            <h3 class="s_border">Education</h3>
                            <ul class="d_timeline">
                                <li class="d_timeline-item">
                                    <h3 class="d_timeline-title">2004 - 2008</h3>
                                    <p class="d_timeline-text"><span class="d_title">Master in Design</span><span class="d_company">New York University</span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi tempora perferendis vero officia enim impedit voluptatem dignissimos, veniam ratione est alias rerum aperiam, nam aliquam reprehenderit iste dolor.</p>
                                </li>
                                <li class="d_timeline-item">
                                    <h3 class="d_timeline-title">2004 - 2008</h3>
                                    <p class="d_timeline-text"><span class="d_title">Bachelor of Arts</span><span class="d_company">University of London</span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi tempora perferendis vero officia enim impedit voluptatem dignissimos, veniam ratione est alias rerum aperiam, nam aliquam reprehenderit iste dolor.</p>
                                </li>
                                <li class="d_timeline-item">
                                    <h3 class="d_timeline-title">2006 - 2004</h3>
                                    <p class="d_timeline-text"><span class="d_title">Artist of College</span><span class="d_company">University of Sydney</span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi tempora perferendis vero officia enim impedit voluptatem dignissimos, veniam ratione est alias rerum aperiam, nam aliquam reprehenderit iste dolor.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-fun-facts" aria-label="section" class="jarallax">
            <div class="de-gradient-edge-top"></div>
            <img src="images/background/3.jpg" class="jarallax-img" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 wow fadeIn" data-wow-delay="0">
                        <div class="de_count text-center">
                            <h3 class="timer" data-to="8240" data-speed="2500">0</h3>
                            <span>Hours of Works</span>
                        </div>
                    </div>

                    <div class="col-md-3 wow fadeIn" data-wow-delay=".25s">
                        <div class="de_count text-center">
                            <h3 class="timer" data-to="315" data-speed="2500">0</h3>
                            <span>Projects Done</span>
                        </div>
                    </div>

                    <div class="col-md-3 wow fadeIn" data-wow-delay=".5s">
                        <div class="de_count text-center">
                            <h3 class="timer" data-to="250" data-speed="2500">0</h3>
                            <span>Satisfied Customers</span>
                        </div>
                    </div>

                    <div class="col-md-3 wow fadeIn" data-wow-delay=".75s">
                        <div class="de_count text-center">
                            <h3 class="timer" data-to="32" data-speed="2500">0</h3>
                            <span>Awards Winning</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="de-gradient-edge-bottom"></div>
        </section>
        <section id="section-blog" class="no-bottom">
            <div class="container relative">
                <div class="row">
                    <div class="col-md-12 text-center wow fadeInUp">
                        <h2>Recent Blog</h2>
                        <div class="space-border"></div>
                    </div>
                </div>
                <div id="carousel-blog" class="owl-carousel wow fadeInUp">
                    <div class="bloglist item">
                        <div class="post-content">
                            <div class="post-image">
                                <div class="de_modal" data-url="single-blog.html"><img alt="" src="images/blog/1.jpg" class="lazy grayscale"></div>
                            </div>
                            <div class="post-text">
                                <h4 class="de_modal" data-url="single-blog.html">How to Make Better User Interface</h4>
                                <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim reprehenderit cupidatat labore ad laborum consectetur consequat...</p>
                            </div>
                        </div>
                    </div>
                    <div class="bloglist item">
                        <div class="post-content">
                            <div class="post-image">
                                <div class="de_modal" data-url="single-blog.html"><img alt="" src="images/blog/2.jpg" class="lazy grayscale"></div>
                            </div>
                            <div class="post-text">
                                <h4 class="de_modal" data-url="single-blog.html">10 Web Design Tips From Experts</h4>
                                <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim reprehenderit cupidatat labore ad laborum consectetur consequat...</p>
                            </div>
                        </div>
                    </div>
                    <div class="bloglist item">
                        <div class="post-content">
                            <div class="post-image">
                                <div class="de_modal" data-url="single-blog.html"><img alt="" src="images/blog/3.jpg" class="lazy grayscale"></div>
                            </div>
                            <div class="post-text">
                                <h4 class="de_modal" data-url="single-blog.html">The Importance of Web Design</h4>
                                <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim reprehenderit cupidatat labore ad laborum consectetur consequat...</p>
                            </div>
                        </div>
                    </div>
                    <div class="bloglist item">
                        <div class="post-content">
                            <div class="post-image">
                                <div class="de_modal" data-url="single-blog.html"><img alt="" src="images/blog/4.jpg" class="lazy grayscale"></div>
                            </div>
                            <div class="post-text">
                                <h4 class="de_modal" data-url="single-blog.html">10 Web Design Tips From Experts</h4>
                                <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim reprehenderit cupidatat labore ad laborum consectetur consequat...</p>
                            </div>
                        </div>
                    </div>
                    <div class="bloglist item">
                        <div class="post-content">
                            <div class="post-image">
                                <div class="de_modal" data-url="single-blog.html"><img alt="" src="images/blog/5.jpg" class="lazy grayscale"></div>
                            </div>
                            <div class="post-text">
                                <h4 class="de_modal" data-url="single-blog.html">The Importance of Web Design</h4>
                                <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim reprehenderit cupidatat labore ad laborum consectetur consequat...</p>
                            </div>
                        </div>
                    </div>
                    <div class="bloglist item">
                        <div class="post-content">
                            <div class="post-image">
                                <div class="de_modal" data-url="single-blog.html"><img alt="" src="images/blog/6.jpg" class="lazy grayscale"></div>
                            </div>
                            <div class="post-text">
                                <h4 class="de_modal" data-url="single-blog.html">Tips for Healthy Teeth<span></span></h4>
                                <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim reprehenderit cupidatat labore ad laborum consectetur consequat...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-contact" class="jarallax">
            <div class="de-gradient-edge-top"></div>
            <img src="images/background/5.jpg" class="jarallax-img" alt="">
            <div class="container z-index-1000">
                <div class="row">
                    <div class="col-md-12 text-center wow fadeInUp">
                        <h2>Contact Me</h2>
                        <div class="space-border"></div>
                    </div>
                    <div class="col-lg-8 offset-lg-2 wow fadeInUp">
                        <div class="contact_form_wrapper">
                            <form name="contactForm" id="contact_form" class="form-border" method="post" action="#">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="field-set">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="field-set">
                                            <label for="email">Email</label>
                                            <input type="text" name="email" id="email" class="form-control" placeholder="Your Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="field-set">
                                            <label for="phone">Phone</label>
                                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="field-set">
                                        <label for="message">Message</label>
                                        <textarea name="message" id="message" class="form-control" placeholder="Your Message" required></textarea>
                                    </div>
                                    <div class="g-recaptcha" data-sitekey="6LdW03QgAAAAAJko8aINFd1eJUdHlpvT4vNKakj6"></div>
                                    <div id='submit' class="mt10">
                                        <input type='submit' id='send_message' value='Send Message' class="btn-main">
                                    </div>

                                    <div id="success_message" class='success'>
                                        Your message has been sent successfully. Refresh this page if you want to send more messages.
                                    </div>
                                    <div id="error_message" class='error'>
                                        Sorry there was an error sending your form.
                                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="spacer-double"></div>
                        <div class="row text-center wow fadeInUp">
                            <div class="col-md-4">
                                <div class="wm-1"></div>
                                <h6>Email Me</h6>
                                <p>ilchovuchkov[@]gmail.com</p>
                            </div>
                            <div class="col-md-4">
                                <div class="wm-1"></div>
                                <h6>Call Me</h6>
                                <p><?php echo $phone; ?></p>
                            </div>
                            <div class="col-md-4">
                                <div class="wm-1"></div>
                                <h6>Address</h6>
                                <p>Plovdiv, Bulgaria, EU</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="de-gradient-edge-bottom"></div>
        </section>
    </div>
    <!-- content close -->
    <a href="#" id="back-to-top"></a>
    <!-- footer begin -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="index.php">
                        <span class="copy">&copy; Copyright <?php echo date('Y'); ?> - <?php echo $name; ?></span>
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="social-icons">
                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                        <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                        <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                        <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer close -->
</div>
<!-- Javascript Files
================================================== -->
<script src="js/plugins.js"></script>
<script src="js/designesia.js"></script>
<script src='https://www.google.com/recaptcha/api.js' async defer></script>
<script src="js/form.js"></script>
<script>
    jQuery(function($) {
        $('.g-recaptcha').attr('data-theme', 'dark');
    });
</script>
<script>
    jQuery(document).ready(function() {
        $(function() {
            // jquery typed plugin
            $(".typed").typed({
                stringsElement: $('.typed-strings'),
                typeSpeed: 100,
                backDelay: 500,
                loop: true,
                contentType: 'html', // or text
                // defaults to false for infinite loop
                loopCount: false,
                callback: function() { null; },
                resetCallback: function() { newTyped(); }
            });
        });
    });
</script>
</body>

</html>