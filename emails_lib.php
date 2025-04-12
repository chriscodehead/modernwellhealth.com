<?php
class email
{
    protected $siteName = 'ModernWell Health';
    protected $siteDomain = 'modernwellhealth.com';
    protected $site_whatsapp_num = '';

    public function generalBody($message)
    {
        $d = date('Y');
        $content = '<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="x-apple-disable-message-reformatting"><title></title><link href="https://fonts.googleapis.com/css?family=Roboto:400,600" rel="stylesheet" type="text/css"><style> html,body {margin: 0 auto !important;padding: 0 !important;height: 100% !important;width: 100% !important;font-family: \'Roboto\', sans-serif !important;font-size: 14px;margin-bottom: 10px;line-height: 24px;color:#8094ae;font-weight: 400;} * { -ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;margin: 0;padding: 0;} table,td {mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;} table {border-spacing: 0 !important;border-collapse: collapse !important;table-layout: fixed !important;margin: 0 auto !important;} table table table {table-layout: auto;} a {text-decoration: none;} img {-ms-interpolation-mode:bicubic;}</style></head>
<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f5f6fa;">
	<center style="width: 100%; background-color: #f5f6fa;">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f5f6fa">
            <tr>
               <td style="padding: 40px 0;">
                    <table style="width:100%;max-width:620px;margin:0 auto;">
                        <tbody>
                            <tr>
                                <td style="text-align: center; padding-bottom:25px">
                                    <a href="https://modernwellhealth.com/"><img style="height: 40px" src="https://modernwellhealth.com/img/logo.png" alt="logo"></a>
                                    <p style="font-size: 14px; color: #6576ff; padding-top: 12px;">Unlock Your Creative Potential and Ignite Your Design Career</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width:100%;max-width:620px;margin:0 auto;background-color:#ffffff;">
                        <tbody>
                            <tr>
                                <td style="padding: 30px 30px 20px">
                                    <p style="margin-bottom: 15px; color: #526484; font-size: 16px;">' . $message . '</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width:100%;max-width:620px;margin:0 auto;">
                        <tbody>
                            <tr>
                                <td style="text-align: center; padding:25px 20px 0;">
                                    <p style="font-size: 13px;">Copyright © ' . $d . ' ModernWell Health. All rights reserved.</p>
                                    <ul style="margin: 10px -4px 0;padding: 0;">
                                        <li style="display: inline-block; list-style: none; padding: 4px;"><a style="display: inline-block; height: 30px; width:30px;border-radius: 50%; background-color: #ffffff" href="https://facebook.com/"><img style="width: 30px" src="https://modernwellhealth.com/mail_images/brand-b.png" alt="brand"></a></li>
                                        <li style="display: inline-block; list-style: none; padding: 4px;"><a style="display: inline-block; height: 30px; width:30px;border-radius: 50%; background-color: #ffffff" href="https://twitter.com/"><img style="width: 30px" src="https://modernwellhealth.com/mail_images/brand-e.png" alt="brand"></a></li>
                                        <li style="display: inline-block; list-style: none; padding: 4px;"><a style="display: inline-block; height: 30px; width:30px;border-radius: 50%; background-color: #ffffff" href="https://youtube.com/"><img style="width: 30px" src="https://modernwellhealth.com/mail_images/brand-d.png" alt="brand"></a></li>
                                    </ul>
                                    <p style="padding-top: 15px; font-size: 12px;">For more detail contact us: info@modernwellhealth.com, support@modernwellhealth.com</p><p style="padding-top: 15px; font-size: 12px;">This email was sent to you as a registered user of <a style="color: #6576ff; text-decoration:none;" href="https://modernwellhealth.com/">ModernWell Health</a>.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
               </td>
            </tr>
        </table>
    </center>
</body>
</html>';
        return $content;
    }


    public function generalMessage($subjt, $message, $email, $siteName, $siteDomain)
    {
        $d = date('Y');
        $to  = $email;
        $subject = $subjt;
        $content = $message; //self::generalBody($message);
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: ModernWell Health <support@modernwellhealth.com>' . "\r\n";
        $retval = @mail($to, $subject, $content, $headers);
        if ($retval) {
            return  'Mail sent successfully';
        } else {
            return 'Internal error. Mail fail to send';
        }
    }

