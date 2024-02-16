@if(!empty($appendDirectives) && is_array($appendDirectives))
@forelse($appendDirectives as $directive)
{{ $directive }}
@empty
@endforelse
@endif
