<?php

/**
 * MCE Editor Tweaks
 *
 * @package WordPress
 * @subpackage Elegant WPExplorer Theme
 * @since Elegant 1.0
 */
function save_cpt_metadata($post_id) {

    /*
      die(var_dump($post_id));

      if ($_POST["post_type"] != 'video' || $post_id != 94) {
      return;
      }
     */



    if ($_POST["post_type"] == 'video') {
        $thumbnail = "";
        if (isset($_POST["fields"]["field_54fdc8bbe3151"]) && isset($_POST["fields"]["field_54fe00eecc47a"])) {
            $video_id = $_POST["fields"]["field_54fdc8bbe3151"];
            $video_thumbnail = $_POST["fields"]["field_54fe00eecc47a"];
            if (!empty($video_id) && empty($video_thumbnail)) {
                $data = file_get_contents('https://api.wistia.com/v1/medias/' . $video_id . '.json?api_password=' . API_PASSWORD);
                $json = json_decode($data, true);
                if (isset($json["thumbnail"]["url"])) {
                    $url = $json["thumbnail"]["url"];
                    $image = explode("?image_crop_resized", $url);
                    $image_uri = $image[0] . "?image_crop_resized=250x140";
                    $thumbnail = $image_uri;
                }
                $field_key = "field_54fe00eecc47a";
                $value = $thumbnail;
                //update_field($field_key, $value, $post_id);
                update_post_meta($post_id, 'video_thumbnail', $thumbnail);
                //$_POST["fields"]["field_54fe00eecc47a"] = $value;
            }
        }
    }

    if ($post_id == 94) {
        /*
          +===================================+
          | Left Video                        |
          +===================================+
         */

        $thumbnail = "";
        if (isset($_POST["fields"]["field_550c4df3e7ff7"]) && isset($_POST["fields"]["field_550c4e894b68b"])) {
            $left_video_id = $_POST["fields"]["field_550c4df3e7ff7"];
            $left_video_thumbnail = $_POST["fields"]["field_550c4e894b68b"];
            if (!empty($left_video_id) && empty($left_video_thumbnail)) {
                $data = file_get_contents('https://api.wistia.com/v1/medias/' . $left_video_id . '.json?api_password=' . API_PASSWORD);
                $json = json_decode($data, true);
                if (isset($json["thumbnail"]["url"])) {
                    $url = $json["thumbnail"]["url"];
                    $image = explode("?image_crop_resized", $url);
                    $image_uri = $image[0] . "?image_crop_resized=250x140";
                    $thumbnail = $image_uri;
                }
                $value = $thumbnail;
                //die(var_dump($value));
                update_post_meta($post_id, 'left_video_thumbnail', $thumbnail);
            }
        }
        /*
          +===================================+
          | Middle Vídeo                      |
          +===================================+
         */
        $thumbnail = "";
        if (isset($_POST["fields"]["field_550c4e02e7ff8"]) && isset($_POST["fields"]["field_550c4eceec610"])) {
            $middle_video_id = $_POST["fields"]["field_550c4e02e7ff8"];
            $middle_video_thumbnail = $_POST["fields"]["field_550c4eceec610"];
            if (!empty($middle_video_id) && empty($middle_video_thumbnail)) {
                $data = file_get_contents('https://api.wistia.com/v1/medias/' . $middle_video_id . '.json?api_password=' . API_PASSWORD);
                $json = json_decode($data, true);
                if (isset($json["thumbnail"]["url"])) {
                    $url = $json["thumbnail"]["url"];
                    $image = explode("?image_crop_resized", $url);
                    $image_uri = $image[0] . "?image_crop_resized=250x140";
                    $thumbnail = $image_uri;
                }
                $value = $thumbnail;
                update_post_meta($post_id, 'middle_video_thumbnail', $thumbnail);
            }
        }
        /*
          +===================================+
          | Right Vídeo                       |
          +===================================+
         */
        $thumbnail = "";
        if (isset($_POST["fields"]["field_550c4e2be7ff9"]) && isset($_POST["fields"]["field_550c4ee2e1341"])) {
            $right_video_id = $_POST["fields"]["field_550c4e2be7ff9"];
            $right_video_thumbnail = $_POST["fields"]["field_550c4ee2e1341"];
            if (!empty($right_video_id) && empty($right_video_thumbnail)) {
                $data = file_get_contents('https://api.wistia.com/v1/medias/' . $right_video_id . '.json?api_password=' . API_PASSWORD);
                $json = json_decode($data, true);
                if (isset($json["thumbnail"]["url"])) {
                    $url = $json["thumbnail"]["url"];
                    $image = explode("?image_crop_resized", $url);
                    $image_uri = $image[0] . "?image_crop_resized=250x140";
                    $thumbnail = $image_uri;
                }
                $value = $thumbnail;
                update_post_meta($post_id, 'right_video_thumbnail', $thumbnail);
            }
        }
    }
}

add_action('save_post', 'save_cpt_metadata');
