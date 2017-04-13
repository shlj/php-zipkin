<?php
namespace Drefined\Zipkin\Instrumentation\Laravel\Services;

use Drefined\Zipkin\Core\Endpoint;
use Drefined\Zipkin\Core\Trace;
use Drefined\Zipkin\Tracer;

class ZipkinTracingService
{
    /** @var Trace $trace */
    private $trace;

    public function createTrace(
        Tracer $tracer = null,
        Endpoint $endpoint = null,
        $sampled = 1.0,
        $debug = false,
        $baseUrl
    ) {
        $this->trace = new Trace($tracer, $endpoint, $sampled, $debug, $baseUrl);
    }

    /**
     * @return Trace
     */
    public function getTrace(): Trace
    {
        return $this->trace;
    }
}
