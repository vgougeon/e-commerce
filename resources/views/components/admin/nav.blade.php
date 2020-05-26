<div class="sidenav">
    <a href="{{ route('admin') }}" class="{{ (request()->is('admin')) ? 'active' : '' }}">
    <i class="fas fa-angle-double-right"></i>
    Dashboard
    </a>
    <span class="category">Contenu</span>
    <a href="{{route('games.index') }}" class="{{ (request()->is('admin/games*')) ? 'active' : '' }}">
    <i class="fas fa-gamepad"></i>
    Articles
    </a>
    {{-- <a href="/">
    <i class="fas fa-money-bill-wave"></i>
    Promotions
    </a> --}}
    <span class="category">Membres</span>
    <a href="{{route('admin.members') }}" class="{{ (request()->is('admin/users*')) ? 'active' : '' }}">
    <i class="fas fa-users"></i>
    Membres
    </a>
    {{-- <span class="category">Statistiques</span>
    <a href="/">
    <i class="fas fa-chart-line"></i>
    Statistiques
    </a> --}}
</div>