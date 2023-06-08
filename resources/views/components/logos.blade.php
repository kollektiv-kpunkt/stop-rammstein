<?php
$logos = glob(public_path('images/orgas/' . app()->getLocale() . '/*'));
?>
<div class="sr-signator-logos grid grid-cols-2 md:grid-cols-3 gap-6 md:gap-8 mt-8 md:mt-12 bg-white p-4">
    @foreach ($logos as $logo)
    <div class="flex justify-center items-center">
        <img src="{{asset('images/orgas/' . app()->getLocale() . "/" . basename($logo))}}" alt="" class="h-16 md:h-20 object-contain">
    </div>
    @endforeach
</div>
