@extends('layouts.master')
    @section('content')

<div class="card text-center " style="line-height: 30px;">
  <div class="card-header text-white bg-secondary" style="margin-top: -20px">Cenovnik</div>
    <div class="card-body">
    <h4 class="card-title">Cene su informativnog karaktera</h4>
    <p class="card-text">Cene se formiraju prema svakom klijentu posebno i zavise od delatnosti pravnog lica ili preduzetnika.<br>Za detaljnije informacije budite slobodni da nas kontaktirate.</p>
    <a href="/contact" class="btn btn-primary">Kontaktirajte nas</a>
  </div>
</div>
<br>
    
    <!-- Plans -->
    <section id="plans">
        <div class="container">
            <div class="row">

                <!-- item -->
                <div class="col-md-4 text-center">
                    <div class="panel panel-danger panel-pricing">
                        <div class="panel-heading btn-danger">
                            <i class="fa fa-eur"></i>
                            <h3>Pravno lice u PDV-u</h3>
                        </div>
                        <div class="panel-body text-center">
                            <p><strong> od €100 / Mesečno</strong></p>
                        </div>
                        <ul class="list-group text-center">
                            <li class="list-group-item"><i class="fa fa-check"></i> Finansijsko računovodstvo</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> Obračun plata</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> Završni račun</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> Kurirska služba</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> Poresko savetovanje</li>
                        </ul>
                        <div class="panel-footer">
                            <a class="btn btn-lg btn-block btn-danger" href="/contact">Kontaktirajte nas</a>
                        </div>
                    </div>
                </div>
                <!-- /item -->
                <!-- item -->
                <div class="col-md-4 text-center">
                    <div class="panel panel-success panel-pricing">
                        <div class="panel-heading btn-success">
                            <i class="fa fa-eur"></i>
                            <h3>Preduzetnik u PDV-u</h3>
                        </div>
                        <div class="panel-body text-center">
                            <p><strong>od €80 / Mesečno</strong></p>
                        </div>
                        <ul class="list-group text-center">
                            <li class="list-group-item"><i class="fa fa-check"></i> Finansijsko računovodstvo</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> Obračun plata</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> Završni račun</li>
                            <li class="list-group-item"><i class="fa fa-check"></i>Kurirska služba</li>
                            <li class="list-group-item"><i class="fa fa-check"></i>Poresko savetovanje</li>
                        </ul>
                        <div class="panel-footer">
                            <a class="btn btn-lg btn-block btn-success" href="/contact">Kontaktirajte nas</a>
                        </div>
                    </div>
                </div>
                <!-- /item -->
                <!-- item -->
                <div class="col-md-4 text-center">
                    <div class="panel panel-warning panel-pricing">
                        <div class="panel-heading btn-warning">
                            <i class="fa fa-eur"></i>
                            <h3>Pravno lice van PDV-a</h3>
                        </div>
                        <div class="panel-body text-center">
                            <p><strong>Od 80€ / Mesečno</strong></p>
                        </div>
                        <ul class="list-group text-center">
                            <li class="list-group-item"><i class="fa fa-check"></i> Finansijsko računovodstvo</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> Obračun plata</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> Završni račun</li>
                            <li class="list-group-item"><i class="fa fa-check"></i>Kurirska služba</li>
                            <li class="list-group-item"><i class="fa fa-check"></i>Poresko savetovanje</li>
                        </ul>
                        <div class="panel-footer">
                            <a class="btn btn-lg btn-block btn-warning" href="/contact">Kontaktirajte nas</a>
                        </div>
                    </div>
                </div>
                <!-- /item -->
