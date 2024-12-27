<?php 

//--------
ob_start();
//--------
$API_KEY = "5797187689:AAHmlFRXARmv68VVBObTCD4OafBy1MTjtao";
$admin = 1256293459;
//--------
define('API_KEY',$API_KEY);
function bot($method, $datas = []) {
    // بناء الرابط باستخدام التوكن والميثود
    $url = "http://eria.webredirect.org/api/index.php"; // رابط API الوسيط
    $postData = [
        'token' => API_KEY,     // توكن البوت
        'method' => $method,   // اسم الميثود
        'params' => $datas     // البراميترز المطلوبة
    ];

    // إعداد الاتصال
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);                      // رابط API الوسيط
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);            // استلام الرد
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData)); // تحويل البيانات إلى JSON
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Content-Type: application/json"
    ]);
    $res = curl_exec($ch); // تنفيذ الطلب

    // التحقق من الأخطاء
    if (curl_error($ch)) {
        var_dump(curl_error($ch));
    } else {
        return json_decode($res, true); // إرجاع الرد بتنسيق مصفوفة
    }

    curl_close($ch); // إغلاق الاتصال
}
function SendMessage($ChatId, $TextMsg)
	{
bot('sendMessage',[
	'chat_id'=>$ChatId,
	'text'=>$TextMsg,
	'parse_mode'=>"MarkDown"
	]);
	}
	function save($filename,$TXTdata)
	{
	$myfile = fopen("data/".$filename, "w") or die("Unable to open file!");
	fwrite($myfile, "$TXTdata");
	fclose($myfile);
	}
function SendPhoto($chatid,$photo,$keyboard,$caption){
	bot('SendPhoto',[
	'chat_id'=>$chatid,
	'photo'=>$photo,
	'caption'=>$caption,
	'reply_markup'=>$keyboard
	]);
	}
function Forward($KojaShe,$AzKoja,$KodomMSG)
{
    bot('ForwardMessage',[
        'chat_id'=>$KojaShe,
        'from_chat_id'=>$AzKoja,
        'message_id'=>$KodomMSG
    ]);
}
	
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id = $message->chat->id;
$admin = $get_token[1];
$dev = "@ABoTaim";
$ABoTaim = $message->from->first_name;
$message_id2 = $update->callback_query->message->message_id;
$text = $message->text;
$username = $message->from->username;
$chat_id2 = $update->callback_query->message->chat->id;
$from_id2 = $update->callback_query->message->chat->id;
$Name = $update->callback_query->from->first_name;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$repid = $update->message->reply_to_message->from->id;
$name = $message->from->first_name;
$fromid = $message->from->id;
$Name = $update->callback_query->from->first_name;
$fromid2 = $update->callback_query->message->chat->id;
$username = $message->from->username;
$message_id = $message->message_id;
$msgadmin = file_get_contents("msgadmin.txt");
$settings = file_get_contents("settings.txt");
$Fire = file_get_contents("Fire.txt");
$done = file_get_contents("done.txt");
$start = file_get_contents("start.txt");
	$_sticker = file_get_contents("settings/sticker.txt");
	$_video = file_get_contents("settings/video.txt");
	$_voice = file_get_contents("settings/voice.txt");
	$_file = file_get_contents("settings/file.txt");
	$_photo = file_get_contents("settings/photo.txt");
	$_music = file_get_contents("settings/music.txt");
	$_forward = file_get_contents("settings/forward.txt");
	$_joingp = file_get_contents("settings/joingp.txt");
	$photo = $update->message->photo;
	$video = $update->message->video;
	$sticker = $update->message->sticker;
	$file = $update->message->document;
	$music = $update->message->audio;
	$voice = $update->message->voice;
	$forward = $update->message->forward_from;
