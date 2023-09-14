<div>
    {{-- Popup Cookie description only gets displayed if set in config --}}
    @if(isset($cookie['description']))
        <p>
            @if($multiLanguageSupport)
                {{ __('eu-cookie-consent::cookies.'.$cookie['description']) }}
            @else
                {{ $cookie['description'] }}
            @endif
        </p>
    @endif
    {{-- Popup Cookie checkbox with Label --}}
    @if(isset($cookie['forced']))
        <input type="checkbox" id="{{ $cookieName }}" name="{{ $cookieName }}" class="eu-cookie-consent-category-{{$categoryName}} eu-cookie-consent-cookie" value="1" @if(isset($cookie['forced'])) checked="checked" @endif }} disabled="disabled">
    @else
        <input type="checkbox" id="{{ $cookieName }}" name="{{ $cookieName }}" class="eu-cookie-consent-category-{{$categoryName}} eu-cookie-consent-cookie" value="1" @if(isset($cookie['forced'])) checked="checked" @endif }}>
    @endif
    {{-- For the foreced cookies we need this workaround with hidden input because we set the original input disabled --}}
    @if(isset($cookie['forced']))
        <input type="hidden" name="{{ $cookieName }}" value="1">
    @else
        <input type="hidden" name="{{ $cookieName }}" value="0">
    @endif
    <label for="{{ $cookieName }}">
        @if($multiLanguageSupport)
            {{ __('eu-cookie-consent::cookies.'.$cookieName) }}
        @else
            {{ $cookie['title'] }}
        @endif
    </label>
</div>