    public function updatewalletAddress($name, $email)
    {
        $to  = $email;
        $subject = 'Update Wallet Address ';
        $info = 'Hi ' . $name . ', you have successfully updated your wallet address. <br>Please if you are not the one who carry out this action we suggest you change your password and update your wallet back because someone might be trying to hack your account.<br /><br />Thank you.';
        $content = $info; //self::generalBody($info);
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: ModernWell Health <support@modernwellhealth.com>' . "\r\n";
        $retval = @mail($to, $subject, $content, $headers);
        if ($retval) {
            return  'Mail sent successfully';
        } else {
            return 'Internal error. Mail fail to send';
        }
    }

    public function commissionWithdrawalNotice($name, $email, $amount, $level)
    {
        $to  = $email;
        $subject = 'Level ' . $level . ' Referral Commission Withdrawal ';
        $info = 'Hi ' . $name . ', you have successfully move ' . $amount . ' from your Level ' . $level . ' wallet to your main account. <br>You can now withdraw it from your main account to your USDT wallet.<br /><br />Thank you.';
        $content = $info; //self::generalBody($info);
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: ModernWell Health <support@modernwellhealth.com>' . "\r\n";
        $retval = @mail($to, $subject, $content, $headers);
        if ($retval) {
            return  'Mail sent successfully';
        } else {
            return 'Internal error. Mail fail to send';
        }
    }

    public function DownlineInvestmentNotice($nameM, $nameR, $email, $amount, $level)
    {
        $to  = $email;
        $subject = 'Level ' . $level . ' Referral Bonus from ' . $nameR;
        $info = 'Hi ' . $nameR . ', you just received a referral bonus of $' . $amount . ' from your ' . $level . ' down-line ' . $nameM . ' investment. <br>Bonus will be available for withdrawal ones payment has been confirmed.<br /><br />Thank you.';
        $content = $info; //self::generalBody($info);
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: ModernWell Health <support@modernwellhealth.com>' . "\r\n";
        $retval = @mail($to, $subject, $content, $headers);
        if ($retval) {
            return  'Mail sent successfully';
        } else {
            return 'Internal error. Mail fail to send';
        }
    }

    public function referalBonus($nameM, $nameR, $email, $amount)
    {
        $to  = $email;
        $subject = 'Referral Bonus from ' . $nameR;
        $info = 'Hi ' . $nameR . ', you just received a bonus of $' . $amount . ' from your down-line ' . $nameM . ' investment. <br>Bonus will be available for withdrawal ones payment has been confirmed.<br /><br />Thank you.';
        $content = $info; //self::generalBody($info);
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: ModernWell Health <support@modernwellhealth.com>' . "\r\n";
        $retval = @mail($to, $subject, $content, $headers);
        if ($retval) {
            return  'Mail sent successfully';
        } else {
            return 'Internal error. Mail fail to send';
        }
    }

    public function referalNew($nameM, $emailM, $nameR, $emailR, $usernameM, $usernameR)
    {
        $to  = $emailR;
        $subject = 'You have a new direct sign-up on modernwellhealth.com';
        $info = 'Dear ' . $nameR . '(' . $usernameR . '), <br><br /> You have a new direct referral sign-up on <br />modernwellhealth.com<br />User: ' . $usernameM . '<br />Name: ' . $nameM . '<br>E-mail: ' . $emailM . '<br><br >Thank You.';
        $content = $info; //self::generalBody($info);
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: ModernWell Health <support@modernwellhealth.com>' . "\r\n";
        $retval = @mail($to, $subject, $content, $headers);
        if ($retval) {
            return  'Mail sent successfully';
        } else {
            return 'Internal error. Mail fail to send';
        }
    }

    public function clientReviews($name, $email, $review)
    {
        $to  = 'info@modernwellhealth.com';
        $subject = 'Review From ' . $name;
        $info = 'Hi Admin, ' . $name . ' sent you a review. Visit your dashboard to approve or disapprove this review. <br />Details:  <br> Review: ' . $review . '.<br> Email: ' . $email;
        $content = $info; //self::generalBody($info);
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: ModernWell Health <support@modernwellhealth.com>' . "\r\n";
        $retval = @mail($to, $subject, $content, $headers);
        if ($retval) {
            return  'Mail sent successfully';
        } else {
            return 'Internal error. Mail fail to send';
        }
    }

