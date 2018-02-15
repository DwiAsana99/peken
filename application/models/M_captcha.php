<?php
/**
 *
 */
class M_captcha extends CI_Model{

  // membuat captcha
    public function generate_captcha(){
      /* Setup vals to pass into the create_captcha function */
      $vals = array(
       //  'word'          => 'Random word',
         'img_path'      => './captcha/',
         'img_url'       => base_url('captcha'),
         'font_path'     => './path/to/fonts/texb.ttf',
         'img_width'     => '170',
         'img_height'    => 70,
         'expiration'    => 7200,
         'word_length'   => 5,
         'font_size'     => 20,
         'img_id'        => 'Imageid',
         'pool'          => '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ',

         // White background and border, black text and red grid
         'colors'     => array('background' => array(255, 255, 255),
                               'border'     => array(255, 255, 255),
                               'text'       => array(0, 0, 0),
                               'grid'       => array(255, 40, 40)
                              )
      );
      $cap = create_captcha($vals);
      return $cap;
    }

}

?>
