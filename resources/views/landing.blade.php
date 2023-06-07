<x-app-layout :title="__('sr.landing.title')">

    <div class="sr-container sr-container__md">
        <div class="sr-header-visual flex justify-center items-center drop-shadow-2xl">
            <img src="/images/header.jpg" alt="Picture of Rammstein Singer with his eyes crossed out." class="absolute top-0 left-0 w-full h-full object-cover">
        </div>
        <div class="sr-lead sr-card text-xl leading-normal sr-section">
            <h2 class="text-xl italic mb-1">{{__("sr.landing.subtitle")}}</h2>
            <h1 class="text-2xl md:text-5xl font-black text-bg-950 mb-6">{{__("sr.landing.title")}}</h1>
            <p>{!! __("sr.landing.lead") !!}</p>
            <a href="#open-petition" class="sr-button !bg-bg-950 w-full mt-5">{{__("sr.landing.petition.sign")}} <i class="icofont-duotone icofont-apply"></i></a>
        </div>
        <div class="sr-container sr-container__sm sr-section !mt-12 !ml-0 !p-0">
            @foreach (__("sr.landing.petition.content") as $paragraph)
                <p>{!! $paragraph !!}</p>
            @endforeach
        </div>
    </div>
</x-app-layout>