    public function adminwithdrawsNoticeA($amount, $plan, $coin, $id, $name, $email)
    {
        $to  = 'info@modernwellhealth.com';
        $subject = 'Referral Withdrawal Notification by ' . $name;
        $info = 'Hi Admin, client with name ' . $name . ' requested to withdraw his referral commission <br />Amount: $' . $amount . ' <br />Plan: ' . $plan . ', <br />Coin: ' . $coin . ', <br />Email: ' . $email . ', <br />Transaction ID: ' . $id . '.';
        $content = $info; //self::generalBody($info);
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: ModernWell Health <support@modernwellhealth.com>' . "\r\n";
        $retval = @mail($to, $subject, $content, $headers);
        if ($retval) {
            return  'Mail sent successfully';
        } else {
            return 'Internal error. Mail fail to send';
        }
    }

    public function adminDepositNotice($amount, $plan, $coin, $id, $name, $email)
    {
        $to  = 'info@modernwellhealth.com';
        $subject = 'Sucessful Deposite by ' . $name;
        $info = 'Hi Admin client ' . $name . ' just successfully deposited <br />Amount: $' . $amount . ' <br />Plan: ' . $plan . ', <br />Coin: ' . $coin . ', <br />Email: ' . $email . ', <br />Transaction ID: ' . $id . '.';
        $content = $info; //self::generalBody($info);
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: ModernWell Health <support@modernwellhealth.com>' . "\r\n";
        $retval = @mail($to, $subject, $content, $headers);
        if ($retval) {
            return  'Mail sent successfully';
        } else {
            return 'Internal error. Mail fail to send';
        }
    }

    public function adminDepositNoticeNotsuccessf($amount, $plan, $coin, $id, $name, $email)
    {
        $to  = 'info@modernwellhealth.com';
        $subject = 'Deposite Notification by ' . $name;
        $info = 'Hi Admin, client with name ' . $name . ' just successfully initiated a deposited of <br />Amount: $' . $amount . ', <br />Plan: ' . $plan . ', <br />Coin: ' . $coin . ', <br />Email: ' . $email . ', <br />Transaction ID: ' . $id . '. <br />You will be also notified when he finally makes payments.';
        $content = $info; //self::generalBody($info);
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: ModernWell Health <support@modernwellhealth.com>' . "\r\n";
        $retval = @mail($to, $subject, $content, $headers);
        if ($retval) {
            return  'Mail sent successfully';
        } else {
            return 'Internal error. Mail fail to send';
        }
    }

    public function adminWithdrawalNotice($amount, $plan, $coin, $id, $name, $email, $wallet)
    {
        $to  = 'info@modernwellhealth.com';
        $subject = 'Withdrawal request by ' . $name;
        $info = 'Hi Admin, client with ' . $name . ' request to withdraw <br />Amount: $' . $amount . ', <br />Wallet: ' . $wallet . ', <br />Plan: ' . $plan . ', <br />Coin: ' . $coin . ', <br />Email: ' . $email . ', <br />Transaction ID: ' . $id;
        $content = $info; //self::generalBody($info);
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: ModernWell Health <support@modernwellhealth.com>' . "\r\n";
        $retval = @mail($to, $subject, $content, $headers);
        if ($retval) {
            return  'Mail sent successfully';
        } else {
            return 'Internal error. Mail fail to send';
        }
    }

    public function salesrep($name, $email)
    {
        $to  = $email;
        $subject = 'Sales Rep. Application Center';
        $info = 'Hi ' . $name . ', you have successfully applied to be our Sales Rep. Agent you are required to refer up to 12 persons within the said period or your account will be down-graded.';
        $content = $info; //self::generalBody($info);
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: ModernWell Health <support@modernwellhealth.com>' . "\r\n";
        $retval = @mail($to, $subject, $content, $headers);
        if ($retval) {
            return  'Mail sent successfully';
        } else {
            return 'Internal error. Mail fail to send';
        }
    }

    public function contactUsMail($name, $phone, $email, $subject, $message)
    {
        $to  = 'support@modernwellhealth.com';
        $subject = $subject;
        $info = $message . '<br /></br><h3>Applicant Details:</h3><strong>Name: ' . $name . ',<br />Email: ' . $email . ', <br />Phone: ' . $phone . ' </strong>';
        $content = $info; //self::generalBody($info);
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: ModernWell Health <support@modernwellhealth.com>' . "\r\n";
        $retval = @mail($to, $subject, $content, $headers);
        if ($retval) {
            self::autoReplyMail($name, $email, $subject);
            return  'Mail sent successfully';
        } else {
            return 'Internal error. Mail fail to send';
        }
    }

