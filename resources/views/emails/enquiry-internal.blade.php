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
                                            <a href=""><img class="logo" src="" alt="Clevercherry Euro 2024 2022"></a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>


                    <table bgcolor="#000000" width="600" style="background: #000000;" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td style="padding: 40px; text-align: center;">
                                <span style="font-size:16px ; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #ffffff;">
                                    <h2>You have received a new enquiry!</h2>
                                    <p>Name: {{ $request->full_name }}</p>
                                    <p>Email: {{ $request->email }}</p>
                                    <p>Phone: {{ $request->phone }}</p>
                                    <p>Message: {{ $request->message }}</p>
                                </span>
                            </td>
                        </tr>
                    </table>

                   <table bgcolor="#000000" width="600" style="background: #000000; border-bottom:  10px solid #43B082; width: 600px;" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                              <td style="padding: 40px; text-align: left; color: #FFF;">
                                   <a href=""><img src=""style="width: 120px;" alt="Thats a Wrap"></a>
                             </td>
                             <td class="social" style="padding: 10px; width: 25%;">
                                            <a href="" class="social-icon"><img src="" alt="Instagram" style="width: 50px;"></a>
                                        </td>
                                        <td class="social" style="padding: 10px; width: 25%;">
                                            <a href="" class="social-icon"><img src="" alt="Twitter" style="width: 50px;"></a>
                                        </td>
                                        <td class="social" style="padding: 10px; width: 25%;">
                                            <a href="" class="social-icon"><img src="" alt="Facebook" style="width: 50px;"></a>
                                        </td>
                                        <td class="social" style="padding: 10px; width: 25%;">
                                            <a href="" class="social-icon"><img src="" alt="Linked In" style="width: 50px;"></a>
                                        </td>
                        </tr>
                    </table>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>



