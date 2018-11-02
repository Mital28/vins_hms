<?php

namespace euro_hms\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Storage;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
   use Queueable, SerializesModels;
   
   public $email_details;
   public $view_name;
   public $from_email;
   public $subject = "Vins hms-report";

   /**
    * Create a new message instance.
    *
    * @return void
    */
   public function __construct($email_details, $subject, $view_name, $from_email = null, $attachment = null)
   {
    
       $this->subject = $subject;
       $this->view_name = $view_name;
       $this->email_details = $email_details;
       $this->from_email = $from_email;
       $this->attach_path = $attachment;
   }

   /**
    * Build the message.
    *
    * @return $this
    */
   public function build()
   {  
       if (!empty($this->from_email)) { 
           return $this->view($this->view_name)->from($this->from_email)->with('data', $this->email_details);
       }
       return $this->view($this->view_name);
   }
}