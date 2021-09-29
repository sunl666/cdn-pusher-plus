<?php
namespace Sunl888\CdnPusher\Contracts;

interface ExcludeAsset extends Asset {

    public function getFiles();

    public function needHidden();

}
