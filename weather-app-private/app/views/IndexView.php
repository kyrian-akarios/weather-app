<?php
include APP_PATH . "/views/View.php";
class IndexView extends View{
    //heredoc allows string interpolation
    //array value => {$row[$number]}
    public function content($errors = null, $args = null){
        if($errors){
            $error_output = <<< ERRORS


            ERRORS;
        }
        else{
            $error_output = "";
        }
        return <<< CONTENT
        <div class="index-page content">
            <div class="index-form">
            <div class="form-errors">
            {$error_output}
            </div>
            <form action="./weather" "geolocation_manual" method="post">
                <div class="form-element">
                    <input type="text" name="query">
                    <button type="submit">Submit</button>
                </div>
            </form>
            <form action="./weather" method="post" name="geolocation_auto">
                <input type="hidden" name="lat" value = "">
                <input type="hidden" name="long" value = "">
                <div class="form-element">
                    <input type="submit">Use my Location <i class="fa fa-2x location"></i></button>
                </div>
            </form>
            </div>
        </div>
        CONTENT;
    }

    public function scripts(){
        //send coords data to form
        //either value set via document event listener
        //or send via post and redirect

        //solving promises: change a variable outside of scope to a new value
        //put completion stuff in there too (like running subbmit())
        return <<< SCRIPT
        <script type="text/javascript">
          document.geolocation_auto.addEventListener("submit", (e)=>{
              e.preventDefault();
              if(navigator.geolocation){
                navigator.geolocation.getCurrentPosition(pos=>{
                    document.geolocation_auto.long.value = pos.coords.longitude;
                    document.geolocation_auto.lat.value = pos.coords.latitude;
                    document.geolocation_auto.submit();
                })
              }
              
          });
        </script>
        SCRIPT;
    }
}