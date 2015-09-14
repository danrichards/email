<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    @include('mailstage::partials.head.meta')
    <title>{{$title}}</title>
    @include('mailstage::partials.head.style')
</head>
<body>

    @include('mailstage::partials.header-alpha)
    @include('mailstage::partials.header-bravo')

    @if ($banner)
        @include('mailstage::partials.banner')
        @include('mailstage::partials.separator-spacing')
    @endif

    @if ($h1)
        @include('mailstage::partials.h1)
        @include('mailstage::partials.separator-line')
    @endif

    @yield('custom')

    @if ($rows)
        @foreach ($rows as $row)

            @if($row->cols == 1)
                @include("mailstage::partials.row-col-1", ['data' => $row->data])
            @elseif($row->cols == 2)
                @include("mailstage::partials.row-col-2", ['data' => $row->data])
            @elseif($row->cols == 3)
                @include("mailstage::partials.row-col-3", ['data' => $row->data])
            @elseif($row->cols == 'special')
                @include("mailstage::partials.special.".$row->partial, ['data' => $row->data])
            @endif

            @include('mailstage::partials.separator-line')

        @endforeach
    @endif

    @include('mailstage::partials.footer')

</body>
</html>