</div>
</div>
</section>
<br><hr><br>
<section id="plans">
        <div class="container">
            <div class="row">

                <!-- item -->
                <div class="col-md-4 text-center">
                    <div class="panel panel-danger panel-pricing">
                        <div class="panel-heading btn-danger">
                            <i class="fa fa-eur"></i>
                            <h3>Preduzetnik van PDV-a</h3>
                        </div>
                        <div class="panel-body text-center">
                            <p><strong> od €50 / Mesečno</strong></p>
                        </div>
                        <ul class="list-group text-center">
                            <li class="list-group-item"><i class="fa fa-check"></i> Finansijsko računovodstvo</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> Obračun plata</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> Završni račun</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> Kurirska služba</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> Poresko savetovanje</li>
                        </ul>
                        <div class="panel-footer">
                            <a class="btn btn-lg btn-block btn-danger" href="/contact">Kontaktirajte nas</a>
                        </div>
                    </div>
                </div>
                <!-- /item -->
                <!--/item-->
                <div class="col-md-4 text-center">
                    <div class="panel panel-warning panel-pricing">
                        <div class="panel-heading btn-warning">
                            <i class="fa fa-eur"></i>
                            <h3>Preduzetnik Paušalac</h3>
                        </div>
                        <div class="panel-body text-center">
                            <p><strong>od 30€ / Mesečno</strong></p>
                        </div>
                        <ul class="list-group text-center">
                            <li class="list-group-item"><i class="fa fa-check"></i> Obračun zarada</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> Obračun bolovanja</li>
                            <li class="list-group-item"><i class="fa fa-check"></i>Kurirska služba</li>
                            <li class="list-group-item"><i class="fa fa-check"></i>Poresko savetovanje</li>
                            <li class="list-group-item"><i class="fa fa-check"></i>Registrovanje promena</li>

                        </ul>
                        <div class="panel-footer">
                            <a class="btn btn-lg btn-block btn-warning" href="/contact">Kontaktirajte nas!</a>
                        </div>
                    </div>
                </div>
                <!-- /item -->

                <!-- item -->
                <div class="col-md-4 text-center">
                    <div class="panel panel-success panel-pricing">
                        <div class="panel-heading btn-success">
                            <i class="fa fa-eur"></i>
                            <h3>Pravna lica u mirovanju</h3>
                        </div>
                        <div class="panel-body text-center">
                            <p><strong>od 30€ / Mesečno</strong></p>
                        </div>
                        <ul class="list-group text-center">
                            <li class="list-group-item"><i class="fa fa-check"></i> Poresko savetovanje</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> Registracija promena </li>
                            <li class="list-group-item"><i class="fa fa-check"></i> Kurirska služba</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> Završni račun</li>
                            <li class="list-group-item"><i class="fa fa-check"></i> Likvidacija</li>
                        </ul>
                        <div class="panel-footer">
                            <a class="btn btn-lg btn-block btn-success" href="/contact">Kontaktirajte nas!</a>
                        </div>
                    </div>
                </div>
                <!-- /item -->

            </div>
        </div>
    </section>
    <!-- /Plans -->
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h2 class="section-heading">Savet:</h2>
            <ul>
                <li>
            <p class="lead">Pre angažovanja računovođe, raspitajte se o naknadama unapred. Većina računonovodstvenih firmi naplaćuje svoje usluge mesečno, cene mogu varirati od 20€ do nekoliko hiljada eura mesečno. Cena se odredjuje prema obimu posla koje uglavnom zavisi od pretežne delatnosti klijenta, koliko zaposlenih radnika ima, da li je u sistemu pdv-a i drugih parametara. Saznajte koje će usluge vama trebati i koja opcija bi vama bila najekonomičnija.</p>
               </li>
               <li>
              <p class="lead">Raspitajte se kod više različitih knjigovodstvenih firmi o njihovim cenama i sta one uključuju i kakve usluge dobijate za vaš novac. Takodje, ne odlučujte samo o troškovima koje morate da izdvojite za računovodstvene usluge, obično računovodja koji skuplje naplaćuje svoje usluge ima više iskustva i radi brže i profesionalnije.</p>
               </li>
               <li>
                <p class="lead">Nemojte angažovati nikog pre nego sto dobijete reference, pogotovo od firmi koje su u istoj delatnosti kao i vi. Dobar računovodja bi trebalo da je srećan sto vam pruža svoje preporuke. Pozovite svaku referencu i raspitajte se koliko je klijent zadovoljan uslugama, naknadama i dostupnošću računovodtva.</p>
               </li>
               <li>
                <p class="lead">Nakon sto se odlučite za knjigovođu, navedite uslove ugovora i jasno definišite usluge koje cete plaćati. To osigurava da i vi i vaš računovodja imate ista očekivanja i pomažete jedan drugome u sprečavanju nesporazuma i teških osećanja. </p>
               </li>
          </div>
      </div>
  </div>
                  
    @endsection