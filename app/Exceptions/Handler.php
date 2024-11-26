<?php

namespace App\Exceptions;

use Exception;
use Throwable;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionsHandler;

class Handler extends ExceptionsHandler{
      /**
     * A list of exception types that are not reported.
     */
    protected $dontReport = [
        // Add exception types here if you don't want them reported
    ];

    /**
     * A list of inputs that are never flashed for validation exceptions.
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     */
    public function report(Throwable $exception): void
    {
        // if ($this->shouldReport($exception)) {
        //     // Log the exception using Laravel's logger
        //     Log::error($exception->getMessage(), [
        //         'exception' => $exception,
        //     ]);
        // }
       

        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     */
    public function render($request, Throwable $exception): Response
    {
        // return parent::render($request, $exception);
        // Handle JWTException
        if ($exception instanceof JWTException) {
            return response()->json([
                'success' => false,
                'error' => 'JWT error',
                'message' => $exception->getMessage(),
            ], JsonResponse::HTTP_UNAUTHORIZED);
        }
        // Custom handling for specific exceptions
        if ($exception instanceof \Illuminate\Auth\AuthenticationException) {
            return response()->json([
                'error' => 'Unauthenticated',
            ], JsonResponse::HTTP_UNAUTHORIZED);
        }

        if ($exception instanceof \Illuminate\Validation\ValidationException) {
            return response()->json([
                'error' => 'Validation Error',
                'messages' => $exception->errors(),
            ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY);
        }

        // Default response for unexpected exceptions
        return response()->json([
            'error' => 'Server Error',
            'message' => $exception->getMessage(),
        ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
    }

     /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        // Register a custom handler for JWTException
        $this->reportable(function (JWTException $e) {
            // You can handle logging for JWT exceptions separately
            Log::error('JWTException: ' . $e->getMessage(), [
                'exception' => $e,
                'stack' => $e->getTraceAsString(),
            ]);
        });

        // Register a custom handler for any other exception
        $this->reportable(function (Exception $e) {
            // Log all other exceptions (custom logic)
            Log::error('General Exception: ' . $e->getMessage(), [
                'exception' => $e,
                'stack' => $e->getTraceAsString(),
            ]);
        });

        // You can also register custom rendering for exceptions
        $this->renderable(function (JWTException $e, $request) {
            // Customize the response for JWTException
            return response()->json([
                'error' => 'Unauthorized',
                'message' => $e->getMessage()
            ], Response::HTTP_UNAUTHORIZED);
        });
    }

}