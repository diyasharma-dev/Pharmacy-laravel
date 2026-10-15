<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->get('/about');
        $response->assertStatus(200);

        $response = $this->get('/services');
        $response->assertStatus(200);

        $response = $this->get('/vaccinations');
        $response->assertStatus(200);

        $response = $this->get('/transfer');
        $response->assertStatus(200);

        $response = $this->get('/contact');
        $response->assertStatus(200);
    }

    public function test_prescription_transfer_submission(): void
    {
        $response = $this->post('/transfer', [
            'first_name' => 'Maria',
            'last_name' => 'Rodriguez',
            'dob' => '1985-05-15',
            'phone' => '(718) 555-0123',
            'email' => 'maria@example.com',
            'address' => '1020 Ogden Ave, Apt 4B',
            'current_pharmacy_name' => 'Walgreens Bronx',
            'current_pharmacy_phone' => '(718) 555-9999',
            'medications_or_rx_numbers' => 'Transfer all my active maintenance medications',
            'doctor_name' => 'Dr. Smith',
            'insurance_name' => 'Healthfirst Medicaid',
            'special_notes' => 'Please package into Dis-Pill blister cards and deliver to my apartment',
        ]);

        $response->assertRedirect('/transfer');
        $response->assertSessionHas('success');
    }

    public function test_contact_inquiry_submission(): void
    {
        $response = $this->post('/contact', [
            'name' => 'Carlos Gomez',
            'phone' => '(718) 555-4321',
            'email' => 'carlos@example.com',
            'subject' => 'Walk-In Vaccination Inquiry',
            'message' => 'Do you have the senior high-dose flu shot and RSV vaccine in stock today?',
        ]);

        $response->assertRedirect('/contact');
        $response->assertSessionHas('success');
    }
}
