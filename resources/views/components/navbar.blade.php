<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="{{ asset("icon/logo.png") }}" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Pasang Lowongan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cari Lowogan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tips Loker</a>
        </li>
      </ul>
      <div class="d-flex">
        <button type="button" class="btn btn-primary me-2">Register</button>
        <button class="btn btn-outline-success" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</button>
      </div>
    </div>
  </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
          <p>Dont have an account? <a href="">Register</a></p>
        </form>
      </div>
    </div>
  </div>
</div>