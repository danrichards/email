@if (isset($logo))
<!-- Start of header -->
<table width="100%" bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="header">
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
                                    <!-- logo -->
                                    <table width="140" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                        <tbody>
                                        <tr>
                                            <td width="169" height="45" align="center">
                                                <div class="imgpop">
                                                    @if (array_key_exists('href', $logo))
                                                    <a target="_blank" href="{{$logo['href']}}">
                                                        <img src="{{$cdn}}{{$logo['image']}}" alt="{{$logo['link']}}" border="0" width="169" height="45" style="display:block; border:none; outline:none; text-decoration:none;">
                                                    </a>
                                                    @else
                                                    <a target="_blank" href="{{$url}}">
                                                        <img src="{{$cdn}}{{$logo['image']}}" alt="{{$logo['link']}}" border="0" width="169" height="45" style="display:block; border:none; outline:none; text-decoration:none;">
                                                    </a>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <!-- end of logo -->
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
<!-- End of Header -->
@endif