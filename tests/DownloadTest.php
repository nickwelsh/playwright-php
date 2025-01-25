<?php

namespace PlaywrightPhp\Tests;

use PlaywrightPhp\Playwright;
use PHPUnit\Framework\ExpectationFailedException;
use Nesk\Puphpeteer\Resources\ElementHandle;

class DownloadTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        // Serve the content of the "/resources"-folder to test these.
        $this->serveResources();

        // Launch the browser to run tests on.
        $this->launchBrowser();
    }

    /**
     * Downloads an image and checks string length.
     *
     * @test
     */
    public function download_image()
    {
        // Download the image
        $response = $this->browser
            ->newPage()
            ->goto($this->url . '/puphpeteer-logo.png');

        $base64 = $response->body()->toString('base64');
        $imageString = base64_decode($base64);

        // Get the reference image from resources
        $reference = file_get_contents('tests/resources/puphpeteer-logo.png');

        $this->assertTrue(
            mb_strlen($reference) === mb_strlen($imageString),
            'Image is not the same length after download.'
        );
    }
}
