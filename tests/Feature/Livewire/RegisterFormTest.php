<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\RegisterForm;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class RegisterFormTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(RegisterForm::class);

        $component->assertStatus(200);
    }
}
