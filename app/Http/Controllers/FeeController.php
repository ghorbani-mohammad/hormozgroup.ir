<?php

namespace App\Http\Controllers;

use App\Fee;
use App\Mstate;
use \Morilog\Jalali\jDate;
use \Morilog\Jalali\jDateTime;
use \Morilog\Jalali\CalendarUtils;
use Carbon\Carbon;
use \Log;

class FeeController extends Controller
{
	//
	public function control()
	{
		ini_set('error_reporting', E_ALL);
		define('API_KEY', '614559366:AAGm0pMHznL3PYRYAsd4dn_-ZEyZb5KFMlM');

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
		} elseif ($messageText == "/setsheetfee") {
			// Log::info('set price');
			// makeHTTPRequest('sendMessage', [
			// 	'chat_id' => $chatId,
			// 	'text' => "یوزر آیدی شما: " . $user_id
			// ]);

			Mstate::where('user_id', $user_id)->update(['state' => 'setsheetprice']);

			$feeSheet = Fee::find(1);
			$value = $feeSheet->value;
			$lastUpdated = $feeSheet->updated_at;
			$lastUpdated = new Carbon($lastUpdated);
			$lastUpdatedDate = $lastUpdated->toDateString();
			$lastUpdatedDate = CalendarUtils::strftime('Y-m-d', $lastUpdatedDate);
			$lastUpdatedDate = CalendarUtils::convertNumbers($lastUpdatedDate);

			makeHTTPRequest('sendMessage', [
				'chat_id' => $chatId,
				'text' => "آخرین تاریخ به روز رسانی قیمت ورق:\n" . $lastUpdatedDate . "\nقیمت ثبت شده:\n" . $value
			]);
			makeHTTPRequest('sendMessage', [
				'chat_id' => $chatId,
				'text' => "قیمت جدید را ارسال کنید"
			]);
		} else {
			Log::info($user_id);
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
					makeHTTPRequest('sendMessage', [
						'chat_id' => $chatId,
						'text' => "✅قیمت ورق باs موفقیت به روز شد✅\nhttps://t.me/iv?url=https://www.hormozgroup.ir/%D9%84%DB%8C%D8%B3%D8%AA-%D9%82%DB%8C%D9%85%D8%AA"
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
