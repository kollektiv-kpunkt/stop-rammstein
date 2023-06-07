<div class="sr-signup-form sr-section" id="petition">
    <div class="sr-signup-form__container">
        <button class="sr-signup-form__close-form w-full bg-secondary py-2 lg:hidden mt-4">{{__("sr.form.close")}} <i class="icofont-ui-close ml-2"></i></button>
        <div class="fdb-signup-form__inner">
            <h2 class="text-xl md:text-3xl font-bold mb-4">{{__("sr.form.title")}}</h2>
            <form action="/supporters" method="POST" class="sr-form mt-6">
                @foreach (__("sr.form.fields") as $field)
                    <x-form-field :name="$field['name']" :label="$field['label']" :placeholder="$field['placeholder'] ?? ''" :required="$field['required']" :type="$field['type']" :checked="$field['checked'] ?? false" :classes="$field['class'] ?? false" />
                @endforeach
                @csrf
                <input type="hidden" name="source" value="{{$_COOKIE['sr_source'] ?? ""}}">
                <input type="hidden" name="locale" value="{{app()->getLocale()}}">
                <button type="submit" class="sr-button w-full flex justify-center items-center gap-x-2 mt-2 font-bold">{{__("sr.form.submit") }}  <i class="icofont-duotone icofont-apply"></i></button>
            </form>
        </div>
    </div>
</div>
