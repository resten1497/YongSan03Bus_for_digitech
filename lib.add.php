<?php
/**
 * auto_reply
 *
 * @author Jang Joonho <jhjang1005@naver.com>
 * @copyright 2016 Jang Joonho
 * @license GPLv3
 */

/**
 * Execute before send message.
 *
 * @param mixed $data received data
 */
function pre_message_receive($data)
{

}

/**
 * Execute after send message.
 *
 * @param mixed $data received data
 */
function post_message_receive($data)
{

}

/**
 * Add friend by user key.
 *
 * @param string $user_key user key
 */
function add_friend($user_key)
{

}

/**
 * Delete friend by user key.
 *
 * @param string $user_key user key
 */
function delete_friend($user_key)
{

}

/**
 * Delete chat room by user key.
 *
 * @param string $user_key user key
 */
function delete_chat_room($user_key)
{

}

/**
 * Show message when media upload.
 */
function msg_media_upload()
{
    include_once __DIR__ . '/class/Keyboard.php';
    include_once __DIR__ . '/class/Message.php';

    echo new \kakao\Msg(new \kakao\Msg\Message("성공적으로 업로드 했습니다."), TRUE);
}

/**
 * Show message when undefined message called.
 *
 * @param string $content message
 */
function undefined_msg_operation($content)
{

    include_once __DIR__ . '/class/Keyboard.php';
    include_once __DIR__ . '/class/Message.php';
    include 'checkid.php';
    foreach($data as $value){
     if($value == $content){
     data_print($value);
    }
    }
   


    echo new \kakao\Msg(new \kakao\Msg\Message("[{$content}].\n 값을 찾을 수 없습니다."), TRUE);
}
function data_print($data){
ob_start();
 
include("cus_bus.php");
 
ob_end_clean();


 echo new \kakao\Msg(new \kakao\Msg\Message("[ ::".$name." 정거장 기준 용산 03번 도착예정시간:: ]
".$time." 을 기준으로"."
이번 정차 버스 : [ {$res_size1} ] 이며 , ".$res1."
다음 정차 버스 : [ {$res_size2} ] 이며 , ".$res2."",
		NULL,
		NULL), TRUE);

}