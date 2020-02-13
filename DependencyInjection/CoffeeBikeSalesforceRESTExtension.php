<?php
/**
 * PROJECT: CoffeeBikeSalesforceRESTBundle
 *
 * IDE: IntelliJ IDEA
 * User: dambacher
 * Date: 15.02.17
 * Time: 16:12
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\SalesforceRESTBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class CoffeeBikeSalesforceRESTExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        $container->setParameter('coffee_bike_salesforce_rest.username', $config['username']);
        $container->setParameter('coffee_bike_salesforce_rest.password', $config['password']);
        $container->setParameter('coffee_bike_salesforce_rest.token', $config['token']);
        $container->setParameter('coffee_bike_salesforce_rest.client_secret', $config['client_secret']);
        $container->setParameter('coffee_bike_salesforce_rest.client_id', $config['client_id']);
        $container->setParameter('coffee_bike_salesforce_rest.sandbox', $config['sandbox']);
    }
}
