<?php
//sends web reqs to other servers
//curl wrapper
class WebRequestWrapper{
    private string $request_url;
    private array $parameters;
    private string $method;
    private array $headers;
    public function __construct(){
        $request_url = "";
    }

    public function setRequestURL($url){
        $this->request_url = $url;
    }

    public function setParameters($parameters){
        $this->parameters = $parameters;
    }
    public function setMethod($method){
        $this->method = $method;
    }
    public function setHeaders($headers){
        $this->headers = $headers;
    }

    public function sendRequest(){
        $request_url = $this->request_url . "?" . http_build_query($this->parameters);
        $request = curl_init();
        curl_setopt($request, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($request, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($request, CURLOPT_URL ,$request_url);
        curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($request);
        curl_close($request);
        return $result;
    }
}