{{-- Injected variables $record, $styles --}}
@isset($record['title'])
    <div class="card-header p-0 pb-2" @isset($record['ribbon']) style="padding-right: 90px !important;"  @endisset>
        <div class="card-title fs-6">
            {!! $record['title'] !!}
        </div>
    </div>
@endisset
@isset($record['content'])
    <div class="card-body px-0 py-1 ">
        {!! $record['content'] !!}
    </div>
@endisset
@isset($record['footer'])
    <div class="card-footer px-0 py-1 ">
        {!! $record['footer'] !!}
    </div>
@endisset
