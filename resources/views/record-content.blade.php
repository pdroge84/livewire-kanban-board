{{-- Injected variables $record, $styles --}}
@isset($record['title'])
<p>
    {!! $record['title'] !!}
</p>
@endisset
@isset($record['content'])
<p>
    {!! $record['content'] !!}
</p>
@endisset
@isset($record['footer'])
<p>
    {!! $record['footer'] !!}
</p>
@endisset
