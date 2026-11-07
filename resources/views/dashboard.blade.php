@extends('layouts.app')

@section('title', 'Dashboard Vibe')

@section('content')
<div class="home-header">
  <h2>Neii<span>Play</span></h2>
</div>

<div class="user-greeting">
  <h3>Glad to see u back, {{ $username }}</h3>
  <p>Lets gettin the vibe</p>
</div>

<div class="search-box">
  <h3>MY FAVV SINGERR RAHHH</h3>
</div>

<div class="banner-container">
  <div class="hero-banner banner-1" style="background-image: linear-gradient(rgba(18, 9, 25, 0.4), rgba(18, 9, 25, 0.8)), url('{{ asset('images/chaseatlantic.png') }}');">
    <div class="banner-info">
      <span>RnB</span>
      <h3>Chase Atlantic</h3>
    </div>
  </div>

  <div class="hero-banner banner-2" style="background-image: linear-gradient(rgba(18, 9, 25, 0.4), rgba(18, 9, 25, 0.8)), url('{{ asset('images/cortis.png') }}');">
    <div class="banner-info">
      <span>K-Pop</span>
      <h3>Cortis</h3>
    </div>
  </div>

  <div class="hero-banner banner-3" style="background-image: linear-gradient(rgba(18, 9, 25, 0.4), rgba(18, 9, 25, 0.8)), url('{{ asset('images/metallica.png') }}');">
    <div class="banner-info">
      <span>Metal</span>
      <h3>Metallica</h3>
    </div>
  </div>

  <div class="hero-banner banner-4" style="background-image: linear-gradient(rgba(18, 9, 25, 0.4), rgba(18, 9, 25, 0.8)), url('{{ asset('images/slipknot.png') }}');">
    <div class="banner-info">
      <span>Metal</span>
      <h3>Slipknot</h3>
    </div>
  </div>
</div> 

<div class="player-bubble">
  <div class="player-top">
    <div class="action-group">
      <button class="btn-icon"><i class="fa-regular fa-heart"></i></button>
      <button class="btn-icon"><i class="fa-solid fa-music"></i></button>
      <button class="btn-icon"><i class="fa-solid fa-expand"></i></button>
    </div>

    <div class="playback-group">
      <button class="btn-sub"><i class="fa-solid fa-rotate-right"></i></button>
      <button class="btn-sub"><i class="fa-solid fa-backward-step"></i></button>
      <button class="btn-main-pause" onclick="window.open('{{ asset('images/kapalku.mp4') }}', '_blank')"><i class="fa-solid fa-pause"></i></button>
      <button class="btn-sub"><i class="fa-solid fa-forward-step"></i></button>
      <button class="btn-sub"><i class="fa-solid fa-shuffle"></i></button>
    </div>
  </div>

  <div class="player-bottom">
    <span class="time">1:16</span>
    <input type="range" min="0" max="100" value="35" class="progress-bar">
    <span class="time">4:20</span>
  </div>
</div>
@endsection
