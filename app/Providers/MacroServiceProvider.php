<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class MacroServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        Response::macro('sendResponse', function($message, $value = null, $code = 200) {
            $response = [
                'status' => true,
                'message' => $message,
                'data' => $value,
            ];
            return response()->json($response, $code);
        });

        Response::macro('sendError', function($value, $message = [], $code = 400) {
            $response = [
                'status' => false,
                'message' => $value,
            ];

            if(!empty($message)) {
                $response['data'] = $message;
            }

            return response()->json($response, $code);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
