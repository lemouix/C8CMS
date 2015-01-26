<?php
class WebsitePagesController extends AppController {
    
    public function index()
    {
        $this->set('WebsitePages',$this->WebsitePage->find('all',array('order' => 'WebsitePage.id')));
    }
    public function add()
    {
        if ($this->request->is(array('post', 'put')))
        {
            $this->request->data['WebsitePage']['slug'] = Inflector::slug(strtolower($this->request->data['WebsitePage']['title']),'-');
            if ($this->WebsitePage->save($this->request->data))
            {
                $this->Session->setFlash("Les informations ont été sauvegardées avec succès.",'flash_success');
                $this->redirect(array('action' => 'edit',$this->WebsitePage->id));
            }
        }
    }
    
    public function edit($id = null)
    {
        if ($id != null)
        {
            if ($this->request->is(array('post', 'put')))
            {
                $this->request->data['WebsitePage']['slug'] = Inflector::slug(strtolower($this->request->data['WebsitePage']['title']),'-');
                if ($this->WebsitePage->save($this->request->data))
                {
                    $this->Session->setFlash("Les informations ont été mises à jour avec succès.",'flash_success');
                    $this->redirect(array('action' => 'edit',$id));
                }
            }
            $this->request->data = $this->WebsitePage->findById($id);
        }
        
    }
    
    public function delete($id = null)
    {
       if ($id != null)
        {
            if ($this->WebsitePage->exists($id))
            {
                if ($this->WebsitePage->delete($id))
                {
                    $this->Session->setFlash("La page demandée a été supprimée avec succès.",'flash_success');
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash("Erreur durant la suppression de la page.",'flash_error');
                    $this->redirect(array('action' => 'index'));
                }
            } else {
                $this->Session->setFlash("La page demandée n'existe pas.",'flash_error');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
    
}
?>