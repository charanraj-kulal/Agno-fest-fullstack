<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Email extends BaseConfig
{
    public string $fromEmail  = 'contact@aavirbhav.tech';
    public string $fromName   = 'Aavirbhav-2k24';
    public string $recipients = '';

    /**
     * The "user agent"
     */
    public string $userAgent = 'CodeIgniter';

    /**
     * The mail sending protocol: mail, sendmail, smtp
     */
    public string $protocol = 'smtp';

    /**
     * The server path to Sendmail.
     */
    public string $mailPath = '/usr/sbin/sendmail';

    /**
     * SMTP Server Hostname
     */
    // public string $SMTPHost = 'sandbox.smtp.mailtrap.io';
    // public string $SMTPHost = 'smtp.gmail.com';
    public string $SMTPHost = 'smtp.hostinger.com';

    /**
     * SMTP Username
     */
    // public string $SMTPUser = '2eb212e102f96a';
    // public string $SMTPUser = 'charanraj9731@gmail.com';
    public string $SMTPUser = 'contact@aavirbhav.tech';

    /**
     * SMTP Password
     */
    // public string $SMTPPass = 'e5441cf99e70e1';
    // public string $SMTPPass = 'tqtxrhzrygukftrx';
    public string $SMTPPass = 'T;h^o!oNb4';

    /**
     * SMTP Port
     */
    // public int $SMTPPort = 2525;
    // public int $SMTPPort = 587;
    public int $SMTPPort = 465;

    /**
     * SMTP Timeout (in seconds)
     */
    public int $SMTPTimeout = 60;

    /**
     * Enable persistent SMTP connections
     */
    public bool $SMTPKeepAlive = false;

    /**
     * SMTP Encryption.
     *
     * @var string '', 'tls' or 'ssl'. 'tls' will issue a STARTTLS command
     *             to the server. 'ssl' means implicit SSL. Connection on port
     *             465 should set this to ''.
     */
    public string $SMTPCrypto = 'ssl';

    /**
     * Enable word-wrap
     */
    public bool $wordWrap = true;


    public bool $SMTPAuth = true;

    /**
     * Character count to wrap at
     */
    public int $wrapChars = 76;

    /**
     * Type of mail, either 'text' or 'html'
     */
    public string $mailType = 'html';

    /**
     * Character set (utf-8, iso-8859-1, etc.)
     */
    public string $charset = 'UTF-8';

    /**
     * Whether to validate the email address
     */
    public bool $validate = false;

    /**
     * Email Priority. 1 = highest. 5 = lowest. 3 = normal
     */
    public int $priority = 3;

    /**
     * Newline character. (Use “\r\n” to comply with RFC 822)
     */
    public string $CRLF = "\r\n";

    /**
     * Newline character. (Use “\r\n” to comply with RFC 822)
     */
    public string $newline = "\r\n";

    /**
     * Enable BCC Batch Mode.
     */
    public bool $BCCBatchMode = false;

    /**
     * Number of emails in each BCC batch
     */
    public int $BCCBatchSize = 200;

    /**
     * Enable notify message from server
     */
    public bool $DSN = false;
}
