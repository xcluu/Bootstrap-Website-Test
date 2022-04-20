<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="index.css">
        <title>Titel</title>
    </head>
    <body data-bs-spy="scroll" data-bs-target="#navbar-1" data-bs-offset="100" class="scrollspy-example" tabindex="0">
    
    <header id="home" class="page-header position-relative">
            <div class="container">
                <nav  class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                    <a class="navbar-brand" href="#">Golden</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                      <ul id="navbar-1" class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#about-us">About&nbsp;Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                          </li>
                      </ul>
                    </div>
                </div>
                  </nav>
            </div>
            <div class="header-container position-absolute top-50 start-50 translate-middle">
                <p>Welcome To Our Studio!</p>
                <strong>It's Nice To Meet You</strong>
                <a href="#services" class="btn">TELL ME MORE</a>
            </div>

            <img id="header-img" src="src/img/header-background.jpg">
        </header>
    


        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col">
                <div class="intro">
                    <h1>Services</h1>
                    <p class="fst-italic text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo, sapiente. Sit explicabo perspiciatis cum. Error voluptate, labore quisquam facere, tempore omnis vitae dolores enim, ex eaque nesciunt nostrum culpa ullam!</p>
                </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <i class="bi bi-basket2-fill"></i>
                        <h2>E-Commerce</h2>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi officiis natus non laborum veritatis quidem laudantium nemo libero culpa, qui similique corporis eius eum sit soluta labore dolorum voluptatibus minima!</p>
                    </div>
                    <div class="col-md-4">
                        <i class="bi bi-laptop"></i>
                        <h2>Responsive Web</h2>
                        <p class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni dolorum voluptatibus labore laborum recusandae eius, accusantium repellat provident atque perferendis voluptas ipsum obcaecati voluptatem, hic at! Labore voluptatem animi repudiandae?</p>
                    </div>
                    <div class="col-md-4">
                        <i class="bi bi-lock-fill"></i>
                        <h2>Web Security</h2>
                        <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque sapiente voluptas omnis aut, ullam corporis enim incidunt tenetur eligendi, quo molestiae harum tempora, quibusdam quasi. Velit veniam harum explicabo neque.</p>
                    </div>
                </div>
            </div>
        </section>


        <section id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="intro">
                            <h1>Our Portfolio</h1>
                            <p class="fst-italic text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam eveniet hic soluta enim placeat maxime? Magnam reprehenderit voluptas, delectus qui eius possimus corporis! Doloribus autem dolore, ratione ad distinctio blanditiis.</p>
                        </div>
                    </div>
                </div>
                    <div class="col-md-4 col-sm-6">
                        <a href="#">
                            <div class="card">
                                <img src="src/img/placeholders/portfolio/adventure-daylight-girl-1462014.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">Ebony & Ivory</h5>
                                <p class="card-text fst-italic text-muted">Lorem ipsum.</p>
                            </div>
                          </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <a href="#">
                            <div class="card">
                                <img src="src/img/placeholders/portfolio/aerial-view-color-daylight-1125278.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">Smart Stationary</h5>
                                <p class="card-text fst-italic text-muted">Lorem ipsum.</p>
                            </div>
                          </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <a href="#">
                            <div class="card">
                                <img src="src/img/placeholders/portfolio/architecture-basilica-buildings-326709.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">Clever Poster</h5>
                                <p class="card-text fst-italic text-muted">Lorem ipsum.</p>
                            </div>
                          </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <a href="#">
                            <div class="card">
                                <img src="src/img/placeholders/portfolio/architecture-building-buildings-264706.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">Ebony & Ivory</h5>
                                <p class="card-text fst-italic text-muted">Lorem ipsum.</p>
                            </div>
                          </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <a href="#">
                            <div class="card">
                                <img src="src/img/placeholders/portfolio/ballpen-blur-bokeh-834897.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">Smart Stationary</h5>
                                <p class="card-text fst-italic text-muted">Lorem ipsum.</p>
                            </div>
                          </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <a href="#">
                            <div class="card">
                                <img src="src/img/placeholders/portfolio/breakfast-citrus-close-up-1435740.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">Clever Poster</h5>
                                <p class="card-text fst-italic text-muted">Lorem ipsum.</p>
                            </div>
                          </a>
                        </div>
                    </div>
            
            </div>
        </section>


        <section id="about-us">
            <div class="container">
                <!--<svg width="100%" height="100%" stroke="#f0f0f0"><line id="connecting-line"/></svg>-->
                <div class="row">
                    <div class="col">
                        <div class="intro">
                            <h1>About Us</h1>
                            <p class="fst-italic text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam eveniet hic soluta enim placeat maxime? Magnam reprehenderit voluptas, delectus qui eius possimus corporis! Doloribus autem dolore, ratione ad distinctio blanditiis.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="about-us-row">
                        <div class="col about-us-description">
                            <h2>July 2010</h2>
                            <h3>Our Humble Beginnings</h3>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor iusto pariatur eius, officia culpa rem, soluta expedita saepe quaerat ullam, aliquam accusantium. Labore esse pariatur ea animi deserunt veritatis hic!</p>
                        </div>
                        <div class="col my-auto about-us-image">
                            <img id="starting-div" class="rounded-circle" alt="An image of an unorganized desk." src="src/img/placeholders/aboutus/globus-hand-makro-1275393.jpg">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="about-us-row">
                        <div class="col about-us-description">
                            <h2>January 11</h2>
                            <h3>Facing Startup Battles</h3>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor iusto pariatur eius, officia culpa rem, soluta expedita saepe quaerat ullam, aliquam accusantium. Labore esse pariatur ea animi deserunt veritatis hic!</p>
                        </div>
                        <div class="col my-auto about-us-image">
                            <img class="rounded-circle" alt="An image of an unorganized desk." src="src/img/placeholders/aboutus/dammerung-draussen-felsen-946351.jpg">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="about-us-row">
                        <div class="about-us-description">
                            <h2>December 2012</h2>
                            <h3>Enter The Dark Days</h3>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor iusto pariatur eius, officia culpa rem, soluta expedita saepe quaerat ullam, aliquam accusantium. Labore esse pariatur ea animi deserunt veritatis hic!</p>
                        </div>
                        <div class="about-us-image">
                            <img class="rounded-circle" alt="An image of an unorganized desk." src="src/img/placeholders/aboutus/architektur-gebaude-hochhaus-599459.jpg">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="about-us-row">
                        <div class="about-us-description">
                            <h2>February 2014</h2>
                            <h3>Our Triumph</h3>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor iusto pariatur eius, officia culpa rem, soluta expedita saepe quaerat ullam, aliquam accusantium. Labore esse pariatur ea animi deserunt veritatis hic!</p>
                        </div>
                        <div class="about-us-image">
                            <img class="rounded-circle" alt="An image of an unorganized desk." src="src/img/placeholders/aboutus/berge-canyon-dammerung-965154.jpg">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="about-us-row">
                        <div class="about-us-image">
                            <img id="ending-div" class="rounded-circle" alt="Our Story Continues..." src="src/img/placeholders/portfolio/adventure-daylight-girl-1462014.jpg">
                        </div>
                    </div>
                </div>
                <div class="row"></div>
            </div>
        </section>

        <section id="team">
            <div class="container">
                <div class="row">
                    <div class="intro">
                        <h1>Our Amazing Team</h1>
                        <p class="fst-italic text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam eveniet hic soluta enim placeat maxime? Magnam reprehenderit voluptas, delectus qui eius possimus corporis! Doloribus autem dolore, ratione ad distinctio blanditiis.</p>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="img-container">
                                <img class="rounded-circle" alt="An image of Kimberly Thompson." src="src/img/placeholders/team/auge-bezaubernd-dogen-1044054.jpg">
                                <h2>Kimberly Thompson</h2>
                                <p class="text-muted">Marketer</p>
                                <div class="sm-container">
                                    <i class="bi bi-twitter"></i>
                                    <i class="bi bi-facebook"></i>
                                    <i class="bi bi-pinterest"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="img-container">
                                <img class="rounded-circle" alt="An image of Kimberly Thompson." src="src/img/placeholders/team/augen-bezaubernd-draussen-356378.jpg">
                                <h2>Rico Massimo</h2>
                                <p class="text-muted">Coder</p>
                                <div class="sm-container">
                                    <i class="bi bi-twitter"></i>
                                    <i class="bi bi-facebook"></i>
                                    <i class="bi bi-pinterest"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="img-container">
                                <img class="rounded-circle" alt="An image of Kimberly Thompson." src="src/img/placeholders/team/halsband-haustier-hund-8700.jpg">
                                <h2>Uku Mason</h2>
                                <p class="text-muted">Graphic Designer</p>
                                <div class="sm-container">
                                    <i class="bi bi-twitter"></i>
                                    <i class="bi bi-facebook"></i>
                                    <i class="bi bi-pinterest"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="text-muted text-center description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, praesentium ratione ipsum eum sequi earum eius. Eveniet, quod incidunt atque, obcaecati provident nam minus nihil quaerat aperiam molestiae deserunt eos!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact">                
            <!-- <picture>
                <source srcset="src/img/contact-background-compressed.png">
                <img src="src/img/contact-background.png">
            </picture> -->
            <div class="container">
                <div class="row">
                    <div class="intro">
                        <h1>Contact Us</h1>
                        <p class="fst-italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam eveniet hic soluta enim placeat maxime? Magnam reprehenderit voluptas, delectus qui eius possimus corporis! Doloribus autem dolore, ratione ad distinctio blanditiis.</p>
                    </div>
                </div>
                <form method="get" action="#">
                <div class="row">
                        <div class="col-12 col-sm-6">
                            <input class="form-control mb-4" type="text" id="name" name="name" placeholder="YOUR NAME *" required>
                            <input class="form-control mb-4" type="text" id="email" name="email" placeholder="YOUR E-MAIL *" required>
                            <input class="form-control mb" type="text" id="subject" name="subject" placeholder="SUBJECT">
                        </div>
                        <div class="col-12 col-sm-6">
                            <textarea class="form-control" id="message" name="message" placeholder="YOUR MESSAGE *"></textarea>
                        </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <button type="submit" class="btn">Send Message</button>
                    </div>
                </div>
            </form>
            </div>
        </section>

        <footer id="footer">
            <div class="row">
                <div class="col-12 col-md-4">
                    <p class="mt-4 text-center">&copy; Copyright 2014 FreebiesXpress.com</p>
                </div>
                <div class="col-12 col-md-4">
                    <div class="d-flex justify-content-center mb-3 mt-md-2">
                        <a class="footer-icon d-flex flex-column justify-content-center" href="#">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a class="footer-icon d-flex flex-column justify-content-center" href="#">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a class="footer-icon d-flex flex-column justify-content-center" href="#">
                            <i class="bi bi-pinterest"></i>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    
    </div>

    </body>
</html>