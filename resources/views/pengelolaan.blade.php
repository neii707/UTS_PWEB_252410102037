@extends('layouts.app')

@section('title', 'Kelola Playlist Musik')

@section('content')
<div class="home-header">
  <h2>Neii<span>Playlist Data</span></h2>
</div>

<div class="user-greeting" style="margin-bottom: 15px;">
  <h3>Daftar Playlist Aktif - {{ $username ?? 'neina' }}</h3>
  <p>Kelola koleksi lagu favorit kamu di sini.</p>
</div>

<div class="music"> 
  <h3>Recently Played</h3>
</div>

<div class="search-box music-1">
  <img src="{{ asset('images/emboh.jpg') }}" width="40">
  <div>
    <h3>RedRed</h3>
    <p style="font-size: 0.75rem; color: #888;">Chase Atlantic (3:15)</p>
  </div>
  <div class="music-controls">
    <button class="btn-action"><i class="fa-solid fa-backward-step"></i></button>
    <button class="btn-play" onclick="window.open('{{ asset('images/whistle.mp4') }}', '_blank')"><i class="fa-solid fa-play"></i></button>
    <button class="btn-action"><i class="fa-solid fa-forward-step"></i></button>
  </div>
</div>

<div class="search-box music-2">
  <img src="{{ asset('images/cuking.jpg') }}" width="40">
  <div>
    <h3>Con Calma</h3>
    <p style="font-size: 0.75rem; color: #888;">Daddy Yankee (3:45)</p>
  </div>
  <div class="music-controls">
    <button class="btn-action"><i class="fa-solid fa-backward-step"></i></button>
    <button class="btn-play" onclick="window.open('{{ asset('images/papa ayah.mp4') }}', '_blank')"><i class="fa-solid fa-play"></i></button>
    <button class="btn-action"><i class="fa-solid fa-forward-step"></i></button>
  </div>
</div>

<div class="search-box music-3">
  <img src="{{ asset('images/luwe.jpg') }}" width="40">
  <div>
    <h3>Welcome To The Jungle</h3>
    <p style="font-size: 0.75rem; color: #888;">Guns N Roses (4:20)</p>
  </div>
  <div class="music-controls">
    <button class="btn-action"><i class="fa-solid fa-backward-step"></i></button>
    <button class="btn-play" onclick="window.open('{{ asset('images/me when.mp4') }}', '_blank')"><i class="fa-solid fa-play"></i></button>
    <button class="btn-action"><i class="fa-solid fa-forward-step"></i></button>
  </div>
</div>

<div class="search-box music-4">
  <img src="{{ asset('images/ngantuk.jpg') }}" width="40">
  <div>
    <h3>Eyeless</h3>
    <p style="font-size: 0.75rem; color: #888;">Slipknot (3:56)</p>
  </div>
  <div class="music-controls">
    <button class="btn-action"><i class="fa-solid fa-backward-step"></i></button>
    <button class="btn-play" onclick="window.open('{{ asset('images/berkelas.mp4') }}', '_blank')"><i class="fa-solid fa-play"></i></button>
    <button class="btn-action"><i class="fa-solid fa-forward-step"></i></button>
  </div>
</div>

<div class="player-bubble" style="margin-top: 20px;">
  <div class="player-top">
    <div class="action-group">
      <button class="btn-icon"><i class="fa-regular fa-heart"></i></button>
      <button class="btn-icon"><i class="fa-solid fa-music"></i></button>
      <button class="btn-icon"><i class="fa-solid fa-expand"></i></button>
    </div>

    <div class="playback-group">
      <button class="btn-sub"><i class="fa-solid fa-rotate-right"></i></button>
      <button class="btn-sub"><i class="fa-solid fa-backward-step"></i></button>
      <button class="btn-main-pause" onclick="window.open('{{ asset('images/kapalku.mp4') }}', '_blank')">
        <i class="fa-solid fa-pause"></i>
      </button>
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