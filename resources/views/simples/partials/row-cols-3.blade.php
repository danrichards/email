<?php
$left = array_key_exists(0, $row) ? $row[0] : false;
$middle = array_key_exists(1, $row) ? $row[1] : false;
$right = array_key_exists(2, $row) ? $row[2] : false;
?>
@if($left || $middle || $right)
<!-- 3 Start of Columns -->
<table width="100%" bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0" id="backgroundTable">
    <tbody>
    <tr>
        <td>
            <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                <tbody>
                <tr>
                    <td width="100%">
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                            <tr>
                                <td>
                                    <!-- col 1 -->
                                    <table width="186" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                        @if ($left)
                                        <tbody>
                                        <!-- image 2 -->
                                        <tr>
                                            <td width="100%" align="center" class="devicewidth">
                                                @if (isset($left->image))
                                                    <img src="{{$img}}/assets/media/email/{{$left->image}}" border="0" width="50" height="50" style="display:block; border:none; outline:none; text-decoration:none;">
                                                @endif
                                            </td>
                                        </tr>
                                        <!-- end of image2 -->
                                        <tr>
                                            <td>
                                                <!-- start of text content table -->
                                                <table width="186" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner">
                                                    <tbody>
                                                    <!-- Spacing -->
                                                    <tr>
                                                        <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                    </tr>
                                                    <!-- Spacing -->
                                                    <!-- title2 -->
                                                    <tr>
                                                        <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #666666; text-align:center; line-height: 24px;" st-title="3col-title1">
                                                            @if (isset($left->heading))
                                                                {{$left->heading}}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <!-- end of title2 -->
                                                    <!-- Spacing -->
                                                    <tr>
                                                        <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                    </tr>
                                                    <!-- Spacing -->
                                                    <!-- content2 -->
                                                    <tr>
                                                        <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #889098; text-align:center; line-height: 24px;" st-content="3col-content1">
                                                            @if (isset($left->content))
                                                                {{$left->content}}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <!-- end of content2 -->
                                                    <!-- Spacing -->
                                                    <tr>
                                                        <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                    </tr>
                                                    <!-- Spacing -->
                                                    <!-- read more -->
                                                    <tr>
                                                        <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #0a8cd8;  text-align:center; line-height: 20px;" st-title="3col-readmore1" class="padding-bottom25">
                                                            @if (isset($left->link))
                                                                <a href="{{$left->href}}" style="text-decoration:none; color: #0a8cd8; ">{{$left->link}}</a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <!-- end of read more -->
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <!-- end of text content table -->
                                        </tbody>
                                        @endif
                                    </table>
                                    <!-- spacing -->
                                    <table width="20" align="left" border="0" cellpadding="0" cellspacing="0" class="removeMobile">
                                        <tbody>
                                        <tr>
                                            <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <!-- end of spacing -->
                                    <!-- col 2 -->
                                    <table width="186" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                        @if ($middle)
                                        <tbody>
                                        <!-- image 2 -->
                                        <tr>
                                            <td width="100%" align="center" class="devicewidth">
                                                @if (isset($middle->image))
                                                    <img src="{{$img}}/assets/media/email/{{$middle->image}}" border="0" width="50" height="50" style="display:block; border:none; outline:none; text-decoration:none;">
                                                @endif
                                            </td>
                                        </tr>
                                        <!-- end of image2 -->
                                        <tr>
                                            <td>
                                                <!-- start of text content table -->
                                                <table width="186" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner">
                                                    <tbody>
                                                    <!-- Spacing -->
                                                    <tr>
                                                        <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                    </tr>
                                                    <!-- Spacing -->
                                                    <!-- title2 -->
                                                    <tr>
                                                        <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #666666; text-align:center; line-height: 24px;" st-title="3col-title2">
                                                            @if (isset($middle->heading))
                                                                {{$middle->heading}}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <!-- end of title2 -->
                                                    <!-- Spacing -->
                                                    <tr>
                                                        <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                    </tr>
                                                    <!-- Spacing -->
                                                    <!-- content2 -->
                                                    <tr>
                                                        <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #889098; text-align:center; line-height: 24px;" st-content="3col-content2">
                                                            @if (isset($middle->content))
                                                                {{$middle->content}}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <!-- end of content2 -->
                                                    <!-- Spacing -->
                                                    <tr>
                                                        <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                    </tr>
                                                    <!-- /Spacing -->
                                                    <!-- read more -->
                                                    <tr>
                                                        <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #0a8cd8;  text-align:center; line-height: 20px;" st-title="3col-readmore2" class="padding-bottom25">
                                                            @if (isset($middle->link))
                                                                <a href="{{$middle->href}}" style="text-decoration:none; color: #0a8cd8; ">{{$middle->link}}</a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <!-- end of read more -->
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <!-- end of text content table -->
                                        </tbody>
                                        @endif
                                    </table>
                                    <!-- end of col 2 -->
                                    <!-- spacing -->
                                    <table width="1" align="left" border="0" cellpadding="0" cellspacing="0" class="removeMobile">
                                        <tbody>
                                        <tr>
                                            <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <!-- end of spacing -->
                                    <!-- col 3 -->
                                    <table width="186" align="right" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                        @if ($right)
                                        <tbody>
                                        <!-- image3 -->
                                        <tr>
                                            <td width="100%" align="center" class="devicewidth">
                                                @if (isset($right->image))
                                                    <img src="{{$img}}/assets/media/email/{{$right->image}}" border="0" width="50" height="50" style="display:block; border:none; outline:none; text-decoration:none;">
                                                @endif
                                            </td>
                                        </tr>
                                        <!-- end of image3 -->
                                        <tr>
                                            <td>
                                                <!-- start of text content table -->
                                                <table width="186" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner">
                                                    <tbody>
                                                    <!-- Spacing -->
                                                    <tr>
                                                        <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                    </tr>
                                                    <!-- Spacing -->
                                                    <!-- title -->
                                                    <tr>
                                                        <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #666666; text-align:center; line-height: 24px;" st-title="3col-title3">
                                                            @if (isset($right->heading))
                                                                {{$right->heading}}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <!-- end of title -->
                                                    <!-- Spacing -->
                                                    <tr>
                                                        <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                    </tr>
                                                    <!-- Spacing -->
                                                    <!-- content -->
                                                    <tr>
                                                        <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #889098; text-align:center; line-height: 24px;" st-content="3col-content3">
                                                            @if (isset($right->content))
                                                                {{$right->content}}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <!-- end of content -->
                                                    <!-- Spacing -->
                                                    <tr>
                                                        <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                    </tr>
                                                    <!-- Spacing -->
                                                    <!-- read more -->
                                                    <tr>
                                                        <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: {{$color['href']}};  text-align:center; line-height: 20px;" st-title="3col-readmore3">
                                                            @if (isset($right->link))
                                                                <a href="{{$right->href}}" style="text-decoration:none; color: {{$color['href']}}; ">{{$right->link}}</a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <!-- end of read more -->
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <!-- end of text content table -->
                                        </tbody>
                                        @endif
                                    </table>
                                </td>
                                <!-- spacing -->
                                <!-- end of spacing -->
                            </tr>
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
<!-- end of 3 Columns -->
@include('email::simples.partials.separator-line')
@endif