    public function appointmentMail($name, $phone, $email, $subject, $message, $doctor, $datepicker, $department)
    {
        $to  = 'support@modernwellhealth.com';
        $subject = $subject;
        $info = $message . '<br><br>
        <h3>Patients Details:</h3>
        <strong>
        Patient Name: ' . $name . '<br />
        Patient Email: ' . $email . ' <br />
        Patient Phone Number: ' . $phone . ' <br />
        Preferred Doctor: ' . $doctor . ' <br />
        Appointment Date: ' . $datepicker . ' <br />
        Department: ' . $department . ' <br />
         </strong>';
        $content = $info; //self::generalBody($info);
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: ModernWell Health <support@modernwellhealth.com>' . "\r\n";
        $retval = @mail($to, $subject, $content, $headers);
        if ($retval) {
            self::autoReplyMail($name, $email, $subject);
            return  'Mail sent successfully';
        } else {
            return 'Internal error. Mail fail to send';
        }
    }


    public function paymentNotification($amount, $plan, $coin, $id, $name, $email)
    {
        $to  = $email;
        $d = date("Y");
        $subject = "(" . date("F j, Y") . ") Deposit Notification";
        $info = 'Hi ' . $name . ', <br>You have successfully created a deposit of $' . $amount . '. You can now proceed to make payments.<br /><strong>Amount: </strong> $' . $amount . ',<strong>Transaction ID: </strong>' . $id . ', <br /><strong>Coin:</strong> ' . $coin;
        $content = $info; //self::generalBody($info);
        $header = "MIME-Version: 1.0" . "\r\n";
        $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $header .= 'From: ModernWell Health <support@modernwellhealth.com>' . "\r\n";
        $retval = @mail($to, $subject, $content, $header);
        if ($retval) {
            return  'Mail sent successfully';
        } else {
            return 'Internal error. Mail fail to send';
        }
        return $this;
    }




    public function ConfirmPaymentNotify($amount, $plan, $coin, $id, $name, $email)
    {
        $to  = $email;
        $d = date('F j, Y');
        $subject = "Deposit Success Confirmation";
        $info = 'Hi ' . $name . ',<br /> Your top up deposit was successfully confirmed.<br /><strong>Amount: </strong> N' . $amount . ',<br /><strong>Transaction ID: </strong>' . $id;
        $content = $info; //self::generalBody($info);
        $header = "MIME-Version: 1.0" . "\r\n";
        $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $header .= 'From:ModernWell Health <support@modernwellhealth.com>' . "\r\n";
        $retval = @mail($to, $subject, $content, $header);
        if ($retval) {
            return  'Mail sent successfully';
        } else {
            return 'Internal error. Mail fail to send';
        }
        return $this;
    }



    public function unconfirmPaymentNotify($amount, $plan, $coin, $id, $name, $email)
    {
        $to  = $email;
        $d = date('F j, Y');
        $subject = "Deposit Cancellation (" . date("Y-F-d") . ")";
        $info = 'Hi ' . $name . ', <br /> Your top up deposit was canceled till further notice. Thanks<br /><strong>Amount: </strong> N' . $amount . ',<br /><strong>Transaction ID: </strong>' . $id;
        $content = $info; //self::generalBody($info);
        $header = "MIME-Version: 1.0" . "\r\n";
        $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $header .= 'From:ModernWell Health <support@modernwellhealth.com>' . "\r\n";
        $retval = @mail($to, $subject, $content, $header);
        if ($retval) {
            return  'Mail sent successfully';
        } else {
            return 'Internal error. Mail fail to send';
        }
        return $this;
    }


