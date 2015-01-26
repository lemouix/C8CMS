<?php
class CompanyWebsitePagesController extends AppController {
    public $uses = array('WebsitePage');
    public function index()
    {
        $slug = $this->request->params['slug'];
        if ($slug != null)
        {

             $WebsitePage = $this->WebsitePage->findBySlug($slug);
            if (!$WebsitePage) {
                throw new NotFoundException("La page que vous demandez n'existe pas");
            }
            $this->set('WebsitePage', $WebsitePage);
        } else {
            throw new NotFoundException("La page que vous demandez n'existe pas");
        }
       
    }
}
?>