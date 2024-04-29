<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_measure.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 点播文件域名粒度播放统计信息下载
 *
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.DescribeVodPlayFileLogByDomainItem</code>
 */
class DescribeVodPlayFileLogByDomainItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Date = 1;</code>
     */
    protected $Date = '';
    /**
     * Generated from protobuf field <code>string Domain = 2;</code>
     */
    protected $Domain = '';
    /**
     * Generated from protobuf field <code>string DownloadUrl = 3;</code>
     */
    protected $DownloadUrl = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Date
     *     @type string $Domain
     *     @type string $DownloadUrl
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\VodMeasure::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Date = 1;</code>
     * @return string
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * Generated from protobuf field <code>string Date = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->Date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Domain = 2;</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->Domain;
    }

    /**
     * Generated from protobuf field <code>string Domain = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->Domain = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string DownloadUrl = 3;</code>
     * @return string
     */
    public function getDownloadUrl()
    {
        return $this->DownloadUrl;
    }

    /**
     * Generated from protobuf field <code>string DownloadUrl = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDownloadUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->DownloadUrl = $var;

        return $this;
    }

}
