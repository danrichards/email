<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    @include('mailstage::partials.head.meta')
    <title>{{$app}} - {{$title}}</title>
    @include('mailstage::partials.head.style')
</head>
<body>

    @include('mailstage::partials.header-alpha)
    @include('mailstage::partials.header-bravo')

    @include('mailstage::partials.masthead')

    @if ($rows)
        @foreach ($rows as $row)

            @if (array_key_exists('special', $row))
                @include("mailstage::partials.special.".$row->partial, ['row' => $row->data])
            @elseif(count($row) == 1)
                @include("mailstage::partials.row-col-1", ['row' => $row->data])
            @elseif(count($row) == 2)
                @include("mailstage::partials.row-col-2", ['row' => $row->data])
            @elseif(count($row) == 3)
                @include("mailstage::partials.row-col-3", ['row' => $row->data])
            @endif

            @include('mailstage::partials.separator-line')

        @endforeach
    @endif

    @include('mailstage::partials.footer')

</body>
</html>