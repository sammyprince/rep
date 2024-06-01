<?php

// app/Http/Controllers/TheScheduleController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Firebase\JWT\JWT;

class TheScheduleController extends Controller
{
    protected $jitsiServer = "https://live.acemastars.co.uk/"; // Replace with your Jitsi server URL
    protected $jitsiAppId = "your_app_id"; // Replace with your Jitsi app ID
    protected $jitsiAppSecret = "your_app_secret"; // Replace with your Jitsi app secret

    public function acceptAppointment(Request $request, $appointmentId)
    {
        $appointment = Appointment::find($appointmentId);

        if (!$appointment) {
            return response()->json(['error' => 'Appointment not found'], 404);
        }

        // Generate a unique meeting ID
        $meetingId = 'meet-' . uniqid();

        // Generate JWT for the moderator (lawyer)
        $token = $this->generateJitsiToken($appointment->lawyer->name);

        // Construct the meeting links
        $moderatorLink = "{$this->jitsiServer}/$meetingId?jwt=$token&userInfo.displayName={$appointment->lawyer->name}";
        $userLink = "{$this->jitsiServer}/$meetingId?userInfo.displayName={$appointment->customer_name}";

        // Save the links to the appointment
        $appointment->meeting_id = $meetingId;
        $appointment->moderator_link = $moderatorLink;
        $appointment->user_link = $userLink;
        $appointment->appointment_status_code = 2; // Accepted status
        $appointment->save();

        // Optionally, send notifications to both users
        // For simplicity, returning the links in response
        return response()->json([
            'moderator_link' => $moderatorLink,
            'user_link' => $userLink,
        ]);
    }

    protected function generateJitsiToken($displayName)
    {
        $key = $this->jitsiAppSecret;
        $payload = [
            "context" => [
                "user" => [
                    "name" => $displayName,
                ],
            ],
            "aud" => $this->jitsiAppId,
            "iss" => $this->jitsiAppId,
            "sub" => "meet.jitsi",
            "room" => "*",
            "exp" => now()->addHour()->timestamp,
        ];

        return JWT::encode($payload, $key, 'HS256');
    }
}
