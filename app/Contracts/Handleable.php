<?php
namespace App\Contracts;

interface Handleable {
    public const HANDLED = 'handled';

    /**
     *
     * @return string
     */
    public static function handle() : string;
}