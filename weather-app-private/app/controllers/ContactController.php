<?php
/**
 * @class - Contact Controller
 * Contact controller for sending mail and instantiating ContactView
 */
class ContactController extends Controller{
    public function get(){
        $view =  new ContactView();
        echo $view->createView();
    }

    public function post(){
        
        if(ContactFormValidator::validateName($_POST["name"]) 
        && ContactFormValidator::validateEmail($_POST["email"])
        && ContactFormValidator::validateMessage($_POST["message"])
        ){
            $mail_wrapper = new MailRequestWrapper();
            $mail_wrapper->setTo("mohammed4685@outlook.com");
            $mail_wrapper->setMessage("{$_POST['email']}" . "\n" . $_POST["message"]);
            $mail_wrapper->setSubject("Email from {$_POST['name']}");
            $result = $mail_wrapper->sendRequest();
            if($result){
                $view = new ContactView();
                $view->setArgs(["Email sent successfully"]);
                Logger::log(LogType::SUCCESS, "Mail sent successfully.");
                echo $view->createView();
            }
            else{
                $view = new ContactView();
                $view->setErrors(["Mail failed to send"]);
                Logger::log(LogType::ERROR, "Mail failed to send.");
                echo $view->createView();
            }
            
        }
        else{
            $view = new ContactView();
            $view->setErrors(["Error with fields - please check your fields."]);
            Logger::log(LogType::ERROR, "Mail failed to send.");
            echo $view->createView();
        }
    }
}