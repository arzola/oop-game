<?php

use PHPUnit\Framework\TestCase;
use App\Ajax;

/**
 * @group 2
 */
class PatternTest extends TestCase
{
    public function test_if_simulated_api_works(): void
    {
        $items = '';
        $ajax = Ajax::create(
            [
                'url' => 'https://dog.ceo/api/breeds/list/all',
                'success' => function ($json) use (&$items) {
                    $items = $json;
                }
            ]
        );
        self::assertInstanceOf(Ajax::class, $ajax);
        self::assertStringStartsWith('{"message":{"affenpinscher":[],"african":[],"airedale":[],"akita":[]', $items);
    }

    /**
     * @expectException \Throwable
     */
    public function test_if_we_cannot_create_an_instance(): void
    {
        $this->expectException(Error::class);
        $ajax = new Ajax([]);
    }

    public function test_if_public_method_get_data_is_avaialable(): void
    {
        $ajax = Ajax::create(
            [
                'url' => 'https://dog.ceo/api/breeds/list/all'
            ]
        );
        $data = $ajax->getData();
        self::assertStringStartsWith('{"message":{"affenpinscher":[],"african":[],"airedale":[],"akita":[]', $data);
    }
}
