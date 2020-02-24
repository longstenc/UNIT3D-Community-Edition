<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\RssController
 */
class RssControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function create_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->get(route('rss.create'));

        $response->assertOk();
        $response->assertViewIs('rss.create');
        $response->assertViewHas('torrent_repository');
        $response->assertViewHas('categories');
        $response->assertViewHas('types');
        $response->assertViewHas('user');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function destroy_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $rss = factory(\App\Models\Rss::class)->create();
        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->delete(route('rss.destroy', ['id' => $rss->id]));

        $response->assertRedirect(withSuccess('RSS Feed Deleted!'));
        $this->assertDeleted($rss);

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function edit_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $rss = factory(\App\Models\Rss::class)->create();
        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->get(route('rss.edit', ['id' => $rss->id]));

        $response->assertOk();
        $response->assertViewIs('rss.edit');
        $response->assertViewHas('torrent_repository');
        $response->assertViewHas('categories');
        $response->assertViewHas('types');
        $response->assertViewHas('user');
        $response->assertViewHas('rss');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function index_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->get(route('rss.index'));

        $response->assertOk();
        $response->assertViewIs('rss.index');
        $response->assertViewHas('hash');
        $response->assertViewHas('public_rss');
        $response->assertViewHas('private_rss');
        $response->assertViewHas('user');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function show_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $rss = factory(\App\Models\Rss::class)->create();
        $rss = factory(\App\Models\Rss::class)->create();

        $response = $this->get(route('rss.show.rsskey', ['id' => $rss->id, 'rsskey' => $rss->rsskey]));

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function store_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->post(route('rss.store'), [
            // TODO: send request data
        ]);

        $response->assertRedirect(withErrors($error));

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function update_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $rss = factory(\App\Models\Rss::class)->create();
        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->patch(route('rss.update', ['id' => $rss->id]), [
            // TODO: send request data
        ]);

        $response->assertRedirect(withErrors($error));

        // TODO: perform additional assertions
    }

    // test cases...
}