<section id="contact" class="contact" style="background-image: url(images/contact.jpg);background-size:cover">

    <h1 class="heading">contact us</h1>


    <div class="row">

      <div class="image">
        <img src="images/Mention-amico.svg" alt="">
      </div>

      <div class="form-container">
        <form wire:submit.prevent="SendContact">
          @if(Session::has('contact_message'))
          <div class="alert alert-success" role="alert">{{ Session::get('contact_message') }}</div>
          @endif

          <div class="inputBox">
            <input style="background: white" type="text" placeholder="name" wire:model="nom" style="background: white">          
            <input style="background: white" type="number" placeholder="Mobile" wire:model="mobile">
            @error('mobile') <p class="text-danger">{{ $message }}</p>@enderror
          </div>
          <input style="background: white" type="email" placeholder="email" wire:model="email">
          @error('email') <p class="text-danger">{{ $message }}</p>@enderror
          <textarea cols="30" rows="10" placeholder="message" wire:model="message"style="background: white"></textarea>
          @error('message') <p class="text-danger">{{ $message }}</p>@enderror
          <input type="submit" value="Submit">

        </form>
      </div>

    </div>

  </section>