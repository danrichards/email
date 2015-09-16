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

    @if (isset($rows))
        @foreach ($rows as $row)

            @if (is_object($row) AND isset($row->special))
                @include($row->partial, ['data' => $row->data])
            @elseif(is_object($row))
                @include("email::simples.partials.row-cols-1", ['row' => $row])
            @elseif(is_array($row) AND count($row) == 1)
                @include("email::simples.partials.row-cols-1", ['row' => $row[0]])
            @elseif(is_array($row) AND count($row) == 2)
                @include("email::simples.partials.row-cols-2", ['row' => $row])
            @elseif(is_array($row) AND count($row) == 3)
                @include("email::simples.partials.row-cols-3", ['row' => $row])
            @endif

        @endforeach
    @endif

    @include('email::simples.layouts.footers.default')

</body>
</html>