<?php
namespace Jdmm\VhubControlService\Protocol;

/**
 * Interface DeviceAccessInterface
 * @package Jdmm\VhubControlService\Protocol
 */
interface DeviceAccessInterface
{
    /**
     * 接入列表
     * @param $page
     * @param $pageNum
     * @return mixed
     */
    public function accessList($page,$pageNum);

    /**
     * 设备接入
     * @param $deviceId
     * @param $deviceName
     * @param $mac
     * @return mixed
     */
    public function accessAdd($deviceId,$deviceName,$mac);


    /**
     * 设备退出
     * @param $deviceId
     * @return mixed
     */
    public function accessOut($deviceId);

}