<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/request/request_vod.proto

namespace Byteplus\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Request.VodCommitUploadInfoRequest</code>
 */
class VodCommitUploadInfoRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 上传的空间名 
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     */
    protected $SpaceName = '';
    /**
     * 上传 1005 阶段需要带上 1001 的 Session 
     *
     * Generated from protobuf field <code>string SessionKey = 2;</code>
     */
    protected $SessionKey = '';
    /**
     * 业务希望上传透传的信息，会在上传成功时返回给用户 
     *
     * Generated from protobuf field <code>string CallbackArgs = 3;</code>
     */
    protected $CallbackArgs = '';
    /**
     * 上传的功能函数 
     *
     * Generated from protobuf field <code>string Functions = 4;</code>
     */
    protected $Functions = '';
    /**
     * 上传中文件的来源 
     *
     * Generated from protobuf field <code>string VodUploadSource = 5;</code>
     */
    protected $VodUploadSource = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SpaceName
     *           上传的空间名 
     *     @type string $SessionKey
     *           上传 1005 阶段需要带上 1001 的 Session 
     *     @type string $CallbackArgs
     *           业务希望上传透传的信息，会在上传成功时返回给用户 
     *     @type string $Functions
     *           上传的功能函数 
     *     @type string $VodUploadSource
     *           上传中文件的来源 
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * 上传的空间名 
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @return string
     */
    public function getSpaceName()
    {
        return $this->SpaceName;
    }

    /**
     * 上传的空间名 
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSpaceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->SpaceName = $var;

        return $this;
    }

    /**
     * 上传 1005 阶段需要带上 1001 的 Session 
     *
     * Generated from protobuf field <code>string SessionKey = 2;</code>
     * @return string
     */
    public function getSessionKey()
    {
        return $this->SessionKey;
    }

    /**
     * 上传 1005 阶段需要带上 1001 的 Session 
     *
     * Generated from protobuf field <code>string SessionKey = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSessionKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->SessionKey = $var;

        return $this;
    }

    /**
     * 业务希望上传透传的信息，会在上传成功时返回给用户 
     *
     * Generated from protobuf field <code>string CallbackArgs = 3;</code>
     * @return string
     */
    public function getCallbackArgs()
    {
        return $this->CallbackArgs;
    }

    /**
     * 业务希望上传透传的信息，会在上传成功时返回给用户 
     *
     * Generated from protobuf field <code>string CallbackArgs = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCallbackArgs($var)
    {
        GPBUtil::checkString($var, True);
        $this->CallbackArgs = $var;

        return $this;
    }

    /**
     * 上传的功能函数 
     *
     * Generated from protobuf field <code>string Functions = 4;</code>
     * @return string
     */
    public function getFunctions()
    {
        return $this->Functions;
    }

    /**
     * 上传的功能函数 
     *
     * Generated from protobuf field <code>string Functions = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFunctions($var)
    {
        GPBUtil::checkString($var, True);
        $this->Functions = $var;

        return $this;
    }

    /**
     * 上传中文件的来源 
     *
     * Generated from protobuf field <code>string VodUploadSource = 5;</code>
     * @return string
     */
    public function getVodUploadSource()
    {
        return $this->VodUploadSource;
    }

    /**
     * 上传中文件的来源 
     *
     * Generated from protobuf field <code>string VodUploadSource = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setVodUploadSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->VodUploadSource = $var;

        return $this;
    }

}
