<?php
defined("ABSPATH") || exit();

class SuperbInfoContentConfig
{
    const THEME_LINK = 'https://superbthemes.com/minimalistblogger/';
    const DEMO_LINK = 'https://superbthemes.com/demo/minimalistblogger/';

    private $FEATURES = array();

    public function __construct()
    {
        $this->AddFeature(__("Customize Header Logo, Text & Background Color", "minimalistblogger"), "purple-paint-brush.svg");
        $this->AddFeature(__("Translation Ready", "minimalistblogger"), "purple-article-medium.svg");
        $this->AddFeature(__("Fully SEO Optimized", "minimalistblogger"), "purple-gauge.svg");
        $this->AddFeature(__("Customize All Fonts", "minimalistblogger"), "purple-article-medium.svg");
        $this->AddFeature(__("Customize All Colors", "minimalistblogger"), "purple-paint-brush.svg");
        $this->AddFeature(__("Importable Demo Content", "minimalistblogger"), "purple-images.svg");
        $this->AddFeature(__("Only Show Header Image on Front Page", "minimalistblogger"), "purple-image.svg");
        $this->AddFeature(__("Custom Text on Header Image", "minimalistblogger"), "purple-image.svg");
        $this->AddFeature(__("Only Show Upper Widgets on Front Page", "minimalistblogger"), "purple-squares-four.svg");
        $this->AddFeature(__("Replace Copyright Text", "minimalistblogger"), "purple-copyright.svg");
        $this->AddFeature(__("Full-Width Page Template", "minimalistblogger"), "purple-frame-corners.svg");
        $this->AddFeature(__("Sticky Header", "minimalistblogger"), "purple-browser.svg");
        $this->AddFeature(__("Elementor Compatible", "minimalistblogger"), "purple-elementor-logo.svg");
        $this->AddFeature(__("Access All Child Themes", "minimalistblogger"), "purple-images.svg");
        $this->AddFeature(__("Customer Support and Documentation", "minimalistblogger"), "purple-files.svg");
        $this->AddFeature(__("Show Logo, Site Title and Description At The Same Time", "minimalistblogger"), "purple-slideshow-vertical.svg");
        $this->AddFeature(__("Show Post Categories on Post Feed", "minimalistblogger"), "purple-squares-four.svg");
        $this->AddFeature(__("Show Post Categories on Posts & Pages", "minimalistblogger"), "purple-article-medium.svg");
        $this->AddFeature(__("WooCommerce Cart in Navigation", "minimalistblogger"), "purple-shopping-cart.svg");
        $this->AddFeature(__("Pagespeed Plugin", "minimalistblogger"), "purple-gauge.svg");
        $this->AddFeature(__("Multiple Website Support", "minimalistblogger"), "purple-files.svg");
        $this->AddFeature(__("Recent Posts Widget", "minimalistblogger"), "purple-squares-four.svg");
        $this->AddFeature(__("Customize Header Image Height", "minimalistblogger"), "purple-arrows-vertical.svg");
        $this->AddFeature(__("Logo Container Background Image", "minimalistblogger"), "purple-image.svg");
        $this->AddFeature(__("Remove 'Tag' from Tag Page Title", "minimalistblogger"), "purple-article-medium.svg");
        $this->AddFeature(__("Remove 'Author' from Author Page Title", "minimalistblogger"), "purple-article-medium.svg");
        $this->AddFeature(__("Remove 'Category' from Category Page Title", "minimalistblogger"), "purple-article-medium.svg");
    }

    private function AddFeature($title, $icon)
    {
        $this->FEATURES[] = array(
            "title" => $title,
            "icon" => $icon
        );
    }

    public function GetFeatures()
    {
        return $this->FEATURES;
    }
}
