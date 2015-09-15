<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    @include('email::simples.layouts.head.meta')
    <title>{{$app}} - {{$title}}</title>
    @include('email::simples.layouts.head.style')
</head>
<body>

    @include('email::simples.layouts.headers.alpha')
    @include('email::simples.layouts.headers.bravo')

    @include('email::simples.partials.masthead')

    @if ($rows)
        @foreach ($rows as $row)

            @if (array_key_exists('special', $row))
                @include("email::simples.partials.special.".$row->partial, ['row' => $row->data])
            @elseif(count($row) == 1)
                @include("email::simples.partials.row-col-1", ['row' => $row->data])
            @elseif(count($row) == 2)
                @include("email::simples.partials.row-col-2", ['row' => $row->data])
            @elseif(count($row) == 3)
                @include("email::simples.partials.row-col-3", ['row' => $row->data])
            @endif

            @include('email::simples.partials.separator-line')

        @endforeach
    @endif

    @include('email::simples.layouts.footers.default')

</body>
</html>