<?php 

class Master extends Controller
{


    public function __construct()
    {
        $this->setRequest();
        return $this->index();
    }

    public function index()
    {

        if($this->getRequest() !== false)
        {

            $data = $this->getRequest();

            if(isset($data->action))
            {
                switch($data->action)
                {
                    case 'Create':
                        $this->createToken();
                    break;
                    case 'Update':
                        $this->updateToken();
                    break;
                    case 'Get':
                        $this->getToken();
                    break;
                    case 'Destroy':
                        $this->destroyToken();
                    break;
                }
            }
        }
    }

    private function createToken()
    {

    }

    private function updateToken()
    {
        
    }

    private function getToken()
    {
        
    }

    private function destroyToken()
    {
        
    }

}