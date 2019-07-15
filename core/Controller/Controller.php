<?php
/**
 * User: Abdelghafour
 * Date: 24/01/2019
 * Time: 21:55
 * email : goldvision93@gmail.com
 * tele : +212677512753
 */

namespace Core\Controller;

class Controller
{

    protected $viewPath;

    protected $layouts;

    /**
     * @param $view
     * @param array $variables
     */
    public function render($view,$variables = [])
    {

        ob_start();

        extract($variables);

        require ($this->viewPath . str_replace('.','/',$view).'.php');

        $content = ob_get_clean();

        $active = \App\App::getInstance()->setActive();

        require ($this->viewPath . 'layouts/'.$this->layouts.'.php');
    }
}