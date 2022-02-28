<?php
/**
 * @class - Error404 View
 * shows error if page not found
 */
class Error404View extends View{
    public function content(){
        return <<< CONTENT
        <div class="index-page content">
            <div class="wrapper">
            <p class="heading">Error 404</p>
            <div class="page-content">
            <p>Page not found. </p>
            </div>
            </div>
        </div>
  
        CONTENT;
    }

}