<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <a class="navbar-brand" href="#"><img src="http://unit13productions.co.uk/img/logo.png" style="width:150px; height:150px" alt=""/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="{{ url('about') }}">About</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="{{url('services')}}">Services</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="{{ url('contact') }}">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>
