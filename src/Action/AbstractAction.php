<?php
namespace Action;

use Psr\Http\Server\RequestHandlerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Laminas\Diactoros\Response\JsonResponse;
use Hook\Request;
use Hook\Response;
use Laminas\Log\Logger;

abstract class AbstractAction implements RequestHandlerInterface
{
    protected \Db $db;
    protected Logger $log;
    protected \Binance $api;

    abstract function action(Request $query) : Response;

    public function __construct(\Db $db, Logger $log, \Binance $api)
    {
        $this->db  = $db;
        $this->log = $log;
        $this->api = $api;
    }

    public function handle(ServerRequestInterface $request) : ResponseInterface
    {
        $payload = $request->getParsedBody();
        try {
            $query = new Request($payload);
        }
        catch(\LogicException $e) {
            return new JsonResponse(['error' => $e->getMessage()], $e->getCode() ?: 500);
        }

        $inner = $this->action($query);
        $res = new JsonResponse($inner);
        $res->response = $inner;

        return $res;
    }
}

