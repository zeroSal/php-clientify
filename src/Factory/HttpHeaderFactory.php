<?php

namespace Sal\Clientify\Factory;

use Sal\Clientify\Model\CharSet;
use Sal\Clientify\Model\ContentType;
use Sal\Clientify\Model\Http\Header\HttpHeader;

/**
 * @author Luca Saladino <sal65535@protonmail.com>
 */
class HttpHeaderFactory
{
    public static function accept(ContentType $contentType): HttpHeader
    {
        return new HttpHeader('Accept', $contentType->value);
    }

    public static function contentType(
        ContentType $contentType,
        ?CharSet $charSet = null,
    ): HttpHeader {
        $value = $contentType->value;
        if (null !== $charSet) {
            $value = "$value; charset={$charSet->value}";
        }

        return new HttpHeader('Content-Type', $value);
    }

    public static function xRequestedBy(string $requester): HttpHeader
    {
        return new HttpHeader('X-Requested-By', $requester);
    }

    public static function userAgent(string $agent): HttpHeader
    {
        return new HttpHeader('User-Agent', $agent);
    }
}
