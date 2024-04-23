<!DOCTYPE html>
<html lang="en" dir="ltr">

@include('head')


<body>
    @include('menu')
    <!--   Creator
Naem Azam
github: https://github.com/naemazam

   -->

  <section class="home">
    <div class="container flex">
      <div class="left">
        <div class="heading">
          <div class="heading_top flex">
            <div class="line"></div>
            <div class="line line2"></div>
            <i class="fas fa-circle"></i>
            <h3>Pr. </h3>
          </div>
          <div class="heading_bottom">
            <h1><span>Zakari Yaou</span> KAKA</h1>
          </div>
          <p>Bienvenue sur mon site! Je suis le Pr. Zakari Yaou KAKA</p>
          {{-- <p>Avec plus de 5 ans d'expérience en tant que professeur associé, je m'efforce de créer un environnement d'apprentissage stimulant pour mes étudiants.</p> --}}
        </div>

        {{-- <div class="button">
          <button class="btn2">Contact</button>
        </div> --}}
      </div>

      <div class="right">
        <div class="dots">
          <i class="fas fa-circle"></i>
          <i class="fas fa-circle"></i>
          <i class="fas fa-circle"></i>
        </div>

        <img src="{{ asset('front/image/home.jpeg')}}" width="50" height="50" alt="">

        <div class="icon flex">
          <i class="fab fa-weixin"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-qq"></i>
        </div>
      </div>
    </div>
  </section>
  <section class="services mtop">
    <div class="container">
      <div class="heading heading2">
        <div class="heading_top flex">
          <div class="line"></div>
          <div class="line line2"></div>
          <i class="fas fa-circle"></i>
          <h3> Articles Zakari</h3>
        </div>
        <div class="heading_bottom">
          <h2><span></span></h2>
        </div>
      </div>


      <div class="content grid top">
        @foreach ($articles as $article)
        <a href="{{ route('get_article',$article->id) }}" style="color: white;">
            <div class="box">
              <div class="img">
                <img src="front/https://img.icons8.com/ios/50/000000/machine-learning.png')}}"/>
              </div>
              <div class="text">
                <h3>TITRE : {{ $article->libelle }}</h3>
                <hr>
                <p></p>
              </div>
            </div>
          </a>
        @endforeach
      </div>
    </div>
  </section>

  <section class="skills mtop background2">
    <div class="container flex">
    </div>
  </section>

  <section class="experience background2">
    <div class="container">
      <div class="heading center">
        <div class="heading_top flex">
          <div class="line"></div>
          <div class="line line2"></div>
          <i class="fas fa-circle"></i>
          <h3> Diplome</h3>
        </div>
        <div class="heading_bottom">
          <h2><span> Mes experience professionnelle</span></h2>
        </div>
      </div>
      <div class="content flex">
        <div class="left">
            <!--     timeline    -->
            <div class="timeline">
                <div class="line">
                </div>
                <div class="content content-1">
                    <section>
                      <i class="icon fas fa-book-open"></i>
                      <div class="details">
                        <span>2022</span>
                        <h3>Professeur Titulaire</h3>
                      </div>
                      <p> CAMES</p>
                    </section>
                  </div>
                <div class="content content-1">
                    <section>
                      <i class="icon fas fa-book-open"></i>
                      <div class="details">
                        <span>2021</span>
                        <h3>Professeur Titulaire</h3>
                      </div>
                      <p> CNLA MALI</p>
                    </section>
                  </div>
                <div class="content content-1">
                  <section>
                    <i class="icon fas fa-briefcase"></i>
                    <div class="details">
                      <span>2017</span>
                      <h3>Maître de Conférences agrégé</h3>
                    </div>
                    <p> Conseil Africain et Malgache pour l’Enseignement Supérieur  (C.A.M.E.S)</p>
                  </section>
                </div>

                <div class="content content-1">
                  <section>
                    <i class="icon fas fa-graduation-cap"></i>
                    <div class="details">
                      <span>2016</span>
                      <h3>Maître-assistant </h3>
                    </div>
                    <p>Conseil Africain et Malgache pour l’Enseignement Supérieur  (C.A.M.E.S)</p>
                  </section>
                </div>

                <div class="content content-1">
                  <section>
                    <i class="icon fas fa-book-open"></i>
                    <div class="details">
                      <span>2014</span>
                      <h3>Doctorat</h3>
                    </div>
                    <p> Université Cheickh Anta Diop (UCAD), Dakar ; Sénégal</p>
                  </section>
                </div>


              </div>
              <!--     timeline    -->
        </div>
        <div class="right">
          <!--     timeline    -->
          <div class="timeline">
            <div class="line">
            </div>
            <div class="content content-1">
                <section>
                  <i class="icon fab fa-acquisitions-incorporated"></i>
                  <div class="details">
                    <span> 2010</span>
                    <h3>D.E.A en Sciences de Gestion </h3>
                </div>
                <p> Université Cheickh Anta Diop (UCAD), Dakar ; Sénégal</p>
            </section>
            </div>
            <div class="content content-1">
              <section>
                <i class="icon fas fa-briefcase"></i>
                <div class="details">
                  <span> 2006</span>
                  <h3>Maîtrise</h3>
                </div>
                <p> Faculté des Sciences Juridiques et Économiques (FSJE) de Bamako ; Mali</p>
              </section>
            </div>

            <div class="content content-1">
              <section>
                <i class="icon fas fa-graduation-cap"></i>
                <div class="details">
                  <span>2005</span>
                  <h3>Licence en Gestion des entreprises</h3>
                </div>
                <p> Faculté des Sciences Juridiques et Économiques (FSJE) de Bamako ; Mali</p>
              </section>
            </div>

            <div class="content content-1">
              <section>
                <i class="icon fas fa-book-open"></i>
                <div class="details">
                  <span> 2004</span>
                  <h3>Diplôme d’Études Universitaires Générales II (DEUG II) en Économie Générale</h3>
                </div>
                <p> Faculté des Sciences Juridiques et Économiques (FSJE) de Bamako ; Mali</p>
              </section>
            </div>

            <div class="content content-1">
              <section>
                <i class="icon fab fa-acquisitions-incorporated"></i>
                <div class="details">
                  <span> 2002</span>
                  <h3>Baccalauréat</h3>
                </div>
                <p> Lycée technique de Bamako/ Mali</p>
              </section>
            </div>
          </div>
          <!--     timeline    -->
        </div>
      </div>
  </section>

  <section class="blog background2">
    <div class="container">
    </div>
  </section>




  <section class="contact top">
    <div class="container flex">
      <div class="left">
        {{-- <img src="{{ asset('front/image/logo.png')}}" alt=""> --}}
        <div class="heading">
          <div class="heading_bottom">
            <h2></h2>
          </div>
          <p> </p>

        </div>
      </div>

      <div class="right">
        <div class="heading">
          <div class="heading_top flex">
            <div class="line"></div>
            <div class="line line2"></div>
            <i class="fas fa-circle"></i>
            <h3>Des questions ? </h3>
          </div>
          <div class="heading_bottom">
            <h2><span>Contactez-moi</span></h2>
          </div>
        </div>


        <form class="mtop">
          <div class="input grid">
            <input type="text" placeholder="Nom">
            <input type="text" placeholder="Email">
            <input type="text" placeholder="Objet">
            <input type="text" placeholder="Telephone">
          </div>
          <textarea name="name" rows="5" cols="80"> Message</textarea>
          <button class="btn2 btn3">Envoyer</button>
        </form>
      </div>
  </section>




  <section class="social_media background2 ">
    <div class="container">
      <div class="social_icon ">
        <div class="heading center">
          <h2>Contactez-moi sur n'importe quelle plateforme et je me ferai un plaisir de vous aider ?</h2>
        </div>

        <div class="content grid">
          <div class="box">
            <i class="fas fa-phone-alt"></i>
            <div class="text">
              <p>Appellez au :</p>
              <span>+223 76 03 36 10</span>
            </div>
          </div>

          <div class="box">
            <i class="fas fa-envelope-open-text"></i>
            <div class="text">
              <p>Email:</p>
              <span>zakari_yaou@yahoo.fr</span>
            </div>
          </div>
          <div class="box">
            <i class="fab fa-weixin"></i>
            <div class="text">
              <p>WeChat:</p>
              <span>-</span>
            </div>
          </div>
          <div class="box">
            <i class="fab fa-twitter"></i>
            <div class="text">
              <p>Twitter:</p>
              <span>-</span>
            </div>
          </div>
          <div class="box">
            <i class="fab fa-linkedin-in"></i>
            <div class="text">
              <p>Linkedin:</p>
              <span>-</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('footer')
  <!-- navbar  -->
  <script>
    const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector(".nav-menu");

    hamburger.addEventListener("click", mobileMenu);

    function mobileMenu() {
      hamburger.classList.toggle("active");
      navMenu.classList.toggle("active");
    }


    window.addEventListener("scroll", function() {
      var header = document.querySelector("header");
      header.classList.toggle("sticky", window.scrollY > 0);
    })
  </script>
  <!-- navbar  -->

  <!-- portfolio filter JS -->
  <script>
    let sortBtn = document.querySelector('.filter-menu').children;
    let sortItem = document.querySelector('.filter-item').children;

    for (let i = 0; i < sortBtn.length; i++) {
      sortBtn[i].addEventListener('click', function() {
        for (let j = 0; j < sortBtn.length; j++) {
          sortBtn[j].classList.remove('current');
        }

        this.classList.add('current');


        let targetData = this.getAttribute('data-target');

        for (let k = 0; k < sortItem.length; k++) {
          sortItem[k].classList.remove('active');
          sortItem[k].classList.add('delete');

          if (sortItem[k].getAttribute('data-item') == targetData || targetData == "all") {
            sortItem[k].classList.remove('delete');
            sortItem[k].classList.add('active');
          }
        }
      });
    }
  </script>
  <!-- portfolio filter JS -->



  <!--  Testimonials JS -->
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: false,
      dots: true,
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
  </script>
  <!--  Testimonials JS -->


</body>

</html>
