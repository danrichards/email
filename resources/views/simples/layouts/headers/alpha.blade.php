@if ($online)
<!-- Start of preheader -->
<table width="100%" bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="preheader" >
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
                                <td width="100%" height="10"></td>
                            </tr>
                            <!-- Spacing -->
                            <tr>
                                <td>
                                    <table width="100" align="left" border="0" cellpadding="0" cellspacing="0">
                                        <tbody>
                                        <tr>
                                            <td align="left" valign="middle" style="font-family: Helvetica, arial, sans-serif; font-size: 14px;color: #666666" st-content="viewonline" class="mobile-hide">
                                                @if ($online)
                                                    <a href="{{$online->href}}" style="text-decoration: none; color: #666666">{{$online->link}}</a>
                                                @endif
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <table width="100" align="right" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                        <tbody>
                                        <tr>
                                            @foreach ($buttons as $button)
                                            <td width="30" height="30" align="right">
                                                <div class="imgpop">
                                                    <a target="_blank" href="{{$button['href']}}">
                                                        <img src="{{$img}}/{{$button['image']}}" alt="" border="0" width="30" height="30" style="display:block; border:none; outline:none; text-decoration:none;">
                                                    </a>
                                                </div>
                                            </td>
                                            <td align="left" width="20" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                            @endforeach
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <!-- Spacing -->
                            <tr>
                                <td width="100%" height="10"></td>
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
<!-- End of preheader -->
@endif