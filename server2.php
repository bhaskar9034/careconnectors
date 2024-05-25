<?php
// Initialize variables with default values
$department = "";
$DoctorName = "";
$date = "";
$time = "";
$name = "";
$phone = "";
$message = "";

// Database connection parameters
$host = 'localhost'; // Change this to your actual MySQL server hostname or IP address
$username = 'root'; // Change this to your MySQL username
$password = ''; // Change this to your MySQL password
$dbname = 'sih'; // Change this to the name of your database

// Create a connection to the database
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $department = $_POST['department'];
    $DoctorName = $_POST['doctorName'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Calculate the start and end times for the 15-minute range
    $start_time = date('H:i:s', strtotime($time) - 900); // 900 seconds = 15 minutes
    $end_time = date('H:i:s', strtotime($time) + 900);

    // Check if there are any existing appointments within the 15-minute range
    $existingSlotsQuery = "SELECT COUNT(*) FROM imperial WHERE date = '$date' 
                           AND `DoctorName` = '$DoctorName' 
                           AND time BETWEEN '$start_time' AND '$end_time'";
    $result = mysqli_query($conn, $existingSlotsQuery);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        if ($row['COUNT(*)'] > 0) {
            echo "<br><br><p style='font-size: 28px; text-align: center;'>The selected time slot is already chosen. Please choose another time slot.";
        } else {
            // Create an SQL insert query
            $sql = "INSERT INTO imperial (department, `DoctorName`, date, time, name, phone, message)
                    VALUES ('$department', '$DoctorName', '$date', '$time', '$name', '$phone', '$message')";

            // Execute the query
            if (mysqli_query($conn, $sql)) {
                echo "<br><br><p style='font-size: 28px; text-align: center;'>Respected, $name Your Slot Was Booked Successfully..!";
                
                // Send an SMS notification to the admin and the user using Twilio
                $twilio_sid = '#';
                $twilio_auth_token = '#';
                $twilio_phone_number = '+#';
                $admin_phone_number = '+#'; // Replace with the admin's phone number
                $user_phone_number = $phone; // User's phone number

                // Compose the SMS message for admin
                $admin_sms_message = "New appointment booked:\n";
                $admin_sms_message .= "Doctor: $DoctorName\n";
                $admin_sms_message .= "Date: $date\n";
                $admin_sms_message .= "Time: $time\n";
                $admin_sms_message .= "Patient Name: $name\n";
                $admin_sms_message .= "Phone: $phone\n";
                $admin_sms_message .= "Message: $message";

                // Send SMS to admin
                $admin_result = sendSMS($twilio_sid, $twilio_auth_token, $twilio_phone_number, $admin_phone_number, $admin_sms_message);

                // Compose the SMS message for the user
                $user_sms_message = "Appointment confirmed:\n";
                $user_sms_message .= "Doctor: $DoctorName\n";
                $user_sms_message .= "Date: $date\n";
                $user_sms_message .= "Time: $time\n";
                $user_sms_message .= "Message: $message";

                // Send SMS to the user
                $user_result = sendSMS($twilio_sid, $twilio_auth_token, $twilio_phone_number, $user_phone_number, $user_sms_message);

                if ($admin_result && $user_result) {
                    echo "<br><br><p style='font-size: 28px; text-align: center;'>Admin has been notified.";
                } else {
                    echo "<br><br><p style='font-size: 28px; text-align: center;'>";
                }
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    } else {
        echo "Error checking existing time slots.";
    }
}

// Function to send SMS using Twilio
function sendSMS($twilio_sid, $twilio_auth_token, $twilio_phone_number, $to_number, $message) {
    $ch = curl_init("https://api.twilio.com/2010-04-01/Accounts/$twilio_sid/Messages.json");
    
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
        'To' => $to_number,
        'From' => $twilio_phone_number,
        'Body' => $message,
    ]));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERPWD, "$twilio_sid:$twilio_auth_token");

    $response = curl_exec($ch);

    curl_close($ch);

    return $response;
}

// Close the database connection
mysqli_close($conn);
?>
