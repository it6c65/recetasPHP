<?php

namespace App\Filters;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class LogSession implements FilterInterface
{
    public function before(RequestInterface $request)
    {
    $session = Services::session();
        if ($session->has('logged'))
        {
            if($request->uri->getPath() == '/panel'){
                return redirect()->to('/panel');
            }
        }
        else
        {
            return redirect()->to('/login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response)
    {
    }

}