if(isset($update->callback_query)){
    $callbackMessage = '';
    var_dump(bot('answerCallbackQuery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>$callbackMessage
    ]));
    $chat_id = $update->callback_query->message->chat->id;
    $message_id = $update->callback_query->message->message_id;
    $data = $update->callback_query->data;
	$_sticker = file_get_contents("settings/sticker.txt");
	$_video = file_get_contents("settings/video.txt");
	$_voice = file_get_contents("settings/voice.txt");
	$_file = file_get_contents("settings/file.txt");
	$_photo = file_get_contents("settings/photo.txt");
	$_music = file_get_contents("settings/music.txt");
	$_forward = file_get_contents("settings/forward.txt");
	$_joingp = file_get_contents("settings/joingp.txt");


$name = $message->from->first_name;
$fromid = $message->from->id;
$Name = $update->callback_query->from->first_name;
$fromid2 = $update->callback_query->message->chat->id;
if($data=="admin"){
file_put_contents("msgadmin.txt","");
  file_put_contents("settings.txt","");
	bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
                'text' =>"- أهلاً بك ؛ [$Name](tg://user?id=$chat_id2)

إعداد بوت التواصل الخاص بك ⚙️ .

  ▫️ ↴ يمكنك تغيير إعدادات البوت و تخصيص الإعدادات كما تريد .🤞🏻

﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[اضغط هنا وتابع جديدنا ، 💛'](https://t.me/Allm_Telegram)",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
                'parse_mode'=>'MARKDOWN',
                       'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [
  ['text'=>"• أرسال توجيه ، 🔄 ",'callback_data'=>"sendfwdtoall"],       ['text'=>"• أرسال نص ، 🗣 ",'callback_data'=>"sendtoall"],
],
[
                        ['text'=>"• عدد المشتركين ، 👤",'callback_data'=>"member"],
['text'=>"- الاوامر ، 🛠️",'callback_data'=>"Nawras"]],
                        [
           ['text'=>"• حذف المحظورين 📛",'callback_data'=>"deban"],
['text'=>"• الاعدادات ⚙",'callback_data'=>"ol1"],
                        ],
                                 
                        [
['text'=>"• اعدادات رد تلقائي ، ♻ ",'callback_data'=>"ol2"]],
[
['text'=>"- المطور ، 🐬'",'url'=>"t.me/xr_3r"],
 ]]])]);}
