@extends('layouts.master')
    @section('content')


    <!-- Contact Form -->
    <div class="c-form-container section-container section-container-image-bg" style="background-color: #ff6666; margin-top: -20px;">
          <div class="container" style="line-height: 30px;">
            
              <div class="row">
                  <div class="col-sm-8 col-sm-offset-2 c-form section-description wow fadeIn">
                      <h1><strong>Kontaktirajte Nas</strong></h1>
                      <p>I odmah pronađite odgovor na svoje pitanje ili nedoumicu.
                        Odgovor je na dohvat ruke.</p>
                  </div>
              </div>
              
              <div class="row">
                
                <div class="col-sm-6 col-sm-offset-3 c-form-box wow fadeInUp">
                  
                      <div class="c-form-top">
                        <div class="c-form-top-left">
                          <h3></h3>
                <p>Popuni obrazac i očekuj odgovor brzo</p>
                        </div>
                        <div class="c-form-top-right">
                          <div class="c-form-top-right-icon">
                            <i class="fa fa-paper-plane"></i>
                          </div>
                        </div>
                        </div>
                        <div class="c-form-bottom">
                        {{-- <form role="form" action="assets/contact.php" method="post"> --}}
                          <form role="form" method="POST" action={{ route('contact.store') }}>
                      {{csrf_field()}}
                          <div class="form-group">
                            <label for="c-form-name">
                              <span class="label-text">Vaše Ime:</span> 
                              <span class="contact-error"></span>
                            </label>
                              <input type="text" name="name" placeholder="Vaše Ime..." class="c-form-name form-control" id="c-form-name">
                            </div>
                          <div class="form-group">
                            <label for="c-form-email">
                              <span class="label-text">Vaš Email:</span> 
                              <span class="contact-error"></span>
                            </label>
                              <input type="text" name="email" placeholder="Vaša email adresa..." class="c-form-email form-control" id="c-form-email">
                            </div>
                            {{-- <div class="form-group">
                              <label for="c-form-subject">
                              <span class="label-text">Naslov poruke:</span> 
                              <span class="contact-error"></span>
                            </label>
                              <input type="text" name="subject" placeholder="Naslov Vaše Poruke..." class="c-form-subject form-control" id="c-form-subject">
                            </div> --}}
                            <div class="form-group">
                              <label for="c-form-message">
                              <span class="label-text">Vaša Poruka:</span> 
                              <span class="contact-error"></span>
                            </label>
                              <textarea name="message" placeholder="Tekst Vaše Poruke..." class="c-form-message form-control" id="c-form-message"></textarea>
                            </div>
                            <button type="submit" class="btn">Pošalji poruku</button>
                        </form>
                      </div>
                      
                  </div>

              </div>
              
              <div class="row">
                <div class="col-sm-12 c-form-info-title wow fadeInUp">
                  <h3>...ili nas pronađite ovde:</h3>
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-3 c-form-info-box wow fadeInUp">
                  <div class="c-form-info-box-icon">
                    <i class="fa fa-map-marker"></i>
                  </div>
                  <p>Pere Todorovića 3<br>11030 Beograd, Srbija</p>
                </div>
                <div class="col-sm-3 c-form-info-box wow fadeInDown">
                  <div class="c-form-info-box-icon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <p>Telefon:<br>0653960444</p>
                </div>
                <div class="col-sm-3 c-form-info-box wow fadeInUp">
                  <div class="c-form-info-box-icon">
                    <i class="fa fa-envelope"></i>
                  </div>
                  <p>Email:<br>angelis.pr@gmail.com</p>
                </div>
                <div class="col-sm-3 c-form-info-box wow fadeInDown">
                  <div class="c-form-info-box-icon">
                    <i class="fa fa-linkedin"></i>
                  </div>
                  <p>Linkedin:<br><a href="https://www.linkedin.com/company/angeli-s-knjigovodstvo/" target="_blank">Angeli'S Knjigovodstvo</p></a>
                </div>
              </div>
          </div>
        </div>

    @endsection