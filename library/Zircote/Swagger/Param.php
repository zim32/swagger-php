<?php
/**
 * filecomment
 * package_declaration
 */
require_once 'Zircote/Swagger/AbstractEntity.php';
/**
 *
 *
 *
 * @category
 * @package
 * @subpackage
 */
class Zircote_Swagger_Param extends Zircote_Swagger_AbstractEntity
{
    /**
     *
     * @var array
     */
    public $results = array(
        'description' => '',
        'required' => false,
        'allowMultiple' => false,
        'allowedValues' => array(),
        'dataType' => null,
        'name' => null,
        'paramType' => null
    );
    /**
     *
     * @var string
     */
    protected $_rawComment;
    /**
     *
     * @param string $apiParam
     */
    public function __construct($apiParam)
    {
        $this->_rawComment = $apiParam;
        $this->results = $this->_parseParts($this->_rawComment);
    }
}