<?php

namespace Skonsoft\Bundle\CvEditorBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class SkonsoftCvEditorExtension extends Extension
{

    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.xml');

        if (isset($config['provider_service_id'])) {
            $container->setParameter("skonsoft_cv_editor.provider.service_id", $config['provider_service_id']);
        }else{ //default is our service
            $container->setParameter("skonsoft_cv_editor.provider.service_id", "skonsoft_cv_editor.textkernel_provider");
        }
    }

}
