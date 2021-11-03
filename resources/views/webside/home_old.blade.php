@extends('layouts.app')
@section('content')
<style type="text/css">
.videosize {
    position: absolute;
    height: 100%;
    object-fit: initial;
}
</style>
<body onload="load()">>
<section style="height: 600px;" style="background-color: #2E6DDF">
  <video class="videosize" playsinline="playsinline" id="myVideo" autoplay="autoplay" muted="muted" loop="loop">
    <source src="{{config('app.baseURL')}}/storage/app/video/video.mp4" type="video/mp4">
  </video>
</section>
<br><br>

<div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12 text-center">
                    <!-- section-title -->
                    <div class="section-title">
                        <h2>Proud of you Matoshreeans</h2>
                        <p>_</p>
                    </div>
                </div>
                <!-- /.section-title -->
            </div>
  <div class='row'>
    <div class='colmedia-md-8' style="width: 100%;">
      <div class="carousel slide media-carousel" id="media">
        <div class="carousel-inner">
          <div class="item  active">
            <div class="row">
              <div class="col-md-4">
                                <div class="">
                    <div class="video-testimonial-block">
                        <div class="video">
                            <iframe src="https://www.youtube.com/embed/KEiAVv1UNac" 
                             allowfullscreen>
                            </iframe>
                        </div>
                        <a href="#" class="video-play"></a>
                    </div>
                    <div class="video-testimonial-content">
                        <h4 class="mb10">Alisha A. Delapaz</h4>
                        <p>Retirement Planning</p>
                    </div>
                </div>
              </div>          
              <div class="col-md-4">
                                <div class="">
                    <div class="video-testimonial-block">
                        <div class="video">
                            <iframe src="https://www.youtube.com/embed/KEiAVv1UNac" 
                             allowfullscreen>
                            </iframe>
                        </div>
                        <a href="#" class="video-play"></a>
                    </div>
                    <div class="video-testimonial-content">
                        <h4 class="mb10">Alisha A. Delapaz</h4>
                        <p>Retirement Planning</p>
                    </div>
                </div>
              </div>
              <div class="col-md-4">
                                <div class="">
                    <div class="video-testimonial-block">
                        <div class="video">
                            <iframe src="https://www.youtube.com/embed/KEiAVv1UNac" 
                             allowfullscreen>
                            </iframe>
                        </div>
                        <a href="#" class="video-play"></a>
                    </div>
                    <div class="video-testimonial-content">
                        <h4 class="mb10">Alisha A. Delapaz</h4>
                        <p>Retirement Planning</p>
                    </div>
                </div>
              </div>        
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-4">
                                <div class="">
                    <div class="video-testimonial-block">
                        <div class="video">
                            <iframe src="https://www.youtube.com/embed/KEiAVv1UNac" 
                             allowfullscreen>
                            </iframe>
                        </div>
                        <a href="#" class="video-play"></a>
                    </div>
                    <div class="video-testimonial-content">
                        <h4 class="mb10">Alisha A. Delapaz</h4>
                        <p>Retirement Planning</p>
                    </div>
                </div>
              </div>          
              <div class="col-md-4">
                                <div class="">
                    <div class="video-testimonial-block">
                        <div class="video">
                            <iframe src="https://www.youtube.com/embed/KEiAVv1UNac" 
                             allowfullscreen>
                            </iframe>
                        </div>
                        <a href="#" class="video-play"></a>
                    </div>
                    <div class="video-testimonial-content">
                        <h4 class="mb10">Alisha A. Delapaz</h4>
                        <p>Retirement Planning</p>
                    </div>
                </div>
              </div>
              <div class="col-md-4">
                                <div class="">
                    <div class="video-testimonial-block">
                        <div class="video">
                            <iframe src="https://www.youtube.com/embed/KEiAVv1UNac" 
                             allowfullscreen>
                            </iframe>
                        </div>
                        <a href="#" class="video-play"></a>
                    </div>
                    <div class="video-testimonial-content">
                        <h4 class="mb10">Alisha A. Delapaz</h4>
                        <p>Retirement Planning</p>
                    </div>
                </div>
              </div>        
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-4">
                                <div class="">
                    <div class="video-testimonial-block">
                        <div class="video">
                            <iframe src="https://www.youtube.com/embed/KEiAVv1UNac" 
                             allowfullscreen>
                            </iframe>
                        </div>
                        <a href="#" class="video-play"></a>
                    </div>
                    <div class="video-testimonial-content">
                        <h4 class="mb10">Alisha A. Delapaz</h4>
                        <p>Retirement Planning</p>
                    </div>
                </div>
              </div>          
              <div class="col-md-4">
                                <div class="">
                    <div class="video-testimonial-block">
                        <div class="video">
                            <iframe src="https://www.youtube.com/embed/KEiAVv1UNac" 
                             allowfullscreen>
                            </iframe>
                        </div>
                        <a href="#" class="video-play"></a>
                    </div>
                    <div class="video-testimonial-content">
                        <h4 class="mb10">Alisha A. Delapaz</h4>
                        <p>Retirement Planning</p>
                    </div>
                </div>
              </div>
              <div class="col-md-4">
                               <div class="">
                    <div class="video-testimonial-block">
                        <div class="video">
                            <iframe src="https://www.youtube.com/embed/KEiAVv1UNac" 
                             allowfullscreen>
                            </iframe>
                        </div>
                        <a href="#" class="video-play"></a>
                    </div>
                    <div class="video-testimonial-content">
                        <h4 class="mb10">Alisha A. Delapaz</h4>
                        <p>Retirement Planning</p>
                    </div>
                </div>
              </div>      
            </div>
          </div>
        </div>
        <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
        <a data-slide="next" href="#media" class="right carousel-control">›</a>
      </div>                          
    </div>
  </div>
