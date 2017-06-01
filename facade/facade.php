<?php  

class Facade {
    public function __construct($handle)
    {
        $this->handle = $handle;
    }
    public function run()
    {
        switch ($this->handle) {
            case 'publish':
                $publish = new Publish();
                return $publish->publish();
                break;
            case 'reserve':
                $reserve = new Reserve();
                return $reserve->reserve();
                break;
            case 'guide':
                $guide = new Guide();
                return $guide->guide();
                break;
        }
    }
}




?>
