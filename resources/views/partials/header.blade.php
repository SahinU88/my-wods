<div class="bg-primary md:overflow-hidden">
    <div class="px-4 pt-8 pb-16">
        <div class="relative w-full md:max-w-2xl md:mx-auto text-center">
            <a href="/">
                <img class="w-1/3 mx-auto" src="{{ asset('images/my-wods.png') }}" alt="MY WODS">
            </a>
            <h1
                class="font-bold text-secondary text-xl sm:text-2xl md:text-3xl leading-tight my-6"
            >
                Welcome to {{ config('app.name', 'Laravel') }}!
            </h1>
            <p class="text-gray-400 md:text-xl md:px-18">Looking for a WOD? Find one here.</p>
        </div>
    </div>
    <svg
        class="fill-current bg-primary text-white hidden md:block"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 1440 280"
    >
        <path
        fill-opacity="1"
        d="M0,64L120,85.3C240,107,480,149,720,149.3C960,149,1200,107,1320,85.3L1440,64L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"
        ></path>
    </svg>
</div>
