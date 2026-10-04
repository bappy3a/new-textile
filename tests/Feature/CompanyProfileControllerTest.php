<?php

namespace Tests\Feature;

use Tests\TestCase;

class CompanyProfileControllerTest extends TestCase
{
    public function test_download_returns_404_when_no_profile_is_uploaded(): void
    {
        $this->get(route('company-profile.download'))->assertNotFound();
    }
}
