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
                        echo json_encode($this->createToken());
                    break;
                    case 'Update':
                        $this->updateToken();
                    break;
                    case 'Get':
                        $this->getToken();
                    break;
                    case 'Reset Password':
                        echo json_encode($this->getcheckToken());
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
        $data = new stdClass();
        $data->api = 'database';
        $data->connection = 'CORE';
        $data->procedure = __FUNCTION__;
        $data->params->UserID = $this->getRequest()->UserId;
        $data->params->projectId = $this->getRequest()->projectId;
        $res = json_decode(API_model::doAPI($data));
        return $res[0];
    }

    private function updateToken()
    {
        
    }

    private function getToken()
    {
        
    }

    private function getcheckToken()
    {
        $data = new stdClass();
        $data->api = 'database';
        $data->connection = 'CORE';
        $data->procedure = __FUNCTION__;
        $data->params->action = $this->getRequest()->action;
        $data->params->token = $this->getRequest()->token;
        $data->params->projectId = $this->getRequest()->projectId;
        $res = json_decode(API_model::doAPI($data));
        return $res[0];   
    }

    private function destroyToken()
    {
        
    }

}