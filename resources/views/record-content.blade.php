{{-- Injected variables $record, $styles --}}
@isset($record['title'])
    <div class="card-header">
        <div class="card-title">
            <span class="fs-6">{!! $record['title'] !!}</span>
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
