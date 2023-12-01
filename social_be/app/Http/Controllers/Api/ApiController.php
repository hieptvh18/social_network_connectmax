<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\ApiException;
use App\Http\Controllers\Controller;
use Exception;
use Modules\Core\Traits\CoreHasCacheableTrait;
use Modules\Core\Traits\CoreEmailSetting;
use Throwable;

/**
 * Class ApiController
 *
 * @package App\Http\Controllers\Api
 * @method getCode()
 */
class ApiController extends Controller
{
    /**
     * @param array $data
     * @param int   $status
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws ApiException
     */
    public function json($data = [], $status = 200)
    {
        try {
            return response()->json($data, $status);
        } catch (Throwable $e) {
            report($e);
            // Log::channel('slack')->error($this->getMessage(), [$this->getCode()]);
            $code = $this->getCode();
            $msg = $this->getMessage();
            $results = [
                "message" => $msg,
                "code" => $code
            ];
            return response()->json([
                'errors' => $results
            ]);
        }
    }
}
