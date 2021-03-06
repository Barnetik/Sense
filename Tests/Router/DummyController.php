<?php
/**
 * Created by Asier Marqués <asiermarques@gmail.com>
 * Date: 10/5/16
 * Time: 1:47
 */

namespace Simettric\Sense\Tests\Router;


use Simettric\Sense\Controller\AbstractController;
use Simettric\Sense\Annotations\Route;

class DummyController extends AbstractController
{

    /**
     * @Route("/{test_route}/{id}",
     *       name="test_route",
     *       requirements={"test_route": "\w+", "id": "\d+"})
     */
    public function fakeAction(){
        return $this->resultResponse("test");
    }

}
