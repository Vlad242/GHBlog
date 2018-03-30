<?php

namespace Geek\BlogBundle\Listeners;

use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class SetHeaderListener
{
    private $headerName;
    private $headerValue;

    public function __construct($headerName, $headerValue)
    {
        $this->headerName = $headerName;
        $this->headerValue = $headerValue;
    }

    public function onKernelResponse(FilterResponseEvent $event)
    {
        $response = $event->getResponse();
        $response->headers->set($this->headerName, $this->headerValue);
    }
}