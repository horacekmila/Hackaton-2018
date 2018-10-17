<?php
/**
 * Created by PhpStorm.
 * User: mila
 * Date: 17.10.18
 * Time: 18:32
 */
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class PageoneController
{
    public function index()
    {
        return new Response(
            '<html>
                        <body>
                             <div><a href="http://localhost:8000/pages/number">odkaz 1</a></div>
                           </body>
                     </html>'
        );
    }
}