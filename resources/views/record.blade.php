{{-- Injected variables $record, $styles --}}
<div
    id="{{ $record['id'] }}"
    @if ($recordClickEnabled) wire:click="onRecordClick('{{ $record['id'] }}')" @endif
    class="{{ $styles['record'] }}">

    @isset($record['ribbon'])
        <div class="ribbon ribbon-{{ strtolower($record['ribbon']) ?? 'info' }} ribbon-shape">{!! $record['ribbon'] !!}</div>
    @endisset
    @include($recordContentView, [
        'record' => $record,
        'styles' => $styles,
    ])

</div>