elseif($data=="sendfwdtoall"){
    file_put_contents("msgadmin.txt","fortoall");
	bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"- أرسل ما تريد لأرسله بتوجيه للمشتركين ، 🔁'  ",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [
      ['text'=>"🔙 ",'callback_data'=>"admin"],
]]
])
]);
}
$memberblok =     file_put_contents("blocklist.txt","");
if($data == "blok"){
bot('editMessageText',[
'chat_id'=>$chat_id,
  'message_id'=>$message_id,
'text'=>" - عدد محظورين البوت ، $memberblok ⛔ ",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [
      ['text'=>"🔙 ",'callback_data'=>"admin"],
]]
])
]);
}
if($data == "Nawras"){
bot('editMessageText',[
'chat_id'=>$chat_id,
  'message_id'=>$message_id,
'text'=>"- اهلا بك مجددا هذه معلومات خاصة بك ، 🐳

{ حظر } ، مع الرد لحظر العضو ، 📛
{ الغاء الحظر }، مع الرد لالغاء حظر العضو ، ✅
{ معلومات } ، مع الرد لجلب معلومات العضو ، 🚸 ",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [
      ['text'=>"🔙 ",'callback_data'=>"admin"],
]]
])
]);
}
        elseif($data=="ol1"){
    file_put_contents("settings.txt","");
	bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"- اهلا بك ، [$Name](tg://user?id=$chat_id2)

• اليك قائمة الاعدادات  اختر ماتريده ليتم تنفيذه ، 👇💜

﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[اضغط هنا وتابع جديدنا ، 💛'](https://t.me/Allm_Telegram)",
     'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [
                        ['text'=>"• رسالة الترحيب ، 💭",'callback_data'=>"restart"],['text'=>"•حذف الترحيب ، 🎷",'callback_data'=>"deletstart"]],
[['text'=>"• وضع نبذة ، 📋",'callback_data'=>"refire"],['text'=>"• حذف النبذة ، 🗑",'callback_data'=>"delete"]],
[
 ['text'=>"• رسالة التسليم ، ☑",'callback_data'=>"redone"],['text'=>"• حذف الاستلام ، 🎨",'callback_data'=>"deletdon"]],

        [
      ['text'=>"🔙 ",'callback_data'=>"admin"],]]])]);}
       elseif($data=="deletstart"){
	bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"- تم حذف رسالة الترحيب ، ⛳",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"🔙",'callback_data'=>"admin"]],
]])
]);
unlink("start.txt");
}
  elseif($data=="delete"){
	bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"- تم حذف النبذة بنجاح  ، 🏈",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"🔙",'callback_data'=>"admin"]],
]])
]);
unlink("Fire.txt");
}
  elseif($data=="deletstart"){
	bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"- تم حذف رسالة الاستلام ، 🏆",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"🔙",'callback_data'=>"admin"]],
]])
]);
unlink("done.txt");
}
                 elseif($data=="ol2"){
    file_put_contents("settings.txt","");
	bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"
- اهلا بك ، [$Name](tg://user?id=$chat_id2)

• اليك قائمة اعدادات الرد التلقائي اختر ماتريده ليتم تنفيذه ، 👇🏼💚
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[اضغط هنا وتابع جديدنا ، 💛'](https://t.me/Allm_Telegram)",
    'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
                    [
                        ['text'=>"• وضع رد تلقائي ، ✅ ",'callback_data'=>"setword"],      ],

[
 ['text'=>"• حذف رد تلقائي ، ❎ ",'callback_data'=>"delword"],
],
[
                      ['text'=>"• كلمات الرد التلقائي ، ♻️ ",'callback_data'=>"listword"],
            ],
        [
      ['text'=>"🔙  ",'callback_data'=>"admin"],]]])]);}
elseif($data=="setword"){
    file_put_contents("settings.txt","setw1");
	bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"- ارسل الكلمه الاولى - السؤال 📝 ",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [
     ['text'=>"🔙 ",'callback_data'=>"ol2"],]]])]);}
         elseif($data=="delword"){
    file_put_contents("settings.txt","delw");
	bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"- ارسل الكلمه الاولى - السؤال 📝 ",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [
            ['text'=>"🔙 ",'callback_data'=>"ol2"],]]])]);}
         elseif($data=="listword"){
         $list = scandir("words");
for($i=0;$i<count($list);$i++) {
if( $list[$i] == "." or $list[$i] == ".." ){  
        continue;   
        }else{
$user = file_get_contents("list.txt");
    $members = explode("\n",$user);
    if (!in_array("• ".$list[$i],$members)){
      $add_user = file_get_contents("list.txt");
      $add_user .= "• ".$list[$i]."\n";
     file_put_contents("list.txt",$add_user);}}}
$listtt = file_get_contents("list.txt");
bot('editMessageText',[
  'chat_id'=>$chat_id,
    'message_id'=>$message_id,
'text'=>"• ⬇ ️كلمات الرد التلقائي •\n$listtt",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [
     ['text'=>"🔙 ",'callback_data'=>"ol2"],]]])]);
