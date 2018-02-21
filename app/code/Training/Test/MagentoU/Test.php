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
    public function __construct(
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \Magento\Catalog\Model\ProductFactory $productFactory,
        \Magento\Checkout\Model\Session $session,
      //  \Training\Test\Api\ProductRepositoryInterface $trainingProductRepository, //return error
        \Magento\Catalog\Model\ProductRepository $trainingProductRepository,
        $justAParameter = false,
        array $data
    ) {

        $this->_productRepository = $productRepository;
        $this->_productFactory = $productFactory;
        $this->_session = $session;
        $this->_trainingProductRepository = $trainingProductRepository;
        $this->_justAParameter = $justAParameter;
        $this->_data = $data;

    }

    public function process() {

        echo var_dump($this->_data);
        echo "<br>";
        echo var_dump($this->_justAParameter);
       // var_dump($this->_data);
       // var_dump($this->_justAParameter);

    }
}