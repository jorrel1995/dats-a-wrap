<html>
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <style>
        body {
            background: #e3e3e3;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            margin: 0 auto !important;
            Margin: 0; /* Outlook hack */
            min-width: 100%;
            padding: 0;
            color: #343434;
        }
        img  { border: none; display: block; }
        .logo {
            width: 600px;
        }
        a {
            color: #fff;
        }
    </style>
</head>
<body style="padding: 0; margin: 0;">
    <div style="background: #e3e3e3; height:100%; width:100%; margin:auto;">
        <table bgcolor="#ffffff" width="100%" border="0" cellspacing="0" cellpadding="0" style="background: #e3e3e3;">
            <tr>
                <td bgcolor="#e3e3e3" align="center" style="background: #e3e3e3;">
                    <table bgcolor="#1A32B6" width="600" style="background: #1A32B6; width: 600px;" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td>
                                <table align="center" width="600" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td style="text-align: left; width: 600px;">
                                            <a href="{{ env('APP_URL') }}"><img class="logo" src="https://backslash.fra1.cdn.digitaloceanspaces.com/euro_2024_sweepstake/images/email_header.png" alt="Clevercherry Euro 2024 2022"></a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>


                    <table bgcolor="#020C3D" width="600" style="background: #020C3D;" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td style="padding: 40px; text-align: left;">
                                <span style="font-size:16px ; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #ffffff;">
                                    <h2>Thank you for your enquiry.</h2>
                                    <p>You’ve been selected to take part in a Euro 2024 Sweepstake.</p>
                                    <p> We will be in touch with you in the near future.</p>
                                    <p>Kind regards,<br>
                                         Dats A Wrap</p>
                                </span>
                            </td>
                        </tr>
                    </table>

                   <table bgcolor="#FFFFFF" width="600" style="background: #FFFFFF; border-bottom:  10px solid #43B082; width: 600px;" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                              <td style="padding: 40px; text-align: left; color: #FFF;">
                                    <p>Kind regards,<br>
                                         Dats A Wrap</p>
                                    <a href="https://clevercherry.com"><img src="{{url('/assets/img/DAW_logo.JPG')}}"style="width: 120px;" alt="Thats a Wrap"></a>
                             </td>
                        </tr>
                    </table>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>