    public function transactionTerminationNotify($amount, $plan, $coin, $id, $name, $email)
    {
        $to  = $email;
        $d = date('F j, Y');
        $subject = "Investment Termination (" . date("Y-F-d") . ")";
        $info = 'Hi ' . $name . ', <br /> Your investment contract was terminated because it has reached the maximum period allowed for returns. Thanks<br /><strong>Amount: </strong> $' . $amount . ',<br /><strong>Transaction ID: </strong>' . $id . ', <br /><strong>Coin: </strong>' . $coin;
        $content = $info; //self::generalBody($info);
        $header = "MIME-Version: 1.0" . "\r\n";
        $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $header .= 'From: ModernWell Health <support@modernwellhealth.com>' . "\r\n";
        $retval = @mail($to, $subject, $content, $header);
        if ($retval) {
            return  'Mail sent successfully';
        } else {
            return 'Internal error. Mail fail to send';
        }
        return $this;
    }


    public function transactionUNTerminationNotify($amount, $plan, $coin, $id, $name, $email)
    {
        $to  = $email;
        $d = date('F j, Y');
        $subject = "Investment Reversal  (" . date("F j, Y") . ")";
        $info = 'Hi ' . $name . ', <br /> Your investment has been reversed. We sincerely apologize for any inconveniency this might have caused you. Thanks<br /><strong>Amount: </strong> $' . $amount . ',<br /><strong>Transaction ID: </strong>' . $id . ', <br /><strong>Coin: </strong>' . $coin;
        $content = $info; //self::generalBody($info);
        $header = "MIME-Version: 1.0" . "\r\n";
        $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $header .= 'From: ModernWell Health <support@modernwellhealth.com>' . "\r\n";
        $retval = @mail($to, $subject, $content, $header);
        if ($retval) {
            return  'Mail sent successfully';
        } else {
            return 'Internal error. Mail fail to send';
        }
        return $this;
    }


    public function payOutNotification($amount, $plan, $coin, $id, $name, $email, $wallet)
    {
        $to  = $email;
        $d = date('F j, Y');
        $subject = "'.$this->siteName.' Payment Approval";
        $info = 'Hello ' . $name . ',<br /> We wish to notify you that your wallet has been credited with the said amount you created withdrawal for. Find details below:<br /><br /><strong>Wallet Address:</strong> ' . $wallet . ', <br /><strong>Amount: </strong> $' . $amount . ',<br /><strong>Transaction ID: </strong>' . $id . ', <br /><strong>Coin: </strong>' . $coin;
        $content = $info; //self::generalBody($info);
        $header = "MIME-Version: 1.0" . "\r\n";
        $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $header .= 'From: ModernWell Health <support@modernwellhealth.com>' . "\r\n";
        $retval = @mail($to, $subject, $content, $header);
        if ($retval) {
            return  'Mail sent successfully';
        } else {
            return 'Internal error. Mail fail to send';
        }
        return $this;
    }




    public function withdrwalNotification($amount, $plan, $coin, $id, $name, $email, $wallet)
    {
        $to  = $email;
        $d = date('F j, Y');
        $subject = "'.$this->siteName.' Withdrawal Notification";
        $info = 'Hello ' . $name . ',<br /> We Write to inform you that your request to withdraw your earnings was successfully processed. Find details below:<br /><br /><strong>Wallet Address:</strong> ' . $wallet . ', <br /><strong>Amount: </strong> $' . $amount . ',<br /><strong>Transaction ID: </strong>' . $id . ', <br /><strong>Coin: </strong>' . $coin;
        $content = $info; //self::generalBody($info);
        $header = "MIME-Version: 1.0" . "\r\n";
        $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $header .= 'From: ModernWell Health <support@modernwellhealth.com>' . "\r\n";
        $retval = @mail($to, $subject, $content, $header);
        if ($retval) {
            return  'Mail sent successfully';
        } else {
            return 'Internal error. Mail fail to send';
        }
        return $this;
    }


    public function withdrwalNotificationNOT($amount, $plan, $coin, $id, $name, $email, $wallet)
    {
        $to  = $email;
        $d = date('F j, Y');
        $subject = "Withdrawal Notification";
        $info = 'Hello ' . $name . ',<br /> Your request to withdraw $' . $amount . ' was successfully created. Payment will be made soon. Find details below:<br /><br /><strong>Wallet Address:</strong> ' . $wallet . ', <br /><strong>Amount: </strong> $' . $amount . ',<br /><strong>Transaction ID: </strong>' . $id . ', <br /><strong>Coin: </strong>' . $coin;
        $content = $info; //self::generalBody($info);
        $header = "MIME-Version: 1.0" . "\r\n";
        $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $header .= 'From: ModernWell Health <support@modernwellhealth.com>' . "\r\n";
        $retval = @mail($to, $subject, $content, $header);
        if ($retval) {
            return  'Mail sent successfully';
        } else {
            return 'Internal error. Mail fail to send';
        }
        return $this;
    }