file_put_contents("list.txt", "");}
elseif($data=="sendtoall"){
    file_put_contents("msgadmin.txt","bc");
	bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"- أرسل ما تريد لأرسله للمشتركين ، 🗣'",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [
      ['text'=>"🔙 ",'callback_data'=>"admin"],]]])]);}
         elseif($data=="restart"){
    file_put_contents("settings.txt","start");
	bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"- أرسل ماتريد ليتم وضعه في رسالة الترحيب ، 👋🏻'",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [
      ['text'=>"🔙 ",'callback_data'=>"admin"],]]])]);}
      elseif($data=="refire"){
    file_put_contents("settings.txt","Fire");
	bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"- أرسل ماتريد ليتم وضعه نبذة عنك ، 📜'",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [
      ['text'=>"🔙 ",'callback_data'=>"admin"],]]])]);}
          elseif($data=="redone"){
    file_put_contents("settings.txt","done");
	bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"- أرسل ماتريد ليتم وضعه في رسالة التسليم ، ☑️' ",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [
    ['text'=>"🔙 ",'callback_data'=>"admin"],]]])]);}
         elseif($data=="listban"){
	$usercount = -1;
	$fp = fopen("blocklist.txt", 'r');
	while( !feof( $fp)) {
    		$line = fgets( $fp);
    		$usercount ++;	
			if ($line == '') {
				$usercount = $usercount-1;}}
	fclose( $fp);
	bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"• عدد المحظورين في هذا البوت ️:  ".$usercount,
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [
      ['text'=>"🔙 ",'callback_data'=>"admin"],]]])]);}
               elseif($data=="deban"){
    file_put_contents("blocklist.txt","");
	bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"- تم حذف جميع المحظورين  ، 🐋 ",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [
  ['text'=>"🔙  ",'callback_data'=>"admin"],]]])]);}
elseif($data=="member"){
    $user = file_get_contents("Member.txt");
    $member_id = explode("\n",$user);
    $member_count = count($member_id) -1;
	bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"- لديك $member_count مشترك ، 👤'",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [
      ['text'=>"🔙 ",'callback_data'=>"admin"],]]])]);}}
elseif($msgadmin == "bc"){
    	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"- تم ارسال رسالتك الى الكل بنجاح  ✅ ",]);
    file_put_contents("msgadmin.txt","none");
	$all_member = fopen( "Member.txt", "r");
		while( !feof( $all_member)) {
 			$user = fgets( $all_member);
			    	bot('sendmessage',[
    'chat_id'=>$user,
    'text'=>"$text",]);}}
if($settings=="start"){
    file_put_contents("start.txt","$text");
    file_put_contents("settings.txt","");
       bot('sendMessage',[ 
   'chat_id'=>$chat_id, 
 'text'=>"- تم حفظ رسالة الترحيب بنجاح  👋💛 ",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [
      ['text'=>"🔙 ",'callback_data'=>"admin"],]]])]);}
if($settings=="Fire"){
    file_put_contents("Fire.txt","$text");
    file_put_contents("settings.txt","");
       bot('sendMessage',[ 
   'chat_id'=>$chat_id, 
 'text'=>"- تم حفظ النبذة بنجاح ، 🗞' ",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [
      ['text'=>"🔙 ",'callback_data'=>"admin"],]]])]);}
if($settings=="done"){
    file_put_contents("done.txt","$text");
    file_put_contents("settings.txt","");
       bot('sendMessage',[ 
   'chat_id'=>$chat_id, 
 'text'=>"•  تم حفظ رسالة الاستلام بنجاح  🐬",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [
      ['text'=>"🔙 ",'callback_data'=>"admin"],]]])]);}
elseif ($msgadmin == "fortoall") { 
			    	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"- جاري ارسالها للكل  🗣 ",]);
file_put_contents("msgadmin.txt","none");
$forp = fopen( "Member.txt", 'r'); 
while( !feof( $forp)) { 
$fakar = fgets( $forp); 
Forward($fakar, $chat_id,$message_id);} 
   bot('sendMessage',[ 
   'chat_id'=>$chat_id, 
   'text'=>"- تم الارسال بنجاح  🚸 ", 
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [
    ['text'=>"🔙 ",'callback_data'=>"admin"],]]])]);}
