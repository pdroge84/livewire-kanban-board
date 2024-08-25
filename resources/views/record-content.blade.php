{{-- Injected variables $record, $styles --}}
@isset($record['title'])
    <div class="card-header">
        <div class="card-title">
            <h5>{!! $record['title'] !!}</h5>
        </div>
    </div>
@endisset
@isset($record['content'])
    <div class="card-body">
        {!! $record['content'] !!}
    </div>
@endisset
@isset($record['footer'])
    <div class="card-footer">
        {!! $record['footer'] !!}
    </div>
@endisset
