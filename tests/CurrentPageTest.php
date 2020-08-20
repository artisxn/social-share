<?php

namespace codicastudio\Share\Test;

use codicastudio\Share\ShareFacade;

class CurrentPageTest extends TestCase
{
    /**
     * @test
     */
    public function it_can_use_the_url_of_the_current_request()
    {
        $result = ShareFacade::currentPage()->facebook();
        $expected = '<div id="social-links"><ul><li><a href="https://www.facebook.com/sharer/sharer.php?u=http://mysite.com/" class="social-button " id="" title=""><span class="fa fa-facebook-official"></span></a></li></ul></div>';

        $this->assertEquals($expected, $result);
    }

    /**
     * @test
     */
    public function it_can_use_the_url_of_the_current_request_with_fa5()
    {
        config(['social-share.fontAwesomeVersion' => 5]);
        $result = ShareFacade::currentPage()->facebook();
        $expected = '<div id="social-links"><ul><li><a href="https://www.facebook.com/sharer/sharer.php?u=http://mysite.com/" class="social-button " id="" title=""><span class="fab fa-facebook-square"></span></a></li></ul></div>';

        $this->assertEquals($expected, $result);
    }
}
