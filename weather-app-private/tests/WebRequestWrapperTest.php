<?php
class WebRequestWrapperTest extends TestCase{
    public function testWebRequest(){
        $web_wrapper = new WebRequestWrapper();
        $web_wrapper->setRequestURL("https://www.google.com/");
        $web_wrapper->setParameters($parameters);
        $this->assertTrue($web_wrapper->sendRequest());
    }
    

}