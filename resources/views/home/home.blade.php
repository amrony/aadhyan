@extends('master')

@section('css')
<style>


.loader {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  position: absolute;
  z-index: 1;
  border: 10px solid #efefef;
  border-top: 10px solid #ff8f3f;
  box-shadow: 0 0 5px 0 rgba(0, 0, 0, .3);
  top: 50%;
  left: 50%;
  transition: .3s;
  transform: translate(-50%, -50%) rotate(0deg);
  animation: loader 2s linear infinite;
}

.loader-inner {
  width:40px;
  height: 40px;
  margin: auto;
  transform: translate(0, 0) rotate(0deg);
  border-radius: 50%;
  border: 8px solid #e2e2e2;
  border-bottom: 8px solid #66a0ff;
  animation: loaderInner 1s linear reverse infinite;
}

@keyframes loader {
  100% {
    transform: translate(-50%, -50%) rotate(360deg);
  }
}

@keyframes loaderInner {
  100% {
    transform: translate(0, 0) rotate(360deg);
  }
}

/* Required styles for the slider */

.slider {
	position: relative;
	overflow: hidden;
	transition: 0.3s;
}

.slider ul {
	position: absolute;
}

.slider li {
	float: left;
	line-height: 0;
	text-align: center;
}

.slider li img {
	width: 100%;
}

.navigator {
	position: absolute;
	bottom: 5px;
	width: 100%;
	text-align: center;
}

.navigator span {
	display: inline-block;
	width: 10px;
	height: 10px;
	border-radius: 3px;
	background: #606161;
	margin: 0 4px;
	transition: 0.1s;
	position: relative;
	top: 0;
}

.navigator span.active {
	background: orange;
	width: 10px;
	height: 10px;
}

.slider > span {
	position: absolute;
	top: 50%;
	background: rgba(0,0,0,0.5);
	z-index: 1;
	padding: 6px 10px;
	margin: -10px 0 0;
	color: white;
	cursor: pointer;
	transition: 0.3s;
}

.prev {
	left: 0;
	transform: rotate(90deg);
	transform-origin: 0 0;
}

.next {
	right: -1px;
	transform: rotate(-90deg);
	transform-origin: 100% 0%;
}

.slider:hover span, .slider:hover .autoPlay {
	transform: rotate(0deg);
}

.autoPlay {
	position: absolute;
	bottom: 0;
	left: 0;
	color: white;
	transform: translateY(50px);
	transition: .3s;
}

.autoPlay label {
	background: rgba(0, 0, 0, .4);
	padding: 10px;
	display: block;
}

.autoPlay .chkbox {
	display: none;
}

.autoPlay .chkbox:checked + label {
	background: rgba(0, 0, 0, .7);
}


.scrollmenu {
  /* background-color: #333; */
  overflow: auto;
  white-space: nowrap;
}

/* Make it adaptive to any layout */

@media (max-width: 1200px) { 
	.center {
		width: 100%;
		padding: 0 15px;
	}
}

</style>

@endsection

@section('body')

<div>
  <div class="center">
 
        <div class="slider">      
          <ul>
            <li><img src="https://images.unsplash.com/photo-1588392382834-a891154bca4d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1055&q=80" height="500px" /></li>
            <li><img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDF8fHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" height="500px" /></li>
            <li><img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDJ8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" height="500px" /></li>
            <li><img src="https://images.unsplash.com/reserve/HgZuGu3gSD6db21T3lxm_San%20Zenone.jpg?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" height="500px" /></li>
            <li><img src="https://images.unsplash.com/photo-1426604966848-d7adac402bff?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDN8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" height="500px" /></li>
          </ul>
        </div>
      </div> 
</div>


