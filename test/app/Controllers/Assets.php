<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Assets extends BaseController
{
  public function serve()
  {
    throw PageNotFoundException::forPageNotFound();
  }
}
