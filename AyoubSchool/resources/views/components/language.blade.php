
<ul>
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li><x-button >
            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
            </a></x-button>
        </li>
    @endforeach
</ul>