    public function withdrwalREFNotification($amount, $plan, $coin, $id, $name, $email, $wallet)
    {
        $to  = $email;
        $d = date('F j, Y');
        $subject = "Your Referral Withdrawal";
        $info = 'Hello ' . $name . ',<br /> Your Referral Withdrawal was successfully. Find details below:<br /><br /><strong>Wallet Address:</strong> ' . $wallet . ', <br /><strong>Amount: </strong> $' . $amount . ',<br /><strong>Transaction ID: </strong>' . $id . ', <br /><strong>Coin: </strong>' . $coin;
        $content = $info; //self::generalBody($info);
        $header = "MIME-Version: 1.0" . "\r\n";
        $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $header .= 'From: ModernWell Health <support@modernwellhealth.com>' . "\r\n";
        $retval = @mail($to, $subject, $content, $header);
        if ($retval) {
            return  'Mail sent successfully';
        } else {
            return 'Internal error. Mail fail to send';
        }
        return $this;
    }


    public function autoReplyMail($name, $email, $subj)
    {
        $to  = $email;
        $d = date('F j, Y');
        $subject = 'Auto-Reply';
        $info = 'Hi ' . $name . ', Your message has been received. Thank you for contacting us. We will get back to you as soon as possible.';
        $content = $info; //self::generalBody($info);
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: ModernWell Health <support@modernwellhealth.com>' . "\r\n";
        $retval = @mail($to, $subject, $content, $headers);
        if ($retval) {
            return   'Mail sent successfully';
        } else {
            return  'Internal error. Mail fail to send';
        }
    }

    public function MailDispatcha($email, $message, $title, $file)
    {
        $to  = $email;
        $d = date('F j, Y');
        $subject = "News Update " . $this->siteName . " (" . date("F j, Y") . ")";
        if (!empty($file)) {
            $f = '<p><b>Find Link to attached file if any.</b><br>
                    <u><a href="' . $file . '">View Attached File</a></u>
                </p>';
        } else {
            $f = '';
        }
        $info = '<h1>' . $title . '</h1>' . $message . $f;
        $content = $info; //self::generalBody($info);
        $header = "MIME-Version: 1.0" . "\r\n";
        $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $header .= 'From: ModernWell Health <support@modernwellhealth.com>' . "\r\n";
        $retval = @mail($to, $subject, $content, $header);
        if ($retval) {
            return  'Mail sent successfully';
        } else {
            return 'Internal error. Mail fail to send';
        }
        return $this;
    }

    public function forgetpassword($email, $tablename, $fieldname)
    {
        $d = date('F j, Y');
        $credentialCheck = "SELECT * FROM $tablename WHERE $fieldname = :adddata limit 1";
        $dbs = new DBConnection();
        $db = $dbs->DBConnections();
        $stmt  = $db->prepare($credentialCheck);
        $stmt->bindValue(':adddata', $email);
        if ($stmt->execute()) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $password = $row['password'];
            $name = $row['first_name'];
            $resetpassword_id = $row['forget_password_code'];
            $to  = $email;
            $subject = "Forgot Password  Recovery Centre";
            $content = '<!DOCTYPE html><html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="x-apple-disable-message-reformatting"><title></title><link href="https://fonts.googleapis.com/css?family=Roboto:400,600" rel="stylesheet" type="text/css">
    <!--[if mso]>
        <style>
            * {
                font-family: \'Roboto\', sans-serif !important;
            }
        </style>
    <![endif]-->
    <!--[if !mso]>
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,600" rel="stylesheet" type="text/css">
    <![endif]--><style>
        html,body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            font-family: \'Roboto\', sans-serif !important;
            font-size: 14px;
            margin-bottom: 10px;
            line-height: 24px;
            color:#8094ae;
            font-weight: 400;
        }
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            margin: 0;
            padding: 0;
        }
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }
        a {
            text-decoration: none;
        }
        img {
            -ms-interpolation-mode:bicubic;
        }</style>
        </head>

