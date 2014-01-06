<?php

class ActiveButtonTestCase extends PradoGenericSelenium2Test
{
	function test()
	{
		$this->open("active-controls/index.php?page=ActiveButtonTest");
		$this->verifyTextPresent("TActiveButton Functional Test");
		$this->assertText("label1", "Label 1");
		$this->clickOnElement("button2");
		$this->pause(800);
		$this->assertText("label1", "Button 1 was clicked using callback!");
	}
}