{{-- <div class="col-md-8">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img  src="https://wowslider.com/sliders/demo-93/data1/images/lake.jpg" style="width: 100%" height="400px" class="d-block" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://demos.creative-tim.com/material-kit-pro/assets/img/bg2.jpg" style="width: 100%" height="400px" class="d-block" alt="...">
    </div>
    <div class="carousel-item">
      <img  src="https://wowslider.com/sliders/demo-93/data1/images/lake.jpg" style="width: 100%" height="400px" class="d-block" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>   --}}



  
      <!-- ======= About Section ======= -->
      <section class="about">
        <div class="container first-content" data-aos="fade-up">
  
          <div class="section-title">
            <h2>OUR COURSES</h2>
          </div>
  
          <div class="row">
      
            <div id="our-courses" class="col-lg-6 col-12 pt-3 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
              <div class="card" style="background-color: #7C83FF; color: white; height: 180px;">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-4 col-4">
                      <img src="https://pngimg.com/uploads/phone_hand/phone_hand_PNG21.png" height="100px">
                    </div>
                    <div class="col-md-8 col-8">
                      <h3 class="card-title">aadhyan Digital Learning</h3>
                      <p class="card-text">Enjoy uninterupted exam preparation through our onbline application by best faculties</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <!-- <div class="col-lg-1"></div> -->
  
            <div class="col-lg-6 col-12 pt-3 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
              <div class="card" style="background-color: #6AB0F6; color: white; height: 180px;">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-4 col-4">
                      <img src="https://pngimg.com/uploads/phone_hand/phone_hand_PNG21.png" height="100px">
                    </div>
                    <div class="col-md-8 col-8">
                      <h3 class="card-title">aadhyan Classroom Learning</h3>
                      <p class="card-text">Enjoy 1 : 1 Classes by our popular teachers at our offline centers</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section>
      <!-- End About Section -->

      
  
      <section id="online-courses" class="about">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Introducing aadhyan Online Courses</h2>
          </div>
          <div class="row">
            
          <div class="tabs-to-dropdown">

            

            <div class="nav-wrapper d-flex align-items-center justify-content-center">
              <div class="">
                <ul class="nav nav-pills d-md-flex" id="pills-tab" role="tablist">

                {{-- 
                  <li class="nav-item" role="presentation">
                    <button class="nav-link custom_button button2 active"  id="neet-tab" data-toggle="pill" href="#neet"><b>NEET</b></button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link custom_button button2"  id="jee-tab" data-toggle="pill" href="#jee"><b>JEE</b></button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link custom_button button2" id="board-tab" data-toggle="pill" href="#board"><b>BOARD</b></button>
                  </li> --}}

                  
                    

                  {{-- <li class="nav-item" role="presentation">
                    <button class="nav-link custom_button button2 active"  id="neet-tab" data-toggle="pill" href="#neet" aria-selected="true"><b>NEET</b></button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link custom_button button2"  id="jee-tab" data-toggle="pill" href="#jee" aria-selected="false"><b>JEE</b></button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link custom_button button2" id="board-tab" data-toggle="pill" href="#board"><b>BOARD</b></button>
                  </li> --}}

                
                </ul>
              </div>
            </div>

            

            <div class="tab-content" id="pills-tabContent">
              
              <div class="tab-pane fade show active" id="neet" role="tabpanel">
                <div class="container text-center my-3 tab-card">
                  <div class="row mx-auto my-auto">
                      <div id="recipeCarousel" style="height: 370px" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner" role="listbox">
                              <div class="carousel-item active">
                                  <div class="col-md-4">
                                      <div class="card-body">
                                        <div class="card" style="border-radius: 13px;">
                                          <div class="card-header aadhyan-card-first text-center" style="border-top-right-radius: 13px; border-top-left-radius: 13px;">
                                            NEET 2022 PRO LIVE
                                          </div>
                                          <div class="card-body text-center">
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Live Video Classes</span>
                                              <p class=""  style="margin: 0 auto; border: 1px solid #FFB280; width: 60%;"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Video lectures</span>
                                              <p class=""  style="margin: 0 auto; border: 1px solid #FFB280; width: 60%;"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Study Materials</span>
                                              <p class=""  style="margin: 0 auto; border: 1px solid #FFB280; width: 60%;"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">MCQ Practice Paper</span>
                                              <p class=""  style="margin: 0 auto; border: 1px solid #FFB280; width: 60%;"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Online Test Series</span>
                                              <p class=""  style="margin: 0 auto; border: 1px solid #FFB280; width: 60%;"></p>
                                            </div>
                          
                          
                                            
                                            <div style="margin-bottom: 5px;">
                                              <div class="card-text">
                                                <button type="button" class="btn mt-3 aadhyan-card-button">Enroll Now</button>
                                              </div>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span><img src="assets/img/male-icon.png" style="width: 20px; height: 20px;">5000+ Students Enrolled</span>
                                            </div>
                          
                                            <div class="aadhyan-card-footer">
                                              <span>EMI starting @ 240/- month</span>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="carousel-item">
                                  <div class="col-md-4">
                                      <div class="card-body">
                                        <div class="card" style="border-radius: 13px;">
                                          <div class="card-header aadhyan-card-second text-center" style="border-top-right-radius: 13px; border-top-left-radius: 13px;">
                                            NEET 2022 PRO LIVE
                                          </div>
                                          <div class="card-body text-center">
                                            <div style="margin-bottom: 7px; ">
                                              <span class="card-text">Live Video Classes</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Video lectures</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Study Materials</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">MCQ Practice Paper</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Online Test Series</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                          
                                            
                                            <div style="margin-bottom: 5px;">
                                              <div class="card-text">
                                                <button type="button" class="btn mt-3 aadhyan-card-button">Enroll Now</button>
                                              </div>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span><img src="assets/img/male-icon.png" class="aadhyan-card-img">5000+ Students Enrolled</span>
                                            </div>
                          
                                            <div class="aadhyan-card-footer">
                                              <span>EMI starting @ 240/- month</span>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                            
                              <div class="carousel-item">
                                  <div class="col-md-4">
                                      <div class="card-body">
                                        <div class="card" style="border-radius: 13px;">
                                          <div class="card-header aadhyan-card-second text-center" style="border-top-right-radius: 13px; border-top-left-radius: 13px;">
                                            NEET 2023 PRO LIVE
                                          </div>
                                          <div class="card-body text-center">
                                            <div style="margin-bottom: 7px; ">
                                              <span class="card-text">Live Video Classes</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Video lectures</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Study Materials</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">MCQ Practice Paper</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Online Test Series</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            
                                            <div style="margin-bottom: 5px;">
                                              <div class="card-text">
                                                <button type="button" class="btn mt-3 aadhyan-card-button">Enroll Now</button>
                                              </div>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span><img src="assets/img/male-icon.png" class="aadhyan-card-img">5000+ Students Enrolled</span>
                                            </div>
                          
                                            <div class="aadhyan-card-footer">
                                              <span>EMI starting @ 240/- month</span>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
  
                              <div class="carousel-item">
                                <div class="col-md-4">
                                    <div class="card-body">
                                      <div class="card" style="border-radius: 13px;">
                                        <div class="card-header aadhyan-card-second text-center" style="border-top-right-radius: 13px; border-top-left-radius: 13px;">
                                          NEET 2023 PRO LIVE
                                        </div>
                                        <div class="card-body text-center">
                                          <div style="margin-bottom: 7px; ">
                                            <span class="card-text">Live Video Classes</span>
                                            <p class="aadhyan-card-body"></p>
                                          </div>
                        
                                          <div style="margin-bottom: 5px;">
                                            <span class="card-text">Video lectures</span>
                                            <p class="aadhyan-card-body"></p>
                                          </div>
                        
                                          <div style="margin-bottom: 5px;">
                                            <span class="card-text">Study Materials</span>
                                            <p class="aadhyan-card-body"></p>
                                          </div>
                        
                                          <div style="margin-bottom: 5px;">
                                            <span class="card-text">MCQ Practice Paper</span>
                                            <p class="aadhyan-card-body"></p>
                                          </div>
                        
                                          <div style="margin-bottom: 5px;">
                                            <span class="card-text">Online Test Series</span>
                                            <p class="aadhyan-card-body"></p>
                                          </div>
                        
                                          
                                          <div style="margin-bottom: 5px;">
                                            <div class="card-text">
                                              <button type="button" class="btn mt-3 aadhyan-card-button">Enroll Now</button>
                                            </div>
                                          </div>
                        
                                          <div style="margin-bottom: 5px;">
                                            <span><img src="assets/img/male-icon.png" class="aadhyan-card-img">5000+ Students Enrolled</span>
                                          </div>
                        
                                          <div class="aadhyan-card-footer">
                                            <span>EMI starting @ 240/- month</span>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            
            
                          </div>
                          <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                              <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                              <span class="sr-only" style="">Next</span>
                          </a>
                      </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="jee" role="tabpanel">
                


                
                <div class="container text-center my-3 tab-card">
                  <div class="row mx-auto my-auto">
                      <div id="recipeCarousel" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner" role="listbox">
                              <div class="carousel-item active">
                                  <div class="col-md-4">
                                      <div class="card-body">
                                        <div class="card" style="border-radius: 13px;">
                                          <div class="card-header aadhyan-card-first text-center" style="border-top-right-radius: 13px; border-top-left-radius: 13px;">
                                            JEE 2022 PRO LIVE
                                          </div>
                                          <div class="card-body text-center">
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Live Video Classes</span>
                                              <p class=""  style="margin: 0 auto; border: 1px solid #FFB280; width: 60%;"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Video lectures</span>
                                              <p class=""  style="margin: 0 auto; border: 1px solid #FFB280; width: 60%;"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Study Materials</span>
                                              <p class=""  style="margin: 0 auto; border: 1px solid #FFB280; width: 60%;"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">MCQ Practice Paper</span>
                                              <p class=""  style="margin: 0 auto; border: 1px solid #FFB280; width: 60%;"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Online Test Series</span>
                                              <p class=""  style="margin: 0 auto; border: 1px solid #FFB280; width: 60%;"></p>
                                            </div>
                          
                          
                                            
                                            <div style="margin-bottom: 5px;">
                                              <div class="card-text">
                                                <button type="button" class="btn mt-3 aadhyan-card-button">Enroll Now</button>
                                              </div>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span><img src="assets/img/male-icon.png" style="width: 20px; height: 20px;">5000+ Students Enrolled</span>
                                            </div>
                          
                                            <div class="aadhyan-card-footer">
                                              <span>EMI starting @ 240/- month</span>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="carousel-item">
                                  <div class="col-md-4">
                                      <div class="card-body">
                                        <div class="card" style="border-radius: 13px;">
                                          <div class="card-header aadhyan-card-second text-center" style="border-top-right-radius: 13px; border-top-left-radius: 13px;">
                                            JEE 2022 PRO LIVE
                                          </div>
                                          <div class="card-body text-center">
                                            <div style="margin-bottom: 7px; ">
                                              <span class="card-text">Live Video Classes</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Video lectures</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Study Materials</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">MCQ Practice Paper</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Online Test Series</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                          
                                            
                                            <div style="margin-bottom: 5px;">
                                              <div class="card-text">
                                                <button type="button" class="btn mt-3 aadhyan-card-button">Enroll Now</button>
                                              </div>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span><img src="assets/img/male-icon.png" class="aadhyan-card-img">5000+ Students Enrolled</span>
                                            </div>
                          
                                            <div class="aadhyan-card-footer">
                                              <span>EMI starting @ 240/- month</span>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="carousel-item">
                                <div class="col-md-4">
                                    <div class="card-body">
                                      <div class="card" style="border-radius: 13px;">
                                        <div class="card-header aadhyan-card-second text-center" style="border-top-right-radius: 13px; border-top-left-radius: 13px;">
                                          JEE 2022 PRO LIVE
                                        </div>
                                        <div class="card-body text-center">
                                          <div style="margin-bottom: 7px; ">
                                            <span class="card-text">Live Video Classes</span>
                                            <p class="aadhyan-card-body"></p>
                                          </div>
                        
                                          <div style="margin-bottom: 5px;">
                                            <span class="card-text">Video lectures</span>
                                            <p class="aadhyan-card-body"></p>
                                          </div>
                        
                                          <div style="margin-bottom: 5px;">
                                            <span class="card-text">Study Materials</span>
                                            <p class="aadhyan-card-body"></p>
                                          </div>
                        
                                          <div style="margin-bottom: 5px;">
                                            <span class="card-text">MCQ Practice Paper</span>
                                            <p class="aadhyan-card-body"></p>
                                          </div>
                        
                                          <div style="margin-bottom: 5px;">
                                            <span class="card-text">Online Test Series</span>
                                            <p class="aadhyan-card-body"></p>
                                          </div>
                        
                        
                                          
                                          <div style="margin-bottom: 5px;">
                                            <div class="card-text">
                                              <button type="button" class="btn mt-3 aadhyan-card-button">Enroll Now</button>
                                            </div>
                                          </div>
                        
                                          <div style="margin-bottom: 5px;">
                                            <span><img src="assets/img/male-icon.png" class="aadhyan-card-img">5000+ Students Enrolled</span>
                                          </div>
                        
                                          <div class="aadhyan-card-footer">
                                            <span>EMI starting @ 240/- month</span>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="carousel-item">
                                  <div class="col-md-4">
                                      <div class="card-body">
                                        <div class="card" style="border-radius: 13px;">
                                          <div class="card-header aadhyan-card-second text-center" style="border-top-right-radius: 13px; border-top-left-radius: 13px;">
                                            JEE 2023 PRO LIVE
                                          </div>
                                          <div class="card-body text-center">
                                            <div style="margin-bottom: 7px; ">
                                              <span class="card-text">Live Video Classes</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Video lectures</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Study Materials</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">MCQ Practice Paper</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Online Test Series</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            
                                            <div style="margin-bottom: 5px;">
                                              <div class="card-text">
                                                <button type="button" class="btn mt-3 aadhyan-card-button">Enroll Now</button>
                                              </div>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span><img src="assets/img/male-icon.png" class="aadhyan-card-img">5000+ Students Enrolled</span>
                                            </div>
                          
                                            <div class="aadhyan-card-footer">
                                              <span>EMI starting @ 240/- month</span>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                            

                          </div>
                          <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                              <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                              <span class="sr-only" style="margin-right: -35px;">Next</span>
                          </a>
                      </div>
                  </div>
                </div>



              </div>

              <div class="tab-pane fade" id="board" role="tabpanel">
                
                
                <div class="container text-center my-3 tab-card">
                  <div class="row mx-auto my-auto">
                      <div id="recipeCarousel" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner" role="listbox">
                              <div class="carousel-item active">
                                  <div class="col-md-4">
                                      <div class="card-body">
                                        <div class="card" style="border-radius: 13px;">
                                          <div class="card-header aadhyan-card-first text-center" style="border-top-right-radius: 13px; border-top-left-radius: 13px;">
                                            BOARD 2022 PRO LIVE
                                          </div>
                                          <div class="card-body text-center">
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Live Video Classes</span>
                                              <p class=""  style="margin: 0 auto; border: 1px solid #FFB280; width: 60%;"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Video lectures</span>
                                              <p class=""  style="margin: 0 auto; border: 1px solid #FFB280; width: 60%;"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Study Materials</span>
                                              <p class=""  style="margin: 0 auto; border: 1px solid #FFB280; width: 60%;"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">MCQ Practice Paper</span>
                                              <p class=""  style="margin: 0 auto; border: 1px solid #FFB280; width: 60%;"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Online Test Series</span>
                                              <p class=""  style="margin: 0 auto; border: 1px solid #FFB280; width: 60%;"></p>
                                            </div>
                          
                          
                                            
                                            <div style="margin-bottom: 5px;">
                                              <div class="card-text">
                                                <button type="button" class="btn mt-3 aadhyan-card-button">Enroll Now</button>
                                              </div>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span><img src="assets/img/male-icon.png" style="width: 20px; height: 20px;">5000+ Students Enrolled</span>
                                            </div>
                          
                                            <div class="aadhyan-card-footer">
                                              <span>EMI starting @ 240/- month</span>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="carousel-item">
                                  <div class="col-md-4">
                                      <div class="card-body">
                                        <div class="card" style="border-radius: 13px;">
                                          <div class="card-header aadhyan-card-second text-center" style="border-top-right-radius: 13px; border-top-left-radius: 13px;">
                                            BOARD 2022 PRO LIVE
                                          </div>
                                          <div class="card-body text-center">
                                            <div style="margin-bottom: 7px; ">
                                              <span class="card-text">Live Video Classes</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Video lectures</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Study Materials</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">MCQ Practice Paper</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Online Test Series</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                          
                                            
                                            <div style="margin-bottom: 5px;">
                                              <div class="card-text">
                                                <button type="button" class="btn mt-3 aadhyan-card-button">Enroll Now</button>
                                              </div>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span><img src="assets/img/male-icon.png" class="aadhyan-card-img">5000+ Students Enrolled</span>
                                            </div>
                          
                                            <div class="aadhyan-card-footer">
                                              <span>EMI starting @ 240/- month</span>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                            
                              <div class="carousel-item">
                                  <div class="col-md-4">
                                      <div class="card-body">
                                        <div class="card" style="border-radius: 13px;">
                                          <div class="card-header aadhyan-card-second text-center" style="border-top-right-radius: 13px; border-top-left-radius: 13px;">
                                            BOARD 2023 PRO LIVE
                                          </div>
                                          <div class="card-body text-center">
                                            <div style="margin-bottom: 7px; ">
                                              <span class="card-text">Live Video Classes</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Video lectures</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Study Materials</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">MCQ Practice Paper</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Online Test Series</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            
                                            <div style="margin-bottom: 5px;">
                                              <div class="card-text">
                                                <button type="button" class="btn mt-3 aadhyan-card-button">Enroll Now</button>
                                              </div>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span><img src="assets/img/male-icon.png" class="aadhyan-card-img">5000+ Students Enrolled</span>
                                            </div>
                          
                                            <div class="aadhyan-card-footer">
                                              <span>EMI starting @ 240/- month</span>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="carousel-item">
                                <div class="col-md-4">
                                    <div class="card-body">
                                      <div class="card" style="border-radius: 13px;">
                                        <div class="card-header aadhyan-card-second text-center" style="border-top-right-radius: 13px; border-top-left-radius: 13px;">
                                          BOARD 2022 PRO LIVE
                                        </div>
                                        <div class="card-body text-center">
                                          <div style="margin-bottom: 7px; ">
                                            <span class="card-text">Live Video Classes</span>
                                            <p class="aadhyan-card-body"></p>
                                          </div>
                        
                                          <div style="margin-bottom: 5px;">
                                            <span class="card-text">Video lectures</span>
                                            <p class="aadhyan-card-body"></p>
                                          </div>
                        
                                          <div style="margin-bottom: 5px;">
                                            <span class="card-text">Study Materials</span>
                                            <p class="aadhyan-card-body"></p>
                                          </div>
                        
                                          <div style="margin-bottom: 5px;">
                                            <span class="card-text">MCQ Practice Paper</span>
                                            <p class="aadhyan-card-body"></p>
                                          </div>
                        
                                          <div style="margin-bottom: 5px;">
                                            <span class="card-text">Online Test Series</span>
                                            <p class="aadhyan-card-body"></p>
                                          </div>
                        
                        
                                          
                                          <div style="margin-bottom: 5px;">
                                            <div class="card-text">
                                              <button type="button" class="btn mt-3 aadhyan-card-button">Enroll Now</button>
                                            </div>
                                          </div>
                        
                                          <div style="margin-bottom: 5px;">
                                            <span><img src="assets/img/male-icon.png" class="aadhyan-card-img">5000+ Students Enrolled</span>
                                          </div>
                        
                                          <div class="aadhyan-card-footer">
                                            <span>EMI starting @ 240/- month</span>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            

                          </div>
                          <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                              <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                              <span class="sr-only" style="margin-right: -35px;">Next</span>
                          </a>
                      </div>
                  </div>
                </div>


              </div>

            </div>
          </div>
        </div>
  
        </div>
      </section>
  
  
      <!-- ======= Frequently Asked Questions Section ======= -->
      <section id="offline-courses" class="faq section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Introducing aadhyan Offline Courses</h2>
            <p style="color:#000; font-size: 18px;">aadhyan launches its Hybrid Coaching Classes (Residential
              & Non residential) for NEET, IIT-JEE, Foundation & Board.</p>
          </div>
  
          <div class="faq-list">
            <table class="offline-course-table">
              <tr class="table-row">
                <td style="width: 4%; padding: 5px;">
                  <span class="round-orange"></span>
                </td>
                <td data-bs-toggle="modal" data-bs-target="#exampleModal"  style="cursor: pointer;" class="offline-course-table-text">Agartala, Tripuraa</td>
                <td style="width: 4%;">
                  <span class="round-white"></span>
                </td>
              </tr>
  
              <tr class="table-row">
                <td style="width: 4%; padding: 5px;">
                  <span class="round-orange"></span>
                </td>
                <td data-bs-toggle="modal" data-bs-target="#exampleModal"  style="cursor: pointer;" class="offline-course-table-text">Agartala, Tripura</td>
                <td style="width: 4%;">
                  <span class="round-white"></span>
                </td>
              </tr>
  
              <tr class="table-row">
                <td style="width: 4%; padding: 5px;">
                  <span class="round-orange"></span>
                </td>
                <td data-bs-toggle="modal" data-bs-target="#exampleModal"  style="cursor: pointer;" class="offline-course-table-text">Agartala, Tripura</td>
                <td style="width: 4%;">
                  <span class="round-white"></span>
                </td>
              </tr>
  
              <tr class="table-row">
                <td style="width: 4%; padding: 5px;">
                  <span class="round-orange"></span>
                </td>
                <td data-bs-toggle="modal" data-bs-target="#exampleModal"  style="cursor: pointer;" class="offline-course-table-text">Agartala, Tripura</td>
                <td style="width: 4%;">
                  <span class="round-white"></span>
                </td>
              </tr>
  
              <tr class="table-row last-row">
                <td style="width: 4%; padding: 5px;">
                  <span class="round-orange"></span>
                </td>
                <td data-bs-toggle="modal" data-bs-target="#exampleModal"  style="cursor: pointer;" class="offline-course-table-text">Agartala, Tripura</td>
                <td style="width: 4%;">
                  <span class="round-white"></span>
                </td>
              </tr>
            </table>
          </div>
  
        </div>
      </section><!-- End Frequently Asked Questions Section -->
  
      <!-- ======= ADVANTAGE OF AADHYAN ONLINE COURSE Section ======= -->
      <section id="why-aadhyan" class="contact">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Advantage of aadhyan Online Course</h2>
          </div>
  
          <div class="row">
            <div class="col-md-3">
              <div class="card" style="background-color: #D2EEF9; margin-bottom: 10px; padding-top: 20px; height: 360px;">
                <img class="card-img-top" src="assets/img/Book-Icon.png" alt="Card image cap" style="width: 80px;height: 60p; height: 80px;margin: 0 auto;">
                <div class="card-body">
                  <h3 class="card-title text-center learn-aadhyan">Live + Recorded Classes</h3>
                  <p class="learn-aadhyan-text"> Interactive Live + Recorded classes by experienced
                    Faculties, Chat with educators, ask questions and get your doubts
                    cleared.</p>
                </div>
              </div>
            </div>
  
            <div class="col-md-3">
              <div class="card" style="background-color: #FFECEE; margin-bottom: 10px; padding-top: 20px; height: 360px;">
                <img class="card-img-top" src="assets/img/Book-Icon.png" alt="Card image cap" style="width: 80px;height: 60p; height: 80px;margin: 0 auto;">
                <div class="card-body">
                  <h3 class="card-title text-center learn-aadhyan">Study Materials</h3>
                  <p class="learn-aadhyan-text"> Specially designed Result oriented study materials for
                    NEET, IIT-JEE & FOUNDATION by Subject matter experts to enhance
                    students learning capacity.</p>
                </div>
              </div>
            </div>
  
            <div class="col-md-3">
              <div class="card" style="background-color: #F0EBFF; margin-bottom: 10px; padding-top: 20px;height: 360px;">
                <img class="card-img-top" src="assets/img/Book-Icon.png" alt="Card image cap" style="width: 80px;height: 60p; height: 80px;margin: 0 auto;">
                <div class="card-body">
                  <h3 class="card-title text-center learn-aadhyan">ALL INDIA TEST SERIES </h3>
                  <p class="learn-aadhyan-text">36+ ALL INDIA TEST Series with Detailed solutions for
                    NEET & IIT-JEE Exams with Performance analysing system.</p>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card" style="background-color: #F0EBFF; margin-bottom: 10px; padding-top: 20px; height: 360px;">
                <img class="card-img-top" src="assets/img/Book-Icon.png" alt="Card image cap" style="width: 80px;height: 60p; height: 80px;margin: 0 auto;">
                <div class="card-body">
                  <h3 class="card-title text-center learn-aadhyan">MCQ Practice Paper    </h3>
                  <p class="learn-aadhyan-text"> 200+ Chapter wish MCQ Practice Paper on each subject
                    framed by Top faculties to boost your performance.</p>
                </div>
              </div>
            </div>
          </div>
  
        </div>
      </section>
      <!-- End ADVANTAGE OF AADHYAN ONLINE COURSE Section -->



      <!-- ======= Advantage of aadhyan’s Class room coaching ======= -->
      <section id="why-aadhyan" class="contact">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Advantage of aadhyan’s Class room coaching</h2>
          </div>
  
          <div class="row">
            <div class="col-md-4">
              <div class="card" style="background-color: #D2EEF9; margin-bottom: 10px; padding-top: 20px; height: 360px;">
                <img class="card-img-top" src="assets/img/Book-Icon.png" alt="Card image cap" style="width: 80px;height: 60p; height: 80px;margin: 0 auto;">
                <div class="card-body">
                  <h3 class="card-title text-center learn-aadhyan">Hybrid Classroom</h3>
                  <p class="learn-aadhyan-text"> 1:1 Classroom Coaching by top faculties of aadhyan,
                    Special Live Interactive classes by KOTA Faculties for NEET & JEE Classes.</p>
                </div>
              </div>
            </div>
  
            <div class="col-md-4">
              <div class="card" style="background-color: #FFECEE; margin-bottom: 10px; padding-top: 20px; height: 360px;">
                <img class="card-img-top" src="assets/img/Book-Icon.png" alt="Card image cap" style="width: 80px;height: 60p; height: 80px;margin: 0 auto;">
                <div class="card-body">
                  <h3 class="card-title text-center learn-aadhyan">Access to aadhyan Application</h3>
                  <p class="learn-aadhyan-text"> Free access to aadhyan Android Application.</p>
                </div>
              </div>
            </div>
  
            <div class="col-md-4">
              <div class="card" style="background-color: #F0EBFF; margin-bottom: 10px; padding-top: 20px;height: 360px;">
                <img class="card-img-top" src="assets/img/Book-Icon.png" alt="Card image cap" style="width: 80px;height: 60p; height: 80px;margin: 0 auto;">
                <div class="card-body">
                  <h3 class="card-title text-center learn-aadhyan">Study Materials </h3>
                  <p class="learn-aadhyan-text">Specially designed Result oriented study materials for
                    NEET, IIT-JEE & FOUNDATION by Subject matter experts to enhance
                    students learning capacity.</p>
                </div>
              </div>
            </div>


          </div>

          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
              <div class="card" style="background-color: #F0EBFF; margin-bottom: 10px; padding-top: 20px; height: 360px;">
                <img class="card-img-top" src="assets/img/Book-Icon.png" alt="Card image cap" style="width: 80px;height: 60p; height: 80px;margin: 0 auto;">
                <div class="card-body">
                  <h3 class="card-title text-center learn-aadhyan">ALL INDIA TEST SERIES</h3>
                  <p class="learn-aadhyan-text">36+ ALL INDIA TEST Series with Detailed solutions for
                    NEET & IIT-JEE Exams.</p>
                </div>
              </div>
            </div>
  
            <div class="col-md-4">
              <div class="card" style="background-color: #FFECEE; margin-bottom: 10px; padding-top: 20px; height: 360px;">
                <img class="card-img-top" src="assets/img/Book-Icon.png" alt="Card image cap" style="width: 80px;height: 60p; height: 80px;margin: 0 auto;">
                <div class="card-body">
                  <h3 class="card-title text-center learn-aadhyan">MCQ Practice Paper & DPP</h3>
                  <p class="learn-aadhyan-text"> 200+ Chapter wish MCQ Practice Paper on each
                    subject framed by Top faculties to boost your performance & DPP Sheet
                    practice after each chapter completion.</p>
                </div>
              </div>
            </div>
            <div class="col-md-2"></div>
          </div>
  
        </div>
      </section>
      <!-- End Advantage of aadhyan’s Class room coaching Section -->

      <!-- ======= Input Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
  
          <div class="">
            <div class="row">
              <div class="col-md-3 col-lg-3"></div>
              <div class="col-md-6 col-md-6 col-12">
                <div class="row">
                  <div class="col-md-2 col-lg-2 col-2">
                    <img src="assets/img/male-icon.png" style="width: 80px; height: 80px;">
                  </div>
                  <div class="col-md-8 col-lg-8 col-10" style="padding-left: 25px;">
                    <h3>Free Career Counselling </h3>
                    <h2><b>Talk to Us</b></h2>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-lg-3"></div>
            </div>
          </div>







  
          <div class="row mt-3">
              <div class="col-md-3"></div>
              <div class="col-md-6">

                

                <form id="testingForm" method="POST">
                  @csrf
                  <div class="form-group mb-3">
                    <input type="text" name="name" class="input-field" placeholder="Name" required>
                  </div>
  
                  <div class="form-group mb-3">
                    <input type="text" name="phone" class="input-field" placeholder="Mobile Number" required>
                  </div>
  
                  <div class="form-group mb-3">
                    <input type="text" name="class" class="input-field" placeholder="Class" required>
                  </div>
  
                  <div class="form-group mb-3">
                    <input type="text" name="state" class="input-field" placeholder="State" required>
                  </div>
  
                  <div class="form-group mb-3">
                    <input type="text" name="target_exam" class="input-field" placeholder="Target Exam (eg. NEET,IIT-JEE,BOARD)" required>
                  </div>
  
                  <div class="col-md-12 text-center">
                    <button type="submit" class="btn" style="background-color: #19a819; color: white">Request Call Back</button>
                  </div>
                  
                </form>
              </div>
              <div class="col-md-3"></div>
          </div>
  
          
  
        </div>
      </section>
      <!-- End Input Section -->
  
      <!-- ======= Contact Section ======= -->
      <section id="aadhyan-classes" class="contact">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Explore aadhyan Classes</h2>
          </div>
  
          <div class="row">
            <div class="col-md-4">
              <div class="card" style="background-color: #FFECEE; margin-bottom: 10px;">
                <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" height="240px"></iframe>
              </div>
            </div>
  
            <div class="col-md-4">
              <div class="card" style="background-color: #FFECEE; margin-bottom: 10px;">
                <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" height="240px"></iframe>
              </div>
            </div>
  
            <div class="col-md-4">
              <div class="card" style="background-color: #FFECEE; margin-bottom: 10px;">
                <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" height="240px"></iframe>
              </div>
            </div>
          </div>
  
        </div>
      </section>
      <!-- End Contact Section -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Location</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mapouter">
            <div class="gmap_canvas">
              <iframe width="470" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=Dhaka,%20Bangladesh&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
              </iframe>
              <a href="https://putlocker-is.org"></a><br>
            </div>
          </div>
      </div>
    </div>
  </div>
  





