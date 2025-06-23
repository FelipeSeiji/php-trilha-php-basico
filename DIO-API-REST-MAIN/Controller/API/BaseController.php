<?php
class BaseController
{
    public function __call($name, $args)
    {
        $this -> sendOutput(404, "Method not found: " . $name);
    }

    protected function getStringParams()
    {
        parse_str($_SERVER['QUERY_STRING'], $query);
        return $query;
    }

    protected function sendOutput($data, $httpHeaders=array())
    {
        header_remove('Set-Cookie');
        if(is_array($httpHeaders) && count($httpHeaders))
        {
            foreach($httpHeaders as $httpHeaders)
            {
                header($httpHeaders);
            }
        }
        echo $data;
        exit;
    }
}