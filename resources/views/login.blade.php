<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login - NeiiHeree</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <div class="app-mockup page-welcome" style="margin-top: 50px;">
    <div class="mobile-frame">
      <div class="screen active">
        <div class="welcome-content">
          <img src="{{ asset('images/border.png') }}" class="img-corner top-left" width="70">
          <img src="{{ asset('images/border.png') }}" class="img-corner top-right" width="70">
          <img src="{{ asset('images/border.png') }}" class="img-corner bottom-left" width="70">
          <img src="{{ asset('images/border.png') }}" class="img-corner bottom-right" width="70">
          
          <img src="{{ asset('images/logome.png') }}" width="120" alt="Logo">
          <h1 class="logo-title">Nei<span>Heree</span></h1>
          <p class="tagline">iwak tempe - Enter Your Vibe</p>

          <form action="{{ route('login.process') }}" method="POST" style="display: flex; flex-direction: column; gap: 15px; align-items: center; width: 280px;">
            @csrf
            <input type="text" name="username" required placeholder="Masukkan Nama/Username" 
                   style="width: 100%; padding: 10px 18px; border-radius: 20px; border: 1px solid var(--primary-purple); background: var(--bg-card); color: white; text-align: center; outline: none;">
            
            <button type="submit" class="btn-glow" style="margin-bottom: 0; width: 100%;">
              Hop inn <i class="fa-solid fa-sparkles"></i>
            </button>
          </form>

        </div>
      </div>
    </div>
  </div>
</body>
</html>
