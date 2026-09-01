@props(['align' => 'end'])

<div class="dropdown">
    <div data-bs-toggle="dropdown" aria-expanded="false" role="button">
        {{ $trigger }}
    </div>

    <ul class="dropdown-menu dropdown-menu-{{ $align }}">
        {{ $content }}
    </ul>
</div>
