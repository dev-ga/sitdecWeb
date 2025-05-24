<div class="bg-black">
    <div class="animate-fade animate-once animate-duration-[5000ms] animate-ease-out animate-alternate h-screen font-poppins antialiased selection:bg-black selection:text-[#b4a9ff] bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/img3.jpg') }}');">
        <div class="relative flex flex-col justify-start items-start h-screen">
            @livewire('header-web')


            <div class="flex justify-between items-center absolute bottom-0 top-0 w-full max-w-4xl p-10 animate-fade-left animate-once animate-duration-[800ms] animate-delay-300 animate-ease-linear animate-alternate">


                <img src="{{ asset('images/textoTres.png') }}" class="" alt="">
            </div>
            <div class="absolute bottom-0 right-0 flex space-x-2 p-4 z-50">
                <a href="{{ route('page-four') }}">
                    <div class="animate-fade-up animate-once animate-duration-[1000ms] relative rounded-4xl w-3xs h-96 cursor-pointer group overflow-hidden hover:shadow-[-20px_-16px_37px_-10px_#000000] hover:border-1 hover:border-white transition-colors">
                        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/img4.jpg') }}');"></div>
                        <div class="absolute inset-0 bg-black bg-opacity-70 opacity-0 group-hover:opacity-60 transition duration-300"></div>
                        <div class="absolute inset-0 flex justify-center items-center text-white text-2xl font-bold opacity-0 group-hover:opacity-100 transition duration-300">
                            <p class="text-center">Europa! Low Cost</p>
                        </div>
                    </div>
                </a>
                <a href="{{ route('home') }}">
                    <div class="animate-fade-up animate-once animate-duration-[1500ms] relative rounded-4xl w-3xs h-96 cursor-pointer group overflow-hidden hover:shadow-[-20px_-16px_37px_-10px_#000000] hover:border-1 hover:border-white transition-colors">
                        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/img1.jpg') }}');"></div>
                        <div class="absolute inset-0 bg-black bg-opacity-70 opacity-0 group-hover:opacity-60 transition duration-300"></div>
                        <div class="absolute inset-0 flex justify-center items-center text-white text-2xl font-bold opacity-0 group-hover:opacity-100 transition duration-300">
                            <p class="text-center">Viaja Protegido!</p>

                        </div>
                    </div>
                </a>
                <a href="{{ route('page-two') }}" navigate: true>
                    <div class="animate-fade-up animate-once animate-duration-[1000ms] relative rounded-4xl w-3xs h-96 cursor-pointer group overflow-hidden hover:shadow-[-8px_-7px_37px_-17px_#000000] hover:border-1 hover:border-white transition-colors">
                        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/img2.jpg') }}');"></div>
                        <div class="absolute inset-0 bg-black bg-opacity-70 opacity-0 group-hover:opacity-60 transition duration-300"></div>
                        <div class="absolute inset-0 flex justify-center items-center text-white text-2xl font-bold opacity-0 group-hover:opacity-100 transition duration-300">
                            <p class="text-center">Explora Venezuela!</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

