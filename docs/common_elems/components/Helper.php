<?php
class Helper
{
    public function backtrace()
    {
        $back = debug_backtrace();
        $infos = [];
        foreach ($back as $key => $value) {
            $infos[$key]['file'] = isset($value['file']) ? $value['file'] : '';
            $infos[$key]['line'] = isset($value['line']) ? $value['line'] : '';
            $infos[$key]['type'] = isset($value['type']) ? $value['type'] : '';
            $infos[$key]['class'] = isset($value['class']) ? $value['class'] : '';
            $infos[$key]['function'] = isset($value['function']) ? $value['function'] : '';
        }
        print_r($infos);
    }
}
