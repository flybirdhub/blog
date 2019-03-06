<?php

namespace app\common\traits;

trait Controller
{
    public function httpResp($data)
    {
        $respData = array(
            'done' => isset($data['done']) ? $data['done'] : true,
            'code' => isset($data['code']) ? $data['code'] : config('code.default'),
            'data' => isset($data['data']) ? $data['data'] : []
        );
        if (isset($data['page'])) {
            $respData['page'] = $data['page'];
        }
        return json($respData);
    }
}
