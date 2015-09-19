@if (isset($masthead))
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
                                        @if ($masthead->href)
                                            <a target="_blank" href="{{$masthead->href}}"><img width="600" border="0" height="300" alt="" border="0" style="display:block; border:none; outline:none; text-decoration:none;" src="{{$img}}/assets/media/email/{{$masthead->image}}" class="banner"></a>
                                        @else
                                            <img width="600" border="0" height="300" alt="" border="0" style="display:block; border:none; outline:none; text-decoration:none;" src="{{$img}}/assets/media/email/{{$masthead->image}}" class="banner">
                                        @endif
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
@include('email::simples.partials.separator-spacing')
@endif