<?php
    include('autoload.php');

    $form = new Form([
         'method' => 'POST',
         'action' => 'form-handler.php'
    ]);

    $form->textbox([
         'name' => 'fullName', 
         'label' => 'Full name', 
         'required' => true, 
        'value' => ''
    ]);

     $form->hidden([
          'name' => 'userId', 
          'type' => 'hidden',
          'value' => 'hidden'
     ]);

    $form->select([ 
         'name' => 'gender', 
         'options' => [
             'm' => 'Male', 
             'f' => 'Female'
         ]
    ]);

    $form->email([ 
         'name' => 'email', 
         'required' => true 
    ]);
   

     $form->submit([ 
          'type' => 'submit', 
          'value' => 'submit'
     ]);



    
    echo $form->html();
    
