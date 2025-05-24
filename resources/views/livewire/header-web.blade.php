<div>
    <a href="{{ route('home') }}" class="cursor-pointer">
        <div class="w-3/4 max-w-xs p-8">
            <img src="{{ asset('images/logo_3.png') }}" alt="">
        </div>
    </a>
    <nav class="fixed top-0 right-0 m-4">
        <ul class="flex space-x-4 bg-opacity-80 rounded-lg shadow-xl p-4 px-8  hover:border-b hover:border-white gap-3">
            <li><a href="{{ route('home') }}" class="text-black hover:text-white hover:font-extrabold font-semibold">Home</a></li>
            <li><a href="#" class="text-black hover:text-white hover:font-extrabold font-semibold">Agentes</a></li>
            <li><a href="https://tudrenviajes.xyz/app/pages/cotizador.php" class="text-black hover:text-white hover:font-extrabold font-semibold">Cotizaciones</a></li>
        </ul>
    </nav>
</div>
