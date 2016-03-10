@if (isset($data))
<!-- Start Full Text -->
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
                            @if(isset($data->image))
                                <tr>
                                    <td>
                                        <table width="560" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner">
                                            <tbody>
                                            <!-- Image -->
                                            <tr>
                                                <td style="font-family: Helvetica, arial, sans-serif; font-size: 30px; color: #333333; text-align:center; line-height: 30px;" st-title="fulltext-title">
                                                    <img src="{{$cdn}}{{$data->image}}" alt="{{$data->heading}}" />
                                                </td>
                                            </tr>
                                            <!-- End of Image -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                @endif
                                <!-- Optional heading -->
                                @if(isset($data->heading))
                                    <tr>
                                        <td>
                                            <table width="560" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner">
                                                <tbody>
                                                <!-- Title -->
                                                <tr>
                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 30px; color: #333333; text-align:center; line-height: 30px;" st-title="fulltext-title">
                                                        {{$data->heading}}
                                                    </td>
                                                </tr>
                                                <!-- End of Title -->
                                                <!-- spacing -->
                                                <tr>
                                                    <td width="100%" height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- End of spacing -->
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
                                <!-- Optional blockquote -->
                                @if(isset($data->blockquote))
                                    <tr>
                                        <td>
                                            <table width="560" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner">
                                                <tbody>
                                                <!-- Title -->
                                                <tr>
                                                    <td width="1" style="background-color: #666;"></td>
                                                    <td width="30" style="background-color: #f9f9f9;">
                                                        <div style="font-family: 'Source Sans Pro', sans-serif !important; font-size:60px; content:open-quote; margin: 0 10px 0 0; color: #909090;" align="left">&nbsp;"</div>
                                                    </td>
                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; background-color: #f9f9f9; color: #333333; line-height: 30px;" height="50" st-title="fulltext-title">
                                                        {{$data->blockquote}}
                                                    </td>
                                                </tr>
                                                <!-- End of Title -->
                                                <!-- spacing -->
                                                <tr>
                                                    <td width="100%" colspan="3" height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- End of spacing -->
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
<!-- end of full text -->
@endif