</div>

    <br><br><br><br>
<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(http://localhost/matoshri_classes/assets/img/b.jpg); object-fit;"  >
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Education is the manifestation of the perfection already in you.</h1>
									<h2>Brought to you by <a>Swami Vivekananda</a></h2>
									<p><a class="btn btn-primary btn-lg" href="#">Start Learning Now!</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(http://localhost/matoshri_classes/assets/img/3.jpg); object-fit; " >
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Arise Awake and stop till not rhe goal is reach.</h1>
									<h2>Brought to you by <a>Swami Vivekananda</a></h2>
									<p><a class="btn btn-primary btn-lg" href="#">Start Learning Now!</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(http://localhost/matoshri_classes/assets/img/3.jpg); object-fit;"  >
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Education is not information its transformation.</h1>
									<h2>Brought to you by <a>Swami Vivekananda</a></h2>
									<p><a class="btn btn-primary btn-lg" href="#">Start Learning Now!</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(http://localhost/matoshri_classes/assets/img/2.jpg); object-fit;"  >
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Purusharth Charitrya Udarta.</h1>
									<h2>Brought to you by <a>Swami Vivekananda</a></h2>
									<p><a class="btn btn-primary btn-lg" href="#">Start Learning Now!</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(http://localhost/matoshri_classes/assets/img/3.jpg); object-fit;"  >
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>All differences in this world are of degree, and not of kind, because oneness is the secret of everything.</h1>
									<h2>Brought to you by <a>Swami Vivekananda</a></h2>
									<p><a class="btn btn-primary btn-lg" href="#">Start Learning Now!</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(http://localhost/matoshri_classes/assets/img/3.jpg); object-fit;"  >
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Truth can be stated in a thousand different ways, yet each one can be true.</h1>
									<h2>Brought to you by <a>Swami Vivekananda</a></h2>
									<p><a class="btn btn-primary btn-lg" href="#">Start Learning Now!</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>	   	
		  	</ul>
	  	</div>
	</aside>
	<div id="fh5co-course-categories" style="background-color: #2E6DDF; color: #fff;"data-stellar-background-ratio="0.5">
		<div class="container" >
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2 style="color: #fff;">Why Matoshri</h2>
					<p>__</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon" style="color: #fff;">
							<i class="icon-shop"></i>
						</span>
						<div class="desc">
							<h3><a href="#" style="color: #fff;">Academic Excellence</a></h3>
							<p>Excellent private secondary schools provide richer educational curriculum to capture the abilities of each student.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon" style="color: #fff;">
							<i class="icon-heart4"></i>
						</span>
						<div class="desc">
							<h3><a href="#" style="color: #fff;">Support Facilities</a></h3>
							<p>Private educational institutions are known to offer modern learning facilities to provide opportunities for students to participate in academic and non-academic activities.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services" style="color: #fff;">
						<span class="icon">
							<i class="icon-banknote"></i>
						</span>
						<div class="desc">
							<h3><a href="#" style="color: #fff;">Individualized Attention</a></h3>
							<p>Quality private secondary schools are distinguished by how they handle students as individuals by responding to their specific learning needs.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services" style="color: #fff;">
						<span class="icon">
							<i class="icon-lab2"></i>
						</span>
						<div class="desc">
							<h3><a href="#" style="color: #fff;">Parental and Community Involvement</a></h3>
							<p>Quality private schools encourage the active involvement of parents in their child’s education. Their aim is to promote positive behavioral expectations, social teachings and a sense of community among students, faculty and parents.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services" style="color: #fff;">
						<span class="icon">
							<i class="icon-photo"></i>
						</span>
						<div class="desc">
							<h3><a href="#" style="color: #fff;">Art &amp; Media</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services" style="color: #fff;">
						<span class="icon">
							<i class="icon-bubble3"></i>
						</span>
						<div class="desc">
							<h3><a href="#" style="color: #fff;">Language</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-counter" class="fh5co-counters" style="background-image: url(http://localhost/matoshri_classes/assets/img/back2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row">
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-world"></i></span>
							<span class="fh5co-counter js-counter" data-from="0" data-to="7500" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">ImpleMentors</span>
						</div>
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-study"></i></span>
							<span class="fh5co-counter js-counter" data-from="0" data-to=" 500" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">lectures</span>
						</div>
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-bulb"></i></span>
							<span class="fh5co-counter js-counter" data-from="0" data-to="21" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">years of expertise</span>
						</div>
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-head"></i></span>
							<span class="fh5co-counter js-counter" data-from="0" data-to="25" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Year of Class</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Our Course</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(images/project-1.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">9th 10th SSC</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(images/project-2.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">11th 12th Commerce</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(images/project-3.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">MBA BBA</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(images/project-4.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Yashacha Mantra ShivTantra</a></h3>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-testimonial" style="background-image: url(images/school.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><span>Testimonials</span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
							<div class="item">
								<div class="testimony-slide active text-center">
									<div class="user" style="background-image: url(images/person1.jpg);"></div>
									<span>Mary Walker<br><small>Students</small></span>
									<blockquote>
										<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<div class="user" style="background-image: url(images/person2.jpg);"></div>
									<span>Mike Smith<br><small>Students</small></span>
									<blockquote>
										<p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<div class="user" style="background-image: url(images/person3.jpg);"></div>
									<span>Rita Jones<br><small>Teacher</small></span>
									<blockquote>
										<p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Up Coming </h2>
					<p>-</p>
				</div>
			</div>
			<div class="row row-padded-mb">
				<div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span>15<br>Mar.</span></div>
						<h3><a href="#">USA, International Triathlon Event</a></h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<p><a href="#">Read More</a></p>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span>15<br>Mar.</span></div>
						<h3><a href="#">USA, International Triathlon Event</a></h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<p><a href="#">Read More</a></p>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span>15<br>Mar.</span></div>
						<h3><a href="#">New Device Develope by Microsoft</a></h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<p><a href="#">Read More</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-pricing" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Plan &amp; Pricing</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="pricing pricing--rabten">
					<div class="col-md-4 animate-box">
						<div class="pricing__item">
							<div class="wrap-price">
								 <!-- <div class="icon icon-user2"></div> -->
	                     <h3 class="pricing__title">Trial</h3>
	                     <!-- <p class="pricing__sentence">Single user license</p> -->
							</div>
                     <div class="pricing__price">
                        <span class="pricing__anim pricing__anim--1">
								<span class="pricing__currency">$</span>0
                        </span>
                        <span class="pricing__anim pricing__anim--2">
								<span class="pricing__period">per year</span>
                        </span>
                     </div>
                     <div class="wrap-price">
                     	<ul class="pricing__feature-list">
	                        <li class="pricing__feature">One Day Trial</li>
	                        <li class="pricing__feature">Limited Courses</li>
	                        <li class="pricing__feature">Free 3 Lessons</li>
	                        <li class="pricing__feature">No Supporter</li>
	                        <li class="pricing__feature">No Tutorial</li>
	                        <li class="pricing__feature">No Ebook</li>
	                         <li class="pricing__feature">Limited Registered User</li>
	                     </ul>
	                     <button class="pricing__action">Choose plan</button>
                     </div>
                  </div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="pricing__item">
							<div class="wrap-price">
								<!-- <div class="icon icon-store"></div> -->
	                     <h3 class="pricing__title">Silver</h3>
	                     <!-- <p class="pricing__sentence">Up to 5 users</p> -->
							</div>
                     <div class="pricing__price">
                        <span class="pricing__anim pricing__anim--1">
								<span class="pricing__currency">$</span>79
                        </span>
                        <span class="pricing__anim pricing__anim--2">
								<span class="pricing__period">per year</span>
                        </span>
                     </div>
                     <div class="wrap-price">
                     	<ul class="pricing__feature-list">
	                        <li class="pricing__feature">One Year Standard Access</li>
	                        <li class="pricing__feature">Limited Courses</li>
	                        <li class="pricing__feature">300+ Lessons</li>
	                        <li class="pricing__feature">Random Supporter</li>
	                        <li class="pricing__feature">View Only Ebook</li>
	                        <li class="pricing__feature">Standard Tutorials</li>
	                         <li class="pricing__feature">Unlimited Registered User</li>
	                     </ul>
	                     <button class="pricing__action">Choose plan</button>
                     </div>
                 </div>
					</div>
					<div class="col-md-4 animate-box">
                  <div class="pricing__item">
                  	<div class="wrap-price">
                  		<!-- <div class="icon icon-home2"></div> -->
	                     <h3 class="pricing__title">Gold</h3>
	                     <!-- <p class="pricing__sentence">Unlimited users</p> -->
							</div>
                     <div class="pricing__price">
                        <span class="pricing__anim pricing__anim--1">
								<span class="pricing__currency">$</span>499
                        </span>
                        <span class="pricing__anim pricing__anim--2">
								<span class="pricing__period">per year</span>
                        </span>
                     </div>
                     <div class="wrap-price">
                     	<ul class="pricing__feature-list">
	                        <li class="pricing__feature">Life Time Access</li>
	                        <li class="pricing__feature">Unlimited All Courses</li>
	                        <li class="pricing__feature">7000+ Lessons &amp; Growing</li>
	                        <li class="pricing__feature">Free Supporter</li>
	                        <li class="pricing__feature">Free Ebook Downloads</li>
	                        <li class="pricing__feature">Premium Tutorials</li>
	                         <li class="pricing__feature">Unlimited Registered User</li>
	                     </ul>
	                     <button class="pricing__action">Choose plan</button>
                     </div>
                  </div>
               </div>
            </div>
			</div>
		</div>
	</div>

	<div id="fh5co-gallery" class="fh5co-bg-section">
		<div class="row text-center">
			<h2><span>Instagram Gallery</span></h2>
		</div>
		<div class="row">
			<div class="col-md-3 col-padded">
				<a href="#" class="gallery" style="background-image: url(images/project-5.jpg);"></a>
			</div>
			<div class="col-md-3 col-padded">
				<a href="#" class="gallery" style="background-image: url(images/project-2.jpg);"></a>
			</div>
			<div class="col-md-3 col-padded">
				<a href="#" class="gallery" style="background-image: url(images/project-3.jpg);"></a>
			</div>
			<div class="col-md-3 col-padded">
				<a href="#" class="gallery" style="background-image: url(images/project-4.jpg);"></a>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
function load(){
var video=document.getElementById("myVideo");
console.log(video.muted);
$('video').prop('muted', false);
}

	    $(".video-play").on('click', function(e) {
        e.preventDefault(); 
        var vidWrap = $(this).parent(),
            iframe = vidWrap.find('.video iframe'),
            iframeSrc = iframe.attr('src'),
            iframePlay = iframeSrc += "?autoplay=1";
        vidWrap.children('.video-thumbnail').fadeOut();
        vidWrap.children('.video-play').fadeOut();
        vidWrap.find('.video iframe').attr('src', iframePlay);


    });
</script>
@endsection