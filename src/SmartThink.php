<?php


namespace Mcpanl\SmartThink51;


class SmartThink
{
    public function test() {

        $baseModel = new BaseModel();

        $baseModel
            ->withWhere([])
            ->withLink([
                'student_id'
            ])
            ->openPagination()
            ->getResult();

    }
}