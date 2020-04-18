<?php
ob_start();
define("1253440218:AAE7ambxN8Vx8WNUIYOp9JAl7Ghz92ZAsdE"); // Token o'rni
$admin = "1117383010"; // Admin ID

function bot($method,$datas=[]){
$url = http_build_query($datas);
return json_decode(file_get_contents("https://api.telegram.org/bot".Furqat1905."/".$method."?".$url));
}

// @KoderNet tomonidan @UZKOD kanali orqali tarqatildi.
$uzkod = json_decode(file_get_contents("php://input"));
$message = $uzkod->message;
$mid = $message->message_id;
$cid = $message->chat->id;
$tx = $message->text;
$uid = $message->from->id;
$name = str_replace(["[","]","(",")","*","_","`"],["","","","","","",""],$message->from->first_name);

$ch = $uzkod->channel_post;
$chmid = $ch->message_id;
$chid = $ch->chat->id;
$chuser = $ch->chat->username;
$chcaption = $ch->caption;
$chvideo = $ch->video;
$chaudio = $ch->audio;
$chtext = $ch->text;
$chphoto = $ch->photo;
$chdoc = $ch->document;
$chsticker = $ch->sticker;
$chanimation = $ch->animation;

if($tx == "/start"){
bot('sendMessage',[
'chat_id'=>$cid,
'parse_mode'=>"markdown",
'text'=>"✅* Ushbu bot kanallardagi postga avtomatik kanal reklamasini joylash uchun ishlab chiqildi!
📃 Bu botni kanalingizga admin qiling va kanalingizdagi postlarga avtomatik kanalingiz nomi qo'yiladi!😊*

📡 *Kanalimiz:* [ZEUS HACKERLAR](t.me/ZEUS_HACKERLAR)
🎓 *Dasturchi:* [ERKABOYEV FURQAT](https://t.me/FURQAT1905)",
'disable_web_page_preview'=>true,
]);
}

if ($chdoc or $chphoto or $chaudio or $chvideo or $chsticker or $chanimation){
bot('editMessageCaption',[
 'chat_id'=>$chid,
'message_id'=>$chmid,
'caption'=>"$chcaption\n\n⬇Bizga qo'shiling⬇\n📡 @$chuser\n🆔 $chmid",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"♻ Do'stlarga ulashish", "url"=>"https://t.me/share/url?url=https://telegram.me/$chuser/$chmid"]],
]
])
]);
}

if ($chtext){
bot('editmessagetext',[
 'chat_id'=>$chid,
'message_id'=>$chmid,
'text'=>"$chtext\n\n⬇Bizga qo'shiling⬇\n📡 @$chuser\n🆔 $chmid",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"♻ Do'stlarga ulashish", "url"=>"https://t.me/share/url?url=https://telegram.me/$chuser/$chmid"]],
]
])
]);
}

// @KoderNet tomonidan @UZKOD kanali orqali tarqatildi.
?>



