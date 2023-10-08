<?php

declare(strict_types=1);

namespace EmbyClient;

class Configuration
{
    public const DEFAULT_BASEPATH = 'http://emby.media/emby';

    private AuthType $type        = AuthType::None;

    public function __construct(
        private ?string $apiKey = null,
        private ?string $username = null,
        private ?string $password = null,
        private ?string $accessToken = null,
        private string $basePath = self::DEFAULT_BASEPATH
    ) {
    }

    public function getType(): AuthType
    {
        AuthType::None === $this->type && $this->determineAuthType();
        return $this->type;
    }

    public function getApiKey(): ?string
    {
        return $this->apiKey;
    }

    public function setType(AuthType $type): static
    {
        $this->type = $type;
        return $this;
    }

    public function setApiKey(string $apiKey): static
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;
        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;
        return $this;
    }

    public function getAccessToken(): ?string
    {
        return $this->accessToken;
    }

    public function setAccessToken(string $accessToken): static
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    public function getBasePath(): string
    {
        return $this->basePath;
    }

    public function setBasePath(string $basePath): static
    {
        $this->basePath = $basePath;
        return $this;
    }

    protected function determineAuthType(): void
    {
        if (isset($this->apiKey))
        {
            $this->type = AuthType::ApiKey;
        } elseif (isset($this->username, $this->password))
        {
            $this->type = AuthType::Basic;
        } elseif (isset($this->accessToken))
        {
            $this->type = AuthType::Token;
        }
    }
}
