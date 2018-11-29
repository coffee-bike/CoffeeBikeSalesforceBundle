<?php

namespace CoffeeBike\SalesforceBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $builder = new TreeBuilder();

        $rootNode = $builder->root('coffeebike_salesforce');
        $rootNode->children()
            ->arrayNode('auth')
                ->isRequired()
                ->children()
                    ->scalarNode('username')->isRequired()->end()
                    ->scalarNode('password')->isRequired()->end()
                    ->scalarNode('security_token')->isRequired()->end()
                    ->scalarNode('client_id')->isRequired()->end()
                    ->scalarNode('client_secret')->isRequired()->end()
                ->end()
            ->end()
            ->scalarNode('api_version')->isRequired()->end()
            ->booleanNode('sandbox_mode')->defaultFalse()->end()
        ;

        return $builder;
    }
}
