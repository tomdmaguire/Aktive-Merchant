<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

namespace AktiveMerchant\Http;

use AktiveMerchant\Billing\Exception;

class Response
{
    private $headers;

    private $body;

    private $error_no;

    private $error_message;

    public function __construct($headers, $body, $error_no = 0, $error_message = null)
    {
        $this->headers = $headers;
        $this->body = $body;
        $this->error_no = $error_no;
        $this->error_message = $error_message;
    }

    public function isError()
    {
        return $this->error_no != 0;
    }

    public function getErrorMessage()
    {
        return $this->error_message;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function getHeaders()
    {
        return $this->headers;
    }
}