@endsection

@section('js')

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


  <script>
      
    $(document).ready(function() {

        $.ajax({
          url: "{{ url('https://aadhyandashboard.in/api/get-category-list') }}",
          type: "post",
          success: function(response) {
            

            let result = response.data;
            let subMenues = response.data[0].classes;
            const cars = ["car"];

            const obj = [
              {
                "name": "NEET 2022",
                "id": 2,
                "classes": [
                    {
                        "id": 1,
                        "name": "NEET REPEATER PRO LIVE",
                        "image": "storage/uploads/course_classes/2021/image-1638805380.png9",
                        "banner": null,
                        "price": "15000.00",
                        "discount": "9800.00",
                        "limit_day": "2022-06-30",
                        "duration": "One years course",
                        "category_id": 2,
                        "created_by": 1,
                        "updated_by": 1,
                        "status": 1,
                        "created_at": "2021-11-19T14:59:53.000000Z",
                        "updated_at": "2022-01-23T06:38:52.000000Z",
                        "is_purchase": 0
                    }
                ]
              }
            ];

            cars.forEach(function(item, key) {
                // code

              var rows = `
                <li class="nav-item" role="presentation">
                      <button class="nav-link custom_button button2 ${key === 0 && 'active'}"  id="neet-tab" data-toggle="pill" href="#neet"><b>NEET</b></button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link custom_button button2"  id="jee-tab" data-toggle="pill" href="#jee"><b>JEE</b></button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link custom_button button2" id="board-tab" data-toggle="pill" href="#board"><b>BOARD</b></button>
                    </li>
                `;
                //  console.log(rows)
              $(`#pills-tab`).append(rows);



              var newRows = `<div class="tab-pane fade show active" id="neet" role="tabpanel">
                                <div class="container text-center my-3 tab-card">
                                  <div class="row mx-auto my-auto">
                                      <div id="recipeCarousel" style="height: 370px" class="carousel slide" data-ride="carousel">
                                          <div class="carousel-inner" role="listbox">
                                              <div class="carousel-item active">
                                                  <div class="col-md-4">
                                                      <div class="card-body">
                                                        <div class="card" style="border-radius: 13px;">
                                                          <div class="card-header aadhyan-card-first text-center" style="border-top-right-radius: 13px; border-top-left-radius: 13px;">
                                                            NEET 2022 PRO LIVE
                                                          </div>
                                                          <div class="card-body text-center">
                                                            <div style="margin-bottom: 5px;">
                                                              <span class="card-text">Live Video Classes</span>
                                                              <p class=""  style="margin: 0 auto; border: 1px solid #FFB280; width: 60%;"></p>
                                                            </div>
                                          
                                                            <div style="margin-bottom: 5px;">
                                                              <span class="card-text">Video lectures</span>
                                                              <p class=""  style="margin: 0 auto; border: 1px solid #FFB280; width: 60%;"></p>
                                                            </div>
                                          
                                                            <div style="margin-bottom: 5px;">
                                                              <span class="card-text">Study Materials</span>
                                                              <p class=""  style="margin: 0 auto; border: 1px solid #FFB280; width: 60%;"></p>
                                                            </div>
                                          
                                                            <div style="margin-bottom: 5px;">
                                                              <span class="card-text">MCQ Practice Paper</span>
                                                              <p class=""  style="margin: 0 auto; border: 1px solid #FFB280; width: 60%;"></p>
                                                            </div>
                                          
                                                            <div style="margin-bottom: 5px;">
                                                              <span class="card-text">Online Test Series</span>
                                                              <p class=""  style="margin: 0 auto; border: 1px solid #FFB280; width: 60%;"></p>
                                                            </div>
                                          
                                          
                                                            
                                                            <div style="margin-bottom: 5px;">
                                                              <div class="card-text">
                                                                <button type="button" class="btn mt-3 aadhyan-card-button">Enroll Now</button>
                                                              </div>
                                                            </div>
                                          
                                                            <div style="margin-bottom: 5px;">
                                                              <span><img src="assets/img/male-icon.png" style="width: 20px; height: 20px;">5000+ Students Enrolled</span>
                                                            </div>
                                          
                                                            <div class="aadhyan-card-footer">
                                                              <span>EMI starting @ 240/- month</span>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="carousel-item">
                                                  <div class="col-md-4">
                                                      <div class="card-body">
                                                        <div class="card" style="border-radius: 13px;">
                                                          <div class="card-header aadhyan-card-second text-center" style="border-top-right-radius: 13px; border-top-left-radius: 13px;">
                                                            NEET 2022 PRO LIVE
                                                          </div>
                                                          <div class="card-body text-center">
                                                            <div style="margin-bottom: 7px; ">
                                                              <span class="card-text">Live Video Classes</span>
                                                              <p class="aadhyan-card-body"></p>
                                                            </div>
                                          
                                                            <div style="margin-bottom: 5px;">
                                                              <span class="card-text">Video lectures</span>
                                                              <p class="aadhyan-card-body"></p>
                                                            </div>
                                          
                                                            <div style="margin-bottom: 5px;">
                                                              <span class="card-text">Study Materials</span>
                                                              <p class="aadhyan-card-body"></p>
                                                            </div>
                                          
                                                            <div style="margin-bottom: 5px;">
                                                              <span class="card-text">MCQ Practice Paper</span>
                                                              <p class="aadhyan-card-body"></p>
                                                            </div>
                                          
                                                            <div style="margin-bottom: 5px;">
                                                              <span class="card-text">Online Test Series</span>
                                                              <p class="aadhyan-card-body"></p>
                                                            </div>
                                          
                                          
                                                            
                                                            <div style="margin-bottom: 5px;">
                                                              <div class="card-text">
                                                                <button type="button" class="btn mt-3 aadhyan-card-button">Enroll Now</button>
                                                              </div>
                                                            </div>
                                          
                                                            <div style="margin-bottom: 5px;">
                                                              <span><img src="assets/img/male-icon.png" class="aadhyan-card-img">5000+ Students Enrolled</span>
                                                            </div>
                                          
                                                            <div class="aadhyan-card-footer">
                                                              <span>EMI starting @ 240/- month</span>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                  </div>
                                              </div>
                                            
                                              <div class="carousel-item">
                                                  <div class="col-md-4">
                                                      <div class="card-body">
                                                        <div class="card" style="border-radius: 13px;">
                                                          <div class="card-header aadhyan-card-second text-center" style="border-top-right-radius: 13px; border-top-left-radius: 13px;">
                                                            NEET 2023 PRO LIVE
                                                          </div>
                                                          <div class="card-body text-center">
                                                            <div style="margin-bottom: 7px; ">
                                                              <span class="card-text">Live Video Classes</span>
                                                              <p class="aadhyan-card-body"></p>
                                                            </div>
                                          
                                                            <div style="margin-bottom: 5px;">
                                                              <span class="card-text">Video lectures</span>
                                                              <p class="aadhyan-card-body"></p>
                                                            </div>
                                          
                                                            <div style="margin-bottom: 5px;">
                                                              <span class="card-text">Study Materials</span>
                                                              <p class="aadhyan-card-body"></p>
                                                            </div>
                                          
                                                            <div style="margin-bottom: 5px;">
                                                              <span class="card-text">MCQ Practice Paper</span>
                                                              <p class="aadhyan-card-body"></p>
                                                            </div>
                                          
                                                            <div style="margin-bottom: 5px;">
                                                              <span class="card-text">Online Test Series</span>
                                                              <p class="aadhyan-card-body"></p>
                                                            </div>
                                          
                                                            
                                                            <div style="margin-bottom: 5px;">
                                                              <div class="card-text">
                                                                <button type="button" class="btn mt-3 aadhyan-card-button">Enroll Now</button>
                                                              </div>
                                                            </div>
                                          
                                                            <div style="margin-bottom: 5px;">
                                                              <span><img src="assets/img/male-icon.png" class="aadhyan-card-img">5000+ Students Enrolled</span>
                                                            </div>
                                          
                                                            <div class="aadhyan-card-footer">
                                                              <span>EMI starting @ 240/- month</span>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                  </div>
                                              </div>
                  
                                              <div class="carousel-item">
                                                <div class="col-md-4">
                                                    <div class="card-body">
                                                      <div class="card" style="border-radius: 13px;">
                                                        <div class="card-header aadhyan-card-second text-center" style="border-top-right-radius: 13px; border-top-left-radius: 13px;">
                                                          NEET 2023 PRO LIVE
                                                        </div>
                                                        <div class="card-body text-center">
                                                          <div style="margin-bottom: 7px; ">
                                                            <span class="card-text">Live Video Classes</span>
                                                            <p class="aadhyan-card-body"></p>
                                                          </div>
                                        
                                                          <div style="margin-bottom: 5px;">
                                                            <span class="card-text">Video lectures</span>
                                                            <p class="aadhyan-card-body"></p>
                                                          </div>
                                        
                                                          <div style="margin-bottom: 5px;">
                                                            <span class="card-text">Study Materials</span>
                                                            <p class="aadhyan-card-body"></p>
                                                          </div>
                                        
                                                          <div style="margin-bottom: 5px;">
                                                            <span class="card-text">MCQ Practice Paper</span>
                                                            <p class="aadhyan-card-body"></p>
                                                          </div>
                                        
                                                          <div style="margin-bottom: 5px;">
                                                            <span class="card-text">Online Test Series</span>
                                                            <p class="aadhyan-card-body"></p>
                                                          </div>
                                        
                                                          
                                                          <div style="margin-bottom: 5px;">
                                                            <div class="card-text">
                                                              <button type="button" class="btn mt-3 aadhyan-card-button">Enroll Now</button>
                                                            </div>
                                                          </div>
                                        
                                                          <div style="margin-bottom: 5px;">
                                                            <span><img src="assets/img/male-icon.png" class="aadhyan-card-img">5000+ Students Enrolled</span>
                                                          </div>
                                        
                                                          <div class="aadhyan-card-footer">
                                                            <span>EMI starting @ 240/- month</span>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                            
                                          </div>
                                          <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                                              <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                                              <span class="sr-only">Previous</span>
                                          </a>
                                          <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                                              <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                                              <span class="sr-only" style="">Next</span>
                                          </a>
                                      </div>
                                  </div>
                                </div>
                              </div>
    
                <div class="tab-pane fade" id="jee" role="tabpanel">
                  
    
    
                  
                  <div class="container text-center my-3 tab-card">
                    <div class="row mx-auto my-auto">
                        <div id="recipeCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="col-md-4">
                                        <div class="card-body">
                                          <div class="card" style="border-radius: 13px;">
                                            <div class="card-header aadhyan-card-first text-center" style="border-top-right-radius: 13px; border-top-left-radius: 13px;">
                                              JEE 2022 PRO LIVE
                                            </div>
                                            <div class="card-body text-center">
                                              <div style="margin-bottom: 5px;">
                                                <span class="card-text">Live Video Classes</span>
                                                <p class=""  style="margin: 0 auto; border: 1px solid #FFB280; width: 60%;"></p>
                                              </div>
                            
                                              <div style="margin-bottom: 5px;">
                                                <span class="card-text">Video lectures</span>
                                                <p class=""  style="margin: 0 auto; border: 1px solid #FFB280; width: 60%;"></p>
                                              </div>
                            
                                              <div style="margin-bottom: 5px;">
                                                <span class="card-text">Study Materials</span>
                                                <p class=""  style="margin: 0 auto; border: 1px solid #FFB280; width: 60%;"></p>
                                              </div>
                            
                                              <div style="margin-bottom: 5px;">
                                                <span class="card-text">MCQ Practice Paper</span>
                                                <p class=""  style="margin: 0 auto; border: 1px solid #FFB280; width: 60%;"></p>
                                              </div>
                            
                                              <div style="margin-bottom: 5px;">
                                                <span class="card-text">Online Test Series</span>
                                                <p class=""  style="margin: 0 auto; border: 1px solid #FFB280; width: 60%;"></p>
                                              </div>
                            
                            
                                              
                                              <div style="margin-bottom: 5px;">
                                                <div class="card-text">
                                                  <button type="button" class="btn mt-3 aadhyan-card-button">Enroll Now</button>
                                                </div>
                                              </div>
                            
                                              <div style="margin-bottom: 5px;">
                                                <span><img src="assets/img/male-icon.png" style="width: 20px; height: 20px;">5000+ Students Enrolled</span>
                                              </div>
                            
                                              <div class="aadhyan-card-footer">
                                                <span>EMI starting @ 240/- month</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-4">
                                        <div class="card-body">
                                          <div class="card" style="border-radius: 13px;">
                                            <div class="card-header aadhyan-card-second text-center" style="border-top-right-radius: 13px; border-top-left-radius: 13px;">
                                              JEE 2022 PRO LIVE
                                            </div>
                                            <div class="card-body text-center">
                                              <div style="margin-bottom: 7px; ">
                                                <span class="card-text">Live Video Classes</span>
                                                <p class="aadhyan-card-body"></p>
                                              </div>
                            
                                              <div style="margin-bottom: 5px;">
                                                <span class="card-text">Video lectures</span>
                                                <p class="aadhyan-card-body"></p>
                                              </div>
                            
                                              <div style="margin-bottom: 5px;">
                                                <span class="card-text">Study Materials</span>
                                                <p class="aadhyan-card-body"></p>
                                              </div>
                            
                                              <div style="margin-bottom: 5px;">
                                                <span class="card-text">MCQ Practice Paper</span>
                                                <p class="aadhyan-card-body"></p>
                                              </div>
                            
                                              <div style="margin-bottom: 5px;">
                                                <span class="card-text">Online Test Series</span>
                                                <p class="aadhyan-card-body"></p>
                                              </div>
                            
                            
                                              
                                              <div style="margin-bottom: 5px;">
                                                <div class="card-text">
                                                  <button type="button" class="btn mt-3 aadhyan-card-button">Enroll Now</button>
                                                </div>
                                              </div>
                            
                                              <div style="margin-bottom: 5px;">
                                                <span><img src="assets/img/male-icon.png" class="aadhyan-card-img">5000+ Students Enrolled</span>
                                              </div>
                            
                                              <div class="aadhyan-card-footer">
                                                <span>EMI starting @ 240/- month</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="carousel-item">
                                  <div class="col-md-4">
                                      <div class="card-body">
                                        <div class="card" style="border-radius: 13px;">
                                          <div class="card-header aadhyan-card-second text-center" style="border-top-right-radius: 13px; border-top-left-radius: 13px;">
                                            JEE 2022 PRO LIVE
                                          </div>
                                          <div class="card-body text-center">
                                            <div style="margin-bottom: 7px; ">
                                              <span class="card-text">Live Video Classes</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Video lectures</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Study Materials</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">MCQ Practice Paper</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Online Test Series</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                          
                                            
                                            <div style="margin-bottom: 5px;">
                                              <div class="card-text">
                                                <button type="button" class="btn mt-3 aadhyan-card-button">Enroll Now</button>
                                              </div>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span><img src="assets/img/male-icon.png" class="aadhyan-card-img">5000+ Students Enrolled</span>
                                            </div>
                          
                                            <div class="aadhyan-card-footer">
                                              <span>EMI starting @ 240/- month</span>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                              
                                <div class="carousel-item">
                                    <div class="col-md-4">
                                        <div class="card-body">
                                          <div class="card" style="border-radius: 13px;">
                                            <div class="card-header aadhyan-card-second text-center" style="border-top-right-radius: 13px; border-top-left-radius: 13px;">
                                              JEE 2023 PRO LIVE
                                            </div>
                                            <div class="card-body text-center">
                                              <div style="margin-bottom: 7px; ">
                                                <span class="card-text">Live Video Classes</span>
                                                <p class="aadhyan-card-body"></p>
                                              </div>
                            
                                              <div style="margin-bottom: 5px;">
                                                <span class="card-text">Video lectures</span>
                                                <p class="aadhyan-card-body"></p>
                                              </div>
                            
                                              <div style="margin-bottom: 5px;">
                                                <span class="card-text">Study Materials</span>
                                                <p class="aadhyan-card-body"></p>
                                              </div>
                            
                                              <div style="margin-bottom: 5px;">
                                                <span class="card-text">MCQ Practice Paper</span>
                                                <p class="aadhyan-card-body"></p>
                                              </div>
                            
                                              <div style="margin-bottom: 5px;">
                                                <span class="card-text">Online Test Series</span>
                                                <p class="aadhyan-card-body"></p>
                                              </div>
                            
                                              
                                              <div style="margin-bottom: 5px;">
                                                <div class="card-text">
                                                  <button type="button" class="btn mt-3 aadhyan-card-button">Enroll Now</button>
                                                </div>
                                              </div>
                            
                                              <div style="margin-bottom: 5px;">
                                                <span><img src="assets/img/male-icon.png" class="aadhyan-card-img">5000+ Students Enrolled</span>
                                              </div>
                            
                                              <div class="aadhyan-card-footer">
                                                <span>EMI starting @ 240/- month</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                              
              
                            </div>
                            <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                                <span class="sr-only" style="margin-right: -35px;">Next</span>
                            </a>
                        </div>
                    </div>
                  </div>
    
    
    
                </div>
    
                <div class="tab-pane fade" id="board" role="tabpanel">
                  
                  
                  <div class="container text-center my-3 tab-card">
                    <div class="row mx-auto my-auto">
                        <div id="recipeCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="col-md-4">
                                        <div class="card-body">
                                          <div class="card" style="border-radius: 13px;">
                                            <div class="card-header aadhyan-card-first text-center" style="border-top-right-radius: 13px; border-top-left-radius: 13px;">
                                              BOARD 2022 PRO LIVE
                                            </div>
                                            <div class="card-body text-center">
                                              <div style="margin-bottom: 5px;">
                                                <span class="card-text">Live Video Classes</span>
                                                <p class=""  style="margin: 0 auto; border: 1px solid #FFB280; width: 60%;"></p>
                                              </div>
                            
                                              <div style="margin-bottom: 5px;">
                                                <span class="card-text">Video lectures</span>
                                                <p class=""  style="margin: 0 auto; border: 1px solid #FFB280; width: 60%;"></p>
                                              </div>
                            
                                              <div style="margin-bottom: 5px;">
                                                <span class="card-text">Study Materials</span>
                                                <p class=""  style="margin: 0 auto; border: 1px solid #FFB280; width: 60%;"></p>
                                              </div>
                            
                                              <div style="margin-bottom: 5px;">
                                                <span class="card-text">MCQ Practice Paper</span>
                                                <p class=""  style="margin: 0 auto; border: 1px solid #FFB280; width: 60%;"></p>
                                              </div>
                            
                                              <div style="margin-bottom: 5px;">
                                                <span class="card-text">Online Test Series</span>
                                                <p class=""  style="margin: 0 auto; border: 1px solid #FFB280; width: 60%;"></p>
                                              </div>
                            
                            
                                              
                                              <div style="margin-bottom: 5px;">
                                                <div class="card-text">
                                                  <button type="button" class="btn mt-3 aadhyan-card-button">Enroll Now</button>
                                                </div>
                                              </div>
                            
                                              <div style="margin-bottom: 5px;">
                                                <span><img src="assets/img/male-icon.png" style="width: 20px; height: 20px;">5000+ Students Enrolled</span>
                                              </div>
                            
                                              <div class="aadhyan-card-footer">
                                                <span>EMI starting @ 240/- month</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="carousel-item">
                                    <div class="col-md-4">
                                        <div class="card-body">
                                          <div class="card" style="border-radius: 13px;">
                                            <div class="card-header aadhyan-card-second text-center" style="border-top-right-radius: 13px; border-top-left-radius: 13px;">
                                              BOARD 2022 PRO LIVE
                                            </div>
                                            <div class="card-body text-center">
                                              <div style="margin-bottom: 7px; ">
                                                <span class="card-text">Live Video Classes</span>
                                                <p class="aadhyan-card-body"></p>
                                              </div>
                            
                                              <div style="margin-bottom: 5px;">
                                                <span class="card-text">Video lectures</span>
                                                <p class="aadhyan-card-body"></p>
                                              </div>
                            
                                              <div style="margin-bottom: 5px;">
                                                <span class="card-text">Study Materials</span>
                                                <p class="aadhyan-card-body"></p>
                                              </div>
                            
                                              <div style="margin-bottom: 5px;">
                                                <span class="card-text">MCQ Practice Paper</span>
                                                <p class="aadhyan-card-body"></p>
                                              </div>
                            
                                              <div style="margin-bottom: 5px;">
                                                <span class="card-text">Online Test Series</span>
                                                <p class="aadhyan-card-body"></p>
                                              </div>
                            
                            
                                              
                                              <div style="margin-bottom: 5px;">
                                                <div class="card-text">
                                                  <button type="button" class="btn mt-3 aadhyan-card-button">Enroll Now</button>
                                                </div>
                                              </div>
                            
                                              <div style="margin-bottom: 5px;">
                                                <span><img src="assets/img/male-icon.png" class="aadhyan-card-img">5000+ Students Enrolled</span>
                                              </div>
                            
                                              <div class="aadhyan-card-footer">
                                                <span>EMI starting @ 240/- month</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                              
                                <div class="carousel-item">
                                    <div class="col-md-4">
                                        <div class="card-body">
                                          <div class="card" style="border-radius: 13px;">
                                            <div class="card-header aadhyan-card-second text-center" style="border-top-right-radius: 13px; border-top-left-radius: 13px;">
                                              BOARD 2023 PRO LIVE
                                            </div>
                                            <div class="card-body text-center">
                                              <div style="margin-bottom: 7px; ">
                                                <span class="card-text">Live Video Classes</span>
                                                <p class="aadhyan-card-body"></p>
                                              </div>
                            
                                              <div style="margin-bottom: 5px;">
                                                <span class="card-text">Video lectures</span>
                                                <p class="aadhyan-card-body"></p>
                                              </div>
                            
                                              <div style="margin-bottom: 5px;">
                                                <span class="card-text">Study Materials</span>
                                                <p class="aadhyan-card-body"></p>
                                              </div>
                            
                                              <div style="margin-bottom: 5px;">
                                                <span class="card-text">MCQ Practice Paper</span>
                                                <p class="aadhyan-card-body"></p>
                                              </div>
                            
                                              <div style="margin-bottom: 5px;">
                                                <span class="card-text">Online Test Series</span>
                                                <p class="aadhyan-card-body"></p>
                                              </div>
                            
                                              
                                              <div style="margin-bottom: 5px;">
                                                <div class="card-text">
                                                  <button type="button" class="btn mt-3 aadhyan-card-button">Enroll Now</button>
                                                </div>
                                              </div>
                            
                                              <div style="margin-bottom: 5px;">
                                                <span><img src="assets/img/male-icon.png" class="aadhyan-card-img">5000+ Students Enrolled</span>
                                              </div>
                            
                                              <div class="aadhyan-card-footer">
                                                <span>EMI starting @ 240/- month</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="carousel-item">
                                  <div class="col-md-4">
                                      <div class="card-body">
                                        <div class="card" style="border-radius: 13px;">
                                          <div class="card-header aadhyan-card-second text-center" style="border-top-right-radius: 13px; border-top-left-radius: 13px;">
                                            BOARD 2022 PRO LIVE
                                          </div>
                                          <div class="card-body text-center">
                                            <div style="margin-bottom: 7px; ">
                                              <span class="card-text">Live Video Classes</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Video lectures</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Study Materials</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">MCQ Practice Paper</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span class="card-text">Online Test Series</span>
                                              <p class="aadhyan-card-body"></p>
                                            </div>
                          
                          
                                            
                                            <div style="margin-bottom: 5px;">
                                              <div class="card-text">
                                                <button type="button" class="btn mt-3 aadhyan-card-button">Enroll Now</button>
                                              </div>
                                            </div>
                          
                                            <div style="margin-bottom: 5px;">
                                              <span><img src="assets/img/male-icon.png" class="aadhyan-card-img">5000+ Students Enrolled</span>
                                            </div>
                          
                                            <div class="aadhyan-card-footer">
                                              <span>EMI starting @ 240/- month</span>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                              
              
                            </div>
                            <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                                <span class="sr-only" style="margin-right: -35px;">Next</span>
                            </a>
                        </div>
                    </div>
                  </div>
    
    
                </div>`;

              

                        console.log(newRows);

                      // $(`#sliders`).html(examle);

            });



          },
          error: function(data){
            var errors = data.responseJSON;
              if($.isEmptyObject(errors) == false){
                  $.each(errors.errors, function(key,value){
                      var ErrorId = '#' + key + 'Error';
                      $(ErrorId).removeClass("d-none");
                      $(ErrorId).text(value);
                  })
              }
          }
        });



            // -----------------


          

            // ---------------------

      // submit 

      $("#testingForm").on('submit',function(e){
        e.preventDefault();
        
        $.ajax({
          url: "{{ url('https://aadhyandashboard.in/api/counselling-create') }}",
          type: "post",
          data: $("#testingForm").serialize(),
          success: function(data) {
            console.log(data.message);
            if( data.message == "Success" ){
              alertify.set('notifier','position', 'top-right');
              alertify.success('Your query successfully done!');
              $("#testingForm")[0].reset();
            }else{
              alert("Some Thing Wrong !!!")
            }

          },
          error: function(data){
            var errors = data.responseJSON;
              if($.isEmptyObject(errors) == false){
                  $.each(errors.errors, function(key,value){
                      var ErrorId = '#' + key + 'Error';
                      $(ErrorId).removeClass("d-none");
                      $(ErrorId).text(value);
                  })
              }
          }
        })
        
      })
    })
  </script>


  <script>
    $(function(){
    
    var liCount = $('.slider li').length;
    var ulWidth = (liCount * 100);
    var liWidth = (100/liCount);
    var leftIncrement = (ulWidth/liCount);


    $('.slider').height($('.slider li img').height());
    //$('.slider').height('300px');
    
    $('.slider img').on('load', function(){
      $('.loader').fadeOut();
      $('.slider').height($(this).height());
    })

    $(window).resize(function() {
      $('.slider').css('height', $('.slider li img').height());
    }); 
    
    $('.slider ul').css('width', ulWidth + '%');
    $('.slider li').css('width', liWidth + '%');

    $('.slider').append(function() {
      $(this).append('<div class="navigator"></div>');
      $(this).prepend('<span class="prev">Prev</span><span class="next">Next</span>');
      //$(this).append('<div class="autoPlay"><input id="chkBox" type="checkbox" class="chkbox" /><label for="chkBox">Auto Play?</label></div>');

      $(this).find('li').each(function(){
        $('.navigator').append('<span></span>');
      });
    });

    $('.slider').css('height', $('.slider li img').height());
    
    $('.navigator span:first-child').addClass('active');


    if(liCount > 2) {
      $('.slider ul').css('margin-left', -leftIncrement + '%');
      $('.slider ul li:last-child').prependTo('.slider ul');
    } else if(liCount == 1) {
      $('.slider span').css('display', 'none');
      $('.autoPlay').css('display', 'none');
    } else if(liCount == 2) {
      $('.slider .prev').css('display', 'none');
    }

    function moveLeft() {
      $('.slider ul').animate({
        left : -leftIncrement + '%'
      }, 500, function(){
        $('.slider ul li:first-child').appendTo('.slider ul');
        $('.slider ul').css('left', '');

        if($('.navigator span').hasClass('active')) {

          if($('.navigator span.active').is(':last-child')) {
            $('span.active').removeClass('active');
            $('.navigator span:first-child').addClass('active');
          } else {
            $('span.active').next().addClass('active');
            $('span.active').prev().removeClass('active');
          }
        }
      });
    }


    function moveRight() {
      $('.slider ul').animate({
        left : leftIncrement + '%'
      }, 500, function(){
        $('.slider ul li:last-child').prependTo('.slider ul');
        $('.slider ul').css('left', '');

        if($('.navigator span').hasClass('active')) {

          if($('.navigator span.active').is(':first-child')) {
            $('span.active').removeClass('active');
            $('.navigator span:last-child').addClass('active');
          } else {
            $('span.active').prev().addClass('active');
            $('span.active').next().removeClass('active');
          }
        }
      });
    }


    // $('.chkbox').click(function() {
    // 	if($('.chkbox').is(':checked')) {
    // 		$('.slider > span').hide();
    // 		$(this).next('label').text('Auto Playing')
    // 		invertalValue = setInterval(function() {
    // 			moveLeft();
    // 		}, 5000);
    // 	} else {
    // 		$(this).next('label').text('Auto Play?')
    // 		if(liCount == 2) {
    // 			$('.slider .next').show();
    // 		} else if(liCount > 2){
    // 			$('.slider > span').show();
    // 		}
    // 		clearInterval(invertalValue);
    // 	}
    // });
    
    if(liCount > 1) {
      invertalValue = setInterval(function() {
        moveLeft();
      }, 5000);
    }

    $('.prev').click(function(){
      moveRight();
    });

    $('.next').click(function(){
      moveLeft();
    });

  });

  </script>
@endsection