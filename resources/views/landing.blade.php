<x-app-layout :title="__('sr.landing.title')">

    <div class="sr-container sr-container__md">
        <x-lang-link />
        @if (request()->session()->get('success') === true)
            <div class="sr-page-heroine__alert--success bg-green-200 border-green-700 border text-green-700 font-bold p-4 mb-6 sticky top-0 z-50">
                <p>{{__("sr.form.successmessage")}}</p>
            </div>
        @endif
        <div class="sr-header-visual flex justify-center items-center drop-shadow-2xl relative">
            <img src="/images/header.jpg" alt="Picture of Rammstein Singer with his eyes crossed out." class="absolute top-0 left-0 w-full h-full object-cover">
            <span class="absolute bottom-2 left-2 text-2xs text-white opacity-25 leading-none"><a href="https://www.flickr.com/photos/aurelien_g/">© Aurélien Glabas, edited</a></span>
        </div>
        <div class="sr-lead sr-card text-xl leading-normal sr-section">
            <h2 class="text-xl italic mb-1">{{__("sr.landing.subtitle")}}</h2>
            <h1 class="text-3xl md:text-5xl font-black text-primary mb-6">{{__("sr.landing.title")}}</h1>
            <p>{!! __("sr.landing.lead") !!}</p>
            <a href="#petition" class="sr-button w-full mt-5">{{__("sr.landing.petition.sign")}}</a>
        </div>
        <x-progress-bar />
        <x-form />
        <x-social-share/>
        <div class="sr-container sr-container__sm sr-section !mt-12 !ml-0 !p-0">
            @foreach (__("sr.landing.petition.content") as $paragraph)
                <p>{!! $paragraph !!}</p>
            @endforeach
        </div>
        <x-logos />
    </div>
</x-app-layout>
