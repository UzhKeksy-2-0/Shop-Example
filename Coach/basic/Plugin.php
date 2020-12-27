<?php
namespace CH\basic;
class Plugin
{
    protected $methods;
    protected $methodsList;
    public function updateMethods($object = null)
    {
        if($object == null){
            $object = $this;
        }
        $classes = get_object_vars($object);
        foreach($classes as $class)
        {
            if(($class == 'methods')||($class == 'methodList'))
            {
                continue;
            }
            $methods = get_class_methods(get_class($class));
            foreach($methods as $method)
            {
                $first = $this->methodsList[$method];
                $first['default'] = $class;
                $first[get_class($class)] = $class;
                $this->methodsList[$method] = $first;
            }
        }
    }
    public function callNotDefaultFunction($className, $function,$arguments)
    {
        $this->methodsList[$function][$className]->$function($arguments);
    }
    public function __call($name, $arguments)
    {
        if($this->methodsList == null){
            $this->updateMethods();
        }
        // var_dump($this->methodsList);
        if(isset($this->methodsList[$name]))
        {
            $this->methodsList[$name]['default']->$name($arguments);
        }
    }
}