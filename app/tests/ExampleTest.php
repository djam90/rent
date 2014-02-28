<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$crawler = $this->client->request('GET', '/');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

	public function testPropertyControllerIndex()
	{
		$user = Sentry::findUserById(1);
		Sentry::login($user, false);

		$this->call('GET', 'properties');
		$this->assertEquals($user->id, 1); 
		$this->assertResponseOk();

	}

}