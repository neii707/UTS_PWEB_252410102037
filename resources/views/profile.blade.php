@extends('layouts.app')

@section('title', 'Profil User')

@section('content')
<div class="home-header">
  <h2>User<span>Profile</span></h2>
</div>

<div class="search-box" style="flex-direction: column; align-items: flex-start; gap: 8px; padding: 20px;">
  <div style="display: flex; align-items: center; gap: 15px;">
    <img src="{{ asset('images/logome.png') }}" width="60" style="border-radius: 50%; border: 2px solid var(--primary-purple);">
    <div>
      <h2 style="color: var(--soft-purple);">{{ $userProfile['name'] }}</h2>
      <p style="font-size: 0.85rem; color: var(--text-muted);">{{ $userProfile['bio'] }}</p>
    </div>
  </div>

  <div style="width: 100%; border-top: 1px solid rgba(139, 92, 246, 0.2); margin-top: 10px; padding-top: 10px; font-size: 0.9rem;">
    <p><strong>Status Account:</strong> <span style="color: #4ade80;">{{ $userProfile['status'] }}</span></p>
    <p style="margin-top: 5px;"><strong>Email Contact:</strong> {{ $userProfile['email'] }}</p>
  </div>
</div>
@endsection