if($text=="/start"){
if ($fromid != $admin){
        	$txxt = file_get_contents('../../Member-All-Bot.txt');
    $pmembersid= explode("\n",$txxt);
    if (!in_array($chat_id,$pmembersid)){
      $aaddd = file_get_contents('../../Member-All-Bot.txt');
      $aaddd .= $chat_id."\n";
		file_put_contents('../../Member-All-Bot.txt',$aaddd);}
$user = file_get_contents("Member.txt");
    $members = explode("\n",$user);
    if (!in_array($fromid,$members)){
      $add_user = file_get_contents("Member.txt");
      $add_user .= $fromid."\n";
     file_put_contents("Member.txt",$add_user);}
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
▫️مرحباً بك يا [$name](tg://user?id=$chat_id)

▫$start

〰〰〰〰〰〰〰〰〰〰〰〰〰〰
[🌐 اضغط هنا وتابع جديدنا 🌐](https://t.me/Allm_Telegram/)",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
 [['text'=>"~ صنع بوت تواصل خاص بك ، 📢'"]],
        [['text'=>"~ نبذة عن صاحب البوت ، 🔍'"]]
]])
]);
}

        else{$txxt = file_get_contents('../../Member-All-Bot.txt');
    $pmembersid= explode("\n",$txxt);
    if (!in_array($chat_id,$pmembersid)){
      $aaddd = file_get_contents('../../Member-All-Bot.txt');
      $aaddd .= $chat_id."\n";
		file_put_contents('../../Member-All-Bot.txt',$aaddd);}
bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"

- أهلاً بك ؛ [$name](tg://user?id=$chat_id)

إعداد بوت التواصل الخاص بك ⚙️ .

  ▫️ ↴ يمكنك تغيير إعدادات البوت و تخصيص الإعدادات كما تريد .🤞🏻

﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[اضغط هنا وتابع جديدنا ، 💛'](https://t.me/Allm_Telegram)",
'reply_to_message_id'=>$message->message_id,
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
                'parse_mode'=>'MARKDOWN',
                       'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [

                        ['text'=>"• أرسال توجيه ، 🔄 ",'callback_data'=>"sendfwdtoall"],       ['text'=>"• أرسال نص ، 🗣 ",'callback_data'=>"sendtoall"],
],
[
                        ['text'=>"• عدد المشتركين ، 👤",'callback_data'=>"member"],
['text'=>"- الاوامر ، 🛠️",'callback_data'=>"Nawras"]],
                        [
           ['text'=>"• حذف المحظورين 📛",'callback_data'=>"deban"],
['text'=>"• الاعدادات ⚙",'callback_data'=>"ol1"],
                        ],
                                 
                        [
['text'=>"• اعدادات رد تلقائي ، ♻ ",'callback_data'=>"ol2"]],
[
['text'=>"- المطور ، 🐬'",'url'=>"t.me/xr_3r"],
]]])]);}}
if($text == "~ صنع بوت تواصل خاص بك ، 📢'"){
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>" - عزيزي ؛ [$name](tg://user?id=$chat_id)

▫️يمكنك صنع بوت تواصل خاص بك وإرساله لمستخدمي التليجرام ، 👥'

▪️وتلقي الرسائل ، الصور ، البصمات ، الملفات ، وغيرها بشكل سري مع متابعينك ، 🤞🏻'

﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[اضغط هنا وتابع جديدنا ،💚'](https://t.me/Allm_Telegram) ",
'reply_to_message_id'=>$message->message_id,
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
                'parse_mode'=>'MARKDOWN',
                       'reply_markup'=>json_encode([
                'inline_keyboard'=>[
[['text'=>"اضغط هنا لصنع بوتك التواصل ، 📢",'url'=>"t.me/TW00_Bot?start"]],
[['text'=>"- المطور ، ⚓",'url'=>"t.me/xr_3r"]],
]])
]);
}
if($text == "~ نبذة عن صاحب البوت ، 🔍'"){
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"▫
 $Fire
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[- اضغط هنا وتابع جديدنا ، 🧡'](https://t.me/Allm_Telegram)",
'reply_to_message_id'=>$message->message_id,
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
                'parse_mode'=>'MARKDOWN',
                       'reply_markup'=>json_encode([
                'inline_keyboard'=>[
[['text'=>"- المطور ، ⚓",'url'=>"https://t.me/xr_3r"]],
]])
]);
} 
$list = file_get_contents("blocklist.txt");
$rep = $message->reply_to_message->forward_from; 
$fname = $rep->first_name; 
$lname = $rep->last_name; 
$user = $rep->username; 
$id = $rep->id; 
$sticker = $message->sticker;
$sticker_id = $message->sticker->file_id;
$voice = $message->voice;
$voice_id = $message->voice->file_id;
$file = $message->document;
$file_id = $message->document->file_id;
$audio = $message->audio;
$audio_id = $message->audio->file_id;
$video = $message->video;
$video_id = $message->video->file_id;
$contact = $message->contact;
$contact_id = $message->contact->file_id;
function objectToArrays($object){
        if (!is_object($object) && !is_array($object)) {
            return $object;}
        if (is_object($object)) {
            $object = get_object_vars($object);}
        return array_map("objectToArrays", $object);}
  $userbot = `{"ok":true,"result":{"id":5797187689,"is_bot":true,"first_name":"\ud83d\udd77\ud83d\udd78","username":"ucxsbot","can_join_groups":true,"can_read_all_group_messages":false,"supports_inline_queries":false,"can_connect_to_business":false,"has_main_web_app":false}}`;
    $resultb = objectToArrays($userbot);
  $username_bot = $resultb["result"]["username"];
    $id_bot = $resultb["result"]["id"];

