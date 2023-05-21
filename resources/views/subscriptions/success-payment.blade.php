@extends('layouts.main')

@section('main-container')


    <main>
        <section class="services-area pt-100 pb-150 section-bg" data-background="assets/img/gallery/section_bg01.webp">
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center pt-70">
                            <h2>ORDER COMPLETE</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-25">

            <!-- This encapsulation is required to ensure correct rendering on Windows 10 Mail app. -->
            <tr bgcolor="#d7d7d7">
                <td style="color: #FFFFFC; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                    <!-- Seperator Start -->
                    <table cellpadding="0" cellspacing="0" cols="1" bgcolor="#FF7F11" align="center" style="max-width: 600px; width: 100%;">
                        <tr bgcolor="#FF7F11">
                            <td height="30" style="color: #FF7F11; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                        </tr>
                    </table>
                    <!-- Seperator End -->

                     <!-- Generic Pod Left Aligned with Price breakdown Start -->
                    <table align="center" cellpadding="0" cellspacing="0" cols="3" bgcolor="242423" class="bordered-left-right" style="border-left: 10px solid #FF7F11; border-right: 10px solid #FF7F11; max-width: 600px; width: 100%;">
                        <tr height="50"><td colspan="3" style="color: #FFFFFC; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td></tr>
                        <tr align="center">
                            <td width="36" style="color: #FFFFFC; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                            <td class="text-primary" style="color: #F16522; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                <img src="http://dgtlmrktng.s3.amazonaws.com/go/emails/generic-email-template/tick.png" alt="GO" width="50" style="border: 0; font-size: 0; margin: 0; max-width: 100%; padding: 0;">
                            </td>
                            <td width="36" style="color: #FFFFFC; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                        </tr>
                        <tr height="17"><td colspan="3" style="color: #FFFFFC; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td></tr>
                        <tr align="center">
                            <td width="36" style="color: #FFFFFC; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                            <td class="text-primary" style="color: #F16522; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                <h1 style="color: #F16522; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 30px; font-weight: 700; line-height: 34px; margin-bottom: 0; margin-top: 0;">Payment received</h1>
                            </td>
                            <td width="36" style="color: #FFFFFC; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                        </tr>
                        <tr height="30"><td colspan="3" style="color: #FFFFFC; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td></tr>
                        <tr align="left">
                            <td width="36" style="color: #FFFFFC; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                            <td style="color: #FFFFFC; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                <p style="color: #FFFFFC; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">



                                    Hi {{ $data['clientName'] }},
                                    you have successfully paid for your order.
                                    You can check your qr code in your account.
                                </p>
                            </td>
                            <td width="36" style="color: #FFFFFC; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                        </tr>
                        <tr height="10"><td colspan="3" style="color: #FFFFFC; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td></tr>
                        <tr align="left">
                            <td width="36" style="color: #FFFFFC; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                            <td style="color: #FFFFFC; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                <p style="color: #FFFFFC; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">Your transaction was successful!</p>
                                <br>
                                <p style="color: #FFFFFC; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0; "><strong>Payment Details:</strong><br/>
                                Package: {{ $data['orderedSub']}} <br/>
                                Amount: €{{ $data['totalPrice'] }} <br/>
                                Email: {{ $data['email'] }}<br/></p>
                                Phone: {{ $data['phone'] }}<br/></p>
                                    <br>
                                <button href="/services" class="btn btn-default submit">Return to services</button>
                            </td>
                            <td width="36" style="color: #FFFFFC; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                        </tr>
                        <tr height="30">
                            <td style="color: #FFFFFC; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                            <td style="border-bottom: 1px solid #D3D1D1; color: #FFFFFC; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                            <td style="color: #FFFFFC; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                        </tr>
                        <tr height="30"><td colspan="3" style="color: #FFFFFC; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td></tr>
                        <tr align="center">
                            <td width="36" style="color: #FFFFFC; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                            <td style="color: #FFFFFC; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                <p style="color: #FFFFFC; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">Order date: {{ $data['created_at'] }}</p>
                                <p style="color: #FFFFFC; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;"></p>
                            </td>
                            <td width="36" style="color: #FFFFFC; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                        </tr>

                        <tr height="50">
                            <td colspan="3" style="color: #FFFFFC; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                        </tr>


                    </table>
                    <!-- Generic Pod Left Aligned with Price breakdown End -->

                    <!-- Seperator Start -->
                    <table cellpadding="0" cellspacing="0" cols="1" bgcolor="#d7d7d7" align="center" style="max-width: 600px; width: 100%;">
                        <tr bgcolor="#FF7F11">
                            <td height="50" style="color: #FF7F11; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                        </tr>
                    </table>
                    <!-- Seperator End -->

                </td>
            </tr>
        </table>
        </section>
        </div>
    </main>

        <!-- Content End -->
@endsection
