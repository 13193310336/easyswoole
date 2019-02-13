<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-2-13
 * Time: 下午9:28
 */

namespace EasySwoole\EasySwoole\Command\DefaultCommand\Migrate;


abstract class MigrateModel
{
    /**
     * MigrateModel constructor.
     * @param array ...$connect
     */
    public function __construct(...$connect)
    {
        $this->table();
        $this->primaryKey();
        $this->bean();
    }

    /**
     * 数据表名称
     * @var string
     */
    protected $table;

    /**
     * 数据表主键
     * @var string
     */
    protected $primaryKey = '';

    /**
     * 数据模型Bean对象
     * @var SplBean|null
     */
    protected $bean = null;

    /**
     * 设置表名
     * @return string
     */
    abstract protected function table();

    /**
     * 设置主键
     * @return string
     */
    abstract protected function primaryKey();

    /**
     * 设置Bean
     * @return string
     */
    abstract protected function bean();

    /**
     * @return string
     */
    public function getBean(): string
    {
        return $this->bean;
    }

    /**
     * @return string
     */
    public function getTable(): string
    {
        return $this->table;
    }

    /**
     * @return String
     */
    public function getPrimary(): String
    {
        return $this->primaryKey;
    }
}