<?php
   // require 'lib/Factorial.php';

    class FormTest extends \PHPUnit\Framework\TestCase
    {
        public function setup() : void {
            $this->form  = new Form([
                 'method' => 'POST',
                 'action' => 'form-handler.php'
            ]);
        }


        public function test_form_with_textbox_fullname(){
            $this->form->textbox([
                     'name' => 'fullName', 
                     'label' => 'Full name', 
                     'required' => true, 
                    'value' => ''
                ]);
            $this->assertEquals($this->form->html(), '<form method="POST" action="form-handler.php"> <div><label>Full name</label><input type="text" name="fullName" value="" required></div> </form>');
        }




        public function test_form_with_select(){
            $this->form->select([ 
                     'name' => 'gender', 
                     'options' => [
                         'm' => 'Male', 
                         'f' => 'Female'
                     ]
                    ]);
            $this->assertEquals($this->form->html(), '<form method="POST" action="form-handler.php"> <div><label>gender</label><select name="gender"><option value="" selected></option> <option value="m">Male</option> <option value="f">Female</option> </select>.</div> </form>');

        }



        public function test_form_with_textbox_email(){
            $this->form->email([ 
                 'name' => 'email', 
                 'required' => true 
            ]);
            $this->assertEquals($this->form->html(), '<form method="POST" action="form-handler.php"> <div><label>email</label><input type="email" name="email" required></div> </form>');
        }



        public function test_form_with_fullname_data(){
            $this->form->textbox([
                     'name' => 'fullName', 
                     'label' => 'Full name', 
                     'required' => true, 
                     'value' => 'rola'
                ]);

            $this->assertSame($this->form->html(), '<form method="POST" action="form-handler.php"> <div><label>Full name</label><input type="text" name="fullName" value="rola" required></div> </form>');

        }


        public function test_form_btn()
        {
            $this->form->submit([
                'type' => 'submit', 
                'value' => 'submit'
           ]);
            $this->assertSame($this->form->html(), '<form method="POST" action="form-handler.php"> <div><input type="submit" value="submit"></div> </form>');
        }

    }
