{{-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Email Confirmation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        /* Your CSS styles here */
    </style>
</head>
<body style="background-color: #e9ecef;">

<!-- Logo section -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td align="center" bgcolor="#e9ecef">
            <table border="0" cellpadding="0" cellspacing="0" width="600" style="max-width: 600px;">
                <tr>
                    <td align="center" valign="top" style="padding: 36px 24px;">
                        <a href="https://hcbombayatgoa.nic.in/" target="_blank" style="display: inline-block;">
                            <img src="https://hcbombayatgoa.nic.in/hcbuild.jpg" alt="Logo" border="0" width="248" style="display: block; width: 68%; max-width: 248px; min-width: 68%;">
                        </a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<!-- Email content section -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td align="center" bgcolor="#e9ecef">
            <table border="0" cellpadding="0" cellspacing="0" width="600" style="max-width: 600px;">
                <tr>
                    <td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
                        <h1 style="margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;">Confirm Your Email Address</h1>
                    </td>
                </tr>
                <tr>
                    <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
                        <p style="margin: 0;">Tap the button below to confirm your email address. If you didn't create an account with <a href="https://hcbombayatgoa.nic.in/">High court Of bombay at goa</a>You can safely delete this email. </p>
                        <br>
                        <p>This link will expire within 60 minutes !</p>
                    </td>
                </tr>
                <tr>
                    <td align="center" bgcolor="#ffffff" style="padding: 12px;">
                        <table border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td align="center" bgcolor="#1a82e2" style="border-radius: 6px;">
                                    <a href="{{ $verificationUrl }}" target="_blank" style="display: inline-block; padding: 16px 36px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; color: #ffffff; text-decoration: none; border-radius: 6px;">Verify Your Account</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 10px; line-height: 24px;">
                        <p style="margin: 0;">If that doesn't work, copy and paste the following link in your browser:</p>
                        <p style="margin: 0;"><a href="{{ $verificationUrl }}" target="_blank">{{ $verificationUrl }}</a></p>
                    </td>
                </tr>
                <tr>
                    <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-bottom: 3px solid #d4dadf">
                        <p style="margin: 0;">Regards,<br> HCB GOA</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<!-- Footer section -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td align="center" bgcolor="#e9ecef" style="padding: 24px;">
            <table border="0" cellpadding="0" cellspacing="0" width="600" style="max-width: 600px;">
                <tr>
                    <td align="center" bgcolor="#e9ecef" style="padding: 12px 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; color: #666;">
                        <p style="margin: 0;">You received this email because we received a request for for your account. If you didn't request you can safely delete this email.</p>
                    </td>
                </tr>
                <tr>
                   
                </tr>
            </table>
        </td>
    </tr>
</table>

</body>
</html>  --}}


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Email Confirmation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        body, table, td, a {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }
        table, td {
            mso-table-rspace: 0pt;
            mso-table-lspace: 0pt;
        }
        img {
            -ms-interpolation-mode: bicubic;
        }
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            background-color: #e9ecef;
        }
        table {
            border-collapse: collapse !important;
        }
        a {
            text-decoration: none;
        }
        img {
   		
            justify-content:center;
            height: auto;
            line-height: 100%;
            text-decoration: none;
            border: 0;
            outline: none;
        }
        /* Custom CSS */
        .content {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }
        .email-header, .email-body, .email-footer {
            background-color: #ffffff;
            padding: 36px 24px;
            margin-bottom: 20px;
        }
        .email-header {
            border-top: 3px solid #d4dadf;
        }
        .email-body {
            border-top: 3px solid #d4dadf;
        }
        .email-footer {
            border-bottom: 3px solid #d4dadf;
        }
        h1 {
            font-size: 32px;
            font-weight: 700;
            margin: 0;
        }
        p {
            font-size: 16px;
            line-height: 24px;
            margin: 0 0 16px;
        }
        .button {
            display: inline-block;
            padding: 16px 36px;
            font-size: 16px;
            color: white;
            background-color: #00CED1;
            border-radius: 6px;
            text-decoration: none;
        }
        .footer-text {
            font-size: 14px;
            color: #666666;
            text-align: center;
            padding: 24px 0;
        }
        @media screen and (max-width: 600px) {
            .content {
                padding: 20px;
            }
            .email-header, .email-body, .email-footer {
                padding: 20px;
            }
            h1 {
                font-size: 24px;
            }
            p {
                font-size: 14px;
            }
            .button {
                padding: 14px 28px;
                font-size: 14px;
            }
            .footer-text {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="content">
        <!-- Logo section -->
        <div class="email-header">
        	
            <a href="https://hcbombayatgoa.nic.in/" target="_blank">
                <img src="https://hcbombayatgoa.nic.in/hcbuild.jpg" alt="Logo" width="248" style="display: block; width: 68%; max-width: 248px; min-width: 68%;text-align: center; margin:0 auto;">
            </a>
            
        </div>

        <!-- Email content section -->
        <div class="email-body">
            <h1>Confirm Your Email Address</h1>
            <p>Tap the button below to confirm your email address. If you didn't create an account with <a href="https://hcbombayatgoa.nic.in/">High Court of Bombay at Goa</a>, you can safely delete this email.</p>
            <p>This link will expire within 60 minutes!</p>
            <div style="text-align: center;">
                <a href="{{ $verificationUrl }}" class="button" target="_blank">Verify Your Account</a>
            </div>
            <p>If that doesn't work, copy and paste the following link in your browser:</p>
            <p><a href="{{ $verificationUrl }}" target="_blank">{{ $verificationUrl }}</a></p>
        </div>

        <!-- Footer section -->
        <div class="email-footer">
            <p>Regards,<br>HCB GOA</p>
        </div>

        <!-- Footer text -->
        <div class="footer-text">
            <p>You received this email because we received a request for your account. If you didn't request, you can safely delete this email.</p>
        </div>
    </div>
</body>
</html>
