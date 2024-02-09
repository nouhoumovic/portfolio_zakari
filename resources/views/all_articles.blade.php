<!DOCTYPE html>
<html lang="en" dir="ltr">

@include('head')


<body>
    @include('menu')

  <section class="home">
  </section>
  <section class="services mtop">
    <div class="container">
      <div class="heading heading2">
        <div class="heading_top flex">
          <div class="line"></div>
          <div class="line line2"></div>
          <i class="fas fa-circle"></i>
          <h3> Mes articles</h3>
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
