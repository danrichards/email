<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    @include('mailstage::partials.head.meta')
    <title>tag.network - @yield('title')</title>
    @include('mailstage::partials.head.style')
</head>
<body>

@include('mailstage::partials.header-alpha)
@include('mailstage::partials.header-bravo')

<!-- Start of main-banner -->
<table width="100%" bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="banner">
    <tbody>
    <tr>
        <td>
            <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                <tbody>
                <tr>
                    <td width="100%">
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                            <tr>
                                <!-- start of image -->
                                <td align="center" st-image="banner-image">
                                    <div class="imgpop">
                                        @yield('banner')
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <!-- end of image -->
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>
<!-- End of main-banner -->
@include('mailstage::partials.separator-spacing')

@if ($h1)
    @include('mailstage::partials.h1)
    @include('mailstage::partials.separator-line')
@endif

@yield('content')

@include('mailstage::partials.footer')

</body>
</html>