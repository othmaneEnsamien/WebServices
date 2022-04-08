 <!-- home section starts  -->

 <section id="home" class="home">

    <h1 class="banner">web service & development services</h1>
    <h3 class="slogan">you have a vision. we have a team to get you there</h3>
    <a href="#"><button>get started</button></a>


    <div class="wave wave1"></div>
    <div class="wave wave2"></div>
    <div class="wave wave3"></div>

    <div class="fas fa-cog nut1"></div>
    <div class="fas fa-cog nut2"></div>


  </section>


  <!-- home section ends -->


  <!-- abuout section starts  -->

  <section id="about" class="about">

    <h1 class="heading">about us</h1>

    <div class="row">

      <div class="content">
        <h3>We build websites that build your busines</h3>
        <p>Because your website is unique, we take the time to learn about the objectives you want to achieve. We
          research your needs, brand, and corporate identity before deciding on the best strategy for online success.
        </p>
        <a href="#"><button class="btn">read more</button></a>
      </div>

      <div class="image">
        <img src="images/about-image.svg" alt="">
      </div>

    </div>


  </section>

  <!-- abuout section ends  -->

  <!-- service section starts  -->

  <section id="service" class="service">

    <h1 class="heading">our services</h1>

    <div class="row">

      <div class="image">
        <img src="images/img1.svg" alt="">
      </div>
      <div class="content">
        <h3>website development</h3>
        <p>After the design work is complete and you approve a final mockup, we send it off to our website development
          team to turn your vision into reality. Our web development team will work on building a gorgeous website while
          focusing on usability and responsive web design.</p>
        <a href="#"><button class="btn">read more</button></a>
      </div>

    </div>

    <div class="row">

      <div class="content">
        <h3>Free ecommerce Website</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde voluptatem, tempore hic deserunt vel
          temporibus aperiam recusandae ratione, obcaecati at qui accusamus enim, laudantium eveniet. Inventore voluptas
          nemo placeat. Voluptas.</p>
        <a href="{{ route('pagecommerce') }}"><button class="btn">read more</button></a>
      </div>
      <div class="image">
        <img src="images/Ecommerce web page-rafiki.svg" alt="">
      </div>

    </div>

    <div class="row">


      <div class="image">
        <img src="images/Mobile UX-rafiki.svg" alt="">
      </div>
      <div class="content">
        <h3>responsive design</h3>
        <p>Our lead web designers will then work on transforming your blueprints into completed design layouts once the
          basic version has been developed. If you are unable to supply specific content, we will complete the layout
          using dummy content while our content team works on producing top quality content for your website.</p>
        <a href="#"><button class="btn">read more</button></a>
      </div>

    </div>

    {{-- <div class="row">

      <div class="content">
        <h3>web hosting</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde voluptatem, tempore hic deserunt vel
          temporibus aperiam recusandae ratione, obcaecati at qui accusamus enim, laudantium eveniet. Inventore voluptas
          nemo placeat. Voluptas.</p>
        <a href="#"><button class="btn">read more</button></a>
      </div>
      <div class="image">
        <img src="images/Cloud hosting-cuate.svg" alt="">
      </div>

    </div> --}}

   
    <div class="row">

      <div class="content">
        <h3>graphic design</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde voluptatem, tempore hic deserunt vel
          temporibus aperiam recusandae ratione, obcaecati at qui accusamus enim, laudantium eveniet. Inventore voluptas
          nemo placeat. Voluptas.</p>
        <a href="#"><button class="btn">read more</button></a>
      </div>
      <div class="image">
        <img src="images/Designer girl-cuate.svg" alt="">
      </div>

    </div>

  </section>


  <!-- service section ends -->

  <!-- team section starts  -->

  <section id="team" class="team">

    <h1 class="heading">our team</h1>

    <div class="row">

      <div class="card">
        <div class="image">
          <img src="images/othmane.jpg" alt="">
        </div>
        <div class="info">
          <h3>someone's name</h3>
          <span>web designer</span>
          <div class="icons">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="image">
          <img src="images/othmane.jpg" alt="">
        </div>
        <div class="info">
          <h3>someone's name</h3>
          <span>web designer</span>
          <div class="icons">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="image">
          <img src="images/othmane.jpg" alt="">
        </div>
        <div class="info">
          <h3>someone's name</h3>
          <span>web designer</span>
          <div class="icons">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
          </div>
        </div>
      </div>

    </div>


  </section>



  <!-- team section ends -->

  <!-- contact section starts  -->

  {{-- <section id="contact" class="contact">

    <h1 class="heading">contact us</h1>


    <div class="row">

      <div class="image">
        <img src="images/Mention-amico.svg" alt="">
      </div>

      <div class="form-container">
        <form wire:submit.prevent="SendContact">
          @if(Session::has('message'))
          <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
          @endif

          <div class="inputBox">
            <input type="text" placeholder="name" wire:model="nom">          
            <input type="number" placeholder="Mobile" wire:model="mobile">
            @error('mobile') <p class="text-danger">{{ $message }}</p>@enderror
          </div>
          <input type="email" placeholder="email" wire:model="email">
          @error('email') <p class="text-danger">{{ $message }}</p>@enderror
          <textarea cols="30" rows="10" placeholder="message" wire:model="message"></textarea>
          @error('message') <p class="text-danger">{{ $message }}</p>@enderror
          <input type="submit" value="Submit">

        </form>
      </div>

    </div>

  </section> --}}


  <!-- contact section ends -->

  <!-- FAQ section starts  -->

  <section id="faq" class="faq">

    <h1 class="heading">FAQ</h1>

    <div class="row">

      <div class="image">
        <img src="images/FAQs-amico.svg" alt="">
      </div>

      <div class="accordion-container">

        <div class="accordion">
          <div class="accordion-header">
            <span>+</span>
            <h3>How much will it cost?</h3>
          </div>
          <div class="accordion-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi atque possimus ipsum quae error ullam
              reiciendis in iste maiores nulla. Impedit nam praesentium omnis cupiditate excepturi natus magnam sunt
              deleniti!</p>
          </div>
        </div>

        <div class="accordion">
          <div class="accordion-header">
            <span>+</span>
            <h3>How To update website?</h3>
          </div>
          <div class="accordion-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi atque possimus ipsum quae error ullam
              reiciendis in iste maiores nulla. Impedit nam praesentium omnis cupiditate excepturi natus magnam sunt
              deleniti!</p>
          </div>
        </div>

        <div class="accordion">
          <div class="accordion-header">
            <span>+</span>
            <h3>is domain provided free?</h3>
          </div>
          <div class="accordion-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi atque possimus ipsum quae error ullam
              reiciendis in iste maiores nulla. Impedit nam praesentium omnis cupiditate excepturi natus magnam sunt
              deleniti!</p>
          </div>
        </div>

        <div class="accordion">
          <div class="accordion-header">
            <span>+</span>
            <h3>how long it takes to design?</h3>
          </div>
          <div class="accordion-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi atque possimus ipsum quae error ullam
              reiciendis in iste maiores nulla. Impedit nam praesentium omnis cupiditate excepturi natus magnam sunt
              deleniti!</p>
          </div>
        </div>

        <div class="accordion">
          <div class="accordion-header">
            <span>+</span>
            <h3>is it seo freindly?</h3>
          </div>
          <div class="accordion-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi atque possimus ipsum quae error ullam
              reiciendis in iste maiores nulla. Impedit nam praesentium omnis cupiditate excepturi natus magnam sunt
              deleniti!</p>
          </div>
        </div>

      </div>

    </div>


  </section>


  <!-- FAQ section ends -->