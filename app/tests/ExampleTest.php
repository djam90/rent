<?php

class ExampleTest extends TestCase {

	public function tearDown()
	{
		Mockery::close();
	}

	
	public function test()
	{
		// Arrange		
		$sentry = Mockery::mock('Sentry');
		Sentry::shouldReceive('getUser')->once()->andReturn($userInst);

		// Act
		$property = new Property();
	}

}