if($text && $chat_id != "$admin" && $text != "/start" && $text != "حظر" && $text != "الغاء الحظر" && $text !="معلومات" && $text !="~ صنع بوت تواصل خاص بك ، 📢'" && $text !="~ نبذة عن صاحب البوت ، 🔍'" && $fromid != $admin && strpos($list , "$fromid") === false && file_exists("words/$text") ===false && $text != "/start media"){
Forward("$admin",$chat_id,$message_id); 
  bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• تم ارسال رسالتك بنجاح ، 🤞🏼💚
• تابع قناة البوت من فضلك ؛ @Alstorh1 ، 📌",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- لصنع بوت ، 🔖","url"=>"https://telegram.me/Tw00_Bot"]],
[["text"=>"- تابع جديدنا ، 🚀","url"=>"https://t.me/Allm_Telegram"]]]])]);} 
if($photo && $chat_id != "$admin" && $fromid != $admin && strpos($list , "$fromid") === false){
if ($fromid != $admin && $_photo != "⛔️") {
Forward("$admin",$chat_id,$message_id); 
  bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"- تم ارسال رسالتك بنجاح ، 🤞🏼💚
• تابع قناة البوت من فضلك ؛ @Alstorh1 ، 📌",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- لصنع بوت ، 🔖","url"=>"https://telegram.me/TW00_Bot"]],
[["text"=>"- تابع جديدنا ، 🚀","url"=>"https://t.me/Allm_Telegram"]]]])]);} }
if($contact && $chat_id != "$admin" && $fromid != $admin && strpos($list , "$fromid") === false){
Forward("$admin",$chat_id,$message_id); 
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'reply_to_message_id'=>$message_id,
   'text'=>"$done",
   'parse_mode'=>"Markdown"]);}if($audio && $chat_id != "$admin" && $fromid != $admin && strpos($list , "$fromid") === false){
if ($fromid != $admin && $_music != "⛔️") {
Forward("$admin",$chat_id,$message_id); 
  bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"- تم ارسال رسالتك بنجاح ، 🤞🏼💚
• تابع قناة البوت من فضلك ؛ @Alstorh1 ، 📌",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- لصنع بوت ، 🔖","url"=>"https://telegram.me/Tw00_Bot"]],
[["text"=>"- تابع جديدنا ، 🚀","url"=>"https://t.me/Allm_Telegram"]]]])]);}}
if($file && $chat_id != "$admin" && $fromid != $admin && strpos($list , "$fromid") === false){
if ($fromid != $admin && $_file != "⛔️") {
Forward("$admin",$chat_id,$message_id); 
  bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"- تم ارسال رسالتك بنجاح ، 🤞🏼💚
• تابع قناة البوت من فضلك ؛ @Alstorh1 ، 📌",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- لصنع بوت ، 🔖","url"=>"https://telegram.me/TW00_Bot"]],
[["text"=>"- تابع جديدنا ، 🚀","url"=>"https://t.me/Allm_Telegram"]]]])]);}}
if($update->message->new_chat_member){
if($_joingp == "⛔️") {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"• لا يمكنك اضافتي للمجموعات

بسبب منع البوت من الدخول الى المجموعات 🚫"
]);
bot('kickChatMember', [
'chat_id'=>$chat_id,
'user_id'=>$id_bot
]);}}
if($voice&& $chat_id != "$admin" && $fromid != $admin && strpos($list , "$fromid") === false){
		if ($fromid != $admin && $_voice != "⛔️") {
Forward("$admin",$chat_id,$message_id); 
  bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"- تم ارسال رسالتك بنجاح ، 🤞🏼💚
• تابع قناة البوت من فضلك ؛ @Alstorh1 ، 📌",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- لصنع بوت ، 🔖","url"=>"https://telegram.me/Tw00_Bot"]],
[["text"=>"- تابع جديدنا ، 🚀","url"=>"https://t.me/Allm_Telegram"]]]])]);}}
if($video && $chat_id != "$admin" && $fromid != $admin && strpos($list , "$fromid") === false){
if ($fromid != $admin && $_video != "⛔️") {
Forward("$admin",$chat_id,$message_id); 
  bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>" - تم ارسال رسالتك بنجاح ، 🤞🏼💚
• تابع قناة البوت من فضلك ؛ @Alstorh1 ، 📌",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- لصنع بوت ، 🔖","url"=>"https://telegram.me/Tw00_Bot"]],
[["text"=>"- تابع جديدنا ، 🚀","url"=>"https://t.me/Allm_Telegram"]]]])]);}}
if($sticker && $chat_id != "$admin" && $fromid != $admin && strpos($list , "$fromid") === false){
  if ($_sticker != "⛔️" && $fromid != $admin) {
Forward("$admin",$chat_id,$message_id); 
 bot('sendmessage',[
    'chat_id'=>$admin,
       'reply_to_message_id'=>$message_id + 1,
        'text'=>"الملصق مرسل من : @$username"
  ]);
  bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"- تم ارسال رسالتك بنجاح ، 🤞🏼💚
• تابع قناة البوت من فضلك ؛ @Alstorh1 ، 📌",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"- لصنع بوت ، 🔖","url"=>"https://telegram.me/Tw00_Bot"]],
[["text"=>"- تابع جديدنا ، 🚀","url"=>"https://t.me/Allm_Telegram"]]]])]);}}
$rpto = $update->message->reply_to_message->forward_from->id;
if($text && $message->reply_to_message && $chat_id == "$admin" && $rpto != "" && $fromid == $admin && $text!="معلومات" && $text!="حظر" && $text!="الغاء الحظر"){
bot('sendMessage',[
'chat_id'=>$rpto,
'text'=>"$text"]);}
$photo0_id = $update->message->photo[0]->file_id;
$caption = $update->message->caption;
if($photo0_id != null && $message->reply_to_message && $chat_id == "$admin"){
	SendPhoto($rpto,$photo0_id,'',$caption);}
