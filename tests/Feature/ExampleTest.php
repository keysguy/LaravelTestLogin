<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testUrlPageTest()
    {
        $response = $this->get('/test/lalala');

        $response->assertStatus(200)->assertSeeText("lalala");;
        $response->dumpHeaders();
        $response->dumpSession();
        $response->dump();
    }

    /**
     * 测试命令行
     *
     * @return void
     */
    public function testConsoleCommand()
    {
        $this->artisan('question')
            ->expectsQuestion('What is your name?', 'Taylor Otwell')
            ->expectsQuestion('Which language do you program in?', 'PHP')
            ->expectsOutput('Your name is Taylor Otwell and you program in PHP.')
            ->assertExitCode(0);
    }
}
