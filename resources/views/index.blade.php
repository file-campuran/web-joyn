@extends('layouts.main')

@section('css')
  <style media="screen">
  .bg-primary {
    background-color: #1242AF !important;
  }

  .navbar .navbar-brand {
    font-size: 1.5em;
    font-weight: bold;
  }
  .navbar p {
    font-size: 1.5em;
    font-weight: bold;
    display: inherit;
  }

  .btn, .navbar .navbar-nav>a.btn {
    font-size: 1em;
  }

  .form-check .form-check-sign::before, .form-check .form-check-sign::after {
    border: 1px solid #1242AF;
  }

  .form-check input[type="checkbox"]:checked+.form-check-sign::after {
    opacity: 1;
    background-color: #1242af;
    color: white;
  }

  header {
    position: relative;
    background-color: black;
    height: 90vh;
    min-height: 25rem;
    width: 100%;
    overflow: hidden;
  }

  @media screen and (max-width: 991px) {
    header {
      height: 100vh;
    }
  }

  header video {
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    z-index: 0;
    -ms-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    object-fit: cover;
  }

  header .container {
    position: relative;
    z-index: 2;
  }

  header .overlay {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: black;
    opacity: 0.5;
    z-index: 1;
  }

  .btn-primary {
    background-color: #1242AF;
  }

  .btn-primary:hover {
    background-color: #590DC4;
  }

  .btn-outline-primary {
    color: #1242AF;
    background-color: transparent;
  }

  .btn-outline-primary:hover {
    color: white;
    background-color: #1242AF;
    border-color: #1242AF;
  }

  .btn-neutral {
    background-color: transparent;
    color: #1242AF;
  }

  .btn-neutral:hover, .btn-neutral:focus {
    color: #1242AF !important;
  }

  .form-control:focus {
    border: 1px solid #1242AF;
  }
  </style>
@endsection

@section('content')
  <div class="wrapper">
    <header>
      <div class="overlay"></div>
      <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="https://videos.ctfassets.net/oqn5qhpsy9i3/1KP0Opq4NzvOg7MzsAOH9b/89ed96bafcd387b619d6a9a07cf3c768/LyftUp_GM_15s_v7.mp4" type="video/mp4" />
      </video>
      <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
          <div class="w-100 text-white">
            <h1 class="display-3">{{ env("APP_NAME") }}</h1>
          </div>
        </div>
      </div>
    </header>
    <div class="main">
      <div class="section-tabs d-none d-md-block" style="height: 10vh;">
        <div class="container-fluid text-center h-100">
          <div class="row h-100">
            <div class="col-md-3 align-self-center">
              <button href="#"  class="btn btn-primary btn-round w-75" type="button">Sign up to ride</button>
            </div>
            <div class="col-md-3 align-self-center">
              <button href="#"  class="btn btn-primary btn-round btn-outline-primary w-75" type="button">Apply to drive</button>
            </div>
            <div class="col-md-3 align-self-center">
              <button  href="#"  class="btn btn-neutral btn-round w-75" type="button">Supporting communities</button>
            </div>
            <div class="col-md-3 align-self-center">
              <button class="btn btn-neutral btn-round w-75" type="button">Our approach to safety</button>
            </div>
          </div>
        </div>
      </div>
      <div class="section section-examples py-5 py-md-0" style="background-color: #9be5f3">
        <div class="container">
          <div class="row" style="height: 100vh">
            <div class="col-md-7 my-auto">
              <div class="row">
                <div class="col-12">
                  <h1 style="color: #1242AF; font-weight: bold;">"Yur alternate ride.</h1>
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control px-4" placeholder="Enter mobile phone number*" style="background-color: white; height: 4em;">
                </div>
                <div class="col-md-6">
                  <div class="form-check">
                    <label class="form-check-label" style="color: #1242AF; font-weight: bold;">
                      <input class="form-check-input" type="checkbox">
                      <span class="form-check-sign"></span>
                      I agree to Joyn's <a href="#" style="color: #007bff; text-decoration: underline;">Terms of Service</a>
                    </label>
                  </div>
                </div>
                <div class="col-md-12 mt-3">
                  <button href="#"       type="button" class="btn btn-primary btn-round">Apply to drive</button>
                  <button href="#"  type="button" class="btn btn-neutral btn-round">Sign up to ride</button>
                </div>
              </div>
            </div>
            <div class="col-md-5 my-auto">
              <img src="https://images.ctfassets.net/oqn5qhpsy9i3/6AIwJ8YmNqkooaswSaCyge/603c7dde0af5066ef7fa991352f43bd1/HP_car2.png?h=400" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
