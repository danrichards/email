<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    @include('mailstage::partials.head.meta')
    <title>{{$app}} - @yield('title')</title>
    @include('mailstage::partials.head.style')
</head>
<body>

    @include('mailstage::partials.header-alpha')
    @include('mailstage::partials.header-bravo')

    @include('mailstage::partials.masthead')

    @if ($rows)
        @include('mailstage::partials.excerpt', ['row' => $rows[0]])
    @endif

    @yield('content')

    @include('mailstage::partials.footer')

</body>
</html>