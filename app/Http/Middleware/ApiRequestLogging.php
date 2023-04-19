<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Illuminate\Support\Str;

class ApiRequestLogging
{
    private $logger;
    public function __construct()
    {
        $this->logger = $this->getLogger();
    }

    public function handle(Request $request, Closure $next)
    {
        $this->logger->info('Incoming request: ' . $request->url());
        $this->logger->info($request);
        return $next($request);
    }

    public function terminate(Request $request, JsonResponse $response): void
    {
        $this->logger->info('Outgoing response: ');
        $this->logger->info($response->content());
    }

    private function getLogger()
    {
        $dateString = now()->format('m_d_Y');
        $filePath = 'web_hooks_' . $dateString . '.log';
        $dateFormat = "m/d/Y H:i:s";
        $output = "[%datetime%] %channel%.%level_name%: %message%\n";
        $formatter = new LineFormatter($output, $dateFormat);
        $stream = new StreamHandler(storage_path('logs/' . $filePath), Logger::DEBUG);
        $stream->setFormatter($formatter);
        $processId = Str::random(5);
        $logger = new Logger($processId);
        $logger->pushHandler($stream);

        return $logger;
    }
}
