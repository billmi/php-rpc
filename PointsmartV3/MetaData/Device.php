<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: device.proto

namespace PointsmartV3\MetaData;

class Device
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0aac010a0c6465766963652e70726f746f120870726f746f627566221b0a" .
            "094a736f6e5265706c79120e0a06726573756c74180120012809323c0a06" .
            "44657669636512320a0450696e6712132e70726f746f6275662e4a736f6e" .
            "5265706c791a132e70726f746f6275662e4a736f6e5265706c792200422f" .
            "ca0214506f696e74736d61727456335c52657175657374e20215506f696e" .
            "74736d61727456335c4d65746144617461620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

