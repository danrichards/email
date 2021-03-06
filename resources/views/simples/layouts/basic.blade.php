<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    @include('email::simples.layouts.head.meta')
    <title>{{$app}} - @yield('title')</title>
    @include('email::simples.layouts.head.style')
</head>
<body>

    @include('email::simples.layouts.headers.alpha')
    @include('email::simples.layouts.headers.bravo')

    @include('email::simples.partials.masthead')
    @include('email::simples.partials.excerpt')

    <!-- Content -->
    <table width="100%" bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="full-text">
        <tbody>
        <tr>
            <td>
                <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                    <tbody>
                    <tr>
                        <td width="100%">
                            <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                <tbody>
                                <!-- Spacing -->
                                <tr>
                                    <td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                </tr>
                                <!-- Spacing -->
                                <tr>
                                    <td>
                                        <table width="560" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner">
                                            <tbody>
                                            <!-- content -->
                                            <tr>
                                                <td style="font-family: Helvetica, arial, sans-serif; font-size: 16px; color: #666666; line-height: 30px;" st-content="fulltext-content">
                                                    @yield('content')
                                                </td>
                                            </tr>
                                            <!-- End of content -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <!-- Spacing -->
                                <tr>
                                    <td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                </tr>
                                <!-- Spacing -->
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
    <!-- End of Content -->
    @include('email::simples.partials.separator-line')

    @include('email::simples.layouts.footers.default')

</body>
</html>