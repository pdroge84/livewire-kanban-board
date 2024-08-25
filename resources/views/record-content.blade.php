{{-- Injected variables $record, $styles --}}
@isset($record['title'])
<p>
    {!! $record['title'] !!}
</p>
@endisset
@isset($record['title'])
<p>
    {!! $record['content'] !!}
</p>
@endisset
@isset($record['title'])
<p>
    {!! $record['footer'] !!}
</p>
@endisset