if($voice && $message->reply_to_message && $chat_id == "$admin"){
bot('sendvoice',[
'chat_id'=>$rpto,
'voice'=>$voice_id]);}
if($contact && $message->reply_to_message && $chat_id == "$admin"){
bot('sendcontact',[
'chat_id'=>$rpto,
'contact'=>$contact_id]);}
if($audio && $message->reply_to_message && $chat_id == "$admin"){
bot('sendaudio',[
'chat_id'=>$rpto,
'audio'=>$audio_id]);}
if($file && $message->reply_to_message && $chat_id == "$admin"){
bot('senddocument',[
'chat_id'=>$rpto,
'document'=>$file_id]);}
if($video && $message->reply_to_message && $chat_id == "$admin"){
bot('sendvideo',[
'chat_id'=>$rpto,
'video'=>$video_id]);}
if($sticker && $message->reply_to_message && $chat_id == "$admin"){
bot('sendsticker',[
'chat_id'=>$rpto,
'sticker'=>$sticker_id]);}
if($rep && $text=="معلومات"){
bot("sendMessage",[
'chat_id'=>$chat_id,
'text'=>
" - معلومات العضو ↘️ •
\n". "- الايدي : `$id` \n- الاسم الاول : $fname \n- الاسم الثاني : $lname\n - المعرف : @$user ",
'parse_mode'=>"Markdown"]);}
	if ($message->reply_to_message && $text== "حظر") {
			$myfile2 = fopen("blocklist.txt", "a") or die("Unable to open file!");	
			fwrite($myfile2, "$id\n");
			fclose($myfile2);
			SendMessage($chat_id,"- تم حظر هذا المستخدم بنجاح ، 📛'");
			SendMessage($id,"- عزيزي لقد تم حظرك من قبل صاحب البوت ، 🚫");}
		if($message->reply_to_message && $text=="الغاء الحظر"){
			$newlist = str_replace($id,"",$list);
			file_put_contents("blocklist.txt",$newlist);
			SendMessage($chat_id,"- تم الغاء حظر هذا المستخدم بنجاح ، ☑️'");
			SendMessage($id,"- عزيزي لقد تم الغاء الحظر عنك من قبل صاحب البوت ، ✅");}
  if($settings == "setw1"){
   file_put_contents("words/$text","");
       file_put_contents("settings.txt","setw2");
          file_put_contents("settings2.txt","$text");
  bot('sendMessage',[
         'chat_id'=>$chat_id,
         'text'=>"- تم حفظ الكلمه الاولى - السؤال / الان ارسل الكلمه الثانيه - الجواب 📝 •"]);}
 if($settings== "setw2"){
      file_put_contents("settings.txt","");
      $word = file_get_contents("settings2.txt");
           file_put_contents("words/$word","$text");
      bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"- تم حفظ الكلمه الثانيه - الجواب 📝 •",
  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [
            ['text'=>"• الرجوع 🔄 •",'callback_data'=>"ol2"],
        ]]])]);}
  if($settings== "delw"){
     unlink("words/$text");
          file_put_contents("settings.txt","");
      bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"- تم حذف الرساله بنجاح تام 🗑 •",
  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [
  ['text'=>"• الرجوع 🔄 •",'callback_data'=>"ol2"],
        ]]])]);}
if (file_exists("words/$text") && $chat_id != "$admin") {
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'reply_to_message_id'=>$message_id,
   'text'=>file_get_contents("words/$text"),
   'parse_mode'=>"Markdown"
]);}

if($text == "/start") {

bot( sendmessage ,[
 chat_id =>$chat_id, 
 text =>"
 ",
 reply_to_message_id =>$message->message_id,
]);
bot( sendMessage ,[
 chat_id =>$sudo,
 text =>"تم دخول شخص الى البوت الخاص بك 🔰،

📮┇معلوماته في الأسفل 👋
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
🔰┇الاسم ،  [$name](tg://user?id=$chat_id) ؛ 
📌┇الايدي ، [$from_id](tg://user?id=$chat_id) ؛ 
👁‍🗨┇المعرف ،  [@$username](tg://user?id=$chat_id) ؛ 

﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 disable_web_page_preview => true ,
 parse_mode =>"Markdown",
]);
}


?>

