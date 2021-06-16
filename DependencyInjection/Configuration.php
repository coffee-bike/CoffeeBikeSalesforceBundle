<?php
/**
 * PROJECT: CoffeeBikeSalesforceRESTBundle
 *
 * IDE: IntelliJ IDEA
 * User: dambacher
 * Date: 15.02.17
 * Time: 16:14
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\SalesforceRESTBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('coffee_bike_salesforce_rest');
        $rootNode
            ->children()
                ->scalarNode('username')->isRequired()->end()
                ->scalarNode('password')->isRequired()->end()
                ->scalarNode('token')->isRequired()->end()
                ->scalarNode('client_secret')->isRequired()->end()
                ->scalarNode('client_id')->isRequired()->end()
                ->scalarNode('sandbox')->defaultValue(0)->end()
                ->scalarNode('logger')->defaultValue(NULL)->end()
            ->end()
            ->end();

        return $treeBuilder;
    }
}