<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f5f6fa;">
	<center style="width: 100%; background-color: #f5f6fa;">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f5f6fa">
            <tr>
               <td style="padding: 40px 0;">
                    <table style="width:100%;max-width:620px;margin:0 auto;">
                        <tbody>
                            <tr>
                                <td style="text-align: center; padding-bottom:25px">
                                    <a href="https://modernwellhealth.com/"><img style="height: 40px" src="https://modernwellhealth.com/img/logo.png" alt="logo"></a>
                                    <p style="font-size: 14px; color: #6576ff; padding-top: 12px;">Refer, Share and Earn</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width:100%;max-width:620px;margin:0 auto;background-color:#ffffff;">
                        <tbody>
                            <tr>
                                <td style="text-align:center;padding: 30px 30px 15px 30px;">
                                    <h2 style="font-size: 18px; color: #6576ff; font-weight: 600; margin: 0;">Reset Password</h2>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align:center;padding: 0 30px 20px">
                                    <p style="margin-bottom: 10px;">Hi ' . $name . ',</p>
                                    <p style="margin-bottom: 25px;">Click On The link blow to reset tour password.</p>
                                    <a href="https://modernwellhealth.com/fogetpassword/recover.php?id=' . $email . '&ip=' . $password . '&it=' . $resetpassword_id . '" style="background-color:#6576ff;border-radius:4px;color:#ffffff;display:inline-block;font-size:13px;font-weight:600;line-height:44px;text-align:center;text-decoration:none;text-transform: uppercase; padding: 0 25px">Reset Password</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align:center;padding: 20px 30px 40px">
                                    <p>If you did not make this request, please contact us or ignore this message.</p>
                                    <p style="margin: 0; font-size: 13px; line-height: 22px; color:#9ea8bb;">This is an automatically generated email please do not reply to this email. If you face any issues, please contact us at  support@modernwellhealth.com</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width:100%;max-width:620px;margin:0 auto;">
                        <tbody>
                            <tr>
                                <td style="text-align: center; padding:25px 20px 0;">
                                    <p style="font-size: 13px;">Copyright © ' . $d . ' ModernWell Health. All rights reserved.</p>
                                    <ul style="margin: 10px -4px 0;padding: 0;">
                                        <li style="display: inline-block; list-style: none; padding: 4px;"><a style="display: inline-block; height: 30px; width:30px;border-radius: 50%; background-color: #ffffff" href="https://facebook.com/"><img style="width: 30px" src="https://modernwellhealth.com/mail_images/brand-b.png" alt="brand"></a></li>
                                        <li style="display: inline-block; list-style: none; padding: 4px;"><a style="display: inline-block; height: 30px; width:30px;border-radius: 50%; background-color: #ffffff" href="https://twitter.com/"><img style="width: 30px" src="https://modernwellhealth.com/mail_images/brand-e.png" alt="brand"></a></li>
                                        <li style="display: inline-block; list-style: none; padding: 4px;"><a style="display: inline-block; height: 30px; width:30px;border-radius: 50%; background-color: #ffffff" href="https://youtube.com/"><img style="width: 30px" src="https://modernwellhealth.com/mail_images/brand-d.png" alt="brand"></a></li>
                                    </ul>
                                    <p style="padding-top: 15px; font-size: 12px;">For more detail contact us: info@modernwellhealth.com, support@modernwellhealth.com</p><p style="padding-top: 15px; font-size: 12px;">This email was sent to you as a registered user of <a style="color: #6576ff; text-decoration:none;" href="https://modernwellhealth.com/">ModernWell Health</a>.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
               </td>
            </tr>
        </table>
    </center>
