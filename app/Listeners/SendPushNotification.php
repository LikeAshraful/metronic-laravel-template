<?php

namespace App\Listeners;

use App\Events\PushNotificationEvent;
use App\Models\Driver;
use App\Models\Patient;
use App\Models\PushNotification;
use Illuminate\Support\Facades\Auth;

class SendPushNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param PushNotificationEvent $event
     * @return PushNotificationEvent
     */
    public function handle(PushNotificationEvent $event): PushNotificationEvent
    {
        // $user_id = Auth::guard('patient-api')->id();
        $user_id = $event->data['user_id'] ?? Auth::id();
        $user_type = $event->data['user_type'] ?? Auth::id();        

        $firebaseToken = PushNotification::when($user_id, function($q) use ($user_id){
                return $q->where('push_notifiable_id', $user_id);
            })->when($user_type, function($q) use ($user_type){
                return $q->where('push_notifiable_type', $user_type);
            })->whereNotNull('device_token')->pluck('device_token')->all();

        $SERVER_API_KEY = env('FIREBASE_SERVER_API_KEY');

        $data = [
            "registration_ids" => $firebaseToken,
            "notification" => [
                "title" => $event->data['title'] ?? 'Notification Title',
                "body" => $event->data['body'] ?? 'This is notification body',
            ]
        ];
        $dataString = json_encode($data);

        $headers = [
            'Authorization: key=' . $SERVER_API_KEY,
            'Content-Type: application/json',
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

        $response = curl_exec($ch);

        return $event;
    }
}
