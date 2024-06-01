# HTTP Status Codes

This document provides a comprehensive list of HTTP status codes and their meanings. HTTP status codes are standardized codes that indicate the result of a client's request made to a server.

## 1xx Informational
- **100 Continue**: The client should continue with its request.
- **101 Switching Protocols**: The server is switching protocols as requested by the client.
- **102 Processing (WebDAV)**: The server has received and is processing the request, but no response is available yet.
- **103 Early Hints**: Used to return some response headers before final HTTP message.

## 2xx Success
- **200 OK**: The request has succeeded.
- **201 Created**: The request has been fulfilled and has resulted in one or more new resources being created.
- **202 Accepted**: The request has been accepted for processing, but the processing has not been completed.
- **203 Non-Authoritative Information**: The request was successful but the enclosed payload has been modified.
- **204 No Content**: The server successfully processed the request and is not returning any content.
- **205 Reset Content**: The server successfully processed the request, asks that the requester reset its document view.
- **206 Partial Content**: The server is delivering only part of the resource due to a range header sent by the client.
- **207 Multi-Status (WebDAV)**: Conveys information about multiple resources in situations where multiple status codes might be appropriate.
- **208 Already Reported (WebDAV)**: The members of a DAV binding have already been enumerated in a previous reply.
- **226 IM Used**: The server has fulfilled a GET request for the resource and the response is a representation of the result of one or more instance-manipulations applied to the current instance.

## 3xx Redirection
- **300 Multiple Choices**: Indicates multiple options for the resource that the client may follow.
- **301 Moved Permanently**: The URL of the requested resource has been changed permanently.
- **302 Found**: The requested resource resides temporarily under a different URL.
- **303 See Other**: The response to the request can be found under another URL.
- **304 Not Modified**: Indicates that the resource has not been modified since the version specified by the request headers.
- **305 Use Proxy (Deprecated)**: The requested resource is available only through a proxy, the address for which is provided in the response.
- **306 Switch Proxy (Unused)**: No longer used. Originally meant "Subsequent requests should use the specified proxy."
- **307 Temporary Redirect**: In this case, the request should be repeated with another URL; however, future requests should still use the original URL.
- **308 Permanent Redirect**: The request and all future requests should be repeated using another URL.

## 4xx Client Errors
- **400 Bad Request**: The server could not understand the request due to invalid syntax.
- **401 Unauthorized**: The client must authenticate itself to get the requested response.
- **402 Payment Required**: Reserved for future use.
- **403 Forbidden**: The client does not have access rights to the content.
- **404 Not Found**: The server can not find the requested resource.
- **405 Method Not Allowed**: The request method is known by the server but is not supported by the target resource.
- **406 Not Acceptable**: The server can only generate a response that is not accepted by the client.
- **407 Proxy Authentication Required**: The client must authenticate itself with the proxy.
- **408 Request Timeout**: The server would like to shut down this unused connection.
- **409 Conflict**: The request could not be completed due to a conflict with the current state of the target resource.
- **410 Gone**: The content requested has been permanently deleted from server, with no forwarding address.
- **411 Length Required**: The server refuses to accept the request without a defined Content-Length header.
- **412 Precondition Failed**: The client has indicated preconditions in its headers which the server does not meet.
- **413 Payload Too Large**: The request is larger than the server is willing or able to process.
- **414 URI Too Long**: The URI requested by the client is longer than the server is willing to interpret.
- **415 Unsupported Media Type**: The media format of the requested data is not supported by the server.
- **416 Range Not Satisfiable**: The range specified by the Range header field in the request cannot be fulfilled.
- **417 Expectation Failed**: The expectation given in the request's Expect header could not be met by at least one of the inbound servers.
- **418 I'm a teapot (RFC 2324)**: This code was defined in 1998 as an April Fools' joke. It is not expected to be implemented by actual HTTP servers.
- **421 Misdirected Request**: The request was directed at a server that is not able to produce a response.
- **422 Unprocessable Entity (WebDAV)**: The request was well-formed but was unable to be followed due to semantic errors.
- **423 Locked (WebDAV)**: The resource that is being accessed is locked.
- **424 Failed Dependency (WebDAV)**: The request failed due to failure of a previous request.
- **425 Too Early**: Indicates that the server is unwilling to risk processing a request that might be replayed.
- **426 Upgrade Required**: The client should switch to a different protocol.
- **428 Precondition Required**: The origin server requires the request to be conditional.
- **429 Too Many Requests**: The user has sent too many requests in a given amount of time.
- **431 Request Header Fields Too Large**: The server is unwilling to process the request because its header fields are too large.
- **451 Unavailable For Legal Reasons**: The server is denying access to the resource as a consequence of a legal demand.

## 5xx Server Errors
- **500 Internal Server Error**: The server has encountered a situation it doesn't know how to handle.
- **501 Not Implemented**: The request method is not supported by the server and cannot be handled.
- **502 Bad Gateway**: The server, while acting as a gateway or proxy, received an invalid response from the upstream server.
- **503 Service Unavailable**: The server is not ready to handle the request.
- **504 Gateway Timeout**: The server is acting as a gateway and cannot get a response in time.
- **505 HTTP Version Not Supported**: The HTTP version used in the request is not supported by the server.
- **506 Variant Also Negotiates**: The server has an internal configuration error: the chosen variant resource is configured to engage in content negotiation itself.
- **507 Insufficient Storage (WebDAV)**: The server is unable to store the representation needed to complete the request.
- **508 Loop Detected (WebDAV)**: The server detected an infinite loop while processing a request.
- **510 Not Extended**: Further extensions to the request are required for the server to fulfill it.
- **511 Network Authentication Required**: The client needs to authenticate to gain network access.

This list covers the HTTP status codes defined by the relevant RFCs and other specifications.
