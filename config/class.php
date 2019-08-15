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
            'connections' => '\\Iterator',
            'ports' => 'Swoole\\Server\\Port',
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
                        'type' => 'Process',
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
                    '[     \'max_coroutine\'' => [
                        'name' => '[     \'max_coroutine\'',
                        'defaultValue' => '> 4096',
                    ],
                    ']' => [
                        'name' => ']',
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
                    '...$args' => [
                        'name' => '...$args',
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
                'result' => 'Coroutine\\Context',
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
                'result' => 'Coroutine\\Iterator',
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
];