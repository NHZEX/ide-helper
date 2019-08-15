<?php
return [
    'Swoole\\Server' => [
        'property' => [
            'setting' => 'array',
            'master_pid' => 'int',
            'manager_pid' => 'int',
            'worker_id' => 'int',
            'worker_pid' => 'int',
            'taskworker' => 'bool',
            'connections' => '\Swoole\Coroutine\Iterator',
            'ports' => '\Swoole\Server\Port',
        ],
        'method' => [
            '__construct' => [
                'name' => '__construct',
                'param' => [
                    'host' => [
                        'name' => 'host',
                        'type' => 'string',
                    ],
                    'port' => [
                        'name' => 'port',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                    'mode' => [
                        'name' => 'mode',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                    'sock_type' => [
                        'name' => 'sock_type',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                ],
            ],
            'set' => [
                'name' => 'set',
                'param' => [
                    'setting' => [
                        'name' => 'setting',
                        'type' => 'array',
                    ],
                ],
            ],
            'on' => [
                'name' => 'on',
                'param' => [
                    'event' => [
                        'name' => 'event',
                        'type' => 'string',
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'type' => 'mixed',
                    ],
                ],
            ],
            'addListener' => [
                'name' => 'addListener',
                'param' => [
                    'host' => [
                        'name' => 'host',
                        'type' => 'string',
                    ],
                    'port' => [
                        'name' => 'port',
                        'type' => 'int',
                    ],
                    '$type' => [
                        'name' => '$type',
                        'defaultValue' => 'SWOOLE_SOCK_TCP',
                    ],
                ],
            ],
            'addProcess' => [
                'name' => 'addProcess',
                'param' => [
                    'process' => [
                        'name' => 'process',
                        'type' => '\Swoole\Process',
                    ],
                ],
            ],
            'listen' => [
                'name' => 'listen',
                'param' => [
                    'host' => [
                        'name' => 'host',
                        'type' => 'string',
                    ],
                    'port' => [
                        'name' => 'port',
                        'type' => 'int',
                    ],
                    'type' => [
                        'name' => 'type',
                        'type' => 'int',
                    ],
                ],
            ],
            'start' => [
                'name' => 'start',
            ],
            'reload' => [
                'name' => 'reload',
                'param' => [
                    'only_reload_taskworkrer' => [
                        'name' => 'only_reload_taskworkrer',
                        'type' => 'bool',
                        'defaultValue' => false,
                    ],
                ],
            ],
            'stop' => [
                'name' => 'stop',
                'param' => [
                    'worker_id' => [
                        'name' => 'worker_id',
                        'type' => 'int',
                        'defaultValue' => -1,
                    ],
                    'waitEvent' => [
                        'name' => 'waitEvent',
                        'type' => 'bool',
                        'defaultValue' => false,
                    ],
                ],
            ],
            'shutdown' => [
                'name' => 'shutdown',
            ],
            'tick' => [
                'name' => 'tick',
            ],
            'after' => [
                'name' => 'after',
                'param' => [
                    'after_time_ms' => [
                        'name' => 'after_time_ms',
                        'type' => 'int',
                    ],
                    'callback_function' => [
                        'name' => 'callback_function',
                        'type' => 'mixed',
                    ],
                ],
            ],
            'defer' => [
                'name' => 'defer',
                'param' => [
                    'callback' => [
                        'name' => 'callback',
                        'type' => 'callable',
                    ],
                ],
            ],
            'clearTimer' => [
                'name' => 'clearTimer',
            ],
            'close' => [
                'name' => 'close',
                'param' => [
                    'fd' => [
                        'name' => 'fd',
                        'type' => 'int',
                    ],
                    'reset' => [
                        'name' => 'reset',
                        'type' => 'bool',
                        'defaultValue' => false,
                    ],
                ],
            ],
            'send' => [
                'name' => 'send',
                'param' => [
                    'fd' => [
                        'name' => 'fd',
                        'type' => 'mixed',
                    ],
                    'data' => [
                        'name' => 'data',
                        'type' => 'string',
                    ],
                    'serverSocket' => [
                        'name' => 'serverSocket',
                        'type' => 'int',
                        'defaultValue' => -1,
                    ],
                ],
            ],
            'sendfile' => [
                'name' => 'sendfile',
                'param' => [
                    'fd' => [
                        'name' => 'fd',
                        'type' => 'int',
                    ],
                    'filename' => [
                        'name' => 'filename',
                        'type' => 'string',
                    ],
                    'offset' => [
                        'name' => 'offset',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                    'length' => [
                        'name' => 'length',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                ],
            ],
            'sendto' => [
                'name' => 'sendto',
                'param' => [
                    'ip' => [
                        'name' => 'ip',
                        'type' => 'string',
                    ],
                    'port' => [
                        'name' => 'port',
                        'type' => 'int',
                    ],
                    'data' => [
                        'name' => 'data',
                        'type' => 'string',
                    ],
                    'server_socket' => [
                        'name' => 'server_socket',
                        'type' => 'int',
                        'defaultValue' => -1,
                    ],
                ],
            ],
            'sendwait' => [
                'name' => 'sendwait',
                'param' => [
                    'fd' => [
                        'name' => 'fd',
                        'type' => 'int',
                    ],
                    'send_data' => [
                        'name' => 'send_data',
                        'type' => 'string',
                    ],
                ],
            ],
            'sendMessage' => [
                'name' => 'sendMessage',
                'param' => [
                    'message' => [
                        'name' => 'message',
                        'type' => 'mixed',
                    ],
                    'dst_worker_id' => [
                        'name' => 'dst_worker_id',
                        'type' => 'int',
                    ],
                ],
            ],
            'exist' => [
                'name' => 'exist',
                'param' => [
                    'fd' => [
                        'name' => 'fd',
                        'type' => 'int',
                    ],
                ],
                'result' => 'bool',
            ],
            'pause' => [
                'name' => 'pause',
                'param' => [
                    'fd' => [
                        'name' => 'fd',
                        'type' => 'int',
                    ],
                ],
            ],
            'resume' => [
                'name' => 'resume',
                'param' => [
                    'fd' => [
                        'name' => 'fd',
                        'type' => 'int',
                    ],
                ],
            ],
            'getClientInfo' => [
                'name' => 'getClientInfo',
            ],
            'getClientList' => [
                'name' => 'getClientList',
                'param' => [
                    'start_fd' => [
                        'name' => 'start_fd',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                    'pagesize' => [
                        'name' => 'pagesize',
                        'type' => 'int',
                        'defaultValue' => 10,
                    ],
                ],
            ],
            'bind' => [
                'name' => 'bind',
                'param' => [
                    'fd' => [
                        'name' => 'fd',
                        'type' => 'int',
                    ],
                    'uid' => [
                        'name' => 'uid',
                        'type' => 'int',
                    ],
                ],
            ],
            'stats' => [
                'name' => 'stats',
            ],
            'task' => [
                'name' => 'task',
                'param' => [
                    'data' => [
                        'name' => 'data',
                        'type' => 'mixed',
                    ],
                    'dst_worker_id' => [
                        'name' => 'dst_worker_id',
                        'type' => 'int',
                        'defaultValue' => -1,
                    ],
                ],
            ],
            'taskwait' => [
                'name' => 'taskwait',
                'param' => [
                    'data' => [
                        'name' => 'data',
                        'type' => 'mixed',
                    ],
                    'timeout' => [
                        'name' => 'timeout',
                        'type' => 'float',
                        'defaultValue' => 0.5,
                    ],
                    'dstWorkerId' => [
                        'name' => 'dstWorkerId',
                        'type' => 'int',
                        'defaultValue' => -1,
                    ],
                ],
                'result' => 'string',
            ],
            'taskWaitMulti' => [
                'name' => 'taskWaitMulti',
                'param' => [
                    'tasks' => [
                        'name' => 'tasks',
                        'type' => 'array',
                    ],
                    'timeout' => [
                        'name' => 'timeout',
                        'type' => 'float',
                        'defaultValue' => 0.5,
                    ],
                ],
            ],
            'taskCo' => [
                'name' => 'taskCo',
                'param' => [
                    'tasks' => [
                        'name' => 'tasks',
                        'type' => 'array',
                    ],
                    'timeout' => [
                        'name' => 'timeout',
                        'type' => 'float',
                        'defaultValue' => 0.5,
                    ],
                ],
                'result' => 'array',
            ],
            'finish' => [
                'name' => 'finish',
                'param' => [
                    'response' => [
                        'name' => 'response',
                        'type' => 'mixed',
                    ],
                ],
            ],
            'heartbeat' => [
                'name' => 'heartbeat',
                'param' => [
                    'if_close_connection' => [
                        'name' => 'if_close_connection',
                        'type' => 'bool',
                        'defaultValue' => true,
                    ],
                ],
            ],
            'getLastError' => [
                'name' => 'getLastError',
            ],
            'getSocket' => [
                'name' => 'getSocket',
            ],
            'protect' => [
                'name' => 'protect',
                'param' => [
                    'fd' => [
                        'name' => 'fd',
                        'type' => 'int',
                    ],
                    'value' => [
                        'name' => 'value',
                        'type' => 'bool',
                        'defaultValue' => false,
                    ],
                ],
            ],
            'confirm' => [
                'name' => 'confirm',
                'param' => [
                    'fd' => [
                        'name' => 'fd',
                        'type' => 'int',
                    ],
                ],
            ],
        ],
    ],
    'Swoole\\Coroutine' => [
        'method' => [
            'set' => [
                'name' => 'set',
                'param' => [
                    'options' => [
                        'name' => 'options',
                        'type' => 'array',
                        'defaultValue' => [],
                    ],
                ],
            ],
            'stats' => [
                'name' => 'stats',
                'result' => 'array',
            ],
            'create' => [
                'name' => 'create',
                'param' => [
                    'function' => [
                        'name' => 'function',
                        'type' => 'callable',
                    ],
                    'args' => [
                        'name' => 'args',
                    ],
                ],
                'result' => 'int|false',
            ],
            'exist' => [
                'name' => 'exist',
            ],
            'getCid' => [
                'name' => 'getCid',
            ],
            'getPcid' => [
                'name' => 'getPcid',
            ],
            'getContext' => [
                'name' => 'getContext',
                'result' => '\Swoole\Coroutine\Context',
            ],
            'defer' => [
                'name' => 'defer',
                'param' => [
                    'function (' => [
                        'name' => 'function (',
                    ],
                ],
            ],
            'list' => [
                'name' => 'list',
                'result' => '\Swoole\Coroutine\Iterator',
            ],
            'getBackTrace' => [
                'name' => 'getBackTrace',
                'param' => [
                    'cid' => [
                        'name' => 'cid',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                    'options' => [
                        'name' => 'options',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                    'limit' => [
                        'name' => 'limit',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                ],
                'result' => 'array',
            ],
            'yield' => [
                'name' => 'yield',
            ],
            'resume' => [
                'name' => 'resume',
                'param' => [
                    'coroutineId' => [
                        'name' => 'coroutineId',
                        'type' => 'int',
                    ],
                ],
            ],
            'fread' => [
                'name' => 'fread',
                'param' => [
                    'handle' => [
                        'name' => 'handle',
                        'type' => 'resource',
                    ],
                    'length' => [
                        'name' => 'length',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                ],
            ],
            'fgets' => [
                'name' => 'fgets',
                'param' => [
                    'handle' => [
                        'name' => 'handle',
                        'type' => 'resource',
                    ],
                ],
            ],
            'fwrite' => [
                'name' => 'fwrite',
                'param' => [
                    'handle' => [
                        'name' => 'handle',
                        'type' => 'resource',
                    ],
                    'data' => [
                        'name' => 'data',
                        'type' => 'string',
                    ],
                    'length' => [
                        'name' => 'length',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                ],
            ],
            'sleep' => [
                'name' => 'sleep',
                'param' => [
                    'seconds' => [
                        'name' => 'seconds',
                        'type' => 'float',
                    ],
                ],
            ],
            'gethostbyname' => [
                'name' => 'gethostbyname',
                'param' => [
                    'domain' => [
                        'name' => 'domain',
                        'type' => 'string',
                    ],
                    'family' => [
                        'name' => 'family',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                    'timeout' => [
                        'name' => 'timeout',
                        'type' => 'float',
                    ],
                ],
                'result' => 'string',
            ],
            'getaddrinfo' => [
                'name' => 'getaddrinfo',
                'param' => [
                    'domain' => [
                        'name' => 'domain',
                        'type' => 'string',
                    ],
                    'family' => [
                        'name' => 'family',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                    'socktype' => [
                        'name' => 'socktype',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                    'protocol' => [
                        'name' => 'protocol',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                    'service' => [
                        'name' => 'service',
                        'type' => 'string',
                        'defaultValue' => 'null',
                    ],
                ],
                'result' => 'array',
            ],
            'dnsLookup' => [
                'name' => 'dnsLookup',
                'param' => [
                    'domain' => [
                        'name' => 'domain',
                        'type' => 'string',
                    ],
                    'timeout' => [
                        'name' => 'timeout',
                        'type' => 'float',
                        'defaultValue' => 5.0,
                    ],
                ],
            ],
            'exec' => [
                'name' => 'exec',
                'param' => [
                    'cmd' => [
                        'name' => 'cmd',
                        'type' => 'string',
                    ],
                ],
                'result' => 'array',
            ],
            'readFile' => [
                'name' => 'readFile',
                'param' => [
                    'filename' => [
                        'name' => 'filename',
                        'type' => 'string',
                    ],
                ],
            ],
            'writeFile' => [
                'name' => 'writeFile',
                'param' => [
                    'filename' => [
                        'name' => 'filename',
                        'type' => 'string',
                    ],
                    'fileContent' => [
                        'name' => 'fileContent',
                        'type' => 'string',
                    ],
                    'flags' => [
                        'name' => 'flags',
                        'type' => 'int',
                    ],
                ],
            ],
            'statvfs' => [
                'name' => 'statvfs',
                'param' => [
                    'path' => [
                        'name' => 'path',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
    ],
    'Swoole\\Coroutine\\Channel' => [
        'method' => [
            '__construct' => [
                'name' => '__construct',
                'param' => [
                    'capacity' => [
                        'name' => 'capacity',
                        'type' => 'int',
                        'defaultValue' => 1,
                    ],
                ],
            ],
            'push' => [
                'name' => 'push',
                'param' => [
                    'data' => [
                        'name' => 'data',
                        'type' => 'mixed',
                    ],
                    'timeout' => [
                        'name' => 'timeout',
                        'type' => 'float',
                        'defaultValue' => -1.0,
                    ],
                ],
                'result' => 'bool',
            ],
            'pop' => [
                'name' => 'pop',
                'param' => [
                    'timeout' => [
                        'name' => 'timeout',
                        'type' => 'float',
                        'defaultValue' => 0.0,
                    ],
                ],
                'result' => 'mixed',
            ],
            'stats' => [
                'name' => 'stats',
                'result' => 'array',
            ],
            'close' => [
                'name' => 'close',
            ],
            'length' => [
                'name' => 'length',
                'result' => 'int',
            ],
            'isEmpty' => [
                'name' => 'isEmpty',
                'result' => 'bool',
            ],
            'isFull' => [
                'name' => 'isFull',
                'result' => 'bool',
            ],
        ],
    ],
    'Swoole\\Coroutine\\Client' => [
        'method' => [
            'connect' => [
                'name' => 'connect',
                'param' => [
                    'host' => [
                        'name' => 'host',
                        'type' => 'string',
                    ],
                    'port' => [
                        'name' => 'port',
                        'type' => 'int',
                    ],
                    'timeout' => [
                        'name' => 'timeout',
                        'type' => 'float',
                        'defaultValue' => 0.5,
                    ],
                    'sock_flag' => [
                        'name' => 'sock_flag',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                ],
            ],
            'send' => [
                'name' => 'send',
                'param' => [
                    'data' => [
                        'name' => 'data',
                        'type' => 'string',
                    ],
                ],
            ],
            'recv' => [
                'name' => 'recv',
                'param' => [
                    'timeout' => [
                        'name' => 'timeout',
                        'type' => 'float',
                        'defaultValue' => -1.0,
                    ],
                ],
                'result' => 'string',
            ],
            'close' => [
                'name' => 'close',
                'result' => 'bool',
            ],
            'peek' => [
                'name' => 'peek',
                'param' => [
                    'length' => [
                        'name' => 'length',
                        'type' => 'int',
                        'defaultValue' => 65535,
                    ],
                ],
                'result' => 'string',
            ],
            'set' => [
                'name' => 'set',
                'param' => [
                    'settings' => [
                        'name' => 'settings',
                        'type' => 'array',
                    ],
                ],
            ],
        ],
    ],
    'Swoole\\Coroutine\\Server' => [
        'method' => [
            '__construct' => [
                'name' => '__construct',
                'param' => [
                    'host' => [
                        'name' => 'host',
                        'type' => 'string',
                    ],
                    'port' => [
                        'name' => 'port',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                    'ssl' => [
                        'name' => 'ssl',
                        'type' => 'bool',
                        'defaultValue' => false,
                    ],
                ],
            ],
            'set' => [
                'name' => 'set',
                'param' => [
                    'options' => [
                        'name' => 'options',
                        'type' => 'array',
                    ],
                ],
            ],
            'handle' => [
                'name' => 'handle',
                'param' => [
                    'fn' => [
                        'name' => 'fn',
                        'type' => 'callable',
                    ],
                ],
            ],
            'start' => [
                'name' => 'start',
            ],
            'shutdown' => [
                'name' => 'shutdown',
                'param' => [
                    'function (' => [
                        'name' => 'function (',
                    ],
                ],
            ],
        ],
    ],
    'Swoole\\Coroutine\\Scheduler' => [
        'method' => [
            'set' => [
                'name' => 'set',
                'param' => [
                    'options' => [
                        'name' => 'options',
                        'type' => 'array',
                    ],
                ],
            ],
            'add' => [
                'name' => 'add',
                'param' => [
                    'fn' => [
                        'name' => 'fn',
                        'type' => 'callable',
                    ],
                    'args' => [
                        'name' => 'args',
                        'type' => '...',
                    ],
                ],
            ],
            'parallel' => [
                'name' => 'parallel',
                'param' => [
                    'n' => [
                        'name' => 'n',
                        'type' => 'int',
                    ],
                    'fn' => [
                        'name' => 'fn',
                        'type' => 'callable',
                    ],
                    'args' => [
                        'name' => 'args',
                        'type' => '...',
                    ],
                ],
            ],
            'start' => [
                'name' => 'start',
            ],
        ],
    ],
    'Swoole\\Coroutine\\Http\\Client' => [
        'method' => [
            'set' => [
                'name' => 'set',
                'param' => [
                    '[\'timeout\'' => [
                        'name' => '[\'timeout\'',
                        'defaultValue' => '> 3.0]',
                    ],
                ],
            ],
            'setMethod' => [
                'name' => 'setMethod',
                'param' => [
                    'method' => [
                        'name' => 'method',
                        'type' => 'string',
                    ],
                ],
            ],
            'setHeaders' => [
                'name' => 'setHeaders',
                'param' => [
                    'headers' => [
                        'name' => 'headers',
                        'type' => 'array',
                    ],
                ],
            ],
            'setCookies' => [
                'name' => 'setCookies',
                'param' => [
                    'cookies' => [
                        'name' => 'cookies',
                        'type' => 'array',
                    ],
                ],
            ],
            'setData' => [
                'name' => 'setData',
                'param' => [
                    'data' => [
                        'name' => 'data',
                        'type' => 'string',
                    ],
                ],
            ],
            'addFile' => [
                'name' => 'addFile',
                'param' => [
                    'path' => [
                        'name' => 'path',
                        'type' => 'string',
                    ],
                    'name' => [
                        'name' => 'name',
                        'type' => 'string',
                    ],
                    'mimeType' => [
                        'name' => 'mimeType',
                        'type' => 'string',
                        'defaultValue' => 'null',
                    ],
                    'filename' => [
                        'name' => 'filename',
                        'type' => 'string',
                        'defaultValue' => 'null',
                    ],
                    'offset' => [
                        'name' => 'offset',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                    'length' => [
                        'name' => 'length',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                ],
            ],
            'addData' => [
                'name' => 'addData',
                'param' => [
                    'data' => [
                        'name' => 'data',
                        'type' => 'string',
                    ],
                    'name' => [
                        'name' => 'name',
                        'type' => 'string',
                    ],
                    'mimeType' => [
                        'name' => 'mimeType',
                        'type' => 'string',
                        'defaultValue' => 'null',
                    ],
                    'filename' => [
                        'name' => 'filename',
                        'type' => 'string',
                        'defaultValue' => 'null',
                    ],
                ],
            ],
            'get' => [
                'name' => 'get',
                'param' => [
                    'path' => [
                        'name' => 'path',
                        'type' => 'string',
                    ],
                ],
            ],
            'post' => [
                'name' => 'post',
                'param' => [
                    'path' => [
                        'name' => 'path',
                        'type' => 'string',
                    ],
                    'data' => [
                        'name' => 'data',
                        'type' => 'mixed',
                    ],
                ],
            ],
            'upgrade' => [
                'name' => 'upgrade',
                'param' => [
                    'path' => [
                        'name' => 'path',
                        'type' => 'string',
                    ],
                ],
            ],
            'push' => [
                'name' => 'push',
                'param' => [
                    'data' => [
                        'name' => 'data',
                        'type' => 'mixed',
                    ],
                    'opcode' => [
                        'name' => 'opcode',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                    'finish' => [
                        'name' => 'finish',
                        'type' => 'bool',
                        'defaultValue' => true,
                    ],
                ],
                'result' => 'bool',
            ],
            'recv' => [
                'name' => 'recv',
                'param' => [
                    'timeout' => [
                        'name' => 'timeout',
                        'type' => 'float',
                        'defaultValue' => -1.0,
                    ],
                ],
            ],
            'download' => [
                'name' => 'download',
                'param' => [
                    'path' => [
                        'name' => 'path',
                        'type' => 'string',
                    ],
                    'filename' => [
                        'name' => 'filename',
                        'type' => 'string',
                    ],
                    'offset' => [
                        'name' => 'offset',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                ],
            ],
        ],
    ],
    'Swoole\\Coroutine\\Http\\Server' => [
        'method' => [
            'handle' => [
                'name' => 'handle',
                'param' => [
                    'pattern' => [
                        'name' => 'pattern',
                        'type' => 'string',
                    ],
                    'fn' => [
                        'name' => 'fn',
                        'type' => 'callable',
                    ],
                ],
            ],
        ],
    ],
    'Swoole\\Coroutine\\Http2\\Client' => [
        'method' => [
            '__construct' => [
                'name' => '__construct',
                'param' => [
                    'host' => [
                        'name' => 'host',
                        'type' => 'string',
                    ],
                    'port' => [
                        'name' => 'port',
                        'type' => 'int',
                    ],
                    'ssl' => [
                        'name' => 'ssl',
                        'type' => 'bool',
                        'defaultValue' => false,
                    ],
                ],
            ],
            'set' => [
                'name' => 'set',
                'param' => [
                    'options' => [
                        'name' => 'options',
                        'type' => 'array',
                    ],
                ],
            ],
            'connect' => [
                'name' => 'connect',
            ],
            'send' => [
                'name' => 'send',
                'param' => [
                    'request' => [
                        'name' => 'request',
                        'type' => 'swoole_http2_request',
                    ],
                ],
                'result' => 'int',
            ],
            'write' => [
                'name' => 'write',
                'param' => [
                    'streamId' => [
                        'name' => 'streamId',
                        'type' => 'int',
                    ],
                    'data' => [
                        'name' => 'data',
                        'type' => 'mixed',
                    ],
                    'end' => [
                        'name' => 'end',
                        'type' => 'bool',
                        'defaultValue' => false,
                    ],
                ],
            ],
            'recv' => [
                'name' => 'recv',
                'param' => [
                    'timeout' => [
                        'name' => 'timeout',
                        'type' => 'float',
                    ],
                ],
                'result' => 'Http2\\Response',
            ],
            'close' => [
                'name' => 'close',
            ],
        ],
    ],
    'Swoole\\Coroutine\\Redis' => [
        'method' => [
            '__construct' => [
                'name' => '__construct',
                'param' => [
                    'options' => [
                        'name' => 'options',
                        'type' => 'array',
                        'defaultValue' => 'null',
                    ],
                ],
            ],
            'setOptions' => [
                'name' => 'setOptions',
            ],
            'set' => [
                'name' => 'set',
                'param' => [
                    'key' => [
                        'name' => 'key',
                        'type' => 'string',
                    ],
                    'value' => [
                        'name' => 'value',
                        'type' => 'mixed',
                    ],
                    'option' => [
                        'name' => 'option',
                        'type' => 'array | int',
                    ],
                ],
                'result' => 'bool',
            ],
            'request' => [
                'name' => 'request',
            ],
        ],
    ],
    'Swoole\\Coroutine\\Socket' => [
        'method' => [
            '__construct' => [
                'name' => '__construct',
                'param' => [
                    'domain' => [
                        'name' => 'domain',
                        'type' => 'int',
                    ],
                    'type' => [
                        'name' => 'type',
                        'type' => 'int',
                    ],
                    'protocol' => [
                        'name' => 'protocol',
                        'type' => 'int',
                    ],
                ],
            ],
            'getOption' => [
                'name' => 'getOption',
                'param' => [
                    'level' => [
                        'name' => 'level',
                        'type' => 'int',
                    ],
                    'optname' => [
                        'name' => 'optname',
                        'type' => 'int',
                    ],
                ],
                'result' => 'mixed',
            ],
            'setOption' => [
                'name' => 'setOption',
                'param' => [
                    'level' => [
                        'name' => 'level',
                        'type' => 'int',
                    ],
                    'optname' => [
                        'name' => 'optname',
                        'type' => 'int',
                    ],
                    'optval' => [
                        'name' => 'optval',
                        'type' => 'mixed',
                    ],
                ],
                'result' => 'bool',
            ],
            'bind' => [
                'name' => 'bind',
                'param' => [
                    'address' => [
                        'name' => 'address',
                        'type' => 'string',
                    ],
                    'port' => [
                        'name' => 'port',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                ],
                'result' => 'bool',
            ],
            'listen' => [
                'name' => 'listen',
                'param' => [
                    'backlog' => [
                        'name' => 'backlog',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                ],
                'result' => 'bool',
            ],
            'accept' => [
                'name' => 'accept',
                'param' => [
                    'timeout' => [
                        'name' => 'timeout',
                        'type' => 'float',
                        'defaultValue' => -1.0,
                    ],
                ],
                'result' => 'Coroutine\\Socket',
            ],
            'connect' => [
                'name' => 'connect',
                'param' => [
                    'host' => [
                        'name' => 'host',
                        'type' => 'string',
                    ],
                    'int port' => [
                        'name' => 'int port',
                        'defaultValue' => '0',
                    ],
                    'timeout' => [
                        'name' => 'timeout',
                        'type' => 'float',
                        'defaultValue' => -1.0,
                    ],
                ],
                'result' => 'bool',
            ],
            'send' => [
                'name' => 'send',
                'param' => [
                    'data' => [
                        'name' => 'data',
                        'type' => 'string',
                    ],
                    'timeout' => [
                        'name' => 'timeout',
                        'type' => 'float',
                        'defaultValue' => -1.0,
                    ],
                ],
                'result' => 'int',
            ],
            'sendAll' => [
                'name' => 'sendAll',
                'param' => [
                    'data' => [
                        'name' => 'data',
                        'type' => 'string',
                    ],
                    'timeout' => [
                        'name' => 'timeout',
                        'type' => 'float',
                        'defaultValue' => -1.0,
                    ],
                ],
                'result' => 'int',
            ],
            'recv' => [
                'name' => 'recv',
                'param' => [
                    'int length' => [
                        'name' => 'int length',
                        'defaultValue' => '65535',
                    ],
                    'timeout' => [
                        'name' => 'timeout',
                        'type' => 'float',
                        'defaultValue' => -1.0,
                    ],
                ],
                'result' => 'string',
            ],
            'recvAll' => [
                'name' => 'recvAll',
                'param' => [
                    'int length' => [
                        'name' => 'int length',
                        'defaultValue' => '65535',
                    ],
                    'timeout' => [
                        'name' => 'timeout',
                        'type' => 'float',
                        'defaultValue' => -1.0,
                    ],
                ],
                'result' => 'string',
            ],
            'sendto' => [
                'name' => 'sendto',
            ],
            'recvfrom' => [
                'name' => 'recvfrom',
                'param' => [
                    'array &$peer' => [
                        'name' => 'array &$peer',
                    ],
                    'timeout' => [
                        'name' => 'timeout',
                        'type' => 'float',
                        'defaultValue' => -1.0,
                    ],
                ],
                'result' => 'string',
            ],
            'getsockname' => [
                'name' => 'getsockname',
            ],
            'getpeername' => [
                'name' => 'getpeername',
            ],
            'close' => [
                'name' => 'close',
                'result' => 'bool',
            ],
        ],
    ],
    'Swoole\\Coroutine\\MySQL' => [
        'method' => [
            'connect' => [
                'name' => 'connect',
                'param' => [
                    'serverInfo' => [
                        'name' => 'serverInfo',
                        'type' => 'array',
                    ],
                ],
            ],
            'query' => [
                'name' => 'query',
                'param' => [
                    'sql' => [
                        'name' => 'sql',
                        'type' => 'string',
                    ],
                    'timeout' => [
                        'name' => 'timeout',
                        'type' => 'float',
                        'defaultValue' => -1.0,
                    ],
                ],
            ],
            'prepare' => [
                'name' => 'prepare',
                'param' => [
                    'sql' => [
                        'name' => 'sql',
                        'type' => 'string',
                    ],
                    'timeout' => [
                        'name' => 'timeout',
                        'type' => 'float',
                    ],
                ],
                'result' => 'bool',
            ],
            'escape' => [
                'name' => 'escape',
                'param' => [
                    'str' => [
                        'name' => 'str',
                        'type' => 'string',
                    ],
                ],
                'result' => 'string',
            ],
            'begin' => [
                'name' => 'begin',
            ],
            'commit' => [
                'name' => 'commit',
            ],
            'rollback' => [
                'name' => 'rollback',
            ],
            'execute' => [
                'name' => 'execute',
                'param' => [
                    'params' => [
                        'name' => 'params',
                        'type' => 'array',
                    ],
                    'timeout' => [
                        'name' => 'timeout',
                        'type' => 'float',
                        'defaultValue' => -1.0,
                    ],
                ],
                'result' => 'bool',
            ],
            'fetch' => [
                'name' => 'fetch',
            ],
            'fetchAll' => [
                'name' => 'fetchAll',
            ],
            'nextResult' => [
                'name' => 'nextResult',
            ],
        ],
    ],
    'Swoole\\Coroutine\\PostgreSQL' => [
        'method' => [
            'connect' => [
                'name' => 'connect',
                'param' => [
                    'connection_string' => [
                        'name' => 'connection_string',
                        'type' => 'string',
                    ],
                ],
            ],
            'query' => [
                'name' => 'query',
                'param' => [
                    'connection' => [
                        'name' => 'connection',
                        'type' => 'resource',
                    ],
                ],
            ],
            'fetchAll' => [
                'name' => 'fetchAll',
                'param' => [
                    'query' => [
                        'name' => 'query',
                        'type' => 'resource',
                    ],
                ],
            ],
            'affectedRows' => [
                'name' => 'affectedRows',
                'param' => [
                    'queryResult' => [
                        'name' => 'queryResult',
                        'type' => 'resource',
                    ],
                ],
            ],
            'numRows' => [
                'name' => 'numRows',
                'param' => [
                    'queryResult' => [
                        'name' => 'queryResult',
                        'type' => 'resource',
                    ],
                ],
            ],
            'fetchObject' => [
                'name' => 'fetchObject',
                'param' => [
                    'queryResult [' => [
                        'name' => 'queryResult [',
                        'type' => 'resource',
                    ],
                    'row' => [
                        'name' => 'row',
                        'type' => 'int',
                    ],
                ],
            ],
            'fetchAssoc' => [
                'name' => 'fetchAssoc',
                'param' => [
                    'queryResult [' => [
                        'name' => 'queryResult [',
                        'type' => 'resource',
                    ],
                    'row ]' => [
                        'name' => 'row ]',
                        'type' => 'int',
                    ],
                ],
            ],
            'fetchArray' => [
                'name' => 'fetchArray',
                'param' => [
                    'queryResult [' => [
                        'name' => 'queryResult [',
                        'type' => 'resource',
                    ],
                    'row [' => [
                        'name' => 'row [',
                        'type' => 'int',
                    ],
                    'resulType ]]' => [
                        'name' => 'resulType ]]',
                        'type' => 'int',
                    ],
                ],
            ],
            'fetchRow' => [
                'name' => 'fetchRow',
                'param' => [
                    'queryResult [' => [
                        'name' => 'queryResult [',
                        'type' => 'resource',
                    ],
                    'row ]' => [
                        'name' => 'row ]',
                        'type' => 'int',
                    ],
                ],
            ],
            'metaData' => [
                'name' => 'metaData',
                'param' => [
                    'tableName' => [
                        'name' => 'tableName',
                        'type' => 'String',
                    ],
                ],
            ],
            'prepare' => [
                'name' => 'prepare',
                'param' => [
                    'name' => [
                        'name' => 'name',
                        'type' => 'string',
                    ],
                    'sql' => [
                        'name' => 'sql',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
    ],
    'Swoole\\Timer' => [
        'method' => [
            'tick' => [
                'name' => 'tick',
                'param' => [
                    'msec' => [
                        'name' => 'msec',
                        'type' => 'int',
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'type' => 'callable',
                    ],
                    'params' => [
                        'name' => 'params',
                    ],
                ],
            ],
            'after' => [
                'name' => 'after',
                'param' => [
                    'after_time_ms' => [
                        'name' => 'after_time_ms',
                        'type' => 'int',
                    ],
                    'callback_function' => [
                        'name' => 'callback_function',
                        'type' => 'callable',
                    ],
                    'params' => [
                        'name' => 'params',
                    ],
                ],
            ],
            'clear' => [
                'name' => 'clear',
                'param' => [
                    'timer_id' => [
                        'name' => 'timer_id',
                        'type' => 'int',
                    ],
                ],
            ],
            'clearAll' => [
                'name' => 'clearAll',
            ],
            'info' => [
                'name' => 'info',
            ],
            'list' => [
                'name' => 'list',
            ],
            'stats' => [
                'name' => 'stats',
            ],
        ],
    ],
    'Swoole\\Memory\\Table' => [
        'method' => [
            '__construct' => [
                'name' => '__construct',
                'param' => [
                    'size' => [
                        'name' => 'size',
                        'type' => 'int',
                    ],
                    'conflict_proportion' => [
                        'name' => 'conflict_proportion',
                        'type' => 'float',
                        'defaultValue' => 0.2,
                    ],
                ],
            ],
            'column' => [
                'name' => 'column',
                'param' => [
                    'name' => [
                        'name' => 'name',
                        'type' => 'string',
                    ],
                    'type' => [
                        'name' => 'type',
                        'type' => 'int',
                    ],
                    'size' => [
                        'name' => 'size',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                ],
            ],
            'create' => [
                'name' => 'create',
                'result' => 'bool',
            ],
            'set' => [
                'name' => 'set',
                'param' => [
                    'key' => [
                        'name' => 'key',
                        'type' => 'string',
                    ],
                    'value' => [
                        'name' => 'value',
                        'type' => 'array',
                    ],
                ],
                'result' => 'bool',
            ],
            'incr' => [
                'name' => 'incr',
                'param' => [
                    'key' => [
                        'name' => 'key',
                        'type' => 'string',
                    ],
                    'column' => [
                        'name' => 'column',
                        'type' => 'string',
                    ],
                    'incrby' => [
                        'name' => 'incrby',
                        'type' => 'mixed',
                        'defaultValue' => '1',
                    ],
                ],
                'result' => 'int',
            ],
            'decr' => [
                'name' => 'decr',
                'param' => [
                    'key' => [
                        'name' => 'key',
                        'type' => 'string',
                    ],
                    'column' => [
                        'name' => 'column',
                        'type' => 'string',
                    ],
                    'decrby' => [
                        'name' => 'decrby',
                        'type' => 'mixed',
                        'defaultValue' => '1',
                    ],
                ],
            ],
            'get' => [
                'name' => 'get',
                'param' => [
                    'key' => [
                        'name' => 'key',
                        'type' => 'string',
                    ],
                    'field' => [
                        'name' => 'field',
                        'type' => 'string',
                        'defaultValue' => 'null',
                    ],
                ],
            ],
            'exist' => [
                'name' => 'exist',
                'param' => [
                    'key' => [
                        'name' => 'key',
                        'type' => 'string',
                    ],
                ],
            ],
            'count' => [
                'name' => 'count',
            ],
            'del' => [
                'name' => 'del',
                'param' => [
                    'key' => [
                        'name' => 'key',
                        'type' => 'string',
                    ],
                ],
            ],
        ],
    ],
    'Swoole\\Memory\\Atomic' => [
        'method' => [
            '__construct' => [
                'name' => '__construct',
                'param' => [
                    'init_value' => [
                        'name' => 'init_value',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                ],
            ],
            'add' => [
                'name' => 'add',
                'param' => [
                    'add_value' => [
                        'name' => 'add_value',
                        'type' => 'int',
                        'defaultValue' => 1,
                    ],
                ],
            ],
            'sub' => [
                'name' => 'sub',
                'param' => [
                    'sub_value' => [
                        'name' => 'sub_value',
                        'type' => 'int',
                        'defaultValue' => 1,
                    ],
                ],
            ],
            'get' => [
                'name' => 'get',
            ],
            'set' => [
                'name' => 'set',
                'param' => [
                    'value' => [
                        'name' => 'value',
                        'type' => 'int',
                    ],
                ],
            ],
            'cmpset' => [
                'name' => 'cmpset',
                'param' => [
                    'cmp_value' => [
                        'name' => 'cmp_value',
                        'type' => 'int',
                    ],
                    'set_value' => [
                        'name' => 'set_value',
                        'type' => 'int',
                    ],
                ],
            ],
            'wait' => [
                'name' => 'wait',
                'param' => [
                    'timeout' => [
                        'name' => 'timeout',
                        'type' => 'float',
                        'defaultValue' => 1.0,
                    ],
                ],
                'result' => 'bool',
            ],
            'wakeup' => [
                'name' => 'wakeup',
                'param' => [
                    'n' => [
                        'name' => 'n',
                        'type' => 'int',
                        'defaultValue' => 1,
                    ],
                ],
            ],
        ],
    ],
    'Swoole\\Memory\\Lock' => [
        'method' => [
            '__construct' => [
                'name' => '__construct',
                'param' => [
                    'type' => [
                        'name' => 'type',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                    'lockfile' => [
                        'name' => 'lockfile',
                        'type' => 'string',
                        'defaultValue' => '',
                    ],
                ],
            ],
            'lock' => [
                'name' => 'lock',
            ],
            'trylock' => [
                'name' => 'trylock',
            ],
            'unlock' => [
                'name' => 'unlock',
            ],
            'lock_read' => [
                'name' => 'lock_read',
                'result' => 'bool',
            ],
            'trylock_read' => [
                'name' => 'trylock_read',
            ],
            'lockwait' => [
                'name' => 'lockwait',
                'param' => [
                    'timeout' => [
                        'name' => 'timeout',
                        'type' => 'float',
                        'defaultValue' => 1.0,
                    ],
                ],
                'result' => 'bool',
            ],
        ],
    ],
    'Swoole\\Http\\Server' => [
        'method' => [
            'on' => [
                'name' => 'on',
            ],
            'start' => [
                'name' => 'start',
            ],
        ],
    ],
    'Swoole\\Http\\Request' => [
        'method' => [
            'rawContent' => [
                'name' => 'rawContent',
            ],
            'getData' => [
                'name' => 'getData',
                'result' => 'string',
            ],
        ],
    ],
    'Swoole\\Http\\Response' => [
        'method' => [
            'header' => [
                'name' => 'header',
                'param' => [
                    'key' => [
                        'name' => 'key',
                        'type' => 'string',
                    ],
                    'value' => [
                        'name' => 'value',
                        'type' => 'string',
                    ],
                    'ucwords' => [
                        'name' => 'ucwords',
                        'type' => 'bool',
                        'defaultValue' => true,
                    ],
                ],
            ],
            'cookie' => [
                'name' => 'cookie',
                'param' => [
                    'key' => [
                        'name' => 'key',
                        'type' => 'string',
                    ],
                    'value' => [
                        'name' => 'value',
                        'type' => 'string',
                        'defaultValue' => '',
                    ],
                    'expire' => [
                        'name' => 'expire',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                    'path' => [
                        'name' => 'path',
                        'type' => 'string',
                        'defaultValue' => '',
                    ],
                    'domain' => [
                        'name' => 'domain',
                        'type' => 'string',
                        'defaultValue' => '',
                    ],
                    'secure' => [
                        'name' => 'secure',
                        'type' => 'bool',
                        'defaultValue' => false,
                    ],
                    'httponly' => [
                        'name' => 'httponly',
                        'type' => 'bool',
                        'defaultValue' => false,
                    ],
                ],
            ],
            'status' => [
                'name' => 'status',
                'param' => [
                    'http_status_code' => [
                        'name' => 'http_status_code',
                        'type' => 'int',
                    ],
                ],
            ],
            'gzip' => [
                'name' => 'gzip',
                'param' => [
                    'level' => [
                        'name' => 'level',
                        'type' => 'int',
                        'defaultValue' => 1,
                    ],
                ],
            ],
            'redirect' => [
                'name' => 'redirect',
                'param' => [
                    'url' => [
                        'name' => 'url',
                        'type' => 'string',
                    ],
                    'http_code' => [
                        'name' => 'http_code',
                        'type' => 'int',
                        'defaultValue' => 302,
                    ],
                ],
            ],
            'write' => [
                'name' => 'write',
                'param' => [
                    'data' => [
                        'name' => 'data',
                        'type' => 'string',
                    ],
                ],
            ],
            'sendfile' => [
                'name' => 'sendfile',
                'param' => [
                    'filename' => [
                        'name' => 'filename',
                        'type' => 'string',
                    ],
                    'offset' => [
                        'name' => 'offset',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                    'length' => [
                        'name' => 'length',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                ],
            ],
            'end' => [
                'name' => 'end',
                'param' => [
                    'html' => [
                        'name' => 'html',
                        'type' => 'string',
                    ],
                ],
            ],
            'detach' => [
                'name' => 'detach',
            ],
            'upgrade' => [
                'name' => 'upgrade',
            ],
            'recv' => [
                'name' => 'recv',
                'result' => 'Swoole\\WebSocket\\Frame',
            ],
            'push' => [
                'name' => 'push',
                'param' => [
                    'data' => [
                        'name' => 'data',
                        'type' => 'mixed',
                    ],
                    'opcode' => [
                        'name' => 'opcode',
                        'type' => 'int',
                        'defaultValue' => 1,
                    ],
                    'finish' => [
                        'name' => 'finish',
                        'type' => 'bool',
                        'defaultValue' => true,
                    ],
                ],
            ],
            'create' => [
                'name' => 'create',
                'param' => [
                    'fd' => [
                        'name' => 'fd',
                        'type' => 'int',
                    ],
                ],
                'result' => 'Http\\Response',
            ],
        ],
    ],
    'Swoole\\WebSocket\\Server' => [
        'method' => [
            'push' => [
                'name' => 'push',
                'param' => [
                    'fd' => [
                        'name' => 'fd',
                        'type' => 'int',
                    ],
                    '$data' => [
                        'name' => '$data',
                    ],
                    'opcode' => [
                        'name' => 'opcode',
                        'type' => 'int',
                        'defaultValue' => 1,
                    ],
                    'finish' => [
                        'name' => 'finish',
                        'type' => 'bool',
                        'defaultValue' => true,
                    ],
                ],
            ],
            'exist' => [
                'name' => 'exist',
                'param' => [
                    'fd' => [
                        'name' => 'fd',
                        'type' => 'int',
                    ],
                ],
            ],
            'pack' => [
                'name' => 'pack',
                'param' => [
                    'data' => [
                        'name' => 'data',
                        'type' => 'string',
                    ],
                    'opcode' => [
                        'name' => 'opcode',
                        'type' => 'int',
                        'defaultValue' => 1,
                    ],
                    'finish' => [
                        'name' => 'finish',
                        'type' => 'bool',
                        'defaultValue' => true,
                    ],
                    'mask' => [
                        'name' => 'mask',
                        'type' => 'bool',
                        'defaultValue' => false,
                    ],
                ],
                'result' => 'string',
            ],
            'unpack' => [
                'name' => 'unpack',
                'param' => [
                    'data' => [
                        'name' => 'data',
                        'type' => 'string',
                    ],
                ],
                'result' => 'Swoole\\WebSocket\\Frame',
            ],
            'disconnect' => [
                'name' => 'disconnect',
                'param' => [
                    'fd' => [
                        'name' => 'fd',
                        'type' => 'int',
                    ],
                    'code' => [
                        'name' => 'code',
                        'type' => 'int',
                        'defaultValue' => 1000,
                    ],
                    'reason' => [
                        'name' => 'reason',
                        'type' => 'string',
                        'defaultValue' => '""',
                    ],
                ],
            ],
            'isEstablished' => [
                'name' => 'isEstablished',
                'param' => [
                    'fd' => [
                        'name' => 'fd',
                        'type' => 'int',
                    ],
                ],
            ],
        ],
    ],
    'Swoole\\Redis\\Server' => [
        'method' => [
            'setHandler' => [
                'name' => 'setHandler',
                'param' => [
                    'command' => [
                        'name' => 'command',
                        'type' => 'string',
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'type' => 'callable',
                    ],
                ],
            ],
            'format' => [
                'name' => 'format',
                'param' => [
                    'type' => [
                        'name' => 'type',
                        'type' => 'int',
                    ],
                    'value' => [
                        'name' => 'value',
                        'type' => 'mixed',
                        'defaultValue' => 'null',
                    ],
                ],
            ],
        ],
    ],
    'Swoole\\Process' => [
        'method' => [
            '__construct' => [
                'name' => '__construct',
            ],
            'start' => [
                'name' => 'start',
                'result' => 'int',
            ],
            'name' => [
                'name' => 'name',
                'param' => [
                    'process_name' => [
                        'name' => 'process_name',
                        'type' => 'string',
                    ],
                ],
            ],
            'exec' => [
                'name' => 'exec',
                'param' => [
                    'execfile' => [
                        'name' => 'execfile',
                        'type' => 'string',
                    ],
                    'args' => [
                        'name' => 'args',
                        'type' => 'array',
                    ],
                ],
            ],
            'write' => [
                'name' => 'write',
                'param' => [
                    'data' => [
                        'name' => 'data',
                        'type' => 'string',
                    ],
                ],
            ],
            'read' => [
                'name' => 'read',
                'param' => [
                    'buffer_size' => [
                        'name' => 'buffer_size',
                        'type' => 'int',
                        'defaultValue' => 8192,
                    ],
                ],
                'result' => 'string',
            ],
            'setTimeout' => [
                'name' => 'setTimeout',
                'param' => [
                    'timeout' => [
                        'name' => 'timeout',
                        'type' => 'float',
                    ],
                ],
            ],
            'setBlocking' => [
                'name' => 'setBlocking',
                'param' => [
                    'blocking' => [
                        'name' => 'blocking',
                        'type' => 'bool',
                        'defaultValue' => true,
                    ],
                ],
            ],
            'useQueue' => [
                'name' => 'useQueue',
                'param' => [
                    'msgkey' => [
                        'name' => 'msgkey',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                    'mode' => [
                        'name' => 'mode',
                        'type' => 'int',
                        'defaultValue' => 2,
                    ],
                    'capacity' => [
                        'name' => 'capacity',
                        'type' => 'int',
                        'defaultValue' => 8192,
                    ],
                ],
            ],
            'statQueue' => [
                'name' => 'statQueue',
            ],
            'freeQueue' => [
                'name' => 'freeQueue',
            ],
            'exportSocket' => [
                'name' => 'exportSocket',
                'result' => 'Swoole\\Coroutine\\Socket',
            ],
            'push' => [
                'name' => 'push',
                'param' => [
                    'data' => [
                        'name' => 'data',
                        'type' => 'string',
                    ],
                ],
            ],
            'pop' => [
                'name' => 'pop',
                'param' => [
                    'maxsize' => [
                        'name' => 'maxsize',
                        'type' => 'int',
                        'defaultValue' => 8192,
                    ],
                ],
            ],
            'close' => [
                'name' => 'close',
                'param' => [
                    'which' => [
                        'name' => 'which',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                ],
            ],
            'exit' => [
                'name' => 'exit',
                'param' => [
                    'status' => [
                        'name' => 'status',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                ],
            ],
            'kill' => [
                'name' => 'kill',
                'param' => [
                    '$pid' => [
                        'name' => '$pid',
                    ],
                    '$signo' => [
                        'name' => '$signo',
                        'defaultValue' => 'SIGTERM',
                    ],
                ],
            ],
            'wait' => [
                'name' => 'wait',
                'param' => [
                    'blocking' => [
                        'name' => 'blocking',
                        'type' => 'bool',
                        'defaultValue' => true,
                    ],
                ],
            ],
            'daemon' => [
                'name' => 'daemon',
                'param' => [
                    'nochdir' => [
                        'name' => 'nochdir',
                        'type' => 'bool',
                        'defaultValue' => false,
                    ],
                    'noclose' => [
                        'name' => 'noclose',
                        'type' => 'bool',
                        'defaultValue' => false,
                    ],
                ],
            ],
            'signal' => [
                'name' => 'signal',
                'param' => [
                    'signo' => [
                        'name' => 'signo',
                        'type' => 'int',
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'type' => 'callable',
                    ],
                ],
            ],
            'alarm' => [
                'name' => 'alarm',
                'param' => [
                    'interval_usec' => [
                        'name' => 'interval_usec',
                        'type' => 'int',
                    ],
                    'type' => [
                        'name' => 'type',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                ],
                'result' => 'bool',
            ],
            'setAffinity' => [
                'name' => 'setAffinity',
                'param' => [
                    'cpu_set' => [
                        'name' => 'cpu_set',
                        'type' => 'array',
                    ],
                ],
            ],
        ],
    ],
    'Swoole\\Process\\Pool' => [
        'method' => [
            '__construct' => [
                'name' => '__construct',
                'param' => [
                    'worker_num' => [
                        'name' => 'worker_num',
                        'type' => 'int',
                    ],
                    'ipc_type' => [
                        'name' => 'ipc_type',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                    'msgqueue_key' => [
                        'name' => 'msgqueue_key',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                    'enable_coroutine' => [
                        'name' => 'enable_coroutine',
                        'type' => 'bool',
                        'defaultValue' => false,
                    ],
                ],
            ],
            'on' => [
                'name' => 'on',
                'param' => [
                    'event' => [
                        'name' => 'event',
                        'type' => 'string',
                    ],
                    'function' => [
                        'name' => 'function',
                        'type' => 'callable',
                    ],
                ],
            ],
            'listen' => [
                'name' => 'listen',
                'param' => [
                    'host' => [
                        'name' => 'host',
                        'type' => 'string',
                    ],
                    'port' => [
                        'name' => 'port',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                    'backlog' => [
                        'name' => 'backlog',
                        'type' => 'int',
                        'defaultValue' => 2048,
                    ],
                ],
            ],
            'write' => [
                'name' => 'write',
                'param' => [
                    'data' => [
                        'name' => 'data',
                        'type' => 'string',
                    ],
                ],
            ],
            'start' => [
                'name' => 'start',
                'result' => 'bool',
            ],
            'getProcess' => [
                'name' => 'getProcess',
                'param' => [
                    '$worker_id' => [
                        'name' => '$worker_id',
                    ],
                ],
                'result' => '\Swoole\Process',
            ],
        ],
    ],
    'Swoole\\Client' => [
        'method' => [
            '__construct' => [
                'name' => '__construct',
                'param' => [
                    'sock_type' => [
                        'name' => 'sock_type',
                        'type' => 'int',
                    ],
                    'is_sync' => [
                        'name' => 'is_sync',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                    'key' => [
                        'name' => 'key',
                        'type' => 'string',
                    ],
                ],
            ],
            'set' => [
                'name' => 'set',
                'param' => [
                    'settings' => [
                        'name' => 'settings',
                        'type' => 'array',
                    ],
                ],
            ],
            'on' => [
                'name' => 'on',
                'param' => [
                    'event' => [
                        'name' => 'event',
                        'type' => 'string',
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'type' => 'mixed',
                    ],
                ],
            ],
            'connect' => [
                'name' => 'connect',
                'param' => [
                    'host' => [
                        'name' => 'host',
                        'type' => 'string',
                    ],
                    'port' => [
                        'name' => 'port',
                        'type' => 'int',
                    ],
                    'timeout' => [
                        'name' => 'timeout',
                        'type' => 'float',
                        'defaultValue' => 0.5,
                    ],
                    'flag' => [
                        'name' => 'flag',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                ],
            ],
            'isConnected' => [
                'name' => 'isConnected',
            ],
            'getSocket' => [
                'name' => 'getSocket',
            ],
            'getSockName' => [
                'name' => 'getSockName',
            ],
            'getPeerName' => [
                'name' => 'getPeerName',
            ],
            'getPeerCert' => [
                'name' => 'getPeerCert',
            ],
            'send' => [
                'name' => 'send',
                'param' => [
                    'data' => [
                        'name' => 'data',
                        'type' => 'string',
                    ],
                ],
            ],
            'sendto' => [
                'name' => 'sendto',
                'param' => [
                    'ip' => [
                        'name' => 'ip',
                        'type' => 'string',
                    ],
                    'port' => [
                        'name' => 'port',
                        'type' => 'int',
                    ],
                    'data' => [
                        'name' => 'data',
                        'type' => 'string',
                    ],
                ],
            ],
            'sendfile' => [
                'name' => 'sendfile',
                'param' => [
                    'filename' => [
                        'name' => 'filename',
                        'type' => 'string',
                    ],
                    'offset' => [
                        'name' => 'offset',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                    'length' => [
                        'name' => 'length',
                        'type' => 'int',
                        'defaultValue' => 0,
                    ],
                ],
            ],
            'recv' => [
                'name' => 'recv',
                'param' => [
                    'size' => [
                        'name' => 'size',
                        'type' => 'int',
                        'defaultValue' => 65535,
                    ],
                    'waitall' => [
                        'name' => 'waitall',
                        'type' => 'bool',
                        'defaultValue' => false,
                    ],
                ],
            ],
            'close' => [
                'name' => 'close',
                'param' => [
                    'force' => [
                        'name' => 'force',
                        'type' => 'bool',
                        'defaultValue' => false,
                    ],
                ],
            ],
            'sleep' => [
                'name' => 'sleep',
            ],
            'wakeup' => [
                'name' => 'wakeup',
            ],
            'enableSSL' => [
                'name' => 'enableSSL',
            ],
        ],
    ],
];