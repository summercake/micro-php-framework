<?php
function smarty_block_test2($params, $content)
{
    $replace = $params['replace'];
    $maximum = $params['maximum'];
    if ($replace == 'true') {
        $content = str_replace('，', ',', $content);
        $content = str_replace('。', '.', $content);
    }
    $content = substr($content, 0, $maximum);
    return $content;
}
