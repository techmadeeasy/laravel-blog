@extends("layouts.template")

@section("content")
<section id="home-section" class="hero">
    <div class="home-slider  owl-carousel">
        <div class="slider-item ">
            <div class="overlay"></div>
            <div class="container">
                <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
                    <div class="one-third order-md-last img" style="background-image:url(images/bg_1.jpg);">
                        <div class="overlay"></div>
                    </div>
                    <div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                            <span class="ion-ios-play play"></span>
                        </a>
                        <div class="text">
                            <span class="subheading">Hello</span>
                            <h1 class="mb-4 mt-3">I'm <span>Niko Bochser</span></h1>
                            <h2 class="mb-4">A Freelance Web Developer</h2>
                            <p><a href="#" class="btn-custom">Hire me</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item">
            <div class="overlay"></div>
            <div class="container">
                <div class="row d-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
                    <div class="one-third order-md-last img" style="background-image:url(images/bg_2.jpg);">
                        <div class="overlay"></div>
                    </div>
                    <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                            <span class="ion-ios-play play"></span>
                        </a>
                        <div class="text">
                            <h1 class="mb-4 mt-3">I'm a <span>web designer</span> from Scotland</h1>
                            <p><a href="#" class="btn-custom">Hire me</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-about ftco-counter img ftco-section" id="about-section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 col-lg-5 d-flex">
                <div class="img-about img d-flex align-items-stretch">
                    <div class="overlay"></div>
                    <div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/about-1.jpg);">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-7 pl-lg-5 py-5">
                <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading">Welcome</span>
                        <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">About Me</h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="media block-6 services d-block ftco-animate">
                            <div class="icon"><span class="flaticon-analysis"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">Web Design</h3>
                                <p>A small river named Duden flows by their place and supplies.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="media block-6 services d-block ftco-animate">
                            <div class="icon"><span class="flaticon-analysis"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">Web Application</h3>
                                <p>A small river named Duden flows by their place and supplies.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="counter-wrap ftco-animate d-flex mt-md-3">
                    <div class="text p-4 pr-5 bg-primary">
                        <p class="mb-0">
                            <span class="number" data-number="200">0</span>
                            <span>Finished Projects</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light" id="skills-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Skills</span>
                <h2 class="mb-4">My Skills</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate">
                    <h3>Photoshop</h3>
                    <div class="progress">
                        <div class="progress-bar color-1" role="progressbar" aria-valuenow="75"
                             aria-valuemin="0" aria-valuemax="100" style="width:75%">
                            <span>75%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate">
                    <h3>jQuery</h3>
                    <div class="progress">
                        <div class="progress-bar color-2" role="progressbar" aria-valuenow="60"
                             aria-valuemin="0" aria-valuemax="100" style="width:60%">
                            <span>60%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate">
                    <h3>HTML5</h3>
                    <div class="progress">
                        <div class="progress-bar color-3" role="progressbar" aria-valuenow="85"
                             aria-valuemin="0" aria-valuemax="100" style="width:85%">
                            <span>85%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate">
                    <h3>CSS3</h3>
                    <div class="progress">
                        <div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
                             aria-valuemin="0" aria-valuemax="100" style="width:90%">
                            <span>90%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate">
                    <h3>WordPress</h3>
                    <div class="progress">
                        <div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
                             aria-valuemin="0" aria-valuemax="100" style="width:70%">
                            <span>70%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate">
                    <h3>SEO</h3>
                    <div class="progress">
                        <div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100" style="width:80%">
                            <span>80%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center py-5 mt-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">What I Do</span>
                <h2 class="mb-4">Strategy, design and a bit of magic</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 text-center d-flex ftco-animate">
                <div class="services-1">
							<span class="icon">
								<i class="flaticon-analysis"></i>
							</span>
                    <div class="desc">
                        <h3 class="mb-5"><a href="#">Explore</a></h3>
                        <h4>Design Sprints</h4>
                        <h4>Product Strategy</h4>
                        <h4>UX Strategy</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center d-flex ftco-animate">
                <div class="services-1">
							<span class="icon">
								<i class="flaticon-flasks"></i>
							</span>
                    <div class="desc">
                        <h3 class="mb-5"><a href="#">Create</a></h3>
                        <h4>Information</h4>
                        <h4>UX/UI Design</h4>
                        <h4>Branding</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center d-flex ftco-animate">
                <div class="services-1">
							<span class="icon">
								<i class="flaticon-ideas"></i>
							</span>
                    <div class="desc">
                        <h3 class="mb-5"><a href="#">Learn</a></h3>
                        <h4>Prototyping</h4>
                        <h4>User Testing</h4>
                        <h4>UI Testing</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-hireme">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-9 d-flex align-items-center ftco-animate">
                <h2>I'm <span>Available</span> For Freelancing</h2>
            </div>
            <div class="col-md-4 col-lg-3 d-flex align-items-center ftco-animate">
                <p class="mb-0"><a href="#" class="btn btn-white py-4 px-5">Hire me</a></p>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-project" id="projects-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Accomplishments</span>
                <h2 class="mb-4">Our Projects</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="project img ftco-animate img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/project-1.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center p-4">
                        <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                        <span>Web Design</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-2.jpg);">
                            <div class="overlay"></div>
                            <div class="text text-center p-4">
                                <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                                <span>Web Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-3.jpg);">
                            <div class="overlay"></div>
                            <div class="text text-center p-4">
                                <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                                <span>Web Design</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-4.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center p-4">
                        <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                        <span>Web Design</span>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-5.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center p-4">
                        <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                        <span>Web Design</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section bg-light" id="blog-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Blog</span>
                <h2 class="mb-4">Our Blog</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
        <div class="row d-flex">
            @foreach($posts as $post)
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center mb-3 meta">
                            <p class="mb-0">
                                <span class="mr-2">March 23, 2019</span>
                                <a href="{{route('blog', $post->id)}}" class="mr-2">{{ $post->user->name }}</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                        <h3 class="heading"><a href="single.html">{{ $post->title }}</a></h3>
                        <p>{{ $post->body }}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center mb-3 meta">
                            <p class="mb-0">
                                <span class="mr-2">March 23, 2019</span>
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                        <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry">
                    <a href="single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center mb-3 meta">
                            <p class="mb-0">
                                <span class="mr-2">March 23, 2019</span>
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                        <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p style="text-align: center"><a href="#" class="btn-custom">View More </a></p>
</section>

<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Contact</span>
                <h2 class="mb-4">Contact Me</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>

        <div class="row no-gutters block-9">
            <div class="col-md-6 order-md-last d-flex">
                <form action="#" class="bg-light p-4 p-md-5 contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>

            <div class="col-md-6 d-flex">
                <div class="img" style="background-image: url(images/about.jpg);"></div>
            </div>
        </div>
    </div>
</section>


    @endsection