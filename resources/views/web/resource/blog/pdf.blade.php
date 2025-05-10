<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="index, follow" />
    <meta name="description"
        content="Law Accent (NG) is dedicated to simplifying the complexities of data protection and privacy for organisations across industries." />
</head>

<body style="margin:0; padding:0; font-family:Arial, sans-serif; width: 100%! !important;">

    <div class="wrapper" style="display:flex; flex-direction:column; min-height:100vh;">

        <!-- Top bar and Header -->
        <section>
            <div style="height:80px; background-color:#114906;"></div>
            <div style="height:30px; background:#ff7300;"></div>
        </section>

        <!-- Main Content -->
        <section style="flex:1; position:relative;">
            <div style="position:relative; z-index:2; padding:20px 20px 40px 0;" class="container">
                <div style="display:flex; justify-content:space-between; align-items:center;">
                    <div>
                        <img src="{{ public_path('web/assets/images/logo.webp') }}" alt="brand logo"
                            style="width:100px; margin-bottom: 10px;">
                    </div>
                    <div>
                        <span style="font-size:12px; color:black;">
                            Downloaded from lawaccent.com.ng - For personal use <br />
                            only. Redistribution without permission is prohibited.
                        </span>
                    </div>
                </div>

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
        <footer style="

      background: linear-gradient(rgba(0, 50, 0, 0.85), rgba(0, 50, 0, 0.85)),
                  url('{{ public_path("web/assets/images/pdfbottom.webp") }}') center/cover no-repeat;
      color: white;
      padding: 40px 20px;
    ">
            <div
                style="max-width: 1100px; margin: 0 auto; display: flex; flex-wrap: wrap; justify-content: space-between; gap: 30px;">

                <!-- Address Section -->
                <div style="flex: 1 1 45%; min-width: 280px;">
                    <div style="font-size: 16px; margin-bottom: 8px; font-weight: bold;">Address:</div>
                    <div style="font-size: 15px; line-height: 1.6;">
                        30, Muyibat Oyefusi Crescent Omole Phase 1, Lagos State.<br />
                        60, Old Owode Road, Onikolobo, Abeokuta, Ogun State.
                    </div>
                </div>

                <!-- Contact Section -->
                <div style="flex: 1 1 45%; min-width: 280px;">
                    <div style="font-size: 16px; margin-bottom: 8px; font-weight: bold;">Contact:</div>
                    <div style="font-size: 15px; line-height: 1.6;">
                        <a href="mailto:info@lawaccent.com"
                            style="color: white; text-decoration: none;">info@lawaccent.com</a><br />
                        <a href="https://www.lawaccent.com"
                            style="color: white; text-decoration: none;">www.lawaccent.com</a>
                    </div>
                </div>

            </div>
        </footer>


    </div>
</body>

</html>
