<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/request/request_vod.proto

namespace Byteplus\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Request.VodSubmitBlockTasksRequest</code>
 */
class VodSubmitBlockTasksRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *媒体Url列表：
     *指定一个或多个内容 URL，内容 URL 以 http:// 或 https:// 开头。多个内容 URL
     *用\n分隔。 每次最多可提交 100 条。
     *
     * Generated from protobuf field <code>string FileUrls = 1;</code>
     */
    protected $FileUrls = '';
    /**
     * forbid：禁播，recover：解禁。
     *
     * Generated from protobuf field <code>string Operation = 2;</code>
     */
    protected $Operation = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $FileUrls
     *          媒体Url列表：
     *          指定一个或多个内容 URL，内容 URL 以 http:// 或 https:// 开头。多个内容 URL
     *          用\n分隔。 每次最多可提交 100 条。
     *     @type string $Operation
     *           forbid：禁播，recover：解禁。
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     *媒体Url列表：
     *指定一个或多个内容 URL，内容 URL 以 http:// 或 https:// 开头。多个内容 URL
     *用\n分隔。 每次最多可提交 100 条。
     *
     * Generated from protobuf field <code>string FileUrls = 1;</code>
     * @return string
     */
    public function getFileUrls()
    {
        return $this->FileUrls;
    }

    /**
     *媒体Url列表：
     *指定一个或多个内容 URL，内容 URL 以 http:// 或 https:// 开头。多个内容 URL
     *用\n分隔。 每次最多可提交 100 条。
     *
     * Generated from protobuf field <code>string FileUrls = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFileUrls($var)
    {
        GPBUtil::checkString($var, True);
        $this->FileUrls = $var;

        return $this;
    }

    /**
     * forbid：禁播，recover：解禁。
     *
     * Generated from protobuf field <code>string Operation = 2;</code>
     * @return string
     */
    public function getOperation()
    {
        return $this->Operation;
    }

    /**
     * forbid：禁播，recover：解禁。
     *
     * Generated from protobuf field <code>string Operation = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOperation($var)
    {
        GPBUtil::checkString($var, True);
        $this->Operation = $var;

        return $this;
    }

}
