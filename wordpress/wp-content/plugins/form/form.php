<?php
/*
 * Plugin name: Отзывы
 */

add_shortcode('form',function(){
     include 'form.html';
     echo '<button type="submit"  name="create"  >Отправить</button>';
     include 'skript.html';
});
function rizwan(){
     if (isset($_POST['create'])) {
          $array = $_POST['name'].'<br>'.$_POST['age'].'<br>'.$_POST['Email'].
              '<br>'.$_POST['tel'].'<br>'.$_POST['course'];
          $post_data = array(
              'post_title'    => sanitize_text_field( $_POST['name'] ),
              'post_content'  => $array,
              'post_status'   => 'publish',
              'post_author'   => 1,
              'post_category' => array( 7,39 )
          );

          $post_id = wp_insert_post( $post_data );
          ?>
          <script>
               document.querySelector('#result').innerHTML = 'Отзыв отправлен';
          </script>
          <?php
          header('Location: http://childhood/wordpress/kontakty-i-otzyvy/ ');
          exit;
     }
}
add_action('init','rizwan');

?>


