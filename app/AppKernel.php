<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),

            //FOSUserBundle()
            new FOS\UserBundle\FOSUserBundle(),

            //StofDoctrineExtensionsBundle()
            new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),

            //ManuelTranslationBundle()
            new ManuelAguirre\Bundle\TranslationBundle\ManuelTranslationBundle(),

            //FOSRestBundle()
            new FOS\RestBundle\FOSRestBundle(),

            //KnpMenuBundle()
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),

            //KnpPaginatorBundle()
            new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),

            //NelmioApiDocBundle()
            new Nelmio\ApiDocBundle\NelmioApiDocBundle(),

            //JMSSerializerBundle()
            new JMS\SerializerBundle\JMSSerializerBundle(),

            //FOSJsRoutingBundle()
            new FOS\JsRoutingBundle\FOSJsRoutingBundle(),

            //IvoryCKEditorBundle()
            new Ivory\CKEditorBundle\IvoryCKEditorBundle(),

            //LiuggioExcelBundle()
            new Liuggio\ExcelBundle\LiuggioExcelBundle(),

            //ObHighchartsBundle()
            new Ob\HighchartsBundle\ObHighchartsBundle(),

            //LiipImagineBundle()
            new \Liip\ImagineBundle\LiipImagineBundle(),

            //WhiteOctoberTCPDFBundle()
            new WhiteOctober\TCPDFBundle\WhiteOctoberTCPDFBundle(),

            //GuzzleBundle()
            new EightPoints\Bundle\GuzzleBundle\GuzzleBundle(),

            //AppBundle()
            new AppBundle\AppBundle(),

        );

        if (in_array($this->getEnvironment(), array('dev', 'test'), true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
