<?php

namespace Sal\Clientify\Model\Http\Authentication;

/**
 * @author Luca Saladino <sal65535@protonmail.com>
 */
enum HttpAuthenticationType
{
    case NONE;
    case BEARER;
    case BASIC;
}
