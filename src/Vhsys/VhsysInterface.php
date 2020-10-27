<?php

namespace Vhsys;

/**
 * Interface VhsysInterface
 *
 * @author Fernando Campos de Oliveira
 * 
 * @package Vhsys;
 */
interface VhsysInterface
{

    /**
     * @param $json
     *
     * @return \stdClass
     */
    public static function fromJson($json);

    /**
     * @param \stdClass $data
     */
    public function populate(\stdClass $data);
}