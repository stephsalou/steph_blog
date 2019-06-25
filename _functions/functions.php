<?php


/**
 * Created by PhpStorm.
 * User: steph
 * Date: 06/04/2019
 * Time: 09:00
 */

function file_input($name, $file_path =USER_FILE_PATH)
{
    $upload_stat = true;
    $image = checkInput($_FILES[$name]['name']);
    $imagePath = $file_path . basename($image);
    $imageExtension = pathinfo($imagePath, PATHINFO_EXTENSION);
    if ($imageExtension != 'jpg' && $imageExtension != 'jpeg' && $imageExtension != 'png' && $imageExtension != 'gif' && $imageExtension != 'JPG' && $imageExtension != 'JPEG' && $imageExtension != 'PNG' && $imageExtension != 'GIF') {
        $result['message'] = "<div class=\"alert alert-error\">le format de votre fichier est invalide <i class=\"fas fa-user-times\" >&times</i></div>";
        $upload_stat = false;
        $result['status'] = $upload_stat;
    }
    if (file_exists($imagePath)) {
        $result['message'] = "<div class=\"alert alert-error\"> votre fichier existe deja <i class=\"fas fa-user-times\" >&times</i></div>";
        $upload_stat = false;
        $result['status'] = $upload_stat;
    }
    if ($_FILES[$name]['size'] > 500000) {
        $result['message'] = "<div class=\"alert alert-error\"> votre fichier est trop volumineux <i class=\"fas fa-user-times\" >&times</i></div>";
        $upload_stat = false;
        $result['status'] = $upload_stat;
    }

    if ($upload_stat) {
        if (!move_uploaded_file($_FILES[$name]['tmp_name'], $imagePath)) {
            $result['message'] = "<div class=\"alert alert-error\">l'upload de votre fichier a echouer <i class=\"fas fa-user-times\" >&times</i></div>";
            $result['status'] = false;
        } else {
            $result['status'] = $upload_stat;
            $result['name'] = $image;
        }

    }
    return $result;
}

function checkArray(array $arr)
{

    foreach ($arr as $key => $value) {
        if(is_array($value)){
            foreach ($value as $k=>$v){
                if(is_array($v)){
                    foreach($v as $keys =>$values){
                        $v[$keys]=checkInput($values);
                    }
                }else{
                    $value[$k]=checkInput($v);
                }

            }
        }else{
        $arr[$key] = checkInput($value);
        }
    }
    return $arr;

}

function checkInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function toBase64($file_name)
{
    $path = $_FILES[$file_name]['tmp_name'];
    $mime = mime_content_type($path);
    $data = file_get_contents($path);
    $base64 = 'data:' . $mime . ';base64,' . base64_encode($data);
    return $base64;
}

function crypt_steph($string)
{
    $string = md5($string);
    $string = crypt($string, '$5$rounds=5000$charteuse$');
    $string = sha1($string);
    $string = hash('gost', $string);
    return $string;
}

/**
 * debug plus lisible
 * @param $var
 * @return false|string
 */
function debug($var)
{
    ob_start();
    echo '<div style="background-color:#2b2b2b;color:#007d00">';
    echo '<pre style="color:#007d00">';
    var_dump($var);
    echo '</pre>';
    echo '</div>';
    die();
    return ob_get_clean();
}

function intervale(array $arr,$element,$nbelement){}