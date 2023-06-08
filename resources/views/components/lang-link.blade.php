<div class="mb-2">
    @if (isset($_COOKIE["locale"]) && $_COOKIE["locale"] == "fr")
        <a href="/l/de" class="text-sm underline opacity-50">DE</a>
    @else
        <a href="/l/fr" class="text-sm underline opacity-50">FR</a>
    @endif
</div>
