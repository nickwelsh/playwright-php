<?php

namespace PlaywrightPhp\Resources;

use Nesk\Rialto\Data\BasicResource;

/**
 * @method \PlaywrightPhp\Resources\APIResponse delete(string $url, array $options = [])
 * @method-extended \PlaywrightPhp\Resources\APIResponse delete(string $url, array{ $data: string|mixed|int|float|string|bool|null|array, $failOnStatusCode: bool, $form: array{  }|mixed, $headers: array{  }, $ignoreHTTPSErrors: bool, $maxRedirects: float, $maxRetries: float, $multipart: mixed|array{  }, $params: array{  }|mixed|string, $timeout: float } $options = null)
 * @method void dispose(array $options = [])
 * @method-extended void dispose(array{ $reason: string } $options = null)
 * @method \PlaywrightPhp\Resources\APIResponse fetch(string|\PlaywrightPhp\Resources\Request $urlOrRequest, array $options = [])
 * @method-extended \PlaywrightPhp\Resources\APIResponse fetch(string|\PlaywrightPhp\Resources\Request $urlOrRequest, array{ $data: string|mixed|int|float|string|bool|null|array, $failOnStatusCode: bool, $form: array{  }|mixed, $headers: array{  }, $ignoreHTTPSErrors: bool, $maxRedirects: float, $maxRetries: float, $method: string, $multipart: mixed|array{  }, $params: array{  }|mixed|string, $timeout: float } $options = null)
 * @method \PlaywrightPhp\Resources\APIResponse get(string $url, array $options = [])
 * @method-extended \PlaywrightPhp\Resources\APIResponse get(string $url, array{ $data: string|mixed|int|float|string|bool|null|array, $failOnStatusCode: bool, $form: array{  }|mixed, $headers: array{  }, $ignoreHTTPSErrors: bool, $maxRedirects: float, $maxRetries: float, $multipart: mixed|array{  }, $params: array{  }|mixed|string, $timeout: float } $options = null)
 * @method \PlaywrightPhp\Resources\APIResponse head(string $url, array $options = [])
 * @method-extended \PlaywrightPhp\Resources\APIResponse head(string $url, array{ $data: string|mixed|int|float|string|bool|null|array, $failOnStatusCode: bool, $form: array{  }|mixed, $headers: array{  }, $ignoreHTTPSErrors: bool, $maxRedirects: float, $maxRetries: float, $multipart: mixed|array{  }, $params: array{  }|mixed|string, $timeout: float } $options = null)
 * @method \PlaywrightPhp\Resources\APIResponse patch(string $url, array $options = [])
 * @method-extended \PlaywrightPhp\Resources\APIResponse patch(string $url, array{ $data: string|mixed|int|float|string|bool|null|array, $failOnStatusCode: bool, $form: array{  }|mixed, $headers: array{  }, $ignoreHTTPSErrors: bool, $maxRedirects: float, $maxRetries: float, $multipart: mixed|array{  }, $params: array{  }|mixed|string, $timeout: float } $options = null)
 * @method \PlaywrightPhp\Resources\APIResponse post(string $url, array $options = [])
 * @method-extended \PlaywrightPhp\Resources\APIResponse post(string $url, array{ $data: string|mixed|int|float|string|bool|null|array, $failOnStatusCode: bool, $form: array{  }|mixed, $headers: array{  }, $ignoreHTTPSErrors: bool, $maxRedirects: float, $maxRetries: float, $multipart: mixed|array{  }, $params: array{  }|mixed|string, $timeout: float } $options = null)
 * @method \PlaywrightPhp\Resources\APIResponse put(string $url, array $options = [])
 * @method-extended \PlaywrightPhp\Resources\APIResponse put(string $url, array{ $data: string|mixed|int|float|string|bool|null|array, $failOnStatusCode: bool, $form: array{  }|mixed, $headers: array{  }, $ignoreHTTPSErrors: bool, $maxRedirects: float, $maxRetries: float, $multipart: mixed|array{  }, $params: array{  }|mixed|string, $timeout: float } $options = null)
 * @method array storageState(array $options = [])
 * @method-extended array{ $cookies: mixed, $origins: mixed } storageState(array{ $path: string } $options = null)
 */
class APIRequestContext extends BasicResource
{
}
