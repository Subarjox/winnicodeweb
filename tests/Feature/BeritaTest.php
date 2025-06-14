<?php
namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BeritaTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function halaman_dashboard_dan_beranda_dapat_diakses()
    {
        $this->get('/')->assertStatus(200);
        $this->get('/dashboard')->assertStatus(200);
    }

    /** @test */
    public function halaman_ekslusif_dapat_diakses()
    {
        $this->get('/ekslusif')->assertStatus(200);
    }

    /** @test */
    public function halaman_post_berita_dapat_diakses()
    {
        $this->get('/post/1')->assertStatus(200);
        $this->get('/expost/1')->assertStatus(200);
    }

    /** @test */
    public function user_dapat_mengirim_interaksi_berita()
    {
        $response = $this->post('/berita/interact', [
            'id_berita' => 1,
            'action' => 'like',
        ]);
        $response->assertStatus(302); // Assuming a redirect or validation
    }

    /** @test */
    public function halaman_pencarian_dapat_diakses()
    {
        $this->get('/search')->assertStatus(200);
    }

    /** @test */
    public function halaman_register_dan_login_dapat_diakses()
    {
        $this->get('/register')->assertStatus(200);
        $this->get('/login')->assertStatus(200);
    }

    /** @test */
    public function user_dapat_register_dan_login()
    {
        $this->post('/register', [
            'name' => 'User Test',
            'email' => 'user@example.com',
            'password' => 'password',
        ])->assertStatus(302);

        $this->post('/login', [
            'email' => 'user@example.com',
            'password' => 'password',
        ])->assertStatus(302);
    }

    /** @test */
    public function halaman_jurnalis_terproteksi_oleh_auth()
    {
        $this->get('/jurnalis/dashboard')->assertRedirect('/login');
        $this->get('/jurnalis/tulis')->assertRedirect('/login');
        $this->get('/jurnalis/newslist')->assertRedirect('/login');
    }

    /** @test */
    public function user_yang_login_dapat_akses_halaman_jurnalis()
    {
        $user = User::factory()->create();
        $this->actingAs($user)->get('/jurnalis/dashboard')->assertStatus(200);
        $this->actingAs($user)->get('/jurnalis/tulis')->assertStatus(200);
        $this->actingAs($user)->get('/jurnalis/newslist')->assertStatus(200);
    }

    /** @test */
    public function user_dapat_mengakses_subscribe()
    {
        $this->get('/subscribe')->assertStatus(200);
    }
}
