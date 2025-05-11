<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    {{--
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> --}}
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="index, follow" />
    <meta name="description"
        content="Law Accent (NG) is dedicated to simplifying the complexities of data protection and privacy for organisations across industries." />
</head>

<style>
    .watermark {
        position: fixed;
        top: 400px;
        left: 150px;
        width: 60%;
        opacity: 0.3;
        z-index: -1;
    }


    body {
        position: relative;
        margin: 0;
        /* optional, to remove default body margin */
    }
</style>

<body style="margin:0; padding:0; font-family: sans-serif; width: 100%! !important;">

    <img src="{{ public_path('web/assets/images/logo.webp') }}" class="watermark" alt="Watermark">

    <div class="wrapper" style="display:flex; flex-direction:column; min-height:100vh;">

        <!-- Top bar and Header -->
        <section>
            <div style="height:80px; background-color:#114906;"></div>
            <div style="height:30px; background:#ff7300;"></div>
        </section>

        <!-- Main Content -->
        <section style="flex:1; position:relative;">
            <div style="position:relative; z-index:2; padding:20px 20px 40px 0;" class="container">

                <table cellpadding="0" cellspacing="0" border="0" style="margin: 0 auto; padding: 20px; width: 100%;">
                    <tr>
                        <td style="white-space: nowrap;">

                            <div>
                                <img src="{{ public_path('web/assets/images/logo.webp') }}" alt="brand logo"
                                    style="width:100px; margin-bottom: 10px;">
                            </div>

                        </td>

                        <td width="50px"></td> <!-- Spacer -->
                        <td style="vertical-align: top; text-align: right; font-size: 13px; white-space: nowrap;">
                            <div>
                                <span style="font-size:12px; color:black;">
                                    Downloaded from lawaccent.com.ng - For personal use <br />
                                    only. Redistribution without permission is prohibited.
                                </span>
                            </div>
                        </td>
                    </tr>
                </table>

                <div style="margin-top:50px; z-index:2; position:relative;">
                    <h2 style="font-size:26px; font-weight:bold; color:#114906;">
                        {{ $blog->title }}
                    </h2>
                    <br />
                    <div>
                        {!! $blog->body !!}
                    </div>
                </div>
            </div>

            <!-- Faded logos -->
            <div>
                <img src="{{ public_path('web/assets/images/fadedlogo.svg') }}" alt="Faded Logo 1"
                    style="height:200px;" />
                <img src="{{ public_path('web/assets/images/fadedlogo.svg') }}" alt="Faded Logo 2"
                    style="height:200px;" />
            </div>
        </section>

        <!-- Footer -->
        <footer
            style="background: linear-gradient(rgba(0, 50, 0, 0.85), rgba(0, 50, 0, 0.85)), url('{{ public_path("web/assets/images/pdfbottom.webp") }}') center/cover no-repeat; color: white; padding: 10px 20px;">
            <table cellpadding="0" cellspacing="0" border="0" style="margin: 0 auto; padding: 20px; width: 100%;"
                class="footer">
                <tr>
                    <td
                        style="vertical-align: top; text-align: right; font-size: 13px; font-weight: bold; padding-right: 10px; white-space: nowrap;">
                        Address:</td>
                    <td width="300px" style="vertical-align: top; font-size: 11px; line-height: 1.6;">
                        30, Muyibat Oyefusi Crescent Omole Phase 1, Lagos State.<br>
                        60, Old Owode Road, Onikolobo, Abeokuta, Ogun State.
                    </td>
                    <td width="20px"></td> <!-- Spacer -->
                    <td
                        style="vertical-align: top; text-align: right; font-size: 13px; font-weight: bold; padding-right: 10px; white-space: nowrap;">
                        Contact:</td>
                    <td width="300px" style="vertical-align: top; font-size: 11px; line-height: 1.6;">
                        <a href="mailto:info@lawaccent.com"
                            style="color: white; text-decoration: none;">info@lawaccent.com</a><br>
                        <a href="https://www.lawaccent.com"
                            style="color: white; text-decoration: none;">www.lawaccent.com</a>
                    </td>
                </tr>
            </table>
        </footer>

    </div>
</body>

</html>
