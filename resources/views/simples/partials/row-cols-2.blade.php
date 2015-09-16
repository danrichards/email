<?php
$left = array_key_exists(0, $row) ? $row[0] : false;
$right = array_key_exists(1, $row) ? $row[1] : false;
?>
@if($left || $right)
<!-- 2columns -->
<table width="100%" bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="2columns">
    <tbody>
    <tr>
        <td>
            <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                <tbody>
                <tr>
                    <td width="100%">
                        <table bgcolor="#ffffff" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                            <tr>
                                <td>
                                    @if($left)
                                    <!-- start of left column -->
                                    <table width="290" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                        <tbody>
                                        <!-- Spacing -->
                                        <tr>
                                            <td width="100%" height="20"></td>
                                        </tr>
                                        <!-- Spacing -->
                                        <tr>
                                            <td>
                                                <!-- start of text content table -->
                                                <table width="290" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                    <tbody>
                                                    <!-- image -->
                                                    <tr>
                                                        <td width="290" height="160" align="center" class="devicewidth">
                                                            @if (isset($left->image))
                                                                <img src="{{$img}}/{{$left->image}}" border="0" width="290" height="160" style="display:block; border:none; outline:none; text-decoration:none;" class="colimg2">
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <!-- Content -->
                                                    <tr>
                                                        <td>
                                                            <table width="270" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner">
                                                                <tbody>
                                                                <tr>
                                                                    <td width="100%" height="20"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #333333; line-height:24px;text-align:center;" st-title="2coltitle1">
                                                                        @if (isset($left->heading))
                                                                            {{$left->heading}}
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="100%" height="20"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; line-height:24px; color: #666666; text-align:center;" st-conteent="2colcontent1">
                                                                        @if (isset($left->content))
                                                                            {{$left->content}}
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                @if (isset($left->link))
                                                                <tr>
                                                                    <td width="100%" height="20"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: {{$color['href']}}; text-align:center;" st-title="2colreadmore1">
                                                                        <a href="{{$left->href}}" style="text-decoration:none; color:{{$color['href']}};">{{$left->link}}</a>
                                                                    </td>
                                                                </tr>
                                                                @endif
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <!-- end of Content -->
                                                    <!-- end of content -->
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <!-- end of text content table -->
                                        </tbody>
                                    </table>
                                    <!-- end of left column -->
                                    @endif
                                    @if($right)
                                    <!-- start of right column -->
                                    <table width="290" align="right" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                        <tbody>
                                        <!-- Spacing -->
                                        <tr>
                                            <td width="100%" height="20"></td>
                                        </tr>
                                        <!-- Spacing -->
                                        <tr>
                                            <td>
                                                <!-- start of text content table -->
                                                <table width="290" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                    <tbody>
                                                    <!-- image -->
                                                    <tr>
                                                        <td width="290" height="160" align="center" class="devicewidth">
                                                            @if (isset($right->image))
                                                                <img src="{{$img}}/{{$right->image}}" border="0" width="290" height="160" style="display:block; border:none; outline:none; text-decoration:none;" class="colimg2">
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <!-- Content -->
                                                    <tr>
                                                        <td>
                                                            <table width="270" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner">
                                                                <tbody>
                                                                <tr>
                                                                    <td width="100%" height="20"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #333333;line-height:24px; text-align:center;" st-title="2coltitle2">
                                                                        @if (isset($right->heading))
                                                                            {{$right->heading}}
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="100%" height="20"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; line-height:24px; color: #666666; text-align:center;" st-content="2colcontent2">
                                                                        @if (isset($right->content))
                                                                            {{$right->content}}
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="100%" height="20"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: {{$color['href']}}; text-align:center;" st-title="2colreadmore2">
                                                                        @if (isset($right->link))
                                                                            <a href="{{$right->href}}" style="text-decoration:none; color:{{$color['href']}};">{{$right->link}}</a>
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <!-- end of Content -->
                                                    <!-- end of content -->
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <!-- end of text content table -->
                                        </tbody>
                                    </table>
                                    <!-- end of right column -->
                                    @endif
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
<!-- end of 2 columns -->
@include('email::simples.partials.separator-line')
@endif
