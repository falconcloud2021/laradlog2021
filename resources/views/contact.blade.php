@extends('layouts.default')

@section('title', 'contact')

@section('content')

<!-- Page Content -->
<!-- <div class="page-heading contact-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>contact us</h4>
              <h2>let’s go</h2>
            </div>
          </div>
        </div>
      </div>
    </div> -->


<div class="find-us">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Наше месторасположение</h2>
        </div>
      </div>
      <div class="col-md-8">
        <!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
        <div id="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.6518394474606!2d30.519837015330605!3d50.44758537947499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce56b2456d3b%3A0xd062ae171b57e947!2z0YPQuy4g0JrRgNC10YnQsNGC0LjQuiwg0JrQuNC10LIsIDAyMDAw!5e0!3m2!1sru!2sua!4v1633255665143!5m2!1sru!2sua" width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-md-4">
        <div class="left-content">
          <h4>Про наш офис</h4>
          <p>Мы никогда не снижаем качество предоставляемых нами услуг. Уделяем каждому случаю столько времени и внимания, сколько необходимо для достижения наилучшего результата, даже если приходится работать в выходные и праздничные дни.</p>
          <ul class="social-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-behance"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="send-message">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Send us a Message</h2>
        </div>
      </div>
      <div class="col-md-8">
        <div class="contact-form">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                  <input name="name" type="text" class="form-control" id="name" placeholder="Ваше имя" required="">
                </fieldset>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                  <input name="email" type="text" class="form-control" id="email" placeholder="Ваш E-Mail" required="">
                </fieldset>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                  <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-4">
        <ul class="accordion">
          <li>
            <a>Accordion Title One</a>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.</p>
            </div>
          </li>
          <li>
            <a>Second Title Here</a>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.</p>
            </div>
          </li>
          <li>
            <a>Accordion Title Three</a>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.</p>
            </div>
          </li>
          <li>
            <a>Fourth Accordion Title</a>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="happy-clients">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Our Happy Customers</h2>
        </div>
      </div>
      <div class="col-md-12">
        <div class="owl-clients owl-carousel">
          <div class="client-item">
            <img src="assets/images/client-01.png" alt="1">
          </div>

          <div class="client-item">
            <img src="assets/images/client-01.png" alt="2">
          </div>

          <div class="client-item">
            <img src="assets/images/client-01.png" alt="3">
          </div>

          <div class="client-item">
            <img src="assets/images/client-01.png" alt="4">
          </div>

          <div class="client-item">
            <img src="assets/images/client-01.png" alt="5">
          </div>

          <div class="client-item">
            <img src="assets/images/client-01.png" alt="6">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@stop

@section('sidebar')
@parent
@endsection