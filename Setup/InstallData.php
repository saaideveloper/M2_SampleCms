<?php
 /** 
  *@Name : Sergio Abad 
  *@Email : saaideveloper@gmail.com 
  *@Company : Web Cloud Solutions Ltd London 
  *@Phone ::07398593860 
  *@site: http://webcloudsolutions.co.uk
  */
namespace WCS\PurdeySampleCms\Setup;

use Magento\Framework\Setup;

class InstallData implements Setup\InstallDataInterface
{
    /**
     * @var Setup\SampleData\Executor
     */
    protected $executor;

    /**
     * @var Installer
     */
    protected $installer;

    public function __construct(Setup\SampleData\Executor $executor, Installer $installer)
    {
        $this->executor = $executor;
        $this->installer = $installer;
    }

    /**
     * {@inheritdoc}
     */
    public function install(Setup\ModuleDataSetupInterface $setup, Setup\ModuleContextInterface $moduleContext)
    {
        $this->executor->exec($this->installer);
    }
}
