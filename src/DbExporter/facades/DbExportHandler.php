<?php namespace Unikat\DbExporter\Facades;

use Illuminate\Support\Facades\Facade;

class DbExportHandler extends Facade
{
    protected static function getFacadeAccessor() { return 'DbExportHandler'; }
}