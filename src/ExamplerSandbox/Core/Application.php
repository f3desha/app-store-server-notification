<?php

namespace OOP\App\ExamplerSandbox\Core;

class Application
{
    private static ?self $instance = null;

    /**
     * @var array $config
     */
    private array $config;

    private Application $application;

    private function __construct(array $config)
    {
        $this->setConfig($config);
    }

    /**
     * @param array $config
     */
    private function setConfig(array $config): void
    {
        $this->config = $config;
    }

    public static function build(array $config): self
    {
        if (self::$instance === null) {
            self::$instance = new self($config);
        }
        return self::$instance;
    }

    public function run(): void
    {
        $config = $this->getConfig();
        $this->application = match ($config['mode']) {
            WebApplication::MODE => new WebApplication($config)
        };
        $this->application->start();
    }

    /**
     * @return array
     */
    protected function getConfig(): array
    {
        return $this->config;
    }
}
