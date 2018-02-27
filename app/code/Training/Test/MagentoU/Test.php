<?php
/**
 * Created by PhpStorm.
 * User: sfdev
 * Date: 20.02.18
 * Time: 1:33
 */

namespace Training\Test\MagentoU;


class Test
{
    /**
     * @var \Magento\Catalog\Api\ProductRepositoryInterface
     */
    protected $productRepository;
    /**
     * @var \Magento\Catalog\Model\ProductFactory
     */
    protected $productFactory;
    /**
     * @var \Magento\Checkout\Model\Session
     */
    protected $session;
    /**
     * @var \Magento\Catalog\Model\ProductRepository
     */
    protected $trainingProductRepository;
    /**
     * @var bool
     */
    protected $justAParameter;
    /**
     * @var array
     */
    protected $data;

    public function __construct(
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \Magento\Catalog\Model\ProductFactory $productFactory,
        \Magento\Checkout\Model\Session $session,
        \Magento\Catalog\Model\ProductRepository $trainingProductRepository,
        $justAParameter = false,
        array $data
    ) {

        $this->productRepository = $productRepository;
        $this->productFactory = $productFactory;
        $this->session = $session;
        $this->trainingProductRepository = $trainingProductRepository;
        $this->justAParameter = $justAParameter;
        $this->data = $data;

    }

    public function process() {

        echo var_dump($this->data);
        echo "<br>";
        echo var_dump($this->justAParameter);
    }
}