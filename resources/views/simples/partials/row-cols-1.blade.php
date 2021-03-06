@if (isset($row))
<!-- 1column -->
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
                            <!-- Optional image -->
                            @if (isset($row->image))
                            <tr>
                                <td>
                                    <table width="560" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner">
                                        <tbody>
                                        <!-- Image -->
                                        <tr>
                                            <td style="font-family: Helvetica, arial, sans-serif; font-size: 30px; color: #333333; text-align:center; line-height: 30px;" st-title="fulltext-title">
                                                @if(isset($row->href))
                                                    <a href="{{$row->href}}"><img src="{{$cdn}}{{$row->image}}" /></a>
                                                @else
                                                    <img src="{{$cdn}}{{$row->image}}" />
                                                @endif
                                            </td>
                                        </tr>
                                        <!-- End of Image -->
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <!-- Spacing -->
                            <tr>
                                <td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                            </tr>
                            <!-- Spacing -->
                            @endif
                            <!-- Optional image -->
                            @if (isset($row->heading) || isset($row->content))
                            <tr>
                                <td>
                                    <table width="560" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner">
                                        <tbody>
                                        @if (isset($row->heading))
                                        <!-- Title -->
                                        <tr>
                                            <td style="font-family: Helvetica, arial, sans-serif; font-size: 30px; color: #333333; text-align:center; line-height: 30px;" st-title="fulltext-title">
                                                {{$row->heading}}
                                            </td>
                                        </tr>
                                        <!-- End of Title -->
                                        <!-- spacing -->
                                        <tr>
                                            <td width="100%" height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                        </tr>
                                        <!-- End of spacing -->
                                        @endif
                                        @if (isset($row->content))
                                        <!-- content -->
                                        <tr>
                                            <td style="font-family: Helvetica, arial, sans-serif; font-size: 16px; color: #666666; text-align:center; line-height: 30px;" st-content="fulltext-content">
                                                {!! $row->content !!}
                                            </td>
                                        </tr>
                                        <!-- End of content -->
                                        @endif
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <!-- Spacing -->
                            <tr>
                                <td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                            </tr>
                            <!-- Spacing -->
                            @endif
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
<!-- end of 1column -->
@include('email::simples.partials.separator-line')
@endif