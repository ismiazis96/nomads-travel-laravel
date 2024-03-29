 <!--navigasi  -->
 <div class="container">
   <!-- logo -->
   <nav class="row navbar navbar-expand-lg navbar-light bg-white">
     <a href="{{ route('home') }}" class="navbar-brand">
      <img src="{{ url('frontend/images/Logo.png') }}" alt="Logo_nomads">
    </a>
    <!-- akhir logo -->

    <!-- awal navigasi -->
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navb">
      <ul class="navbar-nav ml-auto mr-3">
        <li class="nav-item mx-md-2">
          <a href="{{ route('home') }}" class="nav-link active">Home</a>
        </li>
        <li class="nav-item mx-md-2">
          <a href="#" class="nav-link">Paket travel</a>
        </li>
        <li class="nav-item dropdown ">
          <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Service</a>
          <div class="dropdown-menu">
            <a href="#" class="dropdown-item">Link</a>
            <a href="#" class="dropdown-item">Link</a>
            <a href="#" class="dropdown-item">Link</a>
          </div>
        </li>
        <li class="nav-item mx-md-2">
          <a href="{{ route('testimonial') }}" class="nav-link">Testimonial</a>
        </li>

        
       @guest
       <!-- mobile button -->
         <form class="form-inline d-sm-block d-md-none">
          @csrf
           <button class="btn btn-login my-2 my-sm-0" type="button" onclick="event.preventDefault(); location.href='{{ url('login') }}';">
           Masuk
           </button>
         </form>
       
       <!-- Dekstop Button -->
        <form class="form-inline my-2 my-lg-0 d-none d-md-block ">
          @csrf
          <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{ url('login') }}';">
            Masuk
          </button>

        </form>
       @endguest

        @auth
       <!-- mobile button -->
         <form class="form-inline d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
          @csrf
         <button class="btn btn-login my-2 my-sm-0"  type="submit">
         Keluar
         </button>
         </form>
       
       <!-- Dekstop Button -->
       <form class="form-inline my-2 my-lg-0 d-none d-md-block " action="{{ url('logout') }}" method="POST">
        @csrf
         <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
         Keluar
         </button>
         </form>
       @endauth
     </ul>
   </div>
 </nav>

 {{-- <div class="tester position-sticky text-white">
   <div>satu</div>
   <div>dua</div>
   <div>tiga</div>
   <div>empat</div>
 </div> --}}

</div>