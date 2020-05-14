<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Company\Test\Unit\Controller\Account;

/**
 * Class CreateTest
 */
class CreateTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Magento\Framework\Controller\ResultFactory|\PHPUnit\Framework\MockObject_MockObject
     */
    private $resultFactory;

    /**
     * @var \Magento\Company\Controller\Account\Create
     */
    private $create;

    /**
     * @var \Magento\Customer\Model\Session|\PHPUnit_Framework_MockObject_MockObject
     */
    private $customerSession;

    /**
     * Set up
     */
    protected function setUp()
    {
        $this->resultFactory = $this->createMock(\Magento\Framework\Controller\ResultFactory::class);
        $this->customerSession = $this->createMock(\Magento\Customer\Model\Session::class);
        $objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);
        $this->create = $objectManager->getObject(
            \Magento\Company\Controller\Account\Create::class,
            [
                'resultFactory' => $this->resultFactory,
                'customerSession' => $this->customerSession
            ]
        );
    }

    /**
     * Test for method execute
     */
    public function testExecuteLoggedIn()
    {
        $isLoggedIn = true;
        $this->customerSession->expects($this->once())
            ->method('isLoggedIn')
            ->willReturn($isLoggedIn);

        $resultRedirect = $this->getMockBuilder(\Magento\Backend\Model\View\Result\Redirect::class)
            ->disableOriginalConstructor()
            ->setMethods(['setPath'])
            ->getMock();

        $resultRedirect->expects($this->once())->method('setPath')->willReturnSelf();
        $this->resultFactory->expects($this->once())->method('create')->willReturn($resultRedirect);

        $this->assertEquals($resultRedirect, $this->create->execute());
    }

    /**
     * Test for method execute
     */
    public function testExecuteNotLoggedIn()
    {
        $isLoggedIn = false;
        $this->customerSession->expects($this->once())
            ->method('isLoggedIn')
            ->willReturn($isLoggedIn);

        $resultPage = $this->createPartialMock(
            \Magento\Framework\View\Result\Page::class,
            ['getConfig']
        );

        $title = $this->createMock(\Magento\Framework\View\Page\Title::class);
        $config = $this->createMock(\Magento\Framework\View\Page\Config::class);
        $config->expects($this->once())->method('getTitle')->willReturn($title);
        $resultPage->expects($this->once())->method('getConfig')->willReturn($config);
        $this->resultFactory->expects($this->once())->method('create')->willReturn($resultPage);

        $this->assertEquals($resultPage, $this->create->execute());
    }
}
