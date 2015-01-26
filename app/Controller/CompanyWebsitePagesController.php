<?php
class WebsitePagesController extends AppController {
    
    public function index($page_id = null)
    {
        $WebsitePage = $this->WebsitePage->findById($page_id);
        if (!$WebsitePage) {
            throw new NotFoundException("La page que vous demandez n'existe pas");
        }
        $this->set('WebsitePage', $WebsitePage);
    }
}
?>