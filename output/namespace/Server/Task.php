<?php

namespace Swoole\Server;

class Task
{

    public $data = null;

    public $id = -1;

    public $worker_id = -1;

    public $flags = 0;

    public function finish($data)
    {
    }


}
