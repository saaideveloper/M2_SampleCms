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

class Installer implements Setup\SampleData\InstallerInterface
{
    /**
     * @var \Magento\CatalogSampleData\Model\Category
     */
    private $category;

    /**
     * Setup class for css
     *
     * @var \Magento\ThemeSampleData\Model\Css
     */
    private $css;

    /**
     * @var \WCS\PurdeySampleCms\Model\Page
     */
    private $page;

    /**
     * @var \WCS\PurdeySampleCms\Model\Block
     */
    private $block;

    /**
     * @param \Magento\CatalogSampleData\Model\Category $category
     * @param \Magento\ThemeSampleData\Model\Css $css
     * @param \WCS\PurdeySampleCms\Model\Page $page
     * @param \WCS\PurdeySampleCms\Model\Block $block
     */
    public function __construct(
        \Magento\CatalogSampleData\Model\Category $category,
        \Magento\ThemeSampleData\Model\Css $css,
        \WCS\PurdeySampleCms\Model\Page $page,
        \WCS\PurdeySampleCms\Model\Block $block
    ) {
        $this->category = $category;
        $this->css = $css;
        $this->page = $page;
        $this->block = $block;
    }

    /**
     * {@inheritdoc}
     */
    public function install()
    {
        $this->category->install(['WCS_PurdeySampleCms::fixtures/categories.csv']);
        $this->css->install(['WCS_PurdeySampleCms::fixtures/styles.css' => 'styles.css']);
        $this->page->install(['WCS_PurdeySampleCms::fixtures/pages/pages.csv']);
        $this->block->install(
            [
                'Magento_PurdeySampleCms::fixtures/blocks/categories_static_blocks.csv',
                'Magento_PurdeySampleCms::fixtures/blocks/categories_static_blocks_giftcard.csv',
                'Magento_PurdeySampleCms::fixtures/blocks/pages_static_blocks.csv',
            ]
        );
    }
}
