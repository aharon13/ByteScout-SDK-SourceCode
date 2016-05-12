<?php
/**
 * DocumentSplitterOptionsVm
 *
 * PHP version 5
 *
 * @category Class
 * @package  Bytescout\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Bytescout\Client\Model;

use \ArrayAccess;
/**
 * DocumentSplitterOptionsVm Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Bytescout\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DocumentSplitterOptionsVm implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'optimizeSplittedDocuments' => 'bool',
        'checkPermissions' => 'bool',
        'ranges' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'optimizeSplittedDocuments' => 'optimizeSplittedDocuments',
        'checkPermissions' => 'checkPermissions',
        'ranges' => 'ranges'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'optimizeSplittedDocuments' => 'setOptimizeSplittedDocuments',
        'checkPermissions' => 'setCheckPermissions',
        'ranges' => 'setRanges'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'optimizeSplittedDocuments' => 'getOptimizeSplittedDocuments',
        'checkPermissions' => 'getCheckPermissions',
        'ranges' => 'getRanges'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $optimizeSplittedDocuments Default value: False
      * @var bool
      */
    protected $optimizeSplittedDocuments;
    
    /**
      * $checkPermissions Default value: True
      * @var bool
      */
    protected $checkPermissions;
    
    /**
      * $ranges Comma-separated list of page ranges in form \"1-4,5,7,8-15,16-\". Page numbers are 1-based. Ending \"-\" means \"to the last page\". (required)
      * @var string
      */
    protected $ranges;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->optimizeSplittedDocuments = $data["optimizeSplittedDocuments"];
            $this->checkPermissions = $data["checkPermissions"];
            $this->ranges = $data["ranges"];
        }
    }
    
    /**
     * Gets optimizeSplittedDocuments
     * @return bool
     */
    public function getOptimizeSplittedDocuments()
    {
        return $this->optimizeSplittedDocuments;
    }
  
    /**
     * Sets optimizeSplittedDocuments
     * @param bool $optimizeSplittedDocuments Default value: False
     * @return $this
     */
    public function setOptimizeSplittedDocuments($optimizeSplittedDocuments)
    {
        
        $this->optimizeSplittedDocuments = $optimizeSplittedDocuments;
        return $this;
    }
    
    /**
     * Gets checkPermissions
     * @return bool
     */
    public function getCheckPermissions()
    {
        return $this->checkPermissions;
    }
  
    /**
     * Sets checkPermissions
     * @param bool $checkPermissions Default value: True
     * @return $this
     */
    public function setCheckPermissions($checkPermissions)
    {
        
        $this->checkPermissions = $checkPermissions;
        return $this;
    }
    
    /**
     * Gets ranges
     * @return string
     */
    public function getRanges()
    {
        return $this->ranges;
    }
  
    /**
     * Sets ranges
     * @param string $ranges Comma-separated list of page ranges in form \"1-4,5,7,8-15,16-\". Page numbers are 1-based. Ending \"-\" means \"to the last page\". (required)
     * @return $this
     */
    public function setRanges($ranges)
    {
        
        $this->ranges = $ranges;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\Bytescout\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\Bytescout\Client\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}