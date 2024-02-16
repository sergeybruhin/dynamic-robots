@if(!empty($sitemap))
Sitemap: {{ \Illuminate\Support\Facades\URL::to('/') }}/{{ $sitemap}}
@endif
