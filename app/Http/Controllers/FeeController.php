<?php

namespace App\Http\Controllers;

use App\Fee;
use App\Mstate;
use \Morilog\Jalali\jDate;
use \Morilog\Jalali\jDateTime;
use Carbon\Carbon;

class FeeController extends Controller
{
	//
	public function control()
	{
		ini_set('error_reporting', E_ALL);
		define('API_KEY', '410263054:AAG3NdteTv3zsygmJsvVfIgkoTSSA-wzj_E');

		function makeHTTPRequest($method, $datas = [])
		{
			$url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($datas));
			$res = curl_exec($ch);
			if (curl_error($ch)) {
				var_dump(curl_error($ch));
			} else {
				return json_decode($res);
			}
		}

		$update = json_decode(file_get_contents('php://input'));
		// $today=(string)$today;

		\Log::info("Nothing CallBack Query");
		$chatId = $update->message->chat->id;
		$user_id = $update->message->from->id;
		$messageText = $update->message->text;
		// \Log::info($user_id);
		if ($messageText == "/start") {
			$state = Mstate::firstOrCreate([
				'user_id' => $user_id,
			]);
			makeHTTPRequest('sendMessage', [
				'chat_id' => $chatId,
				'text' => "یوزر آیدی شما ثبت شد " . $user_id
			]);
		} elseif ($messageText == "/setsheetprice") {

			makeHTTPRequest('sendMessage', [
				'chat_id' => $chatId,
				'text' => "یوزر آیدی شما: " . $user_id
			]);

			Mstate::where('user_id', $user_id)->update(['state' => 'setsheetprice']);

			$feeSheet = Fee::find(1);
			$value = $feeSheet->value;
			// $value=persianumber($value);
			$lastUpdated = $feeSheet->updated_at;
			$lastUpdated = new Carbon($lastUpdated);
			$lastUpdatedDate = $lastUpdated->toDateString();
			$lastUpdatedDate = jDateTime::strftime('Y-m-d', $lastUpdatedDate);
			$lastUpdatedDate = jDateTime::convertNumbers($lastUpdatedDate);

			makeHTTPRequest('sendMessage', [
				'chat_id' => $chatId,
				'text' => "آخرین تاریخ به روز رسانی قیمت ورق:\n" . $lastUpdatedDate . "\nقیمت ثبت شده:\n" . $value
			]);
			makeHTTPRequest('sendMessage', [
				'chat_id' => $chatId,
				'text' => "قیمت جدید را ارسال کنید"
			]);
		} else {
			// \Log::info("Helo");
			// exit();
			$state = Mstate::find($user_id)->state;
			if ($state == "setsheetprice") {
				// makeHTTPRequest('sendMessage',[
				// 	'chat_id'=>$chatId,
				// 	'text'=>"وضعیت شما: ".$state
				// ]);
				if (is_numeric($messageText)) {
					Fee::where('id', 1)->update(['value' => $messageText]);
					makeHTTPRequest('sendMessage', [
						'chat_id' => $chatId,
						'text' => "قیمت با موفقیت به روز شد"
					]);
				} else {
					makeHTTPRequest('sendMessage', [
						'chat_id' => $chatId,
						'text' => "قیمت باید عددی باشد. لطفا مجددا تلاش کنید"
					]);
				}
			}
		}
	}
}
