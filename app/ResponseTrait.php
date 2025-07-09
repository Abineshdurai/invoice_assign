<?php

namespace App;

trait ResponseTrait
{
    private function successResponse(string $message, mixed $data = null, int $code = 200)
    {
        return response()->json([
            'message' => $message,
            'status' => true,
            'data' => $data,

        ], $code);
    }

    private function errorResponse(string $message, mixed $error = null, int $code = 400)
    {
        return response()->json([
            'message' => $message,
            'status' => false,
            'error' => $error
        ], $code);
    }

    private function successResponsePagination(string $message, mixed $data = null, mixed $pagination = null, int $code = 200)
    {
        return response()->json([
            'message' => $message,
            'status' => true,
            'data' => $data,
            'pagination' => $this->paginateData($pagination)
        ], $code);
    }


    private function paginateData($pagination)
    {
        return [
            'current_page' => $pagination->currentPage(),
            'per_page' => $pagination->perPage(),
            'total' => $pagination->total(),
            'last_page' => $pagination->lastPage(),
            'next_page_url' => $pagination->nextPageUrl(),
            'prev_page_url' => $pagination->previousPageUrl(),
        ];
    }


    private function notFound()
    {
        return response()->json([
            'message' => 'No Data Found',
            'status' => false,
        ], 404);
    }

    private function UnAuthorized()
    {
        return response()->json([
            'message' => 'UnAuthorized',
            'status' => false
        ], 401);
    }
}
