<x-app-layout :title="__('sr.landing.title')">

    <div class="sr-container sr-container__md mt-4 md:mt-8">
        <div class="sr-header-visual flex justify-center items-center drop-shadow-2xl">
            <img src="/images/header.jpg" alt="Picture of Rammstein Singer with his eyes crossed out." class="absolute top-0 left-0 w-full h-full object-cover">
            <div class="sr-header-visual__overlay absolute top-0 left-0 w-full h-full flex items-center pl-4 text-5xl !leading-none italic font-bold">
                <span class="box-decoration-clone bg-gradient-to-r from-indigo-600 to-pink-500 text-white px-2">
                    Keine Show<br>für Täter
                </span>
            </div>
        </div>
        <div class="sr-lead sr-card text-lg leading-normal font-bold sr-section">
            <p>{{__("sr.landing.lead")}}</p>
        </div>
    </div>
</x-app-layout>
