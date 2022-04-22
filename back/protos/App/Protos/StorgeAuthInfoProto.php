<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: masterstorge.proto

namespace App\Protos;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>StorgeAuthInfoProto</code>
 */
class StorgeAuthInfoProto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional string picture = 1;</code>
     */
    protected $picture = null;
    /**
     * Generated from protobuf field <code>optional string name = 2;</code>
     */
    protected $name = null;
    /**
     * Generated from protobuf field <code>optional string email = 3;</code>
     */
    protected $email = null;
    /**
     * Generated from protobuf field <code>optional bool is_admin = 4;</code>
     */
    protected $is_admin = null;
    /**
     * Generated from protobuf field <code>optional string api_key = 5;</code>
     */
    protected $api_key = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $picture
     *     @type string $name
     *     @type string $email
     *     @type bool $is_admin
     *     @type string $api_key
     * }
     */
    public function __construct($data = NULL) {
        \App\Protos\GPBMetadata\Masterstorge::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional string picture = 1;</code>
     * @return string
     */
    public function getPicture()
    {
        return isset($this->picture) ? $this->picture : '';
    }

    public function hasPicture()
    {
        return isset($this->picture);
    }

    public function clearPicture()
    {
        unset($this->picture);
    }

    /**
     * Generated from protobuf field <code>optional string picture = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPicture($var)
    {
        GPBUtil::checkString($var, True);
        $this->picture = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Generated from protobuf field <code>optional string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string email = 3;</code>
     * @return string
     */
    public function getEmail()
    {
        return isset($this->email) ? $this->email : '';
    }

    public function hasEmail()
    {
        return isset($this->email);
    }

    public function clearEmail()
    {
        unset($this->email);
    }

    /**
     * Generated from protobuf field <code>optional string email = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool is_admin = 4;</code>
     * @return bool
     */
    public function getIsAdmin()
    {
        return isset($this->is_admin) ? $this->is_admin : false;
    }

    public function hasIsAdmin()
    {
        return isset($this->is_admin);
    }

    public function clearIsAdmin()
    {
        unset($this->is_admin);
    }

    /**
     * Generated from protobuf field <code>optional bool is_admin = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsAdmin($var)
    {
        GPBUtil::checkBool($var);
        $this->is_admin = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string api_key = 5;</code>
     * @return string
     */
    public function getApiKey()
    {
        return isset($this->api_key) ? $this->api_key : '';
    }

    public function hasApiKey()
    {
        return isset($this->api_key);
    }

    public function clearApiKey()
    {
        unset($this->api_key);
    }

    /**
     * Generated from protobuf field <code>optional string api_key = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setApiKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->api_key = $var;

        return $this;
    }

}