</body>
</html>';
            $header = "MIME-Version: 1.0" . "\r\n";
            $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $header .= 'From: ModernWell Health <support@modernwellhealth.com>' . "\r\n";
            $retval = @mail($to, $subject, $content, $header);
            if ($retval) {
                return  'Mail sent successfully. Check your Mail for Activation Link';
            } else {
                return  'Internal error. Mail fail to send';
            }
        } else {
            return 'Invalid Email. Please ensure you typed it correctly';
        }
    }

    public function loanApproval($email, $amount, $fullname, $date)
    {
        $to  = $email;
        $d = date('F j, Y');
        $subject = "🎉 Your Loan Has Been Approved!";
        $message = '<h3>Congratulations ' . $fullname . '!</h3><br />

        <p>
Dear ' . $fullname . ',<br />

We are pleased to inform you that your loan application has been approved. Below are the details of your approved loan:<br /><br />

🔹 Loan Amount: ' . $amount . '<br />
🔹 Approval Date: ' . $date . '<br /><br />

Your funds will be disbursed to your registered bank account within Timeframe. Please ensure you adhere to the repayment schedule to maintain a good credit standing.<br /><br />

For any questions or assistance, feel free to contact our support team at support@modernwellhealth.com.
<br /><br />
Best regards,<br />
ModernWell Health Team<br />
📧 info@modernwellhealth.com<br />
🌐 modernwellhealth.com</p>';
        $content = $message; //self::generalBody($message);
        $header = "MIME-Version: 1.0" . "\r\n";
        $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $header .= 'From: ModernWell Health <support@modernwellhealth.com>' . "\r\n";
        $retval = @mail($to, $subject, $content, $header);
        if ($retval = true) {
            return  'Your Loan Has Been Approved!';
        } else {
            return  'Internal error. Mail fail to send';
        }
        return $this;
    }

    public function ActivateMail($email, $password, $fullname)
    {
        $to  = $email;
        $d = date('F j, Y');
        $subject = "Application Received – Thank You for Applying!";
        $message = '<h3>Congratulations ' . $fullname . '!</h3><br />

        <p>Hi ' . $fullname . ',<br /><br />

Thank you for applying through ModernWell Health!<br /><br />

We’ve successfully received your application, and our recruitment team is currently reviewing your profile.<br /><br />

If your qualifications match the employer’s requirements, we’ll be in touch soon with the next steps. In the meantime, feel free to explore other job opportunities on our platform that may also be a great fit for you.<br /><br />

🔗 <a href="https://modernwellhealth.com/apply-now">[Apply For More Jobs]</a>

<br /><br />
If you have any questions, don’t hesitate to reach out to our support team at support@modernwellhealth.com.
<br /><br />
Thank you for choosing ModernWell Health — we’re excited to support you on your career journey!
<br /><br />
Warm regards,<br />
The ModernWell Health Team<br />
www.modernwellhealth.com</p>';
        $content = $message; //self::generalBody($message);
        $header = "MIME-Version: 1.0" . "\r\n";
        $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $header .= 'From: ModernWell Health <support@modernwellhealth.com>' . "\r\n";
        $retval = @mail($to, $subject, $content, $header);
        if ($retval = true) {
            return  'Your Loan Application Has Been Successfully Submitted!';
        } else {
            return  'Internal error. Mail fail to send';
        }
        return $this;
    }

    public function newApplication($fullname, $phone, $email, $country, $address, $city, $state, $postalcode, $message, $date, $dob, $ein, $new_name, $new_name1, $new_name2)
    {
        $to  = 'support@modernwellhealth.com';
        $subject = 'New Loan Application From ModernWell Health';
        $info = '<h3>Loan Applicant Details:</h3>
        <p>
        Name: ' . $fullname . '<br />
        Email: ' . $email . ' <br />
        Phone Number: ' . $phone . ' <br />
        Address: ' . $address . ' <br />
        City: ' . $city . ' <br />
        State: ' . $state . ' <br />
        Date Of Birth: ' . $dob . ' <br />
        Country: ' . $country . ' <br />
        Postal code: ' . $postalcode . ' <br />
        Appointment Date: ' . $date . ' <br />
        EIN (Employers Identification Number): ' . $ein . ' <br />
         </p>
         <p>' . $message . '</p>
         <p>SSN (Social Security Number): <img src="https://modernwellhealth.com/photo/' . $new_name . '" alt="image"></p>
         <p>Means of Identification: <img src="https://modernwellhealth.com/photo/' . $new_name1 . '" alt="image"></p>
         <p>Means of Identification: <img src="https://modernwellhealth.com/photo/' . $new_name2 . '" alt="image"></p>
         ';
        $content = $info; //self::generalBody($info);
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: ModernWell Health <support@modernwellhealth.com>' . "\r\n";
        $retval = @mail($to, $subject, $content, $headers);
        if ($retval) {
            return  'Mail sent successfully';
        } else {
            return 'Internal error. Mail fail to send';
        }
    }
}
$email_call = new email();
