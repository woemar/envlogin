<?php

declare(strict_types=1);

namespace Woemar\Envlogin\LoginProvider;

use Psr\Http\Message\ServerRequestInterface;
use TYPO3\CMS\Backend\Authentication\PasswordReset;
use TYPO3\CMS\Backend\Controller\LoginController;
use TYPO3\CMS\Backend\LoginProvider\LoginProviderInterface;
use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\View\ViewInterface;
use TYPO3\CMS\Fluid\View\StandaloneView;

class EnvCredentialsLoginProvider implements LoginProviderInterface
{
    public function render(StandaloneView $view, PageRenderer $pageRenderer, LoginController $loginController): void
    {
        throw new \RuntimeException('Legacy interface implementation. Should not be called', 1724768908);
    }

    public function modifyView(ServerRequestInterface $request, ViewInterface $view): string
    {
        $parsedBody = $request->getParsedBody();

        $presetUsername = (is_array($parsedBody) ? $parsedBody['u'] ?? null : null)
            ?? $request->getQueryParams()['u']
            ?? $this->getEnvValue('ENVLOGIN_USERNAME');
        $presetPassword = (is_array($parsedBody) ? $parsedBody['p'] ?? null : null)
            ?? $request->getQueryParams()['p']
            ?? $this->getEnvValue('ENVLOGIN_PASSWORD');

        $view->assignMultiple([
            'presetUsername' => $presetUsername,
            'presetPassword' => $presetPassword,
            'enablePasswordReset' => GeneralUtility::makeInstance(PasswordReset::class)->isEnabled(),
        ]);

        return 'Login/UserPassLoginForm';
    }

    private function getEnvValue(string $key): string
    {
        return getenv($key) ?: '';
    }
}
