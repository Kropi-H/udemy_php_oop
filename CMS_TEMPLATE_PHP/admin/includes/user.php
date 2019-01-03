<?php

class User extends Db_object {

    protected static $db_table = "users";

    protected static $db_table_fields = array('username', 'user_image', 'password', 'first_name', 'last_name', 'alternate_text');
    public $id;
    public $user_image;
    public $username;
    public $password;
    public $first_name;
    public $last_name;
    public $alternate_text;
    public $upload_directory = "images";
    public $image_placeholder = "http://placehold.it/400x400&text=image";

    public $tmp_path;


    public static function verify_user($username, $password){
        global $database;

        $username = $database->escape_string($username);
        $password = $database->escape_string($password);

        $sql = "SELECT * FROM " . self::$db_table . " WHERE";
        $sql .= " username = '{$username}' AND password = '{$password}'";
        $sql .= " LIMIT 1";
        $the_result_array = self::find_by_query($sql);

        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }

    public function image_user_placeholder(){
      return empty($this->user_image) ? $this->image_placeholder : $this->upload_directory .DS. $this->user_image;
    }

      public function save_user_and_image(){

        // if ($this->id){
        //   $this->update();
        // } else {

          if(!empty($this->errors)){
            return false;

          } if (empty($this->user_image) || empty($this->tmp_path)) {
            $this->errors[] = "The file was not available";
            return false;
          }

          $target_path = SITE_ROOT . DS. 'admin' . DS . $this->upload_directory . DS . $this->user_image;

          if(file_exists($target_path)){
            $this->error[] = "The file {$this->user_image} already exists!";
            return false;
          }

          if(move_uploaded_file($this->tmp_path, $target_path)){
              // if($this->create()){
              unset($this->tmp_path);
              return true;
              // }

          } else {

            $this->errors[] = "The file directory probably doesn't have promission";
            return false;
          }
        }
      // }

      public function delete_photo(){

        if($this->delete()){
          $target_path = SITE_ROOT .DS. 'admin' .DS. $this->image_user_placeholder();
          return unlink($target_path) ? true : false;

        } else {
          return false;
        }
      }

} // End class User

?>
