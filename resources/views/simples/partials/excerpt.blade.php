<?php
if (isset($rows)) {
    $excerpt = array_pop($rows);
}
?>
@if (isset($excerpt))
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
                            <tr>
                                <td>
                                    <table width="560" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner">
                                        <tbody>
                                        <!-- Title -->
                                        <tr>
                                            <td style="font-family: Helvetica, arial, sans-serif; font-size: 30px; color: #333333; text-align:center; line-height: 30px;" st-title="fulltext-heading">
                                                {{$excerpt->heading}}
                                            </td>
                                        </tr>
                                        <!-- End of Title -->

                                        @if ($excerpt->content)

                                        <!-- spacing -->
                                        <tr>
                                            <td width="100%" height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                        </tr>
                                        <!-- End of spacing -->
                                        <!-- content -->
                                        <tr>
                                            <td style="font-family: Helvetica, arial, sans-serif; font-size: 16px; color: #666666; text-align:center; line-height: 30px;" st-content="fulltext-content">
                                                {{$excerpt->content}}
                                            </td>
                                        </tr>

                                        @endif

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
<!-- end of full text -->
@include('email::simples.partials.separator-line')
@endif