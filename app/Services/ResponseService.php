<?php

namespace Services;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ResponseService extends Response {

    public function continue($message, $data) : JsonResponse{
        $responseData  = $this->dataFormat($message, $data, $this::HTTP_CONTINUE);
        return response()->json($responseData, $this::HTTP_CONTINUE);
    }

    public function switchingProtocols($message,  $data) : JsonResponse{
        $responseData  = $this->dataFormat($message, $data, $this::HTTP_SWITCHING_PROTOCOLS);
        return response()->json($responseData, $this::HTTP_SWITCHING_PROTOCOLS);
    }

    public function processing($message, $data) : JsonResponse{
        $responseData  = $this->dataFormat($message, $data, $this::HTTP_PROCESSING);
        return response()->json($responseData, $this::HTTP_PROCESSING);
    }

    public function earlyHits($message, $data) :JsonResponse{
        $responseData = $this->dataFormat($message, $data, $this::HTTP_EARLY_HINTS);
        return response()->json($responseData, $this::HTTP_EARLY_HINTS);
    }

    public function ok($message, $data ) :JsonResponse{
        $responseData = $this->dataFormat($message, $data, $this::HTTP_OK);
        return response()->json($responseData, $this::HTTP_OK);
    }

    public function created($message, $data) :JsonResponse{
        $responseData = $this->dataFormat($message, $data, $this::HTTP_CREATED);
        return response()->json($responseData, $this::HTTP_CREATED);
    }

    public function accepted($message, $data) :JsonResponse{
        $responseData = $this->dataFormat($message, $data, $this::HTTP_ACCEPTED);
        return response()->json($responseData, $this::HTTP_ACCEPTED);
    }

    public function nonAuthorativeInformation($message,$data) {
        $responseData = $this->dataFormat($message, $data, $this::HTTP_NON_AUTHORITATIVE_INFORMATION);
        return response()->json($responseData, $this::HTTP_NON_AUTHORITATIVE_INFORMATION);
    }

    public function noContent($message, $data) : JsonResponse {
        $responseData = $this->dataFormat($message, $data, $this::HTTP_NO_CONTENT);
        return response()->json($responseData, $this::HTTP_NO_CONTENT);
    }

    public function resetContent($message, $data){
        $responseData = $this->dataFormat($message, $data, $this::HTTP_RESET_CONTENT);
        return response()->json($responseData, $this::HTTP_RESET_CONTENT);
    }

    public function partialContent($message, $data) : JsonResponse{
        $responseData = $this->dataFormat($message, $data, $this::HTTP_PARTIAL_CONTENT);
        return response()->json($responseData, $this::HTTP_PARTIAL_CONTENT);
    }

    public function multyStatus($message, $data) : JsonResponse {
        $responseData = $this->dataFormat($message, $data, $this::HTTP_PARTIAL_CONTENT);
        return response()->json($responseData, $this::HTTP_PARTIAL_CONTENT);
    }

    public function alreadyReported($message, $data) : JsonResponse{
        $responseData = $this->dataFormat($message, $data, $this::HTTP_ALREADY_REPORTED);
        return response()->json($responseData, $this::HTTP_ALREADY_REPORTED);
    }

    public function imUsed($message, $data) : JsonResponse{
        $responseData = $this->dataFormat($message, $data, $this::HTTP_IM_USED);
        return response()->json($responseData, $this::HTTP_IM_USED);
    }

    public function multipleChoises($message, $data) : JsonResponse{
        $responseData = $this->dataFormat($message, $data, $this::HTTP_MULTIPLE_CHOICES);
        return response()->json($responseData, $this::HTTP_MULTIPLE_CHOICES);
    }

    public function movedPermanently($message, $data) : JsonResponse{
        $responseData = $this->dataFormat($message, $data, $this::HTTP_MOVED_PERMANENTLY);
        return response()->json($responseData, $this::HTTP_MOVED_PERMANENTLY);
    }

    public function found($message, $data) : JsonResponse{
        $responseData = $this->dataFormat($message, $data, $this::HTTP_FOUND);
        return response()->json($responseData, $this::HTTP_FOUND);
    }

    public function seeOther($message, $data) : JsonResponse{
        $responseData = $this->dataFormat($message, $data, $this::HTTP_SEE_OTHER);
        return response()->json($responseData, $this::HTTP_SEE_OTHER);
    }

    public function notModified($message, $data) : JsonResponse{
        $responseData = $this->dataFormat($message, $data, $this::HTTP_NOT_MODIFIED);
        return response()->json($responseData, $this::HTTP_NOT_MODIFIED);
    }
    

    public function useProxy($message, $data) : JsonResponse{
        $responseData = $this->dataFormat($message, $data, $this::HTTP_USE_PROXY);
        return response()->json($responseData, $this::HTTP_USE_PROXY);
    }

    public function tempororyRedirected($message, $data) : JsonResponse{
        $responseData = $this->dataFormat($message, $data, $this::HTTP_TEMPORARY_REDIRECT);
        return response()->json($responseData, $this::HTTP_TEMPORARY_REDIRECT);
    }
    

    public function permanentRedirected($message, $data) : JsonResponse{
        $responseData = $this->dataFormat($message, $data, $this::HTTP_PERMANENTLY_REDIRECT);
        return response()->json($responseData, $this::HTTP_PERMANENTLY_REDIRECT);
    }
    
    public function badRequest($message, $data) : JsonResponse{
        $responseData = $this->dataFormat($message, $data, $this::HTTP_BAD_REQUEST);
        return response()->json($responseData, $this::HTTP_BAD_REQUEST);
    }
    
    public function unAuthorized($message, $data) : JsonResponse{
        $responseData = $this->dataFormat($message, $data, $this::HTTP_UNAUTHORIZED);
        return response()->json($responseData, $this::HTTP_UNAUTHORIZED);
    }
    
    public function paymentRequired($message, $data) : JsonResponse{
        $responseData = $this->dataFormat($message, $data, $this::HTTP_PAYMENT_REQUIRED);
        return response()->json($responseData, $this::HTTP_PAYMENT_REQUIRED);
    }
    
    public function forbidden($message, $data) : JsonResponse{
        $responseData = $this->dataFormat($message, $data, $this::HTTP_FORBIDDEN);
        return response()->json($responseData, $this::HTTP_FORBIDDEN);
    }
    
    public function methodNotAllowed($message, $data) : JsonResponse{
        $responseData = $this->dataFormat($message, $data, $this::HTTP_METHOD_NOT_ALLOWED);
        return response()->json($responseData, $this::HTTP_METHOD_NOT_ALLOWED);
    }
    
    public function notAcceptable($message, $data) : JsonResponse{
        $responseData = $this->dataFormat($message, $data, $this::HTTP_NOT_ACCEPTABLE);
        return response()->json($responseData, $this::HTTP_NOT_ACCEPTABLE);
    }
    
    public function proxyAuthenticationRequired($message, $data) : JsonResponse{
        $responseData = $this->dataFormat($message, $data, $this::HTTP_PROXY_AUTHENTICATION_REQUIRED);
        return response()->json($responseData, $this::HTTP_PROXY_AUTHENTICATION_REQUIRED);
    }
    
    public function requestTimeOut($message, $data) : JsonResponse{
        $responseData = $this->dataFormat($message, $data, $this::HTTP_REQUEST_TIMEOUT);
        return response()->json($responseData, $this::HTTP_REQUEST_TIMEOUT);
    }
    
    public function conflict($message, $data) : JsonResponse{
        $responseData = $this->dataFormat($message, $data, $this::HTTP_CONFLICT);
        return response()->json($responseData, $this::HTTP_CONFLICT);
    }
    
    public function gone($message, $data) : JsonResponse{
        $responseData = $this->dataFormat($message, $data, $this::HTTP_GONE);
        return response()->json($responseData, $this::HTTP_GONE);
    }
    
    public function lengthRequired($message, $data) : JsonResponse{
        $responseData = $this->dataFormat($message, $data, $this::HTTP_LENGTH_REQUIRED);
        return response()->json($responseData, $this::HTTP_LENGTH_REQUIRED);
    }
    
    public function preconditionRequired($message, $data) : JsonResponse{
        $responseData = $this->dataFormat($message, $data, $this::HTTP_PRECONDITION_REQUIRED);
        return response()->json($responseData, $this::HTTP_PRECONDITION_REQUIRED);
    }
    
    public function toManyRequests($message, $data) : JsonResponse{
        $responseData = $this->dataFormat($message, $data, $this::HTTP_TOO_MANY_REQUESTS);
        return response()->json($responseData, $this::HTTP_TOO_MANY_REQUESTS);
    }
    
    public function requestHeaderFieldToLarge($message, $data) : JsonResponse{
        $responseData = $this->dataFormat($message, $data, $this::HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE);
        return response()->json($responseData, $this::HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE);
    }
    
    public function unavilableForLegleReason($message, $data) : JsonResponse{
        $responseData = $this->dataFormat($message, $data, $this::HTTP_UNAVAILABLE_FOR_LEGAL_REASONS);
        return response()->json($responseData, $this::HTTP_UNAVAILABLE_FOR_LEGAL_REASONS);
    }    

    public function internalServerError(string $message, ) :  JsonResponse{
        $responseData = $this->dataFormat($message, [], $this::HTTP_INTERNAL_SERVER_ERROR);
        return response()->json($responseData, $this::HTTP_INTERNAL_SERVER_ERROR);
    }

    public function notImplemented(string $message, ) :  JsonResponse{
        $responseData = $this->dataFormat($message, [], $this::HTTP_NOT_IMPLEMENTED);
        return response()->json($responseData, $this::HTTP_NOT_IMPLEMENTED);
    }

    public function badGateway(string $message, ) :  JsonResponse{
        $responseData = $this->dataFormat($message, [], $this::HTTP_BAD_GATEWAY);
        return response()->json($responseData, $this::HTTP_BAD_GATEWAY);
    }

    public function serviceunAvilable(string $message, ) :  JsonResponse{
        $responseData = $this->dataFormat($message, [], $this::HTTP_SERVICE_UNAVAILABLE);
        return response()->json($responseData, $this::HTTP_SERVICE_UNAVAILABLE);
    }

    public function gatewayTimeOut(string $message, ) :  JsonResponse{
        $responseData = $this->dataFormat($message, [], $this::HTTP_GATEWAY_TIMEOUT);
        return response()->json($responseData, $this::HTTP_GATEWAY_TIMEOUT);
    }

    public function versionNotSupported(string $message, ) :  JsonResponse{
        $responseData = $this->dataFormat($message, [], $this::HTTP_VERSION_NOT_SUPPORTED);
        return response()->json($responseData, $this::HTTP_VERSION_NOT_SUPPORTED);
    }

    public function varientsAlsoNegociates(string $message, ) :  JsonResponse{
        $responseData = $this->dataFormat($message, [], $this::HTTP_VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL);
        return response()->json($responseData, $this::HTTP_VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL);
    }

    public function insufficientStorage(string $message, ) :  JsonResponse{
        $responseData = $this->dataFormat($message, [], $this::HTTP_INSUFFICIENT_STORAGE);
        return response()->json($responseData, $this::HTTP_INSUFFICIENT_STORAGE);
    }

    public function loopDetected(string $message, ) :  JsonResponse{
        $responseData = $this->dataFormat($message, [], $this::HTTP_LOOP_DETECTED);
        return response()->json($responseData, $this::HTTP_LOOP_DETECTED);
    }
    
    public function notExtended(string $message, ) :  JsonResponse{
        $responseData = $this->dataFormat($message, [], $this::HTTP_NOT_EXTENDED);
        return response()->json($responseData, $this::HTTP_NOT_EXTENDED);
    }

    public function networkAuthenticationRequired(string $message, ) :  JsonResponse{
        $responseData = $this->dataFormat($message, [], $this::HTTP_NETWORK_AUTHENTICATION_REQUIRED);
        return response()->json($responseData, $this::HTTP_NETWORK_AUTHENTICATION_REQUIRED);
    }

    private function dataFormat(string $message, $data, int $status){
        return array(['message' => $message, 'data'=>$data, 'status' => $status]);
    }
}