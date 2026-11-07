<nav class="navbar" style="display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 20px 0; gap: 12px; width: 100%;">
  <div class="logo">
    <h2 style="margin: 0; font-size: 2rem; color: #ffffff; letter-spacing: 1px;">Neii<span style="color: #a855f7;">Heree</span></h2>
  </div>
  
  <div class="nav-links" style="display: flex; gap: 10px; background: rgba(255, 255, 255, 0.05); padding: 8px 14px; border-radius: 12px; border: 1px solid rgba(168, 85, 247, 0.3); backdrop-filter: blur(10px); flex-wrap: wrap; justify-content: center;">
    <a href="{{ url('/') }}" style="color: #e2e8f0; text-decoration: none; padding: 6px 14px; border-radius: 8px; font-weight: 500; font-size: 0.85rem; transition: all 0.3s ease;">Login</a>
    <a href="{{ url('/dashboard?username=' . ($username ?? 'Neii')) }}" style="color: #e2e8f0; text-decoration: none; padding: 6px 14px; border-radius: 8px; font-weight: 500; font-size: 0.85rem; transition: all 0.3s ease;">Dashboard</a>
    <a href="{{ url('/pengelolaan?username=' . ($username ?? 'Neii')) }}" style="color: #e2e8f0; text-decoration: none; padding: 6px 14px; border-radius: 8px; font-weight: 500; font-size: 0.85rem; transition: all 0.3s ease;">Playlist</a>
    <a href="{{ url('/profile?username=' . ($username ?? 'Neii')) }}" style="color: #e2e8f0; text-decoration: none; padding: 6px 14px; border-radius: 8px; font-weight: 500; font-size: 0.85rem; transition: all 0.3s ease;">Profile</a>
  </div>
</nav>