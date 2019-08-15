<?php

use Symfony\Component\VarExporter\VarExporter;

define('ROOT_PATH', __DIR__ . '/../');

require ROOT_PATH . 'vendor/autoload.php';

$config = require ROOT_PATH . 'config/class.php';

$collectFile = file_get_contents(ROOT_PATH . 'config/collect.json');
$collectData = json_decode($collectFile, true);

foreach ($collectData as $className => $class) {
    foreach ($class as $method) {
        $methodConf = [];
        [, $methodName] = preg_split('/(::|->)/', $method['method'], 2);
        $methodConf['name'] = $methodName;
        if (!empty($method['codeParam'])) {
            $codeParams = explode(',', $method['codeParam']);
            $codeParams = array_map('trim', $codeParams);
            foreach ($codeParams as $param) {
                $param = parseParam($param);
                $methodConf['param'][$param['name']] = $param;
            }
        }
        if (!empty($method['codeReturn'])) {
            $methodConf['result'] = parseReturn($method['codeReturn']);
        }
        $config[$className]['method'][$methodName] = $methodConf;
    }
}

exportArrayToFile($config, ROOT_PATH . 'config/class.php');

function parseParam(string $param)
{
    $param = trim($param);
    if (strpos($param, '=')) {
        // 存在默认值
        [$param, $default] = array_map('trim', explode('=', $param));
    }
    $param = trim($param);
    if (strpos($param, ' $')) {
        [$type, $param] = array_map('trim', explode(' $', $param));
    }

    if (isset($default) && isset($type)) {
        if ('int' === $type) {
            $default = (int) $default;
        } elseif ('float' === $type || 'double' === $type) {
            $default = (float) $default;
            $type = 'float';
        } elseif ('bool' === $type) {
            $default = 'true' == $default ? true : false;
        }
    } elseif (isset($default)) {
        if (is_int($default)) {
            $default = (int) $default;
        } elseif (is_float($default)) {
            $default = (float) $default;
        } elseif ('true' == $default || 'false' == $default) {
            $default = 'true' == $default ? true : false;
        }
    } elseif (isset($type)) {
        if ('double' === $type) {
            $type = 'float';
        }
    }


    $result = [];
    $result['name'] = $param;
    isset($type) && $result['type'] = $type;
    isset($default) && $result['defaultValue'] = $default;

    return $result;
}

function parseReturn(string $return)
{
    $return = trim($return);
    $return = ltrim($return, ':');
    $return = trim($return);

    return $return;
}

function exportArrayToFile(array $data, string $file)
{
    try {
        file_put_contents($file, "<?php\nreturn " . VarExporter::export($data) . ';');
    } catch (\Symfony\Component\VarExporter\Exception\ExceptionInterface $e) {
        return false;
    }
    return true;
}

function requireFile($file)
{
    require $file;
}

