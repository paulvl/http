<?php

namespace Paulvl\Http;

class StatusCode
{
    const _CONTINUE = 100;
    const _SWITCHING_PROTOCOLS = 101;
    const _PROCESSING = 102;
    const _OK = 200;
    const _CREATED = 201;
    const _ACCEPTED = 202;
    const _NON_AUTHORITATIVE_INFORMATION = 203;
    const _NO_CONTENT = 204;
    const _RESET_CONTENT = 205;
    const _PARTIAL_CONTENT = 206;
    const _MULTI_STATUS = 207;
    const _ALREADY_REPORTED = 208;
    const _IM_USED = 226;
    const _MULTIPLE_CHOICES = 300;
    const _MOVED_PERMANENTLY = 301;
    const _FOUND = 302;
    const _SEE_OTHER = 303;
    const _NOT_MODIFIED = 304;
    const _USE_PROXY = 305;
    const _TEMPORARY_REDIRECT = 307;
    const _PERMANENT_REDIRECT = 308;
    const _BAD_REQUEST = 400;
    const _UNAUTHORIZED = 401;
    const _PAYMENT_REQUIRED = 402;
    const _FORBIDDEN = 403;
    const _NOT_FOUND = 404;
    const _METHOD_NOT_ALLOWED = 405;
    const _NOT_ACCEPTABLE = 406;
    const _PROXY_AUTHENTICATION_REQUIRED = 407;
    const _REQUEST_TIMEOUT = 408;
    const _CONFLICT = 409;
    const _GONE = 410;
    const _LENGTH_REQUIRED = 411;
    const _PRECONDITION_FAILED = 412;
    const _PAYLOAD_TOO_LARGE = 413;
    const _REQUEST_URI_TOO_LONG = 414;
    const _UNSUPPORTED_MEDIA_TYPE = 415;
    const _REQUESTED_RANGE_NOT_SATISFIABLE = 416;
    const _EXPECTATION_FAILED = 417;
    const _IM_A_TEAPOT = 418;
    const _MISDIRECTED_REQUEST = 421;
    const _UNPROCESSABLE_ENTITY = 422;
    const _LOCKED = 423;
    const _FAILED_DEPENDENCY = 424;
    const _UPGRADE_REQUIRED = 426;
    const _PRECONDITION_REQUIRED = 428;
    const _TOO_MANY_REQUESTS = 429;
    const _REQUEST_HEADER_FIELDS_TOO_LARGE = 431;
    const _UNAVAILABLE_FOR_LEGAL_REASONS = 451;
    const _CLIENT_CLOSED_REQUEST = 499;
    const _INTERNAL_SERVER_ERROR = 500;
    const _NOT_IMPLEMENTED = 501;
    const _BAD_GATEWAY = 502;
    const _SERVICE_UNAVAILABLE = 503;
    const _GATEWAY_TIMEOUT = 504;
    const _HTTP_VERSION_NOT_SUPPORTED = 505;
    const _VARIANT_ALSO_NEGOTIATES = 506;
    const _INSUFFICIENT_STORAGE = 507;
    const _LOOP_DETECTED = 508;
    const _NOT_EXTENDED = 510;
    const _NETWORK_AUTHENTICATION_REQUIRED = 511;
    const _NETWORK_CONNECT_TIMEOUT_ERROR = 599;
}
