<?php

namespace Services;

use Dotenv\Loader\Resolver;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use LDAP\Result;

class ResponseService {

    public function continue($message, $data) : JsonResponse{
        $responseData  = $this->dataFormat($message, $data, Response::HTTP_CONTINUE);
        return response()->json($responseData, Response::HTTP_CONTINUE);
    }

    public function switchingProtocols($message,  $data) : JsonResponse{
        $responseData  = $this->dataFormat($message, $data, Response::HTTP_SWITCHING_PROTOCOLS);
        return response()->json($responseData, Response::HTTP_SWITCHING_PROTOCOLS);
    }

    public function processing($message, $data) : JsonResponse{
        $responseData  = $this->dataFormat($message, $data, Response::HTTP_PROCESSING);
        return response()->json($responseData, Response::HTTP_PROCESSING);
    }

    public function earlyHits($message, $data) :JsonResponse{
        $responseData = $this->dataFormat($message, $data, Response::HTTP_EARLY_HINTS);
        return response()->json($responseData, Response::HTTP_EARLY_HINTS);
    }

    public function ok($message, $data ) :JsonResponse{
        $responseData = $this->dataFormat($message, $data, Response::HTTP_OK);
        return response()->json($responseData, Response::HTTP_OK);
    }

    public function created($message, $data) :JsonResponse{
        $responseData = $this->dataFormat($message, $data, Response::HTTP_CREATED);
        return response()->json($responseData, Response::HTTP_CREATED);
    }

    public function accepted($message, $data) :JsonResponse{
        $responseData = $this->dataFormat($message, $data, Response::HTTP_ACCEPTED);
        return response()->json($responseData, Response::HTTP_ACCEPTED);
    }

    public function nonAuthorativeInformation($message,$data) {
        $responseData = $this->dataFormat($message, $data, Response::HTTP_NON_AUTHORITATIVE_INFORMATION);
        return response()->json($responseData, Response::HTTP_NON_AUTHORITATIVE_INFORMATION);
    }

    public function noContent($message, $data) : JsonResponse {
        $responseData = $this->dataFormat($message, $data, Response::HTTP_NO_CONTENT);
        return response()->json($responseData, Response::HTTP_NO_CONTENT);
    }

    public function resetContent($message, $data){
        $responseData = $this->dataFormat($message, $data, Response::HTTP_RESET_CONTENT);
        return response()->json($responseData, Response::HTTP_RESET_CONTENT);
    }

    public function partialContent($message, $data) : JsonResponse{
        $responseData = $this->dataFormat($message, $data, Response::HTTP_PARTIAL_CONTENT);
        return response()->json($responseData, Response::HTTP_PARTIAL_CONTENT);
    }

    public function multyStatus($message, $data) : JsonResponse {
        $responseData = $this->dataFormat($message, $data, Response::HTTP_PARTIAL_CONTENT);
        return response()->json($responseData, Response::HTTP_PARTIAL_CONTENT);
    }

    public function internalServerError(string $message, ) :  JsonResponse{
        $responseData = $this->dataFormat($message, [], Response::HTTP_INTERNAL_SERVER_ERROR);
        return response()->json($responseData, Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    private function dataFormat(string $message, $data, int $status){
        return array(['message' => $message, 'data'=>$data, 'status' => $status]);
    }
}