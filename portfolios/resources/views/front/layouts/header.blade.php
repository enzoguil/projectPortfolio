<header>
    <nav class="menu-nav">
        <ul class="flex justify-center space-x-4">
            <li class="btn">
                <a href="{{ url('/portfolio/'.$user['id']) }}" class="text-white hover:text-gray-400">Accueil</a>
            </li>
            <li class="btn">
                <a href="{{ url('/portfolio/'.$user['id'].'/projects') }}" class="text-white hover:text-gray-400">Projets</a>
            </li>
            <li class="btn">
                <a href="{{ url('/portfolio/'.$user['id'].'/skills') }}" class="text-white hover:text-gray-400">Compétences</a>
            </li>
        </ul>
    </nav>
</header>
