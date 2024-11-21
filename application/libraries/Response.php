<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Response {

    public function send($statusCode, $data = null, $message = '') {
        // Construct the response array
        $response = [
            'code' => $statusCode,
            'message' => $message,
            'data' => $data,
        ];

        // Get the instance of CI to call output
        $CI =& get_instance();
        $CI->output->set_status_header($statusCode);  // Set the status header (e.g., 404 for Not Found)

        $CI->output
            // ->set_status_header($statusCode)
            ->set_content_type('application/json')
            ->set_output(json_encode($response)); // Send the response as JSON
